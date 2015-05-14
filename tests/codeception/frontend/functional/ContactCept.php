<?php
use tests\codeception\frontend\FunctionalTester;
use tests\codeception\frontend\_pages\ContactPage;

/* @var $scenario Codeception\Scenario */

$I = new FunctionalTester($scenario);
$I->wantTo('ensure that contact works');

$contactPage = ContactPage::openBy($I);

$I->see('Contact', 'h1');

$I->amGoingTo('submit contact form with no data');
$contactPage->submit([]);
$I->expectTo('see validations errors');
$I->see('Contact', 'h1');
$I->see('Името не може да бъде празно', '.help-block');
$I->see('Email не може да бъде празен', '.help-block');
$I->see('Темата не може да бъде празна', '.help-block');
$I->see('Съобщението не може да бъде празно', '.help-block');
$I->see('Въведения код е грешен', '.help-block');

$I->amGoingTo('submit contact form with not correct email');
$contactPage->submit([
    'name' => 'tester',
    'email' => 'tester.email',
    'subject' => 'test subject',
    'body' => 'test content',
    'verifyCode' => 'testme',
]);
$I->expectTo('see that email adress is wrong');
$I->dontSee('Името не може да бъде празно', '.help-block');
$I->see('Email е невалиден.', '.help-block');
$I->dontSee('Темата не може да бъде празна', '.help-block');
$I->dontSee('Съобщението не може да бъде празно', '.help-block');
$I->dontSee('Въведения код е грешен', '.help-block');

$I->amGoingTo('submit contact form with correct data');
$contactPage->submit([
    'name' => 'tester',
    'email' => 'tester@example.com',
    'subject' => 'test subject',
    'body' => 'test content',
    'verifyCode' => 'testme',
]);
$I->see('Благодарим Ви, че се свързахте с нас. Ще Ви изпратим отговор възможно най-скоро.');

<?php
use tests\codeception\frontend\AcceptanceTester;
use tests\codeception\frontend\_pages\ContactPage;

/* @var $scenario Codeception\Scenario */

$I = new AcceptanceTester($scenario);
$I->wantTo('ensure that contact works');

$contactPage = ContactPage::openBy($I);

$I->see('Contact', 'h1');

$I->amGoingTo('submit contact form with no data');
$contactPage->submit([]);
if (method_exists($I, 'wait')) {
    $I->wait(3); // only for selenium
}
$I->expectTo('see validations errors');
$I->see('Contact', 'h1');
$I->see('Полето за името не може да бъде празно', '.help-block');
$I->see('Email полето не може да бъде празно', '.help-block');
$I->see('Полето не може да бъде празно', '.help-block');
$I->see('Съобщението не може да бъде празно', '.help-block');
$I->see('Неправилно въведен код', '.help-block');

$I->amGoingTo('submit contact form with not correct email');
$contactPage->submit([
    'name' => 'tester',
    'email' => 'tester.email',
    'subject' => 'test subject',
    'body' => 'test content',
    'verifyCode' => 'testme',
]);
if (method_exists($I, 'wait')) {
    $I->wait(3); // only for selenium
}
$I->expectTo('see that email adress is wrong');
$I->dontSee('Полето за името не може да бъде празно', '.help-block');
$I->see('Email полето не може да бъде празно.', '.help-block');
$I->dontSee('Полето не може да бъде празно', '.help-block');
$I->dontSee('Съобщението не може да бъде празно', '.help-block');
$I->dontSee('Неправилно въведен код', '.help-block');

$I->amGoingTo('submit contact form with correct data');
$contactPage->submit([
    'name' => 'tester',
    'email' => 'tester@example.com',
    'subject' => 'test subject',
    'body' => 'test content',
    'verifyCode' => 'testme',
]);
if (method_exists($I, 'wait')) {
    $I->wait(3); // only for selenium
}
$I->see('Благодарим Ви, че се свързахте с нас. Ще Ви изпратим отговор възможно най-скоро.');

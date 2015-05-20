<?php
namespace common\models;

use common\models\User;
use yii\base\Model;
use Yii;

/**
 * Signup form
 */
class SignupForm extends Model
{
    public $username;
    public $email;
    public $password;
    public $password_repeat;
    public $type;
    public $showrooms;
    public $parent;

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            ['username', 'filter', 'filter' => 'trim'],
            ['username', 'required'],
            ['username', 'unique', 'targetClass' => '\common\models\User', 'message' => 'This username has already been taken.'],
            ['username', 'string', 'min' => 2, 'max' => 255],

            ['email', 'filter', 'filter' => 'trim'],
            ['email', 'required'],
            ['email', 'email'],
            ['email', 'unique', 'targetClass' => '\common\models\User', 'message' => 'This email address has already been taken.'],

            [['password', 'password_repeat'], 'required'],
            [['password', 'password_repeat'], 'string', 'min' => 6],
            ['password_repeat', 'compare', 'compareAttribute' => 'password'],
            [['password_repeat', 'showrooms'], 'safe'],
        ];
    }
    
    public function attributeLabels()
    {
        return [
            'username' => 'Потребителско име',
            'password' => 'Парола',
            'email' => 'Email',
            'password_repeat' => 'Повтори паролата',
        ];
    }

    /**
     * Signs user up.
     *
     * @return User|null the saved model or null if saving fails
     */
    public function signup()
    {
        if ($this->validate()) {
            $user = new User();
            $user->username = $this->username;
            $user->email = $this->email;
            $user->setPassword($this->password);
            $user->generateAuthKey();
            $user->type = $this->type;
            $user->parent = @$this->parent;
            
            if ($user->save()){
                if ($this->type == USER::TYPE_OWNER) {
                    $showroom = new Showroom();
                    $showroom->sh_name = 'Моят автосалон';
                    $showroom->sh_address = 'София - този адрес трябва да бъде променен !';
                    if($showroom->save()){
                        $user_showroom = new UserShowroom;
                        $user_showroom->id_user = $user->id;
                        $user_showroom->id_showroom = $showroom->sh_id;
                        $user_showroom->save();
                    }
                }elseif($this->type == USER::TYPE_USER && !empty($this->showrooms)){
                    foreach ($this->showrooms as $sh_id) {
                        $user_showroom = new UserShowroom;
                        $user_showroom->id_user = $user->id;
                        $user_showroom->id_showroom = $sh_id;
                        $user_showroom->save();
                    }
                    
                }
            }
            return $user;
        }

        return null;
    }
}

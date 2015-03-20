<?php
/**
 * Created by PhpStorm.
 * User: dima
 * Date: 12.03.15
 * Time: 17:26
 */

namespace classes;


class User {

    /**
     * ид юзера будет использоваться для определения статистики посещений
     * @var
     */
    private $id;

    /**
     * почта будет использоваться для входа и рассылки
     * @var
     */
    private $email;

    /**
     * соль
     * @var string
     */
    private $sold = "It's_My_bisnes";


    function __construct()
    {

    }

    /**
     * Авторизация
     * @param $email
     * @param $pass
     */
    static function AuthUser($email, $pass)
    {

    }

    /**
     * регистрация
     * @param $params
     */
    static function RegUser($params)
    {
        $check = User::ValidParam($params);

        if($check == "GO"){
            //записываем юзвера в базу


        }else{
            return $check;
        }

    }

    /**
     * @param $params
     * @return array|string
     */
    static function ValidParam($params)
    {

        if($params['email'])
        {

        }else{
            return array( 'param' => 'email', 'message' => 'email не введен' );
        }

        if($params['pass'])
        {

        }else{
            return array( 'param' => 'pass', 'message' => 'пароль не введен' );
        }

        if($params['web'])
        {

        }else{
            return array( 'param' => 'web', 'message' => 'web-адресс не введен' );
        }

        if($params['type'])
        {

        }else{
            return array( 'param' => 'type', 'message' => 'web-адресс не введен' );
        }

        return "GO";

    }

    static function ValidEmail()
    {

    }

    static function ValidPassReg()
    {

    }

    static function ValidWeb()
    {

    }

    static function ValidType()
    {
        
    }
} 
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

    }
} 
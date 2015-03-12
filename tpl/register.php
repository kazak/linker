<?php
/**
 * Created by PhpStorm.
 * User: dima
 * Date: 12.03.15
 * Time: 14:17
 */
?>
<div id="registing">
    <div class="left_reg reg">
        <h1>Вход</h1>
        <form action="module/register.php">
            <label for="email">Email</label>
            </br>
            <input type="email" name="email">
            </br>
            <label for="pass">Пароль</label>
            </br>
            <input type="password" name="pass">
            <input type="hidden" name="control" value="auth">
        </form>
    </div>

    <div class="right_reg reg">
        <h1>Регистрация</h1>
        <form action="module/register.php">
            <label for="email">Email</label>
            </br>
            <input type="email" name="email">
            </br>
            <label for="pass">Пароль</label>
            </br>
            <input type="password" name="pass">
            </br>
            <input type="url" name="http">
            </br>
            <label for="type_site">Тип вашего ресурса</label>
            </br>
            <select name="type_site">
                <option value="0" selected></option>
                <option value="1">Игры</option>
                <option value="2">Информационный блог</option>
                <option value="3">Портал по тематикам</option>
                <option value="4">Услуги доставки</option>
                <option value="5">Услуги строительства</option>
                <option value="6">Услуги юридические</option>
                <option value="7">Услуги бытовые</option>
                <option value="8">Магазин одежды</option>
                <option value="9">Магазин техники</option>
                <option value="10">Магазин бижутерии</option>
                <option value="11">Магазин продуктов питания</option>
                <option value="12">Магазин спортивного снаряжения</option>
                <option value="13">Магазин зоотоваров</option>
                <option value="14">Магазин другой</option>
            </select>
            <input type="hidden" name="control" value="reg">
        </form>
    </div>
</div>

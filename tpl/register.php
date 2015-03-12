<?php
/**
 * Created by PhpStorm.
 * User: dima
 * Date: 12.03.15
 * Time: 14:17
 */
?>
<div class="left_reg">
    <h1>Вход</h1>
    <form action="module/register.php">
        <input type="email" name="email">
        <input type="password" name="pass">
        <input type="hidden" name="control" value="auth">
    </form>
</div>
<div class="right_reg">
    <h1>Регистрация</h1>
    <form action="module/register.php">
        <input type="email" name="email">
        <input type="password" name="pass">
        <input type="text" name="http">
        <select name="type_site">
            <option value="1">Игры</option>
            <option value="1">Информационный блог</option>
            <option value="1">Портал по тематикам</option>
            <option value="1">Услуги доставки</option>
            <option value="1">Услуги строительства</option>
            <option value="1">Услуги юридические</option>
            <option value="1">Услуги бытовые</option>
            <option value="1">Магазин одежды</option>
            <option value="1">Магазин техники</option>
            <option value="1">Магазин бижутерии</option>
            <option value="1">Магазин продуктов питания</option>
            <option value="1">Магазин спортивного снаряжения</option>
            <option value="1">Магазин зоотоваров</option>
            <option value="1">Магазин другой</option>
        </select>
        <input type="hidden" name="control" value="reg">
    </form>
</div>
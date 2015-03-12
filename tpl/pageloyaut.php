<?php
/**
 * Created by PhpStorm.
 * User: dima
 * Date: 12.03.15
 * Time: 14:19
 */
?>
<!DOCTYPE html>
<html>
<head>
    <?
    include_once("tpl/head.php");
    ?>
</head>
<body>

<div id="index">

    <?
    include_once("tpl/menu/top_nav.php");
    ?>

    <section id="header" class="section_show">
        <!-- bxslider -->
        <?
        include_once("tpl/components/index_slider.php");
        ?>

    </section>

    <section id="top_info" class="section_hide">

        <?
        include_once("tpl/top_info.php");
        ?>

    </section>
    <!--
    <section id="rules" class="section_hide">

    </section>
    -->
    <section id="register" class="section_hide">

        <?
        include_once("tpl/register.php");
        ?>

    </section>
    <!--
    <section id="partners" class="section_hide">

    </section>

    <section id="contact" class="section_hide">

    </section>
    -->

</div>

<div id="user">

</div>

<?
 include_once("tpl/footer.php");
?>

<!-- footer script -->
<script type="text/javascript">
    $(document).ready(function(){
        $('.bxslider').bxSlider({
            adaptiveHeight: true,
            mode: 'fade',
            auto: true,
            slideWidth: 900,
            autoControls: true
        });
    });
</script>
</body>
</html>
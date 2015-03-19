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
    <?php
    include_once("tpl/head.php");
    ?>
</head>
<body>

<div id="index">

    <?php
    include_once("tpl/menu/top_nav.php");
    ?>

    <section id="header" class="section_show">
        <!-- bxslider -->
        <?php
        include_once("tpl/components/index_slider.php");
        ?>

    </section>


    <div id="top_info">
        <?php
        include_once("tpl/top_info.php");
        ?>
    </div>



    <!--
    <section id="rules" class="section_hide">

    </section>
    -->
    <section id="register" class="section_hide">

        <?php
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

<?php
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
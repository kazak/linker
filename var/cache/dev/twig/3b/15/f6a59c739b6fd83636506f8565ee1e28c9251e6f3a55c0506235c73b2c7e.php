<?php

/* SonataUserBundle::layout.html.twig */
class __TwigTemplate_3b15f6a59c739b6fd83636506f8565ee1e28c9251e6f3a55c0506235c73b2c7e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<div>
    ";
        // line 2
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 4
        echo "</div>";
    }

    // line 2
    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 3
        echo "    ";
    }

    public function getTemplateName()
    {
        return "SonataUserBundle::layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  32 => 3,  29 => 2,  25 => 4,  23 => 2,  20 => 1,  136 => 81,  134 => 80,  122 => 71,  110 => 64,  99 => 56,  85 => 45,  75 => 38,  69 => 35,  62 => 31,  57 => 29,  54 => 28,  48 => 26,  46 => 25,  38 => 20,  31 => 15,  28 => 14,);
    }
}

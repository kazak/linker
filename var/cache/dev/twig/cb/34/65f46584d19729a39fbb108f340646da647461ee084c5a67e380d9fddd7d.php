<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_cb3465f46584d19729a39fbb108f340646da647461ee084c5a67e380d9fddd7d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("FOSUserBundle::layout.html.twig");

        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 4
        $this->env->loadTemplate("FOSUserBundle:Registration:register_content.html.twig")->display($context);
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  32 => 3,  29 => 2,  25 => 4,  23 => 2,  20 => 1,  136 => 81,  134 => 80,  122 => 71,  110 => 64,  99 => 56,  85 => 45,  75 => 38,  69 => 35,  62 => 31,  57 => 29,  54 => 28,  48 => 26,  46 => 25,  38 => 20,  31 => 4,  28 => 3,);
    }
}

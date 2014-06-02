<?php

/* SonataBlockBundle:Block:block_core_menu.html.twig */
class __TwigTemplate_8642fe2c8bf35af3a19b7e9f72f0dec314f88e02bbf7b0c53609f1a5b7902abd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'block' => array($this, 'block_block'),
        );
    }

    protected function doGetParent(array $context)
    {
        return $this->env->resolveTemplate($this->getAttribute($this->getAttribute((isset($context["sonata_block"]) ? $context["sonata_block"] : $this->getContext($context, "sonata_block")), "templates"), "block_base"));
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 14
    public function block_block($context, array $blocks = array())
    {
        // line 15
        echo "    ";
        echo $this->env->getExtension('knp_menu')->render((isset($context["menu"]) ? $context["menu"] : $this->getContext($context, "menu")), (isset($context["menu_options"]) ? $context["menu_options"] : $this->getContext($context, "menu_options")));
        echo "
";
    }

    public function getTemplateName()
    {
        return "SonataBlockBundle:Block:block_core_menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 15,  91 => 27,  88 => 26,  82 => 21,  75 => 17,  72 => 16,  69 => 15,  66 => 14,  63 => 13,  60 => 12,  51 => 34,  48 => 33,  46 => 32,  41 => 29,  39 => 26,  26 => 14,  23 => 11,  154 => 49,  148 => 48,  142 => 46,  139 => 45,  135 => 44,  127 => 43,  124 => 42,  120 => 40,  114 => 39,  108 => 37,  105 => 36,  101 => 35,  98 => 34,  96 => 33,  92 => 31,  86 => 30,  80 => 28,  77 => 27,  73 => 26,  65 => 25,  62 => 24,  56 => 23,  53 => 35,  50 => 21,  47 => 20,  42 => 19,  40 => 18,  36 => 16,  31 => 21,  28 => 20,);
    }
}

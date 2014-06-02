<?php

/* SonataBlockBundle:Block:block_base.html.twig */
class __TwigTemplate_f3f0e4de5fe347a27ffc7be0c233b32be1afbbc7c2f7720eedf1c532d6143a95 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'block' => array($this, 'block_block'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 11
        echo "<div id=\"cms-block-";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["block"]) ? $context["block"] : $this->getContext($context, "block")), "id"), "html", null, true);
        echo "\" class=\"cms-block cms-block-element\">
    ";
        // line 12
        $this->displayBlock('block', $context, $blocks);
        // line 13
        echo "</div>
";
    }

    // line 12
    public function block_block($context, array $blocks = array())
    {
        echo "EMPTY CONTENT";
    }

    public function getTemplateName()
    {
        return "SonataBlockBundle:Block:block_base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  32 => 12,  27 => 13,  25 => 12,  20 => 11,  29 => 15,  91 => 27,  88 => 26,  82 => 21,  75 => 17,  72 => 16,  69 => 15,  66 => 14,  63 => 13,  60 => 12,  51 => 34,  48 => 33,  46 => 32,  41 => 29,  39 => 26,  26 => 14,  23 => 11,  154 => 49,  148 => 48,  142 => 46,  139 => 45,  135 => 44,  127 => 43,  124 => 42,  120 => 40,  114 => 39,  108 => 37,  105 => 36,  101 => 35,  98 => 34,  96 => 33,  92 => 31,  86 => 30,  80 => 28,  77 => 27,  73 => 26,  65 => 25,  62 => 24,  56 => 23,  53 => 35,  50 => 21,  47 => 20,  42 => 19,  40 => 18,  36 => 16,  31 => 21,  28 => 20,);
    }
}

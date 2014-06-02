<?php

/* SonataBlockBundle:Block:block_core_text.html.twig */
class __TwigTemplate_4df8cf804967af077acc87eb5e64224a72042ea49d8b003b6219fb547933d31e extends Twig_Template
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
        echo $this->getAttribute((isset($context["settings"]) ? $context["settings"] : $this->getContext($context, "settings")), "content");
        echo "
";
    }

    public function getTemplateName()
    {
        return "SonataBlockBundle:Block:block_core_text.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  270 => 4,  268 => 3,  264 => 2,  253 => 1,  243 => 83,  233 => 81,  221 => 79,  212 => 74,  210 => 73,  208 => 72,  206 => 71,  202 => 68,  198 => 66,  196 => 65,  192 => 64,  189 => 61,  187 => 60,  185 => 59,  182 => 57,  180 => 56,  177 => 54,  175 => 53,  172 => 51,  169 => 49,  167 => 48,  165 => 47,  163 => 45,  160 => 44,  156 => 41,  137 => 37,  115 => 33,  113 => 31,  111 => 30,  100 => 23,  95 => 22,  90 => 20,  81 => 15,  45 => 28,  37 => 19,  35 => 15,  30 => 9,  129 => 59,  117 => 34,  109 => 53,  107 => 52,  103 => 50,  97 => 47,  93 => 21,  89 => 43,  84 => 16,  79 => 37,  74 => 11,  64 => 28,  57 => 80,  55 => 79,  52 => 78,  44 => 18,  34 => 15,  32 => 14,  27 => 8,  25 => 12,  20 => 11,  29 => 15,  91 => 44,  88 => 26,  82 => 39,  75 => 17,  72 => 10,  69 => 9,  66 => 29,  63 => 13,  60 => 81,  51 => 34,  48 => 33,  46 => 32,  41 => 29,  39 => 17,  26 => 14,  23 => 11,  154 => 40,  148 => 48,  142 => 46,  139 => 45,  135 => 44,  127 => 43,  124 => 42,  120 => 36,  114 => 39,  108 => 28,  105 => 51,  101 => 49,  98 => 34,  96 => 33,  92 => 31,  86 => 17,  80 => 28,  77 => 36,  73 => 26,  65 => 83,  62 => 82,  56 => 23,  53 => 35,  50 => 44,  47 => 43,  42 => 27,  40 => 20,  36 => 16,  31 => 14,  28 => 20,);
    }
}

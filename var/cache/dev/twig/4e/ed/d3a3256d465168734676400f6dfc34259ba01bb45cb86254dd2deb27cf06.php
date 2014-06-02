<?php

/* SonataAdminBundle:CRUD:base_show_field.html.twig */
class __TwigTemplate_4eedd3a3256d465168734676400f6dfc34259ba01bb45cb86254dd2deb27cf06 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'name' => array($this, 'block_name'),
            'field' => array($this, 'block_field'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 11
        echo "
<th>";
        // line 12
        $this->displayBlock('name', $context, $blocks);
        echo "</th>
<td>";
        // line 13
        $this->displayBlock('field', $context, $blocks);
        echo "</td>
";
    }

    // line 12
    public function block_name($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "trans", array(0 => $this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "label"), 1 => array(), 2 => $this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "translationDomain")), "method"), "html", null, true);
    }

    // line 13
    public function block_field($context, array $blocks = array())
    {
        if ($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options"), "safe")) {
            echo (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"));
        } else {
            echo nl2br(twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true));
        }
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:base_show_field.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  58 => 23,  320 => 122,  317 => 121,  311 => 118,  288 => 107,  284 => 106,  279 => 104,  275 => 103,  256 => 96,  250 => 93,  237 => 86,  232 => 84,  222 => 81,  215 => 78,  191 => 69,  153 => 56,  150 => 55,  110 => 40,  358 => 139,  351 => 135,  347 => 134,  343 => 132,  338 => 130,  327 => 126,  323 => 125,  319 => 124,  315 => 120,  301 => 117,  299 => 112,  293 => 109,  289 => 112,  281 => 105,  277 => 109,  271 => 108,  265 => 99,  262 => 105,  260 => 98,  257 => 103,  251 => 101,  248 => 100,  239 => 97,  228 => 83,  225 => 87,  213 => 82,  211 => 81,  197 => 70,  174 => 64,  148 => 60,  134 => 56,  127 => 54,  20 => 11,  53 => 10,  270 => 4,  253 => 95,  233 => 81,  212 => 74,  210 => 75,  206 => 71,  202 => 77,  198 => 66,  192 => 64,  185 => 68,  180 => 56,  175 => 53,  172 => 51,  167 => 48,  165 => 59,  160 => 58,  137 => 37,  113 => 41,  100 => 36,  90 => 20,  81 => 15,  65 => 83,  129 => 59,  97 => 47,  84 => 16,  77 => 27,  34 => 12,  23 => 12,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 141,  362 => 110,  360 => 109,  355 => 106,  341 => 131,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 117,  305 => 115,  298 => 91,  294 => 90,  285 => 111,  283 => 88,  278 => 86,  268 => 107,  264 => 2,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 80,  214 => 69,  177 => 54,  169 => 66,  140 => 55,  132 => 51,  128 => 49,  107 => 52,  61 => 25,  273 => 96,  269 => 100,  254 => 102,  243 => 89,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 79,  219 => 84,  217 => 79,  208 => 72,  204 => 73,  179 => 66,  159 => 61,  143 => 59,  135 => 53,  119 => 43,  102 => 37,  71 => 17,  67 => 28,  63 => 24,  59 => 14,  38 => 17,  87 => 25,  28 => 13,  31 => 15,  94 => 35,  89 => 35,  85 => 34,  75 => 28,  68 => 14,  56 => 24,  26 => 14,  201 => 72,  196 => 65,  183 => 82,  171 => 63,  166 => 71,  163 => 45,  158 => 62,  156 => 57,  151 => 63,  142 => 59,  138 => 50,  136 => 56,  121 => 46,  117 => 34,  105 => 39,  91 => 34,  62 => 82,  49 => 21,  24 => 12,  25 => 12,  21 => 11,  19 => 11,  93 => 21,  88 => 6,  78 => 29,  46 => 7,  44 => 19,  27 => 13,  79 => 37,  72 => 10,  69 => 9,  47 => 21,  40 => 13,  37 => 18,  22 => 2,  246 => 99,  157 => 56,  145 => 52,  139 => 45,  131 => 48,  123 => 47,  120 => 36,  115 => 33,  111 => 30,  108 => 39,  101 => 25,  98 => 37,  96 => 31,  83 => 25,  74 => 23,  66 => 25,  55 => 22,  52 => 78,  50 => 22,  43 => 19,  41 => 18,  35 => 17,  32 => 16,  29 => 15,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 60,  182 => 69,  176 => 65,  173 => 65,  168 => 60,  164 => 59,  162 => 57,  154 => 40,  149 => 51,  147 => 58,  144 => 49,  141 => 48,  133 => 55,  130 => 41,  125 => 45,  122 => 44,  116 => 45,  112 => 42,  109 => 53,  106 => 36,  103 => 50,  99 => 31,  95 => 22,  92 => 21,  86 => 17,  82 => 33,  80 => 19,  73 => 29,  64 => 28,  60 => 15,  57 => 80,  54 => 10,  51 => 22,  48 => 21,  45 => 8,  42 => 7,  39 => 17,  36 => 17,  33 => 4,  30 => 14,);
    }
}

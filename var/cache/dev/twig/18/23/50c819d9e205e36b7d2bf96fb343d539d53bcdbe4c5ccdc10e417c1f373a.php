<?php

/* SonataAdminBundle:CRUD:base_acl.html.twig */
class __TwigTemplate_182350c819d9e205e36b7d2bf96fb343d539d53bcdbe4c5ccdc10e417c1f373a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'actions' => array($this, 'block_actions'),
            'form' => array($this, 'block_form'),
            'formactions' => array($this, 'block_formactions'),
        );
    }

    protected function doGetParent(array $context)
    {
        return $this->env->resolveTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")));
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 14
    public function block_actions($context, array $blocks = array())
    {
        // line 15
        echo "    <li>";
        $this->env->loadTemplate("SonataAdminBundle:Button:edit_button.html.twig")->display($context);
        echo "</li>
    <li>";
        // line 16
        $this->env->loadTemplate("SonataAdminBundle:Button:history_button.html.twig")->display($context);
        echo "</li>
    <li>";
        // line 17
        $this->env->loadTemplate("SonataAdminBundle:Button:show_button.html.twig")->display($context);
        echo "</li>
    <li>";
        // line 18
        $this->env->loadTemplate("SonataAdminBundle:Button:list_button.html.twig")->display($context);
        echo "</li>
";
    }

    // line 21
    public function block_form($context, array $blocks = array())
    {
        // line 22
        echo "    <form class=\"form-horizontal\"
              action=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateUrl", array(0 => "acl", 1 => array("id" => $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "id", array(0 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method"), "uniqid" => $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "uniqid"), "subclass" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request"), "get", array(0 => "subclass"), "method"))), "method"), "html", null, true);
        echo "\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo "
              method=\"POST\"
              ";
        // line 25
        if ((!$this->getAttribute((isset($context["admin_pool"]) ? $context["admin_pool"] : $this->getContext($context, "admin_pool")), "getOption", array(0 => "html5_validate"), "method"))) {
            echo "novalidate=\"novalidate\"";
        }
        // line 26
        echo "              >
        ";
        // line 27
        if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars"), "errors")) > 0)) {
            // line 28
            echo "            <div class=\"sonata-ba-form-error\">
                ";
            // line 29
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
            echo "
            </div>
        ";
        }
        // line 32
        echo "
        <table class=\"table\">
            <thead>
                <tr>
                    <th>";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("td_username", array(), "SonataAdminBundle"), "html", null, true);
        echo "</th>
                    ";
        // line 37
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["permissions"]) ? $context["permissions"] : $this->getContext($context, "permissions")));
        foreach ($context['_seq'] as $context["_key"] => $context["permission"]) {
            // line 38
            echo "                    <th>";
            echo twig_escape_filter($this->env, (isset($context["permission"]) ? $context["permission"] : $this->getContext($context, "permission")), "html", null, true);
            echo "</th>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['permission'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "                </tr>
            </thead>
            <tbody>
            ";
        // line 43
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["users"]) ? $context["users"] : $this->getContext($context, "users")));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 44
            echo "                <tr>
                    <td>";
            // line 45
            echo twig_escape_filter($this->env, (isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "html", null, true);
            echo "</td>
                    ";
            // line 46
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["permissions"]) ? $context["permissions"] : $this->getContext($context, "permissions")));
            foreach ($context['_seq'] as $context["_key"] => $context["permission"]) {
                // line 47
                echo "                    <td>";
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), ($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "id") . (isset($context["permission"]) ? $context["permission"] : $this->getContext($context, "permission"))), array(), "array"), 'widget');
                echo "</td>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['permission'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 49
            echo "                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        echo "            </tbody>
        </table>

        ";
        // line 54
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "

        ";
        // line 56
        $this->displayBlock('formactions', $context, $blocks);
        // line 61
        echo "    </form>
";
    }

    // line 56
    public function block_formactions($context, array $blocks = array())
    {
        // line 57
        echo "            <div class=\"well well-small form-actions\">
                <input class=\"btn btn-primary\" type=\"submit\" name=\"btn_create_and_edit\" value=\"";
        // line 58
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("btn_update_acl", array(), "SonataAdminBundle"), "html", null, true);
        echo "\">
            </div>
        ";
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:base_acl.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  624 => 224,  620 => 223,  612 => 220,  601 => 216,  594 => 212,  585 => 209,  580 => 207,  574 => 205,  572 => 204,  566 => 203,  559 => 201,  551 => 199,  545 => 198,  526 => 190,  507 => 165,  497 => 156,  485 => 124,  463 => 117,  447 => 113,  424 => 91,  412 => 126,  410 => 113,  406 => 111,  404 => 90,  401 => 89,  391 => 163,  376 => 153,  369 => 148,  359 => 144,  333 => 132,  329 => 130,  326 => 129,  318 => 86,  287 => 77,  261 => 73,  195 => 54,  178 => 48,  1402 => 419,  1396 => 417,  1390 => 415,  1388 => 414,  1386 => 413,  1382 => 412,  1373 => 411,  1371 => 410,  1368 => 409,  1355 => 403,  1349 => 401,  1343 => 399,  1341 => 398,  1339 => 397,  1335 => 396,  1329 => 395,  1327 => 394,  1324 => 393,  1311 => 387,  1305 => 385,  1299 => 383,  1297 => 382,  1295 => 381,  1291 => 380,  1287 => 379,  1283 => 378,  1279 => 377,  1273 => 376,  1271 => 375,  1268 => 374,  1256 => 369,  1251 => 368,  1249 => 367,  1246 => 366,  1237 => 360,  1231 => 358,  1228 => 357,  1223 => 356,  1221 => 355,  1218 => 354,  1211 => 349,  1202 => 347,  1198 => 346,  1195 => 345,  1192 => 344,  1190 => 343,  1187 => 342,  1179 => 338,  1177 => 337,  1174 => 336,  1168 => 332,  1162 => 330,  1159 => 329,  1157 => 328,  1154 => 327,  1145 => 322,  1143 => 321,  1118 => 320,  1115 => 319,  1112 => 318,  1109 => 317,  1106 => 316,  1103 => 315,  1100 => 314,  1098 => 313,  1095 => 312,  1088 => 308,  1084 => 307,  1079 => 306,  1077 => 305,  1074 => 304,  1067 => 299,  1064 => 298,  1056 => 293,  1053 => 292,  1051 => 291,  1048 => 290,  1040 => 285,  1036 => 284,  1032 => 283,  1029 => 282,  1027 => 281,  1024 => 280,  1016 => 276,  1014 => 272,  1012 => 271,  1009 => 270,  1004 => 266,  982 => 261,  979 => 260,  976 => 259,  973 => 258,  970 => 257,  967 => 256,  964 => 255,  961 => 254,  958 => 253,  955 => 252,  952 => 251,  950 => 250,  947 => 249,  939 => 243,  936 => 242,  934 => 241,  931 => 240,  923 => 236,  920 => 235,  918 => 234,  915 => 233,  903 => 229,  900 => 228,  897 => 227,  894 => 226,  892 => 225,  889 => 224,  881 => 220,  878 => 219,  876 => 218,  873 => 217,  865 => 213,  862 => 212,  860 => 211,  857 => 210,  849 => 206,  846 => 205,  844 => 204,  841 => 203,  833 => 199,  830 => 198,  828 => 197,  825 => 196,  817 => 192,  814 => 191,  812 => 190,  809 => 189,  801 => 185,  798 => 184,  796 => 183,  793 => 182,  785 => 178,  783 => 177,  780 => 176,  764 => 169,  756 => 165,  753 => 164,  751 => 163,  749 => 162,  746 => 161,  724 => 154,  721 => 153,  715 => 151,  712 => 150,  710 => 149,  707 => 148,  699 => 142,  697 => 141,  696 => 140,  695 => 139,  694 => 138,  689 => 137,  680 => 134,  675 => 132,  662 => 125,  658 => 124,  654 => 123,  649 => 122,  643 => 120,  619 => 113,  617 => 112,  614 => 111,  598 => 107,  596 => 106,  593 => 105,  557 => 96,  547 => 93,  527 => 91,  512 => 84,  509 => 83,  503 => 81,  478 => 74,  467 => 72,  456 => 68,  450 => 114,  428 => 59,  388 => 42,  371 => 35,  363 => 32,  350 => 26,  342 => 23,  335 => 133,  332 => 20,  316 => 16,  313 => 84,  290 => 5,  276 => 393,  266 => 366,  263 => 365,  255 => 353,  207 => 58,  194 => 248,  184 => 68,  76 => 27,  778 => 251,  772 => 172,  769 => 171,  767 => 170,  763 => 244,  760 => 243,  748 => 242,  745 => 241,  742 => 240,  739 => 156,  736 => 238,  734 => 237,  729 => 155,  717 => 233,  714 => 232,  711 => 231,  703 => 226,  700 => 225,  653 => 218,  650 => 217,  644 => 213,  640 => 119,  638 => 118,  633 => 209,  616 => 207,  599 => 215,  595 => 205,  587 => 203,  584 => 202,  581 => 201,  578 => 200,  576 => 101,  573 => 198,  564 => 99,  550 => 94,  546 => 166,  534 => 162,  531 => 161,  521 => 182,  515 => 85,  513 => 179,  499 => 173,  496 => 79,  493 => 155,  475 => 169,  473 => 168,  468 => 160,  454 => 156,  448 => 153,  445 => 152,  429 => 148,  422 => 147,  414 => 52,  408 => 50,  399 => 139,  396 => 138,  390 => 43,  377 => 37,  348 => 118,  345 => 116,  340 => 136,  330 => 112,  307 => 82,  300 => 102,  291 => 99,  286 => 98,  245 => 335,  200 => 73,  190 => 66,  321 => 109,  295 => 100,  274 => 135,  242 => 82,  236 => 109,  70 => 27,  692 => 399,  683 => 135,  678 => 133,  676 => 385,  666 => 126,  661 => 220,  656 => 219,  652 => 376,  645 => 369,  641 => 368,  635 => 226,  631 => 364,  625 => 361,  615 => 354,  607 => 218,  597 => 342,  590 => 204,  583 => 334,  579 => 332,  577 => 206,  575 => 328,  569 => 325,  565 => 324,  548 => 313,  540 => 164,  536 => 194,  529 => 191,  524 => 90,  516 => 294,  510 => 178,  504 => 164,  500 => 291,  490 => 154,  486 => 286,  482 => 285,  470 => 121,  464 => 71,  459 => 116,  452 => 268,  434 => 256,  421 => 90,  417 => 145,  385 => 159,  361 => 124,  344 => 24,  339 => 191,  324 => 110,  310 => 83,  302 => 79,  296 => 167,  282 => 161,  259 => 87,  244 => 140,  231 => 133,  226 => 131,  114 => 174,  104 => 40,  170 => 79,  188 => 83,  563 => 202,  560 => 191,  558 => 190,  555 => 200,  553 => 188,  549 => 182,  543 => 179,  537 => 176,  532 => 192,  528 => 160,  525 => 172,  523 => 189,  518 => 180,  514 => 167,  511 => 166,  508 => 165,  501 => 163,  495 => 289,  491 => 157,  487 => 156,  460 => 143,  455 => 115,  449 => 138,  442 => 62,  439 => 150,  436 => 132,  433 => 60,  426 => 58,  420 => 146,  415 => 127,  411 => 143,  405 => 49,  403 => 48,  400 => 47,  380 => 130,  366 => 33,  354 => 142,  331 => 96,  325 => 94,  308 => 13,  304 => 103,  272 => 91,  267 => 78,  249 => 74,  216 => 100,  186 => 51,  181 => 232,  161 => 202,  155 => 52,  152 => 61,  146 => 53,  126 => 179,  124 => 47,  58 => 22,  320 => 87,  317 => 107,  311 => 14,  288 => 4,  284 => 76,  279 => 104,  275 => 103,  256 => 86,  250 => 341,  237 => 79,  232 => 78,  222 => 297,  215 => 280,  191 => 246,  153 => 55,  150 => 56,  110 => 172,  358 => 123,  351 => 141,  347 => 140,  343 => 115,  338 => 113,  327 => 111,  323 => 88,  319 => 124,  315 => 150,  301 => 144,  299 => 8,  293 => 6,  289 => 140,  281 => 75,  277 => 136,  271 => 374,  265 => 130,  262 => 88,  260 => 363,  257 => 103,  251 => 101,  248 => 336,  239 => 64,  228 => 83,  225 => 298,  213 => 69,  211 => 81,  197 => 72,  174 => 64,  148 => 64,  134 => 182,  127 => 48,  20 => 11,  53 => 22,  270 => 157,  253 => 342,  233 => 82,  212 => 60,  210 => 59,  206 => 74,  202 => 266,  198 => 55,  192 => 53,  185 => 63,  180 => 49,  175 => 47,  172 => 51,  167 => 57,  165 => 61,  160 => 57,  137 => 59,  113 => 44,  100 => 81,  90 => 34,  81 => 32,  65 => 25,  129 => 180,  97 => 63,  84 => 41,  77 => 30,  34 => 16,  23 => 18,  480 => 75,  474 => 122,  469 => 158,  461 => 70,  457 => 153,  453 => 151,  444 => 263,  440 => 148,  437 => 61,  435 => 146,  430 => 255,  427 => 143,  423 => 57,  413 => 241,  409 => 132,  407 => 238,  402 => 140,  398 => 88,  393 => 168,  387 => 110,  384 => 109,  381 => 157,  379 => 154,  374 => 36,  368 => 34,  365 => 141,  362 => 110,  360 => 104,  355 => 27,  341 => 131,  337 => 22,  322 => 93,  314 => 88,  312 => 149,  309 => 148,  305 => 115,  298 => 101,  294 => 90,  285 => 3,  283 => 97,  278 => 408,  268 => 373,  264 => 74,  258 => 72,  252 => 68,  247 => 84,  241 => 77,  229 => 73,  220 => 290,  214 => 75,  177 => 65,  169 => 44,  140 => 51,  132 => 59,  128 => 58,  107 => 41,  61 => 23,  273 => 392,  269 => 133,  254 => 147,  243 => 66,  240 => 326,  238 => 84,  235 => 63,  230 => 62,  227 => 80,  224 => 61,  221 => 79,  219 => 101,  217 => 76,  208 => 124,  204 => 57,  179 => 224,  159 => 196,  143 => 59,  135 => 51,  119 => 117,  102 => 39,  71 => 33,  67 => 26,  63 => 25,  59 => 28,  38 => 20,  87 => 36,  28 => 14,  31 => 15,  94 => 16,  89 => 33,  85 => 32,  75 => 29,  68 => 24,  56 => 23,  26 => 14,  201 => 56,  196 => 68,  183 => 50,  171 => 63,  166 => 209,  163 => 58,  158 => 55,  156 => 38,  151 => 54,  142 => 61,  138 => 61,  136 => 50,  121 => 131,  117 => 175,  105 => 170,  91 => 37,  62 => 24,  49 => 18,  24 => 11,  25 => 12,  21 => 11,  19 => 11,  93 => 35,  88 => 60,  78 => 30,  46 => 21,  44 => 18,  27 => 12,  79 => 28,  72 => 28,  69 => 27,  47 => 19,  40 => 17,  37 => 24,  22 => 12,  246 => 67,  157 => 56,  145 => 54,  139 => 169,  131 => 181,  123 => 57,  120 => 46,  115 => 50,  111 => 110,  108 => 171,  101 => 89,  98 => 72,  96 => 67,  83 => 37,  74 => 29,  66 => 12,  55 => 21,  52 => 19,  50 => 21,  43 => 20,  41 => 18,  35 => 19,  32 => 16,  29 => 15,  209 => 75,  203 => 93,  199 => 265,  193 => 73,  189 => 52,  187 => 69,  182 => 85,  176 => 223,  173 => 46,  168 => 62,  164 => 203,  162 => 60,  154 => 189,  149 => 35,  147 => 69,  144 => 26,  141 => 175,  133 => 49,  130 => 49,  125 => 46,  122 => 46,  116 => 45,  112 => 52,  109 => 43,  106 => 104,  103 => 82,  99 => 17,  95 => 38,  92 => 45,  86 => 38,  82 => 33,  80 => 31,  73 => 28,  64 => 30,  60 => 22,  57 => 18,  54 => 25,  51 => 16,  48 => 15,  45 => 14,  42 => 15,  39 => 17,  36 => 16,  33 => 13,  30 => 15,);
    }
}

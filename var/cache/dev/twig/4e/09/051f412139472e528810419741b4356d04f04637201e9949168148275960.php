<?php

/* SonataAdminBundle:Form:filter_admin_fields.html.twig */
class __TwigTemplate_4e09051f412139472e528810419741b4356d04f04637201e9949168148275960 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("form_div_layout.html.twig");

        $this->blocks = array(
            'choice_widget_collapsed' => array($this, 'block_choice_widget_collapsed'),
            'textarea_widget' => array($this, 'block_textarea_widget'),
            'form_widget_simple' => array($this, 'block_form_widget_simple'),
            'choice_widget_expanded' => array($this, 'block_choice_widget_expanded'),
            'checkbox_widget' => array($this, 'block_checkbox_widget'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "form_div_layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 18
    public function block_choice_widget_collapsed($context, array $blocks = array())
    {
        // line 19
        echo "    ";
        $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => ((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class"), "")) : ("")) . " form-control")));
        // line 20
        echo "    ";
        $this->displayParentBlock("choice_widget_collapsed", $context, $blocks);
        echo "
";
    }

    // line 23
    public function block_textarea_widget($context, array $blocks = array())
    {
        // line 24
        echo "    ";
        $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => ((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class"), "")) : ("")) . " form-control")));
        // line 25
        echo "    ";
        $this->displayParentBlock("textarea_widget", $context, $blocks);
        echo "
";
    }

    // line 28
    public function block_form_widget_simple($context, array $blocks = array())
    {
        // line 29
        echo "    ";
        $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => ((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class"), "")) : ("")) . " form-control")));
        // line 30
        echo "    ";
        $this->displayParentBlock("form_widget_simple", $context, $blocks);
        echo "
";
    }

    // line 33
    public function block_choice_widget_expanded($context, array $blocks = array())
    {
        // line 34
        echo "    ";
        ob_start();
        // line 35
        echo "        ";
        $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("class" => (($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class"), "")) : (""))));
        // line 36
        echo "        ";
        $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("class" => (($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), "class") . " ") . ((((isset($context["widget_type"]) ? $context["widget_type"] : $this->getContext($context, "widget_type")) != "")) ? ((((((isset($context["multiple"]) ? $context["multiple"] : $this->getContext($context, "multiple"))) ? ("checkbox") : ("radio")) . "-") . (isset($context["widget_type"]) ? $context["widget_type"] : $this->getContext($context, "widget_type")))) : ("")))));
        // line 37
        echo "        ";
        if ((isset($context["expanded"]) ? $context["expanded"] : $this->getContext($context, "expanded"))) {
            // line 38
            echo "            ";
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => (($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class"), "")) : (""))));
            // line 39
            echo "            <div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">
        ";
        }
        // line 41
        echo "        ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 42
            echo "            ";
            if (((isset($context["widget_type"]) ? $context["widget_type"] : $this->getContext($context, "widget_type")) != "inline")) {
                // line 43
                echo "                <div class=\"";
                echo (((isset($context["multiple"]) ? $context["multiple"] : $this->getContext($context, "multiple"))) ? ("checkbox") : ("radio"));
                echo "\">
            ";
            }
            // line 45
            echo "            <label";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")));
            foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
                echo " ";
                echo twig_escape_filter($this->env, (isset($context["attrname"]) ? $context["attrname"] : $this->getContext($context, "attrname")), "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, (isset($context["attrvalue"]) ? $context["attrvalue"] : $this->getContext($context, "attrvalue")), "html", null, true);
                echo "\"";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo ">
            ";
            // line 46
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["child"]) ? $context["child"] : $this->getContext($context, "child")), 'widget', array("attr" => array("class" => (($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "widget_class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "widget_class"), "")) : ("")))));
            echo "
            ";
            // line 47
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute($this->getAttribute((isset($context["child"]) ? $context["child"] : $this->getContext($context, "child")), "vars"), "label"), array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain"))), "html", null, true);
            echo "
            </label>
            ";
            // line 49
            if (((isset($context["widget_type"]) ? $context["widget_type"] : $this->getContext($context, "widget_type")) != "inline")) {
                // line 50
                echo "                </div>
            ";
            }
            // line 52
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 53
        echo "        ";
        $this->displayBlock("form_message", $context, $blocks);
        echo "
        ";
        // line 54
        if ((isset($context["expanded"]) ? $context["expanded"] : $this->getContext($context, "expanded"))) {
            // line 55
            echo "            </div>
        ";
        }
        // line 57
        echo "    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 60
    public function block_checkbox_widget($context, array $blocks = array())
    {
        // line 61
        echo "    ";
        ob_start();
        // line 62
        echo "        ";
        if (((!((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")) === false)) && twig_test_empty((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label"))))) {
            // line 63
            echo "            ";
            $context["label"] = call_user_func_array($this->env->getFilter('humanize')->getCallable(), array((isset($context["name"]) ? $context["name"] : $this->getContext($context, "name"))));
            // line 64
            echo "        ";
        }
        // line 65
        echo "        ";
        if ((($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "parent") != null) && !twig_in_filter("choice", $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "parent"), "vars"), "block_prefixes")))) {
            // line 66
            echo "            <div class=\"checkbox\">
        ";
        }
        // line 68
        echo "
        ";
        // line 69
        if (((($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "parent") != null) && !twig_in_filter("choice", $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "parent"), "vars"), "block_prefixes"))) && (isset($context["label_render"]) ? $context["label_render"] : $this->getContext($context, "label_render")))) {
            // line 70
            echo "            <label class=\"";
            if ((array_key_exists("inline", $context) && (isset($context["inline"]) ? $context["inline"] : $this->getContext($context, "inline")))) {
                echo "checkbox-inline";
            }
            echo "\">
        ";
        }
        // line 72
        echo "
        <input type=\"checkbox\" ";
        // line 73
        $this->displayBlock("widget_attributes", $context, $blocks);
        if (array_key_exists("value", $context)) {
            echo " value=\"";
            echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
            echo "\"";
        }
        if ((isset($context["checked"]) ? $context["checked"] : $this->getContext($context, "checked"))) {
            echo " checked=\"checked\"";
        }
        echo "/>
        ";
        // line 74
        if ((($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "parent") != null) && !twig_in_filter("choice", $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "parent"), "vars"), "block_prefixes")))) {
            // line 75
            echo "            ";
            if (((isset($context["label_render"]) ? $context["label_render"] : $this->getContext($context, "label_render")) && twig_in_filter((isset($context["widget_checkbox_label"]) ? $context["widget_checkbox_label"] : $this->getContext($context, "widget_checkbox_label")), array(0 => "both", 1 => "widget")))) {
                // line 76
                echo "                ";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain"))), "html", null, true);
                echo "
                </label>
            ";
            }
            // line 79
            echo "        ";
        }
        // line 80
        echo "        ";
        if ((($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "parent") != null) && !twig_in_filter("choice", $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "parent"), "vars"), "block_prefixes")))) {
            // line 81
            echo "            </div>
            ";
            // line 82
            $this->displayBlock("form_message", $context, $blocks);
            echo "
        ";
        }
        // line 84
        echo "    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Form:filter_admin_fields.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1402 => 419,  1396 => 417,  1390 => 415,  1388 => 414,  1386 => 413,  1382 => 412,  1373 => 411,  1371 => 410,  1368 => 409,  1355 => 403,  1349 => 401,  1343 => 399,  1341 => 398,  1339 => 397,  1335 => 396,  1329 => 395,  1327 => 394,  1324 => 393,  1311 => 387,  1305 => 385,  1299 => 383,  1297 => 382,  1295 => 381,  1291 => 380,  1287 => 379,  1283 => 378,  1279 => 377,  1273 => 376,  1271 => 375,  1268 => 374,  1256 => 369,  1251 => 368,  1249 => 367,  1246 => 366,  1237 => 360,  1231 => 358,  1228 => 357,  1223 => 356,  1221 => 355,  1218 => 354,  1211 => 349,  1202 => 347,  1198 => 346,  1195 => 345,  1192 => 344,  1190 => 343,  1187 => 342,  1179 => 338,  1177 => 337,  1174 => 336,  1168 => 332,  1162 => 330,  1159 => 329,  1157 => 328,  1154 => 327,  1145 => 322,  1143 => 321,  1118 => 320,  1115 => 319,  1112 => 318,  1109 => 317,  1106 => 316,  1103 => 315,  1100 => 314,  1098 => 313,  1095 => 312,  1088 => 308,  1084 => 307,  1079 => 306,  1077 => 305,  1074 => 304,  1067 => 299,  1064 => 298,  1056 => 293,  1053 => 292,  1051 => 291,  1048 => 290,  1040 => 285,  1036 => 284,  1032 => 283,  1029 => 282,  1027 => 281,  1024 => 280,  1016 => 276,  1014 => 272,  1012 => 271,  1009 => 270,  1004 => 266,  982 => 261,  979 => 260,  976 => 259,  973 => 258,  970 => 257,  967 => 256,  964 => 255,  961 => 254,  958 => 253,  955 => 252,  952 => 251,  950 => 250,  947 => 249,  939 => 243,  936 => 242,  934 => 241,  931 => 240,  923 => 236,  920 => 235,  918 => 234,  915 => 233,  903 => 229,  900 => 228,  897 => 227,  894 => 226,  892 => 225,  889 => 224,  881 => 220,  878 => 219,  876 => 218,  873 => 217,  865 => 213,  862 => 212,  860 => 211,  857 => 210,  849 => 206,  846 => 205,  844 => 204,  841 => 203,  833 => 199,  830 => 198,  828 => 197,  825 => 196,  817 => 192,  814 => 191,  812 => 190,  809 => 189,  801 => 185,  798 => 184,  796 => 183,  793 => 182,  785 => 178,  783 => 177,  780 => 176,  764 => 169,  756 => 165,  753 => 164,  751 => 163,  749 => 162,  746 => 161,  724 => 154,  721 => 153,  715 => 151,  712 => 150,  710 => 149,  707 => 148,  699 => 142,  697 => 141,  696 => 140,  695 => 139,  694 => 138,  689 => 137,  680 => 134,  675 => 132,  662 => 125,  658 => 124,  654 => 123,  649 => 122,  643 => 120,  619 => 113,  617 => 112,  614 => 111,  598 => 107,  596 => 106,  593 => 105,  557 => 96,  547 => 93,  527 => 91,  512 => 84,  509 => 83,  503 => 81,  478 => 74,  467 => 72,  456 => 68,  450 => 64,  428 => 59,  388 => 42,  371 => 35,  363 => 32,  350 => 26,  342 => 23,  335 => 21,  332 => 20,  316 => 16,  313 => 15,  290 => 5,  276 => 393,  266 => 366,  263 => 365,  255 => 353,  207 => 269,  194 => 248,  184 => 68,  76 => 31,  778 => 251,  772 => 172,  769 => 171,  767 => 170,  763 => 244,  760 => 243,  748 => 242,  745 => 241,  742 => 240,  739 => 156,  736 => 238,  734 => 237,  729 => 155,  717 => 233,  714 => 232,  711 => 231,  703 => 226,  700 => 225,  653 => 218,  650 => 217,  644 => 213,  640 => 119,  638 => 118,  633 => 209,  616 => 207,  599 => 206,  595 => 205,  587 => 203,  584 => 202,  581 => 201,  578 => 200,  576 => 101,  573 => 198,  564 => 99,  550 => 94,  546 => 166,  534 => 162,  531 => 161,  521 => 182,  515 => 85,  513 => 179,  499 => 173,  496 => 79,  493 => 78,  475 => 169,  473 => 168,  468 => 160,  454 => 156,  448 => 153,  445 => 152,  429 => 148,  422 => 147,  414 => 52,  408 => 50,  399 => 139,  396 => 138,  390 => 43,  377 => 37,  348 => 118,  345 => 116,  340 => 114,  330 => 112,  307 => 104,  300 => 102,  291 => 99,  286 => 98,  245 => 335,  200 => 73,  190 => 66,  321 => 109,  295 => 100,  274 => 135,  242 => 82,  236 => 109,  70 => 27,  692 => 399,  683 => 135,  678 => 133,  676 => 385,  666 => 126,  661 => 220,  656 => 219,  652 => 376,  645 => 369,  641 => 368,  635 => 117,  631 => 364,  625 => 361,  615 => 354,  607 => 349,  597 => 342,  590 => 204,  583 => 334,  579 => 332,  577 => 329,  575 => 328,  569 => 325,  565 => 324,  548 => 313,  540 => 164,  536 => 306,  529 => 92,  524 => 90,  516 => 294,  510 => 178,  504 => 175,  500 => 291,  490 => 77,  486 => 286,  482 => 285,  470 => 73,  464 => 71,  459 => 69,  452 => 268,  434 => 256,  421 => 244,  417 => 145,  385 => 41,  361 => 124,  344 => 24,  339 => 191,  324 => 110,  310 => 171,  302 => 168,  296 => 167,  282 => 161,  259 => 87,  244 => 140,  231 => 133,  226 => 131,  114 => 111,  104 => 90,  170 => 79,  188 => 83,  563 => 188,  560 => 191,  558 => 190,  555 => 95,  553 => 188,  549 => 182,  543 => 179,  537 => 176,  532 => 174,  528 => 160,  525 => 172,  523 => 171,  518 => 170,  514 => 168,  511 => 167,  508 => 165,  501 => 80,  495 => 289,  491 => 157,  487 => 156,  460 => 143,  455 => 141,  449 => 138,  442 => 62,  439 => 150,  436 => 132,  433 => 60,  426 => 58,  420 => 146,  415 => 121,  411 => 143,  405 => 49,  403 => 48,  400 => 47,  380 => 130,  366 => 33,  354 => 101,  331 => 96,  325 => 94,  308 => 13,  304 => 103,  272 => 91,  267 => 78,  249 => 74,  216 => 100,  186 => 239,  181 => 232,  161 => 202,  155 => 52,  152 => 92,  146 => 53,  126 => 147,  124 => 132,  58 => 28,  320 => 92,  317 => 107,  311 => 14,  288 => 4,  284 => 106,  279 => 104,  275 => 103,  256 => 86,  250 => 341,  237 => 79,  232 => 78,  222 => 297,  215 => 280,  191 => 246,  153 => 55,  150 => 65,  110 => 42,  358 => 123,  351 => 120,  347 => 134,  343 => 115,  338 => 113,  327 => 111,  323 => 125,  319 => 124,  315 => 150,  301 => 144,  299 => 8,  293 => 6,  289 => 140,  281 => 409,  277 => 136,  271 => 374,  265 => 130,  262 => 88,  260 => 363,  257 => 103,  251 => 101,  248 => 336,  239 => 97,  228 => 83,  225 => 298,  213 => 69,  211 => 81,  197 => 72,  174 => 64,  148 => 64,  134 => 49,  127 => 48,  20 => 11,  53 => 10,  270 => 157,  253 => 342,  233 => 82,  212 => 74,  210 => 270,  206 => 74,  202 => 266,  198 => 66,  192 => 88,  185 => 63,  180 => 66,  175 => 77,  172 => 51,  167 => 57,  165 => 61,  160 => 76,  137 => 59,  113 => 43,  100 => 42,  90 => 34,  81 => 40,  65 => 25,  129 => 47,  97 => 63,  84 => 41,  77 => 35,  34 => 16,  23 => 18,  480 => 75,  474 => 150,  469 => 158,  461 => 70,  457 => 153,  453 => 151,  444 => 263,  440 => 148,  437 => 61,  435 => 146,  430 => 255,  427 => 143,  423 => 57,  413 => 241,  409 => 132,  407 => 238,  402 => 140,  398 => 232,  393 => 137,  387 => 110,  384 => 109,  381 => 120,  379 => 119,  374 => 36,  368 => 34,  365 => 141,  362 => 110,  360 => 104,  355 => 27,  341 => 131,  337 => 22,  322 => 93,  314 => 88,  312 => 149,  309 => 148,  305 => 115,  298 => 101,  294 => 90,  285 => 3,  283 => 97,  278 => 408,  268 => 373,  264 => 2,  258 => 354,  252 => 85,  247 => 84,  241 => 77,  229 => 73,  220 => 290,  214 => 75,  177 => 65,  169 => 210,  140 => 52,  132 => 59,  128 => 58,  107 => 41,  61 => 29,  273 => 392,  269 => 133,  254 => 147,  243 => 327,  240 => 326,  238 => 84,  235 => 311,  230 => 81,  227 => 80,  224 => 79,  221 => 79,  219 => 101,  217 => 76,  208 => 124,  204 => 267,  179 => 224,  159 => 196,  143 => 59,  135 => 51,  119 => 117,  102 => 39,  71 => 33,  67 => 32,  63 => 24,  59 => 28,  38 => 20,  87 => 33,  28 => 13,  31 => 14,  94 => 57,  89 => 39,  85 => 30,  75 => 29,  68 => 26,  56 => 40,  26 => 14,  201 => 72,  196 => 68,  183 => 82,  171 => 63,  166 => 209,  163 => 45,  158 => 55,  156 => 195,  151 => 54,  142 => 61,  138 => 61,  136 => 50,  121 => 131,  117 => 51,  105 => 47,  91 => 56,  62 => 29,  49 => 20,  24 => 13,  25 => 12,  21 => 12,  19 => 11,  93 => 36,  88 => 60,  78 => 30,  46 => 21,  44 => 19,  27 => 13,  79 => 32,  72 => 37,  69 => 13,  47 => 19,  40 => 18,  37 => 17,  22 => 12,  246 => 99,  157 => 57,  145 => 52,  139 => 169,  131 => 160,  123 => 57,  120 => 56,  115 => 50,  111 => 110,  108 => 48,  101 => 89,  98 => 47,  96 => 67,  83 => 37,  74 => 34,  66 => 12,  55 => 20,  52 => 19,  50 => 20,  43 => 20,  41 => 18,  35 => 19,  32 => 18,  29 => 15,  209 => 75,  203 => 93,  199 => 265,  193 => 73,  189 => 70,  187 => 69,  182 => 85,  176 => 223,  173 => 65,  168 => 62,  164 => 203,  162 => 60,  154 => 189,  149 => 182,  147 => 69,  144 => 176,  141 => 175,  133 => 50,  130 => 49,  125 => 46,  122 => 46,  116 => 116,  112 => 52,  109 => 45,  106 => 104,  103 => 43,  99 => 68,  95 => 41,  92 => 45,  86 => 38,  82 => 33,  80 => 36,  73 => 28,  64 => 30,  60 => 22,  57 => 22,  54 => 25,  51 => 25,  48 => 24,  45 => 23,  42 => 15,  39 => 14,  36 => 17,  33 => 4,  30 => 15,);
    }
}

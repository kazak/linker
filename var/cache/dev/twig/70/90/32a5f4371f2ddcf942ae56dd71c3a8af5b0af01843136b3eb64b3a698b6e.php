<?php

/* SonataAdminBundle:CRUD:delete.html.twig */
class __TwigTemplate_709032a5f4371f2ddcf942ae56dd71c3a8af5b0af01843136b3eb64b3a698b6e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'actions' => array($this, 'block_actions'),
            'tab_menu' => array($this, 'block_tab_menu'),
            'content' => array($this, 'block_content'),
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
        $this->env->loadTemplate("SonataAdminBundle:Button:list_button.html.twig")->display($context);
        echo "</li>
    <li>";
        // line 16
        $this->env->loadTemplate("SonataAdminBundle:Button:edit_button.html.twig")->display($context);
        echo "</li>
    <li>";
        // line 17
        $this->env->loadTemplate("SonataAdminBundle:Button:create_button.html.twig")->display($context);
        echo "</li>
";
    }

    // line 20
    public function block_tab_menu($context, array $blocks = array())
    {
        echo $this->env->getExtension('knp_menu')->render($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "sidemenu", array(0 => (isset($context["action"]) ? $context["action"] : $this->getContext($context, "action"))), "method"), array("currentClass" => "active"), "list");
    }

    // line 22
    public function block_content($context, array $blocks = array())
    {
        // line 23
        echo "    <div class=\"sonata-ba-delete\">

        <div class=\"box box-danger\">
            <div class=\"box-header\">
                <h3 class=\"box-title\">";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title_delete", array(), "SonataAdminBundle"), "html", null, true);
        echo "</h3>
            </div>
            <div class=\"box-body\">
                ";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("message_delete_confirmation", array("%object%" => $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "toString", array(0 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method")), "SonataAdminBundle"), "html", null, true);
        echo "
            </div>
            <div class=\"box-footer clearfix\">
                <form method=\"POST\" action=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateObjectUrl", array(0 => "delete", 1 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method"), "html", null, true);
        echo "\">
                    <input type=\"hidden\" name=\"_method\" value=\"DELETE\">
                    <input type=\"hidden\" name=\"_sonata_csrf_token\" value=\"";
        // line 35
        echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : $this->getContext($context, "csrf_token")), "html", null, true);
        echo "\">

                    <button type=\"submit\" class=\"btn btn-danger\"><i class=\"glyphicon glyphicon-trash\"></i> ";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("btn_delete", array(), "SonataAdminBundle"), "html", null, true);
        echo "</button>
                    ";
        // line 38
        if (($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "hasRoute", array(0 => "edit"), "method") && $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "isGranted", array(0 => "EDIT", 1 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method"))) {
            // line 39
            echo "                        ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("delete_or", array(), "SonataAdminBundle"), "html", null, true);
            echo "

                        <a class=\"btn btn-success\" href=\"";
            // line 41
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateObjectUrl", array(0 => "edit", 1 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method"), "html", null, true);
            echo "\">
                            <i class=\"glyphicon glyphicon-edit\"></i>
                            ";
            // line 43
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("link_action_edit", array(), "SonataAdminBundle"), "html", null, true);
            echo "</a>
                    ";
        }
        // line 45
        echo "                </form>
            </div>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:delete.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  306 => 95,  303 => 94,  292 => 91,  280 => 87,  118 => 49,  624 => 224,  620 => 223,  612 => 220,  601 => 216,  594 => 212,  585 => 209,  580 => 207,  574 => 205,  572 => 204,  566 => 203,  559 => 201,  551 => 199,  545 => 198,  526 => 190,  507 => 165,  497 => 156,  485 => 124,  463 => 117,  447 => 113,  424 => 91,  412 => 126,  410 => 113,  406 => 111,  404 => 90,  401 => 89,  391 => 163,  376 => 153,  369 => 148,  359 => 144,  333 => 132,  329 => 130,  326 => 129,  318 => 86,  287 => 89,  261 => 73,  195 => 54,  178 => 46,  1402 => 419,  1396 => 417,  1390 => 415,  1388 => 414,  1386 => 413,  1382 => 412,  1373 => 411,  1371 => 410,  1368 => 409,  1355 => 403,  1349 => 401,  1343 => 399,  1341 => 398,  1339 => 397,  1335 => 396,  1329 => 395,  1327 => 394,  1324 => 393,  1311 => 387,  1305 => 385,  1299 => 383,  1297 => 382,  1295 => 381,  1291 => 380,  1287 => 379,  1283 => 378,  1279 => 377,  1273 => 376,  1271 => 375,  1268 => 374,  1256 => 369,  1251 => 368,  1249 => 367,  1246 => 366,  1237 => 360,  1231 => 358,  1228 => 357,  1223 => 356,  1221 => 355,  1218 => 354,  1211 => 349,  1202 => 347,  1198 => 346,  1195 => 345,  1192 => 344,  1190 => 343,  1187 => 342,  1179 => 338,  1177 => 337,  1174 => 336,  1168 => 332,  1162 => 330,  1159 => 329,  1157 => 328,  1154 => 327,  1145 => 322,  1143 => 321,  1118 => 320,  1115 => 319,  1112 => 318,  1109 => 317,  1106 => 316,  1103 => 315,  1100 => 314,  1098 => 313,  1095 => 312,  1088 => 308,  1084 => 307,  1079 => 306,  1077 => 305,  1074 => 304,  1067 => 299,  1064 => 298,  1056 => 293,  1053 => 292,  1051 => 291,  1048 => 290,  1040 => 285,  1036 => 284,  1032 => 283,  1029 => 282,  1027 => 281,  1024 => 280,  1016 => 276,  1014 => 272,  1012 => 271,  1009 => 270,  1004 => 266,  982 => 261,  979 => 260,  976 => 259,  973 => 258,  970 => 257,  967 => 256,  964 => 255,  961 => 254,  958 => 253,  955 => 252,  952 => 251,  950 => 250,  947 => 249,  939 => 243,  936 => 242,  934 => 241,  931 => 240,  923 => 236,  920 => 235,  918 => 234,  915 => 233,  903 => 229,  900 => 228,  897 => 227,  894 => 226,  892 => 225,  889 => 224,  881 => 220,  878 => 219,  876 => 218,  873 => 217,  865 => 213,  862 => 212,  860 => 211,  857 => 210,  849 => 206,  846 => 205,  844 => 204,  841 => 203,  833 => 199,  830 => 198,  828 => 197,  825 => 196,  817 => 192,  814 => 191,  812 => 190,  809 => 189,  801 => 185,  798 => 184,  796 => 183,  793 => 182,  785 => 178,  783 => 177,  780 => 176,  764 => 169,  756 => 165,  753 => 164,  751 => 163,  749 => 162,  746 => 161,  724 => 154,  721 => 153,  715 => 151,  712 => 150,  710 => 149,  707 => 148,  699 => 142,  697 => 141,  696 => 140,  695 => 139,  694 => 138,  689 => 137,  680 => 134,  675 => 132,  662 => 125,  658 => 124,  654 => 123,  649 => 122,  643 => 120,  619 => 113,  617 => 112,  614 => 111,  598 => 107,  596 => 106,  593 => 105,  557 => 96,  547 => 93,  527 => 91,  512 => 84,  509 => 83,  503 => 81,  478 => 74,  467 => 72,  456 => 68,  450 => 114,  428 => 59,  388 => 42,  371 => 35,  363 => 32,  350 => 26,  342 => 23,  335 => 133,  332 => 20,  316 => 16,  313 => 84,  290 => 90,  276 => 393,  266 => 366,  263 => 365,  255 => 353,  207 => 58,  194 => 52,  184 => 48,  76 => 18,  778 => 251,  772 => 172,  769 => 171,  767 => 170,  763 => 244,  760 => 243,  748 => 242,  745 => 241,  742 => 240,  739 => 156,  736 => 238,  734 => 237,  729 => 155,  717 => 233,  714 => 232,  711 => 231,  703 => 226,  700 => 225,  653 => 218,  650 => 217,  644 => 213,  640 => 119,  638 => 118,  633 => 209,  616 => 207,  599 => 215,  595 => 205,  587 => 203,  584 => 202,  581 => 201,  578 => 200,  576 => 101,  573 => 198,  564 => 99,  550 => 94,  546 => 166,  534 => 162,  531 => 161,  521 => 182,  515 => 85,  513 => 179,  499 => 173,  496 => 79,  493 => 155,  475 => 169,  473 => 168,  468 => 160,  454 => 156,  448 => 153,  445 => 152,  429 => 148,  422 => 147,  414 => 52,  408 => 50,  399 => 139,  396 => 138,  390 => 43,  377 => 37,  348 => 118,  345 => 116,  340 => 136,  330 => 103,  307 => 82,  300 => 93,  291 => 99,  286 => 98,  245 => 335,  200 => 73,  190 => 49,  321 => 100,  295 => 100,  274 => 135,  242 => 82,  236 => 109,  70 => 29,  692 => 399,  683 => 135,  678 => 133,  676 => 385,  666 => 126,  661 => 220,  656 => 219,  652 => 376,  645 => 369,  641 => 368,  635 => 226,  631 => 364,  625 => 361,  615 => 354,  607 => 218,  597 => 342,  590 => 204,  583 => 334,  579 => 332,  577 => 206,  575 => 328,  569 => 325,  565 => 324,  548 => 313,  540 => 164,  536 => 194,  529 => 191,  524 => 90,  516 => 294,  510 => 178,  504 => 164,  500 => 291,  490 => 154,  486 => 286,  482 => 285,  470 => 121,  464 => 71,  459 => 116,  452 => 268,  434 => 256,  421 => 90,  417 => 145,  385 => 159,  361 => 124,  344 => 24,  339 => 191,  324 => 110,  310 => 83,  302 => 79,  296 => 167,  282 => 161,  259 => 87,  244 => 140,  231 => 69,  226 => 131,  114 => 174,  104 => 43,  170 => 79,  188 => 83,  563 => 202,  560 => 191,  558 => 190,  555 => 200,  553 => 188,  549 => 182,  543 => 179,  537 => 176,  532 => 192,  528 => 160,  525 => 172,  523 => 189,  518 => 180,  514 => 167,  511 => 166,  508 => 165,  501 => 163,  495 => 289,  491 => 157,  487 => 156,  460 => 143,  455 => 115,  449 => 138,  442 => 62,  439 => 150,  436 => 132,  433 => 60,  426 => 58,  420 => 146,  415 => 127,  411 => 143,  405 => 49,  403 => 48,  400 => 47,  380 => 130,  366 => 33,  354 => 142,  331 => 96,  325 => 94,  308 => 13,  304 => 103,  272 => 91,  267 => 78,  249 => 74,  216 => 100,  186 => 51,  181 => 232,  161 => 202,  155 => 52,  152 => 61,  146 => 53,  126 => 24,  124 => 47,  58 => 22,  320 => 87,  317 => 107,  311 => 14,  288 => 4,  284 => 76,  279 => 104,  275 => 86,  256 => 79,  250 => 341,  237 => 71,  232 => 78,  222 => 66,  215 => 280,  191 => 246,  153 => 55,  150 => 34,  110 => 63,  358 => 123,  351 => 141,  347 => 140,  343 => 115,  338 => 113,  327 => 102,  323 => 88,  319 => 124,  315 => 98,  301 => 144,  299 => 8,  293 => 6,  289 => 140,  281 => 75,  277 => 136,  271 => 374,  265 => 130,  262 => 81,  260 => 363,  257 => 103,  251 => 101,  248 => 336,  239 => 64,  228 => 83,  225 => 67,  213 => 69,  211 => 81,  197 => 72,  174 => 64,  148 => 64,  134 => 28,  127 => 48,  20 => 11,  53 => 18,  270 => 84,  253 => 78,  233 => 82,  212 => 60,  210 => 59,  206 => 57,  202 => 55,  198 => 55,  192 => 53,  185 => 63,  180 => 49,  175 => 45,  172 => 51,  167 => 57,  165 => 61,  160 => 40,  137 => 29,  113 => 46,  100 => 43,  90 => 24,  81 => 20,  65 => 29,  129 => 25,  97 => 56,  84 => 41,  77 => 32,  34 => 18,  23 => 18,  480 => 75,  474 => 122,  469 => 158,  461 => 70,  457 => 153,  453 => 151,  444 => 263,  440 => 148,  437 => 61,  435 => 146,  430 => 255,  427 => 143,  423 => 57,  413 => 241,  409 => 132,  407 => 238,  402 => 140,  398 => 88,  393 => 168,  387 => 110,  384 => 109,  381 => 157,  379 => 154,  374 => 36,  368 => 34,  365 => 141,  362 => 110,  360 => 104,  355 => 27,  341 => 131,  337 => 22,  322 => 93,  314 => 88,  312 => 97,  309 => 148,  305 => 115,  298 => 101,  294 => 90,  285 => 3,  283 => 97,  278 => 408,  268 => 373,  264 => 82,  258 => 72,  252 => 68,  247 => 75,  241 => 77,  229 => 73,  220 => 65,  214 => 63,  177 => 65,  169 => 44,  140 => 51,  132 => 59,  128 => 58,  107 => 44,  61 => 27,  273 => 85,  269 => 133,  254 => 147,  243 => 73,  240 => 72,  238 => 84,  235 => 63,  230 => 62,  227 => 80,  224 => 61,  221 => 79,  219 => 101,  217 => 64,  208 => 124,  204 => 57,  179 => 224,  159 => 196,  143 => 59,  135 => 51,  119 => 108,  102 => 60,  71 => 31,  67 => 30,  63 => 16,  59 => 25,  38 => 18,  87 => 38,  28 => 14,  31 => 15,  94 => 40,  89 => 39,  85 => 36,  75 => 29,  68 => 30,  56 => 25,  26 => 14,  201 => 56,  196 => 68,  183 => 50,  171 => 44,  166 => 209,  163 => 58,  158 => 55,  156 => 38,  151 => 54,  142 => 30,  138 => 61,  136 => 50,  121 => 50,  117 => 175,  105 => 45,  91 => 39,  62 => 14,  49 => 17,  24 => 1,  25 => 12,  21 => 11,  19 => 11,  93 => 39,  88 => 37,  78 => 35,  46 => 20,  44 => 18,  27 => 12,  79 => 34,  72 => 19,  69 => 16,  47 => 19,  40 => 17,  37 => 20,  22 => 11,  246 => 67,  157 => 56,  145 => 54,  139 => 169,  131 => 181,  123 => 57,  120 => 46,  115 => 47,  111 => 46,  108 => 45,  101 => 42,  98 => 41,  96 => 40,  83 => 37,  74 => 33,  66 => 17,  55 => 23,  52 => 22,  50 => 21,  43 => 21,  41 => 20,  35 => 19,  32 => 16,  29 => 15,  209 => 58,  203 => 93,  199 => 265,  193 => 73,  189 => 52,  187 => 69,  182 => 85,  176 => 223,  173 => 46,  168 => 43,  164 => 203,  162 => 41,  154 => 189,  149 => 35,  147 => 69,  144 => 26,  141 => 175,  133 => 49,  130 => 49,  125 => 46,  122 => 46,  116 => 107,  112 => 105,  109 => 43,  106 => 104,  103 => 43,  99 => 41,  95 => 41,  92 => 38,  86 => 35,  82 => 34,  80 => 35,  73 => 33,  64 => 30,  60 => 15,  57 => 14,  54 => 23,  51 => 22,  48 => 21,  45 => 26,  42 => 19,  39 => 17,  36 => 16,  33 => 16,  30 => 2,);
    }
}

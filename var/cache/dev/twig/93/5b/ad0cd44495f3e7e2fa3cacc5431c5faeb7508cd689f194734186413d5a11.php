<?php

/* SensioDistributionBundle:Configurator/Step:doctrine.html.twig */
class __TwigTemplate_935bad0cd44495f3e7e2fa3cacc5431c5faeb7508cd689f194734186413d5a11 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("SensioDistributionBundle::Configurator/layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SensioDistributionBundle::Configurator/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "Symfony - Configure database";
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "    ";
        $this->env->getExtension('form')->renderer->setTheme((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), array(0 => "SensioDistributionBundle::Configurator/form.html.twig"));
        // line 7
        echo "
    <div class=\"step\">
        ";
        // line 9
        $this->env->loadTemplate("SensioDistributionBundle::Configurator/steps.html.twig")->display(array_merge($context, array("index" => (isset($context["index"]) ? $context["index"] : $this->getContext($context, "index")), "count" => (isset($context["count"]) ? $context["count"] : $this->getContext($context, "count")))));
        // line 10
        echo "
        <h1>Configure your Database</h1>
        <p>If your website needs a database connection, please configure it here.</p>

        <div class=\"symfony-form-errors\">
            ";
        // line 15
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
        </div>
        <form action=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_configurator_step", array("index" => (isset($context["index"]) ? $context["index"] : $this->getContext($context, "index")))), "html", null, true);
        echo "\" method=\"POST\">
            <div class=\"symfony-form-column\">
                ";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "driver"), 'row');
        echo "
                ";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "host"), 'row');
        echo "
                ";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name"), 'row');
        echo "
            </div>
            <div class=\"symfony-form-column\">
                ";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "user"), 'row');
        echo "
                ";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "password"), 'row');
        echo "
            </div>

            ";
        // line 28
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "

            <div class=\"symfony-form-footer\">
                <p>
                    <button type=\"submit\" class=\"sf-button\">
                        <span class=\"border-l\">
                            <span class=\"border-r\">
                                <span class=\"btn-bg\">NEXT STEP</span>
                            </span>
                        </span>
                    </button>
                </p>
                <p>* mandatory fields</p>
            </div>
        </form>
    </div>
";
    }

    public function getTemplateName()
    {
        return "SensioDistributionBundle:Configurator/Step:doctrine.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1073 => 656,  1069 => 654,  1055 => 648,  1044 => 645,  1035 => 639,  1026 => 633,  1023 => 632,  1021 => 631,  1018 => 630,  1013 => 627,  1000 => 623,  997 => 622,  993 => 621,  984 => 615,  975 => 609,  972 => 608,  963 => 604,  959 => 602,  941 => 595,  937 => 593,  935 => 592,  930 => 590,  926 => 589,  919 => 587,  911 => 581,  905 => 579,  896 => 573,  893 => 572,  891 => 571,  888 => 570,  884 => 568,  880 => 566,  874 => 562,  864 => 558,  854 => 552,  838 => 544,  836 => 543,  824 => 537,  815 => 531,  800 => 523,  790 => 519,  774 => 509,  770 => 507,  762 => 504,  754 => 499,  740 => 491,  737 => 490,  718 => 482,  705 => 480,  671 => 465,  664 => 463,  655 => 457,  646 => 451,  642 => 449,  636 => 446,  628 => 444,  591 => 436,  542 => 421,  530 => 417,  297 => 200,  389 => 160,  386 => 159,  378 => 157,  334 => 141,  462 => 202,  446 => 197,  441 => 196,  431 => 189,  792 => 488,  775 => 485,  727 => 476,  706 => 473,  702 => 479,  698 => 477,  690 => 469,  686 => 472,  677 => 465,  634 => 456,  622 => 442,  606 => 449,  567 => 414,  517 => 404,  394 => 168,  382 => 131,  328 => 139,  234 => 90,  367 => 155,  353 => 149,  956 => 271,  953 => 270,  946 => 302,  942 => 300,  933 => 296,  925 => 292,  917 => 291,  914 => 290,  912 => 289,  909 => 580,  901 => 285,  898 => 284,  890 => 281,  887 => 280,  879 => 277,  870 => 560,  868 => 273,  863 => 269,  853 => 261,  848 => 548,  840 => 253,  834 => 249,  832 => 248,  822 => 244,  820 => 243,  816 => 241,  810 => 529,  807 => 528,  805 => 236,  802 => 235,  799 => 234,  791 => 262,  788 => 518,  773 => 264,  771 => 232,  768 => 231,  765 => 230,  757 => 221,  743 => 217,  738 => 214,  732 => 487,  720 => 211,  713 => 209,  688 => 202,  682 => 470,  679 => 466,  673 => 198,  668 => 464,  665 => 196,  663 => 195,  660 => 464,  657 => 193,  647 => 191,  632 => 187,  629 => 454,  626 => 443,  610 => 181,  603 => 439,  600 => 178,  588 => 175,  570 => 164,  561 => 161,  554 => 224,  522 => 406,  479 => 135,  471 => 129,  451 => 120,  418 => 112,  373 => 156,  370 => 101,  356 => 122,  12 => 36,  306 => 286,  303 => 122,  292 => 91,  280 => 194,  118 => 49,  624 => 224,  620 => 451,  612 => 220,  601 => 446,  594 => 176,  585 => 209,  580 => 207,  574 => 431,  572 => 204,  566 => 203,  559 => 427,  551 => 424,  545 => 198,  526 => 190,  507 => 156,  497 => 156,  485 => 124,  463 => 117,  447 => 113,  424 => 114,  412 => 126,  410 => 110,  406 => 111,  404 => 90,  401 => 172,  391 => 133,  376 => 103,  369 => 148,  359 => 123,  333 => 115,  329 => 131,  326 => 138,  318 => 86,  287 => 89,  261 => 50,  195 => 54,  178 => 59,  1402 => 419,  1396 => 417,  1390 => 415,  1388 => 414,  1386 => 413,  1382 => 412,  1373 => 411,  1371 => 410,  1368 => 409,  1355 => 403,  1349 => 401,  1343 => 399,  1341 => 398,  1339 => 397,  1335 => 396,  1329 => 395,  1327 => 394,  1324 => 393,  1311 => 387,  1305 => 385,  1299 => 383,  1297 => 382,  1295 => 381,  1291 => 380,  1287 => 379,  1283 => 378,  1279 => 377,  1273 => 376,  1271 => 375,  1268 => 374,  1256 => 369,  1251 => 368,  1249 => 367,  1246 => 366,  1237 => 360,  1231 => 358,  1228 => 357,  1223 => 356,  1221 => 355,  1218 => 354,  1211 => 349,  1202 => 347,  1198 => 346,  1195 => 345,  1192 => 344,  1190 => 343,  1187 => 342,  1179 => 338,  1177 => 337,  1174 => 336,  1168 => 332,  1162 => 330,  1159 => 329,  1157 => 328,  1154 => 327,  1145 => 322,  1143 => 321,  1118 => 320,  1115 => 319,  1112 => 318,  1109 => 317,  1106 => 316,  1103 => 315,  1100 => 314,  1098 => 313,  1095 => 312,  1088 => 308,  1084 => 307,  1079 => 306,  1077 => 657,  1074 => 304,  1067 => 299,  1064 => 651,  1056 => 293,  1053 => 292,  1051 => 647,  1048 => 646,  1040 => 285,  1036 => 284,  1032 => 283,  1029 => 282,  1027 => 281,  1024 => 280,  1016 => 276,  1014 => 272,  1012 => 271,  1009 => 270,  1004 => 624,  982 => 261,  979 => 260,  976 => 259,  973 => 258,  970 => 607,  967 => 606,  964 => 255,  961 => 254,  958 => 253,  955 => 600,  952 => 251,  950 => 269,  947 => 597,  939 => 243,  936 => 297,  934 => 241,  931 => 295,  923 => 588,  920 => 235,  918 => 234,  915 => 233,  903 => 286,  900 => 228,  897 => 227,  894 => 226,  892 => 282,  889 => 224,  881 => 278,  878 => 219,  876 => 276,  873 => 217,  865 => 272,  862 => 557,  860 => 268,  857 => 267,  849 => 206,  846 => 205,  844 => 546,  841 => 203,  833 => 199,  830 => 539,  828 => 538,  825 => 196,  817 => 192,  814 => 191,  812 => 530,  809 => 189,  801 => 185,  798 => 184,  796 => 521,  793 => 182,  785 => 232,  783 => 177,  780 => 513,  764 => 505,  756 => 165,  753 => 220,  751 => 163,  749 => 479,  746 => 478,  724 => 484,  721 => 153,  715 => 151,  712 => 150,  710 => 475,  707 => 208,  699 => 142,  697 => 141,  696 => 476,  695 => 139,  694 => 470,  689 => 137,  680 => 134,  675 => 132,  662 => 125,  658 => 124,  654 => 123,  649 => 462,  643 => 120,  619 => 183,  617 => 112,  614 => 111,  598 => 107,  596 => 106,  593 => 105,  557 => 96,  547 => 93,  527 => 416,  512 => 84,  509 => 228,  503 => 81,  478 => 74,  467 => 72,  456 => 68,  450 => 114,  428 => 116,  388 => 42,  371 => 156,  363 => 153,  350 => 120,  342 => 137,  335 => 134,  332 => 88,  316 => 16,  313 => 110,  290 => 119,  276 => 193,  266 => 366,  263 => 365,  255 => 101,  207 => 75,  194 => 68,  184 => 63,  76 => 17,  778 => 267,  772 => 172,  769 => 171,  767 => 170,  763 => 244,  760 => 222,  748 => 242,  745 => 493,  742 => 492,  739 => 156,  736 => 238,  734 => 237,  729 => 155,  717 => 210,  714 => 232,  711 => 231,  703 => 226,  700 => 205,  653 => 218,  650 => 192,  644 => 190,  640 => 448,  638 => 118,  633 => 209,  616 => 440,  599 => 215,  595 => 205,  587 => 434,  584 => 173,  581 => 201,  578 => 432,  576 => 101,  573 => 198,  564 => 162,  550 => 94,  546 => 423,  534 => 418,  531 => 225,  521 => 182,  515 => 305,  513 => 230,  499 => 173,  496 => 79,  493 => 143,  475 => 169,  473 => 168,  468 => 128,  454 => 121,  448 => 119,  445 => 152,  429 => 188,  422 => 184,  414 => 52,  408 => 176,  399 => 139,  396 => 138,  390 => 43,  377 => 129,  348 => 140,  345 => 147,  340 => 145,  330 => 103,  307 => 128,  300 => 121,  291 => 80,  286 => 112,  245 => 335,  200 => 72,  190 => 49,  321 => 135,  295 => 100,  274 => 110,  242 => 82,  236 => 42,  70 => 15,  692 => 474,  683 => 135,  678 => 468,  676 => 467,  666 => 126,  661 => 220,  656 => 219,  652 => 376,  645 => 369,  641 => 189,  635 => 188,  631 => 364,  625 => 453,  615 => 354,  607 => 180,  597 => 177,  590 => 204,  583 => 334,  579 => 332,  577 => 206,  575 => 328,  569 => 325,  565 => 430,  548 => 176,  540 => 160,  536 => 419,  529 => 409,  524 => 90,  516 => 294,  510 => 178,  504 => 155,  500 => 291,  490 => 142,  486 => 286,  482 => 136,  470 => 121,  464 => 125,  459 => 116,  452 => 268,  434 => 118,  421 => 90,  417 => 145,  385 => 159,  361 => 152,  344 => 24,  339 => 191,  324 => 112,  310 => 83,  302 => 125,  296 => 121,  282 => 161,  259 => 103,  244 => 43,  231 => 69,  226 => 84,  114 => 36,  104 => 31,  170 => 56,  188 => 90,  563 => 429,  560 => 191,  558 => 160,  555 => 200,  553 => 425,  549 => 411,  543 => 174,  537 => 159,  532 => 410,  528 => 160,  525 => 157,  523 => 189,  518 => 180,  514 => 415,  511 => 166,  508 => 165,  501 => 154,  495 => 289,  491 => 157,  487 => 156,  460 => 123,  455 => 115,  449 => 198,  442 => 62,  439 => 195,  436 => 132,  433 => 60,  426 => 58,  420 => 146,  415 => 180,  411 => 143,  405 => 108,  403 => 136,  400 => 47,  380 => 158,  366 => 150,  354 => 101,  331 => 140,  325 => 129,  308 => 109,  304 => 81,  272 => 91,  267 => 101,  249 => 181,  216 => 79,  186 => 72,  181 => 65,  161 => 58,  155 => 47,  152 => 46,  146 => 34,  126 => 55,  124 => 42,  58 => 13,  320 => 127,  317 => 107,  311 => 83,  288 => 118,  284 => 76,  279 => 77,  275 => 105,  256 => 96,  250 => 44,  237 => 91,  232 => 88,  222 => 83,  215 => 280,  191 => 67,  153 => 56,  150 => 55,  110 => 64,  358 => 151,  351 => 141,  347 => 119,  343 => 146,  338 => 135,  327 => 102,  323 => 128,  319 => 124,  315 => 131,  301 => 80,  299 => 8,  293 => 198,  289 => 196,  281 => 114,  277 => 136,  271 => 190,  265 => 105,  262 => 188,  260 => 363,  257 => 103,  251 => 182,  248 => 97,  239 => 64,  228 => 41,  225 => 67,  213 => 78,  211 => 81,  197 => 69,  174 => 74,  148 => 48,  134 => 39,  127 => 35,  20 => 1,  53 => 11,  270 => 102,  253 => 100,  233 => 87,  212 => 60,  210 => 77,  206 => 57,  202 => 94,  198 => 55,  192 => 53,  185 => 66,  180 => 70,  175 => 58,  172 => 57,  167 => 71,  165 => 60,  160 => 38,  137 => 29,  113 => 38,  100 => 36,  90 => 26,  81 => 30,  65 => 22,  129 => 44,  97 => 39,  84 => 24,  77 => 20,  34 => 4,  23 => 11,  480 => 75,  474 => 122,  469 => 158,  461 => 70,  457 => 153,  453 => 199,  444 => 263,  440 => 148,  437 => 61,  435 => 146,  430 => 255,  427 => 143,  423 => 57,  413 => 141,  409 => 132,  407 => 138,  402 => 107,  398 => 88,  393 => 168,  387 => 164,  384 => 106,  381 => 105,  379 => 104,  374 => 128,  368 => 126,  365 => 125,  362 => 124,  360 => 128,  355 => 150,  341 => 117,  337 => 90,  322 => 93,  314 => 88,  312 => 130,  309 => 129,  305 => 108,  298 => 120,  294 => 90,  285 => 100,  283 => 115,  278 => 106,  268 => 373,  264 => 82,  258 => 187,  252 => 68,  247 => 75,  241 => 93,  229 => 87,  220 => 81,  214 => 63,  177 => 69,  169 => 78,  140 => 51,  132 => 28,  128 => 42,  107 => 37,  61 => 12,  273 => 85,  269 => 107,  254 => 46,  243 => 73,  240 => 72,  238 => 84,  235 => 89,  230 => 62,  227 => 86,  224 => 39,  221 => 80,  219 => 101,  217 => 56,  208 => 76,  204 => 75,  179 => 44,  159 => 57,  143 => 33,  135 => 46,  119 => 40,  102 => 24,  71 => 13,  67 => 14,  63 => 18,  59 => 17,  38 => 6,  87 => 41,  28 => 3,  31 => 3,  94 => 21,  89 => 35,  85 => 23,  75 => 18,  68 => 20,  56 => 23,  26 => 6,  201 => 74,  196 => 92,  183 => 71,  171 => 73,  166 => 54,  163 => 53,  158 => 80,  156 => 58,  151 => 54,  142 => 46,  138 => 47,  136 => 71,  121 => 50,  117 => 37,  105 => 25,  91 => 25,  62 => 12,  49 => 14,  24 => 3,  25 => 3,  21 => 2,  19 => 1,  93 => 27,  88 => 28,  78 => 24,  46 => 13,  44 => 9,  27 => 3,  79 => 21,  72 => 21,  69 => 21,  47 => 10,  40 => 11,  37 => 6,  22 => 2,  246 => 96,  157 => 51,  145 => 74,  139 => 45,  131 => 48,  123 => 42,  120 => 31,  115 => 45,  111 => 47,  108 => 33,  101 => 30,  98 => 45,  96 => 30,  83 => 33,  74 => 31,  66 => 25,  55 => 12,  52 => 12,  50 => 10,  43 => 9,  41 => 7,  35 => 5,  32 => 5,  29 => 3,  209 => 58,  203 => 73,  199 => 93,  193 => 51,  189 => 66,  187 => 69,  182 => 87,  176 => 63,  173 => 85,  168 => 61,  164 => 70,  162 => 59,  154 => 49,  149 => 62,  147 => 43,  144 => 42,  141 => 51,  133 => 45,  130 => 46,  125 => 41,  122 => 71,  116 => 39,  112 => 105,  109 => 27,  106 => 51,  103 => 38,  99 => 23,  95 => 27,  92 => 43,  86 => 30,  82 => 25,  80 => 27,  73 => 16,  64 => 19,  60 => 20,  57 => 19,  54 => 15,  51 => 13,  48 => 16,  45 => 9,  42 => 7,  39 => 6,  36 => 5,  33 => 4,  30 => 3,);
    }
}

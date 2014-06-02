<?php

/* @WebProfiler/Profiler/toolbar_js.html.twig */
class __TwigTemplate_a6360bf35093f69d8f2ec3be153005708c8954d0867a17d477370a3010e44179 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<div id=\"sfwdt";
        echo twig_escape_filter($this->env, (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "html", null, true);
        echo "\" class=\"sf-toolbar\" style=\"display: none\"></div>
";
        // line 2
        $this->env->loadTemplate("@WebProfiler/Profiler/base_js.html.twig")->display($context);
        // line 3
        echo "<script>/*<![CDATA[*/
    (function () {
        ";
        // line 5
        if (("top" == (isset($context["position"]) ? $context["position"] : $this->getContext($context, "position")))) {
            // line 6
            echo "            var sfwdt = document.getElementById('sfwdt";
            echo twig_escape_filter($this->env, (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "html", null, true);
            echo "');
            document.body.insertBefore(
                document.body.removeChild(sfwdt),
                document.body.firstChild
            );
        ";
        }
        // line 12
        echo "
        Sfjs.load(
            'sfwdt";
        // line 14
        echo twig_escape_filter($this->env, (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "html", null, true);
        echo "',
            '";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_wdt", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))), "html", null, true);
        echo "',
            function(xhr, el) {
                el.style.display = -1 !== xhr.responseText.indexOf('sf-toolbarreset') ? 'block' : 'none';

                if (el.style.display == 'none') {
                    return;
                }

                if (Sfjs.getPreference('toolbar/displayState') == 'none') {
                    document.getElementById('sfToolbarMainContent-";
        // line 24
        echo twig_escape_filter($this->env, (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "html", null, true);
        echo "').style.display = 'none';
                    document.getElementById('sfToolbarClearer-";
        // line 25
        echo twig_escape_filter($this->env, (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "html", null, true);
        echo "').style.display = 'none';
                    document.getElementById('sfMiniToolbar-";
        // line 26
        echo twig_escape_filter($this->env, (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "html", null, true);
        echo "').style.display = 'block';
                } else {
                    document.getElementById('sfToolbarMainContent-";
        // line 28
        echo twig_escape_filter($this->env, (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "html", null, true);
        echo "').style.display = 'block';
                    document.getElementById('sfToolbarClearer-";
        // line 29
        echo twig_escape_filter($this->env, (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "html", null, true);
        echo "').style.display = 'block';
                    document.getElementById('sfMiniToolbar-";
        // line 30
        echo twig_escape_filter($this->env, (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "html", null, true);
        echo "').style.display = 'none';
                }
            },
            function(xhr) {
                if (xhr.status !== 0) {
                    confirm('An error occurred while loading the web debug toolbar (' + xhr.status + ': ' + xhr.statusText + ').\\n\\nDo you want to open the profiler?') && (window.location = '";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_profiler", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))), "html", null, true);
        echo "');
                }
            },
            {'maxTries': 5}
        );
    })();
/*]]>*/</script>
";
    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/toolbar_js.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 35,  79 => 29,  75 => 28,  70 => 26,  62 => 24,  50 => 15,  30 => 5,  24 => 2,  31 => 14,  23 => 12,  19 => 1,  46 => 14,  35 => 5,  217 => 56,  196 => 52,  193 => 51,  186 => 47,  183 => 46,  179 => 44,  177 => 43,  168 => 41,  160 => 38,  157 => 37,  154 => 36,  150 => 35,  146 => 34,  143 => 33,  132 => 28,  124 => 25,  121 => 24,  118 => 23,  111 => 22,  108 => 21,  105 => 20,  102 => 19,  96 => 18,  93 => 17,  90 => 16,  80 => 13,  77 => 12,  42 => 12,  36 => 15,  20 => 1,  956 => 271,  953 => 270,  950 => 269,  946 => 302,  942 => 300,  936 => 297,  933 => 296,  931 => 295,  925 => 292,  917 => 291,  914 => 290,  912 => 289,  909 => 288,  903 => 286,  901 => 285,  898 => 284,  892 => 282,  890 => 281,  887 => 280,  881 => 278,  879 => 277,  876 => 276,  870 => 274,  868 => 273,  865 => 272,  863 => 269,  860 => 268,  857 => 267,  853 => 261,  848 => 258,  840 => 253,  834 => 249,  832 => 248,  828 => 246,  822 => 244,  820 => 243,  816 => 241,  810 => 238,  807 => 237,  805 => 236,  802 => 235,  799 => 234,  796 => 233,  791 => 262,  788 => 233,  785 => 232,  780 => 303,  778 => 267,  773 => 264,  771 => 232,  768 => 231,  765 => 230,  760 => 222,  757 => 221,  753 => 220,  749 => 218,  743 => 217,  738 => 214,  732 => 213,  720 => 211,  717 => 210,  713 => 209,  707 => 208,  700 => 205,  696 => 204,  688 => 202,  682 => 201,  679 => 200,  676 => 199,  673 => 198,  668 => 197,  665 => 196,  663 => 195,  660 => 194,  657 => 193,  650 => 192,  647 => 191,  644 => 190,  641 => 189,  635 => 188,  632 => 187,  629 => 186,  626 => 184,  619 => 183,  616 => 182,  610 => 181,  607 => 180,  603 => 179,  600 => 178,  597 => 177,  594 => 176,  588 => 175,  584 => 173,  570 => 164,  564 => 162,  561 => 161,  558 => 160,  554 => 224,  551 => 221,  548 => 176,  546 => 175,  543 => 174,  540 => 160,  537 => 159,  531 => 225,  529 => 159,  525 => 157,  522 => 156,  515 => 305,  513 => 230,  509 => 228,  507 => 156,  504 => 155,  501 => 154,  493 => 143,  490 => 142,  482 => 136,  479 => 135,  471 => 129,  468 => 128,  464 => 125,  460 => 123,  454 => 121,  451 => 120,  448 => 119,  434 => 118,  428 => 116,  424 => 114,  418 => 112,  410 => 110,  408 => 109,  405 => 108,  402 => 107,  384 => 106,  381 => 105,  379 => 104,  376 => 103,  373 => 102,  370 => 101,  366 => 150,  362 => 148,  360 => 128,  356 => 126,  354 => 101,  343 => 92,  340 => 91,  337 => 90,  332 => 88,  326 => 86,  323 => 85,  320 => 84,  311 => 83,  309 => 82,  304 => 81,  301 => 80,  296 => 151,  293 => 90,  291 => 80,  288 => 79,  285 => 78,  279 => 77,  274 => 53,  265 => 51,  261 => 50,  254 => 46,  250 => 44,  244 => 43,  236 => 42,  228 => 41,  224 => 39,  221 => 38,  216 => 35,  207 => 33,  203 => 55,  200 => 54,  197 => 30,  191 => 26,  188 => 48,  182 => 23,  176 => 309,  174 => 42,  171 => 153,  169 => 78,  165 => 77,  161 => 75,  158 => 74,  155 => 73,  141 => 72,  136 => 30,  133 => 69,  129 => 27,  126 => 26,  123 => 65,  106 => 64,  103 => 63,  100 => 62,  94 => 60,  92 => 59,  87 => 14,  83 => 30,  78 => 37,  76 => 30,  73 => 29,  71 => 11,  66 => 25,  63 => 22,  61 => 21,  59 => 20,  57 => 19,  55 => 18,  53 => 17,  51 => 9,  49 => 15,  47 => 14,  43 => 8,  41 => 11,  89 => 37,  81 => 38,  68 => 10,  60 => 17,  54 => 14,  48 => 8,  45 => 13,  39 => 8,  37 => 6,  32 => 6,  29 => 3,  26 => 3,);
    }
}

<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* base.html.twig */
class __TwigTemplate_276e11dc47d6f0692aa22baac7a5bbba49a2198fdc34c827360927bd92aa6037 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
    <head>
        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src=\"https://www.googletagmanager.com/gtag/js?id=UA-160594213-1\"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());

            gtag('config', 'UA-160594213-1');
        </script>
        
        <!-- MOBILE SPECIFIC -->
       <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
       <meta http-equiv=\"content-type\" content=\"text/html; charset=UTF-8\">

        <meta name=\"keywords\" content=\"web developpeur, web developer, symfony, code, mobile, css, html, javascript\" />
        <meta name=\"author\" content=\"Karla Gergelova\" />
        <meta name=\"robots\" content=\"\" />
        <meta name=\"description\" content=\"\" />

        <!-- Facebook -->
        <meta property=\"og:title\" content=\"Karla Gergelova Portfolio\" />
        <meta property=\"og:description\" content=\"\" />
        <meta property=\"og:url\" content=\"https://www.karlagergelova.com/\">
        <meta property=\"og:image\" content=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/social-image.png"), "html", null, true);
        echo "\" />
        <meta property=\"og:site_name\" content=\"Portfolio Karla Gergelova\">
        
        <!-- FAVICONS ICON -->
        <link rel=\"icon\" href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/logo2.png"), "html", null, true);
        echo "\" type=\"image/x-icon\" />
        <link rel=\"shortcut icon\" type=\"image/x-icon\" href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/logo2.png"), "html", null, true);
        echo "\" />

        <title>";
        // line 34
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

        <!-- MOBILE SPECIFIC -->
\t    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

        ";
        // line 39
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 53
        echo "        
        ";
        // line 55
        echo "        <script src=\"https://www.google.com/recaptcha/api.js\" async defer></script>
    </head>

    <body id=\"bg\" data-target=\".navbar\" data-spy=\"scroll\" >
        <div id=\"loading-area\">
            <h1 class=\"ml4\">
            <span class=\"letters letters-1\">Ready</span>
            <span class=\"letters letters-2\">Set</span>
            <span class=\"letters letters-3\">Go!</span>
            </h1>
        </div>

        <div class=\"page-wraper\">
                ";
        // line 69
        echo "                ";
        $this->loadTemplate("portfolio2/header.html.twig", "base.html.twig", 69)->display($context);
        // line 70
        echo "            <div class=\"page-content\">
                ";
        // line 71
        $this->displayBlock('body', $context, $blocks);
        // line 74
        echo "            </div>
            ";
        // line 76
        echo "            ";
        $this->loadTemplate("portfolio2/footer.html.twig", "base.html.twig", 76)->display($context);
        // line 77
        echo "
           <!-- scroll top button -->
            <button class=\"scroltop fa fa-chevron-up\" ></button>
        </div>
        ";
        // line 81
        $this->displayBlock('javascripts', $context, $blocks);
        // line 130
        echo "
        ";
        // line 133
        echo "
    </body>

</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 34
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Karla Gergelova | Développeur Web et Web Mobile";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 39
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 40
        echo "        <!-- STYLESHEETS -->
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/plugins.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/style.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/plugins/bootstrap/bootstrap.min.css"), "html", null, true);
        echo "\">
        <link class=\"skin\"  rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/skin/skin-1.css"), "html", null, true);
        echo "\">
        <link  rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/templete.css"), "html", null, true);
        echo "\">
        <link  rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/styles.css"), "html", null, true);
        echo "\">

        <!-- REVOLUTION SLIDER CSS -->
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("../plugins/revolution/revolution/css/settings.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("../plugins/revolution/revolution/css/layers.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("../plugins/revolution/revolution/css/navigation.css"), "html", null, true);
        echo "\">
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 71
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 72
        echo "                
                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 81
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 82
        echo "          <!-- JavaScript  files -->
        <script src=\"";
        // line 83
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery.min.js"), "html", null, true);
        echo "\"></script><!-- JQUERY.MIN JS -->
        ";
        // line 85
        echo "        <script src=\"https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js\" integrity=\"sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo\" crossorigin=\"anonymous\"></script>
        ";
        // line 87
        echo "        <script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js\" integrity=\"sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI\" crossorigin=\"anonymous\"></script>
        <script src=\"https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/js/bootstrap-select.min.js\"></script>
        ";
        // line 90
        echo "        <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/bootstrap-touchspin/jquery.bootstrap-touchspin.js"), "html", null, true);
        echo "\"></script><!-- FORM JS -->
        <script src=\"";
        // line 91
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/magnific-popup/magnific-popup.js"), "html", null, true);
        echo "\"></script><!-- MAGNIFIC-POPUP JS -->
        <script src=\"";
        // line 92
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/counter/waypoints-min.js"), "html", null, true);
        echo "\"></script><!-- WAYPOINTS JS -->
        <script src=\"";
        // line 93
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/counter/counterup.min.js"), "html", null, true);
        echo "\"></script><!-- COUNTERUP JS -->
        <script src=\"";
        // line 94
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/imagesloaded/imagesloaded.js"), "html", null, true);
        echo "\"></script><!-- MASONRY  -->
        <script src=\"";
        // line 95
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/masonry/masonry-3.1.4.js"), "html", null, true);
        echo "\"></script><!-- MASONRY  -->
        <script src=\"";
        // line 96
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/masonry/masonry.filter.js"), "html", null, true);
        echo "\"></script><!-- MASONRY  -->
        <script src=\"";
        // line 97
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/owl-carousel/owl.carousel.js"), "html", null, true);
        echo "\"></script><!-- OWL  SLIDER  -->  
        <script src=\"";
        // line 98
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/dz.carousel.js"), "html", null, true);
        echo "\"></script><!-- SORTCODE FUCTIONS  -->
        <script src=\"";
        // line 99
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/custom.js"), "html", null, true);
        echo "\"></script><!-- CUSTOM FUCTIONS  -->
        <script src=\"";
        // line 100
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("https://www.google.com/recaptcha/api.js"), "html", null, true);
        echo "\"></script> <!-- Google API For Recaptcha  -->
        <script src=\"";
        // line 101
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/dz.ajax.js"), "html", null, true);
        echo "\"></script><!-- Contact Us -->
        <!-- REVOLUTION JS FILES-->
        <script src=\"";
        // line 103
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/revolution/revolution/js/jquery.themepunch.tools.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 104
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/revolution/revolution/js/jquery.themepunch.revolution.min.js"), "html", null, true);
        echo "\"></script>
        <!-- Slider revolution 5.0 Extensions  (Load Extensions only on Local File Systems !  The following part can be removed on Server for On Demand Loading) -->
        <script src=\"";
        // line 106
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/revolution/revolution/js/extensions/revolution.extension.actions.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 107
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/revolution/revolution/js/extensions/revolution.extension.carousel.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 108
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/revolution/revolution/js/extensions/revolution.extension.kenburn.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 109
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/revolution/revolution/js/extensions/revolution.extension.layeranimation.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 110
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/revolution/revolution/js/extensions/revolution.extension.migration.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 111
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/revolution/revolution/js/extensions/revolution.extension.navigation.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 112
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/revolution/revolution/js/extensions/revolution.extension.parallax.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 113
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/revolution/revolution/js/extensions/revolution.extension.slideanims.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 114
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/revolution/revolution/js/extensions/revolution.extension.video.min.js"), "html", null, true);
        echo "\"></script>
        <script  src=\"";
        // line 115
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/rev.slider.js"), "html", null, true);
        echo "\"></script>

        


        <script>
            \$( window ).load(function() {
                'use strict';
                dz_rev_slider_1();
            });
                /*ready*/
        </script>
        

        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  376 => 115,  372 => 114,  368 => 113,  364 => 112,  360 => 111,  356 => 110,  352 => 109,  348 => 108,  344 => 107,  340 => 106,  335 => 104,  331 => 103,  326 => 101,  322 => 100,  318 => 99,  314 => 98,  310 => 97,  306 => 96,  302 => 95,  298 => 94,  294 => 93,  290 => 92,  286 => 91,  281 => 90,  277 => 87,  274 => 85,  270 => 83,  267 => 82,  257 => 81,  246 => 72,  236 => 71,  224 => 51,  220 => 50,  216 => 49,  210 => 46,  206 => 45,  202 => 44,  198 => 43,  194 => 42,  190 => 41,  187 => 40,  177 => 39,  158 => 34,  144 => 133,  141 => 130,  139 => 81,  133 => 77,  130 => 76,  127 => 74,  125 => 71,  122 => 70,  119 => 69,  104 => 55,  101 => 53,  99 => 39,  91 => 34,  86 => 32,  82 => 31,  75 => 27,  47 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">
    <head>
        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src=\"https://www.googletagmanager.com/gtag/js?id=UA-160594213-1\"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());

            gtag('config', 'UA-160594213-1');
        </script>
        
        <!-- MOBILE SPECIFIC -->
       <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
       <meta http-equiv=\"content-type\" content=\"text/html; charset=UTF-8\">

        <meta name=\"keywords\" content=\"web developpeur, web developer, symfony, code, mobile, css, html, javascript\" />
        <meta name=\"author\" content=\"Karla Gergelova\" />
        <meta name=\"robots\" content=\"\" />
        <meta name=\"description\" content=\"\" />

        <!-- Facebook -->
        <meta property=\"og:title\" content=\"Karla Gergelova Portfolio\" />
        <meta property=\"og:description\" content=\"\" />
        <meta property=\"og:url\" content=\"https://www.karlagergelova.com/\">
        <meta property=\"og:image\" content=\"{{ asset('images/social-image.png') }}\" />
        <meta property=\"og:site_name\" content=\"Portfolio Karla Gergelova\">
        
        <!-- FAVICONS ICON -->
        <link rel=\"icon\" href=\"{{ asset('images/logo2.png') }}\" type=\"image/x-icon\" />
        <link rel=\"shortcut icon\" type=\"image/x-icon\" href=\"{{ asset('images/logo2.png') }}\" />

        <title>{% block title %}Karla Gergelova | Développeur Web et Web Mobile{% endblock %}</title>

        <!-- MOBILE SPECIFIC -->
\t    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

        {% block stylesheets %}
        <!-- STYLESHEETS -->
        <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('css/plugins.css') }}\">
        <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('css/style.css') }}\">
        <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('css/plugins/bootstrap/bootstrap.min.css') }}\">
        <link class=\"skin\"  rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('css/skin/skin-1.css') }}\">
        <link  rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('css/templete.css') }}\">
        <link  rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('css/styles.css') }}\">

        <!-- REVOLUTION SLIDER CSS -->
        <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('../plugins/revolution/revolution/css/settings.css') }}\">
        <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('../plugins/revolution/revolution/css/layers.css') }}\">
        <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('../plugins/revolution/revolution/css/navigation.css') }}\">
        {% endblock %}
        
        {#Recaptcha#}
        <script src=\"https://www.google.com/recaptcha/api.js\" async defer></script>
    </head>

    <body id=\"bg\" data-target=\".navbar\" data-spy=\"scroll\" >
        <div id=\"loading-area\">
            <h1 class=\"ml4\">
            <span class=\"letters letters-1\">Ready</span>
            <span class=\"letters letters-2\">Set</span>
            <span class=\"letters letters-3\">Go!</span>
            </h1>
        </div>

        <div class=\"page-wraper\">
                {#Header#}
                {% include 'portfolio2/header.html.twig' %}
            <div class=\"page-content\">
                {% block body %}
                
                {% endblock %}
            </div>
            {#Footer#}
            {% include 'portfolio2/footer.html.twig' %}

           <!-- scroll top button -->
            <button class=\"scroltop fa fa-chevron-up\" ></button>
        </div>
        {% block javascripts %}
          <!-- JavaScript  files -->
        <script src=\"{{ asset('js/jquery.min.js') }}\"></script><!-- JQUERY.MIN JS -->
        {# <script src=\"{{ asset('plugins/bootstrap/js/popper.min.js') }}\"></script><!-- POPPER.MIN JS --> #}
        <script src=\"https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js\" integrity=\"sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo\" crossorigin=\"anonymous\"></script>
        {# <script src=\"{{ asset('plugins/bootstrap/js/bootstrap.min.js') }}\"></script><!-- BOOTSTRAP.MIN JS --> #}
        <script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js\" integrity=\"sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI\" crossorigin=\"anonymous\"></script>
        <script src=\"https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/js/bootstrap-select.min.js\"></script>
        {# <script src=\"{{ asset('plugins/bootstrap-select/bootstrap-select.min.js') }}\"></script><!-- FORM JS --> #}
        <script src=\"{{ asset('plugins/bootstrap-touchspin/jquery.bootstrap-touchspin.js') }}\"></script><!-- FORM JS -->
        <script src=\"{{ asset('plugins/magnific-popup/magnific-popup.js') }}\"></script><!-- MAGNIFIC-POPUP JS -->
        <script src=\"{{ asset('plugins/counter/waypoints-min.js') }}\"></script><!-- WAYPOINTS JS -->
        <script src=\"{{ asset('plugins/counter/counterup.min.js') }}\"></script><!-- COUNTERUP JS -->
        <script src=\"{{ asset('plugins/imagesloaded/imagesloaded.js') }}\"></script><!-- MASONRY  -->
        <script src=\"{{ asset('plugins/masonry/masonry-3.1.4.js') }}\"></script><!-- MASONRY  -->
        <script src=\"{{ asset('plugins/masonry/masonry.filter.js') }}\"></script><!-- MASONRY  -->
        <script src=\"{{ asset('plugins/owl-carousel/owl.carousel.js') }}\"></script><!-- OWL  SLIDER  -->  
        <script src=\"{{ asset('js/dz.carousel.js') }}\"></script><!-- SORTCODE FUCTIONS  -->
        <script src=\"{{ asset('js/custom.js') }}\"></script><!-- CUSTOM FUCTIONS  -->
        <script src=\"{{ asset('https://www.google.com/recaptcha/api.js')}}\"></script> <!-- Google API For Recaptcha  -->
        <script src=\"{{ asset('js/dz.ajax.js') }}\"></script><!-- Contact Us -->
        <!-- REVOLUTION JS FILES-->
        <script src=\"{{ asset('plugins/revolution/revolution/js/jquery.themepunch.tools.min.js') }}\"></script>
        <script src=\"{{ asset('plugins/revolution/revolution/js/jquery.themepunch.revolution.min.js') }}\"></script>
        <!-- Slider revolution 5.0 Extensions  (Load Extensions only on Local File Systems !  The following part can be removed on Server for On Demand Loading) -->
        <script src=\"{{ asset('plugins/revolution/revolution/js/extensions/revolution.extension.actions.min.js') }}\"></script>
        <script src=\"{{ asset('plugins/revolution/revolution/js/extensions/revolution.extension.carousel.min.js') }}\"></script>
        <script src=\"{{ asset('plugins/revolution/revolution/js/extensions/revolution.extension.kenburn.min.js') }}\"></script>
        <script src=\"{{ asset('plugins/revolution/revolution/js/extensions/revolution.extension.layeranimation.min.js') }}\"></script>
        <script src=\"{{ asset('plugins/revolution/revolution/js/extensions/revolution.extension.migration.min.js') }}\"></script>
        <script src=\"{{ asset('plugins/revolution/revolution/js/extensions/revolution.extension.navigation.min.js') }}\"></script>
        <script src=\"{{ asset('plugins/revolution/revolution/js/extensions/revolution.extension.parallax.min.js') }}\"></script>
        <script src=\"{{ asset('plugins/revolution/revolution/js/extensions/revolution.extension.slideanims.min.js') }}\"></script>
        <script src=\"{{ asset('plugins/revolution/revolution/js/extensions/revolution.extension.video.min.js') }}\"></script>
        <script  src=\"{{ asset('js/rev.slider.js') }}\"></script>

        


        <script>
            \$( window ).load(function() {
                'use strict';
                dz_rev_slider_1();
            });
                /*ready*/
        </script>
        

        {% endblock %}

        {# <!-- Go to www.addthis.com/dashboard to customize your tools -->
        <script type=\"text/javascript\" src=\"//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5ee1e9351778808e\"></script> #}

    </body>

</html>
", "base.html.twig", "/Users/karlagergelova/Documents/GitHub/portfolio2/templates/base.html.twig");
    }
}

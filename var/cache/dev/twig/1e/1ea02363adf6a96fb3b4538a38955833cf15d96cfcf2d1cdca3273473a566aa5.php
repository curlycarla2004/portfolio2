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
class __TwigTemplate_afd9efe60b670ddbe131466abfb6b1b90545b60043e3b66d9a88bfffd86d82fa extends Template
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
        <meta charset=\"utf-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"keywords\" content=\"\" />
        <meta name=\"author\" content=\"\" />
        <meta name=\"robots\" content=\"\" />
        <meta name=\"description\" content=\"Resume theme that is absolutely perfect tool for any type of resume or CV which promote you in professional looking manner. It is a standard resume in which you will look stunning in any device.\" />
        <meta property=\"og:title\" content=\"Karla Gergelova Resume\" />
        <meta property=\"og:description\" content=\"Resume theme that is absolutely perfect tool for any type of resume or CV which promote you in professional looking manner. It is a standard resume in which you will look stunning in any device.\" />
        <meta property=\"og:image\" content=\"http://winkit.dexignlab.com/10_resume/social-image.png\" />
        <meta name=\"format-detection\" content=\"telephone=no\">
        
        <!-- FAVICONS ICON -->
        <link rel=\"icon\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/logo2.png"), "html", null, true);
        echo "\" type=\"image/x-icon\" />
        <link rel=\"shortcut icon\" type=\"image/x-icon\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/logo2.png"), "html", null, true);
        echo "\" />

        <title>";
        // line 19
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

        <!-- MOBILE SPECIFIC -->
\t    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

        ";
        // line 24
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 38
        echo "    </head>

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
        // line 51
        echo "                ";
        $this->loadTemplate("portfolio2/header.html.twig", "base.html.twig", 51)->display($context);
        // line 52
        echo "            <div class=\"page-content\">
                ";
        // line 53
        $this->displayBlock('body', $context, $blocks);
        // line 56
        echo "            </div>
            ";
        // line 58
        echo "            ";
        $this->loadTemplate("portfolio2/footer.html.twig", "base.html.twig", 58)->display($context);
        // line 59
        echo "
           <!-- scroll top button -->
            <button class=\"scroltop fa fa-chevron-up\" ></button>
        </div>
        ";
        // line 63
        $this->displayBlock('javascripts', $context, $blocks);
        // line 106
        echo "
        ";
        // line 109
        echo "
    </body>

</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 19
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Karla Gergelova | Développeur Web";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 24
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 25
        echo "        <!-- STYLESHEETS -->
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/plugins.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/style.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/plugins/bootstrap/bootstrap.min.css"), "html", null, true);
        echo "\">
        <link class=\"skin\"  rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/skin/skin-1.css"), "html", null, true);
        echo "\">
        <link  rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/templete.css"), "html", null, true);
        echo "\">
        <link  rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/styles.css"), "html", null, true);
        echo "\">

        <!-- REVOLUTION SLIDER CSS -->
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("../plugins/revolution/revolution/css/settings.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("../plugins/revolution/revolution/css/layers.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("../plugins/revolution/revolution/css/navigation.css"), "html", null, true);
        echo "\">
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 53
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 54
        echo "                
                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 63
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 64
        echo "          <!-- JavaScript  files -->
        <script src=\"";
        // line 65
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery.min.js"), "html", null, true);
        echo "\"></script><!-- JQUERY.MIN JS -->
        ";
        // line 67
        echo "        <script src=\"https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js\" integrity=\"sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo\" crossorigin=\"anonymous\"></script>
        ";
        // line 69
        echo "        <script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js\" integrity=\"sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI\" crossorigin=\"anonymous\"></script>
        <script src=\"https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/js/bootstrap-select.min.js\"></script>
        ";
        // line 72
        echo "        <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/bootstrap-touchspin/jquery.bootstrap-touchspin.js"), "html", null, true);
        echo "\"></script><!-- FORM JS -->
        <script src=\"";
        // line 73
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/magnific-popup/magnific-popup.js"), "html", null, true);
        echo "\"></script><!-- MAGNIFIC-POPUP JS -->
        <script src=\"";
        // line 74
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/counter/waypoints-min.js"), "html", null, true);
        echo "\"></script><!-- WAYPOINTS JS -->
        <script src=\"";
        // line 75
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/counter/counterup.min.js"), "html", null, true);
        echo "\"></script><!-- COUNTERUP JS -->
        <script src=\"";
        // line 76
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/imagesloaded/imagesloaded.js"), "html", null, true);
        echo "\"></script><!-- MASONRY  -->
        <script src=\"";
        // line 77
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/masonry/masonry-3.1.4.js"), "html", null, true);
        echo "\"></script><!-- MASONRY  -->
        <script src=\"";
        // line 78
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/masonry/masonry.filter.js"), "html", null, true);
        echo "\"></script><!-- MASONRY  -->
        <script src=\"";
        // line 79
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/owl-carousel/owl.carousel.js"), "html", null, true);
        echo "\"></script><!-- OWL  SLIDER  -->  
        <script src=\"";
        // line 80
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/dz.carousel.js"), "html", null, true);
        echo "\"></script><!-- SORTCODE FUCTIONS  -->
        <script src=\"";
        // line 81
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/custom.js"), "html", null, true);
        echo "\"></script><!-- CUSTOM FUCTIONS  -->
        <script src=\"";
        // line 82
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("https://www.google.com/recaptcha/api.js"), "html", null, true);
        echo "\"></script> <!-- Google API For Recaptcha  -->
        <script src=\"";
        // line 83
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/dz.ajax.js"), "html", null, true);
        echo "\"></script><!-- Contact Us -->
        <!-- REVOLUTION JS FILES-->
        <script src=\"";
        // line 85
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/revolution/revolution/js/jquery.themepunch.tools.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 86
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/revolution/revolution/js/jquery.themepunch.revolution.min.js"), "html", null, true);
        echo "\"></script>
        <!-- Slider revolution 5.0 Extensions  (Load Extensions only on Local File Systems !  The following part can be removed on Server for On Demand Loading) -->
        <script src=\"";
        // line 88
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/revolution/revolution/js/extensions/revolution.extension.actions.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 89
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/revolution/revolution/js/extensions/revolution.extension.carousel.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 90
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/revolution/revolution/js/extensions/revolution.extension.kenburn.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 91
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/revolution/revolution/js/extensions/revolution.extension.layeranimation.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 92
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/revolution/revolution/js/extensions/revolution.extension.migration.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 93
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/revolution/revolution/js/extensions/revolution.extension.navigation.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 94
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/revolution/revolution/js/extensions/revolution.extension.parallax.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 95
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/revolution/revolution/js/extensions/revolution.extension.slideanims.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 96
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/revolution/revolution/js/extensions/revolution.extension.video.min.js"), "html", null, true);
        echo "\"></script>
        <script  src=\"";
        // line 97
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
        return array (  354 => 97,  350 => 96,  346 => 95,  342 => 94,  338 => 93,  334 => 92,  330 => 91,  326 => 90,  322 => 89,  318 => 88,  313 => 86,  309 => 85,  304 => 83,  300 => 82,  296 => 81,  292 => 80,  288 => 79,  284 => 78,  280 => 77,  276 => 76,  272 => 75,  268 => 74,  264 => 73,  259 => 72,  255 => 69,  252 => 67,  248 => 65,  245 => 64,  235 => 63,  224 => 54,  214 => 53,  202 => 36,  198 => 35,  194 => 34,  188 => 31,  184 => 30,  180 => 29,  176 => 28,  172 => 27,  168 => 26,  165 => 25,  155 => 24,  136 => 19,  122 => 109,  119 => 106,  117 => 63,  111 => 59,  108 => 58,  105 => 56,  103 => 53,  100 => 52,  97 => 51,  83 => 38,  81 => 24,  73 => 19,  68 => 17,  64 => 16,  47 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">
    <head>
        <meta charset=\"utf-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"keywords\" content=\"\" />
        <meta name=\"author\" content=\"\" />
        <meta name=\"robots\" content=\"\" />
        <meta name=\"description\" content=\"Resume theme that is absolutely perfect tool for any type of resume or CV which promote you in professional looking manner. It is a standard resume in which you will look stunning in any device.\" />
        <meta property=\"og:title\" content=\"Karla Gergelova Resume\" />
        <meta property=\"og:description\" content=\"Resume theme that is absolutely perfect tool for any type of resume or CV which promote you in professional looking manner. It is a standard resume in which you will look stunning in any device.\" />
        <meta property=\"og:image\" content=\"http://winkit.dexignlab.com/10_resume/social-image.png\" />
        <meta name=\"format-detection\" content=\"telephone=no\">
        
        <!-- FAVICONS ICON -->
        <link rel=\"icon\" href=\"{{ asset('images/logo2.png') }}\" type=\"image/x-icon\" />
        <link rel=\"shortcut icon\" type=\"image/x-icon\" href=\"{{ asset('images/logo2.png') }}\" />

        <title>{% block title %}Karla Gergelova | Développeur Web{% endblock %}</title>

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
", "base.html.twig", "C:\\Users\\curly\\OneDrive\\Plocha\\SYMFONY projects\\portfolio2\\templates\\base.html.twig");
    }
}

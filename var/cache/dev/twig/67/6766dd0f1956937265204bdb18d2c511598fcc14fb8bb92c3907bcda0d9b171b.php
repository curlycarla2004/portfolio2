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

/* portfolio2/home.html.twig */
class __TwigTemplate_82cc73e4220f4018c2c4e0cf8c24ec3da657f26b3893a4b7fb3425ff20904849 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "portfolio2/home.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "portfolio2/home.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "portfolio2/home.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
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

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "

\t<!-- Slider -->
        <div class=\"main-slider style-two default-banner\" id=\"accueil\">
            <div class=\"tp-banner-container\">
                <div class=\"tp-banner\" >
\t\t\t\t\t<div id=\"rev_slider_989_1_wrapper\" class=\"rev_slider_wrapper fullscreen-container\" data-alias=\"app-landing-page\" data-source=\"gallery\" style=\"background-color:transparent;padding:0px;\">
\t\t\t\t\t\t<!-- START REVOLUTION SLIDER 5.3.0.1 fullscreen mode -->
\t\t\t\t\t\t<div id=\"rev_slider_989_1\" class=\"rev_slider fullscreenbanner\" style=\"display:none;\" data-version=\"5.3.0.1\">
\t\t\t\t\t\t\t<ul>\t<!-- SLIDE  -->
\t\t\t\t\t\t\t\t<li data-index=\"rs-2759\" data-transition=\"fade\" data-slotamount=\"default\" data-hideafterloop=\"0\" data-hideslideonmobile=\"off\"  data-easein=\"default\" data-easeout=\"default\" data-masterspeed=\"300\"  data-rotate=\"0\"  data-saveperformance=\"off\"  data-title=\"Slide\" data-param1=\"\" data-param2=\"\" data-param3=\"\" data-param4=\"\" data-param5=\"\" data-param6=\"\" data-param7=\"\" data-param8=\"\" data-param9=\"\" data-param10=\"\" data-description=\"\">
\t\t\t\t\t\t\t\t\t<!-- MAIN IMAGE -->
\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/nature.jpg"), "html", null, true);
        echo "\"  alt=\"nature background\"  data-bgposition=\"center center\" data-kenburns=\"on\" data-duration=\"30000\" data-ease=\"Linear.easeNone\" data-scalestart=\"100\" data-scaleend=\"120\" data-rotatestart=\"0\" data-rotateend=\"0\" data-offsetstart=\"0 0\" data-offsetend=\"0 0\" data-bgparallax=\"5\" class=\"rev-slidebg\" data-no-retina>
\t\t\t\t\t\t\t\t\t<!-- LAYERS -->

\t\t\t\t\t\t\t\t\t<!-- LAYER NR. 1 -->
\t\t\t\t\t\t\t\t\t<div class=\"tp-caption LandingPage-Title   tp-resizeme\" 
\t\t\t\t\t\t\t\t\t\tid=\"slide-2759-layer-1\" 
\t\t\t\t\t\t\t\t\t\tdata-x=\"['center','center','center','left']\" data-hoffset=\"['230','180','210','200']\" 
\t\t\t\t\t\t\t\t\t\tdata-y=\"['top','top','top','top']\" data-voffset=\"['176','146','36','128']\" 
\t\t\t\t\t\t\t\t\t\tdata-fontsize=\"['60','60','60','40']\"
\t\t\t\t\t\t\t\t\t\tdata-lineheight=\"['80','80','60','60']\"
\t\t\t\t\t\t\t\t\t\tdata-width=\"none\"
\t\t\t\t\t\t\t\t\t\tdata-height=\"none\"
\t\t\t\t\t\t\t\t\t\tdata-whitespace=\"nowrap\"
\t\t\t\t\t\t\t 
\t\t\t\t\t\t\t\t\t\tdata-type=\"text\" 
\t\t\t\t\t\t\t\t\t\tdata-responsive_offset=\"on\" 

\t\t\t\t\t\t\t\t\t\tdata-frames='[{\"from\":\"x:-50px;opacity:0;\",\"speed\":1500,\"to\":\"o:1;\",\"delay\":500,\"ease\":\"Power3.easeOut\"},{\"delay\":\"wait\",\"speed\":300,\"to\":\"opacity:0;\",\"ease\":\"nothing\"}]'
\t\t\t\t\t\t\t\t\t\tdata-textAlign=\"['left','left','left','left']\"
\t\t\t\t\t\t\t\t\t\tdata-paddingtop=\"[0,0,0,0]\"
\t\t\t\t\t\t\t\t\t\tdata-paddingright=\"[0,0,0,0]\"
\t\t\t\t\t\t\t\t\t\tdata-paddingbottom=\"[0,0,0,0]\"
\t\t\t\t\t\t\t\t\t\tdata-paddingleft=\"[0,0,0,0]\"

\t\t\t\t\t\t\t\t\t\tstyle=\"z-index: 5; white-space: nowrap;\"><span>KARLA<br/>GERGELOVA</span>
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t<!-- LAYER NR. 2 -->
\t\t\t\t\t\t\t\t\t<div class=\"tp-caption tp-shape tp-shapewrapper  tp-resizeme\" 
\t\t\t\t\t\t\t\t\t\t id=\"slide-2759-layer-2\" 
\t\t\t\t\t\t\t\t\t\t data-x=\"['center','center','center','left']\" data-hoffset=\"['80','80','90','200']\" 
\t\t\t\t\t\t\t\t\t\t data-y=\"['top','top','top','top']\" data-voffset=\"['433','403','240','332']\" 
\t\t\t\t\t\t\t\t\t\t\t\t\tdata-width=\"100\"
\t\t\t\t\t\t\t\t\t\tdata-height=\"3\"
\t\t\t\t\t\t\t\t\t\tdata-whitespace=\"nowrap\"
\t\t\t\t\t\t\t 
\t\t\t\t\t\t\t\t\t\tdata-type=\"shape\" 
\t\t\t\t\t\t\t\t\t\tdata-responsive_offset=\"on\" 

\t\t\t\t\t\t\t\t\t\tdata-frames='[{\"from\":\"x:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;\",\"mask\":\"x:0px;y:0px;\",\"speed\":1500,\"to\":\"o:1;\",\"delay\":600,\"ease\":\"Power3.easeOut\"},{\"delay\":\"wait\",\"speed\":300,\"to\":\"opacity:0;\",\"ease\":\"nothing\"}]'
\t\t\t\t\t\t\t\t\t\tdata-textAlign=\"['left','left','left','left']\"
\t\t\t\t\t\t\t\t\t\tdata-paddingtop=\"[0,0,0,0]\"
\t\t\t\t\t\t\t\t\t\tdata-paddingright=\"[0,0,0,0]\"
\t\t\t\t\t\t\t\t\t\tdata-paddingbottom=\"[0,0,0,0]\"
\t\t\t\t\t\t\t\t\t\tdata-paddingleft=\"[0,0,0,0]\"

\t\t\t\t\t\t\t\t\t\tstyle=\"z-index: 6;background-color:rgb(255,255,255);border-color:rgba(0, 0, 0, 0);border-width:0px;\"> </div>

\t\t\t\t\t\t\t\t\t<!-- LAYER NR. 3 -->
\t\t\t\t\t\t\t\t\t<div class=\"tp-caption LandingPage-SubTitle   tp-resizeme\" 
\t\t\t\t\t\t\t\t\t\t id=\"slide-2759-layer-3\" 
\t\t\t\t\t\t\t\t\t\t data-x=\"['center','center','center','left']\" data-hoffset=\"['197','197','179','200']\" 
\t\t\t\t\t\t\t\t\t\t data-y=\"['top','top','top','top']\" data-voffset=\"['454','425','263','355']\" 
\t\t\t\t\t\t\t\t\t\t\t\t\tdata-fontsize=\"['20','20','17','17']\"
\t\t\t\t\t\t\t\t\t\tdata-lineheight=\"['30','30','25','25']\"
\t\t\t\t\t\t\t\t\t\tdata-width=\"['330','330','280','250']\"
\t\t\t\t\t\t\t\t\t\tdata-height=\"none\"
\t\t\t\t\t\t\t\t\t\tdata-whitespace=\"normal\"
\t\t\t\t\t\t\t 
\t\t\t\t\t\t\t\t\t\tdata-type=\"text\" 
\t\t\t\t\t\t\t\t\t\tdata-responsive_offset=\"on\" 

\t\t\t\t\t\t\t\t\t\tdata-frames='[{\"from\":\"x:-50px;opacity:0;\",\"speed\":1500,\"to\":\"o:1;\",\"delay\":700,\"ease\":\"Power3.easeOut\"},{\"delay\":\"wait\",\"speed\":300,\"to\":\"opacity:0;\",\"ease\":\"nothing\"}]'
\t\t\t\t\t\t\t\t\t\tdata-textAlign=\"['left','left','left','left']\"
\t\t\t\t\t\t\t\t\t\tdata-paddingtop=\"[0,0,0,0]\"
\t\t\t\t\t\t\t\t\t\tdata-paddingright=\"[0,0,0,0]\"
\t\t\t\t\t\t\t\t\t\tdata-paddingbottom=\"[0,0,0,0]\"
\t\t\t\t\t\t\t\t\t\tdata-paddingleft=\"[0,0,0,0]\"

\t\t\t\t\t\t\t\t\t\tstyle=\"z-index: 7; min-width: 330px; max-width: 330px; white-space: normal;font-style:italic;\">
\t\t\t\t\t\t\t\t\t\tDéveloppeur Web et Web Mobile</div>

\t\t\t\t\t\t\t\t\t<!-- LAYER NR. 4 -->
\t\t\t\t\t\t\t\t\t<div class=\"tp-caption   tp-resizeme\" 
\t\t\t\t\t\t\t\t\t\t id=\"slide-2759-layer-4\" 
\t\t\t\t\t\t\t\t\t\t data-x=\"['center','center','center','center']\" data-hoffset=\"['-150','-150','-130','-229']\" 
\t\t\t\t\t\t\t\t\t\t data-y=\"['top','top','top','top']\" data-voffset=\"['175','145','35','124']\" 
\t\t\t\t\t\t\t\t\t\t\t\t\tdata-width=\"none\"
\t\t\t\t\t\t\t\t\t\tdata-height=\"none\"
\t\t\t\t\t\t\t\t\t\tdata-whitespace=\"nowrap\"
\t\t\t\t\t\t\t 
\t\t\t\t\t\t\t\t\t\tdata-type=\"image\" 
\t\t\t\t\t\t\t\t\t\tdata-responsive_offset=\"on\" 

\t\t\t\t\t\t\t\t\t\tdata-frames='[{\"from\":\"x:0;y:0;z:0;rX:0;rY:0;rZ:0;sX:0.75;sY:0.75;skX:0;skY:0;opacity:0;\",\"speed\":1500,\"to\":\"o:1;\",\"delay\":1000,\"ease\":\"Power3.easeOut\"},{\"delay\":\"wait\",\"speed\":300,\"to\":\"opacity:0;\",\"ease\":\"nothing\"}]'
\t\t\t\t\t\t\t\t\t\tdata-textAlign=\"['left','left','left','left']\"
\t\t\t\t\t\t\t\t\t\tdata-paddingtop=\"[0,0,0,0]\"
\t\t\t\t\t\t\t\t\t\tdata-paddingright=\"[0,0,0,0]\"
\t\t\t\t\t\t\t\t\t\tdata-paddingbottom=\"[0,0,0,0]\"
\t\t\t\t\t\t\t\t\t\tdata-paddingleft=\"[0,0,0,0]\"

\t\t\t\t\t\t\t\t\t\tstyle=\"z-index: 8;border-width:0px;\"><img src=\"";
        // line 109
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/main-slider/flat_ipad2.png"), "html", null, true);
        echo "\" alt=\"ipad maquette\" data-ww=\"['251px','251px','251px','251px']\" data-hh=\"['355px','355px','355px','355px']\" width=\"251\" height=\"355\" data-no-retina> </div>

\t\t\t\t\t\t\t\t\t<!-- LAYER NR. 5 -->
\t\t\t\t\t\t\t\t\t<div class=\"tp-caption   tp-resizeme\" 
\t\t\t\t\t\t\t\t\t\t id=\"slide-2759-layer-6\" 
\t\t\t\t\t\t\t\t\t\t data-x=\"['center','center','center','center']\" data-hoffset=\"['-150','-150','-130','-228']\" 
\t\t\t\t\t\t\t\t\t\t data-y=\"['top','top','top','top']\" data-voffset=\"['207','177','67','156']\" 
\t\t\t\t\t\t\t\t\t\t\t\t\tdata-width=\"none\"
\t\t\t\t\t\t\t\t\t\tdata-height=\"none\"
\t\t\t\t\t\t\t\t\t\tdata-whitespace=\"nowrap\"
\t\t\t\t\t\t\t 
\t\t\t\t\t\t\t\t\t\tdata-type=\"image\" 
\t\t\t\t\t\t\t\t\t\tdata-responsive_offset=\"on\" 

\t\t\t\t\t\t\t\t\t\tdata-frames='[{\"from\":\"z:0;rX:0deg;rY:0;rZ:0;sX:2;sY:2;skX:0;skY:0;opacity:0;\",\"mask\":\"x:0px;y:0px;\",\"speed\":1500,\"to\":\"o:1;\",\"delay\":1750,\"ease\":\"Power2.easeOut\"},{\"delay\":\"wait\",\"speed\":300,\"to\":\"opacity:0;\",\"ease\":\"nothing\"}]'
\t\t\t\t\t\t\t\t\t\tdata-textAlign=\"['left','left','left','left']\"
\t\t\t\t\t\t\t\t\t\tdata-paddingtop=\"[0,0,0,0]\"
\t\t\t\t\t\t\t\t\t\tdata-paddingright=\"[0,0,0,0]\"
\t\t\t\t\t\t\t\t\t\tdata-paddingbottom=\"[0,0,0,0]\"
\t\t\t\t\t\t\t\t\t\tdata-paddingleft=\"[0,0,0,0]\"

\t\t\t\t\t\t\t\t\t\tstyle=\"z-index: 9;border-width:0px;\"><img src=\"";
        // line 130
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/me1.png"), "html", null, true);
        echo "\" alt=\"Karla Gergelova portrait\" data-ww=\"['218px','218px','218px','218px']\" data-hh=\"['291px','291px','291px','291px']\" width=\"218\" height=\"291\" data-no-retina> </div>

\t\t\t\t\t\t\t\t\t<!-- LAYER NR. 7 -->
\t\t\t\t\t\t\t\t\t<div class=\"tp-caption   tp-resizeme\" 
\t\t\t\t\t\t\t\t\t\t id=\"slide-2759-layer-5\" 
\t\t\t\t\t\t\t\t\t\t data-x=\"['center','center','center','center']\" data-hoffset=\"['-260','-260','-260','-139']\" 
\t\t\t\t\t\t\t\t\t\t data-y=\"['top','top','top','top']\" data-voffset=\"['274','244','134','256']\" 
\t\t\t\t\t\t\t\t\t\t\t\t\tdata-width=\"none\"
\t\t\t\t\t\t\t\t\t\tdata-height=\"none\"
\t\t\t\t\t\t\t\t\t\tdata-whitespace=\"nowrap\"
\t\t\t\t\t\t\t 
\t\t\t\t\t\t\t\t\t\tdata-type=\"image\" 
\t\t\t\t\t\t\t\t\t\tdata-responsive_offset=\"on\" 

\t\t\t\t\t\t\t\t\t\tdata-frames='[{\"from\":\"x:0;y:0;z:0;rX:0;rY:0;rZ:0;sX:0.75;sY:0.75;skX:0;skY:0;opacity:0;\",\"speed\":1500,\"to\":\"o:1;\",\"delay\":1500,\"ease\":\"Power3.easeOut\"},{\"delay\":\"wait\",\"speed\":300,\"to\":\"opacity:0;\",\"ease\":\"nothing\"}]'
\t\t\t\t\t\t\t\t\t\tdata-textAlign=\"['left','left','left','left']\"
\t\t\t\t\t\t\t\t\t\tdata-paddingtop=\"[0,0,0,0]\"
\t\t\t\t\t\t\t\t\t\tdata-paddingright=\"[0,0,0,0]\"
\t\t\t\t\t\t\t\t\t\tdata-paddingbottom=\"[0,0,0,0]\"
\t\t\t\t\t\t\t\t\t\tdata-paddingleft=\"[0,0,0,0]\"

\t\t\t\t\t\t\t\t\t\tstyle=\"z-index: 11;border-width:0px;\"><img src=\"";
        // line 151
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/main-slider/flat_iphone2.png"), "html", null, true);
        echo "\" alt=\"\" data-ww=\"['127px','127px','127px','127px']\" data-hh=\"['268px','268px','268px','268px']\" width=\"127\" height=\"268\" data-no-retina> </div>

\t\t\t\t\t\t\t\t\t<!-- LAYER NR. 8 -->
\t\t\t\t\t\t\t\t\t<div class=\"tp-caption   tp-resizeme\" 
\t\t\t\t\t\t\t\t\t\t id=\"slide-2759-layer-7\" 
\t\t\t\t\t\t\t\t\t\t data-x=\"['center','center','center','center']\" data-hoffset=\"['-260','-260','-260','-139']\" 
\t\t\t\t\t\t\t\t\t\t data-y=\"['top','top','top','top']\" data-voffset=\"['311','281','172','293']\" 
\t\t\t\t\t\t\t\t\t\t\t\t\tdata-width=\"none\"
\t\t\t\t\t\t\t\t\t\tdata-height=\"none\"
\t\t\t\t\t\t\t\t\t\tdata-whitespace=\"nowrap\"
\t\t\t\t\t\t\t 
\t\t\t\t\t\t\t\t\t\tdata-type=\"image\" 
\t\t\t\t\t\t\t\t\t\tdata-responsive_offset=\"on\" 

\t\t\t\t\t\t\t\t\t\tdata-frames='[{\"from\":\"z:0;rX:0deg;rY:0;rZ:0;sX:2;sY:2;skX:0;skY:0;opacity:0;\",\"mask\":\"x:0px;y:0px;\",\"speed\":1500,\"to\":\"o:1;\",\"delay\":2250,\"ease\":\"Power2.easeOut\"},{\"delay\":\"wait\",\"speed\":300,\"to\":\"opacity:0;\",\"ease\":\"nothing\"}]'
\t\t\t\t\t\t\t\t\t\tdata-textAlign=\"['left','left','left','left']\"
\t\t\t\t\t\t\t\t\t\tdata-paddingtop=\"[0,0,0,0]\"
\t\t\t\t\t\t\t\t\t\tdata-paddingright=\"[0,0,0,0]\"
\t\t\t\t\t\t\t\t\t\tdata-paddingbottom=\"[0,0,0,0]\"
\t\t\t\t\t\t\t\t\t\tdata-paddingleft=\"[0,0,0,0]\"

\t\t\t\t\t\t\t\t\t\tstyle=\"z-index: 12;border-width:0px;\"><img src=\"";
        // line 172
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/main-slider/meiphone.png"), "html", null, true);
        echo "\" alt=\"\" data-ww=\"['110px','110px','110px','110px']\" data-hh=\"['194px','194px','194px','194px']\" width=\"110\" height=\"194\" data-no-retina> </div>

\t\t\t\t\t\t\t\t\t<!-- LAYER NR. 10 -->
\t\t\t\t\t\t\t\t\t<div class=\"tp-caption   tp-resizeme\" 
\t\t\t\t\t\t\t\t\t\t id=\"slide-2759-layer-21\" 
\t\t\t\t\t\t\t\t\t\t data-x=\"['center','center','center','center']\" data-hoffset=\"['-229','-229','-209','-164']\" 
\t\t\t\t\t\t\t\t\t\t data-y=\"['top','top','top','top']\" data-voffset=\"['207','177','67','293']\" 
\t\t\t\t\t\t\t\t\t\t\t\t\tdata-width=\"none\"
\t\t\t\t\t\t\t\t\t\tdata-height=\"none\"
\t\t\t\t\t\t\t\t\t\tdata-whitespace=\"nowrap\"
\t\t\t\t\t\t\t 
\t\t\t\t\t\t\t\t\t\tdata-type=\"image\" 
\t\t\t\t\t\t\t\t\t\tdata-responsive_offset=\"on\" 

\t\t\t\t\t\t\t\t\t\tdata-frames='[{\"from\":\"y:50px;opacity:0;\",\"speed\":1000,\"to\":\"o:1;\",\"delay\":1900,\"ease\":\"Power3.easeOut\"},{\"delay\":\"wait\",\"speed\":300,\"to\":\"opacity:0;\",\"ease\":\"nothing\"}]'
\t\t\t\t\t\t\t\t\t\tdata-textAlign=\"['left','left','left','left']\"
\t\t\t\t\t\t\t\t\t\tdata-paddingtop=\"[0,0,0,0]\"
\t\t\t\t\t\t\t\t\t\tdata-paddingright=\"[0,0,0,0]\"
\t\t\t\t\t\t\t\t\t\tdata-paddingbottom=\"[0,0,0,0]\"
\t\t\t\t\t\t\t\t\t\tdata-paddingleft=\"[0,0,0,0]\"

\t\t\t\t\t\t\t\t\t\tstyle=\"z-index: 14;border-width:0px;\">
\t\t\t\t\t\t\t<div class=\"rs-looped rs-pulse\"  data-easing=\"linearEaseNone\" data-speed=\"2\" data-zoomstart=\"1\" data-zoomend=\"1\"><img src=\"";
        // line 194
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/corner1.png"), "html", null, true);
        echo "\" alt=\"clicable corner of ipad\" data-ww=\"['60px','60px','60px','60px']\" data-hh=\"['60px','60px','60px','60px']\" width=\"120\" height=\"120\" data-no-retina> </div></div>

\t\t\t\t\t\t\t\t\t<!-- LAYER NR. 11 -->
\t\t\t\t\t\t\t\t\t<div class=\"tp-caption   tp-resizeme\" 
\t\t\t\t\t\t\t\t\t\t id=\"slide-2759-layer-15\" 
\t\t\t\t\t\t\t\t\t\t data-x=\"['center','center','center','center']\" data-hoffset=\"['-238','-238','-218','-173']\" 
\t\t\t\t\t\t\t\t\t\t data-y=\"['top','top','top','top']\" data-voffset=\"['212','182','72','299']\" 
\t\t\t\t\t\t\t\t\t\t\t\t\tdata-width=\"30\"
\t\t\t\t\t\t\t\t\t\tdata-height=\"none\"
\t\t\t\t\t\t\t\t\t\tdata-whitespace=\"nowrap\"
\t\t\t\t\t\t\t 
\t\t\t\t\t\t\t\t\t\tdata-type=\"text\" 
\t\t\t\t\t\t\t\t\t\tdata-actions='[{\"event\":\"click\",\"action\":\"startlayer\",\"layer\":\"slide-2759-layer-19\",\"delay\":\"\"},{\"event\":\"click\",\"action\":\"startlayer\",\"layer\":\"slide-2759-layer-22\",\"delay\":\"200\"},{\"event\":\"click\",\"action\":\"startlayer\",\"layer\":\"slide-2759-layer-23\",\"delay\":\"250\"},{\"event\":\"click\",\"action\":\"startlayer\",\"layer\":\"slide-2759-layer-24\",\"delay\":\"300\"},{\"event\":\"click\",\"action\":\"startlayer\",\"layer\":\"slide-2759-layer-25\",\"delay\":\"350\"},{\"event\":\"click\",\"action\":\"startlayer\",\"layer\":\"slide-2759-layer-26\",\"delay\":\"400\"},{\"event\":\"click\",\"action\":\"startlayer\",\"layer\":\"slide-2759-layer-27\",\"delay\":\"450\"}]'
\t\t\t\t\t\t\t\t\t\tdata-responsive_offset=\"on\" 

\t\t\t\t\t\t\t\t\t\tdata-frames='[{\"from\":\"y:50px;opacity:0;\",\"speed\":1000,\"to\":\"o:1;\",\"delay\":2000,\"ease\":\"Power3.easeOut\"},{\"delay\":\"wait\",\"speed\":300,\"to\":\"opacity:0;\",\"ease\":\"nothing\"}]'
\t\t\t\t\t\t\t\t\t\tdata-textAlign=\"['center','center','center','center']\"
\t\t\t\t\t\t\t\t\t\tdata-paddingtop=\"[0,0,0,0]\"
\t\t\t\t\t\t\t\t\t\tdata-paddingright=\"[0,0,0,0]\"
\t\t\t\t\t\t\t\t\t\tdata-paddingbottom=\"[0,0,0,0]\"
\t\t\t\t\t\t\t\t\t\tdata-paddingleft=\"[0,0,0,0]\"

\t\t\t\t\t\t\t\t\t\tstyle=\"z-index: 15; min-width: 30px; max-width: 30px; white-space: nowrap; font-size: 30px; line-height: 30px; font-weight: 400; color: rgba(255, 255, 255, 1.00);border-width:0px;cursor:pointer;\">
\t\t\t\t\t\t\t<div class=\"rs-looped rs-pulse\"  data-easing=\"Power3.easeInOut\" data-speed=\"0.5\" data-zoomstart=\"1\" data-zoomend=\"0.9\"><i class=\"fa fa-expand\"></i> </div></div>

\t\t\t\t\t\t\t\t\t<!-- LAYER NR. 13 -->
\t\t\t\t\t\t\t\t\t<div class=\"tp-caption   tp-resizeme\" 
\t\t\t\t\t\t\t\t\t\t id=\"slide-2759-layer-19\" 
\t\t\t\t\t\t\t\t\t\t data-x=\"['center','center','center','center']\" data-hoffset=\"['0','0','0','0']\" 
\t\t\t\t\t\t\t\t\t\t data-y=\"['middle','middle','middle','middle']\" data-voffset=\"['0','0','0','0']\" 
\t\t\t\t\t\t\t\t\t\t\t\t\tdata-width=\"full-proportional\"
\t\t\t\t\t\t\t\t\t\tdata-height=\"full-proportional\"
\t\t\t\t\t\t\t\t\t\tdata-whitespace=\"nowrap\"
\t\t\t\t\t\t\t 
\t\t\t\t\t\t\t\t\t\tdata-type=\"image\" 
\t\t\t\t\t\t\t\t\t\tdata-basealign=\"slide\" 
\t\t\t\t\t\t\t\t\t\tdata-responsive_offset=\"on\" 

\t\t\t\t\t\t\t\t\t\tdata-frames='[{\"from\":\"z:0;rX:0;rY:0;rZ:0;sX:1.1;sY:1.1;skX:0;skY:0;opacity:0;\",\"speed\":1000,\"to\":\"o:1;\",\"delay\":\"bytrigger\",\"ease\":\"Power3.easeOut\"},{\"delay\":\"bytrigger\",\"speed\":500,\"to\":\"auto:auto;\",\"ease\":\"Power3.easeIn\"}]'
\t\t\t\t\t\t\t\t\t\tdata-textAlign=\"['left','left','left','left']\"
\t\t\t\t\t\t\t\t\t\tdata-paddingtop=\"[0,0,0,0]\"
\t\t\t\t\t\t\t\t\t\tdata-paddingright=\"[0,0,0,0]\"
\t\t\t\t\t\t\t\t\t\tdata-paddingbottom=\"[0,0,0,0]\"
\t\t\t\t\t\t\t\t\t\tdata-paddingleft=\"[0,0,0,0]\"
\t\t\t\t\t\t\t\t\t\tdata-lasttriggerstate=\"reset\"
\t\t\t\t\t\t\t\t\t\tstyle=\"z-index: 17;border-width:0px;\"><img src=\"";
        // line 239
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/computer.jpg"), "html", null, true);
        echo "\" alt=\"background desk image\" data-ww=\"['full-proportional','full-proportional','full-proportional','full-proportional']\" data-hh=\"['full-proportional','full-proportional','full-proportional','full-proportional']\" width=\"1920\" height=\"1190\" data-no-retina> </div>

\t\t\t\t\t\t\t\t\t<!-- LAYER NR. 14 -->
\t\t\t\t\t\t\t\t\t<div class=\"tp-caption LandingPage-Title   tp-resizeme\" 
\t\t\t\t\t\t\t\t\t\t id=\"slide-2759-layer-22\" 
\t\t\t\t\t\t\t\t\t\t data-x=\"['left','left','left','left']\" data-hoffset=\"['100','100','50','50']\" 
\t\t\t\t\t\t\t\t\t\t data-y=\"['top','top','top','top']\" data-voffset=\"['100','70','30','30']\" 
\t\t\t\t\t\t\t\t\t\t\t\t\tdata-fontsize=\"['50','50','30','30']\"
\t\t\t\t\t\t\t\t\t\tdata-lineheight=\"['50','50','30','30']\"
\t\t\t\t\t\t\t\t\t\tdata-width=\"none\"
\t\t\t\t\t\t\t\t\t\tdata-height=\"none\"
\t\t\t\t\t\t\t\t\t\tdata-whitespace=\"nowrap\"
\t\t\t\t\t\t\t 
\t\t\t\t\t\t\t\t\t\tdata-type=\"text\" 
\t\t\t\t\t\t\t\t\t\tdata-responsive_offset=\"on\" 

\t\t\t\t\t\t\t\t\t\tdata-frames='[{\"from\":\"x:-50px;opacity:0;\",\"speed\":1500,\"to\":\"o:1;\",\"delay\":\"bytrigger\",\"ease\":\"Power3.easeOut\"},{\"delay\":\"bytrigger\",\"speed\":300,\"to\":\"auto:auto;\",\"ease\":\"nothing\"}]'
\t\t\t\t\t\t\t\t\t\tdata-textAlign=\"['left','left','left','left']\"
\t\t\t\t\t\t\t\t\t\tdata-paddingtop=\"[0,0,0,0]\"
\t\t\t\t\t\t\t\t\t\tdata-paddingright=\"[0,0,0,0]\"
\t\t\t\t\t\t\t\t\t\tdata-paddingbottom=\"[0,0,0,0]\"
\t\t\t\t\t\t\t\t\t\tdata-paddingleft=\"[0,0,0,0]\"
\t\t\t\t\t\t\t\t\t\tdata-lasttriggerstate=\"reset\"
\t\t\t\t\t\t\t\t\t\tstyle=\"z-index: 18; white-space: nowrap; font-size: 50px; line-height: 50px;\"> <a href=\"";
        // line 262
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("docs/KarlaGergelovaCV.pdf"), "html", null, true);
        echo "\" class=\"text-white\" download=\"Karla_Gergelova_CV\">TELECHARGER<br/>
\t\t\t\t\t\t\tMON<br/>
\t\t\t\t\t\t\tCV ICI<i class=\"fa fa-link\" aria-hidden=\"true\"></i></a></div>

\t\t\t\t\t\t\t\t\t<!-- LAYER NR. 19 -->
\t\t\t\t\t\t\t\t\t<div class=\"tp-caption LandingPage-Button rev-btn  tp-resizeme\" 
\t\t\t\t\t\t\t\t\t\t id=\"slide-2759-layer-27\" 
\t\t\t\t\t\t\t\t\t\t data-x=\"['left','left','left','left']\" data-hoffset=\"['100','100','400','50']\" 
\t\t\t\t\t\t\t\t\t\t data-y=\"['top','top','top','top']\" data-voffset=\"['632','582','298','518']\" 
\t\t\t\t\t\t\t\t\t\t\t\t\tdata-width=\"none\"
\t\t\t\t\t\t\t\t\t\tdata-height=\"none\"
\t\t\t\t\t\t\t\t\t\tdata-whitespace=\"nowrap\"
\t\t\t\t\t\t\t 
\t\t\t\t\t\t\t\t\t\tdata-type=\"button\" 
\t\t\t\t\t\t\t\t\t\tdata-actions='[{\"event\":\"click\",\"action\":\"stoplayer\",\"layer\":\"slide-2759-layer-22\",\"delay\":\"\"},{\"event\":\"click\",\"action\":\"stoplayer\",\"layer\":\"slide-2759-layer-23\",\"delay\":\"\"},{\"event\":\"click\",\"action\":\"stoplayer\",\"layer\":\"slide-2759-layer-24\",\"delay\":\"\"},{\"event\":\"click\",\"action\":\"stoplayer\",\"layer\":\"slide-2759-layer-25\",\"delay\":\"\"},{\"event\":\"click\",\"action\":\"stoplayer\",\"layer\":\"slide-2759-layer-26\",\"delay\":\"\"},{\"event\":\"click\",\"action\":\"stoplayer\",\"layer\":\"slide-2759-layer-27\",\"delay\":\"\"},{\"event\":\"click\",\"action\":\"stoplayer\",\"layer\":\"slide-2759-layer-19\",\"delay\":\"300\"}]'
\t\t\t\t\t\t\t\t\t\tdata-responsive_offset=\"on\" 

\t\t\t\t\t\t\t\t\t\tdata-frames='[{\"from\":\"y:50px;opacity:0;\",\"speed\":1000,\"to\":\"o:1;\",\"delay\":\"bytrigger\",\"ease\":\"Power3.easeInOut\"},{\"delay\":\"bytrigger\",\"speed\":100,\"to\":\"opacity:0;\",\"ease\":\"nothing\"},{\"frame\":\"hover\",\"speed\":\"200\",\"ease\":\"Power2.easeInOut\",\"to\":\"o:1;rX:0;rY:0;rZ:0;z:0;\",\"style\":\"c:rgba(0, 0, 0, 1.00);bg:rgba(204, 204, 204, 1.00);bs:solid;\"}]'
\t\t\t\t\t\t\t\t\t\tdata-textAlign=\"['left','left','left','left']\"
\t\t\t\t\t\t\t\t\t\tdata-paddingtop=\"[0,0,0,0]\"
\t\t\t\t\t\t\t\t\t\tdata-paddingright=\"[60,60,60,60]\"
\t\t\t\t\t\t\t\t\t\tdata-paddingbottom=\"[0,0,0,0]\"
\t\t\t\t\t\t\t\t\t\tdata-paddingleft=\"[60,60,60,60]\"
\t\t\t\t\t\t\t\t\t\tdata-lasttriggerstate=\"reset\"
\t\t\t\t\t\t\t\t\t\tstyle=\"z-index: 23; white-space: nowrap; font-weight: 700;font-family:Raleway;border-radius:3px 3px 3px 3px;outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;cursor:pointer;\">GO BACK </div>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t<div class=\"tp-bannertimer tp-bottom\" style=\"visibility: hidden !important;\"></div>\t</div>
\t\t\t\t\t\t</div><!-- END REVOLUTION SLIDER -->
\t\t\t\t</div>        
\t\t\t</div>        
\t\t</div>        
\t\t<!-- Slider END -->
        <!-- About Us -->
\t\t<div class=\"section-full content-inner text-white dlab-about-1 bg-black\" id=\"about-us\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"section-head text-white text-center\">
\t\t\t\t\t<h1 class=\"invisible\">Karla Gergelova</h1>
\t\t\t\t\t<h2 class=\"text-uppercase\">A PROPOS</h2>
\t\t\t\t\t<div class=\"dlab-separator\"></div>
\t\t\t\t\t";
        // line 303
        echo "\t\t\t\t</div>
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-lg-12 col-md-12 col-sm-12 text-center\">
\t\t\t\t\t\t<p>My name is Karla Gergelova. I am from Czech republic and i have been living in France since 2013. 
\t\t\t\t\t\t\tBefore coming to France, I have graduated from UNLV (University of Nevada, Las Vegas, USA) in Hotel Management while playing basketball full time for the university in their highest league-NCAA. 
\t\t\t\t\t\t\tI have lived in USA for 5 years before coming back to Czech republic to play basketball professionally.<br><br>

\t\t\t\t\t\t\tIn 2013 I left my country for another adventure, this time in France, because i have always wanted to learn French:)) 
\t\t\t\t\t\t\tI accepted an offer to play in France for 2 years professionally. After couple of years of playing basketball on a professional and semi-professional level ,while working in the hospitality industry (and some others as well), 
\t\t\t\t\t\t\tI have decided that I would like to find out how all those different systems that we used in the industry were actually utilized on the backend. 
\t\t\t\t\t\t\tI always loved learning and picking up new systems which is why I got interested in software programming. I love to challenge myself and utilize my brain in a different capacity.<br><br>

\t\t\t\t\t\t\tSoooo I decided to take some time to pursue my high interest in web development. 
\t\t\t\t\t\t\tI am still playing basketball semi-professionally at the moment, but I have just recently finished a 3,5month accelerated program in web and mobile development at WebForce3. 
\t\t\t\t\t\t\tI have been on an internship in a web agence called Digitics since, however the coronavirus has cut my internship short. 
\t\t\t\t\t\t\tAt the moment, I am finishing a website for a friend and redoing this website from zero (because I have created this one in the end of 2019 and since I have learned plenty of new things!!) by using Symfony. 
\t\t\t\t\t\t\tLastly, I am getting ready to present my thesis before the jury in end of July 2020 to obtain my Bac+2 in web development.
\t\t\t\t\t\t</p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<!-- About Us END -->

\t\t<!-- Competences -->
\t\t<div class=\"section-full overlay-black-middle bg-img-fix  content-inner-1 what-we-do what-we-do-2\" id=\"competences\" style=\"background-image: url(images/nature-lights.jpg);\" >
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"section-head text-center text-white\">
\t\t\t\t\t<h2 class=\"text-uppercase text-white\">Mes compétences</h2>
\t\t\t\t\t<div class=\"dlab-separator\"></div>
\t\t\t\t</div>
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-lg-4 col-md-6 col-sm-6 m-b30\">
\t\t\t\t\t\t<div class=\"icon-bx-wraper center p-a30 draw\">
\t\t\t\t\t\t\t<div class=\"icon-md  text-primary m-b20\"> <span class=\"icon-cell\"><img src=\"";
        // line 337
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/html.png"), "html", null, true);
        echo "\" alt=\"\"></span> </div>
\t\t\t\t\t\t\t<div class=\"icon-content\">
\t\t\t\t\t\t\t\t<div class=\"dlab-separator\"></div>
\t\t\t\t\t\t\t\t<h3 class=\"dlab-title\">HTML 5</h3>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-lg-4 col-md-6 col-sm-6 m-b30\">
\t\t\t\t\t\t<div class=\"icon-bx-wraper center p-a30 draw\">
\t\t\t\t\t\t\t<div class=\"icon-md  text-primary m-b20\"> <span class=\"icon-cell\"><img src=\"";
        // line 346
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/css.png"), "html", null, true);
        echo "\" alt=\"\"></span> </div>
\t\t\t\t\t\t\t<div class=\"icon-content\">
\t\t\t\t\t\t\t\t<div class=\"dlab-separator\"></div>
\t\t\t\t\t\t\t\t<h3 class=\"dlab-title\">CSS 3</h3>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-lg-4 col-md-6 col-sm-6 m-b30\">
\t\t\t\t\t\t<div class=\"icon-bx-wraper center p-a30 draw\">
\t\t\t\t\t\t\t<div class=\"icon-md  text-primary m-b20\"> <span class=\"icon-cell\"><img src=\"";
        // line 355
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/js.png"), "html", null, true);
        echo "\" alt=\"\"></span> </div>
\t\t\t\t\t\t\t<div class=\"icon-content\">
\t\t\t\t\t\t\t\t<div class=\"dlab-separator\"></div>
\t\t\t\t\t\t\t\t<h3 class=\"dlab-title\">JavaScript</h3>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-lg-4 col-md-6 col-sm-6 m-b30\">
\t\t\t\t\t\t<div class=\"icon-bx-wraper center p-a30 draw\">
\t\t\t\t\t\t\t<div class=\"icon-md  text-primary m-b20\"> <span class=\"icon-cell\"><img src=\"";
        // line 364
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/php.png"), "html", null, true);
        echo "\" alt=\"\"></span> </div>
\t\t\t\t\t\t\t<div class=\"icon-content\">
\t\t\t\t\t\t\t\t<div class=\"dlab-separator\"></div>
\t\t\t\t\t\t\t\t<h3 class=\"dlab-title\">PHP 7</h3>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-lg-4 col-md-6 col-sm-6 m-b30\">
\t\t\t\t\t\t<div class=\"icon-bx-wraper center p-a30 draw\">
\t\t\t\t\t\t\t<div class=\"icon-md  text-primary m-b20\"> <span class=\"icon-cell\"><img src=\"";
        // line 373
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/mysql.png"), "html", null, true);
        echo "\" alt=\"\"></span> </div>
\t\t\t\t\t\t\t<div class=\"icon-content\">
\t\t\t\t\t\t\t\t<div class=\"dlab-separator\"></div>
\t\t\t\t\t\t\t\t<h3 class=\"dlab-title\">MySQL</h3>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-lg-4 col-md-6 col-sm-6 m-b30\">
\t\t\t\t\t\t<div class=\"icon-bx-wraper center p-a30 draw\">
\t\t\t\t\t\t\t<div class=\"icon-md  text-primary m-b20\"> <span class=\"icon-cell\"><img src=\"";
        // line 382
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/wordpress.png"), "html", null, true);
        echo "\" alt=\"\"></span> </div>
\t\t\t\t\t\t\t<div class=\"icon-content\">
\t\t\t\t\t\t\t\t<div class=\"dlab-separator\"></div>
\t\t\t\t\t\t\t\t<h3 class=\"dlab-title\">WordPress</h3>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<!-- Competences END -->

\t\t<!-- Portfolio -->
\t\t<div class=\"section-full bg-black content-inner-1 text-black dlab-upcoming-event\" id=\"portfolio\">
\t\t\t<div class=\"container-fluid\">
\t\t\t\t<div class=\"section-head text-white text-center\">
\t\t\t\t\t<h2 class=\"text-uppercase\">Portfolio</h2>
\t\t\t\t\t<div class=\"dlab-separator\"></div>
\t\t\t\t\t<p>Examples from my short career:)</p>
\t\t\t\t</div>
\t\t\t\t<div class=\"section-content\">
\t\t\t\t\t<div class=\"event-carousel mfp-gallery gallery owl-btn-center-lr owl-btn-1 owl-carousel\">
\t\t\t\t\t\t<div class=\"item\">
\t\t\t\t\t\t\t<div class=\"ow-carousel-entry\">
\t\t\t\t\t\t\t\t<div class=\"ow-entry-media dlab-img-effect zoom-slow\"> 
\t\t\t\t\t\t\t\t\t<a href=\"https://www.yom-yoga.com\" target=\"_blank\"><img src=\"";
        // line 407
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/yomyoga.png"), "html", null, true);
        echo "\" alt=\"screen shot of YomYoga website\"></a> 
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"text-center bg-dark-black p-lr10 p-tb15 text-white\">
\t\t\t\t\t\t\t\t\t<div class=\"ow-entry-title\"><a href=\"https://www.yom-yoga.com\">YOM YOGA</a></div>
\t\t\t\t\t\t\t\t\t<div class=\"dlab-separator\"></div>
\t\t\t\t\t\t\t\t\t<div class=\"ow-entry-text \">
\t\t\t\t\t\t\t\t\t\t<p class=\"m-b0\">HTML 5, CSS 3, Bootstrap 4, jQuery, Symfony 5, Ajax</p>
\t\t\t\t\t\t\t\t\t\t<p>This is a real website for a yoga teacher in Denmark. </p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"item\">
\t\t\t\t\t\t\t<div class=\"ow-carousel-entry\">
\t\t\t\t\t\t\t\t<div class=\"ow-entry-media dlab-img-effect zoom-slow\"> <a href=\"";
        // line 421
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("OhMyCats");
        echo "\" target=\"_blank\"><img src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/cats.png"), "html", null, true);
        echo "\" alt=\"screen shot of OhMyCats website\"></a> </div>
\t\t\t\t\t\t\t\t<div class=\"text-center bg-dark-black p-lr10 p-tb15 text-white\">
\t\t\t\t\t\t\t\t\t<div class=\"ow-entry-title\"><a href=\"";
        // line 423
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("OhMyCats");
        echo "\" target=\"_blank\">OhMyCats</a></div>
\t\t\t\t\t\t\t\t\t<div class=\"dlab-separator\"></div>
\t\t\t\t\t\t\t\t\t<div class=\"ow-entry-text \">
\t\t\t\t\t\t\t\t\t\t<p class=\"m-b0\">HTML 5, CSS 3, Bootstrap 4, JavaScript, jQuery</p>
\t\t\t\t\t\t\t\t\t\t<p>Page d'adoption de chat fictive.</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"item\">
\t\t\t\t\t\t\t<div class=\"ow-carousel-entry\">
\t\t\t\t\t\t\t\t<div class=\"ow-entry-media dlab-img-effect zoom-slow\"> <a href=\"";
        // line 434
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("MultiWebsite");
        echo "\" target=\"_blank\"><img src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/multi.png"), "html", null, true);
        echo "\" alt=\"screen shot of multi website\"></a> </div>
\t\t\t\t\t\t\t\t<div class=\"text-center bg-dark-black p-lr10 p-tb15 text-white\">
\t\t\t\t\t\t\t\t\t<div class=\"ow-entry-title\"><a href=\"";
        // line 436
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("MultiWebsite");
        echo "\" target=\"_blank\">Multi website</a></div>
\t\t\t\t\t\t\t\t\t<div class=\"dlab-separator\"></div>
\t\t\t\t\t\t\t\t\t<div class=\"ow-entry-text \">
\t\t\t\t\t\t\t\t\t\t<p class=\"m-b0\">HTML 5, CSS 3, Bootstrap 4</p>
\t\t\t\t\t\t\t\t\t\t<p> Ceci est une site vitrine de démonstration.</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"item\">
\t\t\t\t\t\t\t<div class=\"ow-carousel-entry\">
\t\t\t\t\t\t\t\t<div class=\"ow-entry-media dlab-img-effect zoom-slow\"> <a href=\"";
        // line 447
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("RentAcar");
        echo "\" target=\"_blank\"><img src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/rent.png"), "html", null, true);
        echo "\" alt=\"screen shot of rentAcar website\"></a> </div>
\t\t\t\t\t\t\t\t<div class=\"text-center bg-dark-black p-lr10 p-tb15 text-white\">
\t\t\t\t\t\t\t\t\t<div class=\"ow-entry-title\"><a href=\"";
        // line 449
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("RentAcar");
        echo "\" target=\"_blank\">RentAcar</a></div>
\t\t\t\t\t\t\t\t\t<div class=\"dlab-separator\"></div>
\t\t\t\t\t\t\t\t\t<div class=\"ow-entry-text \">
\t\t\t\t\t\t\t\t\t\t<p class=\"m-b0\">HTML 5, CSS 3, Bootstrap 4, JavaScript, jQuery</p>
\t\t\t\t\t\t\t\t\t\t<p> Page de location des véhicules fictive.</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"item\">
\t\t\t\t\t\t\t<div class=\"ow-carousel-entry\">
\t\t\t\t\t\t\t\t<div class=\"ow-entry-media dlab-img-effect zoom-slow\"> <a href=\"";
        // line 460
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("HappyTours");
        echo "\" target=\"_blank\"><img src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/voyage.png"), "html", null, true);
        echo "\" alt=\"screen shot of HappyTours website\"></a> </div>
\t\t\t\t\t\t\t\t<div class=\"text-center bg-dark-black p-lr10 p-tb15 text-white\">
\t\t\t\t\t\t\t\t\t<div class=\"ow-entry-title\"><a href=\"";
        // line 462
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("HappyTours");
        echo "\" target=\"_blank\">Happy Tours</a></div>
\t\t\t\t\t\t\t\t\t<div class=\"dlab-separator\"></div>
\t\t\t\t\t\t\t\t\t<div class=\"ow-entry-text \">
\t\t\t\t\t\t\t\t\t\t<p class=\"m-b0\">HTML 5,CSS 3, Bootstrap 4</p>
\t\t\t\t\t\t\t\t\t\t<p> Site vitrne d'une agence de voyage fictive.</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<!-- Portfolio END -->

\t\t<!-- CV -->

\t\t<div class=\"section-full  overlay-black-middle bg-img-fix content-inner text-white dlab-about-1\" id=\"cv\" style=\"background-image: url(images/cv-background.png);\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"section-head text-white text-center\">
\t\t\t\t\t<h2 class=\"text-uppercase\">Mon CV</h2>
\t\t\t\t\t<div class=\"dlab-separator\"></div>
\t\t\t\t\t<p>Si vous n'avez pas encore trouvé mon CV sur mon site plus haut, voici le lien de téléchargement encore une fois.</p>
\t\t\t\t</div>
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-lg-12 col-md-6 col-sm-6 text-center\">
\t\t\t\t\t\t<h2><a href=\"";
        // line 488
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("docs/KarlaGergelovaCV.pdf"), "html", null, true);
        echo "\" class=\"text-white\" download=\"Karla_Gergelova_CV\">Télécharger mon CV ici<br><i class=\"fa fa-link\" aria-hidden=\"true\"></i></a></h2>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<!-- CV END -->

\t\t<!-- Contact -->
\t\t<div class=\"section-full bg-black dlab-contact-1\" id=\"contact\">
\t\t\t<div class=\"row dzseth m-a0\">
\t\t\t\t<div class=\"col-xl-6 col-lg-4 col-md-12 p-a0\">
\t\t\t\t\t<iframe class=\"seth\" src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d21101.184059707906!2d7.734895400258374!3d48.61658062291911!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4796c86f453b3249%3A0x45bb538b377b17fc!2sSchiltigheim!5e0!3m2!1sfr!2sfr!4v1592513418753!5m2!1sfr!2sfr\" style=\"border:0px; width: 100%; min-height: 300px;\" allowfullscreen=\"\" aria-hidden=\"false\" tabindex=\"0\"></iframe>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-xl-6 col-lg-8 col-md-12  bg-black text-white bg-img-fix\" >
\t\t\t\t\t<div class=\"content-inner-1  bg-img-fix\">
\t\t\t\t\t\t<div class=\"section-head text-center\">
\t\t\t\t\t\t\t<h2 class=\"text-uppercase\">Contactez-moi</h2>
\t\t\t\t\t\t\t<div class=\"dlab-separator\"></div>
\t\t\t\t\t\t\t<p class=\"max-w500 m-auto m-b0\">If you have any questions, you can contact me here.</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"p-lr30 row m-b30 contact-style-1\">
\t\t\t\t\t\t\t<div class=\"dzFormMsg\"></div>
\t\t\t\t\t\t\t<form method=\"post\" class=\"dzForm\" action=\"";
        // line 510
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contact");
        echo "\">
\t\t\t\t\t\t\t<input type=\"hidden\" value=\"Contact\" name=\"whichform\" >
                                <div class=\"row\">
                                    <div class=\"col-lg-6\">
                                        <div class=\"form-group\">
                                            <div class=\"input-group\">
                                                <input name=\"lastname\" type=\"text\" required class=\"form-control\" placeholder=\"Your Last Name\">
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"col-lg-6\">
                                        <div class=\"form-group\">
                                            <div class=\"input-group\"> 
\t\t\t\t\t\t\t\t\t\t\t    <input name=\"firstname\" type=\"text\" class=\"form-control\" required  placeholder=\"Your First Name\" >
                                            </div>
                                        </div>
                                    </div>
\t\t\t\t\t\t\t\t\t<div class=\"col-lg-6\">
                                        <div class=\"form-group\">
                                            <div class=\"input-group\">
                                                <input name=\"email\" type=\"email\" required class=\"form-control\" placeholder=\"Your Email\">
                                            </div>
                                        </div>
                                    </div>
\t\t\t\t\t\t\t\t\t<div class=\"col-lg-6\">
                                        <div class=\"form-group\">
                                            <div class=\"input-group\">
                                                <input name=\"subject\" type=\"text\" required class=\"form-control\" placeholder=\"Subject\">
                                            </div>
                                        </div>
                                    </div>
                                     <div class=\"col-lg-12\">
                                        <div class=\"form-group\">
                                            <div class=\"input-group\">
                                                <textarea name=\"message\" rows=\"4\" class=\"form-control\" required placeholder=\"Your Message...\"></textarea>
                                            </div>
                                        </div>
                                    </div>

\t\t\t\t\t\t\t\t\t<div class=\"col-lg-12 col-md-12 col-sm-12\">
\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"g-recaptcha\" data-sitekey=\"6LdsKyAaAAAAAGeb0MD8l4t1WBN5g4asvSodDnW5\" data-callback=\"verifyRecaptchaCallback\" data-expired-callback=\"expiredRecaptchaCallback\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t<input class=\"form-control d-none\" style=\"display:none;\" data-recaptcha=\"true\" required data-error=\"Please complete the Captcha\">
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t
                                    <div class=\"col-lg-12\">
\t\t\t\t\t\t\t\t\t\t<button name=\"submit\" type=\"submit\" value=\"Submit\" class=\"site-button \"> <span>Submit</span> </button>
                                    </div>
                                </div>
                            </form>
                        </div>
\t\t\t\t\t\t<div class=\"p-lr15 row dlab-contact\">
\t\t\t\t\t\t\t<div class=\"col-lg-4 col-md-4 col-sm-4 m-b15\">
\t\t\t\t\t\t\t\t<div class=\"icon-bx-wraper p-a15 center col\">
\t\t\t\t\t\t\t\t\t<div class=\"icon-bx-sm m-b20 radius\"> <a href=\"tel:+33652629472\" class=\"icon-cell\"><i class=\"fa fa-phone\"></i></a> </div>
\t\t\t\t\t\t\t\t\t<div class=\"icon-content\">
\t\t\t\t\t\t\t\t\t\t<h5>Phone</h5>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-lg-4 col-md-4 col-sm-4 m-b15\">
\t\t\t\t\t\t\t\t<div class=\"icon-bx-wraper p-a15 center col\">
\t\t\t\t\t\t\t\t\t<div class=\"icon-bx-sm m-b20 radius\"> <a href=\"mailto:gergelovakarla@aol.com\" class=\"icon-cell\"><i class=\"fa fa-paper-plane\"></i></a></div>
\t\t\t\t\t\t\t\t\t<div class=\"icon-content\">
\t\t\t\t\t\t\t\t\t\t<h5>Email</h5>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-lg-4 col-md-4 col-sm-4  m-b15\">
\t\t\t\t\t\t\t\t<div class=\"icon-bx-wraper p-a15 center col\">
\t\t\t\t\t\t\t\t\t<div class=\"icon-bx-sm m-b20 radius\"> <a href=\"https://www.linkedin.com/in/karla-gergelov%C3%A1-05728346/\" target=\"_blank\" class=\"icon-cell\"><i class=\"fa fa-linkedin\"></i></a> </div>
\t\t\t\t\t\t\t\t\t<div class=\"icon-content\">
\t\t\t\t\t\t\t\t\t\t<h5>Linkedin</h5>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>

\t\t
\t\t<!-- Contact END -->
\t 

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "portfolio2/home.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  675 => 510,  650 => 488,  621 => 462,  614 => 460,  600 => 449,  593 => 447,  579 => 436,  572 => 434,  558 => 423,  551 => 421,  534 => 407,  506 => 382,  494 => 373,  482 => 364,  470 => 355,  458 => 346,  446 => 337,  410 => 303,  367 => 262,  341 => 239,  293 => 194,  268 => 172,  244 => 151,  220 => 130,  196 => 109,  102 => 18,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Karla Gergelova | Développeur Web{% endblock %}

{% block body %}


\t<!-- Slider -->
        <div class=\"main-slider style-two default-banner\" id=\"accueil\">
            <div class=\"tp-banner-container\">
                <div class=\"tp-banner\" >
\t\t\t\t\t<div id=\"rev_slider_989_1_wrapper\" class=\"rev_slider_wrapper fullscreen-container\" data-alias=\"app-landing-page\" data-source=\"gallery\" style=\"background-color:transparent;padding:0px;\">
\t\t\t\t\t\t<!-- START REVOLUTION SLIDER 5.3.0.1 fullscreen mode -->
\t\t\t\t\t\t<div id=\"rev_slider_989_1\" class=\"rev_slider fullscreenbanner\" style=\"display:none;\" data-version=\"5.3.0.1\">
\t\t\t\t\t\t\t<ul>\t<!-- SLIDE  -->
\t\t\t\t\t\t\t\t<li data-index=\"rs-2759\" data-transition=\"fade\" data-slotamount=\"default\" data-hideafterloop=\"0\" data-hideslideonmobile=\"off\"  data-easein=\"default\" data-easeout=\"default\" data-masterspeed=\"300\"  data-rotate=\"0\"  data-saveperformance=\"off\"  data-title=\"Slide\" data-param1=\"\" data-param2=\"\" data-param3=\"\" data-param4=\"\" data-param5=\"\" data-param6=\"\" data-param7=\"\" data-param8=\"\" data-param9=\"\" data-param10=\"\" data-description=\"\">
\t\t\t\t\t\t\t\t\t<!-- MAIN IMAGE -->
\t\t\t\t\t\t\t\t\t<img src=\"{{ asset('images/nature.jpg') }}\"  alt=\"nature background\"  data-bgposition=\"center center\" data-kenburns=\"on\" data-duration=\"30000\" data-ease=\"Linear.easeNone\" data-scalestart=\"100\" data-scaleend=\"120\" data-rotatestart=\"0\" data-rotateend=\"0\" data-offsetstart=\"0 0\" data-offsetend=\"0 0\" data-bgparallax=\"5\" class=\"rev-slidebg\" data-no-retina>
\t\t\t\t\t\t\t\t\t<!-- LAYERS -->

\t\t\t\t\t\t\t\t\t<!-- LAYER NR. 1 -->
\t\t\t\t\t\t\t\t\t<div class=\"tp-caption LandingPage-Title   tp-resizeme\" 
\t\t\t\t\t\t\t\t\t\tid=\"slide-2759-layer-1\" 
\t\t\t\t\t\t\t\t\t\tdata-x=\"['center','center','center','left']\" data-hoffset=\"['230','180','210','200']\" 
\t\t\t\t\t\t\t\t\t\tdata-y=\"['top','top','top','top']\" data-voffset=\"['176','146','36','128']\" 
\t\t\t\t\t\t\t\t\t\tdata-fontsize=\"['60','60','60','40']\"
\t\t\t\t\t\t\t\t\t\tdata-lineheight=\"['80','80','60','60']\"
\t\t\t\t\t\t\t\t\t\tdata-width=\"none\"
\t\t\t\t\t\t\t\t\t\tdata-height=\"none\"
\t\t\t\t\t\t\t\t\t\tdata-whitespace=\"nowrap\"
\t\t\t\t\t\t\t 
\t\t\t\t\t\t\t\t\t\tdata-type=\"text\" 
\t\t\t\t\t\t\t\t\t\tdata-responsive_offset=\"on\" 

\t\t\t\t\t\t\t\t\t\tdata-frames='[{\"from\":\"x:-50px;opacity:0;\",\"speed\":1500,\"to\":\"o:1;\",\"delay\":500,\"ease\":\"Power3.easeOut\"},{\"delay\":\"wait\",\"speed\":300,\"to\":\"opacity:0;\",\"ease\":\"nothing\"}]'
\t\t\t\t\t\t\t\t\t\tdata-textAlign=\"['left','left','left','left']\"
\t\t\t\t\t\t\t\t\t\tdata-paddingtop=\"[0,0,0,0]\"
\t\t\t\t\t\t\t\t\t\tdata-paddingright=\"[0,0,0,0]\"
\t\t\t\t\t\t\t\t\t\tdata-paddingbottom=\"[0,0,0,0]\"
\t\t\t\t\t\t\t\t\t\tdata-paddingleft=\"[0,0,0,0]\"

\t\t\t\t\t\t\t\t\t\tstyle=\"z-index: 5; white-space: nowrap;\"><span>KARLA<br/>GERGELOVA</span>
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t<!-- LAYER NR. 2 -->
\t\t\t\t\t\t\t\t\t<div class=\"tp-caption tp-shape tp-shapewrapper  tp-resizeme\" 
\t\t\t\t\t\t\t\t\t\t id=\"slide-2759-layer-2\" 
\t\t\t\t\t\t\t\t\t\t data-x=\"['center','center','center','left']\" data-hoffset=\"['80','80','90','200']\" 
\t\t\t\t\t\t\t\t\t\t data-y=\"['top','top','top','top']\" data-voffset=\"['433','403','240','332']\" 
\t\t\t\t\t\t\t\t\t\t\t\t\tdata-width=\"100\"
\t\t\t\t\t\t\t\t\t\tdata-height=\"3\"
\t\t\t\t\t\t\t\t\t\tdata-whitespace=\"nowrap\"
\t\t\t\t\t\t\t 
\t\t\t\t\t\t\t\t\t\tdata-type=\"shape\" 
\t\t\t\t\t\t\t\t\t\tdata-responsive_offset=\"on\" 

\t\t\t\t\t\t\t\t\t\tdata-frames='[{\"from\":\"x:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;\",\"mask\":\"x:0px;y:0px;\",\"speed\":1500,\"to\":\"o:1;\",\"delay\":600,\"ease\":\"Power3.easeOut\"},{\"delay\":\"wait\",\"speed\":300,\"to\":\"opacity:0;\",\"ease\":\"nothing\"}]'
\t\t\t\t\t\t\t\t\t\tdata-textAlign=\"['left','left','left','left']\"
\t\t\t\t\t\t\t\t\t\tdata-paddingtop=\"[0,0,0,0]\"
\t\t\t\t\t\t\t\t\t\tdata-paddingright=\"[0,0,0,0]\"
\t\t\t\t\t\t\t\t\t\tdata-paddingbottom=\"[0,0,0,0]\"
\t\t\t\t\t\t\t\t\t\tdata-paddingleft=\"[0,0,0,0]\"

\t\t\t\t\t\t\t\t\t\tstyle=\"z-index: 6;background-color:rgb(255,255,255);border-color:rgba(0, 0, 0, 0);border-width:0px;\"> </div>

\t\t\t\t\t\t\t\t\t<!-- LAYER NR. 3 -->
\t\t\t\t\t\t\t\t\t<div class=\"tp-caption LandingPage-SubTitle   tp-resizeme\" 
\t\t\t\t\t\t\t\t\t\t id=\"slide-2759-layer-3\" 
\t\t\t\t\t\t\t\t\t\t data-x=\"['center','center','center','left']\" data-hoffset=\"['197','197','179','200']\" 
\t\t\t\t\t\t\t\t\t\t data-y=\"['top','top','top','top']\" data-voffset=\"['454','425','263','355']\" 
\t\t\t\t\t\t\t\t\t\t\t\t\tdata-fontsize=\"['20','20','17','17']\"
\t\t\t\t\t\t\t\t\t\tdata-lineheight=\"['30','30','25','25']\"
\t\t\t\t\t\t\t\t\t\tdata-width=\"['330','330','280','250']\"
\t\t\t\t\t\t\t\t\t\tdata-height=\"none\"
\t\t\t\t\t\t\t\t\t\tdata-whitespace=\"normal\"
\t\t\t\t\t\t\t 
\t\t\t\t\t\t\t\t\t\tdata-type=\"text\" 
\t\t\t\t\t\t\t\t\t\tdata-responsive_offset=\"on\" 

\t\t\t\t\t\t\t\t\t\tdata-frames='[{\"from\":\"x:-50px;opacity:0;\",\"speed\":1500,\"to\":\"o:1;\",\"delay\":700,\"ease\":\"Power3.easeOut\"},{\"delay\":\"wait\",\"speed\":300,\"to\":\"opacity:0;\",\"ease\":\"nothing\"}]'
\t\t\t\t\t\t\t\t\t\tdata-textAlign=\"['left','left','left','left']\"
\t\t\t\t\t\t\t\t\t\tdata-paddingtop=\"[0,0,0,0]\"
\t\t\t\t\t\t\t\t\t\tdata-paddingright=\"[0,0,0,0]\"
\t\t\t\t\t\t\t\t\t\tdata-paddingbottom=\"[0,0,0,0]\"
\t\t\t\t\t\t\t\t\t\tdata-paddingleft=\"[0,0,0,0]\"

\t\t\t\t\t\t\t\t\t\tstyle=\"z-index: 7; min-width: 330px; max-width: 330px; white-space: normal;font-style:italic;\">
\t\t\t\t\t\t\t\t\t\tDéveloppeur Web et Web Mobile</div>

\t\t\t\t\t\t\t\t\t<!-- LAYER NR. 4 -->
\t\t\t\t\t\t\t\t\t<div class=\"tp-caption   tp-resizeme\" 
\t\t\t\t\t\t\t\t\t\t id=\"slide-2759-layer-4\" 
\t\t\t\t\t\t\t\t\t\t data-x=\"['center','center','center','center']\" data-hoffset=\"['-150','-150','-130','-229']\" 
\t\t\t\t\t\t\t\t\t\t data-y=\"['top','top','top','top']\" data-voffset=\"['175','145','35','124']\" 
\t\t\t\t\t\t\t\t\t\t\t\t\tdata-width=\"none\"
\t\t\t\t\t\t\t\t\t\tdata-height=\"none\"
\t\t\t\t\t\t\t\t\t\tdata-whitespace=\"nowrap\"
\t\t\t\t\t\t\t 
\t\t\t\t\t\t\t\t\t\tdata-type=\"image\" 
\t\t\t\t\t\t\t\t\t\tdata-responsive_offset=\"on\" 

\t\t\t\t\t\t\t\t\t\tdata-frames='[{\"from\":\"x:0;y:0;z:0;rX:0;rY:0;rZ:0;sX:0.75;sY:0.75;skX:0;skY:0;opacity:0;\",\"speed\":1500,\"to\":\"o:1;\",\"delay\":1000,\"ease\":\"Power3.easeOut\"},{\"delay\":\"wait\",\"speed\":300,\"to\":\"opacity:0;\",\"ease\":\"nothing\"}]'
\t\t\t\t\t\t\t\t\t\tdata-textAlign=\"['left','left','left','left']\"
\t\t\t\t\t\t\t\t\t\tdata-paddingtop=\"[0,0,0,0]\"
\t\t\t\t\t\t\t\t\t\tdata-paddingright=\"[0,0,0,0]\"
\t\t\t\t\t\t\t\t\t\tdata-paddingbottom=\"[0,0,0,0]\"
\t\t\t\t\t\t\t\t\t\tdata-paddingleft=\"[0,0,0,0]\"

\t\t\t\t\t\t\t\t\t\tstyle=\"z-index: 8;border-width:0px;\"><img src=\"{{asset('images/main-slider/flat_ipad2.png') }}\" alt=\"ipad maquette\" data-ww=\"['251px','251px','251px','251px']\" data-hh=\"['355px','355px','355px','355px']\" width=\"251\" height=\"355\" data-no-retina> </div>

\t\t\t\t\t\t\t\t\t<!-- LAYER NR. 5 -->
\t\t\t\t\t\t\t\t\t<div class=\"tp-caption   tp-resizeme\" 
\t\t\t\t\t\t\t\t\t\t id=\"slide-2759-layer-6\" 
\t\t\t\t\t\t\t\t\t\t data-x=\"['center','center','center','center']\" data-hoffset=\"['-150','-150','-130','-228']\" 
\t\t\t\t\t\t\t\t\t\t data-y=\"['top','top','top','top']\" data-voffset=\"['207','177','67','156']\" 
\t\t\t\t\t\t\t\t\t\t\t\t\tdata-width=\"none\"
\t\t\t\t\t\t\t\t\t\tdata-height=\"none\"
\t\t\t\t\t\t\t\t\t\tdata-whitespace=\"nowrap\"
\t\t\t\t\t\t\t 
\t\t\t\t\t\t\t\t\t\tdata-type=\"image\" 
\t\t\t\t\t\t\t\t\t\tdata-responsive_offset=\"on\" 

\t\t\t\t\t\t\t\t\t\tdata-frames='[{\"from\":\"z:0;rX:0deg;rY:0;rZ:0;sX:2;sY:2;skX:0;skY:0;opacity:0;\",\"mask\":\"x:0px;y:0px;\",\"speed\":1500,\"to\":\"o:1;\",\"delay\":1750,\"ease\":\"Power2.easeOut\"},{\"delay\":\"wait\",\"speed\":300,\"to\":\"opacity:0;\",\"ease\":\"nothing\"}]'
\t\t\t\t\t\t\t\t\t\tdata-textAlign=\"['left','left','left','left']\"
\t\t\t\t\t\t\t\t\t\tdata-paddingtop=\"[0,0,0,0]\"
\t\t\t\t\t\t\t\t\t\tdata-paddingright=\"[0,0,0,0]\"
\t\t\t\t\t\t\t\t\t\tdata-paddingbottom=\"[0,0,0,0]\"
\t\t\t\t\t\t\t\t\t\tdata-paddingleft=\"[0,0,0,0]\"

\t\t\t\t\t\t\t\t\t\tstyle=\"z-index: 9;border-width:0px;\"><img src=\"{{ asset('images/me1.png') }}\" alt=\"Karla Gergelova portrait\" data-ww=\"['218px','218px','218px','218px']\" data-hh=\"['291px','291px','291px','291px']\" width=\"218\" height=\"291\" data-no-retina> </div>

\t\t\t\t\t\t\t\t\t<!-- LAYER NR. 7 -->
\t\t\t\t\t\t\t\t\t<div class=\"tp-caption   tp-resizeme\" 
\t\t\t\t\t\t\t\t\t\t id=\"slide-2759-layer-5\" 
\t\t\t\t\t\t\t\t\t\t data-x=\"['center','center','center','center']\" data-hoffset=\"['-260','-260','-260','-139']\" 
\t\t\t\t\t\t\t\t\t\t data-y=\"['top','top','top','top']\" data-voffset=\"['274','244','134','256']\" 
\t\t\t\t\t\t\t\t\t\t\t\t\tdata-width=\"none\"
\t\t\t\t\t\t\t\t\t\tdata-height=\"none\"
\t\t\t\t\t\t\t\t\t\tdata-whitespace=\"nowrap\"
\t\t\t\t\t\t\t 
\t\t\t\t\t\t\t\t\t\tdata-type=\"image\" 
\t\t\t\t\t\t\t\t\t\tdata-responsive_offset=\"on\" 

\t\t\t\t\t\t\t\t\t\tdata-frames='[{\"from\":\"x:0;y:0;z:0;rX:0;rY:0;rZ:0;sX:0.75;sY:0.75;skX:0;skY:0;opacity:0;\",\"speed\":1500,\"to\":\"o:1;\",\"delay\":1500,\"ease\":\"Power3.easeOut\"},{\"delay\":\"wait\",\"speed\":300,\"to\":\"opacity:0;\",\"ease\":\"nothing\"}]'
\t\t\t\t\t\t\t\t\t\tdata-textAlign=\"['left','left','left','left']\"
\t\t\t\t\t\t\t\t\t\tdata-paddingtop=\"[0,0,0,0]\"
\t\t\t\t\t\t\t\t\t\tdata-paddingright=\"[0,0,0,0]\"
\t\t\t\t\t\t\t\t\t\tdata-paddingbottom=\"[0,0,0,0]\"
\t\t\t\t\t\t\t\t\t\tdata-paddingleft=\"[0,0,0,0]\"

\t\t\t\t\t\t\t\t\t\tstyle=\"z-index: 11;border-width:0px;\"><img src=\"{{ asset('images/main-slider/flat_iphone2.png')}}\" alt=\"\" data-ww=\"['127px','127px','127px','127px']\" data-hh=\"['268px','268px','268px','268px']\" width=\"127\" height=\"268\" data-no-retina> </div>

\t\t\t\t\t\t\t\t\t<!-- LAYER NR. 8 -->
\t\t\t\t\t\t\t\t\t<div class=\"tp-caption   tp-resizeme\" 
\t\t\t\t\t\t\t\t\t\t id=\"slide-2759-layer-7\" 
\t\t\t\t\t\t\t\t\t\t data-x=\"['center','center','center','center']\" data-hoffset=\"['-260','-260','-260','-139']\" 
\t\t\t\t\t\t\t\t\t\t data-y=\"['top','top','top','top']\" data-voffset=\"['311','281','172','293']\" 
\t\t\t\t\t\t\t\t\t\t\t\t\tdata-width=\"none\"
\t\t\t\t\t\t\t\t\t\tdata-height=\"none\"
\t\t\t\t\t\t\t\t\t\tdata-whitespace=\"nowrap\"
\t\t\t\t\t\t\t 
\t\t\t\t\t\t\t\t\t\tdata-type=\"image\" 
\t\t\t\t\t\t\t\t\t\tdata-responsive_offset=\"on\" 

\t\t\t\t\t\t\t\t\t\tdata-frames='[{\"from\":\"z:0;rX:0deg;rY:0;rZ:0;sX:2;sY:2;skX:0;skY:0;opacity:0;\",\"mask\":\"x:0px;y:0px;\",\"speed\":1500,\"to\":\"o:1;\",\"delay\":2250,\"ease\":\"Power2.easeOut\"},{\"delay\":\"wait\",\"speed\":300,\"to\":\"opacity:0;\",\"ease\":\"nothing\"}]'
\t\t\t\t\t\t\t\t\t\tdata-textAlign=\"['left','left','left','left']\"
\t\t\t\t\t\t\t\t\t\tdata-paddingtop=\"[0,0,0,0]\"
\t\t\t\t\t\t\t\t\t\tdata-paddingright=\"[0,0,0,0]\"
\t\t\t\t\t\t\t\t\t\tdata-paddingbottom=\"[0,0,0,0]\"
\t\t\t\t\t\t\t\t\t\tdata-paddingleft=\"[0,0,0,0]\"

\t\t\t\t\t\t\t\t\t\tstyle=\"z-index: 12;border-width:0px;\"><img src=\"{{ asset('images/main-slider/meiphone.png') }}\" alt=\"\" data-ww=\"['110px','110px','110px','110px']\" data-hh=\"['194px','194px','194px','194px']\" width=\"110\" height=\"194\" data-no-retina> </div>

\t\t\t\t\t\t\t\t\t<!-- LAYER NR. 10 -->
\t\t\t\t\t\t\t\t\t<div class=\"tp-caption   tp-resizeme\" 
\t\t\t\t\t\t\t\t\t\t id=\"slide-2759-layer-21\" 
\t\t\t\t\t\t\t\t\t\t data-x=\"['center','center','center','center']\" data-hoffset=\"['-229','-229','-209','-164']\" 
\t\t\t\t\t\t\t\t\t\t data-y=\"['top','top','top','top']\" data-voffset=\"['207','177','67','293']\" 
\t\t\t\t\t\t\t\t\t\t\t\t\tdata-width=\"none\"
\t\t\t\t\t\t\t\t\t\tdata-height=\"none\"
\t\t\t\t\t\t\t\t\t\tdata-whitespace=\"nowrap\"
\t\t\t\t\t\t\t 
\t\t\t\t\t\t\t\t\t\tdata-type=\"image\" 
\t\t\t\t\t\t\t\t\t\tdata-responsive_offset=\"on\" 

\t\t\t\t\t\t\t\t\t\tdata-frames='[{\"from\":\"y:50px;opacity:0;\",\"speed\":1000,\"to\":\"o:1;\",\"delay\":1900,\"ease\":\"Power3.easeOut\"},{\"delay\":\"wait\",\"speed\":300,\"to\":\"opacity:0;\",\"ease\":\"nothing\"}]'
\t\t\t\t\t\t\t\t\t\tdata-textAlign=\"['left','left','left','left']\"
\t\t\t\t\t\t\t\t\t\tdata-paddingtop=\"[0,0,0,0]\"
\t\t\t\t\t\t\t\t\t\tdata-paddingright=\"[0,0,0,0]\"
\t\t\t\t\t\t\t\t\t\tdata-paddingbottom=\"[0,0,0,0]\"
\t\t\t\t\t\t\t\t\t\tdata-paddingleft=\"[0,0,0,0]\"

\t\t\t\t\t\t\t\t\t\tstyle=\"z-index: 14;border-width:0px;\">
\t\t\t\t\t\t\t<div class=\"rs-looped rs-pulse\"  data-easing=\"linearEaseNone\" data-speed=\"2\" data-zoomstart=\"1\" data-zoomend=\"1\"><img src=\"{{ asset('images/corner1.png') }}\" alt=\"clicable corner of ipad\" data-ww=\"['60px','60px','60px','60px']\" data-hh=\"['60px','60px','60px','60px']\" width=\"120\" height=\"120\" data-no-retina> </div></div>

\t\t\t\t\t\t\t\t\t<!-- LAYER NR. 11 -->
\t\t\t\t\t\t\t\t\t<div class=\"tp-caption   tp-resizeme\" 
\t\t\t\t\t\t\t\t\t\t id=\"slide-2759-layer-15\" 
\t\t\t\t\t\t\t\t\t\t data-x=\"['center','center','center','center']\" data-hoffset=\"['-238','-238','-218','-173']\" 
\t\t\t\t\t\t\t\t\t\t data-y=\"['top','top','top','top']\" data-voffset=\"['212','182','72','299']\" 
\t\t\t\t\t\t\t\t\t\t\t\t\tdata-width=\"30\"
\t\t\t\t\t\t\t\t\t\tdata-height=\"none\"
\t\t\t\t\t\t\t\t\t\tdata-whitespace=\"nowrap\"
\t\t\t\t\t\t\t 
\t\t\t\t\t\t\t\t\t\tdata-type=\"text\" 
\t\t\t\t\t\t\t\t\t\tdata-actions='[{\"event\":\"click\",\"action\":\"startlayer\",\"layer\":\"slide-2759-layer-19\",\"delay\":\"\"},{\"event\":\"click\",\"action\":\"startlayer\",\"layer\":\"slide-2759-layer-22\",\"delay\":\"200\"},{\"event\":\"click\",\"action\":\"startlayer\",\"layer\":\"slide-2759-layer-23\",\"delay\":\"250\"},{\"event\":\"click\",\"action\":\"startlayer\",\"layer\":\"slide-2759-layer-24\",\"delay\":\"300\"},{\"event\":\"click\",\"action\":\"startlayer\",\"layer\":\"slide-2759-layer-25\",\"delay\":\"350\"},{\"event\":\"click\",\"action\":\"startlayer\",\"layer\":\"slide-2759-layer-26\",\"delay\":\"400\"},{\"event\":\"click\",\"action\":\"startlayer\",\"layer\":\"slide-2759-layer-27\",\"delay\":\"450\"}]'
\t\t\t\t\t\t\t\t\t\tdata-responsive_offset=\"on\" 

\t\t\t\t\t\t\t\t\t\tdata-frames='[{\"from\":\"y:50px;opacity:0;\",\"speed\":1000,\"to\":\"o:1;\",\"delay\":2000,\"ease\":\"Power3.easeOut\"},{\"delay\":\"wait\",\"speed\":300,\"to\":\"opacity:0;\",\"ease\":\"nothing\"}]'
\t\t\t\t\t\t\t\t\t\tdata-textAlign=\"['center','center','center','center']\"
\t\t\t\t\t\t\t\t\t\tdata-paddingtop=\"[0,0,0,0]\"
\t\t\t\t\t\t\t\t\t\tdata-paddingright=\"[0,0,0,0]\"
\t\t\t\t\t\t\t\t\t\tdata-paddingbottom=\"[0,0,0,0]\"
\t\t\t\t\t\t\t\t\t\tdata-paddingleft=\"[0,0,0,0]\"

\t\t\t\t\t\t\t\t\t\tstyle=\"z-index: 15; min-width: 30px; max-width: 30px; white-space: nowrap; font-size: 30px; line-height: 30px; font-weight: 400; color: rgba(255, 255, 255, 1.00);border-width:0px;cursor:pointer;\">
\t\t\t\t\t\t\t<div class=\"rs-looped rs-pulse\"  data-easing=\"Power3.easeInOut\" data-speed=\"0.5\" data-zoomstart=\"1\" data-zoomend=\"0.9\"><i class=\"fa fa-expand\"></i> </div></div>

\t\t\t\t\t\t\t\t\t<!-- LAYER NR. 13 -->
\t\t\t\t\t\t\t\t\t<div class=\"tp-caption   tp-resizeme\" 
\t\t\t\t\t\t\t\t\t\t id=\"slide-2759-layer-19\" 
\t\t\t\t\t\t\t\t\t\t data-x=\"['center','center','center','center']\" data-hoffset=\"['0','0','0','0']\" 
\t\t\t\t\t\t\t\t\t\t data-y=\"['middle','middle','middle','middle']\" data-voffset=\"['0','0','0','0']\" 
\t\t\t\t\t\t\t\t\t\t\t\t\tdata-width=\"full-proportional\"
\t\t\t\t\t\t\t\t\t\tdata-height=\"full-proportional\"
\t\t\t\t\t\t\t\t\t\tdata-whitespace=\"nowrap\"
\t\t\t\t\t\t\t 
\t\t\t\t\t\t\t\t\t\tdata-type=\"image\" 
\t\t\t\t\t\t\t\t\t\tdata-basealign=\"slide\" 
\t\t\t\t\t\t\t\t\t\tdata-responsive_offset=\"on\" 

\t\t\t\t\t\t\t\t\t\tdata-frames='[{\"from\":\"z:0;rX:0;rY:0;rZ:0;sX:1.1;sY:1.1;skX:0;skY:0;opacity:0;\",\"speed\":1000,\"to\":\"o:1;\",\"delay\":\"bytrigger\",\"ease\":\"Power3.easeOut\"},{\"delay\":\"bytrigger\",\"speed\":500,\"to\":\"auto:auto;\",\"ease\":\"Power3.easeIn\"}]'
\t\t\t\t\t\t\t\t\t\tdata-textAlign=\"['left','left','left','left']\"
\t\t\t\t\t\t\t\t\t\tdata-paddingtop=\"[0,0,0,0]\"
\t\t\t\t\t\t\t\t\t\tdata-paddingright=\"[0,0,0,0]\"
\t\t\t\t\t\t\t\t\t\tdata-paddingbottom=\"[0,0,0,0]\"
\t\t\t\t\t\t\t\t\t\tdata-paddingleft=\"[0,0,0,0]\"
\t\t\t\t\t\t\t\t\t\tdata-lasttriggerstate=\"reset\"
\t\t\t\t\t\t\t\t\t\tstyle=\"z-index: 17;border-width:0px;\"><img src=\"{{ asset('images/computer.jpg') }}\" alt=\"background desk image\" data-ww=\"['full-proportional','full-proportional','full-proportional','full-proportional']\" data-hh=\"['full-proportional','full-proportional','full-proportional','full-proportional']\" width=\"1920\" height=\"1190\" data-no-retina> </div>

\t\t\t\t\t\t\t\t\t<!-- LAYER NR. 14 -->
\t\t\t\t\t\t\t\t\t<div class=\"tp-caption LandingPage-Title   tp-resizeme\" 
\t\t\t\t\t\t\t\t\t\t id=\"slide-2759-layer-22\" 
\t\t\t\t\t\t\t\t\t\t data-x=\"['left','left','left','left']\" data-hoffset=\"['100','100','50','50']\" 
\t\t\t\t\t\t\t\t\t\t data-y=\"['top','top','top','top']\" data-voffset=\"['100','70','30','30']\" 
\t\t\t\t\t\t\t\t\t\t\t\t\tdata-fontsize=\"['50','50','30','30']\"
\t\t\t\t\t\t\t\t\t\tdata-lineheight=\"['50','50','30','30']\"
\t\t\t\t\t\t\t\t\t\tdata-width=\"none\"
\t\t\t\t\t\t\t\t\t\tdata-height=\"none\"
\t\t\t\t\t\t\t\t\t\tdata-whitespace=\"nowrap\"
\t\t\t\t\t\t\t 
\t\t\t\t\t\t\t\t\t\tdata-type=\"text\" 
\t\t\t\t\t\t\t\t\t\tdata-responsive_offset=\"on\" 

\t\t\t\t\t\t\t\t\t\tdata-frames='[{\"from\":\"x:-50px;opacity:0;\",\"speed\":1500,\"to\":\"o:1;\",\"delay\":\"bytrigger\",\"ease\":\"Power3.easeOut\"},{\"delay\":\"bytrigger\",\"speed\":300,\"to\":\"auto:auto;\",\"ease\":\"nothing\"}]'
\t\t\t\t\t\t\t\t\t\tdata-textAlign=\"['left','left','left','left']\"
\t\t\t\t\t\t\t\t\t\tdata-paddingtop=\"[0,0,0,0]\"
\t\t\t\t\t\t\t\t\t\tdata-paddingright=\"[0,0,0,0]\"
\t\t\t\t\t\t\t\t\t\tdata-paddingbottom=\"[0,0,0,0]\"
\t\t\t\t\t\t\t\t\t\tdata-paddingleft=\"[0,0,0,0]\"
\t\t\t\t\t\t\t\t\t\tdata-lasttriggerstate=\"reset\"
\t\t\t\t\t\t\t\t\t\tstyle=\"z-index: 18; white-space: nowrap; font-size: 50px; line-height: 50px;\"> <a href=\"{{ asset('docs/KarlaGergelovaCV.pdf') }}\" class=\"text-white\" download=\"Karla_Gergelova_CV\">TELECHARGER<br/>
\t\t\t\t\t\t\tMON<br/>
\t\t\t\t\t\t\tCV ICI<i class=\"fa fa-link\" aria-hidden=\"true\"></i></a></div>

\t\t\t\t\t\t\t\t\t<!-- LAYER NR. 19 -->
\t\t\t\t\t\t\t\t\t<div class=\"tp-caption LandingPage-Button rev-btn  tp-resizeme\" 
\t\t\t\t\t\t\t\t\t\t id=\"slide-2759-layer-27\" 
\t\t\t\t\t\t\t\t\t\t data-x=\"['left','left','left','left']\" data-hoffset=\"['100','100','400','50']\" 
\t\t\t\t\t\t\t\t\t\t data-y=\"['top','top','top','top']\" data-voffset=\"['632','582','298','518']\" 
\t\t\t\t\t\t\t\t\t\t\t\t\tdata-width=\"none\"
\t\t\t\t\t\t\t\t\t\tdata-height=\"none\"
\t\t\t\t\t\t\t\t\t\tdata-whitespace=\"nowrap\"
\t\t\t\t\t\t\t 
\t\t\t\t\t\t\t\t\t\tdata-type=\"button\" 
\t\t\t\t\t\t\t\t\t\tdata-actions='[{\"event\":\"click\",\"action\":\"stoplayer\",\"layer\":\"slide-2759-layer-22\",\"delay\":\"\"},{\"event\":\"click\",\"action\":\"stoplayer\",\"layer\":\"slide-2759-layer-23\",\"delay\":\"\"},{\"event\":\"click\",\"action\":\"stoplayer\",\"layer\":\"slide-2759-layer-24\",\"delay\":\"\"},{\"event\":\"click\",\"action\":\"stoplayer\",\"layer\":\"slide-2759-layer-25\",\"delay\":\"\"},{\"event\":\"click\",\"action\":\"stoplayer\",\"layer\":\"slide-2759-layer-26\",\"delay\":\"\"},{\"event\":\"click\",\"action\":\"stoplayer\",\"layer\":\"slide-2759-layer-27\",\"delay\":\"\"},{\"event\":\"click\",\"action\":\"stoplayer\",\"layer\":\"slide-2759-layer-19\",\"delay\":\"300\"}]'
\t\t\t\t\t\t\t\t\t\tdata-responsive_offset=\"on\" 

\t\t\t\t\t\t\t\t\t\tdata-frames='[{\"from\":\"y:50px;opacity:0;\",\"speed\":1000,\"to\":\"o:1;\",\"delay\":\"bytrigger\",\"ease\":\"Power3.easeInOut\"},{\"delay\":\"bytrigger\",\"speed\":100,\"to\":\"opacity:0;\",\"ease\":\"nothing\"},{\"frame\":\"hover\",\"speed\":\"200\",\"ease\":\"Power2.easeInOut\",\"to\":\"o:1;rX:0;rY:0;rZ:0;z:0;\",\"style\":\"c:rgba(0, 0, 0, 1.00);bg:rgba(204, 204, 204, 1.00);bs:solid;\"}]'
\t\t\t\t\t\t\t\t\t\tdata-textAlign=\"['left','left','left','left']\"
\t\t\t\t\t\t\t\t\t\tdata-paddingtop=\"[0,0,0,0]\"
\t\t\t\t\t\t\t\t\t\tdata-paddingright=\"[60,60,60,60]\"
\t\t\t\t\t\t\t\t\t\tdata-paddingbottom=\"[0,0,0,0]\"
\t\t\t\t\t\t\t\t\t\tdata-paddingleft=\"[60,60,60,60]\"
\t\t\t\t\t\t\t\t\t\tdata-lasttriggerstate=\"reset\"
\t\t\t\t\t\t\t\t\t\tstyle=\"z-index: 23; white-space: nowrap; font-weight: 700;font-family:Raleway;border-radius:3px 3px 3px 3px;outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;cursor:pointer;\">GO BACK </div>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t<div class=\"tp-bannertimer tp-bottom\" style=\"visibility: hidden !important;\"></div>\t</div>
\t\t\t\t\t\t</div><!-- END REVOLUTION SLIDER -->
\t\t\t\t</div>        
\t\t\t</div>        
\t\t</div>        
\t\t<!-- Slider END -->
        <!-- About Us -->
\t\t<div class=\"section-full content-inner text-white dlab-about-1 bg-black\" id=\"about-us\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"section-head text-white text-center\">
\t\t\t\t\t<h1 class=\"invisible\">Karla Gergelova</h1>
\t\t\t\t\t<h2 class=\"text-uppercase\">A PROPOS</h2>
\t\t\t\t\t<div class=\"dlab-separator\"></div>
\t\t\t\t\t{# <p>Because of best quality & service, victory has always been our goal, we only represent the best talent.  We’ll do everything for you which can  put you at ease with the correct guidance, simplicity & honesty.</p> #}
\t\t\t\t</div>
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-lg-12 col-md-12 col-sm-12 text-center\">
\t\t\t\t\t\t<p>My name is Karla Gergelova. I am from Czech republic and i have been living in France since 2013. 
\t\t\t\t\t\t\tBefore coming to France, I have graduated from UNLV (University of Nevada, Las Vegas, USA) in Hotel Management while playing basketball full time for the university in their highest league-NCAA. 
\t\t\t\t\t\t\tI have lived in USA for 5 years before coming back to Czech republic to play basketball professionally.<br><br>

\t\t\t\t\t\t\tIn 2013 I left my country for another adventure, this time in France, because i have always wanted to learn French:)) 
\t\t\t\t\t\t\tI accepted an offer to play in France for 2 years professionally. After couple of years of playing basketball on a professional and semi-professional level ,while working in the hospitality industry (and some others as well), 
\t\t\t\t\t\t\tI have decided that I would like to find out how all those different systems that we used in the industry were actually utilized on the backend. 
\t\t\t\t\t\t\tI always loved learning and picking up new systems which is why I got interested in software programming. I love to challenge myself and utilize my brain in a different capacity.<br><br>

\t\t\t\t\t\t\tSoooo I decided to take some time to pursue my high interest in web development. 
\t\t\t\t\t\t\tI am still playing basketball semi-professionally at the moment, but I have just recently finished a 3,5month accelerated program in web and mobile development at WebForce3. 
\t\t\t\t\t\t\tI have been on an internship in a web agence called Digitics since, however the coronavirus has cut my internship short. 
\t\t\t\t\t\t\tAt the moment, I am finishing a website for a friend and redoing this website from zero (because I have created this one in the end of 2019 and since I have learned plenty of new things!!) by using Symfony. 
\t\t\t\t\t\t\tLastly, I am getting ready to present my thesis before the jury in end of July 2020 to obtain my Bac+2 in web development.
\t\t\t\t\t\t</p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<!-- About Us END -->

\t\t<!-- Competences -->
\t\t<div class=\"section-full overlay-black-middle bg-img-fix  content-inner-1 what-we-do what-we-do-2\" id=\"competences\" style=\"background-image: url(images/nature-lights.jpg);\" >
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"section-head text-center text-white\">
\t\t\t\t\t<h2 class=\"text-uppercase text-white\">Mes compétences</h2>
\t\t\t\t\t<div class=\"dlab-separator\"></div>
\t\t\t\t</div>
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-lg-4 col-md-6 col-sm-6 m-b30\">
\t\t\t\t\t\t<div class=\"icon-bx-wraper center p-a30 draw\">
\t\t\t\t\t\t\t<div class=\"icon-md  text-primary m-b20\"> <span class=\"icon-cell\"><img src=\"{{ asset('images/html.png') }}\" alt=\"\"></span> </div>
\t\t\t\t\t\t\t<div class=\"icon-content\">
\t\t\t\t\t\t\t\t<div class=\"dlab-separator\"></div>
\t\t\t\t\t\t\t\t<h3 class=\"dlab-title\">HTML 5</h3>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-lg-4 col-md-6 col-sm-6 m-b30\">
\t\t\t\t\t\t<div class=\"icon-bx-wraper center p-a30 draw\">
\t\t\t\t\t\t\t<div class=\"icon-md  text-primary m-b20\"> <span class=\"icon-cell\"><img src=\"{{ asset('images/css.png') }}\" alt=\"\"></span> </div>
\t\t\t\t\t\t\t<div class=\"icon-content\">
\t\t\t\t\t\t\t\t<div class=\"dlab-separator\"></div>
\t\t\t\t\t\t\t\t<h3 class=\"dlab-title\">CSS 3</h3>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-lg-4 col-md-6 col-sm-6 m-b30\">
\t\t\t\t\t\t<div class=\"icon-bx-wraper center p-a30 draw\">
\t\t\t\t\t\t\t<div class=\"icon-md  text-primary m-b20\"> <span class=\"icon-cell\"><img src=\"{{ asset('images/js.png') }}\" alt=\"\"></span> </div>
\t\t\t\t\t\t\t<div class=\"icon-content\">
\t\t\t\t\t\t\t\t<div class=\"dlab-separator\"></div>
\t\t\t\t\t\t\t\t<h3 class=\"dlab-title\">JavaScript</h3>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-lg-4 col-md-6 col-sm-6 m-b30\">
\t\t\t\t\t\t<div class=\"icon-bx-wraper center p-a30 draw\">
\t\t\t\t\t\t\t<div class=\"icon-md  text-primary m-b20\"> <span class=\"icon-cell\"><img src=\"{{ asset('images/php.png') }}\" alt=\"\"></span> </div>
\t\t\t\t\t\t\t<div class=\"icon-content\">
\t\t\t\t\t\t\t\t<div class=\"dlab-separator\"></div>
\t\t\t\t\t\t\t\t<h3 class=\"dlab-title\">PHP 7</h3>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-lg-4 col-md-6 col-sm-6 m-b30\">
\t\t\t\t\t\t<div class=\"icon-bx-wraper center p-a30 draw\">
\t\t\t\t\t\t\t<div class=\"icon-md  text-primary m-b20\"> <span class=\"icon-cell\"><img src=\"{{ asset('images/mysql.png') }}\" alt=\"\"></span> </div>
\t\t\t\t\t\t\t<div class=\"icon-content\">
\t\t\t\t\t\t\t\t<div class=\"dlab-separator\"></div>
\t\t\t\t\t\t\t\t<h3 class=\"dlab-title\">MySQL</h3>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-lg-4 col-md-6 col-sm-6 m-b30\">
\t\t\t\t\t\t<div class=\"icon-bx-wraper center p-a30 draw\">
\t\t\t\t\t\t\t<div class=\"icon-md  text-primary m-b20\"> <span class=\"icon-cell\"><img src=\"{{ asset('images/wordpress.png') }}\" alt=\"\"></span> </div>
\t\t\t\t\t\t\t<div class=\"icon-content\">
\t\t\t\t\t\t\t\t<div class=\"dlab-separator\"></div>
\t\t\t\t\t\t\t\t<h3 class=\"dlab-title\">WordPress</h3>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<!-- Competences END -->

\t\t<!-- Portfolio -->
\t\t<div class=\"section-full bg-black content-inner-1 text-black dlab-upcoming-event\" id=\"portfolio\">
\t\t\t<div class=\"container-fluid\">
\t\t\t\t<div class=\"section-head text-white text-center\">
\t\t\t\t\t<h2 class=\"text-uppercase\">Portfolio</h2>
\t\t\t\t\t<div class=\"dlab-separator\"></div>
\t\t\t\t\t<p>Examples from my short career:)</p>
\t\t\t\t</div>
\t\t\t\t<div class=\"section-content\">
\t\t\t\t\t<div class=\"event-carousel mfp-gallery gallery owl-btn-center-lr owl-btn-1 owl-carousel\">
\t\t\t\t\t\t<div class=\"item\">
\t\t\t\t\t\t\t<div class=\"ow-carousel-entry\">
\t\t\t\t\t\t\t\t<div class=\"ow-entry-media dlab-img-effect zoom-slow\"> 
\t\t\t\t\t\t\t\t\t<a href=\"https://www.yom-yoga.com\" target=\"_blank\"><img src=\"{{ asset('images/yomyoga.png') }}\" alt=\"screen shot of YomYoga website\"></a> 
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"text-center bg-dark-black p-lr10 p-tb15 text-white\">
\t\t\t\t\t\t\t\t\t<div class=\"ow-entry-title\"><a href=\"https://www.yom-yoga.com\">YOM YOGA</a></div>
\t\t\t\t\t\t\t\t\t<div class=\"dlab-separator\"></div>
\t\t\t\t\t\t\t\t\t<div class=\"ow-entry-text \">
\t\t\t\t\t\t\t\t\t\t<p class=\"m-b0\">HTML 5, CSS 3, Bootstrap 4, jQuery, Symfony 5, Ajax</p>
\t\t\t\t\t\t\t\t\t\t<p>This is a real website for a yoga teacher in Denmark. </p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"item\">
\t\t\t\t\t\t\t<div class=\"ow-carousel-entry\">
\t\t\t\t\t\t\t\t<div class=\"ow-entry-media dlab-img-effect zoom-slow\"> <a href=\"{{ path('OhMyCats') }}\" target=\"_blank\"><img src=\"{{ asset('images/cats.png') }}\" alt=\"screen shot of OhMyCats website\"></a> </div>
\t\t\t\t\t\t\t\t<div class=\"text-center bg-dark-black p-lr10 p-tb15 text-white\">
\t\t\t\t\t\t\t\t\t<div class=\"ow-entry-title\"><a href=\"{{ path('OhMyCats') }}\" target=\"_blank\">OhMyCats</a></div>
\t\t\t\t\t\t\t\t\t<div class=\"dlab-separator\"></div>
\t\t\t\t\t\t\t\t\t<div class=\"ow-entry-text \">
\t\t\t\t\t\t\t\t\t\t<p class=\"m-b0\">HTML 5, CSS 3, Bootstrap 4, JavaScript, jQuery</p>
\t\t\t\t\t\t\t\t\t\t<p>Page d'adoption de chat fictive.</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"item\">
\t\t\t\t\t\t\t<div class=\"ow-carousel-entry\">
\t\t\t\t\t\t\t\t<div class=\"ow-entry-media dlab-img-effect zoom-slow\"> <a href=\"{{ path('MultiWebsite') }}\" target=\"_blank\"><img src=\"{{ asset('images/multi.png') }}\" alt=\"screen shot of multi website\"></a> </div>
\t\t\t\t\t\t\t\t<div class=\"text-center bg-dark-black p-lr10 p-tb15 text-white\">
\t\t\t\t\t\t\t\t\t<div class=\"ow-entry-title\"><a href=\"{{ path('MultiWebsite') }}\" target=\"_blank\">Multi website</a></div>
\t\t\t\t\t\t\t\t\t<div class=\"dlab-separator\"></div>
\t\t\t\t\t\t\t\t\t<div class=\"ow-entry-text \">
\t\t\t\t\t\t\t\t\t\t<p class=\"m-b0\">HTML 5, CSS 3, Bootstrap 4</p>
\t\t\t\t\t\t\t\t\t\t<p> Ceci est une site vitrine de démonstration.</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"item\">
\t\t\t\t\t\t\t<div class=\"ow-carousel-entry\">
\t\t\t\t\t\t\t\t<div class=\"ow-entry-media dlab-img-effect zoom-slow\"> <a href=\"{{ path('RentAcar') }}\" target=\"_blank\"><img src=\"{{ asset('images/rent.png') }}\" alt=\"screen shot of rentAcar website\"></a> </div>
\t\t\t\t\t\t\t\t<div class=\"text-center bg-dark-black p-lr10 p-tb15 text-white\">
\t\t\t\t\t\t\t\t\t<div class=\"ow-entry-title\"><a href=\"{{ path('RentAcar') }}\" target=\"_blank\">RentAcar</a></div>
\t\t\t\t\t\t\t\t\t<div class=\"dlab-separator\"></div>
\t\t\t\t\t\t\t\t\t<div class=\"ow-entry-text \">
\t\t\t\t\t\t\t\t\t\t<p class=\"m-b0\">HTML 5, CSS 3, Bootstrap 4, JavaScript, jQuery</p>
\t\t\t\t\t\t\t\t\t\t<p> Page de location des véhicules fictive.</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"item\">
\t\t\t\t\t\t\t<div class=\"ow-carousel-entry\">
\t\t\t\t\t\t\t\t<div class=\"ow-entry-media dlab-img-effect zoom-slow\"> <a href=\"{{ path('HappyTours') }}\" target=\"_blank\"><img src=\"{{ asset('images/voyage.png') }}\" alt=\"screen shot of HappyTours website\"></a> </div>
\t\t\t\t\t\t\t\t<div class=\"text-center bg-dark-black p-lr10 p-tb15 text-white\">
\t\t\t\t\t\t\t\t\t<div class=\"ow-entry-title\"><a href=\"{{ path('HappyTours') }}\" target=\"_blank\">Happy Tours</a></div>
\t\t\t\t\t\t\t\t\t<div class=\"dlab-separator\"></div>
\t\t\t\t\t\t\t\t\t<div class=\"ow-entry-text \">
\t\t\t\t\t\t\t\t\t\t<p class=\"m-b0\">HTML 5,CSS 3, Bootstrap 4</p>
\t\t\t\t\t\t\t\t\t\t<p> Site vitrne d'une agence de voyage fictive.</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<!-- Portfolio END -->

\t\t<!-- CV -->

\t\t<div class=\"section-full  overlay-black-middle bg-img-fix content-inner text-white dlab-about-1\" id=\"cv\" style=\"background-image: url(images/cv-background.png);\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"section-head text-white text-center\">
\t\t\t\t\t<h2 class=\"text-uppercase\">Mon CV</h2>
\t\t\t\t\t<div class=\"dlab-separator\"></div>
\t\t\t\t\t<p>Si vous n'avez pas encore trouvé mon CV sur mon site plus haut, voici le lien de téléchargement encore une fois.</p>
\t\t\t\t</div>
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-lg-12 col-md-6 col-sm-6 text-center\">
\t\t\t\t\t\t<h2><a href=\"{{ asset('docs/KarlaGergelovaCV.pdf') }}\" class=\"text-white\" download=\"Karla_Gergelova_CV\">Télécharger mon CV ici<br><i class=\"fa fa-link\" aria-hidden=\"true\"></i></a></h2>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<!-- CV END -->

\t\t<!-- Contact -->
\t\t<div class=\"section-full bg-black dlab-contact-1\" id=\"contact\">
\t\t\t<div class=\"row dzseth m-a0\">
\t\t\t\t<div class=\"col-xl-6 col-lg-4 col-md-12 p-a0\">
\t\t\t\t\t<iframe class=\"seth\" src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d21101.184059707906!2d7.734895400258374!3d48.61658062291911!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4796c86f453b3249%3A0x45bb538b377b17fc!2sSchiltigheim!5e0!3m2!1sfr!2sfr!4v1592513418753!5m2!1sfr!2sfr\" style=\"border:0px; width: 100%; min-height: 300px;\" allowfullscreen=\"\" aria-hidden=\"false\" tabindex=\"0\"></iframe>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-xl-6 col-lg-8 col-md-12  bg-black text-white bg-img-fix\" >
\t\t\t\t\t<div class=\"content-inner-1  bg-img-fix\">
\t\t\t\t\t\t<div class=\"section-head text-center\">
\t\t\t\t\t\t\t<h2 class=\"text-uppercase\">Contactez-moi</h2>
\t\t\t\t\t\t\t<div class=\"dlab-separator\"></div>
\t\t\t\t\t\t\t<p class=\"max-w500 m-auto m-b0\">If you have any questions, you can contact me here.</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"p-lr30 row m-b30 contact-style-1\">
\t\t\t\t\t\t\t<div class=\"dzFormMsg\"></div>
\t\t\t\t\t\t\t<form method=\"post\" class=\"dzForm\" action=\"{{ path('contact') }}\">
\t\t\t\t\t\t\t<input type=\"hidden\" value=\"Contact\" name=\"whichform\" >
                                <div class=\"row\">
                                    <div class=\"col-lg-6\">
                                        <div class=\"form-group\">
                                            <div class=\"input-group\">
                                                <input name=\"lastname\" type=\"text\" required class=\"form-control\" placeholder=\"Your Last Name\">
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"col-lg-6\">
                                        <div class=\"form-group\">
                                            <div class=\"input-group\"> 
\t\t\t\t\t\t\t\t\t\t\t    <input name=\"firstname\" type=\"text\" class=\"form-control\" required  placeholder=\"Your First Name\" >
                                            </div>
                                        </div>
                                    </div>
\t\t\t\t\t\t\t\t\t<div class=\"col-lg-6\">
                                        <div class=\"form-group\">
                                            <div class=\"input-group\">
                                                <input name=\"email\" type=\"email\" required class=\"form-control\" placeholder=\"Your Email\">
                                            </div>
                                        </div>
                                    </div>
\t\t\t\t\t\t\t\t\t<div class=\"col-lg-6\">
                                        <div class=\"form-group\">
                                            <div class=\"input-group\">
                                                <input name=\"subject\" type=\"text\" required class=\"form-control\" placeholder=\"Subject\">
                                            </div>
                                        </div>
                                    </div>
                                     <div class=\"col-lg-12\">
                                        <div class=\"form-group\">
                                            <div class=\"input-group\">
                                                <textarea name=\"message\" rows=\"4\" class=\"form-control\" required placeholder=\"Your Message...\"></textarea>
                                            </div>
                                        </div>
                                    </div>

\t\t\t\t\t\t\t\t\t<div class=\"col-lg-12 col-md-12 col-sm-12\">
\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"g-recaptcha\" data-sitekey=\"6LdsKyAaAAAAAGeb0MD8l4t1WBN5g4asvSodDnW5\" data-callback=\"verifyRecaptchaCallback\" data-expired-callback=\"expiredRecaptchaCallback\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t<input class=\"form-control d-none\" style=\"display:none;\" data-recaptcha=\"true\" required data-error=\"Please complete the Captcha\">
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t
                                    <div class=\"col-lg-12\">
\t\t\t\t\t\t\t\t\t\t<button name=\"submit\" type=\"submit\" value=\"Submit\" class=\"site-button \"> <span>Submit</span> </button>
                                    </div>
                                </div>
                            </form>
                        </div>
\t\t\t\t\t\t<div class=\"p-lr15 row dlab-contact\">
\t\t\t\t\t\t\t<div class=\"col-lg-4 col-md-4 col-sm-4 m-b15\">
\t\t\t\t\t\t\t\t<div class=\"icon-bx-wraper p-a15 center col\">
\t\t\t\t\t\t\t\t\t<div class=\"icon-bx-sm m-b20 radius\"> <a href=\"tel:+33652629472\" class=\"icon-cell\"><i class=\"fa fa-phone\"></i></a> </div>
\t\t\t\t\t\t\t\t\t<div class=\"icon-content\">
\t\t\t\t\t\t\t\t\t\t<h5>Phone</h5>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-lg-4 col-md-4 col-sm-4 m-b15\">
\t\t\t\t\t\t\t\t<div class=\"icon-bx-wraper p-a15 center col\">
\t\t\t\t\t\t\t\t\t<div class=\"icon-bx-sm m-b20 radius\"> <a href=\"mailto:gergelovakarla@aol.com\" class=\"icon-cell\"><i class=\"fa fa-paper-plane\"></i></a></div>
\t\t\t\t\t\t\t\t\t<div class=\"icon-content\">
\t\t\t\t\t\t\t\t\t\t<h5>Email</h5>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-lg-4 col-md-4 col-sm-4  m-b15\">
\t\t\t\t\t\t\t\t<div class=\"icon-bx-wraper p-a15 center col\">
\t\t\t\t\t\t\t\t\t<div class=\"icon-bx-sm m-b20 radius\"> <a href=\"https://www.linkedin.com/in/karla-gergelov%C3%A1-05728346/\" target=\"_blank\" class=\"icon-cell\"><i class=\"fa fa-linkedin\"></i></a> </div>
\t\t\t\t\t\t\t\t\t<div class=\"icon-content\">
\t\t\t\t\t\t\t\t\t\t<h5>Linkedin</h5>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>

\t\t
\t\t<!-- Contact END -->
\t 

{% endblock %}
", "portfolio2/home.html.twig", "/Users/karlagergelova/Documents/GitHub/portfolio2/templates/portfolio2/home.html.twig");
    }
}

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

/* portfolio2/header.html.twig */
class __TwigTemplate_55f9bfa5fd08781457e783d3ab9b1dfc9f1046dc72831a1bb85250ebed0ced51 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "portfolio2/header.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "portfolio2/header.html.twig"));

        // line 1
        echo "\t<!-- header -->
    <header class=\"site-header header header-transparent navbar-expand-lg\">
\t\t<!-- main header -->
        <div class=\"sticky-header main-bar-wraper\">
            <div class=\"main-bar clearfix onepage\">
                <div class=\"container clearfix\">
                    <!-- website logo -->
                    <div class=\"logo-header mostion\">
\t\t\t\t\t\t<a href=\"index.html\"><img src=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/logo1transparent.png"), "html", null, true);
        echo "\" alt=\"logo KG\"></a>
\t\t\t\t\t</div>
                    <!-- nav toggle button -->
                    <button class=\"navbar-toggler collapsed navicon justify-content-end\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarNavDropdown\" aria-controls=\"navbarNavDropdown\" aria-expanded=\"false\" aria-label=\"Toggle navigation\"><span></span><span></span><span></span></button>
                    <!-- main nav -->
                    <div class=\"header-nav navbar-collapse collapse navbar myNavbar justify-content-end\" id=\"navbarNavDropdown\" >
\t\t\t\t\t\t<ul class=\"nav navbar-nav\">
\t\t\t\t\t\t\t<li><a href=\"#accueil\" class=\"scroll nav-link active\">Accueil</a></li>
\t\t\t\t\t\t\t<li><a href=\"#about-us\" class=\"scroll nav-link\">A propos</a></li>
\t\t\t\t\t\t\t<li><a href=\"#competences\" class=\"scroll nav-link\">Compétences</a></li>
\t\t\t\t\t\t\t<li><a href=\"#portfolio\" class=\"scroll nav-link\">Portfolio</a></li>
                            <li><a href=\"#cv\" class=\"scroll nav-link\">CV</a></li>
\t\t\t\t\t\t\t<li><a href=\"#contact\" class=\"scroll nav-link\">Contact</a></li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
                </div>
            </div>
        </div>
        <!-- main header END -->
    </header>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "portfolio2/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 9,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("\t<!-- header -->
    <header class=\"site-header header header-transparent navbar-expand-lg\">
\t\t<!-- main header -->
        <div class=\"sticky-header main-bar-wraper\">
            <div class=\"main-bar clearfix onepage\">
                <div class=\"container clearfix\">
                    <!-- website logo -->
                    <div class=\"logo-header mostion\">
\t\t\t\t\t\t<a href=\"index.html\"><img src=\"{{asset('images/logo1transparent.png') }}\" alt=\"logo KG\"></a>
\t\t\t\t\t</div>
                    <!-- nav toggle button -->
                    <button class=\"navbar-toggler collapsed navicon justify-content-end\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarNavDropdown\" aria-controls=\"navbarNavDropdown\" aria-expanded=\"false\" aria-label=\"Toggle navigation\"><span></span><span></span><span></span></button>
                    <!-- main nav -->
                    <div class=\"header-nav navbar-collapse collapse navbar myNavbar justify-content-end\" id=\"navbarNavDropdown\" >
\t\t\t\t\t\t<ul class=\"nav navbar-nav\">
\t\t\t\t\t\t\t<li><a href=\"#accueil\" class=\"scroll nav-link active\">Accueil</a></li>
\t\t\t\t\t\t\t<li><a href=\"#about-us\" class=\"scroll nav-link\">A propos</a></li>
\t\t\t\t\t\t\t<li><a href=\"#competences\" class=\"scroll nav-link\">Compétences</a></li>
\t\t\t\t\t\t\t<li><a href=\"#portfolio\" class=\"scroll nav-link\">Portfolio</a></li>
                            <li><a href=\"#cv\" class=\"scroll nav-link\">CV</a></li>
\t\t\t\t\t\t\t<li><a href=\"#contact\" class=\"scroll nav-link\">Contact</a></li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
                </div>
            </div>
        </div>
        <!-- main header END -->
    </header>", "portfolio2/header.html.twig", "C:\\Users\\curly\\OneDrive\\Plocha\\SYMFONY projects\\portfolio2\\templates\\portfolio2\\header.html.twig");
    }
}

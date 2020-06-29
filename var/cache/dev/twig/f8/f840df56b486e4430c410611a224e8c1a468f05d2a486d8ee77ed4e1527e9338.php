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

/* multi/header.html.twig */
class __TwigTemplate_6101c38bc1b11463ca3f83bb0a2c7b056ffa7900c643de34cadfc64a0ebaa689 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "multi/header.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "multi/header.html.twig"));

        // line 1
        echo "<!--Bar de navigation-->
<nav class=\"navbar navbar-expand-lg navbar-light bg-light\">
    <div class=\"container\">
        <a class=\"navbar-brand\" href=\"#\"><span id=\"red\">M</span>ulti</a>
        <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
            <span class=\"navbar-toggler-icon\"></span>
        </button>
        
        <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
            <ul class=\"navbar-nav ml-auto\">
            <li class=\"nav-item active\">
                <a class=\"nav-link\" href=\"#\" id=\"redHome\">HOME <span class=\"sr-only\">(current)</span></a>
            </li>
            <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"#\">SERVICES</a>
            </li>
            <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"#\">BLOG</a>
            </li>
            <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"#\">PORTFOLIO</a>
            </li>
            <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"#\">CONTACT</a>
            </li>
            </ul>
        </div>
    </div><!--/container-->
</nav>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "multi/header.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!--Bar de navigation-->
<nav class=\"navbar navbar-expand-lg navbar-light bg-light\">
    <div class=\"container\">
        <a class=\"navbar-brand\" href=\"#\"><span id=\"red\">M</span>ulti</a>
        <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
            <span class=\"navbar-toggler-icon\"></span>
        </button>
        
        <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
            <ul class=\"navbar-nav ml-auto\">
            <li class=\"nav-item active\">
                <a class=\"nav-link\" href=\"#\" id=\"redHome\">HOME <span class=\"sr-only\">(current)</span></a>
            </li>
            <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"#\">SERVICES</a>
            </li>
            <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"#\">BLOG</a>
            </li>
            <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"#\">PORTFOLIO</a>
            </li>
            <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"#\">CONTACT</a>
            </li>
            </ul>
        </div>
    </div><!--/container-->
</nav>", "multi/header.html.twig", "C:\\Users\\curly\\OneDrive\\Plocha\\SYMFONY projects\\portfolio2\\templates\\multi\\header.html.twig");
    }
}

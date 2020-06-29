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

/* ohmycats/header.html.twig */
class __TwigTemplate_867c84262e3ca3bacfd38552cc758687d6cfdca82dcd6bd685f8c5b98a74b06e extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "ohmycats/header.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "ohmycats/header.html.twig"));

        // line 1
        echo "<!--Navbar-->
<nav class=\"navbar navbar-light bg-light text-white\">
    <div class=\"container\">
        <a class=\"navbar-branda text-white\" href=\"#\">OhMyCats!</a>
    </div>
</nav>

<!--Header-->
<header class = \"container-fluid py-5 text-white text-center\" style=\"background-image: url(images/ohmycats/background.jpg);\">
    <h1>Adoptez un chat trop bon!</h1>
</header>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "ohmycats/header.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!--Navbar-->
<nav class=\"navbar navbar-light bg-light text-white\">
    <div class=\"container\">
        <a class=\"navbar-branda text-white\" href=\"#\">OhMyCats!</a>
    </div>
</nav>

<!--Header-->
<header class = \"container-fluid py-5 text-white text-center\" style=\"background-image: url(images/ohmycats/background.jpg);\">
    <h1>Adoptez un chat trop bon!</h1>
</header>", "ohmycats/header.html.twig", "C:\\Users\\curly\\OneDrive\\Plocha\\SYMFONY projects\\portfolio2\\templates\\ohmycats\\header.html.twig");
    }
}

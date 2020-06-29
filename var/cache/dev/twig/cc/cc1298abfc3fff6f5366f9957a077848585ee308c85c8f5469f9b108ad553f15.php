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

/* happytours/header.html.twig */
class __TwigTemplate_7784be74ee136a4ded23c6b3d285b18527fe42e5f2bd2acbc9aa359b30f0d4d9 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "happytours/header.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "happytours/header.html.twig"));

        // line 1
        echo "<nav class=\"navbar navbar-expand-lg navbar-light\">
    <div class=\"container\">
        <!--open navbar et apres open a container-->
        <a class=\"navbar-brand\" href=\"#\">
            <img src=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/happytours/happytours.png"), "html", null, true);
        echo "\" alt=\"Logo de l'entreprise\" class=\"src\" style=\"width:35%;\"><!--.svg are images vectoriel so the images stay the same without deformation, alt atttributes are obligatoire avec img-->
        </a>
        <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                <span class=\"navbar-toggler-icon\"></span>
        </button>

    <div class=\"collapse navbar-collapse\"id=\"navbarSupportedContent\">
        <ul class=\"navbar-nav ml-auto\">
            <li class=\"nav-item active\">
                <a class=\"nav-link\" href=\"#\">Home <span class=\"sr-only\">(current)</span></a>
            </li>
            <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"#\">Reserve your journey</a>
            </li>
            <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"#\">About our agency</a>
            </li>
            <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"#\">Special deals</a>
            </li>
            <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"#\">Contact Us</a>
            </li>
        </ul>
    </div><!--/container-->
</nav>

<header class=\"container-fluid py-5\">
    <div class=\"container\">
        <div class=\"row\">
            <section class=\"col-lg-5\">
                <h1 class=\"text-center\">WELCOME TO HAPPY TOURS</h1>
                <p class=\"text-center\"> <!--write \"lorem\" and we will got the text-->
                    ...For over 30 years, the professional travel agents at Happy Tours Travel Agency have been planning all-inclusive vacations, charters, tours and vacation packages for individuals, families and groups, and we'd love to do the same for you. Call or e-mail us for a free quote and you'll be on your way to your dream vacation!
                </p>
                <section class=\"text-center\">
                    <a href=\"\" class=\"btn btn-primary\">CALL US</a>
                    <a href=\"\" class=\"btn btn-primary\">RESERVE YOUR TRIP</a>
                </section>
            </section><!--/col-5-->

            <section class=\"col-lg-7\">
                <div id=\"carouselExampleIndicators\" class=\"carousel slide\" data-ride=\"carousel\" data-interval=\"2000\">
                    <ol class=\"carousel-indicators\">
                        <li data-target=\"#carouselExampleIndicators\" data-slide-to=\"0\" class=\"active\"></li>
                        <li data-target=\"#carouselExampleIndicators\" data-slide-to=\"1\"></li>
                        <li data-target=\"#carouselExampleIndicators\" data-slide-to=\"2\"></li>
                    </ol>
                    <div class=\"carousel-inner\">
                        <div class=\"carousel-item active\">
                            <figure class=\"img-thumbnail\">
                                <img class=\"img-fluid\" src=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/happytours/basic-pic2.jpg"), "html", null, true);
        echo "\"  alt=\"Beach\" style=\"width:100%\">
                                <figcaption>El Arco Cabo Mexico. </figcaption>
                            </figure>
                        </div>
                        <div class=\"carousel-item\"> <!--change items here only-->
                            <figure class=\"img-thumbnail\">
                                <img class=\"img-fluid\" src=\"";
        // line 62
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/happytours/basic-pic1.jpg"), "html", null, true);
        echo "\"  alt=\"Beach\" style=\"width:100%\">
                                <figcaption>El Arco Cabo Mexico. </figcaption>
                            </figure>
                        </div>
                        <div class=\"carousel-item\">
                            <figure class=\"img-thumbnail\">
                                <img class=\"img-fluid\" src=\"";
        // line 68
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/happytours/basic-pic3.jpg"), "html", null, true);
        echo "\"  alt=\"Beach\" style=\"width:100%\">
                                <figcaption>El Arco Cabo Mexico. </figcaption>
                            </figure>
                        </div>
                    </div>
                    <a class=\"carousel-control-prev\" href=\"#carouselExampleIndicators\" role=\"button\" data-slide=\"prev\">
                        <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
                        <span class=\"sr-only\">Previous</span>
                    </a>
                    <a class=\"carousel-control-next\" href=\"#carouselExampleIndicators\" role=\"button\" data-slide=\"next\">
                        <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
                        <span class=\"sr-only\">Next</span>
                    </a>
                </div>
            </section><!--/col-7-->
        </div><!--/row-->
    </div><!--/container-->
</header>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "happytours/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  121 => 68,  112 => 62,  103 => 56,  49 => 5,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<nav class=\"navbar navbar-expand-lg navbar-light\">
    <div class=\"container\">
        <!--open navbar et apres open a container-->
        <a class=\"navbar-brand\" href=\"#\">
            <img src=\"{{asset('images/happytours/happytours.png') }}\" alt=\"Logo de l'entreprise\" class=\"src\" style=\"width:35%;\"><!--.svg are images vectoriel so the images stay the same without deformation, alt atttributes are obligatoire avec img-->
        </a>
        <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                <span class=\"navbar-toggler-icon\"></span>
        </button>

    <div class=\"collapse navbar-collapse\"id=\"navbarSupportedContent\">
        <ul class=\"navbar-nav ml-auto\">
            <li class=\"nav-item active\">
                <a class=\"nav-link\" href=\"#\">Home <span class=\"sr-only\">(current)</span></a>
            </li>
            <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"#\">Reserve your journey</a>
            </li>
            <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"#\">About our agency</a>
            </li>
            <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"#\">Special deals</a>
            </li>
            <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"#\">Contact Us</a>
            </li>
        </ul>
    </div><!--/container-->
</nav>

<header class=\"container-fluid py-5\">
    <div class=\"container\">
        <div class=\"row\">
            <section class=\"col-lg-5\">
                <h1 class=\"text-center\">WELCOME TO HAPPY TOURS</h1>
                <p class=\"text-center\"> <!--write \"lorem\" and we will got the text-->
                    ...For over 30 years, the professional travel agents at Happy Tours Travel Agency have been planning all-inclusive vacations, charters, tours and vacation packages for individuals, families and groups, and we'd love to do the same for you. Call or e-mail us for a free quote and you'll be on your way to your dream vacation!
                </p>
                <section class=\"text-center\">
                    <a href=\"\" class=\"btn btn-primary\">CALL US</a>
                    <a href=\"\" class=\"btn btn-primary\">RESERVE YOUR TRIP</a>
                </section>
            </section><!--/col-5-->

            <section class=\"col-lg-7\">
                <div id=\"carouselExampleIndicators\" class=\"carousel slide\" data-ride=\"carousel\" data-interval=\"2000\">
                    <ol class=\"carousel-indicators\">
                        <li data-target=\"#carouselExampleIndicators\" data-slide-to=\"0\" class=\"active\"></li>
                        <li data-target=\"#carouselExampleIndicators\" data-slide-to=\"1\"></li>
                        <li data-target=\"#carouselExampleIndicators\" data-slide-to=\"2\"></li>
                    </ol>
                    <div class=\"carousel-inner\">
                        <div class=\"carousel-item active\">
                            <figure class=\"img-thumbnail\">
                                <img class=\"img-fluid\" src=\"{{ asset('images/happytours/basic-pic2.jpg') }}\"  alt=\"Beach\" style=\"width:100%\">
                                <figcaption>El Arco Cabo Mexico. </figcaption>
                            </figure>
                        </div>
                        <div class=\"carousel-item\"> <!--change items here only-->
                            <figure class=\"img-thumbnail\">
                                <img class=\"img-fluid\" src=\"{{ asset('images/happytours/basic-pic1.jpg') }}\"  alt=\"Beach\" style=\"width:100%\">
                                <figcaption>El Arco Cabo Mexico. </figcaption>
                            </figure>
                        </div>
                        <div class=\"carousel-item\">
                            <figure class=\"img-thumbnail\">
                                <img class=\"img-fluid\" src=\"{{ asset('images/happytours/basic-pic3.jpg') }}\"  alt=\"Beach\" style=\"width:100%\">
                                <figcaption>El Arco Cabo Mexico. </figcaption>
                            </figure>
                        </div>
                    </div>
                    <a class=\"carousel-control-prev\" href=\"#carouselExampleIndicators\" role=\"button\" data-slide=\"prev\">
                        <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
                        <span class=\"sr-only\">Previous</span>
                    </a>
                    <a class=\"carousel-control-next\" href=\"#carouselExampleIndicators\" role=\"button\" data-slide=\"next\">
                        <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
                        <span class=\"sr-only\">Next</span>
                    </a>
                </div>
            </section><!--/col-7-->
        </div><!--/row-->
    </div><!--/container-->
</header>", "happytours/header.html.twig", "C:\\Users\\curly\\OneDrive\\Plocha\\SYMFONY projects\\portfolio2\\templates\\happytours\\header.html.twig");
    }
}

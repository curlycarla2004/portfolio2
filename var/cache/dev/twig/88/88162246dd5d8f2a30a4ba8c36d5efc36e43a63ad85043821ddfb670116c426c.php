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

/* rentacar/header.html.twig */
class __TwigTemplate_731bb4039eaa697f1d60cc5b4dafd5b81f1b0412515eaf400f2184cf4ee5520b extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "rentacar/header.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "rentacar/header.html.twig"));

        // line 1
        echo "<!--Navbar-->
<nav class=\"navbar navbar-light bg-transparent fixed-top px-0\">
    <button class=\"navbar-toggler ml-auto mr-3\" type=\"button\" data-toggle=\"collapse\" data-target=\"#maNavbar\" aria-controls=\"maNavbar\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
        <span class=\"navbar-toggler-icon\"></span>
    </button>
    <div class=\"collapse navbar-collapse mt-2\" id=\"maNavbar\">
        <ul class=\"navbar-nav ml-auto\">
            <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"#\">Louer une voiture</a>
            </li>
            <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"#\">Louer un utilitaire</a>
            </li>
            <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"#\">Réserver un chauffeur</a>
            </li>
            <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"#\">Découvrir nos agences</a>
            </li>
            <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"#\">Mon Compte</a>
            </li>
            <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"#\">Contact</a>
            </li>
        </ul>
    </div>
</nav>

<!--Bienvenue à bord container-->
<header class=\"container-fluid\" style=\"background-image: url(images/rentacar/background.png);\">
    <section class=\"container\">
        <div class=\"row justify-content-center\">
            <div id=\"titre\" class=\"col-12 text-center\">
                <h1>Bienvenue à bord</h1>
                <p>Location de voiture 24h/24 et 7j/7</p>
            </div>
            <div id=\"form\" class=\"col-12\">
                <form class=\"form-inline\">
                    <div class=\"form-group py-1 pl-2\">
                        <select class=\"custom-select\" id=\"adresse\">
                            <option selected>Adresse de départ</option>
                            <option>Paris</option>
                            <option>Lyon</option>
                            <option>Marseille</option>
                        </select>
                    </div>
                    <div class=\"form-group py-1\">
                        <div class=\"input-group\" id=\"datetimepicker1\">
                            <div class=\"input-group\">
                                <input type=\"text\" class=\"form-control\" placeholder=\"Début de location\">
                                <div class=\"input-group-append\">
                                <span class=\"input-group-text\" id=\"basic-addon2\"><i class=\"fas fa-calendar-alt\"></i></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"form-group py-1\">
                        <div class=\"input-group\" id=\"datetimepicker1\">
                            <div class=\"input-group\">
                                <input type=\"text\" class=\"form-control\" placeholder=\"Fin de location\">
                                <div class=\"input-group-append\">
                                    <span class=\"input-group-text\" id=\"basic-addon2\"><i class=\"fas fa-calendar-alt\"></i></span>
                                </div>
                            </div><!--/input-group-->
                        </div><!--/datetimepicker1-->
                    </div><!--/form-group-->
                    <button type=\"submit\" class=\"btn btn-success\">Valider ma recherche</button>
                </form><!--form_inline-->
            </div><!--/col-12-->
        </div><!--/row-->\t\t\t
    </section><!--/container-->
</header>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "rentacar/header.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!--Navbar-->
<nav class=\"navbar navbar-light bg-transparent fixed-top px-0\">
    <button class=\"navbar-toggler ml-auto mr-3\" type=\"button\" data-toggle=\"collapse\" data-target=\"#maNavbar\" aria-controls=\"maNavbar\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
        <span class=\"navbar-toggler-icon\"></span>
    </button>
    <div class=\"collapse navbar-collapse mt-2\" id=\"maNavbar\">
        <ul class=\"navbar-nav ml-auto\">
            <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"#\">Louer une voiture</a>
            </li>
            <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"#\">Louer un utilitaire</a>
            </li>
            <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"#\">Réserver un chauffeur</a>
            </li>
            <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"#\">Découvrir nos agences</a>
            </li>
            <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"#\">Mon Compte</a>
            </li>
            <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"#\">Contact</a>
            </li>
        </ul>
    </div>
</nav>

<!--Bienvenue à bord container-->
<header class=\"container-fluid\" style=\"background-image: url(images/rentacar/background.png);\">
    <section class=\"container\">
        <div class=\"row justify-content-center\">
            <div id=\"titre\" class=\"col-12 text-center\">
                <h1>Bienvenue à bord</h1>
                <p>Location de voiture 24h/24 et 7j/7</p>
            </div>
            <div id=\"form\" class=\"col-12\">
                <form class=\"form-inline\">
                    <div class=\"form-group py-1 pl-2\">
                        <select class=\"custom-select\" id=\"adresse\">
                            <option selected>Adresse de départ</option>
                            <option>Paris</option>
                            <option>Lyon</option>
                            <option>Marseille</option>
                        </select>
                    </div>
                    <div class=\"form-group py-1\">
                        <div class=\"input-group\" id=\"datetimepicker1\">
                            <div class=\"input-group\">
                                <input type=\"text\" class=\"form-control\" placeholder=\"Début de location\">
                                <div class=\"input-group-append\">
                                <span class=\"input-group-text\" id=\"basic-addon2\"><i class=\"fas fa-calendar-alt\"></i></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"form-group py-1\">
                        <div class=\"input-group\" id=\"datetimepicker1\">
                            <div class=\"input-group\">
                                <input type=\"text\" class=\"form-control\" placeholder=\"Fin de location\">
                                <div class=\"input-group-append\">
                                    <span class=\"input-group-text\" id=\"basic-addon2\"><i class=\"fas fa-calendar-alt\"></i></span>
                                </div>
                            </div><!--/input-group-->
                        </div><!--/datetimepicker1-->
                    </div><!--/form-group-->
                    <button type=\"submit\" class=\"btn btn-success\">Valider ma recherche</button>
                </form><!--form_inline-->
            </div><!--/col-12-->
        </div><!--/row-->\t\t\t
    </section><!--/container-->
</header>", "rentacar/header.html.twig", "C:\\Users\\curly\\OneDrive\\Plocha\\SYMFONY projects\\portfolio2\\templates\\rentacar\\header.html.twig");
    }
}

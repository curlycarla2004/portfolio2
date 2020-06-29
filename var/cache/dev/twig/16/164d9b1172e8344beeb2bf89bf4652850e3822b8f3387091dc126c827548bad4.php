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

/* rentacar/rentacar.html.twig */
class __TwigTemplate_5737db5a4280c95ff59f865e286bae77aa228e946d0f39d3397c05441c388b64 extends Template
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
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "rentacar/rentacar.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "rentacar/rentacar.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
    <head>
        <meta charset=\"UTF-8\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"ie=edge\">

        <title>";
        // line 8
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

        ";
        // line 10
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 16
        echo "    </head>

    <body>

        ";
        // line 20
        $this->loadTemplate("rentacar/header.html.twig", "rentacar/rentacar.html.twig", 20)->display($context);
        // line 21
        echo "
          <!--7résultat-->
        <section class=\"container-fluid\" id=\"resultat\">
            <div class=\"container\">
                <nav class=\"navbar navbar-light\">
                    <a class=\"navbar-brand\">7 résultat</a>
                    <ul class=\"navbar-nav ml-auto\">
                        <li><button type=\"button\" class=\"btn btn-light\" id=\"buttonPrix\">Prix Croissant<i class=\"fas fa-sort-down\"></i></button></li>
                    </ul>
                </nav>
            </div><!--/container-->
        </section>

        <!--1 car-->
        <section class=\"container-fluid\">
            <section class=\"container\">
                <div class=\"row\">
                    <div class=\"col-md-5\">
                        <div id=\"carouselExampleControls\" class=\"carousel slide\" data-ride=\"carousel\">
                            <div class=\"carousel-inner\">
                                <div class=\"carousel-item active\">
                                <img src=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/rentacar/vehicule1.png"), "html", null, true);
        echo "\" class=\"d-block w-100\" alt=\"vehicule1\">
                                </div>
                                <div class=\"carousel-item\">
                                <img src=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/rentacar/interieur1.png"), "html", null, true);
        echo "\" class=\"d-block w-100\" alt=\"vehicule2\">
                                </div>
                                <div class=\"carousel-item\">
                                <img src=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/rentacar/interieur2.png"), "html", null, true);
        echo "\" class=\"d-block w-100\" alt=\"vehicule3\">
                                </div>
                            </div>
                            <a class=\"carousel-control-prev\" href=\"#carouselExampleControls\" role=\"button\" data-slide=\"prev\">
                                <span class=\"fas fa-caret-left\" id=\"arrows\" aria-hidden=\"true\"></span>
                                <span class=\"sr-only\">Previous</span>
                                
                            </a>
                            <a class=\"carousel-control-next\" href=\"#carouselExampleControls\" role=\"button\" data-slide=\"next\">
                                <span class=\"fas fa-caret-right\" id=\"arrows\" aria-hidden=\"true\"></span>
                                <span class=\"sr-only\" >Next</span>
                            </a>
                        </div><!--/carousel-->
                    </div><!--/col-md-5-->
                    <div class=\"col-md-7\">
                        <h3>Peugot 208</h3>
                        <p>Diesel, 5 portes, GPS, AutoRadio, Forfait 1000km (0,5/km supplémentaire),</p>
                        <p>999 € - Agence de Paris</p>
                        <p>
                        <button type=\"button\" class=\"btn btn-success\">Réserver et Payer</button>
                        </p>
                    </div><!--/col-md-7-->
                </div><!--/row-->
            </section><!--/container-->
        </section>

        <!--line-->
        <div class=\"container-fluid py-5\">
            <div class=\"container\">
                <section class=\"row\">
                    <div class=\"col-12\">
                        <div id=\"lines\"></div>
                    </div><!--/col-->
                </section><!--row-->
            </div><!--/container-->
        </div>

        <!--2 car-->
        <section class=\"container-fluid\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-md-5\">
                        <div id=\"carouselExampleControls\" class=\"carousel slide\" data-ride=\"carousel\">
                            <div class=\"carousel-inner\">
                                <div class=\"carousel-item active\">
                                <img src=\"";
        // line 93
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/rentacar/vehicule2.png"), "html", null, true);
        echo "\" class=\"d-block w-100\" alt=\"vehicule2\">
                                </div>
                                <div class=\"carousel-item\">
                                <img src=\"";
        // line 96
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/rentacar/interieur3.png"), "html", null, true);
        echo "\" class=\"d-block w-100\" alt=\"vehicule3\">
                                </div>
                                <div class=\"carousel-item\">
                                <img src=\"";
        // line 99
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/rentacar/rentacar/interieur1.png"), "html", null, true);
        echo "\" class=\"d-block w-100\" alt=\"vehicule4\">
                                </div>
                            </div>
                            <a class=\"carousel-control-prev\" href=\"#carouselExampleControls\" role=\"button\" data-slide=\"prev\">
                                <span class=\"fas fa-caret-left\" id=\"arrows\" aria-hidden=\"true\"></span>
                                <span class=\"sr-only\">Previous</span>
                            </a>
                            <a class=\"carousel-control-next\" href=\"#carouselExampleControls\" role=\"button\" data-slide=\"next\">
                                <span class=\"fas fa-caret-right\" id=\"arrows\" aria-hidden=\"true\"></span>
                                <span class=\"sr-only\">Next</span>
                            </a>
                        </div><!--/carousel-->
                    </div><!--/col-md-5-->
                    <div class=\"col-md-7\">
                        <h3>Ford Focus</h3>
                        <p>Diesel, 5 portes, GPS, AutoRadio, Forfait 1000km (0,5/km supplémentaire),</p>
                        <p>999 €</p>
                        <p>
                        <button type=\"button\" class=\"btn btn-success\">Réserver et Payer</button>
                        </p>
                    </div><!--/col-md-7-->
                </div><!--/row-->
            </div><!--/container-->
        </section>


        <!--line-->
        <div class=\"container-fluid py-5\">
            <div class=\"container\">
                <section class=\"row\">
                    <div class=\"col-12\">
                        <div id=\"lines\"></div>
                    </div><!--/col-->
                </section><!--row-->
            </div><!--/container-->
        </div>

        <!--3 car-->
        <section class=\"container-fluid\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-md-5\">
                        <div id=\"carouselExampleControls\" class=\"carousel slide\" data-ride=\"carousel\">
                            <div class=\"carousel-inner\">
                                <div class=\"carousel-item active\">
                                <img src=\"";
        // line 144
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/rentacar/vehicule3.png"), "html", null, true);
        echo "\" class=\"d-block w-100\" alt=\"vehicule3\">
                                </div>
                                <div class=\"carousel-item\">
                                <img src=\"";
        // line 147
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/rentacar/interieur1.png"), "html", null, true);
        echo "\" class=\"d-block w-100\" alt=\"vehicule4\">
                                </div>
                                <div class=\"carousel-item\">
                                <img src=\"";
        // line 150
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/rentacar/interieur2.png"), "html", null, true);
        echo "\" class=\"d-block w-100\" alt=\"vehicule1\">
                                </div>
                            </div>
                            <a class=\"carousel-control-prev\" href=\"#carouselExampleControls\" role=\"button\" data-slide=\"prev\">
                                <span class=\"fas fa-caret-left\" id=\"arrows\" aria-hidden=\"true\"></span>
                                <span class=\"sr-only\">Previous</span>
                            </a>
                            <a class=\"carousel-control-next\" href=\"#carouselExampleControls\" role=\"button\" data-slide=\"next\">
                                <span class=\"fas fa-caret-right\" id=\"arrows\" aria-hidden=\"true\"></span>
                                <span class=\"sr-only\">Next</span>
                            </a>
                        </div><!--/carousel-->
                    </div><!--/col-md-5-->
                    <div class=\"col-md-7\">
                        <h3>Audi A1</h3>
                        <p>Diesel, 5 portes, GPS, AutoRadio, Forfait 1000km (0,55/km supplémentaire),</p>
                        <p>1100 € - Agence de Paris</p>
                        <p>
                        <button type=\"button\" class=\"btn btn-success\">Réserver et Payer</button>
                        </p>
                    </div><!--/col-7-->
                </div><!--/row-->
            </div><!--/container-->
        </section>

        <!--line-->
        <div class=\"container-fluid py-5\">
            <div class=\"container\">
                <section class=\"row\">
                    <div class=\"col-12\">
                        <div id=\"lines\"></div>
                    </div><!--/col-->
                </section><!--row-->
            </div><!--/container-->
        </div>

        <!--4car-->
        <section class=\"container-fluid\">
            <div class=\"container\">
                <section class=\"row\">
                    <div class=\"col-md-5\">
                        <div id=\"carouselExampleControls\" class=\"carousel slide\" data-ride=\"carousel\">
                            <div class=\"carousel-inner\">
                                <div class=\"carousel-item active\">
                                <img src=\"";
        // line 194
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/rentacar/vehicule4.png"), "html", null, true);
        echo "\" class=\"d-block w-100\" alt=\"vehicule4\">
                                </div>
                                <div class=\"carousel-item\">
                                <img src=\"";
        // line 197
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/rentacar/interieur3.png"), "html", null, true);
        echo "\" class=\"d-block w-100\" alt=\"vehicule1\">
                                </div>
                                <div class=\"carousel-item\">
                                <img src=\"";
        // line 200
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/rentacar/interieur2.png"), "html", null, true);
        echo "\" class=\"d-block w-100\" alt=\"vehicule2\">
                                </div>
                            </div>
                            <a class=\"carousel-control-prev\" href=\"#carouselExampleControls\" role=\"button\" data-slide=\"prev\">
                                <span class=\"fas fa-caret-left\" id=\"arrows\" aria-hidden=\"true\"></span>
                                <span class=\"sr-only\">Previous</span>
                            </a>
                            <a class=\"carousel-control-next\" href=\"#carouselExampleControls\" role=\"button\" data-slide=\"next\">
                                <span class=\"fas fa-caret-right\" id=\"arrows\" aria-hidden=\"true\"></span>
                                <span class=\"sr-only\">Next</span>
                            </a>
                        </div><!--/carousel-->
                    </div><!--/col-md-5-->
                    <div class=\"col-md-7\">
                        <h3>Opel Mokka</h3>
                        <p>Diesel, 5 portes, GPS, AutoRadio, Forfait 1000km (0,4/km supplémentaire),</p>
                        <p>1150 €</p>
                        <p>
                        <button type=\"button\" class=\"btn btn-success\">Réserver et Payer</button>
                        </p>
                    </div><!--/col-7-->
                </section><!--/row-->
            </div><!--/container-->
        </section>

        <!--line-->
        <div class=\"container-fluid py-5\">
            <div class=\"container\">
                <section class=\"row\">
                    <div class=\"col-12\">
                        <div id=\"lines\"></div>
                    </div><!--/col-->
                </section><!--row-->
            </div><!--/container-->
        </div>

        <div id=\"hidden\">
            <!--5 car-->
            <section class=\"container-fluid\">
                <section class=\"container\">
                    <div class=\"row\">
                        <div class=\"col-md-5\">
                            <div id=\"carouselExampleControls\" class=\"carousel slide\" data-ride=\"carousel\">
                                <div class=\"carousel-inner\">
                                    <div class=\"carousel-item active\">
                                    <img src=\"";
        // line 245
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/rentacar/vehicule1.png"), "html", null, true);
        echo "\" class=\"d-block w-100\" alt=\"vehicule1\">
                                    </div>
                                    <div class=\"carousel-item\">
                                    <img src=\"";
        // line 248
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/rentacar/interieur1.png"), "html", null, true);
        echo "\" class=\"d-block w-100\" alt=\"vehicule2\">
                                    </div>
                                    <div class=\"carousel-item\">
                                    <img src=\"";
        // line 251
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/rentacar/interieur2.png"), "html", null, true);
        echo "\" class=\"d-block w-100\" alt=\"vehicule3\">
                                    </div>
                                </div>
                                <a class=\"carousel-control-prev\" href=\"#carouselExampleControls\" role=\"button\" data-slide=\"prev\">
                                    <span class=\"fas fa-caret-left\" id=\"arrows\" aria-hidden=\"true\"></span>
                                    <span class=\"sr-only\">Previous</span>
                                    
                                </a>
                                <a class=\"carousel-control-next\" href=\"#carouselExampleControls\" role=\"button\" data-slide=\"next\">
                                    <span class=\"fas fa-caret-right\" id=\"arrows\" aria-hidden=\"true\"></span>
                                    <span class=\"sr-only\" >Next</span>
                                </a>
                            </div><!--/carousel-->
                        </div><!--/col-md-5-->
                        <div class=\"col-md-7\">
                            <h3>Peugot 208</h3>
                            <p>Diesel, 5 portes, GPS, AutoRadio, Forfait 1000km (0,5/km supplémentaire),</p>
                            <p>999 € - Agence de Paris</p>
                            <p>
                            <button type=\"button\" class=\"btn btn-success\">Réserver et Payer</button>
                            </p>
                        </div><!--/col-md-7-->
                    </div><!--/row-->
                </section><!--/container-->
            </section>

            <!--line-->
            <div class=\"container-fluid py-5\" >
                <div class=\"container\">
                    <section class=\"row\">
                        <div class=\"col-12\">
                            <div id=\"lines\"></div>
                        </div><!--/col-->
                    </section><!--row-->
                </div><!--/container-->
            </div>

            <!--6 car-->
            <section class=\"container-fluid\">
                <div class=\"container\">
                    <div class=\"row\">
                        <div class=\"col-md-5\">
                            <div id=\"carouselExampleControls\" class=\"carousel slide\" data-ride=\"carousel\">
                                <div class=\"carousel-inner\">
                                    <div class=\"carousel-item active\">
                                    <img src=\"";
        // line 296
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/rentacar/vehicule2.png"), "html", null, true);
        echo "\" class=\"d-block w-100\" alt=\"vehicule2\">
                                    </div>
                                    <div class=\"carousel-item\">
                                    <img src=\"";
        // line 299
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/rentacar/interieur3.png"), "html", null, true);
        echo "\" class=\"d-block w-100\" alt=\"vehicule3\">
                                    </div>
                                    <div class=\"carousel-item\">
                                    <img src=\"";
        // line 302
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/rentacar/interieur1.png"), "html", null, true);
        echo "\" class=\"d-block w-100\" alt=\"vehicule4\">
                                    </div>
                                </div>
                                <a class=\"carousel-control-prev\" href=\"#carouselExampleControls\" role=\"button\" data-slide=\"prev\">
                                    <span class=\"fas fa-caret-left\" id=\"arrows\" aria-hidden=\"true\"></span>
                                    <span class=\"sr-only\">Previous</span>
                                </a>
                                <a class=\"carousel-control-next\" href=\"#carouselExampleControls\" role=\"button\" data-slide=\"next\">
                                    <span class=\"fas fa-caret-right\" id=\"arrows\" aria-hidden=\"true\"></span>
                                    <span class=\"sr-only\">Next</span>
                                </a>
                            </div><!--/carousel-->
                        </div><!--/col-md-5-->
                        <div class=\"col-md-7\">
                            <h3>Ford Focus</h3>
                            <p>Diesel, 5 portes, GPS, AutoRadio, Forfait 1000km (0,5/km supplémentaire),</p>
                            <p>999 €</p>
                            <p>
                            <button type=\"button\" class=\"btn btn-success\">Réserver et Payer</button>
                            </p>
                        </div><!--/col-md-7-->
                    </div><!--/row-->
                </div><!--/container-->
            </section>


            <!--line-->
            <div class=\"container-fluid py-5\" >
                <div class=\"container\">
                    <section class=\"row\">
                        <div class=\"col-12\">
                            <div id=\"lines\"></div>
                        </div><!--/col-->
                    </section><!--row-->
                </div><!--/container-->
            </div>

            <!--7 car-->
            <section class=\"container-fluid\" >
                <div class=\"container\">
                    <div class=\"row\">
                        <div class=\"col-md-5\">
                            <div id=\"carouselExampleControls\" class=\"carousel slide\" data-ride=\"carousel\">
                                <div class=\"carousel-inner\">
                                    <div class=\"carousel-item active\">
                                    <img src=\"";
        // line 347
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/rentacar/vehicule3.png"), "html", null, true);
        echo "\" class=\"d-block w-100\" alt=\"vehicule3\">
                                    </div>
                                    <div class=\"carousel-item\">
                                    <img src=\"";
        // line 350
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/rentacar/interieur1.png"), "html", null, true);
        echo "\" class=\"d-block w-100\" alt=\"vehicule4\">
                                    </div>
                                    <div class=\"carousel-item\">
                                    <img src=\"";
        // line 353
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/rentacar/interieur2.png"), "html", null, true);
        echo "\" class=\"d-block w-100\" alt=\"vehicule1\">
                                    </div>
                                </div>
                                <a class=\"carousel-control-prev\" href=\"#carouselExampleControls\" role=\"button\" data-slide=\"prev\">
                                    <span class=\"fas fa-caret-left\" id=\"arrows\" aria-hidden=\"true\"></span>
                                    <span class=\"sr-only\">Previous</span>
                                </a>
                                <a class=\"carousel-control-next\" href=\"#carouselExampleControls\" role=\"button\" data-slide=\"next\">
                                    <span class=\"fas fa-caret-right\" id=\"arrows\" aria-hidden=\"true\"></span>
                                    <span class=\"sr-only\">Next</span>
                                </a>
                            </div><!--/carousel-->
                        </div><!--/col-md-5-->
                        <div class=\"col-md-7\">
                            <h3>Audi A1</h3>
                            <p>Diesel, 5 portes, GPS, AutoRadio, Forfait 1000km (0,55/km supplémentaire),</p>
                            <p>1100 € - Agence de Paris</p>
                            <p>
                            <button type=\"button\" class=\"btn btn-success\">Réserver et Payer</button>
                            </p>
                        </div><!--/col-7-->
                    </div><!--/row-->
                </div><!--/container-->
            </section>

            <!--line-->
            <div class=\"container-fluid py-5\" >
                <div class=\"container\">
                    <section class=\"row\">
                        <div class=\"col-12\">
                            <div id=\"lines\"></div>
                        </div><!--/col-->
                    </section><!--row-->
                </div><!--/container-->
            </div>

            <!--8car-->
            <section class=\"container-fluid\" >
                <div class=\"container\">
                    <section class=\"row\">
                        <div class=\"col-md-5\">
                            <div id=\"carouselExampleControls\" class=\"carousel slide\" data-ride=\"carousel\">
                                <div class=\"carousel-inner\">
                                    <div class=\"carousel-item active\">
                                    <img src=\"";
        // line 397
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/rentacar/vehicule4.png"), "html", null, true);
        echo "\" class=\"d-block w-100\" alt=\"vehicule4\">
                                    </div>
                                    <div class=\"carousel-item\">
                                    <img src=\"";
        // line 400
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/rentacar/interieur3.png"), "html", null, true);
        echo "\" class=\"d-block w-100\" alt=\"vehicule1\">
                                    </div>
                                    <div class=\"carousel-item\">
                                    <img src=\"";
        // line 403
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/rentacar/interieur2.png"), "html", null, true);
        echo "\" class=\"d-block w-100\" alt=\"vehicule2\">
                                    </div>
                                </div>
                                <a class=\"carousel-control-prev\" href=\"#carouselExampleControls\" role=\"button\" data-slide=\"prev\">
                                    <span class=\"fas fa-caret-left\" id=\"arrows\" aria-hidden=\"true\"></span>
                                    <span class=\"sr-only\">Previous</span>
                                </a>
                                <a class=\"carousel-control-next\" href=\"#carouselExampleControls\" role=\"button\" data-slide=\"next\">
                                    <span class=\"fas fa-caret-right\" id=\"arrows\" aria-hidden=\"true\"></span>
                                    <span class=\"sr-only\">Next</span>
                                </a>
                            </div><!--/carousel-->
                        </div><!--/col-md-5-->
                        <div class=\"col-md-7\">
                            <h3>Opel Mokka</h3>
                            <p>Diesel, 5 portes, GPS, AutoRadio, Forfait 1000km (0,4/km supplémentaire),</p>
                            <p>1150 €</p>
                            <p>
                            <button type=\"button\" class=\"btn btn-success\">Réserver et Payer</button>
                            </p>
                        </div><!--/col-7-->
                    </section><!--/row-->
                </div><!--/container-->
            </section>

            <!--line-->
            <div class=\"container-fluid py-5\" >
                <div class=\"container\">
                    <section class=\"row\">
                        <div class=\"col-12\">
                            <div id=\"lines\"></div>
                        </div><!--/col-->
                    </section><!--row-->
                </div><!--/container-->
            </div>
        </div><!--/hidden-->

        ";
        // line 440
        $this->loadTemplate("rentacar/footer.html.twig", "rentacar/rentacar.html.twig", 440)->display($context);
        // line 441
        echo "
        ";
        // line 442
        $this->displayBlock('javascripts', $context, $blocks);
        // line 447
        echo "    </body>
</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 8
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Rent A Car";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 10
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 11
        echo "            <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/bootstrap.css"), "html", null, true);
        echo "\">
            <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/all.css"), "html", null, true);
        echo "\">
            <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/fontawesome/css/fontawesome-all.css"), "html", null, true);
        echo "\">
            <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/rentacar/style.css"), "html", null, true);
        echo "\">
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 442
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 443
        echo "            <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery-3.4.1.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 444
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/bootstrap.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 445
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/rentacar/script.js"), "html", null, true);
        echo "\"></script>
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "rentacar/rentacar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  654 => 445,  650 => 444,  645 => 443,  635 => 442,  623 => 14,  619 => 13,  615 => 12,  610 => 11,  600 => 10,  581 => 8,  570 => 447,  568 => 442,  565 => 441,  563 => 440,  523 => 403,  517 => 400,  511 => 397,  464 => 353,  458 => 350,  452 => 347,  404 => 302,  398 => 299,  392 => 296,  344 => 251,  338 => 248,  332 => 245,  284 => 200,  278 => 197,  272 => 194,  225 => 150,  219 => 147,  213 => 144,  165 => 99,  159 => 96,  153 => 93,  105 => 48,  99 => 45,  93 => 42,  70 => 21,  68 => 20,  62 => 16,  60 => 10,  55 => 8,  46 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">
    <head>
        <meta charset=\"UTF-8\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"ie=edge\">

        <title>{% block title %}Rent A Car{% endblock %}</title>

        {% block stylesheets %}
            <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('css/bootstrap.css') }}\">
            <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('css/all.css') }}\">
            <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('plugins/fontawesome/css/fontawesome-all.css') }}\">
            <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('css/rentacar/style.css') }}\">
        {% endblock %}
    </head>

    <body>

        {% include 'rentacar/header.html.twig' %}

          <!--7résultat-->
        <section class=\"container-fluid\" id=\"resultat\">
            <div class=\"container\">
                <nav class=\"navbar navbar-light\">
                    <a class=\"navbar-brand\">7 résultat</a>
                    <ul class=\"navbar-nav ml-auto\">
                        <li><button type=\"button\" class=\"btn btn-light\" id=\"buttonPrix\">Prix Croissant<i class=\"fas fa-sort-down\"></i></button></li>
                    </ul>
                </nav>
            </div><!--/container-->
        </section>

        <!--1 car-->
        <section class=\"container-fluid\">
            <section class=\"container\">
                <div class=\"row\">
                    <div class=\"col-md-5\">
                        <div id=\"carouselExampleControls\" class=\"carousel slide\" data-ride=\"carousel\">
                            <div class=\"carousel-inner\">
                                <div class=\"carousel-item active\">
                                <img src=\"{{ asset('images/rentacar/vehicule1.png') }}\" class=\"d-block w-100\" alt=\"vehicule1\">
                                </div>
                                <div class=\"carousel-item\">
                                <img src=\"{{ asset('images/rentacar/interieur1.png') }}\" class=\"d-block w-100\" alt=\"vehicule2\">
                                </div>
                                <div class=\"carousel-item\">
                                <img src=\"{{ asset('images/rentacar/interieur2.png') }}\" class=\"d-block w-100\" alt=\"vehicule3\">
                                </div>
                            </div>
                            <a class=\"carousel-control-prev\" href=\"#carouselExampleControls\" role=\"button\" data-slide=\"prev\">
                                <span class=\"fas fa-caret-left\" id=\"arrows\" aria-hidden=\"true\"></span>
                                <span class=\"sr-only\">Previous</span>
                                
                            </a>
                            <a class=\"carousel-control-next\" href=\"#carouselExampleControls\" role=\"button\" data-slide=\"next\">
                                <span class=\"fas fa-caret-right\" id=\"arrows\" aria-hidden=\"true\"></span>
                                <span class=\"sr-only\" >Next</span>
                            </a>
                        </div><!--/carousel-->
                    </div><!--/col-md-5-->
                    <div class=\"col-md-7\">
                        <h3>Peugot 208</h3>
                        <p>Diesel, 5 portes, GPS, AutoRadio, Forfait 1000km (0,5/km supplémentaire),</p>
                        <p>999 € - Agence de Paris</p>
                        <p>
                        <button type=\"button\" class=\"btn btn-success\">Réserver et Payer</button>
                        </p>
                    </div><!--/col-md-7-->
                </div><!--/row-->
            </section><!--/container-->
        </section>

        <!--line-->
        <div class=\"container-fluid py-5\">
            <div class=\"container\">
                <section class=\"row\">
                    <div class=\"col-12\">
                        <div id=\"lines\"></div>
                    </div><!--/col-->
                </section><!--row-->
            </div><!--/container-->
        </div>

        <!--2 car-->
        <section class=\"container-fluid\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-md-5\">
                        <div id=\"carouselExampleControls\" class=\"carousel slide\" data-ride=\"carousel\">
                            <div class=\"carousel-inner\">
                                <div class=\"carousel-item active\">
                                <img src=\"{{ asset('images/rentacar/vehicule2.png') }}\" class=\"d-block w-100\" alt=\"vehicule2\">
                                </div>
                                <div class=\"carousel-item\">
                                <img src=\"{{ asset('images/rentacar/interieur3.png') }}\" class=\"d-block w-100\" alt=\"vehicule3\">
                                </div>
                                <div class=\"carousel-item\">
                                <img src=\"{{ asset('images/rentacar/rentacar/interieur1.png') }}\" class=\"d-block w-100\" alt=\"vehicule4\">
                                </div>
                            </div>
                            <a class=\"carousel-control-prev\" href=\"#carouselExampleControls\" role=\"button\" data-slide=\"prev\">
                                <span class=\"fas fa-caret-left\" id=\"arrows\" aria-hidden=\"true\"></span>
                                <span class=\"sr-only\">Previous</span>
                            </a>
                            <a class=\"carousel-control-next\" href=\"#carouselExampleControls\" role=\"button\" data-slide=\"next\">
                                <span class=\"fas fa-caret-right\" id=\"arrows\" aria-hidden=\"true\"></span>
                                <span class=\"sr-only\">Next</span>
                            </a>
                        </div><!--/carousel-->
                    </div><!--/col-md-5-->
                    <div class=\"col-md-7\">
                        <h3>Ford Focus</h3>
                        <p>Diesel, 5 portes, GPS, AutoRadio, Forfait 1000km (0,5/km supplémentaire),</p>
                        <p>999 €</p>
                        <p>
                        <button type=\"button\" class=\"btn btn-success\">Réserver et Payer</button>
                        </p>
                    </div><!--/col-md-7-->
                </div><!--/row-->
            </div><!--/container-->
        </section>


        <!--line-->
        <div class=\"container-fluid py-5\">
            <div class=\"container\">
                <section class=\"row\">
                    <div class=\"col-12\">
                        <div id=\"lines\"></div>
                    </div><!--/col-->
                </section><!--row-->
            </div><!--/container-->
        </div>

        <!--3 car-->
        <section class=\"container-fluid\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-md-5\">
                        <div id=\"carouselExampleControls\" class=\"carousel slide\" data-ride=\"carousel\">
                            <div class=\"carousel-inner\">
                                <div class=\"carousel-item active\">
                                <img src=\"{{ asset('images/rentacar/vehicule3.png') }}\" class=\"d-block w-100\" alt=\"vehicule3\">
                                </div>
                                <div class=\"carousel-item\">
                                <img src=\"{{ asset('images/rentacar/interieur1.png') }}\" class=\"d-block w-100\" alt=\"vehicule4\">
                                </div>
                                <div class=\"carousel-item\">
                                <img src=\"{{ asset('images/rentacar/interieur2.png') }}\" class=\"d-block w-100\" alt=\"vehicule1\">
                                </div>
                            </div>
                            <a class=\"carousel-control-prev\" href=\"#carouselExampleControls\" role=\"button\" data-slide=\"prev\">
                                <span class=\"fas fa-caret-left\" id=\"arrows\" aria-hidden=\"true\"></span>
                                <span class=\"sr-only\">Previous</span>
                            </a>
                            <a class=\"carousel-control-next\" href=\"#carouselExampleControls\" role=\"button\" data-slide=\"next\">
                                <span class=\"fas fa-caret-right\" id=\"arrows\" aria-hidden=\"true\"></span>
                                <span class=\"sr-only\">Next</span>
                            </a>
                        </div><!--/carousel-->
                    </div><!--/col-md-5-->
                    <div class=\"col-md-7\">
                        <h3>Audi A1</h3>
                        <p>Diesel, 5 portes, GPS, AutoRadio, Forfait 1000km (0,55/km supplémentaire),</p>
                        <p>1100 € - Agence de Paris</p>
                        <p>
                        <button type=\"button\" class=\"btn btn-success\">Réserver et Payer</button>
                        </p>
                    </div><!--/col-7-->
                </div><!--/row-->
            </div><!--/container-->
        </section>

        <!--line-->
        <div class=\"container-fluid py-5\">
            <div class=\"container\">
                <section class=\"row\">
                    <div class=\"col-12\">
                        <div id=\"lines\"></div>
                    </div><!--/col-->
                </section><!--row-->
            </div><!--/container-->
        </div>

        <!--4car-->
        <section class=\"container-fluid\">
            <div class=\"container\">
                <section class=\"row\">
                    <div class=\"col-md-5\">
                        <div id=\"carouselExampleControls\" class=\"carousel slide\" data-ride=\"carousel\">
                            <div class=\"carousel-inner\">
                                <div class=\"carousel-item active\">
                                <img src=\"{{ asset('images/rentacar/vehicule4.png') }}\" class=\"d-block w-100\" alt=\"vehicule4\">
                                </div>
                                <div class=\"carousel-item\">
                                <img src=\"{{ asset('images/rentacar/interieur3.png') }}\" class=\"d-block w-100\" alt=\"vehicule1\">
                                </div>
                                <div class=\"carousel-item\">
                                <img src=\"{{ asset('images/rentacar/interieur2.png') }}\" class=\"d-block w-100\" alt=\"vehicule2\">
                                </div>
                            </div>
                            <a class=\"carousel-control-prev\" href=\"#carouselExampleControls\" role=\"button\" data-slide=\"prev\">
                                <span class=\"fas fa-caret-left\" id=\"arrows\" aria-hidden=\"true\"></span>
                                <span class=\"sr-only\">Previous</span>
                            </a>
                            <a class=\"carousel-control-next\" href=\"#carouselExampleControls\" role=\"button\" data-slide=\"next\">
                                <span class=\"fas fa-caret-right\" id=\"arrows\" aria-hidden=\"true\"></span>
                                <span class=\"sr-only\">Next</span>
                            </a>
                        </div><!--/carousel-->
                    </div><!--/col-md-5-->
                    <div class=\"col-md-7\">
                        <h3>Opel Mokka</h3>
                        <p>Diesel, 5 portes, GPS, AutoRadio, Forfait 1000km (0,4/km supplémentaire),</p>
                        <p>1150 €</p>
                        <p>
                        <button type=\"button\" class=\"btn btn-success\">Réserver et Payer</button>
                        </p>
                    </div><!--/col-7-->
                </section><!--/row-->
            </div><!--/container-->
        </section>

        <!--line-->
        <div class=\"container-fluid py-5\">
            <div class=\"container\">
                <section class=\"row\">
                    <div class=\"col-12\">
                        <div id=\"lines\"></div>
                    </div><!--/col-->
                </section><!--row-->
            </div><!--/container-->
        </div>

        <div id=\"hidden\">
            <!--5 car-->
            <section class=\"container-fluid\">
                <section class=\"container\">
                    <div class=\"row\">
                        <div class=\"col-md-5\">
                            <div id=\"carouselExampleControls\" class=\"carousel slide\" data-ride=\"carousel\">
                                <div class=\"carousel-inner\">
                                    <div class=\"carousel-item active\">
                                    <img src=\"{{ asset('images/rentacar/vehicule1.png') }}\" class=\"d-block w-100\" alt=\"vehicule1\">
                                    </div>
                                    <div class=\"carousel-item\">
                                    <img src=\"{{ asset('images/rentacar/interieur1.png') }}\" class=\"d-block w-100\" alt=\"vehicule2\">
                                    </div>
                                    <div class=\"carousel-item\">
                                    <img src=\"{{ asset('images/rentacar/interieur2.png') }}\" class=\"d-block w-100\" alt=\"vehicule3\">
                                    </div>
                                </div>
                                <a class=\"carousel-control-prev\" href=\"#carouselExampleControls\" role=\"button\" data-slide=\"prev\">
                                    <span class=\"fas fa-caret-left\" id=\"arrows\" aria-hidden=\"true\"></span>
                                    <span class=\"sr-only\">Previous</span>
                                    
                                </a>
                                <a class=\"carousel-control-next\" href=\"#carouselExampleControls\" role=\"button\" data-slide=\"next\">
                                    <span class=\"fas fa-caret-right\" id=\"arrows\" aria-hidden=\"true\"></span>
                                    <span class=\"sr-only\" >Next</span>
                                </a>
                            </div><!--/carousel-->
                        </div><!--/col-md-5-->
                        <div class=\"col-md-7\">
                            <h3>Peugot 208</h3>
                            <p>Diesel, 5 portes, GPS, AutoRadio, Forfait 1000km (0,5/km supplémentaire),</p>
                            <p>999 € - Agence de Paris</p>
                            <p>
                            <button type=\"button\" class=\"btn btn-success\">Réserver et Payer</button>
                            </p>
                        </div><!--/col-md-7-->
                    </div><!--/row-->
                </section><!--/container-->
            </section>

            <!--line-->
            <div class=\"container-fluid py-5\" >
                <div class=\"container\">
                    <section class=\"row\">
                        <div class=\"col-12\">
                            <div id=\"lines\"></div>
                        </div><!--/col-->
                    </section><!--row-->
                </div><!--/container-->
            </div>

            <!--6 car-->
            <section class=\"container-fluid\">
                <div class=\"container\">
                    <div class=\"row\">
                        <div class=\"col-md-5\">
                            <div id=\"carouselExampleControls\" class=\"carousel slide\" data-ride=\"carousel\">
                                <div class=\"carousel-inner\">
                                    <div class=\"carousel-item active\">
                                    <img src=\"{{ asset('images/rentacar/vehicule2.png') }}\" class=\"d-block w-100\" alt=\"vehicule2\">
                                    </div>
                                    <div class=\"carousel-item\">
                                    <img src=\"{{ asset('images/rentacar/interieur3.png') }}\" class=\"d-block w-100\" alt=\"vehicule3\">
                                    </div>
                                    <div class=\"carousel-item\">
                                    <img src=\"{{ asset('images/rentacar/interieur1.png') }}\" class=\"d-block w-100\" alt=\"vehicule4\">
                                    </div>
                                </div>
                                <a class=\"carousel-control-prev\" href=\"#carouselExampleControls\" role=\"button\" data-slide=\"prev\">
                                    <span class=\"fas fa-caret-left\" id=\"arrows\" aria-hidden=\"true\"></span>
                                    <span class=\"sr-only\">Previous</span>
                                </a>
                                <a class=\"carousel-control-next\" href=\"#carouselExampleControls\" role=\"button\" data-slide=\"next\">
                                    <span class=\"fas fa-caret-right\" id=\"arrows\" aria-hidden=\"true\"></span>
                                    <span class=\"sr-only\">Next</span>
                                </a>
                            </div><!--/carousel-->
                        </div><!--/col-md-5-->
                        <div class=\"col-md-7\">
                            <h3>Ford Focus</h3>
                            <p>Diesel, 5 portes, GPS, AutoRadio, Forfait 1000km (0,5/km supplémentaire),</p>
                            <p>999 €</p>
                            <p>
                            <button type=\"button\" class=\"btn btn-success\">Réserver et Payer</button>
                            </p>
                        </div><!--/col-md-7-->
                    </div><!--/row-->
                </div><!--/container-->
            </section>


            <!--line-->
            <div class=\"container-fluid py-5\" >
                <div class=\"container\">
                    <section class=\"row\">
                        <div class=\"col-12\">
                            <div id=\"lines\"></div>
                        </div><!--/col-->
                    </section><!--row-->
                </div><!--/container-->
            </div>

            <!--7 car-->
            <section class=\"container-fluid\" >
                <div class=\"container\">
                    <div class=\"row\">
                        <div class=\"col-md-5\">
                            <div id=\"carouselExampleControls\" class=\"carousel slide\" data-ride=\"carousel\">
                                <div class=\"carousel-inner\">
                                    <div class=\"carousel-item active\">
                                    <img src=\"{{ asset('images/rentacar/vehicule3.png') }}\" class=\"d-block w-100\" alt=\"vehicule3\">
                                    </div>
                                    <div class=\"carousel-item\">
                                    <img src=\"{{ asset('images/rentacar/interieur1.png') }}\" class=\"d-block w-100\" alt=\"vehicule4\">
                                    </div>
                                    <div class=\"carousel-item\">
                                    <img src=\"{{ asset('images/rentacar/interieur2.png') }}\" class=\"d-block w-100\" alt=\"vehicule1\">
                                    </div>
                                </div>
                                <a class=\"carousel-control-prev\" href=\"#carouselExampleControls\" role=\"button\" data-slide=\"prev\">
                                    <span class=\"fas fa-caret-left\" id=\"arrows\" aria-hidden=\"true\"></span>
                                    <span class=\"sr-only\">Previous</span>
                                </a>
                                <a class=\"carousel-control-next\" href=\"#carouselExampleControls\" role=\"button\" data-slide=\"next\">
                                    <span class=\"fas fa-caret-right\" id=\"arrows\" aria-hidden=\"true\"></span>
                                    <span class=\"sr-only\">Next</span>
                                </a>
                            </div><!--/carousel-->
                        </div><!--/col-md-5-->
                        <div class=\"col-md-7\">
                            <h3>Audi A1</h3>
                            <p>Diesel, 5 portes, GPS, AutoRadio, Forfait 1000km (0,55/km supplémentaire),</p>
                            <p>1100 € - Agence de Paris</p>
                            <p>
                            <button type=\"button\" class=\"btn btn-success\">Réserver et Payer</button>
                            </p>
                        </div><!--/col-7-->
                    </div><!--/row-->
                </div><!--/container-->
            </section>

            <!--line-->
            <div class=\"container-fluid py-5\" >
                <div class=\"container\">
                    <section class=\"row\">
                        <div class=\"col-12\">
                            <div id=\"lines\"></div>
                        </div><!--/col-->
                    </section><!--row-->
                </div><!--/container-->
            </div>

            <!--8car-->
            <section class=\"container-fluid\" >
                <div class=\"container\">
                    <section class=\"row\">
                        <div class=\"col-md-5\">
                            <div id=\"carouselExampleControls\" class=\"carousel slide\" data-ride=\"carousel\">
                                <div class=\"carousel-inner\">
                                    <div class=\"carousel-item active\">
                                    <img src=\"{{ asset('images/rentacar/vehicule4.png') }}\" class=\"d-block w-100\" alt=\"vehicule4\">
                                    </div>
                                    <div class=\"carousel-item\">
                                    <img src=\"{{ asset('images/rentacar/interieur3.png') }}\" class=\"d-block w-100\" alt=\"vehicule1\">
                                    </div>
                                    <div class=\"carousel-item\">
                                    <img src=\"{{ asset('images/rentacar/interieur2.png') }}\" class=\"d-block w-100\" alt=\"vehicule2\">
                                    </div>
                                </div>
                                <a class=\"carousel-control-prev\" href=\"#carouselExampleControls\" role=\"button\" data-slide=\"prev\">
                                    <span class=\"fas fa-caret-left\" id=\"arrows\" aria-hidden=\"true\"></span>
                                    <span class=\"sr-only\">Previous</span>
                                </a>
                                <a class=\"carousel-control-next\" href=\"#carouselExampleControls\" role=\"button\" data-slide=\"next\">
                                    <span class=\"fas fa-caret-right\" id=\"arrows\" aria-hidden=\"true\"></span>
                                    <span class=\"sr-only\">Next</span>
                                </a>
                            </div><!--/carousel-->
                        </div><!--/col-md-5-->
                        <div class=\"col-md-7\">
                            <h3>Opel Mokka</h3>
                            <p>Diesel, 5 portes, GPS, AutoRadio, Forfait 1000km (0,4/km supplémentaire),</p>
                            <p>1150 €</p>
                            <p>
                            <button type=\"button\" class=\"btn btn-success\">Réserver et Payer</button>
                            </p>
                        </div><!--/col-7-->
                    </section><!--/row-->
                </div><!--/container-->
            </section>

            <!--line-->
            <div class=\"container-fluid py-5\" >
                <div class=\"container\">
                    <section class=\"row\">
                        <div class=\"col-12\">
                            <div id=\"lines\"></div>
                        </div><!--/col-->
                    </section><!--row-->
                </div><!--/container-->
            </div>
        </div><!--/hidden-->

        {% include 'rentacar/footer.html.twig' %}

        {% block javascripts %}
            <script src=\"{{ asset('js/jquery-3.4.1.js') }}\"></script>
            <script src=\"{{ asset('js/bootstrap.js') }}\"></script>
            <script src=\"{{ asset('js/rentacar/script.js') }}\"></script>
        {% endblock %}
    </body>
</html>", "rentacar/rentacar.html.twig", "C:\\Users\\curly\\OneDrive\\Plocha\\SYMFONY projects\\portfolio2\\templates\\rentacar\\rentacar.html.twig");
    }
}

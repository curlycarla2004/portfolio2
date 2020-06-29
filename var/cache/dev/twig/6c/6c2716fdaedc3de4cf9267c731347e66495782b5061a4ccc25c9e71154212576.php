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

/* OhMyCats/ohmycats.html.twig */
class __TwigTemplate_a64486df76faa9c4c79e7782b989060ef88bbbe84ac2c08b7aad51cc77b8d270 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "OhMyCats/ohmycats.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "OhMyCats/ohmycats.html.twig"));

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
        // line 15
        echo "    </head>

    <body>

        ";
        // line 19
        $this->loadTemplate("ohmycats/header.html.twig", "OhMyCats/ohmycats.html.twig", 19)->display($context);
        // line 20
        echo "
            <!--Carousel-->
        <section class = \"container-fluid py-5\" id=\"diapo\">
            <div class=\"container\"> <!--si on besoin des marges-->
                <div class=\"row\">
                    <section class=\"col-lg-9 order-lg-2\">
                        <div id=\"carouselExampleIndicators\" class=\"carousel slide\" data-ride=\"carousel\" data-interval=\"2000\">
                            <ol class=\"carousel-indicators\">
                                <li data-target=\"#carouselExampleIndicators\" data-slide-to=\"0\" class=\"active\"></li>
                                <li data-target=\"#carouselExampleIndicators\" data-slide-to=\"1\"></li>
                                <li data-target=\"#carouselExampleIndicators\" data-slide-to=\"2\"></li>
                                <li data-target=\"#carouselExampleIndicators\" data-slide-to=\"3\"></li>
                                <li data-target=\"#carouselExampleIndicators\" data-slide-to=\"4\"></li>
                            </ol>
                            <div class=\"carousel-inner\">
                                <div class=\"carousel-item active\">
                                    <img class=\"d-block w-100\" src=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/ohmycats/chat_1.jpg"), "html", null, true);
        echo "\" alt=\"Sushi\">
                                    <div class=\"carousel-caption d-none d-md-block\">
                                        <p>Sushi</p>
                                    </div>
                                </div>
                                <div class=\"carousel-item\">
                                    <img class=\"d-block w-100\" src=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/ohmycats/chat_2.jpg"), "html", null, true);
        echo "\" alt=\"Maki\">
                                    <div class=\"carousel-caption d-none d-md-block\">
                                        <p>Maki</p>
                                    </div>
                                </div>
                                <div class=\"carousel-item\">
                                    <img class=\"d-block w-100\" src=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/ohmycats/chat_3.jpg"), "html", null, true);
        echo "\" alt=\"Sashimi\">
                                    <div class=\"carousel-caption d-none d-md-block\">
                                        <p>Sashimi</p>
                                    </div>
                                </div>
                                <div class=\"carousel-item\">
                                    <img class=\"d-block w-100\" src=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/ohmycats/chat_4.jpg"), "html", null, true);
        echo "\" alt=\"Yakitori\">
                                    <div class=\"carousel-caption d-none d-md-block\">
                                        <p>Yakitori</p>
                                    </div>
                                </div>
                                <div class=\"carousel-item\">
                                    <img class=\"d-block w-100\" src=\"";
        // line 60
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/ohmycats/chat_5.jpg"), "html", null, true);
        echo "\" alt=\"Onigri\">
                                    <div class=\"carousel-caption d-none d-md-block\">
                                        <p>Onigri</p>
                                    </div>
                                </div>
                            </div><!--carousel inner-->
                            <a class=\"carousel-control-prev\" href=\"#carouselExampleIndicators\" role=\"button\" data-slide=\"prev\">
                                <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
                                <span class=\"sr-only\">Previous</span>
                            </a>
                            <a class=\"carousel-control-next\" href=\"#carouselExampleIndicators\" role=\"button\" data-slide=\"next\">
                                <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
                                <span class=\"sr-only\">Next</span>
                            </a>
                        </div><!--/carousel indicators-->
                    </section><!--/col-->

                    <section class=\"col-lg-3 order-lg-1 \">
                        <h2>Les chats à adopter</h2>
                        <form action=\"#\" method=\"get\" class=\"border rounded p-2\">
                            <div class=\"form-group\">
                                <label for=\"chat\" class=\"font-weight-bold\">Choix du chat:</label>
                                <select name=\"chat\" id=\"chat\" class=\"form-control\">
                                    <option value=\"\">--Sélectionner un chat --</option>
                                    <option value=\"sushi\">Sushi</option>
                                    <option value=\"maki\">Maki</option>
                                    <option value=\"sashimi\">Sashimi</option>
                                    <option value=\"yakitori\">Yakitori</option>
                                    <option value=\"Onigri\">Onigri</option>
                                </select>
                            </div>
                            <div class=\"form-group\">
                                <label for=\"raison\" class=\"font-weight-bold\">Raison d'adoption:</label>
                                <textarea name=\"raison\" id=\"raison\" placeholder=\"Saisissez ici les raisons pour lesquelles vous souhaitez adopter ce chat...\" class=\"form-control\"></textarea>
                            </div>
                            <button class = \"btn btn-success w-100\">Envoyer</button> 
                        </form>
                        <div id=\"envoye\" class=\"alert alert-success\" role=\"alert\">
                                Votre message a bien été envoyé
                        </div>
                    </section>
                </div><!--/row-->
            </div><!--/container-->
        </section>

        <!--Tête de chat et text-->
        <section id=\"chattext\" class=\"container-fluid pb-5 pt-2 bg-light\" id=\"tete\">
            <div class=\"container pt-5\">
                <div class=\"row\">
                    <div class=\"col-lg-9\">
                        <h2>Nos chats à adopter...</h2>

                        <p>Sed quid est quod in hac causa maxime homines admirentur et reprehendant meum consilium, cum ego idem antea multa decreverim, que magis ad hominis dignitatem quam ad rei publicae necessitatem pertinerent? Supplicationem quindecim dierum decrevi sententia mea. Rei publicae satis erat tot dierum quot C. Mario ; dis immortalibus non erat exigua eadem gratulatio quae ex maximis bellis. Ergo ille cumulus dierum hominis est dignitati tributus.</p>

                        <p>Haec igitur prima lex amicitiae sanciatur, ut ab amicis honesta petamus, amicorum causa honesta faciamus, ne exspectemus quidem, dum rogemur; studium semper adsit, cunctatio absit; consilium vero dare audeamus libere. Plurimum in amicitia amicorum bene suadentium valeat auctoritas, eaque et adhibeatur ad monendum non modo aperte sed etiam acriter, si res postulabit, et adhibitae pareatur.</p>
                    </div><!--/col 8-->
                    <div class=\"col-lg-3\">
                        <img src=\"";
        // line 117
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/ohmycats/tete-chat.png"), "html", null, true);
        echo "\" alt=\"tete de chat\" id=\"teteDeChat\" class=\"w-100\">
                    </div><!--/col 4-->
                </div><!--/row-->
            </div><!--/container-->
        </section><!--/container-->

        ";
        // line 123
        $this->loadTemplate("ohmycats/footer.html.twig", "OhMyCats/ohmycats.html.twig", 123)->display($context);
        // line 124
        echo "
        ";
        // line 125
        $this->displayBlock('javascripts', $context, $blocks);
        // line 130
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

        echo "OhMyCats!";
        
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
        echo "            <link href=\"https://fonts.googleapis.com/css?family=Merienda&display=swap\" rel=\"stylesheet\"> 
            <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/bootstrap.css"), "html", null, true);
        echo "\">
            <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/ohmycats/chat.css"), "html", null, true);
        echo "\">
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 125
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 126
        echo "            <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery-3.4.1.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 127
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/bootstrap.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 128
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/ohmycats/chat.js"), "html", null, true);
        echo "\"></script>
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "OhMyCats/ohmycats.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  278 => 128,  274 => 127,  269 => 126,  259 => 125,  247 => 13,  243 => 12,  240 => 11,  230 => 10,  211 => 8,  200 => 130,  198 => 125,  195 => 124,  193 => 123,  184 => 117,  124 => 60,  115 => 54,  106 => 48,  97 => 42,  88 => 36,  70 => 20,  68 => 19,  62 => 15,  60 => 10,  55 => 8,  46 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">
    <head>
        <meta charset=\"UTF-8\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"ie=edge\">

        <title>{% block title %}OhMyCats!{% endblock %}</title>

        {% block stylesheets %}
            <link href=\"https://fonts.googleapis.com/css?family=Merienda&display=swap\" rel=\"stylesheet\"> 
            <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('css/bootstrap.css') }}\">
            <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('css/ohmycats/chat.css') }}\">
        {% endblock %}
    </head>

    <body>

        {% include 'ohmycats/header.html.twig' %}

            <!--Carousel-->
        <section class = \"container-fluid py-5\" id=\"diapo\">
            <div class=\"container\"> <!--si on besoin des marges-->
                <div class=\"row\">
                    <section class=\"col-lg-9 order-lg-2\">
                        <div id=\"carouselExampleIndicators\" class=\"carousel slide\" data-ride=\"carousel\" data-interval=\"2000\">
                            <ol class=\"carousel-indicators\">
                                <li data-target=\"#carouselExampleIndicators\" data-slide-to=\"0\" class=\"active\"></li>
                                <li data-target=\"#carouselExampleIndicators\" data-slide-to=\"1\"></li>
                                <li data-target=\"#carouselExampleIndicators\" data-slide-to=\"2\"></li>
                                <li data-target=\"#carouselExampleIndicators\" data-slide-to=\"3\"></li>
                                <li data-target=\"#carouselExampleIndicators\" data-slide-to=\"4\"></li>
                            </ol>
                            <div class=\"carousel-inner\">
                                <div class=\"carousel-item active\">
                                    <img class=\"d-block w-100\" src=\"{{ asset('images/ohmycats/chat_1.jpg') }}\" alt=\"Sushi\">
                                    <div class=\"carousel-caption d-none d-md-block\">
                                        <p>Sushi</p>
                                    </div>
                                </div>
                                <div class=\"carousel-item\">
                                    <img class=\"d-block w-100\" src=\"{{ asset('images/ohmycats/chat_2.jpg') }}\" alt=\"Maki\">
                                    <div class=\"carousel-caption d-none d-md-block\">
                                        <p>Maki</p>
                                    </div>
                                </div>
                                <div class=\"carousel-item\">
                                    <img class=\"d-block w-100\" src=\"{{ asset('images/ohmycats/chat_3.jpg') }}\" alt=\"Sashimi\">
                                    <div class=\"carousel-caption d-none d-md-block\">
                                        <p>Sashimi</p>
                                    </div>
                                </div>
                                <div class=\"carousel-item\">
                                    <img class=\"d-block w-100\" src=\"{{ asset('images/ohmycats/chat_4.jpg') }}\" alt=\"Yakitori\">
                                    <div class=\"carousel-caption d-none d-md-block\">
                                        <p>Yakitori</p>
                                    </div>
                                </div>
                                <div class=\"carousel-item\">
                                    <img class=\"d-block w-100\" src=\"{{ asset('images/ohmycats/chat_5.jpg') }}\" alt=\"Onigri\">
                                    <div class=\"carousel-caption d-none d-md-block\">
                                        <p>Onigri</p>
                                    </div>
                                </div>
                            </div><!--carousel inner-->
                            <a class=\"carousel-control-prev\" href=\"#carouselExampleIndicators\" role=\"button\" data-slide=\"prev\">
                                <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
                                <span class=\"sr-only\">Previous</span>
                            </a>
                            <a class=\"carousel-control-next\" href=\"#carouselExampleIndicators\" role=\"button\" data-slide=\"next\">
                                <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
                                <span class=\"sr-only\">Next</span>
                            </a>
                        </div><!--/carousel indicators-->
                    </section><!--/col-->

                    <section class=\"col-lg-3 order-lg-1 \">
                        <h2>Les chats à adopter</h2>
                        <form action=\"#\" method=\"get\" class=\"border rounded p-2\">
                            <div class=\"form-group\">
                                <label for=\"chat\" class=\"font-weight-bold\">Choix du chat:</label>
                                <select name=\"chat\" id=\"chat\" class=\"form-control\">
                                    <option value=\"\">--Sélectionner un chat --</option>
                                    <option value=\"sushi\">Sushi</option>
                                    <option value=\"maki\">Maki</option>
                                    <option value=\"sashimi\">Sashimi</option>
                                    <option value=\"yakitori\">Yakitori</option>
                                    <option value=\"Onigri\">Onigri</option>
                                </select>
                            </div>
                            <div class=\"form-group\">
                                <label for=\"raison\" class=\"font-weight-bold\">Raison d'adoption:</label>
                                <textarea name=\"raison\" id=\"raison\" placeholder=\"Saisissez ici les raisons pour lesquelles vous souhaitez adopter ce chat...\" class=\"form-control\"></textarea>
                            </div>
                            <button class = \"btn btn-success w-100\">Envoyer</button> 
                        </form>
                        <div id=\"envoye\" class=\"alert alert-success\" role=\"alert\">
                                Votre message a bien été envoyé
                        </div>
                    </section>
                </div><!--/row-->
            </div><!--/container-->
        </section>

        <!--Tête de chat et text-->
        <section id=\"chattext\" class=\"container-fluid pb-5 pt-2 bg-light\" id=\"tete\">
            <div class=\"container pt-5\">
                <div class=\"row\">
                    <div class=\"col-lg-9\">
                        <h2>Nos chats à adopter...</h2>

                        <p>Sed quid est quod in hac causa maxime homines admirentur et reprehendant meum consilium, cum ego idem antea multa decreverim, que magis ad hominis dignitatem quam ad rei publicae necessitatem pertinerent? Supplicationem quindecim dierum decrevi sententia mea. Rei publicae satis erat tot dierum quot C. Mario ; dis immortalibus non erat exigua eadem gratulatio quae ex maximis bellis. Ergo ille cumulus dierum hominis est dignitati tributus.</p>

                        <p>Haec igitur prima lex amicitiae sanciatur, ut ab amicis honesta petamus, amicorum causa honesta faciamus, ne exspectemus quidem, dum rogemur; studium semper adsit, cunctatio absit; consilium vero dare audeamus libere. Plurimum in amicitia amicorum bene suadentium valeat auctoritas, eaque et adhibeatur ad monendum non modo aperte sed etiam acriter, si res postulabit, et adhibitae pareatur.</p>
                    </div><!--/col 8-->
                    <div class=\"col-lg-3\">
                        <img src=\"{{ asset('images/ohmycats/tete-chat.png') }}\" alt=\"tete de chat\" id=\"teteDeChat\" class=\"w-100\">
                    </div><!--/col 4-->
                </div><!--/row-->
            </div><!--/container-->
        </section><!--/container-->

        {% include 'ohmycats/footer.html.twig' %}

        {% block javascripts %}
            <script src=\"{{ asset('js/jquery-3.4.1.js') }}\"></script>
            <script src=\"{{ asset('js/bootstrap.js') }}\"></script>
            <script src=\"{{ asset('js/ohmycats/chat.js') }}\"></script>
        {% endblock %}
    </body>
</html>", "OhMyCats/ohmycats.html.twig", "C:\\Users\\curly\\OneDrive\\Plocha\\SYMFONY projects\\portfolio2\\templates\\ohmycats\\ohmycats.html.twig");
    }
}

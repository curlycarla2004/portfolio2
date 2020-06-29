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

/* Multi/multi.html.twig */
class __TwigTemplate_0a7d19c8aacf64846bc17d59f92bcbd4d3b54a837b5c10499fe390fd6e5e5116 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Multi/multi.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Multi/multi.html.twig"));

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
        // line 17
        echo "    </head>
    <body>

        ";
        // line 20
        $this->loadTemplate("Multi/header.html.twig", "Multi/multi.html.twig", 20)->display($context);
        // line 21
        echo "
        <!--Caroussel-->
        <section class=\"container-fluid px-0\"> <!--take of automatic padding left and right-->
            <div id=\"carouselExampleIndicators\" class=\"carousel slide\" data-ride=\"carousel\">
                    <ol class=\"carousel-indicators\">
                        <li data-target=\"#carouselExampleIndicators\" id=\"slide\" data-slide-to=\"0\" class=\"active\"></li>
                        <li data-target=\"#carouselExampleIndicators\"  data-slide-to=\"1\"></li>
                        <li data-target=\"#carouselExampleIndicators\"  data-slide-to=\"2\"></li>
                    </ol>
                    <div class=\"carousel-inner\">
                        <div class=\"carousel-item active\">
                            <img src=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/Multi/1.jpg"), "html", null, true);
        echo "\" class=\"d-block w-100\" alt=\"phone in hand pc\">
                        </div>
                        <div class=\"carousel-item\">
                            <img src=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/Multi/2.jpg"), "html", null, true);
        echo "\" class=\"d-block w-100\" alt=\"clavier d'ordinateur\">
                        </div>
                        <div class=\"carousel-item\">
                            <img src=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/Multi/3.jpg"), "html", null, true);
        echo "\" class=\"d-block w-100\" alt=\"interview\">
                        </div>
                    </div>
                    <a class=\"carousel-control-prev\" href=\"#carouselExampleIndicators\" role=\"button\" data-slide=\"prev\" id=\"next\">
                    <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
                    <span class=\"sr-only\">Previous</span>
                    </a>
                    <a class=\"carousel-control-next\" id=\"next\" href=\"#carouselExampleIndicators\" role=\"button\" data-slide=\"next\">
                    <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
                    <span class=\"sr-only\">Next</span>
                    </a>
            </div><!--/carousel-->
        </section>

        <!--Header text-->
        <header class=\"container-fluid text-center text-secondary py-5\">
            <div class=\"container\">
                <div class=\"row\">   
                    <div class=\"col-lg-12 \">
                        <h3>Providing clients</h3>
                        <h1>Best & Creative Solutions</h1>
                    </div>
                </div><!--/row-->
            </div><!--/container-->
        </header>

        <!-- 4 columns-->
        <section class=\"container-fluid py-5\">
                <section class= \"row\">
                    <div class=\"col-lg-3 order-lg-1 text-center\">
                        <i class=\"fas fa-cogs\" id=\"icons\"></i>
                        <p id=\"paddingTop\">CREATIVE SOLUTIONS</p>
                    </div>
                    <div class=\"col-lg-3 order-lg-2 text-center\">
                        <i class=\"fas fa-leaf\" id=\"icons\"></i>
                        <p id=\"paddingTop\">CREATIVE SOLUTIONS</p>
                    </div>
                    <div class=\"col-lg-3 order-lg-3 text-center\">
                        <i class=\"far fa-heart\" id=\"icons\"></i>
                        <p id=\"paddingTop\">CREATIVE SOLUTIONS</p>
                    </div>
                    <div class=\"col-lg-3 order-lg-4 text-center\">
                        <i class=\"fas fa-laptop\" id=\"icons\"></i>
                        <p id=\"paddingTop\">CREATIVE SOLUTIONS</p>
                    </div>
                </section><!--/row-->
        </section>

        <!--Main feature text-->
        <section class=\"container-fluid text-center py-3\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-lg-12\">
                        <h2>Main Features</h2>
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Recusandae, tenetur. Aliquid quo rem aperiam corporis voluptatem ab sint deleniti saepe doloribus cumque perferendis eveniet sapiente sunt vero, eaque possimus unde.</p>
                    </div><!--/col-->
                </div><!--/row-->
            </div><!--/container-->
        </section>

        <!--2images in row-->
        <section class= \"container-fluid py-5\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-lg-6 order-lg-2\">
                        <img src=\"";
        // line 103
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/Multi/6.jpg"), "html", null, true);
        echo "\" alt=\"girl with pc\" class=\"src\" width=\"500em\">
                    </div>
                    <div class=\"col-lg-6 order-lg-2\">
                        <img src=\"";
        // line 106
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/Multi/5.jpg"), "html", null, true);
        echo "\" alt=\"tel et tablette plus texte\" class=\"src\" width=\"500em\">
                    </div>
                </div><!--/row-->
            </div><!--/container-->
        </section>

        <!--3columns-->
        <section class=\"container-fluid py-5\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-lg-4 order-lg-1\">
                        <div class=\"container\">
                            <div class=\"row\">
                                <div class=\"col-3\">
                                    <i class=\"fas fa-rocket\" id=\"iconsOther\"></i>
                                </div>
                                <div class=\"col-9\">
                                    <h3>SEO Optimized</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officia at doloremque est et mollitia aliquid dolore, reiciendis quia ipsam porro suscipit hic, similique ea nemo libero. Magni soluta veniam aliquid.</p>
                                </div>
                            </div><!--/row-->
                        </div><!--/container-->
                    </div><!--/col-->
                    <div class=\"col-lg-4 order-lg-2\">
                        <div class=\"container\">
                            <div class=\"row\">
                                <div class=\"col-3\">
                                    <i class=\"fas fa-camera\" id=\"iconsOther\"></i>
                                </div>
                                <div class=\"col-9\">
                                    <h3>Easy to Install</h3>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur cupiditate odio esse optio ratione unde doloremque necessitatibus, cumque deleniti quo labore asperiores est reiciendis pariatur id dolore minus maxime expedita.</p>
                                </div>
                            </div><!--/row-->
                        </div><!--/container-->
                    </div><!--/col-->
                    <div class=\"col-lg-4 order-lg-3\">
                        <div class=\"container\">
                            <div class=\"row\">
                                <div class=\"col-3\">
                                    <i class=\"far fa-heart\" id=\"iconsOther\"></i>
                                    </div>
                                    <div class=\"col-9\">
                                    <h3>Unlimited Possibilities</h3>
                                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Perferendis optio, ad suscipit sunt odit explicabo dignissimos, deserunt amet quidem consequuntur aperiam laborum necessitatibus nulla perspiciatis!</p>
                                </div>
                            </div><!--/row-->
                        </div><!--/container-->
                    </div><!--/col-->
                </div><!--/row-->
            </div><!--/container-->
        </section>

        <!--Orange bottom bar with 2 buttons-->
        <section class=\"container-fluid py-5 text-center text-white\" id=\"colorfulContainer\">
            <div class=\"container py-5\">
                <div class=\"row\">
                    <div class=\"col-12\">
                        <h3>Easily Customizable & Unlimited Support</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. .</p>
                        <button type=\"button\" class=\"btn btn-secondary\">PURCHASE NOW</button>
                        <button type=\"button\" class=\"btn btn-secondary\">LEARN MORE</button>
                    </div>
                </div><!--/row-->
            </div><!--/container-->
        </section>

        <!--what people are-->
        <section class=\"container-fluid bg-light text-center py-5\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-12\">
                        <h4>What People Are</h4>
                        <h3>Saying About Us</h3>
                    </div>
                </div><!--/row-->
            </div><!--/container-->
        </section>

        <!--Photos and text-->
        <section class=\"container-fluid bg-light py-5\">
            <div class=\"container\">
                <div class=\"row text-center\">
                    <div class=\"col-lg-3 order-lg-4 pt-5\">
                        <img src=\"";
        // line 190
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/Multi/man4.jpg"), "html", null, true);
        echo "\" alt=\"man4\" id=\"man4\" class=\"src\">
                        <h4>John Doe</h4>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>
                    </div>
                    <div class=\"col-lg-3 order-lg-3 pt-5\">
                        <img src=\"";
        // line 195
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/Multi/man2.jpg"), "html", null, true);
        echo "\" alt=\"man2\" id=\"man2\" class=\"src\">
                        <h4>John Doe</h4>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>
                    </div>
                    <div class=\"col-lg-3 order-lg-2 pt-5\">
                        <img src=\"";
        // line 200
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/Multi/man3.jpg"), "html", null, true);
        echo "\" alt=\"man3\" id=\"man3\" class=\"src\">
                        <h4>John Doe</h4>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>
                    </div>
                    <div class=\"col-lg-3 order-lg-1 pt-5\">
                        <img src=\"";
        // line 205
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/Multi/man4.jpg"), "html", null, true);
        echo "\" alt=\"man4\" id=\"man42\" class=\"src\">
                        <h4>John Doe</h4>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>
                    </div>
                </div><!--/row-->
            </div><!--/container-->
        </section>

        <!--Before footer-->
        <section class=\"container-fluid py-5 bg-dark text-white\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-lg-4 order-lg-1\">
                        <h5>Multi</h5>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil qui voluptatem doloribus recusandae, magnam minima cum dignissimos rerum porro mollitia nam iste odit praesentium, ut reprehenderit unde illum quos numquam.</p>
                        <p class=\"icon\">
                            <i class=\"fab fa-facebook-f\" id=\"socialIcons\"></i>
                            <i class=\"fab fa-twitter\" id=\"socialIcons\"></i>
                            <i class=\"fab fa-linkedin-in\" id=\"socialIcons\"></i>
                            <i class=\"fab fa-pinterest\" id=\"socialIcons\"></i>
                            <i class=\"fab fa-google-plus-square\" id=\"socialIcons\"></i>
                        </p>
                    </div>
                    <div class=\"col-lg-4 order-lg-2\">
                        <h5>RECENT POSTS</h5>
                        <p id=\"one\">Great design with Features</p>
                        <p id=\"two\">Limitless functions & works</p>
                        <p id=\"three\">Multi is simple and clean design</p>
                    </div>
                    <div class=\"col-lg-4 order-lg-3\">
                        <h5>CONTACT INFO</h5>
                        <p id=\"four\"><i class=\"fas fa-home\"></i>Office #38, Suite 54 Elizabeth street, Victoria State, Newyork, USA 33026</p>
                        <p id=\"five\"><i class=\"fas fa-phone-alt\"></i>+38 000 129 900</p>
                        <p><i class=\"fas fa-envelope\"></i>info@domain.net</p>
                    </div>
                </div><!--/row-->
            </div><!--/container-->
        </section>

        ";
        // line 244
        $this->loadTemplate("Multi/footer.html.twig", "Multi/multi.html.twig", 244)->display($context);
        // line 245
        echo "
        ";
        // line 246
        $this->displayBlock('javascripts', $context, $blocks);
        // line 251
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

        echo "Multi website";
        
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
        echo "           
            <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/multi/bootstrap.css"), "html", null, true);
        echo "\">
            <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/multi/bootstrap.css.map"), "html", null, true);
        echo "\">
            <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/multi/all.css"), "html", null, true);
        echo "\">
            <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/multi/style.css"), "html", null, true);
        echo "\">
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 246
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 247
        echo "            <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery-3.4.1.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 248
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/bootstrap.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 249
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/multi/script.js"), "html", null, true);
        echo "\"></script>
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "Multi/multi.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  414 => 249,  410 => 248,  405 => 247,  395 => 246,  383 => 15,  379 => 14,  375 => 13,  371 => 12,  368 => 11,  358 => 10,  339 => 8,  328 => 251,  326 => 246,  323 => 245,  321 => 244,  279 => 205,  271 => 200,  263 => 195,  255 => 190,  168 => 106,  162 => 103,  94 => 38,  88 => 35,  82 => 32,  69 => 21,  67 => 20,  62 => 17,  60 => 10,  55 => 8,  46 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">
    <head>
        <meta charset=\"UTF-8\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"ie=edge\">

        <title>{% block title %}Multi website{% endblock %}</title>

        {% block stylesheets %}
           
            <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('css/multi/bootstrap.css') }}\">
            <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('css/multi/bootstrap.css.map') }}\">
            <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('css/multi/all.css') }}\">
            <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('css/multi/style.css') }}\">
        {% endblock %}
    </head>
    <body>

        {% include 'Multi/header.html.twig' %}

        <!--Caroussel-->
        <section class=\"container-fluid px-0\"> <!--take of automatic padding left and right-->
            <div id=\"carouselExampleIndicators\" class=\"carousel slide\" data-ride=\"carousel\">
                    <ol class=\"carousel-indicators\">
                        <li data-target=\"#carouselExampleIndicators\" id=\"slide\" data-slide-to=\"0\" class=\"active\"></li>
                        <li data-target=\"#carouselExampleIndicators\"  data-slide-to=\"1\"></li>
                        <li data-target=\"#carouselExampleIndicators\"  data-slide-to=\"2\"></li>
                    </ol>
                    <div class=\"carousel-inner\">
                        <div class=\"carousel-item active\">
                            <img src=\"{{ asset('images/Multi/1.jpg') }}\" class=\"d-block w-100\" alt=\"phone in hand pc\">
                        </div>
                        <div class=\"carousel-item\">
                            <img src=\"{{ asset('images/Multi/2.jpg') }}\" class=\"d-block w-100\" alt=\"clavier d'ordinateur\">
                        </div>
                        <div class=\"carousel-item\">
                            <img src=\"{{ asset('images/Multi/3.jpg') }}\" class=\"d-block w-100\" alt=\"interview\">
                        </div>
                    </div>
                    <a class=\"carousel-control-prev\" href=\"#carouselExampleIndicators\" role=\"button\" data-slide=\"prev\" id=\"next\">
                    <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
                    <span class=\"sr-only\">Previous</span>
                    </a>
                    <a class=\"carousel-control-next\" id=\"next\" href=\"#carouselExampleIndicators\" role=\"button\" data-slide=\"next\">
                    <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
                    <span class=\"sr-only\">Next</span>
                    </a>
            </div><!--/carousel-->
        </section>

        <!--Header text-->
        <header class=\"container-fluid text-center text-secondary py-5\">
            <div class=\"container\">
                <div class=\"row\">   
                    <div class=\"col-lg-12 \">
                        <h3>Providing clients</h3>
                        <h1>Best & Creative Solutions</h1>
                    </div>
                </div><!--/row-->
            </div><!--/container-->
        </header>

        <!-- 4 columns-->
        <section class=\"container-fluid py-5\">
                <section class= \"row\">
                    <div class=\"col-lg-3 order-lg-1 text-center\">
                        <i class=\"fas fa-cogs\" id=\"icons\"></i>
                        <p id=\"paddingTop\">CREATIVE SOLUTIONS</p>
                    </div>
                    <div class=\"col-lg-3 order-lg-2 text-center\">
                        <i class=\"fas fa-leaf\" id=\"icons\"></i>
                        <p id=\"paddingTop\">CREATIVE SOLUTIONS</p>
                    </div>
                    <div class=\"col-lg-3 order-lg-3 text-center\">
                        <i class=\"far fa-heart\" id=\"icons\"></i>
                        <p id=\"paddingTop\">CREATIVE SOLUTIONS</p>
                    </div>
                    <div class=\"col-lg-3 order-lg-4 text-center\">
                        <i class=\"fas fa-laptop\" id=\"icons\"></i>
                        <p id=\"paddingTop\">CREATIVE SOLUTIONS</p>
                    </div>
                </section><!--/row-->
        </section>

        <!--Main feature text-->
        <section class=\"container-fluid text-center py-3\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-lg-12\">
                        <h2>Main Features</h2>
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Recusandae, tenetur. Aliquid quo rem aperiam corporis voluptatem ab sint deleniti saepe doloribus cumque perferendis eveniet sapiente sunt vero, eaque possimus unde.</p>
                    </div><!--/col-->
                </div><!--/row-->
            </div><!--/container-->
        </section>

        <!--2images in row-->
        <section class= \"container-fluid py-5\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-lg-6 order-lg-2\">
                        <img src=\"{{ asset('images/Multi/6.jpg') }}\" alt=\"girl with pc\" class=\"src\" width=\"500em\">
                    </div>
                    <div class=\"col-lg-6 order-lg-2\">
                        <img src=\"{{ asset('images/Multi/5.jpg') }}\" alt=\"tel et tablette plus texte\" class=\"src\" width=\"500em\">
                    </div>
                </div><!--/row-->
            </div><!--/container-->
        </section>

        <!--3columns-->
        <section class=\"container-fluid py-5\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-lg-4 order-lg-1\">
                        <div class=\"container\">
                            <div class=\"row\">
                                <div class=\"col-3\">
                                    <i class=\"fas fa-rocket\" id=\"iconsOther\"></i>
                                </div>
                                <div class=\"col-9\">
                                    <h3>SEO Optimized</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officia at doloremque est et mollitia aliquid dolore, reiciendis quia ipsam porro suscipit hic, similique ea nemo libero. Magni soluta veniam aliquid.</p>
                                </div>
                            </div><!--/row-->
                        </div><!--/container-->
                    </div><!--/col-->
                    <div class=\"col-lg-4 order-lg-2\">
                        <div class=\"container\">
                            <div class=\"row\">
                                <div class=\"col-3\">
                                    <i class=\"fas fa-camera\" id=\"iconsOther\"></i>
                                </div>
                                <div class=\"col-9\">
                                    <h3>Easy to Install</h3>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur cupiditate odio esse optio ratione unde doloremque necessitatibus, cumque deleniti quo labore asperiores est reiciendis pariatur id dolore minus maxime expedita.</p>
                                </div>
                            </div><!--/row-->
                        </div><!--/container-->
                    </div><!--/col-->
                    <div class=\"col-lg-4 order-lg-3\">
                        <div class=\"container\">
                            <div class=\"row\">
                                <div class=\"col-3\">
                                    <i class=\"far fa-heart\" id=\"iconsOther\"></i>
                                    </div>
                                    <div class=\"col-9\">
                                    <h3>Unlimited Possibilities</h3>
                                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Perferendis optio, ad suscipit sunt odit explicabo dignissimos, deserunt amet quidem consequuntur aperiam laborum necessitatibus nulla perspiciatis!</p>
                                </div>
                            </div><!--/row-->
                        </div><!--/container-->
                    </div><!--/col-->
                </div><!--/row-->
            </div><!--/container-->
        </section>

        <!--Orange bottom bar with 2 buttons-->
        <section class=\"container-fluid py-5 text-center text-white\" id=\"colorfulContainer\">
            <div class=\"container py-5\">
                <div class=\"row\">
                    <div class=\"col-12\">
                        <h3>Easily Customizable & Unlimited Support</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. .</p>
                        <button type=\"button\" class=\"btn btn-secondary\">PURCHASE NOW</button>
                        <button type=\"button\" class=\"btn btn-secondary\">LEARN MORE</button>
                    </div>
                </div><!--/row-->
            </div><!--/container-->
        </section>

        <!--what people are-->
        <section class=\"container-fluid bg-light text-center py-5\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-12\">
                        <h4>What People Are</h4>
                        <h3>Saying About Us</h3>
                    </div>
                </div><!--/row-->
            </div><!--/container-->
        </section>

        <!--Photos and text-->
        <section class=\"container-fluid bg-light py-5\">
            <div class=\"container\">
                <div class=\"row text-center\">
                    <div class=\"col-lg-3 order-lg-4 pt-5\">
                        <img src=\"{{ asset('images/Multi/man4.jpg') }}\" alt=\"man4\" id=\"man4\" class=\"src\">
                        <h4>John Doe</h4>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>
                    </div>
                    <div class=\"col-lg-3 order-lg-3 pt-5\">
                        <img src=\"{{ asset('images/Multi/man2.jpg') }}\" alt=\"man2\" id=\"man2\" class=\"src\">
                        <h4>John Doe</h4>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>
                    </div>
                    <div class=\"col-lg-3 order-lg-2 pt-5\">
                        <img src=\"{{ asset('images/Multi/man3.jpg') }}\" alt=\"man3\" id=\"man3\" class=\"src\">
                        <h4>John Doe</h4>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>
                    </div>
                    <div class=\"col-lg-3 order-lg-1 pt-5\">
                        <img src=\"{{ asset('images/Multi/man4.jpg') }}\" alt=\"man4\" id=\"man42\" class=\"src\">
                        <h4>John Doe</h4>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>
                    </div>
                </div><!--/row-->
            </div><!--/container-->
        </section>

        <!--Before footer-->
        <section class=\"container-fluid py-5 bg-dark text-white\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-lg-4 order-lg-1\">
                        <h5>Multi</h5>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil qui voluptatem doloribus recusandae, magnam minima cum dignissimos rerum porro mollitia nam iste odit praesentium, ut reprehenderit unde illum quos numquam.</p>
                        <p class=\"icon\">
                            <i class=\"fab fa-facebook-f\" id=\"socialIcons\"></i>
                            <i class=\"fab fa-twitter\" id=\"socialIcons\"></i>
                            <i class=\"fab fa-linkedin-in\" id=\"socialIcons\"></i>
                            <i class=\"fab fa-pinterest\" id=\"socialIcons\"></i>
                            <i class=\"fab fa-google-plus-square\" id=\"socialIcons\"></i>
                        </p>
                    </div>
                    <div class=\"col-lg-4 order-lg-2\">
                        <h5>RECENT POSTS</h5>
                        <p id=\"one\">Great design with Features</p>
                        <p id=\"two\">Limitless functions & works</p>
                        <p id=\"three\">Multi is simple and clean design</p>
                    </div>
                    <div class=\"col-lg-4 order-lg-3\">
                        <h5>CONTACT INFO</h5>
                        <p id=\"four\"><i class=\"fas fa-home\"></i>Office #38, Suite 54 Elizabeth street, Victoria State, Newyork, USA 33026</p>
                        <p id=\"five\"><i class=\"fas fa-phone-alt\"></i>+38 000 129 900</p>
                        <p><i class=\"fas fa-envelope\"></i>info@domain.net</p>
                    </div>
                </div><!--/row-->
            </div><!--/container-->
        </section>

        {% include 'Multi/footer.html.twig' %}

        {% block javascripts %}
            <script src=\"{{ asset('js/jquery-3.4.1.js') }}\"></script>
            <script src=\"{{ asset('js/bootstrap.js') }}\"></script>
            <script src=\"{{ asset('js/multi/script.js') }}\"></script>
        {% endblock %}
    </body>
</html>", "Multi/multi.html.twig", "C:\\Users\\curly\\OneDrive\\Plocha\\SYMFONY projects\\portfolio2\\templates\\Multi\\multi.html.twig");
    }
}

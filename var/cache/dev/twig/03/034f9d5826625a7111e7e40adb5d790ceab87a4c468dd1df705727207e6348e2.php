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

/* happytours/happytours.html.twig */
class __TwigTemplate_a71be346164f3766803a4170c58b672b6aa2b7a43417aa3f246514fcf08b9721 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "happytours/happytours.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "happytours/happytours.html.twig"));

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
        // line 14
        echo "    </head>
    <body>

        ";
        // line 17
        $this->loadTemplate("happytours/header.html.twig", "happytours/happytours.html.twig", 17)->display($context);
        // line 18
        echo "
        <section class=\"container\">
            <div class=\"row py-5\" >
                <article class=\"col-lg-4\">
                    <h2>Brazil!</h2>
                        <img class=\"w-100\" src=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/happytours/basic-pic1.jpg"), "html", null, true);
        echo "\" alt=\"brazil\">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariature. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
                </article><!--/col-4-->

                <article class=\"col-lg-4\">
                    <h2>Mexico!</h2>
                    <img class=\"w-100\" src=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/happytours/basic-pic2.jpg"), "html", null, true);
        echo "\" alt=\"mexico\">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariature. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
                </article><!--/col-4-->

                <article class=\"col-lg-4\">
                    <h2>USA!</h2>
                    <img class=\"w-100\" src=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/happytours/basic-pic3.jpg"), "html", null, true);
        echo "\" alt=\"US\">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariature. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
                </article><!--/col-4-->
            </div><!--/row-->

            <div class=\"row m-0\">
                <div class=\"col-lg-12 p-0\">
                    <h2>Playing with the columns and their sizing</h2>
                </div>
                <div class=\"col-12 border border-secondary text-center form-group\">12</div>
                <!--div.border.col-1.text-center{1}+div.border.col-11.text-center{11}-->
                <div class=\"col-1 border border-secondary text-center form-group\">1</div>
                <div class=\"col-11 border border-secondary text-center form-group\">11</div>
                <div class=\"col-2 border border-secondary text-center  form-group\">2</div>
                <div class=\"col-10 border border-secondary text-center form-group\">10</div>
                <div class=\"col-3 border border-secondary text-center form-group\">3</div>
                <div class=\"col-9 border border-secondary text-center form-group\">9</div>
                <div class=\"col-4 border border-secondary text-center form-group\">4</div>
                <div class=\"col-8 border border-secondary text-center form-group\">8</div>
                <div class=\"col-5 border border-secondary text-center form-group\">5</div>
                <div class=\"col-7 border border-secondary text-center form-group\">7</div>
                <div class=\"col-6 border border-secondary text-center form-group\">6</div>
                <div class=\"col-6 border border-secondary text-center form-group\">6</div>
                <div class=\"col-4 border border-secondary text-center form-group\">4</div>
                <div class=\"col-4 border border-secondary text-center form-group\">4</div>
                <div class=\"col-4 border border-secondary text-center form-group\">4</div>
                <div class=\"col-1 border border-secondary text-center form-group\">1</div>
                <div class=\"col-2 border border-secondary text-center form-group\">2</div>
                <div class=\"col-3 border border-secondary text-center form-group\">3</div>
                <div class=\"col-3 border border-secondary text-center form-group\">3</div>
                <div class=\"col-3 border border-secondary text-center form-group\">3</div>
            </div> 
        </section><!--/container-->
    
        ";
        // line 69
        $this->loadTemplate("happytours/footer.html.twig", "happytours/happytours.html.twig", 69)->display($context);
        // line 70
        echo "
        ";
        // line 71
        $this->displayBlock('javascripts', $context, $blocks);
        // line 76
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

        echo "Happy tours agence de voyage";
        
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
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/happytours/style.css"), "html", null, true);
        echo "\">
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 71
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 72
        echo "            <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery-3.4.1.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 73
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/bootstrap.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 74
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/happytours/carousel.js"), "html", null, true);
        echo "\"></script>
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "happytours/happytours.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  214 => 74,  210 => 73,  205 => 72,  195 => 71,  183 => 12,  178 => 11,  168 => 10,  149 => 8,  138 => 76,  136 => 71,  133 => 70,  131 => 69,  94 => 35,  85 => 29,  76 => 23,  69 => 18,  67 => 17,  62 => 14,  60 => 10,  55 => 8,  46 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">
    <head>
        <meta charset=\"UTF-8\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"ie=edge\">

        <title>{% block title %}Happy tours agence de voyage{% endblock %}</title>

        {% block stylesheets %}
            <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('css/bootstrap.css') }}\">
            <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('css/happytours/style.css') }}\">
        {% endblock %}
    </head>
    <body>

        {% include 'happytours/header.html.twig' %}

        <section class=\"container\">
            <div class=\"row py-5\" >
                <article class=\"col-lg-4\">
                    <h2>Brazil!</h2>
                        <img class=\"w-100\" src=\"{{ asset('images/happytours/basic-pic1.jpg') }}\" alt=\"brazil\">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariature. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
                </article><!--/col-4-->

                <article class=\"col-lg-4\">
                    <h2>Mexico!</h2>
                    <img class=\"w-100\" src=\"{{ asset('images/happytours/basic-pic2.jpg') }}\" alt=\"mexico\">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariature. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
                </article><!--/col-4-->

                <article class=\"col-lg-4\">
                    <h2>USA!</h2>
                    <img class=\"w-100\" src=\"{{ asset('images/happytours/basic-pic3.jpg') }}\" alt=\"US\">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariature. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
                </article><!--/col-4-->
            </div><!--/row-->

            <div class=\"row m-0\">
                <div class=\"col-lg-12 p-0\">
                    <h2>Playing with the columns and their sizing</h2>
                </div>
                <div class=\"col-12 border border-secondary text-center form-group\">12</div>
                <!--div.border.col-1.text-center{1}+div.border.col-11.text-center{11}-->
                <div class=\"col-1 border border-secondary text-center form-group\">1</div>
                <div class=\"col-11 border border-secondary text-center form-group\">11</div>
                <div class=\"col-2 border border-secondary text-center  form-group\">2</div>
                <div class=\"col-10 border border-secondary text-center form-group\">10</div>
                <div class=\"col-3 border border-secondary text-center form-group\">3</div>
                <div class=\"col-9 border border-secondary text-center form-group\">9</div>
                <div class=\"col-4 border border-secondary text-center form-group\">4</div>
                <div class=\"col-8 border border-secondary text-center form-group\">8</div>
                <div class=\"col-5 border border-secondary text-center form-group\">5</div>
                <div class=\"col-7 border border-secondary text-center form-group\">7</div>
                <div class=\"col-6 border border-secondary text-center form-group\">6</div>
                <div class=\"col-6 border border-secondary text-center form-group\">6</div>
                <div class=\"col-4 border border-secondary text-center form-group\">4</div>
                <div class=\"col-4 border border-secondary text-center form-group\">4</div>
                <div class=\"col-4 border border-secondary text-center form-group\">4</div>
                <div class=\"col-1 border border-secondary text-center form-group\">1</div>
                <div class=\"col-2 border border-secondary text-center form-group\">2</div>
                <div class=\"col-3 border border-secondary text-center form-group\">3</div>
                <div class=\"col-3 border border-secondary text-center form-group\">3</div>
                <div class=\"col-3 border border-secondary text-center form-group\">3</div>
            </div> 
        </section><!--/container-->
    
        {% include 'happytours/footer.html.twig' %}

        {% block javascripts %}
            <script src=\"{{ asset('js/jquery-3.4.1.js') }}\"></script>
            <script src=\"{{ asset('js/bootstrap.js') }}\"></script>
            <script src=\"{{ asset('js/happytours/carousel.js') }}\"></script>
        {% endblock %}
    </body>
</html>", "happytours/happytours.html.twig", "C:\\Users\\curly\\OneDrive\\Plocha\\SYMFONY projects\\portfolio2\\templates\\happytours\\happytours.html.twig");
    }
}

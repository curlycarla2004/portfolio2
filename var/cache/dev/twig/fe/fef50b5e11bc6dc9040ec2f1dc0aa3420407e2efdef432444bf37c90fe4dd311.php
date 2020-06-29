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

/* portfolio2/footer.html.twig */
class __TwigTemplate_3110a624ea714a5a7f828158154e902e1a0d22ec045e7a20c7265a35296e2a65 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "portfolio2/footer.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "portfolio2/footer.html.twig"));

        // line 1
        echo "<!-- Footer -->
\t<footer>
        <!-- footer bottom part -->
        <div class=\"footer-bottom\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-lg-12 col-md-12 col-sm-12 text-center\"> <p><span>Made with <img src=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/heart.png"), "html", null, true);
        echo "\" alt=\"heart\" class=\"src\"> and <img src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/chocolate.png"), "html", null, true);
        echo "\" alt=\"choco\" class=\"src\"> </span> <p></div>
                    <br>
                    <div class=\"col-lg-12 col-md-12 col-sm-12 text-center\"> <p><span>© Karla Gergelova 2020 - All rights reserved</span> </p></div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer END-->";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "portfolio2/footer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 7,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- Footer -->
\t<footer>
        <!-- footer bottom part -->
        <div class=\"footer-bottom\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-lg-12 col-md-12 col-sm-12 text-center\"> <p><span>Made with <img src=\"{{ asset('images/heart.png') }}\" alt=\"heart\" class=\"src\"> and <img src=\"{{ asset('images/chocolate.png') }}\" alt=\"choco\" class=\"src\"> </span> <p></div>
                    <br>
                    <div class=\"col-lg-12 col-md-12 col-sm-12 text-center\"> <p><span>© Karla Gergelova 2020 - All rights reserved</span> </p></div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer END-->", "portfolio2/footer.html.twig", "C:\\Users\\curly\\OneDrive\\Plocha\\SYMFONY projects\\portfolio2\\templates\\portfolio2\\footer.html.twig");
    }
}

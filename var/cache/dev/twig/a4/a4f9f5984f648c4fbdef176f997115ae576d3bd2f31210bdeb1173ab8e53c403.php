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

/* multi/footer.html.twig */
class __TwigTemplate_540b9fbd2ce4e054771a4d41e209d5b6c3fa838ccef7bc1ba16632696e9c0981 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "multi/footer.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "multi/footer.html.twig"));

        // line 1
        echo "<!--footer-->
<footer class=\"text-white bg-dark py-4\" id=\"footerDark\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-4 order-lg-1\">
                <a class=\"navbar-brand text-white\" href=\"#\">@ Multi. All rights Reserved
                <p>Designed by Karla Gergelova</p>
                </a>
            </div><!--/col-->
            <div class=\"col-lg-8 order-lg-2\">
                    <ul class=\"nav justify-content-end\">
                    <li class=\"nav-item active\">
                        <a class=\"nav-link\" href=\"#\">Home <span class=\"sr-only\">(current)</span></a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"#\">Services</a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"#\">Blog</a>
                    </li>
                    <li class=\"nav-item\">
                            <a class=\"nav-link\" href=\"#\">Portfolio</a>
                    </li>
                    <li class=\"nav-item\">
                            <a class=\"nav-link\" href=\"#\">Contact</a>
                    </li>
                    </ul>
            </div><!--/col-->
        </div><!--/row-->
    </div><!--/container-->
</footer> ";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "multi/footer.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!--footer-->
<footer class=\"text-white bg-dark py-4\" id=\"footerDark\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-4 order-lg-1\">
                <a class=\"navbar-brand text-white\" href=\"#\">@ Multi. All rights Reserved
                <p>Designed by Karla Gergelova</p>
                </a>
            </div><!--/col-->
            <div class=\"col-lg-8 order-lg-2\">
                    <ul class=\"nav justify-content-end\">
                    <li class=\"nav-item active\">
                        <a class=\"nav-link\" href=\"#\">Home <span class=\"sr-only\">(current)</span></a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"#\">Services</a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"#\">Blog</a>
                    </li>
                    <li class=\"nav-item\">
                            <a class=\"nav-link\" href=\"#\">Portfolio</a>
                    </li>
                    <li class=\"nav-item\">
                            <a class=\"nav-link\" href=\"#\">Contact</a>
                    </li>
                    </ul>
            </div><!--/col-->
        </div><!--/row-->
    </div><!--/container-->
</footer> ", "multi/footer.html.twig", "C:\\Users\\curly\\OneDrive\\Plocha\\SYMFONY projects\\portfolio2\\templates\\multi\\footer.html.twig");
    }
}

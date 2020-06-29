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

/* rentacar/footer.html.twig */
class __TwigTemplate_ece86b0f18fb0249748f33069317b3950ae55a77fef383315bee0859fb99b6a2 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "rentacar/footer.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "rentacar/footer.html.twig"));

        // line 1
        echo "<!--Footer-->
<footer class=\"container-fluid py-5 text-center\">
    <div class=\"container\">
        <section class=\"row\">
            <div class=\"col-md-6\">
                <img src=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/rentacar/agence.png"), "html", null, true);
        echo "\" alt=\"agence\" class=\"src\" width=\"30%\" id=\"agence\">
            </div><!--/col-->
            <div class=\"col-md-6 text-left\">
                <p>Notre Agence de <span id=\"Paris\">Paris</span>
                <br>
                300 bouleavrd de vaugirard, 75015, Paris<br>
                Ouvert 7j/7 de 09 à 13h et de 14h à 20h<br>
                01 49 78 21 33<br>
                contact@vtc.com
            </div><!--/col-->
        </section><!--/row-->
    </div><!--/container-->
</footer>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "rentacar/footer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 6,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!--Footer-->
<footer class=\"container-fluid py-5 text-center\">
    <div class=\"container\">
        <section class=\"row\">
            <div class=\"col-md-6\">
                <img src=\"{{asset('images/rentacar/agence.png') }}\" alt=\"agence\" class=\"src\" width=\"30%\" id=\"agence\">
            </div><!--/col-->
            <div class=\"col-md-6 text-left\">
                <p>Notre Agence de <span id=\"Paris\">Paris</span>
                <br>
                300 bouleavrd de vaugirard, 75015, Paris<br>
                Ouvert 7j/7 de 09 à 13h et de 14h à 20h<br>
                01 49 78 21 33<br>
                contact@vtc.com
            </div><!--/col-->
        </section><!--/row-->
    </div><!--/container-->
</footer>", "rentacar/footer.html.twig", "C:\\Users\\curly\\OneDrive\\Plocha\\SYMFONY projects\\portfolio2\\templates\\rentacar\\footer.html.twig");
    }
}

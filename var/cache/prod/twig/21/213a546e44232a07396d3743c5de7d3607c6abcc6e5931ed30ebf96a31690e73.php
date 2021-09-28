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

/* trip/search.html.twig */
class __TwigTemplate_9e38f1a517989ecc51ad9f55f5eec4b7c4bb8d22ea08a96bd5f3a903f0daa5d2 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("base.html.twig", "trip/search.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Rechercher un trajet";
    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "<div class=\"container\">
    <h2 class=\"text-center my-5\" >rechercher un trajet</h2>
    <form>
        <div class=\"form-row\">
            <div class=\"col-md-3 col-sm-6 mt-3\">
            <input name=\"departureSearch\" type=\"text\" class=\"form-control\" placeholder=\"Départ\">
            </div>
            <div class=\"col-md-3 col-sm-6 mt-3\">
            <input name=\"arrivalSearch\" type=\"text\" class=\"form-control\" placeholder=\"Arrivé\">
            </div>
            <div class=\"col-md-3 col-sm-6 mt-3\">
            <input name=\"dateSearch\" type=\"date\" class=\"form-control\" placeholder=\"Arrivé\">
            </div>
            <button class=\"btn btn-info col-md-3 col-sm-6 mt-3\" type=\"submit\">Rechercher</button>
        </div>
    </form>
</div>
";
    }

    public function getTemplateName()
    {
        return "trip/search.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 6,  54 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "trip/search.html.twig", "/shared/httpd/Projet-Final/templates/trip/search.html.twig");
    }
}

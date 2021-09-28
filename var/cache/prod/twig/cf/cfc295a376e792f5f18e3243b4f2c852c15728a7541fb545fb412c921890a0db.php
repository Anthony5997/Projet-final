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

/* home/index.html.twig */
class __TwigTemplate_f4960d24e8442ea13a0c741652457dc142a2b57f1bce06a5a28d6a37210dcf40 extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "home/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Accueil";
    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "<style>
    .example-wrapper { margin: 1em auto; max-width: 800px; width: 95%; font: 18px/1.5 sans-serif; }
    .example-wrapper code { background: #F5F5F5; padding: 2px 6px; }
</style>
<div class=\"home\">
        <div class=\"container\">
        <div class=\"hero\">
            <div class=\"title\">Voyager</div>

            <div class=\"button\">
                Rechercher un trajet
            </div>
        </div>

        <div class=\"main\">
            <form action=\"";
        // line 21
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("trip_search");
        echo "\">
                <div class=\"form-row my-5\">
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
        <div class=\"main-about\">
            <div class=\"about-section\">
                <div class=\"inner-container\">
                    <h1>About Us</h1>
                    <p class=\"text\">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus velit ducimus, enim inventore earum, eligendi nostrum pariatur necessitatibus eius dicta a voluptates sit deleniti autem error eos totam nisi neque voluptates sit deleniti autem error eos totam nisi neque.
                    </p>
                    <div class=\"skills\">
                        
                    </div>
                </div>
            </div>
        </div>
</div>

";
    }

    public function getTemplateName()
    {
        return "home/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 21,  58 => 6,  54 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "home/index.html.twig", "/shared/httpd/Projet-Final/templates/home/index.html.twig");
    }
}

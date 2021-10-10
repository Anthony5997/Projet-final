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
class __TwigTemplate_93a4719728c36b2659256272a43424c23836accf747eb6edda27542d013f33dd extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "home/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Accueil";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<style>
    .example-wrapper { margin: 1em auto; max-width: 800px; width: 95%; font: 18px/1.5 sans-serif; }
    .example-wrapper code { background: #F5F5F5; padding: 2px 6px; }
</style>
<div class=\"home\">
       <div class=\"hero d-flex align-items-center justify-content-center border-bottom \">
            <div class=\"page-header text-center\">
                <h1 class=\"display-1 text-white fw-bold mb-0\">CarcarBla</h1>
                <h2 class=\"fw-light display-4 mt-0 mb-5\" id=\"header2\">Voyager, rencontrer, partager !</h2>

                <div class=\"main\">
                    <form action=\"";
        // line 17
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
                            <input name=\"dateSearch\" type=\"date\" class=\"form-control\" placeholder=\"DATE\">
                            </div>
                            <button class=\"btn home-search col-md-3 col-sm-6 mt-3\" type=\"submit\">Rechercher</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
<div class=\"container\">
    <div class=\"row\">
        <div class=\"col d-flex justify-content-center\">A
        
        </div>
        <div class=\"col d-flex justify-content-center \">B
        
        </div>
        <div class=\"col d-flex justify-content-center \">C
        
        </div>
    </div>
</div>

<div class=\"container\">
    <div class=\"row\">
        <div class=\"d-flex justify-content-center\">
            <h3>Notre Objectif</h3>
        
        </div>
    </div>
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
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

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
        return array (  101 => 17,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Accueil{% endblock %}

{% block body %}
<style>
    .example-wrapper { margin: 1em auto; max-width: 800px; width: 95%; font: 18px/1.5 sans-serif; }
    .example-wrapper code { background: #F5F5F5; padding: 2px 6px; }
</style>
<div class=\"home\">
       <div class=\"hero d-flex align-items-center justify-content-center border-bottom \">
            <div class=\"page-header text-center\">
                <h1 class=\"display-1 text-white fw-bold mb-0\">CarcarBla</h1>
                <h2 class=\"fw-light display-4 mt-0 mb-5\" id=\"header2\">Voyager, rencontrer, partager !</h2>

                <div class=\"main\">
                    <form action=\"{{path('trip_search')}}\">
                        <div class=\"form-row my-5\">
                            <div class=\"col-md-3 col-sm-6 mt-3\">
                            <input name=\"departureSearch\" type=\"text\" class=\"form-control\" placeholder=\"Départ\">
                            </div>
                            <div class=\"col-md-3 col-sm-6 mt-3\">
                            <input name=\"arrivalSearch\" type=\"text\" class=\"form-control\" placeholder=\"Arrivé\">
                            </div>
                            <div class=\"col-md-3 col-sm-6 mt-3\">
                            <input name=\"dateSearch\" type=\"date\" class=\"form-control\" placeholder=\"DATE\">
                            </div>
                            <button class=\"btn home-search col-md-3 col-sm-6 mt-3\" type=\"submit\">Rechercher</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
<div class=\"container\">
    <div class=\"row\">
        <div class=\"col d-flex justify-content-center\">A
        
        </div>
        <div class=\"col d-flex justify-content-center \">B
        
        </div>
        <div class=\"col d-flex justify-content-center \">C
        
        </div>
    </div>
</div>

<div class=\"container\">
    <div class=\"row\">
        <div class=\"d-flex justify-content-center\">
            <h3>Notre Objectif</h3>
        
        </div>
    </div>
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

{% endblock %}
", "home/index.html.twig", "/shared/httpd/Projet-Final/templates/home/index.html.twig");
    }
}

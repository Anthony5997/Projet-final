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

/* trip/_form.html.twig */
class __TwigTemplate_c3c6ee57a025454099d852a352554b1dc2a225b1c21f18bd3c6d3c341c05d838 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "trip/_form.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "trip/_form.html.twig"));

        // line 1
        echo " <section class=\"section-padding\">
    <div class=\"container\">
        ";
        // line 3
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 3, $this->source); })()), 'form_start');
        echo "
        <div class=\"row\">
            <div class=\"col-xs-12 col-sm-5 col-md-5\">
                <div class=\"form-group d-flex flex-column justify-content-center\">
                    <label for=\"departureInput\">Départ</label>
                        <input id=\"departureInput\" list=\"departureCityGuessData\" name=\"trip[departure]\" class=\"form-control\" />
                        <datalist id=\"departureCityGuessData\" name=\"dataDepart\">
                        </datalist>
                     <div class=\"col-xs-12 col-sm-12 col-md-12\" id=\"departure-list\">
                    </div>
                </div>
            </div>
            <div class=\"col-xs-12 col-sm-2 col-md-2\"></div>
            <div class=\"col-xs-12 col-sm-5 col-md-5\">
                <div class=\"form-group d-flex flex-column justify-content-center\">
                    <label for=\"arrivalInput\">Arrivé</label>
                    <input id=\"arrivalInput\" list=\"arrivalCityGuessData\" name=\"trip[arrival]\" class=\"form-control\" />
                    <datalist id=\"arrivalCityGuessData\">
                    </datalist>
                    <div class=\"col-xs-12 col-sm-12 col-md-12\" id=\"arrival-list\">
                    </div>
                </div>
            </div>
        </div>
     
            <div class=\"col-xs-12 col-sm-5 col-md-5\">
                <div class=\"form-group d-flex flex-column justify-content-center\">
                    ";
        // line 30
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 30, $this->source); })()), "date_of_trip", [], "any", false, false, false, 30), 'label', ["label" => "Date du trajet"]);
        echo "
                    ";
        // line 31
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 31, $this->source); })()), "date_of_trip", [], "any", false, false, false, 31), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                </div>
            </div>
            <div class=\"col-xs-12 col-sm-2 col-md-2\"></div>
            <div class=\"col-xs-12 col-sm-5 col-md-5\">
                <div class=\"form-group d-flex flex-column justify-content-center\">
                    ";
        // line 37
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 37, $this->source); })()), "startTime", [], "any", false, false, false, 37), 'label', ["label" => "heure de départ estimé"]);
        echo "
                    ";
        // line 38
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 38, $this->source); })()), "startTime", [], "any", false, false, false, 38), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                </div>
            </div>
             <div class=\"col-xs-12 col-sm-2 col-md-2\"></div>
            <div class=\"col-xs-12 col-sm-6 col-md-3\">
                <div class=\"form-group d-flex flex-column justify-content-center\">
                    ";
        // line 44
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 44, $this->source); })()), "passengers", [], "any", false, false, false, 44), 'label', ["label" => "Nombre de passager"]);
        echo "  
                    ";
        // line 45
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 45, $this->source); })()), "passengers", [], "any", false, false, false, 45), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                </div>
            </div>    
   
            <div class=\"row\">
                <div class=\"col-xs-12 col-sm-12 col-md-12 mb-4 mt-4 d-flex justify-content-center\">
                    <button  type='submit' class=\"col-md-6 button-update-profile\">Créé mon trajet</button>
                </div>
            </div>  
        </div>
        ";
        // line 55
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 55, $this->source); })()), 'form_end');
        echo "
    </div>
</section>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "trip/_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  120 => 55,  107 => 45,  103 => 44,  94 => 38,  90 => 37,  81 => 31,  77 => 30,  47 => 3,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source(" <section class=\"section-padding\">
    <div class=\"container\">
        {{form_start(form)}}
        <div class=\"row\">
            <div class=\"col-xs-12 col-sm-5 col-md-5\">
                <div class=\"form-group d-flex flex-column justify-content-center\">
                    <label for=\"departureInput\">Départ</label>
                        <input id=\"departureInput\" list=\"departureCityGuessData\" name=\"trip[departure]\" class=\"form-control\" />
                        <datalist id=\"departureCityGuessData\" name=\"dataDepart\">
                        </datalist>
                     <div class=\"col-xs-12 col-sm-12 col-md-12\" id=\"departure-list\">
                    </div>
                </div>
            </div>
            <div class=\"col-xs-12 col-sm-2 col-md-2\"></div>
            <div class=\"col-xs-12 col-sm-5 col-md-5\">
                <div class=\"form-group d-flex flex-column justify-content-center\">
                    <label for=\"arrivalInput\">Arrivé</label>
                    <input id=\"arrivalInput\" list=\"arrivalCityGuessData\" name=\"trip[arrival]\" class=\"form-control\" />
                    <datalist id=\"arrivalCityGuessData\">
                    </datalist>
                    <div class=\"col-xs-12 col-sm-12 col-md-12\" id=\"arrival-list\">
                    </div>
                </div>
            </div>
        </div>
     
            <div class=\"col-xs-12 col-sm-5 col-md-5\">
                <div class=\"form-group d-flex flex-column justify-content-center\">
                    {{ form_label(form.date_of_trip, 'Date du trajet') }}
                    {{ form_widget(form.date_of_trip,  { 'attr': {'class': 'form-control'} }) }}
                </div>
            </div>
            <div class=\"col-xs-12 col-sm-2 col-md-2\"></div>
            <div class=\"col-xs-12 col-sm-5 col-md-5\">
                <div class=\"form-group d-flex flex-column justify-content-center\">
                    {{ form_label(form.startTime, 'heure de départ estimé') }}
                    {{ form_widget(form.startTime,  { 'attr': {'class': 'form-control'} }) }}
                </div>
            </div>
             <div class=\"col-xs-12 col-sm-2 col-md-2\"></div>
            <div class=\"col-xs-12 col-sm-6 col-md-3\">
                <div class=\"form-group d-flex flex-column justify-content-center\">
                    {{ form_label(form.passengers, \"Nombre de passager\") }}  
                    {{ form_widget(form.passengers,  { 'attr': {'class': 'form-control'} }) }}
                </div>
            </div>    
   
            <div class=\"row\">
                <div class=\"col-xs-12 col-sm-12 col-md-12 mb-4 mt-4 d-flex justify-content-center\">
                    <button  type='submit' class=\"col-md-6 button-update-profile\">Créé mon trajet</button>
                </div>
            </div>  
        </div>
        {{form_end(form)}}
    </div>
</section>
", "trip/_form.html.twig", "/shared/httpd/Projet-Final/templates/trip/_form.html.twig");
    }
}

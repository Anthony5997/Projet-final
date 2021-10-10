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
        ";
        // line 39
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
        // line 68
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 68, $this->source); })()), "date_of_trip", [], "any", false, false, false, 68), 'label', ["label" => "Date du trajet"]);
        echo "
                    ";
        // line 69
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 69, $this->source); })()), "date_of_trip", [], "any", false, false, false, 69), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                </div>
            </div>
            <div class=\"col-xs-12 col-sm-2 col-md-2\"></div>
            <div class=\"col-xs-12 col-sm-5 col-md-5\">
                <div class=\"form-group d-flex flex-column justify-content-center\">
                    ";
        // line 75
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 75, $this->source); })()), "startTime", [], "any", false, false, false, 75), 'label', ["label" => "heure de départ estimé"]);
        echo "
                    ";
        // line 76
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 76, $this->source); })()), "startTime", [], "any", false, false, false, 76), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                </div>
            </div>
             <div class=\"col-xs-12 col-sm-2 col-md-2\"></div>
            <div class=\"col-xs-12 col-sm-6 col-md-3\">
                <div class=\"form-group d-flex flex-column justify-content-center\">
                    ";
        // line 82
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 82, $this->source); })()), "passengers", [], "any", false, false, false, 82), 'label', ["label" => "Nombre de passager"]);
        echo "  
                    ";
        // line 83
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 83, $this->source); })()), "passengers", [], "any", false, false, false, 83), 'widget', ["attr" => ["class" => "form-control"]]);
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
        // line 93
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 93, $this->source); })()), 'form_end');
        echo "
    </div>
</section>


";
        // line 135
        echo "

";
        // line 138
        echo "
";
        // line 222
        echo "
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
        return array (  140 => 222,  137 => 138,  133 => 135,  125 => 93,  112 => 83,  108 => 82,  99 => 76,  95 => 75,  86 => 69,  82 => 68,  51 => 39,  47 => 3,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source(" <section class=\"section-padding\">
    <div class=\"container\">
        {{form_start(form)}} 
        {# {{form_start(form, {'attr': {'id': 'msform'}})}} #}
{# 
          <!-- progressbar -->
        <ul id=\"progressbar\">
            <li class=\"active\">Départ</li>
            <li>Arrivé </li>
            <li>Date et heure</li>
        </ul>
        <!-- fieldsets -->
        <fieldset>
            <h2 class=\"fs-title\">Choisissez votre départ</h2>
            <input id=\"departureInput\" list=\"departureCityGuessData\" name=\"trip[departure]\" class=\"form-control\" />
            <datalist id=\"departureCityGuessData\" name=\"dataDepart\">
            </datalist>
            <input type=\"button\" name=\"next\" class=\"next action-button\" value=\"Next\" />
        </fieldset>
        <fieldset>
            <h2 class=\"fs-title\">Choisissez votre arrivé</h2>
                    <input id=\"arrivalInput\" list=\"arrivalCityGuessData\" name=\"trip[arrival]\" class=\"form-control\" />
                    <datalist id=\"arrivalCityGuessData\">
                    </datalist>
            <input type=\"button\" name=\"previous\" class=\"previous action-button\" value=\"Previous\" />
            <input type=\"button\" name=\"next\" class=\"next action-button\" value=\"Next\" />
        </fieldset>
        <fieldset>
            <h2 class=\"fs-title\">Date</h2>
                    {{ form_label(form.date_of_trip, 'Date du trajet') }}
                    {{ form_widget(form.date_of_trip,  { 'attr': {'class': 'form-control'} }) }}
                {{ form_label(form.startTime, 'heure de départ estimé') }}
                {{ form_widget(form.startTime,  { 'attr': {'class': 'form-control'} }) }}
                    {{ form_label(form.passengers, \"Nombre de passager\") }}  
                    {{ form_widget(form.passengers,  { 'attr': {'class': 'form-control'} }) }}
            <input type=\"button\" name=\"previous\" class=\"previous action-button\" value=\"Previous\" />
            <input type=\"submit\" name=\"submit\" class=\"submit action-button\" value=\"Submit\" />
        </fieldset> #}



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


{# <!-- multistep form -->
<form id=\"msform\">
  <!-- progressbar -->
  <ul id=\"progressbar\">
    <li class=\"active\">Account Setup</li>
    <li>Social Profiles</li>
    <li>Personal Details</li>
  </ul>
  <!-- fieldsets -->
  <fieldset>
    <h2 class=\"fs-title\">Create your account</h2>
    <h3 class=\"fs-subtitle\">This is step 1</h3>
    <input type=\"text\" name=\"email\" placeholder=\"Email\" />
    <input type=\"password\" name=\"pass\" placeholder=\"Password\" />
    <input type=\"password\" name=\"cpass\" placeholder=\"Confirm Password\" />
    <input type=\"button\" name=\"next\" class=\"next action-button\" value=\"Next\" />
  </fieldset>
  <fieldset>
    <h2 class=\"fs-title\">Social Profiles</h2>
    <h3 class=\"fs-subtitle\">Your presence on the social network</h3>
    <input type=\"text\" name=\"twitter\" placeholder=\"Twitter\" />
    <input type=\"text\" name=\"facebook\" placeholder=\"Facebook\" />
    <input type=\"text\" name=\"gplus\" placeholder=\"Google Plus\" />
    <input type=\"button\" name=\"previous\" class=\"previous action-button\" value=\"Previous\" />
    <input type=\"button\" name=\"next\" class=\"next action-button\" value=\"Next\" />
  </fieldset>
  <fieldset>
    <h2 class=\"fs-title\">Personal Details</h2>
    <h3 class=\"fs-subtitle\">We will never sell it</h3>
    <input type=\"text\" name=\"fname\" placeholder=\"First Name\" />
    <input type=\"text\" name=\"lname\" placeholder=\"Last Name\" />
    <input type=\"text\" name=\"phone\" placeholder=\"Phone\" />
    <textarea name=\"address\" placeholder=\"Address\"></textarea>
    <input type=\"button\" name=\"previous\" class=\"previous action-button\" value=\"Previous\" />
    <input type=\"submit\" name=\"submit\" class=\"submit action-button\" value=\"Submit\" />
  </fieldset>
</form> #}


{# SCRIPT JQUERY #}

{# <script>
    //jQuery time
    var current_fs, next_fs, previous_fs; //fieldsets
    var left, opacity, scale; //fieldset properties which we will animate
    var animating; //flag to prevent quick multi-click glitches

    \$(\".next\").click(function(){
        if(animating) return false;
        animating = true;
        
        current_fs = \$(this).parent();
        next_fs = \$(this).parent().next();
        
        //activate next step on progressbar using the index of next_fs
        \$(\"#progressbar li\").eq(\$(\"fieldset\").index(next_fs)).addClass(\"active\");
        
        //show the next fieldset
        next_fs.show(); 
        //hide the current fieldset with style
        current_fs.animate({opacity: 0}, {
            step: function(now, mx) {
                //as the opacity of current_fs reduces to 0 - stored in \"now\"
                //1. scale current_fs down to 80%
                scale = 1 - (1 - now) * 0.2;
                //2. bring next_fs from the right(50%)
                left = (now * 50)+\"%\";
                //3. increase opacity of next_fs to 1 as it moves in
                opacity = 1 - now;
                current_fs.css({
            'transform': 'scale('+scale+')',
            'position': 'absolute'
        });
                next_fs.css({'left': left, 'opacity': opacity});
            }, 
            duration: 800, 
            complete: function(){
                current_fs.hide();
                animating = false;
            }, 
            //this comes from the custom easing plugin
            easing: 'easeInOutBack'
        });
    });

    \$(\".previous\").click(function(){
        if(animating) return false;
        animating = true;
        
        current_fs = \$(this).parent();
        previous_fs = \$(this).parent().prev();
        
        //de-activate current step on progressbar
        \$(\"#progressbar li\").eq(\$(\"fieldset\").index(current_fs)).removeClass(\"active\");
        
        //show the previous fieldset
        previous_fs.show(); 
        //hide the current fieldset with style
        current_fs.animate({opacity: 0}, {
            step: function(now, mx) {
                //as the opacity of current_fs reduces to 0 - stored in \"now\"
                //1. scale previous_fs from 80% to 100%
                scale = 0.8 + (1 - now) * 0.2;
                //2. take current_fs to the right(50%) - from 0%
                left = ((1-now) * 50)+\"%\";
                //3. increase opacity of previous_fs to 1 as it moves in
                opacity = 1 - now;
                current_fs.css({'left': left});
                previous_fs.css({'transform': 'scale('+scale+')', 'opacity': opacity});
            }, 
            duration: 800, 
            complete: function(){
                current_fs.hide();
                animating = false;
            }, 
            //this comes from the custom easing plugin
            easing: 'easeInOutBack'
        });
    });

    \$(\".submit\").click(function(){
        return false;
    })
</script> #}

", "trip/_form.html.twig", "/shared/httpd/Projet-Final/templates/trip/_form.html.twig");
    }
}

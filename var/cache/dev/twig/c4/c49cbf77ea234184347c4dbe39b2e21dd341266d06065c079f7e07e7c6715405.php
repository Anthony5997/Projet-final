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

/* travel_preferences/_form.html.twig */
class __TwigTemplate_13636a7fb029de0233df1a9764891f00810b3bb0acf8b7407cac69bd5b701865 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "travel_preferences/_form.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "travel_preferences/_form.html.twig"));

        // line 1
        echo " <section class=\"section-padding\">
            
                           <div class=\"row justify-content-center \">
                    <div class=\"col-10 d-flex form-info\">
                      ";
        // line 5
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["userPref"]) || array_key_exists("userPref", $context) ? $context["userPref"] : (function () { throw new RuntimeError('Variable "userPref" does not exist.', 5, $this->source); })()), 'form_start');
        echo "
                      
                                <div class=\"d-flex custom-input-div\">
                                    <i class=\"far fa-comments d-flex align-items-center mb-2\"></i>
                                    ";
        // line 9
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["userPref"]) || array_key_exists("userPref", $context) ? $context["userPref"] : (function () { throw new RuntimeError('Variable "userPref" does not exist.', 9, $this->source); })()), "discussion", [], "any", false, false, false, 9), 'label', ["label" => "Discussion"]);
        echo "
                                </div> 
                                    ";
        // line 11
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["userPref"]) || array_key_exists("userPref", $context) ? $context["userPref"] : (function () { throw new RuntimeError('Variable "userPref" does not exist.', 11, $this->source); })()), "discussion", [], "any", false, false, false, 11), 'widget', ["attr" => ["class" => "custom-field-form"]]);
        echo "
                                <div class='red-text'>";
        // line 12
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["userPref"]) || array_key_exists("userPref", $context) ? $context["userPref"] : (function () { throw new RuntimeError('Variable "userPref" does not exist.', 12, $this->source); })()), "discussion", [], "any", false, false, false, 12), 'errors');
        echo "</div>
                                <div class=\"d-flex custom-input-div\">
                                    <i class=\"fas fa-music d-flex align-items-center mb-2\"></i>
                                    ";
        // line 15
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["userPref"]) || array_key_exists("userPref", $context) ? $context["userPref"] : (function () { throw new RuntimeError('Variable "userPref" does not exist.', 15, $this->source); })()), "music", [], "any", false, false, false, 15), 'label', ["label" => "Musique"]);
        echo "
                                </div>
                                    ";
        // line 17
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["userPref"]) || array_key_exists("userPref", $context) ? $context["userPref"] : (function () { throw new RuntimeError('Variable "userPref" does not exist.', 17, $this->source); })()), "music", [], "any", false, false, false, 17), 'widget', ["attr" => ["class" => "custom-field-form"]]);
        echo "
                                <div class='red-text'>";
        // line 18
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["userPref"]) || array_key_exists("userPref", $context) ? $context["userPref"] : (function () { throw new RuntimeError('Variable "userPref" does not exist.', 18, $this->source); })()), "music", [], "any", false, false, false, 18), 'errors');
        echo "</div>
                                <div class=\"d-flex custom-input-div\">
                                    <i class=\"fas fa-smoking d-flex align-items-center mb-2\"></i>
                                    ";
        // line 21
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["userPref"]) || array_key_exists("userPref", $context) ? $context["userPref"] : (function () { throw new RuntimeError('Variable "userPref" does not exist.', 21, $this->source); })()), "smoking", [], "any", false, false, false, 21), 'label', ["label" => "Fumeur"]);
        echo " 
                                </div> 
                                    ";
        // line 23
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["userPref"]) || array_key_exists("userPref", $context) ? $context["userPref"] : (function () { throw new RuntimeError('Variable "userPref" does not exist.', 23, $this->source); })()), "smoking", [], "any", false, false, false, 23), 'widget', ["attr" => ["class" => "custom-field-form"]]);
        echo "
                                <div class='red-text'>";
        // line 24
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["userPref"]) || array_key_exists("userPref", $context) ? $context["userPref"] : (function () { throw new RuntimeError('Variable "userPref" does not exist.', 24, $this->source); })()), "smoking", [], "any", false, false, false, 24), 'errors');
        echo "</div>
                                 <div class=\"d-flex custom-input-div\">
                                    <i class=\"fas fa-paw d-flex align-items-center mb-2\"></i>
                                    ";
        // line 27
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["userPref"]) || array_key_exists("userPref", $context) ? $context["userPref"] : (function () { throw new RuntimeError('Variable "userPref" does not exist.', 27, $this->source); })()), "animals", [], "any", false, false, false, 27), 'label', ["label" => "Animaux"]);
        echo " 
                                </div> 
                                    ";
        // line 29
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["userPref"]) || array_key_exists("userPref", $context) ? $context["userPref"] : (function () { throw new RuntimeError('Variable "userPref" does not exist.', 29, $this->source); })()), "animals", [], "any", false, false, false, 29), 'widget', ["attr" => ["class" => "custom-field-form"]]);
        echo "
                                <div class='red-text'>";
        // line 30
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["userPref"]) || array_key_exists("userPref", $context) ? $context["userPref"] : (function () { throw new RuntimeError('Variable "userPref" does not exist.', 30, $this->source); })()), "animals", [], "any", false, false, false, 30), 'errors');
        echo "</div>
                                 <div class=\"d-flex custom-input-div\">
                                    <i class=\"fas fa-file-medical d-flex align-items-center mb-2\"></i>
                                    ";
        // line 33
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["userPref"]) || array_key_exists("userPref", $context) ? $context["userPref"] : (function () { throw new RuntimeError('Variable "userPref" does not exist.', 33, $this->source); })()), "health_pass", [], "any", false, false, false, 33), 'label', ["label" => "Pass Sanitaire"]);
        echo " 
                                </div> 
                                    ";
        // line 35
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["userPref"]) || array_key_exists("userPref", $context) ? $context["userPref"] : (function () { throw new RuntimeError('Variable "userPref" does not exist.', 35, $this->source); })()), "health_pass", [], "any", false, false, false, 35), 'widget', ["attr" => ["class" => "custom-field-form"]]);
        echo "
                                <div class='red-text'>";
        // line 36
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["userPref"]) || array_key_exists("userPref", $context) ? $context["userPref"] : (function () { throw new RuntimeError('Variable "userPref" does not exist.', 36, $this->source); })()), "health_pass", [], "any", false, false, false, 36), 'errors');
        echo "</div>
                                <div class=\"col-xs-12 col-sm-12 col-md-12 mb-4 d-flex justify-content-center mt-3\">
                                    <button  type='submit' class=\"col-md-10 button-update-profile\">Sauvegarder mes préférences</button>
                                </div>
                        ";
        // line 40
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["userPref"]) || array_key_exists("userPref", $context) ? $context["userPref"] : (function () { throw new RuntimeError('Variable "userPref" does not exist.', 40, $this->source); })()), 'form_end');
        echo "
                            </div>
                    </div>

            </section> ";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "travel_preferences/_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  132 => 40,  125 => 36,  121 => 35,  116 => 33,  110 => 30,  106 => 29,  101 => 27,  95 => 24,  91 => 23,  86 => 21,  80 => 18,  76 => 17,  71 => 15,  65 => 12,  61 => 11,  56 => 9,  49 => 5,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source(" <section class=\"section-padding\">
            
                           <div class=\"row justify-content-center \">
                    <div class=\"col-10 d-flex form-info\">
                      {{ form_start(userPref) }}
                      
                                <div class=\"d-flex custom-input-div\">
                                    <i class=\"far fa-comments d-flex align-items-center mb-2\"></i>
                                    {{ form_label(userPref.discussion, 'Discussion') }}
                                </div> 
                                    {{ form_widget(userPref.discussion, {'attr': {'class': 'custom-field-form'}}) }}
                                <div class='red-text'>{{ form_errors(userPref.discussion)}}</div>
                                <div class=\"d-flex custom-input-div\">
                                    <i class=\"fas fa-music d-flex align-items-center mb-2\"></i>
                                    {{ form_label(userPref.music, 'Musique') }}
                                </div>
                                    {{ form_widget(userPref.music, {'attr': {'class': 'custom-field-form'}}) }}
                                <div class='red-text'>{{ form_errors(userPref.music)}}</div>
                                <div class=\"d-flex custom-input-div\">
                                    <i class=\"fas fa-smoking d-flex align-items-center mb-2\"></i>
                                    {{ form_label(userPref.smoking,'Fumeur') }} 
                                </div> 
                                    {{ form_widget(userPref.smoking, {'attr': {'class': 'custom-field-form'}}) }}
                                <div class='red-text'>{{ form_errors(userPref.smoking)}}</div>
                                 <div class=\"d-flex custom-input-div\">
                                    <i class=\"fas fa-paw d-flex align-items-center mb-2\"></i>
                                    {{ form_label(userPref.animals,'Animaux') }} 
                                </div> 
                                    {{ form_widget(userPref.animals, {'attr': {'class': 'custom-field-form'}}) }}
                                <div class='red-text'>{{ form_errors(userPref.animals)}}</div>
                                 <div class=\"d-flex custom-input-div\">
                                    <i class=\"fas fa-file-medical d-flex align-items-center mb-2\"></i>
                                    {{ form_label(userPref.health_pass,'Pass Sanitaire') }} 
                                </div> 
                                    {{ form_widget(userPref.health_pass, {'attr': {'class': 'custom-field-form'}}) }}
                                <div class='red-text'>{{ form_errors(userPref.health_pass)}}</div>
                                <div class=\"col-xs-12 col-sm-12 col-md-12 mb-4 d-flex justify-content-center mt-3\">
                                    <button  type='submit' class=\"col-md-10 button-update-profile\">Sauvegarder mes préférences</button>
                                </div>
                        {{ form_end(userPref) }}
                            </div>
                    </div>

            </section> ", "travel_preferences/_form.html.twig", "/shared/httpd/Projet-Final/templates/travel_preferences/_form.html.twig");
    }
}

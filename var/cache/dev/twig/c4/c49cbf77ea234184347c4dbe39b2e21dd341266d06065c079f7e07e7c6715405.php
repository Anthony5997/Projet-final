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
                <div class=\"container\">  
                  <div class=\"row justify-content-center\">
                      ";
        // line 4
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["userPref"]) || array_key_exists("userPref", $context) ? $context["userPref"] : (function () { throw new RuntimeError('Variable "userPref" does not exist.', 4, $this->source); })()), 'form_start');
        echo "
                      <div class=\"col-xs-12 col-sm-8 col-md-8 form-info mx-auto py-4\">
                                <div class=\"d-flex custom-input-div\">
                                    <i class=\"far fa-comments d-flex align-items-center mb-2\"></i>
                                    ";
        // line 8
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["userPref"]) || array_key_exists("userPref", $context) ? $context["userPref"] : (function () { throw new RuntimeError('Variable "userPref" does not exist.', 8, $this->source); })()), "discussion", [], "any", false, false, false, 8), 'label', ["label" => "Discussion"]);
        echo "
                                </div> 
                                    ";
        // line 10
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["userPref"]) || array_key_exists("userPref", $context) ? $context["userPref"] : (function () { throw new RuntimeError('Variable "userPref" does not exist.', 10, $this->source); })()), "discussion", [], "any", false, false, false, 10), 'widget', ["attr" => ["class" => "custom-field-form"]]);
        echo "
                                <div class='red-text'>";
        // line 11
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["userPref"]) || array_key_exists("userPref", $context) ? $context["userPref"] : (function () { throw new RuntimeError('Variable "userPref" does not exist.', 11, $this->source); })()), "discussion", [], "any", false, false, false, 11), 'errors');
        echo "</div>
                                <div class=\"d-flex custom-input-div\">
                                    <i class=\"fas fa-music d-flex align-items-center mb-2\"></i>
                                    ";
        // line 14
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["userPref"]) || array_key_exists("userPref", $context) ? $context["userPref"] : (function () { throw new RuntimeError('Variable "userPref" does not exist.', 14, $this->source); })()), "music", [], "any", false, false, false, 14), 'label', ["label" => "Musique"]);
        echo "
                                </div>
                                    ";
        // line 16
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["userPref"]) || array_key_exists("userPref", $context) ? $context["userPref"] : (function () { throw new RuntimeError('Variable "userPref" does not exist.', 16, $this->source); })()), "music", [], "any", false, false, false, 16), 'widget', ["attr" => ["class" => "custom-field-form"]]);
        echo "
                                <div class='red-text'>";
        // line 17
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["userPref"]) || array_key_exists("userPref", $context) ? $context["userPref"] : (function () { throw new RuntimeError('Variable "userPref" does not exist.', 17, $this->source); })()), "music", [], "any", false, false, false, 17), 'errors');
        echo "</div>
                                <div class=\"d-flex custom-input-div\">
                                    <i class=\"fas fa-smoking d-flex align-items-center mb-2\"></i>
                                    ";
        // line 20
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["userPref"]) || array_key_exists("userPref", $context) ? $context["userPref"] : (function () { throw new RuntimeError('Variable "userPref" does not exist.', 20, $this->source); })()), "smoking", [], "any", false, false, false, 20), 'label', ["label" => "Fumeur"]);
        echo " 
                                </div> 
                                    ";
        // line 22
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["userPref"]) || array_key_exists("userPref", $context) ? $context["userPref"] : (function () { throw new RuntimeError('Variable "userPref" does not exist.', 22, $this->source); })()), "smoking", [], "any", false, false, false, 22), 'widget', ["attr" => ["class" => "custom-field-form"]]);
        echo "
                                <div class='red-text'>";
        // line 23
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["userPref"]) || array_key_exists("userPref", $context) ? $context["userPref"] : (function () { throw new RuntimeError('Variable "userPref" does not exist.', 23, $this->source); })()), "smoking", [], "any", false, false, false, 23), 'errors');
        echo "</div>
                                 <div class=\"d-flex custom-input-div\">
                                    <i class=\"fas fa-paw d-flex align-items-center mb-2\"></i>
                                    ";
        // line 26
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["userPref"]) || array_key_exists("userPref", $context) ? $context["userPref"] : (function () { throw new RuntimeError('Variable "userPref" does not exist.', 26, $this->source); })()), "animals", [], "any", false, false, false, 26), 'label', ["label" => "Animaux"]);
        echo " 
                                </div> 
                                    ";
        // line 28
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["userPref"]) || array_key_exists("userPref", $context) ? $context["userPref"] : (function () { throw new RuntimeError('Variable "userPref" does not exist.', 28, $this->source); })()), "animals", [], "any", false, false, false, 28), 'widget', ["attr" => ["class" => "custom-field-form"]]);
        echo "
                                <div class='red-text'>";
        // line 29
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["userPref"]) || array_key_exists("userPref", $context) ? $context["userPref"] : (function () { throw new RuntimeError('Variable "userPref" does not exist.', 29, $this->source); })()), "animals", [], "any", false, false, false, 29), 'errors');
        echo "</div>
                                 <div class=\"d-flex custom-input-div\">
                                    <i class=\"fas fa-file-medical d-flex align-items-center mb-2\"></i>
                                    ";
        // line 32
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["userPref"]) || array_key_exists("userPref", $context) ? $context["userPref"] : (function () { throw new RuntimeError('Variable "userPref" does not exist.', 32, $this->source); })()), "health_pass", [], "any", false, false, false, 32), 'label', ["label" => "Pass Sanitaire"]);
        echo " 
                                </div> 
                                    ";
        // line 34
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["userPref"]) || array_key_exists("userPref", $context) ? $context["userPref"] : (function () { throw new RuntimeError('Variable "userPref" does not exist.', 34, $this->source); })()), "health_pass", [], "any", false, false, false, 34), 'widget', ["attr" => ["class" => "custom-field-form"]]);
        echo "
                                <div class='red-text'>";
        // line 35
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["userPref"]) || array_key_exists("userPref", $context) ? $context["userPref"] : (function () { throw new RuntimeError('Variable "userPref" does not exist.', 35, $this->source); })()), "health_pass", [], "any", false, false, false, 35), 'errors');
        echo "</div>
                                <div class=\"col-xs-12 col-sm-12 col-md-12 mb-4 d-flex justify-content-center mt-3\">
                                    <button  type='submit' class=\"col-md-10 button-update-profile\">Sauvegarder mes préférences</button>
                                </div>
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
        return array (  132 => 40,  124 => 35,  120 => 34,  115 => 32,  109 => 29,  105 => 28,  100 => 26,  94 => 23,  90 => 22,  85 => 20,  79 => 17,  75 => 16,  70 => 14,  64 => 11,  60 => 10,  55 => 8,  48 => 4,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source(" <section class=\"section-padding\">
                <div class=\"container\">  
                  <div class=\"row justify-content-center\">
                      {{ form_start(userPref) }}
                      <div class=\"col-xs-12 col-sm-8 col-md-8 form-info mx-auto py-4\">
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
                            </div>
                        {{ form_end(userPref) }}
                    </div>
                </div>
            </section> ", "travel_preferences/_form.html.twig", "/shared/httpd/Projet-Final/templates/travel_preferences/_form.html.twig");
    }
}

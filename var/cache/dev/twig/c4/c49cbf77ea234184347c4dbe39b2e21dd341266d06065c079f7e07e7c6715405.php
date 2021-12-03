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
                      <div class=\"col-xs-12 col-sm-6 col-md-6\">
                                <div class=\"form-group\">
                                    ";
        // line 7
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["userPref"]) || array_key_exists("userPref", $context) ? $context["userPref"] : (function () { throw new RuntimeError('Variable "userPref" does not exist.', 7, $this->source); })()), "discussion", [], "any", false, false, false, 7), 'label', ["label" => "Discussion"]);
        echo "
                                    ";
        // line 8
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["userPref"]) || array_key_exists("userPref", $context) ? $context["userPref"] : (function () { throw new RuntimeError('Variable "userPref" does not exist.', 8, $this->source); })()), "discussion", [], "any", false, false, false, 8), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                                </div> 
                                <div class='red-text'>";
        // line 10
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["userPref"]) || array_key_exists("userPref", $context) ? $context["userPref"] : (function () { throw new RuntimeError('Variable "userPref" does not exist.', 10, $this->source); })()), "discussion", [], "any", false, false, false, 10), 'errors');
        echo "</div>
                                <div class=\"form-group\">
                                    ";
        // line 12
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["userPref"]) || array_key_exists("userPref", $context) ? $context["userPref"] : (function () { throw new RuntimeError('Variable "userPref" does not exist.', 12, $this->source); })()), "music", [], "any", false, false, false, 12), 'label', ["label" => "Musique"]);
        echo "
                                    ";
        // line 13
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["userPref"]) || array_key_exists("userPref", $context) ? $context["userPref"] : (function () { throw new RuntimeError('Variable "userPref" does not exist.', 13, $this->source); })()), "music", [], "any", false, false, false, 13), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                                </div>
                                <div class='red-text'>";
        // line 15
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["userPref"]) || array_key_exists("userPref", $context) ? $context["userPref"] : (function () { throw new RuntimeError('Variable "userPref" does not exist.', 15, $this->source); })()), "music", [], "any", false, false, false, 15), 'errors');
        echo "</div>
                                <div class=\"form-group\">
                                    ";
        // line 17
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["userPref"]) || array_key_exists("userPref", $context) ? $context["userPref"] : (function () { throw new RuntimeError('Variable "userPref" does not exist.', 17, $this->source); })()), "smoking", [], "any", false, false, false, 17), 'label', ["label" => "Fumeur"]);
        echo " 
                                    ";
        // line 18
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["userPref"]) || array_key_exists("userPref", $context) ? $context["userPref"] : (function () { throw new RuntimeError('Variable "userPref" does not exist.', 18, $this->source); })()), "smoking", [], "any", false, false, false, 18), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                                </div> 
                                <div class='red-text'>";
        // line 20
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["userPref"]) || array_key_exists("userPref", $context) ? $context["userPref"] : (function () { throw new RuntimeError('Variable "userPref" does not exist.', 20, $this->source); })()), "smoking", [], "any", false, false, false, 20), 'errors');
        echo "</div>
                                 <div class=\"form-group\">
                                    ";
        // line 22
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["userPref"]) || array_key_exists("userPref", $context) ? $context["userPref"] : (function () { throw new RuntimeError('Variable "userPref" does not exist.', 22, $this->source); })()), "animals", [], "any", false, false, false, 22), 'label', ["label" => "Animaux"]);
        echo " 
                                    ";
        // line 23
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["userPref"]) || array_key_exists("userPref", $context) ? $context["userPref"] : (function () { throw new RuntimeError('Variable "userPref" does not exist.', 23, $this->source); })()), "animals", [], "any", false, false, false, 23), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                                </div> 
                                <div class='red-text'>";
        // line 25
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["userPref"]) || array_key_exists("userPref", $context) ? $context["userPref"] : (function () { throw new RuntimeError('Variable "userPref" does not exist.', 25, $this->source); })()), "animals", [], "any", false, false, false, 25), 'errors');
        echo "</div>
                                 <div class=\"form-group\">
                                    ";
        // line 27
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["userPref"]) || array_key_exists("userPref", $context) ? $context["userPref"] : (function () { throw new RuntimeError('Variable "userPref" does not exist.', 27, $this->source); })()), "health_pass", [], "any", false, false, false, 27), 'label', ["label" => "Pass Sanitaire"]);
        echo " 
                                    ";
        // line 28
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["userPref"]) || array_key_exists("userPref", $context) ? $context["userPref"] : (function () { throw new RuntimeError('Variable "userPref" does not exist.', 28, $this->source); })()), "health_pass", [], "any", false, false, false, 28), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                                </div> 
                                <div class='red-text'>";
        // line 30
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["userPref"]) || array_key_exists("userPref", $context) ? $context["userPref"] : (function () { throw new RuntimeError('Variable "userPref" does not exist.', 30, $this->source); })()), "health_pass", [], "any", false, false, false, 30), 'errors');
        echo "</div>
                            </div>
                             <div class=\"col-xs-12 col-sm-12 col-md-12 mb-4 d-flex justify-content-center\">
                                <button  type='submit' class=\"col-md-6 button-update-profile\">Sauvegarder mes préférences</button>
                            </div>
                        ";
        // line 35
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["userPref"]) || array_key_exists("userPref", $context) ? $context["userPref"] : (function () { throw new RuntimeError('Variable "userPref" does not exist.', 35, $this->source); })()), 'form_end');
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
        return array (  127 => 35,  119 => 30,  114 => 28,  110 => 27,  105 => 25,  100 => 23,  96 => 22,  91 => 20,  86 => 18,  82 => 17,  77 => 15,  72 => 13,  68 => 12,  63 => 10,  58 => 8,  54 => 7,  48 => 4,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source(" <section class=\"section-padding\">
                <div class=\"container\">  
                  <div class=\"row justify-content-center\">
                      {{ form_start(userPref) }}
                      <div class=\"col-xs-12 col-sm-6 col-md-6\">
                                <div class=\"form-group\">
                                    {{ form_label(userPref.discussion, 'Discussion') }}
                                    {{ form_widget(userPref.discussion, {'attr': {'class': 'form-control'}}) }}
                                </div> 
                                <div class='red-text'>{{ form_errors(userPref.discussion)}}</div>
                                <div class=\"form-group\">
                                    {{ form_label(userPref.music, 'Musique') }}
                                    {{ form_widget(userPref.music, {'attr': {'class': 'form-control'}}) }}
                                </div>
                                <div class='red-text'>{{ form_errors(userPref.music)}}</div>
                                <div class=\"form-group\">
                                    {{ form_label(userPref.smoking,'Fumeur') }} 
                                    {{ form_widget(userPref.smoking, {'attr': {'class': 'form-control'}}) }}
                                </div> 
                                <div class='red-text'>{{ form_errors(userPref.smoking)}}</div>
                                 <div class=\"form-group\">
                                    {{ form_label(userPref.animals,'Animaux') }} 
                                    {{ form_widget(userPref.animals, {'attr': {'class': 'form-control'}}) }}
                                </div> 
                                <div class='red-text'>{{ form_errors(userPref.animals)}}</div>
                                 <div class=\"form-group\">
                                    {{ form_label(userPref.health_pass,'Pass Sanitaire') }} 
                                    {{ form_widget(userPref.health_pass, {'attr': {'class': 'form-control'}}) }}
                                </div> 
                                <div class='red-text'>{{ form_errors(userPref.health_pass)}}</div>
                            </div>
                             <div class=\"col-xs-12 col-sm-12 col-md-12 mb-4 d-flex justify-content-center\">
                                <button  type='submit' class=\"col-md-6 button-update-profile\">Sauvegarder mes préférences</button>
                            </div>
                        {{ form_end(userPref) }}
                    </div>
                </div>
            </section> ", "travel_preferences/_form.html.twig", "/shared/httpd/Projet-Final/templates/travel_preferences/_form.html.twig");
    }
}

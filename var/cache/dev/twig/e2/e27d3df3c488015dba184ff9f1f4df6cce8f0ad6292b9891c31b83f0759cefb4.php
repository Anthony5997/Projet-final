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

/* vehicule/_form.html.twig */
class __TwigTemplate_35d2c1671031fcae1aab9081e27c6080cede350d722801aa9a8fe0e4a390867a extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vehicule/_form.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vehicule/_form.html.twig"));

        // line 1
        echo " <section class=\"section-padding\">
              
                          <div class=\"row justify-content-center \">
                    <div class=\"col-10 d-flex form-info\">
                      ";
        // line 5
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["vehicule"]) || array_key_exists("vehicule", $context) ? $context["vehicule"] : (function () { throw new RuntimeError('Variable "vehicule" does not exist.', 5, $this->source); })()), 'form_start');
        echo "
                    
                                <div class=\"custom-input-div\">
                                    ";
        // line 8
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["vehicule"]) || array_key_exists("vehicule", $context) ? $context["vehicule"] : (function () { throw new RuntimeError('Variable "vehicule" does not exist.', 8, $this->source); })()), "country_of_registration", [], "any", false, false, false, 8), 'label', ["label" => "Pays d'immatriculation"]);
        echo "
                                    ";
        // line 9
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["vehicule"]) || array_key_exists("vehicule", $context) ? $context["vehicule"] : (function () { throw new RuntimeError('Variable "vehicule" does not exist.', 9, $this->source); })()), "country_of_registration", [], "any", false, false, false, 9), 'widget', ["attr" => ["class" => "custom-field-form"]]);
        echo "
                                </div> 
                                <div class='red-text'>";
        // line 11
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["vehicule"]) || array_key_exists("vehicule", $context) ? $context["vehicule"] : (function () { throw new RuntimeError('Variable "vehicule" does not exist.', 11, $this->source); })()), "country_of_registration", [], "any", false, false, false, 11), 'errors');
        echo "</div>
                                <div class=\"custom-input-div\">
                                    ";
        // line 13
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["vehicule"]) || array_key_exists("vehicule", $context) ? $context["vehicule"] : (function () { throw new RuntimeError('Variable "vehicule" does not exist.', 13, $this->source); })()), "numberplate", [], "any", false, false, false, 13), 'label', ["label" => "Plaque d'immatriculation"]);
        echo "
                                    ";
        // line 14
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["vehicule"]) || array_key_exists("vehicule", $context) ? $context["vehicule"] : (function () { throw new RuntimeError('Variable "vehicule" does not exist.', 14, $this->source); })()), "numberplate", [], "any", false, false, false, 14), 'widget', ["attr" => ["class" => "custom-field-form"]]);
        echo "
                                </div>
                                <div class='red-text'>";
        // line 16
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["vehicule"]) || array_key_exists("vehicule", $context) ? $context["vehicule"] : (function () { throw new RuntimeError('Variable "vehicule" does not exist.', 16, $this->source); })()), "numberplate", [], "any", false, false, false, 16), 'errors');
        echo "</div>
                                <div class=\"custom-input-div\">
                                    ";
        // line 18
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["vehicule"]) || array_key_exists("vehicule", $context) ? $context["vehicule"] : (function () { throw new RuntimeError('Variable "vehicule" does not exist.', 18, $this->source); })()), "brand", [], "any", false, false, false, 18), 'label', ["label" => "Marque"]);
        echo " 
                                    ";
        // line 19
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["vehicule"]) || array_key_exists("vehicule", $context) ? $context["vehicule"] : (function () { throw new RuntimeError('Variable "vehicule" does not exist.', 19, $this->source); })()), "brand", [], "any", false, false, false, 19), 'widget', ["attr" => ["class" => "custom-field-form"]]);
        echo "
                                </div> 
                                <div class='red-text'>";
        // line 21
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["vehicule"]) || array_key_exists("vehicule", $context) ? $context["vehicule"] : (function () { throw new RuntimeError('Variable "vehicule" does not exist.', 21, $this->source); })()), "brand", [], "any", false, false, false, 21), 'errors');
        echo "</div>
                                 <div class=\"custom-input-div\">
                                    ";
        // line 23
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["vehicule"]) || array_key_exists("vehicule", $context) ? $context["vehicule"] : (function () { throw new RuntimeError('Variable "vehicule" does not exist.', 23, $this->source); })()), "model", [], "any", false, false, false, 23), 'label', ["label" => "Modèle"]);
        echo " 
                                    ";
        // line 24
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["vehicule"]) || array_key_exists("vehicule", $context) ? $context["vehicule"] : (function () { throw new RuntimeError('Variable "vehicule" does not exist.', 24, $this->source); })()), "model", [], "any", false, false, false, 24), 'widget', ["attr" => ["class" => "custom-field-form"]]);
        echo "
                                </div> 
                                <div class='red-text'>";
        // line 26
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["vehicule"]) || array_key_exists("vehicule", $context) ? $context["vehicule"] : (function () { throw new RuntimeError('Variable "vehicule" does not exist.', 26, $this->source); })()), "model", [], "any", false, false, false, 26), 'errors');
        echo "</div>
                                 <div class=\"custom-input-div\">
                                    ";
        // line 28
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["vehicule"]) || array_key_exists("vehicule", $context) ? $context["vehicule"] : (function () { throw new RuntimeError('Variable "vehicule" does not exist.', 28, $this->source); })()), "color", [], "any", false, false, false, 28), 'label', ["label" => "Couleur"]);
        echo " 
                                    ";
        // line 29
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["vehicule"]) || array_key_exists("vehicule", $context) ? $context["vehicule"] : (function () { throw new RuntimeError('Variable "vehicule" does not exist.', 29, $this->source); })()), "color", [], "any", false, false, false, 29), 'widget', ["attr" => ["class" => "custom-field-form"]]);
        echo "
                                </div> 
                                <div class='red-text'>";
        // line 31
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["vehicule"]) || array_key_exists("vehicule", $context) ? $context["vehicule"] : (function () { throw new RuntimeError('Variable "vehicule" does not exist.', 31, $this->source); })()), "color", [], "any", false, false, false, 31), 'errors');
        echo "</div>
                                <div class=\"custom-input-div\">
                                    ";
        // line 33
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["vehicule"]) || array_key_exists("vehicule", $context) ? $context["vehicule"] : (function () { throw new RuntimeError('Variable "vehicule" does not exist.', 33, $this->source); })()), "year", [], "any", false, false, false, 33), 'label', ["label" => "Année"]);
        echo " 
                                    ";
        // line 34
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["vehicule"]) || array_key_exists("vehicule", $context) ? $context["vehicule"] : (function () { throw new RuntimeError('Variable "vehicule" does not exist.', 34, $this->source); })()), "year", [], "any", false, false, false, 34), 'widget', ["attr" => ["class" => "custom-field-form"]]);
        echo "
                                </div> 
                                <div class='red-text'>";
        // line 36
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["vehicule"]) || array_key_exists("vehicule", $context) ? $context["vehicule"] : (function () { throw new RuntimeError('Variable "vehicule" does not exist.', 36, $this->source); })()), "year", [], "any", false, false, false, 36), 'errors');
        echo "</div>
                                <div class=\"custom-input-div\">
                                    ";
        // line 38
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["vehicule"]) || array_key_exists("vehicule", $context) ? $context["vehicule"] : (function () { throw new RuntimeError('Variable "vehicule" does not exist.', 38, $this->source); })()), "vehicule_picture", [], "any", false, false, false, 38), 'label', ["label" => "Photo du véhicule"]);
        echo " 
                                    ";
        // line 39
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["vehicule"]) || array_key_exists("vehicule", $context) ? $context["vehicule"] : (function () { throw new RuntimeError('Variable "vehicule" does not exist.', 39, $this->source); })()), "vehicule_picture", [], "any", false, false, false, 39), 'widget', ["attr" => ["class" => "custom-field-form"]]);
        echo "
                                </div> 
                                <div class='red-text'>";
        // line 41
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["vehicule"]) || array_key_exists("vehicule", $context) ? $context["vehicule"] : (function () { throw new RuntimeError('Variable "vehicule" does not exist.', 41, $this->source); })()), "vehicule_picture", [], "any", false, false, false, 41), 'errors');
        echo "</div>
                                  <div class=\"col-xs-12 col-sm-12\">
                                    <div class=\"input-field\">
                                        ";
        // line 44
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["vehicule"]) || array_key_exists("vehicule", $context) ? $context["vehicule"] : (function () { throw new RuntimeError('Variable "vehicule" does not exist.', 44, $this->source); })()), "typeOfVehicule", [], "any", false, false, false, 44), 'label', ["label" => "Type de véhicule"]);
        echo "
                                        ";
        // line 45
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["vehicule"]) || array_key_exists("vehicule", $context) ? $context["vehicule"] : (function () { throw new RuntimeError('Variable "vehicule" does not exist.', 45, $this->source); })()), "typeOfVehicule", [], "any", false, false, false, 45), 'widget', ["attr" => ["class" => "custom-field-form"]]);
        echo "
                                    </div>
                                    <div class='red-text'>";
        // line 47
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["vehicule"]) || array_key_exists("vehicule", $context) ? $context["vehicule"] : (function () { throw new RuntimeError('Variable "vehicule" does not exist.', 47, $this->source); })()), "typeOfVehicule", [], "any", false, false, false, 47), 'errors');
        echo "</div>
                                </div>
                             <div class=\"col-xs-12 col-sm-12 col-md-12 mb-4 mt-4 d-flex justify-content-center\">
                                <button  type='submit' class=\"col-md-10 button-update-profile\">Sauvegarder mon véhicule</button>
                            </div>
                        ";
        // line 52
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["vehicule"]) || array_key_exists("vehicule", $context) ? $context["vehicule"] : (function () { throw new RuntimeError('Variable "vehicule" does not exist.', 52, $this->source); })()), 'form_end');
        echo "
                            </div>
                    </div>
  
            </section> ";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vehicule/_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  171 => 52,  163 => 47,  158 => 45,  154 => 44,  148 => 41,  143 => 39,  139 => 38,  134 => 36,  129 => 34,  125 => 33,  120 => 31,  115 => 29,  111 => 28,  106 => 26,  101 => 24,  97 => 23,  92 => 21,  87 => 19,  83 => 18,  78 => 16,  73 => 14,  69 => 13,  64 => 11,  59 => 9,  55 => 8,  49 => 5,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source(" <section class=\"section-padding\">
              
                          <div class=\"row justify-content-center \">
                    <div class=\"col-10 d-flex form-info\">
                      {{ form_start(vehicule) }}
                    
                                <div class=\"custom-input-div\">
                                    {{ form_label(vehicule.country_of_registration, 'Pays d\\'immatriculation') }}
                                    {{ form_widget(vehicule.country_of_registration, {'attr': {'class': 'custom-field-form'}}) }}
                                </div> 
                                <div class='red-text'>{{ form_errors(vehicule.country_of_registration)}}</div>
                                <div class=\"custom-input-div\">
                                    {{ form_label(vehicule.numberplate, 'Plaque d\\'immatriculation') }}
                                    {{ form_widget(vehicule.numberplate, {'attr': {'class': 'custom-field-form'}}) }}
                                </div>
                                <div class='red-text'>{{ form_errors(vehicule.numberplate)}}</div>
                                <div class=\"custom-input-div\">
                                    {{ form_label(vehicule.brand,'Marque') }} 
                                    {{ form_widget(vehicule.brand, {'attr': {'class': 'custom-field-form'}}) }}
                                </div> 
                                <div class='red-text'>{{ form_errors(vehicule.brand)}}</div>
                                 <div class=\"custom-input-div\">
                                    {{ form_label(vehicule.model,'Modèle') }} 
                                    {{ form_widget(vehicule.model, {'attr': {'class': 'custom-field-form'}}) }}
                                </div> 
                                <div class='red-text'>{{ form_errors(vehicule.model)}}</div>
                                 <div class=\"custom-input-div\">
                                    {{ form_label(vehicule.color,'Couleur') }} 
                                    {{ form_widget(vehicule.color, {'attr': {'class': 'custom-field-form'}}) }}
                                </div> 
                                <div class='red-text'>{{ form_errors(vehicule.color)}}</div>
                                <div class=\"custom-input-div\">
                                    {{ form_label(vehicule.year,'Année') }} 
                                    {{ form_widget(vehicule.year, {'attr': {'class': 'custom-field-form'}}) }}
                                </div> 
                                <div class='red-text'>{{ form_errors(vehicule.year)}}</div>
                                <div class=\"custom-input-div\">
                                    {{ form_label(vehicule.vehicule_picture,'Photo du véhicule') }} 
                                    {{ form_widget(vehicule.vehicule_picture, {'attr': {'class': 'custom-field-form'}}) }}
                                </div> 
                                <div class='red-text'>{{ form_errors(vehicule.vehicule_picture)}}</div>
                                  <div class=\"col-xs-12 col-sm-12\">
                                    <div class=\"input-field\">
                                        {{ form_label(vehicule.typeOfVehicule, 'Type de véhicule') }}
                                        {{ form_widget(vehicule.typeOfVehicule, {'attr': {'class': 'custom-field-form'}}) }}
                                    </div>
                                    <div class='red-text'>{{ form_errors(vehicule.typeOfVehicule)}}</div>
                                </div>
                             <div class=\"col-xs-12 col-sm-12 col-md-12 mb-4 mt-4 d-flex justify-content-center\">
                                <button  type='submit' class=\"col-md-10 button-update-profile\">Sauvegarder mon véhicule</button>
                            </div>
                        {{ form_end(vehicule) }}
                            </div>
                    </div>
  
            </section> ", "vehicule/_form.html.twig", "/shared/httpd/Projet-Final/templates/vehicule/_form.html.twig");
    }
}

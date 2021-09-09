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
                <div class=\"container\">  
                  <div class=\"row\">
                      ";
        // line 4
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["vehicule"]) || array_key_exists("vehicule", $context) ? $context["vehicule"] : (function () { throw new RuntimeError('Variable "vehicule" does not exist.', 4, $this->source); })()), 'form_start');
        echo "
                      <div class=\"col-xs-12 col-sm-6 col-md-8\">
                                <div class=\"form-group\">
                                    ";
        // line 7
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["vehicule"]) || array_key_exists("vehicule", $context) ? $context["vehicule"] : (function () { throw new RuntimeError('Variable "vehicule" does not exist.', 7, $this->source); })()), "country_of_registration", [], "any", false, false, false, 7), 'label', ["label" => "Pays d'immatriculation"]);
        echo "
                                    ";
        // line 8
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["vehicule"]) || array_key_exists("vehicule", $context) ? $context["vehicule"] : (function () { throw new RuntimeError('Variable "vehicule" does not exist.', 8, $this->source); })()), "country_of_registration", [], "any", false, false, false, 8), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                                </div> 
                                <div class='red-text'>";
        // line 10
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["vehicule"]) || array_key_exists("vehicule", $context) ? $context["vehicule"] : (function () { throw new RuntimeError('Variable "vehicule" does not exist.', 10, $this->source); })()), "country_of_registration", [], "any", false, false, false, 10), 'errors');
        echo "</div>
                                <div class=\"form-group\">
                                    ";
        // line 12
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["vehicule"]) || array_key_exists("vehicule", $context) ? $context["vehicule"] : (function () { throw new RuntimeError('Variable "vehicule" does not exist.', 12, $this->source); })()), "numberplate", [], "any", false, false, false, 12), 'label', ["label" => "Plaque d'immatriculation"]);
        echo "
                                    ";
        // line 13
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["vehicule"]) || array_key_exists("vehicule", $context) ? $context["vehicule"] : (function () { throw new RuntimeError('Variable "vehicule" does not exist.', 13, $this->source); })()), "numberplate", [], "any", false, false, false, 13), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                                </div>
                                <div class='red-text'>";
        // line 15
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["vehicule"]) || array_key_exists("vehicule", $context) ? $context["vehicule"] : (function () { throw new RuntimeError('Variable "vehicule" does not exist.', 15, $this->source); })()), "numberplate", [], "any", false, false, false, 15), 'errors');
        echo "</div>
                                <div class=\"form-group\">
                                    ";
        // line 17
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["vehicule"]) || array_key_exists("vehicule", $context) ? $context["vehicule"] : (function () { throw new RuntimeError('Variable "vehicule" does not exist.', 17, $this->source); })()), "brand", [], "any", false, false, false, 17), 'label', ["label" => "Marque"]);
        echo " 
                                    ";
        // line 18
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["vehicule"]) || array_key_exists("vehicule", $context) ? $context["vehicule"] : (function () { throw new RuntimeError('Variable "vehicule" does not exist.', 18, $this->source); })()), "brand", [], "any", false, false, false, 18), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                                </div> 
                                <div class='red-text'>";
        // line 20
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["vehicule"]) || array_key_exists("vehicule", $context) ? $context["vehicule"] : (function () { throw new RuntimeError('Variable "vehicule" does not exist.', 20, $this->source); })()), "brand", [], "any", false, false, false, 20), 'errors');
        echo "</div>
                                 <div class=\"form-group\">
                                    ";
        // line 22
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["vehicule"]) || array_key_exists("vehicule", $context) ? $context["vehicule"] : (function () { throw new RuntimeError('Variable "vehicule" does not exist.', 22, $this->source); })()), "model", [], "any", false, false, false, 22), 'label', ["label" => "Modèle"]);
        echo " 
                                    ";
        // line 23
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["vehicule"]) || array_key_exists("vehicule", $context) ? $context["vehicule"] : (function () { throw new RuntimeError('Variable "vehicule" does not exist.', 23, $this->source); })()), "model", [], "any", false, false, false, 23), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                                </div> 
                                <div class='red-text'>";
        // line 25
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["vehicule"]) || array_key_exists("vehicule", $context) ? $context["vehicule"] : (function () { throw new RuntimeError('Variable "vehicule" does not exist.', 25, $this->source); })()), "model", [], "any", false, false, false, 25), 'errors');
        echo "</div>
                                 <div class=\"form-group\">
                                    ";
        // line 27
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["vehicule"]) || array_key_exists("vehicule", $context) ? $context["vehicule"] : (function () { throw new RuntimeError('Variable "vehicule" does not exist.', 27, $this->source); })()), "color", [], "any", false, false, false, 27), 'label', ["label" => "Couleur"]);
        echo " 
                                    ";
        // line 28
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["vehicule"]) || array_key_exists("vehicule", $context) ? $context["vehicule"] : (function () { throw new RuntimeError('Variable "vehicule" does not exist.', 28, $this->source); })()), "color", [], "any", false, false, false, 28), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                                </div> 
                                <div class='red-text'>";
        // line 30
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["vehicule"]) || array_key_exists("vehicule", $context) ? $context["vehicule"] : (function () { throw new RuntimeError('Variable "vehicule" does not exist.', 30, $this->source); })()), "color", [], "any", false, false, false, 30), 'errors');
        echo "</div>
                                <div class=\"form-group\">
                                    ";
        // line 32
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["vehicule"]) || array_key_exists("vehicule", $context) ? $context["vehicule"] : (function () { throw new RuntimeError('Variable "vehicule" does not exist.', 32, $this->source); })()), "year", [], "any", false, false, false, 32), 'label', ["label" => "Année"]);
        echo " 
                                    ";
        // line 33
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["vehicule"]) || array_key_exists("vehicule", $context) ? $context["vehicule"] : (function () { throw new RuntimeError('Variable "vehicule" does not exist.', 33, $this->source); })()), "year", [], "any", false, false, false, 33), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                                </div> 
                                <div class='red-text'>";
        // line 35
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["vehicule"]) || array_key_exists("vehicule", $context) ? $context["vehicule"] : (function () { throw new RuntimeError('Variable "vehicule" does not exist.', 35, $this->source); })()), "year", [], "any", false, false, false, 35), 'errors');
        echo "</div>
                                <div class=\"form-group\">
                                    ";
        // line 37
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["vehicule"]) || array_key_exists("vehicule", $context) ? $context["vehicule"] : (function () { throw new RuntimeError('Variable "vehicule" does not exist.', 37, $this->source); })()), "vehicule_picture", [], "any", false, false, false, 37), 'label', ["label" => "Photo du véhicule"]);
        echo " 
                                    ";
        // line 38
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["vehicule"]) || array_key_exists("vehicule", $context) ? $context["vehicule"] : (function () { throw new RuntimeError('Variable "vehicule" does not exist.', 38, $this->source); })()), "vehicule_picture", [], "any", false, false, false, 38), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                                </div> 
                                <div class='red-text'>";
        // line 40
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["vehicule"]) || array_key_exists("vehicule", $context) ? $context["vehicule"] : (function () { throw new RuntimeError('Variable "vehicule" does not exist.', 40, $this->source); })()), "vehicule_picture", [], "any", false, false, false, 40), 'errors');
        echo "</div>
                            </div>
                            <button class=\"btn\">";
        // line 42
        echo twig_escape_filter($this->env, ((array_key_exists("button_label", $context)) ? (_twig_default_filter((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 42, $this->source); })()), "Sauvegarder mon véhicule")) : ("Sauvegarder mon véhicule")), "html", null, true);
        echo "</button>
                        ";
        // line 43
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["vehicule"]) || array_key_exists("vehicule", $context) ? $context["vehicule"] : (function () { throw new RuntimeError('Variable "vehicule" does not exist.', 43, $this->source); })()), 'form_end');
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
        return array (  156 => 43,  152 => 42,  147 => 40,  142 => 38,  138 => 37,  133 => 35,  128 => 33,  124 => 32,  119 => 30,  114 => 28,  110 => 27,  105 => 25,  100 => 23,  96 => 22,  91 => 20,  86 => 18,  82 => 17,  77 => 15,  72 => 13,  68 => 12,  63 => 10,  58 => 8,  54 => 7,  48 => 4,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source(" <section class=\"section-padding\">
                <div class=\"container\">  
                  <div class=\"row\">
                      {{ form_start(vehicule) }}
                      <div class=\"col-xs-12 col-sm-6 col-md-8\">
                                <div class=\"form-group\">
                                    {{ form_label(vehicule.country_of_registration, 'Pays d\\'immatriculation') }}
                                    {{ form_widget(vehicule.country_of_registration, {'attr': {'class': 'form-control'}}) }}
                                </div> 
                                <div class='red-text'>{{ form_errors(vehicule.country_of_registration)}}</div>
                                <div class=\"form-group\">
                                    {{ form_label(vehicule.numberplate, 'Plaque d\\'immatriculation') }}
                                    {{ form_widget(vehicule.numberplate, {'attr': {'class': 'form-control'}}) }}
                                </div>
                                <div class='red-text'>{{ form_errors(vehicule.numberplate)}}</div>
                                <div class=\"form-group\">
                                    {{ form_label(vehicule.brand,'Marque') }} 
                                    {{ form_widget(vehicule.brand, {'attr': {'class': 'form-control'}}) }}
                                </div> 
                                <div class='red-text'>{{ form_errors(vehicule.brand)}}</div>
                                 <div class=\"form-group\">
                                    {{ form_label(vehicule.model,'Modèle') }} 
                                    {{ form_widget(vehicule.model, {'attr': {'class': 'form-control'}}) }}
                                </div> 
                                <div class='red-text'>{{ form_errors(vehicule.model)}}</div>
                                 <div class=\"form-group\">
                                    {{ form_label(vehicule.color,'Couleur') }} 
                                    {{ form_widget(vehicule.color, {'attr': {'class': 'form-control'}}) }}
                                </div> 
                                <div class='red-text'>{{ form_errors(vehicule.color)}}</div>
                                <div class=\"form-group\">
                                    {{ form_label(vehicule.year,'Année') }} 
                                    {{ form_widget(vehicule.year, {'attr': {'class': 'form-control'}}) }}
                                </div> 
                                <div class='red-text'>{{ form_errors(vehicule.year)}}</div>
                                <div class=\"form-group\">
                                    {{ form_label(vehicule.vehicule_picture,'Photo du véhicule') }} 
                                    {{ form_widget(vehicule.vehicule_picture, {'attr': {'class': 'form-control'}}) }}
                                </div> 
                                <div class='red-text'>{{ form_errors(vehicule.vehicule_picture)}}</div>
                            </div>
                            <button class=\"btn\">{{ button_label|default('Sauvegarder mon véhicule') }}</button>
                        {{ form_end(vehicule) }}
                    </div>
                </div>
            </section> ", "vehicule/_form.html.twig", "/shared/httpd/Projet-Final/templates/vehicule/_form.html.twig");
    }
}

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

/* user/_form-reset.html.twig */
class __TwigTemplate_afd4f3a139eb7a269521ab83469fc2bf30afb999af47b8570ad656fd595b8c2a extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/_form-reset.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/_form-reset.html.twig"));

        // line 1
        echo " <section>
        <div class=\"row\">
            ";
        // line 3
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formReset"]) || array_key_exists("formReset", $context) ? $context["formReset"] : (function () { throw new RuntimeError('Variable "formReset" does not exist.', 3, $this->source); })()), 'form_start');
        echo "
            <div class=\"col-xs-12 col-sm-12 col-md-6\">
                <div class=\"custom-input-div\">
                    <span>";
        // line 6
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formReset"]) || array_key_exists("formReset", $context) ? $context["formReset"] : (function () { throw new RuntimeError('Variable "formReset" does not exist.', 6, $this->source); })()), "password", [], "any", false, false, false, 6), 'label', ["label" => "Mot de passe actuel"]);
        echo "</span>
                    ";
        // line 7
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formReset"]) || array_key_exists("formReset", $context) ? $context["formReset"] : (function () { throw new RuntimeError('Variable "formReset" does not exist.', 7, $this->source); })()), "password", [], "any", false, false, false, 7), 'widget', ["attr" => ["class" => "custom-field-form"]]);
        echo "
                </div>
            </div>
            <div class=\"col-xs-12 col-sm-12 col-md-6\">
                <div class=\"custom-input-div\">
                    ";
        // line 12
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["formReset"]) || array_key_exists("formReset", $context) ? $context["formReset"] : (function () { throw new RuntimeError('Variable "formReset" does not exist.', 12, $this->source); })()), "newPassword", [], "any", false, false, false, 12), "first", [], "any", false, false, false, 12), 'label');
        echo "
                    ";
        // line 13
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["formReset"]) || array_key_exists("formReset", $context) ? $context["formReset"] : (function () { throw new RuntimeError('Variable "formReset" does not exist.', 13, $this->source); })()), "newPassword", [], "any", false, false, false, 13), "first", [], "any", false, false, false, 13), 'widget', ["attr" => ["class" => "custom-field-form"]]);
        echo "
                </div>
            </div>
            <div class=\"col-xs-12 col-sm-12 col-md-6\">
                <div class=\"custom-input-div\">
                    ";
        // line 18
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["formReset"]) || array_key_exists("formReset", $context) ? $context["formReset"] : (function () { throw new RuntimeError('Variable "formReset" does not exist.', 18, $this->source); })()), "newPassword", [], "any", false, false, false, 18), "second", [], "any", false, false, false, 18), 'label');
        echo "  
                    ";
        // line 19
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["formReset"]) || array_key_exists("formReset", $context) ? $context["formReset"] : (function () { throw new RuntimeError('Variable "formReset" does not exist.', 19, $this->source); })()), "newPassword", [], "any", false, false, false, 19), "second", [], "any", false, false, false, 19), 'widget', ["attr" => ["class" => "custom-field-form"]]);
        echo "
                </div>
            </div>    

            <div class=\"row\">
                <div class=\"col-xs-12 col-sm-12 col-md-12 mb-4 mt-4 d-flex justify-content-start\">
                    <button  type='submit' class=\"col-md-6 button-update-profile\">Mettre à jour</button>
                </div>
            </div>  
            ";
        // line 28
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formReset"]) || array_key_exists("formReset", $context) ? $context["formReset"] : (function () { throw new RuntimeError('Variable "formReset" does not exist.', 28, $this->source); })()), 'form_end');
        echo "
        </div>
</section>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "user/_form-reset.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 28,  81 => 19,  77 => 18,  69 => 13,  65 => 12,  57 => 7,  53 => 6,  47 => 3,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source(" <section>
        <div class=\"row\">
            {{form_start(formReset)}}
            <div class=\"col-xs-12 col-sm-12 col-md-6\">
                <div class=\"custom-input-div\">
                    <span>{{ form_label(formReset.password, 'Mot de passe actuel') }}</span>
                    {{ form_widget(formReset.password, {'attr': {'class': 'custom-field-form'}}) }}
                </div>
            </div>
            <div class=\"col-xs-12 col-sm-12 col-md-6\">
                <div class=\"custom-input-div\">
                    {{ form_label(formReset.newPassword.first) }}
                    {{ form_widget(formReset.newPassword.first, {'attr': {'class': 'custom-field-form'}}) }}
                </div>
            </div>
            <div class=\"col-xs-12 col-sm-12 col-md-6\">
                <div class=\"custom-input-div\">
                    {{ form_label(formReset.newPassword.second) }}  
                    {{ form_widget(formReset.newPassword.second, {'attr': {'class': 'custom-field-form'}}) }}
                </div>
            </div>    

            <div class=\"row\">
                <div class=\"col-xs-12 col-sm-12 col-md-12 mb-4 mt-4 d-flex justify-content-start\">
                    <button  type='submit' class=\"col-md-6 button-update-profile\">Mettre à jour</button>
                </div>
            </div>  
            {{form_end(formReset)}}
        </div>
</section>", "user/_form-reset.html.twig", "/shared/httpd/Projet-Final/templates/user/_form-reset.html.twig");
    }
}

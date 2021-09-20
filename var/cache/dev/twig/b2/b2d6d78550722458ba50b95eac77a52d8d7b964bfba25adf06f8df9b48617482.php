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
        echo " <section class=\"section-padding\">
    <div class=\"container\">
        <div class=\"row\">
            ";
        // line 4
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formReset"]) || array_key_exists("formReset", $context) ? $context["formReset"] : (function () { throw new RuntimeError('Variable "formReset" does not exist.', 4, $this->source); })()), 'form_start');
        echo "
            <div class=\"col-xs-12 col-sm-6 col-md-6\">
                <div class=\"form-group\">
                    ";
        // line 7
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formReset"]) || array_key_exists("formReset", $context) ? $context["formReset"] : (function () { throw new RuntimeError('Variable "formReset" does not exist.', 7, $this->source); })()), "email", [], "any", false, false, false, 7), 'label', ["label" => "Email"]);
        echo "
                    ";
        // line 8
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formReset"]) || array_key_exists("formReset", $context) ? $context["formReset"] : (function () { throw new RuntimeError('Variable "formReset" does not exist.', 8, $this->source); })()), "email", [], "any", false, false, false, 8), 'widget');
        echo "
                </div>
            </div>
            <div class=\"col-xs-12 col-sm-6 col-md-6\">
                <div class=\"form-group\">
                    <span>";
        // line 13
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formReset"]) || array_key_exists("formReset", $context) ? $context["formReset"] : (function () { throw new RuntimeError('Variable "formReset" does not exist.', 13, $this->source); })()), "password", [], "any", false, false, false, 13), 'label', ["label" => "Mot de passe actuel"]);
        echo "</span>
                    ";
        // line 14
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formReset"]) || array_key_exists("formReset", $context) ? $context["formReset"] : (function () { throw new RuntimeError('Variable "formReset" does not exist.', 14, $this->source); })()), "password", [], "any", false, false, false, 14), 'widget');
        echo "
                </div>
            </div>
            <div class=\"col-xs-12 col-sm-6 col-md-6\">
                <div class=\"form-group\">
                    ";
        // line 19
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["formReset"]) || array_key_exists("formReset", $context) ? $context["formReset"] : (function () { throw new RuntimeError('Variable "formReset" does not exist.', 19, $this->source); })()), "newPassword", [], "any", false, false, false, 19), "first", [], "any", false, false, false, 19), 'label');
        echo "
                    ";
        // line 20
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["formReset"]) || array_key_exists("formReset", $context) ? $context["formReset"] : (function () { throw new RuntimeError('Variable "formReset" does not exist.', 20, $this->source); })()), "newPassword", [], "any", false, false, false, 20), "first", [], "any", false, false, false, 20), 'widget');
        echo "
                </div>
            </div>
            <div class=\"col-xs-12 col-sm-4 col-md-6\">
                <div class=\"form-group\">
                    ";
        // line 25
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["formReset"]) || array_key_exists("formReset", $context) ? $context["formReset"] : (function () { throw new RuntimeError('Variable "formReset" does not exist.', 25, $this->source); })()), "newPassword", [], "any", false, false, false, 25), "second", [], "any", false, false, false, 25), 'label');
        echo "  
                    ";
        // line 26
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["formReset"]) || array_key_exists("formReset", $context) ? $context["formReset"] : (function () { throw new RuntimeError('Variable "formReset" does not exist.', 26, $this->source); })()), "newPassword", [], "any", false, false, false, 26), "second", [], "any", false, false, false, 26), 'widget');
        echo "
                </div>
            </div>    

            <div class=\"row\">
                <div class=\"col-xs-12 col-sm-12 col-md-12 mb-4 mt-4 d-flex justify-content-start\">
                    <button  type='submit' class=\"col-md-6 button-update-profile\">Mettre à jour</button>
                </div>
            </div>  
            ";
        // line 35
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formReset"]) || array_key_exists("formReset", $context) ? $context["formReset"] : (function () { throw new RuntimeError('Variable "formReset" does not exist.', 35, $this->source); })()), 'form_end');
        echo "
        </div>
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
        return array (  106 => 35,  94 => 26,  90 => 25,  82 => 20,  78 => 19,  70 => 14,  66 => 13,  58 => 8,  54 => 7,  48 => 4,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source(" <section class=\"section-padding\">
    <div class=\"container\">
        <div class=\"row\">
            {{form_start(formReset)}}
            <div class=\"col-xs-12 col-sm-6 col-md-6\">
                <div class=\"form-group\">
                    {{ form_label(formReset.email, 'Email') }}
                    {{ form_widget(formReset.email) }}
                </div>
            </div>
            <div class=\"col-xs-12 col-sm-6 col-md-6\">
                <div class=\"form-group\">
                    <span>{{ form_label(formReset.password, 'Mot de passe actuel') }}</span>
                    {{ form_widget(formReset.password) }}
                </div>
            </div>
            <div class=\"col-xs-12 col-sm-6 col-md-6\">
                <div class=\"form-group\">
                    {{ form_label(formReset.newPassword.first) }}
                    {{ form_widget(formReset.newPassword.first) }}
                </div>
            </div>
            <div class=\"col-xs-12 col-sm-4 col-md-6\">
                <div class=\"form-group\">
                    {{ form_label(formReset.newPassword.second) }}  
                    {{ form_widget(formReset.newPassword.second) }}
                </div>
            </div>    

            <div class=\"row\">
                <div class=\"col-xs-12 col-sm-12 col-md-12 mb-4 mt-4 d-flex justify-content-start\">
                    <button  type='submit' class=\"col-md-6 button-update-profile\">Mettre à jour</button>
                </div>
            </div>  
            {{form_end(formReset)}}
        </div>
    </div>
</section>", "user/_form-reset.html.twig", "/shared/httpd/Projet-Final/templates/user/_form-reset.html.twig");
    }
}

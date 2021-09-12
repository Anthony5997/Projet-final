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
        echo " <section class=\"section-padding gray-bg\">
    <div class=\"container\">
        <div class=\"row\">
            <h3 class=\"text-extrabold\">Your K-Yachting account</h3>
            ";
        // line 5
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form2"]) || array_key_exists("form2", $context) ? $context["form2"] : (function () { throw new RuntimeError('Variable "form2" does not exist.', 5, $this->source); })()), 'form_start');
        echo "
            <div class=\"col-xs-12 col-sm-3\">
                <div class=\"form-group\">
                    ";
        // line 8
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form2"]) || array_key_exists("form2", $context) ? $context["form2"] : (function () { throw new RuntimeError('Variable "form2" does not exist.', 8, $this->source); })()), "email", [], "any", false, false, false, 8), 'label', ["label" => "Email"]);
        echo "
                    ";
        // line 9
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form2"]) || array_key_exists("form2", $context) ? $context["form2"] : (function () { throw new RuntimeError('Variable "form2" does not exist.', 9, $this->source); })()), "email", [], "any", false, false, false, 9), 'widget');
        echo "
                </div>
            </div>
            <div class=\"col-xs-12 col-sm-3\">
                <div class=\"form-group\">
                    ";
        // line 14
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form2"]) || array_key_exists("form2", $context) ? $context["form2"] : (function () { throw new RuntimeError('Variable "form2" does not exist.', 14, $this->source); })()), "password", [], "any", false, false, false, 14), 'label', ["label" => "Current Password"]);
        echo "
                    ";
        // line 15
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form2"]) || array_key_exists("form2", $context) ? $context["form2"] : (function () { throw new RuntimeError('Variable "form2" does not exist.', 15, $this->source); })()), "password", [], "any", false, false, false, 15), 'widget');
        echo "
                    <i class=\"fa fa-eye show-password\"></i>
                </div>
            </div>
            <div class=\"col-xs-12 col-sm-3\">
                <div class=\"form-group\">
                    ";
        // line 21
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form2"]) || array_key_exists("form2", $context) ? $context["form2"] : (function () { throw new RuntimeError('Variable "form2" does not exist.', 21, $this->source); })()), "newPassword", [], "any", false, false, false, 21), "first", [], "any", false, false, false, 21), 'label');
        echo "
                    ";
        // line 22
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form2"]) || array_key_exists("form2", $context) ? $context["form2"] : (function () { throw new RuntimeError('Variable "form2" does not exist.', 22, $this->source); })()), "newPassword", [], "any", false, false, false, 22), "first", [], "any", false, false, false, 22), 'widget');
        echo "
                </div>
            </div>
            <div class=\"col-xs-12 col-sm-3\">
                <div class=\"form-group\">
                    ";
        // line 27
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form2"]) || array_key_exists("form2", $context) ? $context["form2"] : (function () { throw new RuntimeError('Variable "form2" does not exist.', 27, $this->source); })()), "newPassword", [], "any", false, false, false, 27), "second", [], "any", false, false, false, 27), 'label');
        echo "  
                    ";
        // line 28
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form2"]) || array_key_exists("form2", $context) ? $context["form2"] : (function () { throw new RuntimeError('Variable "form2" does not exist.', 28, $this->source); })()), "newPassword", [], "any", false, false, false, 28), "second", [], "any", false, false, false, 28), 'widget');
        echo "
                </div>
            </div>    

            <div class=\"row\">
                <div class=\"col-xs-12 col-sm-6 col-md-4 col-md-offset-4\">
                    <button type=\"submit\" class=\"btn btn-block btn-lg gradient secondary waves-effect waves-light\">
                        <span><strong>UPDATE</strong> NOW</span>
                    </button>
                </div>
            </div>  
            ";
        // line 39
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form2"]) || array_key_exists("form2", $context) ? $context["form2"] : (function () { throw new RuntimeError('Variable "form2" does not exist.', 39, $this->source); })()), 'form_end');
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
        return array (  110 => 39,  96 => 28,  92 => 27,  84 => 22,  80 => 21,  71 => 15,  67 => 14,  59 => 9,  55 => 8,  49 => 5,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source(" <section class=\"section-padding gray-bg\">
    <div class=\"container\">
        <div class=\"row\">
            <h3 class=\"text-extrabold\">Your K-Yachting account</h3>
            {{form_start(form2)}}
            <div class=\"col-xs-12 col-sm-3\">
                <div class=\"form-group\">
                    {{ form_label(form2.email, 'Email') }}
                    {{ form_widget(form2.email) }}
                </div>
            </div>
            <div class=\"col-xs-12 col-sm-3\">
                <div class=\"form-group\">
                    {{ form_label(form2.password, 'Current Password') }}
                    {{ form_widget(form2.password) }}
                    <i class=\"fa fa-eye show-password\"></i>
                </div>
            </div>
            <div class=\"col-xs-12 col-sm-3\">
                <div class=\"form-group\">
                    {{ form_label(form2.newPassword.first) }}
                    {{ form_widget(form2.newPassword.first) }}
                </div>
            </div>
            <div class=\"col-xs-12 col-sm-3\">
                <div class=\"form-group\">
                    {{ form_label(form2.newPassword.second) }}  
                    {{ form_widget(form2.newPassword.second) }}
                </div>
            </div>    

            <div class=\"row\">
                <div class=\"col-xs-12 col-sm-6 col-md-4 col-md-offset-4\">
                    <button type=\"submit\" class=\"btn btn-block btn-lg gradient secondary waves-effect waves-light\">
                        <span><strong>UPDATE</strong> NOW</span>
                    </button>
                </div>
            </div>  
            {{form_end(form2)}}
        </div>
    </div>
</section>", "user/_form-reset.html.twig", "/shared/httpd/Projet-Final/templates/user/_form-reset.html.twig");
    }
}

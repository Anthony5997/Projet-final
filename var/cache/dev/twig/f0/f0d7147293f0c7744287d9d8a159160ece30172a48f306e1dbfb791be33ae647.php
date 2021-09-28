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

/* registration/register.html.twig */
class __TwigTemplate_78cf308c630a816916c7075a50034af5e73d0aac9ec0644922671f777847dd13 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "registration/register.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "registration/register.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "registration/register.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Register";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 6, $this->source); })()), "flashes", [0 => "verify_email_error"], "method", false, false, false, 6));
        foreach ($context['_seq'] as $context["_key"] => $context["flashError"]) {
            // line 7
            echo "        <div class=\"alert alert-danger\" role=\"alert\">";
            echo twig_escape_filter($this->env, $context["flashError"], "html", null, true);
            echo "</div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashError'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 9
        echo "
        <!-- Page Header-->
        <section class=\"page-title page-title-bg fixed-bg overlay dark-5 padding-top-160 padding-bottom-80\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-md-12\">
                        <h2 class=\"white-text my-3\">S'enregistrer</h2>
                    </div>
                </div>
            </div>
        </section>


        <!-- Page Content-->
        <section class=\"section-padding gray-bg log-section\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-xs-12 col-sm-6 col-sm-offset-3 card card-panel\">
                        <h3 class=\"text-extrabold my-2\">Créé un nouveau compte</h3>
                        <form id=\"register-form\" role=\"form\" method=\"post\" accept-char=\"UTF-8\" autocomplete=\"off\" data-parsley-validate>
                             ";
        // line 29
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 29, $this->source); })()), 'form_start');
        echo "
        
       

                            <div class=\"input-field\">
                            ";
        // line 34
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 34, $this->source); })()), "email", [], "any", false, false, false, 34), 'widget', ["attr" => ["class" => "form-control", "data-parsley-trigger" => "change", "data-parsley-error-message" => "Une adresse mail valide est nécessaire."]]);
        // line 38
        echo "
                            ";
        // line 39
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 39, $this->source); })()), "email", [], "any", false, false, false, 39), 'label', ["label" => "Votre Email"]);
        echo "
                                <div class='red-text'>";
        // line 40
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 40, $this->source); })()), "email", [], "any", false, false, false, 40), 'errors');
        echo "</div>
                            </div>

                            <div class=\"input-field\">
                             ";
        // line 44
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 44, $this->source); })()), "password", [], "any", false, false, false, 44), "first", [], "any", false, false, false, 44), 'widget', ["attr" => ["class" => "form-control", "data-parsley-trigger" => "change", "data-parsley-minlength" => "6", "data-parsley-error-message" => "Le mot de passe doit contenir au moins 6 caractères."]]);
        // line 49
        echo "
                            ";
        // line 50
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 50, $this->source); })()), "password", [], "any", false, false, false, 50), "first", [], "any", false, false, false, 50), 'label', ["label" => "Mot de passe"]);
        echo "
                                <i class=\"fa fa-eye show-password\"></i>
                                <div class='red-text'>";
        // line 52
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 52, $this->source); })()), "password", [], "any", false, false, false, 52), "first", [], "any", false, false, false, 52), 'errors');
        echo "</div>
                            </div>

                             <div class=\"input-field\">
                             ";
        // line 56
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 56, $this->source); })()), "password", [], "any", false, false, false, 56), "second", [], "any", false, false, false, 56), 'widget', ["attr" => ["class" => "form-control", "data-parsley-trigger" => "change", "data-parsley-equalto" => "#password", "data-parsley-error-message" => "Les mots de passes ne correspondent pas."]]);
        // line 61
        echo "
                            ";
        // line 62
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 62, $this->source); })()), "password", [], "any", false, false, false, 62), "second", [], "any", false, false, false, 62), 'label', ["label" => "Confirmez votre mot de passe."]);
        echo "
                                <i class=\"fa fa-eye show-password\"></i>
                                 <div class='red-text'>";
        // line 64
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 64, $this->source); })()), "password", [], "any", false, false, false, 64), "second", [], "any", false, false, false, 64), 'errors');
        echo "</div>
                            </div>
                            
                            <div class=\"checkbox\">

                            ";
        // line 69
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 69, $this->source); })()), "agreeTerms", [], "any", false, false, false, 69), 'widget', ["attr" => ["oninvalid" => "alert(\"You should agree to our terms\")"]]);
        echo "
                            ";
        // line 70
        echo "   
                                <label for=\"registration_form_agreeTerms\">J'ai lu et accepte les <a href=\"#!\" target=\"_blank\">Conditions d'utilisation</a></label>
                                <div class='red-text'>";
        // line 72
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 72, $this->source); })()), "agreeTerms", [], "any", false, false, false, 72), 'errors');
        echo "</div>
                            </div>

                            <button type=\"submit\" class=\"btn btn-primary my-3\">Crée mon compte</button>
                               ";
        // line 76
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 76, $this->source); })()), 'form_end');
        echo "
                               <div class=\"links\">
                                <a href=\"";
        // line 78
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("login");
        echo "\">Vous avez déjà un compte? Cliquer ici! </a>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </section>
 
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "registration/register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  203 => 78,  198 => 76,  191 => 72,  187 => 70,  183 => 69,  175 => 64,  170 => 62,  167 => 61,  165 => 56,  158 => 52,  153 => 50,  150 => 49,  148 => 44,  141 => 40,  137 => 39,  134 => 38,  132 => 34,  124 => 29,  102 => 9,  93 => 7,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Register{% endblock %}

{% block body %}
    {% for flashError in app.flashes('verify_email_error') %}
        <div class=\"alert alert-danger\" role=\"alert\">{{ flashError }}</div>
    {% endfor %}

        <!-- Page Header-->
        <section class=\"page-title page-title-bg fixed-bg overlay dark-5 padding-top-160 padding-bottom-80\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-md-12\">
                        <h2 class=\"white-text my-3\">S'enregistrer</h2>
                    </div>
                </div>
            </div>
        </section>


        <!-- Page Content-->
        <section class=\"section-padding gray-bg log-section\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-xs-12 col-sm-6 col-sm-offset-3 card card-panel\">
                        <h3 class=\"text-extrabold my-2\">Créé un nouveau compte</h3>
                        <form id=\"register-form\" role=\"form\" method=\"post\" accept-char=\"UTF-8\" autocomplete=\"off\" data-parsley-validate>
                             {{ form_start(registrationForm) }}
        
       

                            <div class=\"input-field\">
                            {{ form_widget(registrationForm.email, { 'attr': {
                             'class': 'form-control',
                            'data-parsley-trigger' : \"change\",
                            'data-parsley-error-message' : \"Une adresse mail valide est nécessaire.\"
                            } }) }}
                            {{ form_label(registrationForm.email, 'Votre Email')}}
                                <div class='red-text'>{{ form_errors(registrationForm.email)}}</div>
                            </div>

                            <div class=\"input-field\">
                             {{ form_widget(registrationForm.password.first, { 'attr': {
                            'class': 'form-control',
                            'data-parsley-trigger' : \"change\",
                            'data-parsley-minlength' : \"6\",
                            'data-parsley-error-message' : \"Le mot de passe doit contenir au moins 6 caractères.\"
                            } }) }}
                            {{ form_label(registrationForm.password.first, 'Mot de passe')}}
                                <i class=\"fa fa-eye show-password\"></i>
                                <div class='red-text'>{{ form_errors(registrationForm.password.first) }}</div>
                            </div>

                             <div class=\"input-field\">
                             {{ form_widget(registrationForm.password.second, { 'attr': {
                            'class': 'form-control',
                            'data-parsley-trigger' : \"change\",
                            'data-parsley-equalto' :\"#password\",
                            'data-parsley-error-message' : \"Les mots de passes ne correspondent pas.\"
                            } }) }}
                            {{ form_label(registrationForm.password.second, 'Confirmez votre mot de passe.')}}
                                <i class=\"fa fa-eye show-password\"></i>
                                 <div class='red-text'>{{ form_errors(registrationForm.password.second)}}</div>
                            </div>
                            
                            <div class=\"checkbox\">

                            {{ form_widget(registrationForm.agreeTerms, { 'attr' :{'oninvalid' : 'alert(\"You should agree to our terms\")'}  }) }}
                            {# {{ form_label(registrationForm.agreeTerms) }} #}   
                                <label for=\"registration_form_agreeTerms\">J'ai lu et accepte les <a href=\"#!\" target=\"_blank\">Conditions d'utilisation</a></label>
                                <div class='red-text'>{{ form_errors(registrationForm.agreeTerms) }}</div>
                            </div>

                            <button type=\"submit\" class=\"btn btn-primary my-3\">Crée mon compte</button>
                               {{ form_end(registrationForm) }}
                               <div class=\"links\">
                                <a href=\"{{ path('login') }}\">Vous avez déjà un compte? Cliquer ici! </a>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </section>
 
{% endblock %}", "registration/register.html.twig", "/shared/httpd/Projet-Final/templates/registration/register.html.twig");
    }
}

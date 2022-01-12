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

/* security/login.html.twig */
class __TwigTemplate_11f42f7c4b3c79e863ae9cb3e312bb8461cba2c6ec22c71e237be4d8a718f7d8 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "security/login.html.twig", 1);
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

        echo "Connexion";
        
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
        echo "
   ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 7, $this->source); })()), "flashes", [0 => "success"], "method", false, false, false, 7));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 8
            echo "            <div class=\"alert alert-success text-white\">
                ";
            // line 9
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 12, $this->source); })()), "flashes", [0 => "error"], "method", false, false, false, 12));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 13
            echo "            <div class=\"alert alert-danger text-white\">
                ";
            // line 14
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo "        <section class=\"section-padding gray-bg log-section\">
            <div class=\"container\">
                <div class=\"row justify-content-center\">
                    <div class=\"col-xs-12 col-sm-12 col-md-12\">
                        <div class=\"form-info mx-auto p-4 my-3\">
                            <h3 class=\"text-extrabold\">Connectez vous</h3>
                           <form  method=\"post\">
                            ";
        // line 24
        if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 24, $this->source); })())) {
            // line 25
            echo "                                <div class=\"alert alert-danger\">
                                ";
            // line 26
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 26, $this->source); })()), "messageKey", [], "any", false, false, false, 26), "Invalid credentials."))) {
                // line 27
                echo "                                    Les informations d'identification sont invalides.
                                ";
            }
            // line 29
            echo "                                </div>
                            ";
        }
        // line 31
        echo "                            ";
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 31, $this->source); })()), "user", [], "any", false, false, false, 31)) {
            // line 32
            echo "                                <div class=\"red-text\">
                                    Vous êtes connecté en tant que ";
            // line 33
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 33, $this->source); })()), "user", [], "any", false, false, false, 33), "username", [], "any", false, false, false, 33), "html", null, true);
            echo ", <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\">Logout</a>
                                </div>
                            ";
        }
        // line 35
        echo " 
                                <input type=\"hidden\" name=\"_token\" value=\"\">
                                <div class=\"custom-input-div\"> 
                                    <input type=\"email\" value=\"";
        // line 38
        echo twig_escape_filter($this->env, (isset($context["last_username"]) || array_key_exists("last_username", $context) ? $context["last_username"] : (function () { throw new RuntimeError('Variable "last_username" does not exist.', 38, $this->source); })()), "html", null, true);
        echo "\" name=\"email\" id=\"inputEmail\" class=\"custom-field-form\" autocomplete=\"email\" 
                                        autofocus
                                        required
                                        autofocus
                                        data-parsley-trigger=\"change\"
                                        data-parsley-error-message=\"Une addresse valide est nécessaire.\">
                                    <label for=\"inputEmail\">Votre Email</label>
                                </div>
                                <div class=\"custom-input-div\">
                                <input type=\"password\" name=\"password\" id=\"inputPassword\" class=\"custom-field-form\" autocomplete=\"current-password\" 
                                            required
                                           data-parsley-trigger=\"change\"
                                           data-parsley-error-message=\"Le mot de passe doit contenir au moins 6 caractères.\">
                                     <label for=\"inputPassword\">Votre mot de passe</label>
                                    <i class=\"fa fa-eye show-password\"></i>
                                    <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("authenticate"), "html", null, true);
        echo "\">
                                    </div>
                                <div class=\"checkbox\">         
                                        <input type=\"checkbox\" name=\"_remember_me\" id=\"_remember_me\">
                                        <label for=\"_remember_me\">Je souhaite rester connecté
                                        </label>
                                </div>
                                <div class=\"d-flex\">
                                    <button type=\"submit\" class=\"button-update-profile my-3 mx-auto\">Se connecter</button>
                                </div>
                            </form>
                            <div class=\"d-flex align-items-center flex-column\">
                                <div class=\"links-login mb-3\">
                                    <a href=\"";
        // line 66
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("forget_password");
        echo "\">Mot de passe oublié ?</a>
                                </div>
                                <div class=\"links-login\">
                                    <a href=\"";
        // line 69
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("register");
        echo "\">Vous n'êtes pas encore inscrit ?</a>
                                </div>
                            </div>
                        </div>
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
        return "security/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  207 => 69,  201 => 66,  185 => 53,  167 => 38,  162 => 35,  154 => 33,  151 => 32,  148 => 31,  144 => 29,  140 => 27,  138 => 26,  135 => 25,  133 => 24,  124 => 17,  115 => 14,  112 => 13,  107 => 12,  98 => 9,  95 => 8,  91 => 7,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Connexion{% endblock %}

{% block body %}

   {% for message in app.flashes('success') %}
            <div class=\"alert alert-success text-white\">
                {{ message }}
            </div>
        {% endfor %}
        {% for message in app.flashes('error') %}
            <div class=\"alert alert-danger text-white\">
                {{ message }}
            </div>
        {% endfor %}
        <section class=\"section-padding gray-bg log-section\">
            <div class=\"container\">
                <div class=\"row justify-content-center\">
                    <div class=\"col-xs-12 col-sm-12 col-md-12\">
                        <div class=\"form-info mx-auto p-4 my-3\">
                            <h3 class=\"text-extrabold\">Connectez vous</h3>
                           <form  method=\"post\">
                            {% if error %}
                                <div class=\"alert alert-danger\">
                                {% if error.messageKey == 'Invalid credentials.' %}
                                    Les informations d'identification sont invalides.
                                {% endif %}
                                </div>
                            {% endif %}
                            {% if app.user %}
                                <div class=\"red-text\">
                                    Vous êtes connecté en tant que {{ app.user.username }}, <a href=\"{{ path('app_logout') }}\">Logout</a>
                                </div>
                            {% endif %} 
                                <input type=\"hidden\" name=\"_token\" value=\"\">
                                <div class=\"custom-input-div\"> 
                                    <input type=\"email\" value=\"{{ last_username }}\" name=\"email\" id=\"inputEmail\" class=\"custom-field-form\" autocomplete=\"email\" 
                                        autofocus
                                        required
                                        autofocus
                                        data-parsley-trigger=\"change\"
                                        data-parsley-error-message=\"Une addresse valide est nécessaire.\">
                                    <label for=\"inputEmail\">Votre Email</label>
                                </div>
                                <div class=\"custom-input-div\">
                                <input type=\"password\" name=\"password\" id=\"inputPassword\" class=\"custom-field-form\" autocomplete=\"current-password\" 
                                            required
                                           data-parsley-trigger=\"change\"
                                           data-parsley-error-message=\"Le mot de passe doit contenir au moins 6 caractères.\">
                                     <label for=\"inputPassword\">Votre mot de passe</label>
                                    <i class=\"fa fa-eye show-password\"></i>
                                    <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token('authenticate') }}\">
                                    </div>
                                <div class=\"checkbox\">         
                                        <input type=\"checkbox\" name=\"_remember_me\" id=\"_remember_me\">
                                        <label for=\"_remember_me\">Je souhaite rester connecté
                                        </label>
                                </div>
                                <div class=\"d-flex\">
                                    <button type=\"submit\" class=\"button-update-profile my-3 mx-auto\">Se connecter</button>
                                </div>
                            </form>
                            <div class=\"d-flex align-items-center flex-column\">
                                <div class=\"links-login mb-3\">
                                    <a href=\"{{path('forget_password')}}\">Mot de passe oublié ?</a>
                                </div>
                                <div class=\"links-login\">
                                    <a href=\"{{path('register')}}\">Vous n'êtes pas encore inscrit ?</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
{% endblock %}
", "security/login.html.twig", "/shared/httpd/Projet-Final/templates/security/login.html.twig");
    }
}

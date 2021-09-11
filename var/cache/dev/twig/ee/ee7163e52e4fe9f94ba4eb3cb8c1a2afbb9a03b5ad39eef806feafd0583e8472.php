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

/* user/edit.html.twig */
class __TwigTemplate_564d9db4a8728797de8d48a9587a8e831b0203c9c84338c8efb2199f5508d5a5 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/edit.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/edit.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "user/edit.html.twig", 1);
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

        echo "Edit User";
        
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
        echo "<div class=\"container mt-5\">
    ";
        // line 8
        echo "    <h1>Mon Profil</h1>
          ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 9, $this->source); })()), "flashes", [0 => "success"], "method", false, false, false, 9));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 10
            echo "            <div class=\"alert alert-success text-white\">
                ";
            // line 11
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 14, $this->source); })()), "flashes", [0 => "error"], "method", false, false, false, 14));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 15
            echo "            <div class=\"alert alert-error text-white\">
                ";
            // line 16
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "
        <ul class=\"nav nav-tabs\" role=\"tablist\">
          <li class=\"nav-item\">
                <a class=\"nav-link active\" data-toggle=\"tab\" href=\"#tabs-1\" role=\"tab\">A Propos</a>
            </li>
            <li class=\"nav-item\">
                <a class=\"nav-link\" data-toggle=\"tab\" href=\"#tabs-2\" role=\"tab\">Information Personnel</a>
            </li>
            <li class=\"nav-item\">
                <a class=\"nav-link\" data-toggle=\"tab\" href=\"#tabs-3\" role=\"tab\">Préférences de Voyage</a>
            </li>
            <li class=\"nav-item\">
                <a class=\"nav-link\" data-toggle=\"tab\" href=\"#tabs-4\" role=\"tab\">Véhicule Personnel</a>
            </li>
            <li class=\"nav-item\">
                <a class=\"nav-link\" data-toggle=\"tab\" href=\"#tabs-5\" role=\"tab\">Mon compte</a>
            </li>
        </ul>

        <div class=\"tab-content\">
            <div class=\"tab-pane active\" id=\"tabs-1\" role=\"tabpanel\">
               <div class=\"container\">
                    <div class=\"main-info-profile\">
                        <div class=\"row\">
                            <div class=\"col-xs-12 col-sm-4 col-md-4 d-flex flex-column align-items-center justify-content-center\">
                                <p class=\"\">";
        // line 44
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 44, $this->source); })()), "firstName", [], "any", false, false, false, 44), "html", null, true);
        echo "</p>
                                <p class=\"experience-profile\">";
        // line 45
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 45, $this->source); })()), "lastName", [], "any", false, false, false, 45), "html", null, true);
        echo "</p>
                            </div>
                            <div class=\"col-xs-12 col-sm-4 col-md-4\">
                            </div>
                            <div class=\"col-xs-12 col-sm-4 col-md-4\">
                                ";
        // line 50
        if ((0 !== twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 50, $this->source); })()), "profile_picture", [], "any", false, false, false, 50), ""))) {
            // line 51
            echo "                                    <div class=\"existing-file\">
                                        <a href=\"";
            // line 52
            echo twig_escape_filter($this->env, ($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/assets/uploads/profilePicture/") . twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 52, $this->source); })()), "profile_picture", [], "any", false, false, false, 52)), "html", null, true);
            echo "\" target=\"_blank\"><img class=\"profile-picture-profile\" src=\"";
            echo twig_escape_filter($this->env, ($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/assets/uploads/profilePicture/") . twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 52, $this->source); })()), "profile_picture", [], "any", false, false, false, 52)), "html", null, true);
            echo "\"/></a>
                                    </div>
                                    ";
        } else {
            // line 55
            echo "                                        <div class=\"existing-file\">
                                        <a href=\"";
            // line 56
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/assets/uploads/profilePicture/default_profile_picture.jpg"), "html", null, true);
            echo "\" target=\"_blank\"><img class=\"profile-picture-profile\" src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/assets/uploads/profilePicture/default_profile_picture.jpg"), "html", null, true);
            echo "\"/></a>
                                    </div>
                                ";
        }
        // line 59
        echo "                            </div>
                        </div>
                    </div>
                    <div class=\"main-info-profile\">
                        <div class=\"row\">
                            <div class=\"input-profile-apropos\">
                                ";
        // line 65
        if ((0 !== twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 65, $this->source); })()), "profile_picture", [], "any", false, false, false, 65), ""))) {
            // line 66
            echo "                                    <button class=\"profile-button\">
                                            modifier ma photo de profile <i class=\"fas fa-plus\"></i>
                                        </button>
                                    ";
        } else {
            // line 70
            echo "                                        <button class=\"profile-button\">
                                            ajouter une photo de profile <i class=\"fas fa-plus\"></i>
                                        </button>
                                ";
        }
        // line 74
        echo "                            </div>
                            <div class=\"input-profile-apropos\">
                            ";
        // line 76
        if ((0 !== twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 76, $this->source); })()), "bio", [], "any", false, false, false, 76), ""))) {
            // line 77
            echo "                                <p>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 77, $this->source); })()), "bio", [], "any", false, false, false, 77), "html", null, true);
            echo "</p>
                                    ";
        } else {
            // line 79
            echo "                                        <button class=\"profile-button\">
                                            ajouter une biographie <i class=\"fas fa-plus\"></i>
                                        </button>
                                ";
        }
        // line 83
        echo "                            </div>
                        </div>
                        <div class=\"d-flex justify-content-center\"><span class=\"profile-separator\"></div>
                    </div>
                    <div class=\"main-info-profile\">
                        <div class=\"row\">
                            <div class=\"preference-profile-container col-xs-12 col-sm-5 col-md-5\">
                            <h2>Mes Préférences</h2>
                              <h6> Discussion : </h6>
                              <p class=\"form-control\">";
        // line 92
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 92, $this->source); })()), "travelPreferences", [], "any", false, false, false, 92), "discussion", [], "any", false, false, false, 92), "html", null, true);
        echo "</p>
                              <h6> Fumeur : </h6>
                              <p class=\"form-control\">";
        // line 94
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 94, $this->source); })()), "travelPreferences", [], "any", false, false, false, 94), "smoking", [], "any", false, false, false, 94), "html", null, true);
        echo "</p>
                              <h6> Musique : </h6>
                              <p class=\"form-control\">";
        // line 96
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 96, $this->source); })()), "travelPreferences", [], "any", false, false, false, 96), "music", [], "any", false, false, false, 96), "html", null, true);
        echo "</p>
                              <h6> Animaux : </h6>
                              <p class=\"form-control\">";
        // line 98
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 98, $this->source); })()), "travelPreferences", [], "any", false, false, false, 98), "animals", [], "any", false, false, false, 98), "html", null, true);
        echo "</p>
                              <h6> Pass Sanitaire : </h6>
                              <p class=\"form-control\">";
        // line 100
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 100, $this->source); })()), "travelPreferences", [], "any", false, false, false, 100), "healthPass", [], "any", false, false, false, 100), "html", null, true);
        echo "</p>
                            </div>
                            <div class=\"col-xs-12 col-sm-2 col-md-2\"></div>
                            <div class=\" col-xs-12 col-sm-5 col-md-5\">
                            <div class=\"row\">
                                <h2>Mon véhicule</h2>
                            </div>
                            <div class=\"row mt-3 preference-profile-container\">
                                 <div class=\"col-xs-12 col-sm-6 col-md-6 d-flex flex-column pl-5 justify-content-center\">
                                    <p class=\"vehicule-profile\">Marque : ";
        // line 109
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 109, $this->source); })()), "vehicule", [], "any", false, false, false, 109), "brand", [], "any", false, false, false, 109), "html", null, true);
        echo "</p>
                                    <p class=\"vehicule-profile\">Modèle : ";
        // line 110
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 110, $this->source); })()), "vehicule", [], "any", false, false, false, 110), "model", [], "any", false, false, false, 110), "html", null, true);
        echo "</p>
                                    <p class=\"vehicule-profile\">Couleur : ";
        // line 111
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 111, $this->source); })()), "vehicule", [], "any", false, false, false, 111), "color", [], "any", false, false, false, 111), "html", null, true);
        echo "</p>
                                </div>
                                <div class=\"col-xs-12 col-sm-6 col-md-6\">
                                    <a class=\"d-flex justify-content-center\" href=\"";
        // line 114
        echo twig_escape_filter($this->env, ($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/assets/uploads/vehiculePicture/") . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 114, $this->source); })()), "vehicule", [], "any", false, false, false, 114), "vehiculePicture", [], "any", false, false, false, 114)), "html", null, true);
        echo "\" target=\"_blank\"><img class=\"profile-picture-profile\" src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("/assets/uploads/vehiculePicture/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 114, $this->source); })()), "vehicule", [], "any", false, false, false, 114), "vehiculePicture", [], "any", false, false, false, 114))), "html", null, true);
        echo "\"/></a>
                                </div>
                            </div>
                            

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"tab-pane\" id=\"tabs-2\" role=\"tabpanel\">
                <div class=\"container\">
                    ";
        // line 126
        echo twig_include($this->env, $context, "user/_form.html.twig", ["button_label" => "Update"]);
        echo "
                </div>
            </div>
            <div class=\"tab-pane\" id=\"tabs-3\" role=\"tabpanel\">
                <div class=\"container\">
                <h5>Mes préférences</h5>
                    ";
        // line 132
        echo twig_include($this->env, $context, "travel_preferences/_form.html.twig", ["button_label" => "Update"]);
        echo "
                </div>
            </div>
            <div class=\"tab-pane\" id=\"tabs-4\" role=\"tabpanel\">
                <div class=\"container\">
                 ";
        // line 137
        echo twig_include($this->env, $context, "vehicule/_form.html.twig", ["button_label" => "Update"]);
        echo "
                </div>
            </div>
             <div class=\"tab-pane\" id=\"tabs-5\" role=\"tabpanel\">
                <div class=\"container\">
                 Info Compte
                </div>
            </div>
        </div>
</div>

   


";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "user/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  321 => 137,  313 => 132,  304 => 126,  287 => 114,  281 => 111,  277 => 110,  273 => 109,  261 => 100,  256 => 98,  251 => 96,  246 => 94,  241 => 92,  230 => 83,  224 => 79,  218 => 77,  216 => 76,  212 => 74,  206 => 70,  200 => 66,  198 => 65,  190 => 59,  182 => 56,  179 => 55,  171 => 52,  168 => 51,  166 => 50,  158 => 45,  154 => 44,  127 => 19,  118 => 16,  115 => 15,  110 => 14,  101 => 11,  98 => 10,  94 => 9,  91 => 8,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Edit User{% endblock %}

{% block body %}
<div class=\"container mt-5\">
    {# {{dump(user)}} #}
    <h1>Mon Profil</h1>
          {% for message in app.flashes('success') %}
            <div class=\"alert alert-success text-white\">
                {{ message }}
            </div>
        {% endfor %}
        {% for message in app.flashes('error') %}
            <div class=\"alert alert-error text-white\">
                {{ message }}
            </div>
        {% endfor %}

        <ul class=\"nav nav-tabs\" role=\"tablist\">
          <li class=\"nav-item\">
                <a class=\"nav-link active\" data-toggle=\"tab\" href=\"#tabs-1\" role=\"tab\">A Propos</a>
            </li>
            <li class=\"nav-item\">
                <a class=\"nav-link\" data-toggle=\"tab\" href=\"#tabs-2\" role=\"tab\">Information Personnel</a>
            </li>
            <li class=\"nav-item\">
                <a class=\"nav-link\" data-toggle=\"tab\" href=\"#tabs-3\" role=\"tab\">Préférences de Voyage</a>
            </li>
            <li class=\"nav-item\">
                <a class=\"nav-link\" data-toggle=\"tab\" href=\"#tabs-4\" role=\"tab\">Véhicule Personnel</a>
            </li>
            <li class=\"nav-item\">
                <a class=\"nav-link\" data-toggle=\"tab\" href=\"#tabs-5\" role=\"tab\">Mon compte</a>
            </li>
        </ul>

        <div class=\"tab-content\">
            <div class=\"tab-pane active\" id=\"tabs-1\" role=\"tabpanel\">
               <div class=\"container\">
                    <div class=\"main-info-profile\">
                        <div class=\"row\">
                            <div class=\"col-xs-12 col-sm-4 col-md-4 d-flex flex-column align-items-center justify-content-center\">
                                <p class=\"\">{{user.firstName}}</p>
                                <p class=\"experience-profile\">{{user.lastName}}</p>
                            </div>
                            <div class=\"col-xs-12 col-sm-4 col-md-4\">
                            </div>
                            <div class=\"col-xs-12 col-sm-4 col-md-4\">
                                {% if user.profile_picture != '' %}
                                    <div class=\"existing-file\">
                                        <a href=\"{{asset ('/assets/uploads/profilePicture/') ~ user.profile_picture }}\" target=\"_blank\"><img class=\"profile-picture-profile\" src=\"{{asset ('/assets/uploads/profilePicture/') ~ user.profile_picture }}\"/></a>
                                    </div>
                                    {% else %}
                                        <div class=\"existing-file\">
                                        <a href=\"{{asset ('/assets/uploads/profilePicture/default_profile_picture.jpg')}}\" target=\"_blank\"><img class=\"profile-picture-profile\" src=\"{{asset ('/assets/uploads/profilePicture/default_profile_picture.jpg')}}\"/></a>
                                    </div>
                                {% endif %}
                            </div>
                        </div>
                    </div>
                    <div class=\"main-info-profile\">
                        <div class=\"row\">
                            <div class=\"input-profile-apropos\">
                                {% if user.profile_picture != '' %}
                                    <button class=\"profile-button\">
                                            modifier ma photo de profile <i class=\"fas fa-plus\"></i>
                                        </button>
                                    {% else %}
                                        <button class=\"profile-button\">
                                            ajouter une photo de profile <i class=\"fas fa-plus\"></i>
                                        </button>
                                {% endif %}
                            </div>
                            <div class=\"input-profile-apropos\">
                            {% if user.bio != '' %}
                                <p>{{user.bio}}</p>
                                    {% else %}
                                        <button class=\"profile-button\">
                                            ajouter une biographie <i class=\"fas fa-plus\"></i>
                                        </button>
                                {% endif %}
                            </div>
                        </div>
                        <div class=\"d-flex justify-content-center\"><span class=\"profile-separator\"></div>
                    </div>
                    <div class=\"main-info-profile\">
                        <div class=\"row\">
                            <div class=\"preference-profile-container col-xs-12 col-sm-5 col-md-5\">
                            <h2>Mes Préférences</h2>
                              <h6> Discussion : </h6>
                              <p class=\"form-control\">{{user.travelPreferences.discussion}}</p>
                              <h6> Fumeur : </h6>
                              <p class=\"form-control\">{{user.travelPreferences.smoking}}</p>
                              <h6> Musique : </h6>
                              <p class=\"form-control\">{{user.travelPreferences.music}}</p>
                              <h6> Animaux : </h6>
                              <p class=\"form-control\">{{user.travelPreferences.animals}}</p>
                              <h6> Pass Sanitaire : </h6>
                              <p class=\"form-control\">{{user.travelPreferences.healthPass}}</p>
                            </div>
                            <div class=\"col-xs-12 col-sm-2 col-md-2\"></div>
                            <div class=\" col-xs-12 col-sm-5 col-md-5\">
                            <div class=\"row\">
                                <h2>Mon véhicule</h2>
                            </div>
                            <div class=\"row mt-3 preference-profile-container\">
                                 <div class=\"col-xs-12 col-sm-6 col-md-6 d-flex flex-column pl-5 justify-content-center\">
                                    <p class=\"vehicule-profile\">Marque : {{user.vehicule.brand}}</p>
                                    <p class=\"vehicule-profile\">Modèle : {{user.vehicule.model}}</p>
                                    <p class=\"vehicule-profile\">Couleur : {{user.vehicule.color}}</p>
                                </div>
                                <div class=\"col-xs-12 col-sm-6 col-md-6\">
                                    <a class=\"d-flex justify-content-center\" href=\"{{asset ('/assets/uploads/vehiculePicture/') ~ user.vehicule.vehiculePicture }}\" target=\"_blank\"><img class=\"profile-picture-profile\" src=\"{{asset ('/assets/uploads/vehiculePicture/' ~ user.vehicule.vehiculePicture )}}\"/></a>
                                </div>
                            </div>
                            

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"tab-pane\" id=\"tabs-2\" role=\"tabpanel\">
                <div class=\"container\">
                    {{ include('user/_form.html.twig', {'button_label': 'Update'}) }}
                </div>
            </div>
            <div class=\"tab-pane\" id=\"tabs-3\" role=\"tabpanel\">
                <div class=\"container\">
                <h5>Mes préférences</h5>
                    {{ include('travel_preferences/_form.html.twig', {'button_label': 'Update'}) }}
                </div>
            </div>
            <div class=\"tab-pane\" id=\"tabs-4\" role=\"tabpanel\">
                <div class=\"container\">
                 {{ include('vehicule/_form.html.twig', {'button_label': 'Update'}) }}
                </div>
            </div>
             <div class=\"tab-pane\" id=\"tabs-5\" role=\"tabpanel\">
                <div class=\"container\">
                 Info Compte
                </div>
            </div>
        </div>
</div>

   


{% endblock %}", "user/edit.html.twig", "/shared/httpd/Projet-Final/templates/user/edit.html.twig");
    }
}

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

/* user/show.html.twig */
class __TwigTemplate_a2ba47aacd0e53c7219936ea3a74592447423b47f1303f3aedf68a70b9315cfb extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "user/show.html.twig", 1);
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

        echo "Profil utilisateur";
        
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
    <div class=\"container\">
        <div class=\"main-info-profile\">
            <div class=\"row\">
                <div class=\"col-xs-12 col-sm-4 col-md-4 d-flex flex-column align-items-center justify-content-center\">
                    <p class=\"\">";
        // line 11
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 11, $this->source); })()), "firstName", [], "any", false, false, false, 11), "html", null, true);
        echo "</p>
                    <p class=\"experience-profile\">";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 12, $this->source); })()), "userExperience", [], "any", false, false, false, 12), "experienceLevel", [], "any", false, false, false, 12), "html", null, true);
        echo "</p>
                    <p class=\"experience-profile d-flex flex-column align-items-center justify-content-center\"> Trajets effectué</p>
                    <p class=\"experience-profile d-flex flex-column align-items-center justify-content-center\"><strong>";
        // line 14
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 14, $this->source); })()), "tripsMade", [], "any", false, false, false, 14), "html", null, true);
        echo "</strong></p>
                </div>
                <div class=\"col-xs-12 col-sm-4 col-md-4\">
                </div>
                <div class=\"col-xs-12 col-sm-4 col-md-4 d-flex justify-content-center align-items-center flex-column\">
                    ";
        // line 19
        if ((0 !== twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 19, $this->source); })()), "profile_picture", [], "any", false, false, false, 19), ""))) {
            // line 20
            echo "                        <div class=\"existing-file d-flex justify-content-center align-items-center\">
                            <a class=\"d-flex justify-content-center align-items-center\" href=\"";
            // line 21
            echo twig_escape_filter($this->env, ($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/assets/uploads/profilePicture/") . twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 21, $this->source); })()), "profile_picture", [], "any", false, false, false, 21)), "html", null, true);
            echo "\" target=\"_blank\"><img class=\"profile-picture-profile\" src=\"";
            echo twig_escape_filter($this->env, ($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/assets/uploads/profilePicture/") . twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 21, $this->source); })()), "profile_picture", [], "any", false, false, false, 21)), "html", null, true);
            echo "\"/></a>
                        </div>
                        ";
        } else {
            // line 24
            echo "                            <div class=\"existing-file d-flex justify-content-center align-items-center\">
                            <a class=\"d-flex justify-content-center align-items-center\" href=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/assets/uploads/profilePicture/default_profile_picture.jpg"), "html", null, true);
            echo "\" target=\"_blank\"><img class=\"profile-picture-profile\" src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/assets/uploads/profilePicture/default_profile_picture.jpg"), "html", null, true);
            echo "\"/></a>
                        </div>
                    ";
        }
        // line 28
        echo "                    <p class=\"mt-4 text-center\"><i style=\"color: gold;\"class=\"fas fa-star\"></i>";
        ((twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 28, $this->source); })()), "globalRating", [], "any", false, false, false, 28)) ? (print (twig_escape_filter($this->env, twig_round(twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 28, $this->source); })()), "globalRating", [], "any", false, false, false, 28), 1, "floor"), "html", null, true))) : (print ("Aucune note pour l'instant")));
        echo "</p>
                </div>
            </div>
        </div>
        <div class=\"main-info-profile\">
            <div class=\"row\">
                <div class=\"input-profile-apropos\">
                    ";
        // line 35
        if ((0 !== twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 35, $this->source); })()), "bio", [], "any", false, false, false, 35), ""))) {
            // line 36
            echo "                        <p>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 36, $this->source); })()), "bio", [], "any", false, false, false, 36), "html", null, true);
            echo "</p>
                    ";
        }
        // line 38
        echo "                    </div>
                </div>
                <div class=\"row d-flex justify-content-center\">
                    <a href=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("message_discussion_details", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 41, $this->source); })()), "id", [], "any", false, false, false, 41)]), "html", null, true);
        echo "\" class=\"contact-button-profile\"><i style=\"color:#82b6e8;\" class=\"far fa-comments\"></i> Contacter ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 41, $this->source); })()), "firstName", [], "any", false, false, false, 41), "html", null, true);
        echo "</a>
                </div>
            <div class=\"d-flex justify-content-center\"><span class=\"profile-separator\"></div>
        </div>
        <div class=\"main-info-profile\">
            <div class=\"row\">
                <div class=\"preference-profile-container col-xs-12 col-sm-12 col-md-12\">
       
                    <p class=\"preference-input\"><i class=\"far fa-comments mr-2\"></i> ";
        // line 49
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 49, $this->source); })()), "travelPreferences", [], "any", false, false, false, 49), "discussion", [], "any", false, false, false, 49), "html", null, true);
        echo "</p>
                    <p class=\"preference-input\"><i class=\"fas fa-smoking mr-2\"></i> ";
        // line 50
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 50, $this->source); })()), "travelPreferences", [], "any", false, false, false, 50), "smoking", [], "any", false, false, false, 50), "html", null, true);
        echo "</p>
                    <p class=\"preference-input\"><i class=\"fas fa-music mr-2\"></i> ";
        // line 51
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 51, $this->source); })()), "travelPreferences", [], "any", false, false, false, 51), "music", [], "any", false, false, false, 51), "html", null, true);
        echo "</p>
                    <p class=\"preference-input\"><i class=\"fas fa-paw mr-2\"></i> ";
        // line 52
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 52, $this->source); })()), "travelPreferences", [], "any", false, false, false, 52), "animals", [], "any", false, false, false, 52), "html", null, true);
        echo "</p>
                    <p class=\"preference-input\"><i class=\"fas fa-file-medical mr-2\"></i> ";
        // line 53
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 53, $this->source); })()), "travelPreferences", [], "any", false, false, false, 53), "healthPass", [], "any", false, false, false, 53), "html", null, true);
        echo "</p>
                </div>
                <div class=\" col-xs-12 col-sm-12 col-md-12\">
                <div class=\"row  preference-profile-container\">
                        <div class=\"col-xs-12 col-sm-6 col-md-6 d-flex flex-column pl-5 justify-content-center\">
                        <p class=\"vehicule-profile\">Marque : ";
        // line 58
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 58, $this->source); })()), "vehicule", [], "any", false, false, false, 58), "brand", [], "any", false, false, false, 58), "html", null, true);
        echo "</p>
                        <p class=\"vehicule-profile\">Modèle : ";
        // line 59
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 59, $this->source); })()), "vehicule", [], "any", false, false, false, 59), "model", [], "any", false, false, false, 59), "html", null, true);
        echo "</p>
                        <p class=\"vehicule-profile\">Couleur : ";
        // line 60
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 60, $this->source); })()), "vehicule", [], "any", false, false, false, 60), "color", [], "any", false, false, false, 60), "html", null, true);
        echo "</p>
                    </div>
                    <div class=\"col-xs-12 col-sm-6 col-md-6\">
                        <a class=\"d-flex justify-content-center\" href=\"";
        // line 63
        echo twig_escape_filter($this->env, ($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/assets/uploads/vehiculePicture/") . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 63, $this->source); })()), "vehicule", [], "any", false, false, false, 63), "vehiculePicture", [], "any", false, false, false, 63)), "html", null, true);
        echo "\" target=\"_blank\"><img class=\"profile-picture-profile\" src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("/assets/uploads/vehiculePicture/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 63, $this->source); })()), "vehicule", [], "any", false, false, false, 63), "vehiculePicture", [], "any", false, false, false, 63))), "html", null, true);
        echo "\"/></a>
                    </div>
                </div>
                

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
        return "user/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  211 => 63,  205 => 60,  201 => 59,  197 => 58,  189 => 53,  185 => 52,  181 => 51,  177 => 50,  173 => 49,  160 => 41,  155 => 38,  149 => 36,  147 => 35,  136 => 28,  128 => 25,  125 => 24,  117 => 21,  114 => 20,  112 => 19,  104 => 14,  99 => 12,  95 => 11,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Profil utilisateur{% endblock %}

{% block body %}

    <div class=\"container\">
        <div class=\"main-info-profile\">
            <div class=\"row\">
                <div class=\"col-xs-12 col-sm-4 col-md-4 d-flex flex-column align-items-center justify-content-center\">
                    <p class=\"\">{{user.firstName}}</p>
                    <p class=\"experience-profile\">{{user.userExperience.experienceLevel}}</p>
                    <p class=\"experience-profile d-flex flex-column align-items-center justify-content-center\"> Trajets effectué</p>
                    <p class=\"experience-profile d-flex flex-column align-items-center justify-content-center\"><strong>{{user.tripsMade}}</strong></p>
                </div>
                <div class=\"col-xs-12 col-sm-4 col-md-4\">
                </div>
                <div class=\"col-xs-12 col-sm-4 col-md-4 d-flex justify-content-center align-items-center flex-column\">
                    {% if user.profile_picture != '' %}
                        <div class=\"existing-file d-flex justify-content-center align-items-center\">
                            <a class=\"d-flex justify-content-center align-items-center\" href=\"{{asset ('/assets/uploads/profilePicture/') ~ user.profile_picture }}\" target=\"_blank\"><img class=\"profile-picture-profile\" src=\"{{asset ('/assets/uploads/profilePicture/') ~ user.profile_picture }}\"/></a>
                        </div>
                        {% else %}
                            <div class=\"existing-file d-flex justify-content-center align-items-center\">
                            <a class=\"d-flex justify-content-center align-items-center\" href=\"{{asset ('/assets/uploads/profilePicture/default_profile_picture.jpg')}}\" target=\"_blank\"><img class=\"profile-picture-profile\" src=\"{{asset ('/assets/uploads/profilePicture/default_profile_picture.jpg')}}\"/></a>
                        </div>
                    {% endif %}
                    <p class=\"mt-4 text-center\"><i style=\"color: gold;\"class=\"fas fa-star\"></i>{{user.globalRating ?  user.globalRating|round(1, 'floor') : 'Aucune note pour l\\'instant'}}</p>
                </div>
            </div>
        </div>
        <div class=\"main-info-profile\">
            <div class=\"row\">
                <div class=\"input-profile-apropos\">
                    {% if user.bio != '' %}
                        <p>{{user.bio}}</p>
                    {% endif %}
                    </div>
                </div>
                <div class=\"row d-flex justify-content-center\">
                    <a href=\"{{path('message_discussion_details', {'id': user.id})}}\" class=\"contact-button-profile\"><i style=\"color:#82b6e8;\" class=\"far fa-comments\"></i> Contacter {{user.firstName}}</a>
                </div>
            <div class=\"d-flex justify-content-center\"><span class=\"profile-separator\"></div>
        </div>
        <div class=\"main-info-profile\">
            <div class=\"row\">
                <div class=\"preference-profile-container col-xs-12 col-sm-12 col-md-12\">
       
                    <p class=\"preference-input\"><i class=\"far fa-comments mr-2\"></i> {{user.travelPreferences.discussion}}</p>
                    <p class=\"preference-input\"><i class=\"fas fa-smoking mr-2\"></i> {{user.travelPreferences.smoking}}</p>
                    <p class=\"preference-input\"><i class=\"fas fa-music mr-2\"></i> {{user.travelPreferences.music}}</p>
                    <p class=\"preference-input\"><i class=\"fas fa-paw mr-2\"></i> {{user.travelPreferences.animals}}</p>
                    <p class=\"preference-input\"><i class=\"fas fa-file-medical mr-2\"></i> {{user.travelPreferences.healthPass}}</p>
                </div>
                <div class=\" col-xs-12 col-sm-12 col-md-12\">
                <div class=\"row  preference-profile-container\">
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
{% endblock %}
", "user/show.html.twig", "/shared/httpd/Projet-Final/templates/user/show.html.twig");
    }
}

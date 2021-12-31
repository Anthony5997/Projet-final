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
        // line 4
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/show.html.twig"));

        // line 1
        $context["checkAllPreferences"] = (((((0 !== twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 1, $this->source); })()), "travelPreferences", [], "any", false, false, false, 1), "discussion", [], "any", false, false, false, 1), null)) && (0 !== twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 1, $this->source); })()), "travelPreferences", [], "any", false, false, false, 1), "smoking", [], "any", false, false, false, 1), null))) && (0 !== twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 1, $this->source); })()), "travelPreferences", [], "any", false, false, false, 1), "music", [], "any", false, false, false, 1), null))) && (0 !== twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 1, $this->source); })()), "travelPreferences", [], "any", false, false, false, 1), "animals", [], "any", false, false, false, 1), null))) && (0 !== twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 1, $this->source); })()), "travelPreferences", [], "any", false, false, false, 1), "healthPass", [], "any", false, false, false, 1), null)));
        // line 2
        $context["checkAllVehiculeInfos"] = (((0 !== twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 2, $this->source); })()), "vehicule", [], "any", false, false, false, 2), "brand", [], "any", false, false, false, 2), null)) && (0 !== twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 2, $this->source); })()), "vehicule", [], "any", false, false, false, 2), "color", [], "any", false, false, false, 2), null))) && (0 !== twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 2, $this->source); })()), "vehicule", [], "any", false, false, false, 2), "model", [], "any", false, false, false, 2), null)));
        // line 4
        $this->parent = $this->loadTemplate("base.html.twig", "user/show.html.twig", 4);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 6
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

    // line 8
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 9
        echo "    <div class=\"mx-auto form-info mt-3\">
<div class=\"container my-4\">
    <h4 class=\"text-center\">Profil de ";
        // line 11
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 11, $this->source); })()), "firstName", [], "any", false, false, false, 11), "html", null, true);
        echo " </h4>
</div>
                        <div class=\"main-info-profile\">
                            <div class=\"row\">
                                <div class=\"col-xs-12 col-sm-4 col-md-4 d-flex flex-column align-items-center justify-content-center\">
                                    <p class=\"\">";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 16, $this->source); })()), "firstName", [], "any", false, false, false, 16), "html", null, true);
        echo "</p>
                                    <p class=\"experience-profile\">";
        // line 17
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 17, $this->source); })()), "userExperience", [], "any", false, false, false, 17), "experienceLevel", [], "any", false, false, false, 17), "html", null, true);
        echo "</p>
                                    <p class=\"experience-profile d-flex flex-column align-items-center justify-content-center\">
                                        Trajets effectué</p>
                                    <p class=\"experience-profile d-flex flex-column align-items-center justify-content-center\">
                                        <strong>";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 21, $this->source); })()), "tripsMade", [], "any", false, false, false, 21), "html", null, true);
        echo "</strong>
                                    </p>
                                </div>
                                <div class=\"col-xs-12 col-sm-4 col-md-4\"></div>
                                <div class=\"col-xs-12 col-sm-4 col-md-4\">
                                    ";
        // line 26
        if ((0 !== twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 26, $this->source); })()), "profile_picture", [], "any", false, false, false, 26), ""))) {
            // line 27
            echo "                                        <div class=\"existing-file\">
                                            <a href=\"";
            // line 28
            echo twig_escape_filter($this->env, ($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/assets/uploads/profilePicture/") . twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 28, $this->source); })()), "profile_picture", [], "any", false, false, false, 28)), "html", null, true);
            echo "\" target=\"_blank\"><img class=\"profile-picture-profile\" src=\"";
            echo twig_escape_filter($this->env, ($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/assets/uploads/profilePicture/") . twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 28, $this->source); })()), "profile_picture", [], "any", false, false, false, 28)), "html", null, true);
            echo "\"/></a>
                                        </div>
                                    ";
        } else {
            // line 31
            echo "                                        <div class=\"existing-file\">
                                            <a href=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/assets/uploads/profilePicture/default_profile_picture.jpg"), "html", null, true);
            echo "\" target=\"_blank\"><img class=\"profile-picture-profile\" src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/assets/uploads/profilePicture/default_profile_picture.jpg"), "html", null, true);
            echo "\"/></a>
                                        </div>
                                     ";
        }
        // line 35
        echo "
                                </div>
                            </div>

                                <div class=\"row justify-content-between\">
                                    <div class=\"col-xs-12 col-sm-6 col-md-6\">
                                        <div class=\"input-profile-apropos\">
                                        ";
        // line 42
        if ((0 !== twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 42, $this->source); })()), "bio", [], "any", false, false, false, 42), ""))) {
            // line 43
            echo "                                            <p class=\"text-center\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 43, $this->source); })()), "bio", [], "any", false, false, false, 43), "html", null, true);
            echo "</p>
                                        ";
        }
        // line 45
        echo "                                        </div>
                                    </div>
                                    <div class=\"col-xs-12 col-sm-6 col-md-6\">
                                        <p class=\"text-center mt-4 ml-5\"><i style=\"color: gold;\"class=\"fas fa-star\"></i>";
        // line 48
        ((twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 48, $this->source); })()), "globalRating", [], "any", false, false, false, 48)) ? (print (twig_escape_filter($this->env, twig_round(twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 48, $this->source); })()), "globalRating", [], "any", false, false, false, 48), 1, "floor"), "html", null, true))) : (print ("Aucune note pour l'instant")));
        echo "</p>
                                    </div>
                                </div>
                        </div>
                           
                        <div class=\"main-info-profile\">
                            <div class=\"d-flex justify-content-center\">
                                <span class=\"profile-separator\"></div>
                            </div>

                            <label class=\"accordion-wrapper\">
                                <input type=\"checkbox\" class=\"accordion\" hidden/>
                                <div class=\"title\">
                                    <strong>Ses préférences de voyage</strong>
                                    <svg viewBox=\"0 0 256 512\" width=\"12\" title=\"angle-right\" class=\"side-icon\" fill=\"white\">
                                        <path d=\"M224.3 273l-136 136c-9.4 9.4-24.6 9.4-33.9 0l-22.6-22.6c-9.4-9.4-9.4-24.6 0-33.9l96.4-96.4-96.4-96.4c-9.4-9.4-9.4-24.6 0-33.9L54.3 103c9.4-9.4 24.6-9.4 33.9 0l136 136c9.5 9.4 9.5 24.6.1 34z\"/>
                                    </svg>
                                    <svg viewBox=\"0 0 320 512\" height=\"24\" title=\"angle-down\" class=\"down-icon\" fill=\"white\">
                                        <path d=\"M143 352.3L7 216.3c-9.4-9.4-9.4-24.6 0-33.9l22.6-22.6c9.4-9.4 24.6-9.4 33.9 0l96.4 96.4 96.4-96.4c9.4-9.4 24.6-9.4 33.9 0l22.6 22.6c9.4 9.4 9.4 24.6 0 33.9l-136 136c-9.2 9.4-24.4 9.4-33.8 0z\"/>
                                    </svg>
                                </div>
                                <div class=\"content py-2\">
                                    ";
        // line 70
        if ((0 === twig_compare((isset($context["checkAllPreferences"]) || array_key_exists("checkAllPreferences", $context) ? $context["checkAllPreferences"] : (function () { throw new RuntimeError('Variable "checkAllPreferences" does not exist.', 70, $this->source); })()), false))) {
            // line 71
            echo "                                     <p>Aucune préférence pour l'instant</p>
                                    ";
        } else {
            // line 73
            echo "                                        <div class=\"form-info mx-auto col-xs-12 col-sm-10 col-md-9\">
                                            ";
            // line 74
            if ((0 !== twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 74, $this->source); })()), "travelPreferences", [], "any", false, false, false, 74), "discussion", [], "any", false, false, false, 74), null))) {
                // line 75
                echo "                                                <h6>
                                                    Discussion :
                                                </h6>
                                                <p class=\"custom-field-form\">";
                // line 78
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 78, $this->source); })()), "travelPreferences", [], "any", false, false, false, 78), "discussion", [], "any", false, false, false, 78), "html", null, true);
                echo "</p>
                                            ";
            }
            // line 80
            echo "                                            ";
            if ((0 !== twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 80, $this->source); })()), "travelPreferences", [], "any", false, false, false, 80), "smoking", [], "any", false, false, false, 80), null))) {
                // line 81
                echo "                                                <h6>
                                                    Fumeur :
                                                </h6>
                                                <p class=\"custom-field-form\">";
                // line 84
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 84, $this->source); })()), "travelPreferences", [], "any", false, false, false, 84), "smoking", [], "any", false, false, false, 84), "html", null, true);
                echo "</p>
                                            ";
            }
            // line 86
            echo "                                                ";
            if ((0 !== twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 86, $this->source); })()), "travelPreferences", [], "any", false, false, false, 86), "music", [], "any", false, false, false, 86), null))) {
                // line 87
                echo "                                                <h6>
                                                    Musique :
                                                </h6>
                                                <p class=\"custom-field-form\">";
                // line 90
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 90, $this->source); })()), "travelPreferences", [], "any", false, false, false, 90), "music", [], "any", false, false, false, 90), "html", null, true);
                echo "</p>
                                            ";
            }
            // line 92
            echo "                                            ";
            if ((0 !== twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 92, $this->source); })()), "travelPreferences", [], "any", false, false, false, 92), "animals", [], "any", false, false, false, 92), null))) {
                // line 93
                echo "                                                <h6>
                                                    Animaux :
                                                </h6>
                                                <p class=\"custom-field-form\">";
                // line 96
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 96, $this->source); })()), "travelPreferences", [], "any", false, false, false, 96), "animals", [], "any", false, false, false, 96), "html", null, true);
                echo "</p>
                                                ";
            }
            // line 98
            echo "                                            ";
            if ((0 !== twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 98, $this->source); })()), "travelPreferences", [], "any", false, false, false, 98), "healthPass", [], "any", false, false, false, 98), null))) {
                // line 99
                echo "                                                <h6>
                                                    Pass Sanitaire :
                                                </h6>
                                                <p class=\"custom-field-form\">";
                // line 102
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 102, $this->source); })()), "travelPreferences", [], "any", false, false, false, 102), "healthPass", [], "any", false, false, false, 102), "html", null, true);
                echo "</p>
                                            ";
            }
            // line 104
            echo "                                        </div>
                                    ";
        }
        // line 106
        echo "                                </div>
                            </label>
                            <label class=\"accordion-wrapper\">
                                <input type=\"checkbox\" class=\"accordion\" hidden/>
                                <div class=\"title\">
                                    <strong>Son véhicule</strong>
                                    <svg viewBox=\"0 0 256 512\" width=\"12\" title=\"angle-right\" class=\"side-icon\" fill=\"white\">
                                        <path d=\"M224.3 273l-136 136c-9.4 9.4-24.6 9.4-33.9 0l-22.6-22.6c-9.4-9.4-9.4-24.6 0-33.9l96.4-96.4-96.4-96.4c-9.4-9.4-9.4-24.6 0-33.9L54.3 103c9.4-9.4 24.6-9.4 33.9 0l136 136c9.5 9.4 9.5 24.6.1 34z\"/>
                                    </svg>
                                    <svg viewBox=\"0 0 320 512\" height=\"24\" title=\"angle-down\" class=\"down-icon\" fill=\"white\">
                                        <path d=\"M143 352.3L7 216.3c-9.4-9.4-9.4-24.6 0-33.9l22.6-22.6c9.4-9.4 24.6-9.4 33.9 0l96.4 96.4 96.4-96.4c9.4-9.4 24.6-9.4 33.9 0l22.6 22.6c9.4 9.4 9.4 24.6 0 33.9l-136 136c-9.2 9.4-24.4 9.4-33.8 0z\"/>
                                    </svg>
                                </div>
                                <div class=\"content py-2\">
                                    ";
        // line 120
        if ((0 === twig_compare((isset($context["checkAllVehiculeInfos"]) || array_key_exists("checkAllVehiculeInfos", $context) ? $context["checkAllVehiculeInfos"] : (function () { throw new RuntimeError('Variable "checkAllVehiculeInfos" does not exist.', 120, $this->source); })()), false))) {
            // line 121
            echo "                                        <p class=\"p-4\">Aucun véhicule renseigné pour l'instant</p>
                                    ";
        } else {
            // line 123
            echo "                                    <div class=\"row mx-auto form-info\">
                                        <div class=\"col-xs-12 col-sm-6 col-md-6 d-flex flex-column pl-5 justify-content-center\">
                                            ";
            // line 125
            if ((0 !== twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 125, $this->source); })()), "vehicule", [], "any", false, false, false, 125), "brand", [], "any", false, false, false, 125), null))) {
                // line 126
                echo "                                                <p class=\"vehicule-profile\">Marque :
                                                    ";
                // line 127
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 127, $this->source); })()), "vehicule", [], "any", false, false, false, 127), "brand", [], "any", false, false, false, 127), "html", null, true);
                echo "</p>
                                            ";
            }
            // line 129
            echo "                                            ";
            if ((0 !== twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 129, $this->source); })()), "vehicule", [], "any", false, false, false, 129), "model", [], "any", false, false, false, 129), null))) {
                // line 130
                echo "                                                <p class=\"vehicule-profile\">Modèle :
                                                ";
                // line 131
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 131, $this->source); })()), "vehicule", [], "any", false, false, false, 131), "model", [], "any", false, false, false, 131), "html", null, true);
                echo "</p>
                                            ";
            }
            // line 133
            echo "                                            ";
            if ((0 !== twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 133, $this->source); })()), "vehicule", [], "any", false, false, false, 133), "color", [], "any", false, false, false, 133), null))) {
                // line 134
                echo "                                                <p class=\"vehicule-profile\">Couleur :
                                                    ";
                // line 135
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 135, $this->source); })()), "vehicule", [], "any", false, false, false, 135), "color", [], "any", false, false, false, 135), "html", null, true);
                echo "</p>
                                            ";
            }
            // line 137
            echo "                                        </div>
                                        <div class=\"col-xs-12 col-sm-6 col-md-6 d-flex justify-content-center\">
                                           <img class=\"profile-picture-profile\" src=\"";
            // line 139
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("/assets/uploads/vehiculePicture/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 139, $this->source); })()), "vehicule", [], "any", false, false, false, 139), "vehiculePicture", [], "any", false, false, false, 139))), "html", null, true);
            echo "\"/>
                                        </div>
                                    </div>
                                    ";
        }
        // line 143
        echo "                                </div>
                            </label>
                            <div class=\"row justify-content-around mt-4\">
                                <div class=\"col-6\">
                                    <div class=\"card-profile\"> 
                                        <a href=\"";
        // line 148
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("message_discussion_details", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 148, $this->source); })()), "id", [], "any", false, false, false, 148)]), "html", null, true);
        echo "\">
                                            <div class=\"card-profile-content justify-content-center\">
                                                <i class=\"far fa-envelope\"></i>
                                                <p>Contacter ";
        // line 151
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 151, $this->source); })()), "firstName", [], "any", false, false, false, 151), "html", null, true);
        echo "</p>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class=\"col-6\">
                                    <div class=\"card-profile\">
                                        <a href=\"";
        // line 158
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("review_show", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 158, $this->source); })()), "id", [], "any", false, false, false, 158)]), "html", null, true);
        echo "\">
                                            <div class=\"card-profile-content justify-content-center\">
                                                <i class=\"far fa-star\"></i>
                                                <p>Avis</p>
                                            </div>
                                        </a>
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
        return array (  364 => 158,  354 => 151,  348 => 148,  341 => 143,  334 => 139,  330 => 137,  325 => 135,  322 => 134,  319 => 133,  314 => 131,  311 => 130,  308 => 129,  303 => 127,  300 => 126,  298 => 125,  294 => 123,  290 => 121,  288 => 120,  272 => 106,  268 => 104,  263 => 102,  258 => 99,  255 => 98,  250 => 96,  245 => 93,  242 => 92,  237 => 90,  232 => 87,  229 => 86,  224 => 84,  219 => 81,  216 => 80,  211 => 78,  206 => 75,  204 => 74,  201 => 73,  197 => 71,  195 => 70,  170 => 48,  165 => 45,  159 => 43,  157 => 42,  148 => 35,  140 => 32,  137 => 31,  129 => 28,  126 => 27,  124 => 26,  116 => 21,  109 => 17,  105 => 16,  97 => 11,  93 => 9,  83 => 8,  64 => 6,  53 => 4,  51 => 2,  49 => 1,  36 => 4,);
    }

    public function getSourceContext()
    {
        return new Source("{% set checkAllPreferences = (user.travelPreferences.discussion != null) and (user.travelPreferences.smoking != null) and (user.travelPreferences.music != null) and (user.travelPreferences.animals != null) and (user.travelPreferences.healthPass != null) %}
{% set checkAllVehiculeInfos = (user.vehicule.brand != null) and (user.vehicule.color != null) and (user.vehicule.model != null) %}

{% extends 'base.html.twig' %}

{% block title %}Profil utilisateur{% endblock %}

{% block body %}
    <div class=\"mx-auto form-info mt-3\">
<div class=\"container my-4\">
    <h4 class=\"text-center\">Profil de {{ user.firstName }} </h4>
</div>
                        <div class=\"main-info-profile\">
                            <div class=\"row\">
                                <div class=\"col-xs-12 col-sm-4 col-md-4 d-flex flex-column align-items-center justify-content-center\">
                                    <p class=\"\">{{ user.firstName }}</p>
                                    <p class=\"experience-profile\">{{ user.userExperience.experienceLevel }}</p>
                                    <p class=\"experience-profile d-flex flex-column align-items-center justify-content-center\">
                                        Trajets effectué</p>
                                    <p class=\"experience-profile d-flex flex-column align-items-center justify-content-center\">
                                        <strong>{{ user.tripsMade }}</strong>
                                    </p>
                                </div>
                                <div class=\"col-xs-12 col-sm-4 col-md-4\"></div>
                                <div class=\"col-xs-12 col-sm-4 col-md-4\">
                                    {% if user.profile_picture != '' %}
                                        <div class=\"existing-file\">
                                            <a href=\"{{ asset ('/assets/uploads/profilePicture/') ~ user.profile_picture }}\" target=\"_blank\"><img class=\"profile-picture-profile\" src=\"{{ asset ('/assets/uploads/profilePicture/') ~ user.profile_picture }}\"/></a>
                                        </div>
                                    {% else %}
                                        <div class=\"existing-file\">
                                            <a href=\"{{ asset ('/assets/uploads/profilePicture/default_profile_picture.jpg') }}\" target=\"_blank\"><img class=\"profile-picture-profile\" src=\"{{ asset ('/assets/uploads/profilePicture/default_profile_picture.jpg') }}\"/></a>
                                        </div>
                                     {% endif %}

                                </div>
                            </div>

                                <div class=\"row justify-content-between\">
                                    <div class=\"col-xs-12 col-sm-6 col-md-6\">
                                        <div class=\"input-profile-apropos\">
                                        {% if user.bio != '' %}
                                            <p class=\"text-center\">{{user.bio}}</p>
                                        {% endif %}
                                        </div>
                                    </div>
                                    <div class=\"col-xs-12 col-sm-6 col-md-6\">
                                        <p class=\"text-center mt-4 ml-5\"><i style=\"color: gold;\"class=\"fas fa-star\"></i>{{user.globalRating ?  user.globalRating|round(1, 'floor') : 'Aucune note pour l\\'instant'}}</p>
                                    </div>
                                </div>
                        </div>
                           
                        <div class=\"main-info-profile\">
                            <div class=\"d-flex justify-content-center\">
                                <span class=\"profile-separator\"></div>
                            </div>

                            <label class=\"accordion-wrapper\">
                                <input type=\"checkbox\" class=\"accordion\" hidden/>
                                <div class=\"title\">
                                    <strong>Ses préférences de voyage</strong>
                                    <svg viewBox=\"0 0 256 512\" width=\"12\" title=\"angle-right\" class=\"side-icon\" fill=\"white\">
                                        <path d=\"M224.3 273l-136 136c-9.4 9.4-24.6 9.4-33.9 0l-22.6-22.6c-9.4-9.4-9.4-24.6 0-33.9l96.4-96.4-96.4-96.4c-9.4-9.4-9.4-24.6 0-33.9L54.3 103c9.4-9.4 24.6-9.4 33.9 0l136 136c9.5 9.4 9.5 24.6.1 34z\"/>
                                    </svg>
                                    <svg viewBox=\"0 0 320 512\" height=\"24\" title=\"angle-down\" class=\"down-icon\" fill=\"white\">
                                        <path d=\"M143 352.3L7 216.3c-9.4-9.4-9.4-24.6 0-33.9l22.6-22.6c9.4-9.4 24.6-9.4 33.9 0l96.4 96.4 96.4-96.4c9.4-9.4 24.6-9.4 33.9 0l22.6 22.6c9.4 9.4 9.4 24.6 0 33.9l-136 136c-9.2 9.4-24.4 9.4-33.8 0z\"/>
                                    </svg>
                                </div>
                                <div class=\"content py-2\">
                                    {% if checkAllPreferences == false %}
                                     <p>Aucune préférence pour l'instant</p>
                                    {% else %}
                                        <div class=\"form-info mx-auto col-xs-12 col-sm-10 col-md-9\">
                                            {% if user.travelPreferences.discussion != null %}
                                                <h6>
                                                    Discussion :
                                                </h6>
                                                <p class=\"custom-field-form\">{{ user.travelPreferences.discussion }}</p>
                                            {% endif %}
                                            {% if user.travelPreferences.smoking != null %}
                                                <h6>
                                                    Fumeur :
                                                </h6>
                                                <p class=\"custom-field-form\">{{ user.travelPreferences.smoking }}</p>
                                            {% endif %}
                                                {% if user.travelPreferences.music != null %}
                                                <h6>
                                                    Musique :
                                                </h6>
                                                <p class=\"custom-field-form\">{{ user.travelPreferences.music }}</p>
                                            {% endif %}
                                            {% if user.travelPreferences.animals != null %}
                                                <h6>
                                                    Animaux :
                                                </h6>
                                                <p class=\"custom-field-form\">{{ user.travelPreferences.animals }}</p>
                                                {% endif %}
                                            {% if user.travelPreferences.healthPass != null %}
                                                <h6>
                                                    Pass Sanitaire :
                                                </h6>
                                                <p class=\"custom-field-form\">{{ user.travelPreferences.healthPass }}</p>
                                            {% endif %}
                                        </div>
                                    {% endif %}
                                </div>
                            </label>
                            <label class=\"accordion-wrapper\">
                                <input type=\"checkbox\" class=\"accordion\" hidden/>
                                <div class=\"title\">
                                    <strong>Son véhicule</strong>
                                    <svg viewBox=\"0 0 256 512\" width=\"12\" title=\"angle-right\" class=\"side-icon\" fill=\"white\">
                                        <path d=\"M224.3 273l-136 136c-9.4 9.4-24.6 9.4-33.9 0l-22.6-22.6c-9.4-9.4-9.4-24.6 0-33.9l96.4-96.4-96.4-96.4c-9.4-9.4-9.4-24.6 0-33.9L54.3 103c9.4-9.4 24.6-9.4 33.9 0l136 136c9.5 9.4 9.5 24.6.1 34z\"/>
                                    </svg>
                                    <svg viewBox=\"0 0 320 512\" height=\"24\" title=\"angle-down\" class=\"down-icon\" fill=\"white\">
                                        <path d=\"M143 352.3L7 216.3c-9.4-9.4-9.4-24.6 0-33.9l22.6-22.6c9.4-9.4 24.6-9.4 33.9 0l96.4 96.4 96.4-96.4c9.4-9.4 24.6-9.4 33.9 0l22.6 22.6c9.4 9.4 9.4 24.6 0 33.9l-136 136c-9.2 9.4-24.4 9.4-33.8 0z\"/>
                                    </svg>
                                </div>
                                <div class=\"content py-2\">
                                    {% if checkAllVehiculeInfos == false %}
                                        <p class=\"p-4\">Aucun véhicule renseigné pour l'instant</p>
                                    {% else %}
                                    <div class=\"row mx-auto form-info\">
                                        <div class=\"col-xs-12 col-sm-6 col-md-6 d-flex flex-column pl-5 justify-content-center\">
                                            {% if user.vehicule.brand != null %}
                                                <p class=\"vehicule-profile\">Marque :
                                                    {{ user.vehicule.brand }}</p>
                                            {% endif %}
                                            {% if user.vehicule.model != null %}
                                                <p class=\"vehicule-profile\">Modèle :
                                                {{ user.vehicule.model }}</p>
                                            {% endif %}
                                            {% if user.vehicule.color != null %}
                                                <p class=\"vehicule-profile\">Couleur :
                                                    {{ user.vehicule.color }}</p>
                                            {% endif %}
                                        </div>
                                        <div class=\"col-xs-12 col-sm-6 col-md-6 d-flex justify-content-center\">
                                           <img class=\"profile-picture-profile\" src=\"{{ asset ('/assets/uploads/vehiculePicture/' ~ user.vehicule.vehiculePicture ) }}\"/>
                                        </div>
                                    </div>
                                    {% endif %}
                                </div>
                            </label>
                            <div class=\"row justify-content-around mt-4\">
                                <div class=\"col-6\">
                                    <div class=\"card-profile\"> 
                                        <a href=\"{{path('message_discussion_details', {'id': user.id})}}\">
                                            <div class=\"card-profile-content justify-content-center\">
                                                <i class=\"far fa-envelope\"></i>
                                                <p>Contacter {{user.firstName}}</p>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class=\"col-6\">
                                    <div class=\"card-profile\">
                                        <a href=\"{{ path ('review_show', {'id': user.id})}}\">
                                            <div class=\"card-profile-content justify-content-center\">
                                                <i class=\"far fa-star\"></i>
                                                <p>Avis</p>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
{% endblock %}
", "user/show.html.twig", "/shared/httpd/Projet-Final/templates/user/show.html.twig");
    }
}

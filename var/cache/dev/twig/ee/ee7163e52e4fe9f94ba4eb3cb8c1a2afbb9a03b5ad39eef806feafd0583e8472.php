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
        // line 4
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/edit.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/edit.html.twig"));

        // line 1
        $context["checkAllPreferences"] = (((((0 !== twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 1, $this->source); })()), "travelPreferences", [], "any", false, false, false, 1), "discussion", [], "any", false, false, false, 1), null)) && (0 !== twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 1, $this->source); })()), "travelPreferences", [], "any", false, false, false, 1), "smoking", [], "any", false, false, false, 1), null))) && (0 !== twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 1, $this->source); })()), "travelPreferences", [], "any", false, false, false, 1), "music", [], "any", false, false, false, 1), null))) && (0 !== twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 1, $this->source); })()), "travelPreferences", [], "any", false, false, false, 1), "animals", [], "any", false, false, false, 1), null))) && (0 !== twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 1, $this->source); })()), "travelPreferences", [], "any", false, false, false, 1), "healthPass", [], "any", false, false, false, 1), null)));
        // line 2
        $context["checkAllVehiculeInfos"] = (((0 !== twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 2, $this->source); })()), "vehicule", [], "any", false, false, false, 2), "brand", [], "any", false, false, false, 2), null)) && (0 !== twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 2, $this->source); })()), "vehicule", [], "any", false, false, false, 2), "color", [], "any", false, false, false, 2), null))) && (0 !== twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 2, $this->source); })()), "vehicule", [], "any", false, false, false, 2), "model", [], "any", false, false, false, 2), null)));
        // line 4
        $this->parent = $this->loadTemplate("base.html.twig", "user/edit.html.twig", 4);
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

        echo "Edit User
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 9
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "<div class=\"container-profile\">
    <div class=\"row d-flex justify-content-center\">
        <div class=\"col-12 mt-4 welcome-profile align-items-center\">
            <h2 class=\"mx-auto text-center\">Bienvenue ";
        // line 13
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 13, $this->source); })()), "firstName", [], "any", false, false, false, 13), "html", null, true);
        echo " !</h2>
            <p>
                Depuis votre espace membre, vous pouvrez remplir des informations vous concernant et utile à la communauté. Vous retrouverez ici l'historique de vos trajets ainsi que vos informations personnelles.
            </p>
            <p>Pour commencer où mettre à jour l'avancée d'un trajet, rendez-vous dans l'onglet \"<span class=\"bold-yellow\">Mes trajets</span>\"</p>
            <p> Les informations du résumé seront visible par les autres utilisateurs, n'oublier pas de les remplirs depuis les onglets
                    \"<span class=\"bold-yellow\">Mes préférences de voyage</span>\", 
                    \"<span class=\"bold-yellow\">Mon véhicule</span>\" et 
                    \"<span class=\"bold-yellow\">Informations personnelles</span>\" !
            </p>
            <p><span class=\"bold-yellow\">Bonne route !</span></p>
        </div>
    </div>
    <div class=\"row\">
        <div class=\"col-3 d-flex justify-content-center\">
            <ul class=\"nav nav-tabs d-flex flex-column\" role=\"tablist\">
                <li class=\"nav-item-test\">
                    <a class=\"nav-link-test  tab-custom-test active\" data-toggle=\"tab\" href=\"#tabs-1\" role=\"tab\">
                        <div class=\"d-flex flex-column justify-content-center align-items-center\">
                                <i class=\"far fa-id-badge d-flex align-items-center\"></i> 
                                <p>Résumé</p>
                        </div>
                    </a>
                </li>
                <li class=\"nav-item-test\">
                    <a class=\"tab-custom-test \" data-toggle=\"tab\" href=\"#tabs-2\" role=\"tab\">
                        <div class=\"d-flex flex-column justify-content-center align-items-center\">
                            <i class=\"fas fa-info d-flex align-items-center\"></i> 
                            <p>Informations personnelles</p>
                        </div>
                    </a>
                </li>
                <li class=\"nav-item-test\">
                    <a class=\"tab-custom-test\" data-toggle=\"tab\" href=\"#tabs-3\" role=\"tab\">
                        <div class=\"d-flex flex-column justify-content-center align-items-center\">
                            <i class=\"fas fa-suitcase-rolling d-flex align-items-center\"></i> 
                            <p>Préférences de Voyage</p>
                        </div>
                    </a>
                </li>
                <li class=\"nav-item-test\">
                    <a class=\"tab-custom-test\" data-toggle=\"tab\" href=\"#tabs-4\" role=\"tab\">
                        <div class=\"d-flex flex-column justify-content-center align-items-center\">
                            <i class=\"fas fa-car d-flex align-items-center\"></i> 
                            <p>Mon Véhicule</p>
                        </div>
                    </a>
                </li>
                <li class=\"nav-item-test\">
                    <a class=\"tab-custom-test\" data-toggle=\"tab\" href=\"#tabs-5\" role=\"tab\">
                        <div class=\"d-flex flex-column justify-content-center align-items-center\">
                                <i class=\"fas fa-route d-flex align-items-center\"></i> 
                                <p>Mes trajets</p>
                        </div>
                    </a>
                </li>
                <li class=\"nav-item-test\">
                    <a class=\"tab-custom-test\" data-toggle=\"tab\" href=\"#tabs-6\" role=\"tab\">
                        <div class=\"d-flex flex-column justify-content-center align-items-center\">
                            <i class=\"fas fa-user-circle d-flex align-items-center\"></i> 
                            <p>Mon compte</p>
                        </div>
                    </a>
                </li>
            </ul>
        </div>
        <div class=\"col-9\">
            ";
        // line 80
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 80, $this->source); })()), "flashes", [0 => "success"], "method", false, false, false, 80));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 81
            echo "                <div class=\"alert alert-success text-white\">
                    ";
            // line 82
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 85
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 85, $this->source); })()), "flashes", [0 => "error"], "method", false, false, false, 85));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 86
            echo "                <div class=\"alert alert-error text-white\">
                    ";
            // line 87
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 90
        echo "            <div class=\"tab-content\">
                <div class=\"tab-pane active section-padding\" id=\"tabs-1\" role=\"tabpanel\">
                    <div class=\"mx-auto form-info\">
                        <div class=\"main-info-profile\">
                            <div class=\"row\">
                                <div class=\"col-xs-12 col-sm-4 col-md-4 d-flex flex-column align-items-center justify-content-center\">
                                    <p class=\"\">";
        // line 96
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 96, $this->source); })()), "firstName", [], "any", false, false, false, 96), "html", null, true);
        echo "</p>
                                    <p class=\"experience-profile\">";
        // line 97
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 97, $this->source); })()), "userExperience", [], "any", false, false, false, 97), "experienceLevel", [], "any", false, false, false, 97), "html", null, true);
        echo "</p>
                                    <p class=\"experience-profile d-flex flex-column align-items-center justify-content-center\">
                                        Trajets effectué</p>
                                    <p class=\"experience-profile d-flex flex-column align-items-center justify-content-center\">
                                        <strong>";
        // line 101
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 101, $this->source); })()), "tripsMade", [], "any", false, false, false, 101), "html", null, true);
        echo "</strong>
                                    </p>
                                </div>
                                <div class=\"col-xs-12 col-sm-4 col-md-4\"></div>
                                <div class=\"col-xs-12 col-sm-4 col-md-4\">
                                    ";
        // line 106
        if ((0 !== twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 106, $this->source); })()), "profile_picture", [], "any", false, false, false, 106), ""))) {
            // line 107
            echo "                                        <div class=\"existing-file\">
                                            <a href=\"";
            // line 108
            echo twig_escape_filter($this->env, ($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/assets/uploads/profilePicture/") . twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 108, $this->source); })()), "profile_picture", [], "any", false, false, false, 108)), "html", null, true);
            echo "\" target=\"_blank\"><img class=\"profile-picture-profile\" src=\"";
            echo twig_escape_filter($this->env, ($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/assets/uploads/profilePicture/") . twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 108, $this->source); })()), "profile_picture", [], "any", false, false, false, 108)), "html", null, true);
            echo "\"/></a>
                                        </div>
                                    ";
        } else {
            // line 111
            echo "                                        <div class=\"existing-file\">
                                            <a href=\"";
            // line 112
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/assets/uploads/profilePicture/default_profile_picture.jpg"), "html", null, true);
            echo "\" target=\"_blank\"><img class=\"profile-picture-profile\" src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/assets/uploads/profilePicture/default_profile_picture.jpg"), "html", null, true);
            echo "\"/></a>
                                        </div>
                                    ";
        }
        // line 115
        echo "                                </div>
                            </div>
                        </div>
                        <div class=\"main-info-profile\">
                            <div class=\"d-flex justify-content-center\">
                                <span class=\"profile-separator\"></div>
                            </div>

                            <label class=\"accordion-wrapper\">
                                <input type=\"checkbox\" class=\"accordion\" hidden/>
                                <div class=\"title\">
                                    <strong>Mes préférences de voyage</strong>
                                    <svg viewBox=\"0 0 256 512\" width=\"12\" title=\"angle-right\" class=\"side-icon\" fill=\"white\">
                                        <path d=\"M224.3 273l-136 136c-9.4 9.4-24.6 9.4-33.9 0l-22.6-22.6c-9.4-9.4-9.4-24.6 0-33.9l96.4-96.4-96.4-96.4c-9.4-9.4-9.4-24.6 0-33.9L54.3 103c9.4-9.4 24.6-9.4 33.9 0l136 136c9.5 9.4 9.5 24.6.1 34z\"/>
                                    </svg>
                                    <svg viewBox=\"0 0 320 512\" height=\"24\" title=\"angle-down\" class=\"down-icon\" fill=\"white\">
                                        <path d=\"M143 352.3L7 216.3c-9.4-9.4-9.4-24.6 0-33.9l22.6-22.6c9.4-9.4 24.6-9.4 33.9 0l96.4 96.4 96.4-96.4c9.4-9.4 24.6-9.4 33.9 0l22.6 22.6c9.4 9.4 9.4 24.6 0 33.9l-136 136c-9.2 9.4-24.4 9.4-33.8 0z\"/>
                                    </svg>
                                </div>
                                <div class=\"content py-2\">
                                    ";
        // line 135
        if ((0 === twig_compare((isset($context["checkAllPreferences"]) || array_key_exists("checkAllPreferences", $context) ? $context["checkAllPreferences"] : (function () { throw new RuntimeError('Variable "checkAllPreferences" does not exist.', 135, $this->source); })()), false))) {
            // line 136
            echo "                                     <p>Veuillez renseigner vos préférences pour les consulters et les rendre visibles.</p>
                                    ";
        } else {
            // line 138
            echo "                                        <div class=\"form-info mx-auto col-xs-12 col-sm-10 col-md-9\">
                                            ";
            // line 139
            if ((0 !== twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 139, $this->source); })()), "travelPreferences", [], "any", false, false, false, 139), "discussion", [], "any", false, false, false, 139), null))) {
                // line 140
                echo "                                                <h6>
                                                    Discussion :
                                                </h6>
                                                <p class=\"custom-field-form\">";
                // line 143
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 143, $this->source); })()), "travelPreferences", [], "any", false, false, false, 143), "discussion", [], "any", false, false, false, 143), "html", null, true);
                echo "</p>
                                            ";
            }
            // line 145
            echo "                                            ";
            if ((0 !== twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 145, $this->source); })()), "travelPreferences", [], "any", false, false, false, 145), "smoking", [], "any", false, false, false, 145), null))) {
                // line 146
                echo "                                                <h6>
                                                    Fumeur :
                                                </h6>
                                                <p class=\"custom-field-form\">";
                // line 149
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 149, $this->source); })()), "travelPreferences", [], "any", false, false, false, 149), "smoking", [], "any", false, false, false, 149), "html", null, true);
                echo "</p>
                                            ";
            }
            // line 151
            echo "                                                ";
            if ((0 !== twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 151, $this->source); })()), "travelPreferences", [], "any", false, false, false, 151), "music", [], "any", false, false, false, 151), null))) {
                // line 152
                echo "                                                <h6>
                                                    Musique :
                                                </h6>
                                                <p class=\"custom-field-form\">";
                // line 155
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 155, $this->source); })()), "travelPreferences", [], "any", false, false, false, 155), "music", [], "any", false, false, false, 155), "html", null, true);
                echo "</p>
                                            ";
            }
            // line 157
            echo "                                            ";
            if ((0 !== twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 157, $this->source); })()), "travelPreferences", [], "any", false, false, false, 157), "animals", [], "any", false, false, false, 157), null))) {
                // line 158
                echo "                                                <h6>
                                                    Animaux :
                                                </h6>
                                                <p class=\"custom-field-form\">";
                // line 161
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 161, $this->source); })()), "travelPreferences", [], "any", false, false, false, 161), "animals", [], "any", false, false, false, 161), "html", null, true);
                echo "</p>
                                                ";
            }
            // line 163
            echo "                                            ";
            if ((0 !== twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 163, $this->source); })()), "travelPreferences", [], "any", false, false, false, 163), "healthPass", [], "any", false, false, false, 163), null))) {
                // line 164
                echo "                                                <h6>
                                                    Pass Sanitaire :
                                                </h6>
                                                <p class=\"custom-field-form\">";
                // line 167
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 167, $this->source); })()), "travelPreferences", [], "any", false, false, false, 167), "healthPass", [], "any", false, false, false, 167), "html", null, true);
                echo "</p>
                                            ";
            }
            // line 169
            echo "                                        </div>
                                    ";
        }
        // line 171
        echo "                                </div>
                            </label>
                            <label class=\"accordion-wrapper\">
                                <input type=\"checkbox\" class=\"accordion\" hidden/>
                                <div class=\"title\">
                                    <strong>Mon véhicule</strong>
                                    <svg viewBox=\"0 0 256 512\" width=\"12\" title=\"angle-right\" class=\"side-icon\" fill=\"white\">
                                        <path d=\"M224.3 273l-136 136c-9.4 9.4-24.6 9.4-33.9 0l-22.6-22.6c-9.4-9.4-9.4-24.6 0-33.9l96.4-96.4-96.4-96.4c-9.4-9.4-9.4-24.6 0-33.9L54.3 103c9.4-9.4 24.6-9.4 33.9 0l136 136c9.5 9.4 9.5 24.6.1 34z\"/>
                                    </svg>
                                    <svg viewBox=\"0 0 320 512\" height=\"24\" title=\"angle-down\" class=\"down-icon\" fill=\"white\">
                                        <path d=\"M143 352.3L7 216.3c-9.4-9.4-9.4-24.6 0-33.9l22.6-22.6c9.4-9.4 24.6-9.4 33.9 0l96.4 96.4 96.4-96.4c9.4-9.4 24.6-9.4 33.9 0l22.6 22.6c9.4 9.4 9.4 24.6 0 33.9l-136 136c-9.2 9.4-24.4 9.4-33.8 0z\"/>
                                    </svg>
                                </div>
                                <div class=\"content py-2\">
                                    ";
        // line 185
        if ((0 === twig_compare((isset($context["checkAllVehiculeInfos"]) || array_key_exists("checkAllVehiculeInfos", $context) ? $context["checkAllVehiculeInfos"] : (function () { throw new RuntimeError('Variable "checkAllVehiculeInfos" does not exist.', 185, $this->source); })()), false))) {
            // line 186
            echo "                                        <p class=\"p-4\">Veuillez renseigner les informations de votre véhicule pour les consulter et les rendre visibles.</p>
                                    ";
        } else {
            // line 188
            echo "                                    <div class=\"row mx-auto form-info\">
                                        <div class=\"col-xs-12 col-sm-6 col-md-6 d-flex flex-column pl-5 justify-content-center\">
                                            ";
            // line 190
            if ((0 !== twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 190, $this->source); })()), "vehicule", [], "any", false, false, false, 190), "brand", [], "any", false, false, false, 190), null))) {
                // line 191
                echo "                                                <p class=\"vehicule-profile\">Marque :
                                                    ";
                // line 192
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 192, $this->source); })()), "vehicule", [], "any", false, false, false, 192), "brand", [], "any", false, false, false, 192), "html", null, true);
                echo "</p>
                                            ";
            }
            // line 194
            echo "                                            ";
            if ((0 !== twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 194, $this->source); })()), "vehicule", [], "any", false, false, false, 194), "model", [], "any", false, false, false, 194), null))) {
                // line 195
                echo "                                                <p class=\"vehicule-profile\">Modèle :
                                                ";
                // line 196
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 196, $this->source); })()), "vehicule", [], "any", false, false, false, 196), "model", [], "any", false, false, false, 196), "html", null, true);
                echo "</p>
                                            ";
            }
            // line 198
            echo "                                            ";
            if ((0 !== twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 198, $this->source); })()), "vehicule", [], "any", false, false, false, 198), "color", [], "any", false, false, false, 198), null))) {
                // line 199
                echo "                                                <p class=\"vehicule-profile\">Couleur :
                                                    ";
                // line 200
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 200, $this->source); })()), "vehicule", [], "any", false, false, false, 200), "color", [], "any", false, false, false, 200), "html", null, true);
                echo "</p>
                                            ";
            }
            // line 202
            echo "                                        </div>
                                        <div class=\"col-xs-12 col-sm-6 col-md-6 d-flex justify-content-center\">
                                           <img class=\"profile-picture-profile\" src=\"";
            // line 204
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("/assets/uploads/vehiculePicture/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 204, $this->source); })()), "vehicule", [], "any", false, false, false, 204), "vehiculePicture", [], "any", false, false, false, 204))), "html", null, true);
            echo "\"/>
                                        </div>
                                    </div>
                                    ";
        }
        // line 208
        echo "                                </div>
                            </label>
                            <div class=\"row justify-content-around mt-4\">
                                <div class=\"col-6\">
                                    <div class=\"card-profile\"> 
                                        <a href=\"";
        // line 213
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("message_discussion", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 213, $this->source); })()), "id", [], "any", false, false, false, 213)]), "html", null, true);
        echo "\">
                                            <div class=\"card-profile-content justify-content-center\">
                                                <i class=\"far fa-envelope\"></i>
                                                <p>Boite de récéption</p>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class=\"col-6\">
                                    <div class=\"card-profile\">
                                        <a href=\"";
        // line 223
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("review_show", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 223, $this->source); })()), "user", [], "any", false, false, false, 223), "id", [], "any", false, false, false, 223)]), "html", null, true);
        echo "\">
                                            <div class=\"card-profile-content justify-content-center\">
                                                <i class=\"far fa-star\"></i>
                                                <p>Vos avis</p>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"tab-pane\" id=\"tabs-2\" role=\"tabpanel\">
                        <div>
                            ";
        // line 236
        echo twig_include($this->env, $context, "user/_form.html.twig");
        echo "
                        </div>
                    </div>
                    <div class=\"tab-pane\" id=\"tabs-3\" role=\"tabpanel\">
                        ";
        // line 240
        echo twig_include($this->env, $context, "travel_preferences/_form.html.twig");
        echo "
                    </div>
                    <div class=\"tab-pane\" id=\"tabs-4\" role=\"tabpanel\">
                        ";
        // line 243
        echo twig_include($this->env, $context, "vehicule/_form.html.twig");
        echo "
                    </div>
                    <div class=\"tab-pane\" id=\"tabs-5\" role=\"tabpanel\">
                        <div class=\"profile-section section-padding\">
                        <div class=\"row justify-content-center \">
                            <div class=\" form-info\">
                                <h3 class=\"col d-flex justify-content-center\">Historique de mes trajets</h3>
                                <div class=\"row justify-content-around\">
                                <p class=\"text-center\">Vos 3 derniers trajets</p>
                                    ";
        // line 252
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["trips"]) || array_key_exists("trips", $context) ? $context["trips"] : (function () { throw new RuntimeError('Variable "trips" does not exist.', 252, $this->source); })()));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["trip"]) {
            // line 253
            echo "                                        ";
            if ((-1 === twig_compare(twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 253), 3))) {
                // line 254
                echo "                                            <div class=\"col-12 col-sm-4 my-2\">
                                                <div class=\"card-profile-last-trip\"> 
                                                    <div class=\"card-profile-content\">
                                                        <div class=\"col trip-profile-card\">
                                                            <div class=\"col d-flex justify-content-center\">
                                                            <p>";
                // line 259
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["trip"], "departure", [], "any", false, false, false, 259), "html", null, true);
                echo " -> ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["trip"], "arrival", [], "any", false, false, false, 259), "html", null, true);
                echo "</p>
                                                            </div>
                                                            <div class=\"col d-flex justify-content-center my-2\"><p>";
                // line 261
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["trip"], "dateOfTrip", [], "any", false, false, false, 261), "d M"), "html", null, true);
                echo "</p></div>
                                                            <div class=\"col d-flex  justify-content-center align-items-center my-2\">
                                                                <a href=\"";
                // line 263
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("trip_details", ["id" => twig_get_attribute($this->env, $this->source, $context["trip"], "id", [], "any", false, false, false, 263)]), "html", null, true);
                echo "\" class=\"btn\">
                                                                    <i class=\"far fa-eye\"></i>
                                                                </a>
                                                            </div>
                                                            ";
                // line 267
                if (((0 !== twig_compare(twig_get_attribute($this->env, $this->source, $context["trip"], "tripStarted", [], "any", false, false, false, 267), true)) && (0 !== twig_compare(twig_get_attribute($this->env, $this->source, $context["trip"], "tripCompleted", [], "any", false, false, false, 267), true)))) {
                    // line 268
                    echo "                                                                <div class=\"col d-flex flex-column align-items-center\">
                                                                    <a href=\"";
                    // line 269
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("trip_start", ["id" => twig_get_attribute($this->env, $this->source, $context["trip"], "id", [], "any", false, false, false, 269)]), "html", null, true);
                    echo "\" onclick=\"return prompt('Voulez vous commencer le trajet ? Taper \\'Oui\\' pour commencer') == 'Oui'\" href=\"\" class=\"trip-start-button\">Commencer</a>
                                                                </div>
                                                            ";
                } elseif ((0 === twig_compare(twig_get_attribute($this->env, $this->source,                 // line 271
$context["trip"], "tripCompleted", [], "any", false, false, false, 271), true))) {
                    // line 272
                    echo "                                                                <div class=\"col d-flex flex-column align-items-center\">
                                                                    <a class=\"trip-finish-button\">Trajet terminé</a>
                                                                </div>
                                                            ";
                } else {
                    // line 276
                    echo "                                                                <div class=\"col d-flex flex-column align-items-center\">
                                                                    <div class=\"row d-flex \">Trajet en cours</div>
                                                                    <a href=\"";
                    // line 278
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("trip_finish", ["id" => twig_get_attribute($this->env, $this->source, $context["trip"], "id", [], "any", false, false, false, 278)]), "html", null, true);
                    echo "\" class=\"btn btn-info\">Terminer le trajet</a>
                                                                </div>
                                                            ";
                }
                // line 281
                echo "                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        ";
            }
            // line 286
            echo "                                    ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trip'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 287
        echo "                                </div>
                        <label class=\"accordion-wrapper\">
                            <input type=\"checkbox\" class=\"accordion\" hidden/>
                            <div class=\"title\">
                                <strong>Tous mes trajets</strong>
                                <svg viewBox=\"0 0 256 512\" width=\"12\" title=\"angle-right\" class=\"side-icon\" fill=\"white\">
                                    <path d=\"M224.3 273l-136 136c-9.4 9.4-24.6 9.4-33.9 0l-22.6-22.6c-9.4-9.4-9.4-24.6 0-33.9l96.4-96.4-96.4-96.4c-9.4-9.4-9.4-24.6 0-33.9L54.3 103c9.4-9.4 24.6-9.4 33.9 0l136 136c9.5 9.4 9.5 24.6.1 34z\"/>
                                </svg>
                                <svg viewBox=\"0 0 320 512\" height=\"24\" title=\"angle-down\" class=\"down-icon\" fill=\"white\">
                                    <path d=\"M143 352.3L7 216.3c-9.4-9.4-9.4-24.6 0-33.9l22.6-22.6c9.4-9.4 24.6-9.4 33.9 0l96.4 96.4 96.4-96.4c9.4-9.4 24.6-9.4 33.9 0l22.6 22.6c9.4 9.4 9.4 24.6 0 33.9l-136 136c-9.2 9.4-24.4 9.4-33.8 0z\"/>
                                </svg>
                            </div>
                            <div class=\"content\">
                                <div class=\"col-12 pt-3\">
                                    <div class=\"row\">
                                        <div class=\"col d-flex justify-content-center\">Trajet</div>
                                        <div class=\"col d-flex justify-content-around\">Date</div>
                                        <div class=\"col d-flex justify-content-center\">Status</div>
                                        <div class=\"col d-flex justify-content-center\">Détails</div>
                                    </div>
                                    ";
        // line 307
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["trips"]) || array_key_exists("trips", $context) ? $context["trips"] : (function () { throw new RuntimeError('Variable "trips" does not exist.', 307, $this->source); })()));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["trip"]) {
            // line 308
            echo "                                    ";
            if ((1 === twig_compare(twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 308), 2))) {
                // line 309
                echo "                                        <div class=\"row mt-4 line-trip-profile\">
                                            <div class=\"col d-flex justify-content-center\">";
                // line 310
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["trip"], "departure", [], "any", false, false, false, 310), "html", null, true);
                echo "
                                                ->
                                                ";
                // line 312
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["trip"], "arrival", [], "any", false, false, false, 312), "html", null, true);
                echo "</div>
                                            <div class=\"col d-flex justify-content-center\">";
                // line 313
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["trip"], "dateOfTrip", [], "any", false, false, false, 313), "d M"), "html", null, true);
                echo "</div>
                                            ";
                // line 314
                if (((0 !== twig_compare(twig_get_attribute($this->env, $this->source, $context["trip"], "tripStarted", [], "any", false, false, false, 314), true)) && (0 !== twig_compare(twig_get_attribute($this->env, $this->source, $context["trip"], "tripCompleted", [], "any", false, false, false, 314), true)))) {
                    // line 315
                    echo "                                                <div class=\"col d-flex flex-column align-items-center\">
                                                    <a href=\"";
                    // line 316
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("trip_start", ["id" => twig_get_attribute($this->env, $this->source, $context["trip"], "id", [], "any", false, false, false, 316)]), "html", null, true);
                    echo "\" onclick=\"return prompt('Voulez vous commencer le trajet ? Taper \\'Oui\\' pour commencer') == 'Oui'\" href=\"\" class=\"trip-start-button\">Commencer</a>
                                                </div>
                                            ";
                } elseif ((0 === twig_compare(twig_get_attribute($this->env, $this->source,                 // line 318
$context["trip"], "tripCompleted", [], "any", false, false, false, 318), true))) {
                    // line 319
                    echo "                                                <div class=\"col d-flex flex-column align-items-center\">
                                                    <a class=\"trip-finish-button\">Trajet terminé</a>
                                                </div>
                                            ";
                } else {
                    // line 323
                    echo "                                                <div class=\"col d-flex flex-column align-items-center\">
                                                    <div class=\"row d-flex \">Trajet en cours</div>
                                                    <a href=\"";
                    // line 325
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("trip_finish", ["id" => twig_get_attribute($this->env, $this->source, $context["trip"], "id", [], "any", false, false, false, 325)]), "html", null, true);
                    echo "\" class=\"btn btn-info\">Terminer le trajet</a>
                                                </div>
                                            ";
                }
                // line 328
                echo "                                            <div class=\"col d-flex  justify-content-center align-items-center\">
                                                <a href=\"";
                // line 329
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("trip_details", ["id" => twig_get_attribute($this->env, $this->source, $context["trip"], "id", [], "any", false, false, false, 329)]), "html", null, true);
                echo "\" class=\"btn\">
                                                    <i class=\"far fa-eye\"></i>
                                                </a>
                                            </div>
                                        </div>
                                        ";
            }
            // line 335
            echo "                                    ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trip'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 336
        echo "                                </div>
                            </div>
                        </label>
                    </div>
                    </div>
                    </div>
                    </div>
                    <div class=\"tab-pane\" id=\"tabs-6\" role=\"tabpanel\">
                        <div class=\"profile-section section-padding\">
                            <div class=\"row justify-content-center \">
                                <div class=\" form-info\">
                                    <h4 class=\"text-center\">Modifier mon mot de passe</h4>
                                    <div class=\"col-12\">
                                        ";
        // line 349
        echo twig_include($this->env, $context, "user/_form-reset.html.twig");
        echo "
                                        <a href=\"";
        // line 350
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("logout");
        echo "\" class=\"btn btn-danger mb-4\">
                                            <i class=\"fas fa-sign-out-alt\"></i>
                                            Me déconnecter</a>
                                        ";
        // line 353
        echo twig_include($this->env, $context, "user/_delete_form.html.twig");
        echo "
                                    </div>
                                </div>
                            </div>
                        </div>
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
        return "user/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  714 => 353,  708 => 350,  704 => 349,  689 => 336,  675 => 335,  666 => 329,  663 => 328,  657 => 325,  653 => 323,  647 => 319,  645 => 318,  640 => 316,  637 => 315,  635 => 314,  631 => 313,  627 => 312,  622 => 310,  619 => 309,  616 => 308,  599 => 307,  577 => 287,  563 => 286,  556 => 281,  550 => 278,  546 => 276,  540 => 272,  538 => 271,  533 => 269,  530 => 268,  528 => 267,  521 => 263,  516 => 261,  509 => 259,  502 => 254,  499 => 253,  482 => 252,  470 => 243,  464 => 240,  457 => 236,  441 => 223,  428 => 213,  421 => 208,  414 => 204,  410 => 202,  405 => 200,  402 => 199,  399 => 198,  394 => 196,  391 => 195,  388 => 194,  383 => 192,  380 => 191,  378 => 190,  374 => 188,  370 => 186,  368 => 185,  352 => 171,  348 => 169,  343 => 167,  338 => 164,  335 => 163,  330 => 161,  325 => 158,  322 => 157,  317 => 155,  312 => 152,  309 => 151,  304 => 149,  299 => 146,  296 => 145,  291 => 143,  286 => 140,  284 => 139,  281 => 138,  277 => 136,  275 => 135,  253 => 115,  245 => 112,  242 => 111,  234 => 108,  231 => 107,  229 => 106,  221 => 101,  214 => 97,  210 => 96,  202 => 90,  193 => 87,  190 => 86,  185 => 85,  176 => 82,  173 => 81,  169 => 80,  99 => 13,  94 => 10,  84 => 9,  64 => 6,  53 => 4,  51 => 2,  49 => 1,  36 => 4,);
    }

    public function getSourceContext()
    {
        return new Source("{% set checkAllPreferences = (user.travelPreferences.discussion != null) and (user.travelPreferences.smoking != null) and (user.travelPreferences.music != null) and (user.travelPreferences.animals != null) and (user.travelPreferences.healthPass != null) %}
{% set checkAllVehiculeInfos = (user.vehicule.brand != null) and (user.vehicule.color != null) and (user.vehicule.model != null) %}

{% extends 'base.html.twig' %}

{% block title %}Edit User
{% endblock %}

{% block body %}
<div class=\"container-profile\">
    <div class=\"row d-flex justify-content-center\">
        <div class=\"col-12 mt-4 welcome-profile align-items-center\">
            <h2 class=\"mx-auto text-center\">Bienvenue {{user.firstName}} !</h2>
            <p>
                Depuis votre espace membre, vous pouvrez remplir des informations vous concernant et utile à la communauté. Vous retrouverez ici l'historique de vos trajets ainsi que vos informations personnelles.
            </p>
            <p>Pour commencer où mettre à jour l'avancée d'un trajet, rendez-vous dans l'onglet \"<span class=\"bold-yellow\">Mes trajets</span>\"</p>
            <p> Les informations du résumé seront visible par les autres utilisateurs, n'oublier pas de les remplirs depuis les onglets
                    \"<span class=\"bold-yellow\">Mes préférences de voyage</span>\", 
                    \"<span class=\"bold-yellow\">Mon véhicule</span>\" et 
                    \"<span class=\"bold-yellow\">Informations personnelles</span>\" !
            </p>
            <p><span class=\"bold-yellow\">Bonne route !</span></p>
        </div>
    </div>
    <div class=\"row\">
        <div class=\"col-3 d-flex justify-content-center\">
            <ul class=\"nav nav-tabs d-flex flex-column\" role=\"tablist\">
                <li class=\"nav-item-test\">
                    <a class=\"nav-link-test  tab-custom-test active\" data-toggle=\"tab\" href=\"#tabs-1\" role=\"tab\">
                        <div class=\"d-flex flex-column justify-content-center align-items-center\">
                                <i class=\"far fa-id-badge d-flex align-items-center\"></i> 
                                <p>Résumé</p>
                        </div>
                    </a>
                </li>
                <li class=\"nav-item-test\">
                    <a class=\"tab-custom-test \" data-toggle=\"tab\" href=\"#tabs-2\" role=\"tab\">
                        <div class=\"d-flex flex-column justify-content-center align-items-center\">
                            <i class=\"fas fa-info d-flex align-items-center\"></i> 
                            <p>Informations personnelles</p>
                        </div>
                    </a>
                </li>
                <li class=\"nav-item-test\">
                    <a class=\"tab-custom-test\" data-toggle=\"tab\" href=\"#tabs-3\" role=\"tab\">
                        <div class=\"d-flex flex-column justify-content-center align-items-center\">
                            <i class=\"fas fa-suitcase-rolling d-flex align-items-center\"></i> 
                            <p>Préférences de Voyage</p>
                        </div>
                    </a>
                </li>
                <li class=\"nav-item-test\">
                    <a class=\"tab-custom-test\" data-toggle=\"tab\" href=\"#tabs-4\" role=\"tab\">
                        <div class=\"d-flex flex-column justify-content-center align-items-center\">
                            <i class=\"fas fa-car d-flex align-items-center\"></i> 
                            <p>Mon Véhicule</p>
                        </div>
                    </a>
                </li>
                <li class=\"nav-item-test\">
                    <a class=\"tab-custom-test\" data-toggle=\"tab\" href=\"#tabs-5\" role=\"tab\">
                        <div class=\"d-flex flex-column justify-content-center align-items-center\">
                                <i class=\"fas fa-route d-flex align-items-center\"></i> 
                                <p>Mes trajets</p>
                        </div>
                    </a>
                </li>
                <li class=\"nav-item-test\">
                    <a class=\"tab-custom-test\" data-toggle=\"tab\" href=\"#tabs-6\" role=\"tab\">
                        <div class=\"d-flex flex-column justify-content-center align-items-center\">
                            <i class=\"fas fa-user-circle d-flex align-items-center\"></i> 
                            <p>Mon compte</p>
                        </div>
                    </a>
                </li>
            </ul>
        </div>
        <div class=\"col-9\">
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
            <div class=\"tab-content\">
                <div class=\"tab-pane active section-padding\" id=\"tabs-1\" role=\"tabpanel\">
                    <div class=\"mx-auto form-info\">
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
                        </div>
                        <div class=\"main-info-profile\">
                            <div class=\"d-flex justify-content-center\">
                                <span class=\"profile-separator\"></div>
                            </div>

                            <label class=\"accordion-wrapper\">
                                <input type=\"checkbox\" class=\"accordion\" hidden/>
                                <div class=\"title\">
                                    <strong>Mes préférences de voyage</strong>
                                    <svg viewBox=\"0 0 256 512\" width=\"12\" title=\"angle-right\" class=\"side-icon\" fill=\"white\">
                                        <path d=\"M224.3 273l-136 136c-9.4 9.4-24.6 9.4-33.9 0l-22.6-22.6c-9.4-9.4-9.4-24.6 0-33.9l96.4-96.4-96.4-96.4c-9.4-9.4-9.4-24.6 0-33.9L54.3 103c9.4-9.4 24.6-9.4 33.9 0l136 136c9.5 9.4 9.5 24.6.1 34z\"/>
                                    </svg>
                                    <svg viewBox=\"0 0 320 512\" height=\"24\" title=\"angle-down\" class=\"down-icon\" fill=\"white\">
                                        <path d=\"M143 352.3L7 216.3c-9.4-9.4-9.4-24.6 0-33.9l22.6-22.6c9.4-9.4 24.6-9.4 33.9 0l96.4 96.4 96.4-96.4c9.4-9.4 24.6-9.4 33.9 0l22.6 22.6c9.4 9.4 9.4 24.6 0 33.9l-136 136c-9.2 9.4-24.4 9.4-33.8 0z\"/>
                                    </svg>
                                </div>
                                <div class=\"content py-2\">
                                    {% if checkAllPreferences == false %}
                                     <p>Veuillez renseigner vos préférences pour les consulters et les rendre visibles.</p>
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
                                    <strong>Mon véhicule</strong>
                                    <svg viewBox=\"0 0 256 512\" width=\"12\" title=\"angle-right\" class=\"side-icon\" fill=\"white\">
                                        <path d=\"M224.3 273l-136 136c-9.4 9.4-24.6 9.4-33.9 0l-22.6-22.6c-9.4-9.4-9.4-24.6 0-33.9l96.4-96.4-96.4-96.4c-9.4-9.4-9.4-24.6 0-33.9L54.3 103c9.4-9.4 24.6-9.4 33.9 0l136 136c9.5 9.4 9.5 24.6.1 34z\"/>
                                    </svg>
                                    <svg viewBox=\"0 0 320 512\" height=\"24\" title=\"angle-down\" class=\"down-icon\" fill=\"white\">
                                        <path d=\"M143 352.3L7 216.3c-9.4-9.4-9.4-24.6 0-33.9l22.6-22.6c9.4-9.4 24.6-9.4 33.9 0l96.4 96.4 96.4-96.4c9.4-9.4 24.6-9.4 33.9 0l22.6 22.6c9.4 9.4 9.4 24.6 0 33.9l-136 136c-9.2 9.4-24.4 9.4-33.8 0z\"/>
                                    </svg>
                                </div>
                                <div class=\"content py-2\">
                                    {% if checkAllVehiculeInfos == false %}
                                        <p class=\"p-4\">Veuillez renseigner les informations de votre véhicule pour les consulter et les rendre visibles.</p>
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
                                        <a href=\"{{ path ('message_discussion', {'id': user.id})}}\">
                                            <div class=\"card-profile-content justify-content-center\">
                                                <i class=\"far fa-envelope\"></i>
                                                <p>Boite de récéption</p>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class=\"col-6\">
                                    <div class=\"card-profile\">
                                        <a href=\"{{ path ('review_show', {'id': app.user.id})}}\">
                                            <div class=\"card-profile-content justify-content-center\">
                                                <i class=\"far fa-star\"></i>
                                                <p>Vos avis</p>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"tab-pane\" id=\"tabs-2\" role=\"tabpanel\">
                        <div>
                            {{ include('user/_form.html.twig') }}
                        </div>
                    </div>
                    <div class=\"tab-pane\" id=\"tabs-3\" role=\"tabpanel\">
                        {{ include('travel_preferences/_form.html.twig') }}
                    </div>
                    <div class=\"tab-pane\" id=\"tabs-4\" role=\"tabpanel\">
                        {{ include('vehicule/_form.html.twig') }}
                    </div>
                    <div class=\"tab-pane\" id=\"tabs-5\" role=\"tabpanel\">
                        <div class=\"profile-section section-padding\">
                        <div class=\"row justify-content-center \">
                            <div class=\" form-info\">
                                <h3 class=\"col d-flex justify-content-center\">Historique de mes trajets</h3>
                                <div class=\"row justify-content-around\">
                                <p class=\"text-center\">Vos 3 derniers trajets</p>
                                    {% for trip in trips %}
                                        {% if loop.index0 < 3 %}
                                            <div class=\"col-12 col-sm-4 my-2\">
                                                <div class=\"card-profile-last-trip\"> 
                                                    <div class=\"card-profile-content\">
                                                        <div class=\"col trip-profile-card\">
                                                            <div class=\"col d-flex justify-content-center\">
                                                            <p>{{ trip.departure }} -> {{ trip.arrival }}</p>
                                                            </div>
                                                            <div class=\"col d-flex justify-content-center my-2\"><p>{{ trip.dateOfTrip|date(\"d M\") }}</p></div>
                                                            <div class=\"col d-flex  justify-content-center align-items-center my-2\">
                                                                <a href=\"{{ path ('trip_details', {'id': trip.id}) }}\" class=\"btn\">
                                                                    <i class=\"far fa-eye\"></i>
                                                                </a>
                                                            </div>
                                                            {% if trip.tripStarted != true and trip.tripCompleted != true %}
                                                                <div class=\"col d-flex flex-column align-items-center\">
                                                                    <a href=\"{{ path ('trip_start', {'id': trip.id}) }}\" onclick=\"return prompt('Voulez vous commencer le trajet ? Taper \\'Oui\\' pour commencer') == 'Oui'\" href=\"\" class=\"trip-start-button\">Commencer</a>
                                                                </div>
                                                            {% elseif trip.tripCompleted == true %}
                                                                <div class=\"col d-flex flex-column align-items-center\">
                                                                    <a class=\"trip-finish-button\">Trajet terminé</a>
                                                                </div>
                                                            {% else %}
                                                                <div class=\"col d-flex flex-column align-items-center\">
                                                                    <div class=\"row d-flex \">Trajet en cours</div>
                                                                    <a href=\"{{ path ('trip_finish', {'id': trip.id}) }}\" class=\"btn btn-info\">Terminer le trajet</a>
                                                                </div>
                                                            {% endif %}
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        {% endif %}
                                    {% endfor %}
                                </div>
                        <label class=\"accordion-wrapper\">
                            <input type=\"checkbox\" class=\"accordion\" hidden/>
                            <div class=\"title\">
                                <strong>Tous mes trajets</strong>
                                <svg viewBox=\"0 0 256 512\" width=\"12\" title=\"angle-right\" class=\"side-icon\" fill=\"white\">
                                    <path d=\"M224.3 273l-136 136c-9.4 9.4-24.6 9.4-33.9 0l-22.6-22.6c-9.4-9.4-9.4-24.6 0-33.9l96.4-96.4-96.4-96.4c-9.4-9.4-9.4-24.6 0-33.9L54.3 103c9.4-9.4 24.6-9.4 33.9 0l136 136c9.5 9.4 9.5 24.6.1 34z\"/>
                                </svg>
                                <svg viewBox=\"0 0 320 512\" height=\"24\" title=\"angle-down\" class=\"down-icon\" fill=\"white\">
                                    <path d=\"M143 352.3L7 216.3c-9.4-9.4-9.4-24.6 0-33.9l22.6-22.6c9.4-9.4 24.6-9.4 33.9 0l96.4 96.4 96.4-96.4c9.4-9.4 24.6-9.4 33.9 0l22.6 22.6c9.4 9.4 9.4 24.6 0 33.9l-136 136c-9.2 9.4-24.4 9.4-33.8 0z\"/>
                                </svg>
                            </div>
                            <div class=\"content\">
                                <div class=\"col-12 pt-3\">
                                    <div class=\"row\">
                                        <div class=\"col d-flex justify-content-center\">Trajet</div>
                                        <div class=\"col d-flex justify-content-around\">Date</div>
                                        <div class=\"col d-flex justify-content-center\">Status</div>
                                        <div class=\"col d-flex justify-content-center\">Détails</div>
                                    </div>
                                    {% for trip in trips %}
                                    {% if loop.index0 > 2 %}
                                        <div class=\"row mt-4 line-trip-profile\">
                                            <div class=\"col d-flex justify-content-center\">{{ trip.departure }}
                                                ->
                                                {{ trip.arrival }}</div>
                                            <div class=\"col d-flex justify-content-center\">{{ trip.dateOfTrip|date(\"d M\") }}</div>
                                            {% if trip.tripStarted != true and trip.tripCompleted != true %}
                                                <div class=\"col d-flex flex-column align-items-center\">
                                                    <a href=\"{{ path ('trip_start', {'id': trip.id}) }}\" onclick=\"return prompt('Voulez vous commencer le trajet ? Taper \\'Oui\\' pour commencer') == 'Oui'\" href=\"\" class=\"trip-start-button\">Commencer</a>
                                                </div>
                                            {% elseif trip.tripCompleted == true %}
                                                <div class=\"col d-flex flex-column align-items-center\">
                                                    <a class=\"trip-finish-button\">Trajet terminé</a>
                                                </div>
                                            {% else %}
                                                <div class=\"col d-flex flex-column align-items-center\">
                                                    <div class=\"row d-flex \">Trajet en cours</div>
                                                    <a href=\"{{ path ('trip_finish', {'id': trip.id}) }}\" class=\"btn btn-info\">Terminer le trajet</a>
                                                </div>
                                            {% endif %}
                                            <div class=\"col d-flex  justify-content-center align-items-center\">
                                                <a href=\"{{ path ('trip_details', {'id': trip.id}) }}\" class=\"btn\">
                                                    <i class=\"far fa-eye\"></i>
                                                </a>
                                            </div>
                                        </div>
                                        {% endif %}
                                    {% endfor %}
                                </div>
                            </div>
                        </label>
                    </div>
                    </div>
                    </div>
                    </div>
                    <div class=\"tab-pane\" id=\"tabs-6\" role=\"tabpanel\">
                        <div class=\"profile-section section-padding\">
                            <div class=\"row justify-content-center \">
                                <div class=\" form-info\">
                                    <h4 class=\"text-center\">Modifier mon mot de passe</h4>
                                    <div class=\"col-12\">
                                        {{ include('user/_form-reset.html.twig') }}
                                        <a href=\"{{ path ('logout') }}\" class=\"btn btn-danger mb-4\">
                                            <i class=\"fas fa-sign-out-alt\"></i>
                                            Me déconnecter</a>
                                        {{ include('user/_delete_form.html.twig') }}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

    {% endblock %}", "user/edit.html.twig", "/shared/httpd/Projet-Final/templates/user/edit.html.twig");
    }
}

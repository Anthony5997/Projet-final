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

        echo "Espace membre";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 7
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "<div class=\"container-profile\">
    <div class=\"row d-flex justify-content-center\">
        <div class=\"row mt-4 welcome-profile align-items-center\">
            <div id=\"robot-profile-div\" class=\"col-3 d-flex justify-content-center\">
                <img class=\"robot-mascott-img\" src=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/uploads/custom-pic/hello-mascot.png"), "html", null, true);
        echo "\">
            </div>
            <div class=\"col-sm-9 col-xs-12 d-flex flex-column justify-content-center\">
            <h2 class=\"mx-auto text-center\">Bienvenue ";
        // line 15
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 15, $this->source); })()), "firstName", [], "any", false, false, false, 15), "html", null, true);
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
            <p class=\"text-center\"><span class=\"bold-yellow\">Bonne route !</span></p>
            </div>
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
                <li class=\"nav-item-test mt-3\">
                   <a href=\"";
        // line 81
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("logout");
        echo "\" class=\"tab-custom-test\">
                        <div class=\"d-flex flex-column justify-content-center align-items-center\">
                        <i class=\"fas fa-sign-out-alt\"></i>
                        <p>Déconnexion</p>
                        </div>
                   </a>
                </li>
                 <li class=\"nav-item-test mt-3\">
                   <a href=\"";
        // line 89
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("logout");
        echo "\" class=\"tab-custom-test\">
                        <div class=\"d-flex flex-column justify-content-center align-items-center\">
                         ";
        // line 91
        echo twig_include($this->env, $context, "user/_delete_form.html.twig");
        echo "
                        </div>
                   </a>
                </li>
            </ul>
        </div>
        <div class=\"col-9\">
            ";
        // line 98
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 98, $this->source); })()), "flashes", [0 => "success"], "method", false, false, false, 98));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 99
            echo "                <div class=\"alert alert-success text-white\">
                    ";
            // line 100
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 103
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 103, $this->source); })()), "flashes", [0 => "error"], "method", false, false, false, 103));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 104
            echo "                <div class=\"alert alert-error text-white\">
                    ";
            // line 105
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 108
        echo "            <div class=\"tab-content\">
                <div class=\"tab-pane active section-padding\" id=\"tabs-1\" role=\"tabpanel\">
                    <div class=\"mx-auto form-info\">
                        <div class=\"main-info-profile\">
                            <div class=\"row\">
                                <div class=\"col-xs-12 col-sm-4 col-md-4 d-flex flex-column align-items-center justify-content-center\">
                                    <p class=\"\">";
        // line 114
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 114, $this->source); })()), "firstName", [], "any", false, false, false, 114), "html", null, true);
        echo "</p>
                                    <p class=\"experience-profile\">";
        // line 115
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 115, $this->source); })()), "userExperience", [], "any", false, false, false, 115), "experienceLevel", [], "any", false, false, false, 115), "html", null, true);
        echo "</p>
                                    <p class=\"experience-profile d-flex flex-column align-items-center justify-content-center\">
                                        Trajets effectué</p>
                                    <p class=\"experience-profile d-flex flex-column align-items-center justify-content-center\">
                                        <strong>";
        // line 119
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 119, $this->source); })()), "tripsMade", [], "any", false, false, false, 119), "html", null, true);
        echo "</strong>
                                    </p>
                                </div>
                                <div class=\"col-xs-12 col-sm-4 col-md-4\"></div>
                                <div class=\"col-xs-12 col-sm-4 col-md-4\">
                                    ";
        // line 124
        if ((0 !== twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 124, $this->source); })()), "profile_picture", [], "any", false, false, false, 124), ""))) {
            // line 125
            echo "                                        <div class=\"existing-file\">
                                            <a href=\"";
            // line 126
            echo twig_escape_filter($this->env, ($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/assets/uploads/profilePicture/") . twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 126, $this->source); })()), "profile_picture", [], "any", false, false, false, 126)), "html", null, true);
            echo "\" target=\"_blank\"><img class=\"profile-picture-profile\" src=\"";
            echo twig_escape_filter($this->env, ($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/assets/uploads/profilePicture/") . twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 126, $this->source); })()), "profile_picture", [], "any", false, false, false, 126)), "html", null, true);
            echo "\"/></a>
                                        </div>
                                    ";
        } else {
            // line 129
            echo "                                        <div class=\"existing-file\">
                                            <a href=\"";
            // line 130
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/assets/uploads/profilePicture/default_profile_picture.jpg"), "html", null, true);
            echo "\" target=\"_blank\"><img class=\"profile-picture-profile\" src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/assets/uploads/profilePicture/default_profile_picture.jpg"), "html", null, true);
            echo "\"/></a>
                                        </div>
                                    ";
        }
        // line 133
        echo "                                </div>
                            </div>
                            <div class=\"row justify-content-between\">
                                <div class=\"col-xs-12 col-sm-6 col-md-6\">
                                    <div class=\"input-profile-apropos\">
                                    ";
        // line 138
        if ((0 !== twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 138, $this->source); })()), "bio", [], "any", false, false, false, 138), ""))) {
            // line 139
            echo "                                        <p class=\"text-center\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 139, $this->source); })()), "bio", [], "any", false, false, false, 139), "html", null, true);
            echo "</p>
                                    ";
        }
        // line 141
        echo "                                    </div>
                                </div>
                                <div class=\"col-xs-12 col-sm-6 col-md-6\">
                                    <p class=\"text-center mt-4 ml-5\"><i style=\"color: gold;\"class=\"fas fa-star\"></i>";
        // line 144
        ((twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 144, $this->source); })()), "globalRating", [], "any", false, false, false, 144)) ? (print (twig_escape_filter($this->env, twig_round(twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 144, $this->source); })()), "globalRating", [], "any", false, false, false, 144), 1, "floor"), "html", null, true))) : (print ("Aucune note pour l'instant")));
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
        // line 165
        if ((0 === twig_compare((isset($context["checkAllPreferences"]) || array_key_exists("checkAllPreferences", $context) ? $context["checkAllPreferences"] : (function () { throw new RuntimeError('Variable "checkAllPreferences" does not exist.', 165, $this->source); })()), false))) {
            // line 166
            echo "                                     <p>Veuillez renseigner vos préférences de covoitureur dans l'onglet <span class=\"bold-yellow\">\"Préférences de voyage\"</span> pour les consulters et les rendre visibles.</p>
                                    ";
        } else {
            // line 168
            echo "                                        <div class=\"form-info mx-auto col-xs-12 col-sm-10 col-md-9\">
                                            ";
            // line 169
            if ((0 !== twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 169, $this->source); })()), "travelPreferences", [], "any", false, false, false, 169), "discussion", [], "any", false, false, false, 169), null))) {
                // line 170
                echo "                                                <h6>
                                                    Discussion :
                                                </h6>
                                                <p class=\"custom-field-form\">";
                // line 173
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 173, $this->source); })()), "travelPreferences", [], "any", false, false, false, 173), "discussion", [], "any", false, false, false, 173), "html", null, true);
                echo "</p>
                                            ";
            }
            // line 175
            echo "                                            ";
            if ((0 !== twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 175, $this->source); })()), "travelPreferences", [], "any", false, false, false, 175), "smoking", [], "any", false, false, false, 175), null))) {
                // line 176
                echo "                                                <h6>
                                                    Fumeur :
                                                </h6>
                                                <p class=\"custom-field-form\">";
                // line 179
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 179, $this->source); })()), "travelPreferences", [], "any", false, false, false, 179), "smoking", [], "any", false, false, false, 179), "html", null, true);
                echo "</p>
                                            ";
            }
            // line 181
            echo "                                                ";
            if ((0 !== twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 181, $this->source); })()), "travelPreferences", [], "any", false, false, false, 181), "music", [], "any", false, false, false, 181), null))) {
                // line 182
                echo "                                                <h6>
                                                    Musique :
                                                </h6>
                                                <p class=\"custom-field-form\">";
                // line 185
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 185, $this->source); })()), "travelPreferences", [], "any", false, false, false, 185), "music", [], "any", false, false, false, 185), "html", null, true);
                echo "</p>
                                            ";
            }
            // line 187
            echo "                                            ";
            if ((0 !== twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 187, $this->source); })()), "travelPreferences", [], "any", false, false, false, 187), "animals", [], "any", false, false, false, 187), null))) {
                // line 188
                echo "                                                <h6>
                                                    Animaux :
                                                </h6>
                                                <p class=\"custom-field-form\">";
                // line 191
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 191, $this->source); })()), "travelPreferences", [], "any", false, false, false, 191), "animals", [], "any", false, false, false, 191), "html", null, true);
                echo "</p>
                                                ";
            }
            // line 193
            echo "                                            ";
            if ((0 !== twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 193, $this->source); })()), "travelPreferences", [], "any", false, false, false, 193), "healthPass", [], "any", false, false, false, 193), null))) {
                // line 194
                echo "                                                <h6>
                                                    Pass Sanitaire :
                                                </h6>
                                                <p class=\"custom-field-form\">";
                // line 197
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 197, $this->source); })()), "travelPreferences", [], "any", false, false, false, 197), "healthPass", [], "any", false, false, false, 197), "html", null, true);
                echo "</p>
                                            ";
            }
            // line 199
            echo "                                        </div>
                                    ";
        }
        // line 201
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
        // line 215
        if ((0 === twig_compare((isset($context["checkAllVehiculeInfos"]) || array_key_exists("checkAllVehiculeInfos", $context) ? $context["checkAllVehiculeInfos"] : (function () { throw new RuntimeError('Variable "checkAllVehiculeInfos" does not exist.', 215, $this->source); })()), false))) {
            // line 216
            echo "                                        <p class=\"p-4\">Veuillez renseigner les informations de votre véhicule dans l'onglet <span class=\"bold-yellow\">\"Mon véhicule\"</span> pour les consulter et les rendre visibles.</p>
                                    ";
        } else {
            // line 218
            echo "                                    <div class=\"row mx-auto form-info\">
                                        <div class=\"col-xs-12 col-sm-6 col-md-6 d-flex flex-column pl-5 justify-content-center\">
                                            ";
            // line 220
            if ((0 !== twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 220, $this->source); })()), "vehicule", [], "any", false, false, false, 220), "brand", [], "any", false, false, false, 220), null))) {
                // line 221
                echo "                                                <p class=\"vehicule-profile\">Marque :
                                                    ";
                // line 222
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 222, $this->source); })()), "vehicule", [], "any", false, false, false, 222), "brand", [], "any", false, false, false, 222), "html", null, true);
                echo "</p>
                                            ";
            }
            // line 224
            echo "                                            ";
            if ((0 !== twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 224, $this->source); })()), "vehicule", [], "any", false, false, false, 224), "model", [], "any", false, false, false, 224), null))) {
                // line 225
                echo "                                                <p class=\"vehicule-profile\">Modèle :
                                                ";
                // line 226
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 226, $this->source); })()), "vehicule", [], "any", false, false, false, 226), "model", [], "any", false, false, false, 226), "html", null, true);
                echo "</p>
                                            ";
            }
            // line 228
            echo "                                            ";
            if ((0 !== twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 228, $this->source); })()), "vehicule", [], "any", false, false, false, 228), "color", [], "any", false, false, false, 228), null))) {
                // line 229
                echo "                                                <p class=\"vehicule-profile\">Couleur :
                                                    ";
                // line 230
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 230, $this->source); })()), "vehicule", [], "any", false, false, false, 230), "color", [], "any", false, false, false, 230), "html", null, true);
                echo "</p>
                                            ";
            }
            // line 232
            echo "                                        </div>
                                        <div class=\"col-xs-12 col-sm-6 col-md-6 d-flex justify-content-center\">
                                           <img class=\"profile-picture-profile\" src=\"";
            // line 234
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("/assets/uploads/vehiculePicture/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 234, $this->source); })()), "vehicule", [], "any", false, false, false, 234), "vehiculePicture", [], "any", false, false, false, 234))), "html", null, true);
            echo "\"/>
                                        </div>
                                    </div>
                                    ";
        }
        // line 238
        echo "                                </div>
                            </label>
                            <div class=\"row justify-content-around mt-4\">
                                <div class=\"col-6\">
                                    <div class=\"card-profile\"> 
                                        <a href=\"";
        // line 243
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("message_discussion", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 243, $this->source); })()), "id", [], "any", false, false, false, 243)]), "html", null, true);
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
        // line 253
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("review_show", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 253, $this->source); })()), "user", [], "any", false, false, false, 253), "id", [], "any", false, false, false, 253)]), "html", null, true);
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
        // line 266
        echo twig_include($this->env, $context, "user/_form.html.twig");
        echo "
                        </div>
                    </div>
                    <div class=\"tab-pane\" id=\"tabs-3\" role=\"tabpanel\">
                        ";
        // line 270
        echo twig_include($this->env, $context, "travel_preferences/_form.html.twig");
        echo "
                    </div>
                    <div class=\"tab-pane\" id=\"tabs-4\" role=\"tabpanel\">
                        ";
        // line 273
        echo twig_include($this->env, $context, "vehicule/_form.html.twig");
        echo "
                    </div>
                    <div class=\"tab-pane\" id=\"tabs-5\" role=\"tabpanel\">
                        <div class=\"profile-section section-padding\">
                            <div class=\"row justify-content-center \">
                                <div class=\" form-info\">
                                    <h3 class=\"col d-flex justify-content-center\">Historique de mes trajets</h3>
                                    <div class=\"row justify-content-around\">
                                    <p class=\"text-center\">Vos 3 derniers trajets en tant que covoitureur</p>
                                        ";
        // line 282
        if ((0 === twig_compare(twig_length_filter($this->env, (isset($context["trips"]) || array_key_exists("trips", $context) ? $context["trips"] : (function () { throw new RuntimeError('Variable "trips" does not exist.', 282, $this->source); })())), 0))) {
            // line 283
            echo "                                            <p class=\"text-center py-2\"><i style=\"color:chocolate;\"class=\"px-2 fas fa-hourglass-end\"></i>Aucun trajets publié pour l'instant</p>
                                        ";
        }
        // line 284
        echo " 
                                        ";
        // line 285
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["trips"]) || array_key_exists("trips", $context) ? $context["trips"] : (function () { throw new RuntimeError('Variable "trips" does not exist.', 285, $this->source); })()));
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
            // line 286
            echo "                                            ";
            if ((-1 === twig_compare(twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 286), 3))) {
                // line 287
                echo "                                                <div class=\"col-12 col-sm-4 my-2\">
                                                    <div class=\"card-profile-last-trip\"> 
                                                        <div class=\"card-profile-content\">
                                                            <div class=\"col trip-profile-card\">
                                                                <div class=\"col d-flex justify-content-around\">
                                                                <p>";
                // line 292
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["trip"], "departure", [], "any", false, false, false, 292), "html", null, true);
                echo " -> ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["trip"], "arrival", [], "any", false, false, false, 292), "html", null, true);
                echo "</p><p>";
                ((twig_get_attribute($this->env, $this->source, $context["trip"], "tripFull", [], "any", false, false, false, 292)) ? (print ("Complet")) : (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["trip"], "passengers", [], "any", false, false, false, 292), "html", null, true))));
                echo "<i class='fas fa-user-friends ml-2'></i></p>
                                                                </div>
                                                                <div class=\"col d-flex justify-content-center my-2\"><p>";
                // line 294
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["trip"], "dateOfTrip", [], "any", false, false, false, 294), "d M"), "html", null, true);
                echo "</p></div>
                                                                <div class=\"col d-flex  justify-content-center align-items-center my-2\">
                                                                    <a href=\"";
                // line 296
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("trip_details", ["id" => twig_get_attribute($this->env, $this->source, $context["trip"], "id", [], "any", false, false, false, 296)]), "html", null, true);
                echo "\" class=\"btn\">
                                                                        <i class=\"far fa-eye\"></i>
                                                                        <p class=\"text-custom-yellow \">Voir détails</p>
                                                                    </a>
                                                                </div>
                                                                ";
                // line 301
                if (((0 !== twig_compare(twig_get_attribute($this->env, $this->source, $context["trip"], "tripStarted", [], "any", false, false, false, 301), true)) && (0 !== twig_compare(twig_get_attribute($this->env, $this->source, $context["trip"], "tripCompleted", [], "any", false, false, false, 301), true)))) {
                    // line 302
                    echo "                                                                    <div class=\"col d-flex flex-column align-items-center\">
                                                                        <a href=\"";
                    // line 303
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("trip_start", ["id" => twig_get_attribute($this->env, $this->source, $context["trip"], "id", [], "any", false, false, false, 303)]), "html", null, true);
                    echo "\" onclick=\"return prompt('Voulez vous commencer le trajet ? Taper \\'Oui\\' pour commencer') == 'Oui'\" href=\"\" class=\"trip-start-button\">Commencer</a>
                                                                        ";
                    // line 304
                    echo twig_include($this->env, $context, "trip/_delete_form.html.twig");
                    echo "        
                                                                     </div>
                                                                ";
                } elseif ((0 === twig_compare(twig_get_attribute($this->env, $this->source,                 // line 306
$context["trip"], "tripCompleted", [], "any", false, false, false, 306), true))) {
                    // line 307
                    echo "                                                                    <div class=\"col d-flex flex-column align-items-center\">
                                                                        <a class=\"trip-finish-button\">Trajet terminé</a>
                                                                    </div>
                                                                ";
                } else {
                    // line 311
                    echo "                                                                    <div class=\"col d-flex flex-column align-items-center\">
                                                                        <div class=\"row d-flex font-weight-bold text-custom-yellow\">Trajet en cours</div>
                                                                        <a href=\"";
                    // line 313
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("trip_finish", ["id" => twig_get_attribute($this->env, $this->source, $context["trip"], "id", [], "any", false, false, false, 313)]), "html", null, true);
                    echo "\" class=\"trip-started-button\">Terminer le trajet</a>
                                                                    </div>
                                                                ";
                }
                // line 316
                echo "                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            ";
            }
            // line 321
            echo "                                        ";
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
        // line 322
        echo "                                </div>
                                <label class=\"accordion-wrapper\">
                                    <input type=\"checkbox\" class=\"accordion\" hidden/>
                                    <div class=\"title\">
                                        <strong>Consulté mes trajets plus ancien réaliser en tant que covoitureur</strong>
                                        <svg viewBox=\"0 0 256 512\" width=\"12\" title=\"angle-right\" class=\"side-icon\" fill=\"white\">
                                            <path d=\"M224.3 273l-136 136c-9.4 9.4-24.6 9.4-33.9 0l-22.6-22.6c-9.4-9.4-9.4-24.6 0-33.9l96.4-96.4-96.4-96.4c-9.4-9.4-9.4-24.6 0-33.9L54.3 103c9.4-9.4 24.6-9.4 33.9 0l136 136c9.5 9.4 9.5 24.6.1 34z\"/>
                                        </svg>
                                        <svg viewBox=\"0 0 320 512\" height=\"24\" title=\"angle-down\" class=\"down-icon\" fill=\"white\">
                                            <path d=\"M143 352.3L7 216.3c-9.4-9.4-9.4-24.6 0-33.9l22.6-22.6c9.4-9.4 24.6-9.4 33.9 0l96.4 96.4 96.4-96.4c9.4-9.4 24.6-9.4 33.9 0l22.6 22.6c9.4 9.4 9.4 24.6 0 33.9l-136 136c-9.2 9.4-24.4 9.4-33.8 0z\"/>
                                        </svg>
                                    </div>
                                    <div class=\"content\">
                                        <div class=\"col-12 pt-3\">
                                        ";
        // line 336
        if ((-1 === twig_compare(twig_length_filter($this->env, (isset($context["trips"]) || array_key_exists("trips", $context) ? $context["trips"] : (function () { throw new RuntimeError('Variable "trips" does not exist.', 336, $this->source); })())), 2))) {
            // line 337
            echo "                                            <p class=\"text-center py-2\"><i style=\"color:chocolate;\"class=\"px-2 fas fa-hourglass-end\"></i>Aucun autre trajet pour l'instant</p>
                                        ";
        }
        // line 338
        echo " 
                                        ";
        // line 339
        if ((1 === twig_compare(twig_length_filter($this->env, (isset($context["trips"]) || array_key_exists("trips", $context) ? $context["trips"] : (function () { throw new RuntimeError('Variable "trips" does not exist.', 339, $this->source); })())), 2))) {
            // line 340
            echo "                                            <div class=\"row\">
                                                <div class=\"col d-flex justify-content-center\">Trajet</div>
                                                <div class=\"col d-flex justify-content-around\">Date</div>
                                                <div class=\"col d-flex justify-content-center\">Status</div>
                                                <div class=\"col d-flex justify-content-center\">Détails</div>
                                            </div>
                                        ";
        }
        // line 347
        echo "                                            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["trips"]) || array_key_exists("trips", $context) ? $context["trips"] : (function () { throw new RuntimeError('Variable "trips" does not exist.', 347, $this->source); })()));
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
            // line 348
            echo "                                                ";
            if (((1 === twig_compare(twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 348), 2)) && (1 === twig_compare(twig_length_filter($this->env, (isset($context["trips"]) || array_key_exists("trips", $context) ? $context["trips"] : (function () { throw new RuntimeError('Variable "trips" does not exist.', 348, $this->source); })())), 0)))) {
                // line 349
                echo "                                                    <div class=\"row mt-4 line-trip-profile\">
                                                        <div class=\"col d-flex justify-content-center\">";
                // line 350
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["trip"], "departure", [], "any", false, false, false, 350), "html", null, true);
                echo "
                                                            ->
                                                            ";
                // line 352
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["trip"], "arrival", [], "any", false, false, false, 352), "html", null, true);
                echo "</div>
                                                        <div class=\"col d-flex justify-content-center\">";
                // line 353
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["trip"], "dateOfTrip", [], "any", false, false, false, 353), "d M"), "html", null, true);
                echo "</div>
                                                        ";
                // line 354
                if (((0 !== twig_compare(twig_get_attribute($this->env, $this->source, $context["trip"], "tripStarted", [], "any", false, false, false, 354), true)) && (0 !== twig_compare(twig_get_attribute($this->env, $this->source, $context["trip"], "tripCompleted", [], "any", false, false, false, 354), true)))) {
                    // line 355
                    echo "                                                            <div class=\"col d-flex flex-column align-items-center\">
                                                                <a href=\"";
                    // line 356
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("trip_start", ["id" => twig_get_attribute($this->env, $this->source, $context["trip"], "id", [], "any", false, false, false, 356)]), "html", null, true);
                    echo "\" onclick=\"return prompt('Voulez vous commencer le trajet ? Taper \\'Oui\\' pour commencer') == 'Oui'\" href=\"\" class=\"trip-start-button\">Commencer</a>
                                                            </div>
                                                        ";
                } elseif ((0 === twig_compare(twig_get_attribute($this->env, $this->source,                 // line 358
$context["trip"], "tripCompleted", [], "any", false, false, false, 358), true))) {
                    // line 359
                    echo "                                                            <div class=\"col d-flex flex-column align-items-center\">
                                                                <a class=\"trip-finish-button\">Trajet terminé</a>
                                                            </div>
                                                        ";
                } else {
                    // line 363
                    echo "                                                            <div class=\"col d-flex flex-column align-items-center\">
                                                                <div class=\"row d-flex \">Trajet en cours</div>
                                                                <a href=\"";
                    // line 365
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("trip_finish", ["id" => twig_get_attribute($this->env, $this->source, $context["trip"], "id", [], "any", false, false, false, 365)]), "html", null, true);
                    echo "\" class=\"btn btn-info\">Terminer le trajet</a>
                                                            </div>
                                                        ";
                }
                // line 368
                echo "                                                        <div class=\"col d-flex  justify-content-center align-items-center\">
                                                            <a href=\"";
                // line 369
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("trip_details", ["id" => twig_get_attribute($this->env, $this->source, $context["trip"], "id", [], "any", false, false, false, 369)]), "html", null, true);
                echo "\" class=\"btn\">
                                                                <i class=\"far fa-eye\"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                ";
            } else {
                // line 375
                echo "                                                ";
            }
            // line 376
            echo "                                            ";
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
        // line 377
        echo "                                        </div>
                                    </div>
                                    
                                </label>
                                <label class=\"accordion-wrapper\">
                                    <input type=\"checkbox\" class=\"accordion\" hidden/>
                                    <div class=\"title\">
                                        <strong>Consulté mes réservations en tant que passager</strong>
                                        <svg viewBox=\"0 0 256 512\" width=\"12\" title=\"angle-right\" class=\"side-icon\" fill=\"white\">
                                            <path d=\"M224.3 273l-136 136c-9.4 9.4-24.6 9.4-33.9 0l-22.6-22.6c-9.4-9.4-9.4-24.6 0-33.9l96.4-96.4-96.4-96.4c-9.4-9.4-9.4-24.6 0-33.9L54.3 103c9.4-9.4 24.6-9.4 33.9 0l136 136c9.5 9.4 9.5 24.6.1 34z\"/>
                                        </svg>
                                        <svg viewBox=\"0 0 320 512\" height=\"24\" title=\"angle-down\" class=\"down-icon\" fill=\"white\">
                                            <path d=\"M143 352.3L7 216.3c-9.4-9.4-9.4-24.6 0-33.9l22.6-22.6c9.4-9.4 24.6-9.4 33.9 0l96.4 96.4 96.4-96.4c9.4-9.4 24.6-9.4 33.9 0l22.6 22.6c9.4 9.4 9.4 24.6 0 33.9l-136 136c-9.2 9.4-24.4 9.4-33.8 0z\"/>
                                        </svg>
                                    </div>
                                    <div class=\"content\">
                                        <div class=\"col-12 pt-3\">
                                            ";
        // line 394
        if ((0 === twig_compare(twig_length_filter($this->env, (isset($context["bookings"]) || array_key_exists("bookings", $context) ? $context["bookings"] : (function () { throw new RuntimeError('Variable "bookings" does not exist.', 394, $this->source); })())), 0))) {
            // line 395
            echo "                                                <p class=\"text-center py-2\"><i style=\"color:chocolate;\"class=\"px-2 fas fa-hourglass-end\"></i>Aucune réservation pour l'instant</p>
                                            ";
        }
        // line 397
        echo "                                            ";
        if ((0 <= twig_compare(twig_length_filter($this->env, (isset($context["bookings"]) || array_key_exists("bookings", $context) ? $context["bookings"] : (function () { throw new RuntimeError('Variable "bookings" does not exist.', 397, $this->source); })())), 1))) {
            // line 398
            echo "                                                <div class=\"row\">
                                                    <div class=\"col d-flex justify-content-center\">Trajet</div>
                                                    <div class=\"col d-flex justify-content-around\">Date</div>
                                                    <div class=\"col d-flex justify-content-center\">Status</div>
                                                    <div class=\"col d-flex justify-content-center\">Détails</div>
                                                </div>
                                            ";
        }
        // line 405
        echo "                                            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["bookings"]) || array_key_exists("bookings", $context) ? $context["bookings"] : (function () { throw new RuntimeError('Variable "bookings" does not exist.', 405, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["booking"]) {
            // line 406
            echo "                                            ";
            if ((0 <= twig_compare(twig_length_filter($this->env, (isset($context["bookings"]) || array_key_exists("bookings", $context) ? $context["bookings"] : (function () { throw new RuntimeError('Variable "bookings" does not exist.', 406, $this->source); })())), 1))) {
                // line 407
                echo "                                                <div class=\"row mt-4 line-trip-profile\">
                                                    <div class=\"col d-flex justify-content-center\">";
                // line 408
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["booking"], "trip", [], "any", false, false, false, 408), "departure", [], "any", false, false, false, 408), "html", null, true);
                echo "
                                                        ->
                                                        ";
                // line 410
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["booking"], "trip", [], "any", false, false, false, 410), "arrival", [], "any", false, false, false, 410), "html", null, true);
                echo "</div>
                                                    <div class=\"col d-flex justify-content-center\">";
                // line 411
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["booking"], "trip", [], "any", false, false, false, 411), "dateOfTrip", [], "any", false, false, false, 411), "d M"), "html", null, true);
                echo "</div>
                                                    ";
                // line 412
                if (((0 !== twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["booking"], "trip", [], "any", false, false, false, 412), "tripStarted", [], "any", false, false, false, 412), true)) && (0 !== twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["booking"], "trip", [], "any", false, false, false, 412), "tripCompleted", [], "any", false, false, false, 412), true)))) {
                    // line 413
                    echo "                                                        <div class=\"col d-flex flex-column align-items-center\">
                                                            <p class=\"trip-start-button\">A venir</p>
                                                        </div>
                                                    ";
                } elseif ((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                 // line 416
$context["booking"], "trip", [], "any", false, false, false, 416), "tripCompleted", [], "any", false, false, false, 416), true))) {
                    // line 417
                    echo "                                                        <div class=\"col d-flex flex-column align-items-center\">
                                                            <a class=\"trip-finish-button\">Trajet terminé</a>
                                                        </div>
                                                    ";
                } else {
                    // line 421
                    echo "                                                        <div class=\"col d-flex flex-column align-items-center\">
                                                            <div class=\"row d-flex \">Trajet en cours</div>
                                                        </div>
                                                    ";
                }
                // line 425
                echo "                                                    <div class=\"col d-flex  justify-content-center align-items-center\">
                                                        <a href=\"";
                // line 426
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("trip_details", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["booking"], "trip", [], "any", false, false, false, 426), "id", [], "any", false, false, false, 426)]), "html", null, true);
                echo "\" class=\"btn\">
                                                            <i class=\"far fa-eye\"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            ";
            } else {
                // line 432
                echo "                                                ";
            }
            // line 433
            echo "                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['booking'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 434
        echo "                                        </div>
                                    </div>
                                </label>
                            </div>
                        </div>
                    </div>
                    </div>
                    <div class=\"tab-pane\" id=\"tabs-6\" role=\"tabpanel\">
                        <div class=\"profile-section section-padding\">
                            <div class=\"row justify-content-center \">
                                <div class=\"form-info\">
                                    <h4 class=\"text-center\">Modifier mon mot de passe</h4>
                                    <div class=\"row\">
                                        <div class=\"col-md-6 col-sm-12\">
                                            ";
        // line 448
        echo twig_include($this->env, $context, "user/_form-reset.html.twig");
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
        return array (  895 => 448,  879 => 434,  873 => 433,  870 => 432,  861 => 426,  858 => 425,  852 => 421,  846 => 417,  844 => 416,  839 => 413,  837 => 412,  833 => 411,  829 => 410,  824 => 408,  821 => 407,  818 => 406,  813 => 405,  804 => 398,  801 => 397,  797 => 395,  795 => 394,  776 => 377,  762 => 376,  759 => 375,  750 => 369,  747 => 368,  741 => 365,  737 => 363,  731 => 359,  729 => 358,  724 => 356,  721 => 355,  719 => 354,  715 => 353,  711 => 352,  706 => 350,  703 => 349,  700 => 348,  682 => 347,  673 => 340,  671 => 339,  668 => 338,  664 => 337,  662 => 336,  646 => 322,  632 => 321,  625 => 316,  619 => 313,  615 => 311,  609 => 307,  607 => 306,  602 => 304,  598 => 303,  595 => 302,  593 => 301,  585 => 296,  580 => 294,  571 => 292,  564 => 287,  561 => 286,  544 => 285,  541 => 284,  537 => 283,  535 => 282,  523 => 273,  517 => 270,  510 => 266,  494 => 253,  481 => 243,  474 => 238,  467 => 234,  463 => 232,  458 => 230,  455 => 229,  452 => 228,  447 => 226,  444 => 225,  441 => 224,  436 => 222,  433 => 221,  431 => 220,  427 => 218,  423 => 216,  421 => 215,  405 => 201,  401 => 199,  396 => 197,  391 => 194,  388 => 193,  383 => 191,  378 => 188,  375 => 187,  370 => 185,  365 => 182,  362 => 181,  357 => 179,  352 => 176,  349 => 175,  344 => 173,  339 => 170,  337 => 169,  334 => 168,  330 => 166,  328 => 165,  304 => 144,  299 => 141,  293 => 139,  291 => 138,  284 => 133,  276 => 130,  273 => 129,  265 => 126,  262 => 125,  260 => 124,  252 => 119,  245 => 115,  241 => 114,  233 => 108,  224 => 105,  221 => 104,  216 => 103,  207 => 100,  204 => 99,  200 => 98,  190 => 91,  185 => 89,  174 => 81,  105 => 15,  99 => 12,  93 => 8,  83 => 7,  64 => 6,  53 => 4,  51 => 2,  49 => 1,  36 => 4,);
    }

    public function getSourceContext()
    {
        return new Source("{% set checkAllPreferences = (user.travelPreferences.discussion != null) and (user.travelPreferences.smoking != null) and (user.travelPreferences.music != null) and (user.travelPreferences.animals != null) and (user.travelPreferences.healthPass != null) %}
{% set checkAllVehiculeInfos = (user.vehicule.brand != null) and (user.vehicule.color != null) and (user.vehicule.model != null) %}

{% extends 'base.html.twig' %}

{% block title %}Espace membre{% endblock %}
{% block body %}
<div class=\"container-profile\">
    <div class=\"row d-flex justify-content-center\">
        <div class=\"row mt-4 welcome-profile align-items-center\">
            <div id=\"robot-profile-div\" class=\"col-3 d-flex justify-content-center\">
                <img class=\"robot-mascott-img\" src=\"{{asset('assets/uploads/custom-pic/hello-mascot.png')}}\">
            </div>
            <div class=\"col-sm-9 col-xs-12 d-flex flex-column justify-content-center\">
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
            <p class=\"text-center\"><span class=\"bold-yellow\">Bonne route !</span></p>
            </div>
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
                <li class=\"nav-item-test mt-3\">
                   <a href=\"{{ path ('logout') }}\" class=\"tab-custom-test\">
                        <div class=\"d-flex flex-column justify-content-center align-items-center\">
                        <i class=\"fas fa-sign-out-alt\"></i>
                        <p>Déconnexion</p>
                        </div>
                   </a>
                </li>
                 <li class=\"nav-item-test mt-3\">
                   <a href=\"{{ path ('logout') }}\" class=\"tab-custom-test\">
                        <div class=\"d-flex flex-column justify-content-center align-items-center\">
                         {{ include('user/_delete_form.html.twig') }}
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
                                     <p>Veuillez renseigner vos préférences de covoitureur dans l'onglet <span class=\"bold-yellow\">\"Préférences de voyage\"</span> pour les consulters et les rendre visibles.</p>
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
                                        <p class=\"p-4\">Veuillez renseigner les informations de votre véhicule dans l'onglet <span class=\"bold-yellow\">\"Mon véhicule\"</span> pour les consulter et les rendre visibles.</p>
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
                                    <p class=\"text-center\">Vos 3 derniers trajets en tant que covoitureur</p>
                                        {% if trips|length == 0 %}
                                            <p class=\"text-center py-2\"><i style=\"color:chocolate;\"class=\"px-2 fas fa-hourglass-end\"></i>Aucun trajets publié pour l'instant</p>
                                        {% endif %} 
                                        {% for trip in trips %}
                                            {% if loop.index0 < 3 %}
                                                <div class=\"col-12 col-sm-4 my-2\">
                                                    <div class=\"card-profile-last-trip\"> 
                                                        <div class=\"card-profile-content\">
                                                            <div class=\"col trip-profile-card\">
                                                                <div class=\"col d-flex justify-content-around\">
                                                                <p>{{ trip.departure }} -> {{ trip.arrival }}</p><p>{{trip.tripFull ? \"Complet\" : trip.passengers }}<i class='fas fa-user-friends ml-2'></i></p>
                                                                </div>
                                                                <div class=\"col d-flex justify-content-center my-2\"><p>{{ trip.dateOfTrip|date(\"d M\") }}</p></div>
                                                                <div class=\"col d-flex  justify-content-center align-items-center my-2\">
                                                                    <a href=\"{{ path ('trip_details', {'id': trip.id}) }}\" class=\"btn\">
                                                                        <i class=\"far fa-eye\"></i>
                                                                        <p class=\"text-custom-yellow \">Voir détails</p>
                                                                    </a>
                                                                </div>
                                                                {% if trip.tripStarted != true and trip.tripCompleted != true %}
                                                                    <div class=\"col d-flex flex-column align-items-center\">
                                                                        <a href=\"{{ path ('trip_start', {'id': trip.id}) }}\" onclick=\"return prompt('Voulez vous commencer le trajet ? Taper \\'Oui\\' pour commencer') == 'Oui'\" href=\"\" class=\"trip-start-button\">Commencer</a>
                                                                        {{ include('trip/_delete_form.html.twig') }}        
                                                                     </div>
                                                                {% elseif trip.tripCompleted == true %}
                                                                    <div class=\"col d-flex flex-column align-items-center\">
                                                                        <a class=\"trip-finish-button\">Trajet terminé</a>
                                                                    </div>
                                                                {% else %}
                                                                    <div class=\"col d-flex flex-column align-items-center\">
                                                                        <div class=\"row d-flex font-weight-bold text-custom-yellow\">Trajet en cours</div>
                                                                        <a href=\"{{ path ('trip_finish', {'id': trip.id}) }}\" class=\"trip-started-button\">Terminer le trajet</a>
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
                                        <strong>Consulté mes trajets plus ancien réaliser en tant que covoitureur</strong>
                                        <svg viewBox=\"0 0 256 512\" width=\"12\" title=\"angle-right\" class=\"side-icon\" fill=\"white\">
                                            <path d=\"M224.3 273l-136 136c-9.4 9.4-24.6 9.4-33.9 0l-22.6-22.6c-9.4-9.4-9.4-24.6 0-33.9l96.4-96.4-96.4-96.4c-9.4-9.4-9.4-24.6 0-33.9L54.3 103c9.4-9.4 24.6-9.4 33.9 0l136 136c9.5 9.4 9.5 24.6.1 34z\"/>
                                        </svg>
                                        <svg viewBox=\"0 0 320 512\" height=\"24\" title=\"angle-down\" class=\"down-icon\" fill=\"white\">
                                            <path d=\"M143 352.3L7 216.3c-9.4-9.4-9.4-24.6 0-33.9l22.6-22.6c9.4-9.4 24.6-9.4 33.9 0l96.4 96.4 96.4-96.4c9.4-9.4 24.6-9.4 33.9 0l22.6 22.6c9.4 9.4 9.4 24.6 0 33.9l-136 136c-9.2 9.4-24.4 9.4-33.8 0z\"/>
                                        </svg>
                                    </div>
                                    <div class=\"content\">
                                        <div class=\"col-12 pt-3\">
                                        {% if trips|length < 2 %}
                                            <p class=\"text-center py-2\"><i style=\"color:chocolate;\"class=\"px-2 fas fa-hourglass-end\"></i>Aucun autre trajet pour l'instant</p>
                                        {% endif %} 
                                        {% if trips|length > 2 %}
                                            <div class=\"row\">
                                                <div class=\"col d-flex justify-content-center\">Trajet</div>
                                                <div class=\"col d-flex justify-content-around\">Date</div>
                                                <div class=\"col d-flex justify-content-center\">Status</div>
                                                <div class=\"col d-flex justify-content-center\">Détails</div>
                                            </div>
                                        {% endif %}
                                            {% for trip in trips %}
                                                {% if loop.index0 > 2 and trips|length > 0 %}
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
                                                {% else %}
                                                {% endif %}
                                            {% endfor %}
                                        </div>
                                    </div>
                                    
                                </label>
                                <label class=\"accordion-wrapper\">
                                    <input type=\"checkbox\" class=\"accordion\" hidden/>
                                    <div class=\"title\">
                                        <strong>Consulté mes réservations en tant que passager</strong>
                                        <svg viewBox=\"0 0 256 512\" width=\"12\" title=\"angle-right\" class=\"side-icon\" fill=\"white\">
                                            <path d=\"M224.3 273l-136 136c-9.4 9.4-24.6 9.4-33.9 0l-22.6-22.6c-9.4-9.4-9.4-24.6 0-33.9l96.4-96.4-96.4-96.4c-9.4-9.4-9.4-24.6 0-33.9L54.3 103c9.4-9.4 24.6-9.4 33.9 0l136 136c9.5 9.4 9.5 24.6.1 34z\"/>
                                        </svg>
                                        <svg viewBox=\"0 0 320 512\" height=\"24\" title=\"angle-down\" class=\"down-icon\" fill=\"white\">
                                            <path d=\"M143 352.3L7 216.3c-9.4-9.4-9.4-24.6 0-33.9l22.6-22.6c9.4-9.4 24.6-9.4 33.9 0l96.4 96.4 96.4-96.4c9.4-9.4 24.6-9.4 33.9 0l22.6 22.6c9.4 9.4 9.4 24.6 0 33.9l-136 136c-9.2 9.4-24.4 9.4-33.8 0z\"/>
                                        </svg>
                                    </div>
                                    <div class=\"content\">
                                        <div class=\"col-12 pt-3\">
                                            {% if bookings|length == 0 %}
                                                <p class=\"text-center py-2\"><i style=\"color:chocolate;\"class=\"px-2 fas fa-hourglass-end\"></i>Aucune réservation pour l'instant</p>
                                            {% endif %}
                                            {% if bookings|length >= 1 %}
                                                <div class=\"row\">
                                                    <div class=\"col d-flex justify-content-center\">Trajet</div>
                                                    <div class=\"col d-flex justify-content-around\">Date</div>
                                                    <div class=\"col d-flex justify-content-center\">Status</div>
                                                    <div class=\"col d-flex justify-content-center\">Détails</div>
                                                </div>
                                            {% endif %}
                                            {% for booking in bookings %}
                                            {% if bookings|length >= 1 %}
                                                <div class=\"row mt-4 line-trip-profile\">
                                                    <div class=\"col d-flex justify-content-center\">{{ booking.trip.departure }}
                                                        ->
                                                        {{ booking.trip.arrival }}</div>
                                                    <div class=\"col d-flex justify-content-center\">{{ booking.trip.dateOfTrip|date(\"d M\") }}</div>
                                                    {% if booking.trip.tripStarted != true and booking.trip.tripCompleted != true %}
                                                        <div class=\"col d-flex flex-column align-items-center\">
                                                            <p class=\"trip-start-button\">A venir</p>
                                                        </div>
                                                    {% elseif booking.trip.tripCompleted == true %}
                                                        <div class=\"col d-flex flex-column align-items-center\">
                                                            <a class=\"trip-finish-button\">Trajet terminé</a>
                                                        </div>
                                                    {% else %}
                                                        <div class=\"col d-flex flex-column align-items-center\">
                                                            <div class=\"row d-flex \">Trajet en cours</div>
                                                        </div>
                                                    {% endif %}
                                                    <div class=\"col d-flex  justify-content-center align-items-center\">
                                                        <a href=\"{{ path ('trip_details', {'id': booking.trip.id}) }}\" class=\"btn\">
                                                            <i class=\"far fa-eye\"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            {% else %}
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
                                <div class=\"form-info\">
                                    <h4 class=\"text-center\">Modifier mon mot de passe</h4>
                                    <div class=\"row\">
                                        <div class=\"col-md-6 col-sm-12\">
                                            {{ include('user/_form-reset.html.twig') }}
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
</div>
{% endblock %}", "user/edit.html.twig", "/shared/httpd/Projet-Final/templates/user/edit.html.twig");
    }
}

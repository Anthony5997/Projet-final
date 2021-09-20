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
        echo "          ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 8, $this->source); })()), "flashes", [0 => "success"], "method", false, false, false, 8));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 9
            echo "            <div class=\"alert alert-success text-white\">
                ";
            // line 10
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 13, $this->source); })()), "flashes", [0 => "error"], "method", false, false, false, 13));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 14
            echo "            <div class=\"alert alert-error text-white\">
                ";
            // line 15
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        echo "        <ul class=\"nav nav-tabs\" role=\"tablist\">
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
                <a class=\"nav-link\" data-toggle=\"tab\" href=\"#tabs-5\" role=\"tab\">Mes trajets</a>
            </li>
            <li class=\"nav-item\">
                <a class=\"nav-link\" data-toggle=\"tab\" href=\"#tabs-6\" role=\"tab\">Mon compte</a>
            </li>
        </ul>

        <div class=\"tab-content\">
            <div class=\"tab-pane active\" id=\"tabs-1\" role=\"tabpanel\">
               <div class=\"container\">
                    <div class=\"main-info-profile\">
                        <div class=\"row\">
                            <div class=\"col-xs-12 col-sm-4 col-md-4 d-flex flex-column align-items-center justify-content-center\">
                                <p class=\"\">";
        // line 45
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 45, $this->source); })()), "firstName", [], "any", false, false, false, 45), "html", null, true);
        echo "</p>
                                <p class=\"experience-profile\">";
        // line 46
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 46, $this->source); })()), "userExperience", [], "any", false, false, false, 46), "experienceLevel", [], "any", false, false, false, 46), "html", null, true);
        echo "</p>
                                <p class=\"experience-profile d-flex flex-column align-items-center justify-content-center\"> Trajets effectué</p>
                                <p class=\"experience-profile d-flex flex-column align-items-center justify-content-center\"><strong>";
        // line 48
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 48, $this->source); })()), "tripsMade", [], "any", false, false, false, 48), "html", null, true);
        echo "</strong></p>
                            </div>
                            <div class=\"col-xs-12 col-sm-4 col-md-4\">
                            </div>
                            <div class=\"col-xs-12 col-sm-4 col-md-4\">
                                ";
        // line 53
        if ((0 !== twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 53, $this->source); })()), "profile_picture", [], "any", false, false, false, 53), ""))) {
            // line 54
            echo "                                    <div class=\"existing-file\">
                                        <a href=\"";
            // line 55
            echo twig_escape_filter($this->env, ($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/assets/uploads/profilePicture/") . twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 55, $this->source); })()), "profile_picture", [], "any", false, false, false, 55)), "html", null, true);
            echo "\" target=\"_blank\"><img class=\"profile-picture-profile\" src=\"";
            echo twig_escape_filter($this->env, ($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/assets/uploads/profilePicture/") . twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 55, $this->source); })()), "profile_picture", [], "any", false, false, false, 55)), "html", null, true);
            echo "\"/></a>
                                    </div>
                                    ";
        } else {
            // line 58
            echo "                                        <div class=\"existing-file\">
                                        <a href=\"";
            // line 59
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/assets/uploads/profilePicture/default_profile_picture.jpg"), "html", null, true);
            echo "\" target=\"_blank\"><img class=\"profile-picture-profile\" src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/assets/uploads/profilePicture/default_profile_picture.jpg"), "html", null, true);
            echo "\"/></a>
                                    </div>
                                ";
        }
        // line 62
        echo "                            </div>
                        </div>
                    </div>
                    <div class=\"main-info-profile\">
                        <div class=\"row\">
                            <div class=\"input-profile-apropos\">
                                ";
        // line 68
        if ((0 !== twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 68, $this->source); })()), "bio", [], "any", false, false, false, 68), ""))) {
            // line 69
            echo "                                    <p>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 69, $this->source); })()), "bio", [], "any", false, false, false, 69), "html", null, true);
            echo "</p>
                                        ";
        } else {
            // line 71
            echo "                                            <button class=\"profile-button\">
                                                ajouter une biographie <i class=\"fas fa-plus\"></i>
                                            </button>
                                    ";
        }
        // line 75
        echo "                                </div>
                                <div class=\"input-profile-apropos\">
                                    ";
        // line 77
        if ((0 !== twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 77, $this->source); })()), "profile_picture", [], "any", false, false, false, 77), ""))) {
            // line 78
            echo "                                        <button class=\"profile-button\">
                                                modifier ma photo de profile <i class=\"fas fa-plus\"></i>
                                            </button>
                                        ";
        } else {
            // line 82
            echo "                                            <button class=\"profile-button\">
                                                ajouter une photo de profile <i class=\"fas fa-plus\"></i>
                                            </button>
                                    ";
        }
        // line 86
        echo "                                </div>
                            </div>
                        <div class=\"d-flex justify-content-center\"><span class=\"profile-separator\"></div>
                    </div>
                    <div class=\"main-info-profile\">
                        <div class=\"row\">
                            <div class=\"preference-profile-container col-xs-12 col-sm-5 col-md-5\">
                            <h2>Mes Préférences</h2>
                              <h6> Discussion : </h6>
                              <p class=\"form-control\">";
        // line 95
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 95, $this->source); })()), "travelPreferences", [], "any", false, false, false, 95), "discussion", [], "any", false, false, false, 95), "html", null, true);
        echo "</p>
                              <h6> Fumeur : </h6>
                              <p class=\"form-control\">";
        // line 97
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 97, $this->source); })()), "travelPreferences", [], "any", false, false, false, 97), "smoking", [], "any", false, false, false, 97), "html", null, true);
        echo "</p>
                              <h6> Musique : </h6>
                              <p class=\"form-control\">";
        // line 99
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 99, $this->source); })()), "travelPreferences", [], "any", false, false, false, 99), "music", [], "any", false, false, false, 99), "html", null, true);
        echo "</p>
                              <h6> Animaux : </h6>
                              <p class=\"form-control\">";
        // line 101
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 101, $this->source); })()), "travelPreferences", [], "any", false, false, false, 101), "animals", [], "any", false, false, false, 101), "html", null, true);
        echo "</p>
                              <h6> Pass Sanitaire : </h6>
                              <p class=\"form-control\">";
        // line 103
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 103, $this->source); })()), "travelPreferences", [], "any", false, false, false, 103), "healthPass", [], "any", false, false, false, 103), "html", null, true);
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
        // line 112
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 112, $this->source); })()), "vehicule", [], "any", false, false, false, 112), "brand", [], "any", false, false, false, 112), "html", null, true);
        echo "</p>
                                    <p class=\"vehicule-profile\">Modèle : ";
        // line 113
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 113, $this->source); })()), "vehicule", [], "any", false, false, false, 113), "model", [], "any", false, false, false, 113), "html", null, true);
        echo "</p>
                                    <p class=\"vehicule-profile\">Couleur : ";
        // line 114
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 114, $this->source); })()), "vehicule", [], "any", false, false, false, 114), "color", [], "any", false, false, false, 114), "html", null, true);
        echo "</p>
                                </div>
                                <div class=\"col-xs-12 col-sm-6 col-md-6\">
                                    <a class=\"d-flex justify-content-center\" href=\"";
        // line 117
        echo twig_escape_filter($this->env, ($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/assets/uploads/vehiculePicture/") . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 117, $this->source); })()), "vehicule", [], "any", false, false, false, 117), "vehiculePicture", [], "any", false, false, false, 117)), "html", null, true);
        echo "\" target=\"_blank\"><img class=\"profile-picture-profile\" src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("/assets/uploads/vehiculePicture/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 117, $this->source); })()), "vehicule", [], "any", false, false, false, 117), "vehiculePicture", [], "any", false, false, false, 117))), "html", null, true);
        echo "\"/></a>
                                </div>
                            </div>
                            

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"tab-pane\" id=\"tabs-2\" role=\"tabpanel\">
                <div class=\"container profile-section\">
                        <h3>Informations Personnelle</h3>
                    ";
        // line 130
        echo twig_include($this->env, $context, "user/_form.html.twig");
        echo "
                </div>
            </div>
            <div class=\"tab-pane\" id=\"tabs-3\" role=\"tabpanel\">
                <div class=\"container profile-section\">
                <h3>Mes préférences</h3>
                    ";
        // line 136
        echo twig_include($this->env, $context, "travel_preferences/_form.html.twig");
        echo "
                </div>
            </div>
            <div class=\"tab-pane\" id=\"tabs-4\" role=\"tabpanel\">
                <div class=\"container profile-section\">
                <h3>Mon véhicule</h3>
                 ";
        // line 142
        echo twig_include($this->env, $context, "vehicule/_form.html.twig");
        echo "
                </div>
            </div>
                <div class=\"tab-pane\" id=\"tabs-5\" role=\"tabpanel\">
                <div class=\"container profile-section\">
                <h3 class=\"col d-flex justify-content-center\">Mes trajets</h3>
                <div class=\"row\">
                    <div class=\"col d-flex justify-content-center\">Identifiant</div>
                    <div class=\"col d-flex justify-content-end\">Trajet</div>
                    <div class=\"col d-flex justify-content-around\">Date</div>
                    <div class=\"col d-flex justify-content-center\">Status</div>
                    <div class=\"col d-flex justify-content-end\">Détails</div>
                </div>

          
            ";
        // line 157
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["trips"]) || array_key_exists("trips", $context) ? $context["trips"] : (function () { throw new RuntimeError('Variable "trips" does not exist.', 157, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["trip"]) {
            // line 158
            echo "                <div class=\"row mt-4 line-trip-profile\">
                    <div class=\"col\">";
            // line 159
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["trip"], "id", [], "any", false, false, false, 159), "html", null, true);
            echo "</div>
                    <div class=\"col d-flex justify-content-center\">";
            // line 160
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["trip"], "departure", [], "any", false, false, false, 160), "html", null, true);
            echo " -> ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["trip"], "arrival", [], "any", false, false, false, 160), "html", null, true);
            echo "</div>
                    <div class=\"col d-flex justify-content-center\">";
            // line 161
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["trip"], "dateOfTrip", [], "any", false, false, false, 161), "d M"), "html", null, true);
            echo "</div>
                    ";
            // line 162
            if (((0 !== twig_compare(twig_get_attribute($this->env, $this->source, $context["trip"], "tripStarted", [], "any", false, false, false, 162), true)) && (0 !== twig_compare(twig_get_attribute($this->env, $this->source, $context["trip"], "tripCompleted", [], "any", false, false, false, 162), true)))) {
                // line 163
                echo "                        <div class=\"col d-flex flex-column align-items-center\"><a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("trip_start", ["id" => twig_get_attribute($this->env, $this->source, $context["trip"], "id", [], "any", false, false, false, 163)]), "html", null, true);
                echo "\" onclick=\"return prompt('Voulez vous commencer le trajet ? Taper \\'Oui\\' pour commencer') == 'Oui'\" href=\"\" class=\"btn btn-primary\">Commencer</a></div>
                    ";
            } elseif ((0 === twig_compare(twig_get_attribute($this->env, $this->source,             // line 164
$context["trip"], "tripCompleted", [], "any", false, false, false, 164), true))) {
                // line 165
                echo "                        <div class=\"col d-flex flex-column align-items-center\"><a class=\"btn btn-success\">Trajet terminé</a></div>
                    ";
            } else {
                // line 167
                echo "                        <div class=\"col d-flex flex-column align-items-center\">
                        <div class=\"row d-flex \">Trajet en cours</div><a href=\"";
                // line 168
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("trip_finish", ["id" => twig_get_attribute($this->env, $this->source, $context["trip"], "id", [], "any", false, false, false, 168)]), "html", null, true);
                echo "\" class=\"btn btn-info\">Terminer le trajet</a></div>
                    ";
            }
            // line 170
            echo "                    <div class=\"col d-flex  justify-content-end align-items-center\">
                        <a href=\"";
            // line 171
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("trip_details", ["id" => twig_get_attribute($this->env, $this->source, $context["trip"], "id", [], "any", false, false, false, 171)]), "html", null, true);
            echo "\" class=\"btn btn-info\"><i class=\"far fa-eye\"></i></a></div>
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trip'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 174
        echo "             
            </div>
            </div>
             <div class=\"tab-pane\" id=\"tabs-6\" role=\"tabpanel\">
                <div class=\"container profile-section\">
                <h3>Mon compte</h3>
                    <div class=\"col-xs-12 col-sm-6 col-md-6 col-md-offset-4\">
                        ";
        // line 181
        echo twig_include($this->env, $context, "user/_form-reset.html.twig");
        echo "
                        ";
        // line 182
        echo twig_include($this->env, $context, "user/_delete_form.html.twig");
        echo "
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
        return array (  413 => 182,  409 => 181,  400 => 174,  391 => 171,  388 => 170,  383 => 168,  380 => 167,  376 => 165,  374 => 164,  369 => 163,  367 => 162,  363 => 161,  357 => 160,  353 => 159,  350 => 158,  346 => 157,  328 => 142,  319 => 136,  310 => 130,  292 => 117,  286 => 114,  282 => 113,  278 => 112,  266 => 103,  261 => 101,  256 => 99,  251 => 97,  246 => 95,  235 => 86,  229 => 82,  223 => 78,  221 => 77,  217 => 75,  211 => 71,  205 => 69,  203 => 68,  195 => 62,  187 => 59,  184 => 58,  176 => 55,  173 => 54,  171 => 53,  163 => 48,  158 => 46,  154 => 45,  125 => 18,  116 => 15,  113 => 14,  108 => 13,  99 => 10,  96 => 9,  91 => 8,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Edit User{% endblock %}

{% block body %}
<div class=\"container mt-5\">
    {# {{dump(user)}} #}
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
                <a class=\"nav-link\" data-toggle=\"tab\" href=\"#tabs-5\" role=\"tab\">Mes trajets</a>
            </li>
            <li class=\"nav-item\">
                <a class=\"nav-link\" data-toggle=\"tab\" href=\"#tabs-6\" role=\"tab\">Mon compte</a>
            </li>
        </ul>

        <div class=\"tab-content\">
            <div class=\"tab-pane active\" id=\"tabs-1\" role=\"tabpanel\">
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
                                {% if user.bio != '' %}
                                    <p>{{user.bio}}</p>
                                        {% else %}
                                            <button class=\"profile-button\">
                                                ajouter une biographie <i class=\"fas fa-plus\"></i>
                                            </button>
                                    {% endif %}
                                </div>
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
                <div class=\"container profile-section\">
                        <h3>Informations Personnelle</h3>
                    {{ include('user/_form.html.twig') }}
                </div>
            </div>
            <div class=\"tab-pane\" id=\"tabs-3\" role=\"tabpanel\">
                <div class=\"container profile-section\">
                <h3>Mes préférences</h3>
                    {{ include('travel_preferences/_form.html.twig') }}
                </div>
            </div>
            <div class=\"tab-pane\" id=\"tabs-4\" role=\"tabpanel\">
                <div class=\"container profile-section\">
                <h3>Mon véhicule</h3>
                 {{ include('vehicule/_form.html.twig') }}
                </div>
            </div>
                <div class=\"tab-pane\" id=\"tabs-5\" role=\"tabpanel\">
                <div class=\"container profile-section\">
                <h3 class=\"col d-flex justify-content-center\">Mes trajets</h3>
                <div class=\"row\">
                    <div class=\"col d-flex justify-content-center\">Identifiant</div>
                    <div class=\"col d-flex justify-content-end\">Trajet</div>
                    <div class=\"col d-flex justify-content-around\">Date</div>
                    <div class=\"col d-flex justify-content-center\">Status</div>
                    <div class=\"col d-flex justify-content-end\">Détails</div>
                </div>

          
            {% for trip in trips %}
                <div class=\"row mt-4 line-trip-profile\">
                    <div class=\"col\">{{trip.id}}</div>
                    <div class=\"col d-flex justify-content-center\">{{trip.departure}} -> {{trip.arrival}}</div>
                    <div class=\"col d-flex justify-content-center\">{{trip.dateOfTrip|date(\"d M\")}}</div>
                    {% if trip.tripStarted != true and trip.tripCompleted != true %}
                        <div class=\"col d-flex flex-column align-items-center\"><a href=\"{{ path ('trip_start', {'id': trip.id})}}\" onclick=\"return prompt('Voulez vous commencer le trajet ? Taper \\'Oui\\' pour commencer') == 'Oui'\" href=\"\" class=\"btn btn-primary\">Commencer</a></div>
                    {% elseif trip.tripCompleted == true %}
                        <div class=\"col d-flex flex-column align-items-center\"><a class=\"btn btn-success\">Trajet terminé</a></div>
                    {% else %}
                        <div class=\"col d-flex flex-column align-items-center\">
                        <div class=\"row d-flex \">Trajet en cours</div><a href=\"{{ path ('trip_finish', {'id': trip.id})}}\" class=\"btn btn-info\">Terminer le trajet</a></div>
                    {% endif %}
                    <div class=\"col d-flex  justify-content-end align-items-center\">
                        <a href=\"{{ path ('trip_details', {'id': trip.id})}}\" class=\"btn btn-info\"><i class=\"far fa-eye\"></i></a></div>
                    </div>
                {% endfor %}
             
            </div>
            </div>
             <div class=\"tab-pane\" id=\"tabs-6\" role=\"tabpanel\">
                <div class=\"container profile-section\">
                <h3>Mon compte</h3>
                    <div class=\"col-xs-12 col-sm-6 col-md-6 col-md-offset-4\">
                        {{ include('user/_form-reset.html.twig') }}
                        {{ include('user/_delete_form.html.twig') }}
                    </div>

                </div>
            </div>
        </div>
</div>

   


{% endblock %}", "user/edit.html.twig", "/shared/httpd/Projet-Final/templates/user/edit.html.twig");
    }
}

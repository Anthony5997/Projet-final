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
        echo "<div class=\"container-profile\">
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
            echo "            <div class=\"alert alert-error text-white\">
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
        // line 44
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 44, $this->source); })()), "firstName", [], "any", false, false, false, 44), "html", null, true);
        echo "</p>
                                <p class=\"experience-profile\">";
        // line 45
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 45, $this->source); })()), "userExperience", [], "any", false, false, false, 45), "experienceLevel", [], "any", false, false, false, 45), "html", null, true);
        echo "</p>
                                <p class=\"experience-profile d-flex flex-column align-items-center justify-content-center\"> Trajets effectué</p>
                                <p class=\"experience-profile d-flex flex-column align-items-center justify-content-center\"><strong>";
        // line 47
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 47, $this->source); })()), "tripsMade", [], "any", false, false, false, 47), "html", null, true);
        echo "</strong></p>
                            </div>
                            <div class=\"col-xs-12 col-sm-4 col-md-4\">
                            </div>
                            <div class=\"col-xs-12 col-sm-4 col-md-4\">
                                ";
        // line 52
        if ((0 !== twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 52, $this->source); })()), "profile_picture", [], "any", false, false, false, 52), ""))) {
            // line 53
            echo "                                    <div class=\"existing-file\">
                                        <a href=\"";
            // line 54
            echo twig_escape_filter($this->env, ($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/assets/uploads/profilePicture/") . twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 54, $this->source); })()), "profile_picture", [], "any", false, false, false, 54)), "html", null, true);
            echo "\" target=\"_blank\"><img class=\"profile-picture-profile\" src=\"";
            echo twig_escape_filter($this->env, ($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/assets/uploads/profilePicture/") . twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 54, $this->source); })()), "profile_picture", [], "any", false, false, false, 54)), "html", null, true);
            echo "\"/></a>
                                    </div>
                                    ";
        } else {
            // line 57
            echo "                                        <div class=\"existing-file\">
                                        <a href=\"";
            // line 58
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/assets/uploads/profilePicture/default_profile_picture.jpg"), "html", null, true);
            echo "\" target=\"_blank\"><img class=\"profile-picture-profile\" src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/assets/uploads/profilePicture/default_profile_picture.jpg"), "html", null, true);
            echo "\"/></a>
                                    </div>
                                ";
        }
        // line 61
        echo "                            </div>
                        </div>
                    </div>
                    <div class=\"main-info-profile\">
                        <div class=\"d-flex justify-content-center\"><span class=\"profile-separator\"></div>
                    </div>
                    <div class=\"main-info-profile\">
                        <div class=\"row\">
                            <div class=\"preference-profile-container col-xs-12 col-sm-5 col-md-5\">
                            <h2>Mes Préférences</h2>
                              <h6> Discussion : </h6>
                              <p class=\"form-control\">";
        // line 72
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 72, $this->source); })()), "travelPreferences", [], "any", false, false, false, 72), "discussion", [], "any", false, false, false, 72), "html", null, true);
        echo "</p>
                              <h6> Fumeur : </h6>
                              <p class=\"form-control\">";
        // line 74
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 74, $this->source); })()), "travelPreferences", [], "any", false, false, false, 74), "smoking", [], "any", false, false, false, 74), "html", null, true);
        echo "</p>
                              <h6> Musique : </h6>
                              <p class=\"form-control\">";
        // line 76
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 76, $this->source); })()), "travelPreferences", [], "any", false, false, false, 76), "music", [], "any", false, false, false, 76), "html", null, true);
        echo "</p>
                              <h6> Animaux : </h6>
                              <p class=\"form-control\">";
        // line 78
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 78, $this->source); })()), "travelPreferences", [], "any", false, false, false, 78), "animals", [], "any", false, false, false, 78), "html", null, true);
        echo "</p>
                              <h6> Pass Sanitaire : </h6>
                              <p class=\"form-control\">";
        // line 80
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 80, $this->source); })()), "travelPreferences", [], "any", false, false, false, 80), "healthPass", [], "any", false, false, false, 80), "html", null, true);
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
        // line 89
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 89, $this->source); })()), "vehicule", [], "any", false, false, false, 89), "brand", [], "any", false, false, false, 89), "html", null, true);
        echo "</p>
                                    <p class=\"vehicule-profile\">Modèle : ";
        // line 90
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 90, $this->source); })()), "vehicule", [], "any", false, false, false, 90), "model", [], "any", false, false, false, 90), "html", null, true);
        echo "</p>
                                    <p class=\"vehicule-profile\">Couleur : ";
        // line 91
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 91, $this->source); })()), "vehicule", [], "any", false, false, false, 91), "color", [], "any", false, false, false, 91), "html", null, true);
        echo "</p>
                                </div>
                                <div class=\"col-xs-12 col-sm-6 col-md-6\">
                                    <a class=\"d-flex justify-content-center\" href=\"";
        // line 94
        echo twig_escape_filter($this->env, ($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/assets/uploads/vehiculePicture/") . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 94, $this->source); })()), "vehicule", [], "any", false, false, false, 94), "vehiculePicture", [], "any", false, false, false, 94)), "html", null, true);
        echo "\" target=\"_blank\"><img class=\"profile-picture-profile\" src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("/assets/uploads/vehiculePicture/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 94, $this->source); })()), "vehicule", [], "any", false, false, false, 94), "vehiculePicture", [], "any", false, false, false, 94))), "html", null, true);
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
                    <div >
                        <h3 class=\"my-4 text-center\">Informations Personnelle</h3>
                        ";
        // line 108
        echo twig_include($this->env, $context, "user/_form.html.twig");
        echo "
                    </div>
                </div>
            </div>
            <div class=\"tab-pane\" id=\"tabs-3\" role=\"tabpanel\">
                <div class=\"container profile-section\">
                <h3 class=\"text-center\">Mes préférences de voyage</h3>
                    ";
        // line 115
        echo twig_include($this->env, $context, "travel_preferences/_form.html.twig");
        echo "
                </div>
            </div>
            <div class=\"tab-pane\" id=\"tabs-4\" role=\"tabpanel\">
                <div class=\"container profile-section\">
                <h3>Mon véhicule</h3>
                 ";
        // line 121
        echo twig_include($this->env, $context, "vehicule/_form.html.twig");
        echo "
                </div>
            </div>
                <div class=\"tab-pane\" id=\"tabs-5\" role=\"tabpanel\">
                <div class=\"container profile-section\">
                <h3 class=\"col d-flex justify-content-center\">Mes trajets</h3>
                <div class=\"row\">
                    <div class=\"col d-flex justify-content-center\">Trajet</div>
                    <div class=\"col d-flex justify-content-around\">Date</div>
                    <div class=\"col d-flex justify-content-center\">Status</div>
                    <div class=\"col d-flex justify-content-center\">Détails</div>
                </div>
          
            ";
        // line 134
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["trips"]) || array_key_exists("trips", $context) ? $context["trips"] : (function () { throw new RuntimeError('Variable "trips" does not exist.', 134, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["trip"]) {
            // line 135
            echo "                <div class=\"row mt-4 line-trip-profile\">
                    <div class=\"col d-flex justify-content-center\">";
            // line 136
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["trip"], "departure", [], "any", false, false, false, 136), "html", null, true);
            echo " -> ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["trip"], "arrival", [], "any", false, false, false, 136), "html", null, true);
            echo "</div>
                    <div class=\"col d-flex justify-content-center\">";
            // line 137
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["trip"], "dateOfTrip", [], "any", false, false, false, 137), "d M"), "html", null, true);
            echo "</div>
                    ";
            // line 138
            if (((0 !== twig_compare(twig_get_attribute($this->env, $this->source, $context["trip"], "tripStarted", [], "any", false, false, false, 138), true)) && (0 !== twig_compare(twig_get_attribute($this->env, $this->source, $context["trip"], "tripCompleted", [], "any", false, false, false, 138), true)))) {
                // line 139
                echo "                        <div class=\"col d-flex flex-column align-items-center\"><a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("trip_start", ["id" => twig_get_attribute($this->env, $this->source, $context["trip"], "id", [], "any", false, false, false, 139)]), "html", null, true);
                echo "\" onclick=\"return prompt('Voulez vous commencer le trajet ? Taper \\'Oui\\' pour commencer') == 'Oui'\" href=\"\" class=\"btn btn-primary\">Commencer</a></div>
                    ";
            } elseif ((0 === twig_compare(twig_get_attribute($this->env, $this->source,             // line 140
$context["trip"], "tripCompleted", [], "any", false, false, false, 140), true))) {
                // line 141
                echo "                        <div class=\"col d-flex flex-column align-items-center\"><a class=\"btn btn-success\">Trajet terminé</a></div>
                    ";
            } else {
                // line 143
                echo "                        <div class=\"col d-flex flex-column align-items-center\">
                        <div class=\"row d-flex \">Trajet en cours</div><a href=\"";
                // line 144
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("trip_finish", ["id" => twig_get_attribute($this->env, $this->source, $context["trip"], "id", [], "any", false, false, false, 144)]), "html", null, true);
                echo "\" class=\"btn btn-info\">Terminer le trajet</a></div>
                    ";
            }
            // line 146
            echo "                    <div class=\"col d-flex  justify-content-center align-items-center\">
                        <a href=\"";
            // line 147
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("trip_details", ["id" => twig_get_attribute($this->env, $this->source, $context["trip"], "id", [], "any", false, false, false, 147)]), "html", null, true);
            echo "\" class=\"btn btn-rich-black\"><i class=\"far fa-eye\"></i></a></div>
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trip'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 150
        echo "             
            </div>
            </div>
             <div class=\"tab-pane\" id=\"tabs-6\" role=\"tabpanel\">
                <div class=\"container profile-section\">
                <h3>Mon compte</h3>
                    <div class=\"col-xs-12 col-sm-6 col-md-6 col-md-offset-4\">
                        ";
        // line 157
        echo twig_include($this->env, $context, "user/_form-reset.html.twig");
        echo "
                        <a href=\"";
        // line 158
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("logout");
        echo "\" class=\"btn btn-danger mb-4\"><i class=\"fas fa-sign-out-alt\"></i> Me déconnecter</a>
                        ";
        // line 159
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
        return array (  374 => 159,  370 => 158,  366 => 157,  357 => 150,  348 => 147,  345 => 146,  340 => 144,  337 => 143,  333 => 141,  331 => 140,  326 => 139,  324 => 138,  320 => 137,  314 => 136,  311 => 135,  307 => 134,  291 => 121,  282 => 115,  272 => 108,  253 => 94,  247 => 91,  243 => 90,  239 => 89,  227 => 80,  222 => 78,  217 => 76,  212 => 74,  207 => 72,  194 => 61,  186 => 58,  183 => 57,  175 => 54,  172 => 53,  170 => 52,  162 => 47,  157 => 45,  153 => 44,  124 => 17,  115 => 14,  112 => 13,  107 => 12,  98 => 9,  95 => 8,  91 => 7,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Edit User{% endblock %}

{% block body %}
<div class=\"container-profile\">
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
                    <div >
                        <h3 class=\"my-4 text-center\">Informations Personnelle</h3>
                        {{ include('user/_form.html.twig') }}
                    </div>
                </div>
            </div>
            <div class=\"tab-pane\" id=\"tabs-3\" role=\"tabpanel\">
                <div class=\"container profile-section\">
                <h3 class=\"text-center\">Mes préférences de voyage</h3>
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
                    <div class=\"col d-flex justify-content-center\">Trajet</div>
                    <div class=\"col d-flex justify-content-around\">Date</div>
                    <div class=\"col d-flex justify-content-center\">Status</div>
                    <div class=\"col d-flex justify-content-center\">Détails</div>
                </div>
          
            {% for trip in trips %}
                <div class=\"row mt-4 line-trip-profile\">
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
                    <div class=\"col d-flex  justify-content-center align-items-center\">
                        <a href=\"{{ path ('trip_details', {'id': trip.id})}}\" class=\"btn btn-rich-black\"><i class=\"far fa-eye\"></i></a></div>
                    </div>
                {% endfor %}
             
            </div>
            </div>
             <div class=\"tab-pane\" id=\"tabs-6\" role=\"tabpanel\">
                <div class=\"container profile-section\">
                <h3>Mon compte</h3>
                    <div class=\"col-xs-12 col-sm-6 col-md-6 col-md-offset-4\">
                        {{ include('user/_form-reset.html.twig') }}
                        <a href=\"{{path ('logout')}}\" class=\"btn btn-danger mb-4\"><i class=\"fas fa-sign-out-alt\"></i> Me déconnecter</a>
                        {{ include('user/_delete_form.html.twig') }}
                    </div>

                </div>
            </div>
        </div>
</div> 

{% endblock %}", "user/edit.html.twig", "/shared/httpd/Projet-Final/templates/user/edit.html.twig");
    }
}

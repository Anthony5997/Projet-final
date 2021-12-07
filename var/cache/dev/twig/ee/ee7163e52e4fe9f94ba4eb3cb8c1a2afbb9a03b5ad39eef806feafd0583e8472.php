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

        echo "Edit User
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 6
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "        <div class=\"container\">
    <div class=\"container-profile\">
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
        echo "        <ul class=\"nav nav-tabs\" role=\"tablist\">
            <li class=\"nav-item\">
                <a class=\"nav-link  tab-custom active\" data-toggle=\"tab\" href=\"#tabs-1\" role=\"tab\">A Propos</a>
            </li>
            <li class=\"nav-item\">
                <a class=\"nav-link tab-custom \" data-toggle=\"tab\" href=\"#tabs-2\" role=\"tab\">Information Personnel</a>
            </li>
            <li class=\"nav-item\">
                <a class=\"nav-link tab-custom \" data-toggle=\"tab\" href=\"#tabs-3\" role=\"tab\">Préférences de Voyage</a>
            </li>
            <li class=\"nav-item\">
                <a class=\"nav-link tab-custom \" data-toggle=\"tab\" href=\"#tabs-4\" role=\"tab\">Véhicule Personnel</a>
            </li>
            <li class=\"nav-item\">
                <a class=\"nav-link tab-custom \" data-toggle=\"tab\" href=\"#tabs-5\" role=\"tab\">Mes trajets</a>
            </li>
            <li class=\"nav-item\">
                <a class=\"nav-link tab-custom \" data-toggle=\"tab\" href=\"#tabs-6\" role=\"tab\">Mon compte</a>
            </li>
        </ul>

        <div class=\"tab-content\">
            <div class=\"tab-pane active\" id=\"tabs-1\" role=\"tabpanel\">
                <div class=\"container\">
                    <div class=\"main-info-profile\">
                        <div class=\"row\">
                            <div class=\"col-xs-12 col-sm-4 col-md-4 d-flex flex-column align-items-center justify-content-center\">
                                <p class=\"\">";
        // line 46
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 46, $this->source); })()), "firstName", [], "any", false, false, false, 46), "html", null, true);
        echo "</p>
                                <p class=\"experience-profile\">";
        // line 47
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 47, $this->source); })()), "userExperience", [], "any", false, false, false, 47), "experienceLevel", [], "any", false, false, false, 47), "html", null, true);
        echo "</p>
                                <p class=\"experience-profile d-flex flex-column align-items-center justify-content-center\">
                                    Trajets effectué</p>
                                <p class=\"experience-profile d-flex flex-column align-items-center justify-content-center\">
                                    <strong>";
        // line 51
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 51, $this->source); })()), "tripsMade", [], "any", false, false, false, 51), "html", null, true);
        echo "</strong>
                                </p>
                            </div>
                            <div class=\"col-xs-12 col-sm-4 col-md-4\"></div>
                            <div class=\"col-xs-12 col-sm-4 col-md-4\">
                                ";
        // line 56
        if ((0 !== twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 56, $this->source); })()), "profile_picture", [], "any", false, false, false, 56), ""))) {
            // line 57
            echo "                                    <div class=\"existing-file\">
                                        <a href=\"";
            // line 58
            echo twig_escape_filter($this->env, ($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/assets/uploads/profilePicture/") . twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 58, $this->source); })()), "profile_picture", [], "any", false, false, false, 58)), "html", null, true);
            echo "\" target=\"_blank\"><img class=\"profile-picture-profile\" src=\"";
            echo twig_escape_filter($this->env, ($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/assets/uploads/profilePicture/") . twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 58, $this->source); })()), "profile_picture", [], "any", false, false, false, 58)), "html", null, true);
            echo "\"/></a>
                                    </div>
                                ";
        } else {
            // line 61
            echo "                                    <div class=\"existing-file\">
                                        <a href=\"";
            // line 62
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/assets/uploads/profilePicture/default_profile_picture.jpg"), "html", null, true);
            echo "\" target=\"_blank\"><img class=\"profile-picture-profile\" src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/assets/uploads/profilePicture/default_profile_picture.jpg"), "html", null, true);
            echo "\"/></a>
                                    </div>
                                ";
        }
        // line 65
        echo "                            </div>
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
                            <div class=\"content\">
                                <div class=\"preference-profile-container col-xs-12 col-sm-10 col-md-9\">
                                    <h6>
                                        Discussion :
                                    </h6>
                                    <p class=\"form-control\">";
        // line 89
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 89, $this->source); })()), "travelPreferences", [], "any", false, false, false, 89), "discussion", [], "any", false, false, false, 89), "html", null, true);
        echo "</p>
                                    <h6>
                                        Fumeur :
                                    </h6>
                                    <p class=\"form-control\">";
        // line 93
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 93, $this->source); })()), "travelPreferences", [], "any", false, false, false, 93), "smoking", [], "any", false, false, false, 93), "html", null, true);
        echo "</p>
                                    <h6>
                                        Musique :
                                    </h6>
                                    <p class=\"form-control\">";
        // line 97
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 97, $this->source); })()), "travelPreferences", [], "any", false, false, false, 97), "music", [], "any", false, false, false, 97), "html", null, true);
        echo "</p>
                                    <h6>
                                        Animaux :
                                    </h6>
                                    <p class=\"form-control\">";
        // line 101
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 101, $this->source); })()), "travelPreferences", [], "any", false, false, false, 101), "animals", [], "any", false, false, false, 101), "html", null, true);
        echo "</p>
                                    <h6>
                                        Pass Sanitaire :
                                    </h6>
                                    <p class=\"form-control\">";
        // line 105
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 105, $this->source); })()), "travelPreferences", [], "any", false, false, false, 105), "healthPass", [], "any", false, false, false, 105), "html", null, true);
        echo "</p>
                                </div>
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
                            <div class=\"content\">
                                <div class=\"row mt-3 preference-profile-container\">
                                    <div class=\"col-xs-12 col-sm-6 col-md-6 d-flex flex-column pl-5 justify-content-center\">
                                        <p class=\"vehicule-profile\">Marque :
                                            ";
        // line 124
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 124, $this->source); })()), "vehicule", [], "any", false, false, false, 124), "brand", [], "any", false, false, false, 124), "html", null, true);
        echo "</p>
                                        <p class=\"vehicule-profile\">Modèle :
                                            ";
        // line 126
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 126, $this->source); })()), "vehicule", [], "any", false, false, false, 126), "model", [], "any", false, false, false, 126), "html", null, true);
        echo "</p>
                                        <p class=\"vehicule-profile\">Couleur :
                                            ";
        // line 128
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 128, $this->source); })()), "vehicule", [], "any", false, false, false, 128), "color", [], "any", false, false, false, 128), "html", null, true);
        echo "</p>
                                    </div>
                                    <div class=\"col-xs-12 col-sm-6 col-md-6\">
                                        <a class=\"d-flex justify-content-center\" href=\"";
        // line 131
        echo twig_escape_filter($this->env, ($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/assets/uploads/vehiculePicture/") . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 131, $this->source); })()), "vehicule", [], "any", false, false, false, 131), "vehiculePicture", [], "any", false, false, false, 131)), "html", null, true);
        echo "\" target=\"_blank\"><img class=\"profile-picture-profile\" src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("/assets/uploads/vehiculePicture/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 131, $this->source); })()), "vehicule", [], "any", false, false, false, 131), "vehiculePicture", [], "any", false, false, false, 131))), "html", null, true);
        echo "\"/></a>
                                    </div>
                                </div>
                            </div>
                        </label>


                    </div>
                </div>
                <div class=\"tab-pane\" id=\"tabs-2\" role=\"tabpanel\">
                    <div class=\"container profile-section\">
                        <div>
                            ";
        // line 143
        echo twig_include($this->env, $context, "user/_form.html.twig");
        echo "
                        </div>
                    </div>
                </div>
                <div class=\"tab-pane\" id=\"tabs-3\" role=\"tabpanel\">
                    <div class=\"container profile-section\">
                        ";
        // line 149
        echo twig_include($this->env, $context, "travel_preferences/_form.html.twig");
        echo "
                    </div>
                </div>
                <div class=\"tab-pane\" id=\"tabs-4\" role=\"tabpanel\">
                    <div class=\"container profile-section\">
                        ";
        // line 154
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
        // line 167
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["trips"]) || array_key_exists("trips", $context) ? $context["trips"] : (function () { throw new RuntimeError('Variable "trips" does not exist.', 167, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["trip"]) {
            // line 168
            echo "                            <div class=\"row mt-4 line-trip-profile\">
                                <div class=\"col d-flex justify-content-center\">";
            // line 169
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["trip"], "departure", [], "any", false, false, false, 169), "html", null, true);
            echo "
                                    ->
                                    ";
            // line 171
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["trip"], "arrival", [], "any", false, false, false, 171), "html", null, true);
            echo "</div>
                                <div class=\"col d-flex justify-content-center\">";
            // line 172
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["trip"], "dateOfTrip", [], "any", false, false, false, 172), "d M"), "html", null, true);
            echo "</div>
                                ";
            // line 173
            if (((0 !== twig_compare(twig_get_attribute($this->env, $this->source, $context["trip"], "tripStarted", [], "any", false, false, false, 173), true)) && (0 !== twig_compare(twig_get_attribute($this->env, $this->source, $context["trip"], "tripCompleted", [], "any", false, false, false, 173), true)))) {
                // line 174
                echo "                                    <div class=\"col d-flex flex-column align-items-center\">
                                        <a href=\"";
                // line 175
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("trip_start", ["id" => twig_get_attribute($this->env, $this->source, $context["trip"], "id", [], "any", false, false, false, 175)]), "html", null, true);
                echo "\" onclick=\"return prompt('Voulez vous commencer le trajet ? Taper \\'Oui\\' pour commencer') == 'Oui'\" href=\"\" class=\"btn btn-primary\">Commencer</a>
                                    </div>
                                ";
            } elseif ((0 === twig_compare(twig_get_attribute($this->env, $this->source,             // line 177
$context["trip"], "tripCompleted", [], "any", false, false, false, 177), true))) {
                // line 178
                echo "                                    <div class=\"col d-flex flex-column align-items-center\">
                                        <a class=\"btn btn-success\">Trajet terminé</a>
                                    </div>
                                ";
            } else {
                // line 182
                echo "                                    <div class=\"col d-flex flex-column align-items-center\">
                                        <div class=\"row d-flex \">Trajet en cours</div>
                                        <a href=\"";
                // line 184
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("trip_finish", ["id" => twig_get_attribute($this->env, $this->source, $context["trip"], "id", [], "any", false, false, false, 184)]), "html", null, true);
                echo "\" class=\"btn btn-info\">Terminer le trajet</a>
                                    </div>
                                ";
            }
            // line 187
            echo "                                <div class=\"col d-flex  justify-content-center align-items-center\">
                                    <a href=\"";
            // line 188
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("trip_details", ["id" => twig_get_attribute($this->env, $this->source, $context["trip"], "id", [], "any", false, false, false, 188)]), "html", null, true);
            echo "\" class=\"btn btn-rich-black\">
                                        <i class=\"far fa-eye\"></i>
                                    </a>
                                </div>
                            </div>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trip'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 194
        echo "
                    </div>
                </div>
                <div class=\"tab-pane\" id=\"tabs-6\" role=\"tabpanel\">
                    <div class=\"container profile-section\">
                        <h3>Mon compte</h3>
                        <div class=\"col-xs-12 col-sm-6 col-md-6 col-md-offset-4\">
                            ";
        // line 201
        echo twig_include($this->env, $context, "user/_form-reset.html.twig");
        echo "
                            <a href=\"";
        // line 202
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("logout");
        echo "\" class=\"btn btn-danger mb-4\">
                                <i class=\"fas fa-sign-out-alt\"></i>
                                Me déconnecter</a>
                            ";
        // line 205
        echo twig_include($this->env, $context, "user/_delete_form.html.twig");
        echo "
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
        return array (  422 => 205,  416 => 202,  412 => 201,  403 => 194,  391 => 188,  388 => 187,  382 => 184,  378 => 182,  372 => 178,  370 => 177,  365 => 175,  362 => 174,  360 => 173,  356 => 172,  352 => 171,  347 => 169,  344 => 168,  340 => 167,  324 => 154,  316 => 149,  307 => 143,  290 => 131,  284 => 128,  279 => 126,  274 => 124,  252 => 105,  245 => 101,  238 => 97,  231 => 93,  224 => 89,  198 => 65,  190 => 62,  187 => 61,  179 => 58,  176 => 57,  174 => 56,  166 => 51,  159 => 47,  155 => 46,  126 => 19,  117 => 16,  114 => 15,  109 => 14,  100 => 11,  97 => 10,  93 => 9,  89 => 7,  79 => 6,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Edit User
{% endblock %}

{% block body %}
        <div class=\"container\">
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
                <a class=\"nav-link  tab-custom active\" data-toggle=\"tab\" href=\"#tabs-1\" role=\"tab\">A Propos</a>
            </li>
            <li class=\"nav-item\">
                <a class=\"nav-link tab-custom \" data-toggle=\"tab\" href=\"#tabs-2\" role=\"tab\">Information Personnel</a>
            </li>
            <li class=\"nav-item\">
                <a class=\"nav-link tab-custom \" data-toggle=\"tab\" href=\"#tabs-3\" role=\"tab\">Préférences de Voyage</a>
            </li>
            <li class=\"nav-item\">
                <a class=\"nav-link tab-custom \" data-toggle=\"tab\" href=\"#tabs-4\" role=\"tab\">Véhicule Personnel</a>
            </li>
            <li class=\"nav-item\">
                <a class=\"nav-link tab-custom \" data-toggle=\"tab\" href=\"#tabs-5\" role=\"tab\">Mes trajets</a>
            </li>
            <li class=\"nav-item\">
                <a class=\"nav-link tab-custom \" data-toggle=\"tab\" href=\"#tabs-6\" role=\"tab\">Mon compte</a>
            </li>
        </ul>

        <div class=\"tab-content\">
            <div class=\"tab-pane active\" id=\"tabs-1\" role=\"tabpanel\">
                <div class=\"container\">
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
                            <div class=\"content\">
                                <div class=\"preference-profile-container col-xs-12 col-sm-10 col-md-9\">
                                    <h6>
                                        Discussion :
                                    </h6>
                                    <p class=\"form-control\">{{ user.travelPreferences.discussion }}</p>
                                    <h6>
                                        Fumeur :
                                    </h6>
                                    <p class=\"form-control\">{{ user.travelPreferences.smoking }}</p>
                                    <h6>
                                        Musique :
                                    </h6>
                                    <p class=\"form-control\">{{ user.travelPreferences.music }}</p>
                                    <h6>
                                        Animaux :
                                    </h6>
                                    <p class=\"form-control\">{{ user.travelPreferences.animals }}</p>
                                    <h6>
                                        Pass Sanitaire :
                                    </h6>
                                    <p class=\"form-control\">{{ user.travelPreferences.healthPass }}</p>
                                </div>
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
                            <div class=\"content\">
                                <div class=\"row mt-3 preference-profile-container\">
                                    <div class=\"col-xs-12 col-sm-6 col-md-6 d-flex flex-column pl-5 justify-content-center\">
                                        <p class=\"vehicule-profile\">Marque :
                                            {{ user.vehicule.brand }}</p>
                                        <p class=\"vehicule-profile\">Modèle :
                                            {{ user.vehicule.model }}</p>
                                        <p class=\"vehicule-profile\">Couleur :
                                            {{ user.vehicule.color }}</p>
                                    </div>
                                    <div class=\"col-xs-12 col-sm-6 col-md-6\">
                                        <a class=\"d-flex justify-content-center\" href=\"{{ asset ('/assets/uploads/vehiculePicture/') ~ user.vehicule.vehiculePicture }}\" target=\"_blank\"><img class=\"profile-picture-profile\" src=\"{{ asset ('/assets/uploads/vehiculePicture/' ~ user.vehicule.vehiculePicture ) }}\"/></a>
                                    </div>
                                </div>
                            </div>
                        </label>


                    </div>
                </div>
                <div class=\"tab-pane\" id=\"tabs-2\" role=\"tabpanel\">
                    <div class=\"container profile-section\">
                        <div>
                            {{ include('user/_form.html.twig') }}
                        </div>
                    </div>
                </div>
                <div class=\"tab-pane\" id=\"tabs-3\" role=\"tabpanel\">
                    <div class=\"container profile-section\">
                        {{ include('travel_preferences/_form.html.twig') }}
                    </div>
                </div>
                <div class=\"tab-pane\" id=\"tabs-4\" role=\"tabpanel\">
                    <div class=\"container profile-section\">
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
                                <div class=\"col d-flex justify-content-center\">{{ trip.departure }}
                                    ->
                                    {{ trip.arrival }}</div>
                                <div class=\"col d-flex justify-content-center\">{{ trip.dateOfTrip|date(\"d M\") }}</div>
                                {% if trip.tripStarted != true and trip.tripCompleted != true %}
                                    <div class=\"col d-flex flex-column align-items-center\">
                                        <a href=\"{{ path ('trip_start', {'id': trip.id}) }}\" onclick=\"return prompt('Voulez vous commencer le trajet ? Taper \\'Oui\\' pour commencer') == 'Oui'\" href=\"\" class=\"btn btn-primary\">Commencer</a>
                                    </div>
                                {% elseif trip.tripCompleted == true %}
                                    <div class=\"col d-flex flex-column align-items-center\">
                                        <a class=\"btn btn-success\">Trajet terminé</a>
                                    </div>
                                {% else %}
                                    <div class=\"col d-flex flex-column align-items-center\">
                                        <div class=\"row d-flex \">Trajet en cours</div>
                                        <a href=\"{{ path ('trip_finish', {'id': trip.id}) }}\" class=\"btn btn-info\">Terminer le trajet</a>
                                    </div>
                                {% endif %}
                                <div class=\"col d-flex  justify-content-center align-items-center\">
                                    <a href=\"{{ path ('trip_details', {'id': trip.id}) }}\" class=\"btn btn-rich-black\">
                                        <i class=\"far fa-eye\"></i>
                                    </a>
                                </div>
                            </div>
                        {% endfor %}

                    </div>
                </div>
                <div class=\"tab-pane\" id=\"tabs-6\" role=\"tabpanel\">
                    <div class=\"container profile-section\">
                        <h3>Mon compte</h3>
                        <div class=\"col-xs-12 col-sm-6 col-md-6 col-md-offset-4\">
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

    {% endblock %}
", "user/edit.html.twig", "/shared/httpd/Projet-Final/templates/user/edit.html.twig");
    }
}

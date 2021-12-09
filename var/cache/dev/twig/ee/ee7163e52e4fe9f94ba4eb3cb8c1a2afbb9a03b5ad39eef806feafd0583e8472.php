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
        echo "<div class=\"container-profile\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-12 mt-4\">
                <h1 class=\"mx-auto text-center\">TEST DE SECTION DE PRESENTATION</h1>
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
                                <p>A propos</p>
                        </div>
                    </a>
                </li>
                <li class=\"nav-item-test\">
                    <a class=\"tab-custom-test \" data-toggle=\"tab\" href=\"#tabs-2\" role=\"tab\">
                        <div class=\"d-flex flex-column justify-content-center align-items-center\">
                            <i class=\"fas fa-info d-flex align-items-center\"></i> 
                            <p>Information Personnel</p>
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
                            <p>Véhicule Personnel</p>
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
        // line 69
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 69, $this->source); })()), "flashes", [0 => "success"], "method", false, false, false, 69));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 70
            echo "                <div class=\"alert alert-success text-white\">
                    ";
            // line 71
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 74
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 74, $this->source); })()), "flashes", [0 => "error"], "method", false, false, false, 74));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 75
            echo "                <div class=\"alert alert-error text-white\">
                    ";
            // line 76
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 79
        echo "            <div class=\"tab-content\">
                <div class=\"tab-pane active section-padding\" id=\"tabs-1\" role=\"tabpanel\">
                    <div class=\"mx-auto form-info\">
                        <div class=\"main-info-profile\">
                            <div class=\"row\">
                                <div class=\"col-xs-12 col-sm-4 col-md-4 d-flex flex-column align-items-center justify-content-center\">
                                    <p class=\"\">";
        // line 85
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 85, $this->source); })()), "firstName", [], "any", false, false, false, 85), "html", null, true);
        echo "</p>
                                    <p class=\"experience-profile\">";
        // line 86
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 86, $this->source); })()), "userExperience", [], "any", false, false, false, 86), "experienceLevel", [], "any", false, false, false, 86), "html", null, true);
        echo "</p>
                                    <p class=\"experience-profile d-flex flex-column align-items-center justify-content-center\">
                                        Trajets effectué</p>
                                    <p class=\"experience-profile d-flex flex-column align-items-center justify-content-center\">
                                        <strong>";
        // line 90
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 90, $this->source); })()), "tripsMade", [], "any", false, false, false, 90), "html", null, true);
        echo "</strong>
                                    </p>
                                </div>
                                <div class=\"col-xs-12 col-sm-4 col-md-4\"></div>
                                <div class=\"col-xs-12 col-sm-4 col-md-4\">
                                    ";
        // line 95
        if ((0 !== twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 95, $this->source); })()), "profile_picture", [], "any", false, false, false, 95), ""))) {
            // line 96
            echo "                                        <div class=\"existing-file\">
                                            <a href=\"";
            // line 97
            echo twig_escape_filter($this->env, ($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/assets/uploads/profilePicture/") . twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 97, $this->source); })()), "profile_picture", [], "any", false, false, false, 97)), "html", null, true);
            echo "\" target=\"_blank\"><img class=\"profile-picture-profile\" src=\"";
            echo twig_escape_filter($this->env, ($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/assets/uploads/profilePicture/") . twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 97, $this->source); })()), "profile_picture", [], "any", false, false, false, 97)), "html", null, true);
            echo "\"/></a>
                                        </div>
                                    ";
        } else {
            // line 100
            echo "                                        <div class=\"existing-file\">
                                            <a href=\"";
            // line 101
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/assets/uploads/profilePicture/default_profile_picture.jpg"), "html", null, true);
            echo "\" target=\"_blank\"><img class=\"profile-picture-profile\" src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/assets/uploads/profilePicture/default_profile_picture.jpg"), "html", null, true);
            echo "\"/></a>
                                        </div>
                                    ";
        }
        // line 104
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
                                <div class=\"content\">
                                    <div class=\"preference-profile-container col-xs-12 col-sm-10 col-md-9\">
                                        <h6>
                                            Discussion :
                                        </h6>
                                        <p class=\"form-control\">";
        // line 128
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 128, $this->source); })()), "travelPreferences", [], "any", false, false, false, 128), "discussion", [], "any", false, false, false, 128), "html", null, true);
        echo "</p>
                                        <h6>
                                            Fumeur :
                                        </h6>
                                        <p class=\"form-control\">";
        // line 132
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 132, $this->source); })()), "travelPreferences", [], "any", false, false, false, 132), "smoking", [], "any", false, false, false, 132), "html", null, true);
        echo "</p>
                                        <h6>
                                            Musique :
                                        </h6>
                                        <p class=\"form-control\">";
        // line 136
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 136, $this->source); })()), "travelPreferences", [], "any", false, false, false, 136), "music", [], "any", false, false, false, 136), "html", null, true);
        echo "</p>
                                        <h6>
                                            Animaux :
                                        </h6>
                                        <p class=\"form-control\">";
        // line 140
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 140, $this->source); })()), "travelPreferences", [], "any", false, false, false, 140), "animals", [], "any", false, false, false, 140), "html", null, true);
        echo "</p>
                                        <h6>
                                            Pass Sanitaire :
                                        </h6>
                                        <p class=\"form-control\">";
        // line 144
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 144, $this->source); })()), "travelPreferences", [], "any", false, false, false, 144), "healthPass", [], "any", false, false, false, 144), "html", null, true);
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
        // line 163
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 163, $this->source); })()), "vehicule", [], "any", false, false, false, 163), "brand", [], "any", false, false, false, 163), "html", null, true);
        echo "</p>
                                            <p class=\"vehicule-profile\">Modèle :
                                                ";
        // line 165
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 165, $this->source); })()), "vehicule", [], "any", false, false, false, 165), "model", [], "any", false, false, false, 165), "html", null, true);
        echo "</p>
                                            <p class=\"vehicule-profile\">Couleur :
                                                ";
        // line 167
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 167, $this->source); })()), "vehicule", [], "any", false, false, false, 167), "color", [], "any", false, false, false, 167), "html", null, true);
        echo "</p>
                                        </div>
                                        <div class=\"col-xs-12 col-sm-6 col-md-6\">
                                            <a class=\"d-flex justify-content-center\" href=\"";
        // line 170
        echo twig_escape_filter($this->env, ($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/assets/uploads/vehiculePicture/") . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 170, $this->source); })()), "vehicule", [], "any", false, false, false, 170), "vehiculePicture", [], "any", false, false, false, 170)), "html", null, true);
        echo "\" target=\"_blank\"><img class=\"profile-picture-profile\" src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("/assets/uploads/vehiculePicture/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 170, $this->source); })()), "vehicule", [], "any", false, false, false, 170), "vehiculePicture", [], "any", false, false, false, 170))), "html", null, true);
        echo "\"/></a>
                                        </div>
                                    </div>
                                </div>
                            </label>
                            <div class=\"row justify-content-around mt-4\">
                                <div class=\"col-6\">
                                    <div class=\"card-profile\"> 
                                        <a href=\"";
        // line 178
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("message_discussion", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 178, $this->source); })()), "user", [], "any", false, false, false, 178), "id", [], "any", false, false, false, 178)]), "html", null, true);
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
        // line 188
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("review_show", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 188, $this->source); })()), "user", [], "any", false, false, false, 188), "id", [], "any", false, false, false, 188)]), "html", null, true);
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
        // line 201
        echo twig_include($this->env, $context, "user/_form.html.twig");
        echo "
                        </div>
                    </div>
                    <div class=\"tab-pane\" id=\"tabs-3\" role=\"tabpanel\">
                        ";
        // line 205
        echo twig_include($this->env, $context, "travel_preferences/_form.html.twig");
        echo "
                    </div>
                    <div class=\"tab-pane\" id=\"tabs-4\" role=\"tabpanel\">
                        ";
        // line 208
        echo twig_include($this->env, $context, "vehicule/_form.html.twig");
        echo "
                    </div>
                    <div class=\"tab-pane\" id=\"tabs-5\" role=\"tabpanel\">
                        <div class=\"profile-section section-padding\">
                        <div class=\"row justify-content-center \">
                            <div class=\" form-info\">
                                <h3 class=\"col d-flex justify-content-center\">Historique de mes trajets</h3>
                                <div class=\"row justify-content-around\">
                                    ";
        // line 216
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["trips"]) || array_key_exists("trips", $context) ? $context["trips"] : (function () { throw new RuntimeError('Variable "trips" does not exist.', 216, $this->source); })()));
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
            // line 217
            echo "                                        ";
            if ((-1 === twig_compare(twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 217), 3))) {
                // line 218
                echo "                                            <div class=\"col-12 col-sm-4 my-2\">
                                                <div class=\"card-profile-last-trip\"> 
                                                    <div class=\"card-profile-content\">
                                                        <div class=\"col trip-profile-card\">
                                                            <div class=\"col d-flex justify-content-center\">
                                                            <p>";
                // line 223
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["trip"], "departure", [], "any", false, false, false, 223), "html", null, true);
                echo " -> ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["trip"], "arrival", [], "any", false, false, false, 223), "html", null, true);
                echo "</p>
                                                            </div>
                                                            <div class=\"col d-flex justify-content-center my-2\"><p>";
                // line 225
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["trip"], "dateOfTrip", [], "any", false, false, false, 225), "d M"), "html", null, true);
                echo "</p></div>
                                                            <div class=\"col d-flex  justify-content-center align-items-center my-2\">
                                                                <a href=\"";
                // line 227
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("trip_details", ["id" => twig_get_attribute($this->env, $this->source, $context["trip"], "id", [], "any", false, false, false, 227)]), "html", null, true);
                echo "\" class=\"btn\">
                                                                    <i class=\"far fa-eye\"></i>
                                                                </a>
                                                            </div>
                                                            ";
                // line 231
                if (((0 !== twig_compare(twig_get_attribute($this->env, $this->source, $context["trip"], "tripStarted", [], "any", false, false, false, 231), true)) && (0 !== twig_compare(twig_get_attribute($this->env, $this->source, $context["trip"], "tripCompleted", [], "any", false, false, false, 231), true)))) {
                    // line 232
                    echo "                                                                <div class=\"col d-flex flex-column align-items-center\">
                                                                    <a href=\"";
                    // line 233
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("trip_start", ["id" => twig_get_attribute($this->env, $this->source, $context["trip"], "id", [], "any", false, false, false, 233)]), "html", null, true);
                    echo "\" onclick=\"return prompt('Voulez vous commencer le trajet ? Taper \\'Oui\\' pour commencer') == 'Oui'\" href=\"\" class=\"trip-start-button\">Commencer</a>
                                                                </div>
                                                            ";
                } elseif ((0 === twig_compare(twig_get_attribute($this->env, $this->source,                 // line 235
$context["trip"], "tripCompleted", [], "any", false, false, false, 235), true))) {
                    // line 236
                    echo "                                                                <div class=\"col d-flex flex-column align-items-center\">
                                                                    <a class=\"trip-finish-button\">Trajet terminé</a>
                                                                </div>
                                                            ";
                } else {
                    // line 240
                    echo "                                                                <div class=\"col d-flex flex-column align-items-center\">
                                                                    <div class=\"row d-flex \">Trajet en cours</div>
                                                                    <a href=\"";
                    // line 242
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("trip_finish", ["id" => twig_get_attribute($this->env, $this->source, $context["trip"], "id", [], "any", false, false, false, 242)]), "html", null, true);
                    echo "\" class=\"btn btn-info\">Terminer le trajet</a>
                                                                </div>
                                                            ";
                }
                // line 245
                echo "                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        ";
            }
            // line 250
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
        // line 251
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
        // line 271
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["trips"]) || array_key_exists("trips", $context) ? $context["trips"] : (function () { throw new RuntimeError('Variable "trips" does not exist.', 271, $this->source); })()));
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
            // line 272
            echo "                                    ";
            if ((1 === twig_compare(twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 272), 2))) {
                // line 273
                echo "                                        <div class=\"row mt-4 line-trip-profile\">
                                            <div class=\"col d-flex justify-content-center\">";
                // line 274
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["trip"], "departure", [], "any", false, false, false, 274), "html", null, true);
                echo "
                                                ->
                                                ";
                // line 276
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["trip"], "arrival", [], "any", false, false, false, 276), "html", null, true);
                echo "</div>
                                            <div class=\"col d-flex justify-content-center\">";
                // line 277
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["trip"], "dateOfTrip", [], "any", false, false, false, 277), "d M"), "html", null, true);
                echo "</div>
                                            ";
                // line 278
                if (((0 !== twig_compare(twig_get_attribute($this->env, $this->source, $context["trip"], "tripStarted", [], "any", false, false, false, 278), true)) && (0 !== twig_compare(twig_get_attribute($this->env, $this->source, $context["trip"], "tripCompleted", [], "any", false, false, false, 278), true)))) {
                    // line 279
                    echo "                                                <div class=\"col d-flex flex-column align-items-center\">
                                                    <a href=\"";
                    // line 280
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("trip_start", ["id" => twig_get_attribute($this->env, $this->source, $context["trip"], "id", [], "any", false, false, false, 280)]), "html", null, true);
                    echo "\" onclick=\"return prompt('Voulez vous commencer le trajet ? Taper \\'Oui\\' pour commencer') == 'Oui'\" href=\"\" class=\"trip-start-button\">Commencer</a>
                                                </div>
                                            ";
                } elseif ((0 === twig_compare(twig_get_attribute($this->env, $this->source,                 // line 282
$context["trip"], "tripCompleted", [], "any", false, false, false, 282), true))) {
                    // line 283
                    echo "                                                <div class=\"col d-flex flex-column align-items-center\">
                                                    <a class=\"trip-finish-button\">Trajet terminé</a>
                                                </div>
                                            ";
                } else {
                    // line 287
                    echo "                                                <div class=\"col d-flex flex-column align-items-center\">
                                                    <div class=\"row d-flex \">Trajet en cours</div>
                                                    <a href=\"";
                    // line 289
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("trip_finish", ["id" => twig_get_attribute($this->env, $this->source, $context["trip"], "id", [], "any", false, false, false, 289)]), "html", null, true);
                    echo "\" class=\"btn btn-info\">Terminer le trajet</a>
                                                </div>
                                            ";
                }
                // line 292
                echo "                                            <div class=\"col d-flex  justify-content-center align-items-center\">
                                                <a href=\"";
                // line 293
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("trip_details", ["id" => twig_get_attribute($this->env, $this->source, $context["trip"], "id", [], "any", false, false, false, 293)]), "html", null, true);
                echo "\" class=\"btn\">
                                                    <i class=\"far fa-eye\"></i>
                                                </a>
                                            </div>
                                        </div>
                                        ";
            }
            // line 299
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
        // line 300
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
        // line 313
        echo twig_include($this->env, $context, "user/_form-reset.html.twig");
        echo "
                                        <a href=\"";
        // line 314
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("logout");
        echo "\" class=\"btn btn-danger mb-4\">
                                            <i class=\"fas fa-sign-out-alt\"></i>
                                            Me déconnecter</a>
                                        ";
        // line 317
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
        return array (  627 => 317,  621 => 314,  617 => 313,  602 => 300,  588 => 299,  579 => 293,  576 => 292,  570 => 289,  566 => 287,  560 => 283,  558 => 282,  553 => 280,  550 => 279,  548 => 278,  544 => 277,  540 => 276,  535 => 274,  532 => 273,  529 => 272,  512 => 271,  490 => 251,  476 => 250,  469 => 245,  463 => 242,  459 => 240,  453 => 236,  451 => 235,  446 => 233,  443 => 232,  441 => 231,  434 => 227,  429 => 225,  422 => 223,  415 => 218,  412 => 217,  395 => 216,  384 => 208,  378 => 205,  371 => 201,  355 => 188,  342 => 178,  329 => 170,  323 => 167,  318 => 165,  313 => 163,  291 => 144,  284 => 140,  277 => 136,  270 => 132,  263 => 128,  237 => 104,  229 => 101,  226 => 100,  218 => 97,  215 => 96,  213 => 95,  205 => 90,  198 => 86,  194 => 85,  186 => 79,  177 => 76,  174 => 75,  169 => 74,  160 => 71,  157 => 70,  153 => 69,  89 => 7,  79 => 6,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Edit User
{% endblock %}

{% block body %}
<div class=\"container-profile\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-12 mt-4\">
                <h1 class=\"mx-auto text-center\">TEST DE SECTION DE PRESENTATION</h1>
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
                                <p>A propos</p>
                        </div>
                    </a>
                </li>
                <li class=\"nav-item-test\">
                    <a class=\"tab-custom-test \" data-toggle=\"tab\" href=\"#tabs-2\" role=\"tab\">
                        <div class=\"d-flex flex-column justify-content-center align-items-center\">
                            <i class=\"fas fa-info d-flex align-items-center\"></i> 
                            <p>Information Personnel</p>
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
                            <p>Véhicule Personnel</p>
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
                            <div class=\"row justify-content-around mt-4\">
                                <div class=\"col-6\">
                                    <div class=\"card-profile\"> 
                                        <a href=\"{{ path ('message_discussion', {'id': app.user.id})}}\">
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

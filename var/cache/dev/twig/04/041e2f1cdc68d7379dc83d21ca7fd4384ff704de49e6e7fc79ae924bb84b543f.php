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

/* trip/details.html.twig */
class __TwigTemplate_585911d82a50853ce1084333d03f95bb5605e2396e4719700e20b548b5d3d31d extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "trip/details.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "trip/details.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "trip/details.html.twig", 1);
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

        echo "Trip";
        
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
        echo "       <div class=\"container mt-5\">
          <h4 class=\"text-center\">Détails du voyage</h4>
            <div class=\"card-custom-detail mt-5\">
              <div class=\"plan-detail\">
              <div class=\"d-flex justify-content-between mb-2\">
                <h3>";
        // line 22
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["trip"]) || array_key_exists("trip", $context) ? $context["trip"] : (function () { throw new RuntimeError('Variable "trip" does not exist.', 22, $this->source); })()), "dateOfTrip", [], "any", false, false, false, 22), "d M"), "html", null, true);
        echo "</h3>
                ";
        // line 23
        if (((0 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["trip"]) || array_key_exists("trip", $context) ? $context["trip"] : (function () { throw new RuntimeError('Variable "trip" does not exist.', 23, $this->source); })()), "tripFull", [], "any", false, false, false, 23), true)) && (0 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["trip"]) || array_key_exists("trip", $context) ? $context["trip"] : (function () { throw new RuntimeError('Variable "trip" does not exist.', 23, $this->source); })()), "tripStarted", [], "any", false, false, false, 23), false)))) {
            // line 24
            echo "                    <h3>Complet</h3>
                ";
        } elseif (((0 === twig_compare(twig_get_attribute($this->env, $this->source,         // line 25
(isset($context["trip"]) || array_key_exists("trip", $context) ? $context["trip"] : (function () { throw new RuntimeError('Variable "trip" does not exist.', 25, $this->source); })()), "tripStarted", [], "any", false, false, false, 25), true)) && (0 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["trip"]) || array_key_exists("trip", $context) ? $context["trip"] : (function () { throw new RuntimeError('Variable "trip" does not exist.', 25, $this->source); })()), "tripCompleted", [], "any", false, false, false, 25), false)))) {
            // line 26
            echo "                    <h3> Le trajet a commencer</h3>
                ";
        } elseif (((0 === twig_compare(twig_get_attribute($this->env, $this->source,         // line 27
(isset($context["trip"]) || array_key_exists("trip", $context) ? $context["trip"] : (function () { throw new RuntimeError('Variable "trip" does not exist.', 27, $this->source); })()), "tripStarted", [], "any", false, false, false, 27), true)) && (0 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["trip"]) || array_key_exists("trip", $context) ? $context["trip"] : (function () { throw new RuntimeError('Variable "trip" does not exist.', 27, $this->source); })()), "tripCompleted", [], "any", false, false, false, 27), true)))) {
            // line 28
            echo "                    <h3> Trajet terminé </h3>
                ";
        } else {
            // line 30
            echo "                ";
        }
        // line 31
        echo "              </div>
                <div class=\"timeline-detail\">

                    <div class=\"d-flex justify-content-end\"><p>";
        // line 34
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["trip"]) || array_key_exists("trip", $context) ? $context["trip"] : (function () { throw new RuntimeError('Variable "trip" does not exist.', 34, $this->source); })()), "duration", [], "any", false, false, false, 34), "html", null, true);
        echo "</p></div>
                    <div class=\"row\">
                          <div class=\"col-3 d-flex align-items-end flex-column justify-content-around p-3\">
                              <p><strong>";
        // line 37
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["trip"]) || array_key_exists("trip", $context) ? $context["trip"] : (function () { throw new RuntimeError('Variable "trip" does not exist.', 37, $this->source); })()), "startTime", [], "any", false, false, false, 37), "H:i"), "html", null, true);
        echo "</strong></p>
                              <p class=\"d-flex justify-content-center font-control\">";
        // line 38
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["trip"]) || array_key_exists("trip", $context) ? $context["trip"] : (function () { throw new RuntimeError('Variable "trip" does not exist.', 38, $this->source); })()), "distance", [], "any", false, false, false, 38), "html", null, true);
        echo " </p>
                              ";
        // line 39
        $context["hour"] = twig_replace_filter(twig_get_attribute($this->env, $this->source, (isset($context["trip"]) || array_key_exists("trip", $context) ? $context["trip"] : (function () { throw new RuntimeError('Variable "trip" does not exist.', 39, $this->source); })()), "duration", [], "any", false, false, false, 39), ["heure" => "hour"]);
        // line 40
        echo "                              <p class=\"pt-3\"><strong>";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_date_modify_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["trip"]) || array_key_exists("trip", $context) ? $context["trip"] : (function () { throw new RuntimeError('Variable "trip" does not exist.', 40, $this->source); })()), "startTime", [], "any", false, false, false, 40), ("+" . (isset($context["hour"]) || array_key_exists("hour", $context) ? $context["hour"] : (function () { throw new RuntimeError('Variable "hour" does not exist.', 40, $this->source); })()))), "H:i"), "html", null, true);
        echo "</strong></p>
                          </div>
                          <div class=\"col-9\">
                              <div class=\"line-detail\">
                                  <div class=\"line-content\">
                                      <div class=\"content\">
                                          <h1>";
        // line 46
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["trip"]) || array_key_exists("trip", $context) ? $context["trip"] : (function () { throw new RuntimeError('Variable "trip" does not exist.', 46, $this->source); })()), "departure", [], "any", false, false, false, 46), "html", null, true);
        echo "</h1>
                                      </div>
                                      <div class=\"content\">
                                          <h1> ";
        // line 49
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["trip"]) || array_key_exists("trip", $context) ? $context["trip"] : (function () { throw new RuntimeError('Variable "trip" does not exist.', 49, $this->source); })()), "arrival", [], "any", false, false, false, 49), "html", null, true);
        echo "</h1>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                  <span class=\"custom-separator\"></span>
                  </div>
                  <div class=\"row card-detail-profile\">
                    <a href=\"";
        // line 58
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_view_profile", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["trip"]) || array_key_exists("trip", $context) ? $context["trip"] : (function () { throw new RuntimeError('Variable "trip" does not exist.', 58, $this->source); })()), "driver", [], "any", false, false, false, 58), "id", [], "any", false, false, false, 58)]), "html", null, true);
        echo "\">
                    <div class=\"row\">
                      <div class=\"col\">
                        <img class=\"img-card\"src=\"";
        // line 61
        echo twig_escape_filter($this->env, ($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/uploads/profilePicture/") . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["trip"]) || array_key_exists("trip", $context) ? $context["trip"] : (function () { throw new RuntimeError('Variable "trip" does not exist.', 61, $this->source); })()), "driver", [], "any", false, false, false, 61), "profile_picture", [], "any", false, false, false, 61)), "html", null, true);
        echo "\"/>
                      </div>
                        <div class=\"col d-flex  flex-column justify-content-center\">
                          <p class=\"font-control\">";
        // line 64
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["trip"]) || array_key_exists("trip", $context) ? $context["trip"] : (function () { throw new RuntimeError('Variable "trip" does not exist.', 64, $this->source); })()), "driver", [], "any", false, false, false, 64), "firstName", [], "any", false, false, false, 64), "html", null, true);
        echo "</p>
                          ";
        // line 65
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["trip"]) || array_key_exists("trip", $context) ? $context["trip"] : (function () { throw new RuntimeError('Variable "trip" does not exist.', 65, $this->source); })()), "driver", [], "any", false, false, false, 65), "globalRating", [], "any", false, false, false, 65)) {
            // line 66
            echo "                              <p class=\"font-control\"><i class=\"fas fa-star\"></i>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["trip"]) || array_key_exists("trip", $context) ? $context["trip"] : (function () { throw new RuntimeError('Variable "trip" does not exist.', 66, $this->source); })()), "driver", [], "any", false, false, false, 66), "globalRating", [], "any", false, false, false, 66), "html", null, true);
            echo "</p>
                          ";
        } else {
            // line 68
            echo "                              <p class=\"font-control-rating\"><i class=\"fas fa-star\"></i> Premier trajet</p>
                          ";
        }
        // line 70
        echo "                      </div>
                      <div class=\"col d-flex justify-content-end align-items-center font-control fas fa-chevron-right\"></div>
                    </div>
                    </a>
                      <div class=\"row d-flex justify-content-center\">
                          ";
        // line 75
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["trip"]) || array_key_exists("trip", $context) ? $context["trip"] : (function () { throw new RuntimeError('Variable "trip" does not exist.', 75, $this->source); })()), "driver", [], "any", false, false, false, 75), "idCard", [], "any", false, false, false, 75)) {
            // line 76
            echo "                              <p class=\"info-detail\"><i style=\"color:green;\" class=\"far fa-check-circle\"></i> Pièce d'identité vérifiée</p>
                          ";
        }
        // line 78
        echo "                            ";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["trip"]) || array_key_exists("trip", $context) ? $context["trip"] : (function () { throw new RuntimeError('Variable "trip" does not exist.', 78, $this->source); })()), "driver", [], "any", false, false, false, 78), "phone", [], "any", false, false, false, 78)) {
            // line 79
            echo "                              <p class=\"info-detail\"><i style=\"color:green;\" class=\"far fa-check-circle\"></i> Numéro de téléphone</p>
                          ";
        }
        // line 81
        echo "                            ";
        if ((0 !== twig_compare((isset($context["checkBooking"]) || array_key_exists("checkBooking", $context) ? $context["checkBooking"] : (function () { throw new RuntimeError('Variable "checkBooking" does not exist.', 81, $this->source); })()), "my"))) {
            // line 82
            echo "                                <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("message_discussion_details", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["trip"]) || array_key_exists("trip", $context) ? $context["trip"] : (function () { throw new RuntimeError('Variable "trip" does not exist.', 82, $this->source); })()), "driver", [], "any", false, false, false, 82), "id", [], "any", false, false, false, 82)]), "html", null, true);
            echo "\" class=\"contact-button\"><i style=\"color:#82b6e8;\" class=\"far fa-comments\"></i> Contacter ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["trip"]) || array_key_exists("trip", $context) ? $context["trip"] : (function () { throw new RuntimeError('Variable "trip" does not exist.', 82, $this->source); })()), "driver", [], "any", false, false, false, 82), "firstName", [], "any", false, false, false, 82), "html", null, true);
            echo "</a>
                            ";
        }
        // line 84
        echo "                      </div>
                      ";
        // line 85
        if ((((((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["trip"]) || array_key_exists("trip", $context) ? $context["trip"] : (function () { throw new RuntimeError('Variable "trip" does not exist.', 85, $this->source); })()), "driver", [], "any", false, false, false, 85), "travelPreferences", [], "any", false, false, false, 85), "discussion", [], "any", false, false, false, 85), null)) && (0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["trip"]) || array_key_exists("trip", $context) ? $context["trip"] : (function () { throw new RuntimeError('Variable "trip" does not exist.', 85, $this->source); })()), "driver", [], "any", false, false, false, 85), "travelPreferences", [], "any", false, false, false, 85), "music", [], "any", false, false, false, 85), null))) && (0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["trip"]) || array_key_exists("trip", $context) ? $context["trip"] : (function () { throw new RuntimeError('Variable "trip" does not exist.', 85, $this->source); })()), "driver", [], "any", false, false, false, 85), "travelPreferences", [], "any", false, false, false, 85), "smoking", [], "any", false, false, false, 85), null))) && (0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["trip"]) || array_key_exists("trip", $context) ? $context["trip"] : (function () { throw new RuntimeError('Variable "trip" does not exist.', 85, $this->source); })()), "driver", [], "any", false, false, false, 85), "travelPreferences", [], "any", false, false, false, 85), "animals", [], "any", false, false, false, 85), null))) && (0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["trip"]) || array_key_exists("trip", $context) ? $context["trip"] : (function () { throw new RuntimeError('Variable "trip" does not exist.', 85, $this->source); })()), "driver", [], "any", false, false, false, 85), "travelPreferences", [], "any", false, false, false, 85), "healthPass", [], "any", false, false, false, 85), null)))) {
            // line 86
            echo "                      ";
        } else {
            // line 87
            echo "                        <span class=\"custom-separator\"></span>
                        <div class=\"row d-flex justify-content-center\">
                            ";
            // line 89
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["trip"]) || array_key_exists("trip", $context) ? $context["trip"] : (function () { throw new RuntimeError('Variable "trip" does not exist.', 89, $this->source); })()), "driver", [], "any", false, false, false, 89), "travelPreferences", [], "any", false, false, false, 89), "discussion", [], "any", false, false, false, 89)) {
                // line 90
                echo "                                <p class=\"info-detail\"><i class=\"far fa-comments mx-2\"></i>  ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["trip"]) || array_key_exists("trip", $context) ? $context["trip"] : (function () { throw new RuntimeError('Variable "trip" does not exist.', 90, $this->source); })()), "driver", [], "any", false, false, false, 90), "travelPreferences", [], "any", false, false, false, 90), "discussion", [], "any", false, false, false, 90), "html", null, true);
                echo "</p>
                            ";
            }
            // line 92
            echo "                            ";
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["trip"]) || array_key_exists("trip", $context) ? $context["trip"] : (function () { throw new RuntimeError('Variable "trip" does not exist.', 92, $this->source); })()), "driver", [], "any", false, false, false, 92), "travelPreferences", [], "any", false, false, false, 92), "music", [], "any", false, false, false, 92)) {
                // line 93
                echo "                                <p class=\"info-detail\"><i class=\"fas fa-music mx-2\"></i>  ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["trip"]) || array_key_exists("trip", $context) ? $context["trip"] : (function () { throw new RuntimeError('Variable "trip" does not exist.', 93, $this->source); })()), "driver", [], "any", false, false, false, 93), "travelPreferences", [], "any", false, false, false, 93), "music", [], "any", false, false, false, 93), "html", null, true);
                echo "</p>
                            ";
            }
            // line 95
            echo "                            ";
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["trip"]) || array_key_exists("trip", $context) ? $context["trip"] : (function () { throw new RuntimeError('Variable "trip" does not exist.', 95, $this->source); })()), "driver", [], "any", false, false, false, 95), "travelPreferences", [], "any", false, false, false, 95), "smoking", [], "any", false, false, false, 95)) {
                // line 96
                echo "                                <p class=\"info-detail\"><i class=\"fas fa-smoking mx-2\"></i>  ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["trip"]) || array_key_exists("trip", $context) ? $context["trip"] : (function () { throw new RuntimeError('Variable "trip" does not exist.', 96, $this->source); })()), "driver", [], "any", false, false, false, 96), "travelPreferences", [], "any", false, false, false, 96), "smoking", [], "any", false, false, false, 96), "html", null, true);
                echo "</p>
                            ";
            }
            // line 98
            echo "                            ";
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["trip"]) || array_key_exists("trip", $context) ? $context["trip"] : (function () { throw new RuntimeError('Variable "trip" does not exist.', 98, $this->source); })()), "driver", [], "any", false, false, false, 98), "travelPreferences", [], "any", false, false, false, 98), "animals", [], "any", false, false, false, 98)) {
                // line 99
                echo "                                <p class=\"info-detail\"><i class=\"fas fa-paw mx-2\"></i>  ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["trip"]) || array_key_exists("trip", $context) ? $context["trip"] : (function () { throw new RuntimeError('Variable "trip" does not exist.', 99, $this->source); })()), "driver", [], "any", false, false, false, 99), "travelPreferences", [], "any", false, false, false, 99), "animals", [], "any", false, false, false, 99), "html", null, true);
                echo "</p>
                            ";
            }
            // line 101
            echo "                            ";
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["trip"]) || array_key_exists("trip", $context) ? $context["trip"] : (function () { throw new RuntimeError('Variable "trip" does not exist.', 101, $this->source); })()), "driver", [], "any", false, false, false, 101), "travelPreferences", [], "any", false, false, false, 101), "healthPass", [], "any", false, false, false, 101)) {
                // line 102
                echo "                                <p class=\"info-detail\"><i class=\"fas fa-file-medical mx-2\"></i>  ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["trip"]) || array_key_exists("trip", $context) ? $context["trip"] : (function () { throw new RuntimeError('Variable "trip" does not exist.', 102, $this->source); })()), "driver", [], "any", false, false, false, 102), "travelPreferences", [], "any", false, false, false, 102), "healthPass", [], "any", false, false, false, 102), "html", null, true);
                echo "</p>
                            ";
            }
            // line 104
            echo "                           
                        </div>
                        ";
        }
        // line 107
        echo "                        ";
        if ((((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["trip"]) || array_key_exists("trip", $context) ? $context["trip"] : (function () { throw new RuntimeError('Variable "trip" does not exist.', 107, $this->source); })()), "driver", [], "any", false, false, false, 107), "vehicule", [], "any", false, false, false, 107), "brand", [], "any", false, false, false, 107), null)) && (0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["trip"]) || array_key_exists("trip", $context) ? $context["trip"] : (function () { throw new RuntimeError('Variable "trip" does not exist.', 107, $this->source); })()), "driver", [], "any", false, false, false, 107), "vehicule", [], "any", false, false, false, 107), "model", [], "any", false, false, false, 107), null))) && (0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["trip"]) || array_key_exists("trip", $context) ? $context["trip"] : (function () { throw new RuntimeError('Variable "trip" does not exist.', 107, $this->source); })()), "driver", [], "any", false, false, false, 107), "vehicule", [], "any", false, false, false, 107), "vehiculePicture", [], "any", false, false, false, 107), null)))) {
            // line 108
            echo "                        ";
        } else {
            // line 109
            echo "                      <div class=\"row\">
                        <div class=\"card-detail-vehicule\">
                            <div class=\"col d-flex  flex-column justify-content-center align-items-center\">
                                ";
            // line 112
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["trip"]) || array_key_exists("trip", $context) ? $context["trip"] : (function () { throw new RuntimeError('Variable "trip" does not exist.', 112, $this->source); })()), "driver", [], "any", false, false, false, 112), "vehicule", [], "any", false, false, false, 112), "brand", [], "any", false, false, false, 112)) {
                // line 113
                echo "                                    <p class=\"font-control\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["trip"]) || array_key_exists("trip", $context) ? $context["trip"] : (function () { throw new RuntimeError('Variable "trip" does not exist.', 113, $this->source); })()), "driver", [], "any", false, false, false, 113), "vehicule", [], "any", false, false, false, 113), "brand", [], "any", false, false, false, 113), "html", null, true);
                echo " - ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["trip"]) || array_key_exists("trip", $context) ? $context["trip"] : (function () { throw new RuntimeError('Variable "trip" does not exist.', 113, $this->source); })()), "driver", [], "any", false, false, false, 113), "vehicule", [], "any", false, false, false, 113), "model", [], "any", false, false, false, 113), "html", null, true);
                echo " </p>
                                ";
            }
            // line 115
            echo "                            </div>
                            <div class=\"col d-flex  justify-content-end align-items-center\">
                                ";
            // line 117
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["trip"]) || array_key_exists("trip", $context) ? $context["trip"] : (function () { throw new RuntimeError('Variable "trip" does not exist.', 117, $this->source); })()), "driver", [], "any", false, false, false, 117), "vehicule", [], "any", false, false, false, 117), "vehiculePicture", [], "any", false, false, false, 117)) {
                // line 118
                echo "                                    <img class=\"img-card-vehicule\"src=\"";
                echo twig_escape_filter($this->env, ($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/uploads/vehiculePicture/") . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["trip"]) || array_key_exists("trip", $context) ? $context["trip"] : (function () { throw new RuntimeError('Variable "trip" does not exist.', 118, $this->source); })()), "driver", [], "any", false, false, false, 118), "vehicule", [], "any", false, false, false, 118), "vehiculePicture", [], "any", false, false, false, 118)), "html", null, true);
                echo "\"/>
                                ";
            }
            // line 120
            echo "                            </div>
                      </div>
                      ";
        }
        // line 123
        echo "                      <div class=\"col d-flex  justify-content-center\">
                    ";
        // line 124
        if ((0 !== twig_compare((isset($context["checkBooking"]) || array_key_exists("checkBooking", $context) ? $context["checkBooking"] : (function () { throw new RuntimeError('Variable "checkBooking" does not exist.', 124, $this->source); })()), "my"))) {
            // line 125
            echo "                        ";
            if ((0 === twig_compare((isset($context["checkBooking"]) || array_key_exists("checkBooking", $context) ? $context["checkBooking"] : (function () { throw new RuntimeError('Variable "checkBooking" does not exist.', 125, $this->source); })()), null))) {
                // line 126
                echo "                            ";
                if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["trip"]) || array_key_exists("trip", $context) ? $context["trip"] : (function () { throw new RuntimeError('Variable "trip" does not exist.', 126, $this->source); })()), "tripFull", [], "any", false, false, false, 126), true))) {
                    // line 127
                    echo "                                <p class=\"contact-button-cancel\"><i class=\"fas fa-users-slash\"></i> Trajet Complet !</p>
                            ";
                } else {
                    // line 129
                    echo "                                <a href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("booking_new", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["trip"]) || array_key_exists("trip", $context) ? $context["trip"] : (function () { throw new RuntimeError('Variable "trip" does not exist.', 129, $this->source); })()), "id", [], "any", false, false, false, 129)]), "html", null, true);
                    echo "\" type=\"submit\" class=\"contact-button\"><i class=\"fas fa-user-check\"></i> Réserver ce trajet</a>
                            ";
                }
                // line 131
                echo "                        ";
            } else {
                // line 132
                echo "                            ";
                if (((0 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["trip"]) || array_key_exists("trip", $context) ? $context["trip"] : (function () { throw new RuntimeError('Variable "trip" does not exist.', 132, $this->source); })()), "tripStarted", [], "any", false, false, false, 132), true)) && (0 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["trip"]) || array_key_exists("trip", $context) ? $context["trip"] : (function () { throw new RuntimeError('Variable "trip" does not exist.', 132, $this->source); })()), "tripCompleted", [], "any", false, false, false, 132), false)))) {
                    // line 133
                    echo "                                <p class=\"contact-button\"><i class=\"fas fa-car-side\"></i> Trajet en cours</p>
                            ";
                } elseif (((0 === twig_compare(twig_get_attribute($this->env, $this->source,                 // line 134
(isset($context["trip"]) || array_key_exists("trip", $context) ? $context["trip"] : (function () { throw new RuntimeError('Variable "trip" does not exist.', 134, $this->source); })()), "tripStarted", [], "any", false, false, false, 134), true)) && (0 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["trip"]) || array_key_exists("trip", $context) ? $context["trip"] : (function () { throw new RuntimeError('Variable "trip" does not exist.', 134, $this->source); })()), "tripCompleted", [], "any", false, false, false, 134), true)))) {
                    // line 135
                    echo "                                <a class=\"contact-button\"><i class=\"fas fa-check\"></i> Trajet terminé</a>
                            ";
                } else {
                    // line 137
                    echo "                                <a href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("booking_new", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["trip"]) || array_key_exists("trip", $context) ? $context["trip"] : (function () { throw new RuntimeError('Variable "trip" does not exist.', 137, $this->source); })()), "id", [], "any", false, false, false, 137)]), "html", null, true);
                    echo "\" type=\"submit\" class=\"contact-button-cancel\"><i class=\"far fa-times-circle\"></i> Annuler ma réservation</a>
                            ";
                }
                // line 139
                echo "                        ";
            }
            // line 140
            echo "                    ";
        }
        // line 141
        echo "                      </div>
                  </div>
                ";
        // line 143
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["bookers"] ?? null), 0, [], "array", false, true, false, 143), "user", [], "any", true, true, false, 143)) {
            // line 144
            echo "                  <span class=\"custom-separator\"></span>
                    <div class=\"passenger-booker\">
                        <h4 class=\"text-center mt-3 mb-3\">Déjà à bord </h4>
                        ";
            // line 147
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["bookers"]) || array_key_exists("bookers", $context) ? $context["bookers"] : (function () { throw new RuntimeError('Variable "bookers" does not exist.', 147, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["booker"]) {
                // line 148
                echo "                        <div class=\"row card-detail-profile\">
                        <a class=\"d-flex\" href=\"";
                // line 149
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_view_profile", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["booker"], "user", [], "any", false, false, false, 149), "id", [], "any", false, false, false, 149)]), "html", null, true);
                echo "\" >
                                <div class=\"col d-flex  flex-column justify-content-center\">
                                <p class=\"font-control\"> ";
                // line 151
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["booker"], "user", [], "any", false, false, false, 151), "firstName", [], "any", false, false, false, 151), "html", null, true);
                echo "</p>
                            </div>
                            <div class=\"col d-flex justify-content-center align-items-center\">
                                <img class=\"img-card-passenger\"src=\"";
                // line 154
                echo twig_escape_filter($this->env, ($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/uploads/profilePicture/") . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["booker"], "user", [], "any", false, false, false, 154), "profile_picture", [], "any", false, false, false, 154)), "html", null, true);
                echo "\"/>
                            </div>
                            <div class=\"col d-flex justify-content-end align-items-center font-control fas fa-chevron-right\"></div>
                        </a>
                            </div>
                        
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['booker'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 161
            echo "                    </div>
                ";
        }
        // line 163
        echo "              </div>
          </div>
        </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "trip/details.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  455 => 163,  451 => 161,  438 => 154,  432 => 151,  427 => 149,  424 => 148,  420 => 147,  415 => 144,  413 => 143,  409 => 141,  406 => 140,  403 => 139,  397 => 137,  393 => 135,  391 => 134,  388 => 133,  385 => 132,  382 => 131,  376 => 129,  372 => 127,  369 => 126,  366 => 125,  364 => 124,  361 => 123,  356 => 120,  350 => 118,  348 => 117,  344 => 115,  336 => 113,  334 => 112,  329 => 109,  326 => 108,  323 => 107,  318 => 104,  312 => 102,  309 => 101,  303 => 99,  300 => 98,  294 => 96,  291 => 95,  285 => 93,  282 => 92,  276 => 90,  274 => 89,  270 => 87,  267 => 86,  265 => 85,  262 => 84,  254 => 82,  251 => 81,  247 => 79,  244 => 78,  240 => 76,  238 => 75,  231 => 70,  227 => 68,  221 => 66,  219 => 65,  215 => 64,  209 => 61,  203 => 58,  191 => 49,  185 => 46,  175 => 40,  173 => 39,  169 => 38,  165 => 37,  159 => 34,  154 => 31,  151 => 30,  147 => 28,  145 => 27,  142 => 26,  140 => 25,  137 => 24,  135 => 23,  131 => 22,  124 => 17,  115 => 14,  112 => 13,  107 => 12,  98 => 9,  95 => 8,  91 => 7,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Trip{% endblock %}

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
       <div class=\"container mt-5\">
          <h4 class=\"text-center\">Détails du voyage</h4>
            <div class=\"card-custom-detail mt-5\">
              <div class=\"plan-detail\">
              <div class=\"d-flex justify-content-between mb-2\">
                <h3>{{trip.dateOfTrip|date(\"d M\")}}</h3>
                {% if trip.tripFull == true and trip.tripStarted == false %}
                    <h3>Complet</h3>
                {% elseif trip.tripStarted == true and trip.tripCompleted == false %}
                    <h3> Le trajet a commencer</h3>
                {% elseif trip.tripStarted == true and trip.tripCompleted == true %}
                    <h3> Trajet terminé </h3>
                {% else %}
                {% endif %}
              </div>
                <div class=\"timeline-detail\">

                    <div class=\"d-flex justify-content-end\"><p>{{trip.duration}}</p></div>
                    <div class=\"row\">
                          <div class=\"col-3 d-flex align-items-end flex-column justify-content-around p-3\">
                              <p><strong>{{trip.startTime|date('H:i')}}</strong></p>
                              <p class=\"d-flex justify-content-center font-control\">{{trip.distance}} </p>
                              {% set hour = trip.duration|replace({'heure':'hour'})%}
                              <p class=\"pt-3\"><strong>{{ trip.startTime|date_modify(\"+\" ~ hour)|date('H:i') }}</strong></p>
                          </div>
                          <div class=\"col-9\">
                              <div class=\"line-detail\">
                                  <div class=\"line-content\">
                                      <div class=\"content\">
                                          <h1>{{trip.departure}}</h1>
                                      </div>
                                      <div class=\"content\">
                                          <h1> {{trip.arrival}}</h1>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                  <span class=\"custom-separator\"></span>
                  </div>
                  <div class=\"row card-detail-profile\">
                    <a href=\"{{path('user_view_profile', {'id': trip.driver.id})}}\">
                    <div class=\"row\">
                      <div class=\"col\">
                        <img class=\"img-card\"src=\"{{asset('assets/uploads/profilePicture/') ~ trip.driver.profile_picture}}\"/>
                      </div>
                        <div class=\"col d-flex  flex-column justify-content-center\">
                          <p class=\"font-control\">{{trip.driver.firstName}}</p>
                          {% if trip.driver.globalRating %}
                              <p class=\"font-control\"><i class=\"fas fa-star\"></i>{{trip.driver.globalRating}}</p>
                          {% else %}
                              <p class=\"font-control-rating\"><i class=\"fas fa-star\"></i> Premier trajet</p>
                          {% endif %}
                      </div>
                      <div class=\"col d-flex justify-content-end align-items-center font-control fas fa-chevron-right\"></div>
                    </div>
                    </a>
                      <div class=\"row d-flex justify-content-center\">
                          {% if trip.driver.idCard %}
                              <p class=\"info-detail\"><i style=\"color:green;\" class=\"far fa-check-circle\"></i> Pièce d'identité vérifiée</p>
                          {% endif %}
                            {% if trip.driver.phone %}
                              <p class=\"info-detail\"><i style=\"color:green;\" class=\"far fa-check-circle\"></i> Numéro de téléphone</p>
                          {% endif %}
                            {% if checkBooking != \"my\" %}
                                <a href=\"{{path('message_discussion_details', {'id': trip.driver.id})}}\" class=\"contact-button\"><i style=\"color:#82b6e8;\" class=\"far fa-comments\"></i> Contacter {{trip.driver.firstName}}</a>
                            {% endif %}
                      </div>
                      {% if trip.driver.travelPreferences.discussion == null and trip.driver.travelPreferences.music == null and trip.driver.travelPreferences.smoking == null and trip.driver.travelPreferences.animals == null and trip.driver.travelPreferences.healthPass == null %}
                      {% else %}
                        <span class=\"custom-separator\"></span>
                        <div class=\"row d-flex justify-content-center\">
                            {% if trip.driver.travelPreferences.discussion %}
                                <p class=\"info-detail\"><i class=\"far fa-comments mx-2\"></i>  {{trip.driver.travelPreferences.discussion}}</p>
                            {% endif %}
                            {% if trip.driver.travelPreferences.music %}
                                <p class=\"info-detail\"><i class=\"fas fa-music mx-2\"></i>  {{trip.driver.travelPreferences.music}}</p>
                            {% endif %}
                            {% if trip.driver.travelPreferences.smoking %}
                                <p class=\"info-detail\"><i class=\"fas fa-smoking mx-2\"></i>  {{trip.driver.travelPreferences.smoking}}</p>
                            {% endif %}
                            {% if trip.driver.travelPreferences.animals %}
                                <p class=\"info-detail\"><i class=\"fas fa-paw mx-2\"></i>  {{trip.driver.travelPreferences.animals}}</p>
                            {% endif %}
                            {% if trip.driver.travelPreferences.healthPass %}
                                <p class=\"info-detail\"><i class=\"fas fa-file-medical mx-2\"></i>  {{trip.driver.travelPreferences.healthPass}}</p>
                            {% endif %}
                           
                        </div>
                        {% endif %}
                        {% if trip.driver.vehicule.brand == null and trip.driver.vehicule.model == null and trip.driver.vehicule.vehiculePicture == null %}
                        {% else %}
                      <div class=\"row\">
                        <div class=\"card-detail-vehicule\">
                            <div class=\"col d-flex  flex-column justify-content-center align-items-center\">
                                {% if trip.driver.vehicule.brand %}
                                    <p class=\"font-control\">{{trip.driver.vehicule.brand}} - {{trip.driver.vehicule.model}} </p>
                                {% endif %}
                            </div>
                            <div class=\"col d-flex  justify-content-end align-items-center\">
                                {% if trip.driver.vehicule.vehiculePicture %}
                                    <img class=\"img-card-vehicule\"src=\"{{asset('assets/uploads/vehiculePicture/') ~ trip.driver.vehicule.vehiculePicture}}\"/>
                                {% endif %}
                            </div>
                      </div>
                      {% endif %}
                      <div class=\"col d-flex  justify-content-center\">
                    {% if checkBooking != \"my\" %}
                        {% if checkBooking == null %}
                            {% if trip.tripFull == true %}
                                <p class=\"contact-button-cancel\"><i class=\"fas fa-users-slash\"></i> Trajet Complet !</p>
                            {% else %}
                                <a href=\"{{ path ('booking_new', {'id': trip.id})}}\" type=\"submit\" class=\"contact-button\"><i class=\"fas fa-user-check\"></i> Réserver ce trajet</a>
                            {% endif %}
                        {% else %}
                            {% if trip.tripStarted == true and trip.tripCompleted == false %}
                                <p class=\"contact-button\"><i class=\"fas fa-car-side\"></i> Trajet en cours</p>
                            {% elseif trip.tripStarted == true and trip.tripCompleted == true %}
                                <a class=\"contact-button\"><i class=\"fas fa-check\"></i> Trajet terminé</a>
                            {% else %}
                                <a href=\"{{ path ('booking_new', {'id': trip.id})}}\" type=\"submit\" class=\"contact-button-cancel\"><i class=\"far fa-times-circle\"></i> Annuler ma réservation</a>
                            {% endif %}
                        {% endif %}
                    {% endif %}
                      </div>
                  </div>
                {% if bookers[0].user is defined %}
                  <span class=\"custom-separator\"></span>
                    <div class=\"passenger-booker\">
                        <h4 class=\"text-center mt-3 mb-3\">Déjà à bord </h4>
                        {% for booker in bookers %}
                        <div class=\"row card-detail-profile\">
                        <a class=\"d-flex\" href=\"{{path('user_view_profile', {'id':  booker.user.id})}}\" >
                                <div class=\"col d-flex  flex-column justify-content-center\">
                                <p class=\"font-control\"> {{ booker.user.firstName}}</p>
                            </div>
                            <div class=\"col d-flex justify-content-center align-items-center\">
                                <img class=\"img-card-passenger\"src=\"{{asset('assets/uploads/profilePicture/') ~  booker.user.profile_picture}}\"/>
                            </div>
                            <div class=\"col d-flex justify-content-end align-items-center font-control fas fa-chevron-right\"></div>
                        </a>
                            </div>
                        
                        {% endfor %}
                    </div>
                {% endif %}
              </div>
          </div>
        </div>
{% endblock %}", "trip/details.html.twig", "/shared/httpd/Projet-Final/templates/trip/details.html.twig");
    }
}

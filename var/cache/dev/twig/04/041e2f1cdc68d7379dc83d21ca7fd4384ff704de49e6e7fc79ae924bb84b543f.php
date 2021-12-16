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
        echo "                            <p class=\"pt-3\"><strong>";
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
                        <div class=\"card-detail-profile\">
                            <div class=\"col d-flex  justify-content-center\">
                                ";
        // line 56
        if ((0 !== twig_compare((isset($context["checkBooking"]) || array_key_exists("checkBooking", $context) ? $context["checkBooking"] : (function () { throw new RuntimeError('Variable "checkBooking" does not exist.', 56, $this->source); })()), "my"))) {
            // line 57
            echo "                                    ";
            if ((0 === twig_compare((isset($context["checkBooking"]) || array_key_exists("checkBooking", $context) ? $context["checkBooking"] : (function () { throw new RuntimeError('Variable "checkBooking" does not exist.', 57, $this->source); })()), null))) {
                // line 58
                echo "                                        ";
                if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["trip"]) || array_key_exists("trip", $context) ? $context["trip"] : (function () { throw new RuntimeError('Variable "trip" does not exist.', 58, $this->source); })()), "tripFull", [], "any", false, false, false, 58), true))) {
                    // line 59
                    echo "                                            <p class=\"contact-button-cancel\"><i class=\"fas fa-users-slash\"></i> Trajet Complet !</p>
                                        ";
                } else {
                    // line 61
                    echo "                                            <a href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("booking_new", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["trip"]) || array_key_exists("trip", $context) ? $context["trip"] : (function () { throw new RuntimeError('Variable "trip" does not exist.', 61, $this->source); })()), "id", [], "any", false, false, false, 61)]), "html", null, true);
                    echo "\" type=\"submit\" class=\"contact-button\"><i class=\"fas fa-user-check\"></i> Réserver ce trajet</a>
                                        ";
                }
                // line 63
                echo "                                    ";
            } else {
                // line 64
                echo "                                        ";
                if (((0 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["trip"]) || array_key_exists("trip", $context) ? $context["trip"] : (function () { throw new RuntimeError('Variable "trip" does not exist.', 64, $this->source); })()), "tripStarted", [], "any", false, false, false, 64), true)) && (0 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["trip"]) || array_key_exists("trip", $context) ? $context["trip"] : (function () { throw new RuntimeError('Variable "trip" does not exist.', 64, $this->source); })()), "tripCompleted", [], "any", false, false, false, 64), false)))) {
                    // line 65
                    echo "                                            <p class=\"contact-button\"><i class=\"fas fa-car-side\"></i> Trajet en cours</p>
                                        ";
                } elseif (((0 === twig_compare(twig_get_attribute($this->env, $this->source,                 // line 66
(isset($context["trip"]) || array_key_exists("trip", $context) ? $context["trip"] : (function () { throw new RuntimeError('Variable "trip" does not exist.', 66, $this->source); })()), "tripStarted", [], "any", false, false, false, 66), true)) && (0 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["trip"]) || array_key_exists("trip", $context) ? $context["trip"] : (function () { throw new RuntimeError('Variable "trip" does not exist.', 66, $this->source); })()), "tripCompleted", [], "any", false, false, false, 66), true)))) {
                    // line 67
                    echo "                                            <a class=\"contact-button\"><i class=\"fas fa-check\"></i> Trajet terminé</a>
                                        ";
                } else {
                    // line 69
                    echo "                                            <a href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("booking_new", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["trip"]) || array_key_exists("trip", $context) ? $context["trip"] : (function () { throw new RuntimeError('Variable "trip" does not exist.', 69, $this->source); })()), "id", [], "any", false, false, false, 69)]), "html", null, true);
                    echo "\" type=\"submit\" class=\"contact-button-cancel\"><i class=\"far fa-times-circle\"></i> Annuler ma réservation</a>
                                        ";
                }
                // line 71
                echo "                                    ";
            }
            // line 72
            echo "                                ";
        }
        // line 73
        echo "                            </div>
                        </div>
                        <span class=\"custom-separator\"></span>
                    </div>
                  <div class=\"row card-detail-profile\">
                  <h4 class=\"text-center\">Informations du conducteur </h4>
                    <a href=\"";
        // line 79
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_show", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["trip"]) || array_key_exists("trip", $context) ? $context["trip"] : (function () { throw new RuntimeError('Variable "trip" does not exist.', 79, $this->source); })()), "driver", [], "any", false, false, false, 79), "id", [], "any", false, false, false, 79)]), "html", null, true);
        echo "\">
                    <div class=\"row\">
                      <div class=\"col\">
                        <img class=\"img-card\"src=\"";
        // line 82
        echo twig_escape_filter($this->env, ($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/uploads/profilePicture/") . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["trip"]) || array_key_exists("trip", $context) ? $context["trip"] : (function () { throw new RuntimeError('Variable "trip" does not exist.', 82, $this->source); })()), "driver", [], "any", false, false, false, 82), "profile_picture", [], "any", false, false, false, 82)), "html", null, true);
        echo "\"/>
                      </div>
                        <div class=\"col d-flex  flex-column justify-content-center\">
                          <p class=\"font-control\">";
        // line 85
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["trip"]) || array_key_exists("trip", $context) ? $context["trip"] : (function () { throw new RuntimeError('Variable "trip" does not exist.', 85, $this->source); })()), "driver", [], "any", false, false, false, 85), "firstName", [], "any", false, false, false, 85), "html", null, true);
        echo "</p>
                          ";
        // line 86
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["trip"]) || array_key_exists("trip", $context) ? $context["trip"] : (function () { throw new RuntimeError('Variable "trip" does not exist.', 86, $this->source); })()), "driver", [], "any", false, false, false, 86), "globalRating", [], "any", false, false, false, 86)) {
            // line 87
            echo "                              <p class=\"font-control\"><i style=\"color: gold;\" class=\"fas fa-star\"></i>";
            echo twig_escape_filter($this->env, twig_round(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["trip"]) || array_key_exists("trip", $context) ? $context["trip"] : (function () { throw new RuntimeError('Variable "trip" does not exist.', 87, $this->source); })()), "driver", [], "any", false, false, false, 87), "globalRating", [], "any", false, false, false, 87), 1, "floor"), "html", null, true);
            echo "</p>
                          ";
        } else {
            // line 89
            echo "                              <p class=\"font-control-rating\"><i class=\"fas fa-star\"></i> Pas de note</p>
                          ";
        }
        // line 91
        echo "                      </div>
                      <div class=\"col d-flex justify-content-end align-items-center font-control fas fa-chevron-right\"></div>
                    </div>
                    </a>
                      <div class=\"row d-flex justify-content-center\">
                            ";
        // line 96
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["trip"]) || array_key_exists("trip", $context) ? $context["trip"] : (function () { throw new RuntimeError('Variable "trip" does not exist.', 96, $this->source); })()), "driver", [], "any", false, false, false, 96), "phone", [], "any", false, false, false, 96)) {
            // line 97
            echo "                              <p class=\"info-detail\"><i style=\"color:green;\" class=\"far fa-check-circle\"></i> Numéro de téléphone</p>
                          ";
        }
        // line 99
        echo "                            ";
        if ((0 !== twig_compare((isset($context["checkBooking"]) || array_key_exists("checkBooking", $context) ? $context["checkBooking"] : (function () { throw new RuntimeError('Variable "checkBooking" does not exist.', 99, $this->source); })()), "my"))) {
            // line 100
            echo "                                <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("message_discussion_details", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["trip"]) || array_key_exists("trip", $context) ? $context["trip"] : (function () { throw new RuntimeError('Variable "trip" does not exist.', 100, $this->source); })()), "driver", [], "any", false, false, false, 100), "id", [], "any", false, false, false, 100)]), "html", null, true);
            echo "\" class=\"contact-button\"><i style=\"color:#82b6e8;\" class=\"far fa-comments\"></i> Contacter ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["trip"]) || array_key_exists("trip", $context) ? $context["trip"] : (function () { throw new RuntimeError('Variable "trip" does not exist.', 100, $this->source); })()), "driver", [], "any", false, false, false, 100), "firstName", [], "any", false, false, false, 100), "html", null, true);
            echo "</a>
                            ";
        }
        // line 102
        echo "                      </div>
                      ";
        // line 103
        if ((((((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["trip"]) || array_key_exists("trip", $context) ? $context["trip"] : (function () { throw new RuntimeError('Variable "trip" does not exist.', 103, $this->source); })()), "driver", [], "any", false, false, false, 103), "travelPreferences", [], "any", false, false, false, 103), "discussion", [], "any", false, false, false, 103), null)) && (0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["trip"]) || array_key_exists("trip", $context) ? $context["trip"] : (function () { throw new RuntimeError('Variable "trip" does not exist.', 103, $this->source); })()), "driver", [], "any", false, false, false, 103), "travelPreferences", [], "any", false, false, false, 103), "music", [], "any", false, false, false, 103), null))) && (0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["trip"]) || array_key_exists("trip", $context) ? $context["trip"] : (function () { throw new RuntimeError('Variable "trip" does not exist.', 103, $this->source); })()), "driver", [], "any", false, false, false, 103), "travelPreferences", [], "any", false, false, false, 103), "smoking", [], "any", false, false, false, 103), null))) && (0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["trip"]) || array_key_exists("trip", $context) ? $context["trip"] : (function () { throw new RuntimeError('Variable "trip" does not exist.', 103, $this->source); })()), "driver", [], "any", false, false, false, 103), "travelPreferences", [], "any", false, false, false, 103), "animals", [], "any", false, false, false, 103), null))) && (0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["trip"]) || array_key_exists("trip", $context) ? $context["trip"] : (function () { throw new RuntimeError('Variable "trip" does not exist.', 103, $this->source); })()), "driver", [], "any", false, false, false, 103), "travelPreferences", [], "any", false, false, false, 103), "healthPass", [], "any", false, false, false, 103), null)))) {
            // line 104
            echo "                      ";
        } else {
            // line 105
            echo "                        <span class=\"custom-separator\"></span>
                        <div class=\"row d-flex justify-content-center\">
                            ";
            // line 107
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["trip"]) || array_key_exists("trip", $context) ? $context["trip"] : (function () { throw new RuntimeError('Variable "trip" does not exist.', 107, $this->source); })()), "driver", [], "any", false, false, false, 107), "travelPreferences", [], "any", false, false, false, 107), "discussion", [], "any", false, false, false, 107)) {
                // line 108
                echo "                                <p class=\"info-detail\"><i class=\"far fa-comments mx-2\"></i>  ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["trip"]) || array_key_exists("trip", $context) ? $context["trip"] : (function () { throw new RuntimeError('Variable "trip" does not exist.', 108, $this->source); })()), "driver", [], "any", false, false, false, 108), "travelPreferences", [], "any", false, false, false, 108), "discussion", [], "any", false, false, false, 108), "html", null, true);
                echo "</p>
                            ";
            }
            // line 110
            echo "                            ";
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["trip"]) || array_key_exists("trip", $context) ? $context["trip"] : (function () { throw new RuntimeError('Variable "trip" does not exist.', 110, $this->source); })()), "driver", [], "any", false, false, false, 110), "travelPreferences", [], "any", false, false, false, 110), "music", [], "any", false, false, false, 110)) {
                // line 111
                echo "                                <p class=\"info-detail\"><i class=\"fas fa-music mx-2\"></i>  ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["trip"]) || array_key_exists("trip", $context) ? $context["trip"] : (function () { throw new RuntimeError('Variable "trip" does not exist.', 111, $this->source); })()), "driver", [], "any", false, false, false, 111), "travelPreferences", [], "any", false, false, false, 111), "music", [], "any", false, false, false, 111), "html", null, true);
                echo "</p>
                            ";
            }
            // line 113
            echo "                            ";
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["trip"]) || array_key_exists("trip", $context) ? $context["trip"] : (function () { throw new RuntimeError('Variable "trip" does not exist.', 113, $this->source); })()), "driver", [], "any", false, false, false, 113), "travelPreferences", [], "any", false, false, false, 113), "smoking", [], "any", false, false, false, 113)) {
                // line 114
                echo "                                <p class=\"info-detail\"><i class=\"fas fa-smoking mx-2\"></i>  ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["trip"]) || array_key_exists("trip", $context) ? $context["trip"] : (function () { throw new RuntimeError('Variable "trip" does not exist.', 114, $this->source); })()), "driver", [], "any", false, false, false, 114), "travelPreferences", [], "any", false, false, false, 114), "smoking", [], "any", false, false, false, 114), "html", null, true);
                echo "</p>
                            ";
            }
            // line 116
            echo "                            ";
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["trip"]) || array_key_exists("trip", $context) ? $context["trip"] : (function () { throw new RuntimeError('Variable "trip" does not exist.', 116, $this->source); })()), "driver", [], "any", false, false, false, 116), "travelPreferences", [], "any", false, false, false, 116), "animals", [], "any", false, false, false, 116)) {
                // line 117
                echo "                                <p class=\"info-detail\"><i class=\"fas fa-paw mx-2\"></i>  ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["trip"]) || array_key_exists("trip", $context) ? $context["trip"] : (function () { throw new RuntimeError('Variable "trip" does not exist.', 117, $this->source); })()), "driver", [], "any", false, false, false, 117), "travelPreferences", [], "any", false, false, false, 117), "animals", [], "any", false, false, false, 117), "html", null, true);
                echo "</p>
                            ";
            }
            // line 119
            echo "                            ";
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["trip"]) || array_key_exists("trip", $context) ? $context["trip"] : (function () { throw new RuntimeError('Variable "trip" does not exist.', 119, $this->source); })()), "driver", [], "any", false, false, false, 119), "travelPreferences", [], "any", false, false, false, 119), "healthPass", [], "any", false, false, false, 119)) {
                // line 120
                echo "                                <p class=\"info-detail\"><i class=\"fas fa-file-medical mx-2\"></i>  ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["trip"]) || array_key_exists("trip", $context) ? $context["trip"] : (function () { throw new RuntimeError('Variable "trip" does not exist.', 120, $this->source); })()), "driver", [], "any", false, false, false, 120), "travelPreferences", [], "any", false, false, false, 120), "healthPass", [], "any", false, false, false, 120), "html", null, true);
                echo "</p>
                            ";
            }
            // line 122
            echo "                           
                        </div>
                        ";
        }
        // line 125
        echo "                        ";
        if ((((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["trip"]) || array_key_exists("trip", $context) ? $context["trip"] : (function () { throw new RuntimeError('Variable "trip" does not exist.', 125, $this->source); })()), "driver", [], "any", false, false, false, 125), "vehicule", [], "any", false, false, false, 125), "brand", [], "any", false, false, false, 125), null)) && (0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["trip"]) || array_key_exists("trip", $context) ? $context["trip"] : (function () { throw new RuntimeError('Variable "trip" does not exist.', 125, $this->source); })()), "driver", [], "any", false, false, false, 125), "vehicule", [], "any", false, false, false, 125), "model", [], "any", false, false, false, 125), null))) && (0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["trip"]) || array_key_exists("trip", $context) ? $context["trip"] : (function () { throw new RuntimeError('Variable "trip" does not exist.', 125, $this->source); })()), "driver", [], "any", false, false, false, 125), "vehicule", [], "any", false, false, false, 125), "vehiculePicture", [], "any", false, false, false, 125), null)))) {
            // line 126
            echo "                        ";
        } else {
            // line 127
            echo "                      <div class=\"row\">
                        <div class=\"card-detail-vehicule\">
                            <div class=\"col d-flex  flex-column justify-content-center align-items-center\">
                                ";
            // line 130
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["trip"]) || array_key_exists("trip", $context) ? $context["trip"] : (function () { throw new RuntimeError('Variable "trip" does not exist.', 130, $this->source); })()), "driver", [], "any", false, false, false, 130), "vehicule", [], "any", false, false, false, 130), "brand", [], "any", false, false, false, 130)) {
                // line 131
                echo "                                    <p class=\"font-control\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["trip"]) || array_key_exists("trip", $context) ? $context["trip"] : (function () { throw new RuntimeError('Variable "trip" does not exist.', 131, $this->source); })()), "driver", [], "any", false, false, false, 131), "vehicule", [], "any", false, false, false, 131), "brand", [], "any", false, false, false, 131), "html", null, true);
                echo " - ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["trip"]) || array_key_exists("trip", $context) ? $context["trip"] : (function () { throw new RuntimeError('Variable "trip" does not exist.', 131, $this->source); })()), "driver", [], "any", false, false, false, 131), "vehicule", [], "any", false, false, false, 131), "model", [], "any", false, false, false, 131), "html", null, true);
                echo " </p>
                                ";
            }
            // line 133
            echo "                            </div>
                            <div class=\"col d-flex  justify-content-end align-items-center\">
                                ";
            // line 135
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["trip"]) || array_key_exists("trip", $context) ? $context["trip"] : (function () { throw new RuntimeError('Variable "trip" does not exist.', 135, $this->source); })()), "driver", [], "any", false, false, false, 135), "vehicule", [], "any", false, false, false, 135), "vehiculePicture", [], "any", false, false, false, 135)) {
                // line 136
                echo "                                    <img class=\"img-card-vehicule\"src=\"";
                echo twig_escape_filter($this->env, ($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/uploads/vehiculePicture/") . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["trip"]) || array_key_exists("trip", $context) ? $context["trip"] : (function () { throw new RuntimeError('Variable "trip" does not exist.', 136, $this->source); })()), "driver", [], "any", false, false, false, 136), "vehicule", [], "any", false, false, false, 136), "vehiculePicture", [], "any", false, false, false, 136)), "html", null, true);
                echo "\"/>
                                ";
            }
            // line 138
            echo "                            </div>
                      </div>
                      ";
        }
        // line 141
        echo "                  </div>
                ";
        // line 142
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["bookers"] ?? null), 0, [], "array", false, true, false, 142), "user", [], "any", true, true, false, 142)) {
            // line 143
            echo "                  <span class=\"custom-separator\"></span>
                    <div class=\"passenger-booker\">
                        <h4 class=\"text-center mt-3 mb-3\">Déjà à bord </h4>
                        ";
            // line 146
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["bookers"]) || array_key_exists("bookers", $context) ? $context["bookers"] : (function () { throw new RuntimeError('Variable "bookers" does not exist.', 146, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["booker"]) {
                // line 147
                echo "                        <div class=\"row card-detail-profile\">
                        <a class=\"d-flex\" href=\"";
                // line 148
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_show", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["booker"], "user", [], "any", false, false, false, 148), "id", [], "any", false, false, false, 148)]), "html", null, true);
                echo "\" >
                                <div class=\"col d-flex  flex-column justify-content-center\">
                                <p class=\"font-control\"> ";
                // line 150
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["booker"], "user", [], "any", false, false, false, 150), "firstName", [], "any", false, false, false, 150), "html", null, true);
                echo "</p>
                            </div>
                            <div class=\"col d-flex justify-content-center align-items-center\">
                                <img class=\"img-card-passenger\"src=\"";
                // line 153
                echo twig_escape_filter($this->env, ($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/uploads/profilePicture/") . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["booker"], "user", [], "any", false, false, false, 153), "profile_picture", [], "any", false, false, false, 153)), "html", null, true);
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
            // line 160
            echo "                    </div>
                ";
        }
        // line 162
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
        return array (  450 => 162,  446 => 160,  433 => 153,  427 => 150,  422 => 148,  419 => 147,  415 => 146,  410 => 143,  408 => 142,  405 => 141,  400 => 138,  394 => 136,  392 => 135,  388 => 133,  380 => 131,  378 => 130,  373 => 127,  370 => 126,  367 => 125,  362 => 122,  356 => 120,  353 => 119,  347 => 117,  344 => 116,  338 => 114,  335 => 113,  329 => 111,  326 => 110,  320 => 108,  318 => 107,  314 => 105,  311 => 104,  309 => 103,  306 => 102,  298 => 100,  295 => 99,  291 => 97,  289 => 96,  282 => 91,  278 => 89,  272 => 87,  270 => 86,  266 => 85,  260 => 82,  254 => 79,  246 => 73,  243 => 72,  240 => 71,  234 => 69,  230 => 67,  228 => 66,  225 => 65,  222 => 64,  219 => 63,  213 => 61,  209 => 59,  206 => 58,  203 => 57,  201 => 56,  191 => 49,  185 => 46,  175 => 40,  173 => 39,  169 => 38,  165 => 37,  159 => 34,  154 => 31,  151 => 30,  147 => 28,  145 => 27,  142 => 26,  140 => 25,  137 => 24,  135 => 23,  131 => 22,  124 => 17,  115 => 14,  112 => 13,  107 => 12,  98 => 9,  95 => 8,  91 => 7,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
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
                        <div class=\"card-detail-profile\">
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
                        <span class=\"custom-separator\"></span>
                    </div>
                  <div class=\"row card-detail-profile\">
                  <h4 class=\"text-center\">Informations du conducteur </h4>
                    <a href=\"{{path('user_show', {'id': trip.driver.id})}}\">
                    <div class=\"row\">
                      <div class=\"col\">
                        <img class=\"img-card\"src=\"{{asset('assets/uploads/profilePicture/') ~ trip.driver.profile_picture}}\"/>
                      </div>
                        <div class=\"col d-flex  flex-column justify-content-center\">
                          <p class=\"font-control\">{{trip.driver.firstName}}</p>
                          {% if trip.driver.globalRating %}
                              <p class=\"font-control\"><i style=\"color: gold;\" class=\"fas fa-star\"></i>{{trip.driver.globalRating|round(1, 'floor')}}</p>
                          {% else %}
                              <p class=\"font-control-rating\"><i class=\"fas fa-star\"></i> Pas de note</p>
                          {% endif %}
                      </div>
                      <div class=\"col d-flex justify-content-end align-items-center font-control fas fa-chevron-right\"></div>
                    </div>
                    </a>
                      <div class=\"row d-flex justify-content-center\">
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
                  </div>
                {% if bookers[0].user is defined %}
                  <span class=\"custom-separator\"></span>
                    <div class=\"passenger-booker\">
                        <h4 class=\"text-center mt-3 mb-3\">Déjà à bord </h4>
                        {% for booker in bookers %}
                        <div class=\"row card-detail-profile\">
                        <a class=\"d-flex\" href=\"{{path('user_show', {'id':  booker.user.id})}}\" >
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

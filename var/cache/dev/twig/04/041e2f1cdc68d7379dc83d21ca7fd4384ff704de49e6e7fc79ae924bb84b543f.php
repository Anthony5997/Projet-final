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
        if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["trip"]) || array_key_exists("trip", $context) ? $context["trip"] : (function () { throw new RuntimeError('Variable "trip" does not exist.', 23, $this->source); })()), "tripFull", [], "any", false, false, false, 23), true))) {
            // line 24
            echo "                <h3>Complet</h3>
                ";
        }
        // line 26
        echo "              </div>
                <div class=\"timeline-detail\">

                    <div class=\"d-flex justify-content-end\"><p>";
        // line 29
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["trip"]) || array_key_exists("trip", $context) ? $context["trip"] : (function () { throw new RuntimeError('Variable "trip" does not exist.', 29, $this->source); })()), "duration", [], "any", false, false, false, 29), "html", null, true);
        echo "</p></div>
                    <div class=\"row\">
                          <div class=\"col-3 d-flex align-items-end flex-column justify-content-around p-3\">
                              <p>";
        // line 32
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["trip"]) || array_key_exists("trip", $context) ? $context["trip"] : (function () { throw new RuntimeError('Variable "trip" does not exist.', 32, $this->source); })()), "startTime", [], "any", false, false, false, 32), "H:i"), "html", null, true);
        echo "</p>
                              <p class=\"d-flex justify-content-center font-control\">";
        // line 33
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["trip"]) || array_key_exists("trip", $context) ? $context["trip"] : (function () { throw new RuntimeError('Variable "trip" does not exist.', 33, $this->source); })()), "distance", [], "any", false, false, false, 33), "html", null, true);
        echo " </p>
                              <p>heure</p>
                          </div>
                          <div class=\"col-9\">
                              <div class=\"line-detail\">
                                  <div class=\"line-content\">
                                      <div class=\"content\">
                                          <h1>";
        // line 40
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["trip"]) || array_key_exists("trip", $context) ? $context["trip"] : (function () { throw new RuntimeError('Variable "trip" does not exist.', 40, $this->source); })()), "departure", [], "any", false, false, false, 40), "html", null, true);
        echo "</h1>
                                      </div>
                                      <div class=\"content\">
                                          <h1> ";
        // line 43
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["trip"]) || array_key_exists("trip", $context) ? $context["trip"] : (function () { throw new RuntimeError('Variable "trip" does not exist.', 43, $this->source); })()), "arrival", [], "any", false, false, false, 43), "html", null, true);
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
        // line 52
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_view_profile", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["trip"]) || array_key_exists("trip", $context) ? $context["trip"] : (function () { throw new RuntimeError('Variable "trip" does not exist.', 52, $this->source); })()), "driver", [], "any", false, false, false, 52), "id", [], "any", false, false, false, 52)]), "html", null, true);
        echo "\" >
                    <div class=\"row\">
                      <div class=\"col\">
                        <img class=\"img-card\"src=\"";
        // line 55
        echo twig_escape_filter($this->env, ($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/uploads/profilePicture/") . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["trip"]) || array_key_exists("trip", $context) ? $context["trip"] : (function () { throw new RuntimeError('Variable "trip" does not exist.', 55, $this->source); })()), "driver", [], "any", false, false, false, 55), "profile_picture", [], "any", false, false, false, 55)), "html", null, true);
        echo "\"/>
                      </div>
                        <div class=\"col d-flex  flex-column justify-content-center\">
                          <p class=\"font-control\">";
        // line 58
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["trip"]) || array_key_exists("trip", $context) ? $context["trip"] : (function () { throw new RuntimeError('Variable "trip" does not exist.', 58, $this->source); })()), "driver", [], "any", false, false, false, 58), "firstName", [], "any", false, false, false, 58), "html", null, true);
        echo "</p>
                          ";
        // line 59
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["trip"]) || array_key_exists("trip", $context) ? $context["trip"] : (function () { throw new RuntimeError('Variable "trip" does not exist.', 59, $this->source); })()), "driver", [], "any", false, false, false, 59), "globalRating", [], "any", false, false, false, 59)) {
            // line 60
            echo "                              <p class=\"font-control\"><i class=\"fas fa-star\"></i>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["trip"]) || array_key_exists("trip", $context) ? $context["trip"] : (function () { throw new RuntimeError('Variable "trip" does not exist.', 60, $this->source); })()), "driver", [], "any", false, false, false, 60), "globalRating", [], "any", false, false, false, 60), "html", null, true);
            echo "</p>
                          ";
        } else {
            // line 62
            echo "                              <p class=\"font-control-rating\"><i class=\"fas fa-star\"></i> Premier trajet</p>
                          ";
        }
        // line 64
        echo "                      </div>
                      <div class=\"col d-flex justify-content-end align-items-center font-control fas fa-chevron-right\"></div>
                    </div>
                    </a>
                      <div class=\"row d-flex justify-content-center\">
                          ";
        // line 69
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["trip"]) || array_key_exists("trip", $context) ? $context["trip"] : (function () { throw new RuntimeError('Variable "trip" does not exist.', 69, $this->source); })()), "driver", [], "any", false, false, false, 69), "idCard", [], "any", false, false, false, 69)) {
            // line 70
            echo "                              <p class=\"info-detail\"><i style=\"color:green;\" class=\"far fa-check-circle\"></i> Pièce d'identité vérifiée</p>
                          ";
        }
        // line 72
        echo "                            ";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["trip"]) || array_key_exists("trip", $context) ? $context["trip"] : (function () { throw new RuntimeError('Variable "trip" does not exist.', 72, $this->source); })()), "driver", [], "any", false, false, false, 72), "phone", [], "any", false, false, false, 72)) {
            // line 73
            echo "                              <p class=\"info-detail\"><i style=\"color:green;\" class=\"far fa-check-circle\"></i> Numéro de téléphone</p>
                          ";
        }
        // line 75
        echo "                            ";
        if ((0 !== twig_compare((isset($context["checkBooking"]) || array_key_exists("checkBooking", $context) ? $context["checkBooking"] : (function () { throw new RuntimeError('Variable "checkBooking" does not exist.', 75, $this->source); })()), "my"))) {
            // line 76
            echo "                                <a href=\"\" class=\"contact-button\"><i style=\"color:#82b6e8;\" class=\"far fa-comments\"></i> Contacter ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["trip"]) || array_key_exists("trip", $context) ? $context["trip"] : (function () { throw new RuntimeError('Variable "trip" does not exist.', 76, $this->source); })()), "driver", [], "any", false, false, false, 76), "firstName", [], "any", false, false, false, 76), "html", null, true);
            echo "</a>
                            ";
        }
        // line 78
        echo "                      </div>
                      ";
        // line 79
        if ((((((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["trip"]) || array_key_exists("trip", $context) ? $context["trip"] : (function () { throw new RuntimeError('Variable "trip" does not exist.', 79, $this->source); })()), "driver", [], "any", false, false, false, 79), "travelPreferences", [], "any", false, false, false, 79), "discussion", [], "any", false, false, false, 79), null)) && (0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["trip"]) || array_key_exists("trip", $context) ? $context["trip"] : (function () { throw new RuntimeError('Variable "trip" does not exist.', 79, $this->source); })()), "driver", [], "any", false, false, false, 79), "travelPreferences", [], "any", false, false, false, 79), "music", [], "any", false, false, false, 79), null))) && (0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["trip"]) || array_key_exists("trip", $context) ? $context["trip"] : (function () { throw new RuntimeError('Variable "trip" does not exist.', 79, $this->source); })()), "driver", [], "any", false, false, false, 79), "travelPreferences", [], "any", false, false, false, 79), "smoking", [], "any", false, false, false, 79), null))) && (0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["trip"]) || array_key_exists("trip", $context) ? $context["trip"] : (function () { throw new RuntimeError('Variable "trip" does not exist.', 79, $this->source); })()), "driver", [], "any", false, false, false, 79), "travelPreferences", [], "any", false, false, false, 79), "animals", [], "any", false, false, false, 79), null))) && (0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["trip"]) || array_key_exists("trip", $context) ? $context["trip"] : (function () { throw new RuntimeError('Variable "trip" does not exist.', 79, $this->source); })()), "driver", [], "any", false, false, false, 79), "travelPreferences", [], "any", false, false, false, 79), "healthPass", [], "any", false, false, false, 79), null)))) {
            // line 80
            echo "                      ";
        } else {
            // line 81
            echo "                        <span class=\"custom-separator\"></span>
                        <div class=\"row d-flex justify-content-center\">
                            ";
            // line 83
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["trip"]) || array_key_exists("trip", $context) ? $context["trip"] : (function () { throw new RuntimeError('Variable "trip" does not exist.', 83, $this->source); })()), "driver", [], "any", false, false, false, 83), "travelPreferences", [], "any", false, false, false, 83), "discussion", [], "any", false, false, false, 83)) {
                // line 84
                echo "                                <p class=\"info-detail\"><i class=\"far fa-comments mx-2\"></i>  ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["trip"]) || array_key_exists("trip", $context) ? $context["trip"] : (function () { throw new RuntimeError('Variable "trip" does not exist.', 84, $this->source); })()), "driver", [], "any", false, false, false, 84), "travelPreferences", [], "any", false, false, false, 84), "discussion", [], "any", false, false, false, 84), "html", null, true);
                echo "</p>
                            ";
            }
            // line 86
            echo "                            ";
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["trip"]) || array_key_exists("trip", $context) ? $context["trip"] : (function () { throw new RuntimeError('Variable "trip" does not exist.', 86, $this->source); })()), "driver", [], "any", false, false, false, 86), "travelPreferences", [], "any", false, false, false, 86), "music", [], "any", false, false, false, 86)) {
                // line 87
                echo "                                <p class=\"info-detail\"><i class=\"fas fa-music mx-2\"></i>  ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["trip"]) || array_key_exists("trip", $context) ? $context["trip"] : (function () { throw new RuntimeError('Variable "trip" does not exist.', 87, $this->source); })()), "driver", [], "any", false, false, false, 87), "travelPreferences", [], "any", false, false, false, 87), "music", [], "any", false, false, false, 87), "html", null, true);
                echo "</p>
                            ";
            }
            // line 89
            echo "                            ";
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["trip"]) || array_key_exists("trip", $context) ? $context["trip"] : (function () { throw new RuntimeError('Variable "trip" does not exist.', 89, $this->source); })()), "driver", [], "any", false, false, false, 89), "travelPreferences", [], "any", false, false, false, 89), "smoking", [], "any", false, false, false, 89)) {
                // line 90
                echo "                                <p class=\"info-detail\"><i class=\"fas fa-smoking mx-2\"></i>  ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["trip"]) || array_key_exists("trip", $context) ? $context["trip"] : (function () { throw new RuntimeError('Variable "trip" does not exist.', 90, $this->source); })()), "driver", [], "any", false, false, false, 90), "travelPreferences", [], "any", false, false, false, 90), "smoking", [], "any", false, false, false, 90), "html", null, true);
                echo "</p>
                            ";
            }
            // line 92
            echo "                            ";
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["trip"]) || array_key_exists("trip", $context) ? $context["trip"] : (function () { throw new RuntimeError('Variable "trip" does not exist.', 92, $this->source); })()), "driver", [], "any", false, false, false, 92), "travelPreferences", [], "any", false, false, false, 92), "animals", [], "any", false, false, false, 92)) {
                // line 93
                echo "                                <p class=\"info-detail\"><i class=\"fas fa-paw mx-2\"></i>  ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["trip"]) || array_key_exists("trip", $context) ? $context["trip"] : (function () { throw new RuntimeError('Variable "trip" does not exist.', 93, $this->source); })()), "driver", [], "any", false, false, false, 93), "travelPreferences", [], "any", false, false, false, 93), "animals", [], "any", false, false, false, 93), "html", null, true);
                echo "</p>
                            ";
            }
            // line 95
            echo "                            ";
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["trip"]) || array_key_exists("trip", $context) ? $context["trip"] : (function () { throw new RuntimeError('Variable "trip" does not exist.', 95, $this->source); })()), "driver", [], "any", false, false, false, 95), "travelPreferences", [], "any", false, false, false, 95), "healthPass", [], "any", false, false, false, 95)) {
                // line 96
                echo "                                <p class=\"info-detail\"><i class=\"fas fa-file-medical mx-2\"></i>  ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["trip"]) || array_key_exists("trip", $context) ? $context["trip"] : (function () { throw new RuntimeError('Variable "trip" does not exist.', 96, $this->source); })()), "driver", [], "any", false, false, false, 96), "travelPreferences", [], "any", false, false, false, 96), "healthPass", [], "any", false, false, false, 96), "html", null, true);
                echo "</p>
                            ";
            }
            // line 98
            echo "                           
                        </div>
                        ";
        }
        // line 101
        echo "                        ";
        if ((((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["trip"]) || array_key_exists("trip", $context) ? $context["trip"] : (function () { throw new RuntimeError('Variable "trip" does not exist.', 101, $this->source); })()), "driver", [], "any", false, false, false, 101), "vehicule", [], "any", false, false, false, 101), "brand", [], "any", false, false, false, 101), null)) && (0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["trip"]) || array_key_exists("trip", $context) ? $context["trip"] : (function () { throw new RuntimeError('Variable "trip" does not exist.', 101, $this->source); })()), "driver", [], "any", false, false, false, 101), "vehicule", [], "any", false, false, false, 101), "model", [], "any", false, false, false, 101), null))) && (0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["trip"]) || array_key_exists("trip", $context) ? $context["trip"] : (function () { throw new RuntimeError('Variable "trip" does not exist.', 101, $this->source); })()), "driver", [], "any", false, false, false, 101), "vehicule", [], "any", false, false, false, 101), "vehiculePicture", [], "any", false, false, false, 101), null)))) {
            // line 102
            echo "                        ";
        } else {
            // line 103
            echo "                      <div class=\"row\">
                        <div class=\"card-detail-vehicule\">
                            <div class=\"col d-flex  flex-column justify-content-center\">
                                ";
            // line 106
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["trip"]) || array_key_exists("trip", $context) ? $context["trip"] : (function () { throw new RuntimeError('Variable "trip" does not exist.', 106, $this->source); })()), "driver", [], "any", false, false, false, 106), "vehicule", [], "any", false, false, false, 106), "brand", [], "any", false, false, false, 106)) {
                // line 107
                echo "                                    <p class=\"font-control\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["trip"]) || array_key_exists("trip", $context) ? $context["trip"] : (function () { throw new RuntimeError('Variable "trip" does not exist.', 107, $this->source); })()), "driver", [], "any", false, false, false, 107), "vehicule", [], "any", false, false, false, 107), "brand", [], "any", false, false, false, 107), "html", null, true);
                echo " - ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["trip"]) || array_key_exists("trip", $context) ? $context["trip"] : (function () { throw new RuntimeError('Variable "trip" does not exist.', 107, $this->source); })()), "driver", [], "any", false, false, false, 107), "vehicule", [], "any", false, false, false, 107), "model", [], "any", false, false, false, 107), "html", null, true);
                echo " </p>
                                ";
            }
            // line 109
            echo "                            </div>
                            <div class=\"col d-flex  justify-content-end\">
                                ";
            // line 111
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["trip"]) || array_key_exists("trip", $context) ? $context["trip"] : (function () { throw new RuntimeError('Variable "trip" does not exist.', 111, $this->source); })()), "driver", [], "any", false, false, false, 111), "vehicule", [], "any", false, false, false, 111), "vehiculePicture", [], "any", false, false, false, 111)) {
                // line 112
                echo "                                    <img class=\"img-card-vehicule\"src=\"";
                echo twig_escape_filter($this->env, ($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/uploads/vehiculePicture/") . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["trip"]) || array_key_exists("trip", $context) ? $context["trip"] : (function () { throw new RuntimeError('Variable "trip" does not exist.', 112, $this->source); })()), "driver", [], "any", false, false, false, 112), "vehicule", [], "any", false, false, false, 112), "vehiculePicture", [], "any", false, false, false, 112)), "html", null, true);
                echo "\"/>
                                ";
            }
            // line 114
            echo "                            </div>
                      </div>
                      ";
        }
        // line 117
        echo "                      <div class=\"col d-flex  justify-content-center\">
                    ";
        // line 118
        if ((0 !== twig_compare((isset($context["checkBooking"]) || array_key_exists("checkBooking", $context) ? $context["checkBooking"] : (function () { throw new RuntimeError('Variable "checkBooking" does not exist.', 118, $this->source); })()), "my"))) {
            // line 119
            echo "                        ";
            if ((0 === twig_compare((isset($context["checkBooking"]) || array_key_exists("checkBooking", $context) ? $context["checkBooking"] : (function () { throw new RuntimeError('Variable "checkBooking" does not exist.', 119, $this->source); })()), null))) {
                // line 120
                echo "                            ";
                if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["trip"]) || array_key_exists("trip", $context) ? $context["trip"] : (function () { throw new RuntimeError('Variable "trip" does not exist.', 120, $this->source); })()), "tripFull", [], "any", false, false, false, 120), true))) {
                    // line 121
                    echo "                                <p class=\"contact-button-cancel\"><i class=\"fas fa-users-slash\"></i> Trajet Complet !</p>
                            ";
                } else {
                    // line 123
                    echo "                                <a href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("booking_new", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["trip"]) || array_key_exists("trip", $context) ? $context["trip"] : (function () { throw new RuntimeError('Variable "trip" does not exist.', 123, $this->source); })()), "id", [], "any", false, false, false, 123)]), "html", null, true);
                    echo "\" type=\"submit\" class=\"contact-button\"><i class=\"fas fa-user-check\"></i> Réserver ce trajet</a>
                            ";
                }
                // line 125
                echo "                        ";
            } else {
                // line 126
                echo "                            <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("booking_new", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["trip"]) || array_key_exists("trip", $context) ? $context["trip"] : (function () { throw new RuntimeError('Variable "trip" does not exist.', 126, $this->source); })()), "id", [], "any", false, false, false, 126)]), "html", null, true);
                echo "\" type=\"submit\" class=\"contact-button-cancel\"><i class=\"far fa-times-circle\"></i> Annuler ma réservation</a>
                        ";
            }
            // line 128
            echo "                    ";
        }
        // line 129
        echo "                      </div>
                  </div>
                ";
        // line 131
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["bookers"] ?? null), 0, [], "array", false, true, false, 131), "user", [], "any", true, true, false, 131)) {
            // line 132
            echo "                  <span class=\"custom-separator\"></span>
                    <div class=\"passenger-booker\">
                        <h4 class=\"text-center mt-3 mb-3\">Déjà à bord </h4>
                        ";
            // line 135
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["bookers"]) || array_key_exists("bookers", $context) ? $context["bookers"] : (function () { throw new RuntimeError('Variable "bookers" does not exist.', 135, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["booker"]) {
                // line 136
                echo "                        <div class=\"row card-detail-profile\">
                        <a class=\"d-flex\" href=\"";
                // line 137
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_view_profile", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["booker"], "user", [], "any", false, false, false, 137), "id", [], "any", false, false, false, 137)]), "html", null, true);
                echo "\" >
                                <div class=\"col d-flex  flex-column justify-content-center\">
                                <p class=\"font-control\"> ";
                // line 139
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["booker"], "user", [], "any", false, false, false, 139), "firstName", [], "any", false, false, false, 139), "html", null, true);
                echo "</p>
                            </div>
                            <div class=\"col d-flex justify-content-center align-items-center\">
                                <img class=\"img-card-passenger\"src=\"";
                // line 142
                echo twig_escape_filter($this->env, ($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/uploads/profilePicture/") . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["booker"], "user", [], "any", false, false, false, 142), "profile_picture", [], "any", false, false, false, 142)), "html", null, true);
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
            // line 149
            echo "                    </div>
                ";
        }
        // line 151
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
        return array (  419 => 151,  415 => 149,  402 => 142,  396 => 139,  391 => 137,  388 => 136,  384 => 135,  379 => 132,  377 => 131,  373 => 129,  370 => 128,  364 => 126,  361 => 125,  355 => 123,  351 => 121,  348 => 120,  345 => 119,  343 => 118,  340 => 117,  335 => 114,  329 => 112,  327 => 111,  323 => 109,  315 => 107,  313 => 106,  308 => 103,  305 => 102,  302 => 101,  297 => 98,  291 => 96,  288 => 95,  282 => 93,  279 => 92,  273 => 90,  270 => 89,  264 => 87,  261 => 86,  255 => 84,  253 => 83,  249 => 81,  246 => 80,  244 => 79,  241 => 78,  235 => 76,  232 => 75,  228 => 73,  225 => 72,  221 => 70,  219 => 69,  212 => 64,  208 => 62,  202 => 60,  200 => 59,  196 => 58,  190 => 55,  184 => 52,  172 => 43,  166 => 40,  156 => 33,  152 => 32,  146 => 29,  141 => 26,  137 => 24,  135 => 23,  131 => 22,  124 => 17,  115 => 14,  112 => 13,  107 => 12,  98 => 9,  95 => 8,  91 => 7,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
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
                {% if trip.tripFull == true %}
                <h3>Complet</h3>
                {% endif %}
              </div>
                <div class=\"timeline-detail\">

                    <div class=\"d-flex justify-content-end\"><p>{{trip.duration}}</p></div>
                    <div class=\"row\">
                          <div class=\"col-3 d-flex align-items-end flex-column justify-content-around p-3\">
                              <p>{{trip.startTime|date('H:i')}}</p>
                              <p class=\"d-flex justify-content-center font-control\">{{trip.distance}} </p>
                              <p>heure</p>
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
                    <a href=\"{{path('user_view_profile', {'id': trip.driver.id})}}\" >
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
                                <a href=\"\" class=\"contact-button\"><i style=\"color:#82b6e8;\" class=\"far fa-comments\"></i> Contacter {{trip.driver.firstName}}</a>
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
                            <div class=\"col d-flex  flex-column justify-content-center\">
                                {% if trip.driver.vehicule.brand %}
                                    <p class=\"font-control\">{{trip.driver.vehicule.brand}} - {{trip.driver.vehicule.model}} </p>
                                {% endif %}
                            </div>
                            <div class=\"col d-flex  justify-content-end\">
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
                            <a href=\"{{ path ('booking_new', {'id': trip.id})}}\" type=\"submit\" class=\"contact-button-cancel\"><i class=\"far fa-times-circle\"></i> Annuler ma réservation</a>
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

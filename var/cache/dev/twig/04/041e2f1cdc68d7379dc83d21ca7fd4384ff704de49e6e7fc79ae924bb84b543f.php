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
        echo "        ";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\DumpExtension']->dump($this->env, $context, (isset($context["trip"]) || array_key_exists("trip", $context) ? $context["trip"] : (function () { throw new RuntimeError('Variable "trip" does not exist.', 17, $this->source); })()));
        echo "
       <div class=\"container mt-5\">
          <h4 class=\"text-center\">Détails du voyage</h4>
            <div class=\"card-custom-detail mt-5\">
              <div class=\"plan-detail\">
              <div class=\"d-flex justify-content-between mb-2\">
                <h3>";
        // line 23
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["trip"]) || array_key_exists("trip", $context) ? $context["trip"] : (function () { throw new RuntimeError('Variable "trip" does not exist.', 23, $this->source); })()), "dateOfTrip", [], "any", false, false, false, 23), "d M"), "html", null, true);
        echo "</h3>
                ";
        // line 24
        if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["trip"]) || array_key_exists("trip", $context) ? $context["trip"] : (function () { throw new RuntimeError('Variable "trip" does not exist.', 24, $this->source); })()), "tripFull", [], "any", false, false, false, 24), true))) {
            // line 25
            echo "                <h3>Complet</h3>
                ";
        }
        // line 27
        echo "              </div>
                <div class=\"timeline-detail\">

                    <div class=\"d-flex justify-content-end\"><p>";
        // line 30
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["trip"]) || array_key_exists("trip", $context) ? $context["trip"] : (function () { throw new RuntimeError('Variable "trip" does not exist.', 30, $this->source); })()), "duration", [], "any", false, false, false, 30), "html", null, true);
        echo "</p></div>
                    <div class=\"row\">
                          <div class=\"col-3 d-flex align-items-end flex-column justify-content-around p-3\">
                              <p>";
        // line 33
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["trip"]) || array_key_exists("trip", $context) ? $context["trip"] : (function () { throw new RuntimeError('Variable "trip" does not exist.', 33, $this->source); })()), "startTime", [], "any", false, false, false, 33), "H:i"), "html", null, true);
        echo "</p>
                              <p class=\"d-flex justify-content-center font-control\">";
        // line 34
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["trip"]) || array_key_exists("trip", $context) ? $context["trip"] : (function () { throw new RuntimeError('Variable "trip" does not exist.', 34, $this->source); })()), "distance", [], "any", false, false, false, 34), "html", null, true);
        echo " </p>
                              <p>heure</p>
                          </div>
                          <div class=\"col-9\">
                              <div class=\"line-detail\">
                                  <div class=\"line-content\">
                                      <div class=\"content\">
                                          <h1>";
        // line 41
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["trip"]) || array_key_exists("trip", $context) ? $context["trip"] : (function () { throw new RuntimeError('Variable "trip" does not exist.', 41, $this->source); })()), "departure", [], "any", false, false, false, 41), "html", null, true);
        echo "</h1>
                                      </div>
                                      <div class=\"content\">
                                          <h1> ";
        // line 44
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["trip"]) || array_key_exists("trip", $context) ? $context["trip"] : (function () { throw new RuntimeError('Variable "trip" does not exist.', 44, $this->source); })()), "arrival", [], "any", false, false, false, 44), "html", null, true);
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
        // line 53
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_view_profile", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["trip"]) || array_key_exists("trip", $context) ? $context["trip"] : (function () { throw new RuntimeError('Variable "trip" does not exist.', 53, $this->source); })()), "driver", [], "any", false, false, false, 53), "id", [], "any", false, false, false, 53)]), "html", null, true);
        echo "\" >
                    <div class=\"row\">
                      <div class=\"col\">
                        <img class=\"img-card\"src=\"";
        // line 56
        echo twig_escape_filter($this->env, ($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/uploads/profilePicture/") . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["trip"]) || array_key_exists("trip", $context) ? $context["trip"] : (function () { throw new RuntimeError('Variable "trip" does not exist.', 56, $this->source); })()), "driver", [], "any", false, false, false, 56), "profile_picture", [], "any", false, false, false, 56)), "html", null, true);
        echo "\"/>
                      </div>
                        <div class=\"col d-flex  flex-column justify-content-center\">
                          <p class=\"font-control\">";
        // line 59
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["trip"]) || array_key_exists("trip", $context) ? $context["trip"] : (function () { throw new RuntimeError('Variable "trip" does not exist.', 59, $this->source); })()), "driver", [], "any", false, false, false, 59), "firstName", [], "any", false, false, false, 59), "html", null, true);
        echo "</p>
                          ";
        // line 60
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["trip"]) || array_key_exists("trip", $context) ? $context["trip"] : (function () { throw new RuntimeError('Variable "trip" does not exist.', 60, $this->source); })()), "driver", [], "any", false, false, false, 60), "globalRating", [], "any", false, false, false, 60)) {
            // line 61
            echo "                              <p class=\"font-control\"><i class=\"fas fa-star\"></i>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["trip"]) || array_key_exists("trip", $context) ? $context["trip"] : (function () { throw new RuntimeError('Variable "trip" does not exist.', 61, $this->source); })()), "driver", [], "any", false, false, false, 61), "globalRating", [], "any", false, false, false, 61), "html", null, true);
            echo "</p>
                          ";
        } else {
            // line 63
            echo "                              <p class=\"font-control-rating\"><i class=\"fas fa-star\"></i> Premier trajet</p>
                          ";
        }
        // line 65
        echo "                      </div>
                      <div class=\"col d-flex justify-content-end align-items-center font-control fas fa-chevron-right\"></div>
                    </div>
                    </a>
                      <div class=\"row d-flex justify-content-center\">
                          ";
        // line 70
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["trip"]) || array_key_exists("trip", $context) ? $context["trip"] : (function () { throw new RuntimeError('Variable "trip" does not exist.', 70, $this->source); })()), "driver", [], "any", false, false, false, 70), "idCard", [], "any", false, false, false, 70)) {
            // line 71
            echo "                              <p class=\"info-detail\"><i style=\"color:green;\" class=\"far fa-check-circle\"></i> Pièce d'identité vérifiée</p>
                          ";
        }
        // line 73
        echo "                            ";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["trip"]) || array_key_exists("trip", $context) ? $context["trip"] : (function () { throw new RuntimeError('Variable "trip" does not exist.', 73, $this->source); })()), "driver", [], "any", false, false, false, 73), "phone", [], "any", false, false, false, 73)) {
            // line 74
            echo "                              <p class=\"info-detail\"><i style=\"color:green;\" class=\"far fa-check-circle\"></i> Numéro de téléphone</p>
                          ";
        }
        // line 76
        echo "                            ";
        if ((0 !== twig_compare((isset($context["checkBooking"]) || array_key_exists("checkBooking", $context) ? $context["checkBooking"] : (function () { throw new RuntimeError('Variable "checkBooking" does not exist.', 76, $this->source); })()), "my"))) {
            // line 77
            echo "                                <a href=\"\" class=\"contact-button\"><i style=\"color:#82b6e8;\" class=\"far fa-comments\"></i> Contacter ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["trip"]) || array_key_exists("trip", $context) ? $context["trip"] : (function () { throw new RuntimeError('Variable "trip" does not exist.', 77, $this->source); })()), "driver", [], "any", false, false, false, 77), "firstName", [], "any", false, false, false, 77), "html", null, true);
            echo "</a>
                            ";
        }
        // line 79
        echo "                      </div>
                      ";
        // line 80
        if ((((((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["trip"]) || array_key_exists("trip", $context) ? $context["trip"] : (function () { throw new RuntimeError('Variable "trip" does not exist.', 80, $this->source); })()), "driver", [], "any", false, false, false, 80), "travelPreferences", [], "any", false, false, false, 80), "discussion", [], "any", false, false, false, 80), null)) && (0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["trip"]) || array_key_exists("trip", $context) ? $context["trip"] : (function () { throw new RuntimeError('Variable "trip" does not exist.', 80, $this->source); })()), "driver", [], "any", false, false, false, 80), "travelPreferences", [], "any", false, false, false, 80), "music", [], "any", false, false, false, 80), null))) && (0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["trip"]) || array_key_exists("trip", $context) ? $context["trip"] : (function () { throw new RuntimeError('Variable "trip" does not exist.', 80, $this->source); })()), "driver", [], "any", false, false, false, 80), "travelPreferences", [], "any", false, false, false, 80), "smoking", [], "any", false, false, false, 80), null))) && (0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["trip"]) || array_key_exists("trip", $context) ? $context["trip"] : (function () { throw new RuntimeError('Variable "trip" does not exist.', 80, $this->source); })()), "driver", [], "any", false, false, false, 80), "travelPreferences", [], "any", false, false, false, 80), "animals", [], "any", false, false, false, 80), null))) && (0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["trip"]) || array_key_exists("trip", $context) ? $context["trip"] : (function () { throw new RuntimeError('Variable "trip" does not exist.', 80, $this->source); })()), "driver", [], "any", false, false, false, 80), "travelPreferences", [], "any", false, false, false, 80), "healthPass", [], "any", false, false, false, 80), null)))) {
            // line 81
            echo "                      ";
        } else {
            // line 82
            echo "                        <span class=\"custom-separator\"></span>
                        <div class=\"row d-flex justify-content-center\">
                            ";
            // line 84
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["trip"]) || array_key_exists("trip", $context) ? $context["trip"] : (function () { throw new RuntimeError('Variable "trip" does not exist.', 84, $this->source); })()), "driver", [], "any", false, false, false, 84), "travelPreferences", [], "any", false, false, false, 84), "discussion", [], "any", false, false, false, 84)) {
                // line 85
                echo "                                <p class=\"info-detail\"><i class=\"far fa-comments mx-2\"></i>  ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["trip"]) || array_key_exists("trip", $context) ? $context["trip"] : (function () { throw new RuntimeError('Variable "trip" does not exist.', 85, $this->source); })()), "driver", [], "any", false, false, false, 85), "travelPreferences", [], "any", false, false, false, 85), "discussion", [], "any", false, false, false, 85), "html", null, true);
                echo "</p>
                            ";
            }
            // line 87
            echo "                            ";
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["trip"]) || array_key_exists("trip", $context) ? $context["trip"] : (function () { throw new RuntimeError('Variable "trip" does not exist.', 87, $this->source); })()), "driver", [], "any", false, false, false, 87), "travelPreferences", [], "any", false, false, false, 87), "music", [], "any", false, false, false, 87)) {
                // line 88
                echo "                                <p class=\"info-detail\"><i class=\"fas fa-music mx-2\"></i>  ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["trip"]) || array_key_exists("trip", $context) ? $context["trip"] : (function () { throw new RuntimeError('Variable "trip" does not exist.', 88, $this->source); })()), "driver", [], "any", false, false, false, 88), "travelPreferences", [], "any", false, false, false, 88), "music", [], "any", false, false, false, 88), "html", null, true);
                echo "</p>
                            ";
            }
            // line 90
            echo "                            ";
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["trip"]) || array_key_exists("trip", $context) ? $context["trip"] : (function () { throw new RuntimeError('Variable "trip" does not exist.', 90, $this->source); })()), "driver", [], "any", false, false, false, 90), "travelPreferences", [], "any", false, false, false, 90), "smoking", [], "any", false, false, false, 90)) {
                // line 91
                echo "                                <p class=\"info-detail\"><i class=\"fas fa-smoking mx-2\"></i>  ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["trip"]) || array_key_exists("trip", $context) ? $context["trip"] : (function () { throw new RuntimeError('Variable "trip" does not exist.', 91, $this->source); })()), "driver", [], "any", false, false, false, 91), "travelPreferences", [], "any", false, false, false, 91), "smoking", [], "any", false, false, false, 91), "html", null, true);
                echo "</p>
                            ";
            }
            // line 93
            echo "                            ";
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["trip"]) || array_key_exists("trip", $context) ? $context["trip"] : (function () { throw new RuntimeError('Variable "trip" does not exist.', 93, $this->source); })()), "driver", [], "any", false, false, false, 93), "travelPreferences", [], "any", false, false, false, 93), "animals", [], "any", false, false, false, 93)) {
                // line 94
                echo "                                <p class=\"info-detail\"><i class=\"fas fa-paw mx-2\"></i>  ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["trip"]) || array_key_exists("trip", $context) ? $context["trip"] : (function () { throw new RuntimeError('Variable "trip" does not exist.', 94, $this->source); })()), "driver", [], "any", false, false, false, 94), "travelPreferences", [], "any", false, false, false, 94), "animals", [], "any", false, false, false, 94), "html", null, true);
                echo "</p>
                            ";
            }
            // line 96
            echo "                            ";
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["trip"]) || array_key_exists("trip", $context) ? $context["trip"] : (function () { throw new RuntimeError('Variable "trip" does not exist.', 96, $this->source); })()), "driver", [], "any", false, false, false, 96), "travelPreferences", [], "any", false, false, false, 96), "healthPass", [], "any", false, false, false, 96)) {
                // line 97
                echo "                                <p class=\"info-detail\"><i class=\"fas fa-file-medical mx-2\"></i>  ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["trip"]) || array_key_exists("trip", $context) ? $context["trip"] : (function () { throw new RuntimeError('Variable "trip" does not exist.', 97, $this->source); })()), "driver", [], "any", false, false, false, 97), "travelPreferences", [], "any", false, false, false, 97), "healthPass", [], "any", false, false, false, 97), "html", null, true);
                echo "</p>
                            ";
            }
            // line 99
            echo "                           
                        </div>
                        ";
        }
        // line 102
        echo "                        ";
        if ((((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["trip"]) || array_key_exists("trip", $context) ? $context["trip"] : (function () { throw new RuntimeError('Variable "trip" does not exist.', 102, $this->source); })()), "driver", [], "any", false, false, false, 102), "vehicule", [], "any", false, false, false, 102), "brand", [], "any", false, false, false, 102), null)) && (0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["trip"]) || array_key_exists("trip", $context) ? $context["trip"] : (function () { throw new RuntimeError('Variable "trip" does not exist.', 102, $this->source); })()), "driver", [], "any", false, false, false, 102), "vehicule", [], "any", false, false, false, 102), "model", [], "any", false, false, false, 102), null))) && (0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["trip"]) || array_key_exists("trip", $context) ? $context["trip"] : (function () { throw new RuntimeError('Variable "trip" does not exist.', 102, $this->source); })()), "driver", [], "any", false, false, false, 102), "vehicule", [], "any", false, false, false, 102), "vehiculePicture", [], "any", false, false, false, 102), null)))) {
            // line 103
            echo "                        ";
        } else {
            // line 104
            echo "                      <div class=\"row\">
                        <div class=\"card-detail-vehicule\">
                            <div class=\"col d-flex  flex-column justify-content-center\">
                                ";
            // line 107
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["trip"]) || array_key_exists("trip", $context) ? $context["trip"] : (function () { throw new RuntimeError('Variable "trip" does not exist.', 107, $this->source); })()), "driver", [], "any", false, false, false, 107), "vehicule", [], "any", false, false, false, 107), "brand", [], "any", false, false, false, 107)) {
                // line 108
                echo "                                    <p class=\"font-control\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["trip"]) || array_key_exists("trip", $context) ? $context["trip"] : (function () { throw new RuntimeError('Variable "trip" does not exist.', 108, $this->source); })()), "driver", [], "any", false, false, false, 108), "vehicule", [], "any", false, false, false, 108), "brand", [], "any", false, false, false, 108), "html", null, true);
                echo " - ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["trip"]) || array_key_exists("trip", $context) ? $context["trip"] : (function () { throw new RuntimeError('Variable "trip" does not exist.', 108, $this->source); })()), "driver", [], "any", false, false, false, 108), "vehicule", [], "any", false, false, false, 108), "model", [], "any", false, false, false, 108), "html", null, true);
                echo " </p>
                                ";
            }
            // line 110
            echo "                            </div>
                            <div class=\"col d-flex  justify-content-end\">
                                ";
            // line 112
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["trip"]) || array_key_exists("trip", $context) ? $context["trip"] : (function () { throw new RuntimeError('Variable "trip" does not exist.', 112, $this->source); })()), "driver", [], "any", false, false, false, 112), "vehicule", [], "any", false, false, false, 112), "vehiculePicture", [], "any", false, false, false, 112)) {
                // line 113
                echo "                                    <img class=\"img-card-vehicule\"src=\"";
                echo twig_escape_filter($this->env, ($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/uploads/vehiculePicture/") . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["trip"]) || array_key_exists("trip", $context) ? $context["trip"] : (function () { throw new RuntimeError('Variable "trip" does not exist.', 113, $this->source); })()), "driver", [], "any", false, false, false, 113), "vehicule", [], "any", false, false, false, 113), "vehiculePicture", [], "any", false, false, false, 113)), "html", null, true);
                echo "\"/>
                                ";
            }
            // line 115
            echo "                            </div>
                      </div>
                      ";
        }
        // line 118
        echo "                      <div class=\"col d-flex  justify-content-center\">
                    ";
        // line 119
        if ((0 !== twig_compare((isset($context["checkBooking"]) || array_key_exists("checkBooking", $context) ? $context["checkBooking"] : (function () { throw new RuntimeError('Variable "checkBooking" does not exist.', 119, $this->source); })()), "my"))) {
            // line 120
            echo "                        ";
            if ((0 === twig_compare((isset($context["checkBooking"]) || array_key_exists("checkBooking", $context) ? $context["checkBooking"] : (function () { throw new RuntimeError('Variable "checkBooking" does not exist.', 120, $this->source); })()), null))) {
                // line 121
                echo "                            ";
                if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["trip"]) || array_key_exists("trip", $context) ? $context["trip"] : (function () { throw new RuntimeError('Variable "trip" does not exist.', 121, $this->source); })()), "tripFull", [], "any", false, false, false, 121), true))) {
                    // line 122
                    echo "                                <p class=\"contact-button-cancel\"><i class=\"fas fa-users-slash\"></i> Trajet Complet !</p>
                            ";
                } else {
                    // line 124
                    echo "                                <a href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("booking_new", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["trip"]) || array_key_exists("trip", $context) ? $context["trip"] : (function () { throw new RuntimeError('Variable "trip" does not exist.', 124, $this->source); })()), "id", [], "any", false, false, false, 124)]), "html", null, true);
                    echo "\" type=\"submit\" class=\"contact-button\"><i class=\"fas fa-user-check\"></i> Réserver ce trajet</a>
                            ";
                }
                // line 126
                echo "                        ";
            } else {
                // line 127
                echo "                            <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("booking_new", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["trip"]) || array_key_exists("trip", $context) ? $context["trip"] : (function () { throw new RuntimeError('Variable "trip" does not exist.', 127, $this->source); })()), "id", [], "any", false, false, false, 127)]), "html", null, true);
                echo "\" type=\"submit\" class=\"contact-button-cancel\"><i class=\"far fa-times-circle\"></i> Annuler ma réservation</a>
                        ";
            }
            // line 129
            echo "                    ";
        }
        // line 130
        echo "                      </div>
                  </div>
                ";
        // line 132
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["bookers"] ?? null), 0, [], "array", false, true, false, 132), "user", [], "any", true, true, false, 132)) {
            // line 133
            echo "                  <span class=\"custom-separator\"></span>
                    <div class=\"passenger-booker\">
                        <h4 class=\"text-center mt-3 mb-3\">Déjà à bord </h4>
                        ";
            // line 136
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["bookers"]) || array_key_exists("bookers", $context) ? $context["bookers"] : (function () { throw new RuntimeError('Variable "bookers" does not exist.', 136, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["booker"]) {
                // line 137
                echo "                        <div class=\"row card-detail-profile\">
                        <a class=\"d-flex\" href=\"";
                // line 138
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_view_profile", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["booker"], "user", [], "any", false, false, false, 138), "id", [], "any", false, false, false, 138)]), "html", null, true);
                echo "\" >
                                <div class=\"col d-flex  flex-column justify-content-center\">
                                <p class=\"font-control\"> ";
                // line 140
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["booker"], "user", [], "any", false, false, false, 140), "firstName", [], "any", false, false, false, 140), "html", null, true);
                echo "</p>
                            </div>
                            <div class=\"col d-flex justify-content-center align-items-center\">
                                <img class=\"img-card-passenger\"src=\"";
                // line 143
                echo twig_escape_filter($this->env, ($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/uploads/profilePicture/") . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["booker"], "user", [], "any", false, false, false, 143), "profile_picture", [], "any", false, false, false, 143)), "html", null, true);
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
            // line 150
            echo "                    </div>
                ";
        }
        // line 152
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
        return array (  422 => 152,  418 => 150,  405 => 143,  399 => 140,  394 => 138,  391 => 137,  387 => 136,  382 => 133,  380 => 132,  376 => 130,  373 => 129,  367 => 127,  364 => 126,  358 => 124,  354 => 122,  351 => 121,  348 => 120,  346 => 119,  343 => 118,  338 => 115,  332 => 113,  330 => 112,  326 => 110,  318 => 108,  316 => 107,  311 => 104,  308 => 103,  305 => 102,  300 => 99,  294 => 97,  291 => 96,  285 => 94,  282 => 93,  276 => 91,  273 => 90,  267 => 88,  264 => 87,  258 => 85,  256 => 84,  252 => 82,  249 => 81,  247 => 80,  244 => 79,  238 => 77,  235 => 76,  231 => 74,  228 => 73,  224 => 71,  222 => 70,  215 => 65,  211 => 63,  205 => 61,  203 => 60,  199 => 59,  193 => 56,  187 => 53,  175 => 44,  169 => 41,  159 => 34,  155 => 33,  149 => 30,  144 => 27,  140 => 25,  138 => 24,  134 => 23,  124 => 17,  115 => 14,  112 => 13,  107 => 12,  98 => 9,  95 => 8,  91 => 7,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
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
        {{dump(trip)}}
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

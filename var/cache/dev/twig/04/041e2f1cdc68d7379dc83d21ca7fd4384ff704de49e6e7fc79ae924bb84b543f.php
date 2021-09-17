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
        echo "
       <div class=\"container mt-5\">
          <h4 class=\"text-center\">Détails du voyage</h4>
            <div class=\"card-custom-detail mt-5\">
              <div class=\"plan-detail\">
              <h3>";
        // line 22
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["trip"]) || array_key_exists("trip", $context) ? $context["trip"] : (function () { throw new RuntimeError('Variable "trip" does not exist.', 22, $this->source); })()), "dateOfTrip", [], "any", false, false, false, 22), "d M"), "html", null, true);
        echo "</h3>
                <div class=\"timeline-detail\">

                    <div class=\"d-flex justify-content-end\"><p>";
        // line 25
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["trip"]) || array_key_exists("trip", $context) ? $context["trip"] : (function () { throw new RuntimeError('Variable "trip" does not exist.', 25, $this->source); })()), "duration", [], "any", false, false, false, 25), "html", null, true);
        echo "</p></div>
                    <div class=\"row\">
                          <div class=\"col-3 d-flex align-items-end flex-column justify-content-around p-3\">
                              <p>";
        // line 28
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["trip"]) || array_key_exists("trip", $context) ? $context["trip"] : (function () { throw new RuntimeError('Variable "trip" does not exist.', 28, $this->source); })()), "startTime", [], "any", false, false, false, 28), "H:i"), "html", null, true);
        echo "</p>
                              <p class=\"d-flex justify-content-center font-control\">";
        // line 29
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["trip"]) || array_key_exists("trip", $context) ? $context["trip"] : (function () { throw new RuntimeError('Variable "trip" does not exist.', 29, $this->source); })()), "distance", [], "any", false, false, false, 29), "html", null, true);
        echo " </p>
                              <p>heure</p>
                          </div>
                          <div class=\"col-9\">
                              <div class=\"line-detail\">
                                  <div class=\"line-content\">
                                      <div class=\"content\">
                                          <h1>";
        // line 36
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["trip"]) || array_key_exists("trip", $context) ? $context["trip"] : (function () { throw new RuntimeError('Variable "trip" does not exist.', 36, $this->source); })()), "departure", [], "any", false, false, false, 36), "html", null, true);
        echo "</h1>
                                      </div>
                                      <div class=\"content\">
                                          <h1> ";
        // line 39
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["trip"]) || array_key_exists("trip", $context) ? $context["trip"] : (function () { throw new RuntimeError('Variable "trip" does not exist.', 39, $this->source); })()), "arrival", [], "any", false, false, false, 39), "html", null, true);
        echo "</h1>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                  <span class=\"custom-separator\"></span>
                  </div>
                  <div class=\"row card-detail-profile\">
                      <div class=\"col\">
                          <a href=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_view_profile", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["trip"]) || array_key_exists("trip", $context) ? $context["trip"] : (function () { throw new RuntimeError('Variable "trip" does not exist.', 49, $this->source); })()), "driver", [], "any", false, false, false, 49), "id", [], "any", false, false, false, 49)]), "html", null, true);
        echo "\" ><img class=\"img-card\"src=\"";
        echo twig_escape_filter($this->env, ($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/uploads/profilePicture/") . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["trip"]) || array_key_exists("trip", $context) ? $context["trip"] : (function () { throw new RuntimeError('Variable "trip" does not exist.', 49, $this->source); })()), "driver", [], "any", false, false, false, 49), "profile_picture", [], "any", false, false, false, 49)), "html", null, true);
        echo "\"/></a>
                      </div>
                        <div class=\"col d-flex  flex-column justify-content-center\">
                          <p class=\"font-control\">";
        // line 52
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["trip"]) || array_key_exists("trip", $context) ? $context["trip"] : (function () { throw new RuntimeError('Variable "trip" does not exist.', 52, $this->source); })()), "driver", [], "any", false, false, false, 52), "firstName", [], "any", false, false, false, 52), "html", null, true);
        echo "</p>
                          ";
        // line 53
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["trip"]) || array_key_exists("trip", $context) ? $context["trip"] : (function () { throw new RuntimeError('Variable "trip" does not exist.', 53, $this->source); })()), "driver", [], "any", false, false, false, 53), "globalRating", [], "any", false, false, false, 53)) {
            // line 54
            echo "                              <p class=\"font-control\"><i class=\"fas fa-star\"></i>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["trip"]) || array_key_exists("trip", $context) ? $context["trip"] : (function () { throw new RuntimeError('Variable "trip" does not exist.', 54, $this->source); })()), "driver", [], "any", false, false, false, 54), "globalRating", [], "any", false, false, false, 54), "html", null, true);
            echo "</p>
                          ";
        } else {
            // line 56
            echo "                              <p class=\"font-control-rating\"><i class=\"fas fa-star\"></i> Premier trajet</p>
                          ";
        }
        // line 58
        echo "                      </div>
                      <div class=\"col d-flex justify-content-start align-items-center font-control fas fa-chevron-right\"></div>
                      <div class=\"row d-flex justify-content-center\">
                          ";
        // line 61
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["trip"]) || array_key_exists("trip", $context) ? $context["trip"] : (function () { throw new RuntimeError('Variable "trip" does not exist.', 61, $this->source); })()), "driver", [], "any", false, false, false, 61), "idCard", [], "any", false, false, false, 61)) {
            // line 62
            echo "                              <p class=\"info-detail\"><i style=\"color:green;\" class=\"far fa-check-circle\"></i> Pièce d'identité vérifiée</p>
                          ";
        }
        // line 64
        echo "                            ";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["trip"]) || array_key_exists("trip", $context) ? $context["trip"] : (function () { throw new RuntimeError('Variable "trip" does not exist.', 64, $this->source); })()), "driver", [], "any", false, false, false, 64), "phone", [], "any", false, false, false, 64)) {
            // line 65
            echo "                              <p class=\"info-detail\"><i style=\"color:green;\" class=\"far fa-check-circle\"></i> Numéro de téléphone</p>
                          ";
        }
        // line 67
        echo "                          <a href=\"\" class=\"contact-button\"><i style=\"color:#82b6e8;\" class=\"far fa-comments\"></i> Contacter ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["trip"]) || array_key_exists("trip", $context) ? $context["trip"] : (function () { throw new RuntimeError('Variable "trip" does not exist.', 67, $this->source); })()), "driver", [], "any", false, false, false, 67), "firstName", [], "any", false, false, false, 67), "html", null, true);
        echo "</a>
                      </div>
                      <span class=\"custom-separator\"></span>
                       <div class=\"row d-flex justify-content-center\">
                          ";
        // line 71
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["trip"]) || array_key_exists("trip", $context) ? $context["trip"] : (function () { throw new RuntimeError('Variable "trip" does not exist.', 71, $this->source); })()), "driver", [], "any", false, false, false, 71), "travelPreferences", [], "any", false, false, false, 71), "discussion", [], "any", false, false, false, 71)) {
            // line 72
            echo "                              <p class=\"info-detail\"><i class=\"far fa-comments mx-2\"></i>  ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["trip"]) || array_key_exists("trip", $context) ? $context["trip"] : (function () { throw new RuntimeError('Variable "trip" does not exist.', 72, $this->source); })()), "driver", [], "any", false, false, false, 72), "travelPreferences", [], "any", false, false, false, 72), "discussion", [], "any", false, false, false, 72), "html", null, true);
            echo "</p>
                          ";
        }
        // line 74
        echo "                          ";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["trip"]) || array_key_exists("trip", $context) ? $context["trip"] : (function () { throw new RuntimeError('Variable "trip" does not exist.', 74, $this->source); })()), "driver", [], "any", false, false, false, 74), "travelPreferences", [], "any", false, false, false, 74), "music", [], "any", false, false, false, 74)) {
            // line 75
            echo "                              <p class=\"info-detail\"><i class=\"fas fa-music mx-2\"></i>  ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["trip"]) || array_key_exists("trip", $context) ? $context["trip"] : (function () { throw new RuntimeError('Variable "trip" does not exist.', 75, $this->source); })()), "driver", [], "any", false, false, false, 75), "travelPreferences", [], "any", false, false, false, 75), "music", [], "any", false, false, false, 75), "html", null, true);
            echo "</p>
                          ";
        }
        // line 77
        echo "                          ";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["trip"]) || array_key_exists("trip", $context) ? $context["trip"] : (function () { throw new RuntimeError('Variable "trip" does not exist.', 77, $this->source); })()), "driver", [], "any", false, false, false, 77), "travelPreferences", [], "any", false, false, false, 77), "smoking", [], "any", false, false, false, 77)) {
            // line 78
            echo "                              <p class=\"info-detail\"><i class=\"fas fa-smoking mx-2\"></i>  ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["trip"]) || array_key_exists("trip", $context) ? $context["trip"] : (function () { throw new RuntimeError('Variable "trip" does not exist.', 78, $this->source); })()), "driver", [], "any", false, false, false, 78), "travelPreferences", [], "any", false, false, false, 78), "smoking", [], "any", false, false, false, 78), "html", null, true);
            echo "</p>
                          ";
        }
        // line 80
        echo "                          ";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["trip"]) || array_key_exists("trip", $context) ? $context["trip"] : (function () { throw new RuntimeError('Variable "trip" does not exist.', 80, $this->source); })()), "driver", [], "any", false, false, false, 80), "travelPreferences", [], "any", false, false, false, 80), "animals", [], "any", false, false, false, 80)) {
            // line 81
            echo "                              <p class=\"info-detail\"><i class=\"fas fa-paw mx-2\"></i>  ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["trip"]) || array_key_exists("trip", $context) ? $context["trip"] : (function () { throw new RuntimeError('Variable "trip" does not exist.', 81, $this->source); })()), "driver", [], "any", false, false, false, 81), "travelPreferences", [], "any", false, false, false, 81), "animals", [], "any", false, false, false, 81), "html", null, true);
            echo "</p>
                          ";
        }
        // line 83
        echo "                          ";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["trip"]) || array_key_exists("trip", $context) ? $context["trip"] : (function () { throw new RuntimeError('Variable "trip" does not exist.', 83, $this->source); })()), "driver", [], "any", false, false, false, 83), "travelPreferences", [], "any", false, false, false, 83), "healthPass", [], "any", false, false, false, 83)) {
            // line 84
            echo "                              <p class=\"info-detail\"><i class=\"fas fa-file-medical mx-2\"></i>  ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["trip"]) || array_key_exists("trip", $context) ? $context["trip"] : (function () { throw new RuntimeError('Variable "trip" does not exist.', 84, $this->source); })()), "driver", [], "any", false, false, false, 84), "travelPreferences", [], "any", false, false, false, 84), "healthPass", [], "any", false, false, false, 84), "html", null, true);
            echo "</p>
                          ";
        }
        // line 86
        echo "                           
                        </div>
                      <div class=\"row\">
                        <div class=\"card-detail-vehicule\">
                            <div class=\"col d-flex  flex-column justify-content-center\">
                                ";
        // line 91
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["trip"]) || array_key_exists("trip", $context) ? $context["trip"] : (function () { throw new RuntimeError('Variable "trip" does not exist.', 91, $this->source); })()), "driver", [], "any", false, false, false, 91), "vehicule", [], "any", false, false, false, 91), "brand", [], "any", false, false, false, 91)) {
            // line 92
            echo "                                    <p class=\"font-control\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["trip"]) || array_key_exists("trip", $context) ? $context["trip"] : (function () { throw new RuntimeError('Variable "trip" does not exist.', 92, $this->source); })()), "driver", [], "any", false, false, false, 92), "vehicule", [], "any", false, false, false, 92), "brand", [], "any", false, false, false, 92), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["trip"]) || array_key_exists("trip", $context) ? $context["trip"] : (function () { throw new RuntimeError('Variable "trip" does not exist.', 92, $this->source); })()), "driver", [], "any", false, false, false, 92), "vehicule", [], "any", false, false, false, 92), "model", [], "any", false, false, false, 92), "html", null, true);
            echo " </p>
                                ";
        }
        // line 94
        echo "                            </div>
                            <div class=\"col d-flex  justify-content-end\">
                                ";
        // line 96
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["trip"]) || array_key_exists("trip", $context) ? $context["trip"] : (function () { throw new RuntimeError('Variable "trip" does not exist.', 96, $this->source); })()), "driver", [], "any", false, false, false, 96), "vehicule", [], "any", false, false, false, 96), "vehiculePicture", [], "any", false, false, false, 96)) {
            // line 97
            echo "                                    <img class=\"img-card-vehicule\"src=\"";
            echo twig_escape_filter($this->env, ($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/uploads/vehiculePicture/") . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["trip"]) || array_key_exists("trip", $context) ? $context["trip"] : (function () { throw new RuntimeError('Variable "trip" does not exist.', 97, $this->source); })()), "driver", [], "any", false, false, false, 97), "vehicule", [], "any", false, false, false, 97), "vehiculePicture", [], "any", false, false, false, 97)), "html", null, true);
            echo "\"/>
                                ";
        }
        // line 99
        echo "                            </div>
                      </div>
                      <div class=\"col d-flex  justify-content-center\">
                    ";
        // line 102
        if ((0 !== twig_compare((isset($context["checkBooking"]) || array_key_exists("checkBooking", $context) ? $context["checkBooking"] : (function () { throw new RuntimeError('Variable "checkBooking" does not exist.', 102, $this->source); })()), "my"))) {
            // line 103
            echo "                        ";
            if ((0 === twig_compare((isset($context["checkBooking"]) || array_key_exists("checkBooking", $context) ? $context["checkBooking"] : (function () { throw new RuntimeError('Variable "checkBooking" does not exist.', 103, $this->source); })()), null))) {
                // line 104
                echo "                            <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("booking_new", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["trip"]) || array_key_exists("trip", $context) ? $context["trip"] : (function () { throw new RuntimeError('Variable "trip" does not exist.', 104, $this->source); })()), "id", [], "any", false, false, false, 104)]), "html", null, true);
                echo "\" type=\"submit\" class=\"contact-button\"><i class=\"fas fa-user-check\"></i> Réserver ce trajet</a>
                        ";
            } else {
                // line 106
                echo "                            <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("booking_new", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["trip"]) || array_key_exists("trip", $context) ? $context["trip"] : (function () { throw new RuntimeError('Variable "trip" does not exist.', 106, $this->source); })()), "id", [], "any", false, false, false, 106)]), "html", null, true);
                echo "\" type=\"submit\" class=\"contact-button-cancel\"><i class=\"far fa-times-circle\"></i> Annuler ma réservation</a>
                        ";
            }
            // line 108
            echo "                    ";
        }
        // line 109
        echo "                      </div>
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
        return "trip/details.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  324 => 109,  321 => 108,  315 => 106,  309 => 104,  306 => 103,  304 => 102,  299 => 99,  293 => 97,  291 => 96,  287 => 94,  279 => 92,  277 => 91,  270 => 86,  264 => 84,  261 => 83,  255 => 81,  252 => 80,  246 => 78,  243 => 77,  237 => 75,  234 => 74,  228 => 72,  226 => 71,  218 => 67,  214 => 65,  211 => 64,  207 => 62,  205 => 61,  200 => 58,  196 => 56,  190 => 54,  188 => 53,  184 => 52,  176 => 49,  163 => 39,  157 => 36,  147 => 29,  143 => 28,  137 => 25,  131 => 22,  124 => 17,  115 => 14,  112 => 13,  107 => 12,  98 => 9,  95 => 8,  91 => 7,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
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
              <h3>{{trip.dateOfTrip|date(\"d M\")}}</h3>
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
                      <div class=\"col\">
                          <a href=\"{{path('user_view_profile', {'id': trip.driver.id})}}\" ><img class=\"img-card\"src=\"{{asset('assets/uploads/profilePicture/') ~ trip.driver.profile_picture}}\"/></a>
                      </div>
                        <div class=\"col d-flex  flex-column justify-content-center\">
                          <p class=\"font-control\">{{trip.driver.firstName}}</p>
                          {% if trip.driver.globalRating %}
                              <p class=\"font-control\"><i class=\"fas fa-star\"></i>{{trip.driver.globalRating}}</p>
                          {% else %}
                              <p class=\"font-control-rating\"><i class=\"fas fa-star\"></i> Premier trajet</p>
                          {% endif %}
                      </div>
                      <div class=\"col d-flex justify-content-start align-items-center font-control fas fa-chevron-right\"></div>
                      <div class=\"row d-flex justify-content-center\">
                          {% if trip.driver.idCard %}
                              <p class=\"info-detail\"><i style=\"color:green;\" class=\"far fa-check-circle\"></i> Pièce d'identité vérifiée</p>
                          {% endif %}
                            {% if trip.driver.phone %}
                              <p class=\"info-detail\"><i style=\"color:green;\" class=\"far fa-check-circle\"></i> Numéro de téléphone</p>
                          {% endif %}
                          <a href=\"\" class=\"contact-button\"><i style=\"color:#82b6e8;\" class=\"far fa-comments\"></i> Contacter {{trip.driver.firstName}}</a>
                      </div>
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
                      <div class=\"col d-flex  justify-content-center\">
                    {% if checkBooking != \"my\" %}
                        {% if checkBooking == null %}
                            <a href=\"{{ path ('booking_new', {'id': trip.id})}}\" type=\"submit\" class=\"contact-button\"><i class=\"fas fa-user-check\"></i> Réserver ce trajet</a>
                        {% else %}
                            <a href=\"{{ path ('booking_new', {'id': trip.id})}}\" type=\"submit\" class=\"contact-button-cancel\"><i class=\"far fa-times-circle\"></i> Annuler ma réservation</a>
                        {% endif %}
                    {% endif %}
                      </div>
                  </div>
              </div>
          </div>
        </div>
{% endblock %}", "trip/details.html.twig", "/shared/httpd/Projet-Final/templates/trip/details.html.twig");
    }
}

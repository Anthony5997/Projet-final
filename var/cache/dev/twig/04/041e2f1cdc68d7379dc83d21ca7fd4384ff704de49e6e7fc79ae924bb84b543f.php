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
        echo $this->extensions['Symfony\Bridge\Twig\Extension\DumpExtension']->dump($this->env, $context, (isset($context["trip"]) || array_key_exists("trip", $context) ? $context["trip"] : (function () { throw new RuntimeError('Variable "trip" does not exist.', 6, $this->source); })()));
        echo "
       <div class=\"container\">
          <h4 class=\"text-center\">Détails du voyage</h4>
            <div class=\"card-custom-detail\">
              <div class=\"plan-detail\">
              <h1>";
        // line 11
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["trip"]) || array_key_exists("trip", $context) ? $context["trip"] : (function () { throw new RuntimeError('Variable "trip" does not exist.', 11, $this->source); })()), "dateOfTrip", [], "any", false, false, false, 11)), "html", null, true);
        echo "</h1>
                <div class=\"timeline-detail\">

                    <div class=\"d-flex justify-content-end\"><p>";
        // line 14
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["trip"]) || array_key_exists("trip", $context) ? $context["trip"] : (function () { throw new RuntimeError('Variable "trip" does not exist.', 14, $this->source); })()), "duration", [], "any", false, false, false, 14), "html", null, true);
        echo "</p></div>
                    <div class=\"row\">
                          <div class=\"col-3 d-flex align-items-end flex-column justify-content-around p-3\">
                              <p>Heure</p>
                              <p class=\"d-flex justify-content-center font-control\">";
        // line 18
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["trip"]) || array_key_exists("trip", $context) ? $context["trip"] : (function () { throw new RuntimeError('Variable "trip" does not exist.', 18, $this->source); })()), "distance", [], "any", false, false, false, 18), "html", null, true);
        echo " </p>
                              <p>heure</p>
                          </div>
                          <div class=\"col-9\">
                              <div class=\"line-detail\">
                                  <div class=\"line-content\">
                                      <div class=\"content\">
                                          <h1>";
        // line 25
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["trip"]) || array_key_exists("trip", $context) ? $context["trip"] : (function () { throw new RuntimeError('Variable "trip" does not exist.', 25, $this->source); })()), "departure", [], "any", false, false, false, 25), "html", null, true);
        echo "</h1>
                                          ";
        // line 27
        echo "                                      </div>
                                      <div class=\"content\">
                                          <h1> ";
        // line 29
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["trip"]) || array_key_exists("trip", $context) ? $context["trip"] : (function () { throw new RuntimeError('Variable "trip" does not exist.', 29, $this->source); })()), "arrival", [], "any", false, false, false, 29), "html", null, true);
        echo "</h1>
                                          ";
        // line 31
        echo "                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                  <span class=\"custom-separator\"></span>
                  </div>
                  <div class=\"row card-detail-profile\">
                      <div class=\"col\">
                          <a href=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_view_profile", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["trip"]) || array_key_exists("trip", $context) ? $context["trip"] : (function () { throw new RuntimeError('Variable "trip" does not exist.', 40, $this->source); })()), "driver", [], "any", false, false, false, 40), "id", [], "any", false, false, false, 40)]), "html", null, true);
        echo "\" ><img class=\"img-card\"src=\"";
        echo twig_escape_filter($this->env, ($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/uploads/profilePicture/") . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["trip"]) || array_key_exists("trip", $context) ? $context["trip"] : (function () { throw new RuntimeError('Variable "trip" does not exist.', 40, $this->source); })()), "driver", [], "any", false, false, false, 40), "profile_picture", [], "any", false, false, false, 40)), "html", null, true);
        echo "\"/></a>
                      </div>
                        <div class=\"col d-flex  flex-column justify-content-center\">
                          <p class=\"font-control\">";
        // line 43
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["trip"]) || array_key_exists("trip", $context) ? $context["trip"] : (function () { throw new RuntimeError('Variable "trip" does not exist.', 43, $this->source); })()), "driver", [], "any", false, false, false, 43), "firstName", [], "any", false, false, false, 43), "html", null, true);
        echo "</p>
                          ";
        // line 44
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["trip"]) || array_key_exists("trip", $context) ? $context["trip"] : (function () { throw new RuntimeError('Variable "trip" does not exist.', 44, $this->source); })()), "driver", [], "any", false, false, false, 44), "globalRating", [], "any", false, false, false, 44)) {
            // line 45
            echo "                              <p class=\"font-control\"><i class=\"fas fa-star\"></i>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["trip"]) || array_key_exists("trip", $context) ? $context["trip"] : (function () { throw new RuntimeError('Variable "trip" does not exist.', 45, $this->source); })()), "driver", [], "any", false, false, false, 45), "globalRating", [], "any", false, false, false, 45), "html", null, true);
            echo "</p>
                          ";
        } else {
            // line 47
            echo "                              <p class=\"font-control-rating\"><i class=\"fas fa-star\"></i> Premier trajet</p>
                          ";
        }
        // line 49
        echo "                      </div>
                      <div class=\"col d-flex justify-content-start align-items-center font-control fas fa-chevron-right\"></div>
                      <div class=\"row\">
                          ";
        // line 52
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["trip"]) || array_key_exists("trip", $context) ? $context["trip"] : (function () { throw new RuntimeError('Variable "trip" does not exist.', 52, $this->source); })()), "driver", [], "any", false, false, false, 52), "idCard", [], "any", false, false, false, 52)) {
            // line 53
            echo "                              <p class=\"info-detail\"><i style=\"color:green;\" class=\"far fa-check-circle\"></i> Pièce d'identité vérifiée</p>
                          ";
        }
        // line 55
        echo "                          <a href=\"\" class=\"contact-button\"><i style=\"color:#82b6e8;\" class=\"far fa-comments\"></i> Contacter ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["trip"]) || array_key_exists("trip", $context) ? $context["trip"] : (function () { throw new RuntimeError('Variable "trip" does not exist.', 55, $this->source); })()), "driver", [], "any", false, false, false, 55), "firstName", [], "any", false, false, false, 55), "html", null, true);
        echo "</a>
                      </div>
                      <span class=\"custom-separator\"></span>
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
        return array (  177 => 55,  173 => 53,  171 => 52,  166 => 49,  162 => 47,  156 => 45,  154 => 44,  150 => 43,  142 => 40,  131 => 31,  127 => 29,  123 => 27,  119 => 25,  109 => 18,  102 => 14,  96 => 11,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Trip{% endblock %}

{% block body %}
{{dump(trip)}}
       <div class=\"container\">
          <h4 class=\"text-center\">Détails du voyage</h4>
            <div class=\"card-custom-detail\">
              <div class=\"plan-detail\">
              <h1>{{trip.dateOfTrip|date()}}</h1>
                <div class=\"timeline-detail\">

                    <div class=\"d-flex justify-content-end\"><p>{{trip.duration}}</p></div>
                    <div class=\"row\">
                          <div class=\"col-3 d-flex align-items-end flex-column justify-content-around p-3\">
                              <p>Heure</p>
                              <p class=\"d-flex justify-content-center font-control\">{{trip.distance}} </p>
                              <p>heure</p>
                          </div>
                          <div class=\"col-9\">
                              <div class=\"line-detail\">
                                  <div class=\"line-content\">
                                      <div class=\"content\">
                                          <h1>{{trip.departure}}</h1>
                                          {# <p>Departed</p> #}
                                      </div>
                                      <div class=\"content\">
                                          <h1> {{trip.arrival}}</h1>
                                          {# <p>Shipment</p> #}
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
                      <div class=\"row\">
                          {% if trip.driver.idCard %}
                              <p class=\"info-detail\"><i style=\"color:green;\" class=\"far fa-check-circle\"></i> Pièce d'identité vérifiée</p>
                          {% endif %}
                          <a href=\"\" class=\"contact-button\"><i style=\"color:#82b6e8;\" class=\"far fa-comments\"></i> Contacter {{trip.driver.firstName}}</a>
                      </div>
                      <span class=\"custom-separator\"></span>
                  </div>
              </div>
          </div>
        </div>
{% endblock %}", "trip/details.html.twig", "/shared/httpd/Projet-Final/templates/trip/details.html.twig");
    }
}

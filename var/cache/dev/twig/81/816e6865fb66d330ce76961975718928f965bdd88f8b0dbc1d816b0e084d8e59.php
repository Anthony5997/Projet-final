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

/* trip/trip_found.html.twig */
class __TwigTemplate_d3b9aa262a544627e12b233611ef5d25efcb01a23da6b092c92afb0c064e6f60 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "trip/trip_found.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "trip/trip_found.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "trip/trip_found.html.twig", 1);
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

        echo "Trajet trouvé";
        
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
        if (array_key_exists("tripFound", $context)) {
            // line 8
            echo "    ";
            if ((0 === twig_compare(twig_length_filter($this->env, (isset($context["tripFound"]) || array_key_exists("tripFound", $context) ? $context["tripFound"] : (function () { throw new RuntimeError('Variable "tripFound" does not exist.', 8, $this->source); })())), 1))) {
                // line 9
                echo "        <h1 class=\"text-center m-5\"> ";
                echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["tripFound"]) || array_key_exists("tripFound", $context) ? $context["tripFound"] : (function () { throw new RuntimeError('Variable "tripFound" does not exist.', 9, $this->source); })())), "html", null, true);
                echo " Trajet trouvé</h1>
    ";
            } else {
                // line 11
                echo "        <h1 class=\"text-center m-5\"> ";
                echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["tripFound"]) || array_key_exists("tripFound", $context) ? $context["tripFound"] : (function () { throw new RuntimeError('Variable "tripFound" does not exist.', 11, $this->source); })())), "html", null, true);
                echo " Trajets trouvés</h1>
    ";
            }
            // line 13
            echo "
    ";
            // line 14
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["tripFound"]) || array_key_exists("tripFound", $context) ? $context["tripFound"] : (function () { throw new RuntimeError('Variable "tripFound" does not exist.', 14, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["trip"]) {
                // line 15
                echo "        ";
                if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["trip"], "driver", [], "any", false, false, false, 15), "id", [], "any", false, false, false, 15), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 15, $this->source); })()), "user", [], "any", false, false, false, 15), "id", [], "any", false, false, false, 15)))) {
                    // line 16
                    echo "        ";
                }
                // line 17
                echo "        ";
                if (twig_get_attribute($this->env, $this->source, $context["trip"], "tripFull", [], "any", false, false, false, 17)) {
                    // line 18
                    echo "            <div class=\"card-custom-found disabled\">
            <a class=\"global-card-found \" href=\"\">
        ";
                } elseif (((0 === twig_compare(twig_get_attribute($this->env, $this->source,                 // line 20
$context["trip"], "tripStarted", [], "any", false, false, false, 20), true)) && (0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["trip"], "tripCompleted", [], "any", false, false, false, 20), false)))) {
                    // line 21
                    echo "            <div class=\"card-custom-found disabled\">
            <a class=\"global-card-found \" href=\"\">
        ";
                } elseif (((0 === twig_compare(twig_get_attribute($this->env, $this->source,                 // line 23
$context["trip"], "tripStarted", [], "any", false, false, false, 23), true)) && (0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["trip"], "tripCompleted", [], "any", false, false, false, 23), true)))) {
                    // line 24
                    echo "            <div class=\"card-custom-found disabled\">
            <a class=\"global-card-found \" href=\"\">
        ";
                } else {
                    // line 27
                    echo "             <div class=\"card-custom-found\">
            <a class=\"global-card-found\" href=\"";
                    // line 28
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("trip_details", ["id" => twig_get_attribute($this->env, $this->source, $context["trip"], "id", [], "any", false, false, false, 28)]), "html", null, true);
                    echo "\">
        ";
                }
                // line 30
                echo "            <div class=\"plan-found\">
                <div class=\"timeline\">
                      ";
                // line 32
                if (((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["trip"], "tripFull", [], "any", false, false, false, 32), true)) && (0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["trip"], "tripStarted", [], "any", false, false, false, 32), false)))) {
                    // line 33
                    echo "                        <div class=\"d-flex justify-content-end\"><h4>Complet</h4></div>
                        ";
                } elseif (((0 === twig_compare(twig_get_attribute($this->env, $this->source,                 // line 34
$context["trip"], "tripStarted", [], "any", false, false, false, 34), true)) && (0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["trip"], "tripCompleted", [], "any", false, false, false, 34), false)))) {
                    // line 35
                    echo "                        <div class=\"d-flex justify-content-end\"><h4>Trajet en cours</h4></div>
                        ";
                } elseif (((0 === twig_compare(twig_get_attribute($this->env, $this->source,                 // line 36
$context["trip"], "tripStarted", [], "any", false, false, false, 36), true)) && (0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["trip"], "tripCompleted", [], "any", false, false, false, 36), true)))) {
                    // line 37
                    echo "                        <div class=\"d-flex justify-content-end\"><h4>Terminé</h4></div>
                        ";
                } else {
                    // line 39
                    echo "                    ";
                }
                // line 40
                echo "                    <div class=\"d-flex justify-content-end\"><p>";
                ((twig_get_attribute($this->env, $this->source, $context["trip"], "tripFull", [], "any", false, false, false, 40)) ? (print ("Complet")) : (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["trip"], "duration", [], "any", false, false, false, 40), "html", null, true))));
                echo "</p></div>
                    <div class=\"row\">
                        <div class=\"col-3 d-flex align-items-end flex-column justify-content-around p-3\">
                            <p><strong>";
                // line 43
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["trip"], "startTime", [], "any", false, false, false, 43), "H:i"), "html", null, true);
                echo "</strong></p>
                            <p class=\"d-flex justify-content-center font-control\">";
                // line 44
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["trip"], "distance", [], "any", false, false, false, 44), "html", null, true);
                echo " </p>
                            ";
                // line 45
                $context["hour"] = twig_replace_filter(twig_get_attribute($this->env, $this->source, $context["trip"], "duration", [], "any", false, false, false, 45), ["heure" => "hour"]);
                // line 46
                echo "                            <p class=\"pt-3\"><strong>";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_date_modify_filter($this->env, twig_get_attribute($this->env, $this->source, $context["trip"], "startTime", [], "any", false, false, false, 46), ("+" . (isset($context["hour"]) || array_key_exists("hour", $context) ? $context["hour"] : (function () { throw new RuntimeError('Variable "hour" does not exist.', 46, $this->source); })()))), "H:i"), "html", null, true);
                echo "</strong></p>
                        </div>
                        <div class=\"col-9\">
                            <div class=\"line\">
                                <div class=\"line-content\">
                                    <div class=\"content\">
                                        <h1>";
                // line 52
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["trip"], "departure", [], "any", false, false, false, 52), "html", null, true);
                echo "</h1>
                                    </div>
                                    <div class=\"content\">
                                        <h1>";
                // line 55
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["trip"], "arrival", [], "any", false, false, false, 55), "html", null, true);
                echo "</h1>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                    <span class=\"custom-separator\"></span>
                <div class=\"row card-found-profile\">
                    <div class=\"col\">
                       <img class=\"img-card\"src=\"";
                // line 65
                echo twig_escape_filter($this->env, ($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/uploads/profilePicture/") . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["trip"], "driver", [], "any", false, false, false, 65), "profile_picture", [], "any", false, false, false, 65)), "html", null, true);
                echo "\"/>
                    </div>
                      <div class=\"col d-flex  flex-column justify-content-center\">
                        <p class=\"font-control\">";
                // line 68
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["trip"], "driver", [], "any", false, false, false, 68), "firstName", [], "any", false, false, false, 68), "html", null, true);
                echo "</p>
                        ";
                // line 69
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["trip"], "driver", [], "any", false, false, false, 69), "globalRating", [], "any", false, false, false, 69)) {
                    // line 70
                    echo "                            <p class=\"font-control\"><i style=\"color: gold;\" class=\"fas fa-star\"></i>";
                    echo twig_escape_filter($this->env, twig_round(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["trip"], "driver", [], "any", false, false, false, 70), "globalRating", [], "any", false, false, false, 70), 1, "floor"), "html", null, true);
                    echo "</p>
                        ";
                } else {
                    // line 72
                    echo "                            <p class=\"font-control-rating\"><i class=\"fas fa-star\"></i> Aucun avis utilisateur</p>
                        ";
                }
                // line 74
                echo "                    </div>
                    <div class=\"col d-flex justify-content-start align-items-center font-control fas fa-chevron-right\"></div>
                    <div class=\"col d-flex align-items-center flex-column justify-content-center \"><strong>";
                // line 76
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["trip"], "passengers", [], "any", false, false, false, 76), "html", null, true);
                echo "</strong><i class=\"fas fa-user-friends\"></i></div>
                </div>
            </div>
        </a>
        </div>

    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trip'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 83
            echo "
";
        } else {
            // line 85
            echo "        <div class=\"container\">
           <h2 class=\"my-5 text-center red-text\"> Désolé ! Aucun voyage n'a été trouver </h2>
           <p class=\"text-center\">Aucun itinéraire de ce type n'a été publié pour l'instant, réessayer plus tard, ou publié le vôtre !</p>
        </div>
        <div class=\"row d-flex justify-content-center\">
            <img class=\"robot-sleeping-img\" src=\"";
            // line 90
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/uploads/custom-pic/robot-sleeping.png"), "html", null, true);
            echo "\">
        </div>
";
        }
        // line 93
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "trip/trip_found.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  274 => 93,  268 => 90,  261 => 85,  257 => 83,  244 => 76,  240 => 74,  236 => 72,  230 => 70,  228 => 69,  224 => 68,  218 => 65,  205 => 55,  199 => 52,  189 => 46,  187 => 45,  183 => 44,  179 => 43,  172 => 40,  169 => 39,  165 => 37,  163 => 36,  160 => 35,  158 => 34,  155 => 33,  153 => 32,  149 => 30,  144 => 28,  141 => 27,  136 => 24,  134 => 23,  130 => 21,  128 => 20,  124 => 18,  121 => 17,  118 => 16,  115 => 15,  111 => 14,  108 => 13,  102 => 11,  96 => 9,  93 => 8,  91 => 7,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Trajet trouvé{% endblock %}

{% block body %}

{% if tripFound is defined %}
    {% if tripFound|length == 1 %}
        <h1 class=\"text-center m-5\"> {{tripFound|length}} Trajet trouvé</h1>
    {% else %}
        <h1 class=\"text-center m-5\"> {{tripFound|length}} Trajets trouvés</h1>
    {% endif %}

    {% for trip in tripFound %}
        {% if trip.driver.id == app.user.id %}
        {% endif %}
        {% if trip.tripFull %}
            <div class=\"card-custom-found disabled\">
            <a class=\"global-card-found \" href=\"\">
        {% elseif trip.tripStarted == true and trip.tripCompleted == false %}
            <div class=\"card-custom-found disabled\">
            <a class=\"global-card-found \" href=\"\">
        {% elseif trip.tripStarted == true and trip.tripCompleted == true %}
            <div class=\"card-custom-found disabled\">
            <a class=\"global-card-found \" href=\"\">
        {% else %}
             <div class=\"card-custom-found\">
            <a class=\"global-card-found\" href=\"{{path('trip_details', {'id': trip.id})}}\">
        {% endif %}
            <div class=\"plan-found\">
                <div class=\"timeline\">
                      {% if trip.tripFull == true and trip.tripStarted == false %}
                        <div class=\"d-flex justify-content-end\"><h4>Complet</h4></div>
                        {% elseif trip.tripStarted == true and trip.tripCompleted == false %}
                        <div class=\"d-flex justify-content-end\"><h4>Trajet en cours</h4></div>
                        {% elseif trip.tripStarted == true and trip.tripCompleted == true %}
                        <div class=\"d-flex justify-content-end\"><h4>Terminé</h4></div>
                        {% else %}
                    {% endif %}
                    <div class=\"d-flex justify-content-end\"><p>{{trip.tripFull ? \"Complet\" : trip.duration}}</p></div>
                    <div class=\"row\">
                        <div class=\"col-3 d-flex align-items-end flex-column justify-content-around p-3\">
                            <p><strong>{{trip.startTime|date('H:i')}}</strong></p>
                            <p class=\"d-flex justify-content-center font-control\">{{trip.distance}} </p>
                            {% set hour = trip.duration|replace({'heure':'hour'})%}
                            <p class=\"pt-3\"><strong>{{ trip.startTime|date_modify(\"+\" ~ hour)|date('H:i') }}</strong></p>
                        </div>
                        <div class=\"col-9\">
                            <div class=\"line\">
                                <div class=\"line-content\">
                                    <div class=\"content\">
                                        <h1>{{trip.departure}}</h1>
                                    </div>
                                    <div class=\"content\">
                                        <h1>{{trip.arrival}}</h1>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                    <span class=\"custom-separator\"></span>
                <div class=\"row card-found-profile\">
                    <div class=\"col\">
                       <img class=\"img-card\"src=\"{{asset('assets/uploads/profilePicture/') ~ trip.driver.profile_picture}}\"/>
                    </div>
                      <div class=\"col d-flex  flex-column justify-content-center\">
                        <p class=\"font-control\">{{trip.driver.firstName}}</p>
                        {% if trip.driver.globalRating %}
                            <p class=\"font-control\"><i style=\"color: gold;\" class=\"fas fa-star\"></i>{{trip.driver.globalRating|round(1, 'floor')}}</p>
                        {% else %}
                            <p class=\"font-control-rating\"><i class=\"fas fa-star\"></i> Aucun avis utilisateur</p>
                        {% endif %}
                    </div>
                    <div class=\"col d-flex justify-content-start align-items-center font-control fas fa-chevron-right\"></div>
                    <div class=\"col d-flex align-items-center flex-column justify-content-center \"><strong>{{trip.passengers}}</strong><i class=\"fas fa-user-friends\"></i></div>
                </div>
            </div>
        </a>
        </div>

    {% endfor %}

{% else %}
        <div class=\"container\">
           <h2 class=\"my-5 text-center red-text\"> Désolé ! Aucun voyage n'a été trouver </h2>
           <p class=\"text-center\">Aucun itinéraire de ce type n'a été publié pour l'instant, réessayer plus tard, ou publié le vôtre !</p>
        </div>
        <div class=\"row d-flex justify-content-center\">
            <img class=\"robot-sleeping-img\" src=\"{{asset('assets/uploads/custom-pic/robot-sleeping.png')}}\">
        </div>
{% endif %}

{% endblock %}", "trip/trip_found.html.twig", "/shared/httpd/Projet-Final/templates/trip/trip_found.html.twig");
    }
}

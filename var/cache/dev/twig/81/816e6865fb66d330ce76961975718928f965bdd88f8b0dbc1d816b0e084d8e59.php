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
        echo "<h1 class=\"text-center m-5\"> Trajet trouvé</h1>
";
        // line 7
        echo $this->extensions['Symfony\Bridge\Twig\Extension\DumpExtension']->dump($this->env, $context, (isset($context["tripFound"]) || array_key_exists("tripFound", $context) ? $context["tripFound"] : (function () { throw new RuntimeError('Variable "tripFound" does not exist.', 7, $this->source); })()));
        echo "

";
        // line 9
        if (array_key_exists("tripFound", $context)) {
            // line 10
            echo "
    ";
            // line 11
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["tripFound"]) || array_key_exists("tripFound", $context) ? $context["tripFound"] : (function () { throw new RuntimeError('Variable "tripFound" does not exist.', 11, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["trip"]) {
                // line 12
                echo "        ";
                if (twig_get_attribute($this->env, $this->source, $context["trip"], "tripFull", [], "any", false, false, false, 12)) {
                    // line 13
                    echo "            <div class=\"card-custom-found disabled\">
            <a class=\"global-card-found \" href=\"\">
        ";
                } else {
                    // line 16
                    echo "             <div class=\"card-custom-found\">
            <a class=\"global-card-found\" href=\"";
                    // line 17
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("trip_details", ["id" => twig_get_attribute($this->env, $this->source, $context["trip"], "id", [], "any", false, false, false, 17)]), "html", null, true);
                    echo "\">
        ";
                }
                // line 19
                echo "            <div class=\"plan-found\">
                <div class=\"timeline\">
                    <div class=\"d-flex justify-content-end\"><p>";
                // line 21
                ((twig_get_attribute($this->env, $this->source, $context["trip"], "tripFull", [], "any", false, false, false, 21)) ? (print ("Complet")) : (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["trip"], "duration", [], "any", false, false, false, 21), "html", null, true))));
                echo "</p></div>
                    <div class=\"row\">
                        <div class=\"col-3 d-flex align-items-end flex-column justify-content-around p-3\">
                            <p><strong>";
                // line 24
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["trip"], "startTime", [], "any", false, false, false, 24), "H:i"), "html", null, true);
                echo "</strong></p>
                            <p class=\"d-flex justify-content-center font-control\">";
                // line 25
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["trip"], "distance", [], "any", false, false, false, 25), "html", null, true);
                echo " </p>
                            <p>heure</p>
                        </div>
                        <div class=\"col-9\">
                            <div class=\"line\">
                                <div class=\"line-content\">
                                    <div class=\"content\">
                                        <h1>";
                // line 32
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["trip"], "departure", [], "any", false, false, false, 32), "html", null, true);
                echo "</h1>
                                    </div>
                                    <div class=\"content\">
                                        <h1> ";
                // line 35
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["trip"], "arrival", [], "any", false, false, false, 35), "html", null, true);
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
                // line 45
                echo twig_escape_filter($this->env, ($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/uploads/profilePicture/") . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["trip"], "driver", [], "any", false, false, false, 45), "profile_picture", [], "any", false, false, false, 45)), "html", null, true);
                echo "\"/>
                    </div>
                      <div class=\"col d-flex  flex-column justify-content-center\">
                        <p class=\"font-control\">";
                // line 48
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["trip"], "driver", [], "any", false, false, false, 48), "firstName", [], "any", false, false, false, 48), "html", null, true);
                echo "</p>
                        ";
                // line 49
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["trip"], "driver", [], "any", false, false, false, 49), "globalRating", [], "any", false, false, false, 49)) {
                    // line 50
                    echo "                            <p class=\"font-control\"><i class=\"fas fa-star\"></i>";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["trip"], "driver", [], "any", false, false, false, 50), "globalRating", [], "any", false, false, false, 50), "html", null, true);
                    echo "</p>
                        ";
                } else {
                    // line 52
                    echo "                            <p class=\"font-control-rating\"><i class=\"fas fa-star\"></i> Premier trajet</p>
                        ";
                }
                // line 54
                echo "                    </div>
                    <div class=\"col d-flex justify-content-start align-items-center font-control fas fa-chevron-right\"></div>
                    <div class=\"col d-flex align-items-center flex-column justify-content-center \"><strong>";
                // line 56
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["trip"], "passengers", [], "any", false, false, false, 56), "html", null, true);
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
            // line 63
            echo "








";
        } else {
            // line 73
            echo "        <div class=\"container\">
           <h2 class=\"mt-5 text-center red-text\"> Désolé ! Aucun voyage n'a été trouver </h2>
        </div>
";
        }
        // line 77
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
        return array (  221 => 77,  215 => 73,  203 => 63,  190 => 56,  186 => 54,  182 => 52,  176 => 50,  174 => 49,  170 => 48,  164 => 45,  151 => 35,  145 => 32,  135 => 25,  131 => 24,  125 => 21,  121 => 19,  116 => 17,  113 => 16,  108 => 13,  105 => 12,  101 => 11,  98 => 10,  96 => 9,  91 => 7,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Trajet trouvé{% endblock %}

{% block body %}
<h1 class=\"text-center m-5\"> Trajet trouvé</h1>
{{dump(tripFound)}}

{% if tripFound is defined %}

    {% for trip in tripFound %}
        {% if trip.tripFull %}
            <div class=\"card-custom-found disabled\">
            <a class=\"global-card-found \" href=\"\">
        {% else %}
             <div class=\"card-custom-found\">
            <a class=\"global-card-found\" href=\"{{path('trip_details', {'id': trip.id})}}\">
        {% endif %}
            <div class=\"plan-found\">
                <div class=\"timeline\">
                    <div class=\"d-flex justify-content-end\"><p>{{trip.tripFull ? \"Complet\" : trip.duration}}</p></div>
                    <div class=\"row\">
                        <div class=\"col-3 d-flex align-items-end flex-column justify-content-around p-3\">
                            <p><strong>{{trip.startTime|date('H:i')}}</strong></p>
                            <p class=\"d-flex justify-content-center font-control\">{{trip.distance}} </p>
                            <p>heure</p>
                        </div>
                        <div class=\"col-9\">
                            <div class=\"line\">
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
                </div>
                    <span class=\"custom-separator\"></span>
                <div class=\"row card-found-profile\">
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
                    <div class=\"col d-flex justify-content-start align-items-center font-control fas fa-chevron-right\"></div>
                    <div class=\"col d-flex align-items-center flex-column justify-content-center \"><strong>{{trip.passengers}}</strong><i class=\"fas fa-user-friends\"></i></div>
                </div>
            </div>
        </a>
        </div>

    {% endfor %}









{% else %}
        <div class=\"container\">
           <h2 class=\"mt-5 text-center red-text\"> Désolé ! Aucun voyage n'a été trouver </h2>
        </div>
{% endif %}

{% endblock %}", "trip/trip_found.html.twig", "/shared/httpd/Projet-Final/templates/trip/trip_found.html.twig");
    }
}

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
                echo "
        <div class=\"card-custom-found\">
            <div class=\"plan-found\">
                <div class=\"timeline\">
                    <div class=\"d-flex justify-content-end\"><p>";
                // line 16
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["trip"], "duration", [], "any", false, false, false, 16), "html", null, true);
                echo "</p></div>
                    <div class=\"row\">
                        <div class=\"col-3 d-flex align-items-end flex-column justify-content-around p-3\">
                            <p>Heure</p>
                            <p class=\"d-flex justify-content-center font-control\">";
                // line 20
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["trip"], "distance", [], "any", false, false, false, 20), "html", null, true);
                echo " </p>
                            <p>heure</p>
                        </div>
                        <div class=\"col-9\">
                            <div class=\"line\">
                                <div class=\"line-content\">
                                    <div class=\"content\">
                                        <h1>";
                // line 27
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["trip"], "departure", [], "any", false, false, false, 27), "html", null, true);
                echo "</h1>
                                        ";
                // line 29
                echo "                                    </div>
                                    <div class=\"content\">
                                        <h1> ";
                // line 31
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["trip"], "arrival", [], "any", false, false, false, 31), "html", null, true);
                echo "</h1>
                                        ";
                // line 33
                echo "                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                    <span class=\"custom-separator\"></span>
                <div class=\"row card-found-profile\">
                    <div class=\"col\">
                        <a href=\"";
                // line 42
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_view_profile", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["trip"], "driver", [], "any", false, false, false, 42), "id", [], "any", false, false, false, 42)]), "html", null, true);
                echo "\" ><img class=\"img-card\"src=\"";
                echo twig_escape_filter($this->env, ($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/uploads/profilePicture/") . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["trip"], "driver", [], "any", false, false, false, 42), "profile_picture", [], "any", false, false, false, 42)), "html", null, true);
                echo "\"/></a>
                    </div>
                      <div class=\"col d-flex  flex-column justify-content-center\">
                        <p class=\"font-control\">";
                // line 45
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["trip"], "driver", [], "any", false, false, false, 45), "firstName", [], "any", false, false, false, 45), "html", null, true);
                echo "</p>
                        ";
                // line 46
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["trip"], "driver", [], "any", false, false, false, 46), "globalRating", [], "any", false, false, false, 46)) {
                    // line 47
                    echo "                            <p class=\"font-control\"><i class=\"fas fa-star\"></i>";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["trip"], "driver", [], "any", false, false, false, 47), "globalRating", [], "any", false, false, false, 47), "html", null, true);
                    echo "</p>
                        ";
                } else {
                    // line 49
                    echo "                            <p class=\"font-control-rating\"><i class=\"fas fa-star\"></i> Premier trajet</p>
                        ";
                }
                // line 51
                echo "                    </div>
                    <div class=\"col d-flex justify-content-start align-items-center font-control fas fa-chevron-right\"></div>
                    <div class=\"col\"></div>
                    <div class=\"col d-flex align-items-center flex-column justify-content-center \"><strong>";
                // line 54
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["trip"], "passengers", [], "any", false, false, false, 54), "html", null, true);
                echo "</strong><i class=\"fas fa-user-friends\"></i></div>
                </div>
            </div>
        </div>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trip'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 59
            echo "








";
        } else {
            // line 69
            echo "        <div class=\"container\">
           <h2 class=\"mt-5 text-center red-text\"> Désolé ! Aucun voyage n'a été trouver </h2>
        </div>
";
        }
        // line 73
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
        return array (  206 => 73,  200 => 69,  188 => 59,  177 => 54,  172 => 51,  168 => 49,  162 => 47,  160 => 46,  156 => 45,  148 => 42,  137 => 33,  133 => 31,  129 => 29,  125 => 27,  115 => 20,  108 => 16,  102 => 12,  98 => 11,  95 => 10,  93 => 9,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Trajet trouvé{% endblock %}

{% block body %}
<h1 class=\"text-center m-5\"> Trajet trouvé</h1>


{% if tripFound is defined %}

    {% for trip in tripFound %}

        <div class=\"card-custom-found\">
            <div class=\"plan-found\">
                <div class=\"timeline\">
                    <div class=\"d-flex justify-content-end\"><p>{{trip.duration}}</p></div>
                    <div class=\"row\">
                        <div class=\"col-3 d-flex align-items-end flex-column justify-content-around p-3\">
                            <p>Heure</p>
                            <p class=\"d-flex justify-content-center font-control\">{{trip.distance}} </p>
                            <p>heure</p>
                        </div>
                        <div class=\"col-9\">
                            <div class=\"line\">
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
                </div>
                    <span class=\"custom-separator\"></span>
                <div class=\"row card-found-profile\">
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
                    <div class=\"col\"></div>
                    <div class=\"col d-flex align-items-center flex-column justify-content-center \"><strong>{{trip.passengers}}</strong><i class=\"fas fa-user-friends\"></i></div>
                </div>
            </div>
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

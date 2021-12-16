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

/* home/index.html.twig */
class __TwigTemplate_93a4719728c36b2659256272a43424c23836accf747eb6edda27542d013f33dd extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "home/index.html.twig", 1);
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

        echo "Accueil";
        
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
        echo "    <style>
        .example-wrapper { margin: 1em auto; max-width: 800px; width: 95%; font: 18px/1.5 sans-serif; }
        .example-wrapper code { background: #F5F5F5; padding: 2px 6px; }
    </style>
    <div class=\"home\">
        <div class=\"hero d-flex align-items-center justify-content-center border-bottom \">
            <div class=\"page-header text-center\">
                <h1 class=\"display-1 text-white fw-bold mb-0\">Vamos !</h1>
                <h2 class=\"fw-light display-4 mt-0 mb-5\" id=\"header2\">Voyager, rencontrer, partager !</h2>
                <div class=\"main\">
                    <form action=\"";
        // line 16
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("trip_search");
        echo "\">
                        <div class=\"form-row my-5\">
                            <div class=\"col-md-3 col-sm-6 mt-3\">
                            <input name=\"departureSearch\" type=\"text\" class=\"custom-field-form\" placeholder=\"Départ\">
                            </div>
                            <div class=\"col-md-3 col-sm-6 mt-3\">
                            <input name=\"arrivalSearch\" type=\"text\" class=\"custom-field-form\" placeholder=\"Arrivé\">
                            </div>
                            <div class=\"col-md-3 col-sm-6 mt-3\">
                            <input name=\"dateSearch\" type=\"date\" class=\"custom-field-form\" placeholder=\"DATE\">
                            </div>
                            <button class=\"button-update-profile col-md-3 col-sm-6 mt-3\" type=\"submit\">Rechercher</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
         <div class=\"container mt-5\">
            <div class=\"row\">
                <div class=\"d-flex justify-content-center\">
                    <h2>Nos Objectifs</h3>
                </div>
            </div>
        </div>
        <div class=\"container info-objectif\">
            <div class=\"row d-flex justify-content-around px-5\">
                <div class=\"col-sm-3 col-xs-12 px-3 d-flex flex-column align-item-center\">
                    <i class=\"fas fa-road align-self-center mt-4 py-4\"></i> 
                    <h4 class=\"text-center\">Voyage voyage !</h4>
                    <p class=\"text-justify\">
                        En tant qu'utilisateur, vous devenez acteur de la communauté de Vamos, proposant de partager vos trajets favoris! Le voyage c'est bien, à plusieurs, c'est mieux ! 
                    </p>
                </div>
                <div class=\"col-sm-3 col-xs-12 px-3 d-flex flex-column align-item-center \">
                    <i class=\"fas fa-user-friends align-self-center mt-4 py-4\"></i> 
                    <h4 class=\"text-center\">Rencontré d'autre utilisateur</h4>
                    <p class=\"text-justify\">
                        Vous pouvez prendre contact avec les utilisateurs qui comptent partager votre route !
                    </p>
                </div>
                <div class=\"col-sm-3 col-xs-12 px-3 d-flex flex-column align-item-center\">
                <i class=\"fas fa-umbrella-beach align-self-center mt-4 py-4\"></i> 
                    <h4 class=\"text-center\">Partagé un moment conviviale</h4>
                    <p class=\"text-justify\">
                        Vamos est très à l'écoute du retour de ses utilisateurs afin de leur proposer les trajets qui leur conviennent le mieux, dans une ambiance conviviale et bienveillante !   
                    </p>
                </div>
                </div>
                </div>
            </div>
        </div>
        <div class=\"main-research-section\">
            <div class=\"row justify-content-center\">
                <h2 class=\"text-center\">Publier vos trajets !</h2>
                <p class=\"text-center\">
                    Proposer de partager vos trajets à travers toute la France ! 
                </p>
                    <a class=\"main-publication-button\" href=\"";
        // line 73
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("trip_search");
        echo "\">
                        <div class=\"card-publication-button justify-content-center\">
                            <i class=\"fas fa-map-marked-alt\"></i>
                            <p class=\"m-0 pt-2\">Je publie un trajet</p>
                        </div>
                    </a>
            </div>
        </div>
        <div class=\"main-about\">
            <div class=\"about-section\">
                <div class=\"inner-container\">
                    <h1>A propos de nous</h1>
                    <p class=\"text\">
                        Vamos est une plateforme de covoiturage proposant aux membres de sa communauté de poster leurs trajets afin de les partager avec d'autres utilisateurs. Chaques membres deviens alors acteurs de la vie de la plateforme. 
                    </p>
                    <div class=\"skills\">
                        
                    </div>
                </div>
            </div>
        </div>
        <h2 class=\"text-center my-3\">Les derniers trajets publier</h2>
           <div class=\"p-3\">
                <div class=\"row justify-content-center\">
                    ";
        // line 97
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tripList"]) || array_key_exists("tripList", $context) ? $context["tripList"] : (function () { throw new RuntimeError('Variable "tripList" does not exist.', 97, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["trip"]) {
            // line 98
            echo "                        <div class=\"col-10 col-md-4 \">
                            ";
            // line 99
            if (twig_get_attribute($this->env, $this->source, $context["trip"], "tripFull", [], "any", false, false, false, 99)) {
                // line 100
                echo "                                <div class=\"card-custom-found disabled w-100\">
                                    <a class=\"global-card-found\" href=\"\">
                                ";
            } elseif (((0 === twig_compare(twig_get_attribute($this->env, $this->source,             // line 102
$context["trip"], "tripStarted", [], "any", false, false, false, 102), true)) && (0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["trip"], "tripCompleted", [], "any", false, false, false, 102), false)))) {
                // line 103
                echo "                                <div class=\"card-custom-found disabled w-100\">
                                    <a class=\"global-card-found\" href=\"\">
                                ";
            } elseif (((0 === twig_compare(twig_get_attribute($this->env, $this->source,             // line 105
$context["trip"], "tripStarted", [], "any", false, false, false, 105), true)) && (0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["trip"], "tripCompleted", [], "any", false, false, false, 105), true)))) {
                // line 106
                echo "                                <div class=\"card-custom-found disabled w-100\">
                                    <a class=\"global-card-found\" href=\"\">
                                ";
            } else {
                // line 109
                echo "                                <div class=\"card-custom-found w-100\">
                                    <a class=\"global-card-found\" href=\"";
                // line 110
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("trip_details", ["id" => twig_get_attribute($this->env, $this->source, $context["trip"], "id", [], "any", false, false, false, 110)]), "html", null, true);
                echo "\">
                                ";
            }
            // line 112
            echo "                                    <div class=\"plan-found p-0\">
                                        <div class=\"timeline\">
                                            ";
            // line 114
            if (((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["trip"], "tripFull", [], "any", false, false, false, 114), true)) && (0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["trip"], "tripStarted", [], "any", false, false, false, 114), false)))) {
                // line 115
                echo "                                                <div class=\"d-flex justify-content-end\"><h4>Complet</h4></div>
                                                ";
            } elseif (((0 === twig_compare(twig_get_attribute($this->env, $this->source,             // line 116
$context["trip"], "tripStarted", [], "any", false, false, false, 116), true)) && (0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["trip"], "tripCompleted", [], "any", false, false, false, 116), false)))) {
                // line 117
                echo "                                                <div class=\"d-flex justify-content-end\"><h4>Trajet en cours</h4></div>
                                                ";
            } elseif (((0 === twig_compare(twig_get_attribute($this->env, $this->source,             // line 118
$context["trip"], "tripStarted", [], "any", false, false, false, 118), true)) && (0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["trip"], "tripCompleted", [], "any", false, false, false, 118), true)))) {
                // line 119
                echo "                                                <div class=\"d-flex justify-content-end\"><h4>Terminé</h4></div>
                                                ";
            } else {
                // line 121
                echo "                                            ";
            }
            // line 122
            echo "                                            <div class=\"d-flex justify-content-end\"><p>";
            ((twig_get_attribute($this->env, $this->source, $context["trip"], "tripFull", [], "any", false, false, false, 122)) ? (print ("Complet")) : (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["trip"], "duration", [], "any", false, false, false, 122), "html", null, true))));
            echo "</p></div>
                                            <div class=\"row\">
                                                <div class=\"col-3 d-flex align-items-end flex-column justify-content-around p-3\">
                                                    <p><strong>";
            // line 125
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["trip"], "startTime", [], "any", false, false, false, 125), "H:i"), "html", null, true);
            echo "</strong></p>
                                                    <p class=\"d-flex justify-content-center font-control\">";
            // line 126
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["trip"], "distance", [], "any", false, false, false, 126), "html", null, true);
            echo " </p>
                                                    ";
            // line 127
            $context["hour"] = twig_replace_filter(twig_get_attribute($this->env, $this->source, $context["trip"], "duration", [], "any", false, false, false, 127), ["heure" => "hour"]);
            // line 128
            echo "                                                    <p class=\"pt-3\"><strong>";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_date_modify_filter($this->env, twig_get_attribute($this->env, $this->source, $context["trip"], "startTime", [], "any", false, false, false, 128), ("+" . (isset($context["hour"]) || array_key_exists("hour", $context) ? $context["hour"] : (function () { throw new RuntimeError('Variable "hour" does not exist.', 128, $this->source); })()))), "H:i"), "html", null, true);
            echo "</strong></p>
                                                </div>
                                                <div class=\"col-9\">
                                                    <div class=\"line\">
                                                        <div class=\"line-content\">
                                                            <div class=\"content\">
                                                                <h1>";
            // line 134
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["trip"], "departure", [], "any", false, false, false, 134), "html", null, true);
            echo "</h1>
                                                            </div>
                                                            <div class=\"content\">
                                                                <h1> ";
            // line 137
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["trip"], "arrival", [], "any", false, false, false, 137), "html", null, true);
            echo "</h1>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                            <span class=\"custom-separator\"></span>
                                        <div class=\"row card-found-profile\">                                  
                                            <div class=\"col d-flex justify-content-start align-items-center font-control fas fa-chevron-right\"></div>
                                            
                                            <div class=\"col d-flex align-items-center flex-column justify-content-center \"><p class=\"mt-2\">Places restantes : </p><strong>";
            // line 148
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["trip"], "passengers", [], "any", false, false, false, 148), "html", null, true);
            echo "</strong><i class=\"fas fa-user-friends\"></i></div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trip'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 155
        echo "                </div>
            </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "home/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  304 => 155,  291 => 148,  277 => 137,  271 => 134,  261 => 128,  259 => 127,  255 => 126,  251 => 125,  244 => 122,  241 => 121,  237 => 119,  235 => 118,  232 => 117,  230 => 116,  227 => 115,  225 => 114,  221 => 112,  216 => 110,  213 => 109,  208 => 106,  206 => 105,  202 => 103,  200 => 102,  196 => 100,  194 => 99,  191 => 98,  187 => 97,  160 => 73,  100 => 16,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Accueil{% endblock %}

{% block body %}
    <style>
        .example-wrapper { margin: 1em auto; max-width: 800px; width: 95%; font: 18px/1.5 sans-serif; }
        .example-wrapper code { background: #F5F5F5; padding: 2px 6px; }
    </style>
    <div class=\"home\">
        <div class=\"hero d-flex align-items-center justify-content-center border-bottom \">
            <div class=\"page-header text-center\">
                <h1 class=\"display-1 text-white fw-bold mb-0\">Vamos !</h1>
                <h2 class=\"fw-light display-4 mt-0 mb-5\" id=\"header2\">Voyager, rencontrer, partager !</h2>
                <div class=\"main\">
                    <form action=\"{{path('trip_search')}}\">
                        <div class=\"form-row my-5\">
                            <div class=\"col-md-3 col-sm-6 mt-3\">
                            <input name=\"departureSearch\" type=\"text\" class=\"custom-field-form\" placeholder=\"Départ\">
                            </div>
                            <div class=\"col-md-3 col-sm-6 mt-3\">
                            <input name=\"arrivalSearch\" type=\"text\" class=\"custom-field-form\" placeholder=\"Arrivé\">
                            </div>
                            <div class=\"col-md-3 col-sm-6 mt-3\">
                            <input name=\"dateSearch\" type=\"date\" class=\"custom-field-form\" placeholder=\"DATE\">
                            </div>
                            <button class=\"button-update-profile col-md-3 col-sm-6 mt-3\" type=\"submit\">Rechercher</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
         <div class=\"container mt-5\">
            <div class=\"row\">
                <div class=\"d-flex justify-content-center\">
                    <h2>Nos Objectifs</h3>
                </div>
            </div>
        </div>
        <div class=\"container info-objectif\">
            <div class=\"row d-flex justify-content-around px-5\">
                <div class=\"col-sm-3 col-xs-12 px-3 d-flex flex-column align-item-center\">
                    <i class=\"fas fa-road align-self-center mt-4 py-4\"></i> 
                    <h4 class=\"text-center\">Voyage voyage !</h4>
                    <p class=\"text-justify\">
                        En tant qu'utilisateur, vous devenez acteur de la communauté de Vamos, proposant de partager vos trajets favoris! Le voyage c'est bien, à plusieurs, c'est mieux ! 
                    </p>
                </div>
                <div class=\"col-sm-3 col-xs-12 px-3 d-flex flex-column align-item-center \">
                    <i class=\"fas fa-user-friends align-self-center mt-4 py-4\"></i> 
                    <h4 class=\"text-center\">Rencontré d'autre utilisateur</h4>
                    <p class=\"text-justify\">
                        Vous pouvez prendre contact avec les utilisateurs qui comptent partager votre route !
                    </p>
                </div>
                <div class=\"col-sm-3 col-xs-12 px-3 d-flex flex-column align-item-center\">
                <i class=\"fas fa-umbrella-beach align-self-center mt-4 py-4\"></i> 
                    <h4 class=\"text-center\">Partagé un moment conviviale</h4>
                    <p class=\"text-justify\">
                        Vamos est très à l'écoute du retour de ses utilisateurs afin de leur proposer les trajets qui leur conviennent le mieux, dans une ambiance conviviale et bienveillante !   
                    </p>
                </div>
                </div>
                </div>
            </div>
        </div>
        <div class=\"main-research-section\">
            <div class=\"row justify-content-center\">
                <h2 class=\"text-center\">Publier vos trajets !</h2>
                <p class=\"text-center\">
                    Proposer de partager vos trajets à travers toute la France ! 
                </p>
                    <a class=\"main-publication-button\" href=\"{{path('trip_search')}}\">
                        <div class=\"card-publication-button justify-content-center\">
                            <i class=\"fas fa-map-marked-alt\"></i>
                            <p class=\"m-0 pt-2\">Je publie un trajet</p>
                        </div>
                    </a>
            </div>
        </div>
        <div class=\"main-about\">
            <div class=\"about-section\">
                <div class=\"inner-container\">
                    <h1>A propos de nous</h1>
                    <p class=\"text\">
                        Vamos est une plateforme de covoiturage proposant aux membres de sa communauté de poster leurs trajets afin de les partager avec d'autres utilisateurs. Chaques membres deviens alors acteurs de la vie de la plateforme. 
                    </p>
                    <div class=\"skills\">
                        
                    </div>
                </div>
            </div>
        </div>
        <h2 class=\"text-center my-3\">Les derniers trajets publier</h2>
           <div class=\"p-3\">
                <div class=\"row justify-content-center\">
                    {% for trip in tripList %}
                        <div class=\"col-10 col-md-4 \">
                            {% if trip.tripFull %}
                                <div class=\"card-custom-found disabled w-100\">
                                    <a class=\"global-card-found\" href=\"\">
                                {% elseif trip.tripStarted == true and trip.tripCompleted == false %}
                                <div class=\"card-custom-found disabled w-100\">
                                    <a class=\"global-card-found\" href=\"\">
                                {% elseif trip.tripStarted == true and trip.tripCompleted == true %}
                                <div class=\"card-custom-found disabled w-100\">
                                    <a class=\"global-card-found\" href=\"\">
                                {% else %}
                                <div class=\"card-custom-found w-100\">
                                    <a class=\"global-card-found\" href=\"{{path('trip_details', {'id': trip.id})}}\">
                                {% endif %}
                                    <div class=\"plan-found p-0\">
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
                                                                <h1> {{trip.arrival}}</h1>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                            <span class=\"custom-separator\"></span>
                                        <div class=\"row card-found-profile\">                                  
                                            <div class=\"col d-flex justify-content-start align-items-center font-control fas fa-chevron-right\"></div>
                                            
                                            <div class=\"col d-flex align-items-center flex-column justify-content-center \"><p class=\"mt-2\">Places restantes : </p><strong>{{trip.passengers}}</strong><i class=\"fas fa-user-friends\"></i></div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    {% endfor %}
                </div>
            </div>
    </div>
{% endblock %}
", "home/index.html.twig", "/shared/httpd/Projet-Final/templates/home/index.html.twig");
    }
}

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
                <h1 class=\"display-1 text-white fw-bold mb-0\">CarcarBla</h1>
                <h2 class=\"fw-light display-4 mt-0 mb-5\" id=\"header2\">Voyager, rencontrer, partager !</h2>

                <div class=\"main\">
                    <form action=\"";
        // line 17
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("trip_search");
        echo "\">
                        <div class=\"form-row my-5\">
                            <div class=\"col-md-3 col-sm-6 mt-3\">
                            <input name=\"departureSearch\" type=\"text\" class=\"form-control\" placeholder=\"Départ\">
                            </div>
                            <div class=\"col-md-3 col-sm-6 mt-3\">
                            <input name=\"arrivalSearch\" type=\"text\" class=\"form-control\" placeholder=\"Arrivé\">
                            </div>
                            <div class=\"col-md-3 col-sm-6 mt-3\">
                            <input name=\"dateSearch\" type=\"date\" class=\"form-control\" placeholder=\"DATE\">
                            </div>
                            <button class=\"btn home-search col-md-3 col-sm-6 mt-3\" type=\"submit\">Rechercher</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
         <div class=\"container mt-5\">
            <div class=\"row\">
                <div class=\"d-flex justify-content-center\">
                    <h3>Nos Objectifs</h3>
                </div>
            </div>
        </div>
        <div class=\"container mb-5\">
            <div class=\"row\">
                <div class=\"col d-flex flex-column justify-content-center\">
                    <i class=\"fas fa-road align-self-center mt-4 py-4\"></i> 
                    <h4>Vos trajets préférés à petits prix</h4>
                    <p>
                        Où que vous alliez, en bus ou en covoiturage, trouvez le trajet idéal parmi notre large choix de         destinations à petits prix.
                    </p>
                </div>
                <div class=\"col d-flex flex-column justify-content-center \">
                    <i class=\"fas fa-road align-self-center mt-4 py-4\"></i> 
                    <h4>Vos trajets préférés à petits prix</h4>
                    <p>
                        Où que vous alliez, en bus ou en covoiturage, trouvez le trajet idéal parmi notre large choix de         destinations à petits prix.
                    </p>
                </div>
                <div class=\"col d-flex flex-column justify-content-center\">
                <i class=\"fas fa-road align-self-center mt-4 py-4\"></i> 
                    <h4>Vos trajets préférés à petits prix</h4>
                    <p>
                        Où que vous alliez, en bus ou en covoiturage, trouvez le trajet idéal parmi notre large choix de         destinations à petits prix.
                    </p>
                </div>
                </div>
                </div>
            </div>
        </div>
        <div class=\"main-about\">
            <div class=\"about-section\">
                <div class=\"inner-container\">
                    <h1>About Us</h1>
                    <p class=\"text\">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus velit ducimus, enim inventore earum, eligendi nostrum pariatur necessitatibus eius dicta a voluptates sit deleniti autem error eos totam nisi neque voluptates sit deleniti autem error eos totam nisi neque.
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
        // line 84
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tripList"]) || array_key_exists("tripList", $context) ? $context["tripList"] : (function () { throw new RuntimeError('Variable "tripList" does not exist.', 84, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["trip"]) {
            // line 85
            echo "                        <div class=\"col-10 col-md-4 \">
                            ";
            // line 86
            if (twig_get_attribute($this->env, $this->source, $context["trip"], "tripFull", [], "any", false, false, false, 86)) {
                // line 87
                echo "                                <div class=\"card-custom-found disabled w-100\">
                                    <a class=\"global-card-found \" href=\"\">
                                ";
            } elseif (((0 === twig_compare(twig_get_attribute($this->env, $this->source,             // line 89
$context["trip"], "tripStarted", [], "any", false, false, false, 89), true)) && (0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["trip"], "tripCompleted", [], "any", false, false, false, 89), false)))) {
                // line 90
                echo "                                <div class=\"card-custom-found disabled w-100\">
                                    <a class=\"global-card-found \" href=\"\">
                                ";
            } elseif (((0 === twig_compare(twig_get_attribute($this->env, $this->source,             // line 92
$context["trip"], "tripStarted", [], "any", false, false, false, 92), true)) && (0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["trip"], "tripCompleted", [], "any", false, false, false, 92), true)))) {
                // line 93
                echo "                                <div class=\"card-custom-found disabled w-100\">
                                    <a class=\"global-card-found \" href=\"\">
                                ";
            } else {
                // line 96
                echo "                                <div class=\"card-custom-found w-100\">
                                    <a class=\"global-card-found\" href=\"";
                // line 97
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("trip_details", ["id" => twig_get_attribute($this->env, $this->source, $context["trip"], "id", [], "any", false, false, false, 97)]), "html", null, true);
                echo "\">
                                ";
            }
            // line 99
            echo "                                    <div class=\"plan-found p-0\">
                                        <div class=\"timeline\">
                                            ";
            // line 101
            if (((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["trip"], "tripFull", [], "any", false, false, false, 101), true)) && (0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["trip"], "tripStarted", [], "any", false, false, false, 101), false)))) {
                // line 102
                echo "                                                <div class=\"d-flex justify-content-end\"><h4>Complet</h4></div>
                                                ";
            } elseif (((0 === twig_compare(twig_get_attribute($this->env, $this->source,             // line 103
$context["trip"], "tripStarted", [], "any", false, false, false, 103), true)) && (0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["trip"], "tripCompleted", [], "any", false, false, false, 103), false)))) {
                // line 104
                echo "                                                <div class=\"d-flex justify-content-end\"><h4>Trajet en cours</h4></div>
                                                ";
            } elseif (((0 === twig_compare(twig_get_attribute($this->env, $this->source,             // line 105
$context["trip"], "tripStarted", [], "any", false, false, false, 105), true)) && (0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["trip"], "tripCompleted", [], "any", false, false, false, 105), true)))) {
                // line 106
                echo "                                                <div class=\"d-flex justify-content-end\"><h4>Terminé</h4></div>
                                                ";
            } else {
                // line 108
                echo "                                            ";
            }
            // line 109
            echo "                                            <div class=\"d-flex justify-content-end\"><p>";
            ((twig_get_attribute($this->env, $this->source, $context["trip"], "tripFull", [], "any", false, false, false, 109)) ? (print ("Complet")) : (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["trip"], "duration", [], "any", false, false, false, 109), "html", null, true))));
            echo "</p></div>
                                            <div class=\"row\">
                                                <div class=\"col-3 d-flex align-items-end flex-column justify-content-around p-3\">
                                                    <p><strong>";
            // line 112
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["trip"], "startTime", [], "any", false, false, false, 112), "H:i"), "html", null, true);
            echo "</strong></p>
                                                    <p class=\"d-flex justify-content-center font-control\">";
            // line 113
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["trip"], "distance", [], "any", false, false, false, 113), "html", null, true);
            echo " </p>
                                                    ";
            // line 114
            $context["hour"] = twig_replace_filter(twig_get_attribute($this->env, $this->source, $context["trip"], "duration", [], "any", false, false, false, 114), ["heure" => "hour"]);
            // line 115
            echo "                                                    <p class=\"pt-3\"><strong>";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_date_modify_filter($this->env, twig_get_attribute($this->env, $this->source, $context["trip"], "startTime", [], "any", false, false, false, 115), ("+" . (isset($context["hour"]) || array_key_exists("hour", $context) ? $context["hour"] : (function () { throw new RuntimeError('Variable "hour" does not exist.', 115, $this->source); })()))), "H:i"), "html", null, true);
            echo "</strong></p>
                                                </div>
                                                <div class=\"col-9\">
                                                    <div class=\"line\">
                                                        <div class=\"line-content\">
                                                            <div class=\"content\">
                                                                <h1>";
            // line 121
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["trip"], "departure", [], "any", false, false, false, 121), "html", null, true);
            echo "</h1>
                                                            </div>
                                                            <div class=\"content\">
                                                                <h1> ";
            // line 124
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["trip"], "arrival", [], "any", false, false, false, 124), "html", null, true);
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
            // line 135
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["trip"], "passengers", [], "any", false, false, false, 135), "html", null, true);
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
        // line 142
        echo "                </div>
            </div>
    </div>
    <div class=\"\" style=\"margin-top: 10rem;\">
    
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
        return array (  288 => 142,  275 => 135,  261 => 124,  255 => 121,  245 => 115,  243 => 114,  239 => 113,  235 => 112,  228 => 109,  225 => 108,  221 => 106,  219 => 105,  216 => 104,  214 => 103,  211 => 102,  209 => 101,  205 => 99,  200 => 97,  197 => 96,  192 => 93,  190 => 92,  186 => 90,  184 => 89,  180 => 87,  178 => 86,  175 => 85,  171 => 84,  101 => 17,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
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
                <h1 class=\"display-1 text-white fw-bold mb-0\">CarcarBla</h1>
                <h2 class=\"fw-light display-4 mt-0 mb-5\" id=\"header2\">Voyager, rencontrer, partager !</h2>

                <div class=\"main\">
                    <form action=\"{{path('trip_search')}}\">
                        <div class=\"form-row my-5\">
                            <div class=\"col-md-3 col-sm-6 mt-3\">
                            <input name=\"departureSearch\" type=\"text\" class=\"form-control\" placeholder=\"Départ\">
                            </div>
                            <div class=\"col-md-3 col-sm-6 mt-3\">
                            <input name=\"arrivalSearch\" type=\"text\" class=\"form-control\" placeholder=\"Arrivé\">
                            </div>
                            <div class=\"col-md-3 col-sm-6 mt-3\">
                            <input name=\"dateSearch\" type=\"date\" class=\"form-control\" placeholder=\"DATE\">
                            </div>
                            <button class=\"btn home-search col-md-3 col-sm-6 mt-3\" type=\"submit\">Rechercher</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
         <div class=\"container mt-5\">
            <div class=\"row\">
                <div class=\"d-flex justify-content-center\">
                    <h3>Nos Objectifs</h3>
                </div>
            </div>
        </div>
        <div class=\"container mb-5\">
            <div class=\"row\">
                <div class=\"col d-flex flex-column justify-content-center\">
                    <i class=\"fas fa-road align-self-center mt-4 py-4\"></i> 
                    <h4>Vos trajets préférés à petits prix</h4>
                    <p>
                        Où que vous alliez, en bus ou en covoiturage, trouvez le trajet idéal parmi notre large choix de         destinations à petits prix.
                    </p>
                </div>
                <div class=\"col d-flex flex-column justify-content-center \">
                    <i class=\"fas fa-road align-self-center mt-4 py-4\"></i> 
                    <h4>Vos trajets préférés à petits prix</h4>
                    <p>
                        Où que vous alliez, en bus ou en covoiturage, trouvez le trajet idéal parmi notre large choix de         destinations à petits prix.
                    </p>
                </div>
                <div class=\"col d-flex flex-column justify-content-center\">
                <i class=\"fas fa-road align-self-center mt-4 py-4\"></i> 
                    <h4>Vos trajets préférés à petits prix</h4>
                    <p>
                        Où que vous alliez, en bus ou en covoiturage, trouvez le trajet idéal parmi notre large choix de         destinations à petits prix.
                    </p>
                </div>
                </div>
                </div>
            </div>
        </div>
        <div class=\"main-about\">
            <div class=\"about-section\">
                <div class=\"inner-container\">
                    <h1>About Us</h1>
                    <p class=\"text\">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus velit ducimus, enim inventore earum, eligendi nostrum pariatur necessitatibus eius dicta a voluptates sit deleniti autem error eos totam nisi neque voluptates sit deleniti autem error eos totam nisi neque.
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
                                    <a class=\"global-card-found \" href=\"\">
                                {% elseif trip.tripStarted == true and trip.tripCompleted == false %}
                                <div class=\"card-custom-found disabled w-100\">
                                    <a class=\"global-card-found \" href=\"\">
                                {% elseif trip.tripStarted == true and trip.tripCompleted == true %}
                                <div class=\"card-custom-found disabled w-100\">
                                    <a class=\"global-card-found \" href=\"\">
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
    <div class=\"\" style=\"margin-top: 10rem;\">
    
    </div>

{% endblock %}
", "home/index.html.twig", "/shared/httpd/Projet-Final/templates/home/index.html.twig");
    }
}

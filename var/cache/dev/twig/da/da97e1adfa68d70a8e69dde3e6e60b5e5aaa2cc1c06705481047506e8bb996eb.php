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

/* review/show.html.twig */
class __TwigTemplate_ff061d71e7303d95aecadd4d1553b4a22480e5889eb16c73dbb69417c083aa1e extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "review/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "review/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "review/show.html.twig", 1);
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

        echo "Mes avis";
        
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
<div class=\"container mt-5\">

<h2 class=\"text-center\"> Avis</h2>

    <ul class=\"nav nav-tabs\" role=\"tablist\">
        <li class=\"nav-item\">
            <a class=\"nav-link active\" data-toggle=\"tab\" href=\"#tabs-received\" role=\"tab\">Avis que vous avez reçu</a>
        </li>
        <li class=\"nav-item\">
            <a class=\"nav-link\" data-toggle=\"tab\" href=\"#tabs-send\" role=\"tab\">Avis que vous avez laisser</a>
        </li>
    </ul>
     <div class=\"tab-content\">
        <div class=\"tab-pane active\" id=\"tabs-received\" role=\"tabpanel\">
                <div class=\"container profile-section\">
                        ";
        // line 22
        if ((-1 === twig_compare(twig_length_filter($this->env, (isset($context["reviewReceived"]) || array_key_exists("reviewReceived", $context) ? $context["reviewReceived"] : (function () { throw new RuntimeError('Variable "reviewReceived" does not exist.', 22, $this->source); })())), 1))) {
            // line 23
            echo "                        <h4 class=\"text-center\">Vous n'avez reçu aucun avis pour l'instant</h4>
                         <div class=\"row d-flex justify-content-center\">
                            <img class=\"robot-sleeping-img\" src=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/uploads/custom-pic/robot-sleeping.png"), "html", null, true);
            echo "\">
                        </div>
                        ";
        } else {
            // line 28
            echo "                        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["reviewReceived"]) || array_key_exists("reviewReceived", $context) ? $context["reviewReceived"] : (function () { throw new RuntimeError('Variable "reviewReceived" does not exist.', 28, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["reviewReceive"]) {
                // line 29
                echo "                            <div class=\"card-review\">
                                <div class=\"reviews-list\">
                                    <div class=\"review-card\">
                                        <div class=\"review-header\">
                                            <div class=\"name-group\">
                                                <a class=\"d-flex\" href=\"";
                // line 34
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_show", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["reviewReceive"], "author", [], "any", false, false, false, 34), "id", [], "any", false, false, false, 34)]), "html", null, true);
                echo "\" >
                                                    <div class=\"initials\">
                                                        <img  class=\"img-review\" src=\"";
                // line 36
                echo twig_escape_filter($this->env, ($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/assets/uploads/profilePicture/") . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["reviewReceive"], "author", [], "any", false, false, false, 36), "profile_picture", [], "any", false, false, false, 36)), "html", null, true);
                echo "\">
                                                    </div>
                                                    <p class=\"d-flex align-items-center m-0\">";
                // line 38
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["reviewReceive"], "author", [], "any", false, false, false, 38), "firstName", [], "any", false, false, false, 38), "html", null, true);
                echo "</p>
                                                </a>
                                            </div>
                                            <div class=\"rating\">
                                                ";
                // line 42
                $context["items"] = twig_get_attribute($this->env, $this->source, $context["reviewReceive"], "rating", [], "any", false, false, false, 42);
                // line 43
                echo "                                                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["items"]) || array_key_exists("items", $context) ? $context["items"] : (function () { throw new RuntimeError('Variable "items" does not exist.', 43, $this->source); })())));
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 44
                    echo "                                                    <i id='one' class=\"fas fa-star\"></i>
                                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 46
                echo "                                            </div>
                                        </div>
                                        <div class=\"review-description\">
                                        ";
                // line 49
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reviewReceive"], "content", [], "any", false, false, false, 49), "html", null, true);
                echo "
                                        </div>
                                        <div class=\"review-details\">
                                            <div class=\"review-date\">";
                // line 52
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reviewReceive"], "createdAt", [], "any", false, false, false, 52), "H:i d M, Y"), "html", null, true);
                echo "</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['reviewReceive'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 58
            echo "                    ";
        }
        // line 59
        echo "                </div>
            </div>
            <div class=\"tab-pane\" id=\"tabs-send\" role=\"tabpanel\">
                <div class=\"container profile-section\">
                ";
        // line 63
        if ((-1 === twig_compare(twig_length_filter($this->env, (isset($context["reviewLeaved"]) || array_key_exists("reviewLeaved", $context) ? $context["reviewLeaved"] : (function () { throw new RuntimeError('Variable "reviewLeaved" does not exist.', 63, $this->source); })())), 1))) {
            // line 64
            echo "                    <h4 class=\"text-center\">Vous n'avez laissé aucun avis pour l'instant</h4>
                     <div class=\"row d-flex justify-content-center\">
                        <img class=\"robot-sleeping-img\" src=\"";
            // line 66
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/uploads/custom-pic/robot-sleeping.png"), "html", null, true);
            echo "\">
                    </div>
                ";
        } else {
            // line 69
            echo "                <h3>Avis Laisser</h3>
                    ";
            // line 70
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["reviewLeaved"]) || array_key_exists("reviewLeaved", $context) ? $context["reviewLeaved"] : (function () { throw new RuntimeError('Variable "reviewLeaved" does not exist.', 70, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["reviewLeave"]) {
                // line 71
                echo "                          <div class=\"card-review\">
                            <div class=\"reviews-list\">
                                <div class=\"review-card\">
                                    <div class=\"review-header\">
                                        <div class=\"name-group\">
                                            <div class=\"initials\"><img  class=\"img-review\" src=\"";
                // line 76
                echo twig_escape_filter($this->env, ($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/assets/uploads/profilePicture/") . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["reviewLeave"], "author", [], "any", false, false, false, 76), "profile_picture", [], "any", false, false, false, 76)), "html", null, true);
                echo "\"></div>
                                            <p>";
                // line 77
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["reviewLeave"], "author", [], "any", false, false, false, 77), "firstName", [], "any", false, false, false, 77), "html", null, true);
                echo "</p>
                                        </div>
                                        <div class=\"rating\">
                                        ";
                // line 80
                $context["items"] = twig_get_attribute($this->env, $this->source, $context["reviewLeave"], "rating", [], "any", false, false, false, 80);
                // line 81
                echo "                                        ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["items"]) || array_key_exists("items", $context) ? $context["items"] : (function () { throw new RuntimeError('Variable "items" does not exist.', 81, $this->source); })())));
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 82
                    echo "                                            <i id='one' class=\"fas fa-star\"></i>
                                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 84
                echo "                                        </div>
                                    </div>
                                    <div class=\"review-description\">
                                    ";
                // line 87
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reviewLeave"], "content", [], "any", false, false, false, 87), "html", null, true);
                echo "
                                    </div>
                                    <div class=\"review-details\">
                                        <div class=\"review-date\">";
                // line 90
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reviewLeave"], "createdAt", [], "any", false, false, false, 90), "H:i d M, Y"), "html", null, true);
                echo "</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['reviewLeave'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 96
            echo "                ";
        }
        // line 97
        echo "                </div>
            </div>
    </div>

</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "review/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  269 => 97,  266 => 96,  254 => 90,  248 => 87,  243 => 84,  236 => 82,  231 => 81,  229 => 80,  223 => 77,  219 => 76,  212 => 71,  208 => 70,  205 => 69,  199 => 66,  195 => 64,  193 => 63,  187 => 59,  184 => 58,  172 => 52,  166 => 49,  161 => 46,  154 => 44,  149 => 43,  147 => 42,  140 => 38,  135 => 36,  130 => 34,  123 => 29,  118 => 28,  112 => 25,  108 => 23,  106 => 22,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Mes avis{% endblock %}

{% block body %}

<div class=\"container mt-5\">

<h2 class=\"text-center\"> Avis</h2>

    <ul class=\"nav nav-tabs\" role=\"tablist\">
        <li class=\"nav-item\">
            <a class=\"nav-link active\" data-toggle=\"tab\" href=\"#tabs-received\" role=\"tab\">Avis que vous avez reçu</a>
        </li>
        <li class=\"nav-item\">
            <a class=\"nav-link\" data-toggle=\"tab\" href=\"#tabs-send\" role=\"tab\">Avis que vous avez laisser</a>
        </li>
    </ul>
     <div class=\"tab-content\">
        <div class=\"tab-pane active\" id=\"tabs-received\" role=\"tabpanel\">
                <div class=\"container profile-section\">
                        {% if reviewReceived|length < 1 %}
                        <h4 class=\"text-center\">Vous n'avez reçu aucun avis pour l'instant</h4>
                         <div class=\"row d-flex justify-content-center\">
                            <img class=\"robot-sleeping-img\" src=\"{{asset('assets/uploads/custom-pic/robot-sleeping.png')}}\">
                        </div>
                        {% else %}
                        {% for reviewReceive in reviewReceived %}
                            <div class=\"card-review\">
                                <div class=\"reviews-list\">
                                    <div class=\"review-card\">
                                        <div class=\"review-header\">
                                            <div class=\"name-group\">
                                                <a class=\"d-flex\" href=\"{{path('user_show', {'id' : reviewReceive.author.id })}}\" >
                                                    <div class=\"initials\">
                                                        <img  class=\"img-review\" src=\"{{asset ('/assets/uploads/profilePicture/') ~ reviewReceive.author.profile_picture }}\">
                                                    </div>
                                                    <p class=\"d-flex align-items-center m-0\">{{reviewReceive.author.firstName}}</p>
                                                </a>
                                            </div>
                                            <div class=\"rating\">
                                                {% set items = reviewReceive.rating %}
                                                {% for item in 1..items %}
                                                    <i id='one' class=\"fas fa-star\"></i>
                                                {% endfor %}
                                            </div>
                                        </div>
                                        <div class=\"review-description\">
                                        {{ reviewReceive.content }}
                                        </div>
                                        <div class=\"review-details\">
                                            <div class=\"review-date\">{{reviewReceive.createdAt|date(\"H:i d M, Y\")}}</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    {% endfor %}
                    {% endif %}
                </div>
            </div>
            <div class=\"tab-pane\" id=\"tabs-send\" role=\"tabpanel\">
                <div class=\"container profile-section\">
                {% if reviewLeaved|length < 1 %}
                    <h4 class=\"text-center\">Vous n'avez laissé aucun avis pour l'instant</h4>
                     <div class=\"row d-flex justify-content-center\">
                        <img class=\"robot-sleeping-img\" src=\"{{asset('assets/uploads/custom-pic/robot-sleeping.png')}}\">
                    </div>
                {% else %}
                <h3>Avis Laisser</h3>
                    {% for reviewLeave in reviewLeaved %}
                          <div class=\"card-review\">
                            <div class=\"reviews-list\">
                                <div class=\"review-card\">
                                    <div class=\"review-header\">
                                        <div class=\"name-group\">
                                            <div class=\"initials\"><img  class=\"img-review\" src=\"{{asset ('/assets/uploads/profilePicture/') ~ reviewLeave.author.profile_picture }}\"></div>
                                            <p>{{reviewLeave.author.firstName}}</p>
                                        </div>
                                        <div class=\"rating\">
                                        {% set items = reviewLeave.rating %}
                                        {% for item in 1..items %}
                                            <i id='one' class=\"fas fa-star\"></i>
                                        {% endfor %}
                                        </div>
                                    </div>
                                    <div class=\"review-description\">
                                    {{ reviewLeave.content }}
                                    </div>
                                    <div class=\"review-details\">
                                        <div class=\"review-date\">{{reviewLeave.createdAt|date(\"H:i d M, Y\")}}</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    {% endfor %}
                {% endif %}
                </div>
            </div>
    </div>

</div>
{% endblock %}
", "review/show.html.twig", "/shared/httpd/Projet-Final/templates/review/show.html.twig");
    }
}

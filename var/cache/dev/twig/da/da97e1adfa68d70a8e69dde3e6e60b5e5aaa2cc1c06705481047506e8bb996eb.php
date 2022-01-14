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
        echo "<div class=\"clear-section\">
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
        // line 20
        if ((-1 === twig_compare(twig_length_filter($this->env, (isset($context["reviewReceived"]) || array_key_exists("reviewReceived", $context) ? $context["reviewReceived"] : (function () { throw new RuntimeError('Variable "reviewReceived" does not exist.', 20, $this->source); })())), 1))) {
            // line 21
            echo "                        <h4 class=\"text-center\">Vous n'avez reçu aucun avis pour l'instant</h4>
                        <div class=\"row d-flex justify-content-center\">
                            <img class=\"robot-sleeping-img\" src=\"";
            // line 23
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/uploads/custom-pic/robot-sleeping.png"), "html", null, true);
            echo "\">
                        </div>
                        ";
        } else {
            // line 26
            echo "                        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["reviewReceived"]) || array_key_exists("reviewReceived", $context) ? $context["reviewReceived"] : (function () { throw new RuntimeError('Variable "reviewReceived" does not exist.', 26, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["reviewReceive"]) {
                // line 27
                echo "                            <div class=\"card-review\">
                                <div class=\"reviews-list\">
                                    <div class=\"review-card\">
                                        <div class=\"review-header\">
                                            <div class=\"name-group\">
                                                <a class=\"d-flex\" href=\"";
                // line 32
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_show", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["reviewReceive"], "author", [], "any", false, false, false, 32), "id", [], "any", false, false, false, 32)]), "html", null, true);
                echo "\" >
                                                    <div class=\"initials\">
                                                        <img  class=\"img-review\" src=\"";
                // line 34
                echo twig_escape_filter($this->env, ($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/assets/uploads/profilePicture/") . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["reviewReceive"], "author", [], "any", false, false, false, 34), "profile_picture", [], "any", false, false, false, 34)), "html", null, true);
                echo "\">
                                                    </div>
                                                    <p class=\"d-flex align-items-center m-0\">";
                // line 36
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["reviewReceive"], "author", [], "any", false, false, false, 36), "firstName", [], "any", false, false, false, 36), "html", null, true);
                echo "</p>
                                                </a>
                                            </div>
                                            <div class=\"rating\">
                                                ";
                // line 40
                $context["items"] = twig_get_attribute($this->env, $this->source, $context["reviewReceive"], "rating", [], "any", false, false, false, 40);
                // line 41
                echo "                                                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["items"]) || array_key_exists("items", $context) ? $context["items"] : (function () { throw new RuntimeError('Variable "items" does not exist.', 41, $this->source); })())));
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 42
                    echo "                                                    <i id='one' class=\"fas fa-star\"></i>
                                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 44
                echo "                                            </div>
                                        </div>
                                        <div class=\"review-description\">
                                            ";
                // line 47
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reviewReceive"], "content", [], "any", false, false, false, 47), "html", null, true);
                echo "
                                        </div>
                                        <div class=\"review-details\">
                                            <div class=\"review-date\">";
                // line 50
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reviewReceive"], "createdAt", [], "any", false, false, false, 50), "H:i d M, Y"), "html", null, true);
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
            // line 56
            echo "                    ";
        }
        // line 57
        echo "                </div>
            </div>
            <div class=\"tab-pane\" id=\"tabs-send\" role=\"tabpanel\">
                <div class=\"container profile-section\">
                ";
        // line 61
        if ((-1 === twig_compare(twig_length_filter($this->env, (isset($context["reviewLeaved"]) || array_key_exists("reviewLeaved", $context) ? $context["reviewLeaved"] : (function () { throw new RuntimeError('Variable "reviewLeaved" does not exist.', 61, $this->source); })())), 1))) {
            // line 62
            echo "                    <h4 class=\"text-center\">Vous n'avez laissé aucun avis pour l'instant</h4>
                    <div class=\"row d-flex justify-content-center\">
                        <img class=\"robot-sleeping-img\" src=\"";
            // line 64
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/uploads/custom-pic/robot-sleeping.png"), "html", null, true);
            echo "\">
                    </div>
                ";
        } else {
            // line 67
            echo "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["reviewLeaved"]) || array_key_exists("reviewLeaved", $context) ? $context["reviewLeaved"] : (function () { throw new RuntimeError('Variable "reviewLeaved" does not exist.', 67, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["reviewLeave"]) {
                // line 68
                echo "                        <div class=\"card-review\">
                            <div class=\"reviews-list\">
                                <div class=\"review-card\">
                                    <div class=\"review-header\">
                                        <div class=\"name-group\">
                                            <div class=\"initials\"><img  class=\"img-review\" src=\"";
                // line 73
                echo twig_escape_filter($this->env, ($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/assets/uploads/profilePicture/") . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["reviewLeave"], "author", [], "any", false, false, false, 73), "profile_picture", [], "any", false, false, false, 73)), "html", null, true);
                echo "\"></div>
                                            <p>";
                // line 74
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["reviewLeave"], "author", [], "any", false, false, false, 74), "firstName", [], "any", false, false, false, 74), "html", null, true);
                echo "</p>
                                        </div>
                                        <div class=\"rating\">
                                        ";
                // line 77
                $context["items"] = twig_get_attribute($this->env, $this->source, $context["reviewLeave"], "rating", [], "any", false, false, false, 77);
                // line 78
                echo "                                        ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["items"]) || array_key_exists("items", $context) ? $context["items"] : (function () { throw new RuntimeError('Variable "items" does not exist.', 78, $this->source); })())));
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 79
                    echo "                                            <i id='one' class=\"fas fa-star\"></i>
                                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 81
                echo "                                        </div>
                                    </div>
                                    <div class=\"review-description\">
                                    ";
                // line 84
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reviewLeave"], "content", [], "any", false, false, false, 84), "html", null, true);
                echo "
                                    </div>
                                    <div class=\"review-details\">
                                        <div class=\"review-date\">";
                // line 87
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reviewLeave"], "createdAt", [], "any", false, false, false, 87), "H:i d M, Y"), "html", null, true);
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
            // line 93
            echo "                ";
        }
        // line 94
        echo "                </div>
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
        return "review/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  265 => 94,  262 => 93,  250 => 87,  244 => 84,  239 => 81,  232 => 79,  227 => 78,  225 => 77,  219 => 74,  215 => 73,  208 => 68,  203 => 67,  197 => 64,  193 => 62,  191 => 61,  185 => 57,  182 => 56,  170 => 50,  164 => 47,  159 => 44,  152 => 42,  147 => 41,  145 => 40,  138 => 36,  133 => 34,  128 => 32,  121 => 27,  116 => 26,  110 => 23,  106 => 21,  104 => 20,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Mes avis{% endblock %}

{% block body %}
<div class=\"clear-section\">
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
</div>
{% endblock %}
", "review/show.html.twig", "/shared/httpd/Projet-Final/templates/review/show.html.twig");
    }
}

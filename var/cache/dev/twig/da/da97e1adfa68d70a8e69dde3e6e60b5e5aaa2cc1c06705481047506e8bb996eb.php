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
";
        // line 8
        echo $this->extensions['Symfony\Bridge\Twig\Extension\DumpExtension']->dump($this->env, $context, (isset($context["reviewReceived"]) || array_key_exists("reviewReceived", $context) ? $context["reviewReceived"] : (function () { throw new RuntimeError('Variable "reviewReceived" does not exist.', 8, $this->source); })()));
        echo "
";
        // line 9
        echo $this->extensions['Symfony\Bridge\Twig\Extension\DumpExtension']->dump($this->env, $context, (isset($context["reviewLeaved"]) || array_key_exists("reviewLeaved", $context) ? $context["reviewLeaved"] : (function () { throw new RuntimeError('Variable "reviewLeaved" does not exist.', 9, $this->source); })()));
        echo "

    <ul class=\"nav nav-tabs\" role=\"tablist\">
        <li class=\"nav-item\">
            <a class=\"nav-link active\" data-toggle=\"tab\" href=\"#tabs-received\" role=\"tab\">Avis reçu</a>
        </li>
        <li class=\"nav-item\">
            <a class=\"nav-link\" data-toggle=\"tab\" href=\"#tabs-send\" role=\"tab\">Avis laisser</a>
        </li>
    </ul>
     <div class=\"tab-content\">
        <div class=\"tab-pane active\" id=\"tabs-received\" role=\"tabpanel\">
                <div class=\"container profile-section\">
                        <h3>Avis Reçu</h3>
                        ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["reviewReceived"]) || array_key_exists("reviewReceived", $context) ? $context["reviewReceived"] : (function () { throw new RuntimeError('Variable "reviewReceived" does not exist.', 23, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["reviewReceive"]) {
            // line 24
            echo "                            <div class=\"card-review\">
                                <div class=\"reviews-list\">
                                    <div class=\"review-card\">
                                        <div class=\"review-header\">
                                            <div class=\"name-group\">
                                                <div class=\"initials\"><img  class=\"img-review\" src=\"";
            // line 29
            echo twig_escape_filter($this->env, ($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/assets/uploads/profilePicture/") . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["reviewReceive"], "author", [], "any", false, false, false, 29), "profile_picture", [], "any", false, false, false, 29)), "html", null, true);
            echo "\"></div>
                                                <p>";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["reviewReceive"], "author", [], "any", false, false, false, 30), "firstName", [], "any", false, false, false, 30), "html", null, true);
            echo "</p>
                                            </div>
                                            <div class=\"rating\">
                                            ";
            // line 33
            $context["items"] = twig_get_attribute($this->env, $this->source, $context["reviewReceive"], "rating", [], "any", false, false, false, 33);
            // line 34
            echo "                                            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["items"]) || array_key_exists("items", $context) ? $context["items"] : (function () { throw new RuntimeError('Variable "items" does not exist.', 34, $this->source); })())));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 35
                echo "                                                <i id='one' class=\"fas fa-star\"></i>
                                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 37
            echo "                                            </div>
                                        </div>
                                        <div class=\"review-description\">
                                        ";
            // line 40
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reviewReceive"], "content", [], "any", false, false, false, 40), "html", null, true);
            echo "
                                        </div>
                                        <div class=\"review-details\">
                                            <div class=\"review-date\">";
            // line 43
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reviewReceive"], "createdAt", [], "any", false, false, false, 43), "d M, Y H:i"), "html", null, true);
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
        // line 49
        echo "                </div>
            </div>
            <div class=\"tab-pane\" id=\"tabs-send\" role=\"tabpanel\">
                <div class=\"container profile-section\">
                <h3>Avis Laisser</h3>
                    ";
        // line 54
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["reviewLeaved"]) || array_key_exists("reviewLeaved", $context) ? $context["reviewLeaved"] : (function () { throw new RuntimeError('Variable "reviewLeaved" does not exist.', 54, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["reviewLeave"]) {
            // line 55
            echo "                          <div class=\"card-review\">
                            <div class=\"reviews-list\">
                                <div class=\"review-card\">
                                    <div class=\"review-header\">
                                        <div class=\"name-group\">
                                            <div class=\"initials\"><img  class=\"img-review\" src=\"";
            // line 60
            echo twig_escape_filter($this->env, ($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/assets/uploads/profilePicture/") . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["reviewLeave"], "author", [], "any", false, false, false, 60), "profile_picture", [], "any", false, false, false, 60)), "html", null, true);
            echo "\"></div>
                                            <p>";
            // line 61
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["reviewLeave"], "author", [], "any", false, false, false, 61), "firstName", [], "any", false, false, false, 61), "html", null, true);
            echo "</p>
                                        </div>
                                        <div class=\"rating\">
                                        ";
            // line 64
            $context["items"] = twig_get_attribute($this->env, $this->source, $context["reviewLeave"], "rating", [], "any", false, false, false, 64);
            // line 65
            echo "                                        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["items"]) || array_key_exists("items", $context) ? $context["items"] : (function () { throw new RuntimeError('Variable "items" does not exist.', 65, $this->source); })())));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 66
                echo "                                            <i id='one' class=\"fas fa-star\"></i>
                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 68
            echo "                                        </div>
                                    </div>
                                    <div class=\"review-description\">
                                    ";
            // line 71
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reviewLeave"], "content", [], "any", false, false, false, 71), "html", null, true);
            echo "
                                    </div>
                                    <div class=\"review-details\">
                                        <div class=\"review-date\">";
            // line 74
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reviewLeave"], "createdAt", [], "any", false, false, false, 74), "d M, Y H:i"), "html", null, true);
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
        // line 80
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
        return array (  236 => 80,  224 => 74,  218 => 71,  213 => 68,  206 => 66,  201 => 65,  199 => 64,  193 => 61,  189 => 60,  182 => 55,  178 => 54,  171 => 49,  159 => 43,  153 => 40,  148 => 37,  141 => 35,  136 => 34,  134 => 33,  128 => 30,  124 => 29,  117 => 24,  113 => 23,  96 => 9,  92 => 8,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Mes avis{% endblock %}

{% block body %}

<div class=\"container mt-5\">
{{dump(reviewReceived)}}
{{dump(reviewLeaved)}}

    <ul class=\"nav nav-tabs\" role=\"tablist\">
        <li class=\"nav-item\">
            <a class=\"nav-link active\" data-toggle=\"tab\" href=\"#tabs-received\" role=\"tab\">Avis reçu</a>
        </li>
        <li class=\"nav-item\">
            <a class=\"nav-link\" data-toggle=\"tab\" href=\"#tabs-send\" role=\"tab\">Avis laisser</a>
        </li>
    </ul>
     <div class=\"tab-content\">
        <div class=\"tab-pane active\" id=\"tabs-received\" role=\"tabpanel\">
                <div class=\"container profile-section\">
                        <h3>Avis Reçu</h3>
                        {% for reviewReceive in reviewReceived %}
                            <div class=\"card-review\">
                                <div class=\"reviews-list\">
                                    <div class=\"review-card\">
                                        <div class=\"review-header\">
                                            <div class=\"name-group\">
                                                <div class=\"initials\"><img  class=\"img-review\" src=\"{{asset ('/assets/uploads/profilePicture/') ~ reviewReceive.author.profile_picture }}\"></div>
                                                <p>{{reviewReceive.author.firstName}}</p>
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
                                            <div class=\"review-date\">{{reviewReceive.createdAt|date(\"d M, Y H:i\")}}</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    {% endfor %}
                </div>
            </div>
            <div class=\"tab-pane\" id=\"tabs-send\" role=\"tabpanel\">
                <div class=\"container profile-section\">
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
                                        <div class=\"review-date\">{{reviewLeave.createdAt|date(\"d M, Y H:i\")}}</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    {% endfor %}
                </div>
            </div>
    </div>

</div>
{% endblock %}
", "review/show.html.twig", "/shared/httpd/Projet-Final/templates/review/show.html.twig");
    }
}

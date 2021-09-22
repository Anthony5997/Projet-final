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

/* message/discussions.html.twig */
class __TwigTemplate_874a1360df4147ca09d52e29db94682bb5dae706d94883158b0e673da71f54be extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "message/discussions.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "message/discussions.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "message/discussions.html.twig", 1);
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

        echo "Message";
        
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
        echo "    <h1 class=\"p-3 my-3\">Boite de réception</h1>


       ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["messageReceive"]) || array_key_exists("messageReceive", $context) ? $context["messageReceive"] : (function () { throw new RuntimeError('Variable "messageReceive" does not exist.', 9, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 10
            echo "
        <div class=\"row card-receiver-message\">
            <a href=\"";
            // line 12
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("message_discussion_details", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["message"], "sender", [], "any", false, false, false, 12), "id", [], "any", false, false, false, 12)]), "html", null, true);
            echo "\">
            <div class=\"row\">
                <div class=\"col d-flex flex-column justify-content-center align-items-center\">
                    <p class=\"font-control\">";
            // line 15
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["message"], "sender", [], "any", false, false, false, 15), "firstName", [], "any", false, false, false, 15), "html", null, true);
            echo "</p>
                    <img class=\"img-card\"src=\"";
            // line 16
            echo twig_escape_filter($this->env, ($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/uploads/profilePicture/") . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["message"], "sender", [], "any", false, false, false, 16), "profile_picture", [], "any", false, false, false, 16)), "html", null, true);
            echo "\"/>
                </div>
                <div class=\"col d-flex  flex-column justify-content-center\">
                <span class=\"d-inline-block message-font-control text-truncate\" style=\"max-width: 150px;\">
                    ";
            // line 20
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["message"], "content", [], "any", false, false, false, 20), "html", null, true);
            echo "
                </span>
                </div>
                <div class=\"col d-flex justify-content-end align-items-center font-control fas fa-chevron-right message-font-control\"></div>
            </div>
               <span class=\"d-inline-block message-font-control d-flex justify-content-between\">
                   <div></div>
                   <div>  ";
            // line 27
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["message"], "sendAt", [], "any", false, false, false, 27), "d M H i"), "html", null, true);
            echo " </div>
                </span>
            </a>
        </div>
         
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "message/discussions.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  140 => 33,  128 => 27,  118 => 20,  111 => 16,  107 => 15,  101 => 12,  97 => 10,  93 => 9,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Message{% endblock %}

{% block body %}
    <h1 class=\"p-3 my-3\">Boite de réception</h1>


       {% for message in messageReceive %}

        <div class=\"row card-receiver-message\">
            <a href=\"{{path('message_discussion_details', {'id': message.sender.id})}}\">
            <div class=\"row\">
                <div class=\"col d-flex flex-column justify-content-center align-items-center\">
                    <p class=\"font-control\">{{message.sender.firstName}}</p>
                    <img class=\"img-card\"src=\"{{asset('assets/uploads/profilePicture/') ~ message.sender.profile_picture}}\"/>
                </div>
                <div class=\"col d-flex  flex-column justify-content-center\">
                <span class=\"d-inline-block message-font-control text-truncate\" style=\"max-width: 150px;\">
                    {{message.content}}
                </span>
                </div>
                <div class=\"col d-flex justify-content-end align-items-center font-control fas fa-chevron-right message-font-control\"></div>
            </div>
               <span class=\"d-inline-block message-font-control d-flex justify-content-between\">
                   <div></div>
                   <div>  {{message.sendAt|date('d M H i')}} </div>
                </span>
            </a>
        </div>
         
        {% endfor %}

{% endblock %}
", "message/discussions.html.twig", "/shared/httpd/Projet-Final/templates/message/discussions.html.twig");
    }
}

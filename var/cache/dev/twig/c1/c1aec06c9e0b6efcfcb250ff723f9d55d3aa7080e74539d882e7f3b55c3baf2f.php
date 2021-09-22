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

/* message/discussion_detail.html.twig */
class __TwigTemplate_47eb38df3b6e4abad6b5384cd116650b29bd7b4c983003bbef85704df6be7cf9 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "message/discussion_detail.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "message/discussion_detail.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "message/discussion_detail.html.twig", 1);
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
        echo "<div class=\"container\">

<a href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("message_discussion", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 8, $this->source); })()), "user", [], "any", false, false, false, 8), "id", [], "any", false, false, false, 8)]), "html", null, true);
        echo "\" class=\"btn btn-info mt-5\"><i class=\"fas fa-arrow-left\"></i></a>
 
    <div class=\"container\">
    <h2 class=\"text-center mt-5\">Discussion avec ";
        // line 11
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["contact"]) || array_key_exists("contact", $context) ? $context["contact"] : (function () { throw new RuntimeError('Variable "contact" does not exist.', 11, $this->source); })()), "firstName", [], "any", false, false, false, 11), "html", null, true);
        echo "</h2>
        <div class=\"box-message\" id=\"box-message\">
        ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["messageReceive"]) || array_key_exists("messageReceive", $context) ? $context["messageReceive"] : (function () { throw new RuntimeError('Variable "messageReceive" does not exist.', 13, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 14
            echo "
                ";
            // line 15
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["message"], "sender", [], "any", false, false, false, 15), "id", [], "any", false, false, false, 15), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 15, $this->source); })()), "user", [], "any", false, false, false, 15), "id", [], "any", false, false, false, 15)))) {
                // line 16
                echo "                    <div class=\"row sender-row display-lign font-controll-message-name\">
                ";
            } else {
                // line 18
                echo "                    <div class=\"row receiver-row font-controll-message-name\">
                ";
            }
            // line 20
            echo "                   ";
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["message"], "sender", [], "any", false, false, false, 20), "id", [], "any", false, false, false, 20), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 20, $this->source); })()), "user", [], "any", false, false, false, 20), "id", [], "any", false, false, false, 20)))) {
                // line 21
                echo "                    
                     <div class=\"col-3 d-flex justify-content-end align-items-center\">
                    ";
            } else {
                // line 24
                echo "                     <div class=\"col-2 d-flex justify-content-start align-items-center\">
                    ";
            }
            // line 26
            echo "                            <img class=\"profile-picture-message-send d-flex justify-content-center align-items-center\" src=\"";
            echo twig_escape_filter($this->env, ($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/uploads/profilePicture/") . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["message"], "sender", [], "any", false, false, false, 26), "profile_picture", [], "any", false, false, false, 26)), "html", null, true);
            echo "\"/>
                            <div class=\"name-user\">";
            // line 27
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["message"], "sender", [], "any", false, false, false, 27), "firstName", [], "any", false, false, false, 27), "html", null, true);
            echo "</div>
                        </div>
                         ";
            // line 29
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["message"], "sender", [], "any", false, false, false, 29), "id", [], "any", false, false, false, 29), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 29, $this->source); })()), "user", [], "any", false, false, false, 29), "id", [], "any", false, false, false, 29)))) {
                // line 30
                echo "                        <div class=\"col-7 d-flex justify-content-end align-items-center font-controll-message\">
                        ";
            } else {
                // line 32
                echo "                        <div class=\"col-7 d-flex justify-content-start align-items-center font-controll-message\">
                        ";
            }
            // line 34
            echo "                            <div>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["message"], "content", [], "any", false, false, false, 34), "html", null, true);
            echo "</div>
                           
                          
                        </div>
                        <div class=\"col-2\"></div>
                    </div>
                        ";
            // line 40
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["message"], "sender", [], "any", false, false, false, 40), "id", [], "any", false, false, false, 40), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 40, $this->source); })()), "user", [], "any", false, false, false, 40), "id", [], "any", false, false, false, 40)))) {
                // line 41
                echo "                        <div class=\"d-flex flex-row-reverse hour-send\">";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["message"], "sendAt", [], "any", false, false, false, 41), "d M H:i"), "html", null, true);
                echo "</div>

                        ";
            } else {
                // line 44
                echo "                        <div class=\"d-flex  hour-send\">";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["message"], "sendAt", [], "any", false, false, false, 44), "d M H:i"), "html", null, true);
                echo "</div>
                        ";
            }
            // line 46
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        echo "        </div>
    </div>
    <hr>
            <div class=\"container\">
                ";
        // line 51
        echo twig_include($this->env, $context, "message/_form.html.twig");
        echo "
        </div>
</div>


";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "message/discussion_detail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  189 => 51,  183 => 47,  177 => 46,  171 => 44,  164 => 41,  162 => 40,  152 => 34,  148 => 32,  144 => 30,  142 => 29,  137 => 27,  132 => 26,  128 => 24,  123 => 21,  120 => 20,  116 => 18,  112 => 16,  110 => 15,  107 => 14,  103 => 13,  98 => 11,  92 => 8,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source(" {% extends 'base.html.twig' %}

{% block title %}Message{% endblock %}

{% block body %}
<div class=\"container\">

<a href=\"{{path('message_discussion', {'id' : app.user.id})}}\" class=\"btn btn-info mt-5\"><i class=\"fas fa-arrow-left\"></i></a>
 
    <div class=\"container\">
    <h2 class=\"text-center mt-5\">Discussion avec {{contact.firstName}}</h2>
        <div class=\"box-message\" id=\"box-message\">
        {% for message in messageReceive %}

                {% if message.sender.id == app.user.id %}
                    <div class=\"row sender-row display-lign font-controll-message-name\">
                {% else %}
                    <div class=\"row receiver-row font-controll-message-name\">
                {% endif %}
                   {% if message.sender.id == app.user.id %}
                    
                     <div class=\"col-3 d-flex justify-content-end align-items-center\">
                    {% else %}
                     <div class=\"col-2 d-flex justify-content-start align-items-center\">
                    {% endif %}
                            <img class=\"profile-picture-message-send d-flex justify-content-center align-items-center\" src=\"{{asset('assets/uploads/profilePicture/') ~ message.sender.profile_picture}}\"/>
                            <div class=\"name-user\">{{message.sender.firstName}}</div>
                        </div>
                         {% if message.sender.id == app.user.id %}
                        <div class=\"col-7 d-flex justify-content-end align-items-center font-controll-message\">
                        {% else %}
                        <div class=\"col-7 d-flex justify-content-start align-items-center font-controll-message\">
                        {% endif %}
                            <div>{{message.content}}</div>
                           
                          
                        </div>
                        <div class=\"col-2\"></div>
                    </div>
                        {% if message.sender.id == app.user.id %}
                        <div class=\"d-flex flex-row-reverse hour-send\">{{message.sendAt|date(\"d M H:i\")}}</div>

                        {% else %}
                        <div class=\"d-flex  hour-send\">{{message.sendAt|date(\"d M H:i\")}}</div>
                        {% endif %}
            {% endfor %}
        </div>
    </div>
    <hr>
            <div class=\"container\">
                {{ include('message/_form.html.twig') }}
        </div>
</div>


{% endblock %}", "message/discussion_detail.html.twig", "/shared/httpd/Projet-Final/templates/message/discussion_detail.html.twig");
    }
}

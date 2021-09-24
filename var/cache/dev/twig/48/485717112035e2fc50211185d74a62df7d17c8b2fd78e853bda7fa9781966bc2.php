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

/* message/async-discussion.html.twig */
class __TwigTemplate_98a37745e947a407bd967ab7086b3ec55ecc828dbdc1ef24508283b5612bf163 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "message/async-discussion.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "message/async-discussion.html.twig"));

        // line 1
        echo " ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["messageReceive"]) || array_key_exists("messageReceive", $context) ? $context["messageReceive"] : (function () { throw new RuntimeError('Variable "messageReceive" does not exist.', 1, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 2
            echo "
            ";
            // line 3
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["message"], "sender", [], "any", false, false, false, 3), "id", [], "any", false, false, false, 3), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 3, $this->source); })()), "user", [], "any", false, false, false, 3), "id", [], "any", false, false, false, 3)))) {
                // line 4
                echo "                <div class=\"row sender-row display-lign font-controll-message-name\">
            ";
            } else {
                // line 6
                echo "                <div class=\"row receiver-row font-controll-message-name\">
            ";
            }
            // line 8
            echo "                ";
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["message"], "sender", [], "any", false, false, false, 8), "id", [], "any", false, false, false, 8), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 8, $this->source); })()), "user", [], "any", false, false, false, 8), "id", [], "any", false, false, false, 8)))) {
                // line 9
                echo "                
                    <div class=\"col-3 d-flex justify-content-end align-items-center\">
                ";
            } else {
                // line 12
                echo "                    <div class=\"col-2 d-flex justify-content-start align-items-center\">
                ";
            }
            // line 14
            echo "                        <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_show", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["message"], "sender", [], "any", false, false, false, 14), "id", [], "any", false, false, false, 14)]), "html", null, true);
            echo "\" ><img class=\"profile-picture-message-send d-flex justify-content-center align-items-center\" src=\"";
            echo twig_escape_filter($this->env, ($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/uploads/profilePicture/") . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["message"], "sender", [], "any", false, false, false, 14), "profile_picture", [], "any", false, false, false, 14)), "html", null, true);
            echo "\"/></a>
                        <div class=\"name-user\">";
            // line 15
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["message"], "sender", [], "any", false, false, false, 15), "firstName", [], "any", false, false, false, 15), "html", null, true);
            echo "</div>
                    </div>
                        ";
            // line 17
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["message"], "sender", [], "any", false, false, false, 17), "id", [], "any", false, false, false, 17), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 17, $this->source); })()), "user", [], "any", false, false, false, 17), "id", [], "any", false, false, false, 17)))) {
                // line 18
                echo "                    <div class=\"col-7 d-flex justify-content-end align-items-center font-controll-message\">
                    ";
            } else {
                // line 20
                echo "                    <div class=\"col-7 d-flex justify-content-start align-items-center font-controll-message\">
                    ";
            }
            // line 22
            echo "                        <div>";
            echo strip_tags(twig_get_attribute($this->env, $this->source, $context["message"], "content", [], "any", false, false, false, 22), "<a>");
            echo "</div>
                        
                        
                    </div>
                    <div class=\"col-2\"></div>
                </div>
                    ";
            // line 28
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["message"], "sender", [], "any", false, false, false, 28), "id", [], "any", false, false, false, 28), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 28, $this->source); })()), "user", [], "any", false, false, false, 28), "id", [], "any", false, false, false, 28)))) {
                // line 29
                echo "                    <div class=\"d-flex flex-row-reverse hour-send\">";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["message"], "sendAt", [], "any", false, false, false, 29), "d M H:i"), "html", null, true);
                echo "</div>

                    ";
            } else {
                // line 32
                echo "                        <div class=\"d-flex  hour-send\">";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["message"], "sendAt", [], "any", false, false, false, 32), "d M H:i"), "html", null, true);
                echo "</div>
                    ";
            }
            // line 34
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "message/async-discussion.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  120 => 34,  114 => 32,  107 => 29,  105 => 28,  95 => 22,  91 => 20,  87 => 18,  85 => 17,  80 => 15,  73 => 14,  69 => 12,  64 => 9,  61 => 8,  57 => 6,  53 => 4,  51 => 3,  48 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source(" {% for message in messageReceive %}

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
                        <a href=\"{{path('user_show', { 'id' : message.sender.id })}}\" ><img class=\"profile-picture-message-send d-flex justify-content-center align-items-center\" src=\"{{asset('assets/uploads/profilePicture/') ~ message.sender.profile_picture}}\"/></a>
                        <div class=\"name-user\">{{message.sender.firstName}}</div>
                    </div>
                        {% if message.sender.id == app.user.id %}
                    <div class=\"col-7 d-flex justify-content-end align-items-center font-controll-message\">
                    {% else %}
                    <div class=\"col-7 d-flex justify-content-start align-items-center font-controll-message\">
                    {% endif %}
                        <div>{{message.content|striptags('<a>')|raw }}</div>
                        
                        
                    </div>
                    <div class=\"col-2\"></div>
                </div>
                    {% if message.sender.id == app.user.id %}
                    <div class=\"d-flex flex-row-reverse hour-send\">{{message.sendAt|date(\"d M H:i\")}}</div>

                    {% else %}
                        <div class=\"d-flex  hour-send\">{{message.sendAt|date(\"d M H:i\")}}</div>
                    {% endif %}
            {% endfor %}", "message/async-discussion.html.twig", "/shared/httpd/Projet-Final/templates/message/async-discussion.html.twig");
    }
}

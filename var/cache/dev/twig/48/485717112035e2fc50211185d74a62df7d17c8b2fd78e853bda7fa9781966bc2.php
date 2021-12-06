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
        echo "            ";
        if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 1, $this->source); })()), "sender", [], "any", false, false, false, 1), "id", [], "any", false, false, false, 1), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 1, $this->source); })()), "user", [], "any", false, false, false, 1), "id", [], "any", false, false, false, 1)))) {
            // line 2
            echo "
                <div class=\"row sender-row display-lign font-controll-message-name\">
                    <div class=\"col-3 d-flex justify-content-end align-items-center\">     
                        <a href=\"";
            // line 5
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_show", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 5, $this->source); })()), "sender", [], "any", false, false, false, 5), "id", [], "any", false, false, false, 5)]), "html", null, true);
            echo "\" ><img class=\"profile-picture-message-send d-flex justify-content-center align-items-center\" src=\"";
            echo twig_escape_filter($this->env, ($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/uploads/profilePicture/") . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 5, $this->source); })()), "sender", [], "any", false, false, false, 5), "profile_picture", [], "any", false, false, false, 5)), "html", null, true);
            echo "\"/></a>
                        <div class=\"name-user\">";
            // line 6
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 6, $this->source); })()), "sender", [], "any", false, false, false, 6), "firstName", [], "any", false, false, false, 6), "html", null, true);
            echo "</div>
                        <div class=\"col-7 d-flex justify-content-end align-items-center font-controll-message\">
                            <div>";
            // line 8
            echo strip_tags(twig_get_attribute($this->env, $this->source, (isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 8, $this->source); })()), "content", [], "any", false, false, false, 8), "<a>");
            echo "</div>
                        </div>
                        <div class=\"col-2\"></div>
                    </div>
                </div>
                ";
            // line 14
            echo "
            ";
        } else {
            // line 16
            echo "
                <div class=\"row receiver-row font-controll-message-name\">
                    <div class=\"col-2 d-flex justify-content-start align-items-center\">
                        <a href=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_show", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 19, $this->source); })()), "sender", [], "any", false, false, false, 19), "id", [], "any", false, false, false, 19)]), "html", null, true);
            echo "\" ><img class=\"profile-picture-message-send d-flex justify-content-center align-items-center\" src=\"";
            echo twig_escape_filter($this->env, ($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/uploads/profilePicture/") . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 19, $this->source); })()), "sender", [], "any", false, false, false, 19), "profile_picture", [], "any", false, false, false, 19)), "html", null, true);
            echo "\"/></a>
                        <div class=\"name-user\">";
            // line 20
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 20, $this->source); })()), "sender", [], "any", false, false, false, 20), "firstName", [], "any", false, false, false, 20), "html", null, true);
            echo "</div>
                        <div class=\"col-7 d-flex justify-content-start align-items-center font-controll-message\">
                            <div>";
            // line 22
            echo strip_tags(twig_get_attribute($this->env, $this->source, (isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 22, $this->source); })()), "content", [], "any", false, false, false, 22), "<a>");
            echo "</div>
                        </div>
                        <div class=\"col-2\"></div>
                    </div>
                </div>
                ";
            // line 28
            echo "
";
        }
        
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
        return array (  98 => 28,  90 => 22,  85 => 20,  79 => 19,  74 => 16,  70 => 14,  62 => 8,  57 => 6,  51 => 5,  46 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("            {% if message.sender.id == app.user.id %}

                <div class=\"row sender-row display-lign font-controll-message-name\">
                    <div class=\"col-3 d-flex justify-content-end align-items-center\">     
                        <a href=\"{{path('user_show', { 'id' : message.sender.id })}}\" ><img class=\"profile-picture-message-send d-flex justify-content-center align-items-center\" src=\"{{asset('assets/uploads/profilePicture/') ~ message.sender.profile_picture}}\"/></a>
                        <div class=\"name-user\">{{message.sender.firstName}}</div>
                        <div class=\"col-7 d-flex justify-content-end align-items-center font-controll-message\">
                            <div>{{message.content|striptags('<a>')|raw }}</div>
                        </div>
                        <div class=\"col-2\"></div>
                    </div>
                </div>
                {# <div class=\"d-flex flex-row-reverse hour-send\">{{message.sendAt|date(\"d M H:i\")}}</div> #}

            {% else %}

                <div class=\"row receiver-row font-controll-message-name\">
                    <div class=\"col-2 d-flex justify-content-start align-items-center\">
                        <a href=\"{{path('user_show', { 'id' : message.sender.id })}}\" ><img class=\"profile-picture-message-send d-flex justify-content-center align-items-center\" src=\"{{asset('assets/uploads/profilePicture/') ~ message.sender.profile_picture}}\"/></a>
                        <div class=\"name-user\">{{message.sender.firstName}}</div>
                        <div class=\"col-7 d-flex justify-content-start align-items-center font-controll-message\">
                            <div>{{message.content|striptags('<a>')|raw }}</div>
                        </div>
                        <div class=\"col-2\"></div>
                    </div>
                </div>
                {# <div class=\"d-flex  hour-send\">{{message.sendAt|date(\"d M H:i\")}}</div> #}

{% endif %}", "message/async-discussion.html.twig", "/home/simplon/devilbox/data/www/Projet-Final/templates/message/async-discussion.html.twig");
    }
}

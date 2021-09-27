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

/* review/_form.html.twig */
class __TwigTemplate_84b15d006ee2d4be357dd8efc7e80819da00ec9ee837c5f3cffff0c628453509 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "review/_form.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "review/_form.html.twig"));

        // line 1
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1, $this->source); })()), 'form_start');
        echo "

       <svg aria-hidden=\"true\" style=\"position: absolute; width: 0; height: 0; overflow: hidden;\" version=\"1.1\" xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\">
            <defs>
                <symbol id=\"icon-star\" viewBox=\"0 0 26 28\">
                <path d=\"M26 10.109c0 0.281-0.203 0.547-0.406 0.75l-5.672 5.531 1.344 7.812c0.016 0.109 0.016 0.203 0.016 0.313 0 0.406-0.187 0.781-0.641 0.781-0.219 0-0.438-0.078-0.625-0.187l-7.016-3.687-7.016 3.687c-0.203 0.109-0.406 0.187-0.625 0.187-0.453 0-0.656-0.375-0.656-0.781 0-0.109 0.016-0.203 0.031-0.313l1.344-7.812-5.688-5.531c-0.187-0.203-0.391-0.469-0.391-0.75 0-0.469 0.484-0.656 0.875-0.719l7.844-1.141 3.516-7.109c0.141-0.297 0.406-0.641 0.766-0.641s0.625 0.344 0.766 0.641l3.516 7.109 7.844 1.141c0.375 0.063 0.875 0.25 0.875 0.719z\"></path>
                </symbol>
                <symbol id=\"icon-star-half\" viewBox=\"0 0 13 28\">
                <path d=\"M13 0.5v20.922l-7.016 3.687c-0.203 0.109-0.406 0.187-0.625 0.187-0.453 0-0.656-0.375-0.656-0.781 0-0.109 0.016-0.203 0.031-0.313l1.344-7.812-5.688-5.531c-0.187-0.203-0.391-0.469-0.391-0.75 0-0.469 0.484-0.656 0.875-0.719l7.844-1.141 3.516-7.109c0.141-0.297 0.406-0.641 0.766-0.641v0z\"></path>
                </symbol>
            </defs>
        </svg>
        <div class=\"comment-stars\">

            <input class=\"comment-stars-input\" type=\"radio\" name=\"rating\" value=\"5\" id=\"rating-5\">
            <label class=\"comment-stars-view\" for=\"rating-5\"><svg class=\"icon icon-star\">
                <use xlink:href=\"#icon-star\"></use>
                </svg></label>
            <input class=\"comment-stars-input\" type=\"radio\" name=\"rating\" value=\"4\" id=\"rating-4\"> <label class=\"comment-stars-view\" for=\"rating-4\"><svg class=\"icon icon-star\">
                <use xlink:href=\"#icon-star\"></use>
                </svg></label>

            <input class=\"comment-stars-input\" type=\"radio\" name=\"rating\" value=\"3\" id=\"rating-3\"> <label class=\"comment-stars-view\" for=\"rating-3\"><svg class=\"icon icon-star\">
                <use xlink:href=\"#icon-star\"></use>
                </svg></label>

            <input class=\"comment-stars-input\" type=\"radio\" name=\"rating\" value=\"2\" id=\"rating-2\"> <label class=\"comment-stars-view\" for=\"rating-2\"><svg class=\"icon icon-star\">
                <use xlink:href=\"#icon-star\"></use>
                </svg></label>
            <input class=\"comment-stars-input\" type=\"radio\" name=\"rating\" value=\"1\" id=\"rating-1\"> <label class=\"comment-stars-view\" for=\"rating-1\"><svg class=\"icon icon-star\">
                <use xlink:href=\"#icon-star\"></use>
                </svg></label>
        </div>
        <input type=\"hidden\" name=\"author\" id=\"author\" value=\"";
        // line 34
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["currentUser"]) || array_key_exists("currentUser", $context) ? $context["currentUser"] : (function () { throw new RuntimeError('Variable "currentUser" does not exist.', 34, $this->source); })()), "id", [], "any", false, false, false, 34), "html", null, true);
        echo "\"/>
    ";
        // line 35
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 35, $this->source); })()), 'widget');
        echo "
    <button class=\"btn\">";
        // line 36
        echo twig_escape_filter($this->env, ((array_key_exists("button_label", $context)) ? (_twig_default_filter((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 36, $this->source); })()), "Save")) : ("Save")), "html", null, true);
        echo "</button>
";
        // line 37
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 37, $this->source); })()), 'form_end');
        echo "
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "review/_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 37,  87 => 36,  83 => 35,  79 => 34,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{{ form_start(form) }}

       <svg aria-hidden=\"true\" style=\"position: absolute; width: 0; height: 0; overflow: hidden;\" version=\"1.1\" xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\">
            <defs>
                <symbol id=\"icon-star\" viewBox=\"0 0 26 28\">
                <path d=\"M26 10.109c0 0.281-0.203 0.547-0.406 0.75l-5.672 5.531 1.344 7.812c0.016 0.109 0.016 0.203 0.016 0.313 0 0.406-0.187 0.781-0.641 0.781-0.219 0-0.438-0.078-0.625-0.187l-7.016-3.687-7.016 3.687c-0.203 0.109-0.406 0.187-0.625 0.187-0.453 0-0.656-0.375-0.656-0.781 0-0.109 0.016-0.203 0.031-0.313l1.344-7.812-5.688-5.531c-0.187-0.203-0.391-0.469-0.391-0.75 0-0.469 0.484-0.656 0.875-0.719l7.844-1.141 3.516-7.109c0.141-0.297 0.406-0.641 0.766-0.641s0.625 0.344 0.766 0.641l3.516 7.109 7.844 1.141c0.375 0.063 0.875 0.25 0.875 0.719z\"></path>
                </symbol>
                <symbol id=\"icon-star-half\" viewBox=\"0 0 13 28\">
                <path d=\"M13 0.5v20.922l-7.016 3.687c-0.203 0.109-0.406 0.187-0.625 0.187-0.453 0-0.656-0.375-0.656-0.781 0-0.109 0.016-0.203 0.031-0.313l1.344-7.812-5.688-5.531c-0.187-0.203-0.391-0.469-0.391-0.75 0-0.469 0.484-0.656 0.875-0.719l7.844-1.141 3.516-7.109c0.141-0.297 0.406-0.641 0.766-0.641v0z\"></path>
                </symbol>
            </defs>
        </svg>
        <div class=\"comment-stars\">

            <input class=\"comment-stars-input\" type=\"radio\" name=\"rating\" value=\"5\" id=\"rating-5\">
            <label class=\"comment-stars-view\" for=\"rating-5\"><svg class=\"icon icon-star\">
                <use xlink:href=\"#icon-star\"></use>
                </svg></label>
            <input class=\"comment-stars-input\" type=\"radio\" name=\"rating\" value=\"4\" id=\"rating-4\"> <label class=\"comment-stars-view\" for=\"rating-4\"><svg class=\"icon icon-star\">
                <use xlink:href=\"#icon-star\"></use>
                </svg></label>

            <input class=\"comment-stars-input\" type=\"radio\" name=\"rating\" value=\"3\" id=\"rating-3\"> <label class=\"comment-stars-view\" for=\"rating-3\"><svg class=\"icon icon-star\">
                <use xlink:href=\"#icon-star\"></use>
                </svg></label>

            <input class=\"comment-stars-input\" type=\"radio\" name=\"rating\" value=\"2\" id=\"rating-2\"> <label class=\"comment-stars-view\" for=\"rating-2\"><svg class=\"icon icon-star\">
                <use xlink:href=\"#icon-star\"></use>
                </svg></label>
            <input class=\"comment-stars-input\" type=\"radio\" name=\"rating\" value=\"1\" id=\"rating-1\"> <label class=\"comment-stars-view\" for=\"rating-1\"><svg class=\"icon icon-star\">
                <use xlink:href=\"#icon-star\"></use>
                </svg></label>
        </div>
        <input type=\"hidden\" name=\"author\" id=\"author\" value=\"{{currentUser.id}}\"/>
    {{ form_widget(form) }}
    <button class=\"btn\">{{ button_label|default('Save') }}</button>
{{ form_end(form) }}
", "review/_form.html.twig", "/shared/httpd/Projet-Final/templates/review/_form.html.twig");
    }
}

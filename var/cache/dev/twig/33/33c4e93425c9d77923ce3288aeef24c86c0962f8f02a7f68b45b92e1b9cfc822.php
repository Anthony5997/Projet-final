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

/* message/_form.html.twig */
class __TwigTemplate_1f7740013817ac962bca4f98311a7cbe99cfc149c2f49a43862b06583fffc77a extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "message/_form.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "message/_form.html.twig"));

        // line 1
        echo "
<div class=\"row d-flex justify-content-center align-items-center form-send-message\">
      <div class=\"col-10 \">
        <div class=\"form-group\">
            <textarea name=\"content\" id=\"content\" class=\"form-control\" rows=\"3\" cols=\"20\" ></textarea>
        </div>
    </div>
        <input type=\"hidden\" name=\"sender\" id=\"sender\" value=\"";
        // line 8
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["currentUser"]) || array_key_exists("currentUser", $context) ? $context["currentUser"] : (function () { throw new RuntimeError('Variable "currentUser" does not exist.', 8, $this->source); })()), "id", [], "any", false, false, false, 8), "html", null, true);
        echo "\" />
        <input type=\"hidden\" name=\"receiver\" id=\"receiver\" value=\"";
        // line 9
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["contact"]) || array_key_exists("contact", $context) ? $context["contact"] : (function () { throw new RuntimeError('Variable "contact" does not exist.', 9, $this->source); })()), "id", [], "any", false, false, false, 9), "html", null, true);
        echo "\" />
    <button onclick=\"send()\" class=\" col-2 d-flex justify-content-center align-items-center btn send-message-button\"><i class=\"far fa-paper-plane\"></i></button>
</div>

";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "message/_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 9,  52 => 8,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
<div class=\"row d-flex justify-content-center align-items-center form-send-message\">
      <div class=\"col-10 \">
        <div class=\"form-group\">
            <textarea name=\"content\" id=\"content\" class=\"form-control\" rows=\"3\" cols=\"20\" ></textarea>
        </div>
    </div>
        <input type=\"hidden\" name=\"sender\" id=\"sender\" value=\"{{currentUser.id}}\" />
        <input type=\"hidden\" name=\"receiver\" id=\"receiver\" value=\"{{contact.id}}\" />
    <button onclick=\"send()\" class=\" col-2 d-flex justify-content-center align-items-center btn send-message-button\"><i class=\"far fa-paper-plane\"></i></button>
</div>

", "message/_form.html.twig", "/shared/httpd/Projet-Final/templates/message/_form.html.twig");
    }
}

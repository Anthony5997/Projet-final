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
class __TwigTemplate_4722af42c3a79b1611d52d7291e9a44070381e2dcb43c3beff052ef565b90ad6 extends Template
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
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["currentUser"] ?? null), "id", [], "any", false, false, false, 8), "html", null, true);
        echo "\" />
        <input type=\"hidden\" name=\"receiver\" id=\"receiver\" value=\"";
        // line 9
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["contact"] ?? null), "id", [], "any", false, false, false, 9), "html", null, true);
        echo "\" />
    <button onclick=\"send()\" class=\" col-2 d-flex justify-content-center align-items-center btn send-message-button\"><i class=\"far fa-paper-plane\"></i></button>
</div>

";
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
        return array (  50 => 9,  46 => 8,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "message/_form.html.twig", "/shared/httpd/Projet-Final/templates/message/_form.html.twig");
    }
}

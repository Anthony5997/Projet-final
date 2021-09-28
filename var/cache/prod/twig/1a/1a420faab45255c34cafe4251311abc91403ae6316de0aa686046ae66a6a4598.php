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
class __TwigTemplate_15f413bba343883aaff9b5ced59ab7e9b53471d3b487800454e30a37c2e4ca76 extends Template
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
            'javascripts' => [$this, 'block_javascripts'],
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
        $this->parent = $this->loadTemplate("base.html.twig", "message/discussion_detail.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Message";
    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "    <a href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("message_discussion", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 6), "id", [], "any", false, false, false, 6)]), "html", null, true);
        echo "\" class=\"button-comeback\"><i class=\"fas fa-arrow-left\"></i></a>
<div class=\"container\">

 
    <div class=\"container\">
    <h2 class=\"text-center my-4\">Discussion avec ";
        // line 11
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["contact"] ?? null), "firstName", [], "any", false, false, false, 11), "html", null, true);
        echo "</h2>
        <div class=\"box-message\" id=\"box-message\">
            ";
        // line 14
        echo "        </div>
    </div>
    <hr>
            <div class=\"container\">
                ";
        // line 18
        echo twig_include($this->env, $context, "message/_form.html.twig");
        echo "
        </div>
</div>


";
    }

    // line 25
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 26
        echo "
            <script src=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/displayMessage.js"), "html", null, true);
        echo "\"></script>

";
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
        return array (  96 => 27,  93 => 26,  89 => 25,  79 => 18,  73 => 14,  68 => 11,  59 => 6,  55 => 5,  48 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "message/discussion_detail.html.twig", "/shared/httpd/Projet-Final/templates/message/discussion_detail.html.twig");
    }
}

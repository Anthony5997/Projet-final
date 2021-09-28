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
class __TwigTemplate_f478734c06a6498d03f5a197514188f39c7b071032aae147e27599ff44de901e extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "message/discussions.html.twig", 1);
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
        echo "    <h1 class=\"p-3 my-3\">Boite de réception</h1>


       ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["messageReceive"] ?? null));
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
        return array (  110 => 33,  98 => 27,  88 => 20,  81 => 16,  77 => 15,  71 => 12,  67 => 10,  63 => 9,  58 => 6,  54 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "message/discussions.html.twig", "/shared/httpd/Projet-Final/templates/message/discussions.html.twig");
    }
}

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

/* security/login.html.twig */
class __TwigTemplate_87a4f69356c9ac00576368ce328f4615270be1b9b13d5cf35af0d904ae690b12 extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "security/login.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Connexion";
    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "
   ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "flashes", [0 => "success"], "method", false, false, false, 7));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 8
            echo "            <div class=\"alert alert-success text-white\">
                ";
            // line 9
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "flashes", [0 => "error"], "method", false, false, false, 12));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 13
            echo "            <div class=\"alert alert-danger text-white\">
                ";
            // line 14
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo "
        <section class=\"section-padding gray-bg log-section\">
            <div class=\"container\">
                <div class=\"row\">

                    <div class=\"col-xs-12 col-sm-6 col-md-4\">
                        <div class=\"card card-panel p-2 mt-3\">
                            <h3 class=\"text-extrabold\">Connectez vous</h3>
                           <form  method=\"post\">
                            ";
        // line 26
        if (($context["error"] ?? null)) {
            // line 27
            echo "                                <div class=\"alert alert-danger\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, ($context["error"] ?? null), "messageKey", [], "any", false, false, false, 27), twig_get_attribute($this->env, $this->source, ($context["error"] ?? null), "messageData", [], "any", false, false, false, 27), "security"), "html", null, true);
            echo "</div>
                            ";
        }
        // line 29
        echo "
                            ";
        // line 30
        if (twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 30)) {
            // line 31
            echo "                                <div class=\"red-text\">
                                    Vous êtes connecté en tant que ";
            // line 32
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 32), "username", [], "any", false, false, false, 32), "html", null, true);
            echo ", <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\">Logout</a>
                                </div>
                            ";
        }
        // line 34
        echo " 

                                <input type=\"hidden\" name=\"_token\" value=\"\">

                                <div class=\"input-field\"> 
                                
                                    <input type=\"email\" value=\"";
        // line 40
        echo twig_escape_filter($this->env, ($context["last_username"] ?? null), "html", null, true);
        echo "\" name=\"email\" id=\"inputEmail\" class=\"form-control\" autocomplete=\"email\" 
                                            autofocus
                                           required
                                           autofocus
                                           data-parsley-trigger=\"change\"
                                           data-parsley-error-message=\"Une addresse valide est nécessaire.\">
                                    <label for=\"inputEmail\">Votre Email</label>
                                </div>
                                <div class=\"input-field\">
                               
    
                                <input type=\"password\" name=\"password\" id=\"inputPassword\" class=\"form-control\" autocomplete=\"current-password\" 
                                            required
                                           data-parsley-trigger=\"change\"
                                           data-parsley-error-message=\"Le mot de passe doit contenir au moins 6 caractères.\">
                                     <label for=\"inputPassword\">Votre mot de passe</label>
                                    <i class=\"fa fa-eye show-password\"></i>
                                    <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 57
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("authenticate"), "html", null, true);
        echo "\">
                                    </div>
                                <div class=\"checkbox\">         
                                        <input type=\"checkbox\" name=\"_remember_me\" id=\"_remember_me\">
                                        <label for=\"_remember_me\">Je souhaite rester connecté
                                        </label>
                                </div>
                                <button type=\"submit\" class=\"btn btn-primary my-3\">Ce connecter</button>
                            </form>

                                <div class=\"links\">
                                    <a href=\"";
        // line 68
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("register");
        echo "\">Vous n'êtes pas encore inscrit ?</a>
                                </div>
                            
                        </div>
                    </div>

                </div>
            </div>
        </section>
";
    }

    public function getTemplateName()
    {
        return "security/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  171 => 68,  157 => 57,  137 => 40,  129 => 34,  121 => 32,  118 => 31,  116 => 30,  113 => 29,  107 => 27,  105 => 26,  94 => 17,  85 => 14,  82 => 13,  77 => 12,  68 => 9,  65 => 8,  61 => 7,  58 => 6,  54 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "security/login.html.twig", "/shared/httpd/Projet-Final/templates/security/login.html.twig");
    }
}

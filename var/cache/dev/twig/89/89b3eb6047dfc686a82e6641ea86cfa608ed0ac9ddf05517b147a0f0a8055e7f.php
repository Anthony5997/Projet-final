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

/* base.html.twig */
class __TwigTemplate_a51ca8251e6bb87101383760d58d462a7ca8d1fe8bbcdce2835ba30d237389cb extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang='fr'>
    <head>
        <meta charset=\"UTF-8\">
        <meta name=\"viewport\"
          content=\"width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"ie=edge\">

        <title>";
        // line 9
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

        ";
        // line 11
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 22
        echo "
    </head>
    <body>
        ";
        // line 26
        echo "        <header>
            <input type=\"checkbox\" name=\"\" id=\"toggler\">
            <span class=\"d-flex\"><label class=\"far fa-user\"></label><label for=\"toggler\" class=\"fas fa-angle-right\"></label></span>
            <div class=\"titleHeader d-flex\">
                <a href=\"";
        // line 30
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\" class=\"logo d-flex justify-content-center\"><img  class=\"logo-navbar\" src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/uploads/custom-pic/logo-test-preview.png"), "html", null, true);
        echo "\"/></a>
            </div>

            <nav class=\"navbar\">
            ";
        // line 34
        if ((0 !== twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 34, $this->source); })()), "user", [], "any", false, false, false, 34), null))) {
            // line 35
            echo "            
                <a href=\"";
            // line 36
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
            echo "\"><i class=\"fas fa-home\"></i> Accueil</a>
                <a href=\"";
            // line 37
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_edit", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 37, $this->source); })()), "user", [], "any", false, false, false, 37), "id", [], "any", false, false, false, 37)]), "html", null, true);
            echo "\"><i class=\"far fa-id-badge\"></i> Mon Profil</a>
                <a href=\"";
            // line 38
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("message_discussion", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 38, $this->source); })()), "user", [], "any", false, false, false, 38), "id", [], "any", false, false, false, 38)]), "html", null, true);
            echo "\"><i class=\"far fa-envelope\"></i> Boite de réception</a>
                <a href=\"";
            // line 39
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("review_show", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 39, $this->source); })()), "user", [], "any", false, false, false, 39), "id", [], "any", false, false, false, 39)]), "html", null, true);
            echo "\"><i class=\"far fa-comment-alt\"></i> Mes Avis</a>
                <a href=\"";
            // line 40
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("logout");
            echo "\"><i class=\"fas fa-sign-out-alt\"></i> Déconnexion</a>
            ";
        } else {
            // line 42
            echo "                <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("login");
            echo "\">Ce connecter</a>
                <a href=\"";
            // line 43
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("register");
            echo "\">S'inscrire</a>
            ";
        }
        // line 45
        echo "            </nav>
            <div class=\"icons\">
                <a class=\"icon-custom fas fa-search\" href=\"";
        // line 47
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("trip_search");
        echo "\"></a>
                <a class=\"icon-custom far fa-plus-circle\" href=\"";
        // line 48
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("trip_new");
        echo "\"></a>
            ";
        // line 49
        if ((0 !== twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 49, $this->source); })()), "user", [], "any", false, false, false, 49), null))) {
            // line 50
            echo "              <button type=\"checkbox\" name=\"\" id=\"toggler\">Ok</button>
                <img class=\"navbar-profile-picture\" src=\"";
            // line 51
            echo twig_escape_filter($this->env, ($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/uploads/profilePicture/") . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 51, $this->source); })()), "user", [], "any", false, false, false, 51), "profile_picture", [], "any", false, false, false, 51)), "html", null, true);
            echo "\"/><label class=\"label-right-icon\" for=\"toggler\"><i class=\"fas fa-bars\"></i></label>
                <a class=\"user-icon-profile\" href=\"";
            // line 52
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_edit", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 52, $this->source); })()), "user", [], "any", false, false, false, 52), "id", [], "any", false, false, false, 52)]), "html", null, true);
            echo "\"></a>
                ";
        } else {
            // line 54
            echo "                <input type=\"checkbox\" name=\"\" id=\"toggler\">
                <label class=\"label-right-icon\" for=\"toggler\"><i class=\"fas fa-bars\"></i></label>
            ";
        }
        // line 57
        echo "            </div>
        </header>

    <div class=\"base-content\">
        ";
        // line 61
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 61, $this->source); })()), "flashes", [0 => "success"], "method", false, false, false, 61));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 62
            echo "            <div class=\"alert alert-success text-white pt-4\" style=\"z-index: 999; background-color:chartreuse;\">
                ";
            // line 63
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 66
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 66, $this->source); })()), "flashes", [0 => "error"], "method", false, false, false, 66));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 67
            echo "            <div class=\"alert alert-error text-white pt-4\" style=\"z-index: 999; background-color:chocolate;\">
                ";
            // line 68
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 71
        echo "    ";
        $this->displayBlock('body', $context, $blocks);
        // line 74
        echo "    </div>
          <footer class=\"footer\">

    <ul class=\"social-icon\">
      <li class=\"social-icon__item\"><a class=\"social-icon__link\" href=\"#\">
          <ion-icon name=\"logo-facebook\"></ion-icon>
        </a></li>
      <li class=\"social-icon__item\"><a class=\"social-icon__link\" href=\"#\">
          <ion-icon name=\"logo-twitter\"></ion-icon>
        </a></li>
      <li class=\"social-icon__item\"><a class=\"social-icon__link\" href=\"#\">
          <ion-icon name=\"logo-linkedin\"></ion-icon>
        </a></li>
      <li class=\"social-icon__item\"><a class=\"social-icon__link\" href=\"#\">
          <ion-icon name=\"logo-instagram\"></ion-icon>
        </a></li>
    </ul>
    <ul class=\"menu\">
      <li class=\"menu__item\"><a class=\"menu__link\" href=\"#\">Home</a></li>
      <li class=\"menu__item\"><a class=\"menu__link\" href=\"#\">About</a></li>
      <li class=\"menu__item\"><a class=\"menu__link\" href=\"#\">Services</a></li>
      <li class=\"menu__item\"><a class=\"menu__link\" href=\"#\">Team</a></li>
      <li class=\"menu__item\"><a class=\"menu__link\" href=\"#\">Contact</a></li>

    </ul>
    <p>&copy;2021 Anthony RITA | All Rights Reserved</p>
  </footer>

        ";
        // line 102
        $this->displayBlock('javascripts', $context, $blocks);
        // line 113
        echo "    </body>
</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 9
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Car Trip";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 11
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 12
        echo "            <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css\">
            <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.2/css/all.css\">
            <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-beta/css/bootstrap.min.css\">
            <link rel=\"stylesheet\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/main.css"), "html", null, true);
        echo "\">
            <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css\" integrity=\"sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==\" crossorigin=\"anonymous\" referrerpolicy=\"no-referrer\" />
            <link href=\"https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css\" rel=\"stylesheet\">
            <link rel=\"stylesheet\" href=\"https://pro.fontawesome.com/releases/v5.10.0/css/all.css\">

            <link rel=\"stylesheet\" href=\"style.css\">
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 71
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 72
        echo "    
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 102
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 103
        echo "            <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js\" integrity=\"sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ\" crossorigin=\"anonymous\"></script>
            <script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js\" integrity=\"sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM\" crossorigin=\"anonymous\"></script>
            <script src=\"https://code.jquery.com/jquery-3.4.1.min.js\"></script>
            <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.0.8/popper.min.js\"></script>
            <script src=\"https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-beta/js/bootstrap.min.js\"></script>
            <script src=\"";
        // line 108
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/tabLink.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 109
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/navbarScript.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 110
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/guessPlaces.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 111
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/routeRequest.js"), "html", null, true);
        echo "\"></script>
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  337 => 111,  333 => 110,  329 => 109,  325 => 108,  318 => 103,  308 => 102,  297 => 72,  287 => 71,  270 => 15,  265 => 12,  255 => 11,  236 => 9,  225 => 113,  223 => 102,  193 => 74,  190 => 71,  181 => 68,  178 => 67,  173 => 66,  164 => 63,  161 => 62,  157 => 61,  151 => 57,  146 => 54,  141 => 52,  137 => 51,  134 => 50,  132 => 49,  128 => 48,  124 => 47,  120 => 45,  115 => 43,  110 => 42,  105 => 40,  101 => 39,  97 => 38,  93 => 37,  89 => 36,  86 => 35,  84 => 34,  75 => 30,  69 => 26,  64 => 22,  62 => 11,  57 => 9,  47 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang='fr'>
    <head>
        <meta charset=\"UTF-8\">
        <meta name=\"viewport\"
          content=\"width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"ie=edge\">

        <title>{% block title %}Car Trip{% endblock %}</title>

        {% block stylesheets %}
            <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css\">
            <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.2/css/all.css\">
            <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-beta/css/bootstrap.min.css\">
            <link rel=\"stylesheet\" href=\"{{ asset('assets/css/main.css') }}\">
            <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css\" integrity=\"sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==\" crossorigin=\"anonymous\" referrerpolicy=\"no-referrer\" />
            <link href=\"https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css\" rel=\"stylesheet\">
            <link rel=\"stylesheet\" href=\"https://pro.fontawesome.com/releases/v5.10.0/css/all.css\">

            <link rel=\"stylesheet\" href=\"style.css\">
        {% endblock %}

    </head>
    <body>
        {# {{dump(app.user)}} #}
        <header>
            <input type=\"checkbox\" name=\"\" id=\"toggler\">
            <span class=\"d-flex\"><label class=\"far fa-user\"></label><label for=\"toggler\" class=\"fas fa-angle-right\"></label></span>
            <div class=\"titleHeader d-flex\">
                <a href=\"{{path('home')}}\" class=\"logo d-flex justify-content-center\"><img  class=\"logo-navbar\" src=\"{{asset('assets/uploads/custom-pic/logo-test-preview.png')}}\"/></a>
            </div>

            <nav class=\"navbar\">
            {% if app.user != null %}
            
                <a href=\"{{path('home')}}\"><i class=\"fas fa-home\"></i> Accueil</a>
                <a href=\"{{ path ('user_edit', {'id': app.user.id})}}\"><i class=\"far fa-id-badge\"></i> Mon Profil</a>
                <a href=\"{{ path ('message_discussion', {'id': app.user.id})}}\"><i class=\"far fa-envelope\"></i> Boite de réception</a>
                <a href=\"{{ path ('review_show', {'id': app.user.id})}}\"><i class=\"far fa-comment-alt\"></i> Mes Avis</a>
                <a href=\"{{ path ('logout')}}\"><i class=\"fas fa-sign-out-alt\"></i> Déconnexion</a>
            {% else %}
                <a href=\"{{ path ('login')}}\">Ce connecter</a>
                <a href=\"{{ path ('register')}}\">S'inscrire</a>
            {% endif %}
            </nav>
            <div class=\"icons\">
                <a class=\"icon-custom fas fa-search\" href=\"{{path('trip_search')}}\"></a>
                <a class=\"icon-custom far fa-plus-circle\" href=\"{{path('trip_new')}}\"></a>
            {% if app.user != null %}
              <button type=\"checkbox\" name=\"\" id=\"toggler\">Ok</button>
                <img class=\"navbar-profile-picture\" src=\"{{asset('assets/uploads/profilePicture/') ~ app.user.profile_picture}}\"/><label class=\"label-right-icon\" for=\"toggler\"><i class=\"fas fa-bars\"></i></label>
                <a class=\"user-icon-profile\" href=\"{{ path ('user_edit', {'id': app.user.id})}}\"></a>
                {% else %}
                <input type=\"checkbox\" name=\"\" id=\"toggler\">
                <label class=\"label-right-icon\" for=\"toggler\"><i class=\"fas fa-bars\"></i></label>
            {% endif %}
            </div>
        </header>

    <div class=\"base-content\">
        {% for message in app.flashes('success') %}
            <div class=\"alert alert-success text-white pt-4\" style=\"z-index: 999; background-color:chartreuse;\">
                {{ message }}
            </div>
        {% endfor %}
        {% for message in app.flashes('error') %}
            <div class=\"alert alert-error text-white pt-4\" style=\"z-index: 999; background-color:chocolate;\">
                {{ message }}
            </div>
        {% endfor %}
    {% block body %}
    
    {% endblock %}
    </div>
          <footer class=\"footer\">

    <ul class=\"social-icon\">
      <li class=\"social-icon__item\"><a class=\"social-icon__link\" href=\"#\">
          <ion-icon name=\"logo-facebook\"></ion-icon>
        </a></li>
      <li class=\"social-icon__item\"><a class=\"social-icon__link\" href=\"#\">
          <ion-icon name=\"logo-twitter\"></ion-icon>
        </a></li>
      <li class=\"social-icon__item\"><a class=\"social-icon__link\" href=\"#\">
          <ion-icon name=\"logo-linkedin\"></ion-icon>
        </a></li>
      <li class=\"social-icon__item\"><a class=\"social-icon__link\" href=\"#\">
          <ion-icon name=\"logo-instagram\"></ion-icon>
        </a></li>
    </ul>
    <ul class=\"menu\">
      <li class=\"menu__item\"><a class=\"menu__link\" href=\"#\">Home</a></li>
      <li class=\"menu__item\"><a class=\"menu__link\" href=\"#\">About</a></li>
      <li class=\"menu__item\"><a class=\"menu__link\" href=\"#\">Services</a></li>
      <li class=\"menu__item\"><a class=\"menu__link\" href=\"#\">Team</a></li>
      <li class=\"menu__item\"><a class=\"menu__link\" href=\"#\">Contact</a></li>

    </ul>
    <p>&copy;2021 Anthony RITA | All Rights Reserved</p>
  </footer>

        {% block javascripts %}
            <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js\" integrity=\"sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ\" crossorigin=\"anonymous\"></script>
            <script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js\" integrity=\"sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM\" crossorigin=\"anonymous\"></script>
            <script src=\"https://code.jquery.com/jquery-3.4.1.min.js\"></script>
            <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.0.8/popper.min.js\"></script>
            <script src=\"https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-beta/js/bootstrap.min.js\"></script>
            <script src=\"{{asset('assets/js/tabLink.js')}}\"></script>
            <script src=\"{{asset('assets/js/navbarScript.js')}}\"></script>
            <script src=\"{{asset('assets/js/guessPlaces.js')}}\"></script>
            <script src=\"{{asset('assets/js/routeRequest.js')}}\"></script>
        {% endblock %}
    </body>
</html>", "base.html.twig", "/shared/httpd/Projet-Final/templates/base.html.twig");
    }
}

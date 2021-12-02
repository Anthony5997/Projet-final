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
            <span class=\"d-flex\"><label class=\"far fa-user\"></label><label for=\"toggler\" class=\"far fa-angle-right\"></label></span>
            <div class=\"titleHeader d-flex\">
                <a href=\"";
        // line 30
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\" class=\"logo d-flex justify-content-center\"><img  class=\"logo-navbar\" src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/uploads/custom-pic/logotest.webp"), "html", null, true);
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
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_edit", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 39, $this->source); })()), "user", [], "any", false, false, false, 39), "id", [], "any", false, false, false, 39)]), "html", null, true);
            echo "#tabs-2\"><i class=\"fas fa-file-alt\"></i> Mes informations personnel</a>
                <a href=\"";
            // line 40
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_edit", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 40, $this->source); })()), "user", [], "any", false, false, false, 40), "id", [], "any", false, false, false, 40)]), "html", null, true);
            echo "#tabs-3\"><i class=\"fas fa-info-circle\"></i> Préférence de voyage</a>
                <a href=\"";
            // line 41
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_edit", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 41, $this->source); })()), "user", [], "any", false, false, false, 41), "id", [], "any", false, false, false, 41)]), "html", null, true);
            echo "#tabs-4\"><i class=\"fas fa-car-side\"></i> Mon véhicule</a>
                <a href=\"";
            // line 42
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_edit", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 42, $this->source); })()), "user", [], "any", false, false, false, 42), "id", [], "any", false, false, false, 42)]), "html", null, true);
            echo "#tabs-5\"><i class=\"fas fa-road\"></i> Mes trajets</a>
                <a href=\"";
            // line 43
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("review_show", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 43, $this->source); })()), "user", [], "any", false, false, false, 43), "id", [], "any", false, false, false, 43)]), "html", null, true);
            echo "\"><i class=\"far fa-comment-alt\"></i> Mes Avis</a>
                <a href=\"";
            // line 44
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_edit", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 44, $this->source); })()), "user", [], "any", false, false, false, 44), "id", [], "any", false, false, false, 44)]), "html", null, true);
            echo "#tabs-6\"><i class=\"far fa-user-circle\"></i> Mon compte</a>
                <a href=\"";
            // line 45
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("logout");
            echo "\"><i class=\"fas fa-sign-out-alt\"></i> Déconnexion</a>
            ";
        } else {
            // line 47
            echo "                <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("login");
            echo "\">Ce connecter</a>
                <a href=\"";
            // line 48
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("register");
            echo "\">S'inscrire</a>
            ";
        }
        // line 50
        echo "            </nav>
            <div class=\"icons\">
                <a class=\"icon-custom fas fa-search\" href=\"";
        // line 52
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("trip_search");
        echo "\"></a>
                <a class=\"icon-custom far fa-plus-circle\" href=\"";
        // line 53
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("trip_new");
        echo "\"></a>
            ";
        // line 54
        if ((0 !== twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 54, $this->source); })()), "user", [], "any", false, false, false, 54), null))) {
            // line 55
            echo "              <input type=\"checkbox\" name=\"\" id=\"toggler\">
                <img class=\"navbar-profile-picture\" src=\"";
            // line 56
            echo twig_escape_filter($this->env, ($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/uploads/profilePicture/") . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 56, $this->source); })()), "user", [], "any", false, false, false, 56), "profile_picture", [], "any", false, false, false, 56)), "html", null, true);
            echo "\"/><label class=\"label-right-icon\" for=\"toggler\"><i class=\"fas fa-arrow-down\"></i></label>
                <a class=\"user-icon-profile\" href=\"";
            // line 57
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_edit", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 57, $this->source); })()), "user", [], "any", false, false, false, 57), "id", [], "any", false, false, false, 57)]), "html", null, true);
            echo "\"></a>
                ";
        } else {
            // line 59
            echo "                <input type=\"checkbox\" name=\"\" id=\"toggler\">
                <label class=\"label-right-icon\" for=\"toggler\"><i class=\"fas fa-arrow-down\"></i></label>
            ";
        }
        // line 62
        echo "            </div>
        </header>
        ";
        // line 64
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 64, $this->source); })()), "flashes", [0 => "success"], "method", false, false, false, 64));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 65
            echo "            <div class=\"alert alert-success text-white\">
                ";
            // line 66
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 69
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 69, $this->source); })()), "flashes", [0 => "error"], "method", false, false, false, 69));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 70
            echo "            <div class=\"alert alert-error text-white\">
                ";
            // line 71
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 74
        echo "
    <div class=\"base-content\">
    ";
        // line 76
        $this->displayBlock('body', $context, $blocks);
        // line 79
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
        // line 107
        $this->displayBlock('javascripts', $context, $blocks);
        // line 118
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

    // line 76
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 77
        echo "    
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 107
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 108
        echo "            <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js\" integrity=\"sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ\" crossorigin=\"anonymous\"></script>
            <script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js\" integrity=\"sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM\" crossorigin=\"anonymous\"></script>
            <script src=\"https://code.jquery.com/jquery-3.4.1.min.js\"></script>
            <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.0.8/popper.min.js\"></script>
            <script src=\"https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-beta/js/bootstrap.min.js\"></script>
            <script src=\"";
        // line 113
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/tabLink.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 114
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/navbarScript.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 115
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/guessPlaces.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 116
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
        return array (  358 => 116,  354 => 115,  350 => 114,  346 => 113,  339 => 108,  329 => 107,  318 => 77,  308 => 76,  291 => 15,  286 => 12,  276 => 11,  257 => 9,  246 => 118,  244 => 107,  214 => 79,  212 => 76,  208 => 74,  199 => 71,  196 => 70,  191 => 69,  182 => 66,  179 => 65,  175 => 64,  171 => 62,  166 => 59,  161 => 57,  157 => 56,  154 => 55,  152 => 54,  148 => 53,  144 => 52,  140 => 50,  135 => 48,  130 => 47,  125 => 45,  121 => 44,  117 => 43,  113 => 42,  109 => 41,  105 => 40,  101 => 39,  97 => 38,  93 => 37,  89 => 36,  86 => 35,  84 => 34,  75 => 30,  69 => 26,  64 => 22,  62 => 11,  57 => 9,  47 => 1,);
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
            <span class=\"d-flex\"><label class=\"far fa-user\"></label><label for=\"toggler\" class=\"far fa-angle-right\"></label></span>
            <div class=\"titleHeader d-flex\">
                <a href=\"{{path('home')}}\" class=\"logo d-flex justify-content-center\"><img  class=\"logo-navbar\" src=\"{{asset('assets/uploads/custom-pic/logotest.webp')}}\"/></a>
            </div>

            <nav class=\"navbar\">
            {% if app.user != null %}
            
                <a href=\"{{path('home')}}\"><i class=\"fas fa-home\"></i> Accueil</a>
                <a href=\"{{ path ('user_edit', {'id': app.user.id})}}\"><i class=\"far fa-id-badge\"></i> Mon Profil</a>
                <a href=\"{{ path ('message_discussion', {'id': app.user.id})}}\"><i class=\"far fa-envelope\"></i> Boite de réception</a>
                <a href=\"{{ path ('user_edit', {'id': app.user.id})}}#tabs-2\"><i class=\"fas fa-file-alt\"></i> Mes informations personnel</a>
                <a href=\"{{ path ('user_edit', {'id': app.user.id})}}#tabs-3\"><i class=\"fas fa-info-circle\"></i> Préférence de voyage</a>
                <a href=\"{{ path ('user_edit', {'id': app.user.id})}}#tabs-4\"><i class=\"fas fa-car-side\"></i> Mon véhicule</a>
                <a href=\"{{ path ('user_edit', {'id': app.user.id})}}#tabs-5\"><i class=\"fas fa-road\"></i> Mes trajets</a>
                <a href=\"{{ path ('review_show', {'id': app.user.id})}}\"><i class=\"far fa-comment-alt\"></i> Mes Avis</a>
                <a href=\"{{ path ('user_edit', {'id': app.user.id})}}#tabs-6\"><i class=\"far fa-user-circle\"></i> Mon compte</a>
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
              <input type=\"checkbox\" name=\"\" id=\"toggler\">
                <img class=\"navbar-profile-picture\" src=\"{{asset('assets/uploads/profilePicture/') ~ app.user.profile_picture}}\"/><label class=\"label-right-icon\" for=\"toggler\"><i class=\"fas fa-arrow-down\"></i></label>
                <a class=\"user-icon-profile\" href=\"{{ path ('user_edit', {'id': app.user.id})}}\"></a>
                {% else %}
                <input type=\"checkbox\" name=\"\" id=\"toggler\">
                <label class=\"label-right-icon\" for=\"toggler\"><i class=\"fas fa-arrow-down\"></i></label>
            {% endif %}
            </div>
        </header>
        {% for message in app.flashes('success') %}
            <div class=\"alert alert-success text-white\">
                {{ message }}
            </div>
        {% endfor %}
        {% for message in app.flashes('error') %}
            <div class=\"alert alert-error text-white\">
                {{ message }}
            </div>
        {% endfor %}

    <div class=\"base-content\">
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

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
        // line 21
        echo "
    </head>
    
    <body>

      ";
        // line 146
        echo $this->extensions['Symfony\Bridge\Twig\Extension\DumpExtension']->dump($this->env, $context, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 146, $this->source); })()), "user", [], "any", false, false, false, 146));
        echo "
<header>

    <input type=\"checkbox\" name=\"\" id=\"toggler\">
    <span class=\"d-flex\"><label class=\"far fa-user\"></label><label for=\"toggler\" class=\"far fa-angle-right\"></label></span>
    <a href=\"";
        // line 151
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\" class=\"logo\">Accueil</a>

    <nav class=\"navbar\">
    ";
        // line 154
        if ((0 !== twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 154, $this->source); })()), "user", [], "any", false, false, false, 154), null))) {
            // line 155
            echo "        <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
            echo "\">home</a>
        <a href=\"";
            // line 156
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_edit", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 156, $this->source); })()), "user", [], "any", false, false, false, 156), "id", [], "any", false, false, false, 156)]), "html", null, true);
            echo "\">Mon Profil</a>
        <a href=\"#products\">products</a>
     ";
        } else {
            // line 159
            echo "       <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("login");
            echo "\">Ce connecter</a>
       <a href=\"";
            // line 160
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("register");
            echo "\">S'inscrire</a>
    
    ";
        }
        // line 163
        echo "    </nav>
    <div class=\"icons d-flex justify-content-center\">
        <a href=\"#\" class=\"far fa-plus-circle\"></a>
        <a href=\"#\" class=\"fas fa-search\"></a>
      ";
        // line 167
        if ((0 !== twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 167, $this->source); })()), "user", [], "any", false, false, false, 167), null))) {
            // line 168
            echo "        <a class=\"user-icon-profile\" href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_edit", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 168, $this->source); })()), "user", [], "any", false, false, false, 168), "id", [], "any", false, false, false, 168)]), "html", null, true);
            echo "\"><img class=\"navbar-profile-picture\" src=\"";
            echo twig_escape_filter($this->env, ($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/uploads/profilePicture/") . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 168, $this->source); })()), "user", [], "any", false, false, false, 168), "profile_picture", [], "any", false, false, false, 168)), "html", null, true);
            echo "\"/></a>
        ";
        } else {
            // line 170
            echo "       <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("login");
            echo "\" class=\"far fa-user-plus user-icon-profile\" ></a>
      ";
        }
        // line 172
        echo "    </div>
</header>


    ";
        // line 176
        $this->displayBlock('body', $context, $blocks);
        // line 180
        echo "
        ";
        // line 181
        $this->displayBlock('javascripts', $context, $blocks);
        // line 203
        echo "    </body>
</html>


";
        
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

        echo "Sample Symfony";
        
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

    // line 176
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 177
        echo "    
    
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 181
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 182
        echo "            <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js\" integrity=\"sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ\" crossorigin=\"anonymous\"></script>
            <script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js\" integrity=\"sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM\" crossorigin=\"anonymous\"></script>
            <script src=\"https://code.jquery.com/jquery-3.4.1.min.js\"></script>
            <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.0.8/popper.min.js\"></script>
            <script src=\"https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-beta/js/bootstrap.min.js\"></script>
            <script>
                    \$(document).ready(function(){
                    \$('.fa-angle-right').click(function(){
                    \$('.fa-angle-right').toggleClass('fa-times')
                    })
                \$(window).scroll(function(){
                if (\$(window).scrollTop() >= 20)
                {
                    \$('header').addClass('active')
                } else {
                    \$('header').removeClass('active')
                }
                    });})
  
            </script>
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
        return array (  240 => 182,  230 => 181,  218 => 177,  208 => 176,  192 => 15,  187 => 12,  177 => 11,  158 => 9,  144 => 203,  142 => 181,  139 => 180,  137 => 176,  131 => 172,  125 => 170,  117 => 168,  115 => 167,  109 => 163,  103 => 160,  98 => 159,  92 => 156,  87 => 155,  85 => 154,  79 => 151,  71 => 146,  64 => 21,  62 => 11,  57 => 9,  47 => 1,);
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

        <title>{% block title %}Sample Symfony{% endblock %}</title>

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

      {# <header id=\"header\" class=\"tt-nav transparent-header \">
            <div class=\"header-sticky semi-transparent\">
                <div class=\"container\">

                    <div id=\"materialize-menu\" class=\"menuzord\">

                        <a class=\"brand logo-brand\" href=\"/\"></a>
                        <div id=\"mobile-menu\">
                            <div class=\"nav-wrapper\" id=\"toggle\">
                                <span class=\"top\"></span>
                                <span class=\"middle\"></span>
                                <span class=\"bottom\"></span>
                            </div>
                            <div class=\"icon-wrapper\">
                                <span class=\"account\">
                                    <a href=\"/templates/auth/profile.html\">
                                        <i class=\"material-icons\">&#xE7FD;</i>
                                    </a>
                                </span>
                            </div>
                            <div class=\"nav-overlay\" id=\"overlay\">
                                <nav class=\"overlay-menu\">
                                    <ul>
                                        <li><a href=\"/\">Home</a></li>
                                        <li><a href=\"{{ path ('home')}}\">About Us</a></li>
                                         <li><a href=\"{{ path ('home')}}\">Contact</a></li> 
                                        {% if is_granted('IS_AUTHENTICATED_REMEMBERED') %}
                                            {% if (is_granted('ROLE_CANDIDATE')) and (is_granted('ROLE_CLIENT') == false) and (is_granted('ROLE_ADMIN') == false) %} 
                                            
                                            <li><a target=\"_self\" href=\"{{ path ('user_edit', {'id': app.user.id})}}\">Profile</a></li>
                                            {% elseif (is_granted('ROLE_CLIENT')) and (is_granted('ROLE_CANDIDATE') == false) and (is_granted('ROLE_ADMIN') == false) %}
                                             <li><a target=\"_self\" href=\"{{ path ('candidacies', {'id': client.id})}}\">Candidacies received</a>
                                </li>
                                            <li><a target=\"_self\" href=\"{{ path ('client_edit', {'id': client.id})}}\">Customer space </a></li>
                                            {% endif %}
                                        <li><a href=\"/logout.html\">Logout</a></li>
                                        {% endif %}
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
                          {% if is_granted('IS_AUTHENTICATED_REMEMBERED') %}

                            {% if (is_granted('ROLE_USER'))%}                            

                             <ul class=\"menuzord-menu pull-right light\" role=\"navigation\">
                                <li class=\" dropdown\">
                                    <a target=\"_self\" href=\"{{ path ('user_edit', {'id': app.user.id})}}\">
                                        <span>Profile</span>
                                    </a>
                                </li>
                                <li class=\" dropdown\">
                                    <a target=\"_self\" href=\"{{ path ('logout')}}\" class=\"btn bn-lg gradient secondary btn-block waves-effect waves-light btn-register\">
                                        <span>Logout</span>
                                    </a>

                                </li>
                            </ul>

                            {% elseif is_granted('ROLE_ADMIN') %}

                            <ul class=\"menuzord-menu pull-right light\" role=\"navigation\">
                                <li class=\" dropdown\">
                                      <a target=\"_self\" href=\"{{ path ('home')}}\">
                                        <span>Admin space</span>
                                    </a>
                                </li>
                                <li class=\" dropdown\">
                                    <a target=\"_self\" href=\"{{ path ('logout')}}\" class=\"btn bn-lg gradient secondary btn-block waves-effect waves-light btn-register\">
                                        <span>Logout</span>
                                    </a>

                                </li>
                            </ul>

                            {% endif %}
                        
                         {% else %}
                       
                            <ul class=\"menuzord-menu pull-right light\" role=\"navigation\">
                                <li class=\" dropdown\">
                                    <a target=\"_self\" href=\"{{ path ('login')}}\">
                                        <span>Login</span>
                                    </a>
                                </li>
                                <li class=\" dropdown\">
                                    <a target=\"_self\" href=\"{{ path ('register')}}\" class=\"btn bn-lg gradient secondary btn-block waves-effect waves-light btn-register\">
                                        <span>Sign Up</span>
                                    </a>

                                </li>
                            </ul>
                         {% endif %}
                            <ul class=\"menuzord-menu pull-right light\" role=\"navigation\">
                                <li class=\"active dropdown\">
                                    <a target=\"_self\" href=\"/\">
                                        <i class=\"\"></i>
                                        <span>Home</span>
                                    </a>
                                </li>
                            
                                <li class=\" dropdown\">
                                    <a target=\"_self\" href=\"{{ path ('home')}}\">
                                        <i class=\"\"></i>
                                        <span>About us</span>
                                    </a>
                                </li>
                                <li class=\" dropdown\">
                                    <a href=\"{{ path ('home')}}\">
                                        <i class=\"\"></i>
                                        <span>Contact</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </header> #}
{{dump(app.user)}}
<header>

    <input type=\"checkbox\" name=\"\" id=\"toggler\">
    <span class=\"d-flex\"><label class=\"far fa-user\"></label><label for=\"toggler\" class=\"far fa-angle-right\"></label></span>
    <a href=\"{{path('home')}}\" class=\"logo\">Accueil</a>

    <nav class=\"navbar\">
    {% if app.user != null %}
        <a href=\"{{path('home')}}\">home</a>
        <a href=\"{{ path ('user_edit', {'id': app.user.id})}}\">Mon Profil</a>
        <a href=\"#products\">products</a>
     {% else %}
       <a href=\"{{ path ('login')}}\">Ce connecter</a>
       <a href=\"{{ path ('register')}}\">S'inscrire</a>
    
    {% endif %}
    </nav>
    <div class=\"icons d-flex justify-content-center\">
        <a href=\"#\" class=\"far fa-plus-circle\"></a>
        <a href=\"#\" class=\"fas fa-search\"></a>
      {% if app.user != null %}
        <a class=\"user-icon-profile\" href=\"{{ path ('user_edit', {'id': app.user.id})}}\"><img class=\"navbar-profile-picture\" src=\"{{asset('assets/uploads/profilePicture/') ~ app.user.profile_picture}}\"/></a>
        {% else %}
       <a href=\"{{ path ('login')}}\" class=\"far fa-user-plus user-icon-profile\" ></a>
      {% endif %}
    </div>
</header>


    {% block body %}
    
    
    {% endblock %}

        {% block javascripts %}
            <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js\" integrity=\"sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ\" crossorigin=\"anonymous\"></script>
            <script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js\" integrity=\"sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM\" crossorigin=\"anonymous\"></script>
            <script src=\"https://code.jquery.com/jquery-3.4.1.min.js\"></script>
            <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.0.8/popper.min.js\"></script>
            <script src=\"https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-beta/js/bootstrap.min.js\"></script>
            <script>
                    \$(document).ready(function(){
                    \$('.fa-angle-right').click(function(){
                    \$('.fa-angle-right').toggleClass('fa-times')
                    })
                \$(window).scroll(function(){
                if (\$(window).scrollTop() >= 20)
                {
                    \$('header').addClass('active')
                } else {
                    \$('header').removeClass('active')
                }
                    });})
  
            </script>
        {% endblock %}
    </body>
</html>


", "base.html.twig", "/shared/httpd/Projet-Final/templates/base.html.twig");
    }
}

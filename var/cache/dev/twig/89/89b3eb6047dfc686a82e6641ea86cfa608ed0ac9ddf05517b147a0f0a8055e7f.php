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
        // line 18
        echo "
    </head>
    
    <body>

      ";
        // line 143
        echo "
<nav class=\"row\">
    <div class=\"d-flex justify-content-around\">
        <div class=\"d-flex justify-content-start\">
            X
        </div>
        <div class=\"d-flex\">
           <a class=\"d-flex justify-content-center\" href=\"";
        // line 150
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\"><img class=\"navbar-profile-picture\"src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/uploads/profilePicture/backpack-613b257dbf531.jpg"), "html", null, true);
        echo "\"/></a>
        </div>
        <div class=\"d-flex justify-content-end\">
            <a class=\"d-flex justify-content-end\" href=\"";
        // line 153
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\"> <img class=\"navbar-profile-picture\"src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/uploads/profilePicture/default_profile_picture.jpg"), "html", null, true);
        echo "\"/></a>
        </div>
    </div>
</nav>


    ";
        // line 159
        $this->displayBlock('body', $context, $blocks);
        // line 163
        echo "
        ";
        // line 164
        $this->displayBlock('javascripts', $context, $blocks);
        // line 171
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
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 159
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 160
        echo "    
    
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 164
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 165
        echo "            <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js\" integrity=\"sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ\" crossorigin=\"anonymous\"></script>
            <script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js\" integrity=\"sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM\" crossorigin=\"anonymous\"></script>
            <script src=\"https://code.jquery.com/jquery-3.4.1.min.js\"></script>
            <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.0.8/popper.min.js\"></script>
            <script src=\"https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-beta/js/bootstrap.min.js\"></script>
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
        return array (  199 => 165,  189 => 164,  177 => 160,  167 => 159,  154 => 15,  149 => 12,  139 => 11,  120 => 9,  106 => 171,  104 => 164,  101 => 163,  99 => 159,  88 => 153,  80 => 150,  71 => 143,  64 => 18,  62 => 11,  57 => 9,  47 => 1,);
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

<nav class=\"row\">
    <div class=\"d-flex justify-content-around\">
        <div class=\"d-flex justify-content-start\">
            X
        </div>
        <div class=\"d-flex\">
           <a class=\"d-flex justify-content-center\" href=\"{{path('home')}}\"><img class=\"navbar-profile-picture\"src=\"{{ asset('assets/uploads/profilePicture/backpack-613b257dbf531.jpg') }}\"/></a>
        </div>
        <div class=\"d-flex justify-content-end\">
            <a class=\"d-flex justify-content-end\" href=\"{{path('home')}}\"> <img class=\"navbar-profile-picture\"src=\"{{ asset('assets/uploads/profilePicture/default_profile_picture.jpg') }}\"/></a>
        </div>
    </div>
</nav>


    {% block body %}
    
    
    {% endblock %}

        {% block javascripts %}
            <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js\" integrity=\"sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ\" crossorigin=\"anonymous\"></script>
            <script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js\" integrity=\"sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM\" crossorigin=\"anonymous\"></script>
            <script src=\"https://code.jquery.com/jquery-3.4.1.min.js\"></script>
            <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.0.8/popper.min.js\"></script>
            <script src=\"https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-beta/js/bootstrap.min.js\"></script>
        {% endblock %}
    </body>
</html>


", "base.html.twig", "/shared/httpd/Projet-Final/templates/base.html.twig");
    }
}

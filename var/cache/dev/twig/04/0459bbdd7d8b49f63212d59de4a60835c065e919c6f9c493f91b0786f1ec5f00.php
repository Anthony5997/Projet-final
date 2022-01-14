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

/* admin/index.html.twig */
class __TwigTemplate_2beaf0d9b5effa00bf0f995df2578abb3e1ef87de9e33d9b6e73128b2490266f extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "admin/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Hello AdminController!";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<style>
    .example-wrapper { margin: 1em auto; max-width: 800px; width: 95%; font: 18px/1.5 sans-serif; }
    .example-wrapper code { background: #F5F5F5; padding: 2px 6px; }
</style>

";
        // line 55
        echo "

<div class=\"app-container mt-4\">
  <div class=\"app-header\">
    <div class=\"app-header-left\">
      <span class=\"app-icon\"></span>
      <p class=\"app-name\">Administration</p>
      <div class=\"search-wrapper\">
        <input class=\"search-input\" type=\"text\" placeholder=\"Search\">
        <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"20\" height=\"20\" fill=\"none\" stroke=\"currentColor\" stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" class=\"feather feather-search\" viewBox=\"0 0 24 24\">
          <defs></defs>
          <circle cx=\"11\" cy=\"11\" r=\"8\"></circle>
          <path d=\"M21 21l-4.35-4.35\"></path>
        </svg>
      </div>
    </div>
    <div class=\"app-header-right\">
      <button class=\"mode-switch\" title=\"Switch Theme\">
        <svg class=\"moon\" fill=\"none\" stroke=\"currentColor\" stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\">
          <defs></defs>
          <path d=\"M21 12.79A9 9 0 1111.21 3 7 7 0 0021 12.79z\"></path>
        </svg>
      </button>
      <button class=\"notification-btn\">
        <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-bell\">
          <path d=\"M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9\" />
          <path d=\"M13.73 21a2 2 0 0 1-3.46 0\" /></svg>
      </button>
    </div>
    <button class=\"messages-btn\">
      <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"20\" height=\"20\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-message-circle\">
        <path d=\"M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z\" /></svg>
    </button>
  </div>
  <div class=\"app-content\">
    <div class=\"app-sidebar\">
      <a href=\"\" class=\"app-sidebar-link active\">
        <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-home\">
          <path d=\"M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z\" />
          <polyline points=\"9 22 9 12 15 12 15 22\" /></svg>
      </a>
      <a href=\"\" class=\"app-sidebar-link\">
        <svg class=\"link-icon\" xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" fill=\"none\" stroke=\"currentColor\" stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" class=\"feather feather-pie-chart\" viewBox=\"0 0 24 24\">
          <defs />
          <path d=\"M21.21 15.89A10 10 0 118 2.83M22 12A10 10 0 0012 2v10z\" />
        </svg>
      </a>
      <a href=\"\" class=\"app-sidebar-link\">
        <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-calendar\">
          <rect x=\"3\" y=\"4\" width=\"18\" height=\"18\" rx=\"2\" ry=\"2\" />
          <line x1=\"16\" y1=\"2\" x2=\"16\" y2=\"6\" />
          <line x1=\"8\" y1=\"2\" x2=\"8\" y2=\"6\" />
          <line x1=\"3\" y1=\"10\" x2=\"21\" y2=\"10\" /></svg>
      </a>
      <a href=\"\" class=\"app-sidebar-link\">
        <svg class=\"link-icon\" xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" fill=\"none\" stroke=\"currentColor\" stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" class=\"feather feather-settings\" viewBox=\"0 0 24 24\">
          <defs />
          <circle cx=\"12\" cy=\"12\" r=\"3\" />
          <path d=\"M19.4 15a1.65 1.65 0 00.33 1.82l.06.06a2 2 0 010 2.83 2 2 0 01-2.83 0l-.06-.06a1.65 1.65 0 00-1.82-.33 1.65 1.65 0 00-1 1.51V21a2 2 0 01-2 2 2 2 0 01-2-2v-.09A1.65 1.65 0 009 19.4a1.65 1.65 0 00-1.82.33l-.06.06a2 2 0 01-2.83 0 2 2 0 010-2.83l.06-.06a1.65 1.65 0 00.33-1.82 1.65 1.65 0 00-1.51-1H3a2 2 0 01-2-2 2 2 0 012-2h.09A1.65 1.65 0 004.6 9a1.65 1.65 0 00-.33-1.82l-.06-.06a2 2 0 010-2.83 2 2 0 012.83 0l.06.06a1.65 1.65 0 001.82.33H9a1.65 1.65 0 001-1.51V3a2 2 0 012-2 2 2 0 012 2v.09a1.65 1.65 0 001 1.51 1.65 1.65 0 001.82-.33l.06-.06a2 2 0 012.83 0 2 2 0 010 2.83l-.06.06a1.65 1.65 0 00-.33 1.82V9a1.65 1.65 0 001.51 1H21a2 2 0 012 2 2 2 0 01-2 2h-.09a1.65 1.65 0 00-1.51 1z\" />
        </svg>
      </a>
    </div>
    <div class=\"projects-section\">
      <div class=\"projects-section-header\">
        <p>Trajets</p>
        ";
        // line 121
        echo "      </div>
      <div class=\"projects-section-line\">
        <div class=\"projects-status\">
          <div class=\"item-status\">
            <span class=\"status-number\">";
        // line 125
        echo twig_escape_filter($this->env, (isset($context["tripIncoming"]) || array_key_exists("tripIncoming", $context) ? $context["tripIncoming"] : (function () { throw new RuntimeError('Variable "tripIncoming" does not exist.', 125, $this->source); })()), "html", null, true);
        echo "</span>
            <span class=\"status-type\">Trajets prévus</span>
          </div>
          <div class=\"item-status\">
            <span class=\"status-number\">";
        // line 129
        echo twig_escape_filter($this->env, (isset($context["tripCompleted"]) || array_key_exists("tripCompleted", $context) ? $context["tripCompleted"] : (function () { throw new RuntimeError('Variable "tripCompleted" does not exist.', 129, $this->source); })()), "html", null, true);
        echo "</span>
            <span class=\"status-type\">Terminés</span>
          </div>
          <div class=\"item-status\">
            <span class=\"status-number\">";
        // line 133
        echo twig_escape_filter($this->env, (isset($context["allTrip"]) || array_key_exists("allTrip", $context) ? $context["allTrip"] : (function () { throw new RuntimeError('Variable "allTrip" does not exist.', 133, $this->source); })()), "html", null, true);
        echo "</span>
            <span class=\"status-type\">Trajets au total</span>
          </div>
        </div>
        <div class=\"view-actions\">
          <button class=\"view-btn list-view\" title=\"List View\">
            <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-list\">
              <line x1=\"8\" y1=\"6\" x2=\"21\" y2=\"6\" />
              <line x1=\"8\" y1=\"12\" x2=\"21\" y2=\"12\" />
              <line x1=\"8\" y1=\"18\" x2=\"21\" y2=\"18\" />
              <line x1=\"3\" y1=\"6\" x2=\"3.01\" y2=\"6\" />
              <line x1=\"3\" y1=\"12\" x2=\"3.01\" y2=\"12\" />
              <line x1=\"3\" y1=\"18\" x2=\"3.01\" y2=\"18\" /></svg>
          </button>
          <button class=\"view-btn grid-view active\" title=\"Grid View\">
            <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"20\" height=\"20\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-grid\">
              <rect x=\"3\" y=\"3\" width=\"7\" height=\"7\" />
              <rect x=\"14\" y=\"3\" width=\"7\" height=\"7\" />
              <rect x=\"14\" y=\"14\" width=\"7\" height=\"7\" />
              <rect x=\"3\" y=\"14\" width=\"7\" height=\"7\" /></svg>
          </button>
        </div>
      </div>
      <div class=\"project-boxes jsGridView\"> 
      ";
        // line 157
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["lastTrips"]) || array_key_exists("lastTrips", $context) ? $context["lastTrips"] : (function () { throw new RuntimeError('Variable "lastTrips" does not exist.', 157, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["trip"]) {
            // line 158
            echo "        <div class=\"project-box-wrapper\">
            <div class=\"project-box\" style=\"background-color: #d5deff;\">
                <div class=\"project-box-header\">
                    <span>";
            // line 161
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["trip"], "dateOfTrip", [], "any", false, false, false, 161), "d M Y"), "html", null, true);
            echo "</span>
                    <div class=\"more-wrapper\">
                        <button class=\"project-btn-more d-flex participants\">
                        ";
            // line 168
            echo "                            <p>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["trip"], "driver", [], "any", false, false, false, 168), "firstName", [], "any", false, false, false, 168), "html", null, true);
            echo "</p>
                            <img class=\"img-profile\" src=\"";
            // line 169
            echo twig_escape_filter($this->env, ($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/assets/uploads/profilePicture/") . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["trip"], "driver", [], "any", false, false, false, 169), "profile_picture", [], "any", false, false, false, 169)), "html", null, true);
            echo "\" alt=\"participant\">

                        </button>
                    </div>
                </div>
                <div class=\"project-box-content-header\">
                    <p class=\"box-content-header\">";
            // line 175
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["trip"], "departure", [], "any", false, false, false, 175), "html", null, true);
            echo "</p>
                    <p class=\"box-content-subheader\">______</p>
                    <p class=\"box-content-header\">";
            // line 177
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["trip"], "arrival", [], "any", false, false, false, 177), "html", null, true);
            echo "</p>
                </div>
                <div class=\"box-progress-wrapper\">
                    <p class=\"box-progress-header\">Status</p>
                    <div class=\"box-progress-bar\">
                        ";
            // line 182
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["trip"], "tripCompleted", [], "any", false, false, false, 182), true))) {
                // line 183
                echo "                            <span class=\"box-progress\" style=\"width: 100%; background-color: darkorange\"></span>
                    </div>
                    <p class=\"box-progress-percentage\">Terminé</p>
                        ";
            } elseif ((0 === twig_compare(twig_get_attribute($this->env, $this->source,             // line 186
$context["trip"], "tripStarted", [], "any", false, false, false, 186), true))) {
                // line 187
                echo "                            <span class=\"box-progress\" style=\"width: 50%; background-color: #4067f9\"></span>
                    </div>
                    <p class=\"box-progress-percentage\">En cours</p>
                        ";
            } else {
                // line 191
                echo "                            <span class=\"box-progress\" style=\"width: 10%; background-color: #4067f9\"></span>
                    </div>
                    <p class=\"box-progress-percentage\">Prochainement</p>
                        ";
            }
            // line 195
            echo "                </div>
                <div class=\"project-box-footer\">
                    <div class=\"participants\">
                    ";
            // line 198
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(0, twig_get_attribute($this->env, $this->source, $context["trip"], "passengers", [], "any", false, false, false, 198)));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 199
                echo "                        ";
                if ((1 === twig_compare($context["i"], 0))) {
                    // line 200
                    echo "                            <img src=\"https://images.unsplash.com/photo-1600486913747-55e5470d6f40?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=2550&q=80\" alt=\"participant\">
                        ";
                }
                // line 202
                echo "                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 203
            echo "                        <button class=\"add-participant\" style=\"color: #4067f9;\">
                        <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"12\" height=\"12\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"3\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-plus\">
                            <path d=\"M12 5v14M5 12h14\" />
                        </svg>
                        </button>
                    </div>
                    <div class=\"days-left\" style=\"color: #4067f9;\">
                       ";
            // line 210
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["trip"], "passengers", [], "any", false, false, false, 210), "html", null, true);
            echo " passager(s)
                    </div>
                </div>
            </div>
        </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trip'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 216
        echo "    </div>
</div>
<div class=\"messages-section\">
  <button class=\"messages-close\">
    <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-x-circle\">
      <circle cx=\"12\" cy=\"12\" r=\"10\" />
      <line x1=\"15\" y1=\"9\" x2=\"9\" y2=\"15\" />
      <line x1=\"9\" y1=\"9\" x2=\"15\" y2=\"15\" /></svg>
  </button>
  <div class=\"projects-section-header\">
    <p>Dernier avis laissés</p>
  </div>
  <div class=\"messages\">
  ";
        // line 229
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["lastReviews"]) || array_key_exists("lastReviews", $context) ? $context["lastReviews"] : (function () { throw new RuntimeError('Variable "lastReviews" does not exist.', 229, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["review"]) {
            // line 230
            echo "
    <div class=\"message-box\">
      <img src=\"";
            // line 232
            echo twig_escape_filter($this->env, ($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/assets/uploads/profilePicture/") . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["review"], "author", [], "any", false, false, false, 232), "profile_picture", [], "any", false, false, false, 232)), "html", null, true);
            echo "\" alt=\"profile image\">
      <div class=\"message-content\">
        <div class=\"message-header\">
          <div class=\"name\">";
            // line 235
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["review"], "author", [], "any", false, false, false, 235), "firstName", [], "any", false, false, false, 235), "html", null, true);
            echo "</div>
          <div class=\"star-checkbox\">
            <input type=\"checkbox\" id=\"star-1\">
            <label for=\"star-1\">
              <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"20\" height=\"20\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-star\">
                <polygon points=\"12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2\" /></svg>
            </label>
          </div>
        </div>
        <p class=\"message-line\">
          ";
            // line 245
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["review"], "content", [], "any", false, false, false, 245), "html", null, true);
            echo "
        </p>
        <p class=\"message-line time\">
            ";
            // line 248
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["review"], "createdAt", [], "any", false, false, false, 248), "d M"), "html", null, true);
            echo "
        </p>
      </div>
    </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['review'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 253
        echo "  </div>
</div>
</div>
</div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 259
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 260
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/adminPannel.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "admin/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  400 => 260,  390 => 259,  375 => 253,  364 => 248,  358 => 245,  345 => 235,  339 => 232,  335 => 230,  331 => 229,  316 => 216,  304 => 210,  295 => 203,  289 => 202,  285 => 200,  282 => 199,  278 => 198,  273 => 195,  267 => 191,  261 => 187,  259 => 186,  254 => 183,  252 => 182,  244 => 177,  239 => 175,  230 => 169,  225 => 168,  219 => 161,  214 => 158,  210 => 157,  183 => 133,  176 => 129,  169 => 125,  163 => 121,  96 => 55,  89 => 6,  79 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Hello AdminController!{% endblock %}

{% block body %}
<style>
    .example-wrapper { margin: 1em auto; max-width: 800px; width: 95%; font: 18px/1.5 sans-serif; }
    .example-wrapper code { background: #F5F5F5; padding: 2px 6px; }
</style>

{# 
     <ul class=\"nav nav-tabs\" role=\"tablist\">
          <li class=\"nav-item\">
                <a class=\"nav-link active\" data-toggle=\"tab\" href=\"#tabs-trip\" role=\"tab\">Derniers utilisateurs inscrit</a>
            </li>
            <li class=\"nav-item\">
                <a class=\"nav-link\" data-toggle=\"tab\" href=\"#tabs-user\" role=\"tab\">Derniers Trajets publier</a>
            </li>
            <li class=\"nav-item\">
                <a class=\"nav-link\" data-toggle=\"tab\" href=\"#tabs-3\" role=\"tab\">Derniers avis laissé</a>
            </li>
        </ul>


        <div class=\"tab-content\">
            <div class=\"tab-pane active\" id=\"tabs-trip\" role=\"tabpanel\">
               <div class=\"container\">
                  Les 20 derniers utilisateurs inscrit
                    {% for user in allUser %}
                <div class=\"container my-3\">
                        <div>{{user.firstName}}</div>
                        <div>{{user.lastName}}</div>
                        <div>{{user.createdAt|date(\"d M Y\")}}</div>
                </div>
                    {% endfor %}
                </div>
            </div>
            <div class=\"tab-pane\" id=\"tabs-user\" role=\"tabpanel\">
                <div class=\"container profile-section\">
                        Les 20 derniers trajets publié
                    {% for trip in allTrip %}
                    <div class=\"container my-3\">
                        <div>{{trip.departure}} -> {{trip.arrival}} le {{trip.dateOfTrip|date(\"d M Y\")}} </div>
                        <div> à {{trip.startTime|date(\"H:i\")}} </div>
                    </div>
                    {% endfor %}
                </div>
            </div>
            <div class=\"tab-pane\" id=\"tabs-3\" role=\"tabpanel\">
                <div class=\"container profile-section\">
           
                </div>
            </div>
        </div> #}


<div class=\"app-container mt-4\">
  <div class=\"app-header\">
    <div class=\"app-header-left\">
      <span class=\"app-icon\"></span>
      <p class=\"app-name\">Administration</p>
      <div class=\"search-wrapper\">
        <input class=\"search-input\" type=\"text\" placeholder=\"Search\">
        <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"20\" height=\"20\" fill=\"none\" stroke=\"currentColor\" stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" class=\"feather feather-search\" viewBox=\"0 0 24 24\">
          <defs></defs>
          <circle cx=\"11\" cy=\"11\" r=\"8\"></circle>
          <path d=\"M21 21l-4.35-4.35\"></path>
        </svg>
      </div>
    </div>
    <div class=\"app-header-right\">
      <button class=\"mode-switch\" title=\"Switch Theme\">
        <svg class=\"moon\" fill=\"none\" stroke=\"currentColor\" stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\">
          <defs></defs>
          <path d=\"M21 12.79A9 9 0 1111.21 3 7 7 0 0021 12.79z\"></path>
        </svg>
      </button>
      <button class=\"notification-btn\">
        <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-bell\">
          <path d=\"M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9\" />
          <path d=\"M13.73 21a2 2 0 0 1-3.46 0\" /></svg>
      </button>
    </div>
    <button class=\"messages-btn\">
      <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"20\" height=\"20\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-message-circle\">
        <path d=\"M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z\" /></svg>
    </button>
  </div>
  <div class=\"app-content\">
    <div class=\"app-sidebar\">
      <a href=\"\" class=\"app-sidebar-link active\">
        <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-home\">
          <path d=\"M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z\" />
          <polyline points=\"9 22 9 12 15 12 15 22\" /></svg>
      </a>
      <a href=\"\" class=\"app-sidebar-link\">
        <svg class=\"link-icon\" xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" fill=\"none\" stroke=\"currentColor\" stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" class=\"feather feather-pie-chart\" viewBox=\"0 0 24 24\">
          <defs />
          <path d=\"M21.21 15.89A10 10 0 118 2.83M22 12A10 10 0 0012 2v10z\" />
        </svg>
      </a>
      <a href=\"\" class=\"app-sidebar-link\">
        <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-calendar\">
          <rect x=\"3\" y=\"4\" width=\"18\" height=\"18\" rx=\"2\" ry=\"2\" />
          <line x1=\"16\" y1=\"2\" x2=\"16\" y2=\"6\" />
          <line x1=\"8\" y1=\"2\" x2=\"8\" y2=\"6\" />
          <line x1=\"3\" y1=\"10\" x2=\"21\" y2=\"10\" /></svg>
      </a>
      <a href=\"\" class=\"app-sidebar-link\">
        <svg class=\"link-icon\" xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" fill=\"none\" stroke=\"currentColor\" stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" class=\"feather feather-settings\" viewBox=\"0 0 24 24\">
          <defs />
          <circle cx=\"12\" cy=\"12\" r=\"3\" />
          <path d=\"M19.4 15a1.65 1.65 0 00.33 1.82l.06.06a2 2 0 010 2.83 2 2 0 01-2.83 0l-.06-.06a1.65 1.65 0 00-1.82-.33 1.65 1.65 0 00-1 1.51V21a2 2 0 01-2 2 2 2 0 01-2-2v-.09A1.65 1.65 0 009 19.4a1.65 1.65 0 00-1.82.33l-.06.06a2 2 0 01-2.83 0 2 2 0 010-2.83l.06-.06a1.65 1.65 0 00.33-1.82 1.65 1.65 0 00-1.51-1H3a2 2 0 01-2-2 2 2 0 012-2h.09A1.65 1.65 0 004.6 9a1.65 1.65 0 00-.33-1.82l-.06-.06a2 2 0 010-2.83 2 2 0 012.83 0l.06.06a1.65 1.65 0 001.82.33H9a1.65 1.65 0 001-1.51V3a2 2 0 012-2 2 2 0 012 2v.09a1.65 1.65 0 001 1.51 1.65 1.65 0 001.82-.33l.06-.06a2 2 0 012.83 0 2 2 0 010 2.83l-.06.06a1.65 1.65 0 00-.33 1.82V9a1.65 1.65 0 001.51 1H21a2 2 0 012 2 2 2 0 01-2 2h-.09a1.65 1.65 0 00-1.51 1z\" />
        </svg>
      </a>
    </div>
    <div class=\"projects-section\">
      <div class=\"projects-section-header\">
        <p>Trajets</p>
        {# <p class=\"time\">December, 12</p> #}
      </div>
      <div class=\"projects-section-line\">
        <div class=\"projects-status\">
          <div class=\"item-status\">
            <span class=\"status-number\">{{tripIncoming}}</span>
            <span class=\"status-type\">Trajets prévus</span>
          </div>
          <div class=\"item-status\">
            <span class=\"status-number\">{{tripCompleted}}</span>
            <span class=\"status-type\">Terminés</span>
          </div>
          <div class=\"item-status\">
            <span class=\"status-number\">{{allTrip}}</span>
            <span class=\"status-type\">Trajets au total</span>
          </div>
        </div>
        <div class=\"view-actions\">
          <button class=\"view-btn list-view\" title=\"List View\">
            <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-list\">
              <line x1=\"8\" y1=\"6\" x2=\"21\" y2=\"6\" />
              <line x1=\"8\" y1=\"12\" x2=\"21\" y2=\"12\" />
              <line x1=\"8\" y1=\"18\" x2=\"21\" y2=\"18\" />
              <line x1=\"3\" y1=\"6\" x2=\"3.01\" y2=\"6\" />
              <line x1=\"3\" y1=\"12\" x2=\"3.01\" y2=\"12\" />
              <line x1=\"3\" y1=\"18\" x2=\"3.01\" y2=\"18\" /></svg>
          </button>
          <button class=\"view-btn grid-view active\" title=\"Grid View\">
            <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"20\" height=\"20\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-grid\">
              <rect x=\"3\" y=\"3\" width=\"7\" height=\"7\" />
              <rect x=\"14\" y=\"3\" width=\"7\" height=\"7\" />
              <rect x=\"14\" y=\"14\" width=\"7\" height=\"7\" />
              <rect x=\"3\" y=\"14\" width=\"7\" height=\"7\" /></svg>
          </button>
        </div>
      </div>
      <div class=\"project-boxes jsGridView\"> 
      {% for trip in lastTrips %}
        <div class=\"project-box-wrapper\">
            <div class=\"project-box\" style=\"background-color: #d5deff;\">
                <div class=\"project-box-header\">
                    <span>{{trip.dateOfTrip|date(\"d M Y\")}}</span>
                    <div class=\"more-wrapper\">
                        <button class=\"project-btn-more d-flex participants\">
                        {# <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-more-vertical\">
                            <circle cx=\"12\" cy=\"12\" r=\"1\" />
                            <circle cx=\"12\" cy=\"5\" r=\"1\" />
                            <circle cx=\"12\" cy=\"19\" r=\"1\" /></svg> #}
                            <p>{{trip.driver.firstName}}</p>
                            <img class=\"img-profile\" src=\"{{ asset ('/assets/uploads/profilePicture/') ~ trip.driver.profile_picture }}\" alt=\"participant\">

                        </button>
                    </div>
                </div>
                <div class=\"project-box-content-header\">
                    <p class=\"box-content-header\">{{trip.departure}}</p>
                    <p class=\"box-content-subheader\">______</p>
                    <p class=\"box-content-header\">{{trip.arrival}}</p>
                </div>
                <div class=\"box-progress-wrapper\">
                    <p class=\"box-progress-header\">Status</p>
                    <div class=\"box-progress-bar\">
                        {% if trip.tripCompleted == true %}
                            <span class=\"box-progress\" style=\"width: 100%; background-color: darkorange\"></span>
                    </div>
                    <p class=\"box-progress-percentage\">Terminé</p>
                        {% elseif trip.tripStarted == true %}
                            <span class=\"box-progress\" style=\"width: 50%; background-color: #4067f9\"></span>
                    </div>
                    <p class=\"box-progress-percentage\">En cours</p>
                        {% else %}
                            <span class=\"box-progress\" style=\"width: 10%; background-color: #4067f9\"></span>
                    </div>
                    <p class=\"box-progress-percentage\">Prochainement</p>
                        {% endif %}
                </div>
                <div class=\"project-box-footer\">
                    <div class=\"participants\">
                    {% for i in 0..trip.passengers %}
                        {% if i > 0%}
                            <img src=\"https://images.unsplash.com/photo-1600486913747-55e5470d6f40?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=2550&q=80\" alt=\"participant\">
                        {% endif %}
                    {% endfor %}
                        <button class=\"add-participant\" style=\"color: #4067f9;\">
                        <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"12\" height=\"12\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"3\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-plus\">
                            <path d=\"M12 5v14M5 12h14\" />
                        </svg>
                        </button>
                    </div>
                    <div class=\"days-left\" style=\"color: #4067f9;\">
                       {{trip.passengers}} passager(s)
                    </div>
                </div>
            </div>
        </div>
        {% endfor %}
    </div>
</div>
<div class=\"messages-section\">
  <button class=\"messages-close\">
    <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-x-circle\">
      <circle cx=\"12\" cy=\"12\" r=\"10\" />
      <line x1=\"15\" y1=\"9\" x2=\"9\" y2=\"15\" />
      <line x1=\"9\" y1=\"9\" x2=\"15\" y2=\"15\" /></svg>
  </button>
  <div class=\"projects-section-header\">
    <p>Dernier avis laissés</p>
  </div>
  <div class=\"messages\">
  {% for review in lastReviews %}

    <div class=\"message-box\">
      <img src=\"{{ asset ('/assets/uploads/profilePicture/') ~ review.author.profile_picture }}\" alt=\"profile image\">
      <div class=\"message-content\">
        <div class=\"message-header\">
          <div class=\"name\">{{review.author.firstName}}</div>
          <div class=\"star-checkbox\">
            <input type=\"checkbox\" id=\"star-1\">
            <label for=\"star-1\">
              <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"20\" height=\"20\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-star\">
                <polygon points=\"12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2\" /></svg>
            </label>
          </div>
        </div>
        <p class=\"message-line\">
          {{review.content}}
        </p>
        <p class=\"message-line time\">
            {{review.createdAt|date(\"d M\")}}
        </p>
      </div>
    </div>
    {% endfor %}
  </div>
</div>
</div>
</div>

{% endblock %}
{% block javascripts %}
    <script src=\"{{asset('assets/js/adminPannel.js')}}\"></script>
{% endblock %}

", "admin/index.html.twig", "/shared/httpd/Projet-Final/templates/admin/index.html.twig");
    }
}

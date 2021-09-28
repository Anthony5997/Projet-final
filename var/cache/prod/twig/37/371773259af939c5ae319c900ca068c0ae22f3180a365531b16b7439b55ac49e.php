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

/* trip/trip_found.html.twig */
class __TwigTemplate_497ff97105ce2cfce7cb71ef53c7f009b07b043771e1abcc61f8838c0e9ca95a extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "trip/trip_found.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Trajet trouvé";
    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "<h1 class=\"text-center m-5\"> Trajet trouvé</h1>

";
        // line 8
        if (array_key_exists("tripFound", $context)) {
            // line 9
            echo "
    ";
            // line 10
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["tripFound"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["trip"]) {
                // line 11
                echo "        ";
                if (twig_get_attribute($this->env, $this->source, $context["trip"], "tripFull", [], "any", false, false, false, 11)) {
                    // line 12
                    echo "            <div class=\"card-custom-found disabled\">
            <a class=\"global-card-found \" href=\"\">
        ";
                } elseif (((0 === twig_compare(twig_get_attribute($this->env, $this->source,                 // line 14
$context["trip"], "tripStarted", [], "any", false, false, false, 14), true)) && (0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["trip"], "tripCompleted", [], "any", false, false, false, 14), false)))) {
                    // line 15
                    echo "            <div class=\"card-custom-found disabled\">
            <a class=\"global-card-found \" href=\"\">
        ";
                } elseif (((0 === twig_compare(twig_get_attribute($this->env, $this->source,                 // line 17
$context["trip"], "tripStarted", [], "any", false, false, false, 17), true)) && (0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["trip"], "tripCompleted", [], "any", false, false, false, 17), true)))) {
                    // line 18
                    echo "            <div class=\"card-custom-found disabled\">
            <a class=\"global-card-found \" href=\"\">
        ";
                } else {
                    // line 21
                    echo "             <div class=\"card-custom-found\">
            <a class=\"global-card-found\" href=\"";
                    // line 22
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("trip_details", ["id" => twig_get_attribute($this->env, $this->source, $context["trip"], "id", [], "any", false, false, false, 22)]), "html", null, true);
                    echo "\">
        ";
                }
                // line 24
                echo "            <div class=\"plan-found\">
                <div class=\"timeline\">
                      ";
                // line 26
                if (((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["trip"], "tripFull", [], "any", false, false, false, 26), true)) && (0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["trip"], "tripStarted", [], "any", false, false, false, 26), false)))) {
                    // line 27
                    echo "                        <div class=\"d-flex justify-content-end\"><h4>Complet</h4></div>
                        ";
                } elseif (((0 === twig_compare(twig_get_attribute($this->env, $this->source,                 // line 28
$context["trip"], "tripStarted", [], "any", false, false, false, 28), true)) && (0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["trip"], "tripCompleted", [], "any", false, false, false, 28), false)))) {
                    // line 29
                    echo "                        <div class=\"d-flex justify-content-end\"><h4>Trajet en cours</h4></div>
                        ";
                } elseif (((0 === twig_compare(twig_get_attribute($this->env, $this->source,                 // line 30
$context["trip"], "tripStarted", [], "any", false, false, false, 30), true)) && (0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["trip"], "tripCompleted", [], "any", false, false, false, 30), true)))) {
                    // line 31
                    echo "                        <div class=\"d-flex justify-content-end\"><h4>Terminé</h4></div>
                        ";
                } else {
                    // line 33
                    echo "                    ";
                }
                // line 34
                echo "                    <div class=\"d-flex justify-content-end\"><p>";
                ((twig_get_attribute($this->env, $this->source, $context["trip"], "tripFull", [], "any", false, false, false, 34)) ? (print ("Complet")) : (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["trip"], "duration", [], "any", false, false, false, 34), "html", null, true))));
                echo "</p></div>
                    <div class=\"row\">
                        <div class=\"col-3 d-flex align-items-end flex-column justify-content-around p-3\">
                            <p><strong>";
                // line 37
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["trip"], "startTime", [], "any", false, false, false, 37), "H:i"), "html", null, true);
                echo "</strong></p>
                            <p class=\"d-flex justify-content-center font-control\">";
                // line 38
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["trip"], "distance", [], "any", false, false, false, 38), "html", null, true);
                echo " </p>
                            ";
                // line 39
                $context["hour"] = twig_replace_filter(twig_get_attribute($this->env, $this->source, $context["trip"], "duration", [], "any", false, false, false, 39), ["heure" => "hour"]);
                // line 40
                echo "                            <p class=\"pt-3\"><strong>";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_date_modify_filter($this->env, twig_get_attribute($this->env, $this->source, $context["trip"], "startTime", [], "any", false, false, false, 40), ("+" . ($context["hour"] ?? null))), "H:i"), "html", null, true);
                echo "</strong></p>
                        </div>
                        <div class=\"col-9\">
                            <div class=\"line\">
                                <div class=\"line-content\">
                                    <div class=\"content\">
                                        <h1>";
                // line 46
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["trip"], "departure", [], "any", false, false, false, 46), "html", null, true);
                echo "</h1>
                                    </div>
                                    <div class=\"content\">
                                        <h1> ";
                // line 49
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["trip"], "arrival", [], "any", false, false, false, 49), "html", null, true);
                echo "</h1>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                    <span class=\"custom-separator\"></span>
                <div class=\"row card-found-profile\">
                    <div class=\"col\">
                       <img class=\"img-card\"src=\"";
                // line 59
                echo twig_escape_filter($this->env, ($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/uploads/profilePicture/") . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["trip"], "driver", [], "any", false, false, false, 59), "profile_picture", [], "any", false, false, false, 59)), "html", null, true);
                echo "\"/>
                    </div>
                      <div class=\"col d-flex  flex-column justify-content-center\">
                        <p class=\"font-control\">";
                // line 62
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["trip"], "driver", [], "any", false, false, false, 62), "firstName", [], "any", false, false, false, 62), "html", null, true);
                echo "</p>
                        ";
                // line 63
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["trip"], "driver", [], "any", false, false, false, 63), "globalRating", [], "any", false, false, false, 63)) {
                    // line 64
                    echo "                            <p class=\"font-control\"><i class=\"fas fa-star\"></i>";
                    echo twig_escape_filter($this->env, twig_round(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["trip"], "driver", [], "any", false, false, false, 64), "globalRating", [], "any", false, false, false, 64), 1, "floor"), "html", null, true);
                    echo "</p>
                        ";
                } else {
                    // line 66
                    echo "                            <p class=\"font-control-rating\"><i class=\"fas fa-star\"></i> Aucun avis utilisateur</p>
                        ";
                }
                // line 68
                echo "                    </div>
                    <div class=\"col d-flex justify-content-start align-items-center font-control fas fa-chevron-right\"></div>
                    <div class=\"col d-flex align-items-center flex-column justify-content-center \"><strong>";
                // line 70
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["trip"], "passengers", [], "any", false, false, false, 70), "html", null, true);
                echo "</strong><i class=\"fas fa-user-friends\"></i></div>
                </div>
            </div>
        </a>
        </div>

    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trip'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 77
            echo "
";
        } else {
            // line 79
            echo "        <div class=\"container\">
           <h2 class=\"mt-5 text-center red-text\"> Désolé ! Aucun voyage n'a été trouver </h2>
        </div>
";
        }
        // line 83
        echo "
";
    }

    public function getTemplateName()
    {
        return "trip/trip_found.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  217 => 83,  211 => 79,  207 => 77,  194 => 70,  190 => 68,  186 => 66,  180 => 64,  178 => 63,  174 => 62,  168 => 59,  155 => 49,  149 => 46,  139 => 40,  137 => 39,  133 => 38,  129 => 37,  122 => 34,  119 => 33,  115 => 31,  113 => 30,  110 => 29,  108 => 28,  105 => 27,  103 => 26,  99 => 24,  94 => 22,  91 => 21,  86 => 18,  84 => 17,  80 => 15,  78 => 14,  74 => 12,  71 => 11,  67 => 10,  64 => 9,  62 => 8,  58 => 6,  54 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "trip/trip_found.html.twig", "/shared/httpd/Projet-Final/templates/trip/trip_found.html.twig");
    }
}

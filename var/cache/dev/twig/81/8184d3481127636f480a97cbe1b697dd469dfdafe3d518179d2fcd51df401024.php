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

/* user/_form.html.twig */
class __TwigTemplate_190bba3e03b6b7d7488f896b9f138fee49897ee217018d5e51ad271675145f8e extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/_form.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/_form.html.twig"));

        // line 1
        echo "  <section class=\"section-padding\">
                <div class=\"container\">  
                
                    <div class=\"row\">
                    ";
        // line 5
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 5, $this->source); })()), 'form_start');
        echo "
                  
                        <h3 class=\"text-extrabold\">Your personal informations</h3>
                        <div class=\"clearfix visible-sm\"></div>
                        <div class=\"row\">
                            <div class=\"col-xs-12 col-sm-6 col-md-4\">
                                <div class=\"form-group\">
                                    ";
        // line 12
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 12, $this->source); })()), "first_name", [], "any", false, false, false, 12), 'label', ["label" => "First name"]);
        echo "
                                    ";
        // line 13
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 13, $this->source); })()), "first_name", [], "any", false, false, false, 13), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                                </div> 
                                <div class='red-text'>";
        // line 15
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 15, $this->source); })()), "first_name", [], "any", false, false, false, 15), 'errors');
        echo "</div>
                                <div class=\"form-group\">
                                    ";
        // line 17
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 17, $this->source); })()), "last_name", [], "any", false, false, false, 17), 'label', ["label" => "Last name"]);
        echo "
                                    ";
        // line 18
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 18, $this->source); })()), "last_name", [], "any", false, false, false, 18), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                                </div>
                                <div class='red-text'>";
        // line 20
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 20, $this->source); })()), "last_name", [], "any", false, false, false, 20), 'errors');
        echo "</div>
                                <div class=\"form-group\">
                                    ";
        // line 22
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 22, $this->source); })()), "date_of_birth", [], "any", false, false, false, 22), 'label', ["label" => "Birthdate"]);
        echo " 
                                    ";
        // line 23
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 23, $this->source); })()), "date_of_birth", [], "any", false, false, false, 23), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                                </div> 
                                <div class='red-text'>";
        // line 25
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 25, $this->source); })()), "date_of_birth", [], "any", false, false, false, 25), 'errors');
        echo "</div>
                            </div>
                            <div class=\"col-xs-12 col-sm-6 col-md-4\">
                            </div>
                            <div class=\"col-xs-12 col-sm-6 col-md-4\">
                                <div class='red-text'>";
        // line 30
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 30, $this->source); })()), "profile_picture", [], "any", false, false, false, 30), 'errors');
        echo "</div>
                                <div class=\"form-group\" style=\"margin-top: 32px;\">
                                    <div class=\"custom-file\" id='btnHeigt'>
                                        ";
        // line 33
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 33, $this->source); })()), "profile_picture", [], "any", false, false, false, 33), 'label');
        echo " 
                                        ";
        // line 34
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 34, $this->source); })()), "profile_picture", [], "any", false, false, false, 34), 'widget', ["attr" => ["accept" => ".pdf,.jpg,.doc,.docx,.png,.gif", "size" => "20000000", "type" => "file", "class" => "form-control"]]);
        // line 39
        echo "
                                        ";
        // line 41
        echo "                                    </div>
                            
                                    ";
        // line 43
        if ((0 !== twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 43, $this->source); })()), "profile_picture", [], "any", false, false, false, 43), ""))) {
            // line 44
            echo "                                        <div class=\"existing-file\">
                                            <a href=\"";
            // line 45
            echo twig_escape_filter($this->env, ($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/assets/uploads/profilePicture/") . twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 45, $this->source); })()), "profile_picture", [], "any", false, false, false, 45)), "html", null, true);
            echo "\" target=\"_blank\"><i class=\"material-icons\">&#xE24D;</i> profil_picture.jpg</a>
                                        </div>
                                    ";
        }
        // line 48
        echo "                                </div>
                            </div>
                        </div>

                        <div class=\"row\">
                            <div class=\"col-xs-12 col-sm-6 col-md-4\">
                                <div class=\"form-group\">
                                    ";
        // line 55
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 55, $this->source); })()), "adress", [], "any", false, false, false, 55), 'label', ["label" => "Address"]);
        echo "
                                    ";
        // line 56
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 56, $this->source); })()), "adress", [], "any", false, false, false, 56), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                                </div>
                                <div class='red-text'>";
        // line 58
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 58, $this->source); })()), "adress", [], "any", false, false, false, 58), 'errors');
        echo "</div>
                            </div>
                            <div class=\"col-xs-12 col-sm-6 col-md-4\">
                                <div class=\"form-group\">
                                    ";
        // line 62
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 62, $this->source); })()), "country", [], "any", false, false, false, 62), 'label', ["label" => "Country"]);
        echo "
                                    ";
        // line 63
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 63, $this->source); })()), "country", [], "any", false, false, false, 63), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                                </div>  
                                <div class='red-text'>";
        // line 65
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 65, $this->source); })()), "country", [], "any", false, false, false, 65), 'errors');
        echo "</div>
                            </div>
                            <div class=\"col-xs-12 col-sm-6 col-md-4\">
                                <div class=\"form-group\">
                                    ";
        // line 69
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 69, $this->source); })()), "city", [], "any", false, false, false, 69), 'label', ["label" => "City"]);
        echo "
                                    ";
        // line 70
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 70, $this->source); })()), "city", [], "any", false, false, false, 70), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                                </div>  
                                <div class='red-text'>";
        // line 72
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 72, $this->source); })()), "city", [], "any", false, false, false, 72), 'errors');
        echo "</div>
                            </div>
                        </div>
                        <div class=\"row\">
                            <div class=\"col-xs-12 col-sm-6\">
                                <div class=\"form-group\">
                                    ";
        // line 78
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 78, $this->source); })()), "phone", [], "any", false, false, false, 78), 'label', ["label" => "Téléphone"]);
        echo " 
                                    ";
        // line 79
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 79, $this->source); })()), "phone", [], "any", false, false, false, 79), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                                </div> 
                                <div class='red-text'>";
        // line 81
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 81, $this->source); })()), "phone", [], "any", false, false, false, 81), 'errors');
        echo "</div>
                            </div>
                            <div class=\"col-xs-12 col-sm-6\">
                                <div class=\"form-group\">
                                    ";
        // line 85
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 85, $this->source); })()), "email", [], "any", false, false, false, 85), 'label', ["label" => "Email"]);
        echo " 
                                    ";
        // line 86
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 86, $this->source); })()), "email", [], "any", false, false, false, 86), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                                </div> 
                                <div class='red-text'>";
        // line 88
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 88, $this->source); })()), "email", [], "any", false, false, false, 88), 'errors');
        echo "</div>
                            </div>
                        </div>
                    <h3 class=\"text-extrabold\">Your professional profile</h3>
                    <div class=\"row mt-40\">
                        <div class=\"col-xs-12 col-sm-6\">
                            <div class=\"card card-panel passport\"> 
                                <div class='red-text'>";
        // line 95
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 95, $this->source); })()), "id_card_file", [], "any", false, false, false, 95), 'errors');
        echo "</div>
                                <div class=\"file-field form-group\">
                                    <div class=\"btn btn-lg primary waves-effect waves-light\" id='btnHeigt'>
                                        ";
        // line 98
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 98, $this->source); })()), "id_card_file", [], "any", false, false, false, 98), 'label');
        echo "
                                        ";
        // line 99
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 99, $this->source); })()), "id_card_file", [], "any", false, false, false, 99), 'widget', ["attr" => ["accept" => ".pdf,.jpg,.doc,.docx,.png,.gif", "size" => "20000000", "type" => "file", "class" => "form-control"]]);
        // line 104
        echo "
                                        <span><i class=\"material-icons\">&#xE24D;</i> ID CARD</span>
                                    </div>
                                    ";
        // line 107
        if ((0 !== twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 107, $this->source); })()), "id_card_file", [], "any", false, false, false, 107), ""))) {
            // line 108
            echo "                                        <div class=\"existing-file\">
                                            <a href=\"";
            // line 109
            echo twig_escape_filter($this->env, ($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/assets/uploads/idCard/") . twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 109, $this->source); })()), "id_card_file", [], "any", false, false, false, 109)), "html", null, true);
            echo "\" target=\"_blank\"><i class=\"material-icons\">&#xE24D;</i> ID Card.pdf</a>
                                        </div>
                                        ";
            // line 114
            echo "                                    ";
        }
        // line 115
        echo "                                </div>
                            </div>
                        </div>
                        <div class=\"col-xs-12 col-sm-12\">
                            <div class=\"form-group\">
                                ";
        // line 120
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 120, $this->source); })()), "bio", [], "any", false, false, false, 120), 'label', ["label" => "Short description for your profile, as well as more personnal informations (e.g. your hobbies/interests )."]);
        echo "
                                ";
        // line 121
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 121, $this->source); })()), "bio", [], "any", false, false, false, 121), 'widget', ["attr" => ["cols" => "20", "rows" => "5"]]);
        // line 124
        echo "
                            </div>
                            <div class='red-text'>";
        // line 126
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 126, $this->source); })()), "bio", [], "any", false, false, false, 126), 'errors');
        echo "</div>
                        </div>
                        <div class=\"col-xs-12 col-sm-12 center\">
                            <button  type='submit' class=\"btn btn-secondaryt\">
                                <span><strong>UPDATE</strong> NOW</span>
                            </button>
                        </div>
                        ";
        // line 133
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 133, $this->source); })()), 'form_end');
        echo "
                    </div>
                </div>
            </div>
    </section>
     
    <div class=\"row\">
        <div class=\"col-xs-12 col-sm-6 col-md-4\">
            <a href=\"";
        // line 141
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\" class=\"btn btn-block btn-lg border primary waves-effect waves-light\"><i class=\"fa fa-long-arrow-left\"></i> Back home</a>
        </div>
        <div class=\"col-xs-12 col-sm-6 col-md-4 col-md-offset-4\">
            ";
        // line 144
        echo twig_include($this->env, $context, "user/_delete_form.html.twig");
        echo "
        </div>
    </div>

             

            ";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "user/_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  302 => 144,  296 => 141,  285 => 133,  275 => 126,  271 => 124,  269 => 121,  265 => 120,  258 => 115,  255 => 114,  250 => 109,  247 => 108,  245 => 107,  240 => 104,  238 => 99,  234 => 98,  228 => 95,  218 => 88,  213 => 86,  209 => 85,  202 => 81,  197 => 79,  193 => 78,  184 => 72,  179 => 70,  175 => 69,  168 => 65,  163 => 63,  159 => 62,  152 => 58,  147 => 56,  143 => 55,  134 => 48,  128 => 45,  125 => 44,  123 => 43,  119 => 41,  116 => 39,  114 => 34,  110 => 33,  104 => 30,  96 => 25,  91 => 23,  87 => 22,  82 => 20,  77 => 18,  73 => 17,  68 => 15,  63 => 13,  59 => 12,  49 => 5,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("  <section class=\"section-padding\">
                <div class=\"container\">  
                
                    <div class=\"row\">
                    {{ form_start(form) }}
                  
                        <h3 class=\"text-extrabold\">Your personal informations</h3>
                        <div class=\"clearfix visible-sm\"></div>
                        <div class=\"row\">
                            <div class=\"col-xs-12 col-sm-6 col-md-4\">
                                <div class=\"form-group\">
                                    {{ form_label(form.first_name, 'First name') }}
                                    {{ form_widget(form.first_name, {'attr': {'class': 'form-control'}}) }}
                                </div> 
                                <div class='red-text'>{{ form_errors(form.first_name)}}</div>
                                <div class=\"form-group\">
                                    {{ form_label(form.last_name, 'Last name') }}
                                    {{ form_widget(form.last_name, {'attr': {'class': 'form-control'}}) }}
                                </div>
                                <div class='red-text'>{{ form_errors(form.last_name)}}</div>
                                <div class=\"form-group\">
                                    {{ form_label(form.date_of_birth,'Birthdate') }} 
                                    {{ form_widget(form.date_of_birth, {'attr': {'class': 'form-control'}}) }}
                                </div> 
                                <div class='red-text'>{{ form_errors(form.date_of_birth)}}</div>
                            </div>
                            <div class=\"col-xs-12 col-sm-6 col-md-4\">
                            </div>
                            <div class=\"col-xs-12 col-sm-6 col-md-4\">
                                <div class='red-text'>{{ form_errors(form.profile_picture)}}</div>
                                <div class=\"form-group\" style=\"margin-top: 32px;\">
                                    <div class=\"custom-file\" id='btnHeigt'>
                                        {{ form_label(form.profile_picture) }} 
                                        {{ form_widget(form.profile_picture, { 'attr': {
                                            'accept' : '.pdf,.jpg,.doc,.docx,.png,.gif',
                                            'size' : '20000000', 
                                            'type' : 'file',
                                            'class': 'form-control'
                                            }}) }}
                                        {# <span><i class=\"material-icons\">insert_photo</i> Photo</span> #}
                                    </div>
                            
                                    {% if user.profile_picture != '' %}
                                        <div class=\"existing-file\">
                                            <a href=\"{{asset ('/assets/uploads/profilePicture/') ~ user.profile_picture }}\" target=\"_blank\"><i class=\"material-icons\">&#xE24D;</i> profil_picture.jpg</a>
                                        </div>
                                    {% endif %}
                                </div>
                            </div>
                        </div>

                        <div class=\"row\">
                            <div class=\"col-xs-12 col-sm-6 col-md-4\">
                                <div class=\"form-group\">
                                    {{ form_label(form.adress, 'Address') }}
                                    {{ form_widget(form.adress, {'attr': {'class': 'form-control'}}) }}
                                </div>
                                <div class='red-text'>{{ form_errors(form.adress)}}</div>
                            </div>
                            <div class=\"col-xs-12 col-sm-6 col-md-4\">
                                <div class=\"form-group\">
                                    {{ form_label(form.country, 'Country') }}
                                    {{ form_widget(form.country, {'attr': {'class': 'form-control'}}) }}
                                </div>  
                                <div class='red-text'>{{ form_errors(form.country)}}</div>
                            </div>
                            <div class=\"col-xs-12 col-sm-6 col-md-4\">
                                <div class=\"form-group\">
                                    {{ form_label(form.city, 'City') }}
                                    {{ form_widget(form.city, {'attr': {'class': 'form-control'}}) }}
                                </div>  
                                <div class='red-text'>{{ form_errors(form.city)}}</div>
                            </div>
                        </div>
                        <div class=\"row\">
                            <div class=\"col-xs-12 col-sm-6\">
                                <div class=\"form-group\">
                                    {{ form_label(form.phone,'Téléphone') }} 
                                    {{ form_widget(form.phone, {'attr': {'class': 'form-control'}}) }}
                                </div> 
                                <div class='red-text'>{{ form_errors(form.phone)}}</div>
                            </div>
                            <div class=\"col-xs-12 col-sm-6\">
                                <div class=\"form-group\">
                                    {{ form_label(form.email,'Email') }} 
                                    {{ form_widget(form.email, {'attr': {'class': 'form-control'}}) }}
                                </div> 
                                <div class='red-text'>{{ form_errors(form.email)}}</div>
                            </div>
                        </div>
                    <h3 class=\"text-extrabold\">Your professional profile</h3>
                    <div class=\"row mt-40\">
                        <div class=\"col-xs-12 col-sm-6\">
                            <div class=\"card card-panel passport\"> 
                                <div class='red-text'>{{ form_errors(form.id_card_file)}}</div>
                                <div class=\"file-field form-group\">
                                    <div class=\"btn btn-lg primary waves-effect waves-light\" id='btnHeigt'>
                                        {{ form_label(form.id_card_file) }}
                                        {{ form_widget(form.id_card_file, { 'attr': {
                                        'accept' : '.pdf,.jpg,.doc,.docx,.png,.gif',
                                        'size' : '20000000', 
                                        'type' : 'file',
                                        'class': 'form-control'
                                        }}) }}
                                        <span><i class=\"material-icons\">&#xE24D;</i> ID CARD</span>
                                    </div>
                                    {% if user.id_card_file != '' %}
                                        <div class=\"existing-file\">
                                            <a href=\"{{asset ('/assets/uploads/idCard/') ~ user.id_card_file}}\" target=\"_blank\"><i class=\"material-icons\">&#xE24D;</i> ID Card.pdf</a>
                                        </div>
                                        {# <div class=\"file-path-wrapper\">
                                            <input class=\"file-path validate\" type=\"text\" placeholder=\"Upload your Id Card\" readonly>
                                        </div> #}
                                    {% endif %}
                                </div>
                            </div>
                        </div>
                        <div class=\"col-xs-12 col-sm-12\">
                            <div class=\"form-group\">
                                {{ form_label(form.bio, 'Short description for your profile, as well as more personnal informations (e.g. your hobbies/interests ).') }}
                                {{ form_widget(form.bio, { 'attr': {
                                        'cols' : \"20\",
                                        'rows' : \"5\"
                                }}) }}
                            </div>
                            <div class='red-text'>{{ form_errors(form.bio)}}</div>
                        </div>
                        <div class=\"col-xs-12 col-sm-12 center\">
                            <button  type='submit' class=\"btn btn-secondaryt\">
                                <span><strong>UPDATE</strong> NOW</span>
                            </button>
                        </div>
                        {{ form_end(form) }}
                    </div>
                </div>
            </div>
    </section>
     
    <div class=\"row\">
        <div class=\"col-xs-12 col-sm-6 col-md-4\">
            <a href=\"{{ path ('home')}}\" class=\"btn btn-block btn-lg border primary waves-effect waves-light\"><i class=\"fa fa-long-arrow-left\"></i> Back home</a>
        </div>
        <div class=\"col-xs-12 col-sm-6 col-md-4 col-md-offset-4\">
            {{ include('user/_delete_form.html.twig') }}
        </div>
    </div>

             

            {# <section class=\"section-padding gray-bg\">
                <div class=\"container\">
                    <div class=\"row\">
                        <h3 class=\"text-extrabold\">Your K-Yachting account</h3>
                        {{form_start(form2)}}
                            <div class=\"col-xs-12 col-sm-3\">
                                <div class=\"form-group\">
                                    {{ form_label(form2.email, 'Email') }}
                                    {{ form_widget(form2.email) }}
                                </div>
                            </div>
                             <div class=\"col-xs-12 col-sm-3\">
                                <div class=\"form-group\">
                                    {{ form_label(form2.password, 'Current Password') }}
                                    {{ form_widget(form2.password) }}
                                    <i class=\"fa fa-eye show-password\"></i>
                                </div>
                            </div>
                            <div class=\"col-xs-12 col-sm-3\">
                                <div class=\"form-group\">
                                    {{ form_label(form2.newPassword.first) }}
                                    {{ form_widget(form2.newPassword.first) }}
                                </div>
                            </div>
                            <div class=\"col-xs-12 col-sm-3\">
                                <div class=\"form-group\">
                                    {{ form_label(form2.newPassword.second) }}  
                                   {{ form_widget(form2.newPassword.second) }}
                                </div>
                            </div>    

                            <div class=\"row\">
                              <div class=\"col-xs-12 col-sm-6 col-md-4 col-md-offset-4\">
                            <button type=\"submit\" class=\"btn btn-block btn-lg gradient secondary waves-effect waves-light\">
                                <span><strong>UPDATE</strong> NOW</span>
                            </button>
                        </div>
                            </div>  
                        {{form_end(form2)}}
                    </div> #}", "user/_form.html.twig", "/shared/httpd/Projet-Final/templates/user/_form.html.twig");
    }
}

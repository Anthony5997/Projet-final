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
                        <h3 class=\"text-extrabold\">Informations Personnelle</h3>
                        <div class=\"clearfix visible-sm\"></div>
                        <div class=\"row\">
                            <div class=\"col-xs-12 col-sm-6 col-md-4\">
                                <div class=\"form-group\">
                                    ";
        // line 11
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 11, $this->source); })()), "first_name", [], "any", false, false, false, 11), 'label', ["label" => "First name"]);
        echo "
                                    ";
        // line 12
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 12, $this->source); })()), "first_name", [], "any", false, false, false, 12), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                                </div> 
                                <div class='red-text'>";
        // line 14
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 14, $this->source); })()), "first_name", [], "any", false, false, false, 14), 'errors');
        echo "</div>
                                <div class=\"form-group\">
                                    ";
        // line 16
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 16, $this->source); })()), "last_name", [], "any", false, false, false, 16), 'label', ["label" => "Last name"]);
        echo "
                                    ";
        // line 17
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 17, $this->source); })()), "last_name", [], "any", false, false, false, 17), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                                </div>
                                <div class='red-text'>";
        // line 19
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 19, $this->source); })()), "last_name", [], "any", false, false, false, 19), 'errors');
        echo "</div>
                                <div class=\"form-group\">
                                    ";
        // line 21
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 21, $this->source); })()), "date_of_birth", [], "any", false, false, false, 21), 'label', ["label" => "Birthdate"]);
        echo " 
                                    ";
        // line 22
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 22, $this->source); })()), "date_of_birth", [], "any", false, false, false, 22), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                                </div> 
                                <div class='red-text'>";
        // line 24
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 24, $this->source); })()), "date_of_birth", [], "any", false, false, false, 24), 'errors');
        echo "</div>
                            </div>
                            <div class=\"col-xs-12 col-sm-6 col-md-4\">
                            </div>
                            <div class=\"col-xs-12 col-sm-6 col-md-4\">
                                <div class='red-text'>";
        // line 29
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 29, $this->source); })()), "profile_picture", [], "any", false, false, false, 29), 'errors');
        echo "</div>
                                <div class=\"form-group\" style=\"margin-top: 32px;\">
                                    <div class=\"custom-file\" id='btnHeigt'>
                                        ";
        // line 32
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 32, $this->source); })()), "profile_picture", [], "any", false, false, false, 32), 'label');
        echo " 
                                        ";
        // line 33
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 33, $this->source); })()), "profile_picture", [], "any", false, false, false, 33), 'widget', ["attr" => ["accept" => ".pdf,.jpg,.doc,.docx,.png,.gif", "size" => "20000000", "type" => "file", "class" => "form-control"]]);
        // line 38
        echo "
                                        ";
        // line 40
        echo "                                    </div>
                            
                                    ";
        // line 42
        if ((0 !== twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 42, $this->source); })()), "profile_picture", [], "any", false, false, false, 42), ""))) {
            // line 43
            echo "                                        <div class=\"existing-file\">
                                            <a href=\"";
            // line 44
            echo twig_escape_filter($this->env, ($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/assets/uploads/profilePicture/") . twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 44, $this->source); })()), "profile_picture", [], "any", false, false, false, 44)), "html", null, true);
            echo "\" target=\"_blank\"><i class=\"material-icons\">&#xE24D;</i> profil_picture.jpg</a>
                                        </div>
                                    ";
        }
        // line 47
        echo "                                </div>
                            </div>
                        </div>

                        <div class=\"row\">
                            <div class=\"col-xs-12 col-sm-6 col-md-4\">
                                <div class=\"form-group\">
                                    ";
        // line 54
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 54, $this->source); })()), "adress", [], "any", false, false, false, 54), 'label', ["label" => "Address"]);
        echo "
                                    ";
        // line 55
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 55, $this->source); })()), "adress", [], "any", false, false, false, 55), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                                </div>
                                <div class='red-text'>";
        // line 57
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 57, $this->source); })()), "adress", [], "any", false, false, false, 57), 'errors');
        echo "</div>
                            </div>
                            <div class=\"col-xs-12 col-sm-6 col-md-4\">
                                <div class=\"form-group\">
                                    ";
        // line 61
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 61, $this->source); })()), "country", [], "any", false, false, false, 61), 'label', ["label" => "Country"]);
        echo "
                                    ";
        // line 62
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 62, $this->source); })()), "country", [], "any", false, false, false, 62), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                                </div>  
                                <div class='red-text'>";
        // line 64
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 64, $this->source); })()), "country", [], "any", false, false, false, 64), 'errors');
        echo "</div>
                            </div>
                            <div class=\"col-xs-12 col-sm-6 col-md-4\">
                                <div class=\"form-group\">
                                    ";
        // line 68
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 68, $this->source); })()), "city", [], "any", false, false, false, 68), 'label', ["label" => "City"]);
        echo "
                                    ";
        // line 69
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 69, $this->source); })()), "city", [], "any", false, false, false, 69), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                                </div>  
                                <div class='red-text'>";
        // line 71
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 71, $this->source); })()), "city", [], "any", false, false, false, 71), 'errors');
        echo "</div>
                            </div>
                        </div>
                        <div class=\"row\">
                            <div class=\"col-xs-12 col-sm-6\">
                                <div class=\"form-group\">
                                    ";
        // line 77
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 77, $this->source); })()), "phone", [], "any", false, false, false, 77), 'label', ["label" => "Téléphone"]);
        echo " 
                                    ";
        // line 78
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 78, $this->source); })()), "phone", [], "any", false, false, false, 78), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                                </div> 
                                <div class='red-text'>";
        // line 80
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 80, $this->source); })()), "phone", [], "any", false, false, false, 80), 'errors');
        echo "</div>
                            </div>
                            <div class=\"col-xs-12 col-sm-6\">
                                <div class=\"form-group\">
                                    ";
        // line 84
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 84, $this->source); })()), "email", [], "any", false, false, false, 84), 'label', ["label" => "Email"]);
        echo " 
                                    ";
        // line 85
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 85, $this->source); })()), "email", [], "any", false, false, false, 85), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                                </div> 
                                <div class='red-text'>";
        // line 87
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 87, $this->source); })()), "email", [], "any", false, false, false, 87), 'errors');
        echo "</div>
                            </div>
                        </div>
                    <h3 class=\"text-extrabold\">Your professional profile</h3>
                    <div class=\"row mt-40\">
                        <div class=\"col-xs-12 col-sm-6\">
                            <div class=\"card card-panel passport\"> 
                                <div class='red-text'>";
        // line 94
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 94, $this->source); })()), "id_card_file", [], "any", false, false, false, 94), 'errors');
        echo "</div>
                                <div class=\"file-field form-group\">
                                    <div class=\"btn btn-lg primary waves-effect waves-light\" id='btnHeigt'>
                                        ";
        // line 97
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 97, $this->source); })()), "id_card_file", [], "any", false, false, false, 97), 'label');
        echo "
                                        ";
        // line 98
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 98, $this->source); })()), "id_card_file", [], "any", false, false, false, 98), 'widget', ["attr" => ["accept" => ".pdf,.jpg,.doc,.docx,.png,.gif", "size" => "20000000", "type" => "file", "class" => "form-control"]]);
        // line 103
        echo "
                                        <span><i class=\"material-icons\">&#xE24D;</i> ID CARD</span>
                                    </div>
                                    ";
        // line 106
        if ((0 !== twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 106, $this->source); })()), "id_card_file", [], "any", false, false, false, 106), ""))) {
            // line 107
            echo "                                        <div class=\"existing-file\">
                                            <a href=\"";
            // line 108
            echo twig_escape_filter($this->env, ($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/assets/uploads/idCard/") . twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 108, $this->source); })()), "id_card_file", [], "any", false, false, false, 108)), "html", null, true);
            echo "\" target=\"_blank\"><i class=\"material-icons\">&#xE24D;</i> ID Card.pdf</a>
                                        </div>
                                    ";
        }
        // line 111
        echo "                                </div>
                            </div>
                        </div>
                        <div class=\"col-xs-12 col-sm-12\">
                            <div class=\"form-group\">
                                ";
        // line 116
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 116, $this->source); })()), "bio", [], "any", false, false, false, 116), 'label', ["label" => "Short description for your profile, as well as more personnal informations (e.g. your hobbies/interests )."]);
        echo "
                                ";
        // line 117
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 117, $this->source); })()), "bio", [], "any", false, false, false, 117), 'widget', ["attr" => ["cols" => "20", "rows" => "5"]]);
        // line 120
        echo "
                            </div>
                            <div class='red-text'>";
        // line 122
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 122, $this->source); })()), "bio", [], "any", false, false, false, 122), 'errors');
        echo "</div>
                        </div>
                        <div class=\"col-xs-12 col-sm-12 center\">
                            <button  type='submit' class=\"btn btn-secondaryt\">
                                <span><strong>UPDATE</strong> NOW</span>
                            </button>
                        </div>
                        ";
        // line 129
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 129, $this->source); })()), 'form_end');
        echo "
                    </div>
                </div>
            </div>
    </section>";
        
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
        return array (  282 => 129,  272 => 122,  268 => 120,  266 => 117,  262 => 116,  255 => 111,  249 => 108,  246 => 107,  244 => 106,  239 => 103,  237 => 98,  233 => 97,  227 => 94,  217 => 87,  212 => 85,  208 => 84,  201 => 80,  196 => 78,  192 => 77,  183 => 71,  178 => 69,  174 => 68,  167 => 64,  162 => 62,  158 => 61,  151 => 57,  146 => 55,  142 => 54,  133 => 47,  127 => 44,  124 => 43,  122 => 42,  118 => 40,  115 => 38,  113 => 33,  109 => 32,  103 => 29,  95 => 24,  90 => 22,  86 => 21,  81 => 19,  76 => 17,  72 => 16,  67 => 14,  62 => 12,  58 => 11,  49 => 5,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("  <section class=\"section-padding\">
                <div class=\"container\">  
                
                    <div class=\"row\">
                    {{ form_start(form) }}
                        <h3 class=\"text-extrabold\">Informations Personnelle</h3>
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
    </section>", "user/_form.html.twig", "/shared/httpd/Projet-Final/templates/user/_form.html.twig");
    }
}

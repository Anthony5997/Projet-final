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
                        <div class=\"clearfix visible-sm\"></div>
                        <div class=\"row\">
                            <div class=\"col-xs-12 col-sm-6 col-md-4\">
                                <div class=\"form-group\">
                                    ";
        // line 10
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 10, $this->source); })()), "first_name", [], "any", false, false, false, 10), 'label', ["label" => "First name"]);
        echo "
                                    ";
        // line 11
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 11, $this->source); })()), "first_name", [], "any", false, false, false, 11), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                                </div> 
                                <div class='red-text'>";
        // line 13
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 13, $this->source); })()), "first_name", [], "any", false, false, false, 13), 'errors');
        echo "</div>
                                <div class=\"form-group\">
                                    ";
        // line 15
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 15, $this->source); })()), "last_name", [], "any", false, false, false, 15), 'label', ["label" => "Last name"]);
        echo "
                                    ";
        // line 16
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 16, $this->source); })()), "last_name", [], "any", false, false, false, 16), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                                </div>
                                <div class='red-text'>";
        // line 18
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 18, $this->source); })()), "last_name", [], "any", false, false, false, 18), 'errors');
        echo "</div>
                                <div class=\"form-group\">
                                    ";
        // line 20
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 20, $this->source); })()), "date_of_birth", [], "any", false, false, false, 20), 'label', ["label" => "Birthdate"]);
        echo " 
                                    ";
        // line 21
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 21, $this->source); })()), "date_of_birth", [], "any", false, false, false, 21), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                                </div> 
                                <div class='red-text'>";
        // line 23
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 23, $this->source); })()), "date_of_birth", [], "any", false, false, false, 23), 'errors');
        echo "</div>
                            </div>
                            <div class=\"col-xs-12 col-sm-6 col-md-4\">
                            </div>
                            <div class=\"col-xs-12 col-sm-6 col-md-4\">
                                <div class='red-text'>";
        // line 28
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 28, $this->source); })()), "profile_picture", [], "any", false, false, false, 28), 'errors');
        echo "</div>
                                <div class=\"form-group\" style=\"margin-top: 32px;\">
                                    <div class=\"custom-file\" id='btnHeigt'>
                                        ";
        // line 31
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 31, $this->source); })()), "profile_picture", [], "any", false, false, false, 31), 'label');
        echo " 
                                        ";
        // line 32
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 32, $this->source); })()), "profile_picture", [], "any", false, false, false, 32), 'widget', ["attr" => ["accept" => ".pdf,.jpg,.doc,.docx,.png,.gif", "size" => "20000000", "type" => "file", "class" => "form-control"]]);
        // line 37
        echo "
                                    </div> 


                                    ";
        // line 67
        echo "                                    ";
        if ((0 !== twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 67, $this->source); })()), "profile_picture", [], "any", false, false, false, 67), ""))) {
            // line 68
            echo "                                        <div class=\"existing-file\">
                                            <a href=\"";
            // line 69
            echo twig_escape_filter($this->env, ($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/assets/uploads/profilePicture/") . twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 69, $this->source); })()), "profile_picture", [], "any", false, false, false, 69)), "html", null, true);
            echo "\" target=\"_blank\"></a>
                                        </div>
                                    ";
        }
        // line 72
        echo "                                </div>
                            </div>
                        </div>

                        <div class=\"row\">
                            <div class=\"col-xs-12 col-sm-6 col-md-4\">
                                <div class=\"form-group\">
                                    ";
        // line 79
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 79, $this->source); })()), "adress", [], "any", false, false, false, 79), 'label', ["label" => "Address"]);
        echo "
                                    ";
        // line 80
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 80, $this->source); })()), "adress", [], "any", false, false, false, 80), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                                </div>
                                <div class='red-text'>";
        // line 82
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 82, $this->source); })()), "adress", [], "any", false, false, false, 82), 'errors');
        echo "</div>
                            </div>
                            <div class=\"col-xs-12 col-sm-6 col-md-4\">
                                <div class=\"form-group\">
                                    ";
        // line 86
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 86, $this->source); })()), "country", [], "any", false, false, false, 86), 'label', ["label" => "Country"]);
        echo "
                                    ";
        // line 87
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 87, $this->source); })()), "country", [], "any", false, false, false, 87), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                                </div>  
                                <div class='red-text'>";
        // line 89
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 89, $this->source); })()), "country", [], "any", false, false, false, 89), 'errors');
        echo "</div>
                            </div>
                            <div class=\"col-xs-12 col-sm-6 col-md-4\">
                                <div class=\"form-group\">
                                    ";
        // line 93
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 93, $this->source); })()), "city", [], "any", false, false, false, 93), 'label', ["label" => "City"]);
        echo "
                                    ";
        // line 94
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 94, $this->source); })()), "city", [], "any", false, false, false, 94), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                                </div>  
                                <div class='red-text'>";
        // line 96
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 96, $this->source); })()), "city", [], "any", false, false, false, 96), 'errors');
        echo "</div>
                            </div>
                        </div>
                        <div class=\"row\">
                            <div class=\"col-xs-12 col-sm-6\">
                                <div class=\"form-group\">
                                    ";
        // line 102
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 102, $this->source); })()), "phone", [], "any", false, false, false, 102), 'label', ["label" => "Téléphone"]);
        echo " 
                                    ";
        // line 103
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 103, $this->source); })()), "phone", [], "any", false, false, false, 103), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                                </div> 
                                <div class='red-text'>";
        // line 105
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 105, $this->source); })()), "phone", [], "any", false, false, false, 105), 'errors');
        echo "</div>
                            </div>
                            <div class=\"col-xs-12 col-sm-6\">
                                <div class=\"form-group\">
                                    ";
        // line 109
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 109, $this->source); })()), "email", [], "any", false, false, false, 109), 'label', ["label" => "Email"]);
        echo " 
                                    ";
        // line 110
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 110, $this->source); })()), "email", [], "any", false, false, false, 110), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                                </div> 
                                <div class='red-text'>";
        // line 112
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 112, $this->source); })()), "email", [], "any", false, false, false, 112), 'errors');
        echo "</div>
                            </div>
                        </div>
                    <h3 class=\"text-extrabold\">Your professional profile</h3>
                    <div class=\"row mt-4\">
                        <div class=\"col-xs-12 col-sm-6\">
                            <div class=\"card card-panel passport\"> 
                                <div class='red-text'>";
        // line 119
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 119, $this->source); })()), "id_card_file", [], "any", false, false, false, 119), 'errors');
        echo "</div>
                                <div class=\"file-field form-group\">
                                    <div class=\"btn btn-lg primary waves-effect waves-light\" id='btnHeigt'>
                                        ";
        // line 122
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 122, $this->source); })()), "id_card_file", [], "any", false, false, false, 122), 'label');
        echo "
                                        ";
        // line 123
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 123, $this->source); })()), "id_card_file", [], "any", false, false, false, 123), 'widget', ["attr" => ["accept" => ".pdf,.jpg,.doc,.docx,.png,.gif", "size" => "20000000", "type" => "file", "class" => "form-control"]]);
        // line 128
        echo "
                                    </div>
                                    ";
        // line 130
        if ((0 !== twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 130, $this->source); })()), "id_card_file", [], "any", false, false, false, 130), ""))) {
            // line 131
            echo "                                        <div class=\"existing-file\">
                                            <a href=\"";
            // line 132
            echo twig_escape_filter($this->env, ($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/assets/uploads/idCard/") . twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 132, $this->source); })()), "id_card_file", [], "any", false, false, false, 132)), "html", null, true);
            echo "\" target=\"_blank\"><i class=\"material-icons\">&#xE24D;</i> ID Card.pdf</a>
                                        </div>
                                    ";
        }
        // line 135
        echo "                                </div>
                            </div>
                        </div>
                        <div class=\"col-xs-12 col-sm-12\">
                            <div class=\"form-group mt-5\">
                                ";
        // line 140
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 140, $this->source); })()), "bio", [], "any", false, false, false, 140), 'label', ["label" => "Short description for your profile, as well as more personnal informations (e.g. your hobbies/interests )."]);
        echo "
                                ";
        // line 141
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 141, $this->source); })()), "bio", [], "any", false, false, false, 141), 'widget', ["attr" => ["cols" => "20", "rows" => "5"]]);
        // line 144
        echo "
                            </div>
                            <div class='red-text'>";
        // line 146
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 146, $this->source); })()), "bio", [], "any", false, false, false, 146), 'errors');
        echo "</div>
                        </div>
                        <div class=\"col-xs-12 col-sm-12 col-md-12 mb-4 d-flex justify-content-center\">
                            <button  type='submit' class=\"col-md-6 button-update-profile\">Mettre à jour</button>
                        </div>
                        ";
        // line 151
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 151, $this->source); })()), 'form_end');
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
        return array (  278 => 151,  270 => 146,  266 => 144,  264 => 141,  260 => 140,  253 => 135,  247 => 132,  244 => 131,  242 => 130,  238 => 128,  236 => 123,  232 => 122,  226 => 119,  216 => 112,  211 => 110,  207 => 109,  200 => 105,  195 => 103,  191 => 102,  182 => 96,  177 => 94,  173 => 93,  166 => 89,  161 => 87,  157 => 86,  150 => 82,  145 => 80,  141 => 79,  132 => 72,  126 => 69,  123 => 68,  120 => 67,  114 => 37,  112 => 32,  108 => 31,  102 => 28,  94 => 23,  89 => 21,  85 => 20,  80 => 18,  75 => 16,  71 => 15,  66 => 13,  61 => 11,  57 => 10,  49 => 5,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("  <section class=\"section-padding\">
                <div class=\"container\">  
                
                    <div class=\"row\">
                    {{ form_start(form) }}
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
                                    </div> 


                                    {# <div class=\"mb-5 text-center\">
                                            <div class=\"mx-auto w-32 h-32 mb-2 border rounded-full relative bg-gray-100 mb-4 shadow-inset\">
                                                <img id=\"image\" class=\"object-cover w-full h-32 rounded-full\" :src=\"image\" />
                                            </div>
                                            
                                            <label 
                                                for=\"fileInput\"
                                                type=\"button\"
                                                class=\"cursor-pointer inine-flex justify-between items-center focus:outline-none border py-2 px-4 rounded-lg shadow-sm text-left text-gray-600 bg-white hover:bg-gray-100 font-medium\"
                                            >
                                                <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"inline-flex flex-shrink-0 w-6 h-6 -mt-1 mr-1\" viewBox=\"0 0 24 24\" stroke-width=\"2\" stroke=\"currentColor\" fill=\"none\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
                                                    <rect x=\"0\" y=\"0\" width=\"24\" height=\"24\" stroke=\"none\"></rect>
                                                    <path d=\"M5 7h1a2 2 0 0 0 2 -2a1 1 0 0 1 1 -1h6a1 1 0 0 1 1 1a2 2 0 0 0 2 2h1a2 2 0 0 1 2 2v9a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2v-9a2 2 0 0 1 2 -2\" />
                                                    <circle cx=\"12\" cy=\"13\" r=\"3\" />
                                                </svg>\t\t\t\t\t\t
                                                Choisissez une photo
                                            </label>

                                            <div class=\"mx-auto w-48 text-gray-500 text-xs text-center mt-1\">Cliquer pour ajouter une photo</div>

                                            <input name=\"picture\" id=\"fileInput\" accept=\"image/*\" class=\"hidden\" type=\"file\" @change=\"let file = document.getElementById('fileInput').files[0]; 
                                                var reader = new FileReader();
                                                reader.onload = (e) => image = e.target.result;
                                                reader.readAsDataURL(file);\">
                                        </div>
                             #}
                                    {% if user.profile_picture != '' %}
                                        <div class=\"existing-file\">
                                            <a href=\"{{asset ('/assets/uploads/profilePicture/') ~ user.profile_picture }}\" target=\"_blank\"></a>
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
                    <div class=\"row mt-4\">
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
                            <div class=\"form-group mt-5\">
                                {{ form_label(form.bio, 'Short description for your profile, as well as more personnal informations (e.g. your hobbies/interests ).') }}
                                {{ form_widget(form.bio, { 'attr': {
                                        'cols' : \"20\",
                                        'rows' : \"5\"
                                }}) }}
                            </div>
                            <div class='red-text'>{{ form_errors(form.bio)}}</div>
                        </div>
                        <div class=\"col-xs-12 col-sm-12 col-md-12 mb-4 d-flex justify-content-center\">
                            <button  type='submit' class=\"col-md-6 button-update-profile\">Mettre à jour</button>
                        </div>
                        {{ form_end(form) }}
                    </div>
                </div>
            </div>
    </section>", "user/_form.html.twig", "/shared/httpd/Projet-Final/templates/user/_form.html.twig");
    }
}

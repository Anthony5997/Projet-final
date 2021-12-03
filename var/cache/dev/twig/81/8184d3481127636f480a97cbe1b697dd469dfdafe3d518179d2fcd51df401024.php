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
                
                    <div class=\"row justify-content-center \">
                    <div class=\"col-6 d-flex form-info\">
                    ";
        // line 6
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 6, $this->source); })()), 'form_start');
        echo "
                        <div class=\"clearfix visible-sm\"></div>
                        <div class=\"row justify-content-between\">
                            <div class=\"col-xs-12 col-sm-6 col-md-5\">
                                <div class=\"d-flex custom-input-div\">
                                    <i class=\"fas fa-user d-flex align-items-center\"></i>
                                    ";
        // line 12
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 12, $this->source); })()), "first_name", [], "any", false, false, false, 12), 'widget', ["attr" => ["class" => "custom-field-form", "placeholder" => "Prénom"]]);
        echo "
                                </div> 
                                <div class='red-text'>";
        // line 14
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 14, $this->source); })()), "first_name", [], "any", false, false, false, 14), 'errors');
        echo "</div>
                                <div class=\"d-flex custom-input-div\">
                                    <span class=\"d-flex align-items-center ml-4\"></span>
                                    ";
        // line 17
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 17, $this->source); })()), "last_name", [], "any", false, false, false, 17), 'widget', ["attr" => ["class" => "custom-field-form", "placeholder" => "Nom"]]);
        echo "
                                </div>
                                <div class='red-text'>";
        // line 19
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 19, $this->source); })()), "last_name", [], "any", false, false, false, 19), 'errors');
        echo "</div>
                                <div class=\"d-flex custom-input-div\">
                                    <i class=\"fas fa-birthday-cake d-flex align-items-center\"></i>
                                    ";
        // line 22
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 22, $this->source); })()), "date_of_birth", [], "any", false, false, false, 22), 'widget', ["attr" => ["class" => "custom-field-form", "placeholder" => "Prénom"]]);
        echo "
                                </div> 
                                <div class='red-text'>";
        // line 24
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 24, $this->source); })()), "date_of_birth", [], "any", false, false, false, 24), 'errors');
        echo "</div>
                            </div>
                            <div class=\"col-xs-12 col-sm-6 col-md-4\">
                                <div class='red-text'>";
        // line 27
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 27, $this->source); })()), "profile_picture", [], "any", false, false, false, 27), 'errors');
        echo "</div>
                                <div class=\"\">
                                 ";
        // line 29
        if ((0 !== twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 29, $this->source); })()), "profile_picture", [], "any", false, false, false, 29), ""))) {
            // line 30
            echo "                                    <div class=\"existing-file d-flex justify-content-center\">
                                       <img class=\"profile-picture-profile\" src=\"";
            // line 31
            echo twig_escape_filter($this->env, ($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/assets/uploads/profilePicture/") . twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 31, $this->source); })()), "profile_picture", [], "any", false, false, false, 31)), "html", null, true);
            echo "\"/>
                                    </div>
                                    ";
        } else {
            // line 34
            echo "                                        <div class=\"existing-file d-flex justify-content-center\">
                                        <img class=\"profile-picture-profile\" src=\"";
            // line 35
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/assets/uploads/profilePicture/default_profile_picture.jpg"), "html", null, true);
            echo "\"/>
                                    </div>
                                ";
        }
        // line 38
        echo "                                    <div class=\"custom-file fileUpload\" id='btnHeigt'>
                                        ";
        // line 39
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 39, $this->source); })()), "profile_picture", [], "any", false, false, false, 39), 'widget', ["attr" => ["accept" => ".pdf,.jpg,.doc,.docx,.png,.gif", "size" => "20000000", "type" => "file", "class" => "custom-field-form upload"]]);
        // line 44
        echo "
                                               <span>Upload</span>
                                    </div>
                                    ";
        // line 47
        if ((0 !== twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 47, $this->source); })()), "profile_picture", [], "any", false, false, false, 47), ""))) {
            // line 48
            echo "                                        <div class=\"existing-file\">
                                            <a href=\"";
            // line 49
            echo twig_escape_filter($this->env, ($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/assets/uploads/profilePicture/") . twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 49, $this->source); })()), "profile_picture", [], "any", false, false, false, 49)), "html", null, true);
            echo "\" target=\"_blank\"></a>
                                        </div>
                                    ";
        }
        // line 52
        echo "                                </div>
                            </div>
                        </div>

                        <div class=\"row\">
                            <div class=\"col-xs-12 col-sm-6 col-md-4\">
                                <div class=\"d-flex custom-input-div\">
                                    <i class=\"fas fa-city d-flex align-items-center\"></i>
                                    ";
        // line 60
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 60, $this->source); })()), "adress", [], "any", false, false, false, 60), 'widget', ["attr" => ["class" => "custom-field-form", "placeholder" => "Adresse"]]);
        echo "
                                </div>
                                <div class='red-text'>";
        // line 62
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 62, $this->source); })()), "adress", [], "any", false, false, false, 62), 'errors');
        echo "</div>
                            </div>
                            <div class=\"col-xs-12 col-sm-6 col-md-4\">
                                <div class=\"d-flex custom-input-div\">
                                    ";
        // line 66
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 66, $this->source); })()), "country", [], "any", false, false, false, 66), 'widget', ["attr" => ["class" => "custom-field-form", "placeholder" => "Pays"]]);
        echo "
                                </div>  
                                <div class='red-text'>";
        // line 68
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 68, $this->source); })()), "country", [], "any", false, false, false, 68), 'errors');
        echo "</div>
                            </div>
                            <div class=\"col-xs-12 col-sm-6 col-md-4\">
                                <div class=\"d-flex custom-input-div\">
                                    ";
        // line 72
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 72, $this->source); })()), "city", [], "any", false, false, false, 72), 'widget', ["attr" => ["class" => "custom-field-form", "placeholder" => "Ville"]]);
        echo "
                                </div>  
                                <div class='red-text'>";
        // line 74
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 74, $this->source); })()), "city", [], "any", false, false, false, 74), 'errors');
        echo "</div>
                            </div>
                        </div>
                        <div class=\"row\">
                            <div class=\"col-xs-12 col-sm-6\">
                                <div class=\"d-flex custom-input-div\">
                                <i class=\"fas fa-phone d-flex align-items-center\"></i>   
                                ";
        // line 81
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 81, $this->source); })()), "phone", [], "any", false, false, false, 81), 'widget', ["attr" => ["class" => "custom-field-form", "placeholder" => "Téléphone"]]);
        echo "
                                </div> 
                                <div class='red-text'>";
        // line 83
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 83, $this->source); })()), "phone", [], "any", false, false, false, 83), 'errors');
        echo "</div>
                            </div>
                            <div class=\"col-xs-12 col-sm-6\">
                                <div class=\"d-flex custom-input-div\">
                                <i class=\"fas fa-at d-flex align-items-center\"></i>
                                    ";
        // line 88
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 88, $this->source); })()), "email", [], "any", false, false, false, 88), 'widget', ["attr" => ["class" => "custom-field-form", "placeholder" => "Email"]]);
        echo "
                                </div> 
                                <div class='red-text'>";
        // line 90
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 90, $this->source); })()), "email", [], "any", false, false, false, 90), 'errors');
        echo "</div>
                            </div>
                        </div>
                    <div class=\"row mt-4\">
                        <div class=\"col-xs-12 col-sm-6 mt-2\">
                            <div class=\"d-flex custom-input-div my-0\">
                                <i class=\"fas fa-address-card d-flex align-items-center\"></i>
                                <p class=\"d-flex align-items-center mb-0\">Ajouter une carte d'dentité</p>
                            </div>
                            <div class=\"card card-panel passport\"> 
                                <div class='red-text'>";
        // line 100
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 100, $this->source); })()), "id_card_file", [], "any", false, false, false, 100), 'errors');
        echo "</div>
                                <div class=\"file-field \">
                                    <div class=\"btn btn-lg primary\" id='btnHeigt'>
                                        ";
        // line 103
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 103, $this->source); })()), "id_card_file", [], "any", false, false, false, 103), 'label');
        echo "
                                        ";
        // line 104
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 104, $this->source); })()), "id_card_file", [], "any", false, false, false, 104), 'widget', ["attr" => ["accept" => ".pdf,.jpg,.doc,.docx,.png,.gif", "size" => "20000000", "type" => "file", "class" => "custom-field-form"]]);
        // line 109
        echo "
                                    </div>
                                    ";
        // line 111
        if ((0 !== twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 111, $this->source); })()), "id_card_file", [], "any", false, false, false, 111), ""))) {
            // line 112
            echo "                                        <div class=\"existing-file\">
                                            <a href=\"";
            // line 113
            echo twig_escape_filter($this->env, ($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/assets/uploads/idCard/") . twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 113, $this->source); })()), "id_card_file", [], "any", false, false, false, 113)), "html", null, true);
            echo "\" target=\"_blank\"><i class=\"material-icons\">&#xE24D;</i> ID Card.pdf</a>
                                        </div>
                                    ";
        }
        // line 116
        echo "                                </div>
                            </div>
                        </div>
                        <div class=\"col-xs-12 col-sm-6\">
                            <div class=\"custom-input-div mt-2\">
                            <i class=\"fas fa-info\"></i>
                                ";
        // line 122
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 122, $this->source); })()), "bio", [], "any", false, false, false, 122), 'label', ["label" => "Ajouter une biographie!"]);
        echo "
                                ";
        // line 123
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 123, $this->source); })()), "bio", [], "any", false, false, false, 123), 'widget', ["attr" => ["cols" => "20", "rows" => "5", "placeholder" => " Apprennez en plus sur vous aux autres utilisateurs", "class" => "custom-field-form"]]);
        // line 128
        echo "
                            </div>
                            <div class='red-text'>";
        // line 130
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 130, $this->source); })()), "bio", [], "any", false, false, false, 130), 'errors');
        echo "</div>
                        </div>
                        <div class=\"col-xs-12 col-sm-12 col-md-12 mb-4 d-flex justify-content-center\">
                            <button  type='submit' class=\"col-md-6 button-update-profile\">Mettre à jour</button>
                        </div>
                        ";
        // line 135
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 135, $this->source); })()), 'form_end');
        echo "
                    </div>
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
        return array (  271 => 135,  263 => 130,  259 => 128,  257 => 123,  253 => 122,  245 => 116,  239 => 113,  236 => 112,  234 => 111,  230 => 109,  228 => 104,  224 => 103,  218 => 100,  205 => 90,  200 => 88,  192 => 83,  187 => 81,  177 => 74,  172 => 72,  165 => 68,  160 => 66,  153 => 62,  148 => 60,  138 => 52,  132 => 49,  129 => 48,  127 => 47,  122 => 44,  120 => 39,  117 => 38,  111 => 35,  108 => 34,  102 => 31,  99 => 30,  97 => 29,  92 => 27,  86 => 24,  81 => 22,  75 => 19,  70 => 17,  64 => 14,  59 => 12,  50 => 6,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("  <section class=\"section-padding\">
                <div class=\"container\">  
                
                    <div class=\"row justify-content-center \">
                    <div class=\"col-6 d-flex form-info\">
                    {{ form_start(form) }}
                        <div class=\"clearfix visible-sm\"></div>
                        <div class=\"row justify-content-between\">
                            <div class=\"col-xs-12 col-sm-6 col-md-5\">
                                <div class=\"d-flex custom-input-div\">
                                    <i class=\"fas fa-user d-flex align-items-center\"></i>
                                    {{ form_widget(form.first_name, {'attr': {'class': 'custom-field-form', 'placeholder': 'Prénom'}}) }}
                                </div> 
                                <div class='red-text'>{{ form_errors(form.first_name)}}</div>
                                <div class=\"d-flex custom-input-div\">
                                    <span class=\"d-flex align-items-center ml-4\"></span>
                                    {{ form_widget(form.last_name, {'attr': {'class': 'custom-field-form', 'placeholder': 'Nom'}}) }}
                                </div>
                                <div class='red-text'>{{ form_errors(form.last_name)}}</div>
                                <div class=\"d-flex custom-input-div\">
                                    <i class=\"fas fa-birthday-cake d-flex align-items-center\"></i>
                                    {{ form_widget(form.date_of_birth, {'attr': {'class': 'custom-field-form', 'placeholder': 'Prénom'}}) }}
                                </div> 
                                <div class='red-text'>{{ form_errors(form.date_of_birth)}}</div>
                            </div>
                            <div class=\"col-xs-12 col-sm-6 col-md-4\">
                                <div class='red-text'>{{ form_errors(form.profile_picture)}}</div>
                                <div class=\"\">
                                 {% if user.profile_picture != '' %}
                                    <div class=\"existing-file d-flex justify-content-center\">
                                       <img class=\"profile-picture-profile\" src=\"{{asset ('/assets/uploads/profilePicture/') ~ user.profile_picture }}\"/>
                                    </div>
                                    {% else %}
                                        <div class=\"existing-file d-flex justify-content-center\">
                                        <img class=\"profile-picture-profile\" src=\"{{asset ('/assets/uploads/profilePicture/default_profile_picture.jpg')}}\"/>
                                    </div>
                                {% endif %}
                                    <div class=\"custom-file fileUpload\" id='btnHeigt'>
                                        {{ form_widget(form.profile_picture, { 'attr': {
                                            'accept' : '.pdf,.jpg,.doc,.docx,.png,.gif',
                                            'size' : '20000000', 
                                            'type' : 'file',
                                            'class': 'custom-field-form upload'
                                            }}) }}
                                               <span>Upload</span>
                                    </div>
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
                                <div class=\"d-flex custom-input-div\">
                                    <i class=\"fas fa-city d-flex align-items-center\"></i>
                                    {{ form_widget(form.adress, {'attr': {'class': 'custom-field-form', 'placeholder': 'Adresse'}}) }}
                                </div>
                                <div class='red-text'>{{ form_errors(form.adress)}}</div>
                            </div>
                            <div class=\"col-xs-12 col-sm-6 col-md-4\">
                                <div class=\"d-flex custom-input-div\">
                                    {{ form_widget(form.country, {'attr': {'class': 'custom-field-form', 'placeholder': 'Pays'}}) }}
                                </div>  
                                <div class='red-text'>{{ form_errors(form.country)}}</div>
                            </div>
                            <div class=\"col-xs-12 col-sm-6 col-md-4\">
                                <div class=\"d-flex custom-input-div\">
                                    {{ form_widget(form.city, {'attr': {'class': 'custom-field-form', 'placeholder': 'Ville'}}) }}
                                </div>  
                                <div class='red-text'>{{ form_errors(form.city)}}</div>
                            </div>
                        </div>
                        <div class=\"row\">
                            <div class=\"col-xs-12 col-sm-6\">
                                <div class=\"d-flex custom-input-div\">
                                <i class=\"fas fa-phone d-flex align-items-center\"></i>   
                                {{ form_widget(form.phone, {'attr': {'class': 'custom-field-form', 'placeholder': 'Téléphone'}}) }}
                                </div> 
                                <div class='red-text'>{{ form_errors(form.phone)}}</div>
                            </div>
                            <div class=\"col-xs-12 col-sm-6\">
                                <div class=\"d-flex custom-input-div\">
                                <i class=\"fas fa-at d-flex align-items-center\"></i>
                                    {{ form_widget(form.email, {'attr': {'class': 'custom-field-form', 'placeholder': 'Email'}}) }}
                                </div> 
                                <div class='red-text'>{{ form_errors(form.email)}}</div>
                            </div>
                        </div>
                    <div class=\"row mt-4\">
                        <div class=\"col-xs-12 col-sm-6 mt-2\">
                            <div class=\"d-flex custom-input-div my-0\">
                                <i class=\"fas fa-address-card d-flex align-items-center\"></i>
                                <p class=\"d-flex align-items-center mb-0\">Ajouter une carte d'dentité</p>
                            </div>
                            <div class=\"card card-panel passport\"> 
                                <div class='red-text'>{{ form_errors(form.id_card_file)}}</div>
                                <div class=\"file-field \">
                                    <div class=\"btn btn-lg primary\" id='btnHeigt'>
                                        {{ form_label(form.id_card_file) }}
                                        {{ form_widget(form.id_card_file, { 'attr': {
                                        'accept' : '.pdf,.jpg,.doc,.docx,.png,.gif',
                                        'size' : '20000000', 
                                        'type' : 'file',
                                        'class': 'custom-field-form'
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
                        <div class=\"col-xs-12 col-sm-6\">
                            <div class=\"custom-input-div mt-2\">
                            <i class=\"fas fa-info\"></i>
                                {{ form_label(form.bio, 'Ajouter une biographie!') }}
                                {{ form_widget(form.bio, { 'attr': {
                                        'cols' : \"20\",
                                        'rows' : \"5\",
                                        'placeholder': ' Apprennez en plus sur vous aux autres utilisateurs',
                                        'class':'custom-field-form'
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
            </div>
    </section>", "user/_form.html.twig", "/shared/httpd/Projet-Final/templates/user/_form.html.twig");
    }
}

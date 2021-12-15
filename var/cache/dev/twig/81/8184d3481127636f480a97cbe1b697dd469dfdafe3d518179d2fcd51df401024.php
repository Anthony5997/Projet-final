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
            <div class=\"row justify-content-center \">
                    <div class=\"col-10 d-flex justify-content-center form-info\">
                    ";
        // line 4
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 4, $this->source); })()), 'form_start');
        echo "
                        <div class=\"clearfix visible-sm\"></div>
                        <div class=\"row justify-content-between\">
                            <div class=\"col-xs-12 col-sm-6 col-md-5\">
                                <div class=\"d-flex custom-input-div\">
                                    <i class=\"fas fa-user d-flex align-items-center\"></i>
                                    ";
        // line 10
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 10, $this->source); })()), "first_name", [], "any", false, false, false, 10), 'widget', ["attr" => ["class" => "custom-field-form", "placeholder" => "Prénom"]]);
        echo "
                                </div> 
                                <div class='red-text'>";
        // line 12
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 12, $this->source); })()), "first_name", [], "any", false, false, false, 12), 'errors');
        echo "</div>
                                <div class=\"d-flex custom-input-div\">
                                    <span class=\"d-flex align-items-center ml-4\"></span>
                                    ";
        // line 15
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 15, $this->source); })()), "last_name", [], "any", false, false, false, 15), 'widget', ["attr" => ["class" => "custom-field-form", "placeholder" => "Nom"]]);
        echo "
                                </div>
                                <div class='red-text'>";
        // line 17
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 17, $this->source); })()), "last_name", [], "any", false, false, false, 17), 'errors');
        echo "</div>
                                <div class=\"d-flex custom-input-div\">
                                    <i class=\"fas fa-birthday-cake d-flex align-items-center\"></i>
                                    ";
        // line 20
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 20, $this->source); })()), "date_of_birth", [], "any", false, false, false, 20), 'widget', ["attr" => ["class" => "custom-field-form", "placeholder" => "Prénom"]]);
        echo "
                                </div> 
                                <div class='red-text'>";
        // line 22
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 22, $this->source); })()), "date_of_birth", [], "any", false, false, false, 22), 'errors');
        echo "</div>
                            </div>
                            <div class=\"col-xs-12 col-sm-6 col-md-4\">
                                <div class='red-text'>";
        // line 25
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 25, $this->source); })()), "profile_picture", [], "any", false, false, false, 25), 'errors');
        echo "</div>
                                <div class=\"\">
                                 ";
        // line 27
        if ((0 !== twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 27, $this->source); })()), "profile_picture", [], "any", false, false, false, 27), ""))) {
            // line 28
            echo "                                    <div class=\"existing-file d-flex justify-content-center\">
                                       <img class=\"profile-picture-profile\" src=\"";
            // line 29
            echo twig_escape_filter($this->env, ($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/assets/uploads/profilePicture/") . twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 29, $this->source); })()), "profile_picture", [], "any", false, false, false, 29)), "html", null, true);
            echo "\"/>
                                    </div>
                                    ";
        } else {
            // line 32
            echo "                                        <div class=\"existing-file d-flex justify-content-center\">
                                        <img class=\"profile-picture-profile\" src=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/assets/uploads/profilePicture/default_profile_picture.jpg"), "html", null, true);
            echo "\"/>
                                    </div>
                                ";
        }
        // line 36
        echo "                                    <div class=\"custom-file fileUpload\" id='btnHeigt'>
                                        ";
        // line 37
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 37, $this->source); })()), "profile_picture", [], "any", false, false, false, 37), 'widget', ["attr" => ["accept" => ".pdf,.jpg,.doc,.docx,.png,.gif", "size" => "20000000", "type" => "file", "class" => "custom-field-form upload"]]);
        // line 42
        echo "
                                               <span>Ajouter une photo</span>
                                    </div>
                                    ";
        // line 45
        if ((0 !== twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 45, $this->source); })()), "profile_picture", [], "any", false, false, false, 45), ""))) {
            // line 46
            echo "                                        <div class=\"existing-file\">
                                            <a href=\"";
            // line 47
            echo twig_escape_filter($this->env, ($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/assets/uploads/profilePicture/") . twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 47, $this->source); })()), "profile_picture", [], "any", false, false, false, 47)), "html", null, true);
            echo "\" target=\"_blank\"></a>
                                        </div>
                                    ";
        }
        // line 50
        echo "                                </div>
                            </div>
                        </div>
                        <div class=\"row justify-content-between\">
                            <div class=\"col-xs-12 col-sm-6\">
                                <div class=\"d-flex custom-input-div\">
                                <i class=\"fas fa-phone d-flex align-items-center\"></i>   
                                ";
        // line 57
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 57, $this->source); })()), "phone", [], "any", false, false, false, 57), 'widget', ["attr" => ["class" => "custom-field-form", "placeholder" => "Téléphone"]]);
        echo "
                                </div> 
                                <div class='red-text'>";
        // line 59
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 59, $this->source); })()), "phone", [], "any", false, false, false, 59), 'errors');
        echo "</div>
                            </div>
                            <div class=\"col-xs-12 col-sm-6\">
                                <div class=\"d-flex custom-input-div\">
                                <i class=\"fas fa-at d-flex align-items-center\"></i>
                                    ";
        // line 64
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 64, $this->source); })()), "email", [], "any", false, false, false, 64), 'widget', ["attr" => ["class" => "custom-field-form", "placeholder" => "Email"]]);
        echo "
                                </div> 
                                <div class='red-text'>";
        // line 66
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 66, $this->source); })()), "email", [], "any", false, false, false, 66), 'errors');
        echo "</div>
                            </div>
                        </div>
                    <div class=\"row justify-content-center\">
                        <div class=\"col-12\">
                            <div class=\"custom-input-div mt-2\">
                            <i class=\"fas fa-info\"></i>
                                ";
        // line 73
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 73, $this->source); })()), "bio", [], "any", false, false, false, 73), 'label', ["label" => "Ajouter une biographie!"]);
        echo "
                                ";
        // line 74
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 74, $this->source); })()), "bio", [], "any", false, false, false, 74), 'widget', ["attr" => ["cols" => "20", "rows" => "5", "placeholder" => " Apprennez en plus sur vous aux autres utilisateurs", "class" => "custom-field-form"]]);
        // line 79
        echo "
                            </div>
                            <div class='red-text'>";
        // line 81
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 81, $this->source); })()), "bio", [], "any", false, false, false, 81), 'errors');
        echo "</div>
                        </div>
                        <div class=\"col-xs-12 col-sm-12 col-md-12 mb-4 d-flex justify-content-center\">
                            <button  type='submit' class=\"col-md-6 button-update-profile\">Mettre à jour</button>
                        </div>
                        ";
        // line 86
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 86, $this->source); })()), 'form_end');
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
        return array (  191 => 86,  183 => 81,  179 => 79,  177 => 74,  173 => 73,  163 => 66,  158 => 64,  150 => 59,  145 => 57,  136 => 50,  130 => 47,  127 => 46,  125 => 45,  120 => 42,  118 => 37,  115 => 36,  109 => 33,  106 => 32,  100 => 29,  97 => 28,  95 => 27,  90 => 25,  84 => 22,  79 => 20,  73 => 17,  68 => 15,  62 => 12,  57 => 10,  48 => 4,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("  <section class=\"section-padding\">
            <div class=\"row justify-content-center \">
                    <div class=\"col-10 d-flex justify-content-center form-info\">
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
                                               <span>Ajouter une photo</span>
                                    </div>
                                    {% if user.profile_picture != '' %}
                                        <div class=\"existing-file\">
                                            <a href=\"{{asset ('/assets/uploads/profilePicture/') ~ user.profile_picture }}\" target=\"_blank\"></a>
                                        </div>
                                    {% endif %}
                                </div>
                            </div>
                        </div>
                        <div class=\"row justify-content-between\">
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
                    <div class=\"row justify-content-center\">
                        <div class=\"col-12\">
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
    </section>", "user/_form.html.twig", "/shared/httpd/Projet-Final/templates/user/_form.html.twig");
    }
}

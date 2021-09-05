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

        // line 5
        echo "
";
        // line 6
        echo $this->extensions['Symfony\Bridge\Twig\Extension\DumpExtension']->dump($this->env, $context, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 6, $this->source); })()));
        echo "

  <section class=\"section-padding\">
                <div class=\"container\">  
                
                    <div class=\"row\">
                    ";
        // line 12
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 12, $this->source); })()), 'form_start');
        echo "
                  
                        <h3 class=\"text-extrabold\">Your personal informations</h3>
                        <div class=\"clearfix visible-sm\"></div>
                        <div class=\"row\">
                            <div class=\"col-xs-12 col-sm-6 col-md-4\">
                                <div class=\"form-group\">
                                    ";
        // line 19
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 19, $this->source); })()), "first_name", [], "any", false, false, false, 19), 'label', ["label" => "First name"]);
        echo "
                                    ";
        // line 20
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 20, $this->source); })()), "first_name", [], "any", false, false, false, 20), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                                </div> 
                                <div class='red-text'>";
        // line 22
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 22, $this->source); })()), "first_name", [], "any", false, false, false, 22), 'errors');
        echo "</div>
                                <div class=\"form-group\">
                                    ";
        // line 24
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 24, $this->source); })()), "last_name", [], "any", false, false, false, 24), 'label', ["label" => "Last name"]);
        echo "
                                    ";
        // line 25
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 25, $this->source); })()), "last_name", [], "any", false, false, false, 25), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                                </div>
                                <div class='red-text'>";
        // line 27
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 27, $this->source); })()), "last_name", [], "any", false, false, false, 27), 'errors');
        echo "</div>
                                <div class=\"form-group\">
                                    ";
        // line 29
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 29, $this->source); })()), "date_of_birth", [], "any", false, false, false, 29), 'label', ["label" => "Birthdate"]);
        echo " 
                                    ";
        // line 30
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 30, $this->source); })()), "date_of_birth", [], "any", false, false, false, 30), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                                </div> 
                                <div class='red-text'>";
        // line 32
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 32, $this->source); })()), "date_of_birth", [], "any", false, false, false, 32), 'errors');
        echo "</div>
                            </div>
                            <div class=\"col-xs-12 col-sm-6 col-md-4\">
                            </div>
                            <div class=\"col-xs-12 col-sm-6 col-md-4\">
                                <div class='red-text'>";
        // line 37
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 37, $this->source); })()), "profile_picture", [], "any", false, false, false, 37), 'errors');
        echo "</div>
                                <div class=\"form-group\" style=\"margin-top: 32px;\">
                                    <div class=\"custom-file\" id='btnHeigt'>
                                        ";
        // line 40
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 40, $this->source); })()), "profile_picture", [], "any", false, false, false, 40), 'label');
        echo " 
                                        ";
        // line 41
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 41, $this->source); })()), "profile_picture", [], "any", false, false, false, 41), 'widget', ["attr" => ["accept" => ".pdf,.jpg,.doc,.docx,.png,.gif", "size" => "20000000", "type" => "file", "class" => "form-control"]]);
        // line 46
        echo "
                                        ";
        // line 48
        echo "                                    </div>
                            
                                    ";
        // line 50
        if ((0 !== twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 50, $this->source); })()), "profile_picture", [], "any", false, false, false, 50), ""))) {
            // line 51
            echo "                                        <div class=\"existing-file\">
                                            <a href=\"";
            // line 52
            echo twig_escape_filter($this->env, ($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/assets/uploads/profilePicture/") . twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 52, $this->source); })()), "profile_picture", [], "any", false, false, false, 52)), "html", null, true);
            echo "\" target=\"_blank\"><i class=\"material-icons\">&#xE24D;</i> profil_picture.jpg</a>
                                        </div>
                                        <div class=\"file-path-wrapper\">
                                            <input class=\"file-path validate\" type=\"text\" placeholder=\"Upload your profile picture\" readonly>
                                        </div>
                                    ";
        }
        // line 58
        echo "                                </div>
                            </div>
                        </div>

                        <div class=\"row\">
                            <div class=\"col-xs-12 col-sm-6 col-md-4\">
                                <div class=\"form-group\">
                                    ";
        // line 65
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 65, $this->source); })()), "adress", [], "any", false, false, false, 65), 'label', ["label" => "Address"]);
        echo "
                                    ";
        // line 66
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 66, $this->source); })()), "adress", [], "any", false, false, false, 66), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                                </div>
                                <div class='red-text'>";
        // line 68
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 68, $this->source); })()), "adress", [], "any", false, false, false, 68), 'errors');
        echo "</div>
                            </div>
                            <div class=\"col-xs-12 col-sm-6 col-md-4\">
                                <div class=\"form-group\">
                                    ";
        // line 72
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 72, $this->source); })()), "country", [], "any", false, false, false, 72), 'label', ["label" => "Country"]);
        echo "
                                    ";
        // line 73
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 73, $this->source); })()), "country", [], "any", false, false, false, 73), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                                </div>  
                                <div class='red-text'>";
        // line 75
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 75, $this->source); })()), "country", [], "any", false, false, false, 75), 'errors');
        echo "</div>
                            </div>
                            <div class=\"col-xs-12 col-sm-6 col-md-4\">
                                <div class=\"form-group\">
                                    ";
        // line 79
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 79, $this->source); })()), "city", [], "any", false, false, false, 79), 'label', ["label" => "City"]);
        echo "
                                    ";
        // line 80
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 80, $this->source); })()), "city", [], "any", false, false, false, 80), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                                </div>  
                                <div class='red-text'>";
        // line 82
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 82, $this->source); })()), "city", [], "any", false, false, false, 82), 'errors');
        echo "</div>
                            </div>
                        </div>
                        <div class=\"row\">
                            <div class=\"col-xs-12 col-sm-6\">
                                <div class=\"form-group\">
                                    ";
        // line 88
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 88, $this->source); })()), "phone", [], "any", false, false, false, 88), 'label', ["label" => "Téléphone"]);
        echo " 
                                    ";
        // line 89
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 89, $this->source); })()), "phone", [], "any", false, false, false, 89), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                                </div> 
                                <div class='red-text'>";
        // line 91
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 91, $this->source); })()), "phone", [], "any", false, false, false, 91), 'errors');
        echo "</div>
                            </div>
                            <div class=\"col-xs-12 col-sm-6\">
                                <div class=\"form-group\">
                                    ";
        // line 95
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 95, $this->source); })()), "email", [], "any", false, false, false, 95), 'label', ["label" => "Email"]);
        echo " 
                                    ";
        // line 96
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 96, $this->source); })()), "email", [], "any", false, false, false, 96), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                                </div> 
                                <div class='red-text'>";
        // line 98
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 98, $this->source); })()), "email", [], "any", false, false, false, 98), 'errors');
        echo "</div>
                            </div>
                        </div>
                    <h3 class=\"text-extrabold\">Your professional profile</h3>
                    <div class=\"row mt-40\">
                        <div class=\"col-xs-12 col-sm-6\">
                            <div class=\"card card-panel passport\"> 
                                <div class='red-text'>";
        // line 105
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 105, $this->source); })()), "id_card_file", [], "any", false, false, false, 105), 'errors');
        echo "</div>
                                <div class=\"file-field form-group\">
                                    <div class=\"btn btn-lg primary waves-effect waves-light\" id='btnHeigt'>
                                        ";
        // line 108
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 108, $this->source); })()), "id_card_file", [], "any", false, false, false, 108), 'label');
        echo "
                                        ";
        // line 109
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 109, $this->source); })()), "id_card_file", [], "any", false, false, false, 109), 'widget', ["attr" => ["accept" => ".pdf,.jpg,.doc,.docx,.png,.gif", "size" => "20000000", "type" => "file", "class" => "form-control"]]);
        // line 114
        echo "
                                        <span><i class=\"material-icons\">&#xE24D;</i> CV</span>
                                    </div>
                                    ";
        // line 117
        if ((0 !== twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 117, $this->source); })()), "id_card_file", [], "any", false, false, false, 117), ""))) {
            // line 118
            echo "                                        <div class=\"existing-file\">
                                            <a href=\"";
            // line 119
            echo twig_escape_filter($this->env, ($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/assets/uploads/id_card_file/") . twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 119, $this->source); })()), "id_card_file", [], "any", false, false, false, 119)), "html", null, true);
            echo "\" target=\"_blank\"><i class=\"material-icons\">&#xE24D;</i> CV.pdf</a>
                                        </div>
                                        <div class=\"file-path-wrapper\">
                                            <input class=\"file-path validate\" type=\"text\" placeholder=\"Upload your Id Card\" readonly>
                                        </div>
                                    ";
        }
        // line 125
        echo "                                </div>
                            </div>
                        </div>
                        <div class=\"col-xs-12 col-sm-12\">
                            <div class=\"form-group\">
                                ";
        // line 130
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 130, $this->source); })()), "bio", [], "any", false, false, false, 130), 'label', ["label" => "Short description for your profile, as well as more personnal informations (e.g. your hobbies/interests )."]);
        echo "
                                ";
        // line 131
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 131, $this->source); })()), "bio", [], "any", false, false, false, 131), 'widget', ["attr" => ["cols" => "20", "rows" => "5"]]);
        // line 134
        echo "
                            </div>
                            <div class='red-text'>";
        // line 136
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 136, $this->source); })()), "bio", [], "any", false, false, false, 136), 'errors');
        echo "</div>
                        </div>
                        <div class=\"col-xs-12 col-sm-12 center\">
                            <button  type='submit' class=\"btn btn-secondaryt\">
                                <span><strong>UPDATE</strong> NOW</span>
                            </button>
                        </div>
                        ";
        // line 143
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 143, $this->source); })()), 'form_end');
        echo "
                    </div>
                </div>
            </div>
    </section>
     
    <div class=\"row\">
        <div class=\"col-xs-12 col-sm-6 col-md-4\">
            <a href=\"";
        // line 151
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\" class=\"btn btn-block btn-lg border primary waves-effect waves-light\"><i class=\"fa fa-long-arrow-left\"></i> Back home</a>
        </div>
        <div class=\"col-xs-12 col-sm-6 col-md-4 col-md-offset-4\">
            ";
        // line 154
        echo twig_include($this->env, $context, "user/_delete_form.html.twig");
        echo "
        </div>
    </div>


            ";
        // line 199
        echo "
                </div>
            </section> ";
        
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
        return array (  320 => 199,  312 => 154,  306 => 151,  295 => 143,  285 => 136,  281 => 134,  279 => 131,  275 => 130,  268 => 125,  259 => 119,  256 => 118,  254 => 117,  249 => 114,  247 => 109,  243 => 108,  237 => 105,  227 => 98,  222 => 96,  218 => 95,  211 => 91,  206 => 89,  202 => 88,  193 => 82,  188 => 80,  184 => 79,  177 => 75,  172 => 73,  168 => 72,  161 => 68,  156 => 66,  152 => 65,  143 => 58,  134 => 52,  131 => 51,  129 => 50,  125 => 48,  122 => 46,  120 => 41,  116 => 40,  110 => 37,  102 => 32,  97 => 30,  93 => 29,  88 => 27,  83 => 25,  79 => 24,  74 => 22,  69 => 20,  65 => 19,  55 => 12,  46 => 6,  43 => 5,);
    }

    public function getSourceContext()
    {
        return new Source("{# {{ form_start(form) }}
    {{ form_widget(form) }}
    <button class=\"btn\">{{ button_label|default('Save') }}</button>
{{ form_end(form) }} #}

{{dump(form)}}

  <section class=\"section-padding\">
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
                                        <div class=\"file-path-wrapper\">
                                            <input class=\"file-path validate\" type=\"text\" placeholder=\"Upload your profile picture\" readonly>
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
                                        <span><i class=\"material-icons\">&#xE24D;</i> CV</span>
                                    </div>
                                    {% if user.id_card_file != '' %}
                                        <div class=\"existing-file\">
                                            <a href=\"{{asset ('/assets/uploads/id_card_file/') ~ user.id_card_file}}\" target=\"_blank\"><i class=\"material-icons\">&#xE24D;</i> CV.pdf</a>
                                        </div>
                                        <div class=\"file-path-wrapper\">
                                            <input class=\"file-path validate\" type=\"text\" placeholder=\"Upload your Id Card\" readonly>
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
                    </div> #}

                </div>
            </section> ", "user/_form.html.twig", "/shared/httpd/Projet-Final/templates/user/_form.html.twig");
    }
}

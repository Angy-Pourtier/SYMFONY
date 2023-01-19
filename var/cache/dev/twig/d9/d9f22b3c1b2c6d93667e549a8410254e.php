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

/* viepriveranglais/viepriveranglais.html.twig */
class __TwigTemplate_1716c167eb486f9852a956811211fca5 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "viepriveranglais/viepriveranglais.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "viepriveranglais/viepriveranglais.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "viepriveranglais/viepriveranglais.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "SAE 14";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 7
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "          <br><br><br><br><br><br><br>
                <span>
                   <div id=\"titre2\" >
                    <h1 class = cadreee  target=\"_blank\">My hobbies and interests</h1>
                    </div>
          
                </span>   \t
                <br><br><br><br><br><br><br>
                
                
            <h5 class=centrer>   
                    <br>
                    
                <span>    
                    <p>
                    I am a person who enjoys many things, whether it is helping people ,
                    working in a team, spending time outdoors, spending time with my family or even ...<br><br>
                        
                    Playing sports :
                    </p>

                    <br>
                </span>
                    <img src=";
        // line 31
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("photos/IMG_4179.jpg"), "html", null, true);
        echo " class=foot >
                    <span>
                    <p>
                    <br>Where I was able to play with a team that became my friends 
                    <br>my friends and where I could keep very good memories.
                    </p>
                </span>
            
            <br><br>
             To go out with my friends :
                    </p>
             </h5>
                    <br>
        
        <section id=\"slideshow\">
                
            <div class=\"container\">
                <div class=\"c_slider\"></div>
                <div class=\"slider\">
                    <figure>
                        <img src=";
        // line 51
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("photos/v1.jpg"), "html", null, true);
        echo " alt=\"\" width=740\" height=\"510\" />


                    </figure>
                    <figure>
                        <img src=";
        // line 56
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("photos/v2.jpg"), "html", null, true);
        echo " alt=\"\" width=\"740\" height=\"510\" />

                    </figure>
                    <figure>
                        <img src=";
        // line 60
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("photos/v3.jpg"), "html", null, true);
        echo " alt=\"\" width=\"740\" height=\"510\" />
                    </figure>

                </div>
            </div>
                
            <span id=\"timeline\"></span>
        </section>
        <br><br>
 
 
             <h5 class=centrer>
 

                    <br>
                <span>
                    <p>
                    But I also like to work with computers, whether it be programming, video editing, or playing video games.<br>
                    <br></p>
                    
                </span>


                <span>
                    
                <br><br><br><p>
                But I am also a person who is aware of the priorities of life which is to succeed in the world of work
                That's why I work rigorously whether it's weekends or weekdays to hope to have a happy life
                in the future with a job that I will like.</p>

                    
                    <br><br>
                </span>

                    

                    <br>
                    <br>

                 </h5>
             <h5 class=centrer> 
\t\t\t <div class=\"container\">
                <a href=\"/viepriver\" class=\"btn btn-lg btn-primary\" type=\"button\">Translate into french</a>
              </div> 
\t\t\t</h5> 
<br>
<br>
<br>

   

            <span>
            <h6>
                    <a href=\"http://copyright.be\" target=\"_blank\">Copyright 2023 SAé1.4.com - All rights reserved</a>
            </h6>
            </span>


";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "viepriveranglais/viepriveranglais.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  151 => 60,  144 => 56,  136 => 51,  113 => 31,  88 => 8,  78 => 7,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}SAE 14{% endblock %}



{% block body %}
          <br><br><br><br><br><br><br>
                <span>
                   <div id=\"titre2\" >
                    <h1 class = cadreee  target=\"_blank\">My hobbies and interests</h1>
                    </div>
          
                </span>   \t
                <br><br><br><br><br><br><br>
                
                
            <h5 class=centrer>   
                    <br>
                    
                <span>    
                    <p>
                    I am a person who enjoys many things, whether it is helping people ,
                    working in a team, spending time outdoors, spending time with my family or even ...<br><br>
                        
                    Playing sports :
                    </p>

                    <br>
                </span>
                    <img src={{asset('photos/IMG_4179.jpg')}} class=foot >
                    <span>
                    <p>
                    <br>Where I was able to play with a team that became my friends 
                    <br>my friends and where I could keep very good memories.
                    </p>
                </span>
            
            <br><br>
             To go out with my friends :
                    </p>
             </h5>
                    <br>
        
        <section id=\"slideshow\">
                
            <div class=\"container\">
                <div class=\"c_slider\"></div>
                <div class=\"slider\">
                    <figure>
                        <img src={{asset('photos/v1.jpg')}} alt=\"\" width=740\" height=\"510\" />


                    </figure>
                    <figure>
                        <img src={{asset('photos/v2.jpg')}} alt=\"\" width=\"740\" height=\"510\" />

                    </figure>
                    <figure>
                        <img src={{asset('photos/v3.jpg')}} alt=\"\" width=\"740\" height=\"510\" />
                    </figure>

                </div>
            </div>
                
            <span id=\"timeline\"></span>
        </section>
        <br><br>
 
 
             <h5 class=centrer>
 

                    <br>
                <span>
                    <p>
                    But I also like to work with computers, whether it be programming, video editing, or playing video games.<br>
                    <br></p>
                    
                </span>


                <span>
                    
                <br><br><br><p>
                But I am also a person who is aware of the priorities of life which is to succeed in the world of work
                That's why I work rigorously whether it's weekends or weekdays to hope to have a happy life
                in the future with a job that I will like.</p>

                    
                    <br><br>
                </span>

                    

                    <br>
                    <br>

                 </h5>
             <h5 class=centrer> 
\t\t\t <div class=\"container\">
                <a href=\"/viepriver\" class=\"btn btn-lg btn-primary\" type=\"button\">Translate into french</a>
              </div> 
\t\t\t</h5> 
<br>
<br>
<br>

   

            <span>
            <h6>
                    <a href=\"http://copyright.be\" target=\"_blank\">Copyright 2023 SAé1.4.com - All rights reserved</a>
            </h6>
            </span>


{% endblock %}", "viepriveranglais/viepriveranglais.html.twig", "C:\\Users\\angyp\\sym\\Symfony_angy\\Test\\TP1\\templates\\viepriveranglais\\viepriveranglais.html.twig");
    }
}

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

/* viepriver/vie.html.twig */
class __TwigTemplate_a894b893a7848e0ec9f2ba2b0631185c extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "viepriver/vie.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "viepriver/vie.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "viepriver/vie.html.twig", 1);
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
        echo "               <br><br><br><br><br><br><br>
                <span>
                \t<div id=\"titre2\" >
                    <h1 class = cadreee  target=\"_blank\">Mes passions et loisirs</h1>
                    </div>
  \t            </span>
                <br><br><br><br><br><br><br>
                
                
            <h5 class=centrer>   
                    <br>
                    
                <span>    
                    <p>
                    Je suis une personne qui aime de nombreuse chose que sa soit aider les personnes, 
                    <br>travailler en equipe, passer du temps a l'éxtérieur, passer du temps avec ma famille ou encors ...
                    <br><br>
                        
                    Faire du sport :
                    </p>

                    <br>
                </span>
                    <img src=";
        // line 31
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("photos/IMG_4179.jpg"), "html", null, true);
        echo " class=foot >
                    <span>
                    <p>
                    <br>Ou j'ai put jouer avec une equipe qui sont devenus 
                    <br>mes amis et ou j'ai put garder de tres bon souvenir.
                    </p>
                </span>
            
            <br><br>
             Sortire avec mes amis :
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


                </div>
            </div>
                
            <span id=\"timeline\"></span>
        </section>
        <br><br>
 
 
             <h5 class=centrer>
 

                    <br>
                <span>
                    <p>
                    Mais j'aime également toucher a l'informatique, que sa soit programmer, faire des montages videos, ou encors jouer a des jeux vidéo.
                    <br>
                    <br></p>
                    
                </span>


                <span>
                    
                    <br><br><br><p>
                    Mais je suis aussi une personne qui c'est avoir conscience des prioriters de la vie qui est de reussir sa vie dans le monde du travail.
                    C'est pour cela que je travaille rigulierement que sa soit le week end ou la semaine pour esperer avoir une vie heureuse
                    <br> dans un futur avec un travaill qui me plaira.</p>

                    
                    <br><br>
                </span>

                    

                    <br>
                    <br>

                 </h5>
             <h5 class=centrer> 
\t\t\t <div class=\"container\">
                <a href=\"/viepriveranglais\" class=\"btn btn-lg btn-primary\" type=\"button\">Traduire en anglais</a>
              </div> 
\t\t\t</h5> 
<br>
<br>
<br>

   

            <span>
            <h6>
                    <a href=\"http://copyright.be\" target=\"_blank\">Copyright 2023 SAé1.4.com - Tous droits réservés</a>
            </h6>
            </span>


";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "viepriver/vie.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  144 => 56,  136 => 51,  113 => 31,  88 => 8,  78 => 7,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}SAE 14{% endblock %}



{% block body %}
               <br><br><br><br><br><br><br>
                <span>
                \t<div id=\"titre2\" >
                    <h1 class = cadreee  target=\"_blank\">Mes passions et loisirs</h1>
                    </div>
  \t            </span>
                <br><br><br><br><br><br><br>
                
                
            <h5 class=centrer>   
                    <br>
                    
                <span>    
                    <p>
                    Je suis une personne qui aime de nombreuse chose que sa soit aider les personnes, 
                    <br>travailler en equipe, passer du temps a l'éxtérieur, passer du temps avec ma famille ou encors ...
                    <br><br>
                        
                    Faire du sport :
                    </p>

                    <br>
                </span>
                    <img src={{asset('photos/IMG_4179.jpg')}} class=foot >
                    <span>
                    <p>
                    <br>Ou j'ai put jouer avec une equipe qui sont devenus 
                    <br>mes amis et ou j'ai put garder de tres bon souvenir.
                    </p>
                </span>
            
            <br><br>
             Sortire avec mes amis :
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


                </div>
            </div>
                
            <span id=\"timeline\"></span>
        </section>
        <br><br>
 
 
             <h5 class=centrer>
 

                    <br>
                <span>
                    <p>
                    Mais j'aime également toucher a l'informatique, que sa soit programmer, faire des montages videos, ou encors jouer a des jeux vidéo.
                    <br>
                    <br></p>
                    
                </span>


                <span>
                    
                    <br><br><br><p>
                    Mais je suis aussi une personne qui c'est avoir conscience des prioriters de la vie qui est de reussir sa vie dans le monde du travail.
                    C'est pour cela que je travaille rigulierement que sa soit le week end ou la semaine pour esperer avoir une vie heureuse
                    <br> dans un futur avec un travaill qui me plaira.</p>

                    
                    <br><br>
                </span>

                    

                    <br>
                    <br>

                 </h5>
             <h5 class=centrer> 
\t\t\t <div class=\"container\">
                <a href=\"/viepriveranglais\" class=\"btn btn-lg btn-primary\" type=\"button\">Traduire en anglais</a>
              </div> 
\t\t\t</h5> 
<br>
<br>
<br>

   

            <span>
            <h6>
                    <a href=\"http://copyright.be\" target=\"_blank\">Copyright 2023 SAé1.4.com - Tous droits réservés</a>
            </h6>
            </span>


{% endblock %}", "viepriver/vie.html.twig", "C:\\Users\\angyp\\sym\\Symfony_angy\\Test\\TP1\\templates\\viepriver\\vie.html.twig");
    }
}

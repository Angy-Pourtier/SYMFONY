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

/* blog/home.html.twig */
class __TwigTemplate_95bbfe41b6d7759e09bd5d7bd9cdf709 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "blog/home.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "blog/home.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "blog/home.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 4
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "
<div class=\"card mb-3\">\t



    <br><br><br><br><br><br><br>
\t<span>
\t<div id=\"titre2\" >
\t<h1 class = cadreee href=\"http://www.thismanslife.co.uk\" target=\"_blank\">Technicien en cybersécurité</h1>
\t</div>\t
\t</span>\t




\t
    <br><br><br><br><br><br><br>



\t
\t\t<div>
\t\t   <h3 class=centrer> COMPETENCES </h3>
\t\t\t<h6 class=centrer>
\t\t\t<p>
\t\t\t<div>
\t\t\t<br>
\t\t\t
\t\t\t<br>Language informatique : code C++ , python , C
\t\t\t<br>
            <br>Systèmes : -Windows dix : base   
            <br>          &ensp;&ensp;&ensp;&ensp; -Linux : base
            <br><br>Langues : -Anglais : niveau intermédiaire
            <br>        &ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp; &ensp;-Espagnol : niveau intermédiaire
\t\t\t<br>
\t\t\t<br><br>Wireshark 
\t\t\t<br>
\t\t\t<br>Sens de l'autonomie
\t\t\t<br>Bonne organisation
\t\t\t<br>Travail en équipe
\t\t\t<br>Sens de l'écoute
\t\t\t<br>Excellent relationnel
\t\t\t</p>
\t\t\t</div>
\t\t\t</h6>
\t\t</div>



\t\t<br>
\t\t<br>
\t\t<br><br><br><br>
\t\t\t<h3 class=centrer>
\t\t\tFORMATIONS </h3>
\t\t\t<p>
\t\t\t<div>
\t\t\t<h6>
\t\t\t
\t\t\t<br>
\t\t\t<br>

\t\t\t<h6 class=centrer2>2022  &ensp;&ensp;&ensp;           Permis de conduire </h6>
            <br><br>
\t\t\t<br>

\t\t\t<p><h6 class=centrer2>2019-2022   &ensp;&ensp;&ensp;     Baccalauréat technologique : mention assez bien </h6>
\t\t\t<br>\t\t\t\t\t\t\t  Lycée de la plaine de l'Ain, Ambérieu-en-Bugey
\t\t\t<br>\t\t\t\t\t\t\t -Spécialité : système information et numérique 
\t\t\t<br><br>\t</p>\t\t\t\t\t\t
\t\t\t<br>

\t\t\t<h6 class=centrer2>2019      &ensp;&ensp;&ensp;        Brevet des collèges</h6>
\t\t\t<br>\t\t\t\t\t\t\t  Collège de Leyment
\t\t\t<br>\t\t\t\t\t\t\t -obtenu avec mention assez bien
        </p>
\t\t </h6> 
\t\t</div>
\t\t
\t\t<br>
\t\t<br>
\t\t<br><br><br>
\t\t    <h3 class=centrer>
\t\t\t<p>
\t\t    EXPÉRIENCE PROFESSIONELS </h3>
\t\t\t<br>
\t\t\t<br>

\t\t\t<h6 class=centrer2> 2018   &ensp;&ensp;&ensp;   Stage dans une compagnie d'éducation pour chiens (Lyon) : </h6>
\t\t\t<br>           
\t\t\t
\t\t\t1 semaine de stage en 3ème ou j'ai pu :
\t\t\t<br>Etre en contact avec le client et comprendre sa demande
\t\t\t<br>Apprendre à gérer les priorités, le stress et être responsable
\t\t\t<br>Etre à l'écoute des éducateurs 
\t\t\t<br> Bilan personel : Connaître le travail en entreprise, répondre au besoin du client et être sous l'autorité d'une personne a été une bonne expérience pour moi .
\t\t\t<br></p>
\t\t\t<br>


\t\t\t<h6 class=centrer2>2022   &ensp;&ensp;&ensp;   Serre autonome connectée :    </h6>
\t\t\t<br><p>
\t\t\t<br>Lors de ce projet de Terminale j'ai pu faire de la programmation, de la communication entre différents éléments, du développement application 
\t\t\t<br>Bilan personel : Permis de travailler en équipe, s'êre aider mutuellement, d'avoir mis en place toute les étapes pour réaliser le projet et d'avoir été sur le meme projet pendant une longue période
            </p>
\t\t\t
\t\t\t
            </h6>
            <br>
\t\t\t<br>
\t\t\t<br>
\t\t\t
\t\t\t<h5 class=centrer> 
\t\t\t <div class=\"container\">
                <a href=\"/homeanglais\" class=\"btn btn-lg btn-primary\" type=\"button\">Traduire en anglais</a>
              </div> 
\t\t\t</h5>  
</div>
<br>
<br>

 <div class=\"fond\">
   <br><br><br>

                    <span>
                      <h4 class=\"titreformulaire\">
                      FOMRULAIRE DE TELECHARGEMENT DU CV </h4>
                    </span>
                

      <form>
      <div class=\"centrer9\"> 
          
              <div class=\"name\">
                  <label for=\"name\" class=\"form-label mt-4\">NOM</label>
                  </label><br>
                  <input name=\"name\" class=\"form-control\" type=\"text\" placeholder=\" NOM \" pattern=\"\\w{3,16}\" required>
                  <small id=\"emailHelp\" class=\"form-text text-muted\">(3-16 characters)</small>
                </div>

              <div class=\"name\">
                  <label for=\"name\" class=\"form-label mt-4\">PRENOM</label>
                  </label><br>
                  <input name=\"name\" class=\"form-control\" type=\"text\" placeholder=\" PRENOM \" pattern=\"\\w{3,30}\" required>
                  <small id=\"emailHelp\" class=\"form-text text-muted\">(3-30 characters)</small>

                </div>

                <div class=\"form-group\">
                  <label for=\"exampleInputEmail1\" class=\"form-label mt-4\">Email</label>
                  <input type=\"email\" class=\"form-control\" type=\"text\" id=\"exampleInputEmail1\" aria-describedby=\"emailHelp\" placeholder=\"Email\" required>
                  <small id=\"emailHelp\" class=\"form-text text-muted\">Nous ne communiquerons jamais votre adresse électronique à qui que ce soit.</small>
                </div>

                <div class=\"form-group\">
                  <label for=\"exampleInputPassword1\" class=\"form-label mt-4\">NOM DE L'ENTREPRISE</label>
                  <input name=\"password\" class=\"form-control\" type=\"text\" placeholder=\" NOM DE L'ENTREPRISE \" pattern=\"\\w{3,50}\" required>
                 
                </div>
            
            <br>



        <form>
            <button type=\"submit\" class=\"btn btn-primary\" formaction=\"cvpage/\"> ENVOYER </button>
\t\t\t<a href=\"cvpage/\" </a>
        </form>


        <br><br><br>

        <span>
        
        <h6>
            <a href=\"http://copyright.be\" target=\"_blank\" class=\"copy\" >Copyright 2023 SAé1.4.com - Tous droits réservés</a>
        </h6>
        </span>

</div>\t\t




";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "blog/home.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 5,  58 => 4,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}


{% block body %}

<div class=\"card mb-3\">\t



    <br><br><br><br><br><br><br>
\t<span>
\t<div id=\"titre2\" >
\t<h1 class = cadreee href=\"http://www.thismanslife.co.uk\" target=\"_blank\">Technicien en cybersécurité</h1>
\t</div>\t
\t</span>\t




\t
    <br><br><br><br><br><br><br>



\t
\t\t<div>
\t\t   <h3 class=centrer> COMPETENCES </h3>
\t\t\t<h6 class=centrer>
\t\t\t<p>
\t\t\t<div>
\t\t\t<br>
\t\t\t
\t\t\t<br>Language informatique : code C++ , python , C
\t\t\t<br>
            <br>Systèmes : -Windows dix : base   
            <br>          &ensp;&ensp;&ensp;&ensp; -Linux : base
            <br><br>Langues : -Anglais : niveau intermédiaire
            <br>        &ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp; &ensp;-Espagnol : niveau intermédiaire
\t\t\t<br>
\t\t\t<br><br>Wireshark 
\t\t\t<br>
\t\t\t<br>Sens de l'autonomie
\t\t\t<br>Bonne organisation
\t\t\t<br>Travail en équipe
\t\t\t<br>Sens de l'écoute
\t\t\t<br>Excellent relationnel
\t\t\t</p>
\t\t\t</div>
\t\t\t</h6>
\t\t</div>



\t\t<br>
\t\t<br>
\t\t<br><br><br><br>
\t\t\t<h3 class=centrer>
\t\t\tFORMATIONS </h3>
\t\t\t<p>
\t\t\t<div>
\t\t\t<h6>
\t\t\t
\t\t\t<br>
\t\t\t<br>

\t\t\t<h6 class=centrer2>2022  &ensp;&ensp;&ensp;           Permis de conduire </h6>
            <br><br>
\t\t\t<br>

\t\t\t<p><h6 class=centrer2>2019-2022   &ensp;&ensp;&ensp;     Baccalauréat technologique : mention assez bien </h6>
\t\t\t<br>\t\t\t\t\t\t\t  Lycée de la plaine de l'Ain, Ambérieu-en-Bugey
\t\t\t<br>\t\t\t\t\t\t\t -Spécialité : système information et numérique 
\t\t\t<br><br>\t</p>\t\t\t\t\t\t
\t\t\t<br>

\t\t\t<h6 class=centrer2>2019      &ensp;&ensp;&ensp;        Brevet des collèges</h6>
\t\t\t<br>\t\t\t\t\t\t\t  Collège de Leyment
\t\t\t<br>\t\t\t\t\t\t\t -obtenu avec mention assez bien
        </p>
\t\t </h6> 
\t\t</div>
\t\t
\t\t<br>
\t\t<br>
\t\t<br><br><br>
\t\t    <h3 class=centrer>
\t\t\t<p>
\t\t    EXPÉRIENCE PROFESSIONELS </h3>
\t\t\t<br>
\t\t\t<br>

\t\t\t<h6 class=centrer2> 2018   &ensp;&ensp;&ensp;   Stage dans une compagnie d'éducation pour chiens (Lyon) : </h6>
\t\t\t<br>           
\t\t\t
\t\t\t1 semaine de stage en 3ème ou j'ai pu :
\t\t\t<br>Etre en contact avec le client et comprendre sa demande
\t\t\t<br>Apprendre à gérer les priorités, le stress et être responsable
\t\t\t<br>Etre à l'écoute des éducateurs 
\t\t\t<br> Bilan personel : Connaître le travail en entreprise, répondre au besoin du client et être sous l'autorité d'une personne a été une bonne expérience pour moi .
\t\t\t<br></p>
\t\t\t<br>


\t\t\t<h6 class=centrer2>2022   &ensp;&ensp;&ensp;   Serre autonome connectée :    </h6>
\t\t\t<br><p>
\t\t\t<br>Lors de ce projet de Terminale j'ai pu faire de la programmation, de la communication entre différents éléments, du développement application 
\t\t\t<br>Bilan personel : Permis de travailler en équipe, s'êre aider mutuellement, d'avoir mis en place toute les étapes pour réaliser le projet et d'avoir été sur le meme projet pendant une longue période
            </p>
\t\t\t
\t\t\t
            </h6>
            <br>
\t\t\t<br>
\t\t\t<br>
\t\t\t
\t\t\t<h5 class=centrer> 
\t\t\t <div class=\"container\">
                <a href=\"/homeanglais\" class=\"btn btn-lg btn-primary\" type=\"button\">Traduire en anglais</a>
              </div> 
\t\t\t</h5>  
</div>
<br>
<br>

 <div class=\"fond\">
   <br><br><br>

                    <span>
                      <h4 class=\"titreformulaire\">
                      FOMRULAIRE DE TELECHARGEMENT DU CV </h4>
                    </span>
                

      <form>
      <div class=\"centrer9\"> 
          
              <div class=\"name\">
                  <label for=\"name\" class=\"form-label mt-4\">NOM</label>
                  </label><br>
                  <input name=\"name\" class=\"form-control\" type=\"text\" placeholder=\" NOM \" pattern=\"\\w{3,16}\" required>
                  <small id=\"emailHelp\" class=\"form-text text-muted\">(3-16 characters)</small>
                </div>

              <div class=\"name\">
                  <label for=\"name\" class=\"form-label mt-4\">PRENOM</label>
                  </label><br>
                  <input name=\"name\" class=\"form-control\" type=\"text\" placeholder=\" PRENOM \" pattern=\"\\w{3,30}\" required>
                  <small id=\"emailHelp\" class=\"form-text text-muted\">(3-30 characters)</small>

                </div>

                <div class=\"form-group\">
                  <label for=\"exampleInputEmail1\" class=\"form-label mt-4\">Email</label>
                  <input type=\"email\" class=\"form-control\" type=\"text\" id=\"exampleInputEmail1\" aria-describedby=\"emailHelp\" placeholder=\"Email\" required>
                  <small id=\"emailHelp\" class=\"form-text text-muted\">Nous ne communiquerons jamais votre adresse électronique à qui que ce soit.</small>
                </div>

                <div class=\"form-group\">
                  <label for=\"exampleInputPassword1\" class=\"form-label mt-4\">NOM DE L'ENTREPRISE</label>
                  <input name=\"password\" class=\"form-control\" type=\"text\" placeholder=\" NOM DE L'ENTREPRISE \" pattern=\"\\w{3,50}\" required>
                 
                </div>
            
            <br>



        <form>
            <button type=\"submit\" class=\"btn btn-primary\" formaction=\"cvpage/\"> ENVOYER </button>
\t\t\t<a href=\"cvpage/\" </a>
        </form>


        <br><br><br>

        <span>
        
        <h6>
            <a href=\"http://copyright.be\" target=\"_blank\" class=\"copy\" >Copyright 2023 SAé1.4.com - Tous droits réservés</a>
        </h6>
        </span>

</div>\t\t




{% endblock %}", "blog/home.html.twig", "C:\\Users\\angyp\\sym\\Symfony_angy\\Test\\TP1\\templates\\blog\\home.html.twig");
    }
}

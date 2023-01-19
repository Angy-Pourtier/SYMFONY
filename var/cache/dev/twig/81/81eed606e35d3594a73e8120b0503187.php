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

/* blog/index.html.twig */
class __TwigTemplate_6cda1790fb787a6ac1f0c3572adf395f extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "blog/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "blog/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "blog/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 4
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

    // line 6
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "
<div class=header2>

              
        <div class=\"card mb-5\">

        <span>
          <style>
            @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,800;1,900&display=swap');
            </style>
          <h1 id=\"titre\"> BIENVENUE </h1>
         
        <br><br><br><br><br><br><br>
        </span>
          
          <div class=\"card-body\">
          </div>
          <br><br><br>
            <h6><div>
              &ensp;Naissance : 02/12/2004
              <br>&ensp;Téléphone : 06 67 14 75 01
              <br>&ensp;Email : angypourtier@gmail.com
              <br>&ensp;Adresse : 71 impasse de la liberation
              <br>&ensp;Nationaliter : Française
              <br>
              </div>
              </h6>



          
        <div>
          <span>
            <div class=\"centrer3\" >
              <p>
              <br>
              <br>
              <br>
              <br>
              <br>
              <br>
              <br>



             <header>

                <div class=\"container text-center h-100\">
                  <div class=\"row h-100\">
                   <div class=\"w-100 align-self-center\">
                    <h5> Je suis étudiant en Réseaux et télécoms, je suis une personne <span> </span> , et qui veut découvrire le monde du travail .  </h5>
                  </div>
                 </div>
                </div>
                <br>
                <br>
                
              </header>

              </p>
            </div>

           </span>
        </div>
          


          &ensp;<img src=";
        // line 74
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("photos/IMG_0733.jpg"), "html", null, true);
        echo " class=\"img\" >

          </svg>
              
              
            



            <br>
            <br>
            <br>
            <br>

            <h5 class=centrer> 
              <div class=\"container\">
                <a href=\"viepriver/\" class=\"btn btn-lg btn-primary\" type=\"button\">Pour en savoir plus</a>
              </div>

               <br>



              <div class=\"container\">
                <a href=\"indexanglais/\" class=\"btn btn-lg btn-primary\" type=\"button\">Traduire en anglais</a>
              </div>   
                
                <br>
                <br>
            </h5>

           </div>
                
</div>

<div class=\"fond\">
   <br><br><br>

                    <span>
                      <h4 class=\"titreformulaire\">
                      CONTACTER MOI </h4>
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
            <button type=\"submit\" class=\"btn btn-primary\" > ENVOYER </button>
        </form>
         <br>


         

         <br><br><br>

        <span>
        
        <h6>
            <a href=\"http://copyright.be\" target=\"_blank\" class=\"copy\" >Copyright 2023 SAé1.4.com - Tous droits réservés</a>
        </h6>
        </span>

</div>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "blog/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  157 => 74,  88 => 7,  78 => 6,  59 => 4,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}


{% block title %}SAE 14{% endblock %}

{% block body %}

<div class=header2>

              
        <div class=\"card mb-5\">

        <span>
          <style>
            @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,800;1,900&display=swap');
            </style>
          <h1 id=\"titre\"> BIENVENUE </h1>
         
        <br><br><br><br><br><br><br>
        </span>
          
          <div class=\"card-body\">
          </div>
          <br><br><br>
            <h6><div>
              &ensp;Naissance : 02/12/2004
              <br>&ensp;Téléphone : 06 67 14 75 01
              <br>&ensp;Email : angypourtier@gmail.com
              <br>&ensp;Adresse : 71 impasse de la liberation
              <br>&ensp;Nationaliter : Française
              <br>
              </div>
              </h6>



          
        <div>
          <span>
            <div class=\"centrer3\" >
              <p>
              <br>
              <br>
              <br>
              <br>
              <br>
              <br>
              <br>



             <header>

                <div class=\"container text-center h-100\">
                  <div class=\"row h-100\">
                   <div class=\"w-100 align-self-center\">
                    <h5> Je suis étudiant en Réseaux et télécoms, je suis une personne <span> </span> , et qui veut découvrire le monde du travail .  </h5>
                  </div>
                 </div>
                </div>
                <br>
                <br>
                
              </header>

              </p>
            </div>

           </span>
        </div>
          


          &ensp;<img src={{asset('photos/IMG_0733.jpg')}} class=\"img\" >

          </svg>
              
              
            



            <br>
            <br>
            <br>
            <br>

            <h5 class=centrer> 
              <div class=\"container\">
                <a href=\"viepriver/\" class=\"btn btn-lg btn-primary\" type=\"button\">Pour en savoir plus</a>
              </div>

               <br>



              <div class=\"container\">
                <a href=\"indexanglais/\" class=\"btn btn-lg btn-primary\" type=\"button\">Traduire en anglais</a>
              </div>   
                
                <br>
                <br>
            </h5>

           </div>
                
</div>

<div class=\"fond\">
   <br><br><br>

                    <span>
                      <h4 class=\"titreformulaire\">
                      CONTACTER MOI </h4>
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
            <button type=\"submit\" class=\"btn btn-primary\" > ENVOYER </button>
        </form>
         <br>


         

         <br><br><br>

        <span>
        
        <h6>
            <a href=\"http://copyright.be\" target=\"_blank\" class=\"copy\" >Copyright 2023 SAé1.4.com - Tous droits réservés</a>
        </h6>
        </span>

</div>

{% endblock %}
", "blog/index.html.twig", "C:\\Users\\angyp\\sym\\Symfony_angy\\Test\\TP1\\templates\\blog\\index.html.twig");
    }
}

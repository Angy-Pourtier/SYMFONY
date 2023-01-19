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

/* indexanglais/indexanglais.html.twig */
class __TwigTemplate_b195e3cb293d6fab635416f2559b0e6a extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "indexanglais/indexanglais.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "indexanglais/indexanglais.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "indexanglais/indexanglais.html.twig", 1);
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
          <h1 id=\"titre\"> WELCOME </h1>
         
        <br><br><br><br><br><br><br>
        </span>
          
          <div class=\"card-body\">
          </div>
          <br><br><br>
            <h6><div>
              &ensp;Birth date: 02/12/2004
              <br>&ensp;Phone : 06 67 14 75 01
              <br>&ensp;Email : angypourtier@gmail.com
              <br>&ensp;Adresse : 71 impasse de la liberation
              <br>&ensp;Nationality : French
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



             <div class=\"header3\">

                <div class=\"container text-center h-100\">
                  <div class=\"row h-100\">
                   <div class=\"w-100 align-self-center\">
                    <h4>I am a person <span> </span> , and wants to discover the world of work.  </h4>
                  </div>
                 </div>
                </div>
                
              </div>

              </p>
            </div>

           </span>
        </div>
          


          &ensp;<img src=";
        // line 72
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("photos/IMG_0733.jpg"), "html", null, true);
        echo " class=\"img\" >

          </svg>
              
              
            



            <br>
            <br>
            <br>
            <br>

            <h5 class=centrer> 
              <div class=\"container\">
                <a href=\"viepriver/\" class=\"btn btn-lg btn-primary\" type=\"button\">To know more</a>
              </div>

               <br>



              <div class=\"container\">
                <a href=\"/\" class=\"btn btn-lg btn-primary\" type=\"button\">Translate into french</a>
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
                      CONTACT ME </h4>
                    </span>
                

      <form>
      <div class=\"centrer9\"> 
          
              <div class=\"name\">
                  <label for=\"name\" class=\"form-label mt-4\">NAME</label>
                  </label><br>
                  <input name=\"name\" class=\"form-control\" type=\"text\" placeholder=\" NAME \" pattern=\"\\w{3,16}\" required>
                  <small id=\"emailHelp\" class=\"form-text text-muted\">(3-16 characters)</small>
                </div>

              <div class=\"name\">
                  <label for=\"name\" class=\"form-label mt-4\">FIRST NAME</label>
                  </label><br>
                  <input name=\"name\" class=\"form-control\" type=\"text\" placeholder=\" FIRST NAME \" pattern=\"\\w{3,30}\" required>
                  <small id=\"emailHelp\" class=\"form-text text-muted\">(3-30 characters)</small>

                </div>

                <div class=\"form-group\">
                  <label for=\"exampleInputEmail1\" class=\"form-label mt-4\">Email</label>
                  <input type=\"email\" class=\"form-control\" type=\"text\" id=\"exampleInputEmail1\" aria-describedby=\"emailHelp\" placeholder=\"Email\" required>
                  <small id=\"emailHelp\" class=\"form-text text-muted\">We will never share your email address with anyone.</small>
                </div>

                <div class=\"form-group\">
                  <label for=\"exampleInputPassword1\" class=\"form-label mt-4\">COMPANY NAME</label>
                  <input name=\"password\" class=\"form-control\" type=\"text\" placeholder=\" COMPANY NAME \" pattern=\"\\w{3,50}\" required>
                  
                </div>
            
            <br>



        <form>
            <button type=\"submit\" class=\"btn btn-primary\" > SUBMIT </button>
        </form>


        <br><br><br>

        <span>
        
        <h6>
            <a href=\"http://copyright.be\" target=\"_blank\" class=\"copy\" >Copyright 2023 SAé1.4.com - All rights reserved</a>
        </h6>
        </span>

</div>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "indexanglais/indexanglais.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  155 => 72,  88 => 7,  78 => 6,  59 => 4,  36 => 1,);
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
          <h1 id=\"titre\"> WELCOME </h1>
         
        <br><br><br><br><br><br><br>
        </span>
          
          <div class=\"card-body\">
          </div>
          <br><br><br>
            <h6><div>
              &ensp;Birth date: 02/12/2004
              <br>&ensp;Phone : 06 67 14 75 01
              <br>&ensp;Email : angypourtier@gmail.com
              <br>&ensp;Adresse : 71 impasse de la liberation
              <br>&ensp;Nationality : French
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



             <div class=\"header3\">

                <div class=\"container text-center h-100\">
                  <div class=\"row h-100\">
                   <div class=\"w-100 align-self-center\">
                    <h4>I am a person <span> </span> , and wants to discover the world of work.  </h4>
                  </div>
                 </div>
                </div>
                
              </div>

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
                <a href=\"viepriver/\" class=\"btn btn-lg btn-primary\" type=\"button\">To know more</a>
              </div>

               <br>



              <div class=\"container\">
                <a href=\"/\" class=\"btn btn-lg btn-primary\" type=\"button\">Translate into french</a>
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
                      CONTACT ME </h4>
                    </span>
                

      <form>
      <div class=\"centrer9\"> 
          
              <div class=\"name\">
                  <label for=\"name\" class=\"form-label mt-4\">NAME</label>
                  </label><br>
                  <input name=\"name\" class=\"form-control\" type=\"text\" placeholder=\" NAME \" pattern=\"\\w{3,16}\" required>
                  <small id=\"emailHelp\" class=\"form-text text-muted\">(3-16 characters)</small>
                </div>

              <div class=\"name\">
                  <label for=\"name\" class=\"form-label mt-4\">FIRST NAME</label>
                  </label><br>
                  <input name=\"name\" class=\"form-control\" type=\"text\" placeholder=\" FIRST NAME \" pattern=\"\\w{3,30}\" required>
                  <small id=\"emailHelp\" class=\"form-text text-muted\">(3-30 characters)</small>

                </div>

                <div class=\"form-group\">
                  <label for=\"exampleInputEmail1\" class=\"form-label mt-4\">Email</label>
                  <input type=\"email\" class=\"form-control\" type=\"text\" id=\"exampleInputEmail1\" aria-describedby=\"emailHelp\" placeholder=\"Email\" required>
                  <small id=\"emailHelp\" class=\"form-text text-muted\">We will never share your email address with anyone.</small>
                </div>

                <div class=\"form-group\">
                  <label for=\"exampleInputPassword1\" class=\"form-label mt-4\">COMPANY NAME</label>
                  <input name=\"password\" class=\"form-control\" type=\"text\" placeholder=\" COMPANY NAME \" pattern=\"\\w{3,50}\" required>
                  
                </div>
            
            <br>



        <form>
            <button type=\"submit\" class=\"btn btn-primary\" > SUBMIT </button>
        </form>


        <br><br><br>

        <span>
        
        <h6>
            <a href=\"http://copyright.be\" target=\"_blank\" class=\"copy\" >Copyright 2023 SAé1.4.com - All rights reserved</a>
        </h6>
        </span>

</div>

{% endblock %}", "indexanglais/indexanglais.html.twig", "C:\\Users\\angyp\\sym\\Symfony_angy\\Test\\TP1\\templates\\indexanglais\\indexanglais.html.twig");
    }
}

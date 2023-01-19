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

/* portofolio/portofolio.html.twig */
class __TwigTemplate_03c2ae523d88c1158c6f1963e9663716 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "portofolio/portofolio.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "portofolio/portofolio.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "portofolio/portofolio.html.twig", 1);
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

<div class=\"card mb-3\">
<br><br><br><br><br><br><br>
\t<span>
  \t<div id=\"titre2\" >
    <h1 class = cadreee  target=\"_blank\">E-PORTOFOLIO</h1>
    </div>\t
  </span>
  <br><br><br><br><br><br><br>
  <div class=\"wrapper\">

    <div class=\"parent-tab tab-3\">
      <input type=\"checkbox\" name=\"tab\" id=\"tab-1\" >
      <label for=\"tab-1\">
        <span>Programmation</span>
        <div class=\"icon\"><i class=\"fas fa-plus\"></i></div>
      </label>
      <div class=\"content\">
                  
                     <div class=\"child-tab\">
                      <input type=\"checkbox\" name=\"sub-tab\" id=\"tab-4\">
                      <label for=\"tab-4\">
                      
                        <span>Language Python</span>
                        <div class=\"icon\"><i class=\"fas fa-plus\"></i></div>
                      </label>
                      
                      <div class=\"sub-content\">
                        <p>Voici un programme python qui permet a l'utilisateur de trier son tableau de la facon d'on il l'aura choisi lors du choix des tris.
                        <br><br>Voici le resultat du programme si l'utilisateur choisi le trie croissant et bulle :</p>
                          <p><img src=";
        // line 38
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("photos/resultatpy.jpg"), "html", null, true);
        echo " class=\"img4\">
                           </p>
                           
                           <p>
                                <br>LE CODE :
                                      <br><br>
                                        from math import *
                                       <br> from random import *
                                       <br> import numpy as np
                                       <br> from time import process_time_ns
                                       <br> import time
                                       <br> from time import sleep
                                       <br>
                                       <br> #initialisation de variable
                                       <br>tableau2=[ ]
                                        <br>tableau=[ ]
                                      <br>  longueur = int  
                                       <br> Choixtris = int
                                       <br> Choixord = int
                                       <br> rst = int
                                       <br> rst = 0
                                        <br>  
                                       <br> #Definit le choix du tri
                                       <br>   
                                       <br> def ChoixTris():
                                         <br>   Choixxx = int             
                                         <br>   print(\"\\n\\nVoici les differents tris : \\n\")
                                        <br>    print(\" - 1 : Tri à bulles : bulle \\n - 2 : Tris par sélection : selection\\n - 3 : Tris fusion : fusion \\n - 4 : Comparaison des tris : comparaison\" ) 
                                        <br>
                                         <br>   ChoixTriss = str(input(\"Entrer votre tri souhaiter : \"))
                                        <br>    while(ChoixTriss != \"bulle\" and ChoixTriss != \"selection\" and ChoixTriss != \"fusion\" and ChoixTriss != \"comparaison\" ) :
                                       <br> #Il faut que le mot soit ecrit exactement de la bonne facon sinon erreur  
                                            <br>  print(\"\\n Erreur , veuiller entrer le mot associé au tri !\\n\")
                                            <br>
                                            <br>  ChoixTriss = str(input(\"\\n Entrer de nouveau svp : \\n \"))
                                          <br>  if ( ChoixTriss == \"bulle\" ):
                                           <br>   Choixxx = 1
                                          <br>  if ( ChoixTriss == \"selection\"):
                                           <br>   Choixxx = 2
                                           <br> if ( ChoixTriss == \"fusion\" ) :
                                           <br>   Choixxx = 3
                                           <br> if ( ChoixTriss == \"comparaison\"):
                                           <br>   Choixxx = 4
                                           <br> return Choixxx
                                        
                                        
                                       <br> #Definit la taille du tableau   
                                       <br> def TailleCase():
                                        <br>  casenbr = int(input(\"Entrer la taille de votre tableau :\")) 
                                         <br> while(casenbr < 2 ) :                       
                                           <br>   casenbr = int(input(\"Erreur, entrer une valeur supérieur a 2 svp :\\n\"))
                                         <br> return casenbr    
                                        <br>
                                          <br>
                                         <br> #Definit le choix de l'ordre
                                         <br> 
                                       <br> def Choixcroisoudecrois():
                                          <br>  choixordd = int
                                          <br>  Choixcroisoudecrois = str(input(\"\\n Voici le choix des ordres de tri : \\n - 1 : Croissant : croissant\\n - 2 : Decroissant : decroissant \\n Entrer le mot associé a l'ordre : \")) 
                                       <br><br> #Il faut que le mot soit ecrit exactement de la bonne facon sinon erreur\t
                                         <br>   while(Choixcroisoudecrois != \"croissant\" and Choixcroisoudecrois != \"decroissant\" ):
                                           <br>   Choixcroisoudecrois = str(input(\"\\nErreur , Entrer le mot correspondent a l'odre svp : \\n\"))
                                           <br> 
                                           <br> if ( Choixcroisoudecrois == \"croissant\" ):
                                           <br>   choixordd = 1 
                                          <br>  if (Choixcroisoudecrois == \"decroissant\" ) :
                                             <br> choixordd = 2
                                           <br> return choixordd 
                                          <br>
                                         <br> #Definit l'intervale du tableau  
                                       <br> def intervaleminmax ( tableau , longueur ):
                                          <br>  min = int(input(\"\\nEntrer la valeur min de l'intervalle pour les nombres aléatoire:\\n\"))
                                          <br>  max = int(input(\"\\nEntrer la valeur max de l'intervalle pour les nombres aléatoire:\\n\"))
                                           <br> 
                                           <br> if ( min > max ):
                                             <br> nvmin = int
                                            <br>  nvmin =max
                                            <br>  max=min
                                            <br>  min= nvmin
                                          <br>  for i in range (longueur):
                                             <br> nombre = [randint(min, max)] 
                                            <br>  tableau.append(nombre)
                                            <br>
                                              
                                           <br> #Definit le tri select avec ordre croissant\t  
                                       <br> def Selectcroiss (tableau2 , longueur):             
                                           <br> for i in range(longueur):
                                            <br>  
                                            <br>  max = i
                                             <br> for j in range(i+1, longueur):
                                              <br>  if tableau2[max] > tableau2[j]:
                                               <br>   max = j
                                              <br>          
                                             <br> tmp = tableau2[i]
                                             <br> tableau2[i] = tableau2[max]
                                              <br>tableau2[max] = tmp
                                        <br>
                                       <br> #Definit le tri select avec ordre decroissant
                                        <br>def Selectdecroiss (tableau , longueur):
                                           <br> for i in range(longueur):
                                             <br> 
                                             <br> max = i
                                             <br> for j in range(i+1, longueur):
                                               <br> if tableau[max] < tableau[j]:
                                               <br>   max = j
                                              <br>          
                                              <br>tmp = tableau[i]
                                             <br> tableau[i] = tableau[max]
                                             <br> tableau[max] = tmp 
                                             <br> 
                                            <br>  
                                        <br>  #Definit le tri bull avec ordre decroissant  
                                       <br> def Bulledecroiss(tableau , longueur):
                                          <br>
                                           <br> for i in range(longueur):
                                            <br>  for j in range(0, longueur-i-1):
                                               <br>   if tableau[j] < tableau[j+1] :
                                                 <br>     tableau[j], tableau[j+1] = tableau[j+1], tableau[j]
                                            <br>
                                        <br>  #Definit le tri bull avec ordre croissant 
                                       <br> def Bullecroiss (tableau , longueur):            
                                        <br>
                                           <br> for i in range(longueur):
                                            <br>  for j in range(0, longueur-i-1):
                                                 <br> if tableau[j] > tableau[j+1] :
                                                  <br>  tableau[j], tableau[j+1] = tableau[j+1], tableau[j] 
                                               <br>     
                                      <br>  #Tris a fusion : On divise en deux moitiés le tableau 
                                      <br>  # On trie chacune d’entre elles 
                                      <br>  # Et ensuite on fusionne les deux moitiés obtenues pour reconstituer la liste triée            
                                       <br> def triFusion(L):
                                        <br>    if len(L) == 1:
                                           <br>     return L                                            
                                          <br>  else:
                                               <br> return fusion( triFusion(L[:len(L)//2]) , triFusion(L[len(L)//2:]) )
                                          <br>  
                                       <br> def fusion(A,B):
                                          <br>  if len(A) == 0:
                                           <br>     return B
                                          <br>  elif len(B) == 0:
                                             <br>   return A
                                           <br> elif A[0] <= B[0]:
                                            <br>    return [A[0]] + fusion( A[1:] , B )
                                           <br> else:
                                               <br> return [B[0]] + fusion( A , B[1:] )             
                                              <br>      
                                          <br>
                                       <br> #Affichage des tableau     
                                       <br> def affichertabTri(tableau):
                                       <br>     print (\"\\nTableau trié :\")
                                         <br>   print (tableau) 
                                         <br>       
                                        <br>def affichetabbase():
                                         <br>   print(\"\\nTableau de base : \")
                                          <br>  print(tableau)\t\t\t  
                                         <br>       
                                      <br>  #Appelle foction
                                      <br>  longueur = TailleCase()
                                      <br>  intervaleminmax( tableau , longueur )
                                       <br> tableau2 = tableau.copy()
                                        <br>
                                       <br> Choixordd = Choixcroisoudecrois()
                                       <br> Choixtriss = ChoixTris()
                                       <br> affichetabbase()
                                        <br>  
                                          <br>
                                       <br> ## Si choix X alors demarer le ou les temps pour indiquer le temps de l'execution du tris
                                          <br>
                                        <br>if ( Choixtriss == 4 and Choixordd == 1):
                                          <br>  start = time.time()
                                           <br> Bullecroiss(tableau , longueur)
                                           <br> end = time.time()
                                            <br>
                                           <br> staart = time.time()
                                           <br> Selectcroiss(tableau2 , longueur)
                                          <br>  eend = time.time()
                                            
                                           <br> staaart = time.time()
                                          <br>  fufu = triFusion(tableau)
                                          <br>  eeend = time.time()
                                            
                                           <br> elapsb = ( end - start )*1000
                                          <br>  elapsf = ( eend - staart )*1000 
                                          <br>  elapsfs = ( eeend - staaart )*1000
                                        <br>
                                      <br>  if ( Choixtriss == 4 and Choixordd == 2):
                                          <br>  start = time.time()
                                          <br>  Bullecroiss(tableau , longueur)
                                         <br>   end = time.time()
                                           <br> 
                                          <br>  staart = time.time()
                                          <br>  Selectcroiss(tableau2 , longueur)
                                          <br>  eend = time.time()
                                           <br> 
                                           <br> staaart = time.time()
                                          <br>  fufu = triFusion(tableau)
                                           <br> eeend = time.time() 
                                          <br>  
                                           <br> elapsb = ( end - start )*1000
                                           <br> elapsf = ( eend - staart )*1000 
                                           <br> elapsfs = ( eeend - staaart )*1000
                                        <br>
                                        <br>
                                       <br> if(Choixtriss == 1 and Choixordd == 1):
                                         <br>   start = time.time()
                                          <br>  Bullecroiss(tableau , longueur)
                                          <br>  end = time.time()
                                          <br>  elapsb = ( end - start )*1000
                                          <br>
                                       <br> if(Choixtriss == 1 and Choixordd == 2):
                                          <br>  start = time.time()
                                           <br> Bulledecroiss(tableau , longueur)
                                           <br> end = time.time()
                                           <br> elapsb = ( end - start )*1000
                                      <br>
                                      <br>
                                          <br>                                      
                                       <br> if(Choixtriss == 2 and Choixordd == 1):
                                         <br>   start = time.time()
                                          <br>  Selectcroiss(tableau , longueur)
                                          <br>  end = time.time()
                                          <br>  elapsb = ( end - start )*1000
                                          <br>  
                                       <br> if(Choixtriss == 2 and Choixordd == 2):
                                          <br>  start = time.time()
                                          <br>  Selectdecroiss(tableau , longueur)
                                           <br> end = time.time()
                                          <br>  elapsb = ( end - start )*1000
                                          <br>
                                         <br>   
                                       <br> if(Choixtriss == 3 and Choixordd == 2):
                                          <br>  start = time.time()
                                          <br>  fufu = triFusion(tableau)
                                           <br> end = time.time()
                                           <br> elapsb = ( end - start )*1000
                                            <br>
                                        <br>if(Choixtriss == 3 and Choixordd == 1):
                                          <br>  start = time.time()
                                          <br>  fufu = triFusion(tableau)
                                          <br>  end = time.time() 
                                          <br>  elapsb = ( end - start )*1000
                                            <br>
                                          <br>  
                                            <br>  
                                          <br>  
                                       <br> #Appelle fonction pour afficher tableau 
                                       <br> affichertabTri(tableau)
                                        <br>
                                        <br>
                                        <br>
                                        <br>#permet de prendre le temps d'executionn pour la partie comparaison
                                        <br>
                                        <br>
                                        <br>
                                       <br> #Affiche le temps de comparaison avec le tps du plus efficasse entre les 3 tris pour decroissant 
                                       <br> if ( Choixtriss == 4 and Choixordd == 2 ):
                                       <br> print(f'Voici le temps d\\'exécution du tri bulle decroissant : {elapsb:.2}sec')
                                       <br> print(f'Voici le temps d\\'exécution du tri selection decroissant: {elapsf:.2}sec')
                                       <br> print(f'Voici le temps d\\'exécution du tri fusion decroissant: {elapsfs:.2}sec')
                                        <br>
                                       <br> if ( elapsb < elapsf and elapsb < elapsfs ) :
                                        <br>    print(\"Le trie le plus efficasse est le bulle\")
                                      <br>  if ( elapsf < elapsb and elapsf < elapsfs ) :
                                         <br>   print(\"Le trie le plus efficasse est le selection\")
                                       <br> if ( elapsfs < elapsb and elapsfs < elapsf ) :
                                          <br>  print(\"Le trie le plus efficasse est le fusion\")
                                      <br>
                                      <br>
                                      <br>
                                      <br>  #Affiche le temps de comparaison avec le tps du plus efficasse entre les 3 tris pour croissant 
                                      <br>  if ( Choixtriss == 4 and Choixordd == 1):
                                      <br>  print(f'Voici le temps d\\'exécution du tri bulle croissant: {elapsb:.2}sec')
                                       <br> print(f'Voici le temps d\\'exécution du tri selection croissant: {elapsf:.2}sec')
                                       <br> print(f'Voici le temps d\\'exécution de tri fusion croissant: {elapsfs:.2}sec')
                                              <br>
                                       <br> if ( elapsb < elapsf and elapsb < elapsfs ) :
                                       <br>     print(\"Le trie le plus efficasse est le bulle\")
                                       <br> if ( elapsf < elapsb and elapsf < elapsfs ) :
                                        <br>    print(\"Le trie le plus efficasse est le selection\")
                                      <br>  if ( elapsfs < elapsb and elapsfs < elapsf ) :
                                         <br>   print(\"Le trie le plus efficasse est le fusion\")
                                          <br>
                                       <br> if ( Choixtriss == 1 and Choixordd == 1):
                                         <br> print(f'Voici le temps d\\'exécution du tri bulle croissant: {elapsb:.2}sec')
                                         <br>   
                                       <br> if ( Choixtriss == 1 and Choixordd == 2):
                                           <br> print(f'Voici le temps d\\'exécution du tri bulle croissant: {elapsb:.2}sec')
                                         <br>   
                                        <br>    
                                      <br>  if ( Choixtriss == 2 and Choixordd == 1):
                                       <br>     print(f'Voici le temps d\\'exécution du tri selection croissant: {elapsb:.2}sec')
                                            
                                       <br> if ( Choixtriss == 2 and Choixordd == 2):
                                         <br>   print(f'Voici le temps d\\'exécution du tri selection croissant: {elapsb:.2}sec') 
                                          <br>
                                       <br>     
                                       <br> if ( Choixtriss == 3 and Choixordd == 1):
                                         <br>   print(f'Voici le temps d\\'exécution du tri fusion croissant: {elapsb:.2}sec')
                                         <br>   
                                       <br> if ( Choixtriss == 3 and Choixordd == 2):
                                           <br> print(f'Voici le temps d\\'exécution du tri fusion croissant: {elapsb:.2}sec')
                                           <br><br>
                                           </p>
                       </div>
                    
                    </div>
                    


                     <div class=\"child-tab\">
                      <input type=\"checkbox\" name=\"sub-tab\" id=\"tab-5\">
                      <label for=\"tab-5\">
                        <span>Language C</span>
                        <div class=\"icon\"><i class=\"fas fa-plus\"></i></div>
                      </label>
                      <div class=\"sub-content\">
                        <p>J'ai pu écrire de nombreux programmes ayant des utiliter different mais voici un programmes par exemple ci-dessous qui permet de donner le revenus d'une personne apres impot :
                        </p>
                        <p><img src=";
        // line 356
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("photos/Capture.jpg"), "html", null, true);
        echo " class=\"img4\">
                         <p>
                                <br>LE CODE :

                                        <br>#include<math.h>\t
                                        <br>#include<stdio.h>
                                        <br>#include<stdlib.h>
                                        <br>
                                        <br>float montantimpot (int r , int n){
                                          <br>
                                        <br>float montant = r * n ;
                                       <br> if (montant  < 500) {
                                        <br>    return 10; 
                                       <br> }
                                       <br> else{
                                       <br>       return 20;
                                        <br>}
                                       <br> }
                                        <br>
                                       <br> float revenunet (int r , int v){
                                       <br> float revenus = r - r * (v/100.0);
                                      <br>  return revenus;
                                        <br>
                                       <br> }
                                          <br>
                                        <br>int main(){
                                        <br>
                                       <br> int r;
                                       <br> int n;
                                        <br>
                                        <br>do{
                                         <br>     printf (\"Donner votre revenu : \\n \"  );
                                         <br>   scanf(\"%d\",&r);
                                       <br> } while (r<0);
                                        <br>  
                                       <br> do{
                                        <br>      printf (\"Combien de personnes au foyer : \\n \"  );
                                         <br>   scanf(\"%d\",&n);
                                       <br> }while (n<1);
                                        <br>
                                        <br>
                                         <br> printf(\"\\n vous aurez %f % sur votre salaire \", montantimpot(r,n));  
                                         <br> printf(\"\\n Votre salaire sera de %f \",revenunet(r,  montantimpot(r,n))); 
                                         <br> 
                                            <br>
                                        <br>return 0; 
                                       <br> }



                           </p>
                      </div>
                      
                    </div>


                     <div class=\"child-tab\">
                            <input type=\"checkbox\" name=\"sub-tab\" id=\"tab-14\">
                            <label for=\"tab-14\">
                            <span>Language C++</span>
                            <div class=\"icon\"><i class=\"fas fa-plus\"></i></div>
                            </label>
                            <div class=\"sub-content\">
                            <p>Voici un programme que j'ai put concevoir lors de mon année de terminale qui permet a l'utilisation d'une serre autonome connecté.
                            <br>Ma partie consistais a ecrire un programme pouvant mesurer le niveau d'eau d'une cuve de serre pour avertir l'utilisateur.</p>
                            <p>
                            <br>En regardant la vidéo vous devez savoir que l'ecran lcd est separer de l'autre partie concernant les capteurs et la plaque d'essaies.
                            <br> C'est grace a un modules zigbee qu'ils arrivent a communiquer
                            </p>
                           
                            
                            <br> Voici le résultat du programme :
                            <br> <br> <br> <br> 


                            <video widht=375  height=375 controls poster=\"video.mov\" >
                            <source src=\"../photos/video.mov\" >
                            </video>
                            


                            <p>
                            <br>Voici le code de l'emeteur :
                            <br>     #include < SoftwareSerial.h >                                                                                                                                                                                                                                                                                                                                                                                                                                                                                     //emeteur
                            <br>
                            <br>
                            <br>   SoftwareSerial xbee(2, 3);
                            <br>   String phrase;
                            <br>  int count;
                            <br>  void setup()
                            <br> {   
                            <br>   xbee.begin(9600);    
                            <br>     Serial.begin(9600);
                            <br>     count = 0;
                            <br>     
                            <br>  }
                            <br>
                            <br>  void loop() 
                            <br> { 
                            <br>  {
                            <br>  while (true){
                            <br>  //pour le capteur 1
                            <br>  int val= analogRead(A0) ;
                            <br> float tension = val*5.0/1024;
                            <br>
                            <br>    //Serial.println(tension);
                            <br>   // xbee.println(tension);
                            <br>   //count++;
                            <br>   delay(1500);
                            <br> if (tension  > 3.74){
                            <br>     xbee.println(3);
                            <br>    count++;
                            <br>  delay(1500);
                            <br>  }
                            <br>  
                            <br>  if (tension < 3.34 && tension > 3.32){
                            <br>    Serial.println(tension);
                            <br>    String phrase = \" Eau < 50% \" ;
                            <br>    Serial.println(phrase);
                            <br>     xbee.println(2);
                            <br>  count++;
                            <br> delay(1500);
                            <br>   }
                            <br> 
                            <br>   if (tension < 2.50 && tension > 2.48){
                            <br>     Serial.println(tension);
                            <br>    String phrase = \" Eau < 25% \" ;
                            <br>    Serial.println(phrase);
                            <br>    xbee.println(1);
                            <br>  count++;
                            <br>  delay(1500);
                            <br>    }
                            <br>       
                            <br>    if (tension < 0.1  && tension > -0.1){
                            <br>     Serial.println(tension);
                            <br>     String phrase = \" MANQUE D'EAU URGENT \" ;
                            <br>     Serial.println(phrase);
                            <br>      xbee.println(4);
                            <br>    count++;
                            <br>   delay(1500);
                            <br>   }
                            <br>  delay(1000);
                            <br>   }
                            <br>    
                            <br>    
                            <br>  }
                            <br>   }
                            <br><br><br>Voici le code du recepteur :
                            <br>
                            <br>#include < SoftwareSerial.h >  
                            <br>  #include < Wire.h >
                            <br>  #include < Adafruit_RGBLCDShield.h >
                            <br>  #include < utility/Adafruit_MCP23017.h >
                            <br>
                            <br>  Adafruit_RGBLCDShield lcd = Adafruit_RGBLCDShield();
                            <br>
                            <br>  #define RED 0x1
                            <br>  #define YELLOW 0x3
                            <br>  #define GREEN 0x2
                            <br>  #define TEAL 0x6
                            <br>  #define BLUE 0x4
                            <br>  #define VIOLET 0x5
                            <br>  #define WHITE 0x7
                            <br>
                            <br>
                            <br>  SoftwareSerial xbee(2, 3);
                            <br>   
                            <br>void setup() {
                            <br>
                            <br>   xbee.begin(9600); 
                            <br>   Serial.begin(9600);
                            <br>
                            <br>  lcd.begin(16, 2);
                            <br>
                            <br>  int time = millis();
                            <br>
                            <br> }
                            <br>
                            <br> uint8_t i=0;
                            <br>
                            <br> void loop() {
                            <br>
                            <br>  lcd.setCursor(0, 1);
                            <br>
                            <br>
                            <br>
                            <br> 
                            <br>  if(xbee.available()) {
                            <br>   while(xbee.available())  {
                            <br>    char lettre = xbee.read();
                            <br>   int val = lettre - 48;
                            <br>   if(val == 4)
                            <br>  {
                            <br>      lcd.clear();
                            <br>    lcd.setCursor(0, 1);
                            <br>    lcd.setBacklight(RED);
                            <br>    lcd.print(\" MANQUE D'EAU !\");
                            <br>  }
                            <br>  else if(val == 1)
                            <br>   {
                            <br>  lcd.clear();
                            <br>   lcd.setCursor(0, 1);
                            <br>    lcd.setBacklight(GREEN);
                            <br>  lcd.print(\" EAU > 25% \");        
                            <br> }
                            <br> else if(val == 2)
                            <br>  {
                            <br>   lcd.clear();
                            <br>   lcd.setCursor(0, 1);
                            <br>    lcd.setBacklight(GREEN);
                            <br>  lcd.print(\" EAU > 50% \");        
                            <br>  }
                            <br>  else if(val == 3)
                            <br> {
                            <br>  lcd.clear();
                            <br>  lcd.setCursor(0, 1);
                            <br>  lcd.setBacklight(GREEN);
                            <br>   lcd.print(\" EAU > 75% \");        
                            <br>}
                            <br> }
                            <br> }
                            <br> }



                            </p>
                            <br> <br>
                            </div>

                            </div>

                     <div class=\"child-tab\">
                      <input type=\"checkbox\" name=\"sub-tab\" id=\"tab-15\">
                      <label for=\"tab-15\">
                        <span>Language html / css</span>
                        <div class=\"icon\"><i class=\"fas fa-plus\"></i></div>
                      </label>
                      <div class=\"sub-content\">
                        <p>Cette premiere année d'IUT ma permis de decouvrire le language html / css ainsi que Symfony par la suite. J'ai du 
                        crée dans un premier temps un blog sur un theme choisi par moi-meme en utilisant le Notpad++ et dans un deuxieme temps un site qui est celui ci.
                       
                        <div class=centrer6> 
                        <br>Voici ci dessous quelque image de mon ancien blog :  </p>
                                                <p><img src=";
        // line 599
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("photos/site.jpg"), "html", null, true);
        echo " class=\"img4\">
                        
                                                 <p><img src=";
        // line 601
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("photos/questionnaire.jpg"), "html", null, true);
        echo " class=\"img4\">
                                                
                          <p>Tout en étant résponsive :
                          <br>
                                                 <img src=";
        // line 605
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("photos/responsive.jpg"), "html", null, true);
        echo " class=\"img4\">
                         </div>
                      </div>
                 </div>
                      
                    </div>

                 <br><br> 
    


    
    <div class=\"parent-tab tab-3\">
      <input type=\"checkbox\" name=\"tab\" id=\"tab-2\">
      <label for=\"tab-2\">
        <span>Systeme electroniques</span>
        <div class=\"icon\"><i class=\"fas fa-plus\"></i></div>
      </label>
      <div class=\"content\">

                     <div class=\"child-tab\">
                      <input type=\"checkbox\" name=\"sub-tab\" id=\"tab-9\">
                      <label for=\"tab-9\">
                        <span>Signaux continus</span>
                        <div class=\"icon\"><i class=\"fas fa-plus\"></i></div>
                      </label>
                      <div class=\"sub-content\">
                        <p>Cette premiere année nous avons manipuler de la plaque d'essaies qui n'était pas bien nouveau pour ma part, on n'a donc appris
                        utiliser la plaque a troue pour manipuler et obtenir des mesures via le generayeur de tension et le multimetre. Voici quelque image 
                        de réalisation de courant continus :</p>
                        <p><img src=";
        // line 635
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("photos/a1.jpg"), "html", null, true);
        echo " class=\"img4\">
                           </p>
                           <p><img src=";
        // line 637
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("photos/a2.JPG"), "html", null, true);
        echo " class=\"img4\">
                           </p>
                           <p><img src=";
        // line 639
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("photos/a3.JPG"), "html", null, true);
        echo " class=\"img4\">
                           </p>
                      </div>
                    </div>



                     <div class=\"child-tab\">
                      <input type=\"checkbox\" name=\"sub-tab\" id=\"tab-10\">
                      <label for=\"tab-10\">
                        <span>Signaux alternatifs</span>
                        <div class=\"icon\"><i class=\"fas fa-plus\"></i></div>
                      </label>
                      <div class=\"sub-content\">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing thelit dolor. Utfacilis labore, exercitationem fuga minima a illo modi vitaerse dignissimos? Vero?</p>

                      </div>
                      
                    </div>
                      
        </div>
    <br><br>
    

   
    <div class=\"parent-tab tab-3\">
      <input type=\"checkbox\" name=\"tab\" id=\"tab-3\">
      <label for=\"tab-3\" class=\"tab-3\">
        <span>Réseaux</span>
        <div class=\"icon\"><i class=\"fas fa-plus\"></i></div>
      </label>
      <div class=\"content\">
        
        


                    <div class=\"child-tab\">
                      <input type=\"checkbox\" name=\"sub-tab\" id=\"tab-7\">
                      <label for=\"tab-7\">
                        <span>Packet Tracert</span>
                        <div class=\"icon\"><i class=\"fas fa-plus\"></i></div>
                      </label>
                      <div class=\"sub-content\">
                        <p>Packet tracer a été pour moi cette année une nouvelle technologies que j'ai trouver tres interressant car cela nous permet de nous entrainer au develloppement de mini réseaux, a savoir bien brancher les switchs et pc,...
                        <br>Voici ci dessous un mini réseaux crée pour une mini entreprise qui contient 4 LAN ou chacun d'entre eux est independant des uns des autres car chaque LAN a son propre Vlan :
                           <p><img src=";
        // line 684
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("photos/packet.png"), "html", null, true);
        echo " class=\"img4\">
                           </p>
                        </p>
                      </div>
                    </div>
                    
                    


                    <div class=\"child-tab\">
                      <input type=\"checkbox\" name=\"sub-tab\" id=\"tab-8\">
                      <label for=\"tab-8\">
                        <span>Configuration switch</span>
                        <div class=\"icon\"><i class=\"fas fa-plus\"></i></div>
                      </label>
                      <div class=\"sub-content\">
                        <p>La configuration de switch est quelque chose de tout nouveau mais que j'ai apprécier a travailler dessus car j'ai beaucoup aimer le coter manipulation de commandes pour configurer les switchs. Que sa soit pour recuperer des 
                        configuration de switch via le tftp, le ssh ou encors pour connecter deux pc entre eux et encors ... 
                        <br>Voici donc quelque images de realisation de cablage entre deux pc et quelque extrait de configuration de switch :</p>
                        <p>Voici une configuration qui nous a servis lors d'une realisation de topologies pour une mini entreprise :</p>
                        
                        <p><img src=";
        // line 705
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("photos/conf.jpg"), "html", null, true);
        echo " class=\"img4\">
                           </p>
                           <p>Cablage simple de réalisation :</p>
                           <p><img src=";
        // line 708
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("photos/cablage.jpg"), "html", null, true);
        echo " class=\"img4\">
                           </p>
                           <p><img src=";
        // line 710
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("photos/preuve.jpg"), "html", null, true);
        echo " class=\"img4\">
                           </p>
                      </div>
                    </div>
                 
       </div>
      <br><br>
    

    
    <div class=\"parent-tab tab-3\">
      <input type=\"checkbox\" name=\"tab\" id=\"tab-6\">
      <label for=\"tab-6\">
        <span>Machine Virtuelle</span>
        <div class=\"icon\"><i class=\"fas fa-plus\"></i></div>
      </label>
      <div class=\"content\">
       



                      <div class=\"child-tab\">
                                <input type=\"checkbox\" name=\"sub-tab\" id=\"tab-11\">
                                <label for=\"tab-11\">
                                  <span>Linux</span>
                                  <div class=\"icon\"><i class=\"fas fa-plus\"></i></div>
                                </label>
                                <div class=\"sub-content\">
                              <p>Lors de mon experience en cette premiere année de Réseaux et télécoms je peux maintenant installer des machines virtuelles sur les pc et a ajouter la fonctionnaliter du dossier partager avec windows. 
                                </p>                         
                                    <p><img src=";
        // line 740
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("photos/graphisme.png"), "html", null, true);
        echo " class=\"img4\">
                                    </p>

                                  <p>Mais j'ai aussi decouvert linux et ces nombreuses commandes via le terminale.
                                  <br>Grace a l'entrainement que ma fournie le jeu Gameshell et ces 42 missions j'ai pu i faire mon journal avec quelque commande interresante :</p>
                                        <p>
                                            <br>JOURNAL :
                                            <br>

                                          <br> Gameshell :
                                            <br>
                                          <br> q14)alias la='ls -A'
                                          <br>     la
                                          <br>     cat .joli_caillou
                                          <br> q15)nano ~Foret/Hutte/Coffre/journal.txt
                                            <br>   Et ecrire dedans
                                          <br> q16)alias journal='nano ~Foret/Hutte/Coffre/journal.txt'
                                          <br> q17)rm *_reine_araignee_*
                                          <br> q18)xeyes 
                                          <br>     xeyes &
                                          <br> q19)Apres avoirtrouver la piece de bronze : mv *_piece_de_bronze_* ~/Foret/Hutte/Coffre/
                                          <br> q20)Commande avancer : mv -v */*/*/*argent* ~/Foret/Hutte/Coffre/
                                          <br> q21)find . -type f -iname *or* ~/Foret/Hutte/Coffre/
                                            <br>    mv -v */*/*/*or* ~/Foret/Hutte/Coffre/
                                          <br>     mv -v */*/*/*oR* ~/Foret/Hutte/Coffre/
                                            <br>q22)head -6 Livre_de_potions/page_07 
                                          <br> q23) tail -n 9 ~/Montagne/../page_12
                                          <br> q24) cat Livre_de_potions/page_01 Livre_de_potions/page_02
                                          <br> q25) cat Livre_de_potions/page_03  Livre_de_potions/page_04 | tail -16
                                            <br>q26) head -6 Livre_de_potions/page_13 | tail -3
                                          <br> q27) ps, apres kill 58752
                                          <br> q28)ps, kill -s KILL 67233, kill -s KILL 64369
                                          <br>  q29)pstree -p \$\$ , kill -s TERM 3110 3111 3112 
                                          <br>       rm -v *charbon*
                                          <br>  q30)Calcule mentale
                                          <br> q31)gsh check < Mathematiques_en_premiere_annee
                                          <br> q32)ls grimoire_* > Tiroire/inventaire.txt
                                          <br> q33)grep -l -i gsh grimoire_* 2>/dev/null
                                          <br>  q34)..., ,/merlin < carte_du_ciel 2> merlin.txt  
                                          <br>       gsh check < merlin.txt
                                          <br> q35)chmod +x Chambre_du_roi/    puis i rentrer
                                          <br> q36)chmod +r .bout_de_papier_secret  
                                          <br>       cat .bout_de_papier_secret  et rentrer le code
                                          <br> q37)chmod -R 777 Coffre_fort/ 
                                          <br>       mv couronne ~/Foret/Hutte/Coffre     puis rentrer les 3 chiffres
                                          <br> q38)find . -type f -exec grep -H rubis '{}' \\ ;  
                                          <br>       mv ./d7dc0.../5819 ~/Foret/Hutte/Coffre/
                                          <br> q39)find . -type f -exec grep -H rubis '{}' \\ ; | xargs mv -v -t ~/Foret/Hutte/Coffre
                                          <br> q40)grep Roi *_p_a_r_c_h_e_m_i_n_* | grep -v 'PAYE'  et dire la dette 
                                          <br> q41)grep -v 'PAYE' *_p_a_r_c_h_e_m_i_n_* | wc -l  et donner le nombre d'objet impayes
                                          <br>  q42)tr « a-z » « o-za-n » < message_secret
                                    <br>  </p>
                                </div>
                    </div>



                     <div class=\"child-tab\">
                      <input type=\"checkbox\" name=\"sub-tab\" id=\"tab-12\">
                      <label for=\"tab-12\">
                        <span>Serveur / Client</span>
                        <div class=\"icon\"><i class=\"fas fa-plus\"></i></div>
                      </label>
                      <div class=\"sub-content\">
                        <p>Lors de cette premiere année j'ai pus decouvrire la création d'un client et d'un serveur via l'utlisation d'une machine virtuelle, ou l'on a appris a crée 2 
                        interface réseaux, ou dans chaque serveur on a cree des dossier partager entre machine a partir de commande.   </p>
                      </div>
                      
                    </div>
  </div>
  <br><br>
  </div>

    <span>
    <h6>
        <a href=\"http://copyright.be\" target=\"_blank\">Copyright 2023 SAé1.4.com - Tous droits réservés</a>
    </h6>
    </span>


\t\t
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "portofolio/portofolio.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  859 => 740,  826 => 710,  821 => 708,  815 => 705,  791 => 684,  743 => 639,  738 => 637,  733 => 635,  700 => 605,  693 => 601,  688 => 599,  442 => 356,  121 => 38,  88 => 7,  78 => 6,  59 => 4,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}


{% block title %}SAE 14{% endblock %}

{% block body %}


<div class=\"card mb-3\">
<br><br><br><br><br><br><br>
\t<span>
  \t<div id=\"titre2\" >
    <h1 class = cadreee  target=\"_blank\">E-PORTOFOLIO</h1>
    </div>\t
  </span>
  <br><br><br><br><br><br><br>
  <div class=\"wrapper\">

    <div class=\"parent-tab tab-3\">
      <input type=\"checkbox\" name=\"tab\" id=\"tab-1\" >
      <label for=\"tab-1\">
        <span>Programmation</span>
        <div class=\"icon\"><i class=\"fas fa-plus\"></i></div>
      </label>
      <div class=\"content\">
                  
                     <div class=\"child-tab\">
                      <input type=\"checkbox\" name=\"sub-tab\" id=\"tab-4\">
                      <label for=\"tab-4\">
                      
                        <span>Language Python</span>
                        <div class=\"icon\"><i class=\"fas fa-plus\"></i></div>
                      </label>
                      
                      <div class=\"sub-content\">
                        <p>Voici un programme python qui permet a l'utilisateur de trier son tableau de la facon d'on il l'aura choisi lors du choix des tris.
                        <br><br>Voici le resultat du programme si l'utilisateur choisi le trie croissant et bulle :</p>
                          <p><img src={{asset('photos/resultatpy.jpg')}} class=\"img4\">
                           </p>
                           
                           <p>
                                <br>LE CODE :
                                      <br><br>
                                        from math import *
                                       <br> from random import *
                                       <br> import numpy as np
                                       <br> from time import process_time_ns
                                       <br> import time
                                       <br> from time import sleep
                                       <br>
                                       <br> #initialisation de variable
                                       <br>tableau2=[ ]
                                        <br>tableau=[ ]
                                      <br>  longueur = int  
                                       <br> Choixtris = int
                                       <br> Choixord = int
                                       <br> rst = int
                                       <br> rst = 0
                                        <br>  
                                       <br> #Definit le choix du tri
                                       <br>   
                                       <br> def ChoixTris():
                                         <br>   Choixxx = int             
                                         <br>   print(\"\\n\\nVoici les differents tris : \\n\")
                                        <br>    print(\" - 1 : Tri à bulles : bulle \\n - 2 : Tris par sélection : selection\\n - 3 : Tris fusion : fusion \\n - 4 : Comparaison des tris : comparaison\" ) 
                                        <br>
                                         <br>   ChoixTriss = str(input(\"Entrer votre tri souhaiter : \"))
                                        <br>    while(ChoixTriss != \"bulle\" and ChoixTriss != \"selection\" and ChoixTriss != \"fusion\" and ChoixTriss != \"comparaison\" ) :
                                       <br> #Il faut que le mot soit ecrit exactement de la bonne facon sinon erreur  
                                            <br>  print(\"\\n Erreur , veuiller entrer le mot associé au tri !\\n\")
                                            <br>
                                            <br>  ChoixTriss = str(input(\"\\n Entrer de nouveau svp : \\n \"))
                                          <br>  if ( ChoixTriss == \"bulle\" ):
                                           <br>   Choixxx = 1
                                          <br>  if ( ChoixTriss == \"selection\"):
                                           <br>   Choixxx = 2
                                           <br> if ( ChoixTriss == \"fusion\" ) :
                                           <br>   Choixxx = 3
                                           <br> if ( ChoixTriss == \"comparaison\"):
                                           <br>   Choixxx = 4
                                           <br> return Choixxx
                                        
                                        
                                       <br> #Definit la taille du tableau   
                                       <br> def TailleCase():
                                        <br>  casenbr = int(input(\"Entrer la taille de votre tableau :\")) 
                                         <br> while(casenbr < 2 ) :                       
                                           <br>   casenbr = int(input(\"Erreur, entrer une valeur supérieur a 2 svp :\\n\"))
                                         <br> return casenbr    
                                        <br>
                                          <br>
                                         <br> #Definit le choix de l'ordre
                                         <br> 
                                       <br> def Choixcroisoudecrois():
                                          <br>  choixordd = int
                                          <br>  Choixcroisoudecrois = str(input(\"\\n Voici le choix des ordres de tri : \\n - 1 : Croissant : croissant\\n - 2 : Decroissant : decroissant \\n Entrer le mot associé a l'ordre : \")) 
                                       <br><br> #Il faut que le mot soit ecrit exactement de la bonne facon sinon erreur\t
                                         <br>   while(Choixcroisoudecrois != \"croissant\" and Choixcroisoudecrois != \"decroissant\" ):
                                           <br>   Choixcroisoudecrois = str(input(\"\\nErreur , Entrer le mot correspondent a l'odre svp : \\n\"))
                                           <br> 
                                           <br> if ( Choixcroisoudecrois == \"croissant\" ):
                                           <br>   choixordd = 1 
                                          <br>  if (Choixcroisoudecrois == \"decroissant\" ) :
                                             <br> choixordd = 2
                                           <br> return choixordd 
                                          <br>
                                         <br> #Definit l'intervale du tableau  
                                       <br> def intervaleminmax ( tableau , longueur ):
                                          <br>  min = int(input(\"\\nEntrer la valeur min de l'intervalle pour les nombres aléatoire:\\n\"))
                                          <br>  max = int(input(\"\\nEntrer la valeur max de l'intervalle pour les nombres aléatoire:\\n\"))
                                           <br> 
                                           <br> if ( min > max ):
                                             <br> nvmin = int
                                            <br>  nvmin =max
                                            <br>  max=min
                                            <br>  min= nvmin
                                          <br>  for i in range (longueur):
                                             <br> nombre = [randint(min, max)] 
                                            <br>  tableau.append(nombre)
                                            <br>
                                              
                                           <br> #Definit le tri select avec ordre croissant\t  
                                       <br> def Selectcroiss (tableau2 , longueur):             
                                           <br> for i in range(longueur):
                                            <br>  
                                            <br>  max = i
                                             <br> for j in range(i+1, longueur):
                                              <br>  if tableau2[max] > tableau2[j]:
                                               <br>   max = j
                                              <br>          
                                             <br> tmp = tableau2[i]
                                             <br> tableau2[i] = tableau2[max]
                                              <br>tableau2[max] = tmp
                                        <br>
                                       <br> #Definit le tri select avec ordre decroissant
                                        <br>def Selectdecroiss (tableau , longueur):
                                           <br> for i in range(longueur):
                                             <br> 
                                             <br> max = i
                                             <br> for j in range(i+1, longueur):
                                               <br> if tableau[max] < tableau[j]:
                                               <br>   max = j
                                              <br>          
                                              <br>tmp = tableau[i]
                                             <br> tableau[i] = tableau[max]
                                             <br> tableau[max] = tmp 
                                             <br> 
                                            <br>  
                                        <br>  #Definit le tri bull avec ordre decroissant  
                                       <br> def Bulledecroiss(tableau , longueur):
                                          <br>
                                           <br> for i in range(longueur):
                                            <br>  for j in range(0, longueur-i-1):
                                               <br>   if tableau[j] < tableau[j+1] :
                                                 <br>     tableau[j], tableau[j+1] = tableau[j+1], tableau[j]
                                            <br>
                                        <br>  #Definit le tri bull avec ordre croissant 
                                       <br> def Bullecroiss (tableau , longueur):            
                                        <br>
                                           <br> for i in range(longueur):
                                            <br>  for j in range(0, longueur-i-1):
                                                 <br> if tableau[j] > tableau[j+1] :
                                                  <br>  tableau[j], tableau[j+1] = tableau[j+1], tableau[j] 
                                               <br>     
                                      <br>  #Tris a fusion : On divise en deux moitiés le tableau 
                                      <br>  # On trie chacune d’entre elles 
                                      <br>  # Et ensuite on fusionne les deux moitiés obtenues pour reconstituer la liste triée            
                                       <br> def triFusion(L):
                                        <br>    if len(L) == 1:
                                           <br>     return L                                            
                                          <br>  else:
                                               <br> return fusion( triFusion(L[:len(L)//2]) , triFusion(L[len(L)//2:]) )
                                          <br>  
                                       <br> def fusion(A,B):
                                          <br>  if len(A) == 0:
                                           <br>     return B
                                          <br>  elif len(B) == 0:
                                             <br>   return A
                                           <br> elif A[0] <= B[0]:
                                            <br>    return [A[0]] + fusion( A[1:] , B )
                                           <br> else:
                                               <br> return [B[0]] + fusion( A , B[1:] )             
                                              <br>      
                                          <br>
                                       <br> #Affichage des tableau     
                                       <br> def affichertabTri(tableau):
                                       <br>     print (\"\\nTableau trié :\")
                                         <br>   print (tableau) 
                                         <br>       
                                        <br>def affichetabbase():
                                         <br>   print(\"\\nTableau de base : \")
                                          <br>  print(tableau)\t\t\t  
                                         <br>       
                                      <br>  #Appelle foction
                                      <br>  longueur = TailleCase()
                                      <br>  intervaleminmax( tableau , longueur )
                                       <br> tableau2 = tableau.copy()
                                        <br>
                                       <br> Choixordd = Choixcroisoudecrois()
                                       <br> Choixtriss = ChoixTris()
                                       <br> affichetabbase()
                                        <br>  
                                          <br>
                                       <br> ## Si choix X alors demarer le ou les temps pour indiquer le temps de l'execution du tris
                                          <br>
                                        <br>if ( Choixtriss == 4 and Choixordd == 1):
                                          <br>  start = time.time()
                                           <br> Bullecroiss(tableau , longueur)
                                           <br> end = time.time()
                                            <br>
                                           <br> staart = time.time()
                                           <br> Selectcroiss(tableau2 , longueur)
                                          <br>  eend = time.time()
                                            
                                           <br> staaart = time.time()
                                          <br>  fufu = triFusion(tableau)
                                          <br>  eeend = time.time()
                                            
                                           <br> elapsb = ( end - start )*1000
                                          <br>  elapsf = ( eend - staart )*1000 
                                          <br>  elapsfs = ( eeend - staaart )*1000
                                        <br>
                                      <br>  if ( Choixtriss == 4 and Choixordd == 2):
                                          <br>  start = time.time()
                                          <br>  Bullecroiss(tableau , longueur)
                                         <br>   end = time.time()
                                           <br> 
                                          <br>  staart = time.time()
                                          <br>  Selectcroiss(tableau2 , longueur)
                                          <br>  eend = time.time()
                                           <br> 
                                           <br> staaart = time.time()
                                          <br>  fufu = triFusion(tableau)
                                           <br> eeend = time.time() 
                                          <br>  
                                           <br> elapsb = ( end - start )*1000
                                           <br> elapsf = ( eend - staart )*1000 
                                           <br> elapsfs = ( eeend - staaart )*1000
                                        <br>
                                        <br>
                                       <br> if(Choixtriss == 1 and Choixordd == 1):
                                         <br>   start = time.time()
                                          <br>  Bullecroiss(tableau , longueur)
                                          <br>  end = time.time()
                                          <br>  elapsb = ( end - start )*1000
                                          <br>
                                       <br> if(Choixtriss == 1 and Choixordd == 2):
                                          <br>  start = time.time()
                                           <br> Bulledecroiss(tableau , longueur)
                                           <br> end = time.time()
                                           <br> elapsb = ( end - start )*1000
                                      <br>
                                      <br>
                                          <br>                                      
                                       <br> if(Choixtriss == 2 and Choixordd == 1):
                                         <br>   start = time.time()
                                          <br>  Selectcroiss(tableau , longueur)
                                          <br>  end = time.time()
                                          <br>  elapsb = ( end - start )*1000
                                          <br>  
                                       <br> if(Choixtriss == 2 and Choixordd == 2):
                                          <br>  start = time.time()
                                          <br>  Selectdecroiss(tableau , longueur)
                                           <br> end = time.time()
                                          <br>  elapsb = ( end - start )*1000
                                          <br>
                                         <br>   
                                       <br> if(Choixtriss == 3 and Choixordd == 2):
                                          <br>  start = time.time()
                                          <br>  fufu = triFusion(tableau)
                                           <br> end = time.time()
                                           <br> elapsb = ( end - start )*1000
                                            <br>
                                        <br>if(Choixtriss == 3 and Choixordd == 1):
                                          <br>  start = time.time()
                                          <br>  fufu = triFusion(tableau)
                                          <br>  end = time.time() 
                                          <br>  elapsb = ( end - start )*1000
                                            <br>
                                          <br>  
                                            <br>  
                                          <br>  
                                       <br> #Appelle fonction pour afficher tableau 
                                       <br> affichertabTri(tableau)
                                        <br>
                                        <br>
                                        <br>
                                        <br>#permet de prendre le temps d'executionn pour la partie comparaison
                                        <br>
                                        <br>
                                        <br>
                                       <br> #Affiche le temps de comparaison avec le tps du plus efficasse entre les 3 tris pour decroissant 
                                       <br> if ( Choixtriss == 4 and Choixordd == 2 ):
                                       <br> print(f'Voici le temps d\\'exécution du tri bulle decroissant : {elapsb:.2}sec')
                                       <br> print(f'Voici le temps d\\'exécution du tri selection decroissant: {elapsf:.2}sec')
                                       <br> print(f'Voici le temps d\\'exécution du tri fusion decroissant: {elapsfs:.2}sec')
                                        <br>
                                       <br> if ( elapsb < elapsf and elapsb < elapsfs ) :
                                        <br>    print(\"Le trie le plus efficasse est le bulle\")
                                      <br>  if ( elapsf < elapsb and elapsf < elapsfs ) :
                                         <br>   print(\"Le trie le plus efficasse est le selection\")
                                       <br> if ( elapsfs < elapsb and elapsfs < elapsf ) :
                                          <br>  print(\"Le trie le plus efficasse est le fusion\")
                                      <br>
                                      <br>
                                      <br>
                                      <br>  #Affiche le temps de comparaison avec le tps du plus efficasse entre les 3 tris pour croissant 
                                      <br>  if ( Choixtriss == 4 and Choixordd == 1):
                                      <br>  print(f'Voici le temps d\\'exécution du tri bulle croissant: {elapsb:.2}sec')
                                       <br> print(f'Voici le temps d\\'exécution du tri selection croissant: {elapsf:.2}sec')
                                       <br> print(f'Voici le temps d\\'exécution de tri fusion croissant: {elapsfs:.2}sec')
                                              <br>
                                       <br> if ( elapsb < elapsf and elapsb < elapsfs ) :
                                       <br>     print(\"Le trie le plus efficasse est le bulle\")
                                       <br> if ( elapsf < elapsb and elapsf < elapsfs ) :
                                        <br>    print(\"Le trie le plus efficasse est le selection\")
                                      <br>  if ( elapsfs < elapsb and elapsfs < elapsf ) :
                                         <br>   print(\"Le trie le plus efficasse est le fusion\")
                                          <br>
                                       <br> if ( Choixtriss == 1 and Choixordd == 1):
                                         <br> print(f'Voici le temps d\\'exécution du tri bulle croissant: {elapsb:.2}sec')
                                         <br>   
                                       <br> if ( Choixtriss == 1 and Choixordd == 2):
                                           <br> print(f'Voici le temps d\\'exécution du tri bulle croissant: {elapsb:.2}sec')
                                         <br>   
                                        <br>    
                                      <br>  if ( Choixtriss == 2 and Choixordd == 1):
                                       <br>     print(f'Voici le temps d\\'exécution du tri selection croissant: {elapsb:.2}sec')
                                            
                                       <br> if ( Choixtriss == 2 and Choixordd == 2):
                                         <br>   print(f'Voici le temps d\\'exécution du tri selection croissant: {elapsb:.2}sec') 
                                          <br>
                                       <br>     
                                       <br> if ( Choixtriss == 3 and Choixordd == 1):
                                         <br>   print(f'Voici le temps d\\'exécution du tri fusion croissant: {elapsb:.2}sec')
                                         <br>   
                                       <br> if ( Choixtriss == 3 and Choixordd == 2):
                                           <br> print(f'Voici le temps d\\'exécution du tri fusion croissant: {elapsb:.2}sec')
                                           <br><br>
                                           </p>
                       </div>
                    
                    </div>
                    


                     <div class=\"child-tab\">
                      <input type=\"checkbox\" name=\"sub-tab\" id=\"tab-5\">
                      <label for=\"tab-5\">
                        <span>Language C</span>
                        <div class=\"icon\"><i class=\"fas fa-plus\"></i></div>
                      </label>
                      <div class=\"sub-content\">
                        <p>J'ai pu écrire de nombreux programmes ayant des utiliter different mais voici un programmes par exemple ci-dessous qui permet de donner le revenus d'une personne apres impot :
                        </p>
                        <p><img src={{asset('photos/Capture.jpg')}} class=\"img4\">
                         <p>
                                <br>LE CODE :

                                        <br>#include<math.h>\t
                                        <br>#include<stdio.h>
                                        <br>#include<stdlib.h>
                                        <br>
                                        <br>float montantimpot (int r , int n){
                                          <br>
                                        <br>float montant = r * n ;
                                       <br> if (montant  < 500) {
                                        <br>    return 10; 
                                       <br> }
                                       <br> else{
                                       <br>       return 20;
                                        <br>}
                                       <br> }
                                        <br>
                                       <br> float revenunet (int r , int v){
                                       <br> float revenus = r - r * (v/100.0);
                                      <br>  return revenus;
                                        <br>
                                       <br> }
                                          <br>
                                        <br>int main(){
                                        <br>
                                       <br> int r;
                                       <br> int n;
                                        <br>
                                        <br>do{
                                         <br>     printf (\"Donner votre revenu : \\n \"  );
                                         <br>   scanf(\"%d\",&r);
                                       <br> } while (r<0);
                                        <br>  
                                       <br> do{
                                        <br>      printf (\"Combien de personnes au foyer : \\n \"  );
                                         <br>   scanf(\"%d\",&n);
                                       <br> }while (n<1);
                                        <br>
                                        <br>
                                         <br> printf(\"\\n vous aurez %f % sur votre salaire \", montantimpot(r,n));  
                                         <br> printf(\"\\n Votre salaire sera de %f \",revenunet(r,  montantimpot(r,n))); 
                                         <br> 
                                            <br>
                                        <br>return 0; 
                                       <br> }



                           </p>
                      </div>
                      
                    </div>


                     <div class=\"child-tab\">
                            <input type=\"checkbox\" name=\"sub-tab\" id=\"tab-14\">
                            <label for=\"tab-14\">
                            <span>Language C++</span>
                            <div class=\"icon\"><i class=\"fas fa-plus\"></i></div>
                            </label>
                            <div class=\"sub-content\">
                            <p>Voici un programme que j'ai put concevoir lors de mon année de terminale qui permet a l'utilisation d'une serre autonome connecté.
                            <br>Ma partie consistais a ecrire un programme pouvant mesurer le niveau d'eau d'une cuve de serre pour avertir l'utilisateur.</p>
                            <p>
                            <br>En regardant la vidéo vous devez savoir que l'ecran lcd est separer de l'autre partie concernant les capteurs et la plaque d'essaies.
                            <br> C'est grace a un modules zigbee qu'ils arrivent a communiquer
                            </p>
                           
                            
                            <br> Voici le résultat du programme :
                            <br> <br> <br> <br> 


                            <video widht=375  height=375 controls poster=\"video.mov\" >
                            <source src=\"../photos/video.mov\" >
                            </video>
                            


                            <p>
                            <br>Voici le code de l'emeteur :
                            <br>     #include < SoftwareSerial.h >                                                                                                                                                                                                                                                                                                                                                                                                                                                                                     //emeteur
                            <br>
                            <br>
                            <br>   SoftwareSerial xbee(2, 3);
                            <br>   String phrase;
                            <br>  int count;
                            <br>  void setup()
                            <br> {   
                            <br>   xbee.begin(9600);    
                            <br>     Serial.begin(9600);
                            <br>     count = 0;
                            <br>     
                            <br>  }
                            <br>
                            <br>  void loop() 
                            <br> { 
                            <br>  {
                            <br>  while (true){
                            <br>  //pour le capteur 1
                            <br>  int val= analogRead(A0) ;
                            <br> float tension = val*5.0/1024;
                            <br>
                            <br>    //Serial.println(tension);
                            <br>   // xbee.println(tension);
                            <br>   //count++;
                            <br>   delay(1500);
                            <br> if (tension  > 3.74){
                            <br>     xbee.println(3);
                            <br>    count++;
                            <br>  delay(1500);
                            <br>  }
                            <br>  
                            <br>  if (tension < 3.34 && tension > 3.32){
                            <br>    Serial.println(tension);
                            <br>    String phrase = \" Eau < 50% \" ;
                            <br>    Serial.println(phrase);
                            <br>     xbee.println(2);
                            <br>  count++;
                            <br> delay(1500);
                            <br>   }
                            <br> 
                            <br>   if (tension < 2.50 && tension > 2.48){
                            <br>     Serial.println(tension);
                            <br>    String phrase = \" Eau < 25% \" ;
                            <br>    Serial.println(phrase);
                            <br>    xbee.println(1);
                            <br>  count++;
                            <br>  delay(1500);
                            <br>    }
                            <br>       
                            <br>    if (tension < 0.1  && tension > -0.1){
                            <br>     Serial.println(tension);
                            <br>     String phrase = \" MANQUE D'EAU URGENT \" ;
                            <br>     Serial.println(phrase);
                            <br>      xbee.println(4);
                            <br>    count++;
                            <br>   delay(1500);
                            <br>   }
                            <br>  delay(1000);
                            <br>   }
                            <br>    
                            <br>    
                            <br>  }
                            <br>   }
                            <br><br><br>Voici le code du recepteur :
                            <br>
                            <br>#include < SoftwareSerial.h >  
                            <br>  #include < Wire.h >
                            <br>  #include < Adafruit_RGBLCDShield.h >
                            <br>  #include < utility/Adafruit_MCP23017.h >
                            <br>
                            <br>  Adafruit_RGBLCDShield lcd = Adafruit_RGBLCDShield();
                            <br>
                            <br>  #define RED 0x1
                            <br>  #define YELLOW 0x3
                            <br>  #define GREEN 0x2
                            <br>  #define TEAL 0x6
                            <br>  #define BLUE 0x4
                            <br>  #define VIOLET 0x5
                            <br>  #define WHITE 0x7
                            <br>
                            <br>
                            <br>  SoftwareSerial xbee(2, 3);
                            <br>   
                            <br>void setup() {
                            <br>
                            <br>   xbee.begin(9600); 
                            <br>   Serial.begin(9600);
                            <br>
                            <br>  lcd.begin(16, 2);
                            <br>
                            <br>  int time = millis();
                            <br>
                            <br> }
                            <br>
                            <br> uint8_t i=0;
                            <br>
                            <br> void loop() {
                            <br>
                            <br>  lcd.setCursor(0, 1);
                            <br>
                            <br>
                            <br>
                            <br> 
                            <br>  if(xbee.available()) {
                            <br>   while(xbee.available())  {
                            <br>    char lettre = xbee.read();
                            <br>   int val = lettre - 48;
                            <br>   if(val == 4)
                            <br>  {
                            <br>      lcd.clear();
                            <br>    lcd.setCursor(0, 1);
                            <br>    lcd.setBacklight(RED);
                            <br>    lcd.print(\" MANQUE D'EAU !\");
                            <br>  }
                            <br>  else if(val == 1)
                            <br>   {
                            <br>  lcd.clear();
                            <br>   lcd.setCursor(0, 1);
                            <br>    lcd.setBacklight(GREEN);
                            <br>  lcd.print(\" EAU > 25% \");        
                            <br> }
                            <br> else if(val == 2)
                            <br>  {
                            <br>   lcd.clear();
                            <br>   lcd.setCursor(0, 1);
                            <br>    lcd.setBacklight(GREEN);
                            <br>  lcd.print(\" EAU > 50% \");        
                            <br>  }
                            <br>  else if(val == 3)
                            <br> {
                            <br>  lcd.clear();
                            <br>  lcd.setCursor(0, 1);
                            <br>  lcd.setBacklight(GREEN);
                            <br>   lcd.print(\" EAU > 75% \");        
                            <br>}
                            <br> }
                            <br> }
                            <br> }



                            </p>
                            <br> <br>
                            </div>

                            </div>

                     <div class=\"child-tab\">
                      <input type=\"checkbox\" name=\"sub-tab\" id=\"tab-15\">
                      <label for=\"tab-15\">
                        <span>Language html / css</span>
                        <div class=\"icon\"><i class=\"fas fa-plus\"></i></div>
                      </label>
                      <div class=\"sub-content\">
                        <p>Cette premiere année d'IUT ma permis de decouvrire le language html / css ainsi que Symfony par la suite. J'ai du 
                        crée dans un premier temps un blog sur un theme choisi par moi-meme en utilisant le Notpad++ et dans un deuxieme temps un site qui est celui ci.
                       
                        <div class=centrer6> 
                        <br>Voici ci dessous quelque image de mon ancien blog :  </p>
                                                <p><img src={{asset('photos/site.jpg')}} class=\"img4\">
                        
                                                 <p><img src={{asset('photos/questionnaire.jpg')}} class=\"img4\">
                                                
                          <p>Tout en étant résponsive :
                          <br>
                                                 <img src={{asset('photos/responsive.jpg')}} class=\"img4\">
                         </div>
                      </div>
                 </div>
                      
                    </div>

                 <br><br> 
    


    
    <div class=\"parent-tab tab-3\">
      <input type=\"checkbox\" name=\"tab\" id=\"tab-2\">
      <label for=\"tab-2\">
        <span>Systeme electroniques</span>
        <div class=\"icon\"><i class=\"fas fa-plus\"></i></div>
      </label>
      <div class=\"content\">

                     <div class=\"child-tab\">
                      <input type=\"checkbox\" name=\"sub-tab\" id=\"tab-9\">
                      <label for=\"tab-9\">
                        <span>Signaux continus</span>
                        <div class=\"icon\"><i class=\"fas fa-plus\"></i></div>
                      </label>
                      <div class=\"sub-content\">
                        <p>Cette premiere année nous avons manipuler de la plaque d'essaies qui n'était pas bien nouveau pour ma part, on n'a donc appris
                        utiliser la plaque a troue pour manipuler et obtenir des mesures via le generayeur de tension et le multimetre. Voici quelque image 
                        de réalisation de courant continus :</p>
                        <p><img src={{asset('photos/a1.jpg')}} class=\"img4\">
                           </p>
                           <p><img src={{asset('photos/a2.JPG')}} class=\"img4\">
                           </p>
                           <p><img src={{asset('photos/a3.JPG')}} class=\"img4\">
                           </p>
                      </div>
                    </div>



                     <div class=\"child-tab\">
                      <input type=\"checkbox\" name=\"sub-tab\" id=\"tab-10\">
                      <label for=\"tab-10\">
                        <span>Signaux alternatifs</span>
                        <div class=\"icon\"><i class=\"fas fa-plus\"></i></div>
                      </label>
                      <div class=\"sub-content\">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing thelit dolor. Utfacilis labore, exercitationem fuga minima a illo modi vitaerse dignissimos? Vero?</p>

                      </div>
                      
                    </div>
                      
        </div>
    <br><br>
    

   
    <div class=\"parent-tab tab-3\">
      <input type=\"checkbox\" name=\"tab\" id=\"tab-3\">
      <label for=\"tab-3\" class=\"tab-3\">
        <span>Réseaux</span>
        <div class=\"icon\"><i class=\"fas fa-plus\"></i></div>
      </label>
      <div class=\"content\">
        
        


                    <div class=\"child-tab\">
                      <input type=\"checkbox\" name=\"sub-tab\" id=\"tab-7\">
                      <label for=\"tab-7\">
                        <span>Packet Tracert</span>
                        <div class=\"icon\"><i class=\"fas fa-plus\"></i></div>
                      </label>
                      <div class=\"sub-content\">
                        <p>Packet tracer a été pour moi cette année une nouvelle technologies que j'ai trouver tres interressant car cela nous permet de nous entrainer au develloppement de mini réseaux, a savoir bien brancher les switchs et pc,...
                        <br>Voici ci dessous un mini réseaux crée pour une mini entreprise qui contient 4 LAN ou chacun d'entre eux est independant des uns des autres car chaque LAN a son propre Vlan :
                           <p><img src={{asset('photos/packet.png')}} class=\"img4\">
                           </p>
                        </p>
                      </div>
                    </div>
                    
                    


                    <div class=\"child-tab\">
                      <input type=\"checkbox\" name=\"sub-tab\" id=\"tab-8\">
                      <label for=\"tab-8\">
                        <span>Configuration switch</span>
                        <div class=\"icon\"><i class=\"fas fa-plus\"></i></div>
                      </label>
                      <div class=\"sub-content\">
                        <p>La configuration de switch est quelque chose de tout nouveau mais que j'ai apprécier a travailler dessus car j'ai beaucoup aimer le coter manipulation de commandes pour configurer les switchs. Que sa soit pour recuperer des 
                        configuration de switch via le tftp, le ssh ou encors pour connecter deux pc entre eux et encors ... 
                        <br>Voici donc quelque images de realisation de cablage entre deux pc et quelque extrait de configuration de switch :</p>
                        <p>Voici une configuration qui nous a servis lors d'une realisation de topologies pour une mini entreprise :</p>
                        
                        <p><img src={{asset('photos/conf.jpg')}} class=\"img4\">
                           </p>
                           <p>Cablage simple de réalisation :</p>
                           <p><img src={{asset('photos/cablage.jpg')}} class=\"img4\">
                           </p>
                           <p><img src={{asset('photos/preuve.jpg')}} class=\"img4\">
                           </p>
                      </div>
                    </div>
                 
       </div>
      <br><br>
    

    
    <div class=\"parent-tab tab-3\">
      <input type=\"checkbox\" name=\"tab\" id=\"tab-6\">
      <label for=\"tab-6\">
        <span>Machine Virtuelle</span>
        <div class=\"icon\"><i class=\"fas fa-plus\"></i></div>
      </label>
      <div class=\"content\">
       



                      <div class=\"child-tab\">
                                <input type=\"checkbox\" name=\"sub-tab\" id=\"tab-11\">
                                <label for=\"tab-11\">
                                  <span>Linux</span>
                                  <div class=\"icon\"><i class=\"fas fa-plus\"></i></div>
                                </label>
                                <div class=\"sub-content\">
                              <p>Lors de mon experience en cette premiere année de Réseaux et télécoms je peux maintenant installer des machines virtuelles sur les pc et a ajouter la fonctionnaliter du dossier partager avec windows. 
                                </p>                         
                                    <p><img src={{asset('photos/graphisme.png')}} class=\"img4\">
                                    </p>

                                  <p>Mais j'ai aussi decouvert linux et ces nombreuses commandes via le terminale.
                                  <br>Grace a l'entrainement que ma fournie le jeu Gameshell et ces 42 missions j'ai pu i faire mon journal avec quelque commande interresante :</p>
                                        <p>
                                            <br>JOURNAL :
                                            <br>

                                          <br> Gameshell :
                                            <br>
                                          <br> q14)alias la='ls -A'
                                          <br>     la
                                          <br>     cat .joli_caillou
                                          <br> q15)nano ~Foret/Hutte/Coffre/journal.txt
                                            <br>   Et ecrire dedans
                                          <br> q16)alias journal='nano ~Foret/Hutte/Coffre/journal.txt'
                                          <br> q17)rm *_reine_araignee_*
                                          <br> q18)xeyes 
                                          <br>     xeyes &
                                          <br> q19)Apres avoirtrouver la piece de bronze : mv *_piece_de_bronze_* ~/Foret/Hutte/Coffre/
                                          <br> q20)Commande avancer : mv -v */*/*/*argent* ~/Foret/Hutte/Coffre/
                                          <br> q21)find . -type f -iname *or* ~/Foret/Hutte/Coffre/
                                            <br>    mv -v */*/*/*or* ~/Foret/Hutte/Coffre/
                                          <br>     mv -v */*/*/*oR* ~/Foret/Hutte/Coffre/
                                            <br>q22)head -6 Livre_de_potions/page_07 
                                          <br> q23) tail -n 9 ~/Montagne/../page_12
                                          <br> q24) cat Livre_de_potions/page_01 Livre_de_potions/page_02
                                          <br> q25) cat Livre_de_potions/page_03  Livre_de_potions/page_04 | tail -16
                                            <br>q26) head -6 Livre_de_potions/page_13 | tail -3
                                          <br> q27) ps, apres kill 58752
                                          <br> q28)ps, kill -s KILL 67233, kill -s KILL 64369
                                          <br>  q29)pstree -p \$\$ , kill -s TERM 3110 3111 3112 
                                          <br>       rm -v *charbon*
                                          <br>  q30)Calcule mentale
                                          <br> q31)gsh check < Mathematiques_en_premiere_annee
                                          <br> q32)ls grimoire_* > Tiroire/inventaire.txt
                                          <br> q33)grep -l -i gsh grimoire_* 2>/dev/null
                                          <br>  q34)..., ,/merlin < carte_du_ciel 2> merlin.txt  
                                          <br>       gsh check < merlin.txt
                                          <br> q35)chmod +x Chambre_du_roi/    puis i rentrer
                                          <br> q36)chmod +r .bout_de_papier_secret  
                                          <br>       cat .bout_de_papier_secret  et rentrer le code
                                          <br> q37)chmod -R 777 Coffre_fort/ 
                                          <br>       mv couronne ~/Foret/Hutte/Coffre     puis rentrer les 3 chiffres
                                          <br> q38)find . -type f -exec grep -H rubis '{}' \\ ;  
                                          <br>       mv ./d7dc0.../5819 ~/Foret/Hutte/Coffre/
                                          <br> q39)find . -type f -exec grep -H rubis '{}' \\ ; | xargs mv -v -t ~/Foret/Hutte/Coffre
                                          <br> q40)grep Roi *_p_a_r_c_h_e_m_i_n_* | grep -v 'PAYE'  et dire la dette 
                                          <br> q41)grep -v 'PAYE' *_p_a_r_c_h_e_m_i_n_* | wc -l  et donner le nombre d'objet impayes
                                          <br>  q42)tr « a-z » « o-za-n » < message_secret
                                    <br>  </p>
                                </div>
                    </div>



                     <div class=\"child-tab\">
                      <input type=\"checkbox\" name=\"sub-tab\" id=\"tab-12\">
                      <label for=\"tab-12\">
                        <span>Serveur / Client</span>
                        <div class=\"icon\"><i class=\"fas fa-plus\"></i></div>
                      </label>
                      <div class=\"sub-content\">
                        <p>Lors de cette premiere année j'ai pus decouvrire la création d'un client et d'un serveur via l'utlisation d'une machine virtuelle, ou l'on a appris a crée 2 
                        interface réseaux, ou dans chaque serveur on a cree des dossier partager entre machine a partir de commande.   </p>
                      </div>
                      
                    </div>
  </div>
  <br><br>
  </div>

    <span>
    <h6>
        <a href=\"http://copyright.be\" target=\"_blank\">Copyright 2023 SAé1.4.com - Tous droits réservés</a>
    </h6>
    </span>


\t\t
{% endblock %}", "portofolio/portofolio.html.twig", "C:\\Users\\angyp\\sym\\Symfony_angy\\Test\\TP1\\templates\\portofolio\\portofolio.html.twig");
    }
}

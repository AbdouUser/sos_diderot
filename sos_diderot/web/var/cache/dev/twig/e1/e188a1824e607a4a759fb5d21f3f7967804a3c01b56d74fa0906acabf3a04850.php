<?php

/* SOSDiderot/inscriptionPro.html.twig */
class __TwigTemplate_df33fd00cf4e468416b3915c98c328a1b8e7860dbf78808d1e51186c1900dbf9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "SOSDiderot/inscriptionPro.html.twig", 1);
        $this->blocks = [
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SOSDiderot/inscriptionPro.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SOSDiderot/inscriptionPro.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_body($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "    <div class=\"container\">
        <div class=\"row\">
        <div class=\"col-lg-4 col-xs-4 col-md-4 col-xl-4  mt-3\" ></div>
   \t\t\t <div id=\"formulaire\" class=\"col-lg-4 col-xs-4 col-md-4 mt-3 col-xl-4 bg-light\">
                        <form action=\"/staff/add\" method=\"post\" class=\"ui form\" onsubmit=\"return validateForm();\">
                            <div class=\"form-style-5\">
                                <fieldset>
                                    <legend>Inscription professionnel</legend>
                                    <input id=\"nom\" title=\"\" type=\"text\" name=\"nom\" placeholder=\"Votre nom *\" \" onblur=\"verifnom()\"
                                    required>
                                    <input id=\"prenom\" title=\"\"type=\"text\" name=\"prenom\" placeholder=\"Votre prénom *\" \"
                                    onblur=\"verifprenom()\" required>
                                    <input id=\"email\"type=\"email\" name=\"email\" placeholder=\"Votre e-email *\" onblur=\"verifMail()\"required>
                                    <input id=\"mdp\" title=\"\"type=\"password\" name=\"password\" placeholder=\"Votre mot de passe *\" onblur=\"verifmdp()\" required>
                                    <input id=\"mdpc\" type=\"password\" name=\"pswc\" placeholder=\"Confirmation mot de passe *\"
                                           onblur=\"verifmdpMatch()\" required>
                                           <span>Ufr&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
                                           <select data-trigger=\"\" name=\"ufr\">
                                               <option placeholder=\"\" value=\"inf\">Informatique</option>
                                               <option value=\"phy\">Physique</option>
                                               <option value=\"sci\">Science et nature</option>
                                               <option  value=\"his\">Histoire</option>
                                               <option  value=\"chi\">Chimie</option>
                                             </select>\t</br></br>
                                             <span>Service&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
                               \t\t\t\t     <select data-trigger=\"\" name=\"service\">
                                               <option  value=\"soci\" placeholder=\"\">Social</option>
                                               <option value=\"sch\">Scolarité</option>
                                               <option value=\"bri\" >Relations Internationnales</option>
                                               <option value=\"spr\">Service des sports</option>
                                               <option value=\"sente\">Médecine de prévention</option>
                                               <option value=\"ense\">Enseignement</option>
                                             </select>\t</br></br>
                                             <span>Métier&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp</span>
                                            <select data-trigger=\"\" name=\"job\">
                                               <option value=\"secr\" placeholder=\"\">secretaire</option>
                                               <option value=\"prof\">Professeur</option>
                                               <option value=\"resp\">responsable pédagogique</option>
                                               <option value=\"resp\">Médecin</option>
                                               <option value=\"resp\">Infirmier</option>
                                             </select>
                                             <br><br>
                                             <span>Université&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
                                            <select data-trigger=\"\" name=\"university\">
                                               <option value=\"p7\" placeholder=\"\">Université Paris Diderot</option>
                                               <option value=\"p6\">Université Paris Descarte</option>
                                               <option value=\"p5\">Institut de Physique</option>
                                             </select>
                                                                </br></br>
                                    <input id=\"submit\" type=\"submit\" value=\"INSCRIPTION\"/>
                                </fieldset>
                            </div>
                        </form>
             </div>
\t\t</div>
\t</div>
\t \t";
        // line 59
        $this->displayBlock('javascripts', $context, $blocks);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function block_javascripts($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 60
        echo "        \t<script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/formulaire.js"), "html", null, true);
        echo "\" ></script>
       \t";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "SOSDiderot/inscriptionPro.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  126 => 60,  108 => 59,  50 => 3,  41 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}
{% block body %}
    <div class=\"container\">
        <div class=\"row\">
        <div class=\"col-lg-4 col-xs-4 col-md-4 col-xl-4  mt-3\" ></div>
   \t\t\t <div id=\"formulaire\" class=\"col-lg-4 col-xs-4 col-md-4 mt-3 col-xl-4 bg-light\">
                        <form action=\"/staff/add\" method=\"post\" class=\"ui form\" onsubmit=\"return validateForm();\">
                            <div class=\"form-style-5\">
                                <fieldset>
                                    <legend>Inscription professionnel</legend>
                                    <input id=\"nom\" title=\"\" type=\"text\" name=\"nom\" placeholder=\"Votre nom *\" \" onblur=\"verifnom()\"
                                    required>
                                    <input id=\"prenom\" title=\"\"type=\"text\" name=\"prenom\" placeholder=\"Votre prénom *\" \"
                                    onblur=\"verifprenom()\" required>
                                    <input id=\"email\"type=\"email\" name=\"email\" placeholder=\"Votre e-email *\" onblur=\"verifMail()\"required>
                                    <input id=\"mdp\" title=\"\"type=\"password\" name=\"password\" placeholder=\"Votre mot de passe *\" onblur=\"verifmdp()\" required>
                                    <input id=\"mdpc\" type=\"password\" name=\"pswc\" placeholder=\"Confirmation mot de passe *\"
                                           onblur=\"verifmdpMatch()\" required>
                                           <span>Ufr&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
                                           <select data-trigger=\"\" name=\"ufr\">
                                               <option placeholder=\"\" value=\"inf\">Informatique</option>
                                               <option value=\"phy\">Physique</option>
                                               <option value=\"sci\">Science et nature</option>
                                               <option  value=\"his\">Histoire</option>
                                               <option  value=\"chi\">Chimie</option>
                                             </select>\t</br></br>
                                             <span>Service&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
                               \t\t\t\t     <select data-trigger=\"\" name=\"service\">
                                               <option  value=\"soci\" placeholder=\"\">Social</option>
                                               <option value=\"sch\">Scolarité</option>
                                               <option value=\"bri\" >Relations Internationnales</option>
                                               <option value=\"spr\">Service des sports</option>
                                               <option value=\"sente\">Médecine de prévention</option>
                                               <option value=\"ense\">Enseignement</option>
                                             </select>\t</br></br>
                                             <span>Métier&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp</span>
                                            <select data-trigger=\"\" name=\"job\">
                                               <option value=\"secr\" placeholder=\"\">secretaire</option>
                                               <option value=\"prof\">Professeur</option>
                                               <option value=\"resp\">responsable pédagogique</option>
                                               <option value=\"resp\">Médecin</option>
                                               <option value=\"resp\">Infirmier</option>
                                             </select>
                                             <br><br>
                                             <span>Université&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
                                            <select data-trigger=\"\" name=\"university\">
                                               <option value=\"p7\" placeholder=\"\">Université Paris Diderot</option>
                                               <option value=\"p6\">Université Paris Descarte</option>
                                               <option value=\"p5\">Institut de Physique</option>
                                             </select>
                                                                </br></br>
                                    <input id=\"submit\" type=\"submit\" value=\"INSCRIPTION\"/>
                                </fieldset>
                            </div>
                        </form>
             </div>
\t\t</div>
\t</div>
\t \t{% block javascripts %}
        \t<script src=\"{{asset('js/formulaire.js')}}\" ></script>
       \t{% endblock %}
{% endblock %}
", "SOSDiderot/inscriptionPro.html.twig", "C:\\Users\\Admin\\PhpstormProjects\\projet_web\\app\\Resources\\views\\SOSDiderot\\inscriptionPro.html.twig");
    }
}

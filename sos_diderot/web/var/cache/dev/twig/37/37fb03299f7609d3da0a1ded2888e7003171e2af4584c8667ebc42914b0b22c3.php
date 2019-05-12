<?php

/* SOSDiderot/SOSDiderot.html.twig */
class __TwigTemplate_9c1895f5558812e43ce0a78a601ff1f224bef5343a3ace47d09c2e847d46a275 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "SOSDiderot/SOSDiderot.html.twig", 1);
        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SOSDiderot/SOSDiderot.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SOSDiderot/SOSDiderot.html.twig"));

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
        echo "
    <div class=\"cover-background-animation\"></div>
    <div class=\"intro-SOS\">
        <h2>
            <center>Prenez rendez-vous en ligne chez un cadre de l'université de Paris</center>
        </h2>
        <h6>
            <center>C'est immédiat, simple et gratuit.</center>
        </h6>
    </div>
    ";
        // line 13
        $this->loadTemplate("search.html.twig", "SOSDiderot/SOSDiderot.html.twig", 13)->display($context);
        // line 14
        echo "    <div class=\"row\">
        <div class=\"col-lg-8 col-xs-8 col-md-8 col-xl-8 mx-auto mt-5\">
            <center>
                <font color=\"white\"><h3>Vous êtes professionnel de l'université de Paris ? <br> Découvrez la prise de
                        rendez-vous en ligne !</h3></font><br>
                <a href=\"/staff/add\"> <input type=\"submit\" value=\"Commencer\"
                                             class=\"btn btn-primary mb-2 mx-auto d-block\"></a>

            </center>
        </div>

        <!--
   <div class=\"col-lg-4 col-xl-4 col-xs-4 col-md-4 toure\">
      <img src=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/toure.png"), "html", null, true);
        echo "\"/>
   </div>
-->
    </div>



";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "SOSDiderot/SOSDiderot.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 27,  63 => 14,  61 => 13,  49 => 3,  40 => 2,  11 => 1,);
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

    <div class=\"cover-background-animation\"></div>
    <div class=\"intro-SOS\">
        <h2>
            <center>Prenez rendez-vous en ligne chez un cadre de l'université de Paris</center>
        </h2>
        <h6>
            <center>C'est immédiat, simple et gratuit.</center>
        </h6>
    </div>
    {% include('search.html.twig') %}
    <div class=\"row\">
        <div class=\"col-lg-8 col-xs-8 col-md-8 col-xl-8 mx-auto mt-5\">
            <center>
                <font color=\"white\"><h3>Vous êtes professionnel de l'université de Paris ? <br> Découvrez la prise de
                        rendez-vous en ligne !</h3></font><br>
                <a href=\"/staff/add\"> <input type=\"submit\" value=\"Commencer\"
                                             class=\"btn btn-primary mb-2 mx-auto d-block\"></a>

            </center>
        </div>

        <!--
   <div class=\"col-lg-4 col-xl-4 col-xs-4 col-md-4 toure\">
      <img src=\"{{ asset('img/toure.png') }}\"/>
   </div>
-->
    </div>



{% endblock %}
", "SOSDiderot/SOSDiderot.html.twig", "/var/www/web2/projet_web/app/Resources/views/SOSDiderot/SOSDiderot.html.twig");
    }
}

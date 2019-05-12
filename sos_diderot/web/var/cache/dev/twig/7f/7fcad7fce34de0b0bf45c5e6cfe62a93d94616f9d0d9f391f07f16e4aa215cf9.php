<?php

/* SOSDiderot/passwordUpdate.html.twig */
class __TwigTemplate_474bf7136722c3790e762084647b539cfe5e4e2adab4d87c6db2f08ffc7388d6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "SOSDiderot/passwordUpdate.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SOSDiderot/passwordUpdate.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SOSDiderot/passwordUpdate.html.twig"));

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
<div class=\"wrapper --bg-light\">

    <div class=\"mx-2\">
        <div class=\"container\">
          <div class=\"row\">
            <div class=\"col-lg-6 col-xl-6 col-xs-6 col-md-6 col-centered\">
                <center> ";
        // line 10
        $this->loadTemplate("flash-messages.html.twig", "SOSDiderot/passwordUpdate.html.twig", 10)->display($context);
        echo " </center>
            </div>
          </div>

            <section class=\"row\">
                <div class=\"col-lg-6 col-xl-6 col-xs-6 col-md-6 bg-light mx-auto my-3 p-4\">
                    <h5 class=\"text-dark text-center mb-4\">
                        Changer le mot de passe
                    </h5>
                    <form action=\"/student/passwordUpdate\" method=\"post\" class=\"form mb-3\" data-parsley-validate
                          onsubmit=\"return validateForm();\">
                        <input name=\"pswActuelle\" type=\"password\" class=\"form-control mb-2\" required
                               placeholder=\"Mot de passe actuelle\"/>
                        <input id=\"pswNouv\" name=\"pswNouv\" type=\"password\" class=\"form-control mb-2\" onblur=\"verifmdp()\"
                               required placeholder=\"Nouveau mot de passe\"/>
                        <input id=\"pswNouvC\" name=\"pswNouvConfi\" type=\"password\" class=\"form-control mb-2\"
                               onblur=\"verifmdpMatch()\" required placeholder=\"Retapez le nouveau mot de passe\"/>
                        <input type=\"submit\" value=\"Enregistrer les modifications\" class=\"mb-2 mt-3 btn btn-primary mx-auto d-block\"/>
                    </form>
                    <a href=\"#\" class=\"text-info text-center d-block\">
                        Mot de passe oublié?
                    </a>

                </div>
            </section>
        </div>
    </div>

</div>
<script src=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/passwordUpdate.js"), "html", null, true);
        echo "\" ></script>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "SOSDiderot/passwordUpdate.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 39,  58 => 10,  49 => 3,  40 => 2,  11 => 1,);
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

<div class=\"wrapper --bg-light\">

    <div class=\"mx-2\">
        <div class=\"container\">
          <div class=\"row\">
            <div class=\"col-lg-6 col-xl-6 col-xs-6 col-md-6 col-centered\">
                <center> {%include('flash-messages.html.twig')%} </center>
            </div>
          </div>

            <section class=\"row\">
                <div class=\"col-lg-6 col-xl-6 col-xs-6 col-md-6 bg-light mx-auto my-3 p-4\">
                    <h5 class=\"text-dark text-center mb-4\">
                        Changer le mot de passe
                    </h5>
                    <form action=\"/student/passwordUpdate\" method=\"post\" class=\"form mb-3\" data-parsley-validate
                          onsubmit=\"return validateForm();\">
                        <input name=\"pswActuelle\" type=\"password\" class=\"form-control mb-2\" required
                               placeholder=\"Mot de passe actuelle\"/>
                        <input id=\"pswNouv\" name=\"pswNouv\" type=\"password\" class=\"form-control mb-2\" onblur=\"verifmdp()\"
                               required placeholder=\"Nouveau mot de passe\"/>
                        <input id=\"pswNouvC\" name=\"pswNouvConfi\" type=\"password\" class=\"form-control mb-2\"
                               onblur=\"verifmdpMatch()\" required placeholder=\"Retapez le nouveau mot de passe\"/>
                        <input type=\"submit\" value=\"Enregistrer les modifications\" class=\"mb-2 mt-3 btn btn-primary mx-auto d-block\"/>
                    </form>
                    <a href=\"#\" class=\"text-info text-center d-block\">
                        Mot de passe oublié?
                    </a>

                </div>
            </section>
        </div>
    </div>

</div>
<script src=\"{{asset('js/passwordUpdate.js')}}\" ></script>

{% endblock %}
", "SOSDiderot/passwordUpdate.html.twig", "/var/www/web2/sos_diderot/sos_diderot/app/Resources/views/SOSDiderot/passwordUpdate.html.twig");
    }
}

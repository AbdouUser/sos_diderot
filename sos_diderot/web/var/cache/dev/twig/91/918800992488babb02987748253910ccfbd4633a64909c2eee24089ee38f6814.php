<?php

/* SOSDiderot/staff/email-updatePro.html.twig */
class __TwigTemplate_d4d99d9c3aa6061e8187cb0eb56c06ab443311d81b7943f7ac3091e397299a48 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "SOSDiderot/staff/email-updatePro.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SOSDiderot/staff/email-updatePro.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SOSDiderot/staff/email-updatePro.html.twig"));

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
        $this->loadTemplate("flash-messages.html.twig", "SOSDiderot/staff/email-updatePro.html.twig", 10)->display($context);
        echo " </center>
            </div>
          </div>


            <section class=\"row\">
                <div class=\"col-lg-6 col-xl-6 col-xs-6 col-md-6 bg-light mx-auto my-3 p-4\">
                    <h5 class=\"text-dark text-center mb-4\">
                        Modifier l'adresse email
                    </h5>
                    <p class=\"mb-3\">
                        Lorsque vous changez l'adresse email, l'ancien sera écrasé
                    </p>
                    <form class=\"form mb-3\"  action=\"/staff/email-updatee\" method=\"post\">
                        <input name=\"email\" type=\"email\" class=\"form-control\" required placeholder=\"Nouveau adresse email\"/>
                        <input type=\"submit\" value=\"Enregistrer les modifications\" class=\"btn btn-primary mt-3 mx-auto d-block\"/>
                    </form>
                </div>
            </section>
        </div>
    </div>

</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "SOSDiderot/staff/email-updatePro.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 10,  49 => 3,  40 => 2,  11 => 1,);
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
                        Modifier l'adresse email
                    </h5>
                    <p class=\"mb-3\">
                        Lorsque vous changez l'adresse email, l'ancien sera écrasé
                    </p>
                    <form class=\"form mb-3\"  action=\"/staff/email-updatee\" method=\"post\">
                        <input name=\"email\" type=\"email\" class=\"form-control\" required placeholder=\"Nouveau adresse email\"/>
                        <input type=\"submit\" value=\"Enregistrer les modifications\" class=\"btn btn-primary mt-3 mx-auto d-block\"/>
                    </form>
                </div>
            </section>
        </div>
    </div>

</div>
{% endblock %}
", "SOSDiderot/staff/email-updatePro.html.twig", "/var/www/web2/projet_web/app/Resources/views/SOSDiderot/staff/email-updatePro.html.twig");
    }
}

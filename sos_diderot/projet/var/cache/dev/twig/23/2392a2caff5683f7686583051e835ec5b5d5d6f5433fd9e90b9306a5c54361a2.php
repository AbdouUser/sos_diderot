<?php

/* SOSDiderot/rendez_vous.html.twig */
class __TwigTemplate_62bd1d0c4dcfcf24366561006fc8113f79d78b6dbb47b974d4fc0dcf0b7ce283 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "SOSDiderot/rendez_vous.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SOSDiderot/rendez_vous.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SOSDiderot/rendez_vous.html.twig"));

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
                <div class=\"col-lg-6 col-xs-6 col-md-6 col-xl-6 col-centered\">
                    <center> ";
        // line 9
        $this->loadTemplate("flash-messages.html.twig", "SOSDiderot/rendez_vous.html.twig", 9)->display($context);
        echo " </center>
                </div>
            </div>

            <!-- profile details -->
            <section class=\"row\">
                <div class=\"col-lg-7 col-md-7 col-xl-7 col-xs-7 mx-auto bg-light py-2 mt-6\">
                    <div class=\"col-lg-12\">
                        <!-- user name -->
                        <h3 class=\"text-center text-dark col-lg-12 text-capitalize mt-2\">
                            <font color=\"DeepSkyBlue\" >Mes rendez vous</font>
                        </h3>
                    </div>
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
        return "SOSDiderot/rendez_vous.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 9,  49 => 3,  40 => 2,  11 => 1,);
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
                <div class=\"col-lg-6 col-xs-6 col-md-6 col-xl-6 col-centered\">
                    <center> {%include('flash-messages.html.twig')%} </center>
                </div>
            </div>

            <!-- profile details -->
            <section class=\"row\">
                <div class=\"col-lg-7 col-md-7 col-xl-7 col-xs-7 mx-auto bg-light py-2 mt-6\">
                    <div class=\"col-lg-12\">
                        <!-- user name -->
                        <h3 class=\"text-center text-dark col-lg-12 text-capitalize mt-2\">
                            <font color=\"DeepSkyBlue\" >Mes rendez vous</font>
                        </h3>
                    </div>
                 </div>
            </section>


        </div>
    </div>
</div>


{% endblock %}
", "SOSDiderot/rendez_vous.html.twig", "/var/www/web2/projet_web/app/Resources/views/SOSDiderot/rendez_vous.html.twig");
    }
}

<?php

/* SOSDiderot/settings.html.twig */
class __TwigTemplate_182cb56e0e42698213999329ae09d2ad2c0b28df29ab05ded2ba32e1426fd237 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "SOSDiderot/settings.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SOSDiderot/settings.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SOSDiderot/settings.html.twig"));

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
              <div class=\"col-lg-6 col-md-6 col-xs-6 col-xl-6 col-centered\">
                  <center>";
        // line 9
        $this->loadTemplate("flash-messages.html.twig", "SOSDiderot/settings.html.twig", 9)->display($context);
        echo "  </center>
              </div>
          </div>
            <div class=\"row\">
              <div class=\"col-lg-6 col-md-6 col-xs-6 col-xl-6 col-centered\">
                  <center> ";
        // line 14
        $this->loadTemplate("flash-messages.html.twig", "SOSDiderot/settings.html.twig", 14)->display($context);
        echo " </center>
              </div>
            </div>

            <section class=\"row\">
                <div class=\"col-lg-6 col-md-6 col-xs-6 col-xl-6 bg-light mx-auto my-3 p-4\">
                    <h5 class=\"text-dark text-center mb-4\">
                        Paramétres de compte
                    </h5>
                    <a href=\"/student/email-update\" class=\"text-secondary d-flex p-2 mb-2 decoration-none\">
                        Modifier l'adresse email
                        <img src=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/svg/right-arrow.png"), "html", null, true);
        echo "\" class=\"ml-auto r-arrow\"/>
                    </a>
                    <a href=\"/student/passwordUpdate\" class=\"text-secondary d-flex p-2 mb-2 decoration-none\">
                        Modifier le mot de passe
                        <img src=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/svg/right-arrow.png"), "html", null, true);
        echo "\" class=\"ml-auto r-arrow\"/>
                    </a>
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
        return "SOSDiderot/settings.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 29,  79 => 25,  65 => 14,  57 => 9,  49 => 3,  40 => 2,  11 => 1,);
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
              <div class=\"col-lg-6 col-md-6 col-xs-6 col-xl-6 col-centered\">
                  <center>{%include('flash-messages.html.twig')%}  </center>
              </div>
          </div>
            <div class=\"row\">
              <div class=\"col-lg-6 col-md-6 col-xs-6 col-xl-6 col-centered\">
                  <center> {%include('flash-messages.html.twig')%} </center>
              </div>
            </div>

            <section class=\"row\">
                <div class=\"col-lg-6 col-md-6 col-xs-6 col-xl-6 bg-light mx-auto my-3 p-4\">
                    <h5 class=\"text-dark text-center mb-4\">
                        Paramétres de compte
                    </h5>
                    <a href=\"/student/email-update\" class=\"text-secondary d-flex p-2 mb-2 decoration-none\">
                        Modifier l'adresse email
                        <img src=\"{{asset('img/svg/right-arrow.png')}}\" class=\"ml-auto r-arrow\"/>
                    </a>
                    <a href=\"/student/passwordUpdate\" class=\"text-secondary d-flex p-2 mb-2 decoration-none\">
                        Modifier le mot de passe
                        <img src=\"{{asset('img/svg/right-arrow.png')}}\" class=\"ml-auto r-arrow\"/>
                    </a>
                </div>
            </section>
        </div>
    </div>
</div>

{% endblock %}
", "SOSDiderot/settings.html.twig", "/var/www/web2/sos_diderot/sos_diderot/app/Resources/views/SOSDiderot/settings.html.twig");
    }
}

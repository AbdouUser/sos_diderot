<?php

/* SOSDiderot/profil.html.twig */
class __TwigTemplate_4f6c71b72821a267c0200de42ce0e369d33585b01aa45c379d7ba11a9f1c4fcd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "SOSDiderot/profil.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SOSDiderot/profil.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SOSDiderot/profil.html.twig"));

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
        echo "<div class=\"wrapper --bg-light\">
    <div class=\"mx-2\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-6 col-xl-6 col-xs-6 col-md-6 col-centered\">
                    <center> ";
        // line 8
        $this->loadTemplate("flash-messages.html.twig", "SOSDiderot/profil.html.twig", 8)->display($context);
        echo " </center>
                </div>
            </div>
            <!-- profile details -->
            <section class=\"row\">
                <div class=\"col-lg-7 col-md-7 col-xl-7 col-xs-7 mx-auto bg-light py-2 mt-6\">
                    <div class=\"col-lg-12 col-md-12 col-xl-12 col-xs-12\">
                        <!-- user name -->
                        <h3 class=\"text-center text-dark col-lg-12 text-capitalize mt-2\">
                            ";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", []), "get", [0 => "nom"], "method"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", []), "get", [0 => "prenom"], "method"), "html", null, true);
        echo "
                        </h3>


                        <!-- about details -->
                        <br>
                        <div class=\"col-lg-12 col-md-12 col-xl-12 col-xs-12 px-0 \">
                          <div class=\"align-items-start d-flex mt-1\">

                                Formation actuelle: ";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", []), "get", [0 => "formation"], "method"), "html", null, true);
        echo "
                           </div>

                           <div class=\"align-items-start d-flex mt-1\">

                                 Université  actuelle: ";
        // line 31
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", []), "get", [0 => "university"], "method"), "html", null, true);
        echo "

                            </div>
                        </div>
                                <!-- profile edit -->
                                <div class=\"col-lg-12 col-md-12 col-xl-12 col-xs-12 row justify-content-center mx-0 mt-2\">
                                <div class=\"d-flex flex-column align-items-center pointable mx-2 mt-4\" data-toggle=\"modal\"
                                     data-target=\"#profile-editor\">
                                    <img src=\"/img/svg/user-edit.svg\" class=\"profile-edit-icon d-block\"/>
                                    <span class=\"--text-primary text-center font-weight-bold font-sm mt-1\">
                                        Personaliser<br/>
                                        profil
                                    </span>
                                </div>
                        </div>
                    </div>
                </div>
            </section>
          ";
        // line 49
        $this->loadTemplate("profile-editor.html.twig", "SOSDiderot/profil.html.twig", 49)->display($context);
        // line 50
        echo "        </div>
    </div>
</div>


";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "SOSDiderot/profil.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  113 => 50,  111 => 49,  90 => 31,  82 => 26,  68 => 17,  56 => 8,  49 => 3,  40 => 2,  11 => 1,);
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
            <!-- profile details -->
            <section class=\"row\">
                <div class=\"col-lg-7 col-md-7 col-xl-7 col-xs-7 mx-auto bg-light py-2 mt-6\">
                    <div class=\"col-lg-12 col-md-12 col-xl-12 col-xs-12\">
                        <!-- user name -->
                        <h3 class=\"text-center text-dark col-lg-12 text-capitalize mt-2\">
                            {{app.session.get('nom')}} {{app.session.get('prenom')}}
                        </h3>


                        <!-- about details -->
                        <br>
                        <div class=\"col-lg-12 col-md-12 col-xl-12 col-xs-12 px-0 \">
                          <div class=\"align-items-start d-flex mt-1\">

                                Formation actuelle: {{app.session.get('formation')}}
                           </div>

                           <div class=\"align-items-start d-flex mt-1\">

                                 Université  actuelle: {{app.session.get('university')}}

                            </div>
                        </div>
                                <!-- profile edit -->
                                <div class=\"col-lg-12 col-md-12 col-xl-12 col-xs-12 row justify-content-center mx-0 mt-2\">
                                <div class=\"d-flex flex-column align-items-center pointable mx-2 mt-4\" data-toggle=\"modal\"
                                     data-target=\"#profile-editor\">
                                    <img src=\"/img/svg/user-edit.svg\" class=\"profile-edit-icon d-block\"/>
                                    <span class=\"--text-primary text-center font-weight-bold font-sm mt-1\">
                                        Personaliser<br/>
                                        profil
                                    </span>
                                </div>
                        </div>
                    </div>
                </div>
            </section>
          {% include('profile-editor.html.twig') %}
        </div>
    </div>
</div>


{% endblock %}
", "SOSDiderot/profil.html.twig", "/var/www/web2/sos_diderot/sos_diderot/app/Resources/views/SOSDiderot/profil.html.twig");
    }
}

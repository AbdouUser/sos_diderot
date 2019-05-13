<?php

/* SOSDiderot/staff/profilePro.html.twig */
class __TwigTemplate_c55a6a2e039deab1b33329f66a8c90bdcb38d5d8419a4ea5d515f9370f5eecbd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "SOSDiderot/staff/profilePro.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SOSDiderot/staff/profilePro.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SOSDiderot/staff/profilePro.html.twig"));

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
        $this->loadTemplate("flash-messages.html.twig", "SOSDiderot/staff/profilePro.html.twig", 8)->display($context);
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
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "name", []), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "firstName", []), "html", null, true);
        echo "
                        </h3>


                        <!-- about details -->
                        <br>
                        <div class=\"col-lg-12 col-md-12 col-xl-12 col-xs-12 px-0 \">
                          <div class=\"align-items-start d-flex mt-1\">

                                Unité de formation et de recherche: ";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "ufr", []), "html", null, true);
        echo "
                           </div>

                           <div class=\"align-items-start d-flex mt-1\">

                                 Service: ";
        // line 31
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "service", []), "html", null, true);
        echo "

                            </div>

                            <div class=\"align-items-start d-flex mt-1\">

                                  Métier: ";
        // line 37
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "job", []), "html", null, true);
        echo "

                             </div>

                             <div class=\"align-items-start d-flex mt-1\">
                                   Université: ";
        // line 42
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "university", []), "html", null, true);
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
        // line 60
        $this->loadTemplate("profile-editorPro.html.twig", "SOSDiderot/staff/profilePro.html.twig", 60)->display($context);
        // line 61
        echo "        </div>
    </div>
</div>


";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "SOSDiderot/staff/profilePro.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  130 => 61,  128 => 60,  107 => 42,  99 => 37,  90 => 31,  82 => 26,  68 => 17,  56 => 8,  49 => 3,  40 => 2,  11 => 1,);
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
                            {{user.name}} {{user.firstName}}
                        </h3>


                        <!-- about details -->
                        <br>
                        <div class=\"col-lg-12 col-md-12 col-xl-12 col-xs-12 px-0 \">
                          <div class=\"align-items-start d-flex mt-1\">

                                Unité de formation et de recherche: {{user.ufr}}
                           </div>

                           <div class=\"align-items-start d-flex mt-1\">

                                 Service: {{ user.service }}

                            </div>

                            <div class=\"align-items-start d-flex mt-1\">

                                  Métier: {{ user.job }}

                             </div>

                             <div class=\"align-items-start d-flex mt-1\">
                                   Université: {{ user.university }}
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
          {% include('profile-editorPro.html.twig') %}
        </div>
    </div>
</div>


{% endblock %}
", "SOSDiderot/staff/profilePro.html.twig", "/var/www/web2/projet_web/app/Resources/views/SOSDiderot/staff/profilePro.html.twig");
    }
}

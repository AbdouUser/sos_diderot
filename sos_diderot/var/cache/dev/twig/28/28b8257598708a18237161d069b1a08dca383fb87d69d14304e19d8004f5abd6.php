<?php

/* SOSDiderot/connexion.html.twig */
class __TwigTemplate_d60e2210d52aaefbb903f022c797ce56f137eb25762ac0080fe41665552258ea extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "SOSDiderot/connexion.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SOSDiderot/connexion.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SOSDiderot/connexion.html.twig"));

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
        echo " <div class=\"mx-2\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-6 col-md-6 col-xl-6 col-xs-6 col-centered\">
                <center>
            ";
        // line 8
        $this->loadTemplate("flash-messages.html.twig", "SOSDiderot/connexion.html.twig", 8)->display($context);
        // line 9
        echo "            </center>
            </div>
            </div>
            <section class=\"row\">
                <div class=\"col-lg-6 col-md-6 col-xl-6 col-xs-6 bg-light mx-auto  p-4 my-3\">
                    <h5 class=\"text-dark text-center mb-4\">
                        Se connecter avec un email
                    </h5>
                    ";
        // line 17
        if (($context["errors"] ?? $this->getContext($context, "errors"))) {
            // line 18
            echo "                      <div class=\"alert alert-danger\">
                          ";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute(($context["errors"] ?? $this->getContext($context, "errors")), "messageKey", []), "html", null, true);
            echo "
                    ";
        }
        // line 21
        echo "                    <form action=\"stqff/login\" method=\"POST\" class=\"form mb-4\" data-parsley-validate>
                        <input name=\"email\" type=\"email\" class=\"form-control mb-2\" placeholder=\"Adresse email\" required \"
                        />
                        <input name=\"password\" type=\"password\" class=\"form-control mb-2\" placeholder=\"Mot de passe\" required
                        />
                        <div class=\"mb-3\">
                            Mot de passe oublié?
                            <a href=\"/resetMdp\" class=\"text-info\">
                                Récupérer votre compte
                            </a>
                        </div>
                        <input type=\"submit\" value=\"Se connecter\" class=\"btn btn-primary mb-2 mx-auto d-block\"/>
                    </form>
                    <h6 class=\"text-dark text-center border-top pointable pt-2\">
                    <span>
                        Vous n'avez pas de compte?
                    </span>
                        <a href=\"/inscription\" class=\"text-info font-weight-normal\">
                            S'inscrire ?
                        </a>
                    </h6>
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
        return "SOSDiderot/connexion.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 21,  73 => 19,  70 => 18,  68 => 17,  58 => 9,  56 => 8,  49 => 3,  40 => 2,  11 => 1,);
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
 <div class=\"mx-2\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-6 col-md-6 col-xl-6 col-xs-6 col-centered\">
                <center>
            {%include('flash-messages.html.twig')%}
            </center>
            </div>
            </div>
            <section class=\"row\">
                <div class=\"col-lg-6 col-md-6 col-xl-6 col-xs-6 bg-light mx-auto  p-4 my-3\">
                    <h5 class=\"text-dark text-center mb-4\">
                        Se connecter avec un email
                    </h5>
                    {% if errors %}
                      <div class=\"alert alert-danger\">
                          {{ errors.messageKey}}
                    {% endif %}
                    <form action=\"stqff/login\" method=\"POST\" class=\"form mb-4\" data-parsley-validate>
                        <input name=\"email\" type=\"email\" class=\"form-control mb-2\" placeholder=\"Adresse email\" required \"
                        />
                        <input name=\"password\" type=\"password\" class=\"form-control mb-2\" placeholder=\"Mot de passe\" required
                        />
                        <div class=\"mb-3\">
                            Mot de passe oublié?
                            <a href=\"/resetMdp\" class=\"text-info\">
                                Récupérer votre compte
                            </a>
                        </div>
                        <input type=\"submit\" value=\"Se connecter\" class=\"btn btn-primary mb-2 mx-auto d-block\"/>
                    </form>
                    <h6 class=\"text-dark text-center border-top pointable pt-2\">
                    <span>
                        Vous n'avez pas de compte?
                    </span>
                        <a href=\"/inscription\" class=\"text-info font-weight-normal\">
                            S'inscrire ?
                        </a>
                    </h6>
                </div>
            </section>
        </div>
    </div>

</div>

{% endblock %}
", "SOSDiderot/connexion.html.twig", "/var/www/web2/sos_diderot/sos_diderot/app/Resources/views/SOSDiderot/connexion.html.twig");
    }
}

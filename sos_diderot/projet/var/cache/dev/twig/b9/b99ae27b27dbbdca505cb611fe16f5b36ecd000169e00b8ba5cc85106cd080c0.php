<?php

/* profile-editor.html.twig */
class __TwigTemplate_e8b784267559e30c8f2b1a1345afd154f7a371a2d9cf614f9f94730d6fd4128b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "profile-editor.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "profile-editor.html.twig"));

        // line 1
        echo "<div id=\"profile-editor\" class=\"modal fade\">
    <div class=\"modal-dialog\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <h5 class=\"modal-title\">
                    Modifier le profil
                </h5>
                <button class=\"close\" data-dismiss=\"modal\">
                    &times;
                </button>
            </div>
            <form action=\"/student/profile-update\" method=\"post\"
                  onsubmit=\"return validateForm2();\">
                <div class=\"modal-body\">

                    <!-- first name and last name -->
                    <div class=\"d-flex justify-content-center mt-2\">
                        <input id=\"prenom\" class=\"form-control form-control mr-1 text-capitalize\" placeholder=\"Prénom\"
                               value=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", []), "get", [0 => "prenom"], "method"), "html", null, true);
        echo "\" data-default=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", []), "get", [0 => "prenom"], "method"), "html", null, true);
        echo "\"
                               name=\"prenom\" onblur=\"verifprenom()\"/>
                        <input id=\"nom\" class=\"form-control form-control ml-1 text-capitalize\" placeholder=\"Nom\"
                               value=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", []), "get", [0 => "nom"], "method"), "html", null, true);
        echo "\" data-default=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", []), "get", [0 => "prenom"], "method"), "html", null, true);
        echo "\"
                               name=\"nom\" onblur=\"verifnom()\"/>
                    </div>
                    <!-- description -->

                    <input id=\"formation\" class=\"form-control form-control mr-1 text-capitalize mt-3\" placeholder=\"Foramtion actuelle\"
                              name=\"formation\"  value=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", []), "get", [0 => "formation"], "method"), "html", null, true);
        echo "\" data-default=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", []), "get", [0 => "formation"], "method"), "html", null, true);
        echo "\" onblur=\"verifFormation()\"/>


                  <input id=\"university\" class=\"form-control form-control mr-1 text-capitalize mt-3\" placeholder=\"Université actuelle\"
                    name=\"university\" value=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", []), "get", [0 => "university"], "method"), "html", null, true);
        echo "\" data-default=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", []), "get", [0 => "university"], "method"), "html", null, true);
        echo "\" onblur=\"verifUniv()\"/>
                </div>

                <div class=\"modal-footer\">
                    <button class=\"btn --btn-outline-primary font-weight-bold\" data-dismiss=\"modal\">
                        ANNULER
                    </button>
                    <input type=\"submit\" class=\"btn btn-primary\" value=\"Enregister\"/>
                </div>
            </form>
        </div>
    </div>
</div>
";
        // line 45
        $this->displayBlock('javascripts', $context, $blocks);
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function block_javascripts($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 46
        echo "
     <script src=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/formulaire.js"), "html", null, true);
        echo "\"></script>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "profile-editor.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  113 => 47,  110 => 46,  92 => 45,  74 => 32,  65 => 28,  54 => 22,  46 => 19,  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div id=\"profile-editor\" class=\"modal fade\">
    <div class=\"modal-dialog\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <h5 class=\"modal-title\">
                    Modifier le profil
                </h5>
                <button class=\"close\" data-dismiss=\"modal\">
                    &times;
                </button>
            </div>
            <form action=\"/student/profile-update\" method=\"post\"
                  onsubmit=\"return validateForm2();\">
                <div class=\"modal-body\">

                    <!-- first name and last name -->
                    <div class=\"d-flex justify-content-center mt-2\">
                        <input id=\"prenom\" class=\"form-control form-control mr-1 text-capitalize\" placeholder=\"Prénom\"
                               value=\"{{app.session.get('prenom')}}\" data-default=\"{{app.session.get('prenom')}}\"
                               name=\"prenom\" onblur=\"verifprenom()\"/>
                        <input id=\"nom\" class=\"form-control form-control ml-1 text-capitalize\" placeholder=\"Nom\"
                               value=\"{{app.session.get('nom')}}\" data-default=\"{{app.session.get('prenom')}}\"
                               name=\"nom\" onblur=\"verifnom()\"/>
                    </div>
                    <!-- description -->

                    <input id=\"formation\" class=\"form-control form-control mr-1 text-capitalize mt-3\" placeholder=\"Foramtion actuelle\"
                              name=\"formation\"  value=\"{{app.session.get('formation')}}\" data-default=\"{{app.session.get('formation')}}\" onblur=\"verifFormation()\"/>


                  <input id=\"university\" class=\"form-control form-control mr-1 text-capitalize mt-3\" placeholder=\"Université actuelle\"
                    name=\"university\" value=\"{{app.session.get('university')}}\" data-default=\"{{app.session.get('university')}}\" onblur=\"verifUniv()\"/>
                </div>

                <div class=\"modal-footer\">
                    <button class=\"btn --btn-outline-primary font-weight-bold\" data-dismiss=\"modal\">
                        ANNULER
                    </button>
                    <input type=\"submit\" class=\"btn btn-primary\" value=\"Enregister\"/>
                </div>
            </form>
        </div>
    </div>
</div>
{% block javascripts %}

     <script src=\"{{asset('js/formulaire.js')}}\"></script>

{% endblock %}
", "profile-editor.html.twig", "C:\\Users\\Admin\\PhpstormProjects\\projet_web\\app\\Resources\\views\\profile-editor.html.twig");
    }
}

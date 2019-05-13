<?php

/* profile-editorPro.html.twig */
class __TwigTemplate_378a32a5779bc909ff9f0c608f50163bb2fa279567eab116ddb6af2bd6fd01dc extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "profile-editorPro.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "profile-editorPro.html.twig"));

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
            <form action=\"/staff/profile-updatee\" method=\"post\"
                  onsubmit=\"return validateForm2();\">
                <div class=\"modal-body\">

                    <!-- first name and last name -->
                    <div class=\"d-flex justify-content-center mt-2\">
                        <input id=\"prenom\" class=\"form-control form-control mr-1 text-capitalize\" placeholder=\"Prénom\"
                               value=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "firstName", []), "html", null, true);
        echo "\" data-default=\"";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "firstName", []), "html", null, true);
        echo "\"
                               name=\"prenom\" onblur=\"verifprenom()\"/>
                        <input id=\"nom\" class=\"form-control form-control ml-1 text-capitalize\" placeholder=\"Nom\"
                               value=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "name", []), "html", null, true);
        echo "\" data-default=\"";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "name", []), "html", null, true);
        echo "\"
                               name=\"nom\" onblur=\"verifnom()\"/>
                    </div>
                    <!-- description -->
                      <br><br>

                    <span>Ufr&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
                    <select data-trigger=\"\" name=\"ufr\">
                        <option placeholder=\"\" value=\"inf\">Informatique</option>
                        <option value=\"Physique\">Physique</option>
                        <option value=\"Science\">Science et nature</option>
                        <option  value=\"Histoire\">Histoire</option>
                        <option  value=\"Chimie\">Chimie</option>
                      </select>\t</br></br>
                      <span>Service&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
                    <select data-trigger=\"\" name=\"service\">
                        <option  value=\"Social\" placeholder=\"\">Social</option>
                        <option value=\"Scolarité\">Scolarité</option>
                        <option value=\"Relations Internationnales\" >Relations Internationnales</option>
                        <option value=\"Service des sports\">Service des sports</option>
                        <option value=\"Médecine de prévention\">Médecine de prévention</option>
                        <option value=\"Enseignement\">Enseignement</option>
                      </select>\t</br></br>
                      <span>Métier&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp</span>
                     <select data-trigger=\"\" name=\"job\">
                        <option value=\"secrétaire\" placeholder=\"\">secrétaire</option>
                        <option value=\"Professeur\">Professeur</option>
                        <option value=\"responsable pédagogique\">responsable pédagogique</option>
                        <option value=\"Médecin\">Médecin</option>
                        <option value=\"Infirmier\">Infirmier</option>
                      </select>
                      <br><br>
                      <span>Université&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
                     <select data-trigger=\"\" name=\"university\">
                        <option value=\"Paris Diderot\" placeholder=\"\">Université Paris Diderot</option>
                        <option value=\"Paris Descarte\">Université Paris Descarte</option>
                        <option value=\"Institut de Physique du Globe\">Institut de Physique</option>
                      </select>

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
        // line 71
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

        // line 72
        echo "
     <script src=\"";
        // line 73
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/formulaire.js"), "html", null, true);
        echo "\"></script>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "profile-editorPro.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  129 => 73,  126 => 72,  108 => 71,  54 => 22,  46 => 19,  26 => 1,);
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
            <form action=\"/staff/profile-updatee\" method=\"post\"
                  onsubmit=\"return validateForm2();\">
                <div class=\"modal-body\">

                    <!-- first name and last name -->
                    <div class=\"d-flex justify-content-center mt-2\">
                        <input id=\"prenom\" class=\"form-control form-control mr-1 text-capitalize\" placeholder=\"Prénom\"
                               value=\"{{user.firstName}}\" data-default=\"{{user.firstName}}\"
                               name=\"prenom\" onblur=\"verifprenom()\"/>
                        <input id=\"nom\" class=\"form-control form-control ml-1 text-capitalize\" placeholder=\"Nom\"
                               value=\"{{user.name}}\" data-default=\"{{user.name}}\"
                               name=\"nom\" onblur=\"verifnom()\"/>
                    </div>
                    <!-- description -->
                      <br><br>

                    <span>Ufr&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
                    <select data-trigger=\"\" name=\"ufr\">
                        <option placeholder=\"\" value=\"inf\">Informatique</option>
                        <option value=\"Physique\">Physique</option>
                        <option value=\"Science\">Science et nature</option>
                        <option  value=\"Histoire\">Histoire</option>
                        <option  value=\"Chimie\">Chimie</option>
                      </select>\t</br></br>
                      <span>Service&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
                    <select data-trigger=\"\" name=\"service\">
                        <option  value=\"Social\" placeholder=\"\">Social</option>
                        <option value=\"Scolarité\">Scolarité</option>
                        <option value=\"Relations Internationnales\" >Relations Internationnales</option>
                        <option value=\"Service des sports\">Service des sports</option>
                        <option value=\"Médecine de prévention\">Médecine de prévention</option>
                        <option value=\"Enseignement\">Enseignement</option>
                      </select>\t</br></br>
                      <span>Métier&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp</span>
                     <select data-trigger=\"\" name=\"job\">
                        <option value=\"secrétaire\" placeholder=\"\">secrétaire</option>
                        <option value=\"Professeur\">Professeur</option>
                        <option value=\"responsable pédagogique\">responsable pédagogique</option>
                        <option value=\"Médecin\">Médecin</option>
                        <option value=\"Infirmier\">Infirmier</option>
                      </select>
                      <br><br>
                      <span>Université&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
                     <select data-trigger=\"\" name=\"university\">
                        <option value=\"Paris Diderot\" placeholder=\"\">Université Paris Diderot</option>
                        <option value=\"Paris Descarte\">Université Paris Descarte</option>
                        <option value=\"Institut de Physique du Globe\">Institut de Physique</option>
                      </select>

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
", "profile-editorPro.html.twig", "/var/www/web2/projet_web/app/Resources/views/profile-editorPro.html.twig");
    }
}

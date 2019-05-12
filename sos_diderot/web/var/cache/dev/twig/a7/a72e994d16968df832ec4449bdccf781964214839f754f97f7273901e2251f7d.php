<?php

/* search.html.twig */
class __TwigTemplate_50c2ac978ca255fee5873a80fa332ea9271af020f32c3b11108d3c0f6baea2dd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "search.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "search.html.twig"));

        // line 1
        echo "<div class=\"s003\">
    <form method=\"post\">
        <div class=\"inner-form mt-4\">
            <div class=\"input-field first-wrap \">
                <div class=\"input-select\">
                    <select data-trigger=\"\" name=\"choices-single-defaul\">
                        <option placeholder=\"\">catégories</option>
                        <option>Scolarité</option>
                        <option>Professeur</option>
                        <option>Service crous</option>
                        <option>Service des sports</option>
                        <option>Assistant social</option>
                        <option>Médecine de prévention</option>
                        <option>responsable pédagogique</option>
                    </select>
                </div>
            </div>
            <div class=\"input-field second-wrap\">
                <input list=\"search\" type=\"text\" placeholder=\"quelle université ?\" name=\"univ\">
                <datalist id=\"search\">
                    <option value=\"Université Paris Diderot\">
                    <option value=\"Université Paris Descarte\">
                    <option value=\"Institut de Physique du Globe de Paris\">
                </datalist>

            </div>
            <div class=\"input-field third-wrap\">
                <button class=\"btn-search\" type=\"submit\">
                    <svg class=\"svg-inline--fa fa-search fa-w-16\" aria-hidden=\"true\" data-prefix=\"fas\"
                         data-icon=\"search\" role=\"img\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 512 512\">
                        <path fill=\"currentColor\"
                              d=\"M505 442.7L405.3 343c-4.5-4.5-10.6-7-17-7H372c27.6-35.3 44-79.7 44-128C416 93.1 322.9 0 208 0S0 93.1 0 208s93.1 208 208 208c48.3 0 92.7-16.4 128-44v16.3c0 6.4 2.5 12.5 7 17l99.7 99.7c9.4 9.4 24.6 9.4 33.9 0l28.3-28.3c9.4-9.4 9.4-24.6.1-34zM208 336c-70.7 0-128-57.2-128-128 0-70.7 57.2-128 128-128 70.7 0 128 57.2 128 128 0 70.7-57.2 128-128 128z\"></path>
                    </svg>
                </button>
            </div>
        </div>
    </form>
</div>
<script src=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/choices.js"), "html", null, true);
        echo "\"></script>
<script>
    const choices = new Choices('[data-trigger]',
        {
            searchEnabled: false,
            itemSelectText: '',
        });

</script>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "search.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 39,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"s003\">
    <form method=\"post\">
        <div class=\"inner-form mt-4\">
            <div class=\"input-field first-wrap \">
                <div class=\"input-select\">
                    <select data-trigger=\"\" name=\"choices-single-defaul\">
                        <option placeholder=\"\">catégories</option>
                        <option>Scolarité</option>
                        <option>Professeur</option>
                        <option>Service crous</option>
                        <option>Service des sports</option>
                        <option>Assistant social</option>
                        <option>Médecine de prévention</option>
                        <option>responsable pédagogique</option>
                    </select>
                </div>
            </div>
            <div class=\"input-field second-wrap\">
                <input list=\"search\" type=\"text\" placeholder=\"quelle université ?\" name=\"univ\">
                <datalist id=\"search\">
                    <option value=\"Université Paris Diderot\">
                    <option value=\"Université Paris Descarte\">
                    <option value=\"Institut de Physique du Globe de Paris\">
                </datalist>

            </div>
            <div class=\"input-field third-wrap\">
                <button class=\"btn-search\" type=\"submit\">
                    <svg class=\"svg-inline--fa fa-search fa-w-16\" aria-hidden=\"true\" data-prefix=\"fas\"
                         data-icon=\"search\" role=\"img\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 512 512\">
                        <path fill=\"currentColor\"
                              d=\"M505 442.7L405.3 343c-4.5-4.5-10.6-7-17-7H372c27.6-35.3 44-79.7 44-128C416 93.1 322.9 0 208 0S0 93.1 0 208s93.1 208 208 208c48.3 0 92.7-16.4 128-44v16.3c0 6.4 2.5 12.5 7 17l99.7 99.7c9.4 9.4 24.6 9.4 33.9 0l28.3-28.3c9.4-9.4 9.4-24.6.1-34zM208 336c-70.7 0-128-57.2-128-128 0-70.7 57.2-128 128-128 70.7 0 128 57.2 128 128 0 70.7-57.2 128-128 128z\"></path>
                    </svg>
                </button>
            </div>
        </div>
    </form>
</div>
<script src=\"{{ asset('js/choices.js') }}\"></script>
<script>
    const choices = new Choices('[data-trigger]',
        {
            searchEnabled: false,
            itemSelectText: '',
        });

</script>
", "search.html.twig", "/var/www/web2/projet_web/app/Resources/views/search.html.twig");
    }
}

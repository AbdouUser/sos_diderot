<?php

/* SOSDiderot/result.html.twig */
class __TwigTemplate_9f17b73348e0573830dca0f6f2138b8059741468466e4db6d4e113c7c2e06035 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "SOSDiderot/result.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SOSDiderot/result.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SOSDiderot/result.html.twig"));

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
    ";
        // line 4
        $this->loadTemplate("search.html.twig", "SOSDiderot/result.html.twig", 4)->display($context);
        // line 5
        echo "
    ";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["result"] ?? $this->getContext($context, "result")));
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 7
            echo "        <div class=\"bg-white mt-3\">
            <table class=\"table font-sm table-striped table-borderless mb-0\">
                <thead class=\"bg-success text-light\">
                    <tr>
                        <th>Nom et prénom</th>
                        <th>Université</th>
                        <th>Ufr</th>
                        <th>Service</th>
                        <th>Métier</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            <a href=\"/staff/calendar/";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["row"], "id", []), "html", null, true);
            echo "\" class=\"text-success text-capitalize\" style=\"text-decoration: none;\">
                                ";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["row"], "firstName", []), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["row"], "name", []), "html", null, true);
            echo "
                            </a>
                        </td>
                        <td>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["row"], "university", []), "html", null, true);
            echo "</td>
                        <td>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["row"], "ufr", []), "html", null, true);
            echo "</td>
                        <td>";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["row"], "service", []), "html", null, true);
            echo "</td>
                        <td>";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["row"], "job", []), "html", null, true);
            echo "</td>
                    </tr>
                </tbody>
            </table>
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "SOSDiderot/result.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  113 => 34,  101 => 28,  97 => 27,  93 => 26,  89 => 25,  81 => 22,  77 => 21,  61 => 7,  57 => 6,  54 => 5,  52 => 4,  49 => 3,  40 => 2,  11 => 1,);
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

    {% include('search.html.twig') %}

    {% for row in result %}
        <div class=\"bg-white mt-3\">
            <table class=\"table font-sm table-striped table-borderless mb-0\">
                <thead class=\"bg-success text-light\">
                    <tr>
                        <th>Nom et prénom</th>
                        <th>Université</th>
                        <th>Ufr</th>
                        <th>Service</th>
                        <th>Métier</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            <a href=\"/staff/calendar/{{ row.id }}\" class=\"text-success text-capitalize\" style=\"text-decoration: none;\">
                                {{ row.firstName }} {{ row.name }}
                            </a>
                        </td>
                        <td>{{ row.university }}</td>
                        <td>{{ row.ufr }}</td>
                        <td>{{ row.service }}</td>
                        <td>{{ row.job }}</td>
                    </tr>
                </tbody>
            </table>
        </div>
    {% endfor %}

{% endblock %}", "SOSDiderot/result.html.twig", "/var/www/web2/projet_web/app/Resources/views/SOSDiderot/result.html.twig");
    }
}

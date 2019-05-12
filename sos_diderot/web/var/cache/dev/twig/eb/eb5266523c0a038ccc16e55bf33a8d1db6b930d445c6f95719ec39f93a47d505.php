<?php

/* staff/staffList.html.twig */
class __TwigTemplate_aa5c66daace67a81cbb6292c96446bac82405d042370bee7d9f4361baba7f167 extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "staff/staffList.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "staff/staffList.html.twig"));

        // line 1
        echo "        <div>
\t<input type=\"text\" id=\"myInput\" onkeyup=\"myFunction()\" placeholder=\"Search for names..\" title=\"Type in a name\">

<table id=\"myTable\">
  <tr class=\"header\">
    <th style=\"width:60%;\">Nom</th>
    <th style=\"width:40%;\">Ufr / Service</th>
    <th style=\"width:40%;\">Post</th>
  </tr>
  ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["staff"] ?? $this->getContext($context, "staff")));
        foreach ($context['_seq'] as $context["_key"] => $context["s"]) {
            // line 11
            echo "  <tr>
    <td> {s.name}</td>
    <td>";
            // line 13
            if (($this->getAttribute($context["s"], "ufr", []) != "none")) {
                // line 14
                echo "\t\t";
                echo twig_escape_filter($this->env, $this->getAttribute($context["s"], "ufr", []), "html", null, true);
                echo "
        ";
            }
            // line 16
            echo "    </td>
    <td> ";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute($context["s"], "job", []), "html", null, true);
            echo "</td>
  </tr>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['s'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "  
</table>
    
</div>
    
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "staff/staffList.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 20,  55 => 17,  52 => 16,  46 => 14,  44 => 13,  40 => 11,  36 => 10,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("        <div>
\t<input type=\"text\" id=\"myInput\" onkeyup=\"myFunction()\" placeholder=\"Search for names..\" title=\"Type in a name\">

<table id=\"myTable\">
  <tr class=\"header\">
    <th style=\"width:60%;\">Nom</th>
    <th style=\"width:40%;\">Ufr / Service</th>
    <th style=\"width:40%;\">Post</th>
  </tr>
  {% for s in staff %}
  <tr>
    <td> {s.name}</td>
    <td>{% if(s.ufr!=\"none\")%}
\t\t{{s.ufr}}
        {% endif %}
    </td>
    <td> {{s.job}}</td>
  </tr>
  {% endfor %}
  
</table>
    
</div>
    
", "staff/staffList.html.twig", "/var/www/web2/sos_diderot/sos_diderot/app/Resources/views/staff/staffList.html.twig");
    }
}

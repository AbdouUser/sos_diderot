<?php

/* SOSDiderot/staff/calendar.html.twig */
class __TwigTemplate_0a506e0222e9fc610cddfdbab0a5d1f388512dc08e8f8c8d020abbb7cbb0f977 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "SOSDiderot/staff/calendar.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SOSDiderot/staff/calendar.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SOSDiderot/staff/calendar.html.twig"));

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
    <div class=\"w-100 bg-white p-2\">
        <form method=\"post\" action=\"/student/rdv\">
            <input type=\"hidden\" name=\"day\" id=\"day\"/>
            <input type=\"hidden\" name=\"hour\" id=\"hour\"/>
            <input type=\"hidden\" name=\"staff\" id=\"staff\" value=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute(($context["staff"] ?? $this->getContext($context, "staff")), "id", []), "html", null, true);
        echo "\"/>

            <div id=\"nodes\" style=\"display: grid; grid-template-columns: repeat(7, auto); grid-template-rows: repeat(10, auto);\">
                <!-- row 0 -->
                <div></div>
                <div class=\"bg-success border-left border-light text-light p-2\">
                    Lundi
                </div>
                <div class=\"bg-success border-left border-light text-light p-2\">
                    Mardi
                </div>
                <div class=\"bg-success border-left border-light text-light p-2\">
                    Mercredi
                </div>
                <div class=\"bg-success border-left border-light text-light p-2\">
                    Jeudi
                </div>
                <div class=\"bg-success border-left border-light text-light p-2\">
                    Vendredi
                </div>
                <div class=\"bg-success border-left border-light text-light p-2\">
                    Samedi
                </div>

                <!-- row 1 -->
                <div class=\"bg-success text-light border-bottom border-light p-2\">
                    09h - 10h
                </div>
                <div class=\"border-left border-bottom border-success text-success p-2\">
                    --
                </div>
                <div class=\"border-left border-bottom border-success text-success p-2\">
                    --
                </div>
                <div class=\"border-left border-bottom border-success text-success p-2\">
                    --
                </div>
                <div class=\"border-left border-bottom border-success text-success p-2\">
                    --
                </div>
                <div class=\"border-left border-bottom border-success text-success p-2\">
                    --
                </div>
                <div class=\"border-left border-bottom border-success text-success p-2\">
                    --
                </div>

                <!-- row 2 -->
                <div class=\"bg-success text-light border-bottom border-light p-2\">
                    10h - 11h
                </div>
                <div class=\"border-left border-bottom border-success text-success p-2\">
                    --
                </div>
                <div class=\"border-left border-bottom border-success text-success p-2\">
                    --
                </div>
                <div class=\"border-left border-bottom border-success text-success p-2\">
                    --
                </div>
                <div class=\"border-left border-bottom border-success text-success p-2\">
                    --
                </div>
                <div class=\"border-left border-bottom border-success text-success p-2\">
                    --
                </div>
                <div class=\"border-left border-bottom border-success text-success p-2\">
                    --
                </div>

                <!-- row 3 -->
                <div class=\"bg-success text-light border-bottom border-light p-2\">
                    11h - 12h
                </div>
                <div class=\"border-left border-bottom border-success text-success p-2\">
                    --
                </div>
                <div class=\"border-left border-bottom border-success text-success p-2\">
                    --
                </div>
                <div class=\"border-left border-bottom border-success text-success p-2\">
                    --
                </div>
                <div class=\"border-left border-bottom border-success text-success p-2\">
                    --
                </div>
                <div class=\"border-left border-bottom border-success text-success p-2\">
                    --
                </div>
                <div class=\"border-left border-bottom border-success text-success p-2\">
                    --
                </div>

                <!-- row 4 -->
                <div class=\"bg-success text-light border-bottom border-light p-2\">
                    12h - 13h
                </div>
                <div class=\"border-left border-bottom border-success text-success p-2\">
                    --
                </div>
                <div class=\"border-left border-bottom border-success text-success p-2\">
                    --
                </div>
                <div class=\"border-left border-bottom border-success text-success p-2\">
                    --
                </div>
                <div class=\"border-left border-bottom border-success text-success p-2\">
                    --
                </div>
                <div class=\"border-left border-bottom border-success text-success p-2\">
                    --
                </div>
                <div class=\"border-left border-bottom border-success text-success p-2\">
                    --
                </div>

                <!-- row 5 -->
                <div class=\"bg-success text-light border-bottom border-light p-2\">
                    13h - 14h
                </div>
                <div class=\"border-left border-bottom border-success text-success p-2\">
                    --
                </div>
                <div class=\"border-left border-bottom border-success text-success p-2\">
                    --
                </div>
                <div class=\"border-left border-bottom border-success text-success p-2\">
                    --
                </div>
                <div class=\"border-left border-bottom border-success text-success p-2\">
                    --
                </div>
                <div class=\"border-left border-bottom border-success text-success p-2\">
                    --
                </div>
                <div class=\"border-left border-bottom border-success text-success p-2\">
                    --
                </div>

                <!-- row 6 -->
                <div class=\"bg-success text-light border-bottom border-light p-2\">
                    14h - 15h
                </div>
                <div class=\"border-left border-bottom border-success text-success p-2\">
                    --
                </div>
                <div class=\"border-left border-bottom border-success text-success p-2\">
                    --
                </div>
                <div class=\"border-left border-bottom border-success text-success p-2\">
                    --
                </div>
                <div class=\"border-left border-bottom border-success text-success p-2\">
                    --
                </div>
                <div class=\"border-left border-bottom border-success text-success p-2\">
                    --
                </div>
                <div class=\"border-left border-bottom border-success text-success p-2\">
                    --
                </div>

                <!-- row 7 -->
                <div class=\"bg-success text-light border-bottom border-light p-2\">
                    15h - 16h
                </div>
                <div class=\"border-left border-bottom border-success text-success p-2\">
                    --
                </div>
                <div class=\"border-left border-bottom border-success text-success p-2\">
                    --
                </div>
                <div class=\"border-left border-bottom border-success text-success p-2\">
                    --
                </div>
                <div class=\"border-left border-bottom border-success text-success p-2\">
                    --
                </div>
                <div class=\"border-left border-bottom border-success text-success p-2\">
                    --
                </div>
                <div class=\"border-left border-bottom border-success text-success p-2\">
                    --
                </div>

                <!-- row 8 -->
                <div class=\"bg-success text-light border-bottom border-light p-2\">
                    16h - 17h
                </div>
                <div class=\"border-left border-bottom border-success text-success p-2\">
                    --
                </div>
                <div class=\"border-left border-bottom border-success text-success p-2\">
                    --
                </div>
                <div class=\"border-left border-bottom border-success text-success p-2\">
                    --
                </div>
                <div class=\"border-left border-bottom border-success text-success p-2\">
                    --
                </div>
                <div class=\"border-left border-bottom border-success text-success p-2\">
                    --
                </div>
                <div class=\"border-left border-bottom border-success text-success p-2\">
                    --
                </div>

                <!-- row 9 -->
                <div class=\"bg-success text-light border-bottom border-success p-2\">
                    17h - 18h
                </div>
                <div class=\"border-left border-bottom border-success text-success p-2\">
                    --
                </div>
                <div class=\"border-left border-bottom border-success text-success p-2\">
                    --
                </div>
                <div class=\"border-left border-bottom border-success text-success p-2\">
                    --
                </div>
                <div class=\"border-left border-bottom border-success text-success p-2\">
                    --
                </div>
                <div class=\"border-left border-bottom border-success text-success p-2\">
                    --
                </div>
                <div class=\"border-left border-bottom border-success text-success p-2\">
                    --
                </div>
            </div>
        </form>
    </div>

    <div id=\"calendar_data\">
        ";
        // line 243
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["calendars"] ?? $this->getContext($context, "calendars")));
        foreach ($context['_seq'] as $context["_key"] => $context["calendar"]) {
            // line 244
            echo "            <div data-day=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["calendar"], "calendar", []), "day", []), "html", null, true);
            echo "\"
                 data-hour=\"";
            // line 245
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["calendar"], "calendar", []), "hour", []), "html", null, true);
            echo "\"
                 data-is_here=\"";
            // line 246
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["calendar"], "calendar", []), "isHere", []), "html", null, true);
            echo "\"></div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['calendar'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 248
        echo "    </div>

    <script>
        let nodes = \$('#nodes').children();
        \$('#calendar_data').children().each((index, elem) => {
            let day = \$(elem).data('day');
            let hour = \$(elem).data('hour');
            let node = nodes.eq((hour + 1) * 7 + (day + 1));
            if(\$(elem).data('is_here') === 1) {
                node.html('');
                node.append(\$('' +
                    '<span class=\"text-success d-flex justify-content-between\">' +
                    '   &#10004; <span class=\"font-sm\">disp.</span>' +
                    '   <button type=\"submit\" class=\"submit-rdv btn btn-sm btn-info px-1 py-0\"' +
                    '           data-day=\"' + day +'\" data-hour=\"' + hour + '\">Prendre pdv</button>' +
                    '</span>'));
            }
            else {
                node.html('');
                node.append(\$('<span class=\"text-danger\">&#10008; <span class=\"font-sm\">non disp.</span></span>'));
            }
        });

        \$('.submit-rdv').click((e) => {
            \$('#day').val(\$(e.target).data('day'));
            \$('#hour').val(\$(e.target).data('hour'));
        })
    </script>


";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "SOSDiderot/staff/calendar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  315 => 248,  307 => 246,  303 => 245,  298 => 244,  294 => 243,  56 => 8,  49 => 3,  40 => 2,  11 => 1,);
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

    <div class=\"w-100 bg-white p-2\">
        <form method=\"post\" action=\"/student/rdv\">
            <input type=\"hidden\" name=\"day\" id=\"day\"/>
            <input type=\"hidden\" name=\"hour\" id=\"hour\"/>
            <input type=\"hidden\" name=\"staff\" id=\"staff\" value=\"{{ staff.id }}\"/>

            <div id=\"nodes\" style=\"display: grid; grid-template-columns: repeat(7, auto); grid-template-rows: repeat(10, auto);\">
                <!-- row 0 -->
                <div></div>
                <div class=\"bg-success border-left border-light text-light p-2\">
                    Lundi
                </div>
                <div class=\"bg-success border-left border-light text-light p-2\">
                    Mardi
                </div>
                <div class=\"bg-success border-left border-light text-light p-2\">
                    Mercredi
                </div>
                <div class=\"bg-success border-left border-light text-light p-2\">
                    Jeudi
                </div>
                <div class=\"bg-success border-left border-light text-light p-2\">
                    Vendredi
                </div>
                <div class=\"bg-success border-left border-light text-light p-2\">
                    Samedi
                </div>

                <!-- row 1 -->
                <div class=\"bg-success text-light border-bottom border-light p-2\">
                    09h - 10h
                </div>
                <div class=\"border-left border-bottom border-success text-success p-2\">
                    --
                </div>
                <div class=\"border-left border-bottom border-success text-success p-2\">
                    --
                </div>
                <div class=\"border-left border-bottom border-success text-success p-2\">
                    --
                </div>
                <div class=\"border-left border-bottom border-success text-success p-2\">
                    --
                </div>
                <div class=\"border-left border-bottom border-success text-success p-2\">
                    --
                </div>
                <div class=\"border-left border-bottom border-success text-success p-2\">
                    --
                </div>

                <!-- row 2 -->
                <div class=\"bg-success text-light border-bottom border-light p-2\">
                    10h - 11h
                </div>
                <div class=\"border-left border-bottom border-success text-success p-2\">
                    --
                </div>
                <div class=\"border-left border-bottom border-success text-success p-2\">
                    --
                </div>
                <div class=\"border-left border-bottom border-success text-success p-2\">
                    --
                </div>
                <div class=\"border-left border-bottom border-success text-success p-2\">
                    --
                </div>
                <div class=\"border-left border-bottom border-success text-success p-2\">
                    --
                </div>
                <div class=\"border-left border-bottom border-success text-success p-2\">
                    --
                </div>

                <!-- row 3 -->
                <div class=\"bg-success text-light border-bottom border-light p-2\">
                    11h - 12h
                </div>
                <div class=\"border-left border-bottom border-success text-success p-2\">
                    --
                </div>
                <div class=\"border-left border-bottom border-success text-success p-2\">
                    --
                </div>
                <div class=\"border-left border-bottom border-success text-success p-2\">
                    --
                </div>
                <div class=\"border-left border-bottom border-success text-success p-2\">
                    --
                </div>
                <div class=\"border-left border-bottom border-success text-success p-2\">
                    --
                </div>
                <div class=\"border-left border-bottom border-success text-success p-2\">
                    --
                </div>

                <!-- row 4 -->
                <div class=\"bg-success text-light border-bottom border-light p-2\">
                    12h - 13h
                </div>
                <div class=\"border-left border-bottom border-success text-success p-2\">
                    --
                </div>
                <div class=\"border-left border-bottom border-success text-success p-2\">
                    --
                </div>
                <div class=\"border-left border-bottom border-success text-success p-2\">
                    --
                </div>
                <div class=\"border-left border-bottom border-success text-success p-2\">
                    --
                </div>
                <div class=\"border-left border-bottom border-success text-success p-2\">
                    --
                </div>
                <div class=\"border-left border-bottom border-success text-success p-2\">
                    --
                </div>

                <!-- row 5 -->
                <div class=\"bg-success text-light border-bottom border-light p-2\">
                    13h - 14h
                </div>
                <div class=\"border-left border-bottom border-success text-success p-2\">
                    --
                </div>
                <div class=\"border-left border-bottom border-success text-success p-2\">
                    --
                </div>
                <div class=\"border-left border-bottom border-success text-success p-2\">
                    --
                </div>
                <div class=\"border-left border-bottom border-success text-success p-2\">
                    --
                </div>
                <div class=\"border-left border-bottom border-success text-success p-2\">
                    --
                </div>
                <div class=\"border-left border-bottom border-success text-success p-2\">
                    --
                </div>

                <!-- row 6 -->
                <div class=\"bg-success text-light border-bottom border-light p-2\">
                    14h - 15h
                </div>
                <div class=\"border-left border-bottom border-success text-success p-2\">
                    --
                </div>
                <div class=\"border-left border-bottom border-success text-success p-2\">
                    --
                </div>
                <div class=\"border-left border-bottom border-success text-success p-2\">
                    --
                </div>
                <div class=\"border-left border-bottom border-success text-success p-2\">
                    --
                </div>
                <div class=\"border-left border-bottom border-success text-success p-2\">
                    --
                </div>
                <div class=\"border-left border-bottom border-success text-success p-2\">
                    --
                </div>

                <!-- row 7 -->
                <div class=\"bg-success text-light border-bottom border-light p-2\">
                    15h - 16h
                </div>
                <div class=\"border-left border-bottom border-success text-success p-2\">
                    --
                </div>
                <div class=\"border-left border-bottom border-success text-success p-2\">
                    --
                </div>
                <div class=\"border-left border-bottom border-success text-success p-2\">
                    --
                </div>
                <div class=\"border-left border-bottom border-success text-success p-2\">
                    --
                </div>
                <div class=\"border-left border-bottom border-success text-success p-2\">
                    --
                </div>
                <div class=\"border-left border-bottom border-success text-success p-2\">
                    --
                </div>

                <!-- row 8 -->
                <div class=\"bg-success text-light border-bottom border-light p-2\">
                    16h - 17h
                </div>
                <div class=\"border-left border-bottom border-success text-success p-2\">
                    --
                </div>
                <div class=\"border-left border-bottom border-success text-success p-2\">
                    --
                </div>
                <div class=\"border-left border-bottom border-success text-success p-2\">
                    --
                </div>
                <div class=\"border-left border-bottom border-success text-success p-2\">
                    --
                </div>
                <div class=\"border-left border-bottom border-success text-success p-2\">
                    --
                </div>
                <div class=\"border-left border-bottom border-success text-success p-2\">
                    --
                </div>

                <!-- row 9 -->
                <div class=\"bg-success text-light border-bottom border-success p-2\">
                    17h - 18h
                </div>
                <div class=\"border-left border-bottom border-success text-success p-2\">
                    --
                </div>
                <div class=\"border-left border-bottom border-success text-success p-2\">
                    --
                </div>
                <div class=\"border-left border-bottom border-success text-success p-2\">
                    --
                </div>
                <div class=\"border-left border-bottom border-success text-success p-2\">
                    --
                </div>
                <div class=\"border-left border-bottom border-success text-success p-2\">
                    --
                </div>
                <div class=\"border-left border-bottom border-success text-success p-2\">
                    --
                </div>
            </div>
        </form>
    </div>

    <div id=\"calendar_data\">
        {% for calendar in calendars %}
            <div data-day=\"{{ calendar.calendar.day }}\"
                 data-hour=\"{{ calendar.calendar.hour }}\"
                 data-is_here=\"{{ calendar.calendar.isHere }}\"></div>
        {% endfor %}
    </div>

    <script>
        let nodes = \$('#nodes').children();
        \$('#calendar_data').children().each((index, elem) => {
            let day = \$(elem).data('day');
            let hour = \$(elem).data('hour');
            let node = nodes.eq((hour + 1) * 7 + (day + 1));
            if(\$(elem).data('is_here') === 1) {
                node.html('');
                node.append(\$('' +
                    '<span class=\"text-success d-flex justify-content-between\">' +
                    '   &#10004; <span class=\"font-sm\">disp.</span>' +
                    '   <button type=\"submit\" class=\"submit-rdv btn btn-sm btn-info px-1 py-0\"' +
                    '           data-day=\"' + day +'\" data-hour=\"' + hour + '\">Prendre pdv</button>' +
                    '</span>'));
            }
            else {
                node.html('');
                node.append(\$('<span class=\"text-danger\">&#10008; <span class=\"font-sm\">non disp.</span></span>'));
            }
        });

        \$('.submit-rdv').click((e) => {
            \$('#day').val(\$(e.target).data('day'));
            \$('#hour').val(\$(e.target).data('hour'));
        })
    </script>


{% endblock %}", "SOSDiderot/staff/calendar.html.twig", "/var/www/web2/projet_web/app/Resources/views/SOSDiderot/staff/calendar.html.twig");
    }
}

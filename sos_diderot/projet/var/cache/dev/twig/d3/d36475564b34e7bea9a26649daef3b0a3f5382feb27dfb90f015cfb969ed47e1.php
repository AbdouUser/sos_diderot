<?php

/* header-authenticated.html.twig */
class __TwigTemplate_db486c065e8216c6e8c1a159f6129decb38b7ae94f4774673f111e38182b9fef extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "header-authenticated.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "header-authenticated.html.twig"));

        // line 1
        echo "<header>
    <nav class=\"navbar navbar-expand-lg navbar-dark --bg-primary\">
    ";
        // line 3
        if (($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", []), "get", [0 => "type"], "method") != "staff")) {
            // line 4
            echo "        <a class=\"navbar-brand\" href=\"/student/accueil\">
            <span class=\"text-light h5 m-0 logo\">
                SOS_Université Paris
            </span>
        </a>
      ";
        } else {
            // line 10
            echo "      <a class=\"navbar-brand\" href=\"/staff/accueilStaf\">
          <span class=\"text-light h5 m-0 logo\">
              SOS_Université Paris
          </span>
      </a>
";
        }
        // line 16
        echo "
        <!--
        <input id=\"find_people\" type=\"text\" >
        <img src=\"img/svg/chercher.png\"class=\"pointable\" id=\"people-finder\"/>
        -->

        <button class=\"navbar-toggler\" data-toggle=\"collapse\" data-target=\".navbar-collapse\">
            <span class=\"navbar-toggler-icon\"></span>
        </button>

        <div class=\"collapse navbar-collapse justify-content-end\">
            <ul class=\"navbar-nav\">
                <li class=\"nav-item\">
                ";
        // line 29
        if (($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", []), "get", [0 => "type"], "method") != "staff")) {
            // line 30
            echo "                    <a href=\"/student/settings\" class=\"nav-link text-light\">
                        Paramétres
                    </a>
                  ";
        } else {
            // line 34
            echo "                  <a href=\"/staff/settingsPro\" class=\"nav-link text-light\">
                      Paramétres
                  </a>
                   ";
        }
        // line 38
        echo "                </li>
                <li class=\"nav-item\">
                ";
        // line 40
        if (($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", []), "get", [0 => "type"], "method") == "staff")) {
            // line 41
            echo "                    <a href=\"/staff/logouts\" class=\"nav-link text-light\">
                        Se déconnecter
                    </a>
                ";
        } else {
            // line 45
            echo "                <a href=\"/student/logout\" class=\"nav-link text-light\">
                    Se déconnecter
                </a>
                 ";
        }
        // line 49
        echo "
                </li>
            </ul>
        </div>
    </nav>
</header>

<nav class=\"navbar navbar-expand navbar-light --bg-light justify-content-center sticky-nav\">
    <ul class=\"navbar-nav\">
        <li class=\"nav-item\">
          ";
        // line 59
        if (($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", []), "get", [0 => "type"], "method") != "staff")) {
            // line 60
            echo "            <a href=\"/student/accueil\" class=\"nav-link px-3\">
                <img src=\"/img/svg/home.svg\" class=\"home-icon\"/>
            </a>
          ";
        } else {
            // line 64
            echo "          <a href=\"/staff/accueilStaf\" class=\"nav-link px-3\">
              <img src=\"/img/svg/home.svg\" class=\"home-icon\"/>
          </a>
          ";
        }
        // line 68
        echo "
        </li>
        <li class=\"nav-item\">
        ";
        // line 71
        if (($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", []), "get", [0 => "type"], "method") != "staff")) {
            // line 72
            echo "            <a href=\"/student/notification\" class=\"nav-link px-3\">
                <img src=\"/img/svg/notifications-button.svg\" class=\"notification-icon\" id=\"notification-icon\"/>
        ";
        } else {
            // line 75
            echo "        <a href=\"/staff/notificationPro\" class=\"nav-link px-3\">
            <img src=\"/img/svg/notifications-button.svg\" class=\"notification-icon\" id=\"notification-icon\"/>
            ";
        }
        // line 78
        echo "
  <!--
                <% if(nb_unseen_notifs > 0) { %>
                    <span class=\"badge badge-danger\">
                        <%= nb_unseen_notifs %>
                    </span>
                <% } else { %>
                    <span class=\"badge badge-danger\"></span>
                <% } %> -->
            </a>
        </li>
        <li class=\"nav-item\">
        ";
        // line 90
        if (($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", []), "get", [0 => "type"], "method") != "staff")) {
            // line 91
            echo "            <a href=\"/student/profile\" class=\"nav-link px-3\">
                <img src=\"/img/svg/user-silhouette.svg\" class=\"user-icon\"/>
            </a>
        </li>
          ";
        }
        // line 96
        echo "
          ";
        // line 97
        if (($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", []), "get", [0 => "type"], "method") == "staff")) {
            // line 98
            echo "              <a href=\"/staff/profiles\" class=\"nav-link px-3\">
                  <img src=\"/img/svg/user-silhouette.svg\" class=\"user-icon\"/>
              </a>
          </li>
            ";
        }
        // line 103
        echo "

        <li class=\"nav-item\">
          ";
        // line 106
        if (($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", []), "get", [0 => "type"], "method") != "staff")) {
            // line 107
            echo "            <a href=\"/student/rendez_vous\" class=\"nav-link px-3\">
                <img src=\"/img/rendez_vous.png\" class=\"user-icon\"/>
            </a>
              ";
        }
        // line 111
        echo "              ";
        if (($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", []), "get", [0 => "type"], "method") == "staff")) {
            // line 112
            echo "                <a href=\"/staff/rendez_vousPro\" class=\"nav-link px-3\">
                    <img src=\"/img/rendez_vous.png\" class=\"user-icon\"/>
                </a>
                  ";
        }
        // line 116
        echo "

        </li>
    </ul>
</nav>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "header-authenticated.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  194 => 116,  188 => 112,  185 => 111,  179 => 107,  177 => 106,  172 => 103,  165 => 98,  163 => 97,  160 => 96,  153 => 91,  151 => 90,  137 => 78,  132 => 75,  127 => 72,  125 => 71,  120 => 68,  114 => 64,  108 => 60,  106 => 59,  94 => 49,  88 => 45,  82 => 41,  80 => 40,  76 => 38,  70 => 34,  64 => 30,  62 => 29,  47 => 16,  39 => 10,  31 => 4,  29 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<header>
    <nav class=\"navbar navbar-expand-lg navbar-dark --bg-primary\">
    {% if app.session.get('type')!=\"staff\" %}
        <a class=\"navbar-brand\" href=\"/student/accueil\">
            <span class=\"text-light h5 m-0 logo\">
                SOS_Université Paris
            </span>
        </a>
      {% else %}
      <a class=\"navbar-brand\" href=\"/staff/accueilStaf\">
          <span class=\"text-light h5 m-0 logo\">
              SOS_Université Paris
          </span>
      </a>
{% endif %}

        <!--
        <input id=\"find_people\" type=\"text\" >
        <img src=\"img/svg/chercher.png\"class=\"pointable\" id=\"people-finder\"/>
        -->

        <button class=\"navbar-toggler\" data-toggle=\"collapse\" data-target=\".navbar-collapse\">
            <span class=\"navbar-toggler-icon\"></span>
        </button>

        <div class=\"collapse navbar-collapse justify-content-end\">
            <ul class=\"navbar-nav\">
                <li class=\"nav-item\">
                {% if app.session.get('type')!=\"staff\" %}
                    <a href=\"/student/settings\" class=\"nav-link text-light\">
                        Paramétres
                    </a>
                  {% else %}
                  <a href=\"/staff/settingsPro\" class=\"nav-link text-light\">
                      Paramétres
                  </a>
                   {% endif %}
                </li>
                <li class=\"nav-item\">
                {% if app.session.get('type')==\"staff\" %}
                    <a href=\"/staff/logouts\" class=\"nav-link text-light\">
                        Se déconnecter
                    </a>
                {% else %}
                <a href=\"/student/logout\" class=\"nav-link text-light\">
                    Se déconnecter
                </a>
                 {% endif %}

                </li>
            </ul>
        </div>
    </nav>
</header>

<nav class=\"navbar navbar-expand navbar-light --bg-light justify-content-center sticky-nav\">
    <ul class=\"navbar-nav\">
        <li class=\"nav-item\">
          {% if app.session.get('type')!=\"staff\" %}
            <a href=\"/student/accueil\" class=\"nav-link px-3\">
                <img src=\"/img/svg/home.svg\" class=\"home-icon\"/>
            </a>
          {% else %}
          <a href=\"/staff/accueilStaf\" class=\"nav-link px-3\">
              <img src=\"/img/svg/home.svg\" class=\"home-icon\"/>
          </a>
          {% endif %}

        </li>
        <li class=\"nav-item\">
        {% if app.session.get('type')!=\"staff\"  %}
            <a href=\"/student/notification\" class=\"nav-link px-3\">
                <img src=\"/img/svg/notifications-button.svg\" class=\"notification-icon\" id=\"notification-icon\"/>
        {% else %}
        <a href=\"/staff/notificationPro\" class=\"nav-link px-3\">
            <img src=\"/img/svg/notifications-button.svg\" class=\"notification-icon\" id=\"notification-icon\"/>
            {% endif %}

  <!--
                <% if(nb_unseen_notifs > 0) { %>
                    <span class=\"badge badge-danger\">
                        <%= nb_unseen_notifs %>
                    </span>
                <% } else { %>
                    <span class=\"badge badge-danger\"></span>
                <% } %> -->
            </a>
        </li>
        <li class=\"nav-item\">
        {% if app.session.get('type')!=\"staff\"  %}
            <a href=\"/student/profile\" class=\"nav-link px-3\">
                <img src=\"/img/svg/user-silhouette.svg\" class=\"user-icon\"/>
            </a>
        </li>
          {% endif %}

          {% if app.session.get('type')==\"staff\"  %}
              <a href=\"/staff/profiles\" class=\"nav-link px-3\">
                  <img src=\"/img/svg/user-silhouette.svg\" class=\"user-icon\"/>
              </a>
          </li>
            {% endif %}


        <li class=\"nav-item\">
          {% if app.session.get('type')!=\"staff\" %}
            <a href=\"/student/rendez_vous\" class=\"nav-link px-3\">
                <img src=\"/img/rendez_vous.png\" class=\"user-icon\"/>
            </a>
              {% endif %}
              {% if app.session.get('type')==\"staff\" %}
                <a href=\"/staff/rendez_vousPro\" class=\"nav-link px-3\">
                    <img src=\"/img/rendez_vous.png\" class=\"user-icon\"/>
                </a>
                  {% endif %}


        </li>
    </ul>
</nav>
", "header-authenticated.html.twig", "/var/www/web2/projet_web/app/Resources/views/header-authenticated.html.twig");
    }
}

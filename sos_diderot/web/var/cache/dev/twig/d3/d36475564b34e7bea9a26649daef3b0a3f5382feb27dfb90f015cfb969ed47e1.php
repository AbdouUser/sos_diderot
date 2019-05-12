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
        <a class=\"navbar-brand\" href=\"/accueil\">
            <span class=\"text-light h5 m-0 logo\">
                SOS_Université Paris
            </span>
        </a>

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
        // line 21
        if (($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", []), "get", [0 => "type"], "method") != "staff")) {
            // line 22
            echo "                    <a href=\"/student/settings\" class=\"nav-link text-light\">
                        Paramétres
                    </a>
                  ";
        } else {
            // line 26
            echo "                  <a href=\"/staff/settingsPro\" class=\"nav-link text-light\">
                      Paramétres
                  </a>
                   ";
        }
        // line 30
        echo "                </li>
                <li class=\"nav-item\">
                ";
        // line 32
        if (($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", []), "get", [0 => "type"], "method") == "staff")) {
            // line 33
            echo "                    <a href=\"/staff/logouts\" class=\"nav-link text-light\">
                        Se déconnecter
                    </a>
                ";
        } else {
            // line 37
            echo "                <a href=\"/student/logout\" class=\"nav-link text-light\">
                    Se déconnecter
                </a>
                 ";
        }
        // line 41
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
        // line 51
        if (($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", []), "get", [0 => "type"], "method") != "staff")) {
            // line 52
            echo "            <a href=\"/student/accueil\" class=\"nav-link px-3\">
                <img src=\"/img/svg/home.svg\" class=\"home-icon\"/>
            </a>
          ";
        } else {
            // line 56
            echo "          <a href=\"/staff/accueilStaf\" class=\"nav-link px-3\">
              <img src=\"/img/svg/home.svg\" class=\"home-icon\"/>
          </a>
          ";
        }
        // line 60
        echo "
        </li>
        <li class=\"nav-item\">
        ";
        // line 63
        if (($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", []), "get", [0 => "type"], "method") != "staff")) {
            // line 64
            echo "            <a href=\"/student/notification\" class=\"nav-link px-3\">
                <img src=\"/img/svg/notifications-button.svg\" class=\"notification-icon\" id=\"notification-icon\"/>
        ";
        } else {
            // line 67
            echo "        <a href=\"/staff/notificationPro\" class=\"nav-link px-3\">
            <img src=\"/img/svg/notifications-button.svg\" class=\"notification-icon\" id=\"notification-icon\"/>
            ";
        }
        // line 70
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
        // line 82
        if (($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", []), "get", [0 => "type"], "method") != "staff")) {
            // line 83
            echo "            <a href=\"/student/profile\" class=\"nav-link px-3\">
                <img src=\"/img/svg/user-silhouette.svg\" class=\"user-icon\"/>
            </a>
        </li>
          ";
        }
        // line 88
        echo "
          ";
        // line 89
        if (($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", []), "get", [0 => "type"], "method") == "staff")) {
            // line 90
            echo "              <a href=\"/staff/profiles\" class=\"nav-link px-3\">
                  <img src=\"/img/svg/user-silhouette.svg\" class=\"user-icon\"/>
              </a>
          </li>
            ";
        }
        // line 95
        echo "

        <li class=\"nav-item\">
          ";
        // line 98
        if (($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", []), "get", [0 => "type"], "method") != "staff")) {
            // line 99
            echo "            <a href=\"/student/rendez_vous\" class=\"nav-link px-3\">
                <img src=\"/img/rendez_vous.png\" class=\"user-icon\"/>
            </a>
              ";
        }
        // line 103
        echo "              ";
        if (($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", []), "get", [0 => "type"], "method") == "staff")) {
            // line 104
            echo "                <a href=\"/staff/rendez_vousPro\" class=\"nav-link px-3\">
                    <img src=\"/img/rendez_vous.png\" class=\"user-icon\"/>
                </a>
                  ";
        }
        // line 108
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
        return array (  179 => 108,  173 => 104,  170 => 103,  164 => 99,  162 => 98,  157 => 95,  150 => 90,  148 => 89,  145 => 88,  138 => 83,  136 => 82,  122 => 70,  117 => 67,  112 => 64,  110 => 63,  105 => 60,  99 => 56,  93 => 52,  91 => 51,  79 => 41,  73 => 37,  67 => 33,  65 => 32,  61 => 30,  55 => 26,  49 => 22,  47 => 21,  25 => 1,);
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
        <a class=\"navbar-brand\" href=\"/accueil\">
            <span class=\"text-light h5 m-0 logo\">
                SOS_Université Paris
            </span>
        </a>

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

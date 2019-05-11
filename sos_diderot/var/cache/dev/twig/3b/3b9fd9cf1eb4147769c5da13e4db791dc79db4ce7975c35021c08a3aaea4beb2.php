<?php

/* header-anonym.html.twig */
class __TwigTemplate_409eacec01413e5ecfe0ee81920a3d35e3d154c789954ff9d98cfd46c2a86102 extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "header-anonym.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "header-anonym.html.twig"));

        // line 1
        echo "<header>
    <nav class=\"navbar navbar-expand-lg navbar-dark --bg-primary\">
        <span class=\"mx-4 d-none\"></span>
        <div class=\"logo\">
        <a class=\"navbar-brand\" href=\"/\">
            <span class=\"text-light h5 m-0 logo\">
                SOS_Université Paris
            </span>
        </a>
        </div>
        <button class=\"navbar-toggler\" data-toggle=\"collapse\" data-target=\".navbar-collapse\">
            <span class=\"navbar-toggler-icon\"></span>
        </button>
        <div class=\"collapse navbar-collapse justify-content-end\">
            <ul class=\"navbar-nav\">
                <li class=\"nav-item\">
                    <a href=\"/inscription\" class=\"nav-link text-light\">
                        Inscription
                    </a>
                </li>
                <li class=\"nav-item\">
                    <a href=\"/login\" class=\"nav-link text-light\">
                        Connection
                    </a>
                </li>
            </ul>
        </div>
    </nav>
</header>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "header-anonym.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
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
        <span class=\"mx-4 d-none\"></span>
        <div class=\"logo\">
        <a class=\"navbar-brand\" href=\"/\">
            <span class=\"text-light h5 m-0 logo\">
                SOS_Université Paris
            </span>
        </a>
        </div>
        <button class=\"navbar-toggler\" data-toggle=\"collapse\" data-target=\".navbar-collapse\">
            <span class=\"navbar-toggler-icon\"></span>
        </button>
        <div class=\"collapse navbar-collapse justify-content-end\">
            <ul class=\"navbar-nav\">
                <li class=\"nav-item\">
                    <a href=\"/inscription\" class=\"nav-link text-light\">
                        Inscription
                    </a>
                </li>
                <li class=\"nav-item\">
                    <a href=\"/login\" class=\"nav-link text-light\">
                        Connection
                    </a>
                </li>
            </ul>
        </div>
    </nav>
</header>
", "header-anonym.html.twig", "/var/www/sos_diderot/app/Resources/views/header-anonym.html.twig");
    }
}

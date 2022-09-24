<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* pilote/show.html.twig */
class __TwigTemplate_30e72962c46cdecf1e32fa5f996d102a806b6f6d3401db20c078b85fb56053a2 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'titlepage' => [$this, 'block_titlepage'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "public/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pilote/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pilote/show.html.twig"));

        $this->parent = $this->loadTemplate("public/layout.html.twig", "pilote/show.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Pilote: ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["pilote"]) || array_key_exists("pilote", $context) ? $context["pilote"] : (function () { throw new RuntimeError('Variable "pilote" does not exist.', 3, $this->source); })()), "firstname", [], "any", false, false, false, 3), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["pilote"]) || array_key_exists("pilote", $context) ? $context["pilote"] : (function () { throw new RuntimeError('Variable "pilote" does not exist.', 3, $this->source); })()), "surname", [], "any", false, false, false, 3), "html", null, true);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_titlepage($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "titlepage"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "titlepage"));

        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["pilote"]) || array_key_exists("pilote", $context) ? $context["pilote"] : (function () { throw new RuntimeError('Variable "pilote" does not exist.', 5, $this->source); })()), "firstname", [], "any", false, false, false, 5), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["pilote"]) || array_key_exists("pilote", $context) ? $context["pilote"] : (function () { throw new RuntimeError('Variable "pilote" does not exist.', 5, $this->source); })()), "surname", [], "any", false, false, false, 5), "html", null, true);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 6
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "    <div class=\"container-center\">
        <div class=\"pilote-profil-card\">
            <div class=\"pilote-profil-portrait\">
                <img src=\"/image/pilote/portrait/";
        // line 10
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["pilote"]) || array_key_exists("pilote", $context) ? $context["pilote"] : (function () { throw new RuntimeError('Variable "pilote" does not exist.', 10, $this->source); })()), "portraitFilename", [], "any", false, false, false, 10), "html", null, true);
        echo "\" alt=\"\">
            </div>
            <div class=\"pilote-profil-info\">
                <div class=\"pilote-profil-info-title\">
                    <h2 class=\"title\">";
        // line 14
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["pilote"]) || array_key_exists("pilote", $context) ? $context["pilote"] : (function () { throw new RuntimeError('Variable "pilote" does not exist.', 14, $this->source); })()), "firstname", [], "any", false, false, false, 14), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["pilote"]) || array_key_exists("pilote", $context) ? $context["pilote"] : (function () { throw new RuntimeError('Variable "pilote" does not exist.', 14, $this->source); })()), "surname", [], "any", false, false, false, 14), "html", null, true);
        echo "</h2>
                    <p>";
        // line 15
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["pilote"]) || array_key_exists("pilote", $context) ? $context["pilote"] : (function () { throw new RuntimeError('Variable "pilote" does not exist.', 15, $this->source); })()), "number", [], "any", false, false, false, 15), "html", null, true);
        echo "</p>
                </div>
                <div class=\"pilote-profil-separator\"></div>
                <div class=\"pilote-profil-info-desc\">
                    <div>
                        <h3>Nationnalité</h3>
                        <img class=\"flag\" src=\"/image/country/";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["pilote"]) || array_key_exists("pilote", $context) ? $context["pilote"] : (function () { throw new RuntimeError('Variable "pilote" does not exist.', 21, $this->source); })()), "country", [], "any", false, false, false, 21), "flagFilename", [], "any", false, false, false, 21), "html", null, true);
        echo "\" alt=\"\">
                        <p>";
        // line 22
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["pilote"]) || array_key_exists("pilote", $context) ? $context["pilote"] : (function () { throw new RuntimeError('Variable "pilote" does not exist.', 22, $this->source); })()), "country", [], "any", false, false, false, 22), "name", [], "any", false, false, false, 22), "html", null, true);
        echo "</p>
                    </div>
                    <div class=\"grid-right-responsive\">
                        <h3>Âge</h3>
                        <p>";
        // line 26
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["pilote"]) || array_key_exists("pilote", $context) ? $context["pilote"] : (function () { throw new RuntimeError('Variable "pilote" does not exist.', 26, $this->source); })()), "age", [], "any", false, false, false, 26), "html", null, true);
        echo " ans</p>
                    </div>
                    <div class=\"pilote-profil-desc-team\">
                        <h3>Écurie</h3>
                        <a href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("team_show", ["name" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["pilote"]) || array_key_exists("pilote", $context) ? $context["pilote"] : (function () { throw new RuntimeError('Variable "pilote" does not exist.', 30, $this->source); })()), "team", [], "any", false, false, false, 30), "name", [], "any", false, false, false, 30)]), "html", null, true);
        echo "\"><img class=\"pilote-profile-team-banner\" src=\"/image/team/banner/";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["pilote"]) || array_key_exists("pilote", $context) ? $context["pilote"] : (function () { throw new RuntimeError('Variable "pilote" does not exist.', 30, $this->source); })()), "team", [], "any", false, false, false, 30), "bannerFilename", [], "any", false, false, false, 30), "html", null, true);
        echo "\" alt=\"\"></a>
                        <div>
                            <a class=\"text-theme\" href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("team_show", ["name" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["pilote"]) || array_key_exists("pilote", $context) ? $context["pilote"] : (function () { throw new RuntimeError('Variable "pilote" does not exist.', 32, $this->source); })()), "team", [], "any", false, false, false, 32), "name", [], "any", false, false, false, 32)]), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["pilote"]) || array_key_exists("pilote", $context) ? $context["pilote"] : (function () { throw new RuntimeError('Variable "pilote" does not exist.', 32, $this->source); })()), "team", [], "any", false, false, false, 32), "name", [], "any", false, false, false, 32), "html", null, true);
        echo "</a>
                            <img class=\"flag\" src=\"/image/country/";
        // line 33
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["pilote"]) || array_key_exists("pilote", $context) ? $context["pilote"] : (function () { throw new RuntimeError('Variable "pilote" does not exist.', 33, $this->source); })()), "team", [], "any", false, false, false, 33), "country", [], "any", false, false, false, 33), "flagFilename", [], "any", false, false, false, 33), "html", null, true);
        echo "\" alt=\"\">
                            <span>";
        // line 34
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["pilote"]) || array_key_exists("pilote", $context) ? $context["pilote"] : (function () { throw new RuntimeError('Variable "pilote" does not exist.', 34, $this->source); })()), "team", [], "any", false, false, false, 34), "country", [], "any", false, false, false, 34), "name", [], "any", false, false, false, 34), "html", null, true);
        echo "</span>
                        </div>
                    </div>
                    <div class=\"pilote-profil-team-monoplace\">
                        <img src=\"/image/team/monoplace/";
        // line 38
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["pilote"]) || array_key_exists("pilote", $context) ? $context["pilote"] : (function () { throw new RuntimeError('Variable "pilote" does not exist.', 38, $this->source); })()), "team", [], "any", false, false, false, 38), "monoplaceFilename", [], "any", false, false, false, 38), "html", null, true);
        echo "\" alt=\"\">
                    </div>
                </div>

            </div>
        </div>
    </div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "pilote/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  182 => 38,  175 => 34,  171 => 33,  165 => 32,  158 => 30,  151 => 26,  144 => 22,  140 => 21,  131 => 15,  125 => 14,  118 => 10,  113 => 7,  103 => 6,  82 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'public/layout.html.twig' %}

{% block title %}Pilote: {{ pilote.firstname }} {{ pilote.surname }}{% endblock %}

{% block titlepage %}{{ pilote.firstname }} {{ pilote.surname }}{% endblock %}
{% block body %}
    <div class=\"container-center\">
        <div class=\"pilote-profil-card\">
            <div class=\"pilote-profil-portrait\">
                <img src=\"/image/pilote/portrait/{{ pilote.portraitFilename }}\" alt=\"\">
            </div>
            <div class=\"pilote-profil-info\">
                <div class=\"pilote-profil-info-title\">
                    <h2 class=\"title\">{{ pilote.firstname }} {{ pilote.surname }}</h2>
                    <p>{{ pilote.number }}</p>
                </div>
                <div class=\"pilote-profil-separator\"></div>
                <div class=\"pilote-profil-info-desc\">
                    <div>
                        <h3>Nationnalité</h3>
                        <img class=\"flag\" src=\"/image/country/{{ pilote.country.flagFilename }}\" alt=\"\">
                        <p>{{ pilote.country.name }}</p>
                    </div>
                    <div class=\"grid-right-responsive\">
                        <h3>Âge</h3>
                        <p>{{ pilote.age }} ans</p>
                    </div>
                    <div class=\"pilote-profil-desc-team\">
                        <h3>Écurie</h3>
                        <a href=\"{{ path('team_show', {'name': pilote.team.name}) }}\"><img class=\"pilote-profile-team-banner\" src=\"/image/team/banner/{{ pilote.team.bannerFilename }}\" alt=\"\"></a>
                        <div>
                            <a class=\"text-theme\" href=\"{{ path('team_show', {'name': pilote.team.name}) }}\">{{ pilote.team.name }}</a>
                            <img class=\"flag\" src=\"/image/country/{{ pilote.team.country.flagFilename }}\" alt=\"\">
                            <span>{{ pilote.team.country.name }}</span>
                        </div>
                    </div>
                    <div class=\"pilote-profil-team-monoplace\">
                        <img src=\"/image/team/monoplace/{{ pilote.team.monoplaceFilename }}\" alt=\"\">
                    </div>
                </div>

            </div>
        </div>
    </div>

{% endblock %}
", "pilote/show.html.twig", "/Applications/MAMP/htdocs/Symfony/Formula/templates/pilote/show.html.twig");
    }
}

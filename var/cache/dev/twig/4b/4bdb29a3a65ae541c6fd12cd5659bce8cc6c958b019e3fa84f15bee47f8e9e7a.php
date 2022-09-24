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

/* team/show.html.twig */
class __TwigTemplate_b18fcef1601e1645970f243ba0ba853e0eef73b21b1be6b3eba4100c5bcb8587 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "team/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "team/show.html.twig"));

        $this->parent = $this->loadTemplate("public/layout.html.twig", "team/show.html.twig", 1);
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

        echo "Écurie: ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["team"]) || array_key_exists("team", $context) ? $context["team"] : (function () { throw new RuntimeError('Variable "team" does not exist.', 3, $this->source); })()), "name", [], "any", false, false, false, 3), "html", null, true);
        
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

        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["team"]) || array_key_exists("team", $context) ? $context["team"] : (function () { throw new RuntimeError('Variable "team" does not exist.', 5, $this->source); })()), "name", [], "any", false, false, false, 5), "html", null, true);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 7
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "    <div class=\"container\">
        <div class=\"team-profil-banner\">
            <div class=\"team-profil-logo\">
                <img src=\"/image/team/logo/";
        // line 11
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["team"]) || array_key_exists("team", $context) ? $context["team"] : (function () { throw new RuntimeError('Variable "team" does not exist.', 11, $this->source); })()), "logoFilename", [], "any", false, false, false, 11), "html", null, true);
        echo "\" alt=\"\">
            </div>
            <div class=\"team-profil-banner-img\">
                <img src=\"/image/team/banner/";
        // line 14
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["team"]) || array_key_exists("team", $context) ? $context["team"] : (function () { throw new RuntimeError('Variable "team" does not exist.', 14, $this->source); })()), "bannerFilename", [], "any", false, false, false, 14), "html", null, true);
        echo "\" alt=\"\">
            </div>
            <img class=\"team-country-flag\" src=\"/image/country/";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["team"]) || array_key_exists("team", $context) ? $context["team"] : (function () { throw new RuntimeError('Variable "team" does not exist.', 16, $this->source); })()), "country", [], "any", false, false, false, 16), "flagFilename", [], "any", false, false, false, 16), "html", null, true);
        echo "\" alt=\"\">
            <div class=\"team-profil-banner-title\">
                <p class=\"title\">Écurie</p>
                <h2 class=\"title\">";
        // line 19
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["team"]) || array_key_exists("team", $context) ? $context["team"] : (function () { throw new RuntimeError('Variable "team" does not exist.', 19, $this->source); })()), "name", [], "any", false, false, false, 19), "html", null, true);
        echo "</h2>
            </div>
            <div class=\"team-profil-banner-points\">
                <p>Classement constructeur:</p>
                <p>";
        // line 23
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["team"]) || array_key_exists("team", $context) ? $context["team"] : (function () { throw new RuntimeError('Variable "team" does not exist.', 23, $this->source); })()), "point", [], "any", false, false, false, 23), "html", null, true);
        echo " points</p>
            </div>
        </div>
        ";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_sort_filter(twig_get_attribute($this->env, $this->source, (isset($context["team"]) || array_key_exists("team", $context) ? $context["team"] : (function () { throw new RuntimeError('Variable "team" does not exist.', 26, $this->source); })()), "pilotes", [], "any", false, false, false, 26), function ($__a__, $__b__) use ($context, $macros) { $context["a"] = $__a__; $context["b"] = $__b__; return (twig_get_attribute($this->env, $this->source, (isset($context["a"]) || array_key_exists("a", $context) ? $context["a"] : (function () { throw new RuntimeError('Variable "a" does not exist.', 26, $this->source); })()), "firstname", [], "any", false, false, false, 26) <=> twig_get_attribute($this->env, $this->source, (isset($context["b"]) || array_key_exists("b", $context) ? $context["b"] : (function () { throw new RuntimeError('Variable "b" does not exist.', 26, $this->source); })()), "firstname", [], "any", false, false, false, 26)); }));
        foreach ($context['_seq'] as $context["_key"] => $context["pilote"]) {
            // line 27
            echo "            <div class=\"team-profil-pilote\">
                <a href=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("pilote_show", ["surname" => twig_get_attribute($this->env, $this->source, $context["pilote"], "surname", [], "any", false, false, false, 28)]), "html", null, true);
            echo "\">
                    <div class=\"team-profil-pilote-portrait\">
                        <img src=\"/image/pilote/portrait/";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["pilote"], "portraitFilename", [], "any", false, false, false, 30), "html", null, true);
            echo "\" alt=\"\">
                    </div>
                </a>
                <div class=\"team-profil-pilote-info\">
                    <div class=\"team-profil-pilote-desc\">
                        <a href=\"";
            // line 35
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("pilote_show", ["surname" => twig_get_attribute($this->env, $this->source, $context["pilote"], "surname", [], "any", false, false, false, 35)]), "html", null, true);
            echo "\" class=\"title text-theme\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["pilote"], "firstname", [], "any", false, false, false, 35), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["pilote"], "surname", [], "any", false, false, false, 35), "html", null, true);
            echo "</a>
                        <p>Âge: <span>";
            // line 36
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["pilote"], "age", [], "any", false, false, false, 36), "html", null, true);
            echo "</span></p>
                        <p>Nationnalité</p>
                        <img class=\"flag\" src=\"/image/country/";
            // line 38
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["pilote"], "country", [], "any", false, false, false, 38), "flagFilename", [], "any", false, false, false, 38), "html", null, true);
            echo "\" alt=\"\"><span>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["pilote"], "country", [], "any", false, false, false, 38), "name", [], "any", false, false, false, 38), "html", null, true);
            echo "</span>
                    </div>
                    <div>
                        <img class=\"team-profil-monoplace\" src=\"/image/team/monoplace/";
            // line 41
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["pilote"], "team", [], "any", false, false, false, 41), "monoplaceFilename", [], "any", false, false, false, 41), "html", null, true);
            echo "\" alt=\"\">
                    </div>
                  </div>
              </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pilote'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        echo "    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "team/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  196 => 46,  185 => 41,  177 => 38,  172 => 36,  164 => 35,  156 => 30,  151 => 28,  148 => 27,  144 => 26,  138 => 23,  131 => 19,  125 => 16,  120 => 14,  114 => 11,  109 => 8,  99 => 7,  80 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'public/layout.html.twig' %}

{% block title %}Écurie: {{ team.name }}{% endblock %}

{% block titlepage %}{{ team.name }}{% endblock %}

{% block body %}
    <div class=\"container\">
        <div class=\"team-profil-banner\">
            <div class=\"team-profil-logo\">
                <img src=\"/image/team/logo/{{ team.logoFilename }}\" alt=\"\">
            </div>
            <div class=\"team-profil-banner-img\">
                <img src=\"/image/team/banner/{{ team.bannerFilename }}\" alt=\"\">
            </div>
            <img class=\"team-country-flag\" src=\"/image/country/{{ team.country.flagFilename }}\" alt=\"\">
            <div class=\"team-profil-banner-title\">
                <p class=\"title\">Écurie</p>
                <h2 class=\"title\">{{ team.name }}</h2>
            </div>
            <div class=\"team-profil-banner-points\">
                <p>Classement constructeur:</p>
                <p>{{ team.point }} points</p>
            </div>
        </div>
        {% for pilote in team.pilotes|sort((a,b)=> a.firstname <=> b.firstname) %}
            <div class=\"team-profil-pilote\">
                <a href=\"{{ path('pilote_show', {'surname': pilote.surname}) }}\">
                    <div class=\"team-profil-pilote-portrait\">
                        <img src=\"/image/pilote/portrait/{{ pilote.portraitFilename }}\" alt=\"\">
                    </div>
                </a>
                <div class=\"team-profil-pilote-info\">
                    <div class=\"team-profil-pilote-desc\">
                        <a href=\"{{ path('pilote_show', {'surname': pilote.surname}) }}\" class=\"title text-theme\">{{ pilote.firstname }} {{ pilote.surname }}</a>
                        <p>Âge: <span>{{ pilote.age }}</span></p>
                        <p>Nationnalité</p>
                        <img class=\"flag\" src=\"/image/country/{{ pilote.country.flagFilename }}\" alt=\"\"><span>{{ pilote.country.name }}</span>
                    </div>
                    <div>
                        <img class=\"team-profil-monoplace\" src=\"/image/team/monoplace/{{ pilote.team.monoplaceFilename }}\" alt=\"\">
                    </div>
                  </div>
              </div>
        {% endfor %}
    </div>
{% endblock %}
", "team/show.html.twig", "/Applications/MAMP/htdocs/Symfony/Formula/templates/team/show.html.twig");
    }
}

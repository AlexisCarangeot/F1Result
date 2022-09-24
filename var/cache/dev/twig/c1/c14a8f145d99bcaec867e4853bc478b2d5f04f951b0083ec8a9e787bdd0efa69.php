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

/* classement/index.html.twig */
class __TwigTemplate_013a0058cef1efff59de45b8409f10096a823f65f99b1a3e75871cc5a8bf5acb extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "classement/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "classement/index.html.twig"));

        $this->parent = $this->loadTemplate("public/layout.html.twig", "classement/index.html.twig", 1);
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

        echo "Classement";
        
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

        echo "Classement ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        
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
        echo "<div class=\"container classement-container\">

    <div class=\"classement\">
        <h1 class=\"title\"><svg height=\"25\" viewBox=\"0 -63 512.00043 512\" width=\"25\" xmlns=\"http://www.w3.org/2000/svg\"><path d=\"m51.816406 338.128906c6.695313 12.992188 11.941406 23.15625 13.527344 26.023438 7.089844 12.839844 20.367188 20.824218 34.660156 20.84375l372.355469.058594c10.582031 0 20.535156-4.125 28.019531-11.609376 7.492188-7.488281 11.621094-17.457031 11.621094-28.058593v-7.253907h-460.183594zm0 0\"/><path d=\"m97.722656 180.5625c-14.3125 0-25.957031 11.644531-25.957031 25.957031s11.644531 25.957031 25.957031 25.957031 25.957032-11.644531 25.957032-25.957031-11.644532-25.957031-25.957032-25.957031zm0 0\"/><path d=\"m512 283.710938c0-3.929688-.703125-7.332032-1.351562-10.210938-.214844-.941406-.550782-2.199219-.949219-3.574219l-244.6875 24.480469c-41.929688 2.988281-77.589844-30.222656-77.589844-72.257812v-22.886719c0-41.207031 26.90625-77.582031 66.308594-89.644531l135.9375-41.617188c-8.828125-7.304688-20.347657-15.953125-34.316407-24.59375-57.839843-35.777344-112.175781-43.3359375-147.628906-43.3671875-8.292968-.2109375-140.078125-2.0781245-187.261718 79.7812495-32.054688 55.59375-26.414063 132.34375 16.699218 228.304688h474.839844zm-414.277344-21.230469c-30.855468 0-55.960937-25.105469-55.960937-55.960938s25.105469-55.960937 55.960937-55.960937c30.855469 0 55.960938 25.105468 55.960938 55.960937s-25.105469 55.960938-55.960938 55.960938zm0 0\"/><path d=\"m218.074219 197.101562v26.972657c0 12.652343 5.417969 24.734375 14.871093 33.144531 8.160157 7.261719 18.691407 11.222656 29.503907 11.222656 1.707031 0 3.429687-.101562 5.140625-.300781l229.003906-26.785156c1.0625-.121094 2.101562-.347657 3.101562-.660157 4.820313-1.488281 8.832032-5.039062 10.863282-9.761718 2.257812-5.269532 1.769531-11.320313-1.25-16.128906l-64.167969-114.113282c-4.589844-8.171875-14.113281-12.132812-23.144531-9.621094l-6.488282 1.796876-149.769531 41.546874c-28.0625 7.78125-47.664062 33.5625-47.664062 62.6875zm0 0\"/></svg>
             Classement des pilotes</h1>
        <table>
            <thead>
            <tr>
                <th class=\"td-position\">Pos.</th>
                <th class=\"td-flag\"></th>
                <th class=\"td-club\">Pilote</th>
                <th class=\"td-point\">Points</th>
            </tr>
            </thead>
            <tbody>
            ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_sort_filter((isset($context["pilotes"]) || array_key_exists("pilotes", $context) ? $context["pilotes"] : (function () { throw new RuntimeError('Variable "pilotes" does not exist.', 23, $this->source); })()), function ($__a__, $__b__) use ($context, $macros) { $context["a"] = $__a__; $context["b"] = $__b__; return (twig_get_attribute($this->env, $this->source, (isset($context["b"]) || array_key_exists("b", $context) ? $context["b"] : (function () { throw new RuntimeError('Variable "b" does not exist.', 23, $this->source); })()), "point", [], "any", false, false, false, 23) <=> twig_get_attribute($this->env, $this->source, (isset($context["a"]) || array_key_exists("a", $context) ? $context["a"] : (function () { throw new RuntimeError('Variable "a" does not exist.', 23, $this->source); })()), "point", [], "any", false, false, false, 23)); }));
        $context['_iterated'] = false;
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["pilote"]) {
            // line 24
            echo "                <tr>
                    <td class=\"td-position\">";
            // line 25
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 25), "html", null, true);
            echo "</td>
                    <td class=\"td-flag\"><img class=\"flag-classement\" src=\"/image/country/";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["pilote"], "country", [], "any", false, false, false, 26), "flagFilename", [], "any", false, false, false, 26), "html", null, true);
            echo "\" alt=\"\"></td>
                    <td class=\"td-club\"><a href=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("pilote_show", ["surname" => twig_get_attribute($this->env, $this->source, $context["pilote"], "surname", [], "any", false, false, false, 27)]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["pilote"], "firstname", [], "any", false, false, false, 27), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["pilote"], "surname", [], "any", false, false, false, 27), "html", null, true);
            echo "</a></td>
                    <td class=\"td-point\">
                        ";
            // line 29
            if ((null === twig_get_attribute($this->env, $this->source, $context["pilote"], "point", [], "any", false, false, false, 29))) {
                // line 30
                echo "                            -
                        ";
            } else {
                // line 32
                echo "                            ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["pilote"], "point", [], "any", false, false, false, 32), "html", null, true);
                echo "
                        ";
            }
            // line 34
            echo "                    </td>
                </tr>
            ";
            $context['_iterated'] = true;
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        if (!$context['_iterated']) {
            // line 37
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pilote'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo "            </tbody>
        </table>
    </div>


    <div class=\"classement\">
        <h1 class=\"title\"><svg id=\"Capa_1\" enable-background=\"new 0 0 512 512\" height=\"25\" viewBox=\"0 0 512 512\" width=\"25\" xmlns=\"http://www.w3.org/2000/svg\"><g><path d=\"m103.195 298.399v69.904h31.999l55.555 49.583v-140.283h-60.642z\"/><path d=\"m220.749 277.603h70.503v158.776h-70.503z\"/><path d=\"m73.195 291.034c0-10.375-8.44-18.815-18.815-18.815h-35.565c-10.375-.001-18.815 8.44-18.815 18.815v77.27h73.195z\"/><path d=\"m256 169.828c12.339 0 23.888 3.444 33.738 9.419h71.885v-43.248h-90.623v-30.378h29.689v-30h-89.378v30h29.689v30.378h-90.624v43.248h71.885c9.851-5.975 21.4-9.419 33.739-9.419z\"/><path d=\"m0 398.303v38.076h166.415l-42.662-38.076z\"/><path d=\"m256 199.828c-19.438 0-35.251 15.813-35.251 35.252v12.523h70.503v-12.523c-.001-19.439-15.814-35.252-35.252-35.252z\"/><path d=\"m345.585 436.379h166.415v-38.076h-123.753z\"/><path d=\"m493.185 272.218h-35.565c-10.375 0-18.815 8.44-18.815 18.815v77.27h73.195v-77.27c0-10.374-8.44-18.815-18.815-18.815z\"/><path d=\"m408.805 368.303v-69.904l-26.912-20.796h-60.642v140.283l55.555-49.583z\"/></g></svg>
             Classement des écuries</h1>
        <table>
            <thead>
            <tr>
                <th class=\"td-position\">Pos.</th>
                <th class=\"td-flag\"></th>
                <th class=\"td-club\">Écurie</th>
                <th class=\"td-point\">Points</th>
            </tr>
            </thead>
            <tbody>
            ";
        // line 56
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_sort_filter((isset($context["teams"]) || array_key_exists("teams", $context) ? $context["teams"] : (function () { throw new RuntimeError('Variable "teams" does not exist.', 56, $this->source); })()), function ($__a__, $__b__) use ($context, $macros) { $context["a"] = $__a__; $context["b"] = $__b__; return (twig_get_attribute($this->env, $this->source, (isset($context["b"]) || array_key_exists("b", $context) ? $context["b"] : (function () { throw new RuntimeError('Variable "b" does not exist.', 56, $this->source); })()), "point", [], "any", false, false, false, 56) <=> twig_get_attribute($this->env, $this->source, (isset($context["a"]) || array_key_exists("a", $context) ? $context["a"] : (function () { throw new RuntimeError('Variable "a" does not exist.', 56, $this->source); })()), "point", [], "any", false, false, false, 56)); }));
        $context['_iterated'] = false;
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["team"]) {
            // line 57
            echo "                <tr>
                    <td class=\"td-position\">";
            // line 58
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 58), "html", null, true);
            echo "</td>
                    <td class=\"td-flag\"><img class=\"team-logo-classement\" src=\"/image/team/logo/";
            // line 59
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["team"], "logoFilename", [], "any", false, false, false, 59), "html", null, true);
            echo "\" alt=\"\"></td>
                    <td class=\"td-club\"><a href=\"";
            // line 60
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("team_show", ["name" => twig_get_attribute($this->env, $this->source, $context["team"], "name", [], "any", false, false, false, 60)]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["team"], "name", [], "any", false, false, false, 60), "html", null, true);
            echo "</a></td>
                    <td class=\"td-point\">
                        ";
            // line 62
            if ((null === twig_get_attribute($this->env, $this->source, $context["team"], "point", [], "any", false, false, false, 62))) {
                // line 63
                echo "                            -
                        ";
            } else {
                // line 65
                echo "                            ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["team"], "point", [], "any", false, false, false, 65), "html", null, true);
                echo "
                        ";
            }
            // line 67
            echo "                    </td>
                </tr>
            ";
            $context['_iterated'] = true;
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        if (!$context['_iterated']) {
            // line 70
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['team'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 71
        echo "            </tbody>
        </table>
    </div>
</div>


";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "classement/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  286 => 71,  280 => 70,  265 => 67,  259 => 65,  255 => 63,  253 => 62,  246 => 60,  242 => 59,  238 => 58,  235 => 57,  217 => 56,  197 => 38,  191 => 37,  176 => 34,  170 => 32,  166 => 30,  164 => 29,  155 => 27,  151 => 26,  147 => 25,  144 => 24,  126 => 23,  109 => 8,  99 => 7,  79 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'public/layout.html.twig' %}

{% block title %}Classement{% endblock %}

{% block titlepage %}Classement {{ (\"now\"|date(\"Y\")) }}{% endblock %}

{% block body %}
<div class=\"container classement-container\">

    <div class=\"classement\">
        <h1 class=\"title\"><svg height=\"25\" viewBox=\"0 -63 512.00043 512\" width=\"25\" xmlns=\"http://www.w3.org/2000/svg\"><path d=\"m51.816406 338.128906c6.695313 12.992188 11.941406 23.15625 13.527344 26.023438 7.089844 12.839844 20.367188 20.824218 34.660156 20.84375l372.355469.058594c10.582031 0 20.535156-4.125 28.019531-11.609376 7.492188-7.488281 11.621094-17.457031 11.621094-28.058593v-7.253907h-460.183594zm0 0\"/><path d=\"m97.722656 180.5625c-14.3125 0-25.957031 11.644531-25.957031 25.957031s11.644531 25.957031 25.957031 25.957031 25.957032-11.644531 25.957032-25.957031-11.644532-25.957031-25.957032-25.957031zm0 0\"/><path d=\"m512 283.710938c0-3.929688-.703125-7.332032-1.351562-10.210938-.214844-.941406-.550782-2.199219-.949219-3.574219l-244.6875 24.480469c-41.929688 2.988281-77.589844-30.222656-77.589844-72.257812v-22.886719c0-41.207031 26.90625-77.582031 66.308594-89.644531l135.9375-41.617188c-8.828125-7.304688-20.347657-15.953125-34.316407-24.59375-57.839843-35.777344-112.175781-43.3359375-147.628906-43.3671875-8.292968-.2109375-140.078125-2.0781245-187.261718 79.7812495-32.054688 55.59375-26.414063 132.34375 16.699218 228.304688h474.839844zm-414.277344-21.230469c-30.855468 0-55.960937-25.105469-55.960937-55.960938s25.105469-55.960937 55.960937-55.960937c30.855469 0 55.960938 25.105468 55.960938 55.960937s-25.105469 55.960938-55.960938 55.960938zm0 0\"/><path d=\"m218.074219 197.101562v26.972657c0 12.652343 5.417969 24.734375 14.871093 33.144531 8.160157 7.261719 18.691407 11.222656 29.503907 11.222656 1.707031 0 3.429687-.101562 5.140625-.300781l229.003906-26.785156c1.0625-.121094 2.101562-.347657 3.101562-.660157 4.820313-1.488281 8.832032-5.039062 10.863282-9.761718 2.257812-5.269532 1.769531-11.320313-1.25-16.128906l-64.167969-114.113282c-4.589844-8.171875-14.113281-12.132812-23.144531-9.621094l-6.488282 1.796876-149.769531 41.546874c-28.0625 7.78125-47.664062 33.5625-47.664062 62.6875zm0 0\"/></svg>
             Classement des pilotes</h1>
        <table>
            <thead>
            <tr>
                <th class=\"td-position\">Pos.</th>
                <th class=\"td-flag\"></th>
                <th class=\"td-club\">Pilote</th>
                <th class=\"td-point\">Points</th>
            </tr>
            </thead>
            <tbody>
            {% for pilote in pilotes|sort((a,b)=> b.point <=> a.point)  %}
                <tr>
                    <td class=\"td-position\">{{ loop.index }}</td>
                    <td class=\"td-flag\"><img class=\"flag-classement\" src=\"/image/country/{{ pilote.country.flagFilename }}\" alt=\"\"></td>
                    <td class=\"td-club\"><a href=\"{{ path('pilote_show', {'surname': pilote.surname}) }}\">{{ pilote.firstname }} {{ pilote.surname }}</a></td>
                    <td class=\"td-point\">
                        {% if pilote.point is null %}
                            -
                        {% else %}
                            {{ pilote.point }}
                        {% endif %}
                    </td>
                </tr>
            {% else %}
            {% endfor %}
            </tbody>
        </table>
    </div>


    <div class=\"classement\">
        <h1 class=\"title\"><svg id=\"Capa_1\" enable-background=\"new 0 0 512 512\" height=\"25\" viewBox=\"0 0 512 512\" width=\"25\" xmlns=\"http://www.w3.org/2000/svg\"><g><path d=\"m103.195 298.399v69.904h31.999l55.555 49.583v-140.283h-60.642z\"/><path d=\"m220.749 277.603h70.503v158.776h-70.503z\"/><path d=\"m73.195 291.034c0-10.375-8.44-18.815-18.815-18.815h-35.565c-10.375-.001-18.815 8.44-18.815 18.815v77.27h73.195z\"/><path d=\"m256 169.828c12.339 0 23.888 3.444 33.738 9.419h71.885v-43.248h-90.623v-30.378h29.689v-30h-89.378v30h29.689v30.378h-90.624v43.248h71.885c9.851-5.975 21.4-9.419 33.739-9.419z\"/><path d=\"m0 398.303v38.076h166.415l-42.662-38.076z\"/><path d=\"m256 199.828c-19.438 0-35.251 15.813-35.251 35.252v12.523h70.503v-12.523c-.001-19.439-15.814-35.252-35.252-35.252z\"/><path d=\"m345.585 436.379h166.415v-38.076h-123.753z\"/><path d=\"m493.185 272.218h-35.565c-10.375 0-18.815 8.44-18.815 18.815v77.27h73.195v-77.27c0-10.374-8.44-18.815-18.815-18.815z\"/><path d=\"m408.805 368.303v-69.904l-26.912-20.796h-60.642v140.283l55.555-49.583z\"/></g></svg>
             Classement des écuries</h1>
        <table>
            <thead>
            <tr>
                <th class=\"td-position\">Pos.</th>
                <th class=\"td-flag\"></th>
                <th class=\"td-club\">Écurie</th>
                <th class=\"td-point\">Points</th>
            </tr>
            </thead>
            <tbody>
            {% for team in teams|sort((a,b)=> b.point <=> a.point)  %}
                <tr>
                    <td class=\"td-position\">{{ loop.index }}</td>
                    <td class=\"td-flag\"><img class=\"team-logo-classement\" src=\"/image/team/logo/{{ team.logoFilename }}\" alt=\"\"></td>
                    <td class=\"td-club\"><a href=\"{{ path('team_show', {'name': team.name}) }}\">{{ team.name }}</a></td>
                    <td class=\"td-point\">
                        {% if team.point is null %}
                            -
                        {% else %}
                            {{ team.point }}
                        {% endif %}
                    </td>
                </tr>
            {% else %}
            {% endfor %}
            </tbody>
        </table>
    </div>
</div>


{% endblock %}
", "classement/index.html.twig", "/Applications/MAMP/htdocs/Symfony/Formula/templates/classement/index.html.twig");
    }
}

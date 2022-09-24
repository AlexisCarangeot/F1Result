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

/* circuit/index.html.twig */
class __TwigTemplate_fe071a7e6dafef9cab21638ae0c8283d4ccc363e44ee809193ba166753f6af61 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "circuit/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "circuit/index.html.twig"));

        $this->parent = $this->loadTemplate("public/layout.html.twig", "circuit/index.html.twig", 1);
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

        echo "Calendrier";
        
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

        echo "Calendrier ";
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
        echo "    <div class=\"container calendrier-container\">

        ";
        // line 10
        $context["lastCircuit"] = twig_last($this->env, (isset($context["circuitsSort"]) || array_key_exists("circuitsSort", $context) ? $context["circuitsSort"] : (function () { throw new RuntimeError('Variable "circuitsSort" does not exist.', 10, $this->source); })()));
        // line 11
        echo "
        ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["circuitsSort"]) || array_key_exists("circuitsSort", $context) ? $context["circuitsSort"] : (function () { throw new RuntimeError('Variable "circuitsSort" does not exist.', 12, $this->source); })()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["circuit"]) {
            // line 13
            echo "
            ";
            // line 14
            if ((twig_get_attribute($this->env, $this->source, $context["circuit"], "name", [], "any", false, false, false, 14) == twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["circuitsSort"]) || array_key_exists("circuitsSort", $context) ? $context["circuitsSort"] : (function () { throw new RuntimeError('Variable "circuitsSort" does not exist.', 14, $this->source); })()), 0, [], "any", false, false, false, 14), "name", [], "any", false, false, false, 14))) {
                // line 15
                echo "                <p class=\"calendrier-month\">";
                echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(("monthFull." . twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["circuit"], "date", [], "any", false, false, false, 15), "m")));
                echo " ";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["circuit"], "date", [], "any", false, false, false, 15), "Y"), "html", null, true);
                echo "</p>
            ";
            }
            // line 17
            echo "
            <div class=\"calendrier-item\">
                <div class=\"calendrier-date\">
                    <svg xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" width=\"30\"
                         height=\"30\" viewBox=\"0 0 30 30\">
                        <g id=\"surface1\">
                            <path style=\" stroke:none;fill-rule:nonzero;fill:rgb(0%,0%,0%);fill-opacity:1;\"
                                  d=\"M 22.5 15 L 7.5 30 L 7.5 22.5 L 15 15 L 7.5 7.5 L 7.5 0 Z M 22.5 15 \"/>
                        </g>
                    </svg>
                    <p><span>";
            // line 27
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["circuit"], "date", [], "any", false, false, false, 27), "d"), "html", null, true);
            echo "</span>";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(("monthShort." . twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["circuit"], "date", [], "any", false, false, false, 27), "m")));
            echo "
                    </p>
                </div>
                <div class=\"calendrier-separator\"></div>
                <div class=\"calendrier-info\">
                    <img src=\"/image/country/";
            // line 32
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["circuit"], "country", [], "any", false, false, false, 32), "flagFilename", [], "any", false, false, false, 32), "html", null, true);
            echo "\" alt=\"\">
                    <p>";
            // line 33
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["circuit"], "name", [], "any", false, false, false, 33), "html", null, true);
            echo "<span><svg xmlns=\"http://www.w3.org/2000/svg\"
                                                    xmlns:xlink=\"http://www.w3.org/1999/xlink\" width=\"17\" height=\"17\"
                                                    viewBox=\"0 0 30 30\">
                                                <g id=\"surface1\">
                                                <path style=\" stroke:none;fill-rule:nonzero;fill:rgb(0%,0%,0%);fill-opacity:1;\"
                                                      d=\"M 14.988281 0 C 9.253906 0 4.585938 4.667969 4.585938 10.402344 C 4.585938 15.925781 14.023438 28.828125 14.425781 29.371094 L 14.800781 29.882812 C 14.84375 29.941406 14.914062 29.976562 14.988281 29.976562 C 15.0625 29.976562 15.132812 29.941406 15.175781 29.882812 L 15.550781 29.371094 C 15.953125 28.828125 25.390625 15.925781 25.390625 10.402344 C 25.390625 4.667969 20.726562 0 14.988281 0 Z M 14.988281 6.675781 C 17.042969 6.675781 18.714844 8.347656 18.714844 10.402344 C 18.714844 12.457031 17.042969 14.128906 14.988281 14.128906 C 12.933594 14.128906 11.261719 12.457031 11.261719 10.402344 C 11.261719 8.347656 12.933594 6.675781 14.988281 6.675781 Z M 14.988281 6.675781 \"/>
                                                </g>
                                                </svg>
                    ";
            // line 41
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["circuit"], "place", [], "any", false, false, false, 41), "html", null, true);
            echo "</span></p>
                </div>
                <div class=\"calendrier-statut\">
                    ";
            // line 44
            if ((twig_get_attribute($this->env, $this->source, $context["circuit"], "date", [], "any", false, false, false, 44) < twig_date_converter($this->env))) {
                // line 45
                echo "                        <div class=\"calendrier-statut-past statut-content\">
                            <div class=\"calendrier-separator\"></div>
                            <p>
                                <svg xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\"
                                     width=\"20\" height=\"20\" viewBox=\"0 0 30 30\">
                                    <g id=\"surface1\">
                                        <path style=\" stroke:none;fill-rule:nonzero;fill:rgb(0%,0%,0%);fill-opacity:1;\"
                                              d=\"M 29.140625 4.101562 C 28.699219 3.660156 27.984375 3.660156 27.542969 4.097656 L 13.980469 17.628906 L 9.085938 12.3125 C 8.664062 11.851562 7.949219 11.824219 7.488281 12.246094 C 7.027344 12.667969 7 13.382812 7.421875 13.84375 L 13.113281 20.023438 C 13.320312 20.25 13.613281 20.382812 13.921875 20.390625 C 13.929688 20.390625 13.9375 20.390625 13.945312 20.390625 C 14.242188 20.390625 14.53125 20.269531 14.742188 20.058594 L 29.140625 5.699219 C 29.582031 5.257812 29.582031 4.542969 29.140625 4.101562 Z M 29.140625 4.101562 \"/>
                                        <path style=\" stroke:none;fill-rule:nonzero;fill:rgb(0%,0%,0%);fill-opacity:1;\"
                                              d=\"M 28.871094 13.871094 C 28.246094 13.871094 27.738281 14.375 27.738281 15 C 27.738281 22.023438 22.023438 27.738281 15 27.738281 C 7.976562 27.738281 2.261719 22.023438 2.261719 15 C 2.261719 7.976562 7.976562 2.261719 15 2.261719 C 15.625 2.261719 16.128906 1.753906 16.128906 1.128906 C 16.128906 0.507812 15.625 0 15 0 C 6.730469 0 0 6.730469 0 15 C 0 23.269531 6.730469 30 15 30 C 23.269531 30 30 23.269531 30 15 C 30 14.375 29.492188 13.871094 28.871094 13.871094 Z M 28.871094 13.871094 \"/>
                                    </g>
                                </svg>
                                Terminé
                            </p>
                            <a href=\"\" class=\"btn\">Voir les résultats</a>
                        </div>
                    ";
            } else {
                // line 62
                echo "                        <div class=\"calendrier-statut-next statut-content\">
                            <div class=\"calendrier-separator\"></div>
                            <p>Prochainement</p>
                        </div>
                    ";
            }
            // line 67
            echo "                </div>
            </div>

            ";
            // line 70
            if ((twig_get_attribute($this->env, $this->source, $context["circuit"], "name", [], "any", false, false, false, 70) == twig_get_attribute($this->env, $this->source, (isset($context["lastCircuit"]) || array_key_exists("lastCircuit", $context) ? $context["lastCircuit"] : (function () { throw new RuntimeError('Variable "lastCircuit" does not exist.', 70, $this->source); })()), "name", [], "any", false, false, false, 70))) {
                // line 71
                echo "            ";
            } else {
                // line 72
                echo "                ";
                if ((twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["circuitsSort"]) || array_key_exists("circuitsSort", $context) ? $context["circuitsSort"] : (function () { throw new RuntimeError('Variable "circuitsSort" does not exist.', 72, $this->source); })()), twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 72), [], "array", false, false, false, 72), "date", [], "any", false, false, false, 72), "m") != twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["circuitsSort"]) || array_key_exists("circuitsSort", $context) ? $context["circuitsSort"] : (function () { throw new RuntimeError('Variable "circuitsSort" does not exist.', 72, $this->source); })()), twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 72), [], "array", false, false, false, 72), "date", [], "any", false, false, false, 72), "m"))) {
                    // line 73
                    echo "                    <p class=\"calendrier-month\">";
                    echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(("monthFull." . twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["circuitsSort"]) || array_key_exists("circuitsSort", $context) ? $context["circuitsSort"] : (function () { throw new RuntimeError('Variable "circuitsSort" does not exist.', 73, $this->source); })()), twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 73), [], "array", false, false, false, 73), "date", [], "any", false, false, false, 73), "m")));
                    echo " ";
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["circuitsSort"]) || array_key_exists("circuitsSort", $context) ? $context["circuitsSort"] : (function () { throw new RuntimeError('Variable "circuitsSort" does not exist.', 73, $this->source); })()), twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 73), [], "array", false, false, false, 73), "date", [], "any", false, false, false, 73), "Y"), "html", null, true);
                    echo "</p>
                ";
                }
                // line 75
                echo "            ";
            }
            // line 76
            echo "
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
            // line 78
            echo "
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['circuit'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 80
        echo "
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "circuit/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  265 => 80,  258 => 78,  244 => 76,  241 => 75,  233 => 73,  230 => 72,  227 => 71,  225 => 70,  220 => 67,  213 => 62,  194 => 45,  192 => 44,  186 => 41,  175 => 33,  171 => 32,  161 => 27,  149 => 17,  141 => 15,  139 => 14,  136 => 13,  118 => 12,  115 => 11,  113 => 10,  109 => 8,  99 => 7,  79 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'public/layout.html.twig' %}

{% block title %}Calendrier{% endblock %}

{% block titlepage %}Calendrier {{ (\"now\"|date(\"Y\")) }}{% endblock %}

{% block body %}
    <div class=\"container calendrier-container\">

        {% set lastCircuit = circuitsSort | last %}

        {% for circuit in circuitsSort %}

            {% if circuit.name == circuitsSort.0.name %}
                <p class=\"calendrier-month\">{{ ('monthFull.'~circuit.date|date(\"m\"))|trans|raw }} {{ circuit.date|date(\"Y\") }}</p>
            {% endif %}

            <div class=\"calendrier-item\">
                <div class=\"calendrier-date\">
                    <svg xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" width=\"30\"
                         height=\"30\" viewBox=\"0 0 30 30\">
                        <g id=\"surface1\">
                            <path style=\" stroke:none;fill-rule:nonzero;fill:rgb(0%,0%,0%);fill-opacity:1;\"
                                  d=\"M 22.5 15 L 7.5 30 L 7.5 22.5 L 15 15 L 7.5 7.5 L 7.5 0 Z M 22.5 15 \"/>
                        </g>
                    </svg>
                    <p><span>{{ (circuit.date|date(\"d\")) }}</span>{{ ('monthShort.'~circuit.date|date(\"m\"))|trans|raw }}
                    </p>
                </div>
                <div class=\"calendrier-separator\"></div>
                <div class=\"calendrier-info\">
                    <img src=\"/image/country/{{ circuit.country.flagFilename }}\" alt=\"\">
                    <p>{{ circuit.name }}<span><svg xmlns=\"http://www.w3.org/2000/svg\"
                                                    xmlns:xlink=\"http://www.w3.org/1999/xlink\" width=\"17\" height=\"17\"
                                                    viewBox=\"0 0 30 30\">
                                                <g id=\"surface1\">
                                                <path style=\" stroke:none;fill-rule:nonzero;fill:rgb(0%,0%,0%);fill-opacity:1;\"
                                                      d=\"M 14.988281 0 C 9.253906 0 4.585938 4.667969 4.585938 10.402344 C 4.585938 15.925781 14.023438 28.828125 14.425781 29.371094 L 14.800781 29.882812 C 14.84375 29.941406 14.914062 29.976562 14.988281 29.976562 C 15.0625 29.976562 15.132812 29.941406 15.175781 29.882812 L 15.550781 29.371094 C 15.953125 28.828125 25.390625 15.925781 25.390625 10.402344 C 25.390625 4.667969 20.726562 0 14.988281 0 Z M 14.988281 6.675781 C 17.042969 6.675781 18.714844 8.347656 18.714844 10.402344 C 18.714844 12.457031 17.042969 14.128906 14.988281 14.128906 C 12.933594 14.128906 11.261719 12.457031 11.261719 10.402344 C 11.261719 8.347656 12.933594 6.675781 14.988281 6.675781 Z M 14.988281 6.675781 \"/>
                                                </g>
                                                </svg>
                    {{ circuit.place }}</span></p>
                </div>
                <div class=\"calendrier-statut\">
                    {% if (circuit.date < date()) %}
                        <div class=\"calendrier-statut-past statut-content\">
                            <div class=\"calendrier-separator\"></div>
                            <p>
                                <svg xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\"
                                     width=\"20\" height=\"20\" viewBox=\"0 0 30 30\">
                                    <g id=\"surface1\">
                                        <path style=\" stroke:none;fill-rule:nonzero;fill:rgb(0%,0%,0%);fill-opacity:1;\"
                                              d=\"M 29.140625 4.101562 C 28.699219 3.660156 27.984375 3.660156 27.542969 4.097656 L 13.980469 17.628906 L 9.085938 12.3125 C 8.664062 11.851562 7.949219 11.824219 7.488281 12.246094 C 7.027344 12.667969 7 13.382812 7.421875 13.84375 L 13.113281 20.023438 C 13.320312 20.25 13.613281 20.382812 13.921875 20.390625 C 13.929688 20.390625 13.9375 20.390625 13.945312 20.390625 C 14.242188 20.390625 14.53125 20.269531 14.742188 20.058594 L 29.140625 5.699219 C 29.582031 5.257812 29.582031 4.542969 29.140625 4.101562 Z M 29.140625 4.101562 \"/>
                                        <path style=\" stroke:none;fill-rule:nonzero;fill:rgb(0%,0%,0%);fill-opacity:1;\"
                                              d=\"M 28.871094 13.871094 C 28.246094 13.871094 27.738281 14.375 27.738281 15 C 27.738281 22.023438 22.023438 27.738281 15 27.738281 C 7.976562 27.738281 2.261719 22.023438 2.261719 15 C 2.261719 7.976562 7.976562 2.261719 15 2.261719 C 15.625 2.261719 16.128906 1.753906 16.128906 1.128906 C 16.128906 0.507812 15.625 0 15 0 C 6.730469 0 0 6.730469 0 15 C 0 23.269531 6.730469 30 15 30 C 23.269531 30 30 23.269531 30 15 C 30 14.375 29.492188 13.871094 28.871094 13.871094 Z M 28.871094 13.871094 \"/>
                                    </g>
                                </svg>
                                Terminé
                            </p>
                            <a href=\"\" class=\"btn\">Voir les résultats</a>
                        </div>
                    {% else %}
                        <div class=\"calendrier-statut-next statut-content\">
                            <div class=\"calendrier-separator\"></div>
                            <p>Prochainement</p>
                        </div>
                    {% endif %}
                </div>
            </div>

            {% if circuit.name == lastCircuit.name %}
            {% else %}
                {% if circuitsSort[loop.index].date|date(\"m\") != circuitsSort[loop.index0].date|date(\"m\") %}
                    <p class=\"calendrier-month\">{{ ('monthFull.'~circuitsSort[loop.index].date|date(\"m\"))|trans|raw }} {{ circuitsSort[loop.index].date|date(\"Y\") }}</p>
                {% endif %}
            {% endif %}

        {% else %}

        {% endfor %}

    </div>
{% endblock %}
", "circuit/index.html.twig", "/Applications/MAMP/htdocs/Symfony/Formula/templates/circuit/index.html.twig");
    }
}

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

/* event/index.html.twig */
class __TwigTemplate_602f29911bfb77323ef10ecdd22ebd5cdccf769569fcae9daed653ef44e4a3a7 extends \Twig\Template
{
    private $source;

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "event/index.html.twig", 1);
        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "event/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "event/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Event index";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <h1 class=\"d-flex justify-content-center site_title\">Event index</h1>

    <div class=\"table-responsive\">
        <table class=\"table container table-striped table-bordered table-hover animated fadeIn\" style=\"max-width:90%\">
            <thead>
                <tr>
                    <th scope=\"col\">Id</th>
                    <th scope=\"col\">Start</th>
                    <th scope=\"col\">End</th>
                    <th scope=\"col\">Min</th>
                    <th scope=\"col\">Max</th>
                    <th scope=\"col\">Description</th>
                    <th scope=\"col\">Image</th>
                    <th scope=\"col\" style=\"min-width:150px;\">actions</th>
                </tr>
            </thead>
            <tbody>
            ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["events"]) || array_key_exists("events", $context) ? $context["events"] : (function () { throw new RuntimeError('Variable "events" does not exist.', 23, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["event"]) {
            // line 24
            echo "                <tr>
                    <td>";
            // line 25
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["event"], "id", []), "html", null, true);
            echo "</td>
                    <td>";
            // line 26
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["event"], "start", [])) ? (twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["event"], "start", []), "Y-m-d")) : ("")), "html", null, true);
            echo "</td>
                    <td>";
            // line 27
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["event"], "end", [])) ? (twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["event"], "end", []), "Y-m-d")) : ("")), "html", null, true);
            echo "</td>
                    <td>";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["event"], "min", []), "html", null, true);
            echo "</td>
                    <td>";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["event"], "max", []), "html", null, true);
            echo "</td>
                    <td>";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["event"], "description", []), "html", null, true);
            echo "</td>
                    <td>";
            // line 31
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["event"], "image", []), "html", null, true);
            echo "</td>
                    <td>
                        <a href=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("event_show", ["id" => twig_get_attribute($this->env, $this->source, $context["event"], "id", [])]), "html", null, true);
            echo "\" class=\"btn btn-success\">show</a>
                        <a href=\"";
            // line 34
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("event_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["event"], "id", [])]), "html", null, true);
            echo "\" class=\"btn btn-warning\">edit</a>
                    </td>
                </tr>
            ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 38
            echo "                <tr>
                    <td colspan=\"8\">no records found</td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['event'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "            </tbody>
        </table>
    </div>


    <a href=\"";
        // line 47
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("event_new");
        echo "\" class=\"d-flex justify-content-center\">
        <strong class=\"btn btn-primary animated pulse slow\">Create new</strong>
    </a>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "event/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  169 => 47,  162 => 42,  153 => 38,  144 => 34,  140 => 33,  135 => 31,  131 => 30,  127 => 29,  123 => 28,  119 => 27,  115 => 26,  111 => 25,  108 => 24,  103 => 23,  84 => 6,  75 => 5,  57 => 3,  27 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Event index{% endblock %}

{% block body %}
    <h1 class=\"d-flex justify-content-center site_title\">Event index</h1>

    <div class=\"table-responsive\">
        <table class=\"table container table-striped table-bordered table-hover animated fadeIn\" style=\"max-width:90%\">
            <thead>
                <tr>
                    <th scope=\"col\">Id</th>
                    <th scope=\"col\">Start</th>
                    <th scope=\"col\">End</th>
                    <th scope=\"col\">Min</th>
                    <th scope=\"col\">Max</th>
                    <th scope=\"col\">Description</th>
                    <th scope=\"col\">Image</th>
                    <th scope=\"col\" style=\"min-width:150px;\">actions</th>
                </tr>
            </thead>
            <tbody>
            {% for event in events %}
                <tr>
                    <td>{{ event.id }}</td>
                    <td>{{ event.start ? event.start|date('Y-m-d') : '' }}</td>
                    <td>{{ event.end ? event.end|date('Y-m-d') : '' }}</td>
                    <td>{{ event.min }}</td>
                    <td>{{ event.max }}</td>
                    <td>{{ event.description }}</td>
                    <td>{{ event.image }}</td>
                    <td>
                        <a href=\"{{ path('event_show', {'id': event.id}) }}\" class=\"btn btn-success\">show</a>
                        <a href=\"{{ path('event_edit', {'id': event.id}) }}\" class=\"btn btn-warning\">edit</a>
                    </td>
                </tr>
            {% else %}
                <tr>
                    <td colspan=\"8\">no records found</td>
                </tr>
            {% endfor %}
            </tbody>
        </table>
    </div>


    <a href=\"{{ path('event_new') }}\" class=\"d-flex justify-content-center\">
        <strong class=\"btn btn-primary animated pulse slow\">Create new</strong>
    </a>
{% endblock %}
", "event/index.html.twig", "C:\\xampp\\htdocs\\zinnig\\templates\\event\\index.html.twig");
    }
}

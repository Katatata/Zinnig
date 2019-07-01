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

/* @FOSUser/Security/login_content.html.twig */
class __TwigTemplate_fffbb75b9677107670ae89e3c87d0fab8227af2dbfd9aae138611106275cc510 extends \Twig\Template
{
    private $source;

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@FOSUser/Security/login_content.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@FOSUser/Security/login_content.html.twig"));

        // line 2
        echo "
<div class=\"container\">
    ";
        // line 4
        if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 4, $this->source); })())) {
            // line 5
            echo "        <div class=\"alert alert-danger\" role=\"alert\" style=\"max-width:181.188px;border: 1px solid #ff7281;\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 5, $this->source); })()), "messageKey", []), twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 5, $this->source); })()), "messageData", []), "security"), "html", null, true);
            echo "</div>
    ";
        }
        // line 7
        echo "    <h1 class=\"d-flex justify-content-center site_title\">LOGIN</h1>
</div>

<br>

<div class=\"container\">
    <form action=\"";
        // line 13
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fos_user_security_check");
        echo "\" method=\"post\">
        ";
        // line 14
        if ((isset($context["csrf_token"]) || array_key_exists("csrf_token", $context) ? $context["csrf_token"] : (function () { throw new RuntimeError('Variable "csrf_token" does not exist.', 14, $this->source); })())) {
            // line 15
            echo "            <input type=\"hidden\" name=\"_csrf_token\" value=\"";
            echo twig_escape_filter($this->env, (isset($context["csrf_token"]) || array_key_exists("csrf_token", $context) ? $context["csrf_token"] : (function () { throw new RuntimeError('Variable "csrf_token" does not exist.', 15, $this->source); })()), "html", null, true);
            echo "\" />
        ";
        }
        // line 17
        echo "
        <div class=\"form-group\">
            <label for=\"username\">";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Username", [], "FOSUserBundle"), "html", null, true);
        echo "</label>
            <input type=\"text\" class=\"form-control\" id=\"username\" name=\"_username\" value=\"";
        // line 20
        echo twig_escape_filter($this->env, (isset($context["last_username"]) || array_key_exists("last_username", $context) ? $context["last_username"] : (function () { throw new RuntimeError('Variable "last_username" does not exist.', 20, $this->source); })()), "html", null, true);
        echo "\" required=\"required\" autocomplete=\"username\" />
        </div>

        <br>

        <div class=\"form-group\">
            <label for=\"password\">";
        // line 26
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Password", [], "FOSUserBundle"), "html", null, true);
        echo "</label>
            <input type=\"password\" class=\"form-control\" id=\"password\" name=\"_password\" required=\"required\" autocomplete=\"current-password\" />
        </div>

        <br>
<!-- 
        <div class=\"form-group\">
            <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\" />
            <label for=\"remember_me\">";
        // line 34
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Remember me", [], "FOSUserBundle"), "html", null, true);
        echo "</label>
        </div> -->

        <div class=\"custom-control custom-checkbox\">
            <input type=\"checkbox\" class=\"custom-control-input\" id=\"remember_me\" name=\"_remember_me\" value=\"on\">
            <label class=\"custom-control-label\" for=\"remember_me\">";
        // line 39
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Remember me", [], "FOSUserBundle"), "html", null, true);
        echo "</label>
        </div>

        <br>

        <input class=\"btn animated tada butt slow\" type=\"submit\" id=\"_submit\" name=\"_submit\" value=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Login", [], "FOSUserBundle"), "html", null, true);
        echo "\" />
    </form>

    <br><br><br>
    <div class=\"container\">
        <a href=\"/register\" class=\"btn btn-success\" style=\"text-decoration:none;\">Register &#8594;</a>
    </div>
</div>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Security/login_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 44,  109 => 39,  101 => 34,  90 => 26,  81 => 20,  77 => 19,  73 => 17,  67 => 15,  65 => 14,  61 => 13,  53 => 7,  47 => 5,  45 => 4,  41 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{% trans_default_domain 'FOSUserBundle' %}

<div class=\"container\">
    {% if error %}
        <div class=\"alert alert-danger\" role=\"alert\" style=\"max-width:181.188px;border: 1px solid #ff7281;\">{{ error.messageKey|trans(error.messageData, 'security') }}</div>
    {% endif %}
    <h1 class=\"d-flex justify-content-center site_title\">LOGIN</h1>
</div>

<br>

<div class=\"container\">
    <form action=\"{{ path(\"fos_user_security_check\") }}\" method=\"post\">
        {% if csrf_token %}
            <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token }}\" />
        {% endif %}

        <div class=\"form-group\">
            <label for=\"username\">{{ 'Username'|trans }}</label>
            <input type=\"text\" class=\"form-control\" id=\"username\" name=\"_username\" value=\"{{ last_username }}\" required=\"required\" autocomplete=\"username\" />
        </div>

        <br>

        <div class=\"form-group\">
            <label for=\"password\">{{ 'Password'|trans }}</label>
            <input type=\"password\" class=\"form-control\" id=\"password\" name=\"_password\" required=\"required\" autocomplete=\"current-password\" />
        </div>

        <br>
<!-- 
        <div class=\"form-group\">
            <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\" />
            <label for=\"remember_me\">{{ 'Remember me'|trans }}</label>
        </div> -->

        <div class=\"custom-control custom-checkbox\">
            <input type=\"checkbox\" class=\"custom-control-input\" id=\"remember_me\" name=\"_remember_me\" value=\"on\">
            <label class=\"custom-control-label\" for=\"remember_me\">{{ 'Remember me'|trans }}</label>
        </div>

        <br>

        <input class=\"btn animated tada butt slow\" type=\"submit\" id=\"_submit\" name=\"_submit\" value=\"{{ 'Login'|trans }}\" />
    </form>

    <br><br><br>
    <div class=\"container\">
        <a href=\"/register\" class=\"btn btn-success\" style=\"text-decoration:none;\">Register &#8594;</a>
    </div>
</div>
", "@FOSUser/Security/login_content.html.twig", "C:\\xampp\\htdocs\\zinnig\\templates\\bundles\\FOSUserBundle\\Security\\login_content.html.twig");
    }
}

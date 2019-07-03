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

/* base.html.twig */
class __TwigTemplate_9be71436fd0c4b822ae6149ef925140716334f9634ad877fe5d21a5ab0423860 extends \Twig\Template
{
    private $source;

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'bootstrap_css' => [$this, 'block_bootstrap_css'],
            'bootstrap_js' => [$this, 'block_bootstrap_js'],
            'nav' => [$this, 'block_nav'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        ";
        $this->displayBlock('bootstrap_css', $context, $blocks);
        // line 81
        echo "    ";
        $this->displayBlock('bootstrap_js', $context, $blocks);
        // line 86
        echo "    </head>
    <body>
            ";
        // line 88
        $this->displayBlock('nav', $context, $blocks);
        // line 166
        echo "            </br>
            </br>
        ";
        // line 168
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER")) {
            echo " 
        ";
            // line 169
            $this->displayBlock('body', $context, $blocks);
            // line 170
            echo "        ";
        } else {
            // line 171
            echo "        <h1 class=\"d-flex justify-content-center site_title\">Please login to view tables</h1>

        <br>


        <div class=\"container\">
            <div class=\"row justify-content-center\">
            <a class=\"btn animated tada butt slow\"  href=\"/login\">Login</a>
            <div class=\"col-1\"></div>
            <a class=\"btn btn-success\" href=\"/register\">Register</a>
            </div>
        </div>
        ";
        }
        // line 184
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 185
        echo "    </body>
</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_title($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 7
    public function block_bootstrap_css($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "bootstrap_css"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "bootstrap_css"));

        // line 8
        echo "        <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css\" integrity=\"sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T\" crossorigin=\"anonymous\">
        <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css\">
        <link rel=\"stylesheet\" href=\"https://use.fontawesome.com/releases/v5.8.1/css/all.css\" integrity=\"sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf\" crossorigin=\"anonymous\">

        <style>
          .site_title{ 
            color: #f35626;
            background-image: -webkit-linear-gradient(92deg,#f35626,#feab3a);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            -webkit-animation: hue 60s infinite linear;
            background-clip: text;
            animation: hue 60s infinite linear;

            font-size: 3rem;
            font-weight: 100;
            line-height: 2;
            letter-spacing: -.05em;

            font: \"Roboto\", Verdana, sans-serif;
          }

          .butt {
            border: 2px solid #f35626;
            line-height: 1.375;
            padding-left: 1.5rem;
            padding-right: 1.5rem;
            font-weight: 700;
            color: #f35626;
            cursor: pointer;
            animation: hue 60s infinite linear;
          }

          body {
            background-image: url('https://i.pinimg.com/originals/fa/07/de/fa07def1196074b19ab56c65280371ec.gif');
            background-repeat: no-repeat;
            background-attachment:fixed;
            background-position:center bottom;
            background-size: 100% auto;
            background-color: #085f53;  
            color: white;
          }

          table {
            background-image: none;
            background: white
          }

          .butt {
            background: white;
          }

          
          @-webkit-keyframes hue {
            from {
              -webkit-filter: hue-rotate(0deg);
            }

            to {
              -webkit-filter: hue-rotate(-360deg);
            }
          }
          @keyframes hue {
            from {
              -webkit-filter: hue-rotate(0deg);
            }

            to {
              -webkit-filter: hue-rotate(-360deg);
            }
          }
        </style>
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 81
    public function block_bootstrap_js($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "bootstrap_js"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "bootstrap_js"));

        // line 82
        echo "        <script src=\"https://code.jquery.com/jquery-3.3.1.slim.min.js\" integrity=\"sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo\" crossorigin=\"anonymous\"></script>
        <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js\" integrity=\"sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1\" crossorigin=\"anonymous\"></script>
        <script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js\" integrity=\"sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM\" crossorigin=\"anonymous\"></script>
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 88
    public function block_nav($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "nav"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "nav"));

        echo " 
            <header>
              <nav class=\"navbar navbar-expand-lg navbar-dark\">
                  <div class=\"container\">
                    <a class=\"navbar-brand\" href=\"/user\"><i class=\"fas fa-book-reader\"></i> Zinnig Actief</a>
                    <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarsExample07\" aria-controls=\"navbarsExample07\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                      <span class=\"navbar-toggler-icon\"></span>
                    </button>
            
                    <div class=\"collapse navbar-collapse\" id=\"navbarsExample07\">
                      <ul class=\"navbar-nav mr-auto\">
                        <li class=\"nav-item\" id=\"nav-index\">
                          <a class=\"nav-link\" href=\"/user\">Home <span class=\"sr-only\">(current)</span></a>
                        </li>
                        <li class=\"nav-item\" id=\"nav-loc\">
                          <a class=\"nav-link\" href=\"/location\">Location</a>
                        </li>
                        <li class=\"nav-item\" id=\"nav-event\">
                          <a class=\"nav-link\" href=\"/event\">Event</a>
                        </li>
                        <li class=\"nav-item\" id=\"nav-act\">
                          <a class=\"nav-link\" href=\"/activity\">Activity</a>
                        </li>
                      </ul>
                      <ul class=\"nav navbar-nav navbar-right\">
                          ";
        // line 113
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER")) {
            echo " 
                            <li class=\"nav-item active\">
                              <a class=\"nav-link\" href=\"/logout\">
                                <button class=\"btn btn-danger navbar-btn\">Logout</button>
                              </a>
                            </li>
                          ";
        } else {
            // line 120
            echo "                            <li class=\"nav-item active\">
                              <a class=\"nav-link\" href=\"/login\">
                                <button class=\"btn btn-primary navbar-btn\">Login</button>
                              </a>
                            </li>
                            <li class=\"nav-item active\">
                              <a class=\"nav-link\" href=\"/register\">
                                <button class=\"btn btn-success navbar-btn\">Register</button>
                              </a>
                            </li>
                          ";
        }
        // line 131
        echo "                  
                        </ul>
                    </div>
                  </div>
                </nav>
            </header>
  
            <script>
                var permalink = window.location.pathname
                if(permalink.match('/logboek/')) {
                  navItem = document.getElementById('nav-index');
                  navItem.classList += ' active'
                }
                else if(permalink.match('/user/')) {
                  navItem = document.getElementById('nav-index');
                  navItem.classList += ' active'
                }
                else if(permalink.match('/location/')) {
                  navItem = document.getElementById('nav-loc');
                  navItem.classList += ' active'
                }
                else if(permalink.match('/event/')) {
                  navItem = document.getElementById('nav-event');
                  navItem.classList += ' active'
                }
                else if(permalink.match('/reservation/')) {
                  navItem = document.getElementById('nav-res');
                  navItem.classList += ' active'
                }
                else if(permalink.match('/activity/')) {
                  navItem = document.getElementById('nav-act');
                  navItem.classList += ' active'
                }
            </script>
          ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 169
    public function block_body($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 184
    public function block_javascripts($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  382 => 184,  365 => 169,  321 => 131,  308 => 120,  298 => 113,  263 => 88,  250 => 82,  241 => 81,  159 => 8,  150 => 7,  133 => 6,  115 => 5,  103 => 185,  100 => 184,  85 => 171,  82 => 170,  80 => 169,  76 => 168,  72 => 166,  70 => 88,  66 => 86,  63 => 81,  60 => 7,  58 => 6,  54 => 5,  48 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        {% block bootstrap_css %}
        <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css\" integrity=\"sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T\" crossorigin=\"anonymous\">
        <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css\">
        <link rel=\"stylesheet\" href=\"https://use.fontawesome.com/releases/v5.8.1/css/all.css\" integrity=\"sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf\" crossorigin=\"anonymous\">

        <style>
          .site_title{ 
            color: #f35626;
            background-image: -webkit-linear-gradient(92deg,#f35626,#feab3a);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            -webkit-animation: hue 60s infinite linear;
            background-clip: text;
            animation: hue 60s infinite linear;

            font-size: 3rem;
            font-weight: 100;
            line-height: 2;
            letter-spacing: -.05em;

            font: \"Roboto\", Verdana, sans-serif;
          }

          .butt {
            border: 2px solid #f35626;
            line-height: 1.375;
            padding-left: 1.5rem;
            padding-right: 1.5rem;
            font-weight: 700;
            color: #f35626;
            cursor: pointer;
            animation: hue 60s infinite linear;
          }

          body {
            background-image: url('https://i.pinimg.com/originals/fa/07/de/fa07def1196074b19ab56c65280371ec.gif');
            background-repeat: no-repeat;
            background-attachment:fixed;
            background-position:center bottom;
            background-size: 100% auto;
            background-color: #085f53;  
            color: white;
          }

          table {
            background-image: none;
            background: white
          }

          .butt {
            background: white;
          }

          
          @-webkit-keyframes hue {
            from {
              -webkit-filter: hue-rotate(0deg);
            }

            to {
              -webkit-filter: hue-rotate(-360deg);
            }
          }
          @keyframes hue {
            from {
              -webkit-filter: hue-rotate(0deg);
            }

            to {
              -webkit-filter: hue-rotate(-360deg);
            }
          }
        </style>
    {% endblock %}
    {% block bootstrap_js %}
        <script src=\"https://code.jquery.com/jquery-3.3.1.slim.min.js\" integrity=\"sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo\" crossorigin=\"anonymous\"></script>
        <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js\" integrity=\"sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1\" crossorigin=\"anonymous\"></script>
        <script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js\" integrity=\"sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM\" crossorigin=\"anonymous\"></script>
    {% endblock %}
    </head>
    <body>
            {% block nav %} 
            <header>
              <nav class=\"navbar navbar-expand-lg navbar-dark\">
                  <div class=\"container\">
                    <a class=\"navbar-brand\" href=\"/user\"><i class=\"fas fa-book-reader\"></i> Zinnig Actief</a>
                    <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarsExample07\" aria-controls=\"navbarsExample07\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                      <span class=\"navbar-toggler-icon\"></span>
                    </button>
            
                    <div class=\"collapse navbar-collapse\" id=\"navbarsExample07\">
                      <ul class=\"navbar-nav mr-auto\">
                        <li class=\"nav-item\" id=\"nav-index\">
                          <a class=\"nav-link\" href=\"/user\">Home <span class=\"sr-only\">(current)</span></a>
                        </li>
                        <li class=\"nav-item\" id=\"nav-loc\">
                          <a class=\"nav-link\" href=\"/location\">Location</a>
                        </li>
                        <li class=\"nav-item\" id=\"nav-event\">
                          <a class=\"nav-link\" href=\"/event\">Event</a>
                        </li>
                        <li class=\"nav-item\" id=\"nav-act\">
                          <a class=\"nav-link\" href=\"/activity\">Activity</a>
                        </li>
                      </ul>
                      <ul class=\"nav navbar-nav navbar-right\">
                          {% if is_granted('ROLE_USER') %} 
                            <li class=\"nav-item active\">
                              <a class=\"nav-link\" href=\"/logout\">
                                <button class=\"btn btn-danger navbar-btn\">Logout</button>
                              </a>
                            </li>
                          {% else %}
                            <li class=\"nav-item active\">
                              <a class=\"nav-link\" href=\"/login\">
                                <button class=\"btn btn-primary navbar-btn\">Login</button>
                              </a>
                            </li>
                            <li class=\"nav-item active\">
                              <a class=\"nav-link\" href=\"/register\">
                                <button class=\"btn btn-success navbar-btn\">Register</button>
                              </a>
                            </li>
                          {% endif %}
                  
                        </ul>
                    </div>
                  </div>
                </nav>
            </header>
  
            <script>
                var permalink = window.location.pathname
                if(permalink.match('/logboek/')) {
                  navItem = document.getElementById('nav-index');
                  navItem.classList += ' active'
                }
                else if(permalink.match('/user/')) {
                  navItem = document.getElementById('nav-index');
                  navItem.classList += ' active'
                }
                else if(permalink.match('/location/')) {
                  navItem = document.getElementById('nav-loc');
                  navItem.classList += ' active'
                }
                else if(permalink.match('/event/')) {
                  navItem = document.getElementById('nav-event');
                  navItem.classList += ' active'
                }
                else if(permalink.match('/reservation/')) {
                  navItem = document.getElementById('nav-res');
                  navItem.classList += ' active'
                }
                else if(permalink.match('/activity/')) {
                  navItem = document.getElementById('nav-act');
                  navItem.classList += ' active'
                }
            </script>
          {% endblock %}
            </br>
            </br>
        {% if is_granted('ROLE_USER') %} 
        {% block body %}{% endblock %}
        {% else %}
        <h1 class=\"d-flex justify-content-center site_title\">Please login to view tables</h1>

        <br>


        <div class=\"container\">
            <div class=\"row justify-content-center\">
            <a class=\"btn animated tada butt slow\"  href=\"/login\">Login</a>
            <div class=\"col-1\"></div>
            <a class=\"btn btn-success\" href=\"/register\">Register</a>
            </div>
        </div>
        {% endif %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "C:\\xampp\\htdocs\\zinnig\\templates\\base.html.twig");
    }
}

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

/* @FOSUser/layout.html.twig */
class __TwigTemplate_316e593b8684d2f029f152d78d1af6b75231baf2f847739cbea818d355dbf6f6 extends \Twig\Template
{
    private $source;

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'bootstrap_css' => [$this, 'block_bootstrap_css'],
            'bootstrap_js' => [$this, 'block_bootstrap_js'],
            'nav' => [$this, 'block_nav'],
            'fos_user_content' => [$this, 'block_fos_user_content'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@FOSUser/layout.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@FOSUser/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        ";
        // line 5
        $this->displayBlock('bootstrap_css', $context, $blocks);
        // line 84
        echo "        ";
        $this->displayBlock('bootstrap_js', $context, $blocks);
        // line 89
        echo "    </head>
    <body>
        ";
        // line 91
        $this->displayBlock('nav', $context, $blocks);
        // line 172
        echo "
<br>
<br>

        ";
        // line 176
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 176, $this->source); })()), "request", []), "hasPreviousSession", [])) {
            // line 177
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 177, $this->source); })()), "session", []), "flashbag", []), "all", [], "method"));
            foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
                // line 178
                echo "                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["messages"]);
                foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                    // line 179
                    echo "                    <div class=\"flash-";
                    echo twig_escape_filter($this->env, $context["type"], "html", null, true);
                    echo "\">
                        ";
                    // line 180
                    echo twig_escape_filter($this->env, $context["message"], "html", null, true);
                    echo "
                    </div>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 183
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 184
            echo "        ";
        }
        // line 185
        echo "
        <div>
            ";
        // line 187
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 189
        echo "        </div>
    </body>
</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_bootstrap_css($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "bootstrap_css"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "bootstrap_css"));

        // line 6
        echo "            <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css\" integrity=\"sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T\" crossorigin=\"anonymous\">
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
                  -webkit-animation: hue 60s infinite linear;
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

                input {
                  max-width: 70%;
                  
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

    // line 84
    public function block_bootstrap_js($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "bootstrap_js"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "bootstrap_js"));

        // line 85
        echo "            <script src=\"https://code.jquery.com/jquery-3.3.1.slim.min.js\" integrity=\"sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo\" crossorigin=\"anonymous\"></script>
            <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js\" integrity=\"sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1\" crossorigin=\"anonymous\"></script>
            <script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js\" integrity=\"sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM\" crossorigin=\"anonymous\"></script>
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 91
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
                  <a class=\"navbar-brand\" href=\"/user\"><i class=\"fas fa-book-reader\" style=\"\"></i> Zinnig Actief</a>
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
                      ";
        // line 117
        echo "                    </ul>
                    <ul class=\"nav navbar-nav navbar-right\">
                        ";
        // line 119
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER")) {
            echo " 
                          <li class=\"nav-item active\">
                            <a class=\"nav-link\" href=\"/logout\">
                              <button class=\"btn btn-danger navbar-btn\">Logout</button>
                            </a>
                          </li>
                        ";
        } else {
            // line 126
            echo "                          <li class=\"nav-item active\">
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
        // line 137
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

    // line 187
    public function block_fos_user_content($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 188
        echo "            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  353 => 188,  344 => 187,  300 => 137,  287 => 126,  277 => 119,  273 => 117,  240 => 91,  227 => 85,  218 => 84,  131 => 6,  122 => 5,  109 => 189,  107 => 187,  103 => 185,  100 => 184,  94 => 183,  85 => 180,  80 => 179,  75 => 178,  70 => 177,  68 => 176,  62 => 172,  60 => 91,  56 => 89,  53 => 84,  51 => 5,  45 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
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
                  -webkit-animation: hue 60s infinite linear;
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

                input {
                  max-width: 70%;
                  
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
                  <a class=\"navbar-brand\" href=\"/user\"><i class=\"fas fa-book-reader\" style=\"\"></i> Zinnig Actief</a>
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
                      {# <li class=\"nav-item\" id=\"nav-res\">
                        <a class=\"nav-link\" href=\"/reservation\">Reservation</a>
                      </li> #}
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

<br>
<br>

        {% if app.request.hasPreviousSession %}
            {% for type, messages in app.session.flashbag.all() %}
                {% for message in messages %}
                    <div class=\"flash-{{ type }}\">
                        {{ message }}
                    </div>
                {% endfor %}
            {% endfor %}
        {% endif %}

        <div>
            {% block fos_user_content %}
            {% endblock fos_user_content %}
        </div>
    </body>
</html>
", "@FOSUser/layout.html.twig", "C:\\xampp\\htdocs\\zinnig\\templates\\bundles\\FOSUserBundle\\layout.html.twig");
    }
}

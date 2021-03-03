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

/* city/pointOfInterest.html.twig */
class __TwigTemplate_1ba597ffbb4a9365caa49b3894c6b2ba10ecefc80ba40cdd34deab9bef9a0fa8 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "city/pointOfInterest.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "city/pointOfInterest.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "city/pointOfInterest.html.twig", 1);
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

        echo "Point of interest";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<style>
    .example-wrapper { margin: 1em auto; max-width: 800px; width: 95%; font: 18px/1.5 sans-serif; text-align: center;}
    .example-wrapper code { background: #f7e5f7; padding: 2px 6px; }
</style>

<div class=\"example-wrapper\">
    <h1>Pourquoi venir à ";
        // line 12
        echo twig_escape_filter($this->env, (isset($context["city"]) || array_key_exists("city", $context) ? $context["city"] : (function () { throw new RuntimeError('Variable "city" does not exist.', 12, $this->source); })()), "html", null, true);
        echo " ?</h1>


    <ul>
        <li>La clairette de Die</li>
        <img src=\"http://127.0.0.1:8000/assets/clair.jpg\" height=\"20%\" width=\"20%\">
        <li>Prune</li>
        <img src=\"http://127.0.0.1:8000/assets/prune.jpg\" height=\"20%\" width=\"20%\">
        <li>Aller se reposer à la Drôme</li>
        <img src=\"http://127.0.0.1:8000/assets/drome.jpg\" height=\"40%\" width=\"40%\">
        <li>Prendre un café au St Marcel (ah non ça existe plus)</li>
        <img src=\"http://127.0.0.1:8000/assets/stmar.jpg\" height=\"40%\" width=\"40%\">
        <li>La clairette de Die</li>
        <img src=\"http://127.0.0.1:8000/assets/clair.jpg\" height=\"20%\" width=\"20%\">
        <li>En cas d'invasion de zombies</li>
        <img src=\"http://127.0.0.1:8000/assets/zombie.jpg\" height=\"20%\" width=\"20%\">
        <li>Mourir en paix</li>
        <img src=\"http://127.0.0.1:8000/assets/mort.jpg\" height=\"30%\" width=\"30%\">
    </ul>
        <li>Page d'accueil : <code><a href=\"/\"> Ici</a></code></li>
        <li>Tout l'histoire de ";
        // line 32
        echo twig_escape_filter($this->env, (isset($context["city"]) || array_key_exists("city", $context) ? $context["city"] : (function () { throw new RuntimeError('Variable "city" does not exist.', 32, $this->source); })()), "html", null, true);
        echo " ici :  <code><a href=\"/history\">L'histoire</a></code></li>
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "city/pointOfInterest.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  119 => 32,  96 => 12,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Point of interest{% endblock %}

{% block body %}
<style>
    .example-wrapper { margin: 1em auto; max-width: 800px; width: 95%; font: 18px/1.5 sans-serif; text-align: center;}
    .example-wrapper code { background: #f7e5f7; padding: 2px 6px; }
</style>

<div class=\"example-wrapper\">
    <h1>Pourquoi venir à {{city}} ?</h1>


    <ul>
        <li>La clairette de Die</li>
        <img src=\"http://127.0.0.1:8000/assets/clair.jpg\" height=\"20%\" width=\"20%\">
        <li>Prune</li>
        <img src=\"http://127.0.0.1:8000/assets/prune.jpg\" height=\"20%\" width=\"20%\">
        <li>Aller se reposer à la Drôme</li>
        <img src=\"http://127.0.0.1:8000/assets/drome.jpg\" height=\"40%\" width=\"40%\">
        <li>Prendre un café au St Marcel (ah non ça existe plus)</li>
        <img src=\"http://127.0.0.1:8000/assets/stmar.jpg\" height=\"40%\" width=\"40%\">
        <li>La clairette de Die</li>
        <img src=\"http://127.0.0.1:8000/assets/clair.jpg\" height=\"20%\" width=\"20%\">
        <li>En cas d'invasion de zombies</li>
        <img src=\"http://127.0.0.1:8000/assets/zombie.jpg\" height=\"20%\" width=\"20%\">
        <li>Mourir en paix</li>
        <img src=\"http://127.0.0.1:8000/assets/mort.jpg\" height=\"30%\" width=\"30%\">
    </ul>
        <li>Page d'accueil : <code><a href=\"/\"> Ici</a></code></li>
        <li>Tout l'histoire de {{city}} ici :  <code><a href=\"/history\">L'histoire</a></code></li>
</div>
{% endblock %}
", "city/pointOfInterest.html.twig", "/home/blanc_p/demo_project/templates/city/pointOfInterest.html.twig");
    }
}

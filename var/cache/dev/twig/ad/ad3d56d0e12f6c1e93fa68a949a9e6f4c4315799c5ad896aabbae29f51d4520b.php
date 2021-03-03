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

/* city/history.html.twig */
class __TwigTemplate_337817000e72aadf5de0c169578104acd9ff5fad96ebf424001ce185058a7a36 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "city/history.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "city/history.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "city/history.html.twig", 1);
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

        echo "History";
        
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
    .example-wrapper { margin: 1em auto; max-width: 900px; width: 95%; font: 18px/1.5 sans-serif; text-align: center;
}
    .example-wrapper code { background: #f7e5f7; padding: 2px 6px; }
    .box {
  display: flex;
  align-items: flex-start;
  justify-content: space-between;
}
.div1{
    margin: 1em auto;
}
</style>

<div class=\"box\">
<div class=\"div1\">
    <img src=\"http://127.0.0.1:8000/assets/porte.jpg\" height=\"200%\" width=\"200%\">
</div>

<div class=\"example-wrapper\">
    <h1>Bonne lecture</h1>

Une première agglomération semble s'implanter au début de l'époque romaine sur un petit col surplombant la Drôme et le franchissement du vallon de Meyrosse, au carrefour entre la vallée et la voie menant au Trièves.
De nombreux indices montrent l'extension de l'urbanisation au Ier siècle.

IIe siècle : la ville de Die compte de nombreux monuments. Capitale des Voconces, elle remplace Luc-en-Diois dans cette fonction. Le titre de colonie (colonia Dea Augusta Vocontiorum) lui est décerné vers la fin du IIe siècle ou dans le courant du IIIe siècle. La ville devient un centre important du culte de Cybèle (attesté par sept inscriptions tauroboliques).

Nombreuses découvertes gallo-romaines : statues, bijoux, monnaies, stèles, inscriptions, et trois autels tauroboliques (MH) du IIIe siècle2.

Entre 285 et 305, alors que l'empire montre des signes de faiblesse, la ville s'entoure d'un rempart qui protège une surface urbanisée de 25 hectares. La région est en crise et certains quartiers périphériques sont déjà abandonnés. Le rempart de Die est long de deux kilomètres environ. Lors de l'édification, des fragments de monuments antiques sont réemployés.
La ville avait deux portes principales : la porte Saint-Pierre, démolie en 1891, à l'ouest, et la porte Saint-Marcel à l'est. Lors de la construction du rempart, un arc monumental du IIe siècle a été démonté pierre par pierre pour être réinséré dans la fortification du IVe siècle.
L'axe reliant les deux portes peut être considéré comme étant le decumanus. Le cardo, s'il existe, n'a pas été localisé.
Une route vers Grenoble passait par le massif de Glandasse (sud du Vercors) pour aboutir à Chichilliane. Sur ce plateau ont été retrouvés les fronts de taille de carrières de pierres extraites puis amenées à Die par le Pas de Chabrinel.

325 : Le premier évêque attesté est Nicaise. Il est le seul représentant des églises des Gaules au Premier concile de Nicée. Le diocèse sera réuni en 1276 à celui de Valence, puis à nouveau distinct de ce dernier à la fin du XVIIe siècle, avant d'être supprimé à la Révolution.     <ul>
        <li>Page d'accueil : <code><a href=\"/\"> Ici</a></code></li>
    <li>Venez découvrir les points d'intêrets ici : <code><a href=\"/pointOfInterest\"> Point d'intêrets </a></code></li>
    </ul>
</div>
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "city/history.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}History{% endblock %}

{% block body %}
<style>
    .example-wrapper { margin: 1em auto; max-width: 900px; width: 95%; font: 18px/1.5 sans-serif; text-align: center;
}
    .example-wrapper code { background: #f7e5f7; padding: 2px 6px; }
    .box {
  display: flex;
  align-items: flex-start;
  justify-content: space-between;
}
.div1{
    margin: 1em auto;
}
</style>

<div class=\"box\">
<div class=\"div1\">
    <img src=\"http://127.0.0.1:8000/assets/porte.jpg\" height=\"200%\" width=\"200%\">
</div>

<div class=\"example-wrapper\">
    <h1>Bonne lecture</h1>

Une première agglomération semble s'implanter au début de l'époque romaine sur un petit col surplombant la Drôme et le franchissement du vallon de Meyrosse, au carrefour entre la vallée et la voie menant au Trièves.
De nombreux indices montrent l'extension de l'urbanisation au Ier siècle.

IIe siècle : la ville de Die compte de nombreux monuments. Capitale des Voconces, elle remplace Luc-en-Diois dans cette fonction. Le titre de colonie (colonia Dea Augusta Vocontiorum) lui est décerné vers la fin du IIe siècle ou dans le courant du IIIe siècle. La ville devient un centre important du culte de Cybèle (attesté par sept inscriptions tauroboliques).

Nombreuses découvertes gallo-romaines : statues, bijoux, monnaies, stèles, inscriptions, et trois autels tauroboliques (MH) du IIIe siècle2.

Entre 285 et 305, alors que l'empire montre des signes de faiblesse, la ville s'entoure d'un rempart qui protège une surface urbanisée de 25 hectares. La région est en crise et certains quartiers périphériques sont déjà abandonnés. Le rempart de Die est long de deux kilomètres environ. Lors de l'édification, des fragments de monuments antiques sont réemployés.
La ville avait deux portes principales : la porte Saint-Pierre, démolie en 1891, à l'ouest, et la porte Saint-Marcel à l'est. Lors de la construction du rempart, un arc monumental du IIe siècle a été démonté pierre par pierre pour être réinséré dans la fortification du IVe siècle.
L'axe reliant les deux portes peut être considéré comme étant le decumanus. Le cardo, s'il existe, n'a pas été localisé.
Une route vers Grenoble passait par le massif de Glandasse (sud du Vercors) pour aboutir à Chichilliane. Sur ce plateau ont été retrouvés les fronts de taille de carrières de pierres extraites puis amenées à Die par le Pas de Chabrinel.

325 : Le premier évêque attesté est Nicaise. Il est le seul représentant des églises des Gaules au Premier concile de Nicée. Le diocèse sera réuni en 1276 à celui de Valence, puis à nouveau distinct de ce dernier à la fin du XVIIe siècle, avant d'être supprimé à la Révolution.     <ul>
        <li>Page d'accueil : <code><a href=\"/\"> Ici</a></code></li>
    <li>Venez découvrir les points d'intêrets ici : <code><a href=\"/pointOfInterest\"> Point d'intêrets </a></code></li>
    </ul>
</div>
</div>
{% endblock %}
", "city/history.html.twig", "/home/blanc_p/demo_project/templates/city/history.html.twig");
    }
}

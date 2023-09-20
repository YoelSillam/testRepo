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

/* etudiant/filtre.html.twig */
class __TwigTemplate_a27c2ce5c5c8029c855c5d9781447334 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "etudiant/filtre.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "etudiant/filtre.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "etudiant/filtre.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Etudiant index";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <h1>Etudiant index</h1>
    <form target=";
        // line 7
        echo "app_etudiant_filtre";
        echo " method=\"post\">
        <label for=\"sexe\">Sexe</label>
        <select name=\"sexeFiltre\" class=\"form-select\" aria-label=\"Default select example\">
            <option selected>choisir un sexe</option>
            <option VALUE=\"0\">non genré</option>
            <option value=\"1\">Homme</option>
            <option value=\"2\">Femme</option>
        </select>
        <button type=\"submit\" class=\"btn btn-primary\">Filtrer</button>




    </form>
    <table class=\"table\">
        <thead>
        <tr>
            <th>Id</th>
            <th>Nom</th>
            <th>Prenom</th>
            <th>Sexe</th>
            <th>Anniversaire</th>
            <th>actions</th>
        </tr>
        </thead>
        <tbody>
        ";
        // line 33
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["etudiants"]) || array_key_exists("etudiants", $context) ? $context["etudiants"] : (function () { throw new RuntimeError('Variable "etudiants" does not exist.', 33, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["etudiant"]) {
            // line 34
            echo "            <tr>
                <td>";
            // line 35
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["etudiant"], "id", [], "any", false, false, false, 35), "html", null, true);
            echo "</td>
                <td>";
            // line 36
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["etudiant"], "nom", [], "any", false, false, false, 36), "html", null, true);
            echo "</td>
                <td>";
            // line 37
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["etudiant"], "prenom", [], "any", false, false, false, 37), "html", null, true);
            echo "</td>
                <td>";
            // line 38
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["sexeTab"]) || array_key_exists("sexeTab", $context) ? $context["sexeTab"] : (function () { throw new RuntimeError('Variable "sexeTab" does not exist.', 38, $this->source); })()), twig_get_attribute($this->env, $this->source, $context["etudiant"], "sexe", [], "any", false, false, false, 38), [], "array", false, false, false, 38), "html", null, true);
            echo "</td>

                <td>";
            // line 40
            ((twig_get_attribute($this->env, $this->source, $context["etudiant"], "anniversaire", [], "any", false, false, false, 40)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["etudiant"], "anniversaire", [], "any", false, false, false, 40), "Y-m-d"), "html", null, true))) : (print ("")));
            echo "</td>
                <td>
                    <a href=\"";
            // line 42
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_etudiant_show", ["id" => twig_get_attribute($this->env, $this->source, $context["etudiant"], "id", [], "any", false, false, false, 42)]), "html", null, true);
            echo "\">show</a>
                    <a href=\"";
            // line 43
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_etudiant_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["etudiant"], "id", [], "any", false, false, false, 43)]), "html", null, true);
            echo "\">edit</a>
                </td>
            </tr>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 47
            echo "            <tr>
                <td colspan=\"6\">no records found</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['etudiant'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        echo "        </tbody>
    </table>

    <a href=\"";
        // line 54
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_etudiant_new");
        echo "\">Create new</a>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "etudiant/filtre.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  177 => 54,  172 => 51,  163 => 47,  154 => 43,  150 => 42,  145 => 40,  140 => 38,  136 => 37,  132 => 36,  128 => 35,  125 => 34,  120 => 33,  91 => 7,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Etudiant index{% endblock %}

{% block body %}
    <h1>Etudiant index</h1>
    <form target={{  \"app_etudiant_filtre\"}} method=\"post\">
        <label for=\"sexe\">Sexe</label>
        <select name=\"sexeFiltre\" class=\"form-select\" aria-label=\"Default select example\">
            <option selected>choisir un sexe</option>
            <option VALUE=\"0\">non genré</option>
            <option value=\"1\">Homme</option>
            <option value=\"2\">Femme</option>
        </select>
        <button type=\"submit\" class=\"btn btn-primary\">Filtrer</button>




    </form>
    <table class=\"table\">
        <thead>
        <tr>
            <th>Id</th>
            <th>Nom</th>
            <th>Prenom</th>
            <th>Sexe</th>
            <th>Anniversaire</th>
            <th>actions</th>
        </tr>
        </thead>
        <tbody>
        {% for etudiant in etudiants %}
            <tr>
                <td>{{ etudiant.id }}</td>
                <td>{{ etudiant.nom }}</td>
                <td>{{ etudiant.prenom }}</td>
                <td>{{ sexeTab[etudiant.sexe] }}</td>

                <td>{{ etudiant.anniversaire ? etudiant.anniversaire|date('Y-m-d') : '' }}</td>
                <td>
                    <a href=\"{{ path('app_etudiant_show', {'id': etudiant.id}) }}\">show</a>
                    <a href=\"{{ path('app_etudiant_edit', {'id': etudiant.id}) }}\">edit</a>
                </td>
            </tr>
        {% else %}
            <tr>
                <td colspan=\"6\">no records found</td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <a href=\"{{ path('app_etudiant_new') }}\">Create new</a>
{% endblock %}", "etudiant/filtre.html.twig", "/Users/yoelsillam/Documents/GitHub/testSymfonyRepoexe/testRepo/templates/etudiant/filtre.html.twig");
    }
}

<?php

/* event/detail.html.twig */
class __TwigTemplate_fa93815a06ea7b809891f05aebac4d46863f5f699e7be0d9e57748b882c5d292 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "event/detail.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "event/detail.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "event/detail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
<div class=\"col-12 text-center text-red p-3\"><h1>";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute(($context["event"] ?? $this->getContext($context, "event")), "name", array()), "html", null, true);
        echo "</h1><h4> <small id=\"details_table\">";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["event"] ?? $this->getContext($context, "event")), "category", array()), "name", array()), "html", null, true);
        echo "</small></h4></div>
<div class=\"col-12 d-flex justify-content-between\">
\t<div class=\"p-3\">
\t\t<h4><small id=\"details_short_desc\">";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute(($context["event"] ?? $this->getContext($context, "event")), "description", array()), "html", null, true);
        echo "</small></h4>
\t</div>
\t<div class=\"p-3\">
\t\t<img id=\"details_image\" class=\" d-none d-md-block\" src=\"/../img/";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute(($context["event"] ?? $this->getContext($context, "event")), "image", array()), "html", null, true);
        echo "\" alt=\"\">
\t</div>
</div>
<div class=\"col-12 p-3\">
\t<h4 class=\"text-red\">";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute(($context["event"] ?? $this->getContext($context, "event")), "locationName", array()), "html", null, true);
        echo "</h4>
\t<p>";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute(($context["event"] ?? $this->getContext($context, "event")), "adress", array()), "html", null, true);
        echo " <br> ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["event"] ?? $this->getContext($context, "event")), "zip", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["event"] ?? $this->getContext($context, "event")), "city", array()), "html", null, true);
        echo "</p>
\t<h4 class=\"text-red\">Current Date</h4>
\t<p>";
        // line 18
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["event"] ?? $this->getContext($context, "event")), "day", array()), "F j, Y, g:i a"), "html", null, true);
        echo "</p>
\t<h4 class=\"text-red\">Tickets &amp; Info</h4>
\t<p><a href=\"tel:";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute(($context["event"] ?? $this->getContext($context, "event")), "phone", array()), "html", null, true);
        echo "\" title=\"\"><i class=\"fas fa-phone\"></i> ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["event"] ?? $this->getContext($context, "event")), "phone", array()), "html", null, true);
        echo "</a><br>
\t\t<a href=\"mailto:";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute(($context["event"] ?? $this->getContext($context, "event")), "email", array()), "html", null, true);
        echo "\" title=\"\"><i class=\"far fa-envelope\"></i> ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["event"] ?? $this->getContext($context, "event")), "email", array()), "html", null, true);
        echo "</a> <br>
\t\t<a href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute(($context["event"] ?? $this->getContext($context, "event")), "url", array()), "html", null, true);
        echo "\"><i class=\"fas fa-globe\"></i> ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["event"] ?? $this->getContext($context, "event")), "url", array()), "html", null, true);
        echo "</a>
\t</p>
</div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "event/detail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  103 => 22,  97 => 21,  91 => 20,  86 => 18,  77 => 16,  73 => 15,  66 => 11,  60 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}

<div class=\"col-12 text-center text-red p-3\"><h1>{{event.name}}</h1><h4> <small id=\"details_table\">{{event.category.name}}</small></h4></div>
<div class=\"col-12 d-flex justify-content-between\">
\t<div class=\"p-3\">
\t\t<h4><small id=\"details_short_desc\">{{event.description}}</small></h4>
\t</div>
\t<div class=\"p-3\">
\t\t<img id=\"details_image\" class=\" d-none d-md-block\" src=\"/../img/{{event.image}}\" alt=\"\">
\t</div>
</div>
<div class=\"col-12 p-3\">
\t<h4 class=\"text-red\">{{event.locationName}}</h4>
\t<p>{{event.adress}} <br> {{event.zip}} {{event.city}}</p>
\t<h4 class=\"text-red\">Current Date</h4>
\t<p>{{event.day|date('F j, Y, g:i a')}}</p>
\t<h4 class=\"text-red\">Tickets &amp; Info</h4>
\t<p><a href=\"tel:{{event.phone}}\" title=\"\"><i class=\"fas fa-phone\"></i> {{event.phone}}</a><br>
\t\t<a href=\"mailto:{{event.email}}\" title=\"\"><i class=\"far fa-envelope\"></i> {{event.email}}</a> <br>
\t\t<a href=\"{{event.url}}\"><i class=\"fas fa-globe\"></i> {{event.url}}</a>
\t</p>
</div>

{% endblock %}", "event/detail.html.twig", "D:\\xampp\\htdocs\\cr13\\app\\Resources\\views\\event\\detail.html.twig");
    }
}

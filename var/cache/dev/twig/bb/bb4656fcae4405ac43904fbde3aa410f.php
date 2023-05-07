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

/* task/index.html.twig */
class __TwigTemplate_00f0f1ad00b6766a85be3eedb67e0dca extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "task/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "task/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "task/index.html.twig", 1);
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

        echo "TODO List";
        
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
        echo "    <section class=\"vh-100\" style=\"background-color: antiquewhite;\">
        <div class=\"container py-5 h-100\">
            <div class=\"row d-flex justify-content-center align-items-center h-100\">
                <div class=\"col col-xl-10\">

                    <div class=\"card\" style=\"border-radius: 15px;\">
                        <div class=\"card-body p-50\">

                            <h6 class=\"mb-30\">TODO LIST (appr. by Pavel Sh.)</h6>

                            <form
                                    class=\"d-flex justify-content-center align-items-center mb-4\"
                                    action=\"";
        // line 18
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("task_create");
        echo "\"
                                    method=\"post\"
                            >
                                <div class=\"form-outline flex-fill\">
                                    <input type=\"text\" name=\"content\" class=\"form-control form-control-lg\"/>
                                </div>
                                <button type=\"submit\" class=\"btn btn-primary btn-lg ms-2\">Add</button>
                            </form>

                            ";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 27, $this->source); })()), "flashes", [0 => "notice"], "method", false, false, false, 27));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 28
            echo "                                <div class=\"alert alert-warning\">";
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "</div>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "
                            <ul class=\"list-group mb-0\">
                                ";
        // line 32
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tasks"]) || array_key_exists("tasks", $context) ? $context["tasks"] : (function () { throw new RuntimeError('Variable "tasks" does not exist.', 32, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["task"]) {
            // line 33
            echo "                                    <li
                                            class=\"list-group-item d-flex justify-content-between align-items-center border-start-0 border-top-0 border-end-0 border-bottom rounded-0 mb-2\">
                                        <div class=\"d-flex align-items-center\">
                                            <form action=\"";
            // line 36
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("task_toggle", ["id" => twig_get_attribute($this->env, $this->source, $context["task"], "id", [], "any", false, false, false, 36)]), "html", null, true);
            echo "\" method=\"post\">
                                                <input
                                                        class=\"form-check-input me-2\" type=\"checkbox\" value=\"\"
                                                        aria-label=\"...\"
                                                        ";
            // line 40
            echo ((twig_get_attribute($this->env, $this->source, $context["task"], "isFinished", [], "any", false, false, false, 40)) ? ("checked") : (""));
            echo "
                                                        onclick=\"this.form.submit()\"
                                                />
                                            </form>
                                            ";
            // line 44
            if (twig_get_attribute($this->env, $this->source, $context["task"], "isFinished", [], "any", false, false, false, 44)) {
                // line 45
                echo "                                                <s>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["task"], "content", [], "any", false, false, false, 45), "html", null, true);
                echo "</s>
                                            ";
            } else {
                // line 47
                echo "                                                ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["task"], "content", [], "any", false, false, false, 47), "html", null, true);
                echo "
                                            ";
            }
            // line 49
            echo "                                        </div>

                                        <form action=\"";
            // line 51
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("task_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["task"], "id", [], "any", false, false, false, 51)]), "html", null, true);
            echo "\" method=\"post\">
                                            <button type=\"submit\" class=\"btn btn-danger\">Delete</button>
                                        </form>
                                    </li>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['task'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 56
        echo "                            </ul>

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "task/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  183 => 56,  172 => 51,  168 => 49,  162 => 47,  156 => 45,  154 => 44,  147 => 40,  140 => 36,  135 => 33,  131 => 32,  127 => 30,  118 => 28,  114 => 27,  102 => 18,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}TODO List{% endblock %}

{% block body %}
    <section class=\"vh-100\" style=\"background-color: antiquewhite;\">
        <div class=\"container py-5 h-100\">
            <div class=\"row d-flex justify-content-center align-items-center h-100\">
                <div class=\"col col-xl-10\">

                    <div class=\"card\" style=\"border-radius: 15px;\">
                        <div class=\"card-body p-50\">

                            <h6 class=\"mb-30\">TODO LIST (appr. by Pavel Sh.)</h6>

                            <form
                                    class=\"d-flex justify-content-center align-items-center mb-4\"
                                    action=\"{{ path('task_create') }}\"
                                    method=\"post\"
                            >
                                <div class=\"form-outline flex-fill\">
                                    <input type=\"text\" name=\"content\" class=\"form-control form-control-lg\"/>
                                </div>
                                <button type=\"submit\" class=\"btn btn-primary btn-lg ms-2\">Add</button>
                            </form>

                            {% for message in app.flashes('notice') %}
                                <div class=\"alert alert-warning\">{{ message }}</div>
                            {% endfor %}

                            <ul class=\"list-group mb-0\">
                                {% for task in tasks %}
                                    <li
                                            class=\"list-group-item d-flex justify-content-between align-items-center border-start-0 border-top-0 border-end-0 border-bottom rounded-0 mb-2\">
                                        <div class=\"d-flex align-items-center\">
                                            <form action=\"{{ path('task_toggle', {id: task.id}) }}\" method=\"post\">
                                                <input
                                                        class=\"form-check-input me-2\" type=\"checkbox\" value=\"\"
                                                        aria-label=\"...\"
                                                        {{ task.isFinished ? 'checked' : '' }}
                                                        onclick=\"this.form.submit()\"
                                                />
                                            </form>
                                            {% if task.isFinished %}
                                                <s>{{ task.content }}</s>
                                            {% else %}
                                                {{ task.content }}
                                            {% endif %}
                                        </div>

                                        <form action=\"{{ path('task_delete', {'id': task.id}) }}\" method=\"post\">
                                            <button type=\"submit\" class=\"btn btn-danger\">Delete</button>
                                        </form>
                                    </li>
                                {% endfor %}
                            </ul>

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
{% endblock %}", "task/index.html.twig", "C:\\Users\\Blast\\.symfony5\\todolistnew2\\templates\\task\\index.html.twig");
    }
}

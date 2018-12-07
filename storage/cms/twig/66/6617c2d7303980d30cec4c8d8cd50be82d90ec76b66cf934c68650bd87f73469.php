<?php

/* D:\Xampp\htdocs\codearx-october-cms/plugins/october/demo/components/todo/list.htm */
class __TwigTemplate_465a3d6b623103d1f723ebdac3c91fec406d0738d919e7249e720b552b51edf8 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 2
            echo "    <li class=\"list-group-item\">
        <input type=\"hidden\" name=\"items[]\" value=\"";
            // line 3
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\" />
        
        ";
            // line 5
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "

        <button type=\"button\" 
            class=\"close pull-right\" 
            aria-hidden=\"true\" 
            onclick=\"\$(this).closest('li').remove()\">&times;</button>
    </li>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "D:\\Xampp\\htdocs\\codearx-october-cms/plugins/october/demo/components/todo/list.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 5,  30 => 3,  27 => 2,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% for item in items %}
    <li class=\"list-group-item\">
        <input type=\"hidden\" name=\"items[]\" value=\"{{ item }}\" />
        
        {{ item }}

        <button type=\"button\" 
            class=\"close pull-right\" 
            aria-hidden=\"true\" 
            onclick=\"\$(this).closest('li').remove()\">&times;</button>
    </li>
{% endfor %}", "D:\\Xampp\\htdocs\\codearx-october-cms/plugins/october/demo/components/todo/list.htm", "");
    }
}

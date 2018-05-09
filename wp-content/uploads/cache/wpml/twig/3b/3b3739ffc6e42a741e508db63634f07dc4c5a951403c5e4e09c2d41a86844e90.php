<?php

/* summary.twig */
class __TwigTemplate_15aa7bd25679505ffafe3a5be9639bd7846caf198c94ecda54338574b16e329e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<p class=\"no-results\">";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["strings"] ?? null), "noResults", array()), "html", null, true);
        echo "</p>
<table class=\"report widefat fixed striped wpml-wc-report\">
\t<thead>
\t<tr>
\t\t<td class=\"manage-column column-cb check-column\">
\t\t\t<label class=\"screen-reader-text\" for=\"cb-select-all-1\">";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["strings"] ?? null), "columns", array()), "selectAll", array()), "html", null, true);
        echo "</label>
\t\t\t<input type=\"checkbox\" id=\"cb-select-all-1\" name=\"check-all\">
\t\t</td>
\t\t<th scope=\"col\" class=\"manage-column column-title column-primary\">";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["strings"] ?? null), "columns", array()), "type", array()), "html", null, true);
        echo "</th>
\t\t<th scope=\"col\" class=\"manage-column num\">";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["strings"] ?? null), "columns", array()), "count", array()), "untranslated", array()), "html", null, true);
        echo "</th>
\t\t<th scope=\"col\" class=\"manage-column num\">";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["strings"] ?? null), "columns", array()), "words", array()), "untranslated", array()), "html", null, true);
        echo "</th>
\t</tr>
\t</thead>
\t<tfoot>
\t<tr>
\t\t<td class=\"manage-column column-cb check-column\">
\t\t\t<label class=\"screen-reader-text\" for=\"cb-select-all-2\">";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["strings"] ?? null), "columns", array()), "selectAll", array()), "html", null, true);
        echo "</label>
\t\t\t<input type=\"checkbox\" id=\"cb-select-all-2\" name=\"check-all\">
\t\t</td>
\t\t<th scope=\"col\" class=\"manage-column column-title column-primary text-right\"><strong>";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["strings"] ?? null), "columns", array()), "sumTotal", array()), "html", null, true);
        echo "</strong></th>
\t\t<td scope=\"col\" class=\"manage-column num\">0</td>
\t\t<td scope=\"col\" class=\"manage-column num\">0</td>
\t</tr>
\t</tfoot>
\t<tbody>
\t";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["rows"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 27
            echo "\t\t<tr>
\t\t\t<th class=\"manage-column column-cb check-column\">
\t\t\t\t<!-- //TODO There is a text not possible to translate! -->
\t\t\t\t<label class=\"screen-reader-text\" for=\"cd-";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($context["row"], "type", array()));
            echo "\">Select ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["row"], "type", array()), "html", null, true);
            echo "</label>
\t\t\t\t<input id=\"cd-";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($context["row"], "type", array()));
            echo "\" type=\"checkbox\"";
            echo (($this->getAttribute($context["row"], "selected", array())) ? ("checked=\"checked\"") : (""));
            echo ">
\t\t\t</th>
\t\t\t<td class=\"description column-description\">
\t\t\t\t";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($context["row"], "type", array()), "html", null, true);
            echo "
\t\t\t</td>
\t\t\t<td class=\"posts column-posts num\" data-value=\"";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["row"], "count", array()), "untranslated", array()), "html", null, true);
            echo "\">
\t\t\t\t";
            // line 37
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($this->getAttribute($context["row"], "count", array()), "untranslated", array()), 0), "html", null, true);
            echo "
\t\t\t</td>
\t\t\t<td class=\"posts column-posts num\" data-value=\"";
            // line 39
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["row"], "words", array()), "untranslated", array()), "html", null, true);
            echo "\">
\t\t\t\t";
            // line 40
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($this->getAttribute($context["row"], "words", array()), "untranslated", array()), 0), "html", null, true);
            echo "
\t\t\t</td>
\t\t</tr>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        echo "\t</tbody>
</table>";
    }

    public function getTemplateName()
    {
        return "summary.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 44,  107 => 40,  103 => 39,  98 => 37,  94 => 36,  89 => 34,  81 => 31,  75 => 30,  70 => 27,  66 => 26,  57 => 20,  51 => 17,  42 => 11,  38 => 10,  34 => 9,  28 => 6,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "summary.twig", "/var/www/wmconvention/wp-content/plugins/wpml-translation-management/templates/words-count/summary.twig");
    }
}

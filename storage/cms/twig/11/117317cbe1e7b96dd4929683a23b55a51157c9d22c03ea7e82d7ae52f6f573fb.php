<?php

/* F:\Dropbox\OpenServer\domains\mzvector.local/plugins/october/demo/components/todo/list.htm */
class __TwigTemplate_3486b635ac2b07ed175a11f3700a8a5a884412567287746a7ff673feca123710 extends Twig_Template
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
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["items"]) ? $context["items"] : null));
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
            class=\"\" 
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
        return "F:\\Dropbox\\OpenServer\\domains\\mzvector.local/plugins/october/demo/components/todo/list.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 5,  26 => 3,  23 => 2,  19 => 1,);
    }
}
/* {% for item in items %}*/
/*     <li class="list-group-item">*/
/*         <input type="hidden" name="items[]" value="{{ item }}" />*/
/*         */
/*         {{ item }}*/
/* */
/*         <button type="button" */
/*             class="close pull-right" */
/*             aria-hidden="true" */
/*             class="" */
/*             onclick="$(this).closest('li').remove()">&times;</button>*/
/*     </li>*/
/* {% endfor %}*/

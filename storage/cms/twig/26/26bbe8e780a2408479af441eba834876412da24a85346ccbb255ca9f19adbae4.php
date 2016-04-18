<?php

/* F:\Dropbox\OpenServer\domains\mzvector.local/themes/vsTheme/pages/plugins.htm */
class __TwigTemplate_829a054fff6aec4d0c92c58b18e9ff6e0e30ef3f4cd4ac4e6c9baa974ab7feb6 extends Twig_Template
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
        echo "<div class=\"container\">
    <div class=\"row\">
        <div class=\"col-8\">
            <h1>Plugin components</h1>
            <p>Plugins can provide components, simple building blocks that enrich any page or layout. Check out the todo example below.</p>
        </div>
    </div>
</div>


<div class=\"container\">
    ";
        // line 12
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('CMS')->componentFunction("demoTodo"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 13
        echo "</div>

<!-- Page Explanation -->
<div class=\"container\">";
        // line 16
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("explain/test.htm"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "F:\\Dropbox\\OpenServer\\domains\\mzvector.local/themes/vsTheme/pages/plugins.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  41 => 16,  36 => 13,  32 => 12,  19 => 1,);
    }
}
/* <div class="container">*/
/*     <div class="row">*/
/*         <div class="col-8">*/
/*             <h1>Plugin components</h1>*/
/*             <p>Plugins can provide components, simple building blocks that enrich any page or layout. Check out the todo example below.</p>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* */
/* */
/* <div class="container">*/
/*     {% component 'demoTodo' %}*/
/* </div>*/
/* */
/* <!-- Page Explanation -->*/
/* <div class="container">{% partial "explain/test.htm" %}</div>*/

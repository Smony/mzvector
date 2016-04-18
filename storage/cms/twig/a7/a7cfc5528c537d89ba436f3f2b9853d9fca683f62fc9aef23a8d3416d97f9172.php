<?php

/* F:\Dropbox\OpenServer\domains\mzvector.local/themes/vsTheme/pages/test.htm */
class __TwigTemplate_7f0b2e377fbc8ec0ee27029138709ef6ea5d2578d68266643dfcdea80f3921fe extends Twig_Template
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
        echo "<hr>
";
        // line 2
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('CMS')->componentFunction("feedback"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 3
        echo "<hr>
";
        // line 4
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('CMS')->componentFunction("contactForm"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
    }

    public function getTemplateName()
    {
        return "F:\\Dropbox\\OpenServer\\domains\\mzvector.local/themes/vsTheme/pages/test.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 4,  26 => 3,  22 => 2,  19 => 1,);
    }
}
/* <hr>*/
/* {% component 'feedback' %}*/
/* <hr>*/
/* {% component 'contactForm' %}*/

<?php

/* F:\Dropbox\OpenServer\domains\mzvector.local/themes/vsTheme/pages/ajax.htm */
class __TwigTemplate_8dd9dc167d07b916795765a592405fab2f2b06e1a930cdd773c59bddc0049edc extends Twig_Template
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
            <h1>AJAX framework</h1>
            <p>This built-in JavaScript framework provides simple but powerful AJAX capabilities. Check out the calculator example below.</p>
        </div>
    </div>
</div>


<div class=\"container\">

    <div class=\"panel panel-default\">
        <div class=\"panel-heading\">
            <h3 class=\"panel-title\">Calculator</h3>
        </div>
        <div class=\"panel-body\">
            <form class=\"form-inline\" data-request=\"onTest\" data-request-update=\"calcresult: '#result'\">
                <input type=\"text\" class=\"form-control\" value=\"15\" name=\"value1\" style=\"width:100px\">
                <select class=\"form-control\" name=\"operation\" style=\"width: 70px\">
                    <option>+</option>
                    <option>-</option>
                    <option>*</option>
                    <option>/</option>
                </select>
                <input type=\"text\" class=\"form-control\" value=\"5\" name=\"value2\" style=\"width:100px\">
                <button type=\"submit\" class=\"btn btn btn-primary\">Calculate</button>
            </form>
        </div>
        <div class=\"panel-footer\" id=\"result\">
            ";
        // line 31
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("calcresult"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 32
        echo "        </div>
    </div>

</div>

<!-- Page Explanation -->
<div class=\"container\">";
        // line 38
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("explain/test.htm"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "F:\\Dropbox\\OpenServer\\domains\\mzvector.local/themes/vsTheme/pages/ajax.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 38,  55 => 32,  51 => 31,  19 => 1,);
    }
}
/* <div class="container">*/
/*     <div class="row">*/
/*         <div class="col-8">*/
/*             <h1>AJAX framework</h1>*/
/*             <p>This built-in JavaScript framework provides simple but powerful AJAX capabilities. Check out the calculator example below.</p>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* */
/* */
/* <div class="container">*/
/* */
/*     <div class="panel panel-default">*/
/*         <div class="panel-heading">*/
/*             <h3 class="panel-title">Calculator</h3>*/
/*         </div>*/
/*         <div class="panel-body">*/
/*             <form class="form-inline" data-request="onTest" data-request-update="calcresult: '#result'">*/
/*                 <input type="text" class="form-control" value="15" name="value1" style="width:100px">*/
/*                 <select class="form-control" name="operation" style="width: 70px">*/
/*                     <option>+</option>*/
/*                     <option>-</option>*/
/*                     <option>*</option>*/
/*                     <option>/</option>*/
/*                 </select>*/
/*                 <input type="text" class="form-control" value="5" name="value2" style="width:100px">*/
/*                 <button type="submit" class="btn btn btn-primary">Calculate</button>*/
/*             </form>*/
/*         </div>*/
/*         <div class="panel-footer" id="result">*/
/*             {% partial "calcresult" %}*/
/*         </div>*/
/*     </div>*/
/* */
/* </div>*/
/* */
/* <!-- Page Explanation -->*/
/* <div class="container">{% partial "explain/test.htm" %}</div>*/

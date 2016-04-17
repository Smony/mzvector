<?php

/* F:\Dropbox\OpenServer\domains\mzvector.local/plugins/smony/expertandclient/components/client/default.htm */
class __TwigTemplate_23de7d6e9d209256e306e0a319cd33a313495fed483e54f192f8fdca43a5c7f0 extends Twig_Template
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
        echo "
<aside class=\"clients\">
    <div class=\"container\">
        <div class=\"row\">

            ";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["myClient"]) ? $context["myClient"] : null), "getClients", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["clients"]) {
            // line 7
            echo "
            <div class=\"col-md-3 col-sm-6\">
                <a href=\"";
            // line 9
            echo twig_escape_filter($this->env, $this->getAttribute($context["clients"], "link", array()), "html", null, true);
            echo "\" target=\"_blank\">
                    <img src=\"";
            // line 10
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["clients"], "attachments", array()), "path", array()), "html", null, true);
            echo "\" class=\"img-responsive img-centered\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["clients"], "attachments", array()), "title", array()), "html", null, true);
            echo "\">
                </a>
            </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['clients'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "
        </div>
    </div>
</aside>";
    }

    public function getTemplateName()
    {
        return "F:\\Dropbox\\OpenServer\\domains\\mzvector.local/plugins/smony/expertandclient/components/client/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 14,  38 => 10,  34 => 9,  30 => 7,  26 => 6,  19 => 1,);
    }
}
/* */
/* <aside class="clients">*/
/*     <div class="container">*/
/*         <div class="row">*/
/* */
/*             {% for clients in myClient.getClients %}*/
/* */
/*             <div class="col-md-3 col-sm-6">*/
/*                 <a href="{{ clients.link }}" target="_blank">*/
/*                     <img src="{{ clients.attachments.path }}" class="img-responsive img-centered" alt="{{ clients.attachments.title }}">*/
/*                 </a>*/
/*             </div>*/
/*             {% endfor %}*/
/* */
/*         </div>*/
/*     </div>*/
/* </aside>*/

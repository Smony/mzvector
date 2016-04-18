<?php

/* F:\Dropbox\OpenServer\domains\mzvector.local/plugins/smony/about/components/about/default.htm */
class __TwigTemplate_849ec22fed375b92a2f33943f0592ad28bbe13e49924b724f728c68da919c200 extends Twig_Template
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
        echo "<section id=\"about\">
    ";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["myAbout"]) ? $context["myAbout"] : null), "getAbout", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["about"]) {
            // line 3
            echo "    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-12 text-center\">
                <h2 class=\"section-heading\">О Компании</h2>
                <h3 class=\"section-subheading text-muted\">";
            // line 7
            echo twig_escape_filter($this->env, $this->getAttribute($context["about"], "text_muted", array()), "html", null, true);
            echo "</h3>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-lg-12\">

                <div class=\"col-lg-12 myabout\">";
            // line 13
            echo twig_escape_filter($this->env, strip_tags($this->getAttribute($context["about"], "text", array())), "html", null, true);
            echo "</div>

            </div>
        </div>
    </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['about'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "</section>";
    }

    public function getTemplateName()
    {
        return "F:\\Dropbox\\OpenServer\\domains\\mzvector.local/plugins/smony/about/components/about/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 19,  41 => 13,  32 => 7,  26 => 3,  22 => 2,  19 => 1,);
    }
}
/* <section id="about">*/
/*     {% for about in myAbout.getAbout %}*/
/*     <div class="container">*/
/*         <div class="row">*/
/*             <div class="col-lg-12 text-center">*/
/*                 <h2 class="section-heading">О Компании</h2>*/
/*                 <h3 class="section-subheading text-muted">{{ about.text_muted }}</h3>*/
/*             </div>*/
/*         </div>*/
/*         <div class="row">*/
/*             <div class="col-lg-12">*/
/* */
/*                 <div class="col-lg-12 myabout">{{ about.text|striptags }}</div>*/
/* */
/*             </div>*/
/*         </div>*/
/*     </div>*/
/*     {% endfor %}*/
/* </section>*/

<?php

/* F:\Dropbox\OpenServer\domains\mzvector.local/plugins/smony/service/components/service/default.htm */
class __TwigTemplate_47e3271f776869c6e789b55f69cb612068c6ac7ba117e29e4de917a1dae9aaa4 extends Twig_Template
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
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["myService"]) ? $context["myService"] : null), "getServices", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["service"]) {
            // line 2
            echo "<div class=\"col-md-4 col-sm-6 portfolio-item\">
    <a href=\"#portfolioModal";
            // line 3
            echo twig_escape_filter($this->env, $this->getAttribute($context["service"], "id", array()), "html", null, true);
            echo "\" class=\"portfolio-link\" data-toggle=\"modal\">
        <img src=\"";
            // line 4
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["service"], "attachments", array()), "path", array()), "html", null, true);
            echo "\" class=\"img-responsive\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["service"], "attachments", array()), "title", array()), "html", null, true);
            echo "\">
    </a>
    <div class=\"portfolio-caption\">
        <h4>";
            // line 7
            echo twig_escape_filter($this->env, $this->getAttribute($context["service"], "title", array()), "html", null, true);
            echo "</h4>

        <p class=\"text-muted\">";
            // line 9
            echo twig_escape_filter($this->env, $this->getAttribute($context["service"], "min_text", array()), "html", null, true);
            echo "</p>

    </div>
</div>
<!-- Portfolio Modal 1 -->
<div class=\"portfolio-modal modal fade\" id=\"portfolioModal";
            // line 14
            echo twig_escape_filter($this->env, $this->getAttribute($context["service"], "id", array()), "html", null, true);
            echo "\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
    <div class=\"modal-content\">
        <div class=\"close-modal\" data-dismiss=\"modal\">
            <div class=\"lr\">
                <div class=\"rl\">
                </div>
            </div>
        </div>
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-8 col-lg-offset-2\">
                    <div class=\"modal-body\">
                        <!-- Project Details Go Here -->
                        <h2>";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["service"], "title", array()), "html", null, true);
            echo "</h2>
                        <p class=\"item-intro text-muted\">";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["service"], "min_text", array()), "html", null, true);
            echo "</p>
                        <img class=\"img-responsive img-centered\" src=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["service"], "attachments", array()), "path", array()), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["service"], "attachments", array()), "title", array()), "html", null, true);
            echo "\">
                        <p>";
            // line 30
            echo twig_escape_filter($this->env, strip_tags($this->getAttribute($context["service"], "text", array())), "html", null, true);
            echo "<p>

                        <button type=\"button\" class=\"btn btn-primary\" data-dismiss=\"modal\"><i class=\"fa fa-times\"></i> Закрыть</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['service'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "F:\\Dropbox\\OpenServer\\domains\\mzvector.local/plugins/smony/service/components/service/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 30,  75 => 29,  71 => 28,  67 => 27,  51 => 14,  43 => 9,  38 => 7,  30 => 4,  26 => 3,  23 => 2,  19 => 1,);
    }
}
/* {% for service in myService.getServices %}*/
/* <div class="col-md-4 col-sm-6 portfolio-item">*/
/*     <a href="#portfolioModal{{ service.id }}" class="portfolio-link" data-toggle="modal">*/
/*         <img src="{{ service.attachments.path }}" class="img-responsive" alt="{{ service.attachments.title }}">*/
/*     </a>*/
/*     <div class="portfolio-caption">*/
/*         <h4>{{ service.title }}</h4>*/
/* */
/*         <p class="text-muted">{{ service.min_text }}</p>*/
/* */
/*     </div>*/
/* </div>*/
/* <!-- Portfolio Modal 1 -->*/
/* <div class="portfolio-modal modal fade" id="portfolioModal{{ service.id }}" tabindex="-1" role="dialog" aria-hidden="true">*/
/*     <div class="modal-content">*/
/*         <div class="close-modal" data-dismiss="modal">*/
/*             <div class="lr">*/
/*                 <div class="rl">*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*         <div class="container">*/
/*             <div class="row">*/
/*                 <div class="col-lg-8 col-lg-offset-2">*/
/*                     <div class="modal-body">*/
/*                         <!-- Project Details Go Here -->*/
/*                         <h2>{{ service.title }}</h2>*/
/*                         <p class="item-intro text-muted">{{ service.min_text }}</p>*/
/*                         <img class="img-responsive img-centered" src="{{ service.attachments.path }}" alt="{{ service.attachments.title }}">*/
/*                         <p>{{ service.text|striptags }}<p>*/
/* */
/*                         <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Закрыть</button>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* {% endfor %}*/

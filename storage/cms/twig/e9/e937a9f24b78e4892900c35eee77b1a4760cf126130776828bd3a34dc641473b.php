<?php

/* F:\Dropbox\OpenServer\domains\mzvector.local/plugins/smony/expertandclient/components/expert/default.htm */
class __TwigTemplate_3bd2835a5feabd2b7235953b5e99e4294f88cffea51fda350e31f01296fb05c4 extends Twig_Template
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
<section id=\"team\" class=\"bg-light-gray\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-12 text-center\">
                <h2 class=\"section-heading\">Наші фахівці та клієнти</h2>
                <h3 class=\"section-subheading text-muted\">Внешнего вида контента, просмотра шрифтов, абзацев, отступов и проектах, ориентированных.</h3>
            </div>
        </div>
        <div class=\"row\">



            ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["myExpert"]) ? $context["myExpert"] : null), "getExperts", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["experts"]) {
            // line 15
            echo "
            <div class=\"col-sm-4\">
                <div class=\"team-member\">
                    <img src=\"";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["experts"], "attachments", array()), "path", array()), "html", null, true);
            echo "\" class=\"img-responsive img-circle\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["experts"], "attachments", array()), "title", array()), "html", null, true);
            echo "\">
                    <h4>";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["experts"], "full_name", array()), "html", null, true);
            echo "</h4>
                    <p class=\"text-muted\">";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["experts"], "position", array()), "html", null, true);
            echo "</p>
                    <ul class=\"list-inline social-buttons\">
                        <li><a href=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["experts"], "vk", array()), "html", null, true);
            echo "\" target=\"_blank\"><i class=\"fa fa-vk\" aria-hidden=\"true\"></i></a>
                        </li>
                        <li><a href=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["experts"], "fb", array()), "html", null, true);
            echo "\" target=\"_blank\"><i class=\"fa fa-facebook\"></i></a>
                        </li>
                        <li><a href=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["experts"], "in", array()), "html", null, true);
            echo "\" target=\"_blank\"><i class=\"fa fa-linkedin\"></i></a>
                        </li>
                    </ul>
                </div>
            </div>

            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['experts'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "

        </div>
        <div class=\"row\">
            <div class=\"col-lg-8 col-lg-offset-2 text-center\">
                <p class=\"large text-muted\">Иные буквы встречаются с языками. Lorem обязан древнеримскому философу цицерону, ведь именно.</p>
            </div>
        </div>
    </div>
</section>";
    }

    public function getTemplateName()
    {
        return "F:\\Dropbox\\OpenServer\\domains\\mzvector.local/plugins/smony/expertandclient/components/expert/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 33,  68 => 26,  63 => 24,  58 => 22,  53 => 20,  49 => 19,  43 => 18,  38 => 15,  34 => 14,  19 => 1,);
    }
}
/* */
/* <section id="team" class="bg-light-gray">*/
/*     <div class="container">*/
/*         <div class="row">*/
/*             <div class="col-lg-12 text-center">*/
/*                 <h2 class="section-heading">Наші фахівці та клієнти</h2>*/
/*                 <h3 class="section-subheading text-muted">Внешнего вида контента, просмотра шрифтов, абзацев, отступов и проектах, ориентированных.</h3>*/
/*             </div>*/
/*         </div>*/
/*         <div class="row">*/
/* */
/* */
/* */
/*             {% for experts in myExpert.getExperts %}*/
/* */
/*             <div class="col-sm-4">*/
/*                 <div class="team-member">*/
/*                     <img src="{{ experts.attachments.path }}" class="img-responsive img-circle" alt="{{ experts.attachments.title }}">*/
/*                     <h4>{{ experts.full_name }}</h4>*/
/*                     <p class="text-muted">{{ experts.position }}</p>*/
/*                     <ul class="list-inline social-buttons">*/
/*                         <li><a href="{{ experts.vk }}" target="_blank"><i class="fa fa-vk" aria-hidden="true"></i></a>*/
/*                         </li>*/
/*                         <li><a href="{{ experts.fb }}" target="_blank"><i class="fa fa-facebook"></i></a>*/
/*                         </li>*/
/*                         <li><a href="{{ experts.in }}" target="_blank"><i class="fa fa-linkedin"></i></a>*/
/*                         </li>*/
/*                     </ul>*/
/*                 </div>*/
/*             </div>*/
/* */
/*             {% endfor %}*/
/* */
/* */
/*         </div>*/
/*         <div class="row">*/
/*             <div class="col-lg-8 col-lg-offset-2 text-center">*/
/*                 <p class="large text-muted">Иные буквы встречаются с языками. Lorem обязан древнеримскому философу цицерону, ведь именно.</p>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* </section>*/

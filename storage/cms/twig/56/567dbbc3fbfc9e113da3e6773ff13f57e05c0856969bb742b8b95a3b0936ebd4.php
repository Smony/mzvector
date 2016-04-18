<?php

/* F:\Dropbox\OpenServer\domains\mzvector.local/plugins/ebussola/feedback/components/feedback/default.htm */
class __TwigTemplate_89db0de092a6d8197db80a67d478d1daef9ed87b96c776168a44e8a7bb49a27f extends Twig_Template
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
        // line 5
        echo "<form onsubmit=\"ebussolaFeedbackFormSubmit(this, event);\" method=\"POST\">

    <div class=\"row\">
        <div class=\"col-md-6\">


            ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["myContact"]) ? $context["myContact"] : null), "getContact", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["contact"]) {
            // line 12
            echo "
            <div class=\"cont-list\"><i class=\"fa fa-map-marker\"></i>&nbsp;&nbsp;&nbsp;";
            // line 13
            echo twig_escape_filter($this->env, $this->getAttribute($context["contact"], "address", array()), "html", null, true);
            echo "</div>
            <div class=\"cont-list\"><i class=\"fa fa-phone\"></i>&nbsp;&nbsp;&nbsp;";
            // line 14
            echo twig_escape_filter($this->env, $this->getAttribute($context["contact"], "phone", array()), "html", null, true);
            echo "</div>
            <div class=\"cont-list\"><i class=\"fa fa-envelope\"></i>&nbsp;&nbsp;&nbsp;";
            // line 15
            echo twig_escape_filter($this->env, $this->getAttribute($context["contact"], "email", array()), "html", null, true);
            echo "</div>

            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['contact'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        echo "

            <div class=\"map_site\">";
        // line 20
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('CMS')->componentFunction("googleMap"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        echo "</div>

        </div>

        <div class=\"col-md-6\">


            <script>
                function ebussolaFeedbackFormSubmit(el, event) {
                    event.preventDefault();
                    \$(el).request('";
        // line 30
        echo twig_escape_filter($this->env, (isset($context["__SELF__"]) ? $context["__SELF__"] : null), "html", null, true);
        echo "::onSend', {
                        success: function(data) {
                            alert(data.result);
                            location.reload();
                        },
                        error: function(data) {
                            alert(data.responseJSON.result);
                        }
                    });
                }
            </script>

            <div class=\"form-group\">
                <input name=\"feedback[name]\" type=\"text\" class=\"form-control\" placeholder=\"Your Name *\" id=\"feedback-name\" required data-validation-required-message=\"Please enter your name.\">
                <p class=\"help-block text-danger\"></p>
            </div>
            <div class=\"form-group\">
                <input name=\"feedback[email]\" type=\"email\" class=\"form-control\" placeholder=\"Your Email *\" id=\"feedback-email\" required data-validation-required-message=\"Please enter your email address.\">
                <p class=\"help-block text-danger\"></p>
            </div>
            <!--<div class=\"form-group\">
                <input type=\"tel\" class=\"form-control\" placeholder=\"Your Phone *\" id=\"phone\" required data-validation-required-message=\"Please enter your phone number.\">
                <p class=\"help-block text-danger\"></p>
            </div>-->
            <div class=\"form-group\">
                <textarea name=\"feedback[message]\" class=\"form-control\" placeholder=\"Your Message *\" id=\"feedback-message\" required data-validation-required-message=\"Please enter a message.\"></textarea>
                <p class=\"help-block text-danger\"></p>
            </div>

        </div>
        <div class=\"clearfix\"></div>
        <div class=\"col-lg-12 text-right\">
            <div id=\"success\"></div>
            <button type=\"submit\" class=\"btn btn-xl\">Надіслати повідомлення</button>
        </div>
    </div>


</form>








";
    }

    public function getTemplateName()
    {
        return "F:\\Dropbox\\OpenServer\\domains\\mzvector.local/plugins/ebussola/feedback/components/feedback/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 30,  55 => 20,  51 => 18,  42 => 15,  38 => 14,  34 => 13,  31 => 12,  27 => 11,  19 => 5,);
    }
}
/* {#*/
/*     We recommend to keep using the same names for the basic fields.*/
/*     However, you can add as much fields as you want.*/
/* #}*/
/* <form onsubmit="ebussolaFeedbackFormSubmit(this, event);" method="POST">*/
/* */
/*     <div class="row">*/
/*         <div class="col-md-6">*/
/* */
/* */
/*             {% for contact in myContact.getContact %}*/
/* */
/*             <div class="cont-list"><i class="fa fa-map-marker"></i>&nbsp;&nbsp;&nbsp;{{ contact.address }}</div>*/
/*             <div class="cont-list"><i class="fa fa-phone"></i>&nbsp;&nbsp;&nbsp;{{ contact.phone }}</div>*/
/*             <div class="cont-list"><i class="fa fa-envelope"></i>&nbsp;&nbsp;&nbsp;{{ contact.email }}</div>*/
/* */
/*             {% endfor %}*/
/* */
/* */
/*             <div class="map_site">{% component 'googleMap' %}</div>*/
/* */
/*         </div>*/
/* */
/*         <div class="col-md-6">*/
/* */
/* */
/*             <script>*/
/*                 function ebussolaFeedbackFormSubmit(el, event) {*/
/*                     event.preventDefault();*/
/*                     $(el).request('{{ __SELF__ }}::onSend', {*/
/*                         success: function(data) {*/
/*                             alert(data.result);*/
/*                             location.reload();*/
/*                         },*/
/*                         error: function(data) {*/
/*                             alert(data.responseJSON.result);*/
/*                         }*/
/*                     });*/
/*                 }*/
/*             </script>*/
/* */
/*             <div class="form-group">*/
/*                 <input name="feedback[name]" type="text" class="form-control" placeholder="Your Name *" id="feedback-name" required data-validation-required-message="Please enter your name.">*/
/*                 <p class="help-block text-danger"></p>*/
/*             </div>*/
/*             <div class="form-group">*/
/*                 <input name="feedback[email]" type="email" class="form-control" placeholder="Your Email *" id="feedback-email" required data-validation-required-message="Please enter your email address.">*/
/*                 <p class="help-block text-danger"></p>*/
/*             </div>*/
/*             <!--<div class="form-group">*/
/*                 <input type="tel" class="form-control" placeholder="Your Phone *" id="phone" required data-validation-required-message="Please enter your phone number.">*/
/*                 <p class="help-block text-danger"></p>*/
/*             </div>-->*/
/*             <div class="form-group">*/
/*                 <textarea name="feedback[message]" class="form-control" placeholder="Your Message *" id="feedback-message" required data-validation-required-message="Please enter a message."></textarea>*/
/*                 <p class="help-block text-danger"></p>*/
/*             </div>*/
/* */
/*         </div>*/
/*         <div class="clearfix"></div>*/
/*         <div class="col-lg-12 text-right">*/
/*             <div id="success"></div>*/
/*             <button type="submit" class="btn btn-xl">Надіслати повідомлення</button>*/
/*         </div>*/
/*     </div>*/
/* */
/* */
/* </form>*/
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */

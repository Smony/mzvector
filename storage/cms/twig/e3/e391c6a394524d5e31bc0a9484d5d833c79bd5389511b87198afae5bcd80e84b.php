<?php

/* F:\Dropbox\OpenServer\domains\mzvector.local/themes/vsTheme/pages/home.htm */
class __TwigTemplate_a1a2f7802bc1321b7a16b07489eb904412cdd2b30d6f83af9cdbee524c80bdeb extends Twig_Template
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
        echo "<!-- Services Section -->
\t<!--
    <section id=\"services\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-12 text-center\">
                    <h2 class=\"section-heading\">Services</h2>
                    <h3 class=\"section-subheading text-muted\">Lorem ipsum dolor sit amet consectetur.</h3>
                </div>
            </div>
            <div class=\"row text-center\">
                <div class=\"col-md-4\">
                    <span class=\"fa-stack fa-4x\">
                        <i class=\"fa fa-circle fa-stack-2x text-primary\"></i>
                        <i class=\"fa fa-shopping-cart fa-stack-1x fa-inverse\"></i>
                    </span>
                    <h4 class=\"service-heading\">E-Commerce</h4>
                    <p class=\"text-muted\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedit.</p>
                </div>
                <div class=\"col-md-4\">
                    <span class=\"fa-stack fa-4x\">
                        <i class=\"fa fa-circle fa-stack-2x text-primary\"></i>
                        <i class=\"fa fa-laptop fa-stack-1x fa-inverse\"></i>
                    </span>
                    <h4 class=\"service-heading\">Responsive Design</h4>
                    <p class=\"text-muted\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedit.</p>
                </div>
                <div class=\"col-md-4\">
                    <span class=\"fa-stack fa-4x\">
                        <i class=\"fa fa-circle fa-stack-2x text-primary\"></i>
                        <i class=\"fa fa-lock fa-stack-1x fa-inverse\"></i>
                    </span>
                    <h4 class=\"service-heading\">Web Security</h4>
                    <p class=\"text-muted\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedit.</p>
                </div>
            </div>
        </div>
    </section>
\t-->
    <!-- Portfolio Grid Section -->
    <section id=\"services\" class=\"bg-light-gray\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-12 text-center\">
                    <h2 class=\"section-heading\">УСЛУГИ</h2>
                    <h3 class=\"section-subheading text-muted\">Украина всегда стремится оказывать наиболее широкий спектр юридических услуг.</h3>
                </div>
            </div>

            <div class=\"row\">
                ";
        // line 51
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('CMS')->componentFunction("myService"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 52
        echo "            </div>
        </div>
    </section>

    <!-- About Section -->
    ";
        // line 57
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('CMS')->componentFunction("myAbout"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 58
        echo "
    <!-- Team Section -->
    ";
        // line 60
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('CMS')->componentFunction("myExpert"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 61
        echo "    
    <!-- Clients Aside -->
    ";
        // line 63
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('CMS')->componentFunction("myClient"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 64
        echo "

    <!-- Contact Section -->
    <section id=\"contact\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-12 text-center\">
                    <h2 class=\"section-heading\">Контакты</h2>
                    <h3 class=\"section-subheading text-muted\">Для связи с нами используйте форму ниже либо указанную контактную информацию.</h3>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-lg-12\">
                    <form name=\"sentMessage\" id=\"contactForm\" novalidate>
                        <div class=\"row\">
                            <div class=\"col-md-6\">


                                ";
        // line 82
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["myContact"]) ? $context["myContact"] : null), "getContact", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["contact"]) {
            // line 83
            echo "
                                <div class=\"cont-list\"><i class=\"fa fa-map-marker\"></i>&nbsp;&nbsp;&nbsp;";
            // line 84
            echo twig_escape_filter($this->env, $this->getAttribute($context["contact"], "address", array()), "html", null, true);
            echo "</div>
                                <div class=\"cont-list\"><i class=\"fa fa-phone\"></i>&nbsp;&nbsp;&nbsp;";
            // line 85
            echo twig_escape_filter($this->env, $this->getAttribute($context["contact"], "phone", array()), "html", null, true);
            echo "</div>
                                <div class=\"cont-list\"><i class=\"fa fa-envelope\"></i>&nbsp;&nbsp;&nbsp;";
            // line 86
            echo twig_escape_filter($this->env, $this->getAttribute($context["contact"], "email", array()), "html", null, true);
            echo "</div>

                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['contact'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 89
        echo "

                                <div class=\"map_site\">";
        // line 91
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('CMS')->componentFunction("googleMap"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        echo "</div>

                            </div>
                            <div class=\"col-md-6\">

    <div class=\"form-group\">
        <input type=\"text\" class=\"form-control\" placeholder=\"Your Name *\" id=\"name\" required data-validation-required-message=\"Please enter your name.\">
        <p class=\"help-block text-danger\"></p>
    </div>
    <div class=\"form-group\">
        <input type=\"email\" class=\"form-control\" placeholder=\"Your Email *\" id=\"email\" required data-validation-required-message=\"Please enter your email address.\">
        <p class=\"help-block text-danger\"></p>
    </div>
    <div class=\"form-group\">
        <input type=\"tel\" class=\"form-control\" placeholder=\"Your Phone *\" id=\"phone\" required data-validation-required-message=\"Please enter your phone number.\">
        <p class=\"help-block text-danger\"></p>
    </div>
    <div class=\"form-group\">
        <textarea class=\"form-control\" placeholder=\"Your Message *\" id=\"message\" required data-validation-required-message=\"Please enter a message.\"></textarea>
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
                </div>
            </div>
        </div>
    </section>";
    }

    public function getTemplateName()
    {
        return "F:\\Dropbox\\OpenServer\\domains\\mzvector.local/themes/vsTheme/pages/home.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  150 => 91,  146 => 89,  137 => 86,  133 => 85,  129 => 84,  126 => 83,  122 => 82,  102 => 64,  98 => 63,  94 => 61,  90 => 60,  86 => 58,  82 => 57,  75 => 52,  71 => 51,  19 => 1,);
    }
}
/* <!-- Services Section -->*/
/* 	<!--*/
/*     <section id="services">*/
/*         <div class="container">*/
/*             <div class="row">*/
/*                 <div class="col-lg-12 text-center">*/
/*                     <h2 class="section-heading">Services</h2>*/
/*                     <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>*/
/*                 </div>*/
/*             </div>*/
/*             <div class="row text-center">*/
/*                 <div class="col-md-4">*/
/*                     <span class="fa-stack fa-4x">*/
/*                         <i class="fa fa-circle fa-stack-2x text-primary"></i>*/
/*                         <i class="fa fa-shopping-cart fa-stack-1x fa-inverse"></i>*/
/*                     </span>*/
/*                     <h4 class="service-heading">E-Commerce</h4>*/
/*                     <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedit.</p>*/
/*                 </div>*/
/*                 <div class="col-md-4">*/
/*                     <span class="fa-stack fa-4x">*/
/*                         <i class="fa fa-circle fa-stack-2x text-primary"></i>*/
/*                         <i class="fa fa-laptop fa-stack-1x fa-inverse"></i>*/
/*                     </span>*/
/*                     <h4 class="service-heading">Responsive Design</h4>*/
/*                     <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedit.</p>*/
/*                 </div>*/
/*                 <div class="col-md-4">*/
/*                     <span class="fa-stack fa-4x">*/
/*                         <i class="fa fa-circle fa-stack-2x text-primary"></i>*/
/*                         <i class="fa fa-lock fa-stack-1x fa-inverse"></i>*/
/*                     </span>*/
/*                     <h4 class="service-heading">Web Security</h4>*/
/*                     <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedit.</p>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </section>*/
/* 	-->*/
/*     <!-- Portfolio Grid Section -->*/
/*     <section id="services" class="bg-light-gray">*/
/*         <div class="container">*/
/*             <div class="row">*/
/*                 <div class="col-lg-12 text-center">*/
/*                     <h2 class="section-heading">УСЛУГИ</h2>*/
/*                     <h3 class="section-subheading text-muted">Украина всегда стремится оказывать наиболее широкий спектр юридических услуг.</h3>*/
/*                 </div>*/
/*             </div>*/
/* */
/*             <div class="row">*/
/*                 {% component 'myService' %}*/
/*             </div>*/
/*         </div>*/
/*     </section>*/
/* */
/*     <!-- About Section -->*/
/*     {% component 'myAbout' %}*/
/* */
/*     <!-- Team Section -->*/
/*     {% component 'myExpert' %}*/
/*     */
/*     <!-- Clients Aside -->*/
/*     {% component 'myClient' %}*/
/* */
/* */
/*     <!-- Contact Section -->*/
/*     <section id="contact">*/
/*         <div class="container">*/
/*             <div class="row">*/
/*                 <div class="col-lg-12 text-center">*/
/*                     <h2 class="section-heading">Контакты</h2>*/
/*                     <h3 class="section-subheading text-muted">Для связи с нами используйте форму ниже либо указанную контактную информацию.</h3>*/
/*                 </div>*/
/*             </div>*/
/*             <div class="row">*/
/*                 <div class="col-lg-12">*/
/*                     <form name="sentMessage" id="contactForm" novalidate>*/
/*                         <div class="row">*/
/*                             <div class="col-md-6">*/
/* */
/* */
/*                                 {% for contact in myContact.getContact %}*/
/* */
/*                                 <div class="cont-list"><i class="fa fa-map-marker"></i>&nbsp;&nbsp;&nbsp;{{ contact.address }}</div>*/
/*                                 <div class="cont-list"><i class="fa fa-phone"></i>&nbsp;&nbsp;&nbsp;{{ contact.phone }}</div>*/
/*                                 <div class="cont-list"><i class="fa fa-envelope"></i>&nbsp;&nbsp;&nbsp;{{ contact.email }}</div>*/
/* */
/*                                 {% endfor %}*/
/* */
/* */
/*                                 <div class="map_site">{% component 'googleMap' %}</div>*/
/* */
/*                             </div>*/
/*                             <div class="col-md-6">*/
/* */
/*     <div class="form-group">*/
/*         <input type="text" class="form-control" placeholder="Your Name *" id="name" required data-validation-required-message="Please enter your name.">*/
/*         <p class="help-block text-danger"></p>*/
/*     </div>*/
/*     <div class="form-group">*/
/*         <input type="email" class="form-control" placeholder="Your Email *" id="email" required data-validation-required-message="Please enter your email address.">*/
/*         <p class="help-block text-danger"></p>*/
/*     </div>*/
/*     <div class="form-group">*/
/*         <input type="tel" class="form-control" placeholder="Your Phone *" id="phone" required data-validation-required-message="Please enter your phone number.">*/
/*         <p class="help-block text-danger"></p>*/
/*     </div>*/
/*     <div class="form-group">*/
/*         <textarea class="form-control" placeholder="Your Message *" id="message" required data-validation-required-message="Please enter a message."></textarea>*/
/*         <p class="help-block text-danger"></p>*/
/*     </div>*/
/* */
/*                             </div>*/
/*                             <div class="clearfix"></div>*/
/*                             <div class="col-lg-12 text-right">*/
/*                                 <div id="success"></div>*/
/*                                 <button type="submit" class="btn btn-xl">Надіслати повідомлення</button>*/
/*                             </div>*/
/*                         </div>*/
/*                     </form>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </section>*/

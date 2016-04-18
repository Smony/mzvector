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
        // line 52
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('CMS')->componentFunction("myService"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 53
        echo "            </div>
        </div>
    </section>

    <!-- About Section -->
    ";
        // line 58
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('CMS')->componentFunction("myAbout"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 59
        echo "
    <!-- Team Section -->
    ";
        // line 61
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('CMS')->componentFunction("myExpert"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 62
        echo "    
    <!-- Clients Aside -->
    ";
        // line 64
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('CMS')->componentFunction("myClient"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 65
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

            ";
        // line 77
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('CMS')->componentFunction("feedback"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 78
        echo "
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
        return array (  121 => 78,  117 => 77,  103 => 65,  99 => 64,  95 => 62,  91 => 61,  87 => 59,  83 => 58,  76 => 53,  72 => 52,  19 => 1,);
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
/* */
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
/* */
/*             {% component 'feedback' %}*/
/* */
/*         </div>*/
/*     </section>*/

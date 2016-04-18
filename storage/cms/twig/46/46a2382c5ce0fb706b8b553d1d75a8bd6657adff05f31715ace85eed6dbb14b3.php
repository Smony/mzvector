<?php

/* F:\Dropbox\OpenServer\domains\mzvector.local/themes/vsTheme/layouts/default.htm */
class __TwigTemplate_795ded02071d9e61c8748c24af0be1a0ff3d6cbe322de96369eb174d70237db7 extends Twig_Template
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
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"utf-8\">
        <title>«MZ vector» Юридичне бюро - ";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "page", array()), "title", array()), "html", null, true);
        echo "</title>
        <meta name=\"description\" content=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "page", array()), "meta_description", array()), "html", null, true);
        echo "\">
        <meta name=\"title\" content=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "page", array()), "meta_title", array()), "html", null, true);
        echo "\">
        <meta name=\"author\" content=\"www.symonchuk.com\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 10
        echo $this->env->getExtension('CMS')->themeFilter("assets/images/favicon.png");
        echo "\" />
        ";
        // line 11
        echo $this->env->getExtension('CMS')->assetsFunction('css');
        echo $this->env->getExtension('CMS')->displayBlock('styles');
        // line 12
        echo "        <link href=\"";
        echo $this->env->getExtension('CMS')->themeFilter(array(0 => "assets/css/theme.css", 1 => "assets/css/main.css"));
        // line 15
        echo "\" rel=\"stylesheet\">

        <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.1/css/font-awesome.min.css\">
\t\t<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
\t\t<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
\t\t<!--[if lt IE 9]>
\t\t\t<script src=\"https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js\"></script>
\t\t\t<script src=\"https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js\"></script>
\t\t<![endif]-->
    </head>
    <body id=\"page-top\" class=\"index\">
\t\t<!-- Navigation -->
    <nav class=\"navbar navbar-default navbar-fixed-top\">
        <div class=\"container\">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class=\"navbar-header page-scroll\">
                <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-1\">
                    <span class=\"sr-only\">Toggle navigation</span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                </button>
                <a class=\"navbar-brand page-scroll\" href=\"#page-top\">MZ vector</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
                <ul class=\"nav navbar-nav navbar-right\">
                    <li class=\"hidden\">
                        <a href=\"#page-top\"></a>
                    </li>
                    <li>
                        <a class=\"page-scroll\" href=\"#services\">Послуги</a>
                    </li>
                    <li>
                        <a class=\"page-scroll\" href=\"#about\">Про компанію</a>
                    </li>
                    <li>
                        <a class=\"page-scroll\" href=\"#team\">Наші фахівці та клієнти</a>
                    </li>
                    <li>
                        <a class=\"page-scroll\" href=\"#contact\">Контакти</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>
\t\t
\t\t<!-- Header -->
        ";
        // line 66
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["myHead"]) ? $context["myHead"] : null), "getHeader", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["head"]) {
            // line 67
            echo "        <header>
            <img style=\"position: absolute; left: 0; z-index: -5;\" src=\"";
            // line 68
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["head"], "attachments", array()), "path", array()), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["experts"]) ? $context["experts"] : null), "attachments", array()), "title", array()), "html", null, true);
            echo "\">
            <div class=\"container\">
                <div class=\"intro-text\">
                    <div class=\"intro-lead-in\">";
            // line 71
            echo twig_escape_filter($this->env, $this->getAttribute($context["head"], "text_one", array()), "html", null, true);
            echo "</div>
                    <div class=\"intro-heading\">";
            // line 72
            echo twig_escape_filter($this->env, $this->getAttribute($context["head"], "text_two", array()), "html", null, true);
            echo "</div>
                    <a href=\"#services\" class=\"page-scroll btn btn-xl\">Послуги</a>
                </div>
            </div>

        </header>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['head'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 79
        echo "
\t\t";
        // line 80
        echo $this->env->getExtension('CMS')->pageFunction();
        // line 81
        echo "
\t\t";
        // line 82
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("footer"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 83
        echo "\t\t
\t\t<footer>
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-4\">
                    <span class=\"copyright\">&copy; Copyright 2016</span>
                </div>
                <div class=\"col-md-4\">

                    ";
        // line 92
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["myContact"]) ? $context["myContact"] : null), "getContact", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["contact"]) {
            // line 93
            echo "                    <ul class=\"list-inline social-buttons\">
                        <li><a href=\"";
            // line 94
            echo twig_escape_filter($this->env, $this->getAttribute($context["contact"], "vk", array()), "html", null, true);
            echo "\" target=\"_blank\"><i class=\"fa fa-vk\" aria-hidden=\"true\"></i></a>
                        </li>
                        <li><a href=\"";
            // line 96
            echo twig_escape_filter($this->env, $this->getAttribute($context["contact"], "fb", array()), "html", null, true);
            echo "\" target=\"_blank\"><i class=\"fa fa-facebook\"></i></a>
                        </li>                   
                        <li><a href=\"";
            // line 98
            echo twig_escape_filter($this->env, $this->getAttribute($context["contact"], "in", array()), "html", null, true);
            echo "\" target=\"_blank\"><i class=\"fa fa-linkedin\"></i></a>
                        </li>
                    </ul>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['contact'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 102
        echo "                </div>
                <div class=\"col-md-4\">
                    <ul class=\"list-inline quicklinks\">
                        <li>Created by<a href=\"http://symonchuk.com/\" target=\"_blank\"> Symonchuk</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>

        <!-- Scripts -->
        <script src=\"";
        // line 114
        echo $this->env->getExtension('CMS')->themeFilter(array(0 => "assets/javascript/jquery.js", 1 => "assets/vendor/bootstrap/js/bootstrap.min.js", 2 => "assets/javascript/easing.min.js", 3 => "assets/javascript/classie.js", 4 => "assets/javascript/cbpAnimatedHeader.js", 5 => "assets/javascript/app.js"));
        // line 121
        echo "\"></script>
        ";
        // line 122
        echo '<script src="'. Request::getBasePath()
                .'/modules/system/assets/js/framework.js"></script>'.PHP_EOL;
        echo '<script src="'. Request::getBasePath()
                    .'/modules/system/assets/js/framework.extras.js"></script>'.PHP_EOL;
        echo '<link rel="stylesheet" property="stylesheet" href="'. Request::getBasePath()
                    .'/modules/system/assets/css/framework.extras.css">'.PHP_EOL;
        // line 123
        echo "        ";
        echo $this->env->getExtension('CMS')->assetsFunction('js');
        echo $this->env->getExtension('CMS')->displayBlock('scripts');
        // line 124
        echo "
    </body>
</html>";
    }

    public function getTemplateName()
    {
        return "F:\\Dropbox\\OpenServer\\domains\\mzvector.local/themes/vsTheme/layouts/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  214 => 124,  210 => 123,  203 => 122,  200 => 121,  198 => 114,  184 => 102,  174 => 98,  169 => 96,  164 => 94,  161 => 93,  157 => 92,  146 => 83,  142 => 82,  139 => 81,  137 => 80,  134 => 79,  121 => 72,  117 => 71,  109 => 68,  106 => 67,  102 => 66,  49 => 15,  46 => 12,  43 => 11,  39 => 10,  33 => 7,  29 => 6,  25 => 5,  19 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="utf-8">*/
/*         <title>«MZ vector» Юридичне бюро - {{ this.page.title }}</title>*/
/*         <meta name="description" content="{{ this.page.meta_description }}">*/
/*         <meta name="title" content="{{ this.page.meta_title }}">*/
/*         <meta name="author" content="www.symonchuk.com">*/
/*         <meta name="viewport" content="width=device-width, initial-scale=1.0">*/
/*         <link rel="icon" type="image/png" href="{{ 'assets/images/favicon.png'|theme }}" />*/
/*         {% styles %}*/
/*         <link href="{{ [*/
/*             'assets/css/theme.css',		*/
/*             'assets/css/main.css'*/
/*         ]|theme }}" rel="stylesheet">*/
/* */
/*         <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.1/css/font-awesome.min.css">*/
/* 		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->*/
/* 		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->*/
/* 		<!--[if lt IE 9]>*/
/* 			<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>*/
/* 			<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>*/
/* 		<![endif]-->*/
/*     </head>*/
/*     <body id="page-top" class="index">*/
/* 		<!-- Navigation -->*/
/*     <nav class="navbar navbar-default navbar-fixed-top">*/
/*         <div class="container">*/
/*             <!-- Brand and toggle get grouped for better mobile display -->*/
/*             <div class="navbar-header page-scroll">*/
/*                 <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">*/
/*                     <span class="sr-only">Toggle navigation</span>*/
/*                     <span class="icon-bar"></span>*/
/*                     <span class="icon-bar"></span>*/
/*                     <span class="icon-bar"></span>*/
/*                 </button>*/
/*                 <a class="navbar-brand page-scroll" href="#page-top">MZ vector</a>*/
/*             </div>*/
/* */
/*             <!-- Collect the nav links, forms, and other content for toggling -->*/
/*             <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">*/
/*                 <ul class="nav navbar-nav navbar-right">*/
/*                     <li class="hidden">*/
/*                         <a href="#page-top"></a>*/
/*                     </li>*/
/*                     <li>*/
/*                         <a class="page-scroll" href="#services">Послуги</a>*/
/*                     </li>*/
/*                     <li>*/
/*                         <a class="page-scroll" href="#about">Про компанію</a>*/
/*                     </li>*/
/*                     <li>*/
/*                         <a class="page-scroll" href="#team">Наші фахівці та клієнти</a>*/
/*                     </li>*/
/*                     <li>*/
/*                         <a class="page-scroll" href="#contact">Контакти</a>*/
/*                     </li>*/
/*                 </ul>*/
/*             </div>*/
/*             <!-- /.navbar-collapse -->*/
/*         </div>*/
/*         <!-- /.container-fluid -->*/
/*     </nav>*/
/* 		*/
/* 		<!-- Header -->*/
/*         {% for head in myHead.getHeader %}*/
/*         <header>*/
/*             <img style="position: absolute; left: 0; z-index: -5;" src="{{ head.attachments.path }}" alt="{{ experts.attachments.title }}">*/
/*             <div class="container">*/
/*                 <div class="intro-text">*/
/*                     <div class="intro-lead-in">{{ head.text_one }}</div>*/
/*                     <div class="intro-heading">{{ head.text_two }}</div>*/
/*                     <a href="#services" class="page-scroll btn btn-xl">Послуги</a>*/
/*                 </div>*/
/*             </div>*/
/* */
/*         </header>*/
/*         {% endfor %}*/
/* */
/* 		{% page %}*/
/* */
/* 		{% partial "footer" %}*/
/* 		*/
/* 		<footer>*/
/*         <div class="container">*/
/*             <div class="row">*/
/*                 <div class="col-md-4">*/
/*                     <span class="copyright">&copy; Copyright 2016</span>*/
/*                 </div>*/
/*                 <div class="col-md-4">*/
/* */
/*                     {% for contact in myContact.getContact %}*/
/*                     <ul class="list-inline social-buttons">*/
/*                         <li><a href="{{ contact.vk }}" target="_blank"><i class="fa fa-vk" aria-hidden="true"></i></a>*/
/*                         </li>*/
/*                         <li><a href="{{ contact.fb }}" target="_blank"><i class="fa fa-facebook"></i></a>*/
/*                         </li>                   */
/*                         <li><a href="{{ contact.in }}" target="_blank"><i class="fa fa-linkedin"></i></a>*/
/*                         </li>*/
/*                     </ul>*/
/*                     {% endfor %}*/
/*                 </div>*/
/*                 <div class="col-md-4">*/
/*                     <ul class="list-inline quicklinks">*/
/*                         <li>Created by<a href="http://symonchuk.com/" target="_blank"> Symonchuk</a>*/
/*                         </li>*/
/*                     </ul>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </footer>*/
/* */
/*         <!-- Scripts -->*/
/*         <script src="{{ [*/
/*             'assets/javascript/jquery.js',*/
/* 			'assets/vendor/bootstrap/js/bootstrap.min.js',*/
/* 			'assets/javascript/easing.min.js',			*/
/* 			'assets/javascript/classie.js',			*/
/* 			'assets/javascript/cbpAnimatedHeader.js',			*/
/*             'assets/javascript/app.js'*/
/*         ]|theme }}"></script>*/
/*         {% framework extras %}*/
/*         {% scripts %}*/
/* */
/*     </body>*/
/* </html>*/

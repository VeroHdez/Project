<?php

/* @WebProfiler/Profiler/header.html.twig */
class __TwigTemplate_9a15a71537d95a7bb476157b76692e9c67e8dbc1aaa80e601e2ae8571348f49b extends Twig_Template
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
        $__internal_cbb9f4a8d832a3a56ec75b35c31d1b883ab4285c1879f17d4ff9c8418dd03e33 = $this->env->getExtension("native_profiler");
        $__internal_cbb9f4a8d832a3a56ec75b35c31d1b883ab4285c1879f17d4ff9c8418dd03e33->enter($__internal_cbb9f4a8d832a3a56ec75b35c31d1b883ab4285c1879f17d4ff9c8418dd03e33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        // line 1
        echo "<div id=\"header\">
    <div class=\"container\">
        <h1>";
        // line 3
        echo twig_include($this->env, $context, "@WebProfiler/Icon/symfony.svg");
        echo " Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
";
        
        $__internal_cbb9f4a8d832a3a56ec75b35c31d1b883ab4285c1879f17d4ff9c8418dd03e33->leave($__internal_cbb9f4a8d832a3a56ec75b35c31d1b883ab4285c1879f17d4ff9c8418dd03e33_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 3,  22 => 1,);
    }
}
/* <div id="header">*/
/*     <div class="container">*/
/*         <h1>{{ include('@WebProfiler/Icon/symfony.svg') }} Symfony <span>Profiler</span></h1>*/
/* */
/*         <div class="search">*/
/*             <form method="get" action="https://symfony.com/search" target="_blank">*/
/*                 <div class="form-row">*/
/*                     <input name="q" id="search-id" type="search" placeholder="search on symfony.com">*/
/*                     <button type="submit" class="btn">Search</button>*/
/*                 </div>*/
/*            </form>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* */

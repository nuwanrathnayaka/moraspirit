<?php

/* base.html.twig */
class __TwigTemplate_42a4da239c010cddf1dbca81a4935e9fe177f8308ac68a1926bf3130023ac1d7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2b5fc0306e8f7442ceba6a2e600e7779fdcdd1ea9a1854a19834337b8974ace2 = $this->env->getExtension("native_profiler");
        $__internal_2b5fc0306e8f7442ceba6a2e600e7779fdcdd1ea9a1854a19834337b8974ace2->enter($__internal_2b5fc0306e8f7442ceba6a2e600e7779fdcdd1ea9a1854a19834337b8974ace2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_2b5fc0306e8f7442ceba6a2e600e7779fdcdd1ea9a1854a19834337b8974ace2->leave($__internal_2b5fc0306e8f7442ceba6a2e600e7779fdcdd1ea9a1854a19834337b8974ace2_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_b589e9fa20c3576a669f60078034ffb6329ac83fe7f6ec9f233e75efdfd58494 = $this->env->getExtension("native_profiler");
        $__internal_b589e9fa20c3576a669f60078034ffb6329ac83fe7f6ec9f233e75efdfd58494->enter($__internal_b589e9fa20c3576a669f60078034ffb6329ac83fe7f6ec9f233e75efdfd58494_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_b589e9fa20c3576a669f60078034ffb6329ac83fe7f6ec9f233e75efdfd58494->leave($__internal_b589e9fa20c3576a669f60078034ffb6329ac83fe7f6ec9f233e75efdfd58494_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_f58ee51c9b35e7e73b13b8bec8328f20fcd5e13a6d2961c452dc2eb9b6dfd0f6 = $this->env->getExtension("native_profiler");
        $__internal_f58ee51c9b35e7e73b13b8bec8328f20fcd5e13a6d2961c452dc2eb9b6dfd0f6->enter($__internal_f58ee51c9b35e7e73b13b8bec8328f20fcd5e13a6d2961c452dc2eb9b6dfd0f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_f58ee51c9b35e7e73b13b8bec8328f20fcd5e13a6d2961c452dc2eb9b6dfd0f6->leave($__internal_f58ee51c9b35e7e73b13b8bec8328f20fcd5e13a6d2961c452dc2eb9b6dfd0f6_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_cfd671b88ff3ca92c07ed90fdb445b0f62a3dcd57c9b3eb79ff3c9b6a38fe78e = $this->env->getExtension("native_profiler");
        $__internal_cfd671b88ff3ca92c07ed90fdb445b0f62a3dcd57c9b3eb79ff3c9b6a38fe78e->enter($__internal_cfd671b88ff3ca92c07ed90fdb445b0f62a3dcd57c9b3eb79ff3c9b6a38fe78e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_cfd671b88ff3ca92c07ed90fdb445b0f62a3dcd57c9b3eb79ff3c9b6a38fe78e->leave($__internal_cfd671b88ff3ca92c07ed90fdb445b0f62a3dcd57c9b3eb79ff3c9b6a38fe78e_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_19b216b42f871785b2096d295795ce46c2e2b7bd480604d267aba898f9c73a3b = $this->env->getExtension("native_profiler");
        $__internal_19b216b42f871785b2096d295795ce46c2e2b7bd480604d267aba898f9c73a3b->enter($__internal_19b216b42f871785b2096d295795ce46c2e2b7bd480604d267aba898f9c73a3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_19b216b42f871785b2096d295795ce46c2e2b7bd480604d267aba898f9c73a3b->leave($__internal_19b216b42f871785b2096d295795ce46c2e2b7bd480604d267aba898f9c73a3b_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */

<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_ee4f22e358cce9632facaf4033eac6b2d2fe55d1661c23482bd4cbb94cdfd3ce extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a12a2de2ef359207074bf0c2f286a6dbe9b879ed4a75ffeafe226152aee20ba7 = $this->env->getExtension("native_profiler");
        $__internal_a12a2de2ef359207074bf0c2f286a6dbe9b879ed4a75ffeafe226152aee20ba7->enter($__internal_a12a2de2ef359207074bf0c2f286a6dbe9b879ed4a75ffeafe226152aee20ba7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a12a2de2ef359207074bf0c2f286a6dbe9b879ed4a75ffeafe226152aee20ba7->leave($__internal_a12a2de2ef359207074bf0c2f286a6dbe9b879ed4a75ffeafe226152aee20ba7_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_1df78c93cee95f71e80ab4da9a1630e7fb68b9a75f01908fa034b6f625bfac33 = $this->env->getExtension("native_profiler");
        $__internal_1df78c93cee95f71e80ab4da9a1630e7fb68b9a75f01908fa034b6f625bfac33->enter($__internal_1df78c93cee95f71e80ab4da9a1630e7fb68b9a75f01908fa034b6f625bfac33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_1df78c93cee95f71e80ab4da9a1630e7fb68b9a75f01908fa034b6f625bfac33->leave($__internal_1df78c93cee95f71e80ab4da9a1630e7fb68b9a75f01908fa034b6f625bfac33_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_2809d59d585016a5ad8541a35651c93731ab659848abc3be16d5369858233fd8 = $this->env->getExtension("native_profiler");
        $__internal_2809d59d585016a5ad8541a35651c93731ab659848abc3be16d5369858233fd8->enter($__internal_2809d59d585016a5ad8541a35651c93731ab659848abc3be16d5369858233fd8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_2809d59d585016a5ad8541a35651c93731ab659848abc3be16d5369858233fd8->leave($__internal_2809d59d585016a5ad8541a35651c93731ab659848abc3be16d5369858233fd8_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_5f250cbf1375734fb329bb9ee07b5b951d453a413745bce59829befc2912c70e = $this->env->getExtension("native_profiler");
        $__internal_5f250cbf1375734fb329bb9ee07b5b951d453a413745bce59829befc2912c70e->enter($__internal_5f250cbf1375734fb329bb9ee07b5b951d453a413745bce59829befc2912c70e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_5f250cbf1375734fb329bb9ee07b5b951d453a413745bce59829befc2912c70e->leave($__internal_5f250cbf1375734fb329bb9ee07b5b951d453a413745bce59829befc2912c70e_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */

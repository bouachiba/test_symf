<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_14c010aec9d65d78e6daaf4713ec0d065813570063674fd6d95c438074778b81 extends Twig_Template
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
        $__internal_7c01f270831e6fb01854ed09b6b0443d007f8ffe84608d500fb41cc3ea721e5e = $this->env->getExtension("native_profiler");
        $__internal_7c01f270831e6fb01854ed09b6b0443d007f8ffe84608d500fb41cc3ea721e5e->enter($__internal_7c01f270831e6fb01854ed09b6b0443d007f8ffe84608d500fb41cc3ea721e5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7c01f270831e6fb01854ed09b6b0443d007f8ffe84608d500fb41cc3ea721e5e->leave($__internal_7c01f270831e6fb01854ed09b6b0443d007f8ffe84608d500fb41cc3ea721e5e_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_fbbb1e0ee9ea8c8e22678d8e73205740f54ab6fdff3d3bf56bb9977e531b0a5d = $this->env->getExtension("native_profiler");
        $__internal_fbbb1e0ee9ea8c8e22678d8e73205740f54ab6fdff3d3bf56bb9977e531b0a5d->enter($__internal_fbbb1e0ee9ea8c8e22678d8e73205740f54ab6fdff3d3bf56bb9977e531b0a5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_fbbb1e0ee9ea8c8e22678d8e73205740f54ab6fdff3d3bf56bb9977e531b0a5d->leave($__internal_fbbb1e0ee9ea8c8e22678d8e73205740f54ab6fdff3d3bf56bb9977e531b0a5d_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_88926fffc54529db3b949ebc3f3af1ff981a4aef09249ae8ff39de93ed269f5e = $this->env->getExtension("native_profiler");
        $__internal_88926fffc54529db3b949ebc3f3af1ff981a4aef09249ae8ff39de93ed269f5e->enter($__internal_88926fffc54529db3b949ebc3f3af1ff981a4aef09249ae8ff39de93ed269f5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_88926fffc54529db3b949ebc3f3af1ff981a4aef09249ae8ff39de93ed269f5e->leave($__internal_88926fffc54529db3b949ebc3f3af1ff981a4aef09249ae8ff39de93ed269f5e_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_43c7bb5e32015dac0096525be9aec49666b467a1f5d9047ce59f2119919b68ac = $this->env->getExtension("native_profiler");
        $__internal_43c7bb5e32015dac0096525be9aec49666b467a1f5d9047ce59f2119919b68ac->enter($__internal_43c7bb5e32015dac0096525be9aec49666b467a1f5d9047ce59f2119919b68ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_43c7bb5e32015dac0096525be9aec49666b467a1f5d9047ce59f2119919b68ac->leave($__internal_43c7bb5e32015dac0096525be9aec49666b467a1f5d9047ce59f2119919b68ac_prof);

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

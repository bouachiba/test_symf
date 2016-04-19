<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_61865bb11e4cf663ec73448342c071da54a0da61fba0c2cca31e5674f35dd924 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8cba321ecb9d5dbdd8b0f048e83ff9f622099c9fbc410f37309a2a690c423acf = $this->env->getExtension("native_profiler");
        $__internal_8cba321ecb9d5dbdd8b0f048e83ff9f622099c9fbc410f37309a2a690c423acf->enter($__internal_8cba321ecb9d5dbdd8b0f048e83ff9f622099c9fbc410f37309a2a690c423acf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8cba321ecb9d5dbdd8b0f048e83ff9f622099c9fbc410f37309a2a690c423acf->leave($__internal_8cba321ecb9d5dbdd8b0f048e83ff9f622099c9fbc410f37309a2a690c423acf_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_26fada1ab59c93ce4b9ba9b801f6a16e6018a5c7508fc9cc4437c64f76d40f22 = $this->env->getExtension("native_profiler");
        $__internal_26fada1ab59c93ce4b9ba9b801f6a16e6018a5c7508fc9cc4437c64f76d40f22->enter($__internal_26fada1ab59c93ce4b9ba9b801f6a16e6018a5c7508fc9cc4437c64f76d40f22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_26fada1ab59c93ce4b9ba9b801f6a16e6018a5c7508fc9cc4437c64f76d40f22->leave($__internal_26fada1ab59c93ce4b9ba9b801f6a16e6018a5c7508fc9cc4437c64f76d40f22_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_5c6670090e639176ed4767115a7f29e351f75ce4cf49a7ab0c61fc4a732ebfca = $this->env->getExtension("native_profiler");
        $__internal_5c6670090e639176ed4767115a7f29e351f75ce4cf49a7ab0c61fc4a732ebfca->enter($__internal_5c6670090e639176ed4767115a7f29e351f75ce4cf49a7ab0c61fc4a732ebfca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_5c6670090e639176ed4767115a7f29e351f75ce4cf49a7ab0c61fc4a732ebfca->leave($__internal_5c6670090e639176ed4767115a7f29e351f75ce4cf49a7ab0c61fc4a732ebfca_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_50da98dbc2e9e62738e05b194fcd122f198159a721a90ba0065379873e701e04 = $this->env->getExtension("native_profiler");
        $__internal_50da98dbc2e9e62738e05b194fcd122f198159a721a90ba0065379873e701e04->enter($__internal_50da98dbc2e9e62738e05b194fcd122f198159a721a90ba0065379873e701e04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_50da98dbc2e9e62738e05b194fcd122f198159a721a90ba0065379873e701e04->leave($__internal_50da98dbc2e9e62738e05b194fcd122f198159a721a90ba0065379873e701e04_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */

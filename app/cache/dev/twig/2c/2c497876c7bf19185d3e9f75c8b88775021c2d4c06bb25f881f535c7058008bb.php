<?php

/* base.html.twig */
class __TwigTemplate_e9b7c69c07af0c70404aaeaf872a4b66e6dbb76f0e1e7f4c793b50853798f154 extends Twig_Template
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
        $__internal_f01dd906f0b7ecbbc2a04e76ec8412d027d09233ebe6f1beb923e0b5e74332a4 = $this->env->getExtension("native_profiler");
        $__internal_f01dd906f0b7ecbbc2a04e76ec8412d027d09233ebe6f1beb923e0b5e74332a4->enter($__internal_f01dd906f0b7ecbbc2a04e76ec8412d027d09233ebe6f1beb923e0b5e74332a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_f01dd906f0b7ecbbc2a04e76ec8412d027d09233ebe6f1beb923e0b5e74332a4->leave($__internal_f01dd906f0b7ecbbc2a04e76ec8412d027d09233ebe6f1beb923e0b5e74332a4_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_0d3ce729fb1ad85baa76445feaef514caa39b56f3ba9e582977a81a01d8663e8 = $this->env->getExtension("native_profiler");
        $__internal_0d3ce729fb1ad85baa76445feaef514caa39b56f3ba9e582977a81a01d8663e8->enter($__internal_0d3ce729fb1ad85baa76445feaef514caa39b56f3ba9e582977a81a01d8663e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_0d3ce729fb1ad85baa76445feaef514caa39b56f3ba9e582977a81a01d8663e8->leave($__internal_0d3ce729fb1ad85baa76445feaef514caa39b56f3ba9e582977a81a01d8663e8_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_54a5d60b7675f078491f3009324cc456ef5602a83ac69b52d76a755ed373f285 = $this->env->getExtension("native_profiler");
        $__internal_54a5d60b7675f078491f3009324cc456ef5602a83ac69b52d76a755ed373f285->enter($__internal_54a5d60b7675f078491f3009324cc456ef5602a83ac69b52d76a755ed373f285_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_54a5d60b7675f078491f3009324cc456ef5602a83ac69b52d76a755ed373f285->leave($__internal_54a5d60b7675f078491f3009324cc456ef5602a83ac69b52d76a755ed373f285_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_cc111d1aeb9214d2756081f9e6647ca5b724c4fb6f3655392198f5a86c6d3c1e = $this->env->getExtension("native_profiler");
        $__internal_cc111d1aeb9214d2756081f9e6647ca5b724c4fb6f3655392198f5a86c6d3c1e->enter($__internal_cc111d1aeb9214d2756081f9e6647ca5b724c4fb6f3655392198f5a86c6d3c1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_cc111d1aeb9214d2756081f9e6647ca5b724c4fb6f3655392198f5a86c6d3c1e->leave($__internal_cc111d1aeb9214d2756081f9e6647ca5b724c4fb6f3655392198f5a86c6d3c1e_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_560f442e2f45d48a20a168dd7a536a9d9dc0d41fe1ae0ebc7fc79adc9d59d8b7 = $this->env->getExtension("native_profiler");
        $__internal_560f442e2f45d48a20a168dd7a536a9d9dc0d41fe1ae0ebc7fc79adc9d59d8b7->enter($__internal_560f442e2f45d48a20a168dd7a536a9d9dc0d41fe1ae0ebc7fc79adc9d59d8b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_560f442e2f45d48a20a168dd7a536a9d9dc0d41fe1ae0ebc7fc79adc9d59d8b7->leave($__internal_560f442e2f45d48a20a168dd7a536a9d9dc0d41fe1ae0ebc7fc79adc9d59d8b7_prof);

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

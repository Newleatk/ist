<?php

/* base.twig */
class __TwigTemplate_58e7f39fe691d918ef0be5fe2b78a8db87aacae06cee6c07a8e7697c6f5fd67b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <title>";
        // line 4
        $this->displayBlock('title', $context, $blocks);
        echo " | IST</title>
        <link href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "basepath", array()), "html", null, true);
        echo "/css/grid.css\" rel=\"stylesheet\">
        <link href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "basepath", array()), "html", null, true);
        echo "/css/style.css\" rel=\"stylesheet\">
        <link href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "basepath", array()), "html", null, true);
        echo "/css/icons.css\" rel=\"stylesheet\">
        <script src=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "basepath", array()), "html", null, true);
        echo "/js/jquery.js\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "basepath", array()), "html", null, true);
        echo "/js/ui.js\" type=\"text/javascript\"></script>
    </head>
    <body>
        <nav>
            ";
        // line 13
        $this->loadTemplate("nav.twig", "base.twig", 13)->display($context);
        // line 14
        echo "        </nav>
        <main>
            ";
        // line 16
        $this->displayBlock('body', $context, $blocks);
        // line 17
        echo "        </main>
        <footer>
            ";
        // line 19
        $this->displayBlock('footer', $context, $blocks);
        echo "<hr/>Copyright 2015 - IST Project Management Software
        </footer>
    </body>
</html>";
    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        echo "Page";
    }

    // line 16
    public function block_body($context, array $blocks = array())
    {
    }

    // line 19
    public function block_footer($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "base.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 19,  80 => 16,  74 => 4,  66 => 19,  62 => 17,  60 => 16,  56 => 14,  54 => 13,  47 => 9,  43 => 8,  39 => 7,  35 => 6,  31 => 5,  27 => 4,  22 => 1,);
    }
}

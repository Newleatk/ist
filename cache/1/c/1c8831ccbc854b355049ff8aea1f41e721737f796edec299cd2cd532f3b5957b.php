<?php

/* nav.twig */
class __TwigTemplate_1c8831ccbc854b355049ff8aea1f41e721737f796edec299cd2cd532f3b5957b extends Twig_Template
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
        $context["ui"] = $this->loadTemplate("ui.twig", "nav.twig", 1);
        // line 2
        echo $context["ui"]->getmenu((isset($context["nav"]) ? $context["nav"] : $this->getContext($context, "nav")), "nav", true);
    }

    public function getTemplateName()
    {
        return "nav.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  21 => 2,  19 => 1,);
    }
}

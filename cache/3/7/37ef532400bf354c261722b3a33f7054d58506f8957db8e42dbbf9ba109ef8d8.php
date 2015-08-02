<?php

/* issues.twig */
class __TwigTemplate_37ef532400bf354c261722b3a33f7054d58506f8957db8e42dbbf9ba109ef8d8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.twig", "issues.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 13
        $context["__internal_2ccb0dcd36d2e0e7b50e531f49c003dd125fdac177493cd5a3a80496e2e47515"] = $this->loadTemplate("ui.twig", "issues.twig", 13);
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        echo "Issues";
        if (array_key_exists("tag", $context)) {
            echo " tagged ";
            echo twig_escape_filter($this->env, (isset($context["tag"]) ? $context["tag"] : $this->getContext($context, "tag")), "html", null, true);
        }
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        $context["__internal_7f683c940692d68e73660427f0103441c21df4d6363e43c727a4491af5b676fb"] = $this->loadTemplate("ui.twig", "issues.twig", 4);
        // line 5
        echo "    ";
        echo $context["__internal_7f683c940692d68e73660427f0103441c21df4d6363e43c727a4491af5b676fb"]->getsearch_bar("issues", null, null, null, null);
        echo "
    ";
        // line 6
        $context["__internal_9e6ea2d50d15e9329a42024eba324ff1860391c5e2537c1dc149a8fc92143d44"] = $this->loadTemplate("issues-functions.twig", "issues.twig", 6);
        // line 7
        echo "    <div class=\"container\">
        ";
        // line 8
        echo $context["__internal_9e6ea2d50d15e9329a42024eba324ff1860391c5e2537c1dc149a8fc92143d44"]->getlist_issues((isset($context["issues"]) ? $context["issues"] : $this->getContext($context, "issues")), (isset($context["global_start"]) ? $context["global_start"] : $this->getContext($context, "global_start")));
        echo "
        ";
        // line 9
        $context["__internal_a26ccead5e06650c7b5574f3f6de223b0c05faec40a9b01cdf002cb8501be1fb"] = $this->loadTemplate("ui.twig", "issues.twig", 9);
        // line 10
        echo "        ";
        echo $context["__internal_a26ccead5e06650c7b5574f3f6de223b0c05faec40a9b01cdf002cb8501be1fb"]->getpagination("issues", (isset($context["params"]) ? $context["params"] : $this->getContext($context, "params")), $this->getAttribute((isset($context["params"]) ? $context["params"] : $this->getContext($context, "params")), "page", array()), $this->getAttribute((isset($context["params"]) ? $context["params"] : $this->getContext($context, "params")), "show", array()), (isset($context["issues_count"]) ? $context["issues_count"] : $this->getContext($context, "issues_count")), true, (isset($context["show_allowed"]) ? $context["show_allowed"] : $this->getContext($context, "show_allowed")));
        echo "
    </div>
";
    }

    // line 14
    public function block_footer($context, array $blocks = array())
    {
        echo "<div>";
        echo $context["__internal_2ccb0dcd36d2e0e7b50e531f49c003dd125fdac177493cd5a3a80496e2e47515"]->getpagination_status($this->getAttribute((isset($context["params"]) ? $context["params"] : $this->getContext($context, "params")), "page", array()), $this->getAttribute((isset($context["params"]) ? $context["params"] : $this->getContext($context, "params")), "show", array()), (isset($context["issues_count"]) ? $context["issues_count"] : $this->getContext($context, "issues_count")));
        echo " issues visible out of ";
        echo twig_escape_filter($this->env, (isset($context["issues_count"]) ? $context["issues_count"] : $this->getContext($context, "issues_count")), "html", null, true);
        echo " issues in ";
        echo twig_escape_filter($this->env, (isset($context["time_elapsed"]) ? $context["time_elapsed"] : $this->getContext($context, "time_elapsed")), "html", null, true);
        echo "s</div>
";
    }

    public function getTemplateName()
    {
        return "issues.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 14,  65 => 10,  63 => 9,  59 => 8,  56 => 7,  54 => 6,  49 => 5,  46 => 4,  43 => 3,  33 => 2,  29 => 1,  27 => 13,  11 => 1,);
    }
}

<?php

/* issues-functions.twig */
class __TwigTemplate_02140013b572e283a40fc4ec56bb5921f0e238ceeff07faadbf02aa86e0ac53d extends Twig_Template
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
    }

    // line 1
    public function getissues_status($__tag__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "tag" => $__tag__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 2
            echo "    <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("issues", array("tag" => $this->getAttribute((isset($context["tag"]) ? $context["tag"] : $this->getContext($context, "tag")), "label", array()))), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tag"]) ? $context["tag"] : $this->getContext($context, "tag")), "description", array()), "html", null, true);
            echo "\" class=\"label issue-status has-tooltip\" style=\"background-color: #";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tag"]) ? $context["tag"] : $this->getContext($context, "tag")), "color", array()), "html", null, true);
            echo "; color: #";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tag"]) ? $context["tag"] : $this->getContext($context, "tag")), "contrast", array()), "html", null, true);
            echo ";\"><i class=\"issue-icon issue-issue_";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tag"]) ? $context["tag"] : $this->getContext($context, "tag")), "label", array()), "html", null, true);
            echo "\"></i>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tag"]) ? $context["tag"] : $this->getContext($context, "tag")), "name", array()), "html", null, true);
            echo "<div class=\"tooltip issue-label-tooltip\">Click to see all issues with tag ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tag"]) ? $context["tag"] : $this->getContext($context, "tag")), "name", array()), "html", null, true);
            echo "</div></a>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 4
    public function getlist_issues($__issues__ = null, $__global_start__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "issues" => $__issues__,
            "global_start" => $__global_start__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 5
            echo "    ";
            $context["__internal_ebb2b0d6606f5d95df01e2b73491cb9a80990015a62b2aebc778abf6278f92b2"] = $this;
            // line 6
            echo "    ";
            if ( !twig_test_empty((isset($context["issues"]) ? $context["issues"] : $this->getContext($context, "issues")))) {
                // line 7
                echo "        <table class=\"issues\">
            <tr>
                <th><i class=\"icon-priority-label priority-icon\"></i></th>
                <th>ID</th>
                <th>Title</th>
                <th>Status</th>
                <th>Deadline</th>
                <th>Report</th>
            </tr>
            ";
                // line 16
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_array_keys_filter((isset($context["issues"]) ? $context["issues"] : $this->getContext($context, "issues"))));
                foreach ($context['_seq'] as $context["_key"] => $context["id"]) {
                    // line 17
                    echo "                ";
                    $context["issue"] = $this->getAttribute((isset($context["issues"]) ? $context["issues"] : $this->getContext($context, "issues")), $context["id"], array(), "array");
                    // line 18
                    echo "                <tr";
                    if (($this->getAttribute((isset($context["issue"]) ? $context["issue"] : $this->getContext($context, "issue")), "deadline_has_passed", array()) == true)) {
                        echo " class=\"overdue\"";
                    }
                    echo " data-href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("issue", array("id" => $context["id"])), "html", null, true);
                    echo "\">
                    <td class=\"has-tooltip\"><i class=\"icon-priority-";
                    // line 19
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["issue"]) ? $context["issue"] : $this->getContext($context, "issue")), "priority", array()), "html", null, true);
                    echo " priority-icon\"></i><div class=\"tooltip\">";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["issue"]) ? $context["issue"] : $this->getContext($context, "issue")), "priority", array()), "html", null, true);
                    echo "</div></td>
                    <td class=\"id\">";
                    // line 20
                    echo twig_escape_filter($this->env, $context["id"], "html", null, true);
                    echo "</td>
                    <td>";
                    // line 21
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["issue"]) ? $context["issue"] : $this->getContext($context, "issue")), "title", array()), "html", null, true);
                    echo "</td>
                    <td>";
                    // line 22
                    echo $context["__internal_ebb2b0d6606f5d95df01e2b73491cb9a80990015a62b2aebc778abf6278f92b2"]->getissues_status($this->getAttribute((isset($context["issue"]) ? $context["issue"] : $this->getContext($context, "issue")), "status", array()));
                    echo "</td>
                    <td class=\"td-deadline\">";
                    // line 23
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["issue"]) ? $context["issue"] : $this->getContext($context, "issue")), "deadline", array()), "d/m/Y", "Europe/Paris"), "html", null, true);
                    echo "</td>
                    <td>";
                    // line 24
                    echo twig_escape_filter($this->env, (isset($context["global_start"]) ? $context["global_start"] : $this->getContext($context, "global_start")), "html", null, true);
                    echo twig_escape_filter($this->env, $context["id"], "html", null, true);
                    echo " opened ";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["issue"]) ? $context["issue"] : $this->getContext($context, "issue")), "formated", array()), "html", null, true);
                    echo " by ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["issue"]) ? $context["issue"] : $this->getContext($context, "issue")), "author", array()), "name", array()), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["issue"]) ? $context["issue"] : $this->getContext($context, "issue")), "author", array()), "last_name", array()), "html", null, true);
                    echo "</td>
                </tr>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['id'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 27
                echo "        </table>
    ";
            } else {
                // line 29
                echo "        <table class=\"issues empty\">
            <tr><td>No issues to display</td></tr>
        </table>
    ";
            }
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "issues-functions.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  145 => 29,  141 => 27,  125 => 24,  121 => 23,  117 => 22,  113 => 21,  109 => 20,  103 => 19,  94 => 18,  91 => 17,  87 => 16,  76 => 7,  73 => 6,  70 => 5,  58 => 4,  32 => 2,  21 => 1,);
    }
}

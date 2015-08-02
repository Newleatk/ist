<?php

/* ui.twig */
class __TwigTemplate_cff4cbe1822c9ed0a5d8fe6abb4073d2428fc4d3a5c8f648785c6a65d62da42e extends Twig_Template
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
    public function getmenu($__navigation__ = null, $__menu_id__ = null, $__view__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "navigation" => $__navigation__,
            "menu_id" => $__menu_id__,
            "view" => $__view__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 2
            echo "    <ul id=\"";
            echo twig_escape_filter($this->env, (isset($context["menu_id"]) ? $context["menu_id"] : $this->getContext($context, "menu_id")), "html", null, true);
            echo "\">
        ";
            // line 3
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["navigation"]) ? $context["navigation"] : $this->getContext($context, "navigation")));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 4
                echo "            <li";
                if ($this->getAttribute($context["item"], "children", array(), "any", true, true)) {
                    echo " class=\"dropdown-wrapper has-dropdown\"";
                }
                echo ">
                <a href=\"";
                // line 5
                if ($this->getAttribute($context["item"], "params", array(), "any", true, true)) {
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath($this->getAttribute($context["item"], "url", array()), $this->getAttribute($context["item"], "params", array())), "html", null, true);
                } else {
                    echo $this->env->getExtension('routing')->getPath($this->getAttribute($context["item"], "url", array()));
                }
                echo "\" ";
                if ((($this->getAttribute($context["item"], "url", array()) == (isset($context["current_page_name"]) ? $context["current_page_name"] : $this->getContext($context, "current_page_name"))) && ((isset($context["view"]) ? $context["view"] : $this->getContext($context, "view")) == true))) {
                    echo "class=\"active\"";
                }
                echo ">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "text", array()), "html", null, true);
                echo "</a>
                ";
                // line 6
                if ($this->getAttribute($context["item"], "children", array(), "any", true, true)) {
                    // line 7
                    echo "                    <i class=\"fa fa-caret-down dropdown-arrow dropdown-button\"></i>
                    ";
                    // line 8
                    echo $this->getAttribute($this, "menu", array(0 => $this->getAttribute($context["item"], "children", array()), 1 => null, 2 => false), "method");
                    echo "
                ";
                }
                // line 10
                echo "            </li>
            ";
                // line 11
                if (($this->getAttribute($context["item"], "separator", array(), "any", true, true) && ($this->getAttribute($context["item"], "separator", array()) == true))) {
                    // line 12
                    echo "                <li class=\"separator\"></li>
            ";
                }
                // line 14
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 15
            echo "    </ul>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 17
    public function getpagination($__paginationPath__ = null, $__params__ = null, $__currentPage__ = null, $__results_per_page__ = null, $__total__ = null, $__number_results__ = null, $__number_results_list__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "paginationPath" => $__paginationPath__,
            "params" => $__params__,
            "currentPage" => $__currentPage__,
            "results_per_page" => $__results_per_page__,
            "total" => $__total__,
            "number_results" => $__number_results__,
            "number_results_list" => $__number_results_list__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 18
            echo "    ";
            $context["lastPage"] = twig_round(((isset($context["total"]) ? $context["total"] : $this->getContext($context, "total")) / (isset($context["results_per_page"]) ? $context["results_per_page"] : $this->getContext($context, "results_per_page"))), 0, "ceil");
            // line 19
            echo "    ";
            $context["showAlwaysFirstAndLast"] = true;
            // line 20
            echo "    ";
            ob_start();
            // line 21
            echo "        <div class=\"pagination";
            if (((isset($context["number_results"]) ? $context["number_results"] : $this->getContext($context, "number_results")) == true)) {
                echo " has_pagination_show_choice";
            }
            echo "\">
            ";
            // line 23
            echo "            ";
            $context["extremePagesLimit"] = 2;
            // line 24
            echo "            ";
            // line 25
            echo "            ";
            $context["nearbyPagesLimit"] = 2;
            // line 26
            echo "                ";
            if (((isset($context["currentPage"]) ? $context["currentPage"] : $this->getContext($context, "currentPage")) > 1)) {
                // line 27
                echo "                    <a class=\"previous\" href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath((isset($context["paginationPath"]) ? $context["paginationPath"] : $this->getContext($context, "paginationPath")), twig_array_merge((isset($context["params"]) ? $context["params"] : $this->getContext($context, "params")), array("show" => (isset($context["results_per_page"]) ? $context["results_per_page"] : $this->getContext($context, "results_per_page")), "page" => ((isset($context["currentPage"]) ? $context["currentPage"] : $this->getContext($context, "currentPage")) - 1)))), "html", null, true);
                echo "\">Previous</a>

                    ";
                // line 29
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["extremePagesLimit"]) ? $context["extremePagesLimit"] : $this->getContext($context, "extremePagesLimit"))));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    if (($context["i"] < ((isset($context["currentPage"]) ? $context["currentPage"] : $this->getContext($context, "currentPage")) - (isset($context["nearbyPagesLimit"]) ? $context["nearbyPagesLimit"] : $this->getContext($context, "nearbyPagesLimit"))))) {
                        // line 30
                        echo "                        <a class=\"\" href=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath((isset($context["paginationPath"]) ? $context["paginationPath"] : $this->getContext($context, "paginationPath")), twig_array_merge((isset($context["params"]) ? $context["params"] : $this->getContext($context, "params")), array("show" => (isset($context["results_per_page"]) ? $context["results_per_page"] : $this->getContext($context, "results_per_page")), "page" => $context["i"]))), "html", null, true);
                        echo "\">";
                        echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                        echo "</a>
                    ";
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 32
                echo "
                    ";
                // line 33
                if ((((isset($context["extremePagesLimit"]) ? $context["extremePagesLimit"] : $this->getContext($context, "extremePagesLimit")) + 1) < ((isset($context["currentPage"]) ? $context["currentPage"] : $this->getContext($context, "currentPage")) - (isset($context["nearbyPagesLimit"]) ? $context["nearbyPagesLimit"] : $this->getContext($context, "nearbyPagesLimit"))))) {
                    // line 34
                    echo "                        <span class=\"sep-dots\">...</span>
                    ";
                }
                // line 36
                echo "
                    ";
                // line 37
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable(range(((isset($context["currentPage"]) ? $context["currentPage"] : $this->getContext($context, "currentPage")) - (isset($context["nearbyPagesLimit"]) ? $context["nearbyPagesLimit"] : $this->getContext($context, "nearbyPagesLimit"))), ((isset($context["currentPage"]) ? $context["currentPage"] : $this->getContext($context, "currentPage")) - 1)));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    if (($context["i"] > 0)) {
                        // line 38
                        echo "                        <a class=\"\" href=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath((isset($context["paginationPath"]) ? $context["paginationPath"] : $this->getContext($context, "paginationPath")), twig_array_merge((isset($context["params"]) ? $context["params"] : $this->getContext($context, "params")), array("show" => (isset($context["results_per_page"]) ? $context["results_per_page"] : $this->getContext($context, "results_per_page")), "page" => $context["i"]))), "html", null, true);
                        echo "\">";
                        echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                        echo "</a>
                    ";
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 40
                echo "                ";
            } elseif ((isset($context["showAlwaysFirstAndLast"]) ? $context["showAlwaysFirstAndLast"] : $this->getContext($context, "showAlwaysFirstAndLast"))) {
                // line 41
                echo "                    <span class=\"previous disabled\">Previous</span>
                ";
            }
            // line 43
            echo "
                <a class=\"active\">";
            // line 44
            echo twig_escape_filter($this->env, (isset($context["currentPage"]) ? $context["currentPage"] : $this->getContext($context, "currentPage")), "html", null, true);
            echo "</a>

                ";
            // line 46
            if (((isset($context["currentPage"]) ? $context["currentPage"] : $this->getContext($context, "currentPage")) < (isset($context["lastPage"]) ? $context["lastPage"] : $this->getContext($context, "lastPage")))) {
                // line 47
                echo "                    ";
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable(range(((isset($context["currentPage"]) ? $context["currentPage"] : $this->getContext($context, "currentPage")) + 1), ((isset($context["currentPage"]) ? $context["currentPage"] : $this->getContext($context, "currentPage")) + (isset($context["nearbyPagesLimit"]) ? $context["nearbyPagesLimit"] : $this->getContext($context, "nearbyPagesLimit")))));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    if (($context["i"] <= (isset($context["lastPage"]) ? $context["lastPage"] : $this->getContext($context, "lastPage")))) {
                        // line 48
                        echo "                        <a class=\"\" href=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath((isset($context["paginationPath"]) ? $context["paginationPath"] : $this->getContext($context, "paginationPath")), twig_array_merge((isset($context["params"]) ? $context["params"] : $this->getContext($context, "params")), array("show" => (isset($context["results_per_page"]) ? $context["results_per_page"] : $this->getContext($context, "results_per_page")), "page" => $context["i"]))), "html", null, true);
                        echo "\">";
                        echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                        echo "</a>
                    ";
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 50
                echo "
                    ";
                // line 51
                if ((((isset($context["lastPage"]) ? $context["lastPage"] : $this->getContext($context, "lastPage")) - (isset($context["extremePagesLimit"]) ? $context["extremePagesLimit"] : $this->getContext($context, "extremePagesLimit"))) > ((isset($context["currentPage"]) ? $context["currentPage"] : $this->getContext($context, "currentPage")) + (isset($context["nearbyPagesLimit"]) ? $context["nearbyPagesLimit"] : $this->getContext($context, "nearbyPagesLimit"))))) {
                    // line 52
                    echo "                        <span class=\"sep-dots\">...</span>
                    ";
                }
                // line 54
                echo "
                    ";
                // line 55
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable(range((((isset($context["lastPage"]) ? $context["lastPage"] : $this->getContext($context, "lastPage")) - (isset($context["extremePagesLimit"]) ? $context["extremePagesLimit"] : $this->getContext($context, "extremePagesLimit"))) + 1), (isset($context["lastPage"]) ? $context["lastPage"] : $this->getContext($context, "lastPage"))));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    if (($context["i"] > ((isset($context["currentPage"]) ? $context["currentPage"] : $this->getContext($context, "currentPage")) + (isset($context["nearbyPagesLimit"]) ? $context["nearbyPagesLimit"] : $this->getContext($context, "nearbyPagesLimit"))))) {
                        // line 56
                        echo "                        <a class=\"\" href=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath((isset($context["paginationPath"]) ? $context["paginationPath"] : $this->getContext($context, "paginationPath")), twig_array_merge((isset($context["params"]) ? $context["params"] : $this->getContext($context, "params")), array("show" => (isset($context["results_per_page"]) ? $context["results_per_page"] : $this->getContext($context, "results_per_page")), "page" => $context["i"]))), "html", null, true);
                        echo "\">";
                        echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                        echo "</a>
                    ";
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 58
                echo "
                    <a class=\"next\" href=\"";
                // line 59
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath((isset($context["paginationPath"]) ? $context["paginationPath"] : $this->getContext($context, "paginationPath")), twig_array_merge((isset($context["params"]) ? $context["params"] : $this->getContext($context, "params")), array("show" => (isset($context["results_per_page"]) ? $context["results_per_page"] : $this->getContext($context, "results_per_page")), "page" => ((isset($context["currentPage"]) ? $context["currentPage"] : $this->getContext($context, "currentPage")) + 1)))), "html", null, true);
                echo "\">Next</a>
                ";
            } elseif (            // line 60
(isset($context["showAlwaysFirstAndLast"]) ? $context["showAlwaysFirstAndLast"] : $this->getContext($context, "showAlwaysFirstAndLast"))) {
                // line 61
                echo "                    <span class=\"next disabled\">Next</span>
                ";
            }
            // line 63
            echo "        ";
            if (((isset($context["number_results"]) ? $context["number_results"] : $this->getContext($context, "number_results")) == true)) {
                // line 64
                echo "            <div class=\"pagination-dropdown-wrapper dropdown-wrapper\">
                <a href=\"javascript:void(0)\" class=\"dropdown-button pagination-results results-per-page dropdown-show-label\">
                    Show <b>";
                // line 66
                echo twig_escape_filter($this->env, (isset($context["results_per_page"]) ? $context["results_per_page"] : $this->getContext($context, "results_per_page")), "html", null, true);
                echo "</b> results per page
                </a>
                <div class=\"dropdown\">
                    ";
                // line 69
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["number_results_list"]) ? $context["number_results_list"] : $this->getContext($context, "number_results_list")));
                foreach ($context['_seq'] as $context["_key"] => $context["n"]) {
                    // line 70
                    echo "                        ";
                    if (($context["n"] != (isset($context["results_per_page"]) ? $context["results_per_page"] : $this->getContext($context, "results_per_page")))) {
                        // line 71
                        echo "                            <a href=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath((isset($context["paginationPath"]) ? $context["paginationPath"] : $this->getContext($context, "paginationPath")), twig_array_merge((isset($context["params"]) ? $context["params"] : $this->getContext($context, "params")), array("show" => $context["n"]))), "html", null, true);
                        echo "\">";
                        echo twig_escape_filter($this->env, $context["n"], "html", null, true);
                        echo " per page</a>
                        ";
                    }
                    // line 73
                    echo "                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['n'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 74
                echo "                </div>
            </div>
        ";
            }
            // line 77
            echo "        </div>
    ";
            echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 80
    public function getpagination_status($__current_page__ = null, $__results_per_page__ = null, $__total__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "current_page" => $__current_page__,
            "results_per_page" => $__results_per_page__,
            "total" => $__total__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 81
            echo "    ";
            $context["remaining"] = ((isset($context["total"]) ? $context["total"] : $this->getContext($context, "total")) - (((isset($context["current_page"]) ? $context["current_page"] : $this->getContext($context, "current_page")) - 1) * (isset($context["results_per_page"]) ? $context["results_per_page"] : $this->getContext($context, "results_per_page"))));
            // line 82
            echo "    ";
            if (((isset($context["remaining"]) ? $context["remaining"] : $this->getContext($context, "remaining")) > (isset($context["results_per_page"]) ? $context["results_per_page"] : $this->getContext($context, "results_per_page")))) {
                // line 83
                echo "        ";
                $context["remaining"] = (isset($context["results_per_page"]) ? $context["results_per_page"] : $this->getContext($context, "results_per_page"));
                // line 84
                echo "    ";
            }
            // line 85
            echo "    ";
            echo twig_escape_filter($this->env, (isset($context["remaining"]) ? $context["remaining"] : $this->getContext($context, "remaining")), "html", null, true);
            echo "
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 87
    public function getsearch_bar($__id__ = null, $__method__ = null, $__params__ = null, $__ajax__ = null, $__ajaxmethod__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "id" => $__id__,
            "method" => $__method__,
            "params" => $__params__,
            "ajax" => $__ajax__,
            "ajaxmethod" => $__ajaxmethod__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 88
            echo "    <div class=\"search-bar\" id=\"";
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
            echo "\"";
            if (((isset($context["ajaxmethod"]) ? $context["ajaxmethod"] : $this->getContext($context, "ajaxmethod")) != null)) {
                echo "data-method=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath((isset($context["ajaxmethod"]) ? $context["ajaxmethod"] : $this->getContext($context, "ajaxmethod")), (isset($context["params"]) ? $context["params"] : $this->getContext($context, "params"))), "html", null, true);
                echo "\"";
            }
            echo ">
        <form method=\"get\" ";
            // line 89
            if (((isset($context["method"]) ? $context["method"] : $this->getContext($context, "method")) != null)) {
                echo "action=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath((isset($context["method"]) ? $context["method"] : $this->getContext($context, "method")), (isset($context["params"]) ? $context["params"] : $this->getContext($context, "params"))), "html", null, true);
                echo "\"";
            }
            echo ">
            <input type=\"text\" name=\"search-";
            // line 90
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
            echo "\" id=\"search-";
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
            echo "-input\" class=\"search-input\">
            <button><i class=\"fa fa-search\"></i></button>
        </form>
    </div>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "ui.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  399 => 90,  391 => 89,  380 => 88,  365 => 87,  351 => 85,  348 => 84,  345 => 83,  342 => 82,  339 => 81,  326 => 80,  313 => 77,  308 => 74,  302 => 73,  294 => 71,  291 => 70,  287 => 69,  281 => 66,  277 => 64,  274 => 63,  270 => 61,  268 => 60,  264 => 59,  261 => 58,  249 => 56,  244 => 55,  241 => 54,  237 => 52,  235 => 51,  232 => 50,  220 => 48,  214 => 47,  212 => 46,  207 => 44,  204 => 43,  200 => 41,  197 => 40,  185 => 38,  180 => 37,  177 => 36,  173 => 34,  171 => 33,  168 => 32,  156 => 30,  151 => 29,  145 => 27,  142 => 26,  139 => 25,  137 => 24,  134 => 23,  127 => 21,  124 => 20,  121 => 19,  118 => 18,  101 => 17,  89 => 15,  83 => 14,  79 => 12,  77 => 11,  74 => 10,  69 => 8,  66 => 7,  64 => 6,  50 => 5,  43 => 4,  39 => 3,  34 => 2,  21 => 1,);
    }
}

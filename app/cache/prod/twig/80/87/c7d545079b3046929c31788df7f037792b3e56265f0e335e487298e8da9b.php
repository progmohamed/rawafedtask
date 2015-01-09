<?php

/* BraincraftedBootstrapBundle::flash.html.twig */
class __TwigTemplate_8087c7d545079b3046929c31788df7f037792b3e56265f0e335e487298e8da9b extends Twig_Template
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
        if ( !array_key_exists("translation_domain", $context)) {
            // line 2
            echo "    ";
            $context["translation_domain"] = null;
        }
        // line 4
        if ( !array_key_exists("close", $context)) {
            // line 5
            echo "    ";
            $context["close"] = false;
        }
        // line 7
        echo "
";
        // line 8
        if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute($_app_, "session", array()), "flashbag", array()), "get", array(0 => "alert"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 9
            echo "    <div class=\"alert alert-warning\">
        ";
            // line 10
            if (isset($context["close"])) { $_close_ = $context["close"]; } else { $_close_ = null; }
            if ($_close_) {
                echo "<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>";
            }
            // line 11
            echo "        ";
            if (isset($context["flashMessage"])) { $_flashMessage_ = $context["flashMessage"]; } else { $_flashMessage_ = null; }
            if (isset($context["translation_domain"])) { $_translation_domain_ = $context["translation_domain"]; } else { $_translation_domain_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($_flashMessage_, array(), $_translation_domain_), "html", null, true);
            echo "
    </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "
";
        // line 15
        if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute($_app_, "session", array()), "flashbag", array()), "get", array(0 => "error"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 16
            echo "    <div class=\"alert alert-danger\">
        ";
            // line 17
            if (isset($context["close"])) { $_close_ = $context["close"]; } else { $_close_ = null; }
            if ($_close_) {
                echo "<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>";
            }
            // line 18
            echo "        ";
            if (isset($context["flashMessage"])) { $_flashMessage_ = $context["flashMessage"]; } else { $_flashMessage_ = null; }
            if (isset($context["translation_domain"])) { $_translation_domain_ = $context["translation_domain"]; } else { $_translation_domain_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($_flashMessage_, array(), $_translation_domain_), "html", null, true);
            echo "
    </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "
";
        // line 22
        if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute($_app_, "session", array()), "flashbag", array()), "get", array(0 => "info"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 23
            echo "    <div class=\"alert alert-info\">
        ";
            // line 24
            if (isset($context["close"])) { $_close_ = $context["close"]; } else { $_close_ = null; }
            if ($_close_) {
                echo "<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>";
            }
            // line 25
            echo "        ";
            if (isset($context["flashMessage"])) { $_flashMessage_ = $context["flashMessage"]; } else { $_flashMessage_ = null; }
            if (isset($context["translation_domain"])) { $_translation_domain_ = $context["translation_domain"]; } else { $_translation_domain_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($_flashMessage_, array(), $_translation_domain_), "html", null, true);
            echo "
    </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "
";
        // line 29
        if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute($_app_, "session", array()), "flashbag", array()), "get", array(0 => "success"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 30
            echo "    <div class=\"alert alert-success\">
        ";
            // line 31
            if (isset($context["close"])) { $_close_ = $context["close"]; } else { $_close_ = null; }
            if ($_close_) {
                echo "<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>";
            }
            // line 32
            echo "        ";
            if (isset($context["flashMessage"])) { $_flashMessage_ = $context["flashMessage"]; } else { $_flashMessage_ = null; }
            if (isset($context["translation_domain"])) { $_translation_domain_ = $context["translation_domain"]; } else { $_translation_domain_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($_flashMessage_, array(), $_translation_domain_), "html", null, true);
            echo "
    </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "BraincraftedBootstrapBundle::flash.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  131 => 32,  126 => 31,  123 => 30,  118 => 29,  115 => 28,  103 => 25,  98 => 24,  95 => 23,  90 => 22,  87 => 21,  75 => 18,  70 => 17,  67 => 16,  62 => 15,  59 => 14,  47 => 11,  42 => 10,  39 => 9,  34 => 8,  31 => 7,  27 => 5,  25 => 4,  21 => 2,  19 => 1,);
    }
}

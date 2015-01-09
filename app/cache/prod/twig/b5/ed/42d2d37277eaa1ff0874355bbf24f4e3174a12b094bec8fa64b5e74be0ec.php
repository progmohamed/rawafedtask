<?php

/* BraincraftedBootstrapBundle:Bootstrap:bootstrap.scss.twig */
class __TwigTemplate_b5ed42d2d37277eaa1ff0874355bbf24f4e3174a12b094bec8fa64b5e74be0ec extends Twig_Template
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
        echo "// Core variables and mixins
@import \"";
        // line 2
        if (isset($context["variables_file"])) { $_variables_file_ = $context["variables_file"]; } else { $_variables_file_ = null; }
        echo twig_escape_filter($this->env, $_variables_file_, "html", null, true);
        echo "\";
@import \"";
        // line 3
        if (isset($context["assets_dir"])) { $_assets_dir_ = $context["assets_dir"]; } else { $_assets_dir_ = null; }
        echo twig_escape_filter($this->env, $_assets_dir_, "html", null, true);
        echo "/stylesheets/bootstrap/mixins\";

// Reset and dependencies
@import \"";
        // line 6
        if (isset($context["assets_dir"])) { $_assets_dir_ = $context["assets_dir"]; } else { $_assets_dir_ = null; }
        echo twig_escape_filter($this->env, $_assets_dir_, "html", null, true);
        echo "/stylesheets/bootstrap/normalize\";
@import \"";
        // line 7
        if (isset($context["assets_dir"])) { $_assets_dir_ = $context["assets_dir"]; } else { $_assets_dir_ = null; }
        echo twig_escape_filter($this->env, $_assets_dir_, "html", null, true);
        echo "/stylesheets/bootstrap/print\";
@import \"";
        // line 8
        if (isset($context["assets_dir"])) { $_assets_dir_ = $context["assets_dir"]; } else { $_assets_dir_ = null; }
        echo twig_escape_filter($this->env, $_assets_dir_, "html", null, true);
        echo "/stylesheets/bootstrap/glyphicons\";

// Core CSS
@import \"";
        // line 11
        if (isset($context["assets_dir"])) { $_assets_dir_ = $context["assets_dir"]; } else { $_assets_dir_ = null; }
        echo twig_escape_filter($this->env, $_assets_dir_, "html", null, true);
        echo "/stylesheets/bootstrap/scaffolding\";
@import \"";
        // line 12
        if (isset($context["assets_dir"])) { $_assets_dir_ = $context["assets_dir"]; } else { $_assets_dir_ = null; }
        echo twig_escape_filter($this->env, $_assets_dir_, "html", null, true);
        echo "/stylesheets/bootstrap/type\";
@import \"";
        // line 13
        if (isset($context["assets_dir"])) { $_assets_dir_ = $context["assets_dir"]; } else { $_assets_dir_ = null; }
        echo twig_escape_filter($this->env, $_assets_dir_, "html", null, true);
        echo "/stylesheets/bootstrap/code\";
@import \"";
        // line 14
        if (isset($context["assets_dir"])) { $_assets_dir_ = $context["assets_dir"]; } else { $_assets_dir_ = null; }
        echo twig_escape_filter($this->env, $_assets_dir_, "html", null, true);
        echo "/stylesheets/bootstrap/grid\";
@import \"";
        // line 15
        if (isset($context["assets_dir"])) { $_assets_dir_ = $context["assets_dir"]; } else { $_assets_dir_ = null; }
        echo twig_escape_filter($this->env, $_assets_dir_, "html", null, true);
        echo "/stylesheets/bootstrap/tables\";
@import \"";
        // line 16
        if (isset($context["assets_dir"])) { $_assets_dir_ = $context["assets_dir"]; } else { $_assets_dir_ = null; }
        echo twig_escape_filter($this->env, $_assets_dir_, "html", null, true);
        echo "/stylesheets/bootstrap/forms\";
@import \"";
        // line 17
        if (isset($context["assets_dir"])) { $_assets_dir_ = $context["assets_dir"]; } else { $_assets_dir_ = null; }
        echo twig_escape_filter($this->env, $_assets_dir_, "html", null, true);
        echo "/stylesheets/bootstrap/buttons\";

// Components
@import \"";
        // line 20
        if (isset($context["assets_dir"])) { $_assets_dir_ = $context["assets_dir"]; } else { $_assets_dir_ = null; }
        echo twig_escape_filter($this->env, $_assets_dir_, "html", null, true);
        echo "/stylesheets/bootstrap/component-animations\";
@import \"";
        // line 21
        if (isset($context["assets_dir"])) { $_assets_dir_ = $context["assets_dir"]; } else { $_assets_dir_ = null; }
        echo twig_escape_filter($this->env, $_assets_dir_, "html", null, true);
        echo "/stylesheets/bootstrap/dropdowns\";
@import \"";
        // line 22
        if (isset($context["assets_dir"])) { $_assets_dir_ = $context["assets_dir"]; } else { $_assets_dir_ = null; }
        echo twig_escape_filter($this->env, $_assets_dir_, "html", null, true);
        echo "/stylesheets/bootstrap/button-groups\";
@import \"";
        // line 23
        if (isset($context["assets_dir"])) { $_assets_dir_ = $context["assets_dir"]; } else { $_assets_dir_ = null; }
        echo twig_escape_filter($this->env, $_assets_dir_, "html", null, true);
        echo "/stylesheets/bootstrap/input-groups\";
@import \"";
        // line 24
        if (isset($context["assets_dir"])) { $_assets_dir_ = $context["assets_dir"]; } else { $_assets_dir_ = null; }
        echo twig_escape_filter($this->env, $_assets_dir_, "html", null, true);
        echo "/stylesheets/bootstrap/navs\";
@import \"";
        // line 25
        if (isset($context["assets_dir"])) { $_assets_dir_ = $context["assets_dir"]; } else { $_assets_dir_ = null; }
        echo twig_escape_filter($this->env, $_assets_dir_, "html", null, true);
        echo "/stylesheets/bootstrap/navbar\";
@import \"";
        // line 26
        if (isset($context["assets_dir"])) { $_assets_dir_ = $context["assets_dir"]; } else { $_assets_dir_ = null; }
        echo twig_escape_filter($this->env, $_assets_dir_, "html", null, true);
        echo "/stylesheets/bootstrap/breadcrumbs\";
@import \"";
        // line 27
        if (isset($context["assets_dir"])) { $_assets_dir_ = $context["assets_dir"]; } else { $_assets_dir_ = null; }
        echo twig_escape_filter($this->env, $_assets_dir_, "html", null, true);
        echo "/stylesheets/bootstrap/pagination\";
@import \"";
        // line 28
        if (isset($context["assets_dir"])) { $_assets_dir_ = $context["assets_dir"]; } else { $_assets_dir_ = null; }
        echo twig_escape_filter($this->env, $_assets_dir_, "html", null, true);
        echo "/stylesheets/bootstrap/pager\";
@import \"";
        // line 29
        if (isset($context["assets_dir"])) { $_assets_dir_ = $context["assets_dir"]; } else { $_assets_dir_ = null; }
        echo twig_escape_filter($this->env, $_assets_dir_, "html", null, true);
        echo "/stylesheets/bootstrap/labels\";
@import \"";
        // line 30
        if (isset($context["assets_dir"])) { $_assets_dir_ = $context["assets_dir"]; } else { $_assets_dir_ = null; }
        echo twig_escape_filter($this->env, $_assets_dir_, "html", null, true);
        echo "/stylesheets/bootstrap/badges\";
@import \"";
        // line 31
        if (isset($context["assets_dir"])) { $_assets_dir_ = $context["assets_dir"]; } else { $_assets_dir_ = null; }
        echo twig_escape_filter($this->env, $_assets_dir_, "html", null, true);
        echo "/stylesheets/bootstrap/jumbotron\";
@import \"";
        // line 32
        if (isset($context["assets_dir"])) { $_assets_dir_ = $context["assets_dir"]; } else { $_assets_dir_ = null; }
        echo twig_escape_filter($this->env, $_assets_dir_, "html", null, true);
        echo "/stylesheets/bootstrap/thumbnails\";
@import \"";
        // line 33
        if (isset($context["assets_dir"])) { $_assets_dir_ = $context["assets_dir"]; } else { $_assets_dir_ = null; }
        echo twig_escape_filter($this->env, $_assets_dir_, "html", null, true);
        echo "/stylesheets/bootstrap/alerts\";
@import \"";
        // line 34
        if (isset($context["assets_dir"])) { $_assets_dir_ = $context["assets_dir"]; } else { $_assets_dir_ = null; }
        echo twig_escape_filter($this->env, $_assets_dir_, "html", null, true);
        echo "/stylesheets/bootstrap/progress-bars\";
@import \"";
        // line 35
        if (isset($context["assets_dir"])) { $_assets_dir_ = $context["assets_dir"]; } else { $_assets_dir_ = null; }
        echo twig_escape_filter($this->env, $_assets_dir_, "html", null, true);
        echo "/stylesheets/bootstrap/media\";
@import \"";
        // line 36
        if (isset($context["assets_dir"])) { $_assets_dir_ = $context["assets_dir"]; } else { $_assets_dir_ = null; }
        echo twig_escape_filter($this->env, $_assets_dir_, "html", null, true);
        echo "/stylesheets/bootstrap/list-group\";
@import \"";
        // line 37
        if (isset($context["assets_dir"])) { $_assets_dir_ = $context["assets_dir"]; } else { $_assets_dir_ = null; }
        echo twig_escape_filter($this->env, $_assets_dir_, "html", null, true);
        echo "/stylesheets/bootstrap/panels\";
@import \"";
        // line 38
        if (isset($context["assets_dir"])) { $_assets_dir_ = $context["assets_dir"]; } else { $_assets_dir_ = null; }
        echo twig_escape_filter($this->env, $_assets_dir_, "html", null, true);
        echo "/stylesheets/bootstrap/responsive-embed\";
@import \"";
        // line 39
        if (isset($context["assets_dir"])) { $_assets_dir_ = $context["assets_dir"]; } else { $_assets_dir_ = null; }
        echo twig_escape_filter($this->env, $_assets_dir_, "html", null, true);
        echo "/stylesheets/bootstrap/wells\";
@import \"";
        // line 40
        if (isset($context["assets_dir"])) { $_assets_dir_ = $context["assets_dir"]; } else { $_assets_dir_ = null; }
        echo twig_escape_filter($this->env, $_assets_dir_, "html", null, true);
        echo "/stylesheets/bootstrap/close\";

// Components w/ JavaScript
@import \"";
        // line 43
        if (isset($context["assets_dir"])) { $_assets_dir_ = $context["assets_dir"]; } else { $_assets_dir_ = null; }
        echo twig_escape_filter($this->env, $_assets_dir_, "html", null, true);
        echo "/stylesheets/bootstrap/modals\";
@import \"";
        // line 44
        if (isset($context["assets_dir"])) { $_assets_dir_ = $context["assets_dir"]; } else { $_assets_dir_ = null; }
        echo twig_escape_filter($this->env, $_assets_dir_, "html", null, true);
        echo "/stylesheets/bootstrap/tooltip\";
@import \"";
        // line 45
        if (isset($context["assets_dir"])) { $_assets_dir_ = $context["assets_dir"]; } else { $_assets_dir_ = null; }
        echo twig_escape_filter($this->env, $_assets_dir_, "html", null, true);
        echo "/stylesheets/bootstrap/popovers\";
@import \"";
        // line 46
        if (isset($context["assets_dir"])) { $_assets_dir_ = $context["assets_dir"]; } else { $_assets_dir_ = null; }
        echo twig_escape_filter($this->env, $_assets_dir_, "html", null, true);
        echo "/stylesheets/bootstrap/carousel\";

// Utility classes
@import \"";
        // line 49
        if (isset($context["assets_dir"])) { $_assets_dir_ = $context["assets_dir"]; } else { $_assets_dir_ = null; }
        echo twig_escape_filter($this->env, $_assets_dir_, "html", null, true);
        echo "/stylesheets/bootstrap/utilities\";
@import \"";
        // line 50
        if (isset($context["assets_dir"])) { $_assets_dir_ = $context["assets_dir"]; } else { $_assets_dir_ = null; }
        echo twig_escape_filter($this->env, $_assets_dir_, "html", null, true);
        echo "/stylesheets/bootstrap/responsive-utilities\";
";
    }

    public function getTemplateName()
    {
        return "BraincraftedBootstrapBundle:Bootstrap:bootstrap.scss.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  222 => 50,  217 => 49,  210 => 46,  205 => 45,  200 => 44,  195 => 43,  188 => 40,  183 => 39,  178 => 38,  173 => 37,  168 => 36,  163 => 35,  158 => 34,  153 => 33,  148 => 32,  143 => 31,  138 => 30,  133 => 29,  128 => 28,  123 => 27,  118 => 26,  113 => 25,  108 => 24,  103 => 23,  98 => 22,  93 => 21,  88 => 20,  81 => 17,  76 => 16,  71 => 15,  66 => 14,  61 => 13,  56 => 12,  51 => 11,  44 => 8,  39 => 7,  34 => 6,  27 => 3,  22 => 2,  19 => 1,);
    }
}

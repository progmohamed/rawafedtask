<?php

/* BraincraftedBootstrapBundle:Bootstrap:bootstrap.less.twig */
class __TwigTemplate_7e99db581068e0a4f73c697ddb3d0d23b742979fee3606011a2b8c395ddd7e88 extends Twig_Template
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
        echo "/*!
 * Bootstrap v3.0.0
 *
 * Copyright 2013 Twitter, Inc
 * Licensed under the Apache License v2.0
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * Designed and built with all the love in the world by @mdo and @fat.
 */

// Core variables and mixins
@import \"";
        // line 12
        if (isset($context["variables_file"])) { $_variables_file_ = $context["variables_file"]; } else { $_variables_file_ = null; }
        echo twig_escape_filter($this->env, $_variables_file_, "html", null, true);
        echo "\";
@import \"";
        // line 13
        if (isset($context["assets_dir"])) { $_assets_dir_ = $context["assets_dir"]; } else { $_assets_dir_ = null; }
        echo twig_escape_filter($this->env, $_assets_dir_, "html", null, true);
        echo "less/mixins.less\";

// Reset
@import \"";
        // line 16
        if (isset($context["assets_dir"])) { $_assets_dir_ = $context["assets_dir"]; } else { $_assets_dir_ = null; }
        echo twig_escape_filter($this->env, $_assets_dir_, "html", null, true);
        echo "less/normalize.less\";
@import \"";
        // line 17
        if (isset($context["assets_dir"])) { $_assets_dir_ = $context["assets_dir"]; } else { $_assets_dir_ = null; }
        echo twig_escape_filter($this->env, $_assets_dir_, "html", null, true);
        echo "less/print.less\";

// Core CSS
@import \"";
        // line 20
        if (isset($context["assets_dir"])) { $_assets_dir_ = $context["assets_dir"]; } else { $_assets_dir_ = null; }
        echo twig_escape_filter($this->env, $_assets_dir_, "html", null, true);
        echo "less/scaffolding.less\";
@import \"";
        // line 21
        if (isset($context["assets_dir"])) { $_assets_dir_ = $context["assets_dir"]; } else { $_assets_dir_ = null; }
        echo twig_escape_filter($this->env, $_assets_dir_, "html", null, true);
        echo "less/type.less\";
@import \"";
        // line 22
        if (isset($context["assets_dir"])) { $_assets_dir_ = $context["assets_dir"]; } else { $_assets_dir_ = null; }
        echo twig_escape_filter($this->env, $_assets_dir_, "html", null, true);
        echo "less/code.less\";
@import \"";
        // line 23
        if (isset($context["assets_dir"])) { $_assets_dir_ = $context["assets_dir"]; } else { $_assets_dir_ = null; }
        echo twig_escape_filter($this->env, $_assets_dir_, "html", null, true);
        echo "less/grid.less\";
@import \"";
        // line 24
        if (isset($context["assets_dir"])) { $_assets_dir_ = $context["assets_dir"]; } else { $_assets_dir_ = null; }
        echo twig_escape_filter($this->env, $_assets_dir_, "html", null, true);
        echo "less/tables.less\";
@import \"";
        // line 25
        if (isset($context["assets_dir"])) { $_assets_dir_ = $context["assets_dir"]; } else { $_assets_dir_ = null; }
        echo twig_escape_filter($this->env, $_assets_dir_, "html", null, true);
        echo "less/forms.less\";
@import \"";
        // line 26
        if (isset($context["assets_dir"])) { $_assets_dir_ = $context["assets_dir"]; } else { $_assets_dir_ = null; }
        echo twig_escape_filter($this->env, $_assets_dir_, "html", null, true);
        echo "less/buttons.less\";

// Components
@import \"";
        // line 29
        if (isset($context["assets_dir"])) { $_assets_dir_ = $context["assets_dir"]; } else { $_assets_dir_ = null; }
        echo twig_escape_filter($this->env, $_assets_dir_, "html", null, true);
        echo "less/component-animations.less\";
@import \"";
        // line 30
        if (isset($context["assets_dir"])) { $_assets_dir_ = $context["assets_dir"]; } else { $_assets_dir_ = null; }
        echo twig_escape_filter($this->env, $_assets_dir_, "html", null, true);
        echo "less/glyphicons.less\";
@import \"";
        // line 31
        if (isset($context["assets_dir"])) { $_assets_dir_ = $context["assets_dir"]; } else { $_assets_dir_ = null; }
        echo twig_escape_filter($this->env, $_assets_dir_, "html", null, true);
        echo "less/dropdowns.less\";
@import \"";
        // line 32
        if (isset($context["assets_dir"])) { $_assets_dir_ = $context["assets_dir"]; } else { $_assets_dir_ = null; }
        echo twig_escape_filter($this->env, $_assets_dir_, "html", null, true);
        echo "less/button-groups.less\";
@import \"";
        // line 33
        if (isset($context["assets_dir"])) { $_assets_dir_ = $context["assets_dir"]; } else { $_assets_dir_ = null; }
        echo twig_escape_filter($this->env, $_assets_dir_, "html", null, true);
        echo "less/input-groups.less\";
@import \"";
        // line 34
        if (isset($context["assets_dir"])) { $_assets_dir_ = $context["assets_dir"]; } else { $_assets_dir_ = null; }
        echo twig_escape_filter($this->env, $_assets_dir_, "html", null, true);
        echo "less/navs.less\";
@import \"";
        // line 35
        if (isset($context["assets_dir"])) { $_assets_dir_ = $context["assets_dir"]; } else { $_assets_dir_ = null; }
        echo twig_escape_filter($this->env, $_assets_dir_, "html", null, true);
        echo "less/navbar.less\";
@import \"";
        // line 36
        if (isset($context["assets_dir"])) { $_assets_dir_ = $context["assets_dir"]; } else { $_assets_dir_ = null; }
        echo twig_escape_filter($this->env, $_assets_dir_, "html", null, true);
        echo "less/breadcrumbs.less\";
@import \"";
        // line 37
        if (isset($context["assets_dir"])) { $_assets_dir_ = $context["assets_dir"]; } else { $_assets_dir_ = null; }
        echo twig_escape_filter($this->env, $_assets_dir_, "html", null, true);
        echo "less/pagination.less\";
@import \"";
        // line 38
        if (isset($context["assets_dir"])) { $_assets_dir_ = $context["assets_dir"]; } else { $_assets_dir_ = null; }
        echo twig_escape_filter($this->env, $_assets_dir_, "html", null, true);
        echo "less/pager.less\";
@import \"";
        // line 39
        if (isset($context["assets_dir"])) { $_assets_dir_ = $context["assets_dir"]; } else { $_assets_dir_ = null; }
        echo twig_escape_filter($this->env, $_assets_dir_, "html", null, true);
        echo "less/labels.less\";
@import \"";
        // line 40
        if (isset($context["assets_dir"])) { $_assets_dir_ = $context["assets_dir"]; } else { $_assets_dir_ = null; }
        echo twig_escape_filter($this->env, $_assets_dir_, "html", null, true);
        echo "less/badges.less\";
@import \"";
        // line 41
        if (isset($context["assets_dir"])) { $_assets_dir_ = $context["assets_dir"]; } else { $_assets_dir_ = null; }
        echo twig_escape_filter($this->env, $_assets_dir_, "html", null, true);
        echo "less/jumbotron.less\";
@import \"";
        // line 42
        if (isset($context["assets_dir"])) { $_assets_dir_ = $context["assets_dir"]; } else { $_assets_dir_ = null; }
        echo twig_escape_filter($this->env, $_assets_dir_, "html", null, true);
        echo "less/thumbnails.less\";
@import \"";
        // line 43
        if (isset($context["assets_dir"])) { $_assets_dir_ = $context["assets_dir"]; } else { $_assets_dir_ = null; }
        echo twig_escape_filter($this->env, $_assets_dir_, "html", null, true);
        echo "less/alerts.less\";
@import \"";
        // line 44
        if (isset($context["assets_dir"])) { $_assets_dir_ = $context["assets_dir"]; } else { $_assets_dir_ = null; }
        echo twig_escape_filter($this->env, $_assets_dir_, "html", null, true);
        echo "less/progress-bars.less\";
@import \"";
        // line 45
        if (isset($context["assets_dir"])) { $_assets_dir_ = $context["assets_dir"]; } else { $_assets_dir_ = null; }
        echo twig_escape_filter($this->env, $_assets_dir_, "html", null, true);
        echo "less/media.less\";
@import \"";
        // line 46
        if (isset($context["assets_dir"])) { $_assets_dir_ = $context["assets_dir"]; } else { $_assets_dir_ = null; }
        echo twig_escape_filter($this->env, $_assets_dir_, "html", null, true);
        echo "less/list-group.less\";
@import \"";
        // line 47
        if (isset($context["assets_dir"])) { $_assets_dir_ = $context["assets_dir"]; } else { $_assets_dir_ = null; }
        echo twig_escape_filter($this->env, $_assets_dir_, "html", null, true);
        echo "less/panels.less\";
@import \"";
        // line 48
        if (isset($context["assets_dir"])) { $_assets_dir_ = $context["assets_dir"]; } else { $_assets_dir_ = null; }
        echo twig_escape_filter($this->env, $_assets_dir_, "html", null, true);
        echo "less/wells.less\";
@import \"";
        // line 49
        if (isset($context["assets_dir"])) { $_assets_dir_ = $context["assets_dir"]; } else { $_assets_dir_ = null; }
        echo twig_escape_filter($this->env, $_assets_dir_, "html", null, true);
        echo "less/close.less\";

// Components w/ JavaScript
@import \"";
        // line 52
        if (isset($context["assets_dir"])) { $_assets_dir_ = $context["assets_dir"]; } else { $_assets_dir_ = null; }
        echo twig_escape_filter($this->env, $_assets_dir_, "html", null, true);
        echo "less/modals.less\";
@import \"";
        // line 53
        if (isset($context["assets_dir"])) { $_assets_dir_ = $context["assets_dir"]; } else { $_assets_dir_ = null; }
        echo twig_escape_filter($this->env, $_assets_dir_, "html", null, true);
        echo "less/tooltip.less\";
@import \"";
        // line 54
        if (isset($context["assets_dir"])) { $_assets_dir_ = $context["assets_dir"]; } else { $_assets_dir_ = null; }
        echo twig_escape_filter($this->env, $_assets_dir_, "html", null, true);
        echo "less/popovers.less\";
@import \"";
        // line 55
        if (isset($context["assets_dir"])) { $_assets_dir_ = $context["assets_dir"]; } else { $_assets_dir_ = null; }
        echo twig_escape_filter($this->env, $_assets_dir_, "html", null, true);
        echo "less/carousel.less\";

// Utility classes
@import \"";
        // line 58
        if (isset($context["assets_dir"])) { $_assets_dir_ = $context["assets_dir"]; } else { $_assets_dir_ = null; }
        echo twig_escape_filter($this->env, $_assets_dir_, "html", null, true);
        echo "less/utilities.less\";
@import \"";
        // line 59
        if (isset($context["assets_dir"])) { $_assets_dir_ = $context["assets_dir"]; } else { $_assets_dir_ = null; }
        echo twig_escape_filter($this->env, $_assets_dir_, "html", null, true);
        echo "less/responsive-utilities.less\";
";
    }

    public function getTemplateName()
    {
        return "BraincraftedBootstrapBundle:Bootstrap:bootstrap.less.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  227 => 59,  222 => 58,  215 => 55,  210 => 54,  205 => 53,  200 => 52,  193 => 49,  188 => 48,  183 => 47,  178 => 46,  173 => 45,  168 => 44,  163 => 43,  158 => 42,  153 => 41,  148 => 40,  143 => 39,  138 => 38,  133 => 37,  128 => 36,  123 => 35,  118 => 34,  113 => 33,  108 => 32,  103 => 31,  98 => 30,  93 => 29,  86 => 26,  81 => 25,  76 => 24,  71 => 23,  66 => 22,  61 => 21,  56 => 20,  49 => 17,  44 => 16,  37 => 13,  32 => 12,  19 => 1,);
    }
}

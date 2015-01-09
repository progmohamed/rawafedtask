<?php

/* BraincraftedBootstrapBundle:Pagination:bootstrap.html.twig */
class __TwigTemplate_6c9d9550a0106bb575438a4cccb6a40b1fad449da6dba733fd7d2ecd3e8ef6c7 extends Twig_Template
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
        if (isset($context["class"])) { $_class_ = $context["class"]; } else { $_class_ = null; }
        $context["class"] = ((array_key_exists("class", $context)) ? (_twig_default_filter($_class_, "")) : (""));
        // line 2
        echo "
";
        // line 3
        if (isset($context["pageCount"])) { $_pageCount_ = $context["pageCount"]; } else { $_pageCount_ = null; }
        if (($_pageCount_ > 1)) {
            // line 4
            echo "    ";
            if (isset($context["style"])) { $_style_ = $context["style"]; } else { $_style_ = null; }
            if ((array_key_exists("style", $context) && ($_style_ == "pager"))) {
                // line 5
                echo "
        ";
                // line 6
                if (isset($context["prev_label"])) { $_prev_label_ = $context["prev_label"]; } else { $_prev_label_ = null; }
                $context["prev_label"] = ((array_key_exists("prev_label", $context)) ? (_twig_default_filter($_prev_label_, "Previous")) : ("Previous"));
                // line 7
                echo "        ";
                if (isset($context["next_label"])) { $_next_label_ = $context["next_label"]; } else { $_next_label_ = null; }
                $context["next_label"] = ((array_key_exists("next_label", $context)) ? (_twig_default_filter($_next_label_, "Next")) : ("Next"));
                // line 8
                echo "        ";
                if (isset($context["aligned"])) { $_aligned_ = $context["aligned"]; } else { $_aligned_ = null; }
                $context["aligned"] = ((array_key_exists("aligned", $context)) ? (_twig_default_filter($_aligned_, false)) : (false));
                // line 9
                echo "
        <ul class=\"pager";
                // line 10
                if (isset($context["class"])) { $_class_ = $context["class"]; } else { $_class_ = null; }
                if ( !twig_test_empty($_class_)) {
                    echo " ";
                    if (isset($context["class"])) { $_class_ = $context["class"]; } else { $_class_ = null; }
                    echo twig_escape_filter($this->env, $_class_, "html", null, true);
                }
                echo "\">
            ";
                // line 11
                if (array_key_exists("previous", $context)) {
                    // line 12
                    echo "                <li";
                    if (isset($context["aligned"])) { $_aligned_ = $context["aligned"]; } else { $_aligned_ = null; }
                    if ($_aligned_) {
                        echo " class=\"previous\"";
                    }
                    echo "><a href=\"";
                    if (isset($context["route"])) { $_route_ = $context["route"]; } else { $_route_ = null; }
                    if (isset($context["query"])) { $_query_ = $context["query"]; } else { $_query_ = null; }
                    if (isset($context["pageParameterName"])) { $_pageParameterName_ = $context["pageParameterName"]; } else { $_pageParameterName_ = null; }
                    if (isset($context["previous"])) { $_previous_ = $context["previous"]; } else { $_previous_ = null; }
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath($_route_, twig_array_merge($_query_, array($_pageParameterName_ => $_previous_))), "html", null, true);
                    echo "\">";
                    if (isset($context["prev_label"])) { $_prev_label_ = $context["prev_label"]; } else { $_prev_label_ = null; }
                    echo $_prev_label_;
                    echo "</a></li>
            ";
                } else {
                    // line 14
                    echo "                <li class=\"disabled";
                    if (isset($context["aligned"])) { $_aligned_ = $context["aligned"]; } else { $_aligned_ = null; }
                    if ($_aligned_) {
                        echo " previous";
                    }
                    echo "\"><span>";
                    if (isset($context["prev_label"])) { $_prev_label_ = $context["prev_label"]; } else { $_prev_label_ = null; }
                    echo $_prev_label_;
                    echo "</span></li>
            ";
                }
                // line 16
                echo "            ";
                if (array_key_exists("next", $context)) {
                    // line 17
                    echo "                <li";
                    if (isset($context["aligned"])) { $_aligned_ = $context["aligned"]; } else { $_aligned_ = null; }
                    if ($_aligned_) {
                        echo " class=\"next\"";
                    }
                    echo "><a href=\"";
                    if (isset($context["route"])) { $_route_ = $context["route"]; } else { $_route_ = null; }
                    if (isset($context["query"])) { $_query_ = $context["query"]; } else { $_query_ = null; }
                    if (isset($context["pageParameterName"])) { $_pageParameterName_ = $context["pageParameterName"]; } else { $_pageParameterName_ = null; }
                    if (isset($context["next"])) { $_next_ = $context["next"]; } else { $_next_ = null; }
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath($_route_, twig_array_merge($_query_, array($_pageParameterName_ => $_next_))), "html", null, true);
                    echo "\">";
                    if (isset($context["next_label"])) { $_next_label_ = $context["next_label"]; } else { $_next_label_ = null; }
                    echo $_next_label_;
                    echo "</a></li>
            ";
                } else {
                    // line 19
                    echo "                <li class=\"disabled";
                    if (isset($context["aligned"])) { $_aligned_ = $context["aligned"]; } else { $_aligned_ = null; }
                    if ($_aligned_) {
                        echo " next";
                    }
                    echo "\"><span>";
                    if (isset($context["next_label"])) { $_next_label_ = $context["next_label"]; } else { $_next_label_ = null; }
                    echo $_next_label_;
                    echo "</span></li>
            ";
                }
                // line 21
                echo "        </ul>
    ";
            } else {
                // line 23
                echo "
        ";
                // line 24
                if (isset($context["prev_label"])) { $_prev_label_ = $context["prev_label"]; } else { $_prev_label_ = null; }
                $context["prev_label"] = ((array_key_exists("prev_label", $context)) ? (_twig_default_filter($_prev_label_, "&laquo;")) : ("&laquo;"));
                // line 25
                echo "        ";
                if (isset($context["next_label"])) { $_next_label_ = $context["next_label"]; } else { $_next_label_ = null; }
                $context["next_label"] = ((array_key_exists("next_label", $context)) ? (_twig_default_filter($_next_label_, "&raquo;")) : ("&raquo;"));
                // line 26
                echo "
        <ul class=\"pagination";
                // line 27
                if (isset($context["class"])) { $_class_ = $context["class"]; } else { $_class_ = null; }
                if ( !twig_test_empty($_class_)) {
                    echo " ";
                    if (isset($context["class"])) { $_class_ = $context["class"]; } else { $_class_ = null; }
                    echo twig_escape_filter($this->env, $_class_, "html", null, true);
                }
                echo "\">
            ";
                // line 28
                if (isset($context["current"])) { $_current_ = $context["current"]; } else { $_current_ = null; }
                if (isset($context["first"])) { $_first_ = $context["first"]; } else { $_first_ = null; }
                if (((array_key_exists("first_label", $context) && array_key_exists("first", $context)) && ($_current_ != $_first_))) {
                    // line 29
                    echo "                <li><a href=\"";
                    if (isset($context["route"])) { $_route_ = $context["route"]; } else { $_route_ = null; }
                    if (isset($context["query"])) { $_query_ = $context["query"]; } else { $_query_ = null; }
                    if (isset($context["pageParameterName"])) { $_pageParameterName_ = $context["pageParameterName"]; } else { $_pageParameterName_ = null; }
                    if (isset($context["first"])) { $_first_ = $context["first"]; } else { $_first_ = null; }
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath($_route_, twig_array_merge($_query_, array($_pageParameterName_ => $_first_))), "html", null, true);
                    echo "\">";
                    if (isset($context["first_label"])) { $_first_label_ = $context["first_label"]; } else { $_first_label_ = null; }
                    echo $_first_label_;
                    echo "</a></li>
            ";
                } elseif (array_key_exists("last_label", $context)) {
                    // line 31
                    echo "                <li class=\"disabled\"><span>";
                    if (isset($context["first_label"])) { $_first_label_ = $context["first_label"]; } else { $_first_label_ = null; }
                    echo $_first_label_;
                    echo "</span></li>
            ";
                }
                // line 33
                echo "
            ";
                // line 34
                if (array_key_exists("previous", $context)) {
                    // line 35
                    echo "                <li><a href=\"";
                    if (isset($context["route"])) { $_route_ = $context["route"]; } else { $_route_ = null; }
                    if (isset($context["query"])) { $_query_ = $context["query"]; } else { $_query_ = null; }
                    if (isset($context["pageParameterName"])) { $_pageParameterName_ = $context["pageParameterName"]; } else { $_pageParameterName_ = null; }
                    if (isset($context["previous"])) { $_previous_ = $context["previous"]; } else { $_previous_ = null; }
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath($_route_, twig_array_merge($_query_, array($_pageParameterName_ => $_previous_))), "html", null, true);
                    echo "\">";
                    if (isset($context["prev_label"])) { $_prev_label_ = $context["prev_label"]; } else { $_prev_label_ = null; }
                    echo $_prev_label_;
                    echo "</a></li>
            ";
                } else {
                    // line 37
                    echo "                <li class=\"disabled\"><span>";
                    if (isset($context["prev_label"])) { $_prev_label_ = $context["prev_label"]; } else { $_prev_label_ = null; }
                    echo $_prev_label_;
                    echo "</span></li>
            ";
                }
                // line 39
                echo "
            ";
                // line 40
                if (isset($context["pagesInRange"])) { $_pagesInRange_ = $context["pagesInRange"]; } else { $_pagesInRange_ = null; }
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($_pagesInRange_);
                foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                    // line 41
                    echo "                ";
                    if (isset($context["page"])) { $_page_ = $context["page"]; } else { $_page_ = null; }
                    if (isset($context["current"])) { $_current_ = $context["current"]; } else { $_current_ = null; }
                    if (($_page_ != $_current_)) {
                        // line 42
                        echo "                    <li><a href=\"";
                        if (isset($context["route"])) { $_route_ = $context["route"]; } else { $_route_ = null; }
                        if (isset($context["query"])) { $_query_ = $context["query"]; } else { $_query_ = null; }
                        if (isset($context["pageParameterName"])) { $_pageParameterName_ = $context["pageParameterName"]; } else { $_pageParameterName_ = null; }
                        if (isset($context["page"])) { $_page_ = $context["page"]; } else { $_page_ = null; }
                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath($_route_, twig_array_merge($_query_, array($_pageParameterName_ => $_page_))), "html", null, true);
                        echo "\">";
                        if (isset($context["page"])) { $_page_ = $context["page"]; } else { $_page_ = null; }
                        echo twig_escape_filter($this->env, $_page_, "html", null, true);
                        echo "</a></li>
                ";
                    } else {
                        // line 44
                        echo "                    <li class=\"active\"><span>";
                        if (isset($context["page"])) { $_page_ = $context["page"]; } else { $_page_ = null; }
                        echo twig_escape_filter($this->env, $_page_, "html", null, true);
                        echo "</span></li>
                ";
                    }
                    // line 46
                    echo "
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 48
                echo "
            ";
                // line 49
                if (array_key_exists("next", $context)) {
                    // line 50
                    echo "                <li><a href=\"";
                    if (isset($context["route"])) { $_route_ = $context["route"]; } else { $_route_ = null; }
                    if (isset($context["query"])) { $_query_ = $context["query"]; } else { $_query_ = null; }
                    if (isset($context["pageParameterName"])) { $_pageParameterName_ = $context["pageParameterName"]; } else { $_pageParameterName_ = null; }
                    if (isset($context["next"])) { $_next_ = $context["next"]; } else { $_next_ = null; }
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath($_route_, twig_array_merge($_query_, array($_pageParameterName_ => $_next_))), "html", null, true);
                    echo "\">";
                    if (isset($context["next_label"])) { $_next_label_ = $context["next_label"]; } else { $_next_label_ = null; }
                    echo $_next_label_;
                    echo "</a></li>
            ";
                } else {
                    // line 52
                    echo "                <li class=\"disabled\"><span>";
                    if (isset($context["next_label"])) { $_next_label_ = $context["next_label"]; } else { $_next_label_ = null; }
                    echo $_next_label_;
                    echo "</span></li>
            ";
                }
                // line 54
                echo "
            ";
                // line 55
                if (isset($context["current"])) { $_current_ = $context["current"]; } else { $_current_ = null; }
                if (isset($context["last"])) { $_last_ = $context["last"]; } else { $_last_ = null; }
                if (((array_key_exists("last_label", $context) && array_key_exists("last", $context)) && ($_current_ != $_last_))) {
                    // line 56
                    echo "                <li><a href=\"";
                    if (isset($context["route"])) { $_route_ = $context["route"]; } else { $_route_ = null; }
                    if (isset($context["query"])) { $_query_ = $context["query"]; } else { $_query_ = null; }
                    if (isset($context["pageParameterName"])) { $_pageParameterName_ = $context["pageParameterName"]; } else { $_pageParameterName_ = null; }
                    if (isset($context["last"])) { $_last_ = $context["last"]; } else { $_last_ = null; }
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath($_route_, twig_array_merge($_query_, array($_pageParameterName_ => $_last_))), "html", null, true);
                    echo "\">";
                    if (isset($context["last_label"])) { $_last_label_ = $context["last_label"]; } else { $_last_label_ = null; }
                    echo $_last_label_;
                    echo "</a></li>
            ";
                } elseif (array_key_exists("last_label", $context)) {
                    // line 58
                    echo "                <li class=\"disabled\"><span>";
                    if (isset($context["last_label"])) { $_last_label_ = $context["last_label"]; } else { $_last_label_ = null; }
                    echo $_last_label_;
                    echo "</span></li>
            ";
                }
                // line 60
                echo "        </ul>
    ";
            }
        }
    }

    public function getTemplateName()
    {
        return "BraincraftedBootstrapBundle:Pagination:bootstrap.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  290 => 60,  283 => 58,  270 => 56,  266 => 55,  263 => 54,  256 => 52,  243 => 50,  241 => 49,  238 => 48,  231 => 46,  224 => 44,  211 => 42,  206 => 41,  201 => 40,  198 => 39,  191 => 37,  178 => 35,  176 => 34,  173 => 33,  166 => 31,  153 => 29,  149 => 28,  140 => 27,  137 => 26,  133 => 25,  130 => 24,  127 => 23,  123 => 21,  111 => 19,  93 => 17,  90 => 16,  78 => 14,  60 => 12,  58 => 11,  49 => 10,  46 => 9,  42 => 8,  38 => 7,  35 => 6,  32 => 5,  28 => 4,  25 => 3,  22 => 2,  19 => 1,);
    }
}

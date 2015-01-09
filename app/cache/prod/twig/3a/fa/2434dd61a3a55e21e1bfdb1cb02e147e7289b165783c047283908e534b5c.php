<?php

/* BraincraftedBootstrapBundle:Menu:bootstrap.html.twig */
class __TwigTemplate_3afa2434dd61a3a55e21e1bfdb1cb02e147e7289b165783c047283908e534b5c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        try {
            $this->parent = $this->env->loadTemplate("knp_menu_base.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(1);

            throw $e;
        }

        $this->blocks = array(
            'compressed_root' => array($this, 'block_compressed_root'),
            'root' => array($this, 'block_root'),
            'list' => array($this, 'block_list'),
            'dropdownList' => array($this, 'block_dropdownList'),
            'listList' => array($this, 'block_listList'),
            'children' => array($this, 'block_children'),
            'item' => array($this, 'block_item'),
            'linkElement' => array($this, 'block_linkElement'),
            'dropdownElement' => array($this, 'block_dropdownElement'),
            'dividerElement' => array($this, 'block_dividerElement'),
            'spanElement' => array($this, 'block_spanElement'),
            'label' => array($this, 'block_label'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "knp_menu_base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 11
    public function block_compressed_root($context, array $blocks = array())
    {
        // line 12
        ob_start();
        // line 13
        $this->displayBlock("root", $context, $blocks);
        echo "
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 17
    public function block_root($context, array $blocks = array())
    {
        // line 22
        if (isset($context["options"])) { $_options_ = $context["options"]; } else { $_options_ = null; }
        $context["options"] = twig_array_merge($_options_, array("currentDepth" => 0));
        // line 23
        if (isset($context["options"])) { $_options_ = $context["options"]; } else { $_options_ = null; }
        if ((($this->getAttribute($_options_, "style", array(), "any", true, true) && $this->getAttribute($_options_, "currentClass", array(), "any", true, true)) && ($this->getAttribute($_options_, "currentClass", array()) == "current"))) {
            // line 24
            echo "    ";
            if (isset($context["options"])) { $_options_ = $context["options"]; } else { $_options_ = null; }
            $context["options"] = twig_array_merge($_options_, array("currentClass" => "active"));
            // line 25
            echo "    ";
            if (isset($context["options"])) { $_options_ = $context["options"]; } else { $_options_ = null; }
            $context["options"] = twig_array_merge($_options_, array("ancestorClass" => "active"));
        }
        // line 27
        if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
        $context["listAttributes"] = $this->getAttribute($_item_, "childrenAttributes", array());
        // line 28
        $this->displayBlock("list", $context, $blocks);
    }

    // line 31
    public function block_list($context, array $blocks = array())
    {
        // line 32
        if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
        if (isset($context["options"])) { $_options_ = $context["options"]; } else { $_options_ = null; }
        if ((($this->getAttribute($_item_, "hasChildren", array()) &&  !($this->getAttribute($_options_, "depth", array()) === 0)) && $this->getAttribute($_item_, "displayChildren", array()))) {
            // line 33
            echo "    ";
            if (isset($context["listAttributes"])) { $_listAttributes_ = $context["listAttributes"]; } else { $_listAttributes_ = null; }
            $context["listAttributes"] = twig_array_merge($_listAttributes_, array("class" => trim((($this->getAttribute($_listAttributes_, "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($_listAttributes_, "class", array()), "")) : ("")))));
            // line 34
            echo "
    ";
            // line 35
            $context["listClass"] = "";
            // line 36
            echo "    ";
            if (isset($context["options"])) { $_options_ = $context["options"]; } else { $_options_ = null; }
            if (($this->getAttribute($_options_, "style", array(), "any", true, true) && ($this->getAttribute($_options_, "style", array()) == "tabs"))) {
                // line 37
                echo "        ";
                $context["listClass"] = "nav-tabs";
                // line 38
                echo "    ";
            } elseif (($this->getAttribute($_options_, "style", array(), "any", true, true) && ($this->getAttribute($_options_, "style", array()) == "stacked-tabs"))) {
                // line 39
                echo "        ";
                $context["listClass"] = "nav-tabs nav-stacked";
                // line 40
                echo "    ";
            } elseif (($this->getAttribute($_options_, "style", array(), "any", true, true) && ($this->getAttribute($_options_, "style", array()) == "justified-tabs"))) {
                // line 41
                echo "        ";
                $context["listClass"] = "nav-tabs nav-justified";
                // line 42
                echo "    ";
            } elseif (($this->getAttribute($_options_, "style", array(), "any", true, true) && ($this->getAttribute($_options_, "style", array()) == "pills"))) {
                // line 43
                echo "        ";
                $context["listClass"] = "nav-pills";
                // line 44
                echo "    ";
            } elseif (($this->getAttribute($_options_, "style", array(), "any", true, true) && ($this->getAttribute($_options_, "style", array()) == "justified-pills"))) {
                // line 45
                echo "        ";
                $context["listClass"] = "nav-pills nav-justified";
                // line 46
                echo "    ";
            } elseif (($this->getAttribute($_options_, "style", array(), "any", true, true) && ($this->getAttribute($_options_, "style", array()) == "stacked-pills"))) {
                // line 47
                echo "        ";
                $context["listClass"] = "nav-pills nav-stacked";
                // line 48
                echo "    ";
            } elseif (($this->getAttribute($_options_, "style", array(), "any", true, true) && ($this->getAttribute($_options_, "style", array()) == "list"))) {
                // line 49
                echo "        ";
                $context["listClass"] = "nav-list";
                // line 50
                echo "    ";
            } elseif (($this->getAttribute($_options_, "style", array(), "any", true, true) && ($this->getAttribute($_options_, "style", array()) == "navbar"))) {
                // line 51
                echo "        ";
                $context["listClass"] = "navbar-nav";
                // line 52
                echo "    ";
            } elseif (($this->getAttribute($_options_, "style", array(), "any", true, true) && ($this->getAttribute($_options_, "style", array()) == "navbar-right"))) {
                // line 53
                echo "        ";
                $context["listClass"] = "navbar-nav navbar-right";
                // line 54
                echo "    ";
            }
            // line 55
            echo "
    ";
            // line 56
            if (isset($context["options"])) { $_options_ = $context["options"]; } else { $_options_ = null; }
            if (($this->getAttribute($_options_, "pull", array(), "any", true, true) && ($this->getAttribute($_options_, "pull", array()) == "right"))) {
                // line 57
                echo "        ";
                if (isset($context["listClass"])) { $_listClass_ = $context["listClass"]; } else { $_listClass_ = null; }
                $context["listClass"] = trim((((array_key_exists("listClass", $context)) ? (_twig_default_filter($_listClass_, "")) : ("")) . " pull-right"));
                // line 58
                echo "    ";
            } elseif (($this->getAttribute($_options_, "pull", array(), "any", true, true) && ($this->getAttribute($_options_, "pull", array()) == "left"))) {
                // line 59
                echo "        ";
                if (isset($context["listClass"])) { $_listClass_ = $context["listClass"]; } else { $_listClass_ = null; }
                $context["listClass"] = trim((((array_key_exists("listClass", $context)) ? (_twig_default_filter($_listClass_, "")) : ("")) . "pull-left"));
                // line 60
                echo "    ";
            }
            // line 61
            echo "    
    ";
            // line 62
            if (isset($context["options"])) { $_options_ = $context["options"]; } else { $_options_ = null; }
            if (isset($context["listClass"])) { $_listClass_ = $context["listClass"]; } else { $_listClass_ = null; }
            $context["listClass"] = ((($this->getAttribute($_options_, "currentDepth", array()) == 0)) ? (($_listClass_ . " nav")) : ($_listClass_));
            // line 63
            echo "
    ";
            // line 64
            if (isset($context["listAttributes"])) { $_listAttributes_ = $context["listAttributes"]; } else { $_listAttributes_ = null; }
            if (isset($context["listClass"])) { $_listClass_ = $context["listClass"]; } else { $_listClass_ = null; }
            $context["listAttributes"] = twig_array_merge($_listAttributes_, array("class" => trim((((($this->getAttribute($_listAttributes_, "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($_listAttributes_, "class", array()), "")) : ("")) . " ") . $_listClass_))));
            // line 65
            echo "
    <ul";
            // line 66
            if (isset($context["listAttributes"])) { $_listAttributes_ = $context["listAttributes"]; } else { $_listAttributes_ = null; }
            echo $this->getAttribute($this, "attributes", array(0 => $_listAttributes_), "method");
            echo ">
        ";
            // line 67
            $this->displayBlock("children", $context, $blocks);
            echo "
    </ul>
";
        }
    }

    // line 72
    public function block_dropdownList($context, array $blocks = array())
    {
        // line 73
        ob_start();
        // line 74
        echo "    ";
        if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
        if (isset($context["options"])) { $_options_ = $context["options"]; } else { $_options_ = null; }
        if ((($this->getAttribute($_item_, "hasChildren", array()) &&  !($this->getAttribute($_options_, "depth", array()) === 0)) && (( !$this->getAttribute($this->getAttribute($_item_, "extras", array(), "any", false, true), "dropdown", array(), "any", true, true) && ($this->getAttribute($_item_, "displayChildren", array()) === true)) || (($this->getAttribute($this->getAttribute($_item_, "extras", array(), "any", false, true), "dropdown", array(), "any", true, true) && ($this->getAttribute($this->getAttribute($_item_, "extras", array()), "dropdown", array()) === true)) && ($this->getAttribute($_item_, "displayChildren", array()) === true))))) {
            // line 75
            echo "        ";
            if (isset($context["listAttributes"])) { $_listAttributes_ = $context["listAttributes"]; } else { $_listAttributes_ = null; }
            $context["listAttributes"] = twig_array_merge($_listAttributes_, array("class" => trim(((($this->getAttribute($_listAttributes_, "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($_listAttributes_, "class", array()), "")) : ("")) . " dropdown-menu"))));
            // line 76
            echo "        <ul";
            if (isset($context["listAttributes"])) { $_listAttributes_ = $context["listAttributes"]; } else { $_listAttributes_ = null; }
            echo $this->getAttribute($this, "attributes", array(0 => $_listAttributes_), "method");
            echo ">
        ";
            // line 77
            $this->displayBlock("children", $context, $blocks);
            echo "
        </ul>
    ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 83
    public function block_listList($context, array $blocks = array())
    {
        // line 84
        ob_start();
        // line 85
        echo "    ";
        if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
        if (isset($context["options"])) { $_options_ = $context["options"]; } else { $_options_ = null; }
        if ((($this->getAttribute($_item_, "hasChildren", array()) &&  !($this->getAttribute($_options_, "depth", array()) === 0)) && $this->getAttribute($_item_, "displayChildren", array()))) {
            // line 86
            echo "        ";
            $this->displayBlock("children", $context, $blocks);
            echo "
    ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 91
    public function block_children($context, array $blocks = array())
    {
        // line 93
        if (isset($context["options"])) { $_options_ = $context["options"]; } else { $_options_ = null; }
        $context["currentOptions"] = $_options_;
        // line 94
        if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
        $context["currentItem"] = $_item_;
        // line 96
        if (isset($context["options"])) { $_options_ = $context["options"]; } else { $_options_ = null; }
        if ( !(null === $this->getAttribute($_options_, "depth", array()))) {
            // line 97
            if (isset($context["currentOptions"])) { $_currentOptions_ = $context["currentOptions"]; } else { $_currentOptions_ = null; }
            $context["options"] = twig_array_merge($_currentOptions_, array("depth" => ($this->getAttribute($_currentOptions_, "depth", array()) - 1)));
        }
        // line 99
        if (isset($context["options"])) { $_options_ = $context["options"]; } else { $_options_ = null; }
        $context["options"] = twig_array_merge($_options_, array("currentDepth" => ($this->getAttribute($_options_, "currentDepth", array()) + 1)));
        // line 100
        if (isset($context["currentItem"])) { $_currentItem_ = $context["currentItem"]; } else { $_currentItem_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($_currentItem_, "children", array()));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 101
            echo "    ";
            $this->displayBlock("item", $context, $blocks);
            echo "
";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 104
        if (isset($context["currentItem"])) { $_currentItem_ = $context["currentItem"]; } else { $_currentItem_ = null; }
        $context["item"] = $_currentItem_;
        // line 105
        if (isset($context["currentOptions"])) { $_currentOptions_ = $context["currentOptions"]; } else { $_currentOptions_ = null; }
        $context["options"] = $_currentOptions_;
    }

    // line 108
    public function block_item($context, array $blocks = array())
    {
        // line 109
        if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
        if ($this->getAttribute($_item_, "displayed", array())) {
            // line 111
            if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
            $context["classes"] = (( !twig_test_empty($this->getAttribute($_item_, "attribute", array(0 => "class"), "method"))) ? (array(0 => $this->getAttribute($_item_, "attribute", array(0 => "class"), "method"))) : (array()));
            // line 112
            if (isset($context["matcher"])) { $_matcher_ = $context["matcher"]; } else { $_matcher_ = null; }
            if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
            if (isset($context["options"])) { $_options_ = $context["options"]; } else { $_options_ = null; }
            if (((array_key_exists("matcher", $context) && $this->getAttribute($_matcher_, "isCurrent", array(0 => $_item_), "method")) || ($this->getAttribute($_item_, "current", array(), "any", true, true) && $this->getAttribute($_item_, "current", array())))) {
                // line 113
                if (isset($context["classes"])) { $_classes_ = $context["classes"]; } else { $_classes_ = null; }
                if (isset($context["options"])) { $_options_ = $context["options"]; } else { $_options_ = null; }
                $context["classes"] = twig_array_merge($_classes_, array(0 => $this->getAttribute($_options_, "currentClass", array())));
            } elseif (((array_key_exists("matcher", $context) && $this->getAttribute($_matcher_, "isAncestor", array(0 => $_item_, 1 => $this->getAttribute($_options_, "depth", array())), "method")) || ($this->getAttribute($_item_, "currentAncestor", array(), "any", true, true) && $this->getAttribute($_item_, "currentAncestor", array())))) {
                // line 115
                if (isset($context["classes"])) { $_classes_ = $context["classes"]; } else { $_classes_ = null; }
                if (isset($context["options"])) { $_options_ = $context["options"]; } else { $_options_ = null; }
                $context["classes"] = twig_array_merge($_classes_, array(0 => $this->getAttribute($_options_, "ancestorClass", array())));
            }
            // line 117
            if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
            if ($this->getAttribute($_item_, "actsLikeFirst", array())) {
                // line 118
                if (isset($context["classes"])) { $_classes_ = $context["classes"]; } else { $_classes_ = null; }
                if (isset($context["options"])) { $_options_ = $context["options"]; } else { $_options_ = null; }
                $context["classes"] = twig_array_merge($_classes_, array(0 => $this->getAttribute($_options_, "firstClass", array())));
            }
            // line 120
            if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
            if ($this->getAttribute($_item_, "actsLikeLast", array())) {
                // line 121
                if (isset($context["classes"])) { $_classes_ = $context["classes"]; } else { $_classes_ = null; }
                if (isset($context["options"])) { $_options_ = $context["options"]; } else { $_options_ = null; }
                $context["classes"] = twig_array_merge($_classes_, array(0 => $this->getAttribute($_options_, "lastClass", array())));
            }
            // line 123
            if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
            if (isset($context["options"])) { $_options_ = $context["options"]; } else { $_options_ = null; }
            if (($this->getAttribute($_item_, "hasChildren", array()) && (($this->getAttribute($_options_, "style", array(), "any", true, true) && ($this->getAttribute($_options_, "style", array()) == "list")) ||  !($this->getAttribute($_options_, "currentDepth", array()) === 1)))) {
                // line 124
                if (isset($context["classes"])) { $_classes_ = $context["classes"]; } else { $_classes_ = null; }
                $context["classes"] = twig_array_merge($_classes_, array(0 => "nav-header"));
            } elseif (((($this->getAttribute($_item_, "hasChildren", array()) && $this->getAttribute($_options_, "style", array(), "any", true, true)) && twig_in_filter($this->getAttribute($_options_, "style", array()), array(0 => "tabs", 1 => "justified-tabs", 2 => "pills", 3 => "justified-pills", 4 => "navbar", 5 => "navbar-right", 6 => "navbar_justified"))) && (( !$this->getAttribute($this->getAttribute($_item_, "extras", array(), "any", false, true), "dropdown", array(), "any", true, true) && ($this->getAttribute($_item_, "displayChildren", array()) === true)) || (($this->getAttribute($this->getAttribute($_item_, "extras", array(), "any", false, true), "dropdown", array(), "any", true, true) && ($this->getAttribute($this->getAttribute($_item_, "extras", array()), "dropdown", array()) === true)) && ($this->getAttribute($_item_, "displayChildren", array()) === true))))) {
                // line 126
                if (isset($context["classes"])) { $_classes_ = $context["classes"]; } else { $_classes_ = null; }
                $context["classes"] = twig_array_merge($_classes_, array(0 => "dropdown"));
            }
            // line 129
            if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
            $context["attributes"] = $this->getAttribute($_item_, "attributes", array());
            // line 131
            if (isset($context["options"])) { $_options_ = $context["options"]; } else { $_options_ = null; }
            if (isset($context["attributes"])) { $_attributes_ = $context["attributes"]; } else { $_attributes_ = null; }
            if ((((($this->getAttribute($_options_, "style", array(), "any", true, true) && ($this->getAttribute($_options_, "style", array()) == "navbar")) && $this->getAttribute($_attributes_, "divider", array(), "any", true, true)) &&  !twig_test_empty($this->getAttribute($_attributes_, "divider", array()))) && ($this->getAttribute($_options_, "currentDepth", array()) === 1))) {
                // line 132
                if (isset($context["classes"])) { $_classes_ = $context["classes"]; } else { $_classes_ = null; }
                $context["classes"] = twig_array_merge($_classes_, array(0 => "divider-vertical"));
            } elseif (($this->getAttribute($_attributes_, "divider", array(), "any", true, true) &&  !twig_test_empty($this->getAttribute($_attributes_, "divider", array())))) {
                // line 134
                if (isset($context["classes"])) { $_classes_ = $context["classes"]; } else { $_classes_ = null; }
                $context["classes"] = twig_array_merge($_classes_, array(0 => "divider"));
            }
            // line 137
            if (isset($context["classes"])) { $_classes_ = $context["classes"]; } else { $_classes_ = null; }
            if ( !twig_test_empty($_classes_)) {
                // line 138
                if (isset($context["attributes"])) { $_attributes_ = $context["attributes"]; } else { $_attributes_ = null; }
                if (isset($context["classes"])) { $_classes_ = $context["classes"]; } else { $_classes_ = null; }
                $context["attributes"] = twig_array_merge($_attributes_, array("class" => twig_join_filter($_classes_, " ")));
            }
            // line 141
            echo "    <li";
            if (isset($context["attributes"])) { $_attributes_ = $context["attributes"]; } else { $_attributes_ = null; }
            echo $this->getAttribute($this, "attributes", array(0 => $_attributes_), "method");
            echo ">";
            // line 142
            if (isset($context["attributes"])) { $_attributes_ = $context["attributes"]; } else { $_attributes_ = null; }
            if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
            if (isset($context["options"])) { $_options_ = $context["options"]; } else { $_options_ = null; }
            if (isset($context["matcher"])) { $_matcher_ = $context["matcher"]; } else { $_matcher_ = null; }
            if (($this->getAttribute($_attributes_, "divider", array(), "any", true, true) &&  !twig_test_empty($this->getAttribute($_attributes_, "divider", array())))) {
            } elseif ((((($this->getAttribute($_item_, "hasChildren", array()) && $this->getAttribute($_options_, "style", array(), "any", true, true)) && twig_in_filter($this->getAttribute($_options_, "style", array()), array(0 => "tabs", 1 => "justified-tabs", 2 => "pills", 3 => "justified-pills", 4 => "navbar", 5 => "navbar-right", 6 => "navbar_justified"))) && ($this->getAttribute($_options_, "currentDepth", array()) === 1)) && (( !$this->getAttribute($this->getAttribute($_item_, "extras", array(), "any", false, true), "dropdown", array(), "any", true, true) && ($this->getAttribute($_item_, "displayChildren", array()) === true)) || (($this->getAttribute($this->getAttribute($_item_, "extras", array(), "any", false, true), "dropdown", array(), "any", true, true) && ($this->getAttribute($this->getAttribute($_item_, "extras", array()), "dropdown", array()) === true)) && ($this->getAttribute($_item_, "displayChildren", array()) === true))))) {
                // line 144
                echo "            ";
                $this->displayBlock("dropdownElement", $context, $blocks);
            } elseif ((((($this->getAttribute($_item_, "hasChildren", array()) && $this->getAttribute($_options_, "style", array(), "any", true, true)) && twig_in_filter($this->getAttribute($_options_, "style", array()), array(0 => "tabs", 1 => "justified-tabs", 2 => "pills", 3 => "justified-pills", 4 => "navbar", 5 => "navbar-right", 6 => "navbar_justified"))) && ($this->getAttribute($_options_, "currentDepth", array()) === 1)) && (($this->getAttribute($this->getAttribute($_item_, "extras", array(), "any", false, true), "dropdown", array(), "any", true, true) && ($this->getAttribute($this->getAttribute($_item_, "extras", array()), "dropdown", array()) === false)) || $this->getAttribute($_item_, "displayChildren", array(0 => false), "method")))) {
                // line 146
                echo "            ";
                $this->displayBlock("linkElement", $context, $blocks);
            } elseif (( !twig_test_empty($this->getAttribute($_item_, "uri", array())) && ((array_key_exists("matcher", $context) &&  !$this->getAttribute($_matcher_, "isCurrent", array(0 => $_item_), "method")) || $this->getAttribute($_options_, "currentAsLink", array())))) {
                // line 148
                echo "            ";
                $this->displayBlock("linkElement", $context, $blocks);
            } elseif (( !twig_test_empty($this->getAttribute($_item_, "uri", array())) && (($this->getAttribute($_item_, "current", array(), "any", true, true) &&  !$this->getAttribute($_item_, "current", array())) || $this->getAttribute($_options_, "currentAsLink", array())))) {
                // line 150
                echo "            ";
                $this->displayBlock("linkElement", $context, $blocks);
            } else {
                // line 152
                echo "            ";
                $this->displayBlock("spanElement", $context, $blocks);
            }
            // line 155
            if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
            $context["childrenClasses"] = (( !twig_test_empty($this->getAttribute($_item_, "childrenAttribute", array(0 => "class"), "method"))) ? (array(0 => $this->getAttribute($_item_, "childrenAttribute", array(0 => "class"), "method"))) : (array()));
            // line 156
            if (isset($context["childrenClasses"])) { $_childrenClasses_ = $context["childrenClasses"]; } else { $_childrenClasses_ = null; }
            if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
            $context["childrenClasses"] = twig_array_merge($_childrenClasses_, array(0 => ("menu_level_" . $this->getAttribute($_item_, "level", array()))));
            // line 157
            if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
            if (isset($context["childrenClasses"])) { $_childrenClasses_ = $context["childrenClasses"]; } else { $_childrenClasses_ = null; }
            $context["listAttributes"] = twig_array_merge($this->getAttribute($_item_, "childrenAttributes", array()), array("class" => twig_join_filter($_childrenClasses_, " ")));
            // line 158
            if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
            if (isset($context["options"])) { $_options_ = $context["options"]; } else { $_options_ = null; }
            if ((($this->getAttribute($_item_, "hasChildren", array()) && $this->getAttribute($_options_, "style", array(), "any", true, true)) && (($this->getAttribute($_options_, "style", array()) == "list") ||  !($this->getAttribute($_options_, "currentDepth", array()) === 1)))) {
                // line 159
                echo "            ";
                $this->displayBlock("listList", $context, $blocks);
            } elseif ((($this->getAttribute($_item_, "hasChildren", array()) && $this->getAttribute($_options_, "style", array(), "any", true, true)) && twig_in_filter($this->getAttribute($_options_, "style", array()), array(0 => "tabs", 1 => "justified-tabs", 2 => "pills", 3 => "justified-pills", 4 => "navbar", 5 => "navbar-right", 6 => "navbar_justified")))) {
                // line 161
                echo "            ";
                $this->displayBlock("dropdownList", $context, $blocks);
            } else {
                // line 163
                echo "            ";
                $this->displayBlock("list", $context, $blocks);
            }
            // line 165
            echo "    </li>
";
        }
    }

    // line 169
    public function block_linkElement($context, array $blocks = array())
    {
        echo "<a href=\"";
        if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_item_, "uri", array()), "html", null, true);
        echo "\"";
        if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
        echo $this->getAttribute($this, "attributes", array(0 => $this->getAttribute($_item_, "linkAttributes", array())), "method");
        echo ">";
        $this->displayBlock("label", $context, $blocks);
        echo "</a>";
    }

    // line 171
    public function block_dropdownElement($context, array $blocks = array())
    {
        // line 172
        ob_start();
        // line 173
        echo "    ";
        if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
        $context["labelAttributes"] = $this->getAttribute($_item_, "labelAttributes", array());
        // line 174
        echo "    ";
        if (isset($context["labelAttributes"])) { $_labelAttributes_ = $context["labelAttributes"]; } else { $_labelAttributes_ = null; }
        $context["labelAttributes"] = twig_array_merge($_labelAttributes_, array("class" => trim(((($this->getAttribute($_labelAttributes_, "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($_labelAttributes_, "class", array()), "")) : ("")) . " dropdown-toggle"))));
        // line 175
        echo "    ";
        if (isset($context["labelAttributes"])) { $_labelAttributes_ = $context["labelAttributes"]; } else { $_labelAttributes_ = null; }
        $context["labelAttributes"] = twig_array_merge($_labelAttributes_, array("data-toggle" => "dropdown"));
        // line 176
        echo "    <a href=\"#\"";
        if (isset($context["labelAttributes"])) { $_labelAttributes_ = $context["labelAttributes"]; } else { $_labelAttributes_ = null; }
        echo $this->getAttribute($this, "attributes", array(0 => $_labelAttributes_), "method");
        echo ">";
        $this->displayBlock("label", $context, $blocks);
        echo " <b class=\"caret\"></b></a>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 180
    public function block_dividerElement($context, array $blocks = array())
    {
        // line 181
        ob_start();
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 185
    public function block_spanElement($context, array $blocks = array())
    {
        echo "<span";
        if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
        echo $this->getAttribute($this, "attributes", array(0 => $this->getAttribute($_item_, "labelAttributes", array())), "method");
        echo ">";
        $this->displayBlock("label", $context, $blocks);
        echo "</span>";
    }

    // line 187
    public function block_label($context, array $blocks = array())
    {
        if (isset($context["options"])) { $_options_ = $context["options"]; } else { $_options_ = null; }
        if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
        if (($this->getAttribute($_options_, "allow_safe_labels", array()) && $this->getAttribute($_item_, "getExtra", array(0 => "safe_label", 1 => false), "method"))) {
            if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
            echo $this->env->getExtension('braincrafted_bootstrap_icon')->parseIconsFilter($this->getAttribute($_item_, "label", array()));
        } else {
            if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
            echo $this->env->getExtension('braincrafted_bootstrap_icon')->parseIconsFilter(twig_escape_filter($this->env, $this->getAttribute($_item_, "label", array()), "html", null, true));
        }
    }

    // line 3
    public function getattributes($__attributes__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "attributes" => $__attributes__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 4
            if (isset($context["attributes"])) { $_attributes_ = $context["attributes"]; } else { $_attributes_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($_attributes_);
            foreach ($context['_seq'] as $context["name"] => $context["value"]) {
                // line 5
                if (isset($context["value"])) { $_value_ = $context["value"]; } else { $_value_ = null; }
                if (( !(null === $_value_) &&  !($_value_ === false))) {
                    // line 6
                    if (isset($context["name"])) { $_name_ = $context["name"]; } else { $_name_ = null; }
                    if (isset($context["value"])) { $_value_ = $context["value"]; } else { $_value_ = null; }
                    echo sprintf(" %s=\"%s\"", $_name_, ((($_value_ === true)) ? (twig_escape_filter($this->env, $_name_)) : (twig_escape_filter($this->env, $_value_))));
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['name'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "BraincraftedBootstrapBundle:Menu:bootstrap.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  552 => 6,  549 => 5,  544 => 4,  533 => 3,  519 => 187,  508 => 185,  503 => 181,  500 => 180,  489 => 176,  485 => 175,  481 => 174,  477 => 173,  475 => 172,  472 => 171,  458 => 169,  452 => 165,  448 => 163,  444 => 161,  440 => 159,  436 => 158,  432 => 157,  428 => 156,  425 => 155,  421 => 152,  417 => 150,  413 => 148,  409 => 146,  405 => 144,  398 => 142,  393 => 141,  388 => 138,  385 => 137,  381 => 134,  377 => 132,  373 => 131,  370 => 129,  366 => 126,  362 => 124,  358 => 123,  353 => 121,  350 => 120,  345 => 118,  342 => 117,  337 => 115,  332 => 113,  327 => 112,  324 => 111,  321 => 109,  318 => 108,  313 => 105,  310 => 104,  293 => 101,  275 => 100,  272 => 99,  268 => 97,  265 => 96,  262 => 94,  259 => 93,  256 => 91,  247 => 86,  242 => 85,  240 => 84,  237 => 83,  228 => 77,  222 => 76,  218 => 75,  213 => 74,  211 => 73,  208 => 72,  200 => 67,  195 => 66,  192 => 65,  188 => 64,  185 => 63,  181 => 62,  178 => 61,  175 => 60,  171 => 59,  168 => 58,  164 => 57,  161 => 56,  158 => 55,  155 => 54,  152 => 53,  149 => 52,  146 => 51,  143 => 50,  140 => 49,  137 => 48,  134 => 47,  131 => 46,  128 => 45,  125 => 44,  122 => 43,  119 => 42,  116 => 41,  113 => 40,  110 => 39,  107 => 38,  104 => 37,  100 => 36,  98 => 35,  95 => 34,  91 => 33,  87 => 32,  84 => 31,  80 => 28,  77 => 27,  72 => 25,  68 => 24,  65 => 23,  62 => 22,  59 => 17,  52 => 13,  50 => 12,  47 => 11,  11 => 1,);
    }
}

<?php

/* BraincraftedBootstrapBundle:Form:bootstrap.html.twig */
class __TwigTemplate_d26022f1042a1fb0d23878af94f7bf7d17987eafee7f133261a3f1704e6f0fa7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->env->loadTemplate("form_div_layout.html.twig");
        // line 1
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."form_div_layout.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                'form_widget' => array($this, 'block_form_widget'),
                'form_widget_simple' => array($this, 'block_form_widget_simple'),
                'form_widget_compound' => array($this, 'block_form_widget_compound'),
                'collection_widget' => array($this, 'block_collection_widget'),
                'bootstrap_collection_widget' => array($this, 'block_bootstrap_collection_widget'),
                'textarea_widget' => array($this, 'block_textarea_widget'),
                'file_widget' => array($this, 'block_file_widget'),
                'choice_widget' => array($this, 'block_choice_widget'),
                'choice_widget_expanded' => array($this, 'block_choice_widget_expanded'),
                'choice_widget_collapsed' => array($this, 'block_choice_widget_collapsed'),
                'choice_widget_options' => array($this, 'block_choice_widget_options'),
                'checkbox_row' => array($this, 'block_checkbox_row'),
                'radio_row' => array($this, 'block_radio_row'),
                'checkbox_widget' => array($this, 'block_checkbox_widget'),
                'radio_widget' => array($this, 'block_radio_widget'),
                'datetime_widget' => array($this, 'block_datetime_widget'),
                'date_widget' => array($this, 'block_date_widget'),
                'time_widget' => array($this, 'block_time_widget'),
                'number_widget' => array($this, 'block_number_widget'),
                'integer_widget' => array($this, 'block_integer_widget'),
                'money_widget' => array($this, 'block_money_widget'),
                'url_widget' => array($this, 'block_url_widget'),
                'search_widget' => array($this, 'block_search_widget'),
                'percent_widget' => array($this, 'block_percent_widget'),
                'password_widget' => array($this, 'block_password_widget'),
                'hidden_widget' => array($this, 'block_hidden_widget'),
                'email_widget' => array($this, 'block_email_widget'),
                'button_widget' => array($this, 'block_button_widget'),
                'submit_widget' => array($this, 'block_submit_widget'),
                'reset_widget' => array($this, 'block_reset_widget'),
                'form_actions_widget' => array($this, 'block_form_actions_widget'),
                'bs_static_widget' => array($this, 'block_bs_static_widget'),
                'form_label' => array($this, 'block_form_label'),
                'button_label' => array($this, 'block_button_label'),
                'repeated_row' => array($this, 'block_repeated_row'),
                'form_row' => array($this, 'block_form_row'),
                'form_input_group' => array($this, 'block_form_input_group'),
                'form_help' => array($this, 'block_form_help'),
                'button_row' => array($this, 'block_button_row'),
                'hidden_row' => array($this, 'block_hidden_row'),
                'form_actions_row' => array($this, 'block_form_actions_row'),
                'form' => array($this, 'block_form'),
                'form_start' => array($this, 'block_form_start'),
                'form_end' => array($this, 'block_form_end'),
                'form_enctype' => array($this, 'block_form_enctype'),
                'global_form_errors' => array($this, 'block_global_form_errors'),
                'form_errors' => array($this, 'block_form_errors'),
                'form_rest' => array($this, 'block_form_rest'),
                'form_rows' => array($this, 'block_form_rows'),
                'widget_attributes' => array($this, 'block_widget_attributes'),
                'widget_container_attributes' => array($this, 'block_widget_container_attributes'),
                'button_attributes' => array($this, 'block_button_attributes'),
            )
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        echo "
";
        // line 4
        echo "
";
        // line 5
        $this->displayBlock('form_widget', $context, $blocks);
        // line 14
        echo "
";
        // line 15
        $this->displayBlock('form_widget_simple', $context, $blocks);
        // line 59
        echo "
";
        // line 60
        $this->displayBlock('form_widget_compound', $context, $blocks);
        // line 71
        echo "
";
        // line 72
        $this->displayBlock('collection_widget', $context, $blocks);
        // line 80
        echo "
";
        // line 81
        $this->displayBlock('bootstrap_collection_widget', $context, $blocks);
        // line 121
        echo "
";
        // line 122
        $this->displayBlock('textarea_widget', $context, $blocks);
        // line 146
        echo "
";
        // line 147
        $this->displayBlock('file_widget', $context, $blocks);
        // line 170
        echo "
";
        // line 171
        $this->displayBlock('choice_widget', $context, $blocks);
        // line 180
        echo "
";
        // line 181
        $this->displayBlock('choice_widget_expanded', $context, $blocks);
        // line 194
        echo "
";
        // line 195
        $this->displayBlock('choice_widget_collapsed', $context, $blocks);
        // line 215
        echo "
";
        // line 216
        $this->displayBlock('choice_widget_options', $context, $blocks);
        // line 230
        echo "
";
        // line 231
        $this->displayBlock('checkbox_row', $context, $blocks);
        // line 302
        echo "
";
        // line 303
        $this->displayBlock('radio_row', $context, $blocks);
        // line 369
        echo "
";
        // line 370
        $this->displayBlock('checkbox_widget', $context, $blocks);
        // line 375
        echo "
";
        // line 376
        $this->displayBlock('radio_widget', $context, $blocks);
        // line 381
        echo "
";
        // line 382
        $this->displayBlock('datetime_widget', $context, $blocks);
        // line 397
        echo "
";
        // line 398
        $this->displayBlock('date_widget', $context, $blocks);
        // line 414
        echo "
";
        // line 415
        $this->displayBlock('time_widget', $context, $blocks);
        // line 430
        echo "
";
        // line 431
        $this->displayBlock('number_widget', $context, $blocks);
        // line 438
        echo "
";
        // line 439
        $this->displayBlock('integer_widget', $context, $blocks);
        // line 445
        echo "
";
        // line 446
        $this->displayBlock('money_widget', $context, $blocks);
        // line 457
        echo "
";
        // line 458
        $this->displayBlock('url_widget', $context, $blocks);
        // line 464
        echo "
";
        // line 465
        $this->displayBlock('search_widget', $context, $blocks);
        // line 471
        echo "
";
        // line 472
        $this->displayBlock('percent_widget', $context, $blocks);
        // line 481
        echo "
";
        // line 482
        $this->displayBlock('password_widget', $context, $blocks);
        // line 488
        echo "
";
        // line 489
        $this->displayBlock('hidden_widget', $context, $blocks);
        // line 495
        echo "
";
        // line 496
        $this->displayBlock('email_widget', $context, $blocks);
        // line 502
        echo "
";
        // line 503
        $this->displayBlock('button_widget', $context, $blocks);
        // line 520
        echo "
";
        // line 521
        $this->displayBlock('submit_widget', $context, $blocks);
        // line 527
        echo "
";
        // line 528
        $this->displayBlock('reset_widget', $context, $blocks);
        // line 534
        echo "
";
        // line 535
        $this->displayBlock('form_actions_widget', $context, $blocks);
        // line 540
        echo "
";
        // line 541
        $this->displayBlock('bs_static_widget', $context, $blocks);
        // line 545
        echo "
";
        // line 547
        echo "
";
        // line 548
        $this->displayBlock('form_label', $context, $blocks);
        // line 590
        echo "
";
        // line 591
        $this->displayBlock('button_label', $context, $blocks);
        // line 592
        echo "
";
        // line 594
        echo "
";
        // line 595
        $this->displayBlock('repeated_row', $context, $blocks);
        // line 604
        echo "
";
        // line 605
        $this->displayBlock('form_row', $context, $blocks);
        // line 648
        echo "
";
        // line 649
        $this->displayBlock('form_input_group', $context, $blocks);
        // line 683
        echo "
";
        // line 684
        $this->displayBlock('form_help', $context, $blocks);
        // line 695
        echo "
";
        // line 696
        $this->displayBlock('button_row', $context, $blocks);
        // line 730
        echo "
";
        // line 731
        $this->displayBlock('hidden_row', $context, $blocks);
        // line 734
        echo "
";
        // line 735
        $this->displayBlock('form_actions_row', $context, $blocks);
        // line 738
        echo "
";
        // line 740
        echo "
";
        // line 741
        $this->displayBlock('form', $context, $blocks);
        // line 748
        echo "
";
        // line 749
        $this->displayBlock('form_start', $context, $blocks);
        // line 793
        echo "
";
        // line 794
        $this->displayBlock('form_end', $context, $blocks);
        // line 817
        echo "
";
        // line 818
        $this->displayBlock('form_enctype', $context, $blocks);
        // line 823
        echo "
";
        // line 824
        $this->displayBlock('global_form_errors', $context, $blocks);
        // line 830
        echo "
";
        // line 831
        $this->displayBlock('form_errors', $context, $blocks);
        // line 855
        echo "
";
        // line 856
        $this->displayBlock('form_rest', $context, $blocks);
        // line 865
        echo "
";
        // line 867
        echo "
";
        // line 868
        $this->displayBlock('form_rows', $context, $blocks);
        // line 891
        echo "
";
        // line 892
        $this->displayBlock('widget_attributes', $context, $blocks);
        // line 898
        echo "
";
        // line 899
        $this->displayBlock('widget_container_attributes', $context, $blocks);
        // line 909
        echo "
";
        // line 910
        $this->displayBlock('button_attributes', $context, $blocks);
    }

    // line 5
    public function block_form_widget($context, array $blocks = array())
    {
        // line 6
        echo "    ";
        ob_start();
        // line 7
        echo "        ";
        if (isset($context["compound"])) { $_compound_ = $context["compound"]; } else { $_compound_ = null; }
        if ($_compound_) {
            // line 8
            echo "            ";
            $this->displayBlock("form_widget_compound", $context, $blocks);
            echo "
        ";
        } else {
            // line 10
            echo "            ";
            $this->displayBlock("form_widget_simple", $context, $blocks);
            echo "
        ";
        }
        // line 12
        echo "    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 15
    public function block_form_widget_simple($context, array $blocks = array())
    {
        // line 16
        echo "    ";
        ob_start();
        // line 17
        echo "        ";
        if (isset($context["style"])) { $_style_ = $context["style"]; } else { $_style_ = null; }
        $context["style"] = ((array_key_exists("style", $context)) ? (_twig_default_filter($_style_, $this->env->getExtension('braincrafted_bootstrap_form')->getStyle())) : ($this->env->getExtension('braincrafted_bootstrap_form')->getStyle()));
        // line 18
        echo "        ";
        if (isset($context["col_size"])) { $_col_size_ = $context["col_size"]; } else { $_col_size_ = null; }
        $context["col_size"] = ((array_key_exists("col_size", $context)) ? (_twig_default_filter($_col_size_, $this->env->getExtension('braincrafted_bootstrap_form')->getColSize())) : ($this->env->getExtension('braincrafted_bootstrap_form')->getColSize()));
        // line 19
        echo "
        ";
        // line 20
        if (( !array_key_exists("simple_col", $context) && $this->env->getExtension('braincrafted_bootstrap_form')->getSimpleCol())) {
            // line 21
            echo "            ";
            $context["simple_col"] = $this->env->getExtension('braincrafted_bootstrap_form')->getSimpleCol();
            // line 22
            echo "        ";
        }
        // line 23
        echo "        ";
        if (isset($context["attr"])) { $_attr_ = $context["attr"]; } else { $_attr_ = null; }
        if (($this->getAttribute($_attr_, "simple_col", array(), "any", true, true) &&  !twig_test_empty($this->getAttribute($_attr_, "simple_col", array())))) {
            // line 24
            echo "            ";
            if (isset($context["attr"])) { $_attr_ = $context["attr"]; } else { $_attr_ = null; }
            $context["simple_col"] = $this->getAttribute($_attr_, "simple_col", array());
            // line 25
            echo "        ";
        }
        // line 26
        echo "        ";
        if (isset($context["attr"])) { $_attr_ = $context["attr"]; } else { $_attr_ = null; }
        if (($this->getAttribute($_attr_, "col_size", array(), "any", true, true) &&  !twig_test_empty($this->getAttribute($_attr_, "col_size", array())))) {
            // line 27
            echo "            ";
            if (isset($context["attr"])) { $_attr_ = $context["attr"]; } else { $_attr_ = null; }
            $context["col_size"] = $this->getAttribute($_attr_, "col_size", array());
            // line 28
            echo "        ";
        }
        // line 29
        echo "        ";
        if (isset($context["attr"])) { $_attr_ = $context["attr"]; } else { $_attr_ = null; }
        if (($this->getAttribute($_attr_, "style", array(), "any", true, true) &&  !twig_test_empty($this->getAttribute($_attr_, "style", array())))) {
            // line 30
            echo "            ";
            if (isset($context["attr"])) { $_attr_ = $context["attr"]; } else { $_attr_ = null; }
            $context["style"] = $this->getAttribute($_attr_, "style", array());
            // line 31
            echo "        ";
        }
        // line 32
        echo "
        ";
        // line 33
        if (isset($context["simple_col"])) { $_simple_col_ = $context["simple_col"]; } else { $_simple_col_ = null; }
        if ((array_key_exists("simple_col", $context) && $_simple_col_)) {
            // line 34
            echo "            <div class=\"col-";
            if (isset($context["col_size"])) { $_col_size_ = $context["col_size"]; } else { $_col_size_ = null; }
            echo twig_escape_filter($this->env, $_col_size_, "html", null, true);
            echo "-";
            if (isset($context["simple_col"])) { $_simple_col_ = $context["simple_col"]; } else { $_simple_col_ = null; }
            echo twig_escape_filter($this->env, $_simple_col_, "html", null, true);
            echo "\">
        ";
        }
        // line 36
        echo "
        ";
        // line 37
        if (isset($context["type"])) { $_type_ = $context["type"]; } else { $_type_ = null; }
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter($_type_, "text")) : ("text"));
        // line 38
        echo "
        ";
        // line 39
        if (isset($context["style"])) { $_style_ = $context["style"]; } else { $_style_ = null; }
        if (isset($context["attr"])) { $_attr_ = $context["attr"]; } else { $_attr_ = null; }
        if (isset($context["label"])) { $_label_ = $context["label"]; } else { $_label_ = null; }
        if (((($_style_ == "inline") && ( !$this->getAttribute($_attr_, "placeholder", array(), "any", true, true) || twig_test_empty($this->getAttribute($_attr_, "placeholder", array())))) && ($_label_ != false))) {
            // line 40
            echo "            ";
            if (isset($context["label"])) { $_label_ = $context["label"]; } else { $_label_ = null; }
            if (twig_test_empty($_label_)) {
                // line 41
                echo "                ";
                if (isset($context["attr"])) { $_attr_ = $context["attr"]; } else { $_attr_ = null; }
                if (isset($context["name"])) { $_name_ = $context["name"]; } else { $_name_ = null; }
                $context["attr"] = twig_array_merge($_attr_, array("placeholder" => $this->env->getExtension('form')->humanize($_name_)));
                // line 42
                echo "            ";
            } else {
                // line 43
                echo "                ";
                if (isset($context["attr"])) { $_attr_ = $context["attr"]; } else { $_attr_ = null; }
                if (isset($context["label"])) { $_label_ = $context["label"]; } else { $_label_ = null; }
                $context["attr"] = twig_array_merge($_attr_, array("placeholder" => $_label_));
                // line 44
                echo "            ";
            }
            // line 45
            echo "        ";
        }
        // line 46
        echo "
        ";
        // line 47
        if (isset($context["static_control"])) { $_static_control_ = $context["static_control"]; } else { $_static_control_ = null; }
        if ((array_key_exists("static_control", $context) && ($_static_control_ == true))) {
            // line 48
            echo "            ";
            if (isset($context["attr"])) { $_attr_ = $context["attr"]; } else { $_attr_ = null; }
            $context["attr"] = twig_array_merge($_attr_, array("class" => trim(((($this->getAttribute($_attr_, "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($_attr_, "class", array()), "")) : ("")) . " form-control-static"))));
            // line 49
            echo "            <p id=\"";
            if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
            echo twig_escape_filter($this->env, $_id_, "html", null, true);
            echo "\"";
            if (isset($context["attr"])) { $_attr_ = $context["attr"]; } else { $_attr_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($_attr_);
            foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
                echo " ";
                if (isset($context["attrname"])) { $_attrname_ = $context["attrname"]; } else { $_attrname_ = null; }
                echo twig_escape_filter($this->env, $_attrname_, "html", null, true);
                echo "=\"";
                if (isset($context["attrvalue"])) { $_attrvalue_ = $context["attrvalue"]; } else { $_attrvalue_ = null; }
                echo twig_escape_filter($this->env, $_attrvalue_, "html", null, true);
                echo "\"";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo ">";
            if (isset($context["value"])) { $_value_ = $context["value"]; } else { $_value_ = null; }
            echo twig_escape_filter($this->env, $_value_, "html", null, true);
            echo "</p>";
        } else {
            // line 51
            if (isset($context["attr"])) { $_attr_ = $context["attr"]; } else { $_attr_ = null; }
            $context["attr"] = twig_array_merge($_attr_, array("class" => trim(((($this->getAttribute($_attr_, "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($_attr_, "class", array()), "")) : ("")) . " form-control"))));
            // line 52
            echo "            <input type=\"";
            if (isset($context["type"])) { $_type_ = $context["type"]; } else { $_type_ = null; }
            echo twig_escape_filter($this->env, $_type_, "html", null, true);
            echo "\" ";
            $this->displayBlock("widget_attributes", $context, $blocks);
            echo " ";
            if (isset($context["value"])) { $_value_ = $context["value"]; } else { $_value_ = null; }
            if ( !twig_test_empty($_value_)) {
                echo "value=\"";
                if (isset($context["value"])) { $_value_ = $context["value"]; } else { $_value_ = null; }
                echo twig_escape_filter($this->env, $_value_, "html", null, true);
                echo "\" ";
            }
            echo ">";
        }
        // line 54
        echo "        ";
        if (array_key_exists("simple_col", $context)) {
            // line 55
            echo "            </div>
        ";
        }
        // line 57
        echo "    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 60
    public function block_form_widget_compound($context, array $blocks = array())
    {
        // line 61
        echo "    ";
        ob_start();
        // line 62
        echo "        <div ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">
            ";
        // line 63
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        if (twig_test_empty($this->getAttribute($_form_, "parent", array()))) {
            // line 64
            echo "                ";
            $this->displayBlock("global_form_errors", $context, $blocks);
            echo "
            ";
        }
        // line 66
        echo "            ";
        $this->displayBlock("form_rows", $context, $blocks);
        echo "
            ";
        // line 67
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($_form_, 'rest');
        echo "
        </div>
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 72
    public function block_collection_widget($context, array $blocks = array())
    {
        // line 73
        echo "    ";
        ob_start();
        // line 74
        echo "        ";
        if (array_key_exists("prototype", $context)) {
            // line 75
            echo "            ";
            if (isset($context["attr"])) { $_attr_ = $context["attr"]; } else { $_attr_ = null; }
            if (isset($context["prototype"])) { $_prototype_ = $context["prototype"]; } else { $_prototype_ = null; }
            $context["attr"] = twig_array_merge($_attr_, array("data-prototype" => $this->env->getExtension('form')->renderer->searchAndRenderBlock($_prototype_, 'row')));
            // line 76
            echo "        ";
        }
        // line 77
        echo "        ";
        $this->displayBlock("form_widget", $context, $blocks);
        echo "
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 81
    public function block_bootstrap_collection_widget($context, array $blocks = array())
    {
        // line 82
        echo "    ";
        ob_start();
        // line 83
        echo "        ";
        if (array_key_exists("prototype", $context)) {
            // line 84
            echo "            ";
            $context["prototype_vars"] = array();
            // line 85
            echo "            ";
            if (array_key_exists("style", $context)) {
                // line 86
                echo "                ";
                if (isset($context["prototype_vars"])) { $_prototype_vars_ = $context["prototype_vars"]; } else { $_prototype_vars_ = null; }
                if (isset($context["style"])) { $_style_ = $context["style"]; } else { $_style_ = null; }
                $context["prototype_vars"] = twig_array_merge($_prototype_vars_, array("style" => $_style_));
                // line 87
                echo "            ";
            }
            // line 88
            echo "            ";
            if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
            if (isset($context["prototype"])) { $_prototype_ = $context["prototype"]; } else { $_prototype_ = null; }
            if (isset($context["prototype_vars"])) { $_prototype_vars_ = $context["prototype_vars"]; } else { $_prototype_vars_ = null; }
            $context["prototype_html"] = (((("<div class=\"col-xs-" . $this->getAttribute($this->getAttribute($_form_, "vars", array()), "sub_widget_col", array())) . "\">") . $this->env->getExtension('form')->renderer->searchAndRenderBlock($_prototype_, 'widget', $_prototype_vars_)) . "</div>");
            // line 89
            echo "            ";
            if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
            if ($this->getAttribute($this->getAttribute($_form_, "vars", array()), "allow_delete", array())) {
                // line 90
                echo "                ";
                if (isset($context["prototype_html"])) { $_prototype_html_ = $context["prototype_html"]; } else { $_prototype_html_ = null; }
                if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
                if (isset($context["translation_domain"])) { $_translation_domain_ = $context["translation_domain"]; } else { $_translation_domain_ = null; }
                $context["prototype_html"] = ((((($_prototype_html_ . "<div class=\"col-xs-") . $this->getAttribute($this->getAttribute($_form_, "vars", array()), "button_col", array())) . "\"><a href=\"#\" class=\"btn btn-danger btn-small\" data-removefield=\"collection\" data-field=\"__id__\">") . $this->env->getExtension('translator')->trans($this->getAttribute($this->getAttribute($_form_, "vars", array()), "delete_button_text", array()), array(), $_translation_domain_)) . "</a></div>");
                // line 91
                echo "            ";
            }
            // line 92
            echo "            ";
            if (isset($context["prototype_html"])) { $_prototype_html_ = $context["prototype_html"]; } else { $_prototype_html_ = null; }
            $context["prototype_html"] = (("<div class=\"row\">" . $_prototype_html_) . "</div>");
            // line 93
            echo "
            ";
            // line 94
            if (isset($context["attr"])) { $_attr_ = $context["attr"]; } else { $_attr_ = null; }
            if (isset($context["prototype_html"])) { $_prototype_html_ = $context["prototype_html"]; } else { $_prototype_html_ = null; }
            $context["attr"] = twig_array_merge($_attr_, array("data-prototype" => $_prototype_html_));
            // line 95
            echo "            ";
            if (isset($context["attr"])) { $_attr_ = $context["attr"]; } else { $_attr_ = null; }
            if (isset($context["prototype_name"])) { $_prototype_name_ = $context["prototype_name"]; } else { $_prototype_name_ = null; }
            $context["attr"] = twig_array_merge($_attr_, array("data-prototype-name" => $_prototype_name_));
            // line 96
            echo "        ";
        }
        // line 97
        echo "        <div ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">
            <ul class=\"bc-collection list-unstyled\">
                ";
        // line 99
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_form_);
        foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
            // line 100
            echo "                    <li>
                        <div class=\"row\">
                            <div class=\"col-xs-";
            // line 102
            if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_form_, "vars", array()), "sub_widget_col", array()), "html", null, true);
            echo "\">
                                ";
            // line 103
            if (isset($context["field"])) { $_field_ = $context["field"]; } else { $_field_ = null; }
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($_field_, 'widget');
            echo "
                                ";
            // line 104
            if (isset($context["field"])) { $_field_ = $context["field"]; } else { $_field_ = null; }
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($_field_, 'errors');
            echo "
                            </div>
                            ";
            // line 106
            if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
            if ($this->getAttribute($this->getAttribute($_form_, "vars", array()), "allow_delete", array())) {
                // line 107
                echo "                                <div class=\"col-xs-";
                if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_form_, "vars", array()), "button_col", array()), "html", null, true);
                echo "\">
                                    <a href=\"#\" class=\"btn btn-danger btn-small\" data-removefield=\"collection\" data-field=\"";
                // line 108
                if (isset($context["field"])) { $_field_ = $context["field"]; } else { $_field_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_field_, "vars", array()), "id", array()), "html", null, true);
                echo "\">";
                if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
                if (isset($context["translation_domain"])) { $_translation_domain_ = $context["translation_domain"]; } else { $_translation_domain_ = null; }
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute($this->getAttribute($_form_, "vars", array()), "delete_button_text", array()), array(), $_translation_domain_), "html", null, true);
                echo "</a>
                                </div>
                            ";
            }
            // line 111
            echo "                        </div>
                    </li>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 114
        echo "            </ul>
            ";
        // line 115
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        if ($this->getAttribute($this->getAttribute($_form_, "vars", array()), "allow_add", array())) {
            // line 116
            echo "                <a href=\"#\" class=\"btn btn-primary btn-small\" data-addfield=\"collection\" data-collection=\"";
            if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_form_, "vars", array()), "id", array()), "html", null, true);
            echo "\" data-prototype-name=\"";
            if (isset($context["prototype_name"])) { $_prototype_name_ = $context["prototype_name"]; } else { $_prototype_name_ = null; }
            echo twig_escape_filter($this->env, $_prototype_name_, "html", null, true);
            echo "\">";
            if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
            if (isset($context["translation_domain"])) { $_translation_domain_ = $context["translation_domain"]; } else { $_translation_domain_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute($this->getAttribute($_form_, "vars", array()), "add_button_text", array()), array(), $_translation_domain_), "html", null, true);
            echo "</a>
            ";
        }
        // line 118
        echo "        </div>
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 122
    public function block_textarea_widget($context, array $blocks = array())
    {
        // line 123
        echo "    ";
        ob_start();
        // line 124
        echo "        ";
        if (isset($context["col_size"])) { $_col_size_ = $context["col_size"]; } else { $_col_size_ = null; }
        $context["col_size"] = ((array_key_exists("col_size", $context)) ? (_twig_default_filter($_col_size_, $this->env->getExtension('braincrafted_bootstrap_form')->getColSize())) : ($this->env->getExtension('braincrafted_bootstrap_form')->getColSize()));
        // line 125
        echo "
        ";
        // line 126
        if (isset($context["attr"])) { $_attr_ = $context["attr"]; } else { $_attr_ = null; }
        if (($this->getAttribute($_attr_, "simple_col", array(), "any", true, true) &&  !twig_test_empty($this->getAttribute($_attr_, "simple_col", array())))) {
            // line 127
            echo "            ";
            if (isset($context["attr"])) { $_attr_ = $context["attr"]; } else { $_attr_ = null; }
            $context["simple_col"] = $this->getAttribute($_attr_, "simple_col", array());
            // line 128
            echo "        ";
        }
        // line 129
        echo "        ";
        if (isset($context["attr"])) { $_attr_ = $context["attr"]; } else { $_attr_ = null; }
        if (($this->getAttribute($_attr_, "col_size", array(), "any", true, true) &&  !twig_test_empty($this->getAttribute($_attr_, "col_size", array())))) {
            // line 130
            echo "            ";
            if (isset($context["attr"])) { $_attr_ = $context["attr"]; } else { $_attr_ = null; }
            $context["col_size"] = $this->getAttribute($_attr_, "col_size", array());
            // line 131
            echo "        ";
        }
        // line 132
        echo "
        ";
        // line 133
        if (array_key_exists("simple_col", $context)) {
            // line 134
            echo "            <div class=\"col-";
            if (isset($context["col_size"])) { $_col_size_ = $context["col_size"]; } else { $_col_size_ = null; }
            echo twig_escape_filter($this->env, $_col_size_, "html", null, true);
            echo "-";
            if (isset($context["simple_col"])) { $_simple_col_ = $context["simple_col"]; } else { $_simple_col_ = null; }
            echo twig_escape_filter($this->env, $_simple_col_, "html", null, true);
            echo "\">
        ";
        }
        // line 136
        echo "
        ";
        // line 137
        if (isset($context["attr"])) { $_attr_ = $context["attr"]; } else { $_attr_ = null; }
        $context["attr"] = twig_array_merge($_attr_, array("class" => trim(((($this->getAttribute($_attr_, "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($_attr_, "class", array()), "")) : ("")) . " form-control"))));
        // line 138
        echo "
        <textarea ";
        // line 139
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo ">";
        if (isset($context["value"])) { $_value_ = $context["value"]; } else { $_value_ = null; }
        echo twig_escape_filter($this->env, $_value_, "html", null, true);
        echo "</textarea>

        ";
        // line 141
        if (array_key_exists("simple_col", $context)) {
            // line 142
            echo "            </div>
        ";
        }
        // line 144
        echo "    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 147
    public function block_file_widget($context, array $blocks = array())
    {
        // line 148
        echo "    ";
        ob_start();
        // line 149
        echo "        ";
        if (isset($context["col_size"])) { $_col_size_ = $context["col_size"]; } else { $_col_size_ = null; }
        $context["col_size"] = ((array_key_exists("col_size", $context)) ? (_twig_default_filter($_col_size_, $this->env->getExtension('braincrafted_bootstrap_form')->getColSize())) : ($this->env->getExtension('braincrafted_bootstrap_form')->getColSize()));
        // line 150
        echo "
        ";
        // line 151
        if (isset($context["attr"])) { $_attr_ = $context["attr"]; } else { $_attr_ = null; }
        if (($this->getAttribute($_attr_, "simple_col", array(), "any", true, true) &&  !twig_test_empty($this->getAttribute($_attr_, "simple_col", array())))) {
            // line 152
            echo "            ";
            if (isset($context["attr"])) { $_attr_ = $context["attr"]; } else { $_attr_ = null; }
            $context["simple_col"] = $this->getAttribute($_attr_, "simple_col", array());
            // line 153
            echo "        ";
        }
        // line 154
        echo "
        ";
        // line 155
        if (isset($context["attr"])) { $_attr_ = $context["attr"]; } else { $_attr_ = null; }
        if (($this->getAttribute($_attr_, "col_size", array(), "any", true, true) &&  !twig_test_empty($this->getAttribute($_attr_, "col_size", array())))) {
            // line 156
            echo "            ";
            if (isset($context["attr"])) { $_attr_ = $context["attr"]; } else { $_attr_ = null; }
            $context["col_size"] = $this->getAttribute($_attr_, "col_size", array());
            // line 157
            echo "        ";
        }
        // line 158
        echo "
        ";
        // line 159
        if (array_key_exists("simple_col", $context)) {
            // line 160
            echo "            <div class=\"col-";
            if (isset($context["col_size"])) { $_col_size_ = $context["col_size"]; } else { $_col_size_ = null; }
            echo twig_escape_filter($this->env, $_col_size_, "html", null, true);
            echo "-";
            if (isset($context["simple_col"])) { $_simple_col_ = $context["simple_col"]; } else { $_simple_col_ = null; }
            echo twig_escape_filter($this->env, $_simple_col_, "html", null, true);
            echo "\">
        ";
        }
        // line 162
        echo "
        <input type=\"file\" ";
        // line 163
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo ">

        ";
        // line 165
        if (array_key_exists("simple_col", $context)) {
            // line 166
            echo "            </div>
        ";
        }
        // line 168
        echo "    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 171
    public function block_choice_widget($context, array $blocks = array())
    {
        // line 172
        echo "    ";
        ob_start();
        // line 173
        echo "        ";
        if (isset($context["expanded"])) { $_expanded_ = $context["expanded"]; } else { $_expanded_ = null; }
        if ($_expanded_) {
            // line 174
            echo "            ";
            $this->displayBlock("choice_widget_expanded", $context, $blocks);
            echo "
        ";
        } else {
            // line 176
            echo "            ";
            $this->displayBlock("choice_widget_collapsed", $context, $blocks);
            echo "
        ";
        }
        // line 178
        echo "    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 181
    public function block_choice_widget_expanded($context, array $blocks = array())
    {
        // line 182
        echo "    ";
        ob_start();
        // line 183
        echo "        <div ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">
            ";
        // line 184
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_form_);
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 185
            echo "                ";
            if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
            if ($this->getAttribute($_form_, "multiple", array(), "any", true, true)) {
                // line 186
                echo "                    ";
                if (isset($context["child"])) { $_child_ = $context["child"]; } else { $_child_ = null; }
                if (isset($context["attr"])) { $_attr_ = $context["attr"]; } else { $_attr_ = null; }
                if (isset($context["label_attr"])) { $_label_attr_ = $context["label_attr"]; } else { $_label_attr_ = null; }
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($_child_, 'row', array("no_form_group" => true, "inline" => ($this->getAttribute($_attr_, "inline", array(), "any", true, true) && $this->getAttribute($_attr_, "inline", array())), "label_attr" => $_label_attr_));
                echo "
                ";
            } else {
                // line 188
                echo "                    ";
                if (isset($context["child"])) { $_child_ = $context["child"]; } else { $_child_ = null; }
                if (isset($context["attr"])) { $_attr_ = $context["attr"]; } else { $_attr_ = null; }
                if (isset($context["label_attr"])) { $_label_attr_ = $context["label_attr"]; } else { $_label_attr_ = null; }
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($_child_, 'row', array("no_form_group" => true, "inline" => ($this->getAttribute($_attr_, "inline", array(), "any", true, true) && $this->getAttribute($_attr_, "inline", array())), "label_attr" => $_label_attr_));
                echo "
                ";
            }
            // line 190
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 191
        echo "        </div>
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 195
    public function block_choice_widget_collapsed($context, array $blocks = array())
    {
        // line 196
        echo "    ";
        ob_start();
        // line 197
        echo "        ";
        if (isset($context["attr"])) { $_attr_ = $context["attr"]; } else { $_attr_ = null; }
        $context["attr"] = twig_array_merge($_attr_, array("class" => trim(((($this->getAttribute($_attr_, "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($_attr_, "class", array()), "")) : ("")) . " form-control"))));
        // line 198
        echo "
        <select ";
        // line 199
        $this->displayBlock("widget_attributes", $context, $blocks);
        if (isset($context["multiple"])) { $_multiple_ = $context["multiple"]; } else { $_multiple_ = null; }
        if ($_multiple_) {
            echo " multiple=\"multiple\"";
        }
        echo ">
            ";
        // line 200
        if (isset($context["empty_value"])) { $_empty_value_ = $context["empty_value"]; } else { $_empty_value_ = null; }
        if ( !(null === $_empty_value_)) {
            // line 201
            echo "                <option ";
            if (isset($context["required"])) { $_required_ = $context["required"]; } else { $_required_ = null; }
            if ($_required_) {
                echo " disabled=\"disabled\"";
                if (isset($context["value"])) { $_value_ = $context["value"]; } else { $_value_ = null; }
                if (twig_test_empty($_value_)) {
                    echo " selected=\"selected\"";
                }
            }
            echo " value=\"\">";
            if (isset($context["empty_value"])) { $_empty_value_ = $context["empty_value"]; } else { $_empty_value_ = null; }
            if (isset($context["translation_domain"])) { $_translation_domain_ = $context["translation_domain"]; } else { $_translation_domain_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($_empty_value_, array(), $_translation_domain_), "html", null, true);
            echo "</option>
            ";
        }
        // line 203
        echo "            ";
        if (isset($context["preferred_choices"])) { $_preferred_choices_ = $context["preferred_choices"]; } else { $_preferred_choices_ = null; }
        if ((twig_length_filter($this->env, $_preferred_choices_) > 0)) {
            // line 204
            echo "                ";
            if (isset($context["preferred_choices"])) { $_preferred_choices_ = $context["preferred_choices"]; } else { $_preferred_choices_ = null; }
            $context["options"] = $_preferred_choices_;
            // line 205
            echo "                ";
            $this->displayBlock("choice_widget_options", $context, $blocks);
            echo "
                ";
            // line 206
            if (isset($context["choices"])) { $_choices_ = $context["choices"]; } else { $_choices_ = null; }
            if (isset($context["separator"])) { $_separator_ = $context["separator"]; } else { $_separator_ = null; }
            if (((twig_length_filter($this->env, $_choices_) > 0) &&  !(null === $_separator_))) {
                // line 207
                echo "                    <option disabled=\"disabled\">";
                if (isset($context["separator"])) { $_separator_ = $context["separator"]; } else { $_separator_ = null; }
                echo twig_escape_filter($this->env, $_separator_, "html", null, true);
                echo "</option>
                ";
            }
            // line 209
            echo "            ";
        }
        // line 210
        echo "            ";
        if (isset($context["choices"])) { $_choices_ = $context["choices"]; } else { $_choices_ = null; }
        $context["options"] = $_choices_;
        // line 211
        echo "            ";
        $this->displayBlock("choice_widget_options", $context, $blocks);
        echo "
        </select>
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 216
    public function block_choice_widget_options($context, array $blocks = array())
    {
        // line 217
        echo "    ";
        ob_start();
        // line 218
        echo "        ";
        if (isset($context["options"])) { $_options_ = $context["options"]; } else { $_options_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_options_);
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
        foreach ($context['_seq'] as $context["group_label"] => $context["choice"]) {
            // line 219
            echo "            ";
            if (isset($context["choice"])) { $_choice_ = $context["choice"]; } else { $_choice_ = null; }
            if (twig_test_iterable($_choice_)) {
                // line 220
                echo "                <optgroup label=\"";
                if (isset($context["group_label"])) { $_group_label_ = $context["group_label"]; } else { $_group_label_ = null; }
                if (isset($context["translation_domain"])) { $_translation_domain_ = $context["translation_domain"]; } else { $_translation_domain_ = null; }
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($_group_label_, array(), $_translation_domain_), "html", null, true);
                echo "\">
                    ";
                // line 221
                if (isset($context["choice"])) { $_choice_ = $context["choice"]; } else { $_choice_ = null; }
                $context["options"] = $_choice_;
                // line 222
                echo "                    ";
                $this->displayBlock("choice_widget_options", $context, $blocks);
                echo "
                </optgroup>
            ";
            } else {
                // line 225
                echo "                <option value=\"";
                if (isset($context["choice"])) { $_choice_ = $context["choice"]; } else { $_choice_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_choice_, "value", array()), "html", null, true);
                echo "\"";
                if (isset($context["choice"])) { $_choice_ = $context["choice"]; } else { $_choice_ = null; }
                if (isset($context["value"])) { $_value_ = $context["value"]; } else { $_value_ = null; }
                if ($this->env->getExtension('form')->isSelectedChoice($_choice_, $_value_)) {
                    echo " selected=\"selected\"";
                }
                echo ">";
                if (isset($context["choice"])) { $_choice_ = $context["choice"]; } else { $_choice_ = null; }
                if (isset($context["translation_domain"])) { $_translation_domain_ = $context["translation_domain"]; } else { $_translation_domain_ = null; }
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute($_choice_, "label", array()), array(), $_translation_domain_), "html", null, true);
                echo "</option>
            ";
            }
            // line 227
            echo "        ";
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
        unset($context['_seq'], $context['_iterated'], $context['group_label'], $context['choice'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 228
        echo "    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 231
    public function block_checkbox_row($context, array $blocks = array())
    {
        // line 232
        echo "    ";
        ob_start();
        // line 233
        echo "        ";
        if (isset($context["style"])) { $_style_ = $context["style"]; } else { $_style_ = null; }
        $context["style"] = ((array_key_exists("style", $context)) ? (_twig_default_filter($_style_, $this->env->getExtension('braincrafted_bootstrap_form')->getStyle())) : ($this->env->getExtension('braincrafted_bootstrap_form')->getStyle()));
        // line 234
        echo "        ";
        if (isset($context["col_size"])) { $_col_size_ = $context["col_size"]; } else { $_col_size_ = null; }
        $context["col_size"] = ((array_key_exists("col_size", $context)) ? (_twig_default_filter($_col_size_, $this->env->getExtension('braincrafted_bootstrap_form')->getColSize())) : ($this->env->getExtension('braincrafted_bootstrap_form')->getColSize()));
        // line 235
        echo "
        ";
        // line 236
        if (isset($context["attr"])) { $_attr_ = $context["attr"]; } else { $_attr_ = null; }
        if (($this->getAttribute($_attr_, "label_col", array(), "any", true, true) &&  !twig_test_empty($this->getAttribute($_attr_, "label_col", array())))) {
            // line 237
            echo "            ";
            if (isset($context["attr"])) { $_attr_ = $context["attr"]; } else { $_attr_ = null; }
            $context["label_col"] = $this->getAttribute($_attr_, "label_col", array());
            // line 238
            echo "        ";
        }
        // line 239
        echo "        ";
        if (isset($context["attr"])) { $_attr_ = $context["attr"]; } else { $_attr_ = null; }
        if (($this->getAttribute($_attr_, "widget_col", array(), "any", true, true) &&  !twig_test_empty($this->getAttribute($_attr_, "widget_col", array())))) {
            // line 240
            echo "            ";
            if (isset($context["attr"])) { $_attr_ = $context["attr"]; } else { $_attr_ = null; }
            $context["widget_col"] = $this->getAttribute($_attr_, "widget_col", array());
            // line 241
            echo "        ";
        }
        // line 242
        echo "        ";
        if (isset($context["attr"])) { $_attr_ = $context["attr"]; } else { $_attr_ = null; }
        if (($this->getAttribute($_attr_, "col_size", array(), "any", true, true) &&  !twig_test_empty($this->getAttribute($_attr_, "col_size", array())))) {
            // line 243
            echo "            ";
            if (isset($context["attr"])) { $_attr_ = $context["attr"]; } else { $_attr_ = null; }
            $context["col_size"] = $this->getAttribute($_attr_, "col_size", array());
            // line 244
            echo "        ";
        }
        // line 245
        echo "        ";
        if (isset($context["attr"])) { $_attr_ = $context["attr"]; } else { $_attr_ = null; }
        if (($this->getAttribute($_attr_, "style", array(), "any", true, true) &&  !twig_test_empty($this->getAttribute($_attr_, "style", array())))) {
            // line 246
            echo "            ";
            if (isset($context["attr"])) { $_attr_ = $context["attr"]; } else { $_attr_ = null; }
            $context["style"] = $this->getAttribute($_attr_, "style", array());
            // line 247
            echo "        ";
        }
        // line 248
        echo "
        ";
        // line 249
        $context["class"] = "";
        // line 250
        echo "        ";
        if (isset($context["attr"])) { $_attr_ = $context["attr"]; } else { $_attr_ = null; }
        if (isset($context["no_form_group"])) { $_no_form_group_ = $context["no_form_group"]; } else { $_no_form_group_ = null; }
        if ((array_key_exists("align_with_widget", $context) || $this->getAttribute($_attr_, "align_with_widget", array(), "any", true, true))) {
            // line 251
            echo "            ";
            if (isset($context["widget_col"])) { $_widget_col_ = $context["widget_col"]; } else { $_widget_col_ = null; }
            $context["widget_col"] = ((array_key_exists("widget_col", $context)) ? (_twig_default_filter($_widget_col_, $this->env->getExtension('braincrafted_bootstrap_form')->getWidgetCol())) : ($this->env->getExtension('braincrafted_bootstrap_form')->getWidgetCol()));
            // line 252
            echo "            ";
            if (isset($context["label_col"])) { $_label_col_ = $context["label_col"]; } else { $_label_col_ = null; }
            $context["label_col"] = ((array_key_exists("label_col", $context)) ? (_twig_default_filter($_label_col_, $this->env->getExtension('braincrafted_bootstrap_form')->getLabelCol())) : ($this->env->getExtension('braincrafted_bootstrap_form')->getLabelCol()));
            // line 253
            echo "            ";
            if (isset($context["col_size"])) { $_col_size_ = $context["col_size"]; } else { $_col_size_ = null; }
            if (isset($context["widget_col"])) { $_widget_col_ = $context["widget_col"]; } else { $_widget_col_ = null; }
            if (isset($context["label_col"])) { $_label_col_ = $context["label_col"]; } else { $_label_col_ = null; }
            $context["class"] = ((((((("col-" . $_col_size_) . "-") . $_widget_col_) . " col-") . $_col_size_) . "-offset-") . $_label_col_);
            // line 254
            echo "            <div class=\"form-group ";
            if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
            if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute($_form_, "vars", array()), "errors", array())) > 0)) {
                echo " has-error";
            }
            echo "\">
            <div class=\"";
            // line 255
            if (isset($context["class"])) { $_class_ = $context["class"]; } else { $_class_ = null; }
            echo twig_escape_filter($this->env, $_class_, "html", null, true);
            echo "\">
        ";
        } elseif (( !array_key_exists("no_form_group", $context) || ($_no_form_group_ == false))) {
            // line 257
            echo "            <div class=\"form-group";
            if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
            if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute($_form_, "vars", array()), "errors", array())) > 0)) {
                echo " has-error";
            }
            echo "\">
        ";
        }
        // line 259
        echo "
        ";
        // line 260
        ob_start();
        // line 261
        echo "        ";
        if (isset($context["label"])) { $_label_ = $context["label"]; } else { $_label_ = null; }
        if ( !($_label_ === false)) {
            // line 262
            echo "            ";
            if (isset($context["compound"])) { $_compound_ = $context["compound"]; } else { $_compound_ = null; }
            if ( !$_compound_) {
                // line 263
                echo "                ";
                if (isset($context["label_attr"])) { $_label_attr_ = $context["label_attr"]; } else { $_label_attr_ = null; }
                if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
                $context["label_attr"] = twig_array_merge($_label_attr_, array("for" => $_id_));
                // line 264
                echo "            ";
            }
            // line 265
            echo "            ";
            if (isset($context["inline"])) { $_inline_ = $context["inline"]; } else { $_inline_ = null; }
            if ((array_key_exists("inline", $context) && $_inline_)) {
                // line 266
                echo "                ";
                if (isset($context["label_attr"])) { $_label_attr_ = $context["label_attr"]; } else { $_label_attr_ = null; }
                $context["label_attr"] = twig_array_merge($_label_attr_, array("class" => trim(((($this->getAttribute($_label_attr_, "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($_label_attr_, "class", array()), "")) : ("")) . " checkbox-inline"))));
                // line 267
                echo "            ";
            }
            // line 268
            echo "            ";
            if (isset($context["required"])) { $_required_ = $context["required"]; } else { $_required_ = null; }
            if ($_required_) {
                // line 269
                echo "                ";
                if (isset($context["label_attr"])) { $_label_attr_ = $context["label_attr"]; } else { $_label_attr_ = null; }
                $context["label_attr"] = twig_array_merge($_label_attr_, array("class" => trim(((($this->getAttribute($_label_attr_, "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($_label_attr_, "class", array()), "")) : ("")) . " required"))));
                // line 270
                echo "            ";
            }
            // line 271
            echo "            ";
            if (isset($context["label"])) { $_label_ = $context["label"]; } else { $_label_ = null; }
            if (twig_test_empty($_label_)) {
                // line 272
                echo "                ";
                if (isset($context["name"])) { $_name_ = $context["name"]; } else { $_name_ = null; }
                $context["label"] = $this->env->getExtension('form')->humanize($_name_);
                // line 273
                echo "            ";
            }
            // line 274
            echo "            <label";
            if (isset($context["label_attr"])) { $_label_attr_ = $context["label_attr"]; } else { $_label_attr_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($_label_attr_);
            foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
                echo " ";
                if (isset($context["attrname"])) { $_attrname_ = $context["attrname"]; } else { $_attrname_ = null; }
                echo twig_escape_filter($this->env, $_attrname_, "html", null, true);
                echo "=\"";
                if (isset($context["attrvalue"])) { $_attrvalue_ = $context["attrvalue"]; } else { $_attrvalue_ = null; }
                echo twig_escape_filter($this->env, $_attrvalue_, "html", null, true);
                echo "\"";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo ">
            ";
            // line 275
            $this->displayBlock("checkbox_widget", $context, $blocks);
            echo "
            ";
            // line 276
            if (isset($context["label"])) { $_label_ = $context["label"]; } else { $_label_ = null; }
            if (isset($context["translation_domain"])) { $_translation_domain_ = $context["translation_domain"]; } else { $_translation_domain_ = null; }
            echo $this->env->getExtension('translator')->trans($_label_, array(), $_translation_domain_);
            // line 277
            echo "</label>
        ";
        } else {
            // line 279
            echo "            ";
            $this->displayBlock("checkbox_widget", $context, $blocks);
            echo "
        ";
        }
        // line 281
        echo "        ";
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($_form_, 'errors');
        echo "
        ";
        $context["checkboxdata"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 283
        echo "
        ";
        // line 284
        if (isset($context["inline"])) { $_inline_ = $context["inline"]; } else { $_inline_ = null; }
        if ((array_key_exists("inline", $context) && $_inline_)) {
            // line 285
            echo "            ";
            if (isset($context["checkboxdata"])) { $_checkboxdata_ = $context["checkboxdata"]; } else { $_checkboxdata_ = null; }
            echo $_checkboxdata_;
            echo "
        ";
        } else {
            // line 287
            echo "            <div class=\"checkbox\">";
            if (isset($context["checkboxdata"])) { $_checkboxdata_ = $context["checkboxdata"]; } else { $_checkboxdata_ = null; }
            echo $_checkboxdata_;
            echo "</div>
        ";
        }
        // line 289
        echo "
        ";
        // line 290
        $this->displayBlock("form_help", $context, $blocks);
        echo "

        ";
        // line 292
        if (isset($context["attr"])) { $_attr_ = $context["attr"]; } else { $_attr_ = null; }
        if (isset($context["no_form_group"])) { $_no_form_group_ = $context["no_form_group"]; } else { $_no_form_group_ = null; }
        if ((array_key_exists("align_with_widget", $context) || $this->getAttribute($_attr_, "align_with_widget", array(), "any", true, true))) {
            // line 293
            echo "            </div>
            </div>
        ";
        } elseif (( !array_key_exists("no_form_group", $context) || ($_no_form_group_ == false))) {
            // line 296
            echo "            </div>
        ";
        }
        // line 298
        echo "
        ";
        // line 299
        if (isset($context["style"])) { $_style_ = $context["style"]; } else { $_style_ = null; }
        if (($_style_ == "inline")) {
            echo "&nbsp;";
        }
        // line 300
        echo "    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 303
    public function block_radio_row($context, array $blocks = array())
    {
        // line 304
        echo "    ";
        ob_start();
        // line 305
        echo "        ";
        $context["class"] = "";
        // line 306
        echo "
        ";
        // line 307
        if (isset($context["col_size"])) { $_col_size_ = $context["col_size"]; } else { $_col_size_ = null; }
        $context["col_size"] = ((array_key_exists("col_size", $context)) ? (_twig_default_filter($_col_size_, $this->env->getExtension('braincrafted_bootstrap_form')->getColSize())) : ($this->env->getExtension('braincrafted_bootstrap_form')->getColSize()));
        // line 308
        echo "
        ";
        // line 309
        if (isset($context["attr"])) { $_attr_ = $context["attr"]; } else { $_attr_ = null; }
        if (($this->getAttribute($_attr_, "label_col", array(), "any", true, true) &&  !twig_test_empty($this->getAttribute($_attr_, "label_col", array())))) {
            // line 310
            echo "            ";
            if (isset($context["attr"])) { $_attr_ = $context["attr"]; } else { $_attr_ = null; }
            $context["label_col"] = $this->getAttribute($_attr_, "label_col", array());
            // line 311
            echo "        ";
        }
        // line 312
        echo "        ";
        if (isset($context["attr"])) { $_attr_ = $context["attr"]; } else { $_attr_ = null; }
        if (($this->getAttribute($_attr_, "widget_col", array(), "any", true, true) &&  !twig_test_empty($this->getAttribute($_attr_, "widget_col", array())))) {
            // line 313
            echo "            ";
            if (isset($context["attr"])) { $_attr_ = $context["attr"]; } else { $_attr_ = null; }
            $context["widget_col"] = $this->getAttribute($_attr_, "widget_col", array());
            // line 314
            echo "        ";
        }
        // line 315
        echo "        ";
        if (isset($context["attr"])) { $_attr_ = $context["attr"]; } else { $_attr_ = null; }
        if (($this->getAttribute($_attr_, "col_size", array(), "any", true, true) &&  !twig_test_empty($this->getAttribute($_attr_, "col_size", array())))) {
            // line 316
            echo "            ";
            if (isset($context["attr"])) { $_attr_ = $context["attr"]; } else { $_attr_ = null; }
            $context["col_size"] = $this->getAttribute($_attr_, "col_size", array());
            // line 317
            echo "        ";
        }
        // line 318
        echo "
        ";
        // line 319
        if (isset($context["attr"])) { $_attr_ = $context["attr"]; } else { $_attr_ = null; }
        if (isset($context["no_form_group"])) { $_no_form_group_ = $context["no_form_group"]; } else { $_no_form_group_ = null; }
        if ((array_key_exists("align_with_widget", $context) || $this->getAttribute($_attr_, "align_with_widget", array(), "any", true, true))) {
            // line 320
            echo "            ";
            if (isset($context["widget_col"])) { $_widget_col_ = $context["widget_col"]; } else { $_widget_col_ = null; }
            $context["widget_col"] = ((array_key_exists("widget_col", $context)) ? (_twig_default_filter($_widget_col_, $this->env->getExtension('braincrafted_bootstrap_form')->getWidgetCol())) : ($this->env->getExtension('braincrafted_bootstrap_form')->getWidgetCol()));
            // line 321
            echo "            ";
            if (isset($context["label_col"])) { $_label_col_ = $context["label_col"]; } else { $_label_col_ = null; }
            $context["label_col"] = ((array_key_exists("label_col", $context)) ? (_twig_default_filter($_label_col_, $this->env->getExtension('braincrafted_bootstrap_form')->getLabelCol())) : ($this->env->getExtension('braincrafted_bootstrap_form')->getLabelCol()));
            // line 322
            echo "            ";
            if (isset($context["col_size"])) { $_col_size_ = $context["col_size"]; } else { $_col_size_ = null; }
            if (isset($context["widget_col"])) { $_widget_col_ = $context["widget_col"]; } else { $_widget_col_ = null; }
            if (isset($context["label_col"])) { $_label_col_ = $context["label_col"]; } else { $_label_col_ = null; }
            $context["class"] = (((((((" col-" . $_col_size_) . "-") . $_widget_col_) . " col-") . $_col_size_) . "-offset-") . $_label_col_);
            // line 323
            echo "            <div class=\"form-group ";
            if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
            if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute($_form_, "vars", array()), "errors", array())) > 0)) {
                echo " has-error";
            }
            echo "\">
            <div class=\"";
            // line 324
            if (isset($context["class"])) { $_class_ = $context["class"]; } else { $_class_ = null; }
            echo twig_escape_filter($this->env, $_class_, "html", null, true);
            echo "\">
        ";
        } elseif (( !array_key_exists("no_form_group", $context) || ($_no_form_group_ == false))) {
            // line 326
            echo "            <div class=\"form-group";
            if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
            if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute($_form_, "vars", array()), "errors", array())) > 0)) {
                echo " has-error";
            }
            echo "\">
        ";
        }
        // line 328
        echo "
        ";
        // line 329
        ob_start();
        // line 330
        echo "        ";
        if (isset($context["label"])) { $_label_ = $context["label"]; } else { $_label_ = null; }
        if ( !($_label_ === false)) {
            // line 331
            echo "            ";
            if (isset($context["compound"])) { $_compound_ = $context["compound"]; } else { $_compound_ = null; }
            if ( !$_compound_) {
                // line 332
                echo "                ";
                if (isset($context["label_attr"])) { $_label_attr_ = $context["label_attr"]; } else { $_label_attr_ = null; }
                if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
                $context["label_attr"] = twig_array_merge($_label_attr_, array("for" => $_id_));
                // line 333
                echo "            ";
            }
            // line 334
            echo "            ";
            if (isset($context["inline"])) { $_inline_ = $context["inline"]; } else { $_inline_ = null; }
            if ((array_key_exists("inline", $context) && $_inline_)) {
                // line 335
                echo "                ";
                if (isset($context["label_attr"])) { $_label_attr_ = $context["label_attr"]; } else { $_label_attr_ = null; }
                $context["label_attr"] = twig_array_merge($_label_attr_, array("class" => trim(((($this->getAttribute($_label_attr_, "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($_label_attr_, "class", array()), "")) : ("")) . " radio-inline"))));
                // line 336
                echo "            ";
            }
            // line 337
            echo "            ";
            if (isset($context["required"])) { $_required_ = $context["required"]; } else { $_required_ = null; }
            if ($_required_) {
                // line 338
                echo "                ";
                if (isset($context["label_attr"])) { $_label_attr_ = $context["label_attr"]; } else { $_label_attr_ = null; }
                $context["label_attr"] = twig_array_merge($_label_attr_, array("class" => trim(((($this->getAttribute($_label_attr_, "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($_label_attr_, "class", array()), "")) : ("")) . " required"))));
                // line 339
                echo "            ";
            }
            // line 340
            echo "            ";
            if (isset($context["label"])) { $_label_ = $context["label"]; } else { $_label_ = null; }
            if (twig_test_empty($_label_)) {
                // line 341
                echo "                ";
                if (isset($context["name"])) { $_name_ = $context["name"]; } else { $_name_ = null; }
                $context["label"] = $this->env->getExtension('form')->humanize($_name_);
                // line 342
                echo "            ";
            }
            // line 343
            echo "            <label";
            if (isset($context["label_attr"])) { $_label_attr_ = $context["label_attr"]; } else { $_label_attr_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($_label_attr_);
            foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
                echo " ";
                if (isset($context["attrname"])) { $_attrname_ = $context["attrname"]; } else { $_attrname_ = null; }
                echo twig_escape_filter($this->env, $_attrname_, "html", null, true);
                echo "=\"";
                if (isset($context["attrvalue"])) { $_attrvalue_ = $context["attrvalue"]; } else { $_attrvalue_ = null; }
                echo twig_escape_filter($this->env, $_attrvalue_, "html", null, true);
                echo "\"";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo ">
            ";
            // line 344
            $this->displayBlock("radio_widget", $context, $blocks);
            echo "
            ";
            // line 345
            if (isset($context["label"])) { $_label_ = $context["label"]; } else { $_label_ = null; }
            if (isset($context["translation_domain"])) { $_translation_domain_ = $context["translation_domain"]; } else { $_translation_domain_ = null; }
            echo $this->env->getExtension('translator')->trans($_label_, array(), $_translation_domain_);
            // line 346
            echo "</label>
        ";
        } else {
            // line 348
            echo "            ";
            $this->displayBlock("radio_widget", $context, $blocks);
            echo "
        ";
        }
        // line 350
        echo "        ";
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($_form_, 'errors');
        echo "
        ";
        $context["radiodata"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 352
        echo "
        ";
        // line 353
        if (isset($context["inline"])) { $_inline_ = $context["inline"]; } else { $_inline_ = null; }
        if ((array_key_exists("inline", $context) && $_inline_)) {
            // line 354
            echo "            ";
            if (isset($context["radiodata"])) { $_radiodata_ = $context["radiodata"]; } else { $_radiodata_ = null; }
            echo $_radiodata_;
            echo "
        ";
        } else {
            // line 356
            echo "            <div class=\"radio\">";
            if (isset($context["radiodata"])) { $_radiodata_ = $context["radiodata"]; } else { $_radiodata_ = null; }
            echo $_radiodata_;
            echo "</div>
        ";
        }
        // line 358
        echo "
        ";
        // line 359
        $this->displayBlock("form_help", $context, $blocks);
        echo "

        ";
        // line 361
        if (isset($context["attr"])) { $_attr_ = $context["attr"]; } else { $_attr_ = null; }
        if (isset($context["no_form_group"])) { $_no_form_group_ = $context["no_form_group"]; } else { $_no_form_group_ = null; }
        if ((array_key_exists("align_with_widget", $context) || $this->getAttribute($_attr_, "align_with_widget", array(), "any", true, true))) {
            // line 362
            echo "            </div>
            </div>
        ";
        } elseif (( !array_key_exists("no_form_group", $context) || ($_no_form_group_ == false))) {
            // line 365
            echo "            </div>
        ";
        }
        // line 367
        echo "    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 370
    public function block_checkbox_widget($context, array $blocks = array())
    {
        // line 371
        echo "    ";
        ob_start();
        // line 372
        echo "        <input type=\"checkbox\" ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        if (array_key_exists("value", $context)) {
            echo " value=\"";
            if (isset($context["value"])) { $_value_ = $context["value"]; } else { $_value_ = null; }
            echo twig_escape_filter($this->env, $_value_, "html", null, true);
            echo "\"";
        }
        if (isset($context["checked"])) { $_checked_ = $context["checked"]; } else { $_checked_ = null; }
        if ($_checked_) {
            echo " checked=\"checked\"";
        }
        echo " />
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 376
    public function block_radio_widget($context, array $blocks = array())
    {
        // line 377
        echo "    ";
        ob_start();
        // line 378
        echo "        <input type=\"radio\" ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        if (array_key_exists("value", $context)) {
            echo " value=\"";
            if (isset($context["value"])) { $_value_ = $context["value"]; } else { $_value_ = null; }
            echo twig_escape_filter($this->env, $_value_, "html", null, true);
            echo "\"";
        }
        if (isset($context["checked"])) { $_checked_ = $context["checked"]; } else { $_checked_ = null; }
        if ($_checked_) {
            echo " checked=\"checked\"";
        }
        echo " />
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 382
    public function block_datetime_widget($context, array $blocks = array())
    {
        // line 383
        echo "    ";
        ob_start();
        // line 384
        echo "        ";
        if (isset($context["widget"])) { $_widget_ = $context["widget"]; } else { $_widget_ = null; }
        if (($_widget_ == "single_text")) {
            // line 385
            echo "            ";
            $this->displayBlock("form_widget_simple", $context, $blocks);
            echo "
        ";
        } else {
            // line 387
            echo "            ";
            if (isset($context["attr"])) { $_attr_ = $context["attr"]; } else { $_attr_ = null; }
            $context["attr"] = twig_array_merge($_attr_, array("class" => "bootstrap-datetime"));
            // line 388
            echo "            <div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">
                ";
            // line 389
            if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_form_, "date", array()), 'widget');
            echo "
                ";
            // line 390
            if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_form_, "time", array()), 'widget');
            echo "
                ";
            // line 391
            if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_form_, "date", array()), 'errors');
            echo "
                ";
            // line 392
            if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_form_, "time", array()), 'errors');
            echo "
            </div>
        ";
        }
        // line 395
        echo "    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 398
    public function block_date_widget($context, array $blocks = array())
    {
        // line 399
        echo "    ";
        ob_start();
        // line 400
        echo "        ";
        if (isset($context["widget"])) { $_widget_ = $context["widget"]; } else { $_widget_ = null; }
        if (($_widget_ == "single_text")) {
            // line 401
            echo "            ";
            $this->displayBlock("form_widget_simple", $context, $blocks);
            echo "
        ";
        } else {
            // line 403
            echo "            ";
            if (isset($context["attr"])) { $_attr_ = $context["attr"]; } else { $_attr_ = null; }
            $context["attr"] = twig_array_merge($_attr_, array("class" => "bootstrap-date"));
            // line 404
            echo "            <div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">
                ";
            // line 405
            if (isset($context["date_pattern"])) { $_date_pattern_ = $context["date_pattern"]; } else { $_date_pattern_ = null; }
            if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
            echo strtr($_date_pattern_, array("{{ year }}" =>             // line 406
$this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_form_, "year", array()), 'widget'), "{{ month }}" =>             // line 407
$this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_form_, "month", array()), 'widget'), "{{ day }}" =>             // line 408
$this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_form_, "day", array()), 'widget')));
            // line 409
            echo "
            </div>
        ";
        }
        // line 412
        echo "    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 415
    public function block_time_widget($context, array $blocks = array())
    {
        // line 416
        echo "    ";
        ob_start();
        // line 417
        echo "        ";
        if (isset($context["widget"])) { $_widget_ = $context["widget"]; } else { $_widget_ = null; }
        if (($_widget_ == "single_text")) {
            // line 418
            echo "            ";
            $this->displayBlock("form_widget_simple", $context, $blocks);
            echo "
        ";
        } else {
            // line 420
            echo "            ";
            if (isset($context["widget"])) { $_widget_ = $context["widget"]; } else { $_widget_ = null; }
            $context["vars"] = ((($_widget_ == "text")) ? (array("attr" => array("size" => 1))) : (array()));
            // line 421
            echo "            ";
            if (isset($context["attr"])) { $_attr_ = $context["attr"]; } else { $_attr_ = null; }
            $context["attr"] = twig_array_merge($_attr_, array("class" => "bootstrap-time"));
            // line 422
            echo "            <div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">
                ";
            // line 423
            if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
            if (isset($context["vars"])) { $_vars_ = $context["vars"]; } else { $_vars_ = null; }
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_form_, "hour", array()), 'widget', $_vars_);
            echo "
                ";
            // line 424
            if (isset($context["with_minutes"])) { $_with_minutes_ = $context["with_minutes"]; } else { $_with_minutes_ = null; }
            if ($_with_minutes_) {
                echo ":";
                if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
                if (isset($context["vars"])) { $_vars_ = $context["vars"]; } else { $_vars_ = null; }
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_form_, "minute", array()), 'widget', $_vars_);
            }
            // line 425
            echo "                ";
            if (isset($context["with_seconds"])) { $_with_seconds_ = $context["with_seconds"]; } else { $_with_seconds_ = null; }
            if ($_with_seconds_) {
                echo ":";
                if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
                if (isset($context["vars"])) { $_vars_ = $context["vars"]; } else { $_vars_ = null; }
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_form_, "second", array()), 'widget', $_vars_);
            }
            // line 426
            echo "            </div>
        ";
        }
        // line 428
        echo "    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 431
    public function block_number_widget($context, array $blocks = array())
    {
        // line 432
        echo "    ";
        ob_start();
        // line 433
        echo "        ";
        // line 434
        echo "        ";
        if (isset($context["type"])) { $_type_ = $context["type"]; } else { $_type_ = null; }
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter($_type_, "text")) : ("text"));
        // line 435
        echo "        ";
        $this->displayBlock("form_widget_simple", $context, $blocks);
        echo "
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 439
    public function block_integer_widget($context, array $blocks = array())
    {
        // line 440
        echo "    ";
        ob_start();
        // line 441
        echo "        ";
        if (isset($context["type"])) { $_type_ = $context["type"]; } else { $_type_ = null; }
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter($_type_, "number")) : ("number"));
        // line 442
        echo "        ";
        $this->displayBlock("form_widget_simple", $context, $blocks);
        echo "
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 446
    public function block_money_widget($context, array $blocks = array())
    {
        // line 447
        echo "    ";
        ob_start();
        // line 448
        echo "        <div class=\"input-group\">
            ";
        // line 449
        if (isset($context["money_pattern"])) { $_money_pattern_ = $context["money_pattern"]; } else { $_money_pattern_ = null; }
        echo strtr($_money_pattern_, array("{{ widget }}" => $this->renderBlock("form_widget_simple", $context, $blocks), "{{ tag_start }}" => "<span class=\"input-group-addon\">", "{{ tag_end }}" => "</span>"));
        // line 453
        echo "
        </div>
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 458
    public function block_url_widget($context, array $blocks = array())
    {
        // line 459
        echo "    ";
        ob_start();
        // line 460
        echo "        ";
        if (isset($context["type"])) { $_type_ = $context["type"]; } else { $_type_ = null; }
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter($_type_, "url")) : ("url"));
        // line 461
        echo "        ";
        $this->displayBlock("form_widget_simple", $context, $blocks);
        echo "
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 465
    public function block_search_widget($context, array $blocks = array())
    {
        // line 466
        echo "    ";
        ob_start();
        // line 467
        echo "        ";
        if (isset($context["type"])) { $_type_ = $context["type"]; } else { $_type_ = null; }
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter($_type_, "search")) : ("search"));
        // line 468
        echo "        ";
        $this->displayBlock("form_widget_simple", $context, $blocks);
        echo "
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 472
    public function block_percent_widget($context, array $blocks = array())
    {
        // line 473
        echo "    ";
        ob_start();
        // line 474
        echo "        ";
        if (isset($context["type"])) { $_type_ = $context["type"]; } else { $_type_ = null; }
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter($_type_, "text")) : ("text"));
        // line 475
        echo "        <div class=\"input-group\">
            ";
        // line 476
        $this->displayBlock("form_widget_simple", $context, $blocks);
        echo "
            <span class=\"input-group-addon\">%</span>
        </div>
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 482
    public function block_password_widget($context, array $blocks = array())
    {
        // line 483
        echo "    ";
        ob_start();
        // line 484
        echo "        ";
        if (isset($context["type"])) { $_type_ = $context["type"]; } else { $_type_ = null; }
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter($_type_, "password")) : ("password"));
        // line 485
        echo "        ";
        $this->displayBlock("form_widget_simple", $context, $blocks);
        echo "
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 489
    public function block_hidden_widget($context, array $blocks = array())
    {
        // line 490
        echo "    ";
        ob_start();
        // line 491
        echo "        ";
        if (isset($context["type"])) { $_type_ = $context["type"]; } else { $_type_ = null; }
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter($_type_, "hidden")) : ("hidden"));
        // line 492
        echo "        ";
        $this->displayBlock("form_widget_simple", $context, $blocks);
        echo "
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 496
    public function block_email_widget($context, array $blocks = array())
    {
        // line 497
        echo "    ";
        ob_start();
        // line 498
        echo "        ";
        if (isset($context["type"])) { $_type_ = $context["type"]; } else { $_type_ = null; }
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter($_type_, "email")) : ("email"));
        // line 499
        echo "        ";
        $this->displayBlock("form_widget_simple", $context, $blocks);
        echo "
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 503
    public function block_button_widget($context, array $blocks = array())
    {
        // line 504
        echo "    ";
        ob_start();
        // line 505
        echo "        ";
        if (isset($context["label"])) { $_label_ = $context["label"]; } else { $_label_ = null; }
        if ((twig_test_empty($_label_) &&  !($_label_ === false))) {
            // line 506
            echo "            ";
            if (isset($context["name"])) { $_name_ = $context["name"]; } else { $_name_ = null; }
            $context["label"] = $this->env->getExtension('form')->humanize($_name_);
            // line 507
            echo "        ";
        }
        // line 508
        echo "        ";
        if (isset($context["type"])) { $_type_ = $context["type"]; } else { $_type_ = null; }
        if ((array_key_exists("type", $context) && ($_type_ == "submit"))) {
            // line 509
            echo "            ";
            if (isset($context["attr"])) { $_attr_ = $context["attr"]; } else { $_attr_ = null; }
            if (isset($context["button_class"])) { $_button_class_ = $context["button_class"]; } else { $_button_class_ = null; }
            $context["attr"] = twig_array_merge($_attr_, array("class" => trim((((($this->getAttribute($_attr_, "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($_attr_, "class", array()), "")) : ("")) . " btn btn-") . ((array_key_exists("button_class", $context)) ? (_twig_default_filter($_button_class_, "primary")) : ("primary"))))));
            // line 510
            echo "        ";
        } else {
            // line 511
            echo "            ";
            if (isset($context["attr"])) { $_attr_ = $context["attr"]; } else { $_attr_ = null; }
            if (isset($context["button_class"])) { $_button_class_ = $context["button_class"]; } else { $_button_class_ = null; }
            $context["attr"] = twig_array_merge($_attr_, array("class" => trim((((($this->getAttribute($_attr_, "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($_attr_, "class", array()), "")) : ("")) . " btn btn-") . ((array_key_exists("button_class", $context)) ? (_twig_default_filter($_button_class_, "default")) : ("default"))))));
            // line 512
            echo "        ";
        }
        // line 513
        echo "        ";
        if (isset($context["as_link"])) { $_as_link_ = $context["as_link"]; } else { $_as_link_ = null; }
        if ((array_key_exists("as_link", $context) && ($_as_link_ == true))) {
            // line 514
            echo "            <a ";
            $this->displayBlock("button_attributes", $context, $blocks);
            echo ">";
            if (isset($context["attr"])) { $_attr_ = $context["attr"]; } else { $_attr_ = null; }
            if (($this->getAttribute($_attr_, "icon", array(), "any", true, true) && ($this->getAttribute($_attr_, "icon", array()) != ""))) {
                if (isset($context["attr"])) { $_attr_ = $context["attr"]; } else { $_attr_ = null; }
                echo $this->env->getExtension('braincrafted_bootstrap_icon')->iconFunction($this->getAttribute($_attr_, "icon", array()));
            }
            if (isset($context["label"])) { $_label_ = $context["label"]; } else { $_label_ = null; }
            if (isset($context["translation_domain"])) { $_translation_domain_ = $context["translation_domain"]; } else { $_translation_domain_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($_label_, array(), $_translation_domain_), "html", null, true);
            echo "</a>
        ";
        } else {
            // line 516
            echo "            <button type=\"";
            if (isset($context["type"])) { $_type_ = $context["type"]; } else { $_type_ = null; }
            echo twig_escape_filter($this->env, ((array_key_exists("type", $context)) ? (_twig_default_filter($_type_, "button")) : ("button")), "html", null, true);
            echo "\" ";
            $this->displayBlock("button_attributes", $context, $blocks);
            echo ">";
            if (isset($context["attr"])) { $_attr_ = $context["attr"]; } else { $_attr_ = null; }
            if (($this->getAttribute($_attr_, "icon", array(), "any", true, true) && ($this->getAttribute($_attr_, "icon", array()) != ""))) {
                if (isset($context["attr"])) { $_attr_ = $context["attr"]; } else { $_attr_ = null; }
                echo $this->env->getExtension('braincrafted_bootstrap_icon')->iconFunction($this->getAttribute($_attr_, "icon", array()));
            }
            if (isset($context["label"])) { $_label_ = $context["label"]; } else { $_label_ = null; }
            if (isset($context["translation_domain"])) { $_translation_domain_ = $context["translation_domain"]; } else { $_translation_domain_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($_label_, array(), $_translation_domain_), "html", null, true);
            echo "</button>
        ";
        }
        // line 518
        echo "    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 521
    public function block_submit_widget($context, array $blocks = array())
    {
        // line 522
        echo "    ";
        ob_start();
        // line 523
        echo "        ";
        if (isset($context["type"])) { $_type_ = $context["type"]; } else { $_type_ = null; }
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter($_type_, "submit")) : ("submit"));
        // line 524
        echo "        ";
        $this->displayBlock("button_widget", $context, $blocks);
        echo "
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 528
    public function block_reset_widget($context, array $blocks = array())
    {
        // line 529
        echo "    ";
        ob_start();
        // line 530
        echo "        ";
        if (isset($context["type"])) { $_type_ = $context["type"]; } else { $_type_ = null; }
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter($_type_, "reset")) : ("reset"));
        // line 531
        echo "        ";
        $this->displayBlock("button_widget", $context, $blocks);
        echo "
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 535
    public function block_form_actions_widget($context, array $blocks = array())
    {
        // line 536
        echo "    ";
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($_form_, "children", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["button"]) {
            // line 537
            echo "        ";
            if (isset($context["button"])) { $_button_ = $context["button"]; } else { $_button_ = null; }
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($_button_, 'widget');
            echo "&nbsp; ";
            // line 538
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['button'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    // line 541
    public function block_bs_static_widget($context, array $blocks = array())
    {
        // line 542
        echo "    ";
        if (isset($context["attr"])) { $_attr_ = $context["attr"]; } else { $_attr_ = null; }
        $context["attr"] = twig_array_merge($_attr_, array("class" => trim(((($this->getAttribute($_attr_, "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($_attr_, "class", array()), "")) : ("")) . " form-control-static"))));
        // line 543
        echo "    <p id=\"";
        if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
        echo twig_escape_filter($this->env, $_id_, "html", null, true);
        echo "\"";
        if (isset($context["attr"])) { $_attr_ = $context["attr"]; } else { $_attr_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_attr_);
        foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
            echo " ";
            if (isset($context["attrname"])) { $_attrname_ = $context["attrname"]; } else { $_attrname_ = null; }
            echo twig_escape_filter($this->env, $_attrname_, "html", null, true);
            echo "=\"";
            if (isset($context["attrvalue"])) { $_attrvalue_ = $context["attrvalue"]; } else { $_attrvalue_ = null; }
            echo twig_escape_filter($this->env, $_attrvalue_, "html", null, true);
            echo "\"";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo ">";
        if (isset($context["value"])) { $_value_ = $context["value"]; } else { $_value_ = null; }
        echo twig_escape_filter($this->env, $_value_, "html", null, true);
        echo "</p>
";
    }

    // line 548
    public function block_form_label($context, array $blocks = array())
    {
        // line 549
        echo "    ";
        ob_start();
        // line 550
        echo "        ";
        if (isset($context["col_size"])) { $_col_size_ = $context["col_size"]; } else { $_col_size_ = null; }
        $context["col_size"] = ((array_key_exists("col_size", $context)) ? (_twig_default_filter($_col_size_, $this->env->getExtension('braincrafted_bootstrap_form')->getColSize())) : ($this->env->getExtension('braincrafted_bootstrap_form')->getColSize()));
        // line 551
        echo "
        ";
        // line 552
        if (isset($context["attr"])) { $_attr_ = $context["attr"]; } else { $_attr_ = null; }
        if (($this->getAttribute($_attr_, "label_col", array(), "any", true, true) &&  !twig_test_empty($this->getAttribute($_attr_, "label_col", array())))) {
            // line 553
            echo "            ";
            if (isset($context["attr"])) { $_attr_ = $context["attr"]; } else { $_attr_ = null; }
            $context["label_col"] = $this->getAttribute($_attr_, "label_col", array());
            // line 554
            echo "        ";
        }
        // line 555
        echo "        ";
        if (isset($context["attr"])) { $_attr_ = $context["attr"]; } else { $_attr_ = null; }
        if (($this->getAttribute($_attr_, "widget_col", array(), "any", true, true) &&  !twig_test_empty($this->getAttribute($_attr_, "widget_col", array())))) {
            // line 556
            echo "            ";
            if (isset($context["attr"])) { $_attr_ = $context["attr"]; } else { $_attr_ = null; }
            $context["widget_col"] = $this->getAttribute($_attr_, "widget_col", array());
            // line 557
            echo "        ";
        }
        // line 558
        echo "        ";
        if (isset($context["attr"])) { $_attr_ = $context["attr"]; } else { $_attr_ = null; }
        if (($this->getAttribute($_attr_, "col_size", array(), "any", true, true) &&  !twig_test_empty($this->getAttribute($_attr_, "col_size", array())))) {
            // line 559
            echo "            ";
            if (isset($context["attr"])) { $_attr_ = $context["attr"]; } else { $_attr_ = null; }
            $context["col_size"] = $this->getAttribute($_attr_, "col_size", array());
            // line 560
            echo "        ";
        }
        // line 561
        echo "
        ";
        // line 562
        if (isset($context["label"])) { $_label_ = $context["label"]; } else { $_label_ = null; }
        if ( !($_label_ === false)) {
            // line 563
            echo "            ";
            if (isset($context["style"])) { $_style_ = $context["style"]; } else { $_style_ = null; }
            $context["style"] = ((array_key_exists("style", $context)) ? (_twig_default_filter($_style_, $this->env->getExtension('braincrafted_bootstrap_form')->getStyle())) : ($this->env->getExtension('braincrafted_bootstrap_form')->getStyle()));
            // line 564
            echo "            ";
            if (isset($context["label_col"])) { $_label_col_ = $context["label_col"]; } else { $_label_col_ = null; }
            $context["label_col"] = ((array_key_exists("label_col", $context)) ? (_twig_default_filter($_label_col_, $this->env->getExtension('braincrafted_bootstrap_form')->getLabelCol())) : ($this->env->getExtension('braincrafted_bootstrap_form')->getLabelCol()));
            // line 565
            echo "
            ";
            // line 566
            if (isset($context["attr"])) { $_attr_ = $context["attr"]; } else { $_attr_ = null; }
            if (($this->getAttribute($_attr_, "style", array(), "any", true, true) &&  !twig_test_empty($this->getAttribute($_attr_, "style", array())))) {
                // line 567
                echo "                ";
                if (isset($context["attr"])) { $_attr_ = $context["attr"]; } else { $_attr_ = null; }
                $context["style"] = $this->getAttribute($_attr_, "style", array());
                // line 568
                echo "            ";
            }
            // line 569
            echo "
            ";
            // line 570
            if (isset($context["label_attr"])) { $_label_attr_ = $context["label_attr"]; } else { $_label_attr_ = null; }
            $context["label_attr"] = twig_array_merge($_label_attr_, array("class" => trim(((($this->getAttribute($_label_attr_, "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($_label_attr_, "class", array()), "")) : ("")) . " control-label"))));
            // line 571
            echo "            ";
            if (isset($context["style"])) { $_style_ = $context["style"]; } else { $_style_ = null; }
            if (($_style_ == "horizontal")) {
                // line 572
                echo "                ";
                if (isset($context["label_attr"])) { $_label_attr_ = $context["label_attr"]; } else { $_label_attr_ = null; }
                if (isset($context["col_size"])) { $_col_size_ = $context["col_size"]; } else { $_col_size_ = null; }
                if (isset($context["label_col"])) { $_label_col_ = $context["label_col"]; } else { $_label_col_ = null; }
                $context["label_attr"] = twig_array_merge($_label_attr_, array("class" => trim((((((($this->getAttribute($_label_attr_, "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($_label_attr_, "class", array()), "")) : ("")) . " col-") . $_col_size_) . "-") . $_label_col_))));
                // line 573
                echo "            ";
            } elseif (($_style_ == "inline")) {
                // line 574
                echo "                ";
                if (isset($context["label_attr"])) { $_label_attr_ = $context["label_attr"]; } else { $_label_attr_ = null; }
                $context["label_attr"] = twig_array_merge($_label_attr_, array("class" => trim(((($this->getAttribute($_label_attr_, "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($_label_attr_, "class", array()), "")) : ("")) . " sr-only"))));
                // line 575
                echo "            ";
            }
            // line 576
            echo "
            ";
            // line 577
            if (isset($context["compound"])) { $_compound_ = $context["compound"]; } else { $_compound_ = null; }
            if ( !$_compound_) {
                // line 578
                echo "                ";
                if (isset($context["label_attr"])) { $_label_attr_ = $context["label_attr"]; } else { $_label_attr_ = null; }
                if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
                $context["label_attr"] = twig_array_merge($_label_attr_, array("for" => $_id_));
                // line 579
                echo "            ";
            }
            // line 580
            echo "            ";
            if (isset($context["required"])) { $_required_ = $context["required"]; } else { $_required_ = null; }
            if ($_required_) {
                // line 581
                echo "                ";
                if (isset($context["label_attr"])) { $_label_attr_ = $context["label_attr"]; } else { $_label_attr_ = null; }
                $context["label_attr"] = twig_array_merge($_label_attr_, array("class" => trim(((($this->getAttribute($_label_attr_, "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($_label_attr_, "class", array()), "")) : ("")) . " required"))));
                // line 582
                echo "            ";
            }
            // line 583
            echo "            ";
            if (isset($context["label"])) { $_label_ = $context["label"]; } else { $_label_ = null; }
            if (twig_test_empty($_label_)) {
                // line 584
                echo "                ";
                if (isset($context["name"])) { $_name_ = $context["name"]; } else { $_name_ = null; }
                $context["label"] = $this->env->getExtension('form')->humanize($_name_);
                // line 585
                echo "            ";
            }
            // line 586
            echo "            <label";
            if (isset($context["label_attr"])) { $_label_attr_ = $context["label_attr"]; } else { $_label_attr_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($_label_attr_);
            foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
                echo " ";
                if (isset($context["attrname"])) { $_attrname_ = $context["attrname"]; } else { $_attrname_ = null; }
                echo twig_escape_filter($this->env, $_attrname_, "html", null, true);
                echo "=\"";
                if (isset($context["attrvalue"])) { $_attrvalue_ = $context["attrvalue"]; } else { $_attrvalue_ = null; }
                echo twig_escape_filter($this->env, $_attrvalue_, "html", null, true);
                echo "\"";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo ">";
            if (isset($context["label"])) { $_label_ = $context["label"]; } else { $_label_ = null; }
            if (isset($context["translation_domain"])) { $_translation_domain_ = $context["translation_domain"]; } else { $_translation_domain_ = null; }
            echo $this->env->getExtension('translator')->trans($_label_, array(), $_translation_domain_);
            echo "</label>
        ";
        }
        // line 588
        echo "    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 591
    public function block_button_label($context, array $blocks = array())
    {
    }

    // line 595
    public function block_repeated_row($context, array $blocks = array())
    {
        // line 596
        echo "    ";
        ob_start();
        // line 597
        echo "        ";
        // line 601
        echo "        ";
        $this->displayBlock("form_rows", $context, $blocks);
        echo "
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 605
    public function block_form_row($context, array $blocks = array())
    {
        // line 606
        echo "    ";
        ob_start();
        // line 607
        echo "        ";
        if (isset($context["style"])) { $_style_ = $context["style"]; } else { $_style_ = null; }
        $context["style"] = ((array_key_exists("style", $context)) ? (_twig_default_filter($_style_, $this->env->getExtension('braincrafted_bootstrap_form')->getStyle())) : ($this->env->getExtension('braincrafted_bootstrap_form')->getStyle()));
        // line 608
        echo "        ";
        if (isset($context["col_size"])) { $_col_size_ = $context["col_size"]; } else { $_col_size_ = null; }
        $context["col_size"] = ((array_key_exists("col_size", $context)) ? (_twig_default_filter($_col_size_, $this->env->getExtension('braincrafted_bootstrap_form')->getColSize())) : ($this->env->getExtension('braincrafted_bootstrap_form')->getColSize()));
        // line 609
        echo "
        ";
        // line 610
        if (isset($context["attr"])) { $_attr_ = $context["attr"]; } else { $_attr_ = null; }
        if (($this->getAttribute($_attr_, "label_col", array(), "any", true, true) &&  !twig_test_empty($this->getAttribute($_attr_, "label_col", array())))) {
            // line 611
            echo "            ";
            if (isset($context["attr"])) { $_attr_ = $context["attr"]; } else { $_attr_ = null; }
            $context["label_col"] = $this->getAttribute($_attr_, "label_col", array());
            // line 612
            echo "        ";
        }
        // line 613
        echo "        ";
        if (isset($context["attr"])) { $_attr_ = $context["attr"]; } else { $_attr_ = null; }
        if (($this->getAttribute($_attr_, "widget_col", array(), "any", true, true) &&  !twig_test_empty($this->getAttribute($_attr_, "widget_col", array())))) {
            // line 614
            echo "            ";
            if (isset($context["attr"])) { $_attr_ = $context["attr"]; } else { $_attr_ = null; }
            $context["widget_col"] = $this->getAttribute($_attr_, "widget_col", array());
            // line 615
            echo "            ";
            if (isset($context["label"])) { $_label_ = $context["label"]; } else { $_label_ = null; }
            if ((($_label_ === false) && array_key_exists("label_col", $context))) {
                // line 616
                echo "                ";
                if (isset($context["widget_col"])) { $_widget_col_ = $context["widget_col"]; } else { $_widget_col_ = null; }
                if (isset($context["label_col"])) { $_label_col_ = $context["label_col"]; } else { $_label_col_ = null; }
                $context["widget_col"] = ($_widget_col_ + $_label_col_);
                // line 617
                echo "            ";
            }
            // line 618
            echo "        ";
        }
        // line 619
        echo "        ";
        if (isset($context["attr"])) { $_attr_ = $context["attr"]; } else { $_attr_ = null; }
        if (($this->getAttribute($_attr_, "col_size", array(), "any", true, true) &&  !twig_test_empty($this->getAttribute($_attr_, "col_size", array())))) {
            // line 620
            echo "            ";
            if (isset($context["attr"])) { $_attr_ = $context["attr"]; } else { $_attr_ = null; }
            $context["col_size"] = $this->getAttribute($_attr_, "col_size", array());
            // line 621
            echo "        ";
        }
        // line 622
        echo "        ";
        if (isset($context["attr"])) { $_attr_ = $context["attr"]; } else { $_attr_ = null; }
        if (($this->getAttribute($_attr_, "style", array(), "any", true, true) &&  !twig_test_empty($this->getAttribute($_attr_, "style", array())))) {
            // line 623
            echo "            ";
            if (isset($context["attr"])) { $_attr_ = $context["attr"]; } else { $_attr_ = null; }
            $context["style"] = $this->getAttribute($_attr_, "style", array());
            // line 624
            echo "        ";
        }
        // line 625
        echo "
        ";
        // line 626
        if (isset($context["label_col"])) { $_label_col_ = $context["label_col"]; } else { $_label_col_ = null; }
        $context["label_col"] = ((array_key_exists("label_col", $context)) ? (_twig_default_filter($_label_col_, $this->env->getExtension('braincrafted_bootstrap_form')->getLabelCol())) : ($this->env->getExtension('braincrafted_bootstrap_form')->getLabelCol()));
        // line 627
        echo "        ";
        if (isset($context["widget_col"])) { $_widget_col_ = $context["widget_col"]; } else { $_widget_col_ = null; }
        $context["widget_col"] = ((array_key_exists("widget_col", $context)) ? (_twig_default_filter($_widget_col_, $this->env->getExtension('braincrafted_bootstrap_form')->getWidgetCol())) : ($this->env->getExtension('braincrafted_bootstrap_form')->getWidgetCol()));
        // line 628
        echo "
        <div class=\"form-group";
        // line 629
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute($_form_, "vars", array()), "errors", array())) > 0)) {
            echo " has-error";
        }
        echo "\">
            ";
        // line 630
        if (isset($context["style"])) { $_style_ = $context["style"]; } else { $_style_ = null; }
        if (($_style_ == "horizontal")) {
            // line 631
            echo "                ";
            if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($_form_, 'label');
            echo "
                <div class=\"col-";
            // line 632
            if (isset($context["col_size"])) { $_col_size_ = $context["col_size"]; } else { $_col_size_ = null; }
            echo twig_escape_filter($this->env, $_col_size_, "html", null, true);
            echo "-";
            if (isset($context["widget_col"])) { $_widget_col_ = $context["widget_col"]; } else { $_widget_col_ = null; }
            echo twig_escape_filter($this->env, $_widget_col_, "html", null, true);
            echo "\">
                    ";
            // line 633
            $this->displayBlock("form_input_group", $context, $blocks);
            echo "
                    ";
            // line 634
            $this->displayBlock("form_help", $context, $blocks);
            echo "
                    ";
            // line 635
            if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($_form_, 'errors');
            echo "
                </div>
            ";
        } else {
            // line 638
            echo "                ";
            if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($_form_, 'label');
            echo "
                ";
            // line 639
            $this->displayBlock("form_input_group", $context, $blocks);
            echo "
                ";
            // line 640
            $this->displayBlock("form_help", $context, $blocks);
            echo "
                ";
            // line 641
            if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($_form_, 'errors');
            echo "
            ";
        }
        // line 643
        echo "        </div>

        ";
        // line 645
        if (isset($context["style"])) { $_style_ = $context["style"]; } else { $_style_ = null; }
        if (($_style_ == "inline")) {
            echo "&nbsp;";
        }
        // line 646
        echo "    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 649
    public function block_form_input_group($context, array $blocks = array())
    {
        // line 650
        echo "    ";
        ob_start();
        // line 651
        echo "        ";
        if (isset($context["attr"])) { $_attr_ = $context["attr"]; } else { $_attr_ = null; }
        if (($this->getAttribute($_attr_, "input_group", array(), "any", true, true) &&  !twig_test_empty($this->getAttribute($_attr_, "input_group", array())))) {
            // line 652
            echo "            ";
            if (isset($context["attr"])) { $_attr_ = $context["attr"]; } else { $_attr_ = null; }
            $context["input_group"] = $this->getAttribute($_attr_, "input_group", array());
            // line 653
            echo "        ";
        }
        // line 654
        echo "        ";
        if (isset($context["input_group"])) { $_input_group_ = $context["input_group"]; } else { $_input_group_ = null; }
        $context["input_group"] = ((array_key_exists("input_group", $context)) ? (_twig_default_filter($_input_group_, array())) : (array()));
        // line 655
        echo "        ";
        if (isset($context["input_group"])) { $_input_group_ = $context["input_group"]; } else { $_input_group_ = null; }
        if ( !twig_test_empty($_input_group_)) {
            // line 656
            echo "            ";
            $context["ig_size_class"] = "";
            // line 657
            echo "            ";
            if (isset($context["input_group"])) { $_input_group_ = $context["input_group"]; } else { $_input_group_ = null; }
            if (($this->getAttribute($_input_group_, "size", array(), "any", true, true) && ($this->getAttribute($_input_group_, "size", array()) == "large"))) {
                // line 658
                echo "                ";
                $context["ig_size_class"] = " input-group-lg";
                // line 659
                echo "            ";
            }
            // line 660
            echo "            ";
            if (isset($context["input_group"])) { $_input_group_ = $context["input_group"]; } else { $_input_group_ = null; }
            if (($this->getAttribute($_input_group_, "size", array(), "any", true, true) && ($this->getAttribute($_input_group_, "size", array()) == "small"))) {
                // line 661
                echo "                ";
                $context["ig_size_class"] = " input-group-sm";
                // line 662
                echo "            ";
            }
            // line 663
            echo "            <div class=\"input-group";
            if (isset($context["ig_size_class"])) { $_ig_size_class_ = $context["ig_size_class"]; } else { $_ig_size_class_ = null; }
            echo twig_escape_filter($this->env, $_ig_size_class_, "html", null, true);
            echo "\">
                ";
            // line 664
            if (isset($context["input_group"])) { $_input_group_ = $context["input_group"]; } else { $_input_group_ = null; }
            if (($this->getAttribute($_input_group_, "prepend", array(), "any", true, true) &&  !twig_test_empty($this->getAttribute($_input_group_, "prepend", array())))) {
                // line 665
                echo "                    <span class=\"input-group-addon\">";
                if (isset($context["input_group"])) { $_input_group_ = $context["input_group"]; } else { $_input_group_ = null; }
                echo $this->env->getExtension('braincrafted_bootstrap_icon')->parseIconsFilter($this->getAttribute($_input_group_, "prepend", array()));
                echo "</span>
                ";
            }
            // line 667
            echo "                ";
            if (isset($context["input_group"])) { $_input_group_ = $context["input_group"]; } else { $_input_group_ = null; }
            if (($this->getAttribute($_input_group_, "button_prepend", array(), "any", true, true) &&  !twig_test_empty($this->getAttribute($_input_group_, "button_prepend", array())))) {
                // line 668
                echo "                    <span class=\"input-group-btn\">";
                if (isset($context["input_group_button_prepend"])) { $_input_group_button_prepend_ = $context["input_group_button_prepend"]; } else { $_input_group_button_prepend_ = null; }
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($_input_group_button_prepend_, 'widget');
                echo "</span>
                ";
            }
            // line 670
            echo "                ";
            if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($_form_, 'widget');
            echo "
                ";
            // line 671
            if (isset($context["input_group"])) { $_input_group_ = $context["input_group"]; } else { $_input_group_ = null; }
            if (($this->getAttribute($_input_group_, "button_append", array(), "any", true, true) &&  !twig_test_empty($this->getAttribute($_input_group_, "button_append", array())))) {
                // line 672
                echo "                    <span class=\"input-group-btn\">";
                if (isset($context["input_group_button_append"])) { $_input_group_button_append_ = $context["input_group_button_append"]; } else { $_input_group_button_append_ = null; }
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($_input_group_button_append_, 'widget');
                echo "</span>
                ";
            }
            // line 674
            echo "                ";
            if (isset($context["input_group"])) { $_input_group_ = $context["input_group"]; } else { $_input_group_ = null; }
            if (($this->getAttribute($_input_group_, "append", array(), "any", true, true) &&  !twig_test_empty($this->getAttribute($_input_group_, "append", array())))) {
                // line 675
                echo "                    <span class=\"input-group-addon\">";
                if (isset($context["input_group"])) { $_input_group_ = $context["input_group"]; } else { $_input_group_ = null; }
                echo $this->env->getExtension('braincrafted_bootstrap_icon')->parseIconsFilter($this->getAttribute($_input_group_, "append", array()));
                echo "</span>
                ";
            }
            // line 677
            echo "            </div>
        ";
        } else {
            // line 679
            echo "            ";
            if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($_form_, 'widget');
            echo "
        ";
        }
        // line 681
        echo "    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 684
    public function block_form_help($context, array $blocks = array())
    {
        // line 685
        echo "    ";
        ob_start();
        // line 686
        echo "        ";
        if (isset($context["attr"])) { $_attr_ = $context["attr"]; } else { $_attr_ = null; }
        if (($this->getAttribute($_attr_, "help_text", array(), "any", true, true) &&  !twig_test_empty($this->getAttribute($_attr_, "help_text", array())))) {
            // line 687
            echo "            ";
            if (isset($context["attr"])) { $_attr_ = $context["attr"]; } else { $_attr_ = null; }
            $context["help_text"] = $this->getAttribute($_attr_, "help_text", array());
            // line 688
            echo "        ";
        }
        // line 689
        echo "        ";
        if (isset($context["help_text"])) { $_help_text_ = $context["help_text"]; } else { $_help_text_ = null; }
        $context["help_text"] = ((array_key_exists("help_text", $context)) ? (_twig_default_filter($_help_text_, "")) : (""));
        // line 690
        echo "        ";
        if (isset($context["help_text"])) { $_help_text_ = $context["help_text"]; } else { $_help_text_ = null; }
        if ( !twig_test_empty($_help_text_)) {
            // line 691
            echo "            <span class=\"help-block\">";
            if (isset($context["help_text"])) { $_help_text_ = $context["help_text"]; } else { $_help_text_ = null; }
            if (isset($context["translation_domain"])) { $_translation_domain_ = $context["translation_domain"]; } else { $_translation_domain_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($_help_text_, array(), $_translation_domain_), "html", null, true);
            echo "</span>
        ";
        }
        // line 693
        echo "    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 696
    public function block_button_row($context, array $blocks = array())
    {
        // line 697
        echo "    ";
        ob_start();
        // line 698
        echo "        ";
        if (isset($context["style"])) { $_style_ = $context["style"]; } else { $_style_ = null; }
        $context["style"] = ((array_key_exists("style", $context)) ? (_twig_default_filter($_style_, $this->env->getExtension('braincrafted_bootstrap_form')->getStyle())) : ($this->env->getExtension('braincrafted_bootstrap_form')->getStyle()));
        // line 699
        echo "        ";
        if (isset($context["col_size"])) { $_col_size_ = $context["col_size"]; } else { $_col_size_ = null; }
        $context["col_size"] = ((array_key_exists("col_size", $context)) ? (_twig_default_filter($_col_size_, $this->env->getExtension('braincrafted_bootstrap_form')->getColSize())) : ($this->env->getExtension('braincrafted_bootstrap_form')->getColSize()));
        // line 700
        echo "
        ";
        // line 701
        if (isset($context["attr"])) { $_attr_ = $context["attr"]; } else { $_attr_ = null; }
        if (($this->getAttribute($_attr_, "label_col", array(), "any", true, true) &&  !twig_test_empty($this->getAttribute($_attr_, "label_col", array())))) {
            // line 702
            echo "            ";
            if (isset($context["attr"])) { $_attr_ = $context["attr"]; } else { $_attr_ = null; }
            $context["label_col"] = $this->getAttribute($_attr_, "label_col", array());
            // line 703
            echo "        ";
        }
        // line 704
        echo "        ";
        if (isset($context["attr"])) { $_attr_ = $context["attr"]; } else { $_attr_ = null; }
        if (($this->getAttribute($_attr_, "widget_col", array(), "any", true, true) &&  !twig_test_empty($this->getAttribute($_attr_, "widget_col", array())))) {
            // line 705
            echo "            ";
            if (isset($context["attr"])) { $_attr_ = $context["attr"]; } else { $_attr_ = null; }
            $context["widget_col"] = $this->getAttribute($_attr_, "widget_col", array());
            // line 706
            echo "        ";
        }
        // line 707
        echo "        ";
        if (isset($context["attr"])) { $_attr_ = $context["attr"]; } else { $_attr_ = null; }
        if (($this->getAttribute($_attr_, "col_size", array(), "any", true, true) &&  !twig_test_empty($this->getAttribute($_attr_, "col_size", array())))) {
            // line 708
            echo "            ";
            if (isset($context["attr"])) { $_attr_ = $context["attr"]; } else { $_attr_ = null; }
            $context["col_size"] = $this->getAttribute($_attr_, "col_size", array());
            // line 709
            echo "        ";
        }
        // line 710
        echo "        ";
        if (isset($context["attr"])) { $_attr_ = $context["attr"]; } else { $_attr_ = null; }
        if (($this->getAttribute($_attr_, "style", array(), "any", true, true) &&  !twig_test_empty($this->getAttribute($_attr_, "style", array())))) {
            // line 711
            echo "            ";
            if (isset($context["attr"])) { $_attr_ = $context["attr"]; } else { $_attr_ = null; }
            $context["style"] = $this->getAttribute($_attr_, "style", array());
            // line 712
            echo "        ";
        }
        // line 713
        echo "
        ";
        // line 714
        if (isset($context["label_col"])) { $_label_col_ = $context["label_col"]; } else { $_label_col_ = null; }
        $context["label_col"] = ((array_key_exists("label_col", $context)) ? (_twig_default_filter($_label_col_, $this->env->getExtension('braincrafted_bootstrap_form')->getLabelCol())) : ($this->env->getExtension('braincrafted_bootstrap_form')->getLabelCol()));
        // line 715
        echo "        ";
        if (isset($context["widget_col"])) { $_widget_col_ = $context["widget_col"]; } else { $_widget_col_ = null; }
        $context["widget_col"] = ((array_key_exists("widget_col", $context)) ? (_twig_default_filter($_widget_col_, $this->env->getExtension('braincrafted_bootstrap_form')->getWidgetCol())) : ($this->env->getExtension('braincrafted_bootstrap_form')->getWidgetCol()));
        // line 716
        echo "
        ";
        // line 717
        if (isset($context["style"])) { $_style_ = $context["style"]; } else { $_style_ = null; }
        if (($_style_ == "horizontal")) {
            // line 718
            echo "            <div class=\"form-group\">
            <div class=\"col-";
            // line 719
            if (isset($context["col_size"])) { $_col_size_ = $context["col_size"]; } else { $_col_size_ = null; }
            echo twig_escape_filter($this->env, $_col_size_, "html", null, true);
            echo "-offset-";
            if (isset($context["label_col"])) { $_label_col_ = $context["label_col"]; } else { $_label_col_ = null; }
            echo twig_escape_filter($this->env, $_label_col_, "html", null, true);
            echo " col-";
            if (isset($context["col_size"])) { $_col_size_ = $context["col_size"]; } else { $_col_size_ = null; }
            echo twig_escape_filter($this->env, $_col_size_, "html", null, true);
            echo "-";
            if (isset($context["widget_col"])) { $_widget_col_ = $context["widget_col"]; } else { $_widget_col_ = null; }
            echo twig_escape_filter($this->env, $_widget_col_, "html", null, true);
            echo "\">
        ";
        }
        // line 721
        echo "
        ";
        // line 722
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($_form_, 'widget');
        echo "

        ";
        // line 724
        if (isset($context["style"])) { $_style_ = $context["style"]; } else { $_style_ = null; }
        if (($_style_ == "horizontal")) {
            // line 725
            echo "            </div>
            </div>
        ";
        }
        // line 728
        echo "    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 731
    public function block_hidden_row($context, array $blocks = array())
    {
        // line 732
        echo "    ";
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($_form_, 'widget');
        echo "
";
    }

    // line 735
    public function block_form_actions_row($context, array $blocks = array())
    {
        // line 736
        echo "    ";
        $this->displayBlock("button_row", $context, $blocks);
        echo "
";
    }

    // line 741
    public function block_form($context, array $blocks = array())
    {
        // line 742
        echo "    ";
        ob_start();
        // line 743
        echo "        ";
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo         $this->env->getExtension('form')->renderer->renderBlock($_form_, 'form_start');
        echo "
        ";
        // line 744
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($_form_, 'widget');
        echo "
        ";
        // line 745
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo         $this->env->getExtension('form')->renderer->renderBlock($_form_, 'form_end');
        echo "
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 749
    public function block_form_start($context, array $blocks = array())
    {
        // line 750
        echo "    ";
        ob_start();
        // line 751
        echo "        ";
        if (isset($context["method"])) { $_method_ = $context["method"]; } else { $_method_ = null; }
        $context["method"] = twig_upper_filter($this->env, $_method_);
        // line 752
        echo "        ";
        if (isset($context["method"])) { $_method_ = $context["method"]; } else { $_method_ = null; }
        if (twig_in_filter($_method_, array(0 => "GET", 1 => "POST"))) {
            // line 753
            echo "            ";
            if (isset($context["method"])) { $_method_ = $context["method"]; } else { $_method_ = null; }
            $context["form_method"] = $_method_;
            // line 754
            echo "        ";
        } else {
            // line 755
            echo "            ";
            $context["form_method"] = "POST";
            // line 756
            echo "        ";
        }
        // line 757
        echo "
        ";
        // line 758
        if (array_key_exists("style", $context)) {
            // line 759
            echo "            ";
            if (isset($context["attr"])) { $_attr_ = $context["attr"]; } else { $_attr_ = null; }
            if (isset($context["style"])) { $_style_ = $context["style"]; } else { $_style_ = null; }
            $context["attr"] = twig_array_merge($_attr_, array("class" => trim((((($this->getAttribute($_attr_, "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($_attr_, "class", array()), "")) : ("")) . " form-") . $_style_))));
            // line 760
            echo "            ";
            if (isset($context["style"])) { $_style_ = $context["style"]; } else { $_style_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('braincrafted_bootstrap_form')->setStyle($_style_), "html", null, true);
            echo "
        ";
        }
        // line 762
        echo "
        ";
        // line 763
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute($_form_, "vars", array()), "errors", array())) > 0)) {
            // line 764
            echo "            ";
            if (isset($context["attr"])) { $_attr_ = $context["attr"]; } else { $_attr_ = null; }
            $context["attr"] = twig_array_merge($_attr_, array("class" => trim(((($this->getAttribute($_attr_, "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($_attr_, "class", array()), "")) : ("")) . " has-global-errors"))));
            // line 765
            echo "        ";
        }
        // line 766
        echo "
        ";
        // line 767
        if (array_key_exists("col_size", $context)) {
            // line 768
            echo "            ";
            if (isset($context["col_size"])) { $_col_size_ = $context["col_size"]; } else { $_col_size_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('braincrafted_bootstrap_form')->setColSize($_col_size_), "html", null, true);
            echo "
        ";
        }
        // line 770
        echo "
        ";
        // line 771
        if (array_key_exists("widget_col", $context)) {
            // line 772
            echo "            ";
            if (isset($context["widget_col"])) { $_widget_col_ = $context["widget_col"]; } else { $_widget_col_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('braincrafted_bootstrap_form')->setWidgetCol($_widget_col_), "html", null, true);
            echo "
        ";
        }
        // line 774
        echo "
        ";
        // line 775
        if (array_key_exists("label_col", $context)) {
            // line 776
            echo "            ";
            if (isset($context["label_col"])) { $_label_col_ = $context["label_col"]; } else { $_label_col_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('braincrafted_bootstrap_form')->setLabelCol($_label_col_), "html", null, true);
            echo "
        ";
        }
        // line 778
        echo "
        ";
        // line 779
        if (array_key_exists("simple_col", $context)) {
            // line 780
            echo "            ";
            if (isset($context["simple_col"])) { $_simple_col_ = $context["simple_col"]; } else { $_simple_col_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('braincrafted_bootstrap_form')->setSimpleCol($_simple_col_), "html", null, true);
            echo "
        ";
        }
        // line 782
        echo "
        ";
        // line 783
        if (isset($context["attr"])) { $_attr_ = $context["attr"]; } else { $_attr_ = null; }
        if (( !$this->getAttribute($_attr_, "role", array(), "any", true, true) || twig_test_empty($this->getAttribute($_attr_, "role", array())))) {
            // line 784
            echo "            ";
            if (isset($context["attr"])) { $_attr_ = $context["attr"]; } else { $_attr_ = null; }
            $context["attr"] = twig_array_merge($_attr_, array("role" => "form"));
            // line 785
            echo "        ";
        }
        // line 786
        echo "
        <form  name=\"";
        // line 787
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_form_, "vars", array()), "name", array()), "html", null, true);
        echo "\" method=\"";
        if (isset($context["form_method"])) { $_form_method_ = $context["form_method"]; } else { $_form_method_ = null; }
        echo twig_escape_filter($this->env, twig_lower_filter($this->env, $_form_method_), "html", null, true);
        echo "\" action=\"";
        if (isset($context["action"])) { $_action_ = $context["action"]; } else { $_action_ = null; }
        echo twig_escape_filter($this->env, $_action_, "html", null, true);
        echo "\"";
        if (isset($context["attr"])) { $_attr_ = $context["attr"]; } else { $_attr_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_attr_);
        foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
            echo " ";
            if (isset($context["attrname"])) { $_attrname_ = $context["attrname"]; } else { $_attrname_ = null; }
            echo twig_escape_filter($this->env, $_attrname_, "html", null, true);
            echo "=\"";
            if (isset($context["attrvalue"])) { $_attrvalue_ = $context["attrvalue"]; } else { $_attrvalue_ = null; }
            echo twig_escape_filter($this->env, $_attrvalue_, "html", null, true);
            echo "\"";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        if (isset($context["multipart"])) { $_multipart_ = $context["multipart"]; } else { $_multipart_ = null; }
        if ($_multipart_) {
            echo " enctype=\"multipart/form-data\"";
        }
        echo ">
        ";
        // line 788
        if (isset($context["form_method"])) { $_form_method_ = $context["form_method"]; } else { $_form_method_ = null; }
        if (isset($context["method"])) { $_method_ = $context["method"]; } else { $_method_ = null; }
        if (($_form_method_ != $_method_)) {
            // line 789
            echo "            <input type=\"hidden\" name=\"_method\" value=\"";
            if (isset($context["method"])) { $_method_ = $context["method"]; } else { $_method_ = null; }
            echo twig_escape_filter($this->env, $_method_, "html", null, true);
            echo "\" />
        ";
        }
        // line 791
        echo "    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 794
    public function block_form_end($context, array $blocks = array())
    {
        // line 795
        echo "    ";
        ob_start();
        // line 796
        echo "        ";
        if (isset($context["render_rest"])) { $_render_rest_ = $context["render_rest"]; } else { $_render_rest_ = null; }
        if (( !array_key_exists("render_rest", $context) || $_render_rest_)) {
            // line 797
            echo "            ";
            if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($_form_, 'rest');
            echo "
        ";
        }
        // line 799
        echo "        </form>
        ";
        // line 800
        if ($this->env->getExtension('braincrafted_bootstrap_form')->getStyle()) {
            // line 801
            echo "            ";
            echo twig_escape_filter($this->env, $this->env->getExtension('braincrafted_bootstrap_form')->setStyle(""), "html", null, true);
            echo "
        ";
        }
        // line 803
        echo "        ";
        if ($this->env->getExtension('braincrafted_bootstrap_form')->getColSize()) {
            // line 804
            echo "            ";
            echo twig_escape_filter($this->env, $this->env->getExtension('braincrafted_bootstrap_form')->setColSize("lg"), "html", null, true);
            echo "
        ";
        }
        // line 806
        echo "        ";
        if ($this->env->getExtension('braincrafted_bootstrap_form')->getWidgetCol()) {
            // line 807
            echo "            ";
            echo twig_escape_filter($this->env, $this->env->getExtension('braincrafted_bootstrap_form')->setWidgetCol(10), "html", null, true);
            echo "
        ";
        }
        // line 809
        echo "        ";
        if ($this->env->getExtension('braincrafted_bootstrap_form')->getLabelCol()) {
            // line 810
            echo "            ";
            echo twig_escape_filter($this->env, $this->env->getExtension('braincrafted_bootstrap_form')->setLabelCol(2), "html", null, true);
            echo "
        ";
        }
        // line 812
        echo "        ";
        if ($this->env->getExtension('braincrafted_bootstrap_form')->getSimpleCol()) {
            // line 813
            echo "            ";
            echo twig_escape_filter($this->env, $this->env->getExtension('braincrafted_bootstrap_form')->setSimpleCol(false), "html", null, true);
            echo "
        ";
        }
        // line 815
        echo "    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 818
    public function block_form_enctype($context, array $blocks = array())
    {
        // line 819
        echo "    ";
        ob_start();
        // line 820
        echo "        ";
        if (isset($context["multipart"])) { $_multipart_ = $context["multipart"]; } else { $_multipart_ = null; }
        if ($_multipart_) {
            echo "enctype=\"multipart/form-data\"";
        }
        // line 821
        echo "    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 824
    public function block_global_form_errors($context, array $blocks = array())
    {
        // line 825
        echo "    ";
        if (isset($context["errors"])) { $_errors_ = $context["errors"]; } else { $_errors_ = null; }
        if ((twig_length_filter($this->env, $_errors_) > 0)) {
            // line 826
            echo "        ";
            $context["global_errors"] = true;
            // line 827
            echo "        ";
            $this->displayBlock("form_errors", $context, $blocks);
            echo "
    ";
        }
    }

    // line 831
    public function block_form_errors($context, array $blocks = array())
    {
        // line 832
        echo "    ";
        ob_start();
        // line 833
        echo "        ";
        if (isset($context["global_errors"])) { $_global_errors_ = $context["global_errors"]; } else { $_global_errors_ = null; }
        $context["global_errors"] = ((array_key_exists("global_errors", $context)) ? (_twig_default_filter($_global_errors_, false)) : (false));
        // line 834
        echo "        ";
        if (isset($context["style"])) { $_style_ = $context["style"]; } else { $_style_ = null; }
        $context["style"] = ((array_key_exists("style", $context)) ? (_twig_default_filter($_style_, $this->env->getExtension('braincrafted_bootstrap_form')->getStyle())) : ($this->env->getExtension('braincrafted_bootstrap_form')->getStyle()));
        // line 835
        echo "
        ";
        // line 836
        if (isset($context["attr"])) { $_attr_ = $context["attr"]; } else { $_attr_ = null; }
        if (($this->getAttribute($_attr_, "style", array(), "any", true, true) &&  !twig_test_empty($this->getAttribute($_attr_, "style", array())))) {
            // line 837
            echo "            ";
            if (isset($context["attr"])) { $_attr_ = $context["attr"]; } else { $_attr_ = null; }
            $context["style"] = $this->getAttribute($_attr_, "style", array());
            // line 838
            echo "        ";
        }
        // line 839
        echo "
        ";
        // line 840
        if (isset($context["errors"])) { $_errors_ = $context["errors"]; } else { $_errors_ = null; }
        if ((twig_length_filter($this->env, $_errors_) > 0)) {
            // line 841
            echo "            ";
            if (isset($context["global_errors"])) { $_global_errors_ = $context["global_errors"]; } else { $_global_errors_ = null; }
            if ($_global_errors_) {
                // line 842
                echo "                <div class=\"alert alert-danger\">
            ";
            }
            // line 844
            echo "            <ul";
            if (isset($context["global_errors"])) { $_global_errors_ = $context["global_errors"]; } else { $_global_errors_ = null; }
            if ( !$_global_errors_) {
                echo " class=\"help-block\"";
            }
            echo ">
                ";
            // line 845
            if (isset($context["errors"])) { $_errors_ = $context["errors"]; } else { $_errors_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($_errors_);
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 846
                echo "                    <li>";
                if (isset($context["error"])) { $_error_ = $context["error"]; } else { $_error_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_error_, "message", array()), "html", null, true);
                echo "</li>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 848
            echo "            </ul>
            ";
            // line 849
            if (isset($context["global_errors"])) { $_global_errors_ = $context["global_errors"]; } else { $_global_errors_ = null; }
            if (($_global_errors_ == true)) {
                // line 850
                echo "                </div>
            ";
            }
            // line 852
            echo "        ";
        }
        // line 853
        echo "    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 856
    public function block_form_rest($context, array $blocks = array())
    {
        // line 857
        echo "    ";
        ob_start();
        // line 858
        echo "        ";
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_form_);
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 859
            echo "            ";
            if (isset($context["child"])) { $_child_ = $context["child"]; } else { $_child_ = null; }
            if ( !$this->getAttribute($_child_, "rendered", array())) {
                // line 860
                echo "                ";
                if (isset($context["child"])) { $_child_ = $context["child"]; } else { $_child_ = null; }
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($_child_, 'row');
                echo "
            ";
            }
            // line 862
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 863
        echo "    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 868
    public function block_form_rows($context, array $blocks = array())
    {
        // line 869
        echo "    ";
        ob_start();
        // line 870
        echo "        ";
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_form_);
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 871
            echo "            ";
            $context["childAttr"] = array();
            // line 872
            echo "            ";
            if (isset($context["attr"])) { $_attr_ = $context["attr"]; } else { $_attr_ = null; }
            if ($this->getAttribute($_attr_, "col_size", array(), "any", true, true)) {
                // line 873
                echo "                ";
                if (isset($context["childAttr"])) { $_childAttr_ = $context["childAttr"]; } else { $_childAttr_ = null; }
                if (isset($context["attr"])) { $_attr_ = $context["attr"]; } else { $_attr_ = null; }
                $context["childAttr"] = twig_array_merge($_childAttr_, array("col_size" => $this->getAttribute($_attr_, "col_size", array())));
                // line 874
                echo "            ";
            }
            // line 875
            echo "            ";
            if (isset($context["attr"])) { $_attr_ = $context["attr"]; } else { $_attr_ = null; }
            if ($this->getAttribute($_attr_, "widget_col", array(), "any", true, true)) {
                // line 876
                echo "                ";
                if (isset($context["childAttr"])) { $_childAttr_ = $context["childAttr"]; } else { $_childAttr_ = null; }
                if (isset($context["attr"])) { $_attr_ = $context["attr"]; } else { $_attr_ = null; }
                $context["childAttr"] = twig_array_merge($_childAttr_, array("widget_col" => $this->getAttribute($_attr_, "widget_col", array())));
                // line 877
                echo "            ";
            }
            // line 878
            echo "            ";
            if (isset($context["attr"])) { $_attr_ = $context["attr"]; } else { $_attr_ = null; }
            if ($this->getAttribute($_attr_, "label_col", array(), "any", true, true)) {
                // line 879
                echo "                ";
                if (isset($context["childAttr"])) { $_childAttr_ = $context["childAttr"]; } else { $_childAttr_ = null; }
                if (isset($context["attr"])) { $_attr_ = $context["attr"]; } else { $_attr_ = null; }
                $context["childAttr"] = twig_array_merge($_childAttr_, array("label_col" => $this->getAttribute($_attr_, "label_col", array())));
                // line 880
                echo "            ";
            }
            // line 881
            echo "            ";
            if (isset($context["attr"])) { $_attr_ = $context["attr"]; } else { $_attr_ = null; }
            if ($this->getAttribute($_attr_, "simple_col", array(), "any", true, true)) {
                // line 882
                echo "                ";
                if (isset($context["childAttr"])) { $_childAttr_ = $context["childAttr"]; } else { $_childAttr_ = null; }
                if (isset($context["attr"])) { $_attr_ = $context["attr"]; } else { $_attr_ = null; }
                $context["childAttr"] = twig_array_merge($_childAttr_, array("simple_col" => $this->getAttribute($_attr_, "simple_col", array())));
                // line 883
                echo "            ";
            }
            // line 884
            echo "            ";
            if (isset($context["attr"])) { $_attr_ = $context["attr"]; } else { $_attr_ = null; }
            if ($this->getAttribute($_attr_, "style", array(), "any", true, true)) {
                // line 885
                echo "                ";
                if (isset($context["childAttr"])) { $_childAttr_ = $context["childAttr"]; } else { $_childAttr_ = null; }
                if (isset($context["attr"])) { $_attr_ = $context["attr"]; } else { $_attr_ = null; }
                $context["childAttr"] = twig_array_merge($_childAttr_, array("style" => $this->getAttribute($_attr_, "style", array())));
                // line 886
                echo "            ";
            }
            // line 887
            echo "            ";
            if (isset($context["child"])) { $_child_ = $context["child"]; } else { $_child_ = null; }
            if (isset($context["childAttr"])) { $_childAttr_ = $context["childAttr"]; } else { $_childAttr_ = null; }
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($_child_, 'row', $_childAttr_);
            echo "
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 889
        echo "    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 892
    public function block_widget_attributes($context, array $blocks = array())
    {
        // line 893
        echo "    ";
        ob_start();
        // line 894
        echo "        id=\"";
        if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
        echo twig_escape_filter($this->env, $_id_, "html", null, true);
        echo "\" name=\"";
        if (isset($context["full_name"])) { $_full_name_ = $context["full_name"]; } else { $_full_name_ = null; }
        echo twig_escape_filter($this->env, $_full_name_, "html", null, true);
        echo "\"";
        if (isset($context["read_only"])) { $_read_only_ = $context["read_only"]; } else { $_read_only_ = null; }
        if ($_read_only_) {
            echo " readonly=\"readonly\"";
        }
        if (isset($context["disabled"])) { $_disabled_ = $context["disabled"]; } else { $_disabled_ = null; }
        if ($_disabled_) {
            echo " disabled=\"disabled\"";
        }
        if (isset($context["required"])) { $_required_ = $context["required"]; } else { $_required_ = null; }
        if ($_required_) {
            echo " required=\"required\"";
        }
        if (isset($context["max_length"])) { $_max_length_ = $context["max_length"]; } else { $_max_length_ = null; }
        if ($_max_length_) {
            echo " maxlength=\"";
            if (isset($context["max_length"])) { $_max_length_ = $context["max_length"]; } else { $_max_length_ = null; }
            echo twig_escape_filter($this->env, $_max_length_, "html", null, true);
            echo "\"";
        }
        if (isset($context["pattern"])) { $_pattern_ = $context["pattern"]; } else { $_pattern_ = null; }
        if ($_pattern_) {
            echo " pattern=\"";
            if (isset($context["pattern"])) { $_pattern_ = $context["pattern"]; } else { $_pattern_ = null; }
            echo twig_escape_filter($this->env, $_pattern_, "html", null, true);
            echo "\"";
        }
        // line 895
        echo "        ";
        if (isset($context["attr"])) { $_attr_ = $context["attr"]; } else { $_attr_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_attr_);
        foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
            if (isset($context["attrname"])) { $_attrname_ = $context["attrname"]; } else { $_attrname_ = null; }
            if (twig_in_filter($_attrname_, array(0 => "placeholder", 1 => "title"))) {
                if (isset($context["attrname"])) { $_attrname_ = $context["attrname"]; } else { $_attrname_ = null; }
                echo twig_escape_filter($this->env, $_attrname_, "html", null, true);
                echo "=\"";
                if (isset($context["attrvalue"])) { $_attrvalue_ = $context["attrvalue"]; } else { $_attrvalue_ = null; }
                if (isset($context["translation_domain"])) { $_translation_domain_ = $context["translation_domain"]; } else { $_translation_domain_ = null; }
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($_attrvalue_, array(), $_translation_domain_), "html", null, true);
                echo "\" ";
            } elseif (twig_in_filter($_attrname_, array(0 => "input_group"))) {
            } else {
                if (isset($context["attrname"])) { $_attrname_ = $context["attrname"]; } else { $_attrname_ = null; }
                echo twig_escape_filter($this->env, $_attrname_, "html", null, true);
                echo "=\"";
                if (isset($context["attrvalue"])) { $_attrvalue_ = $context["attrvalue"]; } else { $_attrvalue_ = null; }
                echo twig_escape_filter($this->env, $_attrvalue_, "html", null, true);
                echo "\" ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 896
        echo "    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 899
    public function block_widget_container_attributes($context, array $blocks = array())
    {
        // line 900
        echo "    ";
        ob_start();
        // line 901
        echo "        ";
        if (isset($context["attr"])) { $_attr_ = $context["attr"]; } else { $_attr_ = null; }
        if (($this->getAttribute($_attr_, "style", array(), "any", true, true) && (($this->getAttribute($_attr_, "style", array()) == "inline") || ($this->getAttribute($_attr_, "style", array()) == "horizontal")))) {
            // line 902
            echo "            ";
            if (isset($context["attr"])) { $_attr_ = $context["attr"]; } else { $_attr_ = null; }
            $context["attr"] = twig_array_merge($_attr_, array("class" => trim(((("form-" . $this->getAttribute($_attr_, "style", array())) . " ") . (($this->getAttribute($_attr_, "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($_attr_, "class", array()), "")) : (""))))));
            // line 903
            echo "            ";
            if (isset($context["attr"])) { $_attr_ = $context["attr"]; } else { $_attr_ = null; }
            $context["attr"] = twig_array_merge($_attr_, array("style" => null));
            // line 904
            echo "        ";
        }
        // line 905
        echo "        ";
        if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
        if ( !twig_test_empty($_id_)) {
            echo "id=\"";
            if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
            echo twig_escape_filter($this->env, $_id_, "html", null, true);
            echo "\" ";
        }
        // line 906
        echo "        ";
        if (isset($context["attr"])) { $_attr_ = $context["attr"]; } else { $_attr_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_attr_);
        foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
            if (isset($context["attrvalue"])) { $_attrvalue_ = $context["attrvalue"]; } else { $_attrvalue_ = null; }
            if ( !(null === $_attrvalue_)) {
                if (isset($context["attrname"])) { $_attrname_ = $context["attrname"]; } else { $_attrname_ = null; }
                echo twig_escape_filter($this->env, $_attrname_, "html", null, true);
                echo "=\"";
                if (isset($context["attrvalue"])) { $_attrvalue_ = $context["attrvalue"]; } else { $_attrvalue_ = null; }
                echo twig_escape_filter($this->env, $_attrvalue_, "html", null, true);
                echo "\" ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 907
        echo "    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 910
    public function block_button_attributes($context, array $blocks = array())
    {
        // line 911
        echo "id=\"";
        if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
        echo twig_escape_filter($this->env, $_id_, "html", null, true);
        echo "\" name=\"";
        if (isset($context["full_name"])) { $_full_name_ = $context["full_name"]; } else { $_full_name_ = null; }
        echo twig_escape_filter($this->env, $_full_name_, "html", null, true);
        echo "\"";
        if (isset($context["disabled"])) { $_disabled_ = $context["disabled"]; } else { $_disabled_ = null; }
        if ($_disabled_) {
            echo " disabled=\"disabled\"";
        }
        // line 912
        if (isset($context["attr"])) { $_attr_ = $context["attr"]; } else { $_attr_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_attr_);
        foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
            echo " ";
            if (isset($context["attrname"])) { $_attrname_ = $context["attrname"]; } else { $_attrname_ = null; }
            echo twig_escape_filter($this->env, $_attrname_, "html", null, true);
            echo "=\"";
            if (isset($context["attrvalue"])) { $_attrvalue_ = $context["attrvalue"]; } else { $_attrvalue_ = null; }
            echo twig_escape_filter($this->env, $_attrvalue_, "html", null, true);
            echo "\"";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "BraincraftedBootstrapBundle:Form:bootstrap.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  3477 => 912,  3465 => 911,  3462 => 910,  3457 => 907,  3438 => 906,  3429 => 905,  3426 => 904,  3422 => 903,  3418 => 902,  3414 => 901,  3411 => 900,  3408 => 899,  3403 => 896,  3375 => 895,  3341 => 894,  3338 => 893,  3335 => 892,  3330 => 889,  3319 => 887,  3316 => 886,  3311 => 885,  3307 => 884,  3304 => 883,  3299 => 882,  3295 => 881,  3292 => 880,  3287 => 879,  3283 => 878,  3280 => 877,  3275 => 876,  3271 => 875,  3268 => 874,  3263 => 873,  3259 => 872,  3256 => 871,  3250 => 870,  3247 => 869,  3244 => 868,  3239 => 863,  3233 => 862,  3226 => 860,  3222 => 859,  3216 => 858,  3213 => 857,  3210 => 856,  3205 => 853,  3202 => 852,  3198 => 850,  3195 => 849,  3192 => 848,  3182 => 846,  3177 => 845,  3169 => 844,  3165 => 842,  3161 => 841,  3158 => 840,  3155 => 839,  3152 => 838,  3148 => 837,  3145 => 836,  3142 => 835,  3138 => 834,  3134 => 833,  3131 => 832,  3128 => 831,  3120 => 827,  3117 => 826,  3113 => 825,  3110 => 824,  3105 => 821,  3099 => 820,  3096 => 819,  3093 => 818,  3088 => 815,  3082 => 813,  3079 => 812,  3073 => 810,  3070 => 809,  3064 => 807,  3061 => 806,  3055 => 804,  3052 => 803,  3046 => 801,  3044 => 800,  3041 => 799,  3034 => 797,  3030 => 796,  3027 => 795,  3024 => 794,  3019 => 791,  3012 => 789,  3008 => 788,  2977 => 787,  2974 => 786,  2971 => 785,  2967 => 784,  2964 => 783,  2961 => 782,  2954 => 780,  2952 => 779,  2949 => 778,  2942 => 776,  2940 => 775,  2937 => 774,  2930 => 772,  2928 => 771,  2925 => 770,  2918 => 768,  2916 => 767,  2913 => 766,  2910 => 765,  2906 => 764,  2903 => 763,  2900 => 762,  2893 => 760,  2888 => 759,  2886 => 758,  2883 => 757,  2880 => 756,  2877 => 755,  2874 => 754,  2870 => 753,  2866 => 752,  2862 => 751,  2859 => 750,  2856 => 749,  2848 => 745,  2843 => 744,  2837 => 743,  2834 => 742,  2831 => 741,  2824 => 736,  2821 => 735,  2813 => 732,  2810 => 731,  2805 => 728,  2800 => 725,  2797 => 724,  2791 => 722,  2788 => 721,  2773 => 719,  2770 => 718,  2767 => 717,  2764 => 716,  2760 => 715,  2757 => 714,  2754 => 713,  2751 => 712,  2747 => 711,  2743 => 710,  2740 => 709,  2736 => 708,  2732 => 707,  2729 => 706,  2725 => 705,  2721 => 704,  2718 => 703,  2714 => 702,  2711 => 701,  2708 => 700,  2704 => 699,  2700 => 698,  2697 => 697,  2694 => 696,  2689 => 693,  2681 => 691,  2677 => 690,  2673 => 689,  2670 => 688,  2666 => 687,  2662 => 686,  2659 => 685,  2656 => 684,  2651 => 681,  2644 => 679,  2640 => 677,  2633 => 675,  2629 => 674,  2622 => 672,  2619 => 671,  2613 => 670,  2606 => 668,  2602 => 667,  2595 => 665,  2592 => 664,  2586 => 663,  2583 => 662,  2580 => 661,  2576 => 660,  2573 => 659,  2570 => 658,  2566 => 657,  2563 => 656,  2559 => 655,  2555 => 654,  2552 => 653,  2548 => 652,  2544 => 651,  2541 => 650,  2538 => 649,  2533 => 646,  2528 => 645,  2524 => 643,  2518 => 641,  2514 => 640,  2510 => 639,  2504 => 638,  2497 => 635,  2493 => 634,  2489 => 633,  2481 => 632,  2475 => 631,  2472 => 630,  2465 => 629,  2462 => 628,  2458 => 627,  2455 => 626,  2452 => 625,  2449 => 624,  2445 => 623,  2441 => 622,  2438 => 621,  2434 => 620,  2430 => 619,  2427 => 618,  2424 => 617,  2419 => 616,  2415 => 615,  2411 => 614,  2407 => 613,  2404 => 612,  2400 => 611,  2397 => 610,  2394 => 609,  2390 => 608,  2386 => 607,  2383 => 606,  2380 => 605,  2372 => 601,  2370 => 597,  2367 => 596,  2364 => 595,  2359 => 591,  2354 => 588,  2330 => 586,  2327 => 585,  2323 => 584,  2319 => 583,  2316 => 582,  2312 => 581,  2308 => 580,  2305 => 579,  2300 => 578,  2297 => 577,  2294 => 576,  2291 => 575,  2287 => 574,  2284 => 573,  2278 => 572,  2274 => 571,  2271 => 570,  2268 => 569,  2265 => 568,  2261 => 567,  2258 => 566,  2255 => 565,  2251 => 564,  2247 => 563,  2244 => 562,  2241 => 561,  2238 => 560,  2234 => 559,  2230 => 558,  2227 => 557,  2223 => 556,  2219 => 555,  2216 => 554,  2212 => 553,  2209 => 552,  2206 => 551,  2202 => 550,  2199 => 549,  2196 => 548,  2169 => 543,  2165 => 542,  2162 => 541,  2154 => 538,  2149 => 537,  2143 => 536,  2140 => 535,  2132 => 531,  2128 => 530,  2125 => 529,  2122 => 528,  2114 => 524,  2110 => 523,  2107 => 522,  2104 => 521,  2099 => 518,  2081 => 516,  2066 => 514,  2062 => 513,  2059 => 512,  2054 => 511,  2051 => 510,  2046 => 509,  2042 => 508,  2039 => 507,  2035 => 506,  2031 => 505,  2028 => 504,  2025 => 503,  2017 => 499,  2013 => 498,  2010 => 497,  2007 => 496,  1999 => 492,  1995 => 491,  1992 => 490,  1989 => 489,  1981 => 485,  1977 => 484,  1974 => 483,  1971 => 482,  1962 => 476,  1959 => 475,  1955 => 474,  1952 => 473,  1949 => 472,  1941 => 468,  1937 => 467,  1934 => 466,  1931 => 465,  1923 => 461,  1919 => 460,  1916 => 459,  1913 => 458,  1906 => 453,  1903 => 449,  1900 => 448,  1897 => 447,  1894 => 446,  1886 => 442,  1882 => 441,  1879 => 440,  1876 => 439,  1868 => 435,  1864 => 434,  1862 => 433,  1859 => 432,  1856 => 431,  1851 => 428,  1847 => 426,  1838 => 425,  1830 => 424,  1824 => 423,  1819 => 422,  1815 => 421,  1811 => 420,  1805 => 418,  1801 => 417,  1798 => 416,  1795 => 415,  1790 => 412,  1785 => 409,  1783 => 408,  1782 => 407,  1781 => 406,  1778 => 405,  1773 => 404,  1769 => 403,  1763 => 401,  1759 => 400,  1756 => 399,  1753 => 398,  1748 => 395,  1741 => 392,  1736 => 391,  1731 => 390,  1726 => 389,  1721 => 388,  1717 => 387,  1711 => 385,  1707 => 384,  1704 => 383,  1701 => 382,  1683 => 378,  1680 => 377,  1677 => 376,  1659 => 372,  1656 => 371,  1653 => 370,  1648 => 367,  1644 => 365,  1639 => 362,  1635 => 361,  1630 => 359,  1627 => 358,  1620 => 356,  1613 => 354,  1610 => 353,  1607 => 352,  1600 => 350,  1594 => 348,  1590 => 346,  1586 => 345,  1582 => 344,  1563 => 343,  1560 => 342,  1556 => 341,  1552 => 340,  1549 => 339,  1545 => 338,  1541 => 337,  1538 => 336,  1534 => 335,  1530 => 334,  1527 => 333,  1522 => 332,  1518 => 331,  1514 => 330,  1512 => 329,  1509 => 328,  1500 => 326,  1494 => 324,  1486 => 323,  1480 => 322,  1476 => 321,  1472 => 320,  1468 => 319,  1465 => 318,  1462 => 317,  1458 => 316,  1454 => 315,  1451 => 314,  1447 => 313,  1443 => 312,  1440 => 311,  1436 => 310,  1433 => 309,  1430 => 308,  1427 => 307,  1424 => 306,  1421 => 305,  1418 => 304,  1415 => 303,  1410 => 300,  1405 => 299,  1402 => 298,  1398 => 296,  1393 => 293,  1389 => 292,  1384 => 290,  1381 => 289,  1374 => 287,  1367 => 285,  1364 => 284,  1361 => 283,  1354 => 281,  1348 => 279,  1344 => 277,  1340 => 276,  1336 => 275,  1317 => 274,  1314 => 273,  1310 => 272,  1306 => 271,  1303 => 270,  1299 => 269,  1295 => 268,  1292 => 267,  1288 => 266,  1284 => 265,  1281 => 264,  1276 => 263,  1272 => 262,  1268 => 261,  1266 => 260,  1263 => 259,  1254 => 257,  1248 => 255,  1240 => 254,  1234 => 253,  1230 => 252,  1226 => 251,  1221 => 250,  1219 => 249,  1216 => 248,  1213 => 247,  1209 => 246,  1205 => 245,  1202 => 244,  1198 => 243,  1194 => 242,  1191 => 241,  1187 => 240,  1183 => 239,  1180 => 238,  1176 => 237,  1173 => 236,  1170 => 235,  1166 => 234,  1162 => 233,  1159 => 232,  1156 => 231,  1151 => 228,  1137 => 227,  1120 => 225,  1113 => 222,  1110 => 221,  1103 => 220,  1099 => 219,  1080 => 218,  1077 => 217,  1074 => 216,  1065 => 211,  1061 => 210,  1058 => 209,  1051 => 207,  1047 => 206,  1042 => 205,  1038 => 204,  1034 => 203,  1017 => 201,  1014 => 200,  1006 => 199,  1003 => 198,  999 => 197,  996 => 196,  993 => 195,  987 => 191,  981 => 190,  972 => 188,  963 => 186,  959 => 185,  954 => 184,  949 => 183,  946 => 182,  943 => 181,  938 => 178,  932 => 176,  926 => 174,  922 => 173,  919 => 172,  916 => 171,  911 => 168,  907 => 166,  905 => 165,  900 => 163,  897 => 162,  887 => 160,  885 => 159,  882 => 158,  879 => 157,  875 => 156,  872 => 155,  869 => 154,  866 => 153,  862 => 152,  859 => 151,  856 => 150,  852 => 149,  849 => 148,  846 => 147,  841 => 144,  837 => 142,  835 => 141,  827 => 139,  824 => 138,  821 => 137,  818 => 136,  808 => 134,  806 => 133,  803 => 132,  800 => 131,  796 => 130,  792 => 129,  789 => 128,  785 => 127,  782 => 126,  779 => 125,  775 => 124,  772 => 123,  769 => 122,  763 => 118,  749 => 116,  746 => 115,  743 => 114,  735 => 111,  724 => 108,  718 => 107,  715 => 106,  709 => 104,  704 => 103,  699 => 102,  695 => 100,  690 => 99,  684 => 97,  681 => 96,  676 => 95,  672 => 94,  669 => 93,  665 => 92,  662 => 91,  656 => 90,  652 => 89,  646 => 88,  643 => 87,  638 => 86,  635 => 85,  632 => 84,  629 => 83,  626 => 82,  623 => 81,  615 => 77,  612 => 76,  607 => 75,  604 => 74,  601 => 73,  598 => 72,  589 => 67,  584 => 66,  578 => 64,  575 => 63,  570 => 62,  567 => 61,  564 => 60,  559 => 57,  555 => 55,  552 => 54,  536 => 52,  533 => 51,  508 => 49,  504 => 48,  501 => 47,  498 => 46,  495 => 45,  492 => 44,  487 => 43,  484 => 42,  479 => 41,  475 => 40,  470 => 39,  467 => 38,  464 => 37,  461 => 36,  451 => 34,  448 => 33,  445 => 32,  442 => 31,  438 => 30,  434 => 29,  431 => 28,  427 => 27,  423 => 26,  420 => 25,  416 => 24,  412 => 23,  409 => 22,  406 => 21,  404 => 20,  401 => 19,  397 => 18,  393 => 17,  390 => 16,  387 => 15,  382 => 12,  376 => 10,  370 => 8,  366 => 7,  363 => 6,  360 => 5,  356 => 910,  353 => 909,  351 => 899,  348 => 898,  346 => 892,  343 => 891,  341 => 868,  338 => 867,  335 => 865,  333 => 856,  330 => 855,  328 => 831,  325 => 830,  323 => 824,  320 => 823,  318 => 818,  315 => 817,  313 => 794,  310 => 793,  308 => 749,  305 => 748,  303 => 741,  300 => 740,  297 => 738,  295 => 735,  292 => 734,  290 => 731,  287 => 730,  285 => 696,  282 => 695,  280 => 684,  277 => 683,  275 => 649,  272 => 648,  270 => 605,  267 => 604,  265 => 595,  262 => 594,  259 => 592,  257 => 591,  254 => 590,  252 => 548,  249 => 547,  246 => 545,  244 => 541,  241 => 540,  239 => 535,  236 => 534,  234 => 528,  231 => 527,  229 => 521,  226 => 520,  224 => 503,  221 => 502,  219 => 496,  216 => 495,  214 => 489,  211 => 488,  209 => 482,  206 => 481,  204 => 472,  201 => 471,  199 => 465,  196 => 464,  194 => 458,  191 => 457,  189 => 446,  186 => 445,  184 => 439,  181 => 438,  179 => 431,  176 => 430,  174 => 415,  171 => 414,  169 => 398,  166 => 397,  164 => 382,  161 => 381,  159 => 376,  156 => 375,  154 => 370,  151 => 369,  149 => 303,  146 => 302,  144 => 231,  141 => 230,  139 => 216,  136 => 215,  134 => 195,  131 => 194,  129 => 181,  126 => 180,  124 => 171,  121 => 170,  119 => 147,  116 => 146,  114 => 122,  111 => 121,  109 => 81,  106 => 80,  104 => 72,  101 => 71,  99 => 60,  96 => 59,  94 => 15,  91 => 14,  89 => 5,  86 => 4,  83 => 2,  14 => 1,);
    }
}

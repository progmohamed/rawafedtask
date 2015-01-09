<?php

/* TaskPostsBundle:Default:layout.html.twig */
class __TwigTemplate_20b57234e4173d4a9e64dcd2f1c2d9058b241ed93c7c604faf6e4e52e61fd03a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
<head>

    <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <!-- Bootstrap -->
    <link href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/bootstrap.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" media=\"screen\">
    <link href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/taskposts/css/bootstrap-datetimepicker.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" media=\"screen\">


    <!-- HTML5 Shim and Respond.js add IE8 support of HTML5 elements and media queries -->
    ";
        // line 13
        $this->env->loadTemplate("BraincraftedBootstrapBundle::ie8-support.html.twig")->display($context);
        // line 14
        echo "    
    ";
        // line 15
        $this->displayBlock('head', $context, $blocks);
        // line 16
        echo "
</head>

<body>
    <div class=\"container\"> 
          <nav class=\"navbar navbar-default\" role=\"navigation\">
  <!-- Brand and toggle get grouped for better mobile display -->
  <div class=\"navbar-header\">
    <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-ex1-collapse\">
      <span class=\"sr-only\">Toggle navigation</span>
      <span class=\"icon-bar\"></span>
      <span class=\"icon-bar\"></span>
      <span class=\"icon-bar\"></span>
    </button>
    <a class=\"navbar-brand\" href=\"#\">Rawafed tech</a>
  </div>

  <!-- Collect the nav links, forms, and other content for toggling -->
  <div class=\"collapse navbar-collapse navbar-ex1-collapse\">
    <ul class=\"nav navbar-nav\">
      <li class=\"";
        // line 36
        if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
        if (($this->getAttribute($this->getAttribute($this->getAttribute($_app_, "request", array()), "attributes", array()), "get", array(0 => "_route"), "method") == "task_posts_default_posts")) {
            echo "active";
        }
        echo "\"><a href=\"";
        echo $this->env->getExtension('routing')->getPath("task_posts_default_posts");
        echo "\">All Posts</a></li>
      <li class=\"";
        // line 37
        if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
        if (($this->getAttribute($this->getAttribute($this->getAttribute($_app_, "request", array()), "attributes", array()), "get", array(0 => "_route"), "method") == "task_posts_default_create")) {
            echo "active";
        }
        echo "\"><a href=\"";
        echo $this->env->getExtension('routing')->getPath("task_posts_default_create");
        echo "\">Create Post</a></li>
  
    </ul>
  </div><!-- /.navbar-collapse -->
</nav>
      
    ";
        // line 43
        $this->env->loadTemplate("BraincraftedBootstrapBundle::flash.html.twig")->display($context);
        // line 44
        echo "
    ";
        // line 45
        $this->displayBlock('body', $context, $blocks);
        // line 46
        echo "    
    </div>
    <!-- jQuery (necessary for Bootstraps JavaScript plugins) -->
    <script src=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.js"), "html", null, true);
        echo "\"></script>
    <!-- Include all JavaScripts, compiled by Assetic -->
    <script src=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/bootstrap.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/taskposts/js/bootstrap-datetimepicker.min.js"), "html", null, true);
        echo "\" charset=\"UTF-8\"></script>

    <script type=\"text/javascript\">

\t\$('.form_date').datetimepicker({
        language:  'fr',
        weekStart: 1,
        todayBtn:  1,
\t\tautoclose: 1,
\t\ttodayHighlight: 1,
\t\tstartView: 2,
\t\tminView: 2,
\t\tforceParse: 0
    });
\t
</script>
</body>
</html>";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "BraincraftedBootstrapBundle by Florian Eckerstorfer";
    }

    // line 15
    public function block_head($context, array $blocks = array())
    {
    }

    // line 45
    public function block_body($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "TaskPostsBundle:Default:layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  151 => 45,  146 => 15,  140 => 5,  118 => 52,  114 => 51,  109 => 49,  104 => 46,  102 => 45,  99 => 44,  97 => 43,  83 => 37,  74 => 36,  52 => 16,  50 => 15,  47 => 14,  45 => 13,  38 => 9,  34 => 8,  28 => 5,  22 => 1,);
    }
}

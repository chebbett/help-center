<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* @help_topics/editor.overview.html.twig */
class __TwigTemplate_5cfedbe14eb9d39fd3489fa1dfed675a800040e7b684bfb4df7d4936da2faf1e extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 8
        $context["filter_overview_topic"] = $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\help_topics\HelpTwigExtension']->getTopicLink("filter.overview"));
        // line 9
        $context["content_url"] = $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->getUrl("filter.admin_overview"));
        // line 10
        echo "<h2>";
        echo t("Goal", array());
        echo "</h2>
<p>";
        // line 11
        echo t("Configure a text format so that when a user is editing text and selects this text format, a text editor installed on your site is shown. Configure the text editor, such as choosing which buttons and functions are available. See @filter_overview_topic for more about text formats.", array("@filter_overview_topic" => ($context["filter_overview_topic"] ?? null), ));
        echo "</p>
<h2>";
        // line 12
        echo t("What is a text editor?", array());
        echo "</h2>
<p>";
        // line 13
        echo t("A text editor is software (typically, a JavaScript library) that provides buttons and other command mechanisms to make editing HTML text easier. Some editors are called <em>visual</em> or <em>WYSIWYG (What You See Is What You Get)</em> editors; these editors hide the details of HTML from the user, and instead show formatted output on the screen. The core Text Editor module provides a framework for deploying text editors on your site. The core CKEditor module provides CKEditor, which is a widely-used JavaScript WYSIWYG editor that creates clean and valid HTML; the module also enforces the HTML tag restrictions in the associated text format. Various contributed modules provide other editors; to install a new editor, besides installing the module, you may need to download the editor library from a third-party site.", array());
        echo "</p>
<h2>";
        // line 14
        echo t("Steps", array());
        echo "</h2>
<ol>
  <li>";
        // line 16
        echo t("In the <em>Manage</em> administrative menu, navigate to <em>Configuration</em> &gt; <em>Content Authoring</em> &gt; <a href=\"@content_url\"><em>Text formats and editors</em></a>. The <em>Text editor</em> column in the table shows the text editor that is currently connected to each text format, if any.", array("@content_url" => ($context["content_url"] ?? null), ));
        echo "</li>
  <li>";
        // line 17
        echo t("Follow the steps on @filter_overview_topic to add a new text format or configure an existing text format; when you reach the step about text editors, return to this topic.", array("@filter_overview_topic" => ($context["filter_overview_topic"] ?? null), ));
        echo "</li>
  <li>";
        // line 18
        echo t("Select <em>CKEditor</em> as the <em>Text editor</em>, or another text editor that you have installed. The rest of these steps assume you selected <em>CKEditor</em>.", array());
        echo "</li>
  <li>";
        // line 19
        echo t("Under <em>Toolbar configuration</em>, drag buttons between <em>Available buttons</em> and <em>Active toolbar</em>; only buttons in <em>Active toolbar</em> will be shown to the user. If you are using a mouse, you can hover over a button to see a tooltip explaining what the button does.", array());
        echo "</li>
  <li>";
        // line 20
        echo t("Drag buttons within <em>Active toolbar</em> to the desired order, and group buttons by dragging them into the grouping boxes; click <em>Add group</em> to add additional groups.", array());
        echo "</li>
  <li>";
        // line 21
        echo t("Under <em>CKEditor plugin settings</em>, configure the buttons that have configuration. This section will not be present if there are no active buttons with configuration.", array());
        echo "</li>
  <li>";
        // line 22
        echo t("Return to @filter_overview_topic to complete the text format configuration, and be sure to save the text format.", array("@filter_overview_topic" => ($context["filter_overview_topic"] ?? null), ));
        echo "</li>
</ol>";
    }

    public function getTemplateName()
    {
        return "@help_topics/editor.overview.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 22,  85 => 21,  81 => 20,  77 => 19,  73 => 18,  69 => 17,  65 => 16,  60 => 14,  56 => 13,  52 => 12,  48 => 11,  43 => 10,  41 => 9,  39 => 8,);
    }

    public function getSourceContext()
    {
        return new Source("", "@help_topics/editor.overview.html.twig", "C:\\xampp\\htdocs\\helpcenter\\core\\modules\\help_topics\\help_topics\\editor.overview.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 8, "trans" => 10);
        static $filters = array("escape" => 11);
        static $functions = array("render_var" => 8, "help_topic_link" => 8, "url" => 9);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'trans'],
                ['escape'],
                ['render_var', 'help_topic_link', 'url']
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }
}

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

/* @help_topics/help.help_topic_search.html.twig */
class __TwigTemplate_11b89a7764fe41a43234249b38c2ea6a2138f9c14916925516621e2fa53be084 extends \Twig\Template
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
        // line 9
        $context["extend_url"] = $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->getUrl("system.modules_list"));
        // line 10
        $context["help_url"] = $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->getUrl("help.main"));
        // line 11
        $context["cache_topic"] = $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\help_topics\HelpTwigExtension']->getTopicLink("system.cache"));
        // line 12
        $context["cron_topic"] = $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\help_topics\HelpTwigExtension']->getTopicLink("core.cron"));
        // line 13
        echo "<h2>";
        echo t("Goal", array());
        echo "</h2>
<p>";
        // line 14
        echo t("Set up your site so that users can search for help.", array());
        echo "</p>
<h2>";
        // line 15
        echo t("Steps", array());
        echo "</h2>
<ol>
  <li>";
        // line 17
        echo t("In the <em>Manage</em> administrative menu, navigate to <em><a href=\"@extend_url\">Extend</a></em>. Verify that the Search, Help, Help Topics, and Block modules are installed (or install them if they are not already installed).", array("@extend_url" => ($context["extend_url"] ?? null), ));
        echo "</li>
  <li>";
        // line 18
        echo t("In the <em>Manage</em> administrative menu, navigate to <em>Configuration</em> &gt; <em>Search and metadata</em> &gt; <em>Search pages</em>.", array());
        echo "</li>
  <li>";
        // line 19
        echo t("Verify that a Help search page is listed in the <em>Search pages</em> section. If not, add a new page of type <em>Help</em>.", array());
        echo "</li>
  <li>";
        // line 20
        echo t("Check the indexing status of the Help search page. If it is not fully indexed, see @cron_topic about how to run Cron until indexing is complete.", array("@cron_topic" => ($context["cron_topic"] ?? null), ));
        echo "</li>
  <li>";
        // line 21
        echo t("In the future, you can click <em>Rebuild search index</em> on this page, or @cache_topic, in order to force help topic text to be reindexed for searching. This should be done whenever a module, theme, language, or string translation is updated.", array("@cache_topic" => ($context["cache_topic"] ?? null), ));
        echo "</li>
  <li>";
        // line 22
        echo t("In the <em>Manage</em> administrative menu, navigate to <em>Structure</em> &gt; <em>Block layout</em>.", array());
        echo "</li>
  <li>";
        // line 23
        echo t("Click the link for your administrative theme (such as the core Seven theme), near the top of the page, and verify that there is already a search block for help located in the Help region. If not, follow the steps in the related topic to place the <em>Search form</em> block in the Help region. When configuring the block, choose <em>Help</em> as the search page, and in the <em>Pages</em> tab under <em>Visibility</em>, enter <em>/admin/help</em> to make the search form only visible on the main <em>Help</em> page.", array());
        echo "</li>
  <li>";
        // line 24
        echo t("In the <em>Manage</em> administrative menu, navigate to <em><a href=\"@help_url\">Help</a></em>. Verify that the search block is visible, and try a search.", array("@help_url" => ($context["help_url"] ?? null), ));
        echo "</li>
</ol>";
    }

    public function getTemplateName()
    {
        return "@help_topics/help.help_topic_search.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 24,  85 => 23,  81 => 22,  77 => 21,  73 => 20,  69 => 19,  65 => 18,  61 => 17,  56 => 15,  52 => 14,  47 => 13,  45 => 12,  43 => 11,  41 => 10,  39 => 9,);
    }

    public function getSourceContext()
    {
        return new Source("", "@help_topics/help.help_topic_search.html.twig", "C:\\xampp\\htdocs\\helpcenter\\core\\modules\\help_topics\\help_topics\\help.help_topic_search.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 9, "trans" => 13);
        static $filters = array("escape" => 17);
        static $functions = array("render_var" => 9, "url" => 9, "help_topic_link" => 11);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'trans'],
                ['escape'],
                ['render_var', 'url', 'help_topic_link']
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

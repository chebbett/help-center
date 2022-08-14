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

/* @help_topics/forum.configuring.html.twig */
class __TwigTemplate_1e68185e1e5e848ce54a58b6958e6c37b75f5bbdc23b81e38cfce689a9995af1 extends \Twig\Template
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
        // line 6
        $context["settings"] = $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->getUrl("forum.settings"));
        // line 7
        $context["overview"] = $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->getUrl("forum.overview"));
        // line 8
        $context["forum_concept_topic"] = $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\help_topics\HelpTwigExtension']->getTopicLink("forum.concept"));
        // line 9
        $context["index"] = $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->getUrl("forum.index"));
        // line 10
        echo "<h2>";
        echo t("Goal", array());
        echo "</h2>
<p>";
        // line 11
        echo t("Configure settings for forums, and set up forum structure.", array());
        echo "</p>
<h2>";
        // line 12
        echo t("Steps", array());
        echo "</h2>
<ol>
  <li>";
        // line 14
        echo t("In the <em>Manage</em> administrative menu, navigate to <em>Structure</em> &gt; <em>Forums</em> &gt; <a href=\"@settings\"><em>Settings</em></a>.", array("@settings" => ($context["settings"] ?? null), ));
        echo "</li>
  <li>";
        // line 15
        echo t("Choose the desired settings for <em>Hot topic threshold</em>, <em>Topics per page</em>, and <em>Default order</em>. Click <em>Save configuration</em> if you have made any changes.", array());
        echo "</li>
  <li>";
        // line 16
        echo t("In the <em>Manage</em> administrative menu, navigate to <em>Structure</em> &gt; <a href=\"@overview\"><em>Forums</em></a>.", array("@overview" => ($context["overview"] ?? null), ));
        echo "</li>
  <li>";
        // line 17
        echo t("Decide on the hierarchy of containers and forums you want for your site; see @forum_concept_topic for an overview of forum hierarchy.", array("@forum_concept_topic" => ($context["forum_concept_topic"] ?? null), ));
        echo "</li>
  <li>";
        // line 18
        echo t("Create the containers that you want in your forum hierarchy, starting at the top level, if any. To create a container, click <em>Add container</em>, enter the container name and optionally other settings, and click <em>Save</em>.", array());
        echo "</li>
  <li>";
        // line 19
        echo t("Create the forums that you want in your forum hierarchy, starting at the top level. To create a forum, click <em>Add forum</em> and enter the forum name. If your hierarchy has this forum inside a container or another forum, select the parent forum/container in the <em>Parent</em> field. Review and/or edit the other settings, and click <em>Save</em>.", array());
        echo "</li>
  <li>";
        // line 20
        echo t("Optionally, delete the provided <em>General discussion</em> forum, if you do not want this forum to be available on your site.", array());
        echo "</li>
  <li>";
        // line 21
        echo t("Review and/or edit the permissions related to forums. The administrative permission for editing the forum settings is in the <em>Forum</em> module section of the permissions page, and administrative permissions for editing the forum hierarchy are in the <em>Taxonomy</em> module section. The user permissions for creating forum topics are in the <em>Node</em> module section, and for commenting on topics are in the <em>Comment</em> module section.", array());
        echo "</li>
  <li>";
        // line 22
        echo t("Add links to the main <a href=\"@index\"><em>Forums</em></a> page (path: <em>/forum</em>), and optionally to individual forum pages, to navigation menus on your site, so that users can find the forums.", array("@index" => ($context["index"] ?? null), ));
        echo "</li>
</ol>";
    }

    public function getTemplateName()
    {
        return "@help_topics/forum.configuring.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 22,  89 => 21,  85 => 20,  81 => 19,  77 => 18,  73 => 17,  69 => 16,  65 => 15,  61 => 14,  56 => 12,  52 => 11,  47 => 10,  45 => 9,  43 => 8,  41 => 7,  39 => 6,);
    }

    public function getSourceContext()
    {
        return new Source("", "@help_topics/forum.configuring.html.twig", "C:\\xampp\\htdocs\\helpcenter\\core\\modules\\help_topics\\help_topics\\forum.configuring.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 6, "trans" => 10);
        static $filters = array("escape" => 14);
        static $functions = array("render_var" => 6, "url" => 6, "help_topic_link" => 8);

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

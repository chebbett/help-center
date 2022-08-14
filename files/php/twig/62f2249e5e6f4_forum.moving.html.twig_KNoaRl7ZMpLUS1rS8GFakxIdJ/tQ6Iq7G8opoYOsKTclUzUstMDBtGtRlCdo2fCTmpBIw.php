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

/* @help_topics/forum.moving.html.twig */
class __TwigTemplate_daf15766d307e27a032c99e7a5c56540219cc67a9cfe2a1ed9e196970f321ad3 extends \Twig\Template
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
        $context["index"] = $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->getUrl("forum.index"));
        // line 7
        echo "<h2>";
        echo t("Goal", array());
        echo "</h2>
<p>";
        // line 8
        echo t("Move a forum topic and all of its comments to a new forum.", array());
        echo "</p>
<h2>";
        // line 9
        echo t("Steps", array());
        echo "</h2>
<ol>
  <li>";
        // line 11
        echo t("Starting from the <a href=\"@index\">forums page</a>, navigate to the forum that currently contains the topic.", array("@index" => ($context["index"] ?? null), ));
        echo "</li>
  <li>";
        // line 12
        echo t("Locate the topic within the forum, and click on the title to view the topic.", array());
        echo "</li>
  <li>";
        // line 13
        echo t("Click <em>Edit</em>.", array());
        echo "</li>
  <li>";
        // line 14
        echo t("In the <em>Forums</em> field, select the new forum that you want the topic to move to.", array());
        echo "</li>
  <li>";
        // line 15
        echo t("Check <em>Leave shadow copy</em> to create a link in the original forum pointing to the new location.", array());
        echo "</li>
  <li>";
        // line 16
        echo t("Click <em>Save</em>.", array());
        echo "</li>
</ol>";
    }

    public function getTemplateName()
    {
        return "@help_topics/forum.moving.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 16,  71 => 15,  67 => 14,  63 => 13,  59 => 12,  55 => 11,  50 => 9,  46 => 8,  41 => 7,  39 => 6,);
    }

    public function getSourceContext()
    {
        return new Source("", "@help_topics/forum.moving.html.twig", "C:\\xampp\\htdocs\\helpcenter\\core\\modules\\help_topics\\help_topics\\forum.moving.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 6, "trans" => 7);
        static $filters = array("escape" => 11);
        static $functions = array("render_var" => 6, "url" => 6);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'trans'],
                ['escape'],
                ['render_var', 'url']
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

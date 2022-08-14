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

/* @help_topics/tracker.tracking_changed_content.html.twig */
class __TwigTemplate_83df80c019a7f519b42e4cb1f723f7acd06137ac89e2088017efcd1ebea72c0e extends \Twig\Template
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
        $context["recent"] = $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->getUrl("tracker.page"));
        // line 9
        echo "<h2>";
        echo t("What displays of recently-updated content are available?", array());
        echo "</h2>
<p>";
        // line 10
        echo t("Assuming that you have the core Activity Tracker module installed, these pages that show recently-updated content are available:", array());
        echo "</p>
<ul>
  <li>";
        // line 12
        echo t("<a href=\"@recent\"><em>Recent content</em></a>: Shows the content that has been most recently added, updated, or commented on.", array("@recent" => ($context["recent"] ?? null), ));
        echo "</li>
  <li>";
        // line 13
        echo t("The <em>My recent content</em> tab on the <em>Recent content</em> page (for logged-in users) limits the list to content created or commented on by the user viewing the page.", array());
        echo "</li>
  <li>";
        // line 14
        echo t("The <em>Activity</em> tab on a user profile shows the same list for the user whose profile is being viewed.", array());
        echo "</li>
</ul>";
    }

    public function getTemplateName()
    {
        return "@help_topics/tracker.tracking_changed_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 14,  55 => 13,  51 => 12,  46 => 10,  41 => 9,  39 => 8,);
    }

    public function getSourceContext()
    {
        return new Source("", "@help_topics/tracker.tracking_changed_content.html.twig", "C:\\xampp\\htdocs\\helpcenter\\core\\modules\\tracker\\help_topics\\tracker.tracking_changed_content.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 8, "trans" => 9);
        static $filters = array("escape" => 12);
        static $functions = array("render_var" => 8, "url" => 8);

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

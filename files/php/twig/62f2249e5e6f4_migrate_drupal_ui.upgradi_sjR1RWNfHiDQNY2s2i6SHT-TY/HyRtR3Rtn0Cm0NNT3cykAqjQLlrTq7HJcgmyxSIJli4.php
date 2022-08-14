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

/* @help_topics/migrate_drupal_ui.upgrading.html.twig */
class __TwigTemplate_7a5be70679ee14723cec8b7c080c98073df0fb56e1556bec6a19ab54e21c2f10 extends \Twig\Template
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
        $context["migrate_drupal_upgrade"] = $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->getUrl("migrate_drupal_ui.upgrade"));
        // line 7
        $context["migrate_drupal_log"] = $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->getUrl("dblog.overview"));
        // line 8
        $context["migrate_overview_topic"] = $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\help_topics\HelpTwigExtension']->getTopicLink("migrate.overview"));
        // line 9
        echo "<h2>";
        echo t("Goal", array());
        echo "</h2>
<p>";
        // line 10
        echo t("Migrate data into a new, empty site, as part of an upgrade from an older version of Drupal. See @migrate_overview_topic for an overview of migrating and upgrading.", array("@migrate_overview_topic" => ($context["migrate_overview_topic"] ?? null), ));
        echo "</p>
<h2>";
        // line 11
        echo t("Steps", array());
        echo "</h2>
<ol>
<li>";
        // line 13
        echo t("In the <em>Manage</em> administrative menu, navigate to <em>Configuration</em> &gt; <em>Development</em> &gt; <em><a href=\"@migrate_drupal_upgrade\">Upgrade</a></em>.", array("@migrate_drupal_upgrade" => ($context["migrate_drupal_upgrade"] ?? null), ));
        echo "</li>
<li>";
        // line 14
        echo t("Read the introduction and follow the <em>Preparation steps</em> on the page. Then click <em>Continue</em>.", array());
        echo "</li>
<li>";
        // line 15
        echo t("Select the Drupal version of the source site. Also enter the database credentials and public and private files directories (private file directory is not available when migrating from Drupal 6). Click <em>Review upgrade</em>.", array());
        echo "</li>
<li>";
        // line 16
        echo t("If the next page you see contains a message about conflicting content, that means that the site where you are running the upgrade is not empty. If you continue, you will lose the data in the site. If that is acceptable, click the button to continue; if not, start these steps over in a new, clean Drupal site.", array());
        echo "</li>
<li>";
        // line 17
        echo t("On the <em>What will be upgraded?</em> page, review the list of modules whose data will not be upgraded. If that list is not empty and you want to migrate the data from those modules, you will need to download contributed modules and/or install core or contributed modules, and start these steps over.", array());
        echo "</li>
<li>";
        // line 18
        echo t("When the list of modules that will and will not be upgraded meets your expectations, click <em>Perform upgrade</em> and wait for the upgrade to complete. You will see a message about the number of upgrade tasks that were successful or failed, and you can review the upgrade message log by clicking the link on the results page.", array());
        echo "</li>
</ol>
<h2>";
        // line 20
        echo t("Additional Resources", array());
        echo "</h2>
<ul>
<li>";
        // line 22
        echo t("<a href=\"https://www.drupal.org/docs/upgrading-drupal/upgrading-from-drupal-6-or-7-to-drupal-8-and-newer\">Upgrading from Drupal 6 or 7 to Drupal 8 (and newer)</a>", array());
        echo "</li>
</ul>";
    }

    public function getTemplateName()
    {
        return "@help_topics/migrate_drupal_ui.upgrading.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 22,  84 => 20,  79 => 18,  75 => 17,  71 => 16,  67 => 15,  63 => 14,  59 => 13,  54 => 11,  50 => 10,  45 => 9,  43 => 8,  41 => 7,  39 => 6,);
    }

    public function getSourceContext()
    {
        return new Source("", "@help_topics/migrate_drupal_ui.upgrading.html.twig", "C:\\xampp\\htdocs\\helpcenter\\core\\modules\\help_topics\\help_topics\\migrate_drupal_ui.upgrading.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 6, "trans" => 9);
        static $filters = array("escape" => 10);
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

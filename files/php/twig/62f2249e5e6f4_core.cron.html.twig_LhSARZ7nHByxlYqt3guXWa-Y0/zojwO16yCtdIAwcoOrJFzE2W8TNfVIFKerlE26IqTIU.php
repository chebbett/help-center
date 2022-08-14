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

/* @help_topics/core.cron.html.twig */
class __TwigTemplate_af6e24fd0b243482f1c5b1fcb8467d81e1b614b734e8256ee82ecf5c3ef459d8 extends \Twig\Template
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
        $context["cron"] = $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->getUrl("system.cron_settings"));
        // line 7
        echo "<h2>";
        echo t("Goal", array());
        echo "</h2>
<p>";
        // line 8
        echo t("Configure your system so that cron will run automatically.", array());
        echo "</p>
<h2>";
        // line 9
        echo t("What are cron tasks?", array());
        echo "</h2>
<p>";
        // line 10
        echo t("To ensure that your site and its modules continue to function well, a group of administrative operations should be run periodically. These operations are called <em>cron</em> tasks, and running the tasks is known as <em>running cron</em>. Depending on how often content is updated on your site, you might need to run cron on a schedule ranging from hourly to weekly to keep your site running well.", array());
        echo "</p>
<h2>";
        // line 11
        echo t("What options are available for running cron?", array());
        echo "</h2>
<ul>
  <li>";
        // line 13
        echo t("If the core Automated Cron module is installed, your site will run cron periodically, on a schedule you can configure.", array());
        echo "</li>
  <li>";
        // line 14
        echo t("You can set up a task on your web server to visit the <em> cron URL</em>, which is unique to your site, on a schedule.", array());
        echo "</li>
  <li>";
        // line 15
        echo t("You can also run cron manually, but this is not the recommended way to make sure it is run periodically.", array());
        echo "</li>
</ul>
<h2>";
        // line 17
        echo t("Steps", array());
        echo "</h2>
<ol>
  <li>";
        // line 19
        echo t("In the <em>Manage</em> administration menu, navigate to <em>Configuration</em> &gt; <em>System</em> &gt; <a href=\"@cron\"><em>Cron</em></a>. Note the <em>Last run</em> time on the page.", array("@cron" => ($context["cron"] ?? null), ));
        echo "</li>
  <li>";
        // line 20
        echo t("If you want to run cron right now, click <em>Run cron</em> and wait for cron to finish.", array());
        echo "</li>
  <li>";
        // line 21
        echo t("If you have a way to configure tasks on your web server, copy the link where it says <em>To run cron from outside the site, go to</em>. Set up a task to visit that URL on your desired cron schedule, such as once an hour or once a week. (On Linux-like servers, you can use the <em>wget</em> command to visit a URL.) If you configure an outside task, you should uninstall the Automated Cron module.", array());
        echo "</li>
  <li>";
        // line 22
        echo t("If you are not configuring an outside task, and you have the core Automated Cron module installed, select a schedule for automated cron runs in <em>Cron settings</em> &gt; <em>Run cron every</em>. Click <em>Save configuration</em>.", array());
        echo "</li>
</ol>
<h2>";
        // line 24
        echo t("Additional resources", array());
        echo "</h2>
<ul>
    <li>";
        // line 26
        echo t("<a href=\"https://www.drupal.org/docs/user_guide/en/security-cron-concept.html\">Concept: Cron in the User Guide</a>", array());
        echo "</li>
    <li>";
        // line 27
        echo t("<a href=\"https://www.drupal.org/docs/user_guide/en/security-cron.html\">Configuring Cron Maintenance Tasks in the User Guide</a>", array());
        echo "</li>
</ul>";
    }

    public function getTemplateName()
    {
        return "@help_topics/core.cron.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  107 => 27,  103 => 26,  98 => 24,  93 => 22,  89 => 21,  85 => 20,  81 => 19,  76 => 17,  71 => 15,  67 => 14,  63 => 13,  58 => 11,  54 => 10,  50 => 9,  46 => 8,  41 => 7,  39 => 6,);
    }

    public function getSourceContext()
    {
        return new Source("", "@help_topics/core.cron.html.twig", "C:\\xampp\\htdocs\\helpcenter\\core\\modules\\help_topics\\help_topics\\core.cron.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 6, "trans" => 7);
        static $filters = array("escape" => 19);
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

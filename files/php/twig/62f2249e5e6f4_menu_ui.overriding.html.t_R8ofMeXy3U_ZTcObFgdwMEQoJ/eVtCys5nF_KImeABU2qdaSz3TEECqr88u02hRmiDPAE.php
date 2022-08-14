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

/* @help_topics/menu_ui.overriding.html.twig */
class __TwigTemplate_8477b286a74f73e1a68079d872d7de68b106db56a0270b4bb96587373ee40547 extends \Twig\Template
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
        $context["structure_menu"] = $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->getUrl("entity.menu.collection"));
        // line 9
        echo "<h2>";
        echo t("Goal", array());
        echo "</h2>
<p>";
        // line 10
        echo t("Disable menu links or change the order and hierarchy of menu links.", array());
        echo "</p>
<h2>";
        // line 11
        echo t("Steps", array());
        echo "</h2>
<ol>
  <li>";
        // line 13
        echo t("In the <em>Manage</em> administration menu, navigate to <em>Structure</em> &gt; <a href=\"@structure_menu\"><em>Menus</em></a>.", array("@structure_menu" => ($context["structure_menu"] ?? null), ));
        echo "</li>
  <li>";
        // line 14
        echo t("Click <em>Edit menu</em> for the menu that you want to edit.", array());
        echo "</li>
  <li>";
        // line 15
        echo t("Drag menu links into a new order, or check/uncheck <em>Enabled</em> to enable or disable menu links.", array());
        echo "</li>
  <li>";
        // line 16
        echo t("Click <em>Save</em> to save your changes.", array());
        echo "</li>
</ol>";
    }

    public function getTemplateName()
    {
        return "@help_topics/menu_ui.overriding.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 16,  63 => 15,  59 => 14,  55 => 13,  50 => 11,  46 => 10,  41 => 9,  39 => 8,);
    }

    public function getSourceContext()
    {
        return new Source("", "@help_topics/menu_ui.overriding.html.twig", "C:\\xampp\\htdocs\\helpcenter\\core\\modules\\help_topics\\help_topics\\menu_ui.overriding.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 8, "trans" => 9);
        static $filters = array("escape" => 13);
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

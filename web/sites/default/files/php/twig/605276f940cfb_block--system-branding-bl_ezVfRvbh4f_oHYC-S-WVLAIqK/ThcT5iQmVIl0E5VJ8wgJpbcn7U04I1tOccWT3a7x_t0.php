<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* themes/custom/provcomlib/templates/block--system-branding-block.html.twig */
class __TwigTemplate_49a6c003e45d12cd30babf2ba702ca3d96bc93d1f09e064f87b3ec4dd47282c3 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["set" => 15, "if" => 16];
        $filters = ["t" => 17, "escape" => 19];
        $functions = ["path" => 17];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
                ['t', 'escape'],
                ['path']
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->getSourceContext());

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

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 15
        $context["attributes"] = $this->getAttribute(($context["attributes"] ?? null), "addClass", [0 => "site-branding"], "method");
        // line 16
        if ((($context["site_logo"] ?? null) || ($context["site_name"] ?? null))) {
            // line 17
            echo "  <a href=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\Core\Template\TwigExtension')->getPath("<front>"));
            echo "\" title=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Home"));
            echo "\" rel=\"home\" class=\"navbar-brand\">
    ";
            // line 18
            if (($context["site_logo"] ?? null)) {
                // line 19
                echo "      <img src=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["site_logo"] ?? null)), "html", null, true);
                echo "\" alt=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Home"));
                echo "\" class=\"img-fluid d-inline-block align-top\" />
    ";
            }
            // line 21
            echo "    <span class=\"ml-2 d-none d-md-inline\">";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["site_name"] ?? null)), "html", null, true);
            echo "</span>
  </a>
";
        }
        // line 24
        if (($context["site_slogan"] ?? null)) {
            // line 25
            echo "  <div class=\"ml-2 d-none d-inline-block align-top site-name-slogan\">
    ";
            // line 26
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["site_slogan"] ?? null)), "html", null, true);
            echo "
  </div>
";
        }
    }

    public function getTemplateName()
    {
        return "themes/custom/provcomlib/templates/block--system-branding-block.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 26,  85 => 25,  83 => 24,  76 => 21,  68 => 19,  66 => 18,  59 => 17,  57 => 16,  55 => 15,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/provcomlib/templates/block--system-branding-block.html.twig", "/var/www/html/web/themes/custom/provcomlib/templates/block--system-branding-block.html.twig");
    }
}

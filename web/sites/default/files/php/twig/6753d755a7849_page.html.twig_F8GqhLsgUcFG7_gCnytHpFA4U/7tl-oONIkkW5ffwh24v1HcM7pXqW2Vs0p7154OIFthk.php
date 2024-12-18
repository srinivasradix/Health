<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* themes/custom/healthcareers/templates/layout/page.html.twig */
class __TwigTemplate_354bd205365961101ef8962c77d8f862 extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->extensions[SandboxExtension::class];
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 46
        yield "<div class=\"layout-container\">

  ";
        // line 48
        yield from         $this->loadTemplate("healthcareers:header", "themes/custom/healthcareers/templates/layout/page.html.twig", 48)->unwrap()->yield(CoreExtension::merge($context, ["branding" => CoreExtension::getAttribute($this->env, $this->source,         // line 49
($context["page"] ?? null), "header_left", [], "any", false, false, true, 49), "login" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 50
($context["page"] ?? null), "header_top_row", [], "any", false, false, true, 50), "healthcareers_account_menu", [], "any", false, false, true, 50), "social" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 51
($context["page"] ?? null), "header_top_row", [], "any", false, false, true, 51), "healthcareers_socialmedialinks", [], "any", false, false, true, 51), "search" => CoreExtension::getAttribute($this->env, $this->source,         // line 52
($context["page"] ?? null), "header_search", [], "any", false, false, true, 52), "menu" => CoreExtension::getAttribute($this->env, $this->source,         // line 53
($context["page"] ?? null), "header_bottom_row", [], "any", false, false, true, 53)]));
        // line 55
        yield "
  <main role=\"main\">
    <a id=\"main-content\" tabindex=\"-1\"></a>";
        // line 58
        yield "
    <div class=\"layout-content\">
      <div class=\"content-wrapper\">
        ";
        // line 61
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 61), "html", null, true);
        yield "
      </div>
    </div>";
        // line 64
        yield "
  </main>

  ";
        // line 67
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "visual_explainer", [], "any", false, false, true, 67), "html", null, true);
        yield "

  ";
        // line 69
        yield from         $this->loadTemplate("healthcareers:footer", "themes/custom/healthcareers/templates/layout/page.html.twig", 69)->unwrap()->yield($context);
        // line 70
        yield "
</div>";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["page"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "themes/custom/healthcareers/templates/layout/page.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  81 => 70,  79 => 69,  74 => 67,  69 => 64,  64 => 61,  59 => 58,  55 => 55,  53 => 53,  52 => 52,  51 => 51,  50 => 50,  49 => 49,  48 => 48,  44 => 46,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "themes/custom/healthcareers/templates/layout/page.html.twig", "C:\\wamp\\www\\Reading\\web\\themes\\custom\\healthcareers\\templates\\layout\\page.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("include" => 48);
        static $filters = array("escape" => 61);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['include'],
                ['escape'],
                [],
                $this->source
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

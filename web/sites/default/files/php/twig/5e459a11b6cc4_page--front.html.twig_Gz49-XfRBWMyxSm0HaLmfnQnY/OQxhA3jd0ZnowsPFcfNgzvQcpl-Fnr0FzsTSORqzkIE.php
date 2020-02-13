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

/* themes/cloud51/templates/page--front.html.twig */
class __TwigTemplate_6ebab2f2b3da78039d432f1c922f6297942e5a0973c8ae00fa184a98e2ae5484 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["if" => 6, "block" => 26, "set" => 56];
        $filters = ["escape" => 8];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['if', 'block', 'set'],
                ['escape'],
                []
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
        // line 1
        echo "<div class=\"container front\">

  <header class=\"header\" role=\"banner\">

    <div id=\"wrapper-header-top\" class=\"wrapper\">
        ";
        // line 6
        if ($this->getAttribute(($context["page"] ?? null), "header_top", [])) {
            // line 7
            echo "        <div class=\"header-top\">
            ";
            // line 8
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "header_top", [])), "html", null, true);
            echo "
        </div>
        ";
        }
        // line 11
        echo "    </div>

    <div id=\"wrapper-header-nav\"  class=\"wrapper\">
      <div class=\"header-nav\">
        <div class=\"header-brand\">
          ";
        // line 16
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "header", [])), "html", null, true);
        echo "
        </div>
        <nav class=\"nav-menu\">
          ";
        // line 19
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "primary_menu", [])), "html", null, true);
        echo "
        </nav>
        
      </div>
    </div>
  </header>

  ";
        // line 26
        $this->displayBlock('content', $context, $blocks);
        // line 87
        echo "
  <footer id=\"footer\" role=\"contentinfo\">
    <div id=\"wrapper-main-footer\" class=\"wrapper\">
      <div id=\"main-footer\">
          <div id=\"footer-first\">
            ";
        // line 92
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer_first", [])), "html", null, true);
        echo "
          </div>

          <div id=\"footer-second\">
            ";
        // line 96
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer_second", [])), "html", null, true);
        echo "
          </div>

          <div id=\"footer-third\">
            ";
        // line 100
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer_third", [])), "html", null, true);
        echo "
          </div>

      </div>
    </div>


    <div id=\"wrapper-footer-copyright\" class=\"wrapper\">
      <div id=\"footer-copyright\">

            <div>
              ";
        // line 111
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer_bottom_left", [])), "html", null, true);
        echo "
            </div>

            <div>
              ";
        // line 115
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer_bottom_right", [])), "html", null, true);
        echo "
            </div>
            
      </div>
    </div>

  </footer>

</div>";
    }

    // line 26
    public function block_content($context, array $blocks = [])
    {
        // line 27
        echo "  <main role=\"main\" class=\"main\">

    <div id=\"wrapper-headline\" class=\"wrapper\">
      ";
        // line 30
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "headline", [])), "html", null, true);
        echo "
    </div>
    <div id=\"wrapper-breadcrumb\" class=\"wrapper\">
      ";
        // line 33
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "breadcrumb", [])), "html", null, true);
        echo "
    </div>
    <div id=\"wrapper-title-bar\" class=\"wrapper\">
      ";
        // line 36
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "title_bar", [])), "html", null, true);
        echo "
    </div>
    <div id=\"wrapper-highlighted\" class=\"wrapper\">
      ";
        // line 39
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "highlighted", [])), "html", null, true);
        echo "
    </div>
    <div id=\"wrapper-before-content\" class=\"wrapper\">
      ";
        // line 42
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "before_content", [])), "html", null, true);
        echo "
    </div>

    <div id=\"wrapper-content\" class=\"wrapper\">
      <div id=\"content\" class=\"content\">
        <div>

          ";
        // line 49
        if ($this->getAttribute(($context["page"] ?? null), "sidebar_first", [])) {
            // line 50
            echo "            <aside class=\"sidebar-first\" role=\"complementary\">
              ";
            // line 51
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "sidebar_first", [])), "html", null, true);
            echo "
            </aside>
          ";
        }
        // line 54
        echo "
          ";
        // line 55
        if (($this->getAttribute(($context["page"] ?? null), "sidebar_second", []) && $this->getAttribute(($context["page"] ?? null), "sidebar_first", []))) {
            // line 56
            echo "            <!-- ";
            $context["col_class"] = "col-md-6";
            echo " -->
          ";
        } elseif (($this->getAttribute(        // line 57
($context["page"] ?? null), "sidebar_second", []) || $this->getAttribute(($context["page"] ?? null), "sidebar_first", []))) {
            // line 58
            echo "            <!-- ";
            $context["col_class"] = "col-md-9";
            echo " -->
          ";
        } else {
            // line 60
            echo "            <!-- ";
            $context["col_class"] = "col-md-12";
            echo " -->
          ";
        }
        // line 62
        echo "
          <div>
            ";
        // line 64
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "content", [])), "html", null, true);
        echo "
          </div>

          ";
        // line 67
        if ($this->getAttribute(($context["page"] ?? null), "sidebar_second", [])) {
            // line 68
            echo "            <aside class=\"sidebar-second\" role=\"complementary\">
              ";
            // line 69
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "sidebar_second", [])), "html", null, true);
            echo "
            </aside>
          ";
        }
        // line 72
        echo "
        </div>
      </div>
    </div>

    <div id=\"wrapper-after-content\" class=\"wrapper\">
      ";
        // line 78
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "after_content", [])), "html", null, true);
        echo "
    </div>

    <div id=\"wrapper-full-width\" class=\"wrapper\">
      ";
        // line 82
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "full_width", [])), "html", null, true);
        echo "
    </div>
    
  </main>
  ";
    }

    public function getTemplateName()
    {
        return "themes/cloud51/templates/page--front.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  267 => 82,  260 => 78,  252 => 72,  246 => 69,  243 => 68,  241 => 67,  235 => 64,  231 => 62,  225 => 60,  219 => 58,  217 => 57,  212 => 56,  210 => 55,  207 => 54,  201 => 51,  198 => 50,  196 => 49,  186 => 42,  180 => 39,  174 => 36,  168 => 33,  162 => 30,  157 => 27,  154 => 26,  141 => 115,  134 => 111,  120 => 100,  113 => 96,  106 => 92,  99 => 87,  97 => 26,  87 => 19,  81 => 16,  74 => 11,  68 => 8,  65 => 7,  63 => 6,  56 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "themes/cloud51/templates/page--front.html.twig", "/Applications/MAMP/htdocs/cloud51-webdesign/web/themes/cloud51/templates/page--front.html.twig");
    }
}

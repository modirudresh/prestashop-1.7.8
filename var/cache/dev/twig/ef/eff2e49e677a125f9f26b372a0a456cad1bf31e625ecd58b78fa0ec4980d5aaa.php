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

/* @Modules/ps_metrics/views/templates/admin/metrics.html.twig */
class __TwigTemplate_9e0f6ce2de4bcebaf53dd2a5fd5a53e28ec0a7454fb93c7c8ec65ee0742958b5 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'content' => [$this, 'block_content'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 21
        return $this->loadTemplate(((($context["fullscreen"] ?? $this->getContext($context, "fullscreen"))) ? ("@Modules/ps_metrics/views/templates/admin/fullscreen.html.twig") : ("@PrestaShop/Admin/layout.html.twig")), "@Modules/ps_metrics/views/templates/admin/metrics.html.twig", 21);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Modules/ps_metrics/views/templates/admin/metrics.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Modules/ps_metrics/views/templates/admin/metrics.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 23
    public function block_content($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 24
        echo "  ";
        $this->displayParentBlock("content", $context, $blocks);
        echo "

  <div id=\"error-loading-app\" class=\"hide\">
    ";
        // line 27
        $this->loadTemplate("@Modules/ps_metrics/views/templates/admin/error.html.twig", "@Modules/ps_metrics/views/templates/admin/metrics.html.twig", 27)->display($context);
        // line 28
        echo "  </div>
  <div id=\"metrics-app\"></div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 32
    public function block_stylesheets($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 33
        echo "  ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "

  ";
        // line 35
        if ((($context["useLocalVueApp"] ?? $this->getContext($context, "useLocalVueApp")) == false)) {
            // line 36
            echo "    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, ($context["pathAssetsCdn"] ?? $this->getContext($context, "pathAssetsCdn")), "html", null, true);
            echo "\" type=\"text/css\" media=\"all\">
  ";
        } elseif (((        // line 37
($context["useLocalVueApp"] ?? $this->getContext($context, "useLocalVueApp")) == true) && (($context["useBuildModeOnly"] ?? $this->getContext($context, "useBuildModeOnly")) == true))) {
            // line 38
            echo "    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, ($context["pathAssetsBuilded"] ?? $this->getContext($context, "pathAssetsBuilded")), "html", null, true);
            echo "\" type=\"text/css\" media=\"all\">
  ";
        }
        // line 40
        echo "
  <style>
    /** Hide native multistore module activation panel, because of visual regressions on non-bootstrap content */
    #content.nobootstrap div.bootstrap.panel {
      display: none;
    }
  </style>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 49
    public function block_javascripts($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 50
        echo "  ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "

  <script>
    var oAuthGoogleErrorMessage = '";
        // line 53
        echo ($context["oAuthGoogleErrorMessage"] ?? $this->getContext($context, "oAuthGoogleErrorMessage"));
        echo "';
    var fullscreen = ";
        // line 54
        if (($context["fullscreen"] ?? $this->getContext($context, "fullscreen"))) {
            echo " true ";
        } else {
            echo " false ";
        }
        echo ";
    var contextPsAccounts = ";
        // line 55
        echo twig_jsonencode_filter(($context["contextPsAccounts"] ?? $this->getContext($context, "contextPsAccounts")));
        echo ";
    var contextPsEventbus = ";
        // line 56
        echo twig_jsonencode_filter(($context["contextPsEventbus"] ?? $this->getContext($context, "contextPsEventbus")));
        echo ";
    var metricsApiUrl = '";
        // line 57
        echo ($context["metricsApiUrl"] ?? $this->getContext($context, "metricsApiUrl"));
        echo "';
    var metricsModule = ";
        // line 58
        echo twig_jsonencode_filter(($context["metricsModule"] ?? $this->getContext($context, "metricsModule")));
        echo ";
    var eventBusModule = ";
        // line 59
        echo twig_jsonencode_filter(($context["eventBusModule"] ?? $this->getContext($context, "eventBusModule")));
        echo ";
    var accountsModule = ";
        // line 60
        echo twig_jsonencode_filter(($context["accountsModule"] ?? $this->getContext($context, "accountsModule")));
        echo ";
    var mboModule = ";
        // line 61
        echo twig_jsonencode_filter(($context["mboModule"] ?? $this->getContext($context, "mboModule")));
        echo ";
    var graphqlEndpoint = '";
        // line 62
        echo ($context["graphqlEndpoint"] ?? $this->getContext($context, "graphqlEndpoint"));
        echo "';
    var isoCode = '";
        // line 63
        echo ($context["isoCode"] ?? $this->getContext($context, "isoCode"));
        echo "';
    var currencyIsoCode = '";
        // line 64
        echo ($context["currencyIsoCode"] ?? $this->getContext($context, "currencyIsoCode"));
        echo "';
    var currentPage = '";
        // line 65
        echo ($context["currentPage"] ?? $this->getContext($context, "currentPage"));
        echo "';
    var adminToken = '";
        // line 66
        echo ($context["adminToken"] ?? $this->getContext($context, "adminToken"));
        echo "';
  </script>

  ";
        // line 69
        if ((($context["useLocalVueApp"] ?? $this->getContext($context, "useLocalVueApp")) == true)) {
            // line 70
            echo "    ";
            if ((($context["useBuildModeOnly"] ?? $this->getContext($context, "useBuildModeOnly")) == true)) {
                // line 71
                echo "      <script type=\"module\" src=\"";
                echo twig_escape_filter($this->env, ($context["pathAppBuilded"] ?? $this->getContext($context, "pathAppBuilded")), "html", null, true);
                echo "\"></script>
    ";
            } else {
                // line 73
                echo "      <script type=\"module\" src=\"https://localhost:3001/@vite/client\"></script>
      <script type=\"module\" src=\"https://localhost:3001/src/main.ts\"></script>
    ";
            }
            // line 76
            echo "  ";
        } else {
            // line 77
            echo "    <script type=\"module\" src=\"";
            echo twig_escape_filter($this->env, ($context["pathAppCdn"] ?? $this->getContext($context, "pathAppCdn")), "html", null, true);
            echo "\"></script>
  ";
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@Modules/ps_metrics/views/templates/admin/metrics.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 77,  223 => 76,  218 => 73,  212 => 71,  209 => 70,  207 => 69,  201 => 66,  197 => 65,  193 => 64,  189 => 63,  185 => 62,  181 => 61,  177 => 60,  173 => 59,  169 => 58,  165 => 57,  161 => 56,  157 => 55,  149 => 54,  145 => 53,  138 => 50,  129 => 49,  112 => 40,  106 => 38,  104 => 37,  99 => 36,  97 => 35,  91 => 33,  82 => 32,  70 => 28,  68 => 27,  61 => 24,  52 => 23,  31 => 21,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{#**
 * Copyright since 2007 PrestaShop SA and Contributors
 * PrestaShop is an International Registered Trademark & Property of PrestaShop SA
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Academic Free License version 3.0
 * that is bundled with this package in the file LICENSE.md.
 * It is also available through the world-wide-web at this URL:
 * https://opensource.org/licenses/AFL-3.0
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@prestashop.com so we can send you a copy immediately.
 *
 * @author    PrestaShop SA and Contributors <contact@prestashop.com>
 * @copyright Since 2007 PrestaShop SA and Contributors
 * @license   https://opensource.org/licenses/AFL-3.0 Academic Free License version 3.0
 *#}


{% extends fullscreen ? '@Modules/ps_metrics/views/templates/admin/fullscreen.html.twig' : '@PrestaShop/Admin/layout.html.twig' %}

{% block content %}
  {{ parent() }}

  <div id=\"error-loading-app\" class=\"hide\">
    {% include '@Modules/ps_metrics/views/templates/admin/error.html.twig' %}
  </div>
  <div id=\"metrics-app\"></div>
{% endblock %}

{% block stylesheets %}
  {{ parent() }}

  {% if useLocalVueApp == false %}
    <link rel=\"stylesheet\" href=\"{{ pathAssetsCdn }}\" type=\"text/css\" media=\"all\">
  {% elseif  useLocalVueApp == true and useBuildModeOnly == true %}
    <link rel=\"stylesheet\" href=\"{{ pathAssetsBuilded }}\" type=\"text/css\" media=\"all\">
  {% endif %}

  <style>
    /** Hide native multistore module activation panel, because of visual regressions on non-bootstrap content */
    #content.nobootstrap div.bootstrap.panel {
      display: none;
    }
  </style>
{% endblock %}

{% block javascripts %}
  {{ parent() }}

  <script>
    var oAuthGoogleErrorMessage = '{{ oAuthGoogleErrorMessage|raw }}';
    var fullscreen = {% if fullscreen %} true {% else %} false {% endif %};
    var contextPsAccounts = {{ contextPsAccounts|json_encode|raw }};
    var contextPsEventbus = {{ contextPsEventbus|json_encode|raw }};
    var metricsApiUrl = '{{ metricsApiUrl|raw }}';
    var metricsModule = {{ metricsModule|json_encode|raw }};
    var eventBusModule = {{ eventBusModule|json_encode|raw }};
    var accountsModule = {{ accountsModule|json_encode|raw }};
    var mboModule = {{ mboModule|json_encode|raw }};
    var graphqlEndpoint = '{{ graphqlEndpoint|raw }}';
    var isoCode = '{{ isoCode|raw }}';
    var currencyIsoCode = '{{ currencyIsoCode|raw }}';
    var currentPage = '{{ currentPage|raw }}';
    var adminToken = '{{ adminToken|raw }}';
  </script>

  {% if useLocalVueApp == true %}
    {% if useBuildModeOnly == true %}
      <script type=\"module\" src=\"{{ pathAppBuilded }}\"></script>
    {% else %}
      <script type=\"module\" src=\"https://localhost:3001/@vite/client\"></script>
      <script type=\"module\" src=\"https://localhost:3001/src/main.ts\"></script>
    {% endif %}
  {% else %}
    <script type=\"module\" src=\"{{ pathAppCdn }}\"></script>
  {% endif %}
{% endblock %}
", "@Modules/ps_metrics/views/templates/admin/metrics.html.twig", "/var/www/html/prestashop1.7/modules/ps_metrics/views/templates/admin/metrics.html.twig");
    }
}

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

/* @olivero_subtheme/slider-block.html.twig */
class __TwigTemplate_ee815df6fb3d9b4985f3d57ac7b45b54 extends Template
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
        // line 1
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("olivero_subtheme/slider"), "html", null, true);
        echo "

<link rel=\"preconnect\" href=\"https://fonts.googleapis.com\">
<link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin>
<link href=\"https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap\" rel=\"stylesheet\">

<div class=\"slider-container\">
  <!-- Tabs for navigation -->
  <div class=\"tabs\">
    <div class=\"tab\" data-slide=\"1\">Featured Conferences</div>
    <div class=\"tab\" data-slide=\"2\">Recommended Conferences</div>
    <div class=\"tab\" data-slide=\"3\">Past Conferences</div>
  </div>

  <!-- Slider section with slides -->
  <div class=\"slider\">
    <div class=\"slide\" id=\"slide-1\">
      <div class=\"slide-content\">
        <div class=\"image-section\">
          <img src=\"/themes/custom/olivero_subtheme/images/slide1.png\" alt=\"Image 1\">
        </div>
        <div class=\"text-section\">
          <div>
            <h3>Southampton Industries Conference 2016</h3>
          </div>
          <div class=\"sub-text\">
            <div>
              <span><img src=\"/themes/custom/olivero_subtheme/images/tag.svg\" alt=\"\"></span>
              <span class=\"text\">Management, Leadership</span>
            </div>
            <div>
              <span><img src=\"/themes/custom/olivero_subtheme/images/calender.svg\" alt=\"\"></span>
              <span class=\"text\">11 May 2016</span>
            </div>
            <div>
              <span><img src=\"/themes/custom/olivero_subtheme/images/location.svg\" alt=\"\"></span>
              <span class=\"text\">Park Plaza Hotel, Bangalore, India</span>
            </div>
          </div>
        </div>
        <div class=\"bottom-section\">
          <span class=\"icon\">
            <a href=\"#\"><img src=\"/themes/custom/olivero_subtheme/images/wishlist.svg\" alt=\"wishlist icon\"></a>
          </span>
          <span class=\"icon\">
            <a href=\"#\"><img src=\"/themes/custom/olivero_subtheme/images/download.svg\" alt=\"download icon\"></a>
          </span>
          <span class=\"icon\">
            <a href=\"#\"><img src=\"/themes/custom/olivero_subtheme/images/share.svg\" alt=\"share icon\"></a>
          </span>
          <div class=\"link\"><a href=\"\">View Details</a></div>
        </div>
      </div>
    </div>
    
    <div class=\"slide\" id=\"slide-2\">
      <div class=\"slide-content\">
        <div class=\"image-section\">
          <img src=\"/themes/custom/olivero_subtheme/images/slide2.png\" alt=\"Image 2\">
        </div>
        <div class=\"text-section\">
          <div>
            <h3>Southampton Industries Conference 2016</h3>
          </div>
          <div class=\"sub-text\">
            <div>
              <span><img src=\"/themes/custom/olivero_subtheme/images/tag.svg\" alt=\"\"></span>
              <span class=\"text\">Management, Leadership</span>
            </div>
            <div>
              <span><img src=\"/themes/custom/olivero_subtheme/images/calender.svg\" alt=\"\"></span>
              <span class=\"text\">11 May 2016</span>
            </div>
            <div>
              <span><img src=\"/themes/custom/olivero_subtheme/images/location.svg\" alt=\"\"></span>
              <span class=\"text\">Park Plaza Hotel, Bangalore, India</span>
            </div>
          </div>
        </div>
        <div class=\"bottom-section\">
          <span class=\"icon\">
            <a href=\"#\"><img src=\"/themes/custom/olivero_subtheme/images/wishlist.svg\" alt=\"wishlist icon\"></a>
          </span>
          <span class=\"icon\">
            <a href=\"#\"><img src=\"/themes/custom/olivero_subtheme/images/download.svg\" alt=\"download icon\"></a>
          </span>
          <span class=\"icon\">
            <a href=\"#\"><img src=\"/themes/custom/olivero_subtheme/images/share.svg\" alt=\"share icon\"></a>
          </span>
          <div class=\"link\"><a href=\"\">View Details</a></div>
        </div>
      </div>
    </div>

    <div class=\"slide\" id=\"slide-3\">
      <div class=\"slide-content\">
        <div class=\"image-section\">
          <img src=\"/themes/custom/olivero_subtheme/images/slide1.png\" alt=\"Image 3\">
        </div>
        <div class=\"text-section\">
          <div>
            <h3>Southampton Industries Conference 2016</h3>
          </div>
          <div class=\"sub-text\">
            <div>
              <span><img src=\"/themes/custom/olivero_subtheme/images/tag.svg\" alt=\"\"></span>
              <span class=\"text\">Management, Leadership</span>
            </div>
            <div>
              <span><img src=\"/themes/custom/olivero_subtheme/images/calender.svg\" alt=\"\"></span>
              <span class=\"text\">11 May 2016</span>
            </div>
            <div>
              <span><img src=\"/themes/custom/olivero_subtheme/images/location.svg\" alt=\"\"></span>
              <span class=\"text\">Park Plaza Hotel, Bangalore, India</span>
            </div>
          </div>
        </div>
        <div class=\"bottom-section\">
          <span class=\"icon\">
            <a href=\"#\"><img src=\"/themes/custom/olivero_subtheme/images/wishlist.svg\" alt=\"wishlist icon\"></a>
          </span>
          <span class=\"icon\">
            <a href=\"#\"><img src=\"/themes/custom/olivero_subtheme/images/download.svg\" alt=\"download icon\"></a>
          </span>
          <span class=\"icon\">
            <a href=\"#\"><img src=\"/themes/custom/olivero_subtheme/images/share.svg\" alt=\"share icon\"></a>
          </span>
          <div class=\"link\"><a href=\"\">View Details</a></div>
        </div>
      </div>
    </div>
  </div>

  <!-- Desktop arrows -->
  <div class=\"slider-arrows\">
    <span class=\"prev\">&#10094;</span>
    <span class=\"next\">&#10095;</span>
  </div>

  <!-- Mobile pagination -->
  <div class=\"pagination\">
    <span class=\"pagination-dot\" data-slide=\"1\"></span>
    <span class=\"pagination-dot\" data-slide=\"2\"></span>
    <span class=\"pagination-dot\" data-slide=\"3\"></span>
  </div>
</div>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@olivero_subtheme/slider-block.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@olivero_subtheme/slider-block.html.twig", "/var/www/html/web/themes/custom/olivero_subtheme/templates/slider-block.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array("escape" => 1);
        static $functions = array("attach_library" => 1);

        try {
            $this->sandbox->checkSecurity(
                [],
                ['escape'],
                ['attach_library']
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

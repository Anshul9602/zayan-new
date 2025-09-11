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

/* catalog/view/template/common/header.twig */
class __TwigTemplate_d381196dad78507556d1b51181fd7c65139c9e76323e319c5e304cc72fc2511d extends Template
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
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1
        yield "<!DOCTYPE html>
<html dir=\"";
        // line 2
        yield ($context["direction"] ?? null);
        yield "\" lang=\"";
        yield ($context["lang"] ?? null);
        yield "\">
<head>
  <meta charset=\"UTF-8\"/>
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
  <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
  <title>";
        // line 7
        yield ($context["title"] ?? null);
        yield "</title>
  <base href=\"";
        // line 8
        yield ($context["base"] ?? null);
        yield "\"/>
  ";
        // line 9
        if (($context["description"] ?? null)) {
            // line 10
            yield "    <meta name=\"description\" content=\"";
            yield ($context["description"] ?? null);
            yield "\"/>
  ";
        }
        // line 12
        yield "  ";
        if (($context["keywords"] ?? null)) {
            // line 13
            yield "    <meta name=\"keywords\" content=\"";
            yield ($context["keywords"] ?? null);
            yield "\"/>
  ";
        }
        // line 15
        yield "
   <!-- font -->
   <link rel=\"stylesheet\" href=\"assets/fonts/fonts.css\">
   <link rel=\"stylesheet\" href=\"assets/icon/icomoon/style.css\">
  
  <script src=\"assets/js/jquery.min.js\" type=\"text/javascript\"></script>
  <link href=\"assets/css/bootstrap.min.css\" type=\"text/css\" rel=\"stylesheet\" media=\"screen\"/>
  <link rel=\"stylesheet\" href=\"assets/css/swiper-bundle.min.css\">
  <link rel=\"stylesheet\" href=\"assets/css/animate.css\">
  <link rel=\"stylesheet\" type=\"text/css\" href=\"assets/css/styles.css\">
  <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css\">
  <script src=\"catalog/view/javascript/common.js\" type=\"text/javascript\"></script>
  
  ";
        // line 28
        if (($context["icon"] ?? null)) {
            // line 29
            yield "    <link rel=\"icon\" href=\"";
            yield ($context["icon"] ?? null);
            yield "\" type=\"image/png\">
  ";
        }
        // line 31
        yield "

  ";
        // line 33
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["styles"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["style"]) {
            // line 34
            yield "    <link href=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["style"], "href", [], "any", false, false, false, 34);
            yield "\" type=\"text/css\" rel=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["style"], "rel", [], "any", false, false, false, 34);
            yield "\" media=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["style"], "media", [], "any", false, false, false, 34);
            yield "\"/>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['style'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        yield "  ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["scripts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["script"]) {
            // line 37
            yield "    <script src=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["script"], "href", [], "any", false, false, false, 37);
            yield "\" type=\"text/javascript\"></script>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['script'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        yield "  ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["links"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["link"]) {
            // line 40
            yield "    <link href=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["link"], "href", [], "any", false, false, false, 40);
            yield "\" rel=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["link"], "rel", [], "any", false, false, false, 40);
            yield "\"/>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['link'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        yield "  ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["analytics"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["analytic"]) {
            // line 43
            yield "    ";
            yield $context["analytic"];
            yield "
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['analytic'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        yield "  <style>
   header {
    border-bottom: thin solid #f1f1f1;
}
.tf-btn-line {
   font-weight: 500;
}
.sect-title .title {
   font-weight: 400;
}
.fw-medium {
   font-weight: 400 !important;
}
  </style>
</head>


<body>
 <!-- Scroll Top -->
 <button id=\"goTop\">
        <span class=\"border-progress\"></span>
        <span class=\"icon icon-caret-up\"></span>
    </button>

    <!-- preload -->
    <div class=\"preload preload-container\" id=\"preload\">
        <div class=\"preload-logo\">
            <div class=\"spinner\"></div>
        </div>
    </div>
    <!-- /preload -->

<main id=\"wrapper\">   
<div id=\"container\">
<header>
   <div class=\"container\">
      <div class=\"row header-row\">
         <div class=\"col-md-4\">
            <nav class=\"box-navigation\">
               <ul class=\"box-nav-menu\">
                  <li class=\"menu-item\">
                     <a href=\"#\" class=\"item-link\">SHOP</a>
                     ";
        // line 87
        yield ($context["menu"] ?? null);
        yield "
                  </li>
                  <li class=\"menu-item position-relative\">
                     <a href=\"#\" class=\"item-link\">CATALOG<i class=\"icon icon-caret-down\"></i></a>
                     <div class=\"sub-menu\">
                        <ul class=\"sub-menu_list\">
                           <li><a href=\"index.php?route=common/catalogue\" class=\"sub-menu_link\">Brochures and Catalog</a></li>
                           <li><a href=\"index.php?route=common/blog\" class=\"sub-menu_link\">Zayn Blog</a></li>
                        </ul>
                     </div>
                  </li>
                  <li class=\"menu-item position-relative\">
                     <a href=\"index.php?route=common/about\" class=\"item-link\">ABOUT</a>
                  </li>
               </ul>
            </nav>
         </div>
         <div class=\"col-lg-4\">
            <div id=\"logo\" class=\"text-center\">
               ";
        // line 106
        if (($context["logo"] ?? null)) {
            // line 107
            yield "               <a href=\"";
            yield ($context["home"] ?? null);
            yield "\">
               <img src=\"";
            // line 108
            yield ($context["logo"] ?? null);
            yield "\" title=\"";
            yield ($context["name"] ?? null);
            yield "\" alt=\"";
            yield ($context["name"] ?? null);
            yield "\" class=\"img-fluid\"/>
               </a>
               ";
        } else {
            // line 111
            yield "               <h1><a href=\"";
            yield ($context["home"] ?? null);
            yield "\">Zayn</a></h1>
               ";
        }
        // line 113
        yield "            </div>
         </div>
         <div class=\"col-md-4\">
            <ul class=\"nav-icon-list\">
               <li class=\"d-none d-lg-flex\">
               ";
        // line 118
        if ( !($context["logged"] ?? null)) {
            // line 119
            yield "                  <a class=\"nav-icon-item link\" href=\"index.php?route=account/login\"><i class=\"icon icon-user\"></i></a>
                  ";
        } else {
            // line 121
            yield "                  <a class=\"nav-icon-item link\" href=\"index.php?route=account/account\"><i class=\"icon icon-user\"></i></a>
                  ";
        }
        // line 123
        yield "               </li>
               <li class=\"d-none d-md-flex\">
                 ";
        // line 125
        yield ($context["search"] ?? null);
        yield "
               </li>
               <li class=\"d-none d-sm-flex\">
                 ";
        // line 128
        if ( !($context["logged"] ?? null)) {
            // line 129
            yield "                  <a class=\"nav-icon-item link\" href=\"index.php?route=common/wishlist\"><i class=\"icon icon-heart\"></i></a>
                  <span class=\"wishlist-count\">0</span>
                  ";
        } else {
            // line 132
            yield "                  <a class=\"nav-icon-item link\" href=\"index.php?route=account/wishlist\"><i class=\"icon icon-heart\"></i></a>
                  <span class=\"wishlist-count\">0</span>
                  ";
        }
        // line 135
        yield "                </li>
               <li class=\"shop-cart\"  data-bs-target=\"#shoppingCart\">
                 ";
        // line 137
        yield ($context["cart"] ?? null);
        yield "
               </li>
            </ul>
         </div>
      </div>
   </div>
</header>

  <main>
  
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "catalog/view/template/common/header.twig";
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
        return array (  300 => 137,  296 => 135,  291 => 132,  286 => 129,  284 => 128,  278 => 125,  274 => 123,  270 => 121,  266 => 119,  264 => 118,  257 => 113,  251 => 111,  241 => 108,  236 => 107,  234 => 106,  212 => 87,  168 => 45,  159 => 43,  154 => 42,  143 => 40,  138 => 39,  129 => 37,  124 => 36,  111 => 34,  107 => 33,  103 => 31,  97 => 29,  95 => 28,  80 => 15,  74 => 13,  71 => 12,  65 => 10,  63 => 9,  59 => 8,  55 => 7,  45 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html dir=\"{{ direction }}\" lang=\"{{ lang }}\">
<head>
  <meta charset=\"UTF-8\"/>
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
  <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
  <title>{{ title }}</title>
  <base href=\"{{ base }}\"/>
  {% if description %}
    <meta name=\"description\" content=\"{{ description }}\"/>
  {% endif %}
  {% if keywords %}
    <meta name=\"keywords\" content=\"{{ keywords }}\"/>
  {% endif %}

   <!-- font -->
   <link rel=\"stylesheet\" href=\"assets/fonts/fonts.css\">
   <link rel=\"stylesheet\" href=\"assets/icon/icomoon/style.css\">
  
  <script src=\"assets/js/jquery.min.js\" type=\"text/javascript\"></script>
  <link href=\"assets/css/bootstrap.min.css\" type=\"text/css\" rel=\"stylesheet\" media=\"screen\"/>
  <link rel=\"stylesheet\" href=\"assets/css/swiper-bundle.min.css\">
  <link rel=\"stylesheet\" href=\"assets/css/animate.css\">
  <link rel=\"stylesheet\" type=\"text/css\" href=\"assets/css/styles.css\">
  <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css\">
  <script src=\"catalog/view/javascript/common.js\" type=\"text/javascript\"></script>
  
  {% if icon %}
    <link rel=\"icon\" href=\"{{ icon }}\" type=\"image/png\">
  {% endif %}


  {% for style in styles %}
    <link href=\"{{ style.href }}\" type=\"text/css\" rel=\"{{ style.rel }}\" media=\"{{ style.media }}\"/>
  {% endfor %}
  {% for script in scripts %}
    <script src=\"{{ script.href }}\" type=\"text/javascript\"></script>
  {% endfor %}
  {% for link in links %}
    <link href=\"{{ link.href }}\" rel=\"{{ link.rel }}\"/>
  {% endfor %}
  {% for analytic in analytics %}
    {{ analytic }}
  {% endfor %}
  <style>
   header {
    border-bottom: thin solid #f1f1f1;
}
.tf-btn-line {
   font-weight: 500;
}
.sect-title .title {
   font-weight: 400;
}
.fw-medium {
   font-weight: 400 !important;
}
  </style>
</head>


<body>
 <!-- Scroll Top -->
 <button id=\"goTop\">
        <span class=\"border-progress\"></span>
        <span class=\"icon icon-caret-up\"></span>
    </button>

    <!-- preload -->
    <div class=\"preload preload-container\" id=\"preload\">
        <div class=\"preload-logo\">
            <div class=\"spinner\"></div>
        </div>
    </div>
    <!-- /preload -->

<main id=\"wrapper\">   
<div id=\"container\">
<header>
   <div class=\"container\">
      <div class=\"row header-row\">
         <div class=\"col-md-4\">
            <nav class=\"box-navigation\">
               <ul class=\"box-nav-menu\">
                  <li class=\"menu-item\">
                     <a href=\"#\" class=\"item-link\">SHOP</a>
                     {{ menu }}
                  </li>
                  <li class=\"menu-item position-relative\">
                     <a href=\"#\" class=\"item-link\">CATALOG<i class=\"icon icon-caret-down\"></i></a>
                     <div class=\"sub-menu\">
                        <ul class=\"sub-menu_list\">
                           <li><a href=\"index.php?route=common/catalogue\" class=\"sub-menu_link\">Brochures and Catalog</a></li>
                           <li><a href=\"index.php?route=common/blog\" class=\"sub-menu_link\">Zayn Blog</a></li>
                        </ul>
                     </div>
                  </li>
                  <li class=\"menu-item position-relative\">
                     <a href=\"index.php?route=common/about\" class=\"item-link\">ABOUT</a>
                  </li>
               </ul>
            </nav>
         </div>
         <div class=\"col-lg-4\">
            <div id=\"logo\" class=\"text-center\">
               {% if logo %}
               <a href=\"{{ home }}\">
               <img src=\"{{ logo }}\" title=\"{{ name }}\" alt=\"{{ name }}\" class=\"img-fluid\"/>
               </a>
               {% else %}
               <h1><a href=\"{{ home }}\">Zayn</a></h1>
               {% endif %}
            </div>
         </div>
         <div class=\"col-md-4\">
            <ul class=\"nav-icon-list\">
               <li class=\"d-none d-lg-flex\">
               {% if not logged %}
                  <a class=\"nav-icon-item link\" href=\"index.php?route=account/login\"><i class=\"icon icon-user\"></i></a>
                  {% else %}
                  <a class=\"nav-icon-item link\" href=\"index.php?route=account/account\"><i class=\"icon icon-user\"></i></a>
                  {% endif %}
               </li>
               <li class=\"d-none d-md-flex\">
                 {{ search }}
               </li>
               <li class=\"d-none d-sm-flex\">
                 {% if not logged %}
                  <a class=\"nav-icon-item link\" href=\"index.php?route=common/wishlist\"><i class=\"icon icon-heart\"></i></a>
                  <span class=\"wishlist-count\">0</span>
                  {% else %}
                  <a class=\"nav-icon-item link\" href=\"index.php?route=account/wishlist\"><i class=\"icon icon-heart\"></i></a>
                  <span class=\"wishlist-count\">0</span>
                  {% endif %}
                </li>
               <li class=\"shop-cart\"  data-bs-target=\"#shoppingCart\">
                 {{ cart }}
               </li>
            </ul>
         </div>
      </div>
   </div>
</header>

  <main>
  
", "catalog/view/template/common/header.twig", "C:\\xampp\\htdocs\\newzyan\\catalog\\view\\template\\common\\header.twig");
    }
}

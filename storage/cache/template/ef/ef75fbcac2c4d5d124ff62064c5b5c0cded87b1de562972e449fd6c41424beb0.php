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
\t<head>
\t\t<meta charset=\"UTF-8\"/>
\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
\t\t<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
\t\t<title>";
        // line 7
        yield ($context["title"] ?? null);
        yield "</title>
\t\t<base href=\"";
        // line 8
        yield ($context["base"] ?? null);
        yield "\"/>
\t\t";
        // line 9
        if (($context["description"] ?? null)) {
            // line 10
            yield "\t\t\t<meta name=\"description\" content=\"";
            yield ($context["description"] ?? null);
            yield "\"/>
\t\t";
        }
        // line 12
        yield "\t\t";
        if (($context["keywords"] ?? null)) {
            // line 13
            yield "\t\t\t<meta name=\"keywords\" content=\"";
            yield ($context["keywords"] ?? null);
            yield "\"/>
\t\t";
        }
        // line 15
        yield "
\t\t<!-- font -->
\t\t<link rel=\"stylesheet\" href=\"assets/fonts/fonts.css\">
\t\t<link rel=\"stylesheet\" href=\"assets/icon/icomoon/style.css\">

\t\t<script src=\"assets/js/jquery.min.js\" type=\"text/javascript\"></script>
\t\t<link href=\"assets/css/bootstrap.min.css\" type=\"text/css\" rel=\"stylesheet\" media=\"screen\"/>
\t\t<link rel=\"stylesheet\" href=\"assets/css/swiper-bundle.min.css\">
\t\t<link rel=\"stylesheet\" href=\"assets/css/animate.css\">
\t\t<link rel=\"stylesheet\" type=\"text/css\" href=\"assets/css/styles.css\">
\t\t<link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css\">
\t\t<script src=\"catalog/view/javascript/common.js\" type=\"text/javascript\"></script>

\t\t";
        // line 28
        if (($context["icon"] ?? null)) {
            // line 29
            yield "\t\t\t<link rel=\"icon\" href=\"";
            yield ($context["icon"] ?? null);
            yield "\" type=\"image/png\">
\t\t";
        }
        // line 31
        yield "

\t\t";
        // line 33
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["styles"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["style"]) {
            // line 34
            yield "\t\t\t<link href=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["style"], "href", [], "any", false, false, false, 34);
            yield "\" type=\"text/css\" rel=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["style"], "rel", [], "any", false, false, false, 34);
            yield "\" media=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["style"], "media", [], "any", false, false, false, 34);
            yield "\"/>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['style'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        yield "\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["scripts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["script"]) {
            // line 37
            yield "\t\t\t<script src=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["script"], "href", [], "any", false, false, false, 37);
            yield "\" type=\"text/javascript\"></script>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['script'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        yield "\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["links"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["link"]) {
            // line 40
            yield "\t\t\t<link href=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["link"], "href", [], "any", false, false, false, 40);
            yield "\" rel=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["link"], "rel", [], "any", false, false, false, 40);
            yield "\"/>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['link'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        yield "\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["analytics"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["analytic"]) {
            // line 43
            yield "\t\t\t";
            yield $context["analytic"];
            yield "
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['analytic'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        yield "\t\t<style>
\t\t\theader {
\t\t\t\tborder-bottom: thin solid #f1f1f1;
\t\t\t}
\t\t\t.tf-btn-line {
\t\t\t\tfont-weight: 500;
\t\t\t}
\t\t\t.sect-title .title {
\t\t\t\tfont-weight: 400;
\t\t\t}
\t\t\t.fw-medium {
\t\t\t\tfont-weight: 400 !important;
\t\t\t}
         @media (max-width: 768px) {
\t\t\t.canvas-wrapper {
    padding: 0;
    isolation: isolate;
    height: 100%;
    width: 90%;
    margin: auto;
    max-height: none;
    display: grid
;
    grid-auto-rows: auto minmax(0, 1fr) auto;
    align-content: start;
}
\t\t\t    .tf-header {
        padding-top: 0px;
        padding-bottom: 0px;
    }
            #logo a img {
    width: 70px !important;
}
#newLetter .image img {
width:100% !important;
}
.modal-newletter .modal-dialog {
    max-width: 80% !important;
}
.tf-swiper.home .swiper-slide
 {
    height: auto !important;
}
    .tf-slideshow .slider-wrap {
        height: auto;
    }
    .tf-grid-layout.tf-col-4 {
    grid-template-columns: repeat(2, 1fr);
}
.product-action_list .box-icon {
    width: 25px;
    height: 25px;
    border-radius: 50%;
    background-color: var(--white);
    box-shadow: 0px 1px 4px 0px rgba(0, 0, 0, 0.2);
}
    .product-action_list .icon {
        font-size: 14px !important;
    }
        .footer-heading-mobile {
       font-size:18px;
    }
    .mb-menu-link {
      font-weight:400;
    }
         }
\t\t</style>
\t</head>


\t<body>
\t\t<!-- Scroll Top -->
\t\t<button id=\"goTop\">
\t\t\t<span class=\"border-progress\"></span>
\t\t\t<span class=\"icon icon-caret-up\"></span>
\t\t</button>

\t\t<!-- preload -->
\t\t<div class=\"preload preload-container\" id=\"preload\">
\t\t\t<div class=\"preload-logo\">
\t\t\t\t<div class=\"spinner\"></div>
\t\t\t</div>
\t\t</div>
\t\t<!-- /preload -->

\t\t<main id=\"wrapper\">
\t\t\t<div id=\"container\">


\t\t\t\t<header class=\"tf-header header-fix header-abs-1\">
\t\t\t\t\t<div class=\"container-full\">
\t\t\t\t\t\t<div class=\"row align-items-center header-row\">
\t\t\t\t\t\t\t<div class=\"col-md-4 col-3 d-xl-none\">
\t\t\t\t\t\t\t\t<a href=\"#mobileMenu\" data-bs-toggle=\"offcanvas\" class=\"btn-mobile-menu\">
\t\t\t\t\t\t\t\t\t<span></span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</div>
                     <div class=\"col-xl-4 d-none d-xl-block\">
\t\t\t\t\t\t\t\t<nav class=\"box-navigation\">
\t\t\t\t\t\t\t\t\t<ul class=\"box-nav-menu\">
\t\t\t\t\t\t\t\t\t\t<li class=\"menu-item\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"item-link\">SHOP</a>
\t\t\t\t\t\t\t\t\t\t\t";
        // line 147
        yield ($context["menu"] ?? null);
        yield "
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li class=\"menu-item position-relative\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"item-link\">CATALOG<i class=\"icon icon-caret-down\"></i>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"sub-menu\">
\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"sub-menu_list\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"index.php?route=common/catalogue\" class=\"sub-menu_link\">Brochures and Catalog</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"index.php?route=common/blog\" class=\"sub-menu_link\">Zayn Blog</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li class=\"menu-item position-relative\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"index.php?route=common/about\" class=\"item-link\">ABOUT</a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</nav>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-xl-5 col-md-5 col-6 d-flex justify-content-center justify-content-xl-start\">
\t\t\t\t\t\t\t\t<div id=\"logo\" class=\"text-center\">
\t\t\t\t\t\t\t\t\t";
        // line 171
        if (($context["logo"] ?? null)) {
            // line 172
            yield "\t\t\t\t\t\t\t\t\t\t<a href=\"";
            yield ($context["home"] ?? null);
            yield "\">
\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
            // line 173
            yield ($context["logo"] ?? null);
            yield "\" title=\"";
            yield ($context["name"] ?? null);
            yield "\" alt=\"";
            yield ($context["name"] ?? null);
            yield "\" class=\"img-fluid\"/>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t";
        } else {
            // line 176
            yield "\t\t\t\t\t\t\t\t\t\t<h1>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 177
            yield ($context["home"] ?? null);
            yield "\">Zayn</a>
\t\t\t\t\t\t\t\t\t\t</h1>
\t\t\t\t\t\t\t\t\t";
        }
        // line 180
        yield "\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<div class=\"col-xl-3 col-md-4 col-3\">
\t\t\t\t\t\t\t\t<ul class=\"nav-icon-list\">
\t\t\t\t\t\t\t\t\t<li class=\"d-none d-lg-flex\">
\t\t\t\t\t\t\t\t\t\t";
        // line 186
        if ( !($context["logged"] ?? null)) {
            // line 187
            yield "\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-icon-item link\" href=\"index.php?route=account/login\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"icon icon-user\"></i>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 191
            yield "\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-icon-item link\" href=\"index.php?route=account/account\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"icon icon-user\"></i>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t";
        }
        // line 195
        yield "\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li class=\"d-none d-md-flex\">
\t\t\t\t\t\t\t\t\t\t";
        // line 197
        yield ($context["search"] ?? null);
        yield "
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li class=\"d-none d-sm-flex\">
\t\t\t\t\t\t\t\t\t\t";
        // line 200
        if ( !($context["logged"] ?? null)) {
            // line 201
            yield "\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-icon-item link\" href=\"index.php?route=common/wishlist\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"icon icon-heart\"></i>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"wishlist-count\">0</span>
\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 206
            yield "\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-icon-item link\" href=\"index.php?route=account/wishlist\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"icon icon-heart\"></i>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"wishlist-count\">0</span>
\t\t\t\t\t\t\t\t\t\t";
        }
        // line 211
        yield "\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li class=\"shop-cart\" data-bs-target=\"#shoppingCart\">
\t\t\t\t\t\t\t\t\t\t";
        // line 213
        yield ($context["cart"] ?? null);
        yield "
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</header>


\t\t\t\t

\t\t\t\t<main>
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
        return array (  377 => 213,  373 => 211,  366 => 206,  359 => 201,  357 => 200,  351 => 197,  347 => 195,  341 => 191,  335 => 187,  333 => 186,  325 => 180,  319 => 177,  316 => 176,  306 => 173,  301 => 172,  299 => 171,  272 => 147,  168 => 45,  159 => 43,  154 => 42,  143 => 40,  138 => 39,  129 => 37,  124 => 36,  111 => 34,  107 => 33,  103 => 31,  97 => 29,  95 => 28,  80 => 15,  74 => 13,  71 => 12,  65 => 10,  63 => 9,  59 => 8,  55 => 7,  45 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html dir=\"{{ direction }}\" lang=\"{{ lang }}\">
\t<head>
\t\t<meta charset=\"UTF-8\"/>
\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
\t\t<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
\t\t<title>{{ title }}</title>
\t\t<base href=\"{{ base }}\"/>
\t\t{% if description %}
\t\t\t<meta name=\"description\" content=\"{{ description }}\"/>
\t\t{% endif %}
\t\t{% if keywords %}
\t\t\t<meta name=\"keywords\" content=\"{{ keywords }}\"/>
\t\t{% endif %}

\t\t<!-- font -->
\t\t<link rel=\"stylesheet\" href=\"assets/fonts/fonts.css\">
\t\t<link rel=\"stylesheet\" href=\"assets/icon/icomoon/style.css\">

\t\t<script src=\"assets/js/jquery.min.js\" type=\"text/javascript\"></script>
\t\t<link href=\"assets/css/bootstrap.min.css\" type=\"text/css\" rel=\"stylesheet\" media=\"screen\"/>
\t\t<link rel=\"stylesheet\" href=\"assets/css/swiper-bundle.min.css\">
\t\t<link rel=\"stylesheet\" href=\"assets/css/animate.css\">
\t\t<link rel=\"stylesheet\" type=\"text/css\" href=\"assets/css/styles.css\">
\t\t<link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css\">
\t\t<script src=\"catalog/view/javascript/common.js\" type=\"text/javascript\"></script>

\t\t{% if icon %}
\t\t\t<link rel=\"icon\" href=\"{{ icon }}\" type=\"image/png\">
\t\t{% endif %}


\t\t{% for style in styles %}
\t\t\t<link href=\"{{ style.href }}\" type=\"text/css\" rel=\"{{ style.rel }}\" media=\"{{ style.media }}\"/>
\t\t{% endfor %}
\t\t{% for script in scripts %}
\t\t\t<script src=\"{{ script.href }}\" type=\"text/javascript\"></script>
\t\t{% endfor %}
\t\t{% for link in links %}
\t\t\t<link href=\"{{ link.href }}\" rel=\"{{ link.rel }}\"/>
\t\t{% endfor %}
\t\t{% for analytic in analytics %}
\t\t\t{{ analytic }}
\t\t{% endfor %}
\t\t<style>
\t\t\theader {
\t\t\t\tborder-bottom: thin solid #f1f1f1;
\t\t\t}
\t\t\t.tf-btn-line {
\t\t\t\tfont-weight: 500;
\t\t\t}
\t\t\t.sect-title .title {
\t\t\t\tfont-weight: 400;
\t\t\t}
\t\t\t.fw-medium {
\t\t\t\tfont-weight: 400 !important;
\t\t\t}
         @media (max-width: 768px) {
\t\t\t.canvas-wrapper {
    padding: 0;
    isolation: isolate;
    height: 100%;
    width: 90%;
    margin: auto;
    max-height: none;
    display: grid
;
    grid-auto-rows: auto minmax(0, 1fr) auto;
    align-content: start;
}
\t\t\t    .tf-header {
        padding-top: 0px;
        padding-bottom: 0px;
    }
            #logo a img {
    width: 70px !important;
}
#newLetter .image img {
width:100% !important;
}
.modal-newletter .modal-dialog {
    max-width: 80% !important;
}
.tf-swiper.home .swiper-slide
 {
    height: auto !important;
}
    .tf-slideshow .slider-wrap {
        height: auto;
    }
    .tf-grid-layout.tf-col-4 {
    grid-template-columns: repeat(2, 1fr);
}
.product-action_list .box-icon {
    width: 25px;
    height: 25px;
    border-radius: 50%;
    background-color: var(--white);
    box-shadow: 0px 1px 4px 0px rgba(0, 0, 0, 0.2);
}
    .product-action_list .icon {
        font-size: 14px !important;
    }
        .footer-heading-mobile {
       font-size:18px;
    }
    .mb-menu-link {
      font-weight:400;
    }
         }
\t\t</style>
\t</head>


\t<body>
\t\t<!-- Scroll Top -->
\t\t<button id=\"goTop\">
\t\t\t<span class=\"border-progress\"></span>
\t\t\t<span class=\"icon icon-caret-up\"></span>
\t\t</button>

\t\t<!-- preload -->
\t\t<div class=\"preload preload-container\" id=\"preload\">
\t\t\t<div class=\"preload-logo\">
\t\t\t\t<div class=\"spinner\"></div>
\t\t\t</div>
\t\t</div>
\t\t<!-- /preload -->

\t\t<main id=\"wrapper\">
\t\t\t<div id=\"container\">


\t\t\t\t<header class=\"tf-header header-fix header-abs-1\">
\t\t\t\t\t<div class=\"container-full\">
\t\t\t\t\t\t<div class=\"row align-items-center header-row\">
\t\t\t\t\t\t\t<div class=\"col-md-4 col-3 d-xl-none\">
\t\t\t\t\t\t\t\t<a href=\"#mobileMenu\" data-bs-toggle=\"offcanvas\" class=\"btn-mobile-menu\">
\t\t\t\t\t\t\t\t\t<span></span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</div>
                     <div class=\"col-xl-4 d-none d-xl-block\">
\t\t\t\t\t\t\t\t<nav class=\"box-navigation\">
\t\t\t\t\t\t\t\t\t<ul class=\"box-nav-menu\">
\t\t\t\t\t\t\t\t\t\t<li class=\"menu-item\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"item-link\">SHOP</a>
\t\t\t\t\t\t\t\t\t\t\t{{ menu }}
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li class=\"menu-item position-relative\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"item-link\">CATALOG<i class=\"icon icon-caret-down\"></i>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"sub-menu\">
\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"sub-menu_list\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"index.php?route=common/catalogue\" class=\"sub-menu_link\">Brochures and Catalog</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"index.php?route=common/blog\" class=\"sub-menu_link\">Zayn Blog</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li class=\"menu-item position-relative\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"index.php?route=common/about\" class=\"item-link\">ABOUT</a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</nav>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-xl-5 col-md-5 col-6 d-flex justify-content-center justify-content-xl-start\">
\t\t\t\t\t\t\t\t<div id=\"logo\" class=\"text-center\">
\t\t\t\t\t\t\t\t\t{% if logo %}
\t\t\t\t\t\t\t\t\t\t<a href=\"{{ home }}\">
\t\t\t\t\t\t\t\t\t\t\t<img src=\"{{ logo }}\" title=\"{{ name }}\" alt=\"{{ name }}\" class=\"img-fluid\"/>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t\t<h1>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"{{ home }}\">Zayn</a>
\t\t\t\t\t\t\t\t\t\t</h1>
\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<div class=\"col-xl-3 col-md-4 col-3\">
\t\t\t\t\t\t\t\t<ul class=\"nav-icon-list\">
\t\t\t\t\t\t\t\t\t<li class=\"d-none d-lg-flex\">
\t\t\t\t\t\t\t\t\t\t{% if not logged %}
\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-icon-item link\" href=\"index.php?route=account/login\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"icon icon-user\"></i>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-icon-item link\" href=\"index.php?route=account/account\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"icon icon-user\"></i>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li class=\"d-none d-md-flex\">
\t\t\t\t\t\t\t\t\t\t{{ search }}
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li class=\"d-none d-sm-flex\">
\t\t\t\t\t\t\t\t\t\t{% if not logged %}
\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-icon-item link\" href=\"index.php?route=common/wishlist\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"icon icon-heart\"></i>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"wishlist-count\">0</span>
\t\t\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-icon-item link\" href=\"index.php?route=account/wishlist\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"icon icon-heart\"></i>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"wishlist-count\">0</span>
\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li class=\"shop-cart\" data-bs-target=\"#shoppingCart\">
\t\t\t\t\t\t\t\t\t\t{{ cart }}
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</header>


\t\t\t\t

\t\t\t\t<main>
", "catalog/view/template/common/header.twig", "C:\\xampp\\htdocs\\newzyan\\catalog\\view\\template\\common\\header.twig");
    }
}

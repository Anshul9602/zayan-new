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

/* catalog/view/template/common/menu.twig */
class __TwigTemplate_978ffbeb658d1e51a2152564b3a9dd4e96255fdd9ba80dd6acc7fd16c5bee2bd extends Template
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
        yield "<div class=\"sub-menu mega-menu\">
                        <div class=\"container\">
                           <div class=\"row\">
                              <div class=\"col-2\">
                                 <div class=\"mega-menu-item\">
                                    <h4 class=\"menu-heading\">Jewelry</h4>
                                    <ul class=\"sub-menu_list\">
                                    ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["categories"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 9
            yield "                                      ";
            if (((CoreExtension::getAttribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 9) == "Jewelry") && CoreExtension::getAttribute($this->env, $this->source, $context["category"], "children", [], "any", false, false, false, 9))) {
                // line 10
                yield "                                        ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["category"], "children", [], "any", false, false, false, 10));
                foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                    // line 11
                    yield "                                          <li class=\"sub-menu_link\">
                                            <a href=\"";
                    // line 12
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["child"], "href", [], "any", false, false, false, 12);
                    yield "\" class=\"dropdown-item\">";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["child"], "name", [], "any", false, false, false, 12);
                    yield "</a>
                                          </li>
                                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['child'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 15
                yield "                                      ";
            }
            // line 16
            yield "                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['category'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        yield "                                    </ul>
                                 </div>
                              </div>
                              <div class=\"col-2\">
                                 <div class=\"mega-menu-item\">
                                    <h4 class=\"menu-heading\">Collections</h4>
                                    <ul class=\"sub-menu_list\">
                                    ";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["categories"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 25
            yield "                                      ";
            if (((CoreExtension::getAttribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 25) == "Collections") && CoreExtension::getAttribute($this->env, $this->source, $context["category"], "children", [], "any", false, false, false, 25))) {
                // line 26
                yield "                                        ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["category"], "children", [], "any", false, false, false, 26));
                foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                    // line 27
                    yield "                                          <li class=\"sub-menu_link\">
                                            <a href=\"";
                    // line 28
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["child"], "href", [], "any", false, false, false, 28);
                    yield "\" class=\"dropdown-item\">";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["child"], "name", [], "any", false, false, false, 28);
                    yield "</a>
                                          </li>
                                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['child'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 31
                yield "                                      ";
            }
            // line 32
            yield "                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['category'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        yield "                                    </ul>
                                 </div>
                              </div>
                              <div class=\"col-2\">
                                 <div class=\"mega-menu-item\">
                                    <h4 class=\"menu-heading\">Watches</h4>
                                    <ul class=\"sub-menu_list\">
                                       <li><a href=\"index.php?route=product/category&language=en-gb&path=59\" class=\"sub-menu_link\">Shop All</a></li>
                                    </ul>
                                 </div>
                              </div>
                              <div class=\"col-6\">
                                 <ul class=\"list-hor\">
                                    <li class=\"wg-cls hover-img\">
                                       <a href=\"shop-default.html\" class=\"image img-style\">
                                       <img src=\"assets/images/collections/cls-header-1.jpg\"
                                          data-src=\"assets/images/collections/cls-header-1.jpg\" alt=\"Collection\" class=\"lazyload\">
                                       </a>
                                       <div class=\"cls-content\">
                                          <h4 class=\"tag_cls\">Bangle</h4>
                                          <span class=\"br-line type-vertical\"></span>
                                          <a href=\"index.php?route=product/category&language=en-gb&path=61_69\" class=\"tf-btn-line\"> Shop now </a>
                                       </div>
                                    </li>
                                    <li class=\"wg-cls hover-img\">
                                       <a href=\"shop-default.html\" class=\"image img-style\">
                                       <img src=\"assets/images/collections/cls-header-2.jpg\"
                                          data-src=\"assets/images/collections/cls-header-2.jpg\" alt=\"Collection\" class=\"lazyload\">
                                       </a>
                                       <div class=\"cls-content\">
                                          <h4 class=\"tag_cls\">Necklace</h4>
                                          <span class=\"br-line type-vertical\"></span>
                                          <a href=\"index.php?route=product/category&language=en-gb&path=61_69\" class=\"tf-btn-line\"> Shop now </a>
                                       </div>
                                    </li>
                                 </ul>
                              </div>
                           </div>
                        </div>
                     </div>
              




";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "catalog/view/template/common/menu.twig";
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
        return array (  130 => 33,  124 => 32,  121 => 31,  110 => 28,  107 => 27,  102 => 26,  99 => 25,  95 => 24,  86 => 17,  80 => 16,  77 => 15,  66 => 12,  63 => 11,  58 => 10,  55 => 9,  51 => 8,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<div class=\"sub-menu mega-menu\">
                        <div class=\"container\">
                           <div class=\"row\">
                              <div class=\"col-2\">
                                 <div class=\"mega-menu-item\">
                                    <h4 class=\"menu-heading\">Jewelry</h4>
                                    <ul class=\"sub-menu_list\">
                                    {% for category in categories %}
                                      {% if category.name == 'Jewelry' and category.children %}
                                        {% for child in category.children %}
                                          <li class=\"sub-menu_link\">
                                            <a href=\"{{ child.href }}\" class=\"dropdown-item\">{{ child.name }}</a>
                                          </li>
                                        {% endfor %}
                                      {% endif %}
                                    {% endfor %}
                                    </ul>
                                 </div>
                              </div>
                              <div class=\"col-2\">
                                 <div class=\"mega-menu-item\">
                                    <h4 class=\"menu-heading\">Collections</h4>
                                    <ul class=\"sub-menu_list\">
                                    {% for category in categories %}
                                      {% if category.name == 'Collections' and category.children %}
                                        {% for child in category.children %}
                                          <li class=\"sub-menu_link\">
                                            <a href=\"{{ child.href }}\" class=\"dropdown-item\">{{ child.name }}</a>
                                          </li>
                                        {% endfor %}
                                      {% endif %}
                                    {% endfor %}
                                    </ul>
                                 </div>
                              </div>
                              <div class=\"col-2\">
                                 <div class=\"mega-menu-item\">
                                    <h4 class=\"menu-heading\">Watches</h4>
                                    <ul class=\"sub-menu_list\">
                                       <li><a href=\"index.php?route=product/category&language=en-gb&path=59\" class=\"sub-menu_link\">Shop All</a></li>
                                    </ul>
                                 </div>
                              </div>
                              <div class=\"col-6\">
                                 <ul class=\"list-hor\">
                                    <li class=\"wg-cls hover-img\">
                                       <a href=\"shop-default.html\" class=\"image img-style\">
                                       <img src=\"assets/images/collections/cls-header-1.jpg\"
                                          data-src=\"assets/images/collections/cls-header-1.jpg\" alt=\"Collection\" class=\"lazyload\">
                                       </a>
                                       <div class=\"cls-content\">
                                          <h4 class=\"tag_cls\">Bangle</h4>
                                          <span class=\"br-line type-vertical\"></span>
                                          <a href=\"index.php?route=product/category&language=en-gb&path=61_69\" class=\"tf-btn-line\"> Shop now </a>
                                       </div>
                                    </li>
                                    <li class=\"wg-cls hover-img\">
                                       <a href=\"shop-default.html\" class=\"image img-style\">
                                       <img src=\"assets/images/collections/cls-header-2.jpg\"
                                          data-src=\"assets/images/collections/cls-header-2.jpg\" alt=\"Collection\" class=\"lazyload\">
                                       </a>
                                       <div class=\"cls-content\">
                                          <h4 class=\"tag_cls\">Necklace</h4>
                                          <span class=\"br-line type-vertical\"></span>
                                          <a href=\"index.php?route=product/category&language=en-gb&path=61_69\" class=\"tf-btn-line\"> Shop now </a>
                                       </div>
                                    </li>
                                 </ul>
                              </div>
                           </div>
                        </div>
                     </div>
              




", "catalog/view/template/common/menu.twig", "C:\\xampp\\htdocs\\zyannew\\catalog\\view\\template\\common\\menu.twig");
    }
}

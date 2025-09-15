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

/* catalog/view/template/common/cart.twig */
class __TwigTemplate_b1bca4412eeac1eb082518cd33a57765bda81a646af3f073871bb29be8a44c81 extends Template
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
        yield "<style>
    .popup-shopping-cart{
      max-width: 605px;
    }
</style>
<a class=\"nav-icon-item link\" data-bs-toggle=\"offcanvas\" href=\"#shoppingCart\">
                  <i class=\"icon icon-shopping-cart-simple\"></i>
                  </a>
                  <span class=\"count\">";
        // line 9
        yield ($context["text_items"] ?? null);
        yield "</span>


<!-- Shopping Cart -->
<div class=\"offcanvas offcanvas-end popup-shopping-cart\" id=\"shoppingCart\">
  <div class=\"canvas-wrapper\">
    <div class=\"popup-header\">
      <span class=\"title fw-semibold h4\">";
        // line 16
        yield ($context["heading_title"] ?? null);
        yield "</span>
      <span class=\"icon-close icon-close-popup\" data-bs-dismiss=\"offcanvas\"></span>
    </div>
    <div class=\"wrap\">
      <div class=\"tf-mini-cart-wrap list-file-delete wrap-empty_text\">
        <div class=\"tf-mini-cart-main\">
          <div class=\"tf-mini-cart-sroll\">
            <div class=\"tf-mini-cart-items list-empty\">
              ";
        // line 24
        if (($context["products"] ?? null)) {
            // line 25
            yield "                ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 26
                yield "                  <div class=\"tf-mini-cart-item file-delete\">
                    <div class=\"tf-mini-cart-image\">
                      ";
                // line 28
                if (CoreExtension::getAttribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 28)) {
                    // line 29
                    yield "                        <a href=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 29);
                    yield "\">
                          <img class=\"lazyload\" src=\"";
                    // line 30
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 30);
                    yield "\" alt=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 30);
                    yield "\">
                        </a>
                      ";
                }
                // line 33
                yield "                    </div>
                    <div class=\"tf-mini-cart-info\">
                      <div class=\"text-small text-main-2 sub\">";
                // line 35
                yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "model", [], "any", false, false, false, 35);
                yield "</div>
                      <h6 class=\"title\">
                        <a href=\"";
                // line 37
                yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 37);
                yield "\" class=\"link text-line-clamp-2\">";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 37);
                yield "</a>
                      </h6>
                      <div class=\"size\">
                        ";
                // line 40
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "option", [], "any", false, false, false, 40));
                foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                    // line 41
                    yield "                          <div class=\"text-small text-main-2 sub\">";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 41);
                    yield ": ";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 41);
                    yield "</div>
                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['option'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 43
                yield "                      </div>
                      <div class=\"d-flex justify-content-between align-items-center\">
                        <div class=\"h6 fw-semibold\">
                          <span class=\"number\">";
                // line 46
                yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 46);
                yield "x</span>
                          <span class=\"price text-primary tf-mini-card-price\">";
                // line 47
                yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "total", [], "any", false, false, false, 47);
                yield "</span>
                        </div>
                        <button type=\"button\" class=\"icon link icon-close remove\" title=\"";
                // line 49
                yield ($context["button_remove"] ?? null);
                yield "\" data-cart-key=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "cart_id", [], "any", false, false, false, 49);
                yield "\"></button>
                      </div>
                    </div>
                  </div>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['product'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 54
            yield "              ";
        } else {
            // line 55
            yield "                <div class=\"box-text_empty type-shop_cart\">
                  <div class=\"shop-empty_top\">
                    <span class=\"icon\"><i class=\"icon-shopping-cart-simple\"></i></span>
                    <h3 class=\"text-emp fw-normal\">";
            // line 58
            yield ($context["text_no_results"] ?? null);
            yield "</h3>
                    <p class=\"h6 text-main\">Let us assist you in finding the right product</p>
                  </div>
                  <div class=\"shop-empty_bot\">
                    <a href=\"";
            // line 62
            yield ($context["shop"] ?? null);
            yield "\" class=\"tf-btn animate-btn\">Shopping</a>
                    <a href=\"";
            // line 63
            yield ($context["home"] ?? null);
            yield "\" class=\"tf-btn style-line\">Back to home</a>
                  </div>
                </div>
              ";
        }
        // line 67
        yield "            </div>
          </div>
        </div>

        ";
        // line 71
        if (($context["products"] ?? null)) {
            // line 72
            yield "          <div class=\"tf-mini-cart-bottom box-empty_clear\">
            <div class=\"tf-mini-cart-threshold\">
              <div class=\"text\">
                <h6 class=\"subtotal\">Subtotal (";
            // line 75
            yield Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["products"] ?? null));
            yield " item)</h6>
                ";
            // line 76
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["totals"] ?? null));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["total"]) {
                // line 77
                yield "                  ";
                if (CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 77)) {
                    // line 78
                    yield "                    <h4 class=\"text-primary total-price tf-totals-total-value\">";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["total"], "text", [], "any", false, false, false, 78);
                    yield "</h4>
                  ";
                }
                // line 80
                yield "                ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['total'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 81
            yield "              </div>
              <!-- Optional: Add progress bar logic based on subtotal -->
            </div>
            <div class=\"tf-mini-cart-bottom-wrap\">
              <div class=\"tf-mini-cart-view-checkout\">
                <a href=\"";
            // line 86
            yield ($context["cart"] ?? null);
            yield "\" class=\"tf-btn btn-white animate-btn animate-dark line\">";
            yield ($context["text_cart"] ?? null);
            yield "</a>
                <a href=\"";
            // line 87
            yield ($context["checkout"] ?? null);
            yield "\" class=\"tf-btn animate-btn d-inline-flex bg-dark-2 w-100 justify-content-center\">";
            yield ($context["text_checkout"] ?? null);
            yield "</a>
              </div>
            </div>
          </div>
        ";
        }
        // line 92
        yield "
        <!-- Optional addons like shipping estimator, note, gift UI remain static or can be wired up later -->
      </div>
    </div>
  </div>
</div>
<!-- /Shopping Cart -->
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "catalog/view/template/common/cart.twig";
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
        return array (  264 => 92,  254 => 87,  248 => 86,  241 => 81,  227 => 80,  221 => 78,  218 => 77,  201 => 76,  197 => 75,  192 => 72,  190 => 71,  184 => 67,  177 => 63,  173 => 62,  166 => 58,  161 => 55,  158 => 54,  145 => 49,  140 => 47,  136 => 46,  131 => 43,  120 => 41,  116 => 40,  108 => 37,  103 => 35,  99 => 33,  91 => 30,  86 => 29,  84 => 28,  80 => 26,  75 => 25,  73 => 24,  62 => 16,  52 => 9,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<style>
    .popup-shopping-cart{
      max-width: 605px;
    }
</style>
<a class=\"nav-icon-item link\" data-bs-toggle=\"offcanvas\" href=\"#shoppingCart\">
                  <i class=\"icon icon-shopping-cart-simple\"></i>
                  </a>
                  <span class=\"count\">{{ text_items }}</span>


<!-- Shopping Cart -->
<div class=\"offcanvas offcanvas-end popup-shopping-cart\" id=\"shoppingCart\">
  <div class=\"canvas-wrapper\">
    <div class=\"popup-header\">
      <span class=\"title fw-semibold h4\">{{ heading_title }}</span>
      <span class=\"icon-close icon-close-popup\" data-bs-dismiss=\"offcanvas\"></span>
    </div>
    <div class=\"wrap\">
      <div class=\"tf-mini-cart-wrap list-file-delete wrap-empty_text\">
        <div class=\"tf-mini-cart-main\">
          <div class=\"tf-mini-cart-sroll\">
            <div class=\"tf-mini-cart-items list-empty\">
              {% if products %}
                {% for product in products %}
                  <div class=\"tf-mini-cart-item file-delete\">
                    <div class=\"tf-mini-cart-image\">
                      {% if product.thumb %}
                        <a href=\"{{ product.href }}\">
                          <img class=\"lazyload\" src=\"{{ product.thumb }}\" alt=\"{{ product.name }}\">
                        </a>
                      {% endif %}
                    </div>
                    <div class=\"tf-mini-cart-info\">
                      <div class=\"text-small text-main-2 sub\">{{ product.model }}</div>
                      <h6 class=\"title\">
                        <a href=\"{{ product.href }}\" class=\"link text-line-clamp-2\">{{ product.name }}</a>
                      </h6>
                      <div class=\"size\">
                        {% for option in product.option %}
                          <div class=\"text-small text-main-2 sub\">{{ option.name }}: {{ option.value }}</div>
                        {% endfor %}
                      </div>
                      <div class=\"d-flex justify-content-between align-items-center\">
                        <div class=\"h6 fw-semibold\">
                          <span class=\"number\">{{ product.quantity }}x</span>
                          <span class=\"price text-primary tf-mini-card-price\">{{ product.total }}</span>
                        </div>
                        <button type=\"button\" class=\"icon link icon-close remove\" title=\"{{ button_remove }}\" data-cart-key=\"{{ product.cart_id }}\"></button>
                      </div>
                    </div>
                  </div>
                {% endfor %}
              {% else %}
                <div class=\"box-text_empty type-shop_cart\">
                  <div class=\"shop-empty_top\">
                    <span class=\"icon\"><i class=\"icon-shopping-cart-simple\"></i></span>
                    <h3 class=\"text-emp fw-normal\">{{ text_no_results }}</h3>
                    <p class=\"h6 text-main\">Let us assist you in finding the right product</p>
                  </div>
                  <div class=\"shop-empty_bot\">
                    <a href=\"{{ shop }}\" class=\"tf-btn animate-btn\">Shopping</a>
                    <a href=\"{{ home }}\" class=\"tf-btn style-line\">Back to home</a>
                  </div>
                </div>
              {% endif %}
            </div>
          </div>
        </div>

        {% if products %}
          <div class=\"tf-mini-cart-bottom box-empty_clear\">
            <div class=\"tf-mini-cart-threshold\">
              <div class=\"text\">
                <h6 class=\"subtotal\">Subtotal ({{ products|length }} item)</h6>
                {% for total in totals %}
                  {% if loop.last %}
                    <h4 class=\"text-primary total-price tf-totals-total-value\">{{ total.text }}</h4>
                  {% endif %}
                {% endfor %}
              </div>
              <!-- Optional: Add progress bar logic based on subtotal -->
            </div>
            <div class=\"tf-mini-cart-bottom-wrap\">
              <div class=\"tf-mini-cart-view-checkout\">
                <a href=\"{{ cart }}\" class=\"tf-btn btn-white animate-btn animate-dark line\">{{ text_cart }}</a>
                <a href=\"{{ checkout }}\" class=\"tf-btn animate-btn d-inline-flex bg-dark-2 w-100 justify-content-center\">{{ text_checkout }}</a>
              </div>
            </div>
          </div>
        {% endif %}

        <!-- Optional addons like shipping estimator, note, gift UI remain static or can be wired up later -->
      </div>
    </div>
  </div>
</div>
<!-- /Shopping Cart -->
", "catalog/view/template/common/cart.twig", "C:\\xampp\\htdocs\\newzyan\\catalog\\view\\template\\common\\cart.twig");
    }
}

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

/* catalog/view/template/common/cartcontent.twig */
class __TwigTemplate_6edfcaccb1f38384ce907027ab6a80275e5a89f5bc491cef9ec3829ef38d484f extends Template
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
        yield "
    

        <div class=\"tf-mini-cart-main\">
          <div class=\"tf-mini-cart-sroll\">
            <div class=\"tf-mini-cart-items list-empty\">
              ";
        // line 7
        if (($context["products"] ?? null)) {
            // line 8
            yield "                ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 9
                yield "                  <div class=\"tf-mini-cart-item file-delete\">
                    <div class=\"tf-mini-cart-image\">
                      ";
                // line 11
                if (CoreExtension::getAttribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 11)) {
                    // line 12
                    yield "                        <a href=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 12);
                    yield "\">
                          <img class=\"lazyload\" src=\"";
                    // line 13
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 13);
                    yield "\" alt=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 13);
                    yield "\">
                        </a>
                      ";
                }
                // line 16
                yield "                    </div>
                    <div class=\"tf-mini-cart-info\">
                      <div class=\"text-small text-main-2 sub\">";
                // line 18
                yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "model", [], "any", false, false, false, 18);
                yield "</div>
                      <h6 class=\"title\">
                        <a href=\"";
                // line 20
                yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 20);
                yield "\" class=\"link text-line-clamp-1\">";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 20);
                yield "</a>
                      </h6>
                      <div class=\"size\">
                        ";
                // line 23
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "option", [], "any", false, false, false, 23));
                foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                    // line 24
                    yield "                          <div class=\"text-small text-main-2 sub\">";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 24);
                    yield ": ";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 24);
                    yield "</div>
                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['option'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 26
                yield "                      </div>
                      <div class=\"d-flex justify-content-between align-items-center\">
                        <div class=\"h6 fw-semibold\">
                          <span class=\"number\">";
                // line 29
                yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 29);
                yield "x</span>
                          <span class=\"price text-primary tf-mini-card-price\">";
                // line 30
                yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "total", [], "any", false, false, false, 30);
                yield "</span>
                        </div>
                        <form action=\"";
                // line 32
                yield ($context["remove"] ?? null);
                yield "\" method=\"post\" data-oc-toggle=\"ajax\" data-oc-load=\"";
                yield ($context["list"] ?? null);
                yield "\" data-oc-target=\".tf-mini-cart-items\">
                          <input type=\"hidden\" name=\"key\" value=\"";
                // line 33
                yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "cart_id", [], "any", false, false, false, 33);
                yield "\">
                          <button type=\"submit\" class=\"icon link icon-close remove\" title=\"";
                // line 34
                yield ($context["button_remove"] ?? null);
                yield "\"></button>
                        </form>
                      </div>
                    </div>
                  </div>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['product'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 40
            yield "              ";
        } else {
            // line 41
            yield "                <div class=\"box-text_empty type-shop_cart\">
                  <div class=\"shop-empty_top\">
                    <span class=\"icon\"><i class=\"icon-shopping-cart-simple\"></i></span>
                    <h3 class=\"text-emp fw-normal\">";
            // line 44
            yield ($context["text_no_results"] ?? null);
            yield "</h3>
                    <p class=\"h6 text-main\">Let us assist you in finding the right product</p>
                  </div>
                  <div class=\"shop-empty_bot\">
                    <a href=\"";
            // line 48
            yield ($context["shop"] ?? null);
            yield "\" class=\"tf-btn animate-btn\">Shopping</a>
                    <a href=\"";
            // line 49
            yield ($context["home"] ?? null);
            yield "\" class=\"tf-btn style-line\">Back to home</a>
                  </div>
                </div>
              ";
        }
        // line 53
        yield "            </div>
          </div>
        </div>

        ";
        // line 57
        if (($context["products"] ?? null)) {
            // line 58
            yield "          <div class=\"tf-mini-cart-bottom box-empty_clear\">
            <div class=\"tf-mini-cart-threshold\">
              <div class=\"text\">
                <h6 class=\"subtotal\">Subtotal (";
            // line 61
            yield Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["products"] ?? null));
            yield " item)</h6>
                ";
            // line 62
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
                // line 63
                yield "                  ";
                if (CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 63)) {
                    // line 64
                    yield "                    <h4 class=\"text-primary total-price tf-totals-total-value\">";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["total"], "text", [], "any", false, false, false, 64);
                    yield "</h4>
                  ";
                }
                // line 66
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
            // line 67
            yield "              </div>
              <!-- Optional: Add progress bar logic based on subtotal -->
            </div>
            <div class=\"tf-mini-cart-bottom-wrap\">
              <div class=\"tf-mini-cart-view-checkout\">
                <a href=\"";
            // line 72
            yield ($context["cart"] ?? null);
            yield "\" class=\"tf-btn btn-white animate-btn animate-dark line\">";
            yield ($context["text_cart"] ?? null);
            yield "</a>
                <a href=\"";
            // line 73
            yield ($context["checkout"] ?? null);
            yield "\" class=\"tf-btn animate-btn d-inline-flex bg-dark-2 w-100 justify-content-center\">";
            yield ($context["text_checkout"] ?? null);
            yield "</a>
              </div>
            </div>
          </div>
        ";
        }
        // line 78
        yield "
       
    
 
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "catalog/view/template/common/cartcontent.twig";
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
        return array (  250 => 78,  240 => 73,  234 => 72,  227 => 67,  213 => 66,  207 => 64,  204 => 63,  187 => 62,  183 => 61,  178 => 58,  176 => 57,  170 => 53,  163 => 49,  159 => 48,  152 => 44,  147 => 41,  144 => 40,  132 => 34,  128 => 33,  122 => 32,  117 => 30,  113 => 29,  108 => 26,  97 => 24,  93 => 23,  85 => 20,  80 => 18,  76 => 16,  68 => 13,  63 => 12,  61 => 11,  57 => 9,  52 => 8,  50 => 7,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("
    

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
                        <a href=\"{{ product.href }}\" class=\"link text-line-clamp-1\">{{ product.name }}</a>
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
                        <form action=\"{{ remove }}\" method=\"post\" data-oc-toggle=\"ajax\" data-oc-load=\"{{ list }}\" data-oc-target=\".tf-mini-cart-items\">
                          <input type=\"hidden\" name=\"key\" value=\"{{ product.cart_id }}\">
                          <button type=\"submit\" class=\"icon link icon-close remove\" title=\"{{ button_remove }}\"></button>
                        </form>
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

       
    
 
", "catalog/view/template/common/cartcontent.twig", "C:\\xampp\\htdocs\\zyannew\\catalog\\view\\template\\common\\cartcontent.twig");
    }
}

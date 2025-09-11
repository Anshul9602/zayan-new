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

/* catalog/view/template/checkout/cart_list.twig */
class __TwigTemplate_77a4a048915e17ae573882129ac9c30dd4c802e5739d07662676d437b02863b1 extends Template
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
        if (($context["products"] ?? null)) {
            // line 2
            yield "  ";
            if (($context["error_warning"] ?? null)) {
                // line 3
                yield "    <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ";
                yield ($context["error_warning"] ?? null);
                yield " <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>
  ";
            }
            // line 5
            yield "  ";
            if (($context["error_stock"] ?? null)) {
                // line 6
                yield "    <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ";
                yield ($context["error_stock"] ?? null);
                yield " <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>
  ";
            }
            // line 8
            yield "  ";
            if (($context["success"] ?? null)) {
                // line 9
                yield "    <div class=\"alert alert-success alert-dismissible\"><i class=\"fa-solid fa-circle-check\"></i> ";
                yield ($context["success"] ?? null);
                yield " <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>
  ";
            }
            // line 11
            yield "  ";
            if (($context["attention"] ?? null)) {
                // line 12
                yield "    <div class=\"alert alert-info\"><i class=\"fa-solid fa-circle-info\"></i> ";
                yield ($context["attention"] ?? null);
                yield " <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>
  ";
            }
            // line 14
            yield "  <h1 class=\"text-center\">";
            yield ($context["heading_title"] ?? null);
            if (($context["weight"] ?? null)) {
                yield " (";
                yield ($context["weight"] ?? null);
                yield ")";
            }
            yield "</h1>
  <div id=\"output-cart\" class=\"table-responsive mt-5\">
    <table class=\"table align-middle\">
      <thead>
        <tr style=\"border-top:0.5px solid #000;border-bottom:0.5px solid #000;\">
          <th class=\"text-center\">";
            // line 19
            yield ($context["column_image"] ?? null);
            yield "</th>
          <th>";
            // line 20
            yield ($context["column_name"] ?? null);
            yield "</th>
          <th class=\"text-center\">";
            // line 21
            yield ($context["column_quantity"] ?? null);
            yield "</th>
          <th class=\"text-end\">";
            // line 22
            yield ($context["column_price"] ?? null);
            yield "</th>
          <th class=\"text-end\">";
            // line 23
            yield ($context["column_total"] ?? null);
            yield "</th>
          <th class=\"text-center\"></th>
        </tr>
      </thead>
      <tbody>
        ";
            // line 28
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 29
                yield "          <tr style=\"border-bottom:0.5px solid gray;\" data-cart-id=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "cart_id", [], "any", false, false, false, 29);
                yield "\">
            <td class=\"text-center\">";
                // line 30
                if (CoreExtension::getAttribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 30)) {
                    yield "<a href=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 30);
                    yield "\"><img src=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 30);
                    yield "\" alt=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 30);
                    yield "\" title=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 30);
                    yield "\" class=\"img-thumbnail\" style=\"max-width:80px\"/></a>";
                }
                yield "</td>
            <td class=\"text-start text-wrap\">
              <a href=\"";
                // line 32
                yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 32);
                yield "\">";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 32);
                yield "</a>";
                if ( !CoreExtension::getAttribute($this->env, $this->source, $context["product"], "stock", [], "any", false, false, false, 32)) {
                    yield " <span class=\"text-danger\">***</span>";
                }
                // line 33
                yield "              <ul class=\"list-unstyled mb-0\">
                ";
                // line 34
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "option", [], "any", false, false, false, 34));
                foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                    // line 35
                    yield "                  <li><small>";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 35);
                    yield ": ";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 35);
                    yield "</small></li>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['option'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 37
                yield "                ";
                if (CoreExtension::getAttribute($this->env, $this->source, $context["product"], "subscription", [], "any", false, false, false, 37)) {
                    // line 38
                    yield "                  <li><small>";
                    yield ($context["text_subscription"] ?? null);
                    yield ": ";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "subscription", [], "any", false, false, false, 38);
                    yield "</small></li>
                ";
                }
                // line 40
                yield "              </ul>
            </td>
            <td class=\"text-center\">
              <div class=\"input-group justify-content-center\" style=\"width:120px; margin:auto;\">
                <button class=\"btn btn-outline-secondary btn-sm js-qty-dec\" type=\"button\">-</button>
                <input type=\"text\" class=\"form-control form-control-sm text-center js-qty-input";
                // line 45
                if (CoreExtension::getAttribute($this->env, $this->source, $context["product"], "minimum", [], "any", false, false, false, 45)) {
                    yield " is-invalid";
                }
                yield "\" value=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 45);
                yield "\" readonly />
                <button class=\"btn btn-outline-secondary btn-sm js-qty-inc\" type=\"button\">+</button>
              </div>
              ";
                // line 48
                if (CoreExtension::getAttribute($this->env, $this->source, $context["product"], "minimum", [], "any", false, false, false, 48)) {
                    // line 49
                    yield "                <small class=\"invalid-feedback d-block\">";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "minimum", [], "any", false, false, false, 49);
                    yield "</small>
              ";
                }
                // line 51
                yield "            </td>
            <td class=\"text-end\">";
                // line 52
                yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "price_text", [], "any", false, false, false, 52);
                yield "</td>
            <td class=\"text-end\">";
                // line 53
                yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "total_text", [], "any", false, false, false, 53);
                yield "</td>
            <td class=\"text-center\">
              <button class=\"btn btn-link text-danger p-0 js-remove\" type=\"button\" title=\"";
                // line 55
                yield ($context["button_remove"] ?? null);
                yield "\">
                <i class=\"fa-solid fa-circle-xmark\"></i>
              </button>
            </td>
          </tr>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['product'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 61
            yield "      </tbody>
     
    </table>
  </div>

  

  <br/>
  

  <div class=\"row mt-4 pb-4\">
    <div class=\"col-lg-7 mb-3\">
      <label class=\"form-label\">Use Coupon Code</label>
      <div class=\"input-group\">
        <input type=\"text\" id=\"input-coupon\" style=\"box-shadow: none;\" class=\"form-control\" placeholder=\"Enter your coupon here\"/>
        <button id=\"button-coupon\" class=\"btn btn-primary\" style=\"background-color: #241B68;border-color: #241B68;\">Apply Coupon</button>
      </div>
      <div class=\"form-text\">";
            // line 78
            yield ((array_key_exists("text_next_choice", $context)) ? (Twig\Extension\CoreExtension::default(($context["text_next_choice"] ?? null), "")) : (""));
            yield "</div>
    </div>
    <div class=\"col-lg-5\">
      <table class=\"table mb-0\">
        <tbody>
          ";
            // line 83
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["totals"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["total"]) {
                // line 84
                yield "            <tr>
              <td class=\"text-end\"><strong>";
                // line 85
                yield CoreExtension::getAttribute($this->env, $this->source, $context["total"], "title", [], "any", false, false, false, 85);
                yield "</strong></td>
              <td class=\"text-end\" style=\"width:150px\">";
                // line 86
                yield CoreExtension::getAttribute($this->env, $this->source, $context["total"], "text", [], "any", false, false, false, 86);
                yield "</td>
            </tr>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['total'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 89
            yield "        </tbody>
      </table>
      <div class=\"text-end mt-3\">
        <a href=\"";
            // line 92
            yield ($context["checkout"] ?? null);
            yield "\" class=\"btn btn-primary\"style=\"background-color: #241B68;border-color: #241B68;\">";
            yield ($context["button_checkout"] ?? null);
            yield "</a>
      </div>
    </div>
  </div>

  <script>
  (function(){
    function refreshCart(){
      fetch('index.php?route=checkout/cart.list')
        .then(function(r){return r.text()})
        .then(function(html){
          var wrap = document.createElement('div');
          wrap.innerHTML = html;
          var inner = wrap.querySelector('#output-cart');
          if(inner){
            document.querySelector('#output-cart').replaceWith(inner);
          } else {
            location.reload();
          }
        });
    }
    document.addEventListener('click', function(e){
      var row = e.target.closest('tr[data-cart-id]');
      if(!row) return;
      var key = row.getAttribute('data-cart-id');
      if(e.target.closest('.js-qty-inc') || e.target.closest('.js-qty-dec')){
        var input = row.querySelector('.js-qty-input');
        var qty = parseInt(input.value || '1', 10);
        qty += e.target.closest('.js-qty-inc') ? 1 : -1;
        if(qty < 1) qty = 1;
        var form = new FormData();
        form.append('key', key);
        form.append('quantity', qty);
        fetch('index.php?route=checkout/cart.edit', {method:'POST', body: form})
          .then(function(){ refreshCart(); });
      }
      if(e.target.closest('.js-remove')){
        fetch('index.php?route=checkout/cart.remove&key=' + encodeURIComponent(key))
          .then(function(){ refreshCart(); });
      }
    });
  })();
  </script>
  <script>
  (function(){
    var btn = document.getElementById('button-coupon');
    if(btn){
      btn.addEventListener('click', function(){
        var code = (document.getElementById('input-coupon') || {}).value || '';
        var form = new FormData();
        form.append('coupon', code);
        fetch('index.php?route=extension/total/coupon/coupon', { method: 'POST', body: form })
          .then(function(r){ return r.json(); })
          .then(function(json){
            if(json && json.redirect){
              location = json.redirect;
              return;
            }
            if(json && json.error){
              alert(json.error);
            }
            // Refresh the cart list to update totals
            fetch('index.php?route=checkout/cart.list')
              .then(function(r){return r.text()})
              .then(function(html){
                var wrap = document.createElement('div');
                wrap.innerHTML = html;
                var inner = wrap.querySelector('#output-cart');
                if(inner){
                  document.querySelector('#output-cart').replaceWith(inner);
                } else {
                  location.reload();
                }
              });
          })
          .catch(function(err){ alert(err); });
      });
    }
  })();
  </script>
";
        } else {
            // line 173
            yield "  <h1>";
            yield ($context["heading_title"] ?? null);
            yield "</h1>
  <p>";
            // line 174
            yield ($context["text_no_results"] ?? null);
            yield "</p>
  <div class=\"text-end\"><a href=\"";
            // line 175
            yield ($context["continue"] ?? null);
            yield "\" class=\"btn btn-primary\">";
            yield ($context["button_continue"] ?? null);
            yield "</a></div>
";
        }
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "catalog/view/template/checkout/cart_list.twig";
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
        return array (  375 => 175,  371 => 174,  366 => 173,  280 => 92,  275 => 89,  266 => 86,  262 => 85,  259 => 84,  255 => 83,  247 => 78,  228 => 61,  216 => 55,  211 => 53,  207 => 52,  204 => 51,  198 => 49,  196 => 48,  186 => 45,  179 => 40,  171 => 38,  168 => 37,  157 => 35,  153 => 34,  150 => 33,  142 => 32,  127 => 30,  122 => 29,  118 => 28,  110 => 23,  106 => 22,  102 => 21,  98 => 20,  94 => 19,  80 => 14,  74 => 12,  71 => 11,  65 => 9,  62 => 8,  56 => 6,  53 => 5,  47 => 3,  44 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% if products %}
  {% if error_warning %}
    <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> {{ error_warning }} <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>
  {% endif %}
  {% if error_stock %}
    <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> {{ error_stock }} <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>
  {% endif %}
  {% if success %}
    <div class=\"alert alert-success alert-dismissible\"><i class=\"fa-solid fa-circle-check\"></i> {{ success }} <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>
  {% endif %}
  {% if attention %}
    <div class=\"alert alert-info\"><i class=\"fa-solid fa-circle-info\"></i> {{ attention }} <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>
  {% endif %}
  <h1 class=\"text-center\">{{ heading_title }}{% if weight %} ({{ weight }}){% endif %}</h1>
  <div id=\"output-cart\" class=\"table-responsive mt-5\">
    <table class=\"table align-middle\">
      <thead>
        <tr style=\"border-top:0.5px solid #000;border-bottom:0.5px solid #000;\">
          <th class=\"text-center\">{{ column_image }}</th>
          <th>{{ column_name }}</th>
          <th class=\"text-center\">{{ column_quantity }}</th>
          <th class=\"text-end\">{{ column_price }}</th>
          <th class=\"text-end\">{{ column_total }}</th>
          <th class=\"text-center\"></th>
        </tr>
      </thead>
      <tbody>
        {% for product in products %}
          <tr style=\"border-bottom:0.5px solid gray;\" data-cart-id=\"{{ product.cart_id }}\">
            <td class=\"text-center\">{% if product.thumb %}<a href=\"{{ product.href }}\"><img src=\"{{ product.thumb }}\" alt=\"{{ product.name }}\" title=\"{{ product.name }}\" class=\"img-thumbnail\" style=\"max-width:80px\"/></a>{% endif %}</td>
            <td class=\"text-start text-wrap\">
              <a href=\"{{ product.href }}\">{{ product.name }}</a>{% if not product.stock %} <span class=\"text-danger\">***</span>{% endif %}
              <ul class=\"list-unstyled mb-0\">
                {% for option in product.option %}
                  <li><small>{{ option.name }}: {{ option.value }}</small></li>
                {% endfor %}
                {% if product.subscription %}
                  <li><small>{{ text_subscription }}: {{ product.subscription }}</small></li>
                {% endif %}
              </ul>
            </td>
            <td class=\"text-center\">
              <div class=\"input-group justify-content-center\" style=\"width:120px; margin:auto;\">
                <button class=\"btn btn-outline-secondary btn-sm js-qty-dec\" type=\"button\">-</button>
                <input type=\"text\" class=\"form-control form-control-sm text-center js-qty-input{% if product.minimum %} is-invalid{% endif %}\" value=\"{{ product.quantity }}\" readonly />
                <button class=\"btn btn-outline-secondary btn-sm js-qty-inc\" type=\"button\">+</button>
              </div>
              {% if product.minimum %}
                <small class=\"invalid-feedback d-block\">{{ product.minimum }}</small>
              {% endif %}
            </td>
            <td class=\"text-end\">{{ product.price_text }}</td>
            <td class=\"text-end\">{{ product.total_text }}</td>
            <td class=\"text-center\">
              <button class=\"btn btn-link text-danger p-0 js-remove\" type=\"button\" title=\"{{ button_remove }}\">
                <i class=\"fa-solid fa-circle-xmark\"></i>
              </button>
            </td>
          </tr>
        {% endfor %}
      </tbody>
     
    </table>
  </div>

  

  <br/>
  

  <div class=\"row mt-4 pb-4\">
    <div class=\"col-lg-7 mb-3\">
      <label class=\"form-label\">Use Coupon Code</label>
      <div class=\"input-group\">
        <input type=\"text\" id=\"input-coupon\" style=\"box-shadow: none;\" class=\"form-control\" placeholder=\"Enter your coupon here\"/>
        <button id=\"button-coupon\" class=\"btn btn-primary\" style=\"background-color: #241B68;border-color: #241B68;\">Apply Coupon</button>
      </div>
      <div class=\"form-text\">{{ text_next_choice|default('') }}</div>
    </div>
    <div class=\"col-lg-5\">
      <table class=\"table mb-0\">
        <tbody>
          {% for total in totals %}
            <tr>
              <td class=\"text-end\"><strong>{{ total.title }}</strong></td>
              <td class=\"text-end\" style=\"width:150px\">{{ total.text }}</td>
            </tr>
          {% endfor %}
        </tbody>
      </table>
      <div class=\"text-end mt-3\">
        <a href=\"{{ checkout }}\" class=\"btn btn-primary\"style=\"background-color: #241B68;border-color: #241B68;\">{{ button_checkout }}</a>
      </div>
    </div>
  </div>

  <script>
  (function(){
    function refreshCart(){
      fetch('index.php?route=checkout/cart.list')
        .then(function(r){return r.text()})
        .then(function(html){
          var wrap = document.createElement('div');
          wrap.innerHTML = html;
          var inner = wrap.querySelector('#output-cart');
          if(inner){
            document.querySelector('#output-cart').replaceWith(inner);
          } else {
            location.reload();
          }
        });
    }
    document.addEventListener('click', function(e){
      var row = e.target.closest('tr[data-cart-id]');
      if(!row) return;
      var key = row.getAttribute('data-cart-id');
      if(e.target.closest('.js-qty-inc') || e.target.closest('.js-qty-dec')){
        var input = row.querySelector('.js-qty-input');
        var qty = parseInt(input.value || '1', 10);
        qty += e.target.closest('.js-qty-inc') ? 1 : -1;
        if(qty < 1) qty = 1;
        var form = new FormData();
        form.append('key', key);
        form.append('quantity', qty);
        fetch('index.php?route=checkout/cart.edit', {method:'POST', body: form})
          .then(function(){ refreshCart(); });
      }
      if(e.target.closest('.js-remove')){
        fetch('index.php?route=checkout/cart.remove&key=' + encodeURIComponent(key))
          .then(function(){ refreshCart(); });
      }
    });
  })();
  </script>
  <script>
  (function(){
    var btn = document.getElementById('button-coupon');
    if(btn){
      btn.addEventListener('click', function(){
        var code = (document.getElementById('input-coupon') || {}).value || '';
        var form = new FormData();
        form.append('coupon', code);
        fetch('index.php?route=extension/total/coupon/coupon', { method: 'POST', body: form })
          .then(function(r){ return r.json(); })
          .then(function(json){
            if(json && json.redirect){
              location = json.redirect;
              return;
            }
            if(json && json.error){
              alert(json.error);
            }
            // Refresh the cart list to update totals
            fetch('index.php?route=checkout/cart.list')
              .then(function(r){return r.text()})
              .then(function(html){
                var wrap = document.createElement('div');
                wrap.innerHTML = html;
                var inner = wrap.querySelector('#output-cart');
                if(inner){
                  document.querySelector('#output-cart').replaceWith(inner);
                } else {
                  location.reload();
                }
              });
          })
          .catch(function(err){ alert(err); });
      });
    }
  })();
  </script>
{% else %}
  <h1>{{ heading_title }}</h1>
  <p>{{ text_no_results }}</p>
  <div class=\"text-end\"><a href=\"{{ continue }}\" class=\"btn btn-primary\">{{ button_continue }}</a></div>
{% endif %}
", "catalog/view/template/checkout/cart_list.twig", "C:\\xampp\\htdocs\\zyannew\\catalog\\view\\template\\checkout\\cart_list.twig");
    }
}

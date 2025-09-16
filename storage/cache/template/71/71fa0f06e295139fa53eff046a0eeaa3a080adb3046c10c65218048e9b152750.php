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

/* catalog/view/template/account/payment_method_list.twig */
class __TwigTemplate_c66291888f0ca1ae2c16a6f766bd9d3b59fea869aae5eeefab5553a6578e9c56 extends Template
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
        if (($context["payment_methods"] ?? null)) {
            // line 2
            yield "    <!-- Payment Methods Grid -->
    <div class=\"payment-methods-grid\">
        ";
            // line 4
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["payment_methods"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["payment_method"]) {
                // line 5
                yield "            <div class=\"payment-method-card\">
                <div class=\"payment-method-content\">
                    ";
                // line 7
                yield $context["payment_method"];
                yield "
                </div>
            </div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['payment_method'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 11
            yield "    </div>
";
        } else {
            // line 13
            yield "    <!-- Empty State -->
    <div class=\"empty-payment-methods-state\">
        <div class=\"empty-icon\">
            <i class=\"icon icon-credit-card\"></i>
        </div>
        <h3>No Payment Methods Found</h3>
        <p>";
            // line 19
            yield ($context["text_no_results"] ?? null);
            yield "</p>
        <a href=\"";
            // line 20
            yield ($context["add"] ?? null);
            yield "\" class=\"tf-btn btn-fill animate-btn\">
            <i class=\"icon icon-plus\"></i>
            Add Payment Method
        </a>
    </div>
";
        }
        // line 26
        yield "
<style>
/* Payment Methods List Styling */
.payment-methods-grid {
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
    gap: 20px;
    margin-bottom: 20px;
}

.payment-method-card {
    background: #fff;
    border: 1px solid #e9ecef;
    border-radius: 12px;
    padding: 20px;
    transition: all 0.3s ease;
    position: relative;
    overflow: hidden;
}

.payment-method-card::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    width: 4px;
    height: 100%;
    background: #28a745;
    opacity: 0;
    transition: opacity 0.3s ease;
}

.payment-method-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 8px 25px rgba(0,0,0,0.15);
    border-color: #28a745;
}

.payment-method-card:hover::before {
    opacity: 1;
}

.payment-method-content {
    position: relative;
    z-index: 1;
}

/* Empty State */
.empty-payment-methods-state {
    text-align: center;
    padding: 80px 20px;
    background: #fff;
    border-radius: 12px;
    box-shadow: 0 2px 8px rgba(0,0,0,0.08);
}

.empty-icon {
    margin-bottom: 25px;
}

.empty-icon i {
    font-size: 64px;
    color: #ccc;
}

.empty-payment-methods-state h3 {
    margin: 0 0 15px 0;
    font-size: 28px;
    font-weight: 600;
    color: #333;
}

.empty-payment-methods-state p {
    margin: 0 0 30px 0;
    font-size: 16px;
    color: #666;
    line-height: 1.6;
}

.empty-payment-methods-state .tf-btn {
    padding: 15px 30px;
    font-size: 16px;
}

/* Responsive Design */
@media (max-width: 992px) {
    .payment-methods-grid {
        grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
        gap: 15px;
    }
}

@media (max-width: 768px) {
    .payment-methods-grid {
        grid-template-columns: 1fr;
    }
    
    .payment-method-card {
        padding: 15px;
    }
}

@media (max-width: 576px) {
    .payment-methods-grid {
        margin: 0 -15px;
    }
    
    .payment-method-card {
        border-radius: 0;
        margin-bottom: 15px;
    }
    
    .empty-payment-methods-state {
        padding: 60px 15px;
        margin: 0 -15px;
        border-radius: 0;
    }
    
    .empty-icon i {
        font-size: 48px;
    }
    
    .empty-payment-methods-state h3 {
        font-size: 24px;
    }
}
</style>";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "catalog/view/template/account/payment_method_list.twig";
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
        return array (  91 => 26,  82 => 20,  78 => 19,  70 => 13,  66 => 11,  56 => 7,  52 => 5,  48 => 4,  44 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% if payment_methods %}
    <!-- Payment Methods Grid -->
    <div class=\"payment-methods-grid\">
        {% for payment_method in payment_methods %}
            <div class=\"payment-method-card\">
                <div class=\"payment-method-content\">
                    {{ payment_method }}
                </div>
            </div>
        {% endfor %}
    </div>
{% else %}
    <!-- Empty State -->
    <div class=\"empty-payment-methods-state\">
        <div class=\"empty-icon\">
            <i class=\"icon icon-credit-card\"></i>
        </div>
        <h3>No Payment Methods Found</h3>
        <p>{{ text_no_results }}</p>
        <a href=\"{{ add }}\" class=\"tf-btn btn-fill animate-btn\">
            <i class=\"icon icon-plus\"></i>
            Add Payment Method
        </a>
    </div>
{% endif %}

<style>
/* Payment Methods List Styling */
.payment-methods-grid {
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
    gap: 20px;
    margin-bottom: 20px;
}

.payment-method-card {
    background: #fff;
    border: 1px solid #e9ecef;
    border-radius: 12px;
    padding: 20px;
    transition: all 0.3s ease;
    position: relative;
    overflow: hidden;
}

.payment-method-card::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    width: 4px;
    height: 100%;
    background: #28a745;
    opacity: 0;
    transition: opacity 0.3s ease;
}

.payment-method-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 8px 25px rgba(0,0,0,0.15);
    border-color: #28a745;
}

.payment-method-card:hover::before {
    opacity: 1;
}

.payment-method-content {
    position: relative;
    z-index: 1;
}

/* Empty State */
.empty-payment-methods-state {
    text-align: center;
    padding: 80px 20px;
    background: #fff;
    border-radius: 12px;
    box-shadow: 0 2px 8px rgba(0,0,0,0.08);
}

.empty-icon {
    margin-bottom: 25px;
}

.empty-icon i {
    font-size: 64px;
    color: #ccc;
}

.empty-payment-methods-state h3 {
    margin: 0 0 15px 0;
    font-size: 28px;
    font-weight: 600;
    color: #333;
}

.empty-payment-methods-state p {
    margin: 0 0 30px 0;
    font-size: 16px;
    color: #666;
    line-height: 1.6;
}

.empty-payment-methods-state .tf-btn {
    padding: 15px 30px;
    font-size: 16px;
}

/* Responsive Design */
@media (max-width: 992px) {
    .payment-methods-grid {
        grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
        gap: 15px;
    }
}

@media (max-width: 768px) {
    .payment-methods-grid {
        grid-template-columns: 1fr;
    }
    
    .payment-method-card {
        padding: 15px;
    }
}

@media (max-width: 576px) {
    .payment-methods-grid {
        margin: 0 -15px;
    }
    
    .payment-method-card {
        border-radius: 0;
        margin-bottom: 15px;
    }
    
    .empty-payment-methods-state {
        padding: 60px 15px;
        margin: 0 -15px;
        border-radius: 0;
    }
    
    .empty-icon i {
        font-size: 48px;
    }
    
    .empty-payment-methods-state h3 {
        font-size: 24px;
    }
}
</style>", "catalog/view/template/account/payment_method_list.twig", "C:\\xampp\\htdocs\\newzyan\\catalog\\view\\template\\account\\payment_method_list.twig");
    }
}

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

/* catalog/view/template/account/address_list.twig */
class __TwigTemplate_4f1c2999ac30be650220222aab9e3105f79962cb40626e6e29cbb2d640be361e extends Template
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
        if (($context["addresses"] ?? null)) {
            // line 2
            yield "    <!-- Address Cards Grid -->
    <div class=\"addresses-grid\">
        ";
            // line 4
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["addresses"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["address"]) {
                // line 5
                yield "            <div class=\"address-card";
                if (CoreExtension::getAttribute($this->env, $this->source, $context["address"], "default", [], "any", false, false, false, 5)) {
                    yield " default-address";
                }
                yield "\">
                <div class=\"address-header\">
                    <div class=\"address-type\">
                        ";
                // line 8
                if (CoreExtension::getAttribute($this->env, $this->source, $context["address"], "default", [], "any", false, false, false, 8)) {
                    // line 9
                    yield "                            <span class=\"default-badge\">
                                <i class=\"icon icon-star\"></i>
                                ";
                    // line 11
                    yield ($context["text_default"] ?? null);
                    yield "
                            </span>
                        ";
                } else {
                    // line 14
                    yield "                            <span class=\"address-label\">Address</span>
                        ";
                }
                // line 16
                yield "                    </div>
                    <div class=\"address-actions\">
                        <a href=\"";
                // line 18
                yield CoreExtension::getAttribute($this->env, $this->source, $context["address"], "edit", [], "any", false, false, false, 18);
                yield "\" class=\"action-btn edit-btn\" data-bs-toggle=\"tooltip\" title=\"";
                yield ($context["button_edit"] ?? null);
                yield "\">
                            <i class=\"icon icon-edit\"></i>
                        </a>
                        <a href=\"";
                // line 21
                yield CoreExtension::getAttribute($this->env, $this->source, $context["address"], "delete", [], "any", false, false, false, 21);
                yield "\" class=\"action-btn delete-btn\" data-bs-toggle=\"tooltip\" title=\"";
                yield ($context["button_delete"] ?? null);
                yield "\">
                            <i class=\"icon icon-trash-2\"></i>
                        </a>
                    </div>
                </div>
                <div class=\"address-content\">
                    <div class=\"address-text\">
                        <i class=\"icon icon-map-pin\"></i>
                        <div class=\"address-details\">";
                // line 29
                yield CoreExtension::getAttribute($this->env, $this->source, $context["address"], "address", [], "any", false, false, false, 29);
                yield "</div>
                    </div>
                </div>
                ";
                // line 32
                if (CoreExtension::getAttribute($this->env, $this->source, $context["address"], "default", [], "any", false, false, false, 32)) {
                    // line 33
                    yield "                    <div class=\"address-footer\">
                        <small class=\"default-text\">
                            <i class=\"icon icon-check-circle\"></i>
                            This is your default address
                        </small>
                    </div>
                ";
                }
                // line 40
                yield "            </div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['address'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 42
            yield "    </div>
";
        } else {
            // line 44
            yield "    <!-- Empty State -->
    <div class=\"empty-addresses-state\">
        <div class=\"empty-icon\">
            <i class=\"icon icon-map-pin\"></i>
        </div>
        <h3>No Addresses Found</h3>
        <p>";
            // line 50
            yield ($context["text_no_results"] ?? null);
            yield "</p>
        <a href=\"";
            // line 51
            yield ($context["add"] ?? null);
            yield "\" class=\"tf-btn btn-fill animate-btn\">
            <i class=\"icon icon-plus\"></i>
            Add Your First Address
        </a>
    </div>
";
        }
        // line 57
        yield "
<style>
/* Address List Styling */
.addresses-grid {
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(350px, 1fr));
    gap: 20px;
    margin-bottom: 20px;
}

.address-card {
    background: #fff;
    border: 1px solid #e9ecef;
    border-radius: 12px;
    padding: 20px;
    transition: all 0.3s ease;
    position: relative;
    overflow: hidden;
}

.address-card::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    width: 4px;
    height: 100%;
    background: #241B68;
    opacity: 0;
    transition: opacity 0.3s ease;
}

.address-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 8px 25px rgba(0,0,0,0.15);
    border-color: #241B68;
}

.address-card:hover::before {
    opacity: 1;
}

.default-address {
    border-color: #ffc107;
    background: #fffbf0;
}

.default-address::before {
    background: #ffc107;
    opacity: 1;
}

.address-header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 15px;
    padding-bottom: 10px;
    border-bottom: 1px solid #e9ecef;
}

.address-type {
    flex: 1;
}

.default-badge {
    display: inline-flex;
    align-items: center;
    gap: 6px;
    background: #ffc107;
    color: #856404;
    padding: 4px 10px;
    border-radius: 15px;
    font-size: 12px;
    font-weight: 600;
    text-transform: uppercase;
    letter-spacing: 0.5px;
}

.default-badge i {
    font-size: 12px;
}

.address-label {
    font-size: 14px;
    color: #666;
    font-weight: 500;
}

.address-actions {
    display: flex;
    gap: 8px;
}

.action-btn {
    width: 36px;
    height: 36px;
    border-radius: 6px;
    display: flex;
    align-items: center;
    justify-content: center;
    text-decoration: none;
    transition: all 0.2s ease;
    border: 1px solid transparent;
}

.edit-btn {
    background: #f8f9fa;
    color: #666;
    border-color: #e9ecef;
}

.edit-btn:hover {
    background: #241B68;
    color: #fff;
    border-color: #241B68;
    text-decoration: none;
}

.delete-btn {
    background: #f8f9fa;
    color: #666;
    border-color: #e9ecef;
}

.delete-btn:hover {
    background: #dc3545;
    color: #fff;
    border-color: #dc3545;
    text-decoration: none;
}

.address-content {
    margin-bottom: 15px;
}

.address-text {
    display: flex;
    align-items: flex-start;
    gap: 12px;
}

.address-text i {
    font-size: 18px;
    color: #241B68;
    margin-top: 2px;
    flex-shrink: 0;
}

.address-details {
    color: #333;
    line-height: 1.5;
    font-size: 14px;
}

.address-footer {
    padding-top: 10px;
    border-top: 1px solid #f1f1f1;
}

.default-text {
    display: flex;
    align-items: center;
    gap: 6px;
    color: #856404;
    font-weight: 500;
}

.default-text i {
    font-size: 14px;
    color: #ffc107;
}

/* Empty State */
.empty-addresses-state {
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

.empty-addresses-state h3 {
    margin: 0 0 15px 0;
    font-size: 28px;
    font-weight: 600;
    color: #333;
}

.empty-addresses-state p {
    margin: 0 0 30px 0;
    font-size: 16px;
    color: #666;
    line-height: 1.6;
}

.empty-addresses-state .tf-btn {
    padding: 15px 30px;
    font-size: 16px;
}

/* Responsive Design */
@media (max-width: 992px) {
    .addresses-grid {
        grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
        gap: 15px;
    }
}

@media (max-width: 768px) {
    .addresses-grid {
        grid-template-columns: 1fr;
    }
    
    .address-card {
        padding: 15px;
    }
    
    .address-header {
        flex-direction: column;
        align-items: flex-start;
        gap: 10px;
    }
    
    .address-actions {
        align-self: flex-end;
    }
}

@media (max-width: 576px) {
    .addresses-grid {
        margin: 0 -15px;
    }
    
    .address-card {
        border-radius: 0;
        margin-bottom: 15px;
    }
    
    .empty-addresses-state {
        padding: 60px 15px;
        margin: 0 -15px;
        border-radius: 0;
    }
    
    .empty-icon i {
        font-size: 48px;
    }
    
    .empty-addresses-state h3 {
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
        return "catalog/view/template/account/address_list.twig";
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
        return array (  151 => 57,  142 => 51,  138 => 50,  130 => 44,  126 => 42,  119 => 40,  110 => 33,  108 => 32,  102 => 29,  89 => 21,  81 => 18,  77 => 16,  73 => 14,  67 => 11,  63 => 9,  61 => 8,  52 => 5,  48 => 4,  44 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% if addresses %}
    <!-- Address Cards Grid -->
    <div class=\"addresses-grid\">
        {% for address in addresses %}
            <div class=\"address-card{% if address.default %} default-address{% endif %}\">
                <div class=\"address-header\">
                    <div class=\"address-type\">
                        {% if address.default %}
                            <span class=\"default-badge\">
                                <i class=\"icon icon-star\"></i>
                                {{ text_default }}
                            </span>
                        {% else %}
                            <span class=\"address-label\">Address</span>
                        {% endif %}
                    </div>
                    <div class=\"address-actions\">
                        <a href=\"{{ address.edit }}\" class=\"action-btn edit-btn\" data-bs-toggle=\"tooltip\" title=\"{{ button_edit }}\">
                            <i class=\"icon icon-edit\"></i>
                        </a>
                        <a href=\"{{ address.delete }}\" class=\"action-btn delete-btn\" data-bs-toggle=\"tooltip\" title=\"{{ button_delete }}\">
                            <i class=\"icon icon-trash-2\"></i>
                        </a>
                    </div>
                </div>
                <div class=\"address-content\">
                    <div class=\"address-text\">
                        <i class=\"icon icon-map-pin\"></i>
                        <div class=\"address-details\">{{ address.address }}</div>
                    </div>
                </div>
                {% if address.default %}
                    <div class=\"address-footer\">
                        <small class=\"default-text\">
                            <i class=\"icon icon-check-circle\"></i>
                            This is your default address
                        </small>
                    </div>
                {% endif %}
            </div>
        {% endfor %}
    </div>
{% else %}
    <!-- Empty State -->
    <div class=\"empty-addresses-state\">
        <div class=\"empty-icon\">
            <i class=\"icon icon-map-pin\"></i>
        </div>
        <h3>No Addresses Found</h3>
        <p>{{ text_no_results }}</p>
        <a href=\"{{ add }}\" class=\"tf-btn btn-fill animate-btn\">
            <i class=\"icon icon-plus\"></i>
            Add Your First Address
        </a>
    </div>
{% endif %}

<style>
/* Address List Styling */
.addresses-grid {
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(350px, 1fr));
    gap: 20px;
    margin-bottom: 20px;
}

.address-card {
    background: #fff;
    border: 1px solid #e9ecef;
    border-radius: 12px;
    padding: 20px;
    transition: all 0.3s ease;
    position: relative;
    overflow: hidden;
}

.address-card::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    width: 4px;
    height: 100%;
    background: #241B68;
    opacity: 0;
    transition: opacity 0.3s ease;
}

.address-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 8px 25px rgba(0,0,0,0.15);
    border-color: #241B68;
}

.address-card:hover::before {
    opacity: 1;
}

.default-address {
    border-color: #ffc107;
    background: #fffbf0;
}

.default-address::before {
    background: #ffc107;
    opacity: 1;
}

.address-header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 15px;
    padding-bottom: 10px;
    border-bottom: 1px solid #e9ecef;
}

.address-type {
    flex: 1;
}

.default-badge {
    display: inline-flex;
    align-items: center;
    gap: 6px;
    background: #ffc107;
    color: #856404;
    padding: 4px 10px;
    border-radius: 15px;
    font-size: 12px;
    font-weight: 600;
    text-transform: uppercase;
    letter-spacing: 0.5px;
}

.default-badge i {
    font-size: 12px;
}

.address-label {
    font-size: 14px;
    color: #666;
    font-weight: 500;
}

.address-actions {
    display: flex;
    gap: 8px;
}

.action-btn {
    width: 36px;
    height: 36px;
    border-radius: 6px;
    display: flex;
    align-items: center;
    justify-content: center;
    text-decoration: none;
    transition: all 0.2s ease;
    border: 1px solid transparent;
}

.edit-btn {
    background: #f8f9fa;
    color: #666;
    border-color: #e9ecef;
}

.edit-btn:hover {
    background: #241B68;
    color: #fff;
    border-color: #241B68;
    text-decoration: none;
}

.delete-btn {
    background: #f8f9fa;
    color: #666;
    border-color: #e9ecef;
}

.delete-btn:hover {
    background: #dc3545;
    color: #fff;
    border-color: #dc3545;
    text-decoration: none;
}

.address-content {
    margin-bottom: 15px;
}

.address-text {
    display: flex;
    align-items: flex-start;
    gap: 12px;
}

.address-text i {
    font-size: 18px;
    color: #241B68;
    margin-top: 2px;
    flex-shrink: 0;
}

.address-details {
    color: #333;
    line-height: 1.5;
    font-size: 14px;
}

.address-footer {
    padding-top: 10px;
    border-top: 1px solid #f1f1f1;
}

.default-text {
    display: flex;
    align-items: center;
    gap: 6px;
    color: #856404;
    font-weight: 500;
}

.default-text i {
    font-size: 14px;
    color: #ffc107;
}

/* Empty State */
.empty-addresses-state {
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

.empty-addresses-state h3 {
    margin: 0 0 15px 0;
    font-size: 28px;
    font-weight: 600;
    color: #333;
}

.empty-addresses-state p {
    margin: 0 0 30px 0;
    font-size: 16px;
    color: #666;
    line-height: 1.6;
}

.empty-addresses-state .tf-btn {
    padding: 15px 30px;
    font-size: 16px;
}

/* Responsive Design */
@media (max-width: 992px) {
    .addresses-grid {
        grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
        gap: 15px;
    }
}

@media (max-width: 768px) {
    .addresses-grid {
        grid-template-columns: 1fr;
    }
    
    .address-card {
        padding: 15px;
    }
    
    .address-header {
        flex-direction: column;
        align-items: flex-start;
        gap: 10px;
    }
    
    .address-actions {
        align-self: flex-end;
    }
}

@media (max-width: 576px) {
    .addresses-grid {
        margin: 0 -15px;
    }
    
    .address-card {
        border-radius: 0;
        margin-bottom: 15px;
    }
    
    .empty-addresses-state {
        padding: 60px 15px;
        margin: 0 -15px;
        border-radius: 0;
    }
    
    .empty-icon i {
        font-size: 48px;
    }
    
    .empty-addresses-state h3 {
        font-size: 24px;
    }
}
</style>", "catalog/view/template/account/address_list.twig", "C:\\xampp\\htdocs\\newzyan\\catalog\\view\\template\\account\\address_list.twig");
    }
}

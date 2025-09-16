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

/* catalog/view/template/account/account.twig */
class __TwigTemplate_57a0df9beb23829074794d2d3cd5a9d622fc50848fb19605c9f9253a47ec40a6 extends Template
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
        yield ($context["header"] ?? null);
        yield "

<!-- Page Title -->
<section class=\"s-page-title\" style=\"padding-top:100px;\">
    <div class=\"container\">
        <div class=\"content\" style=\"padding-bottom: 19px;\">
            <ul class=\"breadcrumbs-page\">
    ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 9
            yield "                    <li class=\"breadcrumb-item\" style=\"display:flex;\">
                        <a href=\"";
            // line 10
            yield CoreExtension::getAttribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 10);
            yield "\">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 10);
            yield "</a>
                    </li>
       ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['breadcrumb'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        yield "  </ul>
            <h1 class=\"title-page\">My Account</h1>
        </div>
    </div>
</section>
<!-- /Page Title -->

<!-- Account Dashboard -->
<section class=\"flat-spacing-3\">
    <div class=\"container\">
        <!-- Success Message -->
  ";
        // line 24
        if (($context["success"] ?? null)) {
            // line 25
            yield "            <div class=\"alert alert-success alert-dismissible mb-4\">
                <i class=\"fa-solid fa-circle-check\"></i> ";
            // line 26
            yield ($context["success"] ?? null);
            yield "
                <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button>
            </div>
  ";
        }
        // line 30
        yield "
        <!-- Welcome Section -->
        <div class=\"account-welcome\">
            <div class=\"welcome-card\">
                <div class=\"welcome-content\">
                    <div class=\"welcome-text\">
                        <h2>Welcome back!</h2>
                        <p>Manage your account, track orders, and explore your personalized shopping experience.</p>
                    </div>
                    <div class=\"welcome-icon\">
                        <i class=\"icon icon-user-check\"></i>
                    </div>
                </div>
            </div>
        </div>

        <!-- Account Menu Grid -->
        <div class=\"account-menu-grid\">
            <div class=\"row g-4\">
                <!-- Account Details -->
                <div class=\"col-lg-3 col-md-6\">
                    <a href=\"";
        // line 51
        yield ($context["edit"] ?? null);
        yield "\" class=\"account-menu-card\">
                        <div class=\"card-icon\">
                            <i class=\"icon icon-user\"></i>
                        </div>
                        <div class=\"card-content\">
                            <h4>Account Details</h4>
                            <p>Review and update your personal information</p>
                        </div>
                        <div class=\"card-arrow\">
                            <i class=\"icon icon-arrow-right\"></i>
                        </div>
                    </a>
                </div>

                <!-- Order History -->
                <div class=\"col-lg-3 col-md-6\">
                    <a href=\"";
        // line 67
        yield ($context["order"] ?? null);
        yield "\" class=\"account-menu-card\">
                        <div class=\"card-icon\">
                            <i class=\"icon icon-package\"></i>
                        </div>
                        <div class=\"card-content\">
                            <h4>Order History</h4>
                            <p>Check the history and status of your orders</p>
                        </div>
                        <div class=\"card-arrow\">
                            <i class=\"icon icon-arrow-right\"></i>
                        </div>
                    </a>
                </div>

                <!-- Wishlist -->
                <div class=\"col-lg-3 col-md-6\">
                    <a href=\"";
        // line 83
        yield ($context["wishlist"] ?? null);
        yield "\" class=\"account-menu-card\">
                        <div class=\"card-icon\">
                            <i class=\"icon icon-heart\"></i>
                        </div>
                        <div class=\"card-content\">
                            <h4>Wishlist</h4>
                            <p>Save your favorite items for later</p>
                        </div>
                        <div class=\"card-arrow\">
                            <i class=\"icon icon-arrow-right\"></i>
                        </div>
                    </a>
  </div>

                <!-- Address Book -->
                <div class=\"col-lg-3 col-md-6\">
                    <a href=\"";
        // line 99
        yield ($context["address"] ?? null);
        yield "\" class=\"account-menu-card\">
                        <div class=\"card-icon\">
                            <i class=\"icon icon-map-pin\"></i>
                        </div>
                        <div class=\"card-content\">
                            <h4>Address Book</h4>
                            <p>Manage your shipping and billing addresses</p>
                        </div>
                        <div class=\"card-arrow\">
                            <i class=\"icon icon-arrow-right\"></i>
                        </div>
          </a>
        </div>

                <!-- Password -->
                <div class=\"col-lg-3 col-md-6\">
                    <a href=\"";
        // line 115
        yield ($context["password"] ?? null);
        yield "\" class=\"account-menu-card\">
                        <div class=\"card-icon\">
                            <i class=\"icon icon-lock\"></i>
                        </div>
                        <div class=\"card-content\">
                            <h4>Password</h4>
                            <p>Change your account password</p>
                        </div>
                        <div class=\"card-arrow\">
                            <i class=\"icon icon-arrow-right\"></i>
                        </div>
                    </a>
                </div>

                <!-- Downloads -->
                <div class=\"col-lg-3 col-md-6\">
                    <a href=\"";
        // line 131
        yield ($context["download"] ?? null);
        yield "\" class=\"account-menu-card\">
                        <div class=\"card-icon\">
                            <i class=\"icon icon-download\"></i>
                        </div>
                        <div class=\"card-content\">
                            <h4>Downloads</h4>
                            <p>Access your digital purchases</p>
                        </div>
                        <div class=\"card-arrow\">
                            <i class=\"icon icon-arrow-right\"></i>
                        </div>
          </a>
        </div>

                <!-- Returns -->
                <div class=\"col-lg-3 col-md-6\">
                    <a href=\"";
        // line 147
        yield ($context["return"] ?? null);
        yield "\" class=\"account-menu-card\">
                        <div class=\"card-icon\">
                            <i class=\"icon icon-refresh-cw\"></i>
                        </div>
                        <div class=\"card-content\">
                            <h4>Returns</h4>
                            <p>Manage your return requests</p>
                        </div>
                        <div class=\"card-arrow\">
                            <i class=\"icon icon-arrow-right\"></i>
                        </div>
                    </a>
                </div>

                <!-- Newsletter -->
                <div class=\"col-lg-3 col-md-6\">
                    <a href=\"";
        // line 163
        yield ($context["newsletter"] ?? null);
        yield "\" class=\"account-menu-card\">
                        <div class=\"card-icon\">
                            <i class=\"icon icon-mail\"></i>
                        </div>
                        <div class=\"card-content\">
                            <h4>Newsletter</h4>
                            <p>Manage your email preferences</p>
                        </div>
                        <div class=\"card-arrow\">
                            <i class=\"icon icon-arrow-right\"></i>
                        </div>
                    </a>
                </div>
            </div>
        </div>

        <!-- Quick Actions -->
        <div class=\"account-quick-actions\">
            <div class=\"quick-actions-card\">
                <div class=\"actions-header\">
                    <h3>Quick Actions</h3>
                </div>
                <div class=\"actions-content\">
                    <div class=\"row g-3\">
                        <div class=\"col-md-4\">
                            <a href=\"";
        // line 188
        yield ($context["logout"] ?? null);
        yield "\" class=\"quick-action-btn logout-btn\">
                                <i class=\"icon icon-log-out\"></i>
                                <span>Logout</span>
                            </a>
                        </div>
                        <div class=\"col-md-4\">
                            <a href=\"";
        // line 194
        yield ($context["tracking"] ?? null);
        yield "\" class=\"quick-action-btn\">
                                <i class=\"icon icon-search\"></i>
                                <span>Track Order</span>
                            </a>
                        </div>
                        <div class=\"col-md-4\">
                            <a href=\"";
        // line 200
        yield ($context["continue"] ?? null);
        yield "\" class=\"quick-action-btn\">
                                <i class=\"icon icon-shopping-bag\"></i>
                                <span>Continue Shopping</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        ";
        // line 210
        yield ($context["content_top"] ?? null);
        yield "
    </div>
</section>
<!-- /Account Dashboard -->

<style>
/* Account Dashboard Styling */
.account-welcome {
    margin-bottom: 40px;
}

.welcome-card {
    background: linear-gradient(135deg, #241B68 0%, #000 100%);
    color: #fff;
    border-radius: 12px;
    padding: 30px;
    box-shadow: 0 4px 20px rgba(36,27,104,0.2);
}

.welcome-content {
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.welcome-text h2 {

  color:#fff;
    margin: 0 0 10px 0;
    font-size: 28px;
    font-weight: 600;
}

.welcome-text p {
    margin: 0;
    font-size: 16px;
    opacity: 0.9;
    line-height: 1.5;
}

.welcome-icon {
    flex-shrink: 0;
}

.welcome-icon i {
    font-size: 48px;
    opacity: 0.8;
}

/* Account Menu Grid */
.account-menu-grid {
    margin-bottom: 40px;
}

.account-menu-card {
    display: flex;
    align-items: center;
    background: #fff;
    border: 1px solid #e9ecef;
    border-radius: 12px;
    padding: 25px;
    text-decoration: none;
    color: inherit;
    transition: all 0.3s ease;
    height: 100%;
    box-shadow: 0 2px 8px rgba(0,0,0,0.05);
}

.account-menu-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 8px 25px rgba(0,0,0,0.15);
    border-color: #241B68;
    text-decoration: none;
    color: inherit;
}

.card-icon {
    flex-shrink: 0;
    width: 60px;
    height: 60px;
    background: #f8f9fa;
    border-radius: 10px;
    display: flex;
    align-items: center;
    justify-content: center;
    margin-right: 20px;
    transition: all 0.3s ease;
}

.account-menu-card:hover .card-icon {
    background: #241B68;
    color: #fff;
}

.card-icon i {
    font-size: 24px;
    color: #666;
    transition: color 0.3s ease;
}

.account-menu-card:hover .card-icon i {
    color: #fff;
}

.card-content {
    flex: 1;
}

.card-content h4 {
    margin: 0 0 8px 0;
    font-size: 18px;
    font-weight: 600;
    color: #333;
}

.card-content p {
    margin: 0;
    color: #666;
    font-size: 14px;
    line-height: 1.4;
}

.card-arrow {
    flex-shrink: 0;
    margin-left: 15px;
    opacity: 0.5;
    transition: all 0.3s ease;
}

.account-menu-card:hover .card-arrow {
    opacity: 1;
    transform: translateX(5px);
}

.card-arrow i {
    font-size: 18px;
    color: #666;
}

/* Quick Actions */
.account-quick-actions {
    margin-bottom: 30px;
}

.quick-actions-card {
    background: #fff;
    border-radius: 12px;
    padding: 25px;
    box-shadow: 0 2px 8px rgba(0,0,0,0.08);
    border: 1px solid #e9ecef;
}

.actions-header {
    margin-bottom: 20px;
    padding-bottom: 15px;
    border-bottom: 1px solid #e9ecef;
}

.actions-header h3 {
    margin: 0;
    font-size: 20px;
    font-weight: 600;
    color: #333;
}

.quick-action-btn {
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    background: #f8f9fa;
    border: 1px solid #e9ecef;
    border-radius: 8px;
    padding: 20px 15px;
    text-decoration: none;
    color: #666;
    transition: all 0.2s ease;
    height: 100px;
}

.quick-action-btn:hover {
    background: #241B68;
    color: #fff;
    border-color: #241B68;
    text-decoration: none;
    transform: translateY(-2px);
}

.quick-action-btn i {
    font-size: 24px;
    margin-bottom: 8px;
}

.quick-action-btn span {
    font-size: 14px;
    font-weight: 500;
}

.logout-btn:hover {
    background: #dc3545;
    border-color: #dc3545;
}

/* Alert Styling */
.alert {
    border-radius: 8px;
    border: none;
    padding: 15px 20px;
    font-weight: 500;
}

.alert-success {
    background: #d4edda;
    color: #155724;
}

/* Responsive Design */
@media (max-width: 768px) {
    .welcome-content {
        flex-direction: column;
        text-align: center;
        gap: 20px;
    }
    
    .welcome-text h2 {
        font-size: 24px;
    }
    
    .welcome-icon i {
        font-size: 40px;
    }
    
    .account-menu-card {
        flex-direction: column;
        text-align: center;
        padding: 20px;
    }
    
    .card-icon {
        margin-right: 0;
        margin-bottom: 15px;
    }
    
    .card-arrow {
        margin-left: 0;
        margin-top: 10px;
    }
    
    .quick-actions-card {
        padding: 20px;
    }
}

@media (max-width: 576px) {
    .welcome-card {
        padding: 20px;
        margin: 0 -15px;
        border-radius: 0;
    }
    
    .quick-actions-card {
        margin: 0 -15px;
        border-radius: 0;
    }
    
    .account-menu-card {
        margin: 0 -15px 15px -15px;
        border-radius: 0;
    }
}
</style>

";
        // line 482
        yield ($context["footer"] ?? null);
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "catalog/view/template/account/account.twig";
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
        return array (  585 => 482,  310 => 210,  297 => 200,  288 => 194,  279 => 188,  251 => 163,  232 => 147,  213 => 131,  194 => 115,  175 => 99,  156 => 83,  137 => 67,  118 => 51,  95 => 30,  88 => 26,  85 => 25,  83 => 24,  70 => 13,  59 => 10,  56 => 9,  52 => 8,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{{ header }}

<!-- Page Title -->
<section class=\"s-page-title\" style=\"padding-top:100px;\">
    <div class=\"container\">
        <div class=\"content\" style=\"padding-bottom: 19px;\">
            <ul class=\"breadcrumbs-page\">
    {% for breadcrumb in breadcrumbs %}
                    <li class=\"breadcrumb-item\" style=\"display:flex;\">
                        <a href=\"{{ breadcrumb.href }}\">{{ breadcrumb.text }}</a>
                    </li>
       {% endfor %}
  </ul>
            <h1 class=\"title-page\">My Account</h1>
        </div>
    </div>
</section>
<!-- /Page Title -->

<!-- Account Dashboard -->
<section class=\"flat-spacing-3\">
    <div class=\"container\">
        <!-- Success Message -->
  {% if success %}
            <div class=\"alert alert-success alert-dismissible mb-4\">
                <i class=\"fa-solid fa-circle-check\"></i> {{ success }}
                <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button>
            </div>
  {% endif %}

        <!-- Welcome Section -->
        <div class=\"account-welcome\">
            <div class=\"welcome-card\">
                <div class=\"welcome-content\">
                    <div class=\"welcome-text\">
                        <h2>Welcome back!</h2>
                        <p>Manage your account, track orders, and explore your personalized shopping experience.</p>
                    </div>
                    <div class=\"welcome-icon\">
                        <i class=\"icon icon-user-check\"></i>
                    </div>
                </div>
            </div>
        </div>

        <!-- Account Menu Grid -->
        <div class=\"account-menu-grid\">
            <div class=\"row g-4\">
                <!-- Account Details -->
                <div class=\"col-lg-3 col-md-6\">
                    <a href=\"{{ edit }}\" class=\"account-menu-card\">
                        <div class=\"card-icon\">
                            <i class=\"icon icon-user\"></i>
                        </div>
                        <div class=\"card-content\">
                            <h4>Account Details</h4>
                            <p>Review and update your personal information</p>
                        </div>
                        <div class=\"card-arrow\">
                            <i class=\"icon icon-arrow-right\"></i>
                        </div>
                    </a>
                </div>

                <!-- Order History -->
                <div class=\"col-lg-3 col-md-6\">
                    <a href=\"{{ order }}\" class=\"account-menu-card\">
                        <div class=\"card-icon\">
                            <i class=\"icon icon-package\"></i>
                        </div>
                        <div class=\"card-content\">
                            <h4>Order History</h4>
                            <p>Check the history and status of your orders</p>
                        </div>
                        <div class=\"card-arrow\">
                            <i class=\"icon icon-arrow-right\"></i>
                        </div>
                    </a>
                </div>

                <!-- Wishlist -->
                <div class=\"col-lg-3 col-md-6\">
                    <a href=\"{{ wishlist }}\" class=\"account-menu-card\">
                        <div class=\"card-icon\">
                            <i class=\"icon icon-heart\"></i>
                        </div>
                        <div class=\"card-content\">
                            <h4>Wishlist</h4>
                            <p>Save your favorite items for later</p>
                        </div>
                        <div class=\"card-arrow\">
                            <i class=\"icon icon-arrow-right\"></i>
                        </div>
                    </a>
  </div>

                <!-- Address Book -->
                <div class=\"col-lg-3 col-md-6\">
                    <a href=\"{{ address }}\" class=\"account-menu-card\">
                        <div class=\"card-icon\">
                            <i class=\"icon icon-map-pin\"></i>
                        </div>
                        <div class=\"card-content\">
                            <h4>Address Book</h4>
                            <p>Manage your shipping and billing addresses</p>
                        </div>
                        <div class=\"card-arrow\">
                            <i class=\"icon icon-arrow-right\"></i>
                        </div>
          </a>
        </div>

                <!-- Password -->
                <div class=\"col-lg-3 col-md-6\">
                    <a href=\"{{ password }}\" class=\"account-menu-card\">
                        <div class=\"card-icon\">
                            <i class=\"icon icon-lock\"></i>
                        </div>
                        <div class=\"card-content\">
                            <h4>Password</h4>
                            <p>Change your account password</p>
                        </div>
                        <div class=\"card-arrow\">
                            <i class=\"icon icon-arrow-right\"></i>
                        </div>
                    </a>
                </div>

                <!-- Downloads -->
                <div class=\"col-lg-3 col-md-6\">
                    <a href=\"{{ download }}\" class=\"account-menu-card\">
                        <div class=\"card-icon\">
                            <i class=\"icon icon-download\"></i>
                        </div>
                        <div class=\"card-content\">
                            <h4>Downloads</h4>
                            <p>Access your digital purchases</p>
                        </div>
                        <div class=\"card-arrow\">
                            <i class=\"icon icon-arrow-right\"></i>
                        </div>
          </a>
        </div>

                <!-- Returns -->
                <div class=\"col-lg-3 col-md-6\">
                    <a href=\"{{ return }}\" class=\"account-menu-card\">
                        <div class=\"card-icon\">
                            <i class=\"icon icon-refresh-cw\"></i>
                        </div>
                        <div class=\"card-content\">
                            <h4>Returns</h4>
                            <p>Manage your return requests</p>
                        </div>
                        <div class=\"card-arrow\">
                            <i class=\"icon icon-arrow-right\"></i>
                        </div>
                    </a>
                </div>

                <!-- Newsletter -->
                <div class=\"col-lg-3 col-md-6\">
                    <a href=\"{{ newsletter }}\" class=\"account-menu-card\">
                        <div class=\"card-icon\">
                            <i class=\"icon icon-mail\"></i>
                        </div>
                        <div class=\"card-content\">
                            <h4>Newsletter</h4>
                            <p>Manage your email preferences</p>
                        </div>
                        <div class=\"card-arrow\">
                            <i class=\"icon icon-arrow-right\"></i>
                        </div>
                    </a>
                </div>
            </div>
        </div>

        <!-- Quick Actions -->
        <div class=\"account-quick-actions\">
            <div class=\"quick-actions-card\">
                <div class=\"actions-header\">
                    <h3>Quick Actions</h3>
                </div>
                <div class=\"actions-content\">
                    <div class=\"row g-3\">
                        <div class=\"col-md-4\">
                            <a href=\"{{ logout }}\" class=\"quick-action-btn logout-btn\">
                                <i class=\"icon icon-log-out\"></i>
                                <span>Logout</span>
                            </a>
                        </div>
                        <div class=\"col-md-4\">
                            <a href=\"{{ tracking }}\" class=\"quick-action-btn\">
                                <i class=\"icon icon-search\"></i>
                                <span>Track Order</span>
                            </a>
                        </div>
                        <div class=\"col-md-4\">
                            <a href=\"{{ continue }}\" class=\"quick-action-btn\">
                                <i class=\"icon icon-shopping-bag\"></i>
                                <span>Continue Shopping</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{ content_top }}
    </div>
</section>
<!-- /Account Dashboard -->

<style>
/* Account Dashboard Styling */
.account-welcome {
    margin-bottom: 40px;
}

.welcome-card {
    background: linear-gradient(135deg, #241B68 0%, #000 100%);
    color: #fff;
    border-radius: 12px;
    padding: 30px;
    box-shadow: 0 4px 20px rgba(36,27,104,0.2);
}

.welcome-content {
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.welcome-text h2 {

  color:#fff;
    margin: 0 0 10px 0;
    font-size: 28px;
    font-weight: 600;
}

.welcome-text p {
    margin: 0;
    font-size: 16px;
    opacity: 0.9;
    line-height: 1.5;
}

.welcome-icon {
    flex-shrink: 0;
}

.welcome-icon i {
    font-size: 48px;
    opacity: 0.8;
}

/* Account Menu Grid */
.account-menu-grid {
    margin-bottom: 40px;
}

.account-menu-card {
    display: flex;
    align-items: center;
    background: #fff;
    border: 1px solid #e9ecef;
    border-radius: 12px;
    padding: 25px;
    text-decoration: none;
    color: inherit;
    transition: all 0.3s ease;
    height: 100%;
    box-shadow: 0 2px 8px rgba(0,0,0,0.05);
}

.account-menu-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 8px 25px rgba(0,0,0,0.15);
    border-color: #241B68;
    text-decoration: none;
    color: inherit;
}

.card-icon {
    flex-shrink: 0;
    width: 60px;
    height: 60px;
    background: #f8f9fa;
    border-radius: 10px;
    display: flex;
    align-items: center;
    justify-content: center;
    margin-right: 20px;
    transition: all 0.3s ease;
}

.account-menu-card:hover .card-icon {
    background: #241B68;
    color: #fff;
}

.card-icon i {
    font-size: 24px;
    color: #666;
    transition: color 0.3s ease;
}

.account-menu-card:hover .card-icon i {
    color: #fff;
}

.card-content {
    flex: 1;
}

.card-content h4 {
    margin: 0 0 8px 0;
    font-size: 18px;
    font-weight: 600;
    color: #333;
}

.card-content p {
    margin: 0;
    color: #666;
    font-size: 14px;
    line-height: 1.4;
}

.card-arrow {
    flex-shrink: 0;
    margin-left: 15px;
    opacity: 0.5;
    transition: all 0.3s ease;
}

.account-menu-card:hover .card-arrow {
    opacity: 1;
    transform: translateX(5px);
}

.card-arrow i {
    font-size: 18px;
    color: #666;
}

/* Quick Actions */
.account-quick-actions {
    margin-bottom: 30px;
}

.quick-actions-card {
    background: #fff;
    border-radius: 12px;
    padding: 25px;
    box-shadow: 0 2px 8px rgba(0,0,0,0.08);
    border: 1px solid #e9ecef;
}

.actions-header {
    margin-bottom: 20px;
    padding-bottom: 15px;
    border-bottom: 1px solid #e9ecef;
}

.actions-header h3 {
    margin: 0;
    font-size: 20px;
    font-weight: 600;
    color: #333;
}

.quick-action-btn {
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    background: #f8f9fa;
    border: 1px solid #e9ecef;
    border-radius: 8px;
    padding: 20px 15px;
    text-decoration: none;
    color: #666;
    transition: all 0.2s ease;
    height: 100px;
}

.quick-action-btn:hover {
    background: #241B68;
    color: #fff;
    border-color: #241B68;
    text-decoration: none;
    transform: translateY(-2px);
}

.quick-action-btn i {
    font-size: 24px;
    margin-bottom: 8px;
}

.quick-action-btn span {
    font-size: 14px;
    font-weight: 500;
}

.logout-btn:hover {
    background: #dc3545;
    border-color: #dc3545;
}

/* Alert Styling */
.alert {
    border-radius: 8px;
    border: none;
    padding: 15px 20px;
    font-weight: 500;
}

.alert-success {
    background: #d4edda;
    color: #155724;
}

/* Responsive Design */
@media (max-width: 768px) {
    .welcome-content {
        flex-direction: column;
        text-align: center;
        gap: 20px;
    }
    
    .welcome-text h2 {
        font-size: 24px;
    }
    
    .welcome-icon i {
        font-size: 40px;
    }
    
    .account-menu-card {
        flex-direction: column;
        text-align: center;
        padding: 20px;
    }
    
    .card-icon {
        margin-right: 0;
        margin-bottom: 15px;
    }
    
    .card-arrow {
        margin-left: 0;
        margin-top: 10px;
    }
    
    .quick-actions-card {
        padding: 20px;
    }
}

@media (max-width: 576px) {
    .welcome-card {
        padding: 20px;
        margin: 0 -15px;
        border-radius: 0;
    }
    
    .quick-actions-card {
        margin: 0 -15px;
        border-radius: 0;
    }
    
    .account-menu-card {
        margin: 0 -15px 15px -15px;
        border-radius: 0;
    }
}
</style>

{{ footer }}", "catalog/view/template/account/account.twig", "C:\\xampp\\htdocs\\newzyan\\catalog\\view\\template\\account\\account.twig");
    }
}

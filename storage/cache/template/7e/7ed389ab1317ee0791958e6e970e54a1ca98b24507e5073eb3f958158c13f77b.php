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

/* catalog/view/template/account/password.twig */
class __TwigTemplate_356d0d56088f16e4de80b519434404d8d514b9d5bbac2f5c5dc8c7e80647cd43 extends Template
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
        yield "            </ul>
            <h1 class=\"title-page\">";
        // line 14
        yield ($context["heading_title"] ?? null);
        yield "</h1>
        </div>
    </div>
</section>
<!-- /Page Title -->

<!-- Change Password -->
<section class=\"flat-spacing-3\">
    <div class=\"container\">
        <div class=\"row justify-content-center\">
            ";
        // line 24
        yield ($context["column_left"] ?? null);
        yield "
            <div id=\"content\" class=\"col-lg-6\">
                ";
        // line 26
        yield ($context["content_top"] ?? null);
        yield "
                
                <!-- Password Change Introduction -->
                <div class=\"password-intro\">
                    <div class=\"intro-card\">
                        <div class=\"intro-header\">
                            <i class=\"icon icon-key\"></i>
                            <h3>Change Your Password</h3>
                        </div>
                        <p class=\"intro-text\">Update your account password to keep your account secure. Choose a strong password that you haven't used before.</p>
                    </div>
                </div>
                
                <!-- Password Form -->
                <div class=\"password-form-container\">
                    <form id=\"form-password\" action=\"";
        // line 41
        yield ($context["save"] ?? null);
        yield "\" method=\"post\" data-oc-toggle=\"ajax\">
                        <!-- Password Section -->
                        <div class=\"form-section\">
                            <div class=\"section-header\">
                                <i class=\"icon icon-lock\"></i>
                                <h4>";
        // line 46
        yield ($context["text_password"] ?? null);
        yield "</h4>
                            </div>
                            <div class=\"section-content\">
                                <div class=\"mb-3\">
                                    <label for=\"input-password\" class=\"form-label required\">";
        // line 50
        yield ($context["entry_password"] ?? null);
        yield "</label>
                                    <div class=\"input-group\">
                                        <span class=\"input-icon\">
                                            <i class=\"icon icon-lock\"></i>
                                        </span>
                                        <input type=\"password\" name=\"password\" value=\"";
        // line 55
        yield ($context["password"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_password"] ?? null);
        yield "\" id=\"input-password\" class=\"form-control\" autocomplete=\"new-password\"/>
                                        <button type=\"button\" class=\"password-toggle\" onclick=\"togglePassword('input-password', this)\">
                                            <i class=\"icon icon-eye\"></i>
                                        </button>
                                    </div>
                                    <div id=\"error-password\" class=\"invalid-feedback\"></div>
                                    <div class=\"password-strength\">
                                        <div class=\"strength-meter\">
                                            <div class=\"strength-bar\" id=\"strength-bar\"></div>
                                        </div>
                                        <span class=\"strength-text\" id=\"strength-text\">Password Strength</span>
                                    </div>
                                </div>
                                
                                <div class=\"mb-3\">
                                    <label for=\"input-confirm\" class=\"form-label required\">";
        // line 70
        yield ($context["entry_confirm"] ?? null);
        yield "</label>
                                    <div class=\"input-group\">
                                        <span class=\"input-icon\">
                                            <i class=\"icon icon-lock\"></i>
                                        </span>
                                        <input type=\"password\" name=\"confirm\" value=\"";
        // line 75
        yield ($context["confirm"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_confirm"] ?? null);
        yield "\" id=\"input-confirm\" class=\"form-control\"/>
                                        <button type=\"button\" class=\"password-toggle\" onclick=\"togglePassword('input-confirm', this)\">
                                            <i class=\"icon icon-eye\"></i>
                                        </button>
                                    </div>
                                    <div id=\"error-confirm\" class=\"invalid-feedback\"></div>
                                </div>
                                
                                <!-- Password Requirements -->
                                <div class=\"password-requirements\">
                                    <h5>Password Requirements:</h5>
                                    <ul class=\"requirements-list\">
                                        <li class=\"requirement\" id=\"length-req\">
                                            <i class=\"icon icon-x\"></i>
                                            <span>At least 8 characters</span>
                                        </li>
                                        <li class=\"requirement\" id=\"uppercase-req\">
                                            <i class=\"icon icon-x\"></i>
                                            <span>One uppercase letter</span>
                                        </li>
                                        <li class=\"requirement\" id=\"lowercase-req\">
                                            <i class=\"icon icon-x\"></i>
                                            <span>One lowercase letter</span>
                                        </li>
                                        <li class=\"requirement\" id=\"number-req\">
                                            <i class=\"icon icon-x\"></i>
                                            <span>One number</span>
                                        </li>
                                    </ul>
                                </div>
                                
                                <!-- Security Tips -->
                                <div class=\"security-tips\">
                                    <h5>Security Tips:</h5>
                                    <ul class=\"tips-list\">
                                        <li>
                                            <i class=\"icon icon-check-circle\"></i>
                                            <span>Use a unique password you haven't used elsewhere</span>
                                        </li>
                                        <li>
                                            <i class=\"icon icon-check-circle\"></i>
                                            <span>Consider using a mix of letters, numbers, and symbols</span>
                                        </li>
                                        <li>
                                            <i class=\"icon icon-check-circle\"></i>
                                            <span>Avoid using personal information in your password</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <!-- Form Actions -->
                        <div class=\"form-actions\">
                            <div class=\"action-buttons\">
                                <a href=\"";
        // line 130
        yield ($context["back"] ?? null);
        yield "\" class=\"tf-btn btn-outline animate-btn\">
                                    <i class=\"icon icon-arrow-left\"></i>
                                    ";
        // line 132
        yield ($context["button_back"] ?? null);
        yield "
                                </a>
                                <button type=\"submit\" class=\"tf-btn btn-fill animate-btn\" id=\"submit-btn\" disabled>
                                    <i class=\"icon icon-key\"></i>
                                    ";
        // line 136
        yield ($context["button_continue"] ?? null);
        yield "
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
                
                ";
        // line 143
        yield ($context["content_bottom"] ?? null);
        yield "
            </div>
            ";
        // line 145
        yield ($context["column_right"] ?? null);
        yield "
        </div>
    </div>
</section>
<!-- /Change Password -->

<style>
/* Password Change Page Styling */
.password-intro {
    margin-bottom: 30px;
}

.intro-card {
    background: linear-gradient(135deg, #241B68 0%, #000 100%);
    color: #fff;
    border-radius: 12px;
    padding: 25px;
    box-shadow: 0 4px 20px rgba(36,27,104,0.2);
    text-align: center;
}

.intro-header {
    display: flex;
    flex-direction: column;
    align-items: center;
    gap: 12px;
    margin-bottom: 15px;
}

.intro-header i {
    font-size: 48px;
    opacity: 0.9;
}

.intro-header h3 {
    margin: 0;
    font-size: 24px;
    font-weight: 600;
    color:#fff;
}

.intro-text {
    margin: 0;
    font-size: 16px;
    opacity: 0.9;
    line-height: 1.6;
}

.password-form-container {
    background: #fff;
    border-radius: 12px;
    padding: 30px;
    box-shadow: 0 2px 8px rgba(0,0,0,0.08);
    border: 1px solid #e9ecef;
}

.form-section {
    margin-bottom: 20px;
    border: 1px solid #e9ecef;
    border-radius: 8px;
    overflow: hidden;
}

.section-header {
    background: #f8f9fa;
    padding: 15px 20px;
    border-bottom: 1px solid #e9ecef;
    display: flex;
    align-items: center;
    gap: 10px;
}

.section-header i {
    font-size: 18px;
    color: #666;
}

.section-header h4 {
    margin: 0;
    font-size: 16px;
    font-weight: 600;
    color: #333;
}

.section-content {
    padding: 20px;
}

.form-label {
    font-weight: 500;
    color: #333;
    margin-bottom: 8px;
    display: block;
}

.form-label.required::after {
    content: ' *';
    color: #dc3545;
}

.input-group {
    position: relative;
    display: flex;
    align-items: center;
}

.input-icon {
    position: absolute;
    left: 15px;
    top: 50%;
    transform: translateY(-50%);
    color: #666;
    z-index: 2;
}

.input-group .form-control {
    padding-left: 45px;
    padding-right: 45px;
}

.password-toggle {
    position: absolute;
    right: 15px;
    top: 50%;
    transform: translateY(-50%);
    background: none;
    border: none;
    color: #666;
    cursor: pointer;
    z-index: 2;
    transition: color 0.2s ease;
}

.password-toggle:hover {
    color: #241B68;
}

.form-control {
    border: 1px solid #ddd;
    border-radius: 6px;
    padding: 12px 15px;
    font-size: 14px;
    transition: all 0.2s ease;
    width: 100%;
}

.form-control:focus {
    border-color: #241B68;
    box-shadow: 0 0 0 0.2rem rgba(36,27,104,0.1);
}

/* Password Strength */
.password-strength {
    margin-top: 10px;
}

.strength-meter {
    height: 4px;
    background: #e9ecef;
    border-radius: 2px;
    overflow: hidden;
    margin-bottom: 5px;
}

.strength-bar {
    height: 100%;
    width: 0%;
    transition: all 0.3s ease;
    border-radius: 2px;
}

.strength-text {
    font-size: 12px;
    color: #666;
}

/* Password Requirements */
.password-requirements {
    background: #f8f9fa;
    border-radius: 6px;
    padding: 15px;
    margin-top: 20px;
}

.password-requirements h5 {
    margin: 0 0 10px 0;
    font-size: 14px;
    font-weight: 600;
    color: #333;
}

.requirements-list {
    list-style: none;
    padding: 0;
    margin: 0;
}

.requirement {
    display: flex;
    align-items: center;
    gap: 8px;
    margin-bottom: 6px;
    font-size: 13px;
}

.requirement:last-child {
    margin-bottom: 0;
}

.requirement i {
    font-size: 14px;
    width: 16px;
}

.requirement.valid i {
    color: #241B68;
}

.requirement.invalid i {
    color: #dc3545;
}

/* Security Tips */
.security-tips {
    background: #e7f3ff;
    border: 1px solid #b3d7ff;
    border-radius: 6px;
    padding: 15px;
    margin-top: 15px;
}

.security-tips h5 {
    margin: 0 0 10px 0;
    font-size: 14px;
    font-weight: 600;
    color: #004085;
}

.tips-list {
    list-style: none;
    padding: 0;
    margin: 0;
}

.tips-list li {
    display: flex;
    align-items: flex-start;
    gap: 8px;
    margin-bottom: 8px;
    font-size: 13px;
    color: #004085;
}

.tips-list li:last-child {
    margin-bottom: 0;
}

.tips-list i {
    font-size: 14px;
    color: #0066cc;
    margin-top: 1px;
    flex-shrink: 0;
}

/* Form Actions */
.form-actions {
    background: #f8f9fa;
    border-radius: 8px;
    padding: 25px;
    margin-top: 20px;
    border: 1px solid #e9ecef;
}

.action-buttons {
    display: flex;
    justify-content: space-between;
    align-items: center;
    gap: 15px;
}

.action-buttons .tf-btn {
    padding: 12px 25px;
    font-size: 14px;
    display: flex;
    align-items: center;
    gap: 8px;
    min-width: 140px;
    justify-content: center;
}

.tf-btn:disabled {
    opacity: 0.6;
    cursor: not-allowed;
}

/* Responsive Design */
@media (max-width: 768px) {
    .password-form-container {
        padding: 20px;
        margin: 0 -15px;
        border-radius: 0;
    }
    
    .intro-card {
        padding: 20px;
        margin: 0 -15px;
        border-radius: 0;
    }
    
    .section-content {
        padding: 15px;
    }
    
    .action-buttons {
        flex-direction: column-reverse;
    }
    
    .action-buttons .tf-btn {
        width: 100%;
    }
}

@media (max-width: 576px) {
    .intro-header h3 {
        font-size: 20px;
    }
    
    .intro-header i {
        font-size: 40px;
    }
    
    .form-actions {
        padding: 20px;
    }
}
</style>

<script>
// Password strength checker
function checkPasswordStrength(password) {
    let strength = 0;
    let requirements = {
        length: password.length >= 8,
        uppercase: /[A-Z]/.test(password),
        lowercase: /[a-z]/.test(password),
        number: /[0-9]/.test(password)
    };
    
    // Update requirement indicators
    Object.keys(requirements).forEach(req => {
        const element = document.getElementById(req + '-req');
        if (element) {
            const icon = element.querySelector('i');
            if (requirements[req]) {
                element.classList.add('valid');
                element.classList.remove('invalid');
                icon.className = 'icon icon-check';
                strength++;
            } else {
                element.classList.add('invalid');
                element.classList.remove('valid');
                icon.className = 'icon icon-x';
            }
        }
    });
    
    // Update strength bar
    const strengthBar = document.getElementById('strength-bar');
    const strengthText = document.getElementById('strength-text');
    const submitBtn = document.getElementById('submit-btn');
    
    let color, text, width;
    if (strength === 0) {
        color = '#e9ecef';
        text = 'Password Strength';
        width = '0%';
    } else if (strength === 1) {
        color = '#dc3545';
        text = 'Weak';
        width = '25%';
    } else if (strength === 2) {
        color = '#fd7e14';
        text = 'Fair';
        width = '50%';
    } else if (strength === 3) {
        color = '#ffc107';
        text = 'Good';
        width = '75%';
    } else {
        color = '#28a745';
        text = 'Strong';
        width = '100%';
    }
    
    if (strengthBar) {
        strengthBar.style.backgroundColor = color;
        strengthBar.style.width = width;
    }
    if (strengthText) {
        strengthText.textContent = text;
        strengthText.style.color = color;
    }
    
    // Enable/disable submit button
    if (submitBtn) {
        submitBtn.disabled = strength < 4;
    }
}

// Password toggle visibility
function togglePassword(inputId, button) {
    const input = document.getElementById(inputId);
    const icon = button.querySelector('i');
    
    if (input.type === 'password') {
        input.type = 'text';
        icon.className = 'icon icon-eye-off';
    } else {
        input.type = 'password';
        icon.className = 'icon icon-eye';
    }
}

// Initialize password checking
document.addEventListener('DOMContentLoaded', function() {
    const passwordInput = document.getElementById('input-password');
    const confirmInput = document.getElementById('input-confirm');
    
    if (passwordInput) {
        passwordInput.addEventListener('input', function() {
            checkPasswordStrength(this.value);
            validatePasswordMatch();
        });
    }
    
    if (confirmInput) {
        confirmInput.addEventListener('input', validatePasswordMatch);
    }
    
    function validatePasswordMatch() {
        const password = passwordInput ? passwordInput.value : '';
        const confirm = confirmInput ? confirmInput.value : '';
        const confirmError = document.getElementById('error-confirm');
        
        if (confirm && password !== confirm) {
            if (confirmError) {
                confirmError.textContent = 'Passwords do not match';
                confirmError.style.display = 'block';
            }
            if (confirmInput) {
                confirmInput.classList.add('is-invalid');
            }
        } else {
            if (confirmError) {
                confirmError.textContent = '';
                confirmError.style.display = 'none';
            }
            if (confirmInput) {
                confirmInput.classList.remove('is-invalid');
            }
        }
    }
});
</script>

";
        // line 610
        yield ($context["footer"] ?? null);
        yield "
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "catalog/view/template/account/password.twig";
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
        return array (  715 => 610,  247 => 145,  242 => 143,  232 => 136,  225 => 132,  220 => 130,  160 => 75,  152 => 70,  132 => 55,  124 => 50,  117 => 46,  109 => 41,  91 => 26,  86 => 24,  73 => 14,  70 => 13,  59 => 10,  56 => 9,  52 => 8,  42 => 1,);
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
            <h1 class=\"title-page\">{{ heading_title }}</h1>
        </div>
    </div>
</section>
<!-- /Page Title -->

<!-- Change Password -->
<section class=\"flat-spacing-3\">
    <div class=\"container\">
        <div class=\"row justify-content-center\">
            {{ column_left }}
            <div id=\"content\" class=\"col-lg-6\">
                {{ content_top }}
                
                <!-- Password Change Introduction -->
                <div class=\"password-intro\">
                    <div class=\"intro-card\">
                        <div class=\"intro-header\">
                            <i class=\"icon icon-key\"></i>
                            <h3>Change Your Password</h3>
                        </div>
                        <p class=\"intro-text\">Update your account password to keep your account secure. Choose a strong password that you haven't used before.</p>
                    </div>
                </div>
                
                <!-- Password Form -->
                <div class=\"password-form-container\">
                    <form id=\"form-password\" action=\"{{ save }}\" method=\"post\" data-oc-toggle=\"ajax\">
                        <!-- Password Section -->
                        <div class=\"form-section\">
                            <div class=\"section-header\">
                                <i class=\"icon icon-lock\"></i>
                                <h4>{{ text_password }}</h4>
                            </div>
                            <div class=\"section-content\">
                                <div class=\"mb-3\">
                                    <label for=\"input-password\" class=\"form-label required\">{{ entry_password }}</label>
                                    <div class=\"input-group\">
                                        <span class=\"input-icon\">
                                            <i class=\"icon icon-lock\"></i>
                                        </span>
                                        <input type=\"password\" name=\"password\" value=\"{{ password }}\" placeholder=\"{{ entry_password }}\" id=\"input-password\" class=\"form-control\" autocomplete=\"new-password\"/>
                                        <button type=\"button\" class=\"password-toggle\" onclick=\"togglePassword('input-password', this)\">
                                            <i class=\"icon icon-eye\"></i>
                                        </button>
                                    </div>
                                    <div id=\"error-password\" class=\"invalid-feedback\"></div>
                                    <div class=\"password-strength\">
                                        <div class=\"strength-meter\">
                                            <div class=\"strength-bar\" id=\"strength-bar\"></div>
                                        </div>
                                        <span class=\"strength-text\" id=\"strength-text\">Password Strength</span>
                                    </div>
                                </div>
                                
                                <div class=\"mb-3\">
                                    <label for=\"input-confirm\" class=\"form-label required\">{{ entry_confirm }}</label>
                                    <div class=\"input-group\">
                                        <span class=\"input-icon\">
                                            <i class=\"icon icon-lock\"></i>
                                        </span>
                                        <input type=\"password\" name=\"confirm\" value=\"{{ confirm }}\" placeholder=\"{{ entry_confirm }}\" id=\"input-confirm\" class=\"form-control\"/>
                                        <button type=\"button\" class=\"password-toggle\" onclick=\"togglePassword('input-confirm', this)\">
                                            <i class=\"icon icon-eye\"></i>
                                        </button>
                                    </div>
                                    <div id=\"error-confirm\" class=\"invalid-feedback\"></div>
                                </div>
                                
                                <!-- Password Requirements -->
                                <div class=\"password-requirements\">
                                    <h5>Password Requirements:</h5>
                                    <ul class=\"requirements-list\">
                                        <li class=\"requirement\" id=\"length-req\">
                                            <i class=\"icon icon-x\"></i>
                                            <span>At least 8 characters</span>
                                        </li>
                                        <li class=\"requirement\" id=\"uppercase-req\">
                                            <i class=\"icon icon-x\"></i>
                                            <span>One uppercase letter</span>
                                        </li>
                                        <li class=\"requirement\" id=\"lowercase-req\">
                                            <i class=\"icon icon-x\"></i>
                                            <span>One lowercase letter</span>
                                        </li>
                                        <li class=\"requirement\" id=\"number-req\">
                                            <i class=\"icon icon-x\"></i>
                                            <span>One number</span>
                                        </li>
                                    </ul>
                                </div>
                                
                                <!-- Security Tips -->
                                <div class=\"security-tips\">
                                    <h5>Security Tips:</h5>
                                    <ul class=\"tips-list\">
                                        <li>
                                            <i class=\"icon icon-check-circle\"></i>
                                            <span>Use a unique password you haven't used elsewhere</span>
                                        </li>
                                        <li>
                                            <i class=\"icon icon-check-circle\"></i>
                                            <span>Consider using a mix of letters, numbers, and symbols</span>
                                        </li>
                                        <li>
                                            <i class=\"icon icon-check-circle\"></i>
                                            <span>Avoid using personal information in your password</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <!-- Form Actions -->
                        <div class=\"form-actions\">
                            <div class=\"action-buttons\">
                                <a href=\"{{ back }}\" class=\"tf-btn btn-outline animate-btn\">
                                    <i class=\"icon icon-arrow-left\"></i>
                                    {{ button_back }}
                                </a>
                                <button type=\"submit\" class=\"tf-btn btn-fill animate-btn\" id=\"submit-btn\" disabled>
                                    <i class=\"icon icon-key\"></i>
                                    {{ button_continue }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
                
                {{ content_bottom }}
            </div>
            {{ column_right }}
        </div>
    </div>
</section>
<!-- /Change Password -->

<style>
/* Password Change Page Styling */
.password-intro {
    margin-bottom: 30px;
}

.intro-card {
    background: linear-gradient(135deg, #241B68 0%, #000 100%);
    color: #fff;
    border-radius: 12px;
    padding: 25px;
    box-shadow: 0 4px 20px rgba(36,27,104,0.2);
    text-align: center;
}

.intro-header {
    display: flex;
    flex-direction: column;
    align-items: center;
    gap: 12px;
    margin-bottom: 15px;
}

.intro-header i {
    font-size: 48px;
    opacity: 0.9;
}

.intro-header h3 {
    margin: 0;
    font-size: 24px;
    font-weight: 600;
    color:#fff;
}

.intro-text {
    margin: 0;
    font-size: 16px;
    opacity: 0.9;
    line-height: 1.6;
}

.password-form-container {
    background: #fff;
    border-radius: 12px;
    padding: 30px;
    box-shadow: 0 2px 8px rgba(0,0,0,0.08);
    border: 1px solid #e9ecef;
}

.form-section {
    margin-bottom: 20px;
    border: 1px solid #e9ecef;
    border-radius: 8px;
    overflow: hidden;
}

.section-header {
    background: #f8f9fa;
    padding: 15px 20px;
    border-bottom: 1px solid #e9ecef;
    display: flex;
    align-items: center;
    gap: 10px;
}

.section-header i {
    font-size: 18px;
    color: #666;
}

.section-header h4 {
    margin: 0;
    font-size: 16px;
    font-weight: 600;
    color: #333;
}

.section-content {
    padding: 20px;
}

.form-label {
    font-weight: 500;
    color: #333;
    margin-bottom: 8px;
    display: block;
}

.form-label.required::after {
    content: ' *';
    color: #dc3545;
}

.input-group {
    position: relative;
    display: flex;
    align-items: center;
}

.input-icon {
    position: absolute;
    left: 15px;
    top: 50%;
    transform: translateY(-50%);
    color: #666;
    z-index: 2;
}

.input-group .form-control {
    padding-left: 45px;
    padding-right: 45px;
}

.password-toggle {
    position: absolute;
    right: 15px;
    top: 50%;
    transform: translateY(-50%);
    background: none;
    border: none;
    color: #666;
    cursor: pointer;
    z-index: 2;
    transition: color 0.2s ease;
}

.password-toggle:hover {
    color: #241B68;
}

.form-control {
    border: 1px solid #ddd;
    border-radius: 6px;
    padding: 12px 15px;
    font-size: 14px;
    transition: all 0.2s ease;
    width: 100%;
}

.form-control:focus {
    border-color: #241B68;
    box-shadow: 0 0 0 0.2rem rgba(36,27,104,0.1);
}

/* Password Strength */
.password-strength {
    margin-top: 10px;
}

.strength-meter {
    height: 4px;
    background: #e9ecef;
    border-radius: 2px;
    overflow: hidden;
    margin-bottom: 5px;
}

.strength-bar {
    height: 100%;
    width: 0%;
    transition: all 0.3s ease;
    border-radius: 2px;
}

.strength-text {
    font-size: 12px;
    color: #666;
}

/* Password Requirements */
.password-requirements {
    background: #f8f9fa;
    border-radius: 6px;
    padding: 15px;
    margin-top: 20px;
}

.password-requirements h5 {
    margin: 0 0 10px 0;
    font-size: 14px;
    font-weight: 600;
    color: #333;
}

.requirements-list {
    list-style: none;
    padding: 0;
    margin: 0;
}

.requirement {
    display: flex;
    align-items: center;
    gap: 8px;
    margin-bottom: 6px;
    font-size: 13px;
}

.requirement:last-child {
    margin-bottom: 0;
}

.requirement i {
    font-size: 14px;
    width: 16px;
}

.requirement.valid i {
    color: #241B68;
}

.requirement.invalid i {
    color: #dc3545;
}

/* Security Tips */
.security-tips {
    background: #e7f3ff;
    border: 1px solid #b3d7ff;
    border-radius: 6px;
    padding: 15px;
    margin-top: 15px;
}

.security-tips h5 {
    margin: 0 0 10px 0;
    font-size: 14px;
    font-weight: 600;
    color: #004085;
}

.tips-list {
    list-style: none;
    padding: 0;
    margin: 0;
}

.tips-list li {
    display: flex;
    align-items: flex-start;
    gap: 8px;
    margin-bottom: 8px;
    font-size: 13px;
    color: #004085;
}

.tips-list li:last-child {
    margin-bottom: 0;
}

.tips-list i {
    font-size: 14px;
    color: #0066cc;
    margin-top: 1px;
    flex-shrink: 0;
}

/* Form Actions */
.form-actions {
    background: #f8f9fa;
    border-radius: 8px;
    padding: 25px;
    margin-top: 20px;
    border: 1px solid #e9ecef;
}

.action-buttons {
    display: flex;
    justify-content: space-between;
    align-items: center;
    gap: 15px;
}

.action-buttons .tf-btn {
    padding: 12px 25px;
    font-size: 14px;
    display: flex;
    align-items: center;
    gap: 8px;
    min-width: 140px;
    justify-content: center;
}

.tf-btn:disabled {
    opacity: 0.6;
    cursor: not-allowed;
}

/* Responsive Design */
@media (max-width: 768px) {
    .password-form-container {
        padding: 20px;
        margin: 0 -15px;
        border-radius: 0;
    }
    
    .intro-card {
        padding: 20px;
        margin: 0 -15px;
        border-radius: 0;
    }
    
    .section-content {
        padding: 15px;
    }
    
    .action-buttons {
        flex-direction: column-reverse;
    }
    
    .action-buttons .tf-btn {
        width: 100%;
    }
}

@media (max-width: 576px) {
    .intro-header h3 {
        font-size: 20px;
    }
    
    .intro-header i {
        font-size: 40px;
    }
    
    .form-actions {
        padding: 20px;
    }
}
</style>

<script>
// Password strength checker
function checkPasswordStrength(password) {
    let strength = 0;
    let requirements = {
        length: password.length >= 8,
        uppercase: /[A-Z]/.test(password),
        lowercase: /[a-z]/.test(password),
        number: /[0-9]/.test(password)
    };
    
    // Update requirement indicators
    Object.keys(requirements).forEach(req => {
        const element = document.getElementById(req + '-req');
        if (element) {
            const icon = element.querySelector('i');
            if (requirements[req]) {
                element.classList.add('valid');
                element.classList.remove('invalid');
                icon.className = 'icon icon-check';
                strength++;
            } else {
                element.classList.add('invalid');
                element.classList.remove('valid');
                icon.className = 'icon icon-x';
            }
        }
    });
    
    // Update strength bar
    const strengthBar = document.getElementById('strength-bar');
    const strengthText = document.getElementById('strength-text');
    const submitBtn = document.getElementById('submit-btn');
    
    let color, text, width;
    if (strength === 0) {
        color = '#e9ecef';
        text = 'Password Strength';
        width = '0%';
    } else if (strength === 1) {
        color = '#dc3545';
        text = 'Weak';
        width = '25%';
    } else if (strength === 2) {
        color = '#fd7e14';
        text = 'Fair';
        width = '50%';
    } else if (strength === 3) {
        color = '#ffc107';
        text = 'Good';
        width = '75%';
    } else {
        color = '#28a745';
        text = 'Strong';
        width = '100%';
    }
    
    if (strengthBar) {
        strengthBar.style.backgroundColor = color;
        strengthBar.style.width = width;
    }
    if (strengthText) {
        strengthText.textContent = text;
        strengthText.style.color = color;
    }
    
    // Enable/disable submit button
    if (submitBtn) {
        submitBtn.disabled = strength < 4;
    }
}

// Password toggle visibility
function togglePassword(inputId, button) {
    const input = document.getElementById(inputId);
    const icon = button.querySelector('i');
    
    if (input.type === 'password') {
        input.type = 'text';
        icon.className = 'icon icon-eye-off';
    } else {
        input.type = 'password';
        icon.className = 'icon icon-eye';
    }
}

// Initialize password checking
document.addEventListener('DOMContentLoaded', function() {
    const passwordInput = document.getElementById('input-password');
    const confirmInput = document.getElementById('input-confirm');
    
    if (passwordInput) {
        passwordInput.addEventListener('input', function() {
            checkPasswordStrength(this.value);
            validatePasswordMatch();
        });
    }
    
    if (confirmInput) {
        confirmInput.addEventListener('input', validatePasswordMatch);
    }
    
    function validatePasswordMatch() {
        const password = passwordInput ? passwordInput.value : '';
        const confirm = confirmInput ? confirmInput.value : '';
        const confirmError = document.getElementById('error-confirm');
        
        if (confirm && password !== confirm) {
            if (confirmError) {
                confirmError.textContent = 'Passwords do not match';
                confirmError.style.display = 'block';
            }
            if (confirmInput) {
                confirmInput.classList.add('is-invalid');
            }
        } else {
            if (confirmError) {
                confirmError.textContent = '';
                confirmError.style.display = 'none';
            }
            if (confirmInput) {
                confirmInput.classList.remove('is-invalid');
            }
        }
    }
});
</script>

{{ footer }}
", "catalog/view/template/account/password.twig", "C:\\xampp\\htdocs\\newzyan\\catalog\\view\\template\\account\\password.twig");
    }
}

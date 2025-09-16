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

/* catalog/view/template/account/download.twig */
class __TwigTemplate_70fe3a07d782f513c048e67d011dcefedf9203c5eec22cd713d164606fc11a3c extends Template
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

<!-- Downloads -->
<section class=\"flat-spacing-3\">
    <div class=\"container\">
        <div class=\"row\">
            ";
        // line 24
        yield ($context["column_left"] ?? null);
        yield "
            <div id=\"content\" class=\"col\">
                ";
        // line 26
        yield ($context["content_top"] ?? null);
        yield "
                
                <!-- Downloads Introduction -->
                <div class=\"downloads-intro\">
                    <div class=\"intro-card\">
                        <div class=\"intro-content\">
                            <div class=\"intro-text\">
                                <h3>Your Downloads</h3>
                                <p>Access your digital purchases and downloadable content. All your files are available here for easy download.</p>
                            </div>
                            <div class=\"intro-icon\">
                                <i class=\"icon icon-download-cloud\"></i>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Downloads Content -->
                <div class=\"downloads-content\">
                    ";
        // line 45
        if (($context["downloads"] ?? null)) {
            // line 46
            yield "                        <div class=\"downloads-header\">
                            <h3>Available Downloads</h3>
                        </div>
                        <div class=\"downloads-grid\">
                            ";
            // line 50
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["downloads"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["download"]) {
                // line 51
                yield "                                <div class=\"download-card\">
                                    <div class=\"download-header\">
                                        <div class=\"download-icon\">
                                            <i class=\"icon icon-file\"></i>
                                        </div>
                                        <div class=\"download-info\">
                                            <h5 class=\"download-name\">";
                // line 57
                yield CoreExtension::getAttribute($this->env, $this->source, $context["download"], "name", [], "any", false, false, false, 57);
                yield "</h5>
                                            <div class=\"download-meta\">
                                                <span class=\"meta-item\">
                                                    <i class=\"icon icon-package\"></i>
                                                    Order #";
                // line 61
                yield CoreExtension::getAttribute($this->env, $this->source, $context["download"], "order_id", [], "any", false, false, false, 61);
                yield "
                                                </span>
                                                <span class=\"meta-item\">
                                                    <i class=\"icon icon-calendar\"></i>
                                                    ";
                // line 65
                yield CoreExtension::getAttribute($this->env, $this->source, $context["download"], "date_added", [], "any", false, false, false, 65);
                yield "
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"download-details\">
                                        <div class=\"file-size\">
                                            <i class=\"icon icon-hard-drive\"></i>
                                            <span>";
                // line 73
                yield CoreExtension::getAttribute($this->env, $this->source, $context["download"], "size", [], "any", false, false, false, 73);
                yield "</span>
                                        </div>
                                        <div class=\"download-action\">
                                            <a href=\"";
                // line 76
                yield CoreExtension::getAttribute($this->env, $this->source, $context["download"], "href", [], "any", false, false, false, 76);
                yield "\" class=\"tf-btn btn-fill animate-btn\" data-bs-toggle=\"tooltip\" title=\"";
                yield ($context["button_download"] ?? null);
                yield "\">
                                                <i class=\"icon icon-download\"></i>
                                                Download
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['download'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 84
            yield "                        </div>
                        
                        <!-- Pagination -->
                        <div class=\"downloads-pagination\">
                            <div class=\"pagination-info\">
                                ";
            // line 89
            yield ($context["results"] ?? null);
            yield "
                            </div>
                            <div class=\"pagination-controls\">
                                ";
            // line 92
            yield ($context["pagination"] ?? null);
            yield "
                            </div>
                        </div>
                    ";
        } else {
            // line 96
            yield "                        <!-- Empty State -->
                        <div class=\"empty-downloads-state\">
                            <div class=\"empty-icon\">
                                <i class=\"icon icon-download-cloud\"></i>
                            </div>
                            <h3>No Downloads Available</h3>
                            <p>";
            // line 102
            yield ($context["text_no_results"] ?? null);
            yield "</p>
                            <p class=\"empty-suggestion\">Digital purchases will appear here when available.</p>
                        </div>
                    ";
        }
        // line 106
        yield "                </div>
                
                <!-- Page Actions -->
                <div class=\"downloads-actions\">
                    <div class=\"action-buttons\">
                        <a href=\"";
        // line 111
        yield ($context["continue"] ?? null);
        yield "\" class=\"tf-btn btn-fill animate-btn\">
                            <i class=\"icon icon-arrow-left\"></i>
                            ";
        // line 113
        yield ($context["button_continue"] ?? null);
        yield "
                        </a>
                    </div>
                </div>
                
                ";
        // line 118
        yield ($context["content_bottom"] ?? null);
        yield "
            </div>
            ";
        // line 120
        yield ($context["column_right"] ?? null);
        yield "
        </div>
    </div>
</section>
<!-- /Downloads -->

<style>
/* Downloads Page Styling */
.downloads-intro {
    margin-bottom: 30px;
}

.intro-card {
    background: linear-gradient(135deg, #241B68 0%, #000 100%);
    color: #fff;
    border-radius: 12px;
    padding: 25px;
    box-shadow: 0 4px 20px rgba(36,27,104,0.2);
}

.intro-content {
    display: flex;
    justify-content: space-between;
    align-items: center;
    gap: 30px;
}

.intro-text {
    flex: 1;
}

.intro-text h3 {
    margin: 0 0 10px 0;
    font-size: 24px;
    font-weight: 600;
    color: #fff;
}

.intro-text p {
    margin: 0;
    font-size: 16px;
    opacity: 0.9;
    line-height: 1.5;
}

.intro-icon {
    flex-shrink: 0;
}

.intro-icon i {
    font-size: 48px;
    opacity: 0.8;
}

/* Downloads Content */
.downloads-content {
    background: #fff;
    border-radius: 12px;
    padding: 25px;
    box-shadow: 0 2px 8px rgba(0,0,0,0.08);
    margin-bottom: 30px;
}

.downloads-header {
    margin-bottom: 20px;
    padding-bottom: 15px;
    border-bottom: 2px solid #f1f1f1;
}

.downloads-header h3 {
    margin: 0;
    font-size: 20px;
    font-weight: 600;
    color: #333;
}

/* Downloads Grid */
.downloads-grid {
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(350px, 1fr));
    gap: 20px;
    margin-bottom: 20px;
}

.download-card {
    background: #fafafa;
    border: 1px solid #e9ecef;
    border-radius: 12px;
    padding: 20px;
    transition: all 0.3s ease;
    position: relative;
    overflow: hidden;
}

.download-card::before {
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

.download-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 8px 25px rgba(0,0,0,0.15);
    background: #fff;
    border-color: #241B68;
}

.download-card:hover::before {
    opacity: 1;
}

.download-header {
    display: flex;
    align-items: flex-start;
    gap: 15px;
    margin-bottom: 15px;
}

.download-icon {
    width: 50px;
    height: 50px;
    background: #241B68;
    color: #fff;
    border-radius: 8px;
    display: flex;
    align-items: center;
    justify-content: center;
    flex-shrink: 0;
}

.download-icon i {
    font-size: 20px;
}

.download-info {
    flex: 1;
}

.download-name {
    margin: 0 0 8px 0;
    font-size: 16px;
    font-weight: 600;
    color: #333;
    line-height: 1.3;
}

.download-meta {
    display: flex;
    flex-wrap: wrap;
    gap: 15px;
}

.meta-item {
    display: flex;
    align-items: center;
    gap: 5px;
    font-size: 13px;
    color: #666;
}

.meta-item i {
    font-size: 12px;
}

.download-details {
    display: flex;
    justify-content: space-between;
    align-items: center;
    gap: 15px;
    padding-top: 15px;
    border-top: 1px solid #f1f1f1;
}

.file-size {
    display: flex;
    align-items: center;
    gap: 8px;
    color: #666;
    font-size: 14px;
    font-weight: 500;
}

.file-size i {
    font-size: 16px;
    color: #241B68;
}

.download-action .tf-btn {
    padding: 8px 16px;
    font-size: 13px;
    display: flex;
    align-items: center;
    gap: 6px;
}

/* Empty State */
.empty-downloads-state {
    text-align: center;
    padding: 80px 20px;
    color: #666;
}

.empty-icon {
    margin-bottom: 25px;
}

.empty-icon i {
    font-size: 64px;
    color: #241B68;
    opacity: 0.6;
}

.empty-downloads-state h3 {
    margin: 0 0 15px 0;
    font-size: 28px;
    font-weight: 600;
    color: #333;
}

.empty-downloads-state p {
    margin: 0 0 10px 0;
    font-size: 16px;
    color: #666;
}

.empty-suggestion {
    margin-bottom: 30px !important;
    font-style: italic;
    color: #999;
}

/* Pagination */
.downloads-pagination {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 20px 0;
    border-top: 1px solid #e9ecef;
    margin-top: 20px;
}

.pagination-info {
    color: #666;
    font-size: 14px;
}

.pagination-controls {
    display: flex;
    align-items: center;
}

/* Downloads Actions */
.downloads-actions {
    background: #f8f9fa;
    border-radius: 8px;
    padding: 20px;
    border: 1px solid #e9ecef;
    text-align: center;
}

.action-buttons .tf-btn {
    padding: 12px 25px;
    font-size: 14px;
    display: flex;
    align-items: center;
    gap: 8px;
    min-width: 160px;
    justify-content: center;
}

/* Responsive Design */
@media (max-width: 992px) {
    .downloads-grid {
        grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
        gap: 15px;
    }
}

@media (max-width: 768px) {
    .intro-content {
        flex-direction: column;
        text-align: center;
        gap: 20px;
    }
    
    .intro-text h3 {
        font-size: 22px;
    }
    
    .intro-icon i {
        font-size: 40px;
    }
    
    .downloads-grid {
        grid-template-columns: 1fr;
    }
    
    .download-card {
        padding: 15px;
    }
    
    .download-details {
        flex-direction: column;
        align-items: flex-start;
        gap: 10px;
    }
    
    .download-action {
        align-self: stretch;
    }
    
    .download-action .tf-btn {
        width: 100%;
        justify-content: center;
    }
    
    .downloads-pagination {
        flex-direction: column;
        gap: 15px;
        text-align: center;
    }
    
    .downloads-content {
        padding: 20px;
        margin: 0 -15px 30px -15px;
        border-radius: 0;
    }
    
    .intro-card {
        padding: 20px;
        margin: 0 -15px;
        border-radius: 0;
    }
    
    .downloads-actions {
        padding: 15px;
    }
}

@media (max-width: 576px) {
    .intro-text h3 {
        font-size: 20px;
    }
    
    .intro-text p {
        font-size: 14px;
    }
    
    .downloads-actions {
        margin: 0 -15px;
        border-radius: 0;
    }
    
    .download-header {
        flex-direction: column;
        text-align: center;
        gap: 10px;
    }
    
    .download-meta {
        justify-content: center;
    }
}
</style>

";
        // line 491
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
        return "catalog/view/template/account/download.twig";
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
        return array (  614 => 491,  240 => 120,  235 => 118,  227 => 113,  222 => 111,  215 => 106,  208 => 102,  200 => 96,  193 => 92,  187 => 89,  180 => 84,  164 => 76,  158 => 73,  147 => 65,  140 => 61,  133 => 57,  125 => 51,  121 => 50,  115 => 46,  113 => 45,  91 => 26,  86 => 24,  73 => 14,  70 => 13,  59 => 10,  56 => 9,  52 => 8,  42 => 1,);
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

<!-- Downloads -->
<section class=\"flat-spacing-3\">
    <div class=\"container\">
        <div class=\"row\">
            {{ column_left }}
            <div id=\"content\" class=\"col\">
                {{ content_top }}
                
                <!-- Downloads Introduction -->
                <div class=\"downloads-intro\">
                    <div class=\"intro-card\">
                        <div class=\"intro-content\">
                            <div class=\"intro-text\">
                                <h3>Your Downloads</h3>
                                <p>Access your digital purchases and downloadable content. All your files are available here for easy download.</p>
                            </div>
                            <div class=\"intro-icon\">
                                <i class=\"icon icon-download-cloud\"></i>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Downloads Content -->
                <div class=\"downloads-content\">
                    {% if downloads %}
                        <div class=\"downloads-header\">
                            <h3>Available Downloads</h3>
                        </div>
                        <div class=\"downloads-grid\">
                            {% for download in downloads %}
                                <div class=\"download-card\">
                                    <div class=\"download-header\">
                                        <div class=\"download-icon\">
                                            <i class=\"icon icon-file\"></i>
                                        </div>
                                        <div class=\"download-info\">
                                            <h5 class=\"download-name\">{{ download.name }}</h5>
                                            <div class=\"download-meta\">
                                                <span class=\"meta-item\">
                                                    <i class=\"icon icon-package\"></i>
                                                    Order #{{ download.order_id }}
                                                </span>
                                                <span class=\"meta-item\">
                                                    <i class=\"icon icon-calendar\"></i>
                                                    {{ download.date_added }}
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"download-details\">
                                        <div class=\"file-size\">
                                            <i class=\"icon icon-hard-drive\"></i>
                                            <span>{{ download.size }}</span>
                                        </div>
                                        <div class=\"download-action\">
                                            <a href=\"{{ download.href }}\" class=\"tf-btn btn-fill animate-btn\" data-bs-toggle=\"tooltip\" title=\"{{ button_download }}\">
                                                <i class=\"icon icon-download\"></i>
                                                Download
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            {% endfor %}
                        </div>
                        
                        <!-- Pagination -->
                        <div class=\"downloads-pagination\">
                            <div class=\"pagination-info\">
                                {{ results }}
                            </div>
                            <div class=\"pagination-controls\">
                                {{ pagination }}
                            </div>
                        </div>
                    {% else %}
                        <!-- Empty State -->
                        <div class=\"empty-downloads-state\">
                            <div class=\"empty-icon\">
                                <i class=\"icon icon-download-cloud\"></i>
                            </div>
                            <h3>No Downloads Available</h3>
                            <p>{{ text_no_results }}</p>
                            <p class=\"empty-suggestion\">Digital purchases will appear here when available.</p>
                        </div>
                    {% endif %}
                </div>
                
                <!-- Page Actions -->
                <div class=\"downloads-actions\">
                    <div class=\"action-buttons\">
                        <a href=\"{{ continue }}\" class=\"tf-btn btn-fill animate-btn\">
                            <i class=\"icon icon-arrow-left\"></i>
                            {{ button_continue }}
                        </a>
                    </div>
                </div>
                
                {{ content_bottom }}
            </div>
            {{ column_right }}
        </div>
    </div>
</section>
<!-- /Downloads -->

<style>
/* Downloads Page Styling */
.downloads-intro {
    margin-bottom: 30px;
}

.intro-card {
    background: linear-gradient(135deg, #241B68 0%, #000 100%);
    color: #fff;
    border-radius: 12px;
    padding: 25px;
    box-shadow: 0 4px 20px rgba(36,27,104,0.2);
}

.intro-content {
    display: flex;
    justify-content: space-between;
    align-items: center;
    gap: 30px;
}

.intro-text {
    flex: 1;
}

.intro-text h3 {
    margin: 0 0 10px 0;
    font-size: 24px;
    font-weight: 600;
    color: #fff;
}

.intro-text p {
    margin: 0;
    font-size: 16px;
    opacity: 0.9;
    line-height: 1.5;
}

.intro-icon {
    flex-shrink: 0;
}

.intro-icon i {
    font-size: 48px;
    opacity: 0.8;
}

/* Downloads Content */
.downloads-content {
    background: #fff;
    border-radius: 12px;
    padding: 25px;
    box-shadow: 0 2px 8px rgba(0,0,0,0.08);
    margin-bottom: 30px;
}

.downloads-header {
    margin-bottom: 20px;
    padding-bottom: 15px;
    border-bottom: 2px solid #f1f1f1;
}

.downloads-header h3 {
    margin: 0;
    font-size: 20px;
    font-weight: 600;
    color: #333;
}

/* Downloads Grid */
.downloads-grid {
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(350px, 1fr));
    gap: 20px;
    margin-bottom: 20px;
}

.download-card {
    background: #fafafa;
    border: 1px solid #e9ecef;
    border-radius: 12px;
    padding: 20px;
    transition: all 0.3s ease;
    position: relative;
    overflow: hidden;
}

.download-card::before {
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

.download-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 8px 25px rgba(0,0,0,0.15);
    background: #fff;
    border-color: #241B68;
}

.download-card:hover::before {
    opacity: 1;
}

.download-header {
    display: flex;
    align-items: flex-start;
    gap: 15px;
    margin-bottom: 15px;
}

.download-icon {
    width: 50px;
    height: 50px;
    background: #241B68;
    color: #fff;
    border-radius: 8px;
    display: flex;
    align-items: center;
    justify-content: center;
    flex-shrink: 0;
}

.download-icon i {
    font-size: 20px;
}

.download-info {
    flex: 1;
}

.download-name {
    margin: 0 0 8px 0;
    font-size: 16px;
    font-weight: 600;
    color: #333;
    line-height: 1.3;
}

.download-meta {
    display: flex;
    flex-wrap: wrap;
    gap: 15px;
}

.meta-item {
    display: flex;
    align-items: center;
    gap: 5px;
    font-size: 13px;
    color: #666;
}

.meta-item i {
    font-size: 12px;
}

.download-details {
    display: flex;
    justify-content: space-between;
    align-items: center;
    gap: 15px;
    padding-top: 15px;
    border-top: 1px solid #f1f1f1;
}

.file-size {
    display: flex;
    align-items: center;
    gap: 8px;
    color: #666;
    font-size: 14px;
    font-weight: 500;
}

.file-size i {
    font-size: 16px;
    color: #241B68;
}

.download-action .tf-btn {
    padding: 8px 16px;
    font-size: 13px;
    display: flex;
    align-items: center;
    gap: 6px;
}

/* Empty State */
.empty-downloads-state {
    text-align: center;
    padding: 80px 20px;
    color: #666;
}

.empty-icon {
    margin-bottom: 25px;
}

.empty-icon i {
    font-size: 64px;
    color: #241B68;
    opacity: 0.6;
}

.empty-downloads-state h3 {
    margin: 0 0 15px 0;
    font-size: 28px;
    font-weight: 600;
    color: #333;
}

.empty-downloads-state p {
    margin: 0 0 10px 0;
    font-size: 16px;
    color: #666;
}

.empty-suggestion {
    margin-bottom: 30px !important;
    font-style: italic;
    color: #999;
}

/* Pagination */
.downloads-pagination {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 20px 0;
    border-top: 1px solid #e9ecef;
    margin-top: 20px;
}

.pagination-info {
    color: #666;
    font-size: 14px;
}

.pagination-controls {
    display: flex;
    align-items: center;
}

/* Downloads Actions */
.downloads-actions {
    background: #f8f9fa;
    border-radius: 8px;
    padding: 20px;
    border: 1px solid #e9ecef;
    text-align: center;
}

.action-buttons .tf-btn {
    padding: 12px 25px;
    font-size: 14px;
    display: flex;
    align-items: center;
    gap: 8px;
    min-width: 160px;
    justify-content: center;
}

/* Responsive Design */
@media (max-width: 992px) {
    .downloads-grid {
        grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
        gap: 15px;
    }
}

@media (max-width: 768px) {
    .intro-content {
        flex-direction: column;
        text-align: center;
        gap: 20px;
    }
    
    .intro-text h3 {
        font-size: 22px;
    }
    
    .intro-icon i {
        font-size: 40px;
    }
    
    .downloads-grid {
        grid-template-columns: 1fr;
    }
    
    .download-card {
        padding: 15px;
    }
    
    .download-details {
        flex-direction: column;
        align-items: flex-start;
        gap: 10px;
    }
    
    .download-action {
        align-self: stretch;
    }
    
    .download-action .tf-btn {
        width: 100%;
        justify-content: center;
    }
    
    .downloads-pagination {
        flex-direction: column;
        gap: 15px;
        text-align: center;
    }
    
    .downloads-content {
        padding: 20px;
        margin: 0 -15px 30px -15px;
        border-radius: 0;
    }
    
    .intro-card {
        padding: 20px;
        margin: 0 -15px;
        border-radius: 0;
    }
    
    .downloads-actions {
        padding: 15px;
    }
}

@media (max-width: 576px) {
    .intro-text h3 {
        font-size: 20px;
    }
    
    .intro-text p {
        font-size: 14px;
    }
    
    .downloads-actions {
        margin: 0 -15px;
        border-radius: 0;
    }
    
    .download-header {
        flex-direction: column;
        text-align: center;
        gap: 10px;
    }
    
    .download-meta {
        justify-content: center;
    }
}
</style>

{{ footer }}
", "catalog/view/template/account/download.twig", "C:\\xampp\\htdocs\\newzyan\\catalog\\view\\template\\account\\download.twig");
    }
}

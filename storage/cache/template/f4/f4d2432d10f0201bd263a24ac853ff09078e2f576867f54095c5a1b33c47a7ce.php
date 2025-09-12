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

/* catalog/view/template/product/category.twig */
class __TwigTemplate_ffc737c1ebb70342a8a4ba1307ac77c31b4fc4b2e2bbfddc721b698ecaf8d751 extends Template
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

<style>
  .tf-shop-control{
    margin-bottom: 0px;
  }
  
  .loading-spinner {
    display: inline-block;
    width: 20px;
    height: 20px;
    border: 3px solid #f3f3f3;
    border-top: 3px solid #3498db;
    border-radius: 50%;
    animation: spin 1s linear infinite;
  }
  
  @keyframes spin {
    0% { transform: rotate(0deg); }
    100% { transform: rotate(360deg); }
  }
  
  #applied-filters {
    background: #e8f4fd;
    padding: 10px;
    border-radius: 5px;
    margin: 10px 0;
    border-left: 4px solid #3498db;
  }
  
  #remove-all {
    background: #dc3545;
    color: white;
    border: none;
    padding: 5px 10px;
    border-radius: 3px;
    cursor: pointer;
  }
  
  #remove-all:hover {
    background: #c82333;
  }
</style>
  <!-- Page Title -->
  <section class=\"s-page-title\" style=\"padding-top:100px;\">
            <div class=\"container\">
                <div class=\"content\">
                    <h1 class=\"title-page\">";
        // line 48
        yield ($context["heading_title"] ?? null);
        yield "</h1>
                    <ul class=\"breadcrumbs-page\">
                    <li><a href=\"/\" class=\"h6 link\">Home</a></li>
                        <li class=\"d-flex\"><i class=\"icon icon-caret-right\"></i></li>
                        <li>
                            <h6 class=\"current-page fw-normal\">";
        // line 53
        yield ($context["heading_title"] ?? null);
        yield "</h6>
                        </li>
                  </ul>
                </div>
            </div>
        </section>
        <!-- /Page Title -->
        
        <!-- Section Product -->
        <div class=\" pt-2\">
            <div class=\"container\">
                <div class=\"tf-shop-control\">
                    <div class=\"tf-control-filter\">
                        <a href=\"#filterShop\" data-bs-toggle=\"offcanvas\" aria-controls=\"filterShop\" class=\"tf-btn-filter\">
                            <span class=\"icon icon-filter\"></span><span class=\"text\">Filter</span></a>
                    </div>
                  
                    <div class=\"tf-control-sorting\">
                        <p class=\"h6 d-none d-lg-block\">Sort by:</p>
                        <div class=\"tf-dropdown-sort\" data-bs-toggle=\"dropdown\">
                            <div class=\"btn-select\">
                                <span class=\"text-sort-value\">Best Selling</span>
                                <span class=\"icon icon-caret-down\"></span>
                            </div>
                            <div class=\"dropdown-menu\">
                                <div class=\"select-item active remove-all-filters\" data-sort-value=\"best-selling\">
                                    <span class=\"text-value-item\">Best Selling</span>
                                </div>
                                <div class=\"select-item\" data-sort-value=\"a-z\">
                                    <span class=\"text-value-item\">Alphabetically, A-Z</span>
                                </div>
                                <div class=\"select-item\" data-sort-value=\"z-a\">
                                    <span class=\"text-value-item\">Alphabetically, Z-A</span>
                                </div>
                                <div class=\"select-item\" data-sort-value=\"price-low-high\">
                                    <span class=\"text-value-item\">Price, low to high</span>
                                </div>
                                <div class=\"select-item\" data-sort-value=\"price-high-low\">
                                    <span class=\"text-value-item\">Price, high to low</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"wrapper-control-shop gridLayout-wrapper\">
                    <div class=\"meta-filter-shop\" style=\"margin-bottom:5px;\">
                        <div id=\"product-count-grid\" class=\"count-text\"></div>
                        <div id=\"product-count-list\" class=\"count-text\"></div>
                        <div id=\"applied-filters\"></div>
                        <button id=\"remove-all\" class=\"remove-all-filters\" style=\"display: none;\"><i class=\"icon icon-close\"></i> Clear all</button>
                        ";
        // line 103
        if (($context["results"] ?? null)) {
            // line 104
            yield "                            <div class=\"results-text\">";
            yield ($context["results"] ?? null);
            yield "</div>
                        ";
        }
        // line 106
        yield "                    </div>
                  
                    <div class=\"wrapper-shop tf-grid-layout tf-col-4\" id=\"gridLayout\">
                    ";
        // line 109
        if (($context["products"] ?? null)) {
            // line 110
            yield "
                    ";
            // line 111
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 112
                yield "                    ";
                yield $context["product"];
                yield "
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['product'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 113
            yield "                              
                    
                    ";
        }
        // line 116
        yield "                    ";
        if (( !($context["categories"] ?? null) &&  !($context["products"] ?? null))) {
            // line 117
            yield "                    <p>No products found</p>
                    <div class=\"text-end\"><a href=\"";
            // line 118
            yield ($context["continue"] ?? null);
            yield "\" class=\"btn btn-primary\">Continue</a></div>
                    ";
        }
        // line 120
        yield "                   
                    <br />
                    <!-- Pagination -->
                    ";
        // line 123
        if (($context["pagination"] ?? null)) {
            // line 124
            yield "                        <div class=\"wd-full wg-pagination m-0 justify-content-center\">
                            ";
            // line 125
            yield ($context["pagination"] ?? null);
            yield "
                        </div>
                    ";
        }
        // line 128
        yield "                    <br />
                    </div>
                </div>
            </div>
        </div>
        <!-- /Section Product -->  
    
        <!-- Filter Shop -->
    <div class=\"offcanvas offcanvas-start canvas-filter\" id=\"filterShop\">
        <div class=\"canvas-wrapper\">
            <div class=\"canvas-header\">
                <span class=\"title h3 fw-medium\">Filter</span>
                <span class=\"icon-close link icon-close-popup fs-24\" data-bs-dismiss=\"offcanvas\"></span>
            </div>
            <div class=\"canvas-body\">
               
                <!-- Dynamic Filters from Database -->
                ";
        // line 145
        if (($context["filters"] ?? null)) {
            // line 146
            yield "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["filters"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["filter_group"]) {
                // line 147
                yield "                        <div class=\"widget-facet\">
                            <div class=\"facet-title\" data-bs-target=\"#filter-";
                // line 148
                yield CoreExtension::getAttribute($this->env, $this->source, $context["filter_group"], "filter_group_id", [], "any", false, false, false, 148);
                yield "\" role=\"button\" data-bs-toggle=\"collapse\" aria-expanded=\"true\"
                                aria-controls=\"filter-";
                // line 149
                yield CoreExtension::getAttribute($this->env, $this->source, $context["filter_group"], "filter_group_id", [], "any", false, false, false, 149);
                yield "\">
                                <span class=\"h4 fw-semibold\">";
                // line 150
                yield Twig\Extension\CoreExtension::titleCase($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["filter_group"], "name", [], "any", false, false, false, 150));
                yield "</span>
                                <span class=\"icon icon-caret-down fs-20\"></span>
                            </div>
                            <div id=\"filter-";
                // line 153
                yield CoreExtension::getAttribute($this->env, $this->source, $context["filter_group"], "filter_group_id", [], "any", false, false, false, 153);
                yield "\" class=\"collapse show\">
                                <ul class=\"collapse-body filter-group-check current-scrollbar\">
                                    ";
                // line 155
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["filter_group"], "filter", [], "any", false, false, false, 155));
                foreach ($context['_seq'] as $context["_key"] => $context["filter"]) {
                    // line 156
                    yield "                                        <li class=\"list-item\">
                                            <input type=\"checkbox\" name=\"filter[]\" class=\"tf-check\" id=\"filter-";
                    // line 157
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["filter"], "filter_id", [], "any", false, false, false, 157);
                    yield "\" value=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["filter"], "filter_id", [], "any", false, false, false, 157);
                    yield "\" 
                                                   ";
                    // line 158
                    if ((($context["current_filter"] ?? null) && CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, $context["filter"], "filter_id", [], "any", false, false, false, 158), Twig\Extension\CoreExtension::split($this->env->getCharset(), ($context["current_filter"] ?? null), ",")))) {
                        yield "checked";
                    }
                    yield ">
                                            <label for=\"filter-";
                    // line 159
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["filter"], "filter_id", [], "any", false, false, false, 159);
                    yield "\" class=\"label\">
                                                <span>";
                    // line 160
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["filter"], "name", [], "any", false, false, false, 160);
                    yield "</span>
                                            </label>
                                        </li>
                                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['filter'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 164
                yield "                                </ul>
                            </div>
                        </div>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['filter_group'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 168
            yield "                ";
        } else {
            // line 169
            yield "                    <!-- Fallback: Show static filters if no database filters -->
                    <div class=\"widget-facet\">
                        <div class=\"facet-title\" data-bs-target=\"#availability\" role=\"button\" data-bs-toggle=\"collapse\" aria-expanded=\"true\"
                            aria-controls=\"availability\">
                            <span class=\"h4 fw-semibold\">Availability</span>
                            <span class=\"icon icon-caret-down fs-20\"></span>
                        </div>
                        <div id=\"availability\" class=\"collapse show\">
                            <ul class=\"collapse-body filter-group-check current-scrollbar\">
                                <li class=\"list-item\">
                                    <input type=\"radio\" name=\"availability\" class=\"tf-check\" id=\"inStock\">
                                    <label for=\"inStock\" class=\"label\">
                                        <span>In Stock</span><span class=\"count\">23</span>
                                    </label>
                                </li>
                                <li class=\"list-item disabled\">
                                    <input type=\"radio\" name=\"availability\" class=\"tf-check\" id=\"outStock\">
                                    <label for=\"outStock\" class=\"label\">
                                        <span>Out of Stock</span><span class=\"count\">34</span>
                                    </label>
                                </li>
                            </ul>
                        </div>
                    </div>
                  
                    <div class=\"widget-facet\">
                        <div class=\"facet-title\" data-bs-target=\"#brand\" role=\"button\" data-bs-toggle=\"collapse\" aria-expanded=\"true\"
                            aria-controls=\"brand\">
                            <span class=\"h4 fw-semibold\">Metal Type</span>
                            <span class=\"icon icon-caret-down fs-20\"></span>
                        </div>
                        <div id=\"brand\" class=\"collapse show\">
                            <ul class=\"collapse-body filter-group-check current-scrollbar\">
                                <li class=\"list-item\">
                                    <input type=\"checkbox\" name=\"brand\" class=\"tf-check\" id=\"automet\">
                                    <label for=\"automet\" class=\"label\">AUTOMET</label>
                                </li>
                                <li class=\"list-item\">
                                    <input type=\"checkbox\" name=\"brand\" class=\"tf-check\" id=\"trendy-queen\">
                                    <label for=\"trendy-queen\" class=\"label\">Trendy Queen</label>
                                </li>
                                <li class=\"list-item\">
                                    <input type=\"checkbox\" name=\"brand\" class=\"tf-check\" id=\"wiholl\">
                                    <label for=\"wiholl\" class=\"label\">WIHOLL</label>
                                </li>
                                <li class=\"list-item\">
                                    <input type=\"checkbox\" name=\"brand\" class=\"tf-check\" id=\"real-essentials\">
                                    <label for=\"real-essentials\" class=\"label\">Real Essentials</label>
                                </li>
                                <li class=\"list-item\">
                                    <input type=\"checkbox\" name=\"brand\" class=\"tf-check\" id=\"dokotoo\">
                                    <label for=\"dokotoo\" class=\"label\">Dokotoo</label>
                                </li>
                                <li class=\"list-item\">
                                    <input type=\"checkbox\" name=\"brand\" class=\"tf-check\" id=\"hanes\">
                                    <label for=\"hanes\" class=\"label\">Hanes</label>
                                </li>
                                <li class=\"list-item\">
                                    <input type=\"checkbox\" name=\"brand\" class=\"tf-check\" id=\"zeagoo\">
                                    <label for=\"zeagoo\" class=\"label\">Zeagoo</label>
                                </li>
                                <li class=\"list-item\">
                                    <input type=\"checkbox\" name=\"brand\" class=\"tf-check\" id=\"shewin\">
                                    <label for=\"shewin\" class=\"label\">SHEWIN</label>
                                </li>
                                <li class=\"list-item\">
                                    <input type=\"checkbox\" name=\"brand\" class=\"tf-check\" id=\"blooming-jelly\">
                                    <label for=\"blooming-jelly\" class=\"label\">Blooming Jelly</label>
                                </li>
                                <li class=\"list-item\">
                                    <input type=\"checkbox\" name=\"brand\" class=\"tf-check\" id=\"fisoew\">
                                    <label for=\"fisoew\" class=\"label\">Fisoew</label>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class=\"widget-facet\">
                        <div class=\"facet-title\" data-bs-target=\"#size\" role=\"button\" data-bs-toggle=\"collapse\" aria-expanded=\"true\" aria-controls=\"size\">
                            <span class=\"h4 fw-semibold\">Size</span>
                            <span class=\"icon icon-caret-down fs-20\"></span>
                        </div>
                        <div id=\"size\" class=\"collapse show\">
                            <div class=\"collapse-body filter-size-box flat-check-list\">
                                <div class=\"check-item size-item size-check\"><span class=\"size h6\">XS</span></div>
                                <div class=\"check-item size-item size-check\"><span class=\"size h6\">S</span></div>
                                <div class=\"check-item size-item size-check\"><span class=\"size h6\">L</span></div>
                                <div class=\"check-item size-item size-check\"><span class=\"size h6\">M</span></div>
                                <div class=\"check-item size-item size-check\"><span class=\"size h6\">XL</span></div>
                                <div class=\"check-item size-item size-check\"><span class=\"size h6\">2XL</span></div>
                                <div class=\"check-item size-item size-check over-size\"><span class=\"size h6\">Over size</span></div>
                            </div>
                        </div>
                    </div>
                    <div class=\"widget-facet\">
                        <div class=\"facet-title\" data-bs-target=\"#color\" role=\"button\" data-bs-toggle=\"collapse\" aria-expanded=\"true\"
                            aria-controls=\"size\">
                            <span class=\"h4 fw-semibold\">Color</span>
                            <span class=\"icon icon-caret-down fs-20\"></span>
                        </div>
                        <div id=\"color\" class=\"collapse show\">
                            <div class=\"collapse-body filter-color-box flat-check-list\">
                                <div class=\"check-item color-item color-check\">
                                    <span class=\"color bg-light-purple\"></span>
                                    <span class=\"color-text\">Purple</span>
                                </div>
                                <div class=\"check-item color-item color-check\">
                                    <span class=\"color bg-dark-charcoal\"></span>
                                    <span class=\"color-text\">Dark</span>
                                </div>
                                <div class=\"check-item color-item color-check line\">
                                    <span class=\"color bg-dark-jade\"></span>
                                    <span class=\"color-text\">Green</span>
                                </div>
                                <div class=\"check-item color-item color-check\">
                                    <span class=\"color bg-light-beige\"></span>
                                    <span class=\"color-text\">Beige</span>
                                </div>
                                <div class=\"check-item color-item color-check\">
                                    <span class=\"color bg-sage-green\"></span>
                                    <span class=\"color-text\">Sage Green</span>
                                </div>
                                <div class=\"check-item color-item color-check\">
                                    <span class=\"color bg-tomato\"></span>
                                    <span class=\"color-text\">Light Orange</span>
                                </div>
                                <div class=\"check-item color-item color-check\">
                                    <span class=\"color bg-honey-orange\"></span>
                                    <span class=\"color-text\">Orange</span>
                                </div>
                                <div class=\"check-item color-item color-check\">
                                    <span class=\"color bg-dark-olive\"></span>
                                    <span class=\"color-text\">Dark Olive</span>
                                </div>
                                <div class=\"check-item color-item color-check\">
                                    <span class=\"color bg-hot-pink\"></span>
                                    <span class=\"color-text\">Pink</span>
                                </div>
                                <div class=\"check-item color-item color-check\">
                                    <span class=\"color bg-muted-violet\"></span>
                                    <span class=\"color-text\">Dark Violet</span>
                                </div>
                                <div class=\"check-item color-item color-check\">
                                    <span class=\"color bg-dusty-olive\"></span>
                                    <span class=\"color-text\">Dusty Olive</span>
                                </div>
                            </div>
                        </div>
                    </div>
                ";
        }
        // line 319
        yield "            </div>
            <div class=\"canvas-bottom\">
                <button id=\"reset-filter\" class=\"tf-btn btn-reset\">Reset Filters</button>
            </div>
        </div>
    </div>
    <!-- /Filter Shop -->
   

";
        // line 328
        yield ($context["footer"] ?? null);
        yield "

<script>
\$(document).ready(function() {
    // Handle filter checkbox changes
    \$('input[name=\"filter[]\"]').on('change', function() {
        applyFilters();
    });
    
    // Handle reset filter button
    \$('#reset-filter').on('click', function() {
        \$('input[name=\"filter[]\"]').prop('checked', false);
        applyFilters();
    });
    
    // Handle clear all filters button
    \$('#remove-all').on('click', function() {
        \$('input[name=\"filter[]\"]').prop('checked', false);
        applyFilters();
    });
    
    function applyFilters() {
        var selectedFilters = [];
        \$('input[name=\"filter[]\"]:checked').each(function() {
            selectedFilters.push(\$(this).val());
        });
        
        // Show loading state
        \$('#gridLayout').html('<div class=\"text-center p-4\"><div class=\"loading-spinner\"></div> Loading products...</div>');
        
        // Build URL with current parameters
        var currentUrl = new URL(window.location);
        var filterParam = selectedFilters.join(',');
        
        if (filterParam) {
            currentUrl.searchParams.set('filter', filterParam);
        } else {
            currentUrl.searchParams.delete('filter');
        }
        
        // Reset to page 1 when filtering
        currentUrl.searchParams.set('page', '1');
        
        // Make AJAX request to get filtered products
        \$.ajax({
            url: currentUrl.toString(),
            type: 'GET',
            dataType: 'html',
            success: function(response) {
                // Extract the product grid from the response
                var \$response = \$(response);
                var \$productGrid = \$response.find('#gridLayout');
                
                if (\$productGrid.length) {
                    \$('#gridLayout').html(\$productGrid.html());
                } else {
                    \$('#gridLayout').html('<p class=\"text-center p-4\">No products found matching your filters.</p>');
                }
                
                // Update URL without page reload
                history.pushState(null, null, currentUrl.toString());
                
                // Update applied filters display
                updateAppliedFilters(selectedFilters);
            },
            error: function() {
                \$('#gridLayout').html('<p class=\"text-center p-4 text-danger\">Error loading products. Please try again.</p>');
            }
        });
    }
    
    function updateAppliedFilters(selectedFilters) {
        var \$appliedFilters = \$('#applied-filters');
        var \$removeAll = \$('#remove-all');
        
        if (selectedFilters.length > 0) {
            var filterNames = [];
            \$('input[name=\"filter[]\"]:checked').each(function() {
                filterNames.push(\$(this).next('label').find('span').text());
            });
            
            \$appliedFilters.html('<strong>Applied Filters:</strong> ' + filterNames.join(', '));
            \$removeAll.show();
        } else {
            \$appliedFilters.empty();
            \$removeAll.hide();
        }
    }
    
    // Initialize applied filters display
    updateAppliedFilters([]);
});
</script>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "catalog/view/template/product/category.twig";
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
        return array (  472 => 328,  461 => 319,  309 => 169,  306 => 168,  297 => 164,  287 => 160,  283 => 159,  277 => 158,  271 => 157,  268 => 156,  264 => 155,  259 => 153,  253 => 150,  249 => 149,  245 => 148,  242 => 147,  237 => 146,  235 => 145,  216 => 128,  210 => 125,  207 => 124,  205 => 123,  200 => 120,  195 => 118,  192 => 117,  189 => 116,  184 => 113,  175 => 112,  171 => 111,  168 => 110,  166 => 109,  161 => 106,  155 => 104,  153 => 103,  100 => 53,  92 => 48,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{{ header }}

<style>
  .tf-shop-control{
    margin-bottom: 0px;
  }
  
  .loading-spinner {
    display: inline-block;
    width: 20px;
    height: 20px;
    border: 3px solid #f3f3f3;
    border-top: 3px solid #3498db;
    border-radius: 50%;
    animation: spin 1s linear infinite;
  }
  
  @keyframes spin {
    0% { transform: rotate(0deg); }
    100% { transform: rotate(360deg); }
  }
  
  #applied-filters {
    background: #e8f4fd;
    padding: 10px;
    border-radius: 5px;
    margin: 10px 0;
    border-left: 4px solid #3498db;
  }
  
  #remove-all {
    background: #dc3545;
    color: white;
    border: none;
    padding: 5px 10px;
    border-radius: 3px;
    cursor: pointer;
  }
  
  #remove-all:hover {
    background: #c82333;
  }
</style>
  <!-- Page Title -->
  <section class=\"s-page-title\" style=\"padding-top:100px;\">
            <div class=\"container\">
                <div class=\"content\">
                    <h1 class=\"title-page\">{{ heading_title }}</h1>
                    <ul class=\"breadcrumbs-page\">
                    <li><a href=\"/\" class=\"h6 link\">Home</a></li>
                        <li class=\"d-flex\"><i class=\"icon icon-caret-right\"></i></li>
                        <li>
                            <h6 class=\"current-page fw-normal\">{{ heading_title }}</h6>
                        </li>
                  </ul>
                </div>
            </div>
        </section>
        <!-- /Page Title -->
        
        <!-- Section Product -->
        <div class=\" pt-2\">
            <div class=\"container\">
                <div class=\"tf-shop-control\">
                    <div class=\"tf-control-filter\">
                        <a href=\"#filterShop\" data-bs-toggle=\"offcanvas\" aria-controls=\"filterShop\" class=\"tf-btn-filter\">
                            <span class=\"icon icon-filter\"></span><span class=\"text\">Filter</span></a>
                    </div>
                  
                    <div class=\"tf-control-sorting\">
                        <p class=\"h6 d-none d-lg-block\">Sort by:</p>
                        <div class=\"tf-dropdown-sort\" data-bs-toggle=\"dropdown\">
                            <div class=\"btn-select\">
                                <span class=\"text-sort-value\">Best Selling</span>
                                <span class=\"icon icon-caret-down\"></span>
                            </div>
                            <div class=\"dropdown-menu\">
                                <div class=\"select-item active remove-all-filters\" data-sort-value=\"best-selling\">
                                    <span class=\"text-value-item\">Best Selling</span>
                                </div>
                                <div class=\"select-item\" data-sort-value=\"a-z\">
                                    <span class=\"text-value-item\">Alphabetically, A-Z</span>
                                </div>
                                <div class=\"select-item\" data-sort-value=\"z-a\">
                                    <span class=\"text-value-item\">Alphabetically, Z-A</span>
                                </div>
                                <div class=\"select-item\" data-sort-value=\"price-low-high\">
                                    <span class=\"text-value-item\">Price, low to high</span>
                                </div>
                                <div class=\"select-item\" data-sort-value=\"price-high-low\">
                                    <span class=\"text-value-item\">Price, high to low</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"wrapper-control-shop gridLayout-wrapper\">
                    <div class=\"meta-filter-shop\" style=\"margin-bottom:5px;\">
                        <div id=\"product-count-grid\" class=\"count-text\"></div>
                        <div id=\"product-count-list\" class=\"count-text\"></div>
                        <div id=\"applied-filters\"></div>
                        <button id=\"remove-all\" class=\"remove-all-filters\" style=\"display: none;\"><i class=\"icon icon-close\"></i> Clear all</button>
                        {% if results %}
                            <div class=\"results-text\">{{ results }}</div>
                        {% endif %}
                    </div>
                  
                    <div class=\"wrapper-shop tf-grid-layout tf-col-4\" id=\"gridLayout\">
                    {% if products %}

                    {% for product in products %}
                    {{ product }}
                    {% endfor %}                              
                    
                    {% endif %}
                    {% if not categories and not products %}
                    <p>No products found</p>
                    <div class=\"text-end\"><a href=\"{{ continue }}\" class=\"btn btn-primary\">Continue</a></div>
                    {% endif %}
                   
                    <br />
                    <!-- Pagination -->
                    {% if pagination %}
                        <div class=\"wd-full wg-pagination m-0 justify-content-center\">
                            {{ pagination }}
                        </div>
                    {% endif %}
                    <br />
                    </div>
                </div>
            </div>
        </div>
        <!-- /Section Product -->  
    
        <!-- Filter Shop -->
    <div class=\"offcanvas offcanvas-start canvas-filter\" id=\"filterShop\">
        <div class=\"canvas-wrapper\">
            <div class=\"canvas-header\">
                <span class=\"title h3 fw-medium\">Filter</span>
                <span class=\"icon-close link icon-close-popup fs-24\" data-bs-dismiss=\"offcanvas\"></span>
            </div>
            <div class=\"canvas-body\">
               
                <!-- Dynamic Filters from Database -->
                {% if filters %}
                    {% for filter_group in filters %}
                        <div class=\"widget-facet\">
                            <div class=\"facet-title\" data-bs-target=\"#filter-{{ filter_group.filter_group_id }}\" role=\"button\" data-bs-toggle=\"collapse\" aria-expanded=\"true\"
                                aria-controls=\"filter-{{ filter_group.filter_group_id }}\">
                                <span class=\"h4 fw-semibold\">{{ filter_group.name|title }}</span>
                                <span class=\"icon icon-caret-down fs-20\"></span>
                            </div>
                            <div id=\"filter-{{ filter_group.filter_group_id }}\" class=\"collapse show\">
                                <ul class=\"collapse-body filter-group-check current-scrollbar\">
                                    {% for filter in filter_group.filter %}
                                        <li class=\"list-item\">
                                            <input type=\"checkbox\" name=\"filter[]\" class=\"tf-check\" id=\"filter-{{ filter.filter_id }}\" value=\"{{ filter.filter_id }}\" 
                                                   {% if current_filter and filter.filter_id in (current_filter|split(',')) %}checked{% endif %}>
                                            <label for=\"filter-{{ filter.filter_id }}\" class=\"label\">
                                                <span>{{ filter.name }}</span>
                                            </label>
                                        </li>
                                    {% endfor %}
                                </ul>
                            </div>
                        </div>
                    {% endfor %}
                {% else %}
                    <!-- Fallback: Show static filters if no database filters -->
                    <div class=\"widget-facet\">
                        <div class=\"facet-title\" data-bs-target=\"#availability\" role=\"button\" data-bs-toggle=\"collapse\" aria-expanded=\"true\"
                            aria-controls=\"availability\">
                            <span class=\"h4 fw-semibold\">Availability</span>
                            <span class=\"icon icon-caret-down fs-20\"></span>
                        </div>
                        <div id=\"availability\" class=\"collapse show\">
                            <ul class=\"collapse-body filter-group-check current-scrollbar\">
                                <li class=\"list-item\">
                                    <input type=\"radio\" name=\"availability\" class=\"tf-check\" id=\"inStock\">
                                    <label for=\"inStock\" class=\"label\">
                                        <span>In Stock</span><span class=\"count\">23</span>
                                    </label>
                                </li>
                                <li class=\"list-item disabled\">
                                    <input type=\"radio\" name=\"availability\" class=\"tf-check\" id=\"outStock\">
                                    <label for=\"outStock\" class=\"label\">
                                        <span>Out of Stock</span><span class=\"count\">34</span>
                                    </label>
                                </li>
                            </ul>
                        </div>
                    </div>
                  
                    <div class=\"widget-facet\">
                        <div class=\"facet-title\" data-bs-target=\"#brand\" role=\"button\" data-bs-toggle=\"collapse\" aria-expanded=\"true\"
                            aria-controls=\"brand\">
                            <span class=\"h4 fw-semibold\">Metal Type</span>
                            <span class=\"icon icon-caret-down fs-20\"></span>
                        </div>
                        <div id=\"brand\" class=\"collapse show\">
                            <ul class=\"collapse-body filter-group-check current-scrollbar\">
                                <li class=\"list-item\">
                                    <input type=\"checkbox\" name=\"brand\" class=\"tf-check\" id=\"automet\">
                                    <label for=\"automet\" class=\"label\">AUTOMET</label>
                                </li>
                                <li class=\"list-item\">
                                    <input type=\"checkbox\" name=\"brand\" class=\"tf-check\" id=\"trendy-queen\">
                                    <label for=\"trendy-queen\" class=\"label\">Trendy Queen</label>
                                </li>
                                <li class=\"list-item\">
                                    <input type=\"checkbox\" name=\"brand\" class=\"tf-check\" id=\"wiholl\">
                                    <label for=\"wiholl\" class=\"label\">WIHOLL</label>
                                </li>
                                <li class=\"list-item\">
                                    <input type=\"checkbox\" name=\"brand\" class=\"tf-check\" id=\"real-essentials\">
                                    <label for=\"real-essentials\" class=\"label\">Real Essentials</label>
                                </li>
                                <li class=\"list-item\">
                                    <input type=\"checkbox\" name=\"brand\" class=\"tf-check\" id=\"dokotoo\">
                                    <label for=\"dokotoo\" class=\"label\">Dokotoo</label>
                                </li>
                                <li class=\"list-item\">
                                    <input type=\"checkbox\" name=\"brand\" class=\"tf-check\" id=\"hanes\">
                                    <label for=\"hanes\" class=\"label\">Hanes</label>
                                </li>
                                <li class=\"list-item\">
                                    <input type=\"checkbox\" name=\"brand\" class=\"tf-check\" id=\"zeagoo\">
                                    <label for=\"zeagoo\" class=\"label\">Zeagoo</label>
                                </li>
                                <li class=\"list-item\">
                                    <input type=\"checkbox\" name=\"brand\" class=\"tf-check\" id=\"shewin\">
                                    <label for=\"shewin\" class=\"label\">SHEWIN</label>
                                </li>
                                <li class=\"list-item\">
                                    <input type=\"checkbox\" name=\"brand\" class=\"tf-check\" id=\"blooming-jelly\">
                                    <label for=\"blooming-jelly\" class=\"label\">Blooming Jelly</label>
                                </li>
                                <li class=\"list-item\">
                                    <input type=\"checkbox\" name=\"brand\" class=\"tf-check\" id=\"fisoew\">
                                    <label for=\"fisoew\" class=\"label\">Fisoew</label>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class=\"widget-facet\">
                        <div class=\"facet-title\" data-bs-target=\"#size\" role=\"button\" data-bs-toggle=\"collapse\" aria-expanded=\"true\" aria-controls=\"size\">
                            <span class=\"h4 fw-semibold\">Size</span>
                            <span class=\"icon icon-caret-down fs-20\"></span>
                        </div>
                        <div id=\"size\" class=\"collapse show\">
                            <div class=\"collapse-body filter-size-box flat-check-list\">
                                <div class=\"check-item size-item size-check\"><span class=\"size h6\">XS</span></div>
                                <div class=\"check-item size-item size-check\"><span class=\"size h6\">S</span></div>
                                <div class=\"check-item size-item size-check\"><span class=\"size h6\">L</span></div>
                                <div class=\"check-item size-item size-check\"><span class=\"size h6\">M</span></div>
                                <div class=\"check-item size-item size-check\"><span class=\"size h6\">XL</span></div>
                                <div class=\"check-item size-item size-check\"><span class=\"size h6\">2XL</span></div>
                                <div class=\"check-item size-item size-check over-size\"><span class=\"size h6\">Over size</span></div>
                            </div>
                        </div>
                    </div>
                    <div class=\"widget-facet\">
                        <div class=\"facet-title\" data-bs-target=\"#color\" role=\"button\" data-bs-toggle=\"collapse\" aria-expanded=\"true\"
                            aria-controls=\"size\">
                            <span class=\"h4 fw-semibold\">Color</span>
                            <span class=\"icon icon-caret-down fs-20\"></span>
                        </div>
                        <div id=\"color\" class=\"collapse show\">
                            <div class=\"collapse-body filter-color-box flat-check-list\">
                                <div class=\"check-item color-item color-check\">
                                    <span class=\"color bg-light-purple\"></span>
                                    <span class=\"color-text\">Purple</span>
                                </div>
                                <div class=\"check-item color-item color-check\">
                                    <span class=\"color bg-dark-charcoal\"></span>
                                    <span class=\"color-text\">Dark</span>
                                </div>
                                <div class=\"check-item color-item color-check line\">
                                    <span class=\"color bg-dark-jade\"></span>
                                    <span class=\"color-text\">Green</span>
                                </div>
                                <div class=\"check-item color-item color-check\">
                                    <span class=\"color bg-light-beige\"></span>
                                    <span class=\"color-text\">Beige</span>
                                </div>
                                <div class=\"check-item color-item color-check\">
                                    <span class=\"color bg-sage-green\"></span>
                                    <span class=\"color-text\">Sage Green</span>
                                </div>
                                <div class=\"check-item color-item color-check\">
                                    <span class=\"color bg-tomato\"></span>
                                    <span class=\"color-text\">Light Orange</span>
                                </div>
                                <div class=\"check-item color-item color-check\">
                                    <span class=\"color bg-honey-orange\"></span>
                                    <span class=\"color-text\">Orange</span>
                                </div>
                                <div class=\"check-item color-item color-check\">
                                    <span class=\"color bg-dark-olive\"></span>
                                    <span class=\"color-text\">Dark Olive</span>
                                </div>
                                <div class=\"check-item color-item color-check\">
                                    <span class=\"color bg-hot-pink\"></span>
                                    <span class=\"color-text\">Pink</span>
                                </div>
                                <div class=\"check-item color-item color-check\">
                                    <span class=\"color bg-muted-violet\"></span>
                                    <span class=\"color-text\">Dark Violet</span>
                                </div>
                                <div class=\"check-item color-item color-check\">
                                    <span class=\"color bg-dusty-olive\"></span>
                                    <span class=\"color-text\">Dusty Olive</span>
                                </div>
                            </div>
                        </div>
                    </div>
                {% endif %}
            </div>
            <div class=\"canvas-bottom\">
                <button id=\"reset-filter\" class=\"tf-btn btn-reset\">Reset Filters</button>
            </div>
        </div>
    </div>
    <!-- /Filter Shop -->
   

{{ footer }}

<script>
\$(document).ready(function() {
    // Handle filter checkbox changes
    \$('input[name=\"filter[]\"]').on('change', function() {
        applyFilters();
    });
    
    // Handle reset filter button
    \$('#reset-filter').on('click', function() {
        \$('input[name=\"filter[]\"]').prop('checked', false);
        applyFilters();
    });
    
    // Handle clear all filters button
    \$('#remove-all').on('click', function() {
        \$('input[name=\"filter[]\"]').prop('checked', false);
        applyFilters();
    });
    
    function applyFilters() {
        var selectedFilters = [];
        \$('input[name=\"filter[]\"]:checked').each(function() {
            selectedFilters.push(\$(this).val());
        });
        
        // Show loading state
        \$('#gridLayout').html('<div class=\"text-center p-4\"><div class=\"loading-spinner\"></div> Loading products...</div>');
        
        // Build URL with current parameters
        var currentUrl = new URL(window.location);
        var filterParam = selectedFilters.join(',');
        
        if (filterParam) {
            currentUrl.searchParams.set('filter', filterParam);
        } else {
            currentUrl.searchParams.delete('filter');
        }
        
        // Reset to page 1 when filtering
        currentUrl.searchParams.set('page', '1');
        
        // Make AJAX request to get filtered products
        \$.ajax({
            url: currentUrl.toString(),
            type: 'GET',
            dataType: 'html',
            success: function(response) {
                // Extract the product grid from the response
                var \$response = \$(response);
                var \$productGrid = \$response.find('#gridLayout');
                
                if (\$productGrid.length) {
                    \$('#gridLayout').html(\$productGrid.html());
                } else {
                    \$('#gridLayout').html('<p class=\"text-center p-4\">No products found matching your filters.</p>');
                }
                
                // Update URL without page reload
                history.pushState(null, null, currentUrl.toString());
                
                // Update applied filters display
                updateAppliedFilters(selectedFilters);
            },
            error: function() {
                \$('#gridLayout').html('<p class=\"text-center p-4 text-danger\">Error loading products. Please try again.</p>');
            }
        });
    }
    
    function updateAppliedFilters(selectedFilters) {
        var \$appliedFilters = \$('#applied-filters');
        var \$removeAll = \$('#remove-all');
        
        if (selectedFilters.length > 0) {
            var filterNames = [];
            \$('input[name=\"filter[]\"]:checked').each(function() {
                filterNames.push(\$(this).next('label').find('span').text());
            });
            
            \$appliedFilters.html('<strong>Applied Filters:</strong> ' + filterNames.join(', '));
            \$removeAll.show();
        } else {
            \$appliedFilters.empty();
            \$removeAll.hide();
        }
    }
    
    // Initialize applied filters display
    updateAppliedFilters([]);
});
</script>
", "catalog/view/template/product/category.twig", "C:\\xampp\\htdocs\\newzyan\\catalog\\view\\template\\product\\category.twig");
    }
}

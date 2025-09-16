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

/* catalog/view/template/product/review.twig */
class __TwigTemplate_54c4cae978b33f3a429fd9aa358be73e1c28ec4eb4da390a962e1207410eba77 extends Template
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
        // line 8
        yield "
<div class=\"tab-reviews write-cancel-review-wrap\">
   ";
        // line 10
        if (($context["reviews"] ?? null)) {
            // line 11
            yield "      <div class=\"tab-reviews-heading\">
         <div class=\"top\">
            <div class=\"text-center\">
               <div class=\"number fw-6\">";
            // line 14
            yield ($context["rating"] ?? null);
            yield " <span>/5</span></div>
               <div class=\"list-star d-flex justify-content-center gap-4\">
                  ";
            // line 16
            yield $this->getTemplateForMacro("macro_star_rating", $context, 16, $this->getSourceContext())->macro_star_rating(...[($context["rating"] ?? null)]);
            yield "
               </div>
               <p class=\"quantity-reviews\">Based on ";
            // line 18
            yield ($context["total"] ?? null);
            yield " reviews</p>
            </div>
            ";
            // line 20
            if (($context["rating_stats"] ?? null)) {
                // line 21
                yield "            <div class=\"rating-score\">
               ";
                // line 22
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(range(5, 1));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 23
                    yield "                  ";
                    $context["count"] = ((CoreExtension::getAttribute($this->env, $this->source, ($context["rating_stats"] ?? null), $context["i"], [], "array", true, true, false, 23)) ? (Twig\Extension\CoreExtension::default((($_v0 = ($context["rating_stats"] ?? null)) && is_array($_v0) || $_v0 instanceof ArrayAccess ? ($_v0[$context["i"]] ?? null) : null), 0)) : (0));
                    // line 24
                    yield "                  ";
                    $context["percentage"] = (((($context["total"] ?? null) > 0)) ? (Twig\Extension\CoreExtension::round(((($context["count"] ?? null) / ($context["total"] ?? null)) * 100))) : (0));
                    // line 25
                    yield "                  <div class=\"item\">
                     <div class=\"number-1\">";
                    // line 26
                    yield $context["i"];
                    yield "</div>
                     <svg width=\"14\" height=\"14\" viewBox=\"0 0 14 14\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
                        <path d=\"M14 5.4091L8.913 5.07466L6.99721 0.261719L5.08143 5.07466L0 5.4091L3.89741 8.7184L2.61849 13.7384L6.99721 10.9707L11.376 13.7384L10.097 8.7184L14 5.4091Z\" fill=\"#EF9122\"></path>
                     </svg>
                     <div class=\"line-bg\">
                        <div style=\"width: ";
                    // line 31
                    yield ($context["percentage"] ?? null);
                    yield "%;\"></div>
                     </div>
                     <div class=\"number-2\">";
                    // line 33
                    yield ($context["count"] ?? null);
                    yield "</div>
                  </div>
               ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['i'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 36
                yield "            </div>
            ";
            }
            // line 38
            yield "         </div>
         <div class=\"btns-reviews\">
            <div class=\"tf-btn btn-white animate-btn animate-dark line btn-comment-review btn-cancel-review\" style=\"display: none;\">
               Cancel Review
               <svg width=\"18\" height=\"18\" viewBox=\"0 0 18 18\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
                  <path d=\"M15.9834 5.15866L12.8412 2.0171C12.7367 1.9126 12.6127 1.82971 12.4762 1.77316C12.3397 1.71661 12.1933 1.6875 12.0456 1.6875C11.8978 1.6875 11.7515 1.71661 11.615 1.77316C11.4785 1.82971 11.3545 1.9126 11.25 2.0171L2.57977 10.6873C2.47485 10.7914 2.39167 10.9153 2.33506 11.0518C2.27844 11.1884 2.24953 11.3348 2.25001 11.4826V14.6248C2.25001 14.9232 2.36853 15.2093 2.57951 15.4203C2.79049 15.6313 3.07664 15.7498 3.37501 15.7498H15.1875C15.3367 15.7498 15.4798 15.6906 15.5853 15.5851C15.6907 15.4796 15.75 15.3365 15.75 15.1873C15.75 15.0381 15.6907 14.8951 15.5853 14.7896C15.4798 14.6841 15.3367 14.6248 15.1875 14.6248H8.10844L15.9834 6.74983C16.0879 6.64536 16.1708 6.52133 16.2274 6.38482C16.2839 6.24831 16.313 6.102 16.313 5.95424C16.313 5.80649 16.2839 5.66017 16.2274 5.52367C16.1708 5.38716 16.0879 5.26313 15.9834 5.15866ZM6.51727 14.6248H3.37501V11.4826L9.56251 5.29506L12.7048 8.43733L6.51727 14.6248ZM13.5 7.6421L10.3584 4.49983L12.0459 2.81233L15.1875 5.9546L13.5 7.6421Z\" fill=\"black\" />
               </svg>
            </div>
            <div class=\"tf-btn btn-white animate-btn animate-dark line btn-comment-review btn-write-review\">
               Write a review
               <svg width=\"18\" height=\"18\" viewBox=\"0 0 18 18\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
                  <path d=\"M15.9834 5.15866L12.8412 2.0171C12.7367 1.9126 12.6127 1.82971 12.4762 1.77316C12.3397 1.71661 12.1933 1.6875 12.0456 1.6875C11.8978 1.6875 11.7515 1.71661 11.615 1.77316C11.4785 1.82971 11.3545 1.9126 11.25 2.0171L2.57977 10.6873C2.47485 10.7914 2.39167 10.9153 2.33506 11.0518C2.27844 11.1884 2.24953 11.3348 2.25001 11.4826V14.6248C2.25001 14.9232 2.36853 15.2093 2.57951 15.4203C2.79049 15.6313 3.07664 15.7498 3.37501 15.7498H15.1875C15.3367 15.7498 15.4798 15.6906 15.5853 15.5851C15.6907 15.4796 15.75 15.3365 15.75 15.1873C15.75 15.0381 15.6907 14.8951 15.5853 14.7896C15.4798 14.6841 15.3367 14.6248 15.1875 14.6248H8.10844L15.9834 6.74983C16.0879 6.64536 16.1708 6.52133 16.2274 6.38482C16.2839 6.24831 16.313 6.102 16.313 5.95424C16.313 5.80649 16.2839 5.66017 16.2274 5.52367C16.1708 5.38716 16.0879 5.26313 15.9834 5.15866ZM6.51727 14.6248H3.37501V11.4826L9.56251 5.29506L12.7048 8.43733L6.51727 14.6248ZM13.5 7.6421L10.3584 4.49983L12.0459 2.81233L15.1875 5.9546L13.5 7.6421Z\" fill=\"black\" />
               </svg>
    </div>
    </div>
      </div>

      <div class=\"reply-comment cancel-review-wrap\">
         <div class=\"reply-comment-filter d-flex mb_24 gap-20 align-items-center justify-content-between flex-wrap\">
            <div class=\"d-flex align-items-center flex-wrap gap-12\">
               <div class=\"h6 fw-5\">Filter by:</div>
               <div class=\"filter-start-wrap\">
                  <div class=\"filter-item h6 active\" data-rating=\"all\">
                     All
                  </div>
                  ";
            // line 63
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(range(5, 1));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 64
                yield "                     ";
                $context["count"] = ((CoreExtension::getAttribute($this->env, $this->source, ($context["rating_stats"] ?? null), $context["i"], [], "array", true, true, false, 64)) ? (Twig\Extension\CoreExtension::default((($_v1 = ($context["rating_stats"] ?? null)) && is_array($_v1) || $_v1 instanceof ArrayAccess ? ($_v1[$context["i"]] ?? null) : null), 0)) : (0));
                // line 65
                yield "                     <div class=\"filter-item h6\" data-rating=\"";
                yield $context["i"];
                yield "\">
                        ";
                // line 66
                yield $context["i"];
                yield " star (<span class=\"number\">";
                yield ($context["count"] ?? null);
                yield "</span>)
                     </div>
                  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['i'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 69
            yield "               </div>
            </div>
            <div class=\"tf-dropdown-sort\" data-bs-toggle=\"dropdown\">
               <div class=\"btn-select\">
                  <span class=\"text-sort-value\">Most Recent</span>
                  <span class=\"icon icon-caret-down\"></span>
               </div>
               <div class=\"dropdown-menu\">
                  <div class=\"select-item active\" data-sort=\"newest\">
                     <span class=\"text-value-item\">Most Recent</span>
                  </div>
                  <div class=\"select-item\" data-sort=\"oldest\">
                     <span class=\"text-value-item\">Oldest</span>
                  </div>
                  <div class=\"select-item\" data-sort=\"rating-high\">
                     <span class=\"text-value-item\">Highest Rating</span>
                  </div>
                  <div class=\"select-item\" data-sort=\"rating-low\">
                     <span class=\"text-value-item\">Lowest Rating</span>
                  </div>
               </div>
            </div>
         </div>

         <div class=\"reply-comment-wrap\" id=\"review-list\">
            ";
            // line 94
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["reviews"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["review"]) {
                // line 95
                yield "               <div class=\"reply-comment-item\" data-rating=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["review"], "rating", [], "any", false, false, false, 95);
                yield "\">
                  <div class=\"image\">
                     <img class=\"lazyload\" data-src=\"assets/images/profile.png\" src=\"assets/images/profile.png\" alt=\"";
                // line 97
                yield CoreExtension::getAttribute($this->env, $this->source, $context["review"], "author", [], "any", false, false, false, 97);
                yield "\">
                  </div>
                  <div>
                     <div class=\"user\">
                        <div class=\"flex-grow-1\">
                           <h4 class=\"name\">";
                // line 102
                yield CoreExtension::getAttribute($this->env, $this->source, $context["review"], "author", [], "any", false, false, false, 102);
                yield "</h4>
                           <div class=\"user-infor\">
                              ";
                // line 104
                if (CoreExtension::getAttribute($this->env, $this->source, $context["review"], "verified", [], "any", false, false, false, 104)) {
                    // line 105
                    yield "                                 <div class=\"verified-purchase\">
                                    <svg width=\"20\" height=\"20\" viewBox=\"0 0 20 20\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
                                       <path d=\"M17.6453 8.03281C17.3508 7.725 17.0461 7.40781 16.9312 7.12891C16.825 6.87344 16.8187 6.45 16.8125 6.03984C16.8008 5.27734 16.7883 4.41328 16.1875 3.8125C15.5867 3.21172 14.7227 3.19922 13.9602 3.1875C13.55 3.18125 13.1266 3.175 12.8711 3.06875C12.593 2.95391 12.275 2.64922 11.9672 2.35469C11.4281 1.83672 10.8156 1.25 10 1.25C9.18437 1.25 8.57266 1.83672 8.03281 2.35469C7.725 2.64922 7.40781 2.95391 7.12891 3.06875C6.875 3.175 6.45 3.18125 6.03984 3.1875C5.27734 3.19922 4.41328 3.21172 3.8125 3.8125C3.21172 4.41328 3.20312 5.27734 3.1875 6.03984C3.18125 6.45 3.175 6.87344 3.06875 7.12891C2.95391 7.40703 2.64922 7.725 2.35469 8.03281C1.83672 8.57188 1.25 9.18437 1.25 10C1.25 10.8156 1.83672 11.4273 2.35469 11.9672C2.64922 12.275 2.95391 12.5922 3.06875 12.8711C3.175 13.1266 3.18125 13.55 3.1875 13.9602C3.19922 14.7227 3.21172 15.5867 3.8125 16.1875C4.41328 16.7883 5.27734 16.8008 6.03984 16.8125C6.45 16.8187 6.87344 16.825 7.12891 16.9312C7.40703 17.0461 7.725 17.3508 8.03281 17.6453C8.57188 18.1633 9.18437 18.75 10 18.75C10.8156 18.75 11.4273 18.1633 11.9672 17.6453C12.275 17.3508 12.5922 17.0461 12.8711 16.9312C13.1266 16.825 13.55 16.8187 13.9602 16.8125C14.7227 16.8008 15.5867 16.7883 16.1875 16.1875C16.7883 15.5867 16.8008 14.7227 16.8125 13.9602C16.8187 13.55 16.825 13.1266 16.9312 12.8711C17.0461 12.593 17.3508 12.275 17.6453 11.9672C18.1633 11.4281 18.75 10.8156 18.75 10C18.75 9.18437 18.1633 8.57266 17.6453 8.03281ZM16.743 11.1023C16.3687 11.493 15.9812 11.8969 15.7758 12.393C15.5789 12.8695 15.5703 13.4141 15.5625 13.9414C15.5547 14.4883 15.5461 15.0609 15.3031 15.3031C15.0602 15.5453 14.4914 15.5547 13.9414 15.5625C13.4141 15.5703 12.8695 15.5789 12.393 15.7758C11.8969 15.9812 11.493 16.3687 11.1023 16.743C10.7117 17.1172 10.3125 17.5 10 17.5C9.6875 17.5 9.28516 17.1156 8.89766 16.743C8.51016 16.3703 8.10313 15.9812 7.60703 15.7758C7.13047 15.5789 6.58594 15.5703 6.05859 15.5625C5.51172 15.5547 4.93906 15.5461 4.69687 15.3031C4.45469 15.0602 4.44531 14.4914 4.4375 13.9414C4.42969 13.4141 4.42109 12.8695 4.22422 12.393C4.01875 11.8969 3.63125 11.493 3.25703 11.1023C2.88281 10.7117 2.5 10.3125 2.5 10C2.5 9.6875 2.88437 9.28516 3.25703 8.89766C3.62969 8.51016 4.01875 8.10313 4.22422 7.60703C4.42109 7.13047 4.42969 6.58594 4.4375 6.05859C4.44531 5.51172 4.45391 4.93906 4.69687 4.69687C4.93984 4.45469 5.50859 4.44531 6.05859 4.4375C6.58594 4.42969 7.13047 4.42109 7.60703 4.22422C8.10313 4.01875 8.50703 3.63125 8.89766 3.25703C9.28828 2.88281 9.6875 2.5 10 2.5C10.3125 2.5 10.7148 2.88437 11.1023 3.25703C11.4898 3.62969 11.8969 4.01875 12.393 4.22422C12.8695 4.42109 13.4141 4.42969 13.9414 4.4375C14.4883 4.44531 15.0609 4.45391 15.3031 4.69687C15.5453 4.93984 15.5547 5.50859 15.5625 6.05859C15.5703 6.58594 15.5789 7.13047 15.7758 7.60703C15.9812 8.10313 16.3687 8.50703 16.743 8.89766C17.1172 9.28828 17.5 9.6875 17.5 10C17.5 10.3125 17.1156 10.7148 16.743 11.1023ZM13.5672 7.68281C13.6253 7.74086 13.6714 7.80979 13.7029 7.88566C13.7343 7.96154 13.7505 8.04287 13.7505 8.125C13.7505 8.20713 13.7343 8.28846 13.7029 8.36434C13.6714 8.44021 13.6253 8.50914 13.5672 8.56719L9.19219 12.9422C9.13414 13.0003 9.06521 13.0464 8.98934 13.0779C8.91346 13.1093 8.83213 13.1255 8.75 13.1255C8.66787 13.1255 8.58654 13.1093 8.51066 13.0779C8.43479 13.0464 8.36586 13.0003 8.30781 12.9422L6.43281 11.0672C6.31554 10.9499 6.24965 10.7909 6.24965 10.625C6.24965 10.4591 6.31554 10.3001 6.43281 10.1828C6.55009 10.0655 6.70915 9.99965 6.875 9.99965C7.04085 9.99965 7.19991 10.0655 7.31719 10.1828L8.75 11.6164L12.6828 7.68281C12.7409 7.6247 12.8098 7.5786 12.8857 7.54715C12.9615 7.5157 13.0429 7.49951 13.125 7.49951C13.2071 7.49951 13.2885 7.5157 13.3643 7.54715C13.4402 7.5786 13.5091 7.6247 13.5672 7.68281Z\" fill=\"black\" />
                                    </svg>
                                    <div class=\"text\">Verified Purchase</div>
                                 </div>
                              ";
                }
                // line 112
                yield "                           </div>
                        </div>
                        <div class=\"list-star d-flex justify-content-center gap-4\">
                           ";
                // line 115
                yield $this->getTemplateForMacro("macro_star_rating", $context, 115, $this->getSourceContext())->macro_star_rating(...[CoreExtension::getAttribute($this->env, $this->source, $context["review"], "rating", [], "any", false, false, false, 115)]);
                yield "
                        </div>
                     </div>
                     <p class=\"h6 desc\">";
                // line 118
                yield CoreExtension::getAttribute($this->env, $this->source, $context["review"], "text", [], "any", false, false, false, 118);
                yield "</p>
                     <div class=\"text-small time text-main-2\">";
                // line 119
                yield CoreExtension::getAttribute($this->env, $this->source, $context["review"], "date_added", [], "any", false, false, false, 119);
                yield "</div>
                  </div>
               </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['review'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 123
            yield "    </div>
    </div>
  ";
        }
        // line 126
        yield "<style>
.list-rating-check > input:checked ~ label {

    mask: none !important;
    background: url(\"data:image/svg+xml,<svg width='25' height='25' viewBox='0 0 14 14' fill='none' xmlns='http://www.w3.org/2000/svg'><path d='M14 5.4091L8.913 5.07466L6.99721 0.261719L5.08143 5.07466L0 5.4091L3.89741 8.7184L2.61849 13.7384L6.99721 10.9707L11.376 13.7384L10.097 8.7184L14 5.4091Z' fill='%23EF9122'/></svg>\") no-repeat center !important;
}
.list-rating-check:not(:checked) > label:before {
    background: url(data:image/svg+xml,<svg width='25' height='25' viewBox='0 0 14 14' fill='none' xmlns='http://www.w3.org/2000/svg'><path d='M14 5.4091L8.913 5.07466L6.99721 0.261719L5.08143 5.07466L0 5.4091L3.89741 8.7184L2.61849 13.7384L6.99721 10.9707L11.376 13.7384L10.097 8.7184L14 5.4091Z' fill='%23E0E0E0'/></svg>) no-repeat center;
}
</style>
   <form class=\"form-write-review write-review-wrap\" id=\"form-review\" method=\"post\" data-oc-toggle=\"ajax\" data-oc-load=\"";
        // line 136
        yield ($context["review_add"] ?? null);
        yield "\" data-oc-target=\"#form-review\">
      <div class=\"heading h2 fw-4 text-black\">Write a review:</div>
      <div class=\"text h6 fw-4\">All of your information will be kept confidential. Required fields are marked with an asterisk (*)</div>
      
      <div id=\"review-alert\"></div>
      
      <!-- Hidden fields for form submission -->
      <input type=\"hidden\" name=\"product_id\" value=\"";
        // line 143
        yield ($context["product_id"] ?? null);
        yield "\">
      <input type=\"hidden\" name=\"review_token\" value=\"";
        // line 144
        yield ($context["review_token"] ?? null);
        yield "\">
      
      <div class=\"your-rating\">
         <div class=\"h4 fw-4 text-black\">Your rating: *</div>
         <div class=\"list-rating-check\">
            <input type=\"radio\" id=\"star5\" name=\"rating\" value=\"5\">
            <label for=\"star5\" title=\"5 stars\"></label>
            <input type=\"radio\" id=\"star4\" name=\"rating\" value=\"4\">
            <label for=\"star4\" title=\"4 stars\"></label>
            <input type=\"radio\" id=\"star3\" name=\"rating\" value=\"3\">
            <label for=\"star3\" title=\"3 stars\"></label>
            <input type=\"radio\" id=\"star2\" name=\"rating\" value=\"2\">
            <label for=\"star2\" title=\"2 stars\"></label>
            <input type=\"radio\" id=\"star1\" name=\"rating\" value=\"1\">
            <label for=\"star1\" title=\"1 star\"></label>
         </div>
      </div>
      
      <div class=\"form-content\">
         <fieldset class=\"box-field\">
            <input type=\"text\" placeholder=\"Review title\" name=\"name\" value=\"\" required>
         </fieldset>
         <fieldset class=\"box-field\">
            <textarea rows=\"4\" placeholder=\"Review *\" name=\"text\" required></textarea>
         </fieldset>
      </div>
      
      <div class=\"button-submit\">
         <button class=\"tf-btn btn-fill animate-btn h6 w-100\" type=\"submit\">";
        // line 172
        yield ((array_key_exists("button_continue", $context)) ? (Twig\Extension\CoreExtension::default(($context["button_continue"] ?? null), "Submit")) : ("Submit"));
        yield "</button>
      </div>
</form>
</div>

<script>
\$(document).ready(function() {
   // Star rating functionality
   \$('.list-rating-check input[type=\"radio\"]').on('change', function() {
      var rating = \$(this).val();
      \$('.list-rating-check label').removeClass('active');
      for (var i = 1; i <= rating; i++) {
         \$('#star' + i).next('label').addClass('active');
      }
   });

   // Filter by rating
   \$('.filter-item').on('click', function() {
      var rating = \$(this).data('rating');
      \$('.filter-item').removeClass('active');
      \$(this).addClass('active');
      
      if (rating === 'all') {
         \$('.reply-comment-item').show();
      } else {
         \$('.reply-comment-item').hide();
         \$('.reply-comment-item[data-rating=\"' + rating + '\"]').show();
      }
   });

   // Sort functionality
   \$('.select-item').on('click', function() {
      var sort = \$(this).data('sort');
      \$('.select-item').removeClass('active');
      \$(this).addClass('active');
      \$('.text-sort-value').text(\$(this).find('.text-value-item').text());
      
      var reviews = \$('.reply-comment-item').get();
      reviews.sort(function(a, b) {
         switch(sort) {
            case 'oldest':
               return new Date(\$(a).find('.time').text()) - new Date(\$(b).find('.time').text());
            case 'rating-high':
               return \$(b).data('rating') - \$(a).data('rating');
            case 'rating-low':
               return \$(a).data('rating') - \$(b).data('rating');
            default: // newest
               return new Date(\$(b).find('.time').text()) - new Date(\$(a).find('.time').text());
         }
      });
      
      \$('#review-list').html(reviews);
   });

   // Write review button
   \$('.btn-write-review').on('click', function() {
      \$('.cancel-review-wrap').hide();
      \$('.write-review-wrap').show();
   });

   // Cancel review button
   \$('.btn-cancel-review').on('click', function() {
      \$('.write-review-wrap').hide();
      \$('.cancel-review-wrap').show();
   });

   // Form submission
   \$('#form-review').on('submit', function(e) {
      e.preventDefault();
      
      // Validate form before submission
      var name = \$('input[name=\"name\"]').val().trim();
      var text = \$('textarea[name=\"text\"]').val().trim();
      var rating = \$('input[name=\"rating\"]:checked').val();
      
      \$('#review-alert').html('');
      
      if (!name) {
         \$('#review-alert').html('<div class=\"alert alert-danger\">Please enter your name.</div>');
         return;
      }
      
      if (!text) {
         \$('#review-alert').html('<div class=\"alert alert-danger\">Please enter your review.</div>');
         return;
      }
      
      if (!rating) {
         \$('#review-alert').html('<div class=\"alert alert-danger\">Please select a rating.</div>');
         return;
      }
      
      var formData = \$(this).serialize();
      console.log('Form data being sent:', formData);
      console.log('Review URL:', '";
        // line 266
        yield ($context["review_add"] ?? null);
        yield "');
      console.log('Product ID:', \$('input[name=\"product_id\"]').val());
      console.log('Review Token:', \$('input[name=\"review_token\"]').val());
      
      \$.ajax({
         url: '";
        // line 271
        yield ($context["review_add"] ?? null);
        yield "',
         type: 'post',
         data: formData,
         dataType: 'json',
         beforeSend: function() {
            \$('#form-review button[type=\"submit\"]').prop('disabled', true).text('Submitting...');
         },
         complete: function() {
            \$('#form-review button[type=\"submit\"]').prop('disabled', false).text('";
        // line 279
        yield ((array_key_exists("button_continue", $context)) ? (Twig\Extension\CoreExtension::default(($context["button_continue"] ?? null), "Submit Review")) : ("Submit Review"));
        yield "');
         },
         success: function(json) {
            console.log('Server response:', json);
            
            if (json['error']) {
               var errorHtml = '<div class=\"alert alert-danger\">';
               if (typeof json['error'] === 'string') {
                  errorHtml += json['error'];
               } else {
                  for (var key in json['error']) {
                     errorHtml += json['error'][key] + '<br>';
                  }
               }
               errorHtml += '<button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>';
               \$('#review-alert').html(errorHtml);
            }
            
            if (json['success']) {
               \$('#review-alert').html('<div class=\"alert alert-success\">' + json['success'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');
               
               \$('#form-review')[0].reset();
               \$('.list-rating-check label').removeClass('active');
               \$('.write-review-wrap').hide();
               \$('.cancel-review-wrap').show();
               
               // Reload reviews after 3 seconds
               setTimeout(function() {
                  location.reload();
               }, 3000);
            }
         },
         error: function(xhr, ajaxOptions, thrownError) {
            console.log('AJAX Error Details:', {
               error: thrownError,
               status: xhr.statusText,
               response: xhr.responseText,
               statusCode: xhr.status
            });
            \$('#review-alert').html('<div class=\"alert alert-danger\">An error occurred: ' + xhr.statusText + ' (Status: ' + xhr.status + '). Please check the console for details.</div>');
         }
      });
   });
});
</script>

<style>
.list-rating-check {
   display: flex;
   flex-direction: row-reverse;
   justify-content: flex-end;
   gap: 5px;
}

.list-rating-check input[type=\"radio\"] {
   display: none;
}

.list-rating-check label {
   cursor: pointer;
   width: 25px;
   height: 25px;
   display: block;
   background: url(\"data:image/svg+xml,<svg width='25' height='25' viewBox='0 0 14 14' fill='none' xmlns='http://www.w3.org/2000/svg'><path d='M14 5.4091L8.913 5.07466L6.99721 0.261719L5.08143 5.07466L0 5.4091L3.89741 8.7184L2.61849 13.7384L6.99721 10.9707L11.376 13.7384L10.097 8.7184L14 5.4091Z' fill='%23E0E0E0'/></svg>\") no-repeat center;
   background-size: contain;
}

.list-rating-check label.active,
.list-rating-check label:hover,
.list-rating-check label:hover ~ label {
   background: url(\"data:image/svg+xml,<svg width='25' height='25' viewBox='0 0 14 14' fill='none' xmlns='http://www.w3.org/2000/svg'><path d='M14 5.4091L8.913 5.07466L6.99721 0.261719L5.08143 5.07466L0 5.4091L3.89741 8.7184L2.61849 13.7384L6.99721 10.9707L11.376 13.7384L10.097 8.7184L14 5.4091Z' fill='%23EF9122'/></svg>\") no-repeat center;
   background-size: contain;
}

.filter-item {
   cursor: pointer;
   padding: 8px 12px;
   border-radius: 4px;
   transition: all 0.3s ease;
}

.filter-item:hover,
.filter-item.active {
   background-color: #f8f9fa;
   color: #EF9122;
}

.write-review-wrap {
   display: none;
}

.alert {
   padding: 12px 20px;
   margin: 15px 0;
   border: 1px solid transparent;
   border-radius: 4px;
}

.alert-success {
   color: #155724;
   background-color: #d4edda;
   border-color: #c3e6cb;
}

.alert-danger {
   color: #721c24;
   background-color: #f8d7da;
   border-color: #f5c6cb;
}
</style>";
        yield from [];
    }

    // line 1
    public function macro_star_rating($rating = null, ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "rating" => $rating,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 2
            yield "   ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(range(1, 5));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 3
                yield "      <svg width=\"14\" height=\"14\" viewBox=\"0 0 14 14\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
         <path d=\"M14 5.4091L8.913 5.07466L6.99721 0.261719L5.08143 5.07466L0 5.4091L3.89741 8.7184L2.61849 13.7384L6.99721 10.9707L11.376 13.7384L10.097 8.7184L14 5.4091Z\" fill=\"";
                // line 4
                if ((($context["rating"] ?? null) >= $context["i"])) {
                    yield "#EF9122";
                } else {
                    yield "#E0E0E0";
                }
                yield "\"></path>
      </svg>
   ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['i'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "catalog/view/template/product/review.twig";
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
        return array (  561 => 4,  558 => 3,  553 => 2,  541 => 1,  426 => 279,  415 => 271,  407 => 266,  310 => 172,  279 => 144,  275 => 143,  265 => 136,  253 => 126,  248 => 123,  238 => 119,  234 => 118,  228 => 115,  223 => 112,  214 => 105,  212 => 104,  207 => 102,  199 => 97,  193 => 95,  189 => 94,  162 => 69,  151 => 66,  146 => 65,  143 => 64,  139 => 63,  112 => 38,  108 => 36,  99 => 33,  94 => 31,  86 => 26,  83 => 25,  80 => 24,  77 => 23,  73 => 22,  70 => 21,  68 => 20,  63 => 18,  58 => 16,  53 => 14,  48 => 11,  46 => 10,  42 => 8,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% macro star_rating(rating) %}
   {% for i in 1..5 %}
      <svg width=\"14\" height=\"14\" viewBox=\"0 0 14 14\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
         <path d=\"M14 5.4091L8.913 5.07466L6.99721 0.261719L5.08143 5.07466L0 5.4091L3.89741 8.7184L2.61849 13.7384L6.99721 10.9707L11.376 13.7384L10.097 8.7184L14 5.4091Z\" fill=\"{% if rating >= i %}#EF9122{% else %}#E0E0E0{% endif %}\"></path>
      </svg>
   {% endfor %}
{% endmacro %}

<div class=\"tab-reviews write-cancel-review-wrap\">
   {% if reviews %}
      <div class=\"tab-reviews-heading\">
         <div class=\"top\">
            <div class=\"text-center\">
               <div class=\"number fw-6\">{{ rating }} <span>/5</span></div>
               <div class=\"list-star d-flex justify-content-center gap-4\">
                  {{ _self.star_rating(rating) }}
               </div>
               <p class=\"quantity-reviews\">Based on {{ total }} reviews</p>
            </div>
            {% if rating_stats %}
            <div class=\"rating-score\">
               {% for i in 5..1 %}
                  {% set count = rating_stats[i]|default(0) %}
                  {% set percentage = total > 0 ? (count / total * 100)|round : 0 %}
                  <div class=\"item\">
                     <div class=\"number-1\">{{ i }}</div>
                     <svg width=\"14\" height=\"14\" viewBox=\"0 0 14 14\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
                        <path d=\"M14 5.4091L8.913 5.07466L6.99721 0.261719L5.08143 5.07466L0 5.4091L3.89741 8.7184L2.61849 13.7384L6.99721 10.9707L11.376 13.7384L10.097 8.7184L14 5.4091Z\" fill=\"#EF9122\"></path>
                     </svg>
                     <div class=\"line-bg\">
                        <div style=\"width: {{ percentage }}%;\"></div>
                     </div>
                     <div class=\"number-2\">{{ count }}</div>
                  </div>
               {% endfor %}
            </div>
            {% endif %}
         </div>
         <div class=\"btns-reviews\">
            <div class=\"tf-btn btn-white animate-btn animate-dark line btn-comment-review btn-cancel-review\" style=\"display: none;\">
               Cancel Review
               <svg width=\"18\" height=\"18\" viewBox=\"0 0 18 18\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
                  <path d=\"M15.9834 5.15866L12.8412 2.0171C12.7367 1.9126 12.6127 1.82971 12.4762 1.77316C12.3397 1.71661 12.1933 1.6875 12.0456 1.6875C11.8978 1.6875 11.7515 1.71661 11.615 1.77316C11.4785 1.82971 11.3545 1.9126 11.25 2.0171L2.57977 10.6873C2.47485 10.7914 2.39167 10.9153 2.33506 11.0518C2.27844 11.1884 2.24953 11.3348 2.25001 11.4826V14.6248C2.25001 14.9232 2.36853 15.2093 2.57951 15.4203C2.79049 15.6313 3.07664 15.7498 3.37501 15.7498H15.1875C15.3367 15.7498 15.4798 15.6906 15.5853 15.5851C15.6907 15.4796 15.75 15.3365 15.75 15.1873C15.75 15.0381 15.6907 14.8951 15.5853 14.7896C15.4798 14.6841 15.3367 14.6248 15.1875 14.6248H8.10844L15.9834 6.74983C16.0879 6.64536 16.1708 6.52133 16.2274 6.38482C16.2839 6.24831 16.313 6.102 16.313 5.95424C16.313 5.80649 16.2839 5.66017 16.2274 5.52367C16.1708 5.38716 16.0879 5.26313 15.9834 5.15866ZM6.51727 14.6248H3.37501V11.4826L9.56251 5.29506L12.7048 8.43733L6.51727 14.6248ZM13.5 7.6421L10.3584 4.49983L12.0459 2.81233L15.1875 5.9546L13.5 7.6421Z\" fill=\"black\" />
               </svg>
            </div>
            <div class=\"tf-btn btn-white animate-btn animate-dark line btn-comment-review btn-write-review\">
               Write a review
               <svg width=\"18\" height=\"18\" viewBox=\"0 0 18 18\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
                  <path d=\"M15.9834 5.15866L12.8412 2.0171C12.7367 1.9126 12.6127 1.82971 12.4762 1.77316C12.3397 1.71661 12.1933 1.6875 12.0456 1.6875C11.8978 1.6875 11.7515 1.71661 11.615 1.77316C11.4785 1.82971 11.3545 1.9126 11.25 2.0171L2.57977 10.6873C2.47485 10.7914 2.39167 10.9153 2.33506 11.0518C2.27844 11.1884 2.24953 11.3348 2.25001 11.4826V14.6248C2.25001 14.9232 2.36853 15.2093 2.57951 15.4203C2.79049 15.6313 3.07664 15.7498 3.37501 15.7498H15.1875C15.3367 15.7498 15.4798 15.6906 15.5853 15.5851C15.6907 15.4796 15.75 15.3365 15.75 15.1873C15.75 15.0381 15.6907 14.8951 15.5853 14.7896C15.4798 14.6841 15.3367 14.6248 15.1875 14.6248H8.10844L15.9834 6.74983C16.0879 6.64536 16.1708 6.52133 16.2274 6.38482C16.2839 6.24831 16.313 6.102 16.313 5.95424C16.313 5.80649 16.2839 5.66017 16.2274 5.52367C16.1708 5.38716 16.0879 5.26313 15.9834 5.15866ZM6.51727 14.6248H3.37501V11.4826L9.56251 5.29506L12.7048 8.43733L6.51727 14.6248ZM13.5 7.6421L10.3584 4.49983L12.0459 2.81233L15.1875 5.9546L13.5 7.6421Z\" fill=\"black\" />
               </svg>
    </div>
    </div>
      </div>

      <div class=\"reply-comment cancel-review-wrap\">
         <div class=\"reply-comment-filter d-flex mb_24 gap-20 align-items-center justify-content-between flex-wrap\">
            <div class=\"d-flex align-items-center flex-wrap gap-12\">
               <div class=\"h6 fw-5\">Filter by:</div>
               <div class=\"filter-start-wrap\">
                  <div class=\"filter-item h6 active\" data-rating=\"all\">
                     All
                  </div>
                  {% for i in 5..1 %}
                     {% set count = rating_stats[i]|default(0) %}
                     <div class=\"filter-item h6\" data-rating=\"{{ i }}\">
                        {{ i }} star (<span class=\"number\">{{ count }}</span>)
                     </div>
                  {% endfor %}
               </div>
            </div>
            <div class=\"tf-dropdown-sort\" data-bs-toggle=\"dropdown\">
               <div class=\"btn-select\">
                  <span class=\"text-sort-value\">Most Recent</span>
                  <span class=\"icon icon-caret-down\"></span>
               </div>
               <div class=\"dropdown-menu\">
                  <div class=\"select-item active\" data-sort=\"newest\">
                     <span class=\"text-value-item\">Most Recent</span>
                  </div>
                  <div class=\"select-item\" data-sort=\"oldest\">
                     <span class=\"text-value-item\">Oldest</span>
                  </div>
                  <div class=\"select-item\" data-sort=\"rating-high\">
                     <span class=\"text-value-item\">Highest Rating</span>
                  </div>
                  <div class=\"select-item\" data-sort=\"rating-low\">
                     <span class=\"text-value-item\">Lowest Rating</span>
                  </div>
               </div>
            </div>
         </div>

         <div class=\"reply-comment-wrap\" id=\"review-list\">
            {% for review in reviews %}
               <div class=\"reply-comment-item\" data-rating=\"{{ review.rating }}\">
                  <div class=\"image\">
                     <img class=\"lazyload\" data-src=\"assets/images/profile.png\" src=\"assets/images/profile.png\" alt=\"{{ review.author }}\">
                  </div>
                  <div>
                     <div class=\"user\">
                        <div class=\"flex-grow-1\">
                           <h4 class=\"name\">{{ review.author }}</h4>
                           <div class=\"user-infor\">
                              {% if review.verified %}
                                 <div class=\"verified-purchase\">
                                    <svg width=\"20\" height=\"20\" viewBox=\"0 0 20 20\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
                                       <path d=\"M17.6453 8.03281C17.3508 7.725 17.0461 7.40781 16.9312 7.12891C16.825 6.87344 16.8187 6.45 16.8125 6.03984C16.8008 5.27734 16.7883 4.41328 16.1875 3.8125C15.5867 3.21172 14.7227 3.19922 13.9602 3.1875C13.55 3.18125 13.1266 3.175 12.8711 3.06875C12.593 2.95391 12.275 2.64922 11.9672 2.35469C11.4281 1.83672 10.8156 1.25 10 1.25C9.18437 1.25 8.57266 1.83672 8.03281 2.35469C7.725 2.64922 7.40781 2.95391 7.12891 3.06875C6.875 3.175 6.45 3.18125 6.03984 3.1875C5.27734 3.19922 4.41328 3.21172 3.8125 3.8125C3.21172 4.41328 3.20312 5.27734 3.1875 6.03984C3.18125 6.45 3.175 6.87344 3.06875 7.12891C2.95391 7.40703 2.64922 7.725 2.35469 8.03281C1.83672 8.57188 1.25 9.18437 1.25 10C1.25 10.8156 1.83672 11.4273 2.35469 11.9672C2.64922 12.275 2.95391 12.5922 3.06875 12.8711C3.175 13.1266 3.18125 13.55 3.1875 13.9602C3.19922 14.7227 3.21172 15.5867 3.8125 16.1875C4.41328 16.7883 5.27734 16.8008 6.03984 16.8125C6.45 16.8187 6.87344 16.825 7.12891 16.9312C7.40703 17.0461 7.725 17.3508 8.03281 17.6453C8.57188 18.1633 9.18437 18.75 10 18.75C10.8156 18.75 11.4273 18.1633 11.9672 17.6453C12.275 17.3508 12.5922 17.0461 12.8711 16.9312C13.1266 16.825 13.55 16.8187 13.9602 16.8125C14.7227 16.8008 15.5867 16.7883 16.1875 16.1875C16.7883 15.5867 16.8008 14.7227 16.8125 13.9602C16.8187 13.55 16.825 13.1266 16.9312 12.8711C17.0461 12.593 17.3508 12.275 17.6453 11.9672C18.1633 11.4281 18.75 10.8156 18.75 10C18.75 9.18437 18.1633 8.57266 17.6453 8.03281ZM16.743 11.1023C16.3687 11.493 15.9812 11.8969 15.7758 12.393C15.5789 12.8695 15.5703 13.4141 15.5625 13.9414C15.5547 14.4883 15.5461 15.0609 15.3031 15.3031C15.0602 15.5453 14.4914 15.5547 13.9414 15.5625C13.4141 15.5703 12.8695 15.5789 12.393 15.7758C11.8969 15.9812 11.493 16.3687 11.1023 16.743C10.7117 17.1172 10.3125 17.5 10 17.5C9.6875 17.5 9.28516 17.1156 8.89766 16.743C8.51016 16.3703 8.10313 15.9812 7.60703 15.7758C7.13047 15.5789 6.58594 15.5703 6.05859 15.5625C5.51172 15.5547 4.93906 15.5461 4.69687 15.3031C4.45469 15.0602 4.44531 14.4914 4.4375 13.9414C4.42969 13.4141 4.42109 12.8695 4.22422 12.393C4.01875 11.8969 3.63125 11.493 3.25703 11.1023C2.88281 10.7117 2.5 10.3125 2.5 10C2.5 9.6875 2.88437 9.28516 3.25703 8.89766C3.62969 8.51016 4.01875 8.10313 4.22422 7.60703C4.42109 7.13047 4.42969 6.58594 4.4375 6.05859C4.44531 5.51172 4.45391 4.93906 4.69687 4.69687C4.93984 4.45469 5.50859 4.44531 6.05859 4.4375C6.58594 4.42969 7.13047 4.42109 7.60703 4.22422C8.10313 4.01875 8.50703 3.63125 8.89766 3.25703C9.28828 2.88281 9.6875 2.5 10 2.5C10.3125 2.5 10.7148 2.88437 11.1023 3.25703C11.4898 3.62969 11.8969 4.01875 12.393 4.22422C12.8695 4.42109 13.4141 4.42969 13.9414 4.4375C14.4883 4.44531 15.0609 4.45391 15.3031 4.69687C15.5453 4.93984 15.5547 5.50859 15.5625 6.05859C15.5703 6.58594 15.5789 7.13047 15.7758 7.60703C15.9812 8.10313 16.3687 8.50703 16.743 8.89766C17.1172 9.28828 17.5 9.6875 17.5 10C17.5 10.3125 17.1156 10.7148 16.743 11.1023ZM13.5672 7.68281C13.6253 7.74086 13.6714 7.80979 13.7029 7.88566C13.7343 7.96154 13.7505 8.04287 13.7505 8.125C13.7505 8.20713 13.7343 8.28846 13.7029 8.36434C13.6714 8.44021 13.6253 8.50914 13.5672 8.56719L9.19219 12.9422C9.13414 13.0003 9.06521 13.0464 8.98934 13.0779C8.91346 13.1093 8.83213 13.1255 8.75 13.1255C8.66787 13.1255 8.58654 13.1093 8.51066 13.0779C8.43479 13.0464 8.36586 13.0003 8.30781 12.9422L6.43281 11.0672C6.31554 10.9499 6.24965 10.7909 6.24965 10.625C6.24965 10.4591 6.31554 10.3001 6.43281 10.1828C6.55009 10.0655 6.70915 9.99965 6.875 9.99965C7.04085 9.99965 7.19991 10.0655 7.31719 10.1828L8.75 11.6164L12.6828 7.68281C12.7409 7.6247 12.8098 7.5786 12.8857 7.54715C12.9615 7.5157 13.0429 7.49951 13.125 7.49951C13.2071 7.49951 13.2885 7.5157 13.3643 7.54715C13.4402 7.5786 13.5091 7.6247 13.5672 7.68281Z\" fill=\"black\" />
                                    </svg>
                                    <div class=\"text\">Verified Purchase</div>
                                 </div>
                              {% endif %}
                           </div>
                        </div>
                        <div class=\"list-star d-flex justify-content-center gap-4\">
                           {{ _self.star_rating(review.rating) }}
                        </div>
                     </div>
                     <p class=\"h6 desc\">{{ review.text }}</p>
                     <div class=\"text-small time text-main-2\">{{ review.date_added }}</div>
                  </div>
               </div>
            {% endfor %}
    </div>
    </div>
  {% endif %}
<style>
.list-rating-check > input:checked ~ label {

    mask: none !important;
    background: url(\"data:image/svg+xml,<svg width='25' height='25' viewBox='0 0 14 14' fill='none' xmlns='http://www.w3.org/2000/svg'><path d='M14 5.4091L8.913 5.07466L6.99721 0.261719L5.08143 5.07466L0 5.4091L3.89741 8.7184L2.61849 13.7384L6.99721 10.9707L11.376 13.7384L10.097 8.7184L14 5.4091Z' fill='%23EF9122'/></svg>\") no-repeat center !important;
}
.list-rating-check:not(:checked) > label:before {
    background: url(data:image/svg+xml,<svg width='25' height='25' viewBox='0 0 14 14' fill='none' xmlns='http://www.w3.org/2000/svg'><path d='M14 5.4091L8.913 5.07466L6.99721 0.261719L5.08143 5.07466L0 5.4091L3.89741 8.7184L2.61849 13.7384L6.99721 10.9707L11.376 13.7384L10.097 8.7184L14 5.4091Z' fill='%23E0E0E0'/></svg>) no-repeat center;
}
</style>
   <form class=\"form-write-review write-review-wrap\" id=\"form-review\" method=\"post\" data-oc-toggle=\"ajax\" data-oc-load=\"{{ review_add }}\" data-oc-target=\"#form-review\">
      <div class=\"heading h2 fw-4 text-black\">Write a review:</div>
      <div class=\"text h6 fw-4\">All of your information will be kept confidential. Required fields are marked with an asterisk (*)</div>
      
      <div id=\"review-alert\"></div>
      
      <!-- Hidden fields for form submission -->
      <input type=\"hidden\" name=\"product_id\" value=\"{{ product_id }}\">
      <input type=\"hidden\" name=\"review_token\" value=\"{{ review_token }}\">
      
      <div class=\"your-rating\">
         <div class=\"h4 fw-4 text-black\">Your rating: *</div>
         <div class=\"list-rating-check\">
            <input type=\"radio\" id=\"star5\" name=\"rating\" value=\"5\">
            <label for=\"star5\" title=\"5 stars\"></label>
            <input type=\"radio\" id=\"star4\" name=\"rating\" value=\"4\">
            <label for=\"star4\" title=\"4 stars\"></label>
            <input type=\"radio\" id=\"star3\" name=\"rating\" value=\"3\">
            <label for=\"star3\" title=\"3 stars\"></label>
            <input type=\"radio\" id=\"star2\" name=\"rating\" value=\"2\">
            <label for=\"star2\" title=\"2 stars\"></label>
            <input type=\"radio\" id=\"star1\" name=\"rating\" value=\"1\">
            <label for=\"star1\" title=\"1 star\"></label>
         </div>
      </div>
      
      <div class=\"form-content\">
         <fieldset class=\"box-field\">
            <input type=\"text\" placeholder=\"Review title\" name=\"name\" value=\"\" required>
         </fieldset>
         <fieldset class=\"box-field\">
            <textarea rows=\"4\" placeholder=\"Review *\" name=\"text\" required></textarea>
         </fieldset>
      </div>
      
      <div class=\"button-submit\">
         <button class=\"tf-btn btn-fill animate-btn h6 w-100\" type=\"submit\">{{ button_continue|default('Submit') }}</button>
      </div>
</form>
</div>

<script>
\$(document).ready(function() {
   // Star rating functionality
   \$('.list-rating-check input[type=\"radio\"]').on('change', function() {
      var rating = \$(this).val();
      \$('.list-rating-check label').removeClass('active');
      for (var i = 1; i <= rating; i++) {
         \$('#star' + i).next('label').addClass('active');
      }
   });

   // Filter by rating
   \$('.filter-item').on('click', function() {
      var rating = \$(this).data('rating');
      \$('.filter-item').removeClass('active');
      \$(this).addClass('active');
      
      if (rating === 'all') {
         \$('.reply-comment-item').show();
      } else {
         \$('.reply-comment-item').hide();
         \$('.reply-comment-item[data-rating=\"' + rating + '\"]').show();
      }
   });

   // Sort functionality
   \$('.select-item').on('click', function() {
      var sort = \$(this).data('sort');
      \$('.select-item').removeClass('active');
      \$(this).addClass('active');
      \$('.text-sort-value').text(\$(this).find('.text-value-item').text());
      
      var reviews = \$('.reply-comment-item').get();
      reviews.sort(function(a, b) {
         switch(sort) {
            case 'oldest':
               return new Date(\$(a).find('.time').text()) - new Date(\$(b).find('.time').text());
            case 'rating-high':
               return \$(b).data('rating') - \$(a).data('rating');
            case 'rating-low':
               return \$(a).data('rating') - \$(b).data('rating');
            default: // newest
               return new Date(\$(b).find('.time').text()) - new Date(\$(a).find('.time').text());
         }
      });
      
      \$('#review-list').html(reviews);
   });

   // Write review button
   \$('.btn-write-review').on('click', function() {
      \$('.cancel-review-wrap').hide();
      \$('.write-review-wrap').show();
   });

   // Cancel review button
   \$('.btn-cancel-review').on('click', function() {
      \$('.write-review-wrap').hide();
      \$('.cancel-review-wrap').show();
   });

   // Form submission
   \$('#form-review').on('submit', function(e) {
      e.preventDefault();
      
      // Validate form before submission
      var name = \$('input[name=\"name\"]').val().trim();
      var text = \$('textarea[name=\"text\"]').val().trim();
      var rating = \$('input[name=\"rating\"]:checked').val();
      
      \$('#review-alert').html('');
      
      if (!name) {
         \$('#review-alert').html('<div class=\"alert alert-danger\">Please enter your name.</div>');
         return;
      }
      
      if (!text) {
         \$('#review-alert').html('<div class=\"alert alert-danger\">Please enter your review.</div>');
         return;
      }
      
      if (!rating) {
         \$('#review-alert').html('<div class=\"alert alert-danger\">Please select a rating.</div>');
         return;
      }
      
      var formData = \$(this).serialize();
      console.log('Form data being sent:', formData);
      console.log('Review URL:', '{{ review_add }}');
      console.log('Product ID:', \$('input[name=\"product_id\"]').val());
      console.log('Review Token:', \$('input[name=\"review_token\"]').val());
      
      \$.ajax({
         url: '{{ review_add }}',
         type: 'post',
         data: formData,
         dataType: 'json',
         beforeSend: function() {
            \$('#form-review button[type=\"submit\"]').prop('disabled', true).text('Submitting...');
         },
         complete: function() {
            \$('#form-review button[type=\"submit\"]').prop('disabled', false).text('{{ button_continue|default('Submit Review') }}');
         },
         success: function(json) {
            console.log('Server response:', json);
            
            if (json['error']) {
               var errorHtml = '<div class=\"alert alert-danger\">';
               if (typeof json['error'] === 'string') {
                  errorHtml += json['error'];
               } else {
                  for (var key in json['error']) {
                     errorHtml += json['error'][key] + '<br>';
                  }
               }
               errorHtml += '<button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>';
               \$('#review-alert').html(errorHtml);
            }
            
            if (json['success']) {
               \$('#review-alert').html('<div class=\"alert alert-success\">' + json['success'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');
               
               \$('#form-review')[0].reset();
               \$('.list-rating-check label').removeClass('active');
               \$('.write-review-wrap').hide();
               \$('.cancel-review-wrap').show();
               
               // Reload reviews after 3 seconds
               setTimeout(function() {
                  location.reload();
               }, 3000);
            }
         },
         error: function(xhr, ajaxOptions, thrownError) {
            console.log('AJAX Error Details:', {
               error: thrownError,
               status: xhr.statusText,
               response: xhr.responseText,
               statusCode: xhr.status
            });
            \$('#review-alert').html('<div class=\"alert alert-danger\">An error occurred: ' + xhr.statusText + ' (Status: ' + xhr.status + '). Please check the console for details.</div>');
         }
      });
   });
});
</script>

<style>
.list-rating-check {
   display: flex;
   flex-direction: row-reverse;
   justify-content: flex-end;
   gap: 5px;
}

.list-rating-check input[type=\"radio\"] {
   display: none;
}

.list-rating-check label {
   cursor: pointer;
   width: 25px;
   height: 25px;
   display: block;
   background: url(\"data:image/svg+xml,<svg width='25' height='25' viewBox='0 0 14 14' fill='none' xmlns='http://www.w3.org/2000/svg'><path d='M14 5.4091L8.913 5.07466L6.99721 0.261719L5.08143 5.07466L0 5.4091L3.89741 8.7184L2.61849 13.7384L6.99721 10.9707L11.376 13.7384L10.097 8.7184L14 5.4091Z' fill='%23E0E0E0'/></svg>\") no-repeat center;
   background-size: contain;
}

.list-rating-check label.active,
.list-rating-check label:hover,
.list-rating-check label:hover ~ label {
   background: url(\"data:image/svg+xml,<svg width='25' height='25' viewBox='0 0 14 14' fill='none' xmlns='http://www.w3.org/2000/svg'><path d='M14 5.4091L8.913 5.07466L6.99721 0.261719L5.08143 5.07466L0 5.4091L3.89741 8.7184L2.61849 13.7384L6.99721 10.9707L11.376 13.7384L10.097 8.7184L14 5.4091Z' fill='%23EF9122'/></svg>\") no-repeat center;
   background-size: contain;
}

.filter-item {
   cursor: pointer;
   padding: 8px 12px;
   border-radius: 4px;
   transition: all 0.3s ease;
}

.filter-item:hover,
.filter-item.active {
   background-color: #f8f9fa;
   color: #EF9122;
}

.write-review-wrap {
   display: none;
}

.alert {
   padding: 12px 20px;
   margin: 15px 0;
   border: 1px solid transparent;
   border-radius: 4px;
}

.alert-success {
   color: #155724;
   background-color: #d4edda;
   border-color: #c3e6cb;
}

.alert-danger {
   color: #721c24;
   background-color: #f8d7da;
   border-color: #f5c6cb;
}
</style>", "catalog/view/template/product/review.twig", "C:\\xampp\\htdocs\\newzyan\\catalog\\view\\template\\product\\review.twig");
    }
}

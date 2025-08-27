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

/* catalog/view/template/information/contact.twig */
class __TwigTemplate_c9a93d49c09da449a8a1caa7b45d8db9f3898d3b9cd36075e5e397ad19d5464d extends Template
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
  <section class=\"s-page-title\">
            <div class=\"container\">
                <div class=\"content\">
                    <h1 class=\"title-page\">Contact Us</h1>
                </div>
            </div>
        </section>
        <!-- /Page Title -->
        <!-- Contact Us -->
        <section class=\"s-contact-us flat-spacing\">
          
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-xxl-5 offset-xxl-1 col-lg-6\">
                        <div class=\"left-col mb-lg-0\">
                            <ul class=\"store-info-list\">
                                <li>
                                    <p class=\"h6 text-black fw-medium\">Email:</p>
                                    <a href=\"mailto:info@zaynjewels.com\" class=\"link text-main\">info@zaynjewels.com</a>
                                </li>
                                <br /><br />
                                <li>
                                    <p class=\"h6 text-black fw-medium\">Phone:</p>
                                    <a href=\"tel:+19499006910\" class=\"link text-main\">+1 (949) 900-6910</a>
                                </li>
                            </ul><br /><br />
                            <ul class=\"tf-social-icon\">
                                <li>
                                    <a href=\"https://www.facebook.com/\" target=\"_blank\" class=\"social-facebook\">
                                        <span class=\"icon\"><i class=\"icon-fb\"></i></span>
                                    </a>
                                </li>
                                <li>
                                    <a href=\"https://www.instagram.com/\" target=\"_blank\" class=\"social-instagram\">
                                        <span class=\"icon\"><i class=\"icon-instagram-logo\"></i></span>
                                    </a>
                                </li>
                                <li>
                                    <a href=\"https://x.com/\" target=\"_blank\" class=\"social-x\">
                                        <span class=\"icon\"><i class=\"icon-x\"></i></span>
                                    </a>
                                </li>
                                <li>
                                    <a href=\"https://www.tiktok.com/\" target=\"_blank\" class=\"social-tiktok\">
                                        <span class=\"icon\"><i class=\"icon-tiktok\"></i></span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class=\"col-xl-5 col-lg-6\">
                        <div class=\"right-col\">
                            <form class=\"form-contact style-border\">
                                <div class=\"form-content\">
                                    <div class=\"cols tf-grid-layout sm-col-2\">
                                        <fieldset>
                                            <input id=\"name\" type=\"text\" placeholder=\"Name *\" required>
                                        </fieldset>
                                        <fieldset>
                                            <input id=\"email\" type=\"email\" placeholder=\"Email *\" required>
                                        </fieldset>
                                    </div>
                                    <br />
                                    <div class=\"cols tf-grid-layout sm-col-2\">
                                        <fieldset>
                                            <input id=\"name\" type=\"text\" placeholder=\"Phone Number *\" required>
                                        </fieldset>
                                        <fieldset>
                                            <input id=\"email\" type=\"email\" placeholder=\"Subject *\" required>
                                        </fieldset>
                                    </div>
                                 <br />
                                    <textarea id=\"desc\" placeholder=\"Message\" style=\"height: 229px;\" required></textarea>
                                </div>
                                <div class=\"form_message text-center\"></div>
                            <br />
                                <button type=\"submit\" class=\"tf-btn btn-fill animate-btn w-100\">
                                    SEND
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- /Contact Us -->
   


";
        // line 93
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
        return "catalog/view/template/information/contact.twig";
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
        return array (  137 => 93,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{{ header }}

  <!-- Page Title -->
  <section class=\"s-page-title\">
            <div class=\"container\">
                <div class=\"content\">
                    <h1 class=\"title-page\">Contact Us</h1>
                </div>
            </div>
        </section>
        <!-- /Page Title -->
        <!-- Contact Us -->
        <section class=\"s-contact-us flat-spacing\">
          
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-xxl-5 offset-xxl-1 col-lg-6\">
                        <div class=\"left-col mb-lg-0\">
                            <ul class=\"store-info-list\">
                                <li>
                                    <p class=\"h6 text-black fw-medium\">Email:</p>
                                    <a href=\"mailto:info@zaynjewels.com\" class=\"link text-main\">info@zaynjewels.com</a>
                                </li>
                                <br /><br />
                                <li>
                                    <p class=\"h6 text-black fw-medium\">Phone:</p>
                                    <a href=\"tel:+19499006910\" class=\"link text-main\">+1 (949) 900-6910</a>
                                </li>
                            </ul><br /><br />
                            <ul class=\"tf-social-icon\">
                                <li>
                                    <a href=\"https://www.facebook.com/\" target=\"_blank\" class=\"social-facebook\">
                                        <span class=\"icon\"><i class=\"icon-fb\"></i></span>
                                    </a>
                                </li>
                                <li>
                                    <a href=\"https://www.instagram.com/\" target=\"_blank\" class=\"social-instagram\">
                                        <span class=\"icon\"><i class=\"icon-instagram-logo\"></i></span>
                                    </a>
                                </li>
                                <li>
                                    <a href=\"https://x.com/\" target=\"_blank\" class=\"social-x\">
                                        <span class=\"icon\"><i class=\"icon-x\"></i></span>
                                    </a>
                                </li>
                                <li>
                                    <a href=\"https://www.tiktok.com/\" target=\"_blank\" class=\"social-tiktok\">
                                        <span class=\"icon\"><i class=\"icon-tiktok\"></i></span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class=\"col-xl-5 col-lg-6\">
                        <div class=\"right-col\">
                            <form class=\"form-contact style-border\">
                                <div class=\"form-content\">
                                    <div class=\"cols tf-grid-layout sm-col-2\">
                                        <fieldset>
                                            <input id=\"name\" type=\"text\" placeholder=\"Name *\" required>
                                        </fieldset>
                                        <fieldset>
                                            <input id=\"email\" type=\"email\" placeholder=\"Email *\" required>
                                        </fieldset>
                                    </div>
                                    <br />
                                    <div class=\"cols tf-grid-layout sm-col-2\">
                                        <fieldset>
                                            <input id=\"name\" type=\"text\" placeholder=\"Phone Number *\" required>
                                        </fieldset>
                                        <fieldset>
                                            <input id=\"email\" type=\"email\" placeholder=\"Subject *\" required>
                                        </fieldset>
                                    </div>
                                 <br />
                                    <textarea id=\"desc\" placeholder=\"Message\" style=\"height: 229px;\" required></textarea>
                                </div>
                                <div class=\"form_message text-center\"></div>
                            <br />
                                <button type=\"submit\" class=\"tf-btn btn-fill animate-btn w-100\">
                                    SEND
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- /Contact Us -->
   


{{ footer }}
", "catalog/view/template/information/contact.twig", "C:\\xampp\\htdocs\\zyannew\\catalog\\view\\template\\information\\contact.twig");
    }
}

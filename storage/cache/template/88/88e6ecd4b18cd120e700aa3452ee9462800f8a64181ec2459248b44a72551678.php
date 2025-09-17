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
  <section class=\"\" style=\"padding-top:130px;\">
            <div class=\"container\">
                <div class=\"content\">
                    <h2 class=\"title-page text-center\">Contact Us</h2>
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
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a href=\"https://www.facebook.com/zaynjewels/\" target=\"_blank\" class=\"social-facebook\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"icon\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"icon-fb\"></i>
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a href=\"https://www.instagram.com/zaynjewels/\" target=\"_blank\" class=\"social-instagram\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"icon\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"icon-instagram-logo\"></i>
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a href=\"https://www.youtube.com/channel/UC0KmddVZ3BX4Ly5jjBRW7SA\" target=\"_blank\" class=\"social-youtube\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"icon\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fab fa-youtube\"></i>
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t</ul>
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
                                    <textarea id=\"desc\" placeholder=\"Message\" style=\"height: 150px;\" required></textarea>
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
        // line 95
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
        return array (  139 => 95,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{{ header }}

  <!-- Page Title -->
  <section class=\"\" style=\"padding-top:130px;\">
            <div class=\"container\">
                <div class=\"content\">
                    <h2 class=\"title-page text-center\">Contact Us</h2>
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
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a href=\"https://www.facebook.com/zaynjewels/\" target=\"_blank\" class=\"social-facebook\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"icon\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"icon-fb\"></i>
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a href=\"https://www.instagram.com/zaynjewels/\" target=\"_blank\" class=\"social-instagram\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"icon\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"icon-instagram-logo\"></i>
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a href=\"https://www.youtube.com/channel/UC0KmddVZ3BX4Ly5jjBRW7SA\" target=\"_blank\" class=\"social-youtube\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"icon\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fab fa-youtube\"></i>
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t</ul>
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
                                    <textarea id=\"desc\" placeholder=\"Message\" style=\"height: 150px;\" required></textarea>
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
", "catalog/view/template/information/contact.twig", "C:\\xampp\\htdocs\\newzyan\\catalog\\view\\template\\information\\contact.twig");
    }
}

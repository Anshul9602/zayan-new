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

/* catalog/view/template/common/cad.twig */
class __TwigTemplate_e5d2408ffb67f2026294592bc0eed464db8cccfe73d4e7d2f7e21e516f949b6e extends Template
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
.slick-arrow{
    display:none !important;
}
.custom-slider{
    border:3px solid #423c9e;
}
.p5 h3 {
    font-weight: 300;
    color: #423C9E;
    font-size: 28px;
}
.p5 p {
    font-weight: 300;
    margin-top: 10px;
    font-size: 18px;
    color:#333;
}
.p5 {
    padding: 15px;
    text-align:center;
}
.m1{
    width:100%;
    max-width:420px;
}

</style>
<link rel=\"stylesheet\" type=\"text/css\" href=\"https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css\"/>
<link rel=\"stylesheet\" type=\"text/css\" href=\"https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css\"/>
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js\"></script>
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js\"></script>

 <img src=\"assets/195.jpg\" class=\"img-fluid\" style=\"padding-top:100px;\">
<br /><br /><br />
<div class=\"container\">
    <div class=\"row\" style=\"display:flex; align-items:center \">
        <div class=\"col-sm-6\">
           <h3 style=\"color:#423c9e\">CAM Services</h3><br />
           <p style=\"text-align:justify; font-size:16px\">Create any piece of jewelry you like. Upload your ideas in the form of an image, art work , photo. Fill in the form with the details of the piece to be created and we will create a CAD and rendering.
<br /><br />
A one time fee of \$35 is charged which includes 3 corrections. Any additional changes or corrections will be charged separately. Let our designers bring your vision to life.</p>
        </div>
        <div class=\"col-sm-2\" style=\"margin-bottom:20px;\"></div>
        <div class=\"col-sm-4\">
           <div class=\"custom-slider\">
            <img src=\"assets/1.jpg\"  class=\"img-fluid\">
             <img src=\"assets/2.jpg\"  class=\"img-fluid\">
              <img src=\"assets/3.jpg\"  class=\"img-fluid\">
               <img src=\"assets/4.jpg\"  class=\"img-fluid\">
           </div>
        </div>
    </div>

    <br /><br /><br /><br />
</div>

<section style=\"background-color:#F8F8F8\">
<br /><br /><br />
<div class=\"container\">
  <div class=\"row\">
            <div class=\"col-sm-6 p5\">
                <a href=\"\">
                    <h3 class=\"text-center\">Sketch or Image</h3>
                    <p class=\"text-center text-black\">Upload your sketch or image and receive a quote and
                    <br class=\"d-none d-lg-block\" />render within 3-4 business days.</p>
                    <img src=\"assets/6.jpg\" alt=\"\" class=\"img-responsive m1\">
                    <p class=\"shop_link\"> Start Creating &gt; </p>
                </a>
            </div>
            <div class=\"col-sm-6 p5\">
                <a href=\"\" >
                    <h3 class=\"text-center\">CAD Design</h3>
                    <p class=\"text-center text-black\">Upload your digital CAD file and receive a quote <br class=\"d-none d-lg-block\" />and render within 3-4 business day.</p>
                    <img src=\"assets/7.jpg\" alt=\"\" class=\"img-responsive m1\">
                    <p class=\"shop_link\"> Start Creating &gt; </p>
                </a>
            </div>

        </div>
</div>
<br /><br /><br />
</section>


";
        // line 87
        yield ($context["footer"] ?? null);
        yield "

<script>
\$(\".login-redirect-1\").click(function(e) {
      e.preventDefault();
      setCookie('login_redirect', 'https://www.zaynjewels.com/cad-cam-services', '1'); //(key,value,expiry in days)
      window.location = \"index.php?route=account/login\";
   })
\$('.custom-slider').slick({
  dots: false,
  infinite: true,
  speed: 300,
  navigation:false,
  slidesToShow: 1,
  autoplay: true,
  autoplaySpeed: 2000,
  adaptiveHeight: true
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
        return "catalog/view/template/common/cad.twig";
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
        return array (  131 => 87,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{{ header }}
<style>
.slick-arrow{
    display:none !important;
}
.custom-slider{
    border:3px solid #423c9e;
}
.p5 h3 {
    font-weight: 300;
    color: #423C9E;
    font-size: 28px;
}
.p5 p {
    font-weight: 300;
    margin-top: 10px;
    font-size: 18px;
    color:#333;
}
.p5 {
    padding: 15px;
    text-align:center;
}
.m1{
    width:100%;
    max-width:420px;
}

</style>
<link rel=\"stylesheet\" type=\"text/css\" href=\"https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css\"/>
<link rel=\"stylesheet\" type=\"text/css\" href=\"https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css\"/>
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js\"></script>
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js\"></script>

 <img src=\"assets/195.jpg\" class=\"img-fluid\" style=\"padding-top:100px;\">
<br /><br /><br />
<div class=\"container\">
    <div class=\"row\" style=\"display:flex; align-items:center \">
        <div class=\"col-sm-6\">
           <h3 style=\"color:#423c9e\">CAM Services</h3><br />
           <p style=\"text-align:justify; font-size:16px\">Create any piece of jewelry you like. Upload your ideas in the form of an image, art work , photo. Fill in the form with the details of the piece to be created and we will create a CAD and rendering.
<br /><br />
A one time fee of \$35 is charged which includes 3 corrections. Any additional changes or corrections will be charged separately. Let our designers bring your vision to life.</p>
        </div>
        <div class=\"col-sm-2\" style=\"margin-bottom:20px;\"></div>
        <div class=\"col-sm-4\">
           <div class=\"custom-slider\">
            <img src=\"assets/1.jpg\"  class=\"img-fluid\">
             <img src=\"assets/2.jpg\"  class=\"img-fluid\">
              <img src=\"assets/3.jpg\"  class=\"img-fluid\">
               <img src=\"assets/4.jpg\"  class=\"img-fluid\">
           </div>
        </div>
    </div>

    <br /><br /><br /><br />
</div>

<section style=\"background-color:#F8F8F8\">
<br /><br /><br />
<div class=\"container\">
  <div class=\"row\">
            <div class=\"col-sm-6 p5\">
                <a href=\"\">
                    <h3 class=\"text-center\">Sketch or Image</h3>
                    <p class=\"text-center text-black\">Upload your sketch or image and receive a quote and
                    <br class=\"d-none d-lg-block\" />render within 3-4 business days.</p>
                    <img src=\"assets/6.jpg\" alt=\"\" class=\"img-responsive m1\">
                    <p class=\"shop_link\"> Start Creating &gt; </p>
                </a>
            </div>
            <div class=\"col-sm-6 p5\">
                <a href=\"\" >
                    <h3 class=\"text-center\">CAD Design</h3>
                    <p class=\"text-center text-black\">Upload your digital CAD file and receive a quote <br class=\"d-none d-lg-block\" />and render within 3-4 business day.</p>
                    <img src=\"assets/7.jpg\" alt=\"\" class=\"img-responsive m1\">
                    <p class=\"shop_link\"> Start Creating &gt; </p>
                </a>
            </div>

        </div>
</div>
<br /><br /><br />
</section>


{{ footer }}

<script>
\$(\".login-redirect-1\").click(function(e) {
      e.preventDefault();
      setCookie('login_redirect', 'https://www.zaynjewels.com/cad-cam-services', '1'); //(key,value,expiry in days)
      window.location = \"index.php?route=account/login\";
   })
\$('.custom-slider').slick({
  dots: false,
  infinite: true,
  speed: 300,
  navigation:false,
  slidesToShow: 1,
  autoplay: true,
  autoplaySpeed: 2000,
  adaptiveHeight: true
});
</script>
", "catalog/view/template/common/cad.twig", "C:\\xampp\\htdocs\\newzyan\\catalog\\view\\template\\common\\cad.twig");
    }
}

<?php

/* service/service.html.twig */
class __TwigTemplate_53bc5eaea6ca1d36a79d63a626b4f9d7b06bf17e099ebc5be4d92ce920ed905a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "service/service.html.twig", 1);
        $this->blocks = array(
            'stylesheet' => array($this, 'block_stylesheet'),
            'content' => array($this, 'block_content'),
            'javascript' => array($this, 'block_javascript'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d09ab88d0d096f5eb8dbdb35517764cf8c267c8b1d9171bc90a18d7a97923768 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d09ab88d0d096f5eb8dbdb35517764cf8c267c8b1d9171bc90a18d7a97923768->enter($__internal_d09ab88d0d096f5eb8dbdb35517764cf8c267c8b1d9171bc90a18d7a97923768_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "service/service.html.twig"));

        $__internal_0f5192c19a6352f49d1b19cf588b8fbffb57035b6eb857b4f532bd7637039c77 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0f5192c19a6352f49d1b19cf588b8fbffb57035b6eb857b4f532bd7637039c77->enter($__internal_0f5192c19a6352f49d1b19cf588b8fbffb57035b6eb857b4f532bd7637039c77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "service/service.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d09ab88d0d096f5eb8dbdb35517764cf8c267c8b1d9171bc90a18d7a97923768->leave($__internal_d09ab88d0d096f5eb8dbdb35517764cf8c267c8b1d9171bc90a18d7a97923768_prof);

        
        $__internal_0f5192c19a6352f49d1b19cf588b8fbffb57035b6eb857b4f532bd7637039c77->leave($__internal_0f5192c19a6352f49d1b19cf588b8fbffb57035b6eb857b4f532bd7637039c77_prof);

    }

    // line 3
    public function block_stylesheet($context, array $blocks = array())
    {
        $__internal_9b9304075af3de5f3d1f6abd812328ec67c8268bebcaf509d5d887c1b999fb98 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9b9304075af3de5f3d1f6abd812328ec67c8268bebcaf509d5d887c1b999fb98->enter($__internal_9b9304075af3de5f3d1f6abd812328ec67c8268bebcaf509d5d887c1b999fb98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        $__internal_3c894748f3439921fc938172f4db385701cf288fe5c14ad0fc1d1b0ddd25a60d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3c894748f3439921fc938172f4db385701cf288fe5c14ad0fc1d1b0ddd25a60d->enter($__internal_3c894748f3439921fc938172f4db385701cf288fe5c14ad0fc1d1b0ddd25a60d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        // line 4
        echo "         ";
        $this->displayParentBlock("stylesheet", $context, $blocks);
        echo "   
         <link rel=\"stylesheet\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/services/services.css"), "html", null, true);
        echo "\"/>
";
        
        $__internal_3c894748f3439921fc938172f4db385701cf288fe5c14ad0fc1d1b0ddd25a60d->leave($__internal_3c894748f3439921fc938172f4db385701cf288fe5c14ad0fc1d1b0ddd25a60d_prof);

        
        $__internal_9b9304075af3de5f3d1f6abd812328ec67c8268bebcaf509d5d887c1b999fb98->leave($__internal_9b9304075af3de5f3d1f6abd812328ec67c8268bebcaf509d5d887c1b999fb98_prof);

    }

    // line 8
    public function block_content($context, array $blocks = array())
    {
        $__internal_4aba66bff3011ab3d177cc7a9ba2abb738133eb67ed0f3da1247eb1a57fe7c63 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4aba66bff3011ab3d177cc7a9ba2abb738133eb67ed0f3da1247eb1a57fe7c63->enter($__internal_4aba66bff3011ab3d177cc7a9ba2abb738133eb67ed0f3da1247eb1a57fe7c63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_2ed2462d435849726d1fe17450cf919314ac21d355c7bfb486721d68d05b4925 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2ed2462d435849726d1fe17450cf919314ac21d355c7bfb486721d68d05b4925->enter($__internal_2ed2462d435849726d1fe17450cf919314ac21d355c7bfb486721d68d05b4925_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 9
        echo "    <div class=\"parallax\" data-image=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/services/hosted_by_africa_services.jpg"), "html", null, true);
        echo "\"></div>
    <main>
        <section id=\"service-main-header\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-xs-12 text-center service-profil-title\">
                        <h1>";
        // line 15
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, "Nos services"), "html", null, true);
        echo "</h1>
                    </div>
                </div>
                <div class=\"row\">   
                    <div class=\"col-xs-12 col-sm-6 col-lg-3 col-lg-offset-3 text-center\">
                        <a href=\"btn btn-default\" role=\"button\" class=\"service-profil-button\" data-id=\"
                           ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["services"]) || array_key_exists("services", $context) ? $context["services"] : (function () { throw new Twig_Error_Runtime('Variable "services" does not exist.', 21, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["service"]) {
            // line 22
            echo "                                ";
            if ((twig_get_attribute($this->env, $this->getSourceContext(), $context["service"], "target", array()) == "start-up")) {
                // line 23
                echo "                                    ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["service"], "idService", array()), "html", null, true);
                echo "
                                ";
            }
            // line 25
            echo "                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['service'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "\">Start-up</a>
                    </div>
                    <div class=\"col-xs-12 col-sm-6 col-lg-3 text-center\">
                        <a href=\"btn btn-default\" role=\"button\" class=\"service-profil-button\" data-id=\"
                           ";
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["services"]) || array_key_exists("services", $context) ? $context["services"] : (function () { throw new Twig_Error_Runtime('Variable "services" does not exist.', 29, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["service"]) {
            // line 30
            echo "                                ";
            if ((twig_get_attribute($this->env, $this->getSourceContext(), $context["service"], "target", array()) == "investor")) {
                // line 31
                echo "                                    ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["service"], "idService", array()), "html", null, true);
                echo "
                                ";
            }
            // line 33
            echo "                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['service'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "\">Investisseur</a>
                    </div>
                </div>
            </div>
        </section>
        <section id=\"service-main-body\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-xs-12 main-body-content\">
                        <div id=\"service-content\">
                            ";
        // line 43
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["services"]) || array_key_exists("services", $context) ? $context["services"] : (function () { throw new Twig_Error_Runtime('Variable "services" does not exist.', 43, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["service"]) {
            // line 44
            echo "                                ";
            if ((twig_get_attribute($this->env, $this->getSourceContext(), $context["service"], "target", array()) == "introduction")) {
                // line 45
                echo "                                    ";
                echo twig_get_attribute($this->env, $this->getSourceContext(), $context["service"], "content", array());
                echo "
                                ";
            }
            // line 47
            echo "                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['service'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        echo "                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id=\"service-main-footer\">
            <div class=\"container\">
                <div class=\"row\">
                    <br><br>
                    <div class=\"col-xs-12 col-sm-6 col-lg-3 text-center col-lg-offset-3\">
                        <a href=\"";
        // line 58
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("clients");
        echo "\" role=\"button\" class=\"service-link-button\">Nos clients</a>
                    </div>
                    <div class=\"col-xs-12 col-sm-6 col-lg-3 text-center\">
                        <a href=\"";
        // line 61
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("innovateurs");
        echo "\" role=\"button\" class=\"service-link-button\">Nos innovateurs</a>
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col-xs-12 col-sm-6 col-sm-offset-3 col-lg-6 col-lg-offset-3 text-center\">
                        <a href=\"http://localhost/hebya/web/index_dev.php/contact\" role=\"button\" class=\"service-contact-button\">Nous contacter</a>
                    </div>
                </div>
            </div>
        </section>
    </main>
";
        
        $__internal_2ed2462d435849726d1fe17450cf919314ac21d355c7bfb486721d68d05b4925->leave($__internal_2ed2462d435849726d1fe17450cf919314ac21d355c7bfb486721d68d05b4925_prof);

        
        $__internal_4aba66bff3011ab3d177cc7a9ba2abb738133eb67ed0f3da1247eb1a57fe7c63->leave($__internal_4aba66bff3011ab3d177cc7a9ba2abb738133eb67ed0f3da1247eb1a57fe7c63_prof);

    }

    // line 74
    public function block_javascript($context, array $blocks = array())
    {
        $__internal_797bca2c919ce96bc462192557afa54fa09130c4cb0f07e29fecc7737f2375fb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_797bca2c919ce96bc462192557afa54fa09130c4cb0f07e29fecc7737f2375fb->enter($__internal_797bca2c919ce96bc462192557afa54fa09130c4cb0f07e29fecc7737f2375fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        $__internal_81d6d7dc110fd40293d5dc4c76bee70123990f79ea5ae940b87ccb74286c0df6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_81d6d7dc110fd40293d5dc4c76bee70123990f79ea5ae940b87ccb74286c0df6->enter($__internal_81d6d7dc110fd40293d5dc4c76bee70123990f79ea5ae940b87ccb74286c0df6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        // line 75
        echo "    ";
        $this->displayParentBlock("javascript", $context, $blocks);
        echo "
    <script type=\"text/javascript\" src=\"";
        // line 76
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.imageScroll.min.js"), "html", null, true);
        echo "\"></script>
    <script>
        var targetAjaxUrl = '";
        // line 78
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("services_ajax");
        echo "';
    </script>
    <script src=\"";
        // line 80
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/service/service.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_81d6d7dc110fd40293d5dc4c76bee70123990f79ea5ae940b87ccb74286c0df6->leave($__internal_81d6d7dc110fd40293d5dc4c76bee70123990f79ea5ae940b87ccb74286c0df6_prof);

        
        $__internal_797bca2c919ce96bc462192557afa54fa09130c4cb0f07e29fecc7737f2375fb->leave($__internal_797bca2c919ce96bc462192557afa54fa09130c4cb0f07e29fecc7737f2375fb_prof);

    }

    public function getTemplateName()
    {
        return "service/service.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  233 => 80,  228 => 78,  223 => 76,  218 => 75,  209 => 74,  187 => 61,  181 => 58,  169 => 48,  163 => 47,  157 => 45,  154 => 44,  150 => 43,  133 => 33,  127 => 31,  124 => 30,  120 => 29,  109 => 25,  103 => 23,  100 => 22,  96 => 21,  87 => 15,  77 => 9,  68 => 8,  56 => 5,  51 => 4,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"layout.html.twig\" %}

{% block stylesheet %}
         {{ parent() }}   
         <link rel=\"stylesheet\" href=\"{{ asset(\"css/services/services.css\") }}\"/>
{% endblock %}

{% block content %}
    <div class=\"parallax\" data-image=\"{{ asset('img/services/hosted_by_africa_services.jpg') }}\"></div>
    <main>
        <section id=\"service-main-header\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-xs-12 text-center service-profil-title\">
                        <h1>{{ \"Nos services\"|upper }}</h1>
                    </div>
                </div>
                <div class=\"row\">   
                    <div class=\"col-xs-12 col-sm-6 col-lg-3 col-lg-offset-3 text-center\">
                        <a href=\"btn btn-default\" role=\"button\" class=\"service-profil-button\" data-id=\"
                           {% for service in services %}
                                {% if service.target == \"start-up\" %}
                                    {{ service.idService }}
                                {% endif %}
                            {% endfor %}\">Start-up</a>
                    </div>
                    <div class=\"col-xs-12 col-sm-6 col-lg-3 text-center\">
                        <a href=\"btn btn-default\" role=\"button\" class=\"service-profil-button\" data-id=\"
                           {% for service in services %}
                                {% if service.target == \"investor\" %}
                                    {{ service.idService }}
                                {% endif %}
                            {% endfor %}\">Investisseur</a>
                    </div>
                </div>
            </div>
        </section>
        <section id=\"service-main-body\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-xs-12 main-body-content\">
                        <div id=\"service-content\">
                            {% for service in services %}
                                {% if service.target == \"introduction\" %}
                                    {{ service.content|raw }}
                                {% endif %}
                            {% endfor %}
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id=\"service-main-footer\">
            <div class=\"container\">
                <div class=\"row\">
                    <br><br>
                    <div class=\"col-xs-12 col-sm-6 col-lg-3 text-center col-lg-offset-3\">
                        <a href=\"{{ path('clients') }}\" role=\"button\" class=\"service-link-button\">Nos clients</a>
                    </div>
                    <div class=\"col-xs-12 col-sm-6 col-lg-3 text-center\">
                        <a href=\"{{ path('innovateurs') }}\" role=\"button\" class=\"service-link-button\">Nos innovateurs</a>
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col-xs-12 col-sm-6 col-sm-offset-3 col-lg-6 col-lg-offset-3 text-center\">
                        <a href=\"http://localhost/hebya/web/index_dev.php/contact\" role=\"button\" class=\"service-contact-button\">Nous contacter</a>
                    </div>
                </div>
            </div>
        </section>
    </main>
{% endblock %}

{% block javascript %}
    {{ parent() }}
    <script type=\"text/javascript\" src=\"{{ asset('js/jquery.imageScroll.min.js') }}\"></script>
    <script>
        var targetAjaxUrl = '{{ path('services_ajax') }}';
    </script>
    <script src=\"{{ asset(\"js/service/service.js\") }}\"></script>
{% endblock %}
", "service/service.html.twig", "C:\\xampp\\htdocs\\hebya\\templates\\service\\service.html.twig");
    }
}

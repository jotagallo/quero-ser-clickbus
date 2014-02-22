<?php

/* CaixaBundle:Default:error.html.twig */
class __TwigTemplate_df7721b5719b59323ae3e28c1f4dd4060e8491f926a4ac526d20e46f553635dc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("AcmeDemoBundle::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AcmeDemoBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "Caixa - Erro";
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "<div class=\"erro\">
  <p>
    ";
        // line 8
        echo twig_escape_filter($this->env, $this->getContext($context, "mensagem"), "html", null, true);
        echo "
  </p>
  <p>
    <a href=\"/caixa\"> Voltar</a>
  </p>


</div>

";
    }

    public function getTemplateName()
    {
        return "CaixaBundle:Default:error.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 8,  38 => 6,  35 => 5,  29 => 3,);
    }
}

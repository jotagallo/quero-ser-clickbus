<?php

/* CaixaBundle:Default:index.html.twig */
class __TwigTemplate_cd87a0eb17faf571abb7d5988fd68f3de479ef11ac3b8453265b3fd3c882dc5d extends Twig_Template
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
        echo "Caixa - Digite o valor";
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "<div class=\"saque-form\">
  <form action=\"/app_dev.php/caixa/saque\" method=\"get\">
    <span class=\"label\">Valor: </span>
    <input type=\"text\" name=\"valor\"><br>
    <input type=\"submit\" value=\"Confirmar\">
  </form>
</div>

";
    }

    public function getTemplateName()
    {
        return "CaixaBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 6,  35 => 5,  29 => 3,);
    }
}

<?php

/* CaixaBundle:Default:saque.html.twig */
class __TwigTemplate_3be6d77887ec25503f9cebc1be193f0b6617407a5562ab374bcca2e977518424 extends Twig_Template
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
        echo "Caixa - Retire seu dinheiro";
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "<h2> Retire seu dinheiro</h2>
  ";
        // line 7
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "saque"));
        foreach ($context['_seq'] as $context["valor"] => $context["qtd"]) {
            // line 8
            echo "    ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getContext($context, "qtd"));
            foreach ($context['_seq'] as $context["_key"] => $context["num"]) {
                // line 9
                echo "      <div class=\"nota nota-";
                echo twig_escape_filter($this->env, $this->getContext($context, "valor"), "html", null, true);
                echo "\"> Nota de ";
                echo twig_escape_filter($this->env, $this->getContext($context, "valor"), "html", null, true);
                echo " </div>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['num'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 11
            echo "
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['valor'], $context['qtd'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "
";
    }

    public function getTemplateName()
    {
        return "CaixaBundle:Default:saque.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 13,  61 => 11,  50 => 9,  45 => 8,  41 => 7,  38 => 6,  35 => 5,  29 => 3,);
    }
}

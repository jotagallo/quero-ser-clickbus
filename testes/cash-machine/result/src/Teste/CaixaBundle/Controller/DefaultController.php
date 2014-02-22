<?php

namespace Teste\CaixaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller {

  public function indexAction() {

    return $this->render('CaixaBundle:Default:index.html.twig');
  }

  public function cashAction() {
    $valor = $_GET['valor'];

    if (!isset($valor) || !is_numeric($valor) || is_double($valor)) {
      return $this->render('CaixaBundle:Default:error.html.twig', array('mensagem' => 'Valor Inválido. Tente novamente'));
    }

    if ($valor % 10 != 0) {
      return $this->render('CaixaBundle:Default:error.html.twig', array('mensagem' => 'Nota inválida. Tente novamente'));
    }

    $notas = array(100, 50, 20, 10);
    $saque = array();

    foreach ($notas as $nota) {
      if ($valor >= $nota) {
        $saque[$nota] = array();
        $qtd = intval($valor / $nota);
        for ($i = 1; $i <= $qtd; $i++) {
          $saque[$nota][] = TRUE;
        }
        $mod = $valor % $nota;
        if ($mod == 0) {
          break;
        } else {
          $valor = $mod;
        }
      }
    }
    return $this->render('CaixaBundle:Default:saque.html.twig', array('saque' => $saque));
  }


}

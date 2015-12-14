<?php
namespace Gabe96\Multi5Bundle\Controller;

use Gabe96\Multi5Bundle\Services\Multi5;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefualtController extends Controller
{
    public function getHomepageAction()
    {
        $muliti5 = new Multi5();
        //numero da moltiplicare
        $muliti5 ->setNumero("30");
        $risultato = $muliti5->doMulti5();
        return $this->render('Gabe96Multi5Bundle::test.html.twig',
        array(
            'Multi5' => $muliti5,
            'Risultato' => $risultato
        ));
    }

}
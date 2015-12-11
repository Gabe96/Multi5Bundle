<?php
namespace Gabe96\Multi5Bundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefualtController extends Controller
{
    public function getHomepageAction()
    {
        $multi5 = new Multi5();
        $multi5->setMulti5('30');
        printf($multi5);
        $multi5->doMulti5();
        printf("\n".$multi5);
    }

}
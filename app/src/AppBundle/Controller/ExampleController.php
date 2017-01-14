<?php
// src/AppBundle/Controller/ExampleController.php
namespace AppBundle\Controller;

use Symfony\Component\HttpFoundation\Session\Session;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ExampleController extends Controller
{
    public function getSession()
    {
      return $this->get('session');
    }

    /**
     * @Route("/example/")
     */
    public function indexAction()
    {
      $value = $this->getSession()->get('value', 0);
      $data = array('title' => 'Symfony hello world', 'value' => $value);
      return $this->render('example/index.html.twig', $data);
    }

    /**
    * @Route("/example/modify/{amount}")
    */
    public function actionModify($amount)
    {
      $value = $this->getSession()->get('value', 0);
      $value = $value += $amount;
      $this->getSession()->set('value', $value);
      return $this->indexAction();
    }

    /**
    * @Route("/example/reset")
    */
    public function actionReset()
    {
      $this->getSession()->set('value', 0);
      return $this->indexAction();
    }

    /**
    * @Route("/example/ajax/{amount}")
    */
    public function getAjax($amount)
    {
      $value = $this->getSession()->get('value', 0);
      $value += $amount;
      $this->getSession()->set('value', $value);
      return $this->render('example/progress.html.twig', array('value' => $value));
    }
}
?>

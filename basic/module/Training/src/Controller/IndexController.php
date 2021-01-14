<?php

namespace Training\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class IndexController extends AbstractActionController
{
    public function indexAction()
    {   
        echo '<h3 style="color:red;font-weight:bold">' . __METHOD__ . '</h3>';
		// Disable view
		// Methode 1: return false;
		// Methode 2: return '';
		
		// Disable layout
		// $viewModel	= new ViewModel();
		// $viewModel->setTerminal(true);
		// return $viewModel;
		
		// Disable layout & disable view
		// Methode 1: return $this->getResponse();
		return $this->response;
    }
}

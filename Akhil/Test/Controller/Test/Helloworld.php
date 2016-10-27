<?php
namespace Akhil\Test\Controller\Test;
use Magento\Framework\View\Result\PageFactory;
use Magento\Framework\App\Action\Context;

class Helloworld extends \Magento\Framework\App\Action\Action
{
    public function execute()
    {
	$this->_view->loadLayout();
	$this->_view->renderLayout();	
    }

}
<?php
namespace Akhil\Test\Block;

use Magento\Framework\View\Element\Template;

class Helloworld extends Template {

    public function getFirstWorld() {
        return 'Hello World..!! Thank you';
    }

}

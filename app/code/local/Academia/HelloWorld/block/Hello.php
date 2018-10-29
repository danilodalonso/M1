<?php

class Academia_Hello_World_Block extends Mage_Core_Block_Text{

    public function indexAction(){
            echo "Hello Academia!";
    }

    public function olaAction(){
        echo "Ola";
    }

    public function blocksAction(){
        $this->loadLayout();
        $block = $this->getLayout()->createBlock('academia_helloworld/hello');
        $block->setText("Mensagem no bloco");
        $this->getLayout()->getBlock('content')->insert($block)
        $this->renderLayout();
    }
}
<?php

class Academia_Aula03Exercicio01_IndexController extends Mage_Core_Controller_Front_Action{
     public function indexAction(){
        echo "Hello Academia!";        
     }

     public function blocksAction() {
        $this->loadLayout();
        $block = $this -> getLayout() -> createBlock('academia_aula03exercicio01/hello');
        $block -> setText("Ola Academia");
        $this -> getLayout() -> getBlock('content') ->  insert($block);
        $this -> renderLayout(); 
     }
}
?>
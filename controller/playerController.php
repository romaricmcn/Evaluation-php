<?php
class PlayerController {
    //ATTRIBUT
    private ViewPlayer $player;
    //CONSTRUCT
    public function __construct(ViewPlayer $player) {

    }

    //GETTER & SETTER
    public function getPlayer(){
        $this->viewPlayer = $player;
    }
    public function setPlayer(viewPlayer $player){
        // TODO
    }
    //METHODE
    public function render():void{
        echo $this->$header();
        echo $this->$footer();
        echo $this->$model();
    }
}
<?php
class PlayerController {
    //ATTRIBUT
    private ViewPlayer $player;
    //GETTER & SETTER
    public function getPlayer(){
        $this->playerviewPlayer = Player::find(1);
    }
    public function setPlayer(Request $request){
        // TODO
    }
    //METHODE
    public function render():void{
        //Header
        echo $this->$header();

        //Mon Compte
        echo $this->$footer();
        
        //Footer
        echo $this->$model();
    }
}
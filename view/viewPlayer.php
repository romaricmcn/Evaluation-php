<?php
class viewPlayer {
    //ATTRIBUT
    private ?string $signUpMessage = '';
    private ?string $playerList = '';
    
    //GETTER & SETTETR
    public function getSignUpMessage(): string {
        return $this->signUpMessage;
    }
    public function getPlayerList(): ?string {
        return $this->playerList;
    }
    public function setSignUpMessage(?string $signUpMessage): self {
        $this->signUpMessage = $signUpMessage;
        return $this;
    }
    public function setPlayerList(?string $playerList): self {
        $this->playerList = $playerList;
        return $this;
    }
    
    //METHODE
    public function displayView():string{
        ob_start();
?>

        <section>
            <h1>Inscription d'un Joueur</h1>
            <input type="text" name="pseudo" value="Votre Pseudo">
            <input type="text" name="email" value="Votre Email">
            <input type="text" name="password" value="Votre Mot de Passe">
            <input type="text" name="score" value="Votre Score">
            <input type="submit" value="ajouter" name="Envoyer">
            <ul>
                <?php echo $this->getPlayerList() ?>
            </ul>
        </section>
<?php
        return ob_get_clean();
    }
}
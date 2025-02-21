<?php
class modelPlayer{
    //ATTRIBUTS
    public ?int $id;
    public ?string $pseudo;
    public ?string $email;
    public ?int $score;
    public ?string $password;
    public ?PDO $bdd;
    
    //CONSTRUCT
    public function __construct(int $id, string $pseudo, string $email, int $score, string $password, PDO $bdd) {
        $this->id = $id;
        $this->pseudo = $pseudo;
        $this->email = $email;
        $this->score = $score;
        $this->password = $password;
        $this->bdd = $bdd;
    }

    //GETTER & SETTER
    public function getId(): int{
        return $this->id;
    }
    public function setId(int $id): modelPlayer {
        $this->id = $id;
        return $this;
    }
    public function getPseudo(): string{
        return $this->pseudo;
    }
    public function setPseudo(string $pseudo): modelPlayer{
        $this->pseudo = $pseudo;
        return $this;
    }
    public function getEmail(): string{
        return $this->email;
    }
    public function setEmail(string $email): modelPlayer{
        $this->email = $email;
        return $this;
    }
    public function getScore(): int{
        return $this->score;
    }
    public function setScore(int $score): modelPlayer{
        $this->score = $score;
        return $this;
    }
    public function getPassword(): string{
        return $this->password;
    }
    public function setPassword(string $password): modelPlayer{
        $this->password = $password;
        return $this;
    }
    public function getBdd(): PDO{
        return $this->bdd;
    }
    public function setBdd(PDO $bdd): modelPlayer{
        $this->bdd = $bdd;
        return $this;
    }

    //METHOD
    public function add():void{
        try{
            $bdd = $this->getBdd()->connexion();
            $account = $this->getAccount();

            $requete = "INSERT INTO account(firstname, lastname, email, `password`)
            VALUE(?,?,?,?)";
            $req = $bdd->prepare($requete);
            $req->bindParam(1,$account[0], PDO::PARAM_STR);
            $req->bindParam(2,$account[1], PDO::PARAM_STR);
            $req->bindParam(3,$account[2], PDO::PARAM_STR);
            $req->bindParam(4,$account[3], PDO::PARAM_STR);
            $req->execute();
        }
        catch(Exception $e) {
            echo "Erreur : " . $e->getMessage();
        }
    }
}
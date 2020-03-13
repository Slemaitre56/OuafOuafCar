<?php

namespace Projet\Models;

class FrontManager extends Manager{

    public function viewFront(){
        $bdd = $this->bdd();
        // $req = $bdd->prepare("");
        $req->execute(array());
        // $req = $req->fetch()[2];
        return $req;
    }
}
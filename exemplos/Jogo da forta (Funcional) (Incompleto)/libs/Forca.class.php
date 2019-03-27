<?php

class Forca extends Connection{

	public $nome;
    public $id;
    public $dica;
    public $categoria;

    function getgamecontent(){
        $palavra = $this->select_db("*", "palavras", "ORDER BY RAND() LIMIT 1");
        $this->nome = $palavra['nome'];
        $this->dica = $palavra['dica'];
        $this->categoria = $palavra['categoria'];
            $id = uniqid().uniqid().uniqid();
            $_SESSION['id'] = $id;
        $criar_game = $this->insert_db("games", "(`palavra`, `dica`,`token`)", "'".$this->nome."', '".$this->dica."', '".$id."'");

    }

}
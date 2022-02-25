<?php
class Movie{
    private $nome;
    private $regista;
    private $sceneggiatore;
    private $linguaOriginale;
    private $attori;


    public function __construct($_nome,$_regista,$_sceneggiatore){
        $this->nome = $_nome;
        $this->regista = $_regista;
        $this->sceneggiatore = $_sceneggiatore;
        // $this->setNome($_nome);
        // $this->setRegista($_regista);
        // $this->setSceneggiatore($_sceneggiatore);
    }

    public function setLingua($_lingua){
        $this-> linguaOriginale = $_lingua;
    }

    public function getLingua(){
        return "{$this->linguaOriginale}";
    }

    public function setNome($_nome){
        $this->nome = $_nome;
    }

    public function getName(){
        return "{$this->nome}";
    }

    public function setRegista($_regista){
        $this->regista = $_regista;
    }

    public function getRegista(){
        return "{$this->regista}";
    }

    public function setSceneggiatore($_sceneggiatore){
        $this->sceneggiatore = $_sceneggiatore;
    }

    public function getSceneggiatore(){
        return "{$this->sceneggiatore}";
    }

    public function setAttore($_attore){
        $this-> attore = $_attore;
    }

    public function getAttore(){
        return "{$this->attore}";
    }

}
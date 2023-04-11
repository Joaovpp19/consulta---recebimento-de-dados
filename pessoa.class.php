<?php
//classe com o nome Pessoa
class Pessoa{
    //Objetos com visibilidade privada
    private $nome;
    private $telefone;
    private $origem;
    private $datadocontato;
    private $observacao;
    //método de captura do valor do objeto
    public function getNome(){
        return $this->nome;
    }//método de alteração de valor do objeto
    public function setNome($nome){
        $this->nome = $nome;
    }
    public function getTelefone(){
        return $this->telefone;
    }
    public function setTelefone($telefone){
        $this->telefone = $telefone;
    }

    public function getOrigem(){
        return $this->origem;
    }
    public function setOrigem($origem){
        $this->origem = $origem;
    }
    public function getDatadocontato(){
        return $this->datadocontato;
    }
    public function setDatadocontato($datadocontato){
        $this->datadocontato = $datadocontato;
    }

    public function getObservacao(){
        return $this->observacao;
    }
    public function setObservacao($observacao){
        $this->observacao = $observacao;
    }

}
?>
<?php

class Referencia{
   private $sSql;
   private $numgReferencia;
   private $numgTipo;
   private $dataCadastro;
   private $dataAtualizacao;
   private $descUrl;
   private $descObs;

   public function getNumgReferencia() {
       return $this->numgReferencia;
   }

   public function setNumgReferencia($numgReferencia) {
       $this->numgReferencia = $numgReferencia;
   }

   public function getNumgTipo() {
       return $this->numgTipo;
   }

   public function setNumgTipo($numgTipo) {
       $this->numgTipo = $numgTipo;
   }

   public function getDataCadastro() {
       return $this->dataCadastro;
   }

   public function setDataCadastro($dataCadastro) {
       $this->dataCadastro = $dataCadastro;
   }

   public function getDataAtualizacao() {
       return $this->dataAtualizacao;
   }

   public function setDataAtualizacao($dataAtualizacao) {
       $this->dataAtualizacao = $dataAtualizacao;
   }

   public function getDescUrl() {
       return $this->descUrl;
   }

   public function setDescUrl($descUrl) {
       $this->descUrl = $descUrl;
   }

   public function getDescObs() {
       return $this->descObs;
   }

   public function setDescObs($descObs) {
       $this->descObs = $descObs;
   }

   public function cadastrarReferencia(){
       $this->sSql = " INSERT INTO public.re_referencias(
                       numg_tipo, data_cadastro,
                       desc_url, desc_obs)
                       VALUES ( ";
       $this->sSql .= Funcoes::FormataNumeroGravacao($this->getNumgTipo()).",";
       $this->sSql .= "now(),";
       $this->sSql .= Funcoes::FormataStr($this->getDescUrl()). ",";
       $this->sSql .= Funcoes::FormataStr($this->getDescObs()). ");";
       try {
           Oad::conectar();
           Oad::begin();
           Oad::executar($this->sSql);
           Oad::commit();
           Oad::desconectar();
       } catch (Exception $exc) {
           Oad::rollback();
           Oad::desconectar();
           echo $exc->getMessage();
           exit;
       }
   }

   public function editarReferencia(){

   }

   public function excluirReferencia(){

   }

}
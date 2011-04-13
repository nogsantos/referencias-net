<?php

require_once("../../public/Funcoes.php");
require_once("../dataBase/Resultset.php");
require_once("../dataBase/Oad.php");
require_once("../model/Referencia.model.php");

switch ($_POST["sFuncao"]) {
    case "cadastrar":
        $oReferencia = new Referencia();
        $oReferencia->setNumgTipo($_POST["numgTipo"]);
        $oReferencia->setDescUrl($_POST["descUrl"]);
        $oReferencia->setDescObs($_POST["descObs"]);
        $oReferencia->cadastrarReferencia();
        header("Location:../viewer/index.php");
    break;

    default:header("Location:../viewer/index.php");break;
}
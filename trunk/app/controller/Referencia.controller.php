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
        header("Location:../viewer/cadReferencia.php?msg=1&numgReferencia={$oReferencia->getNumgReferencia()}");
    break;
    case "editar":
        $oReferencia = new Referencia();
        $oReferencia->setNumgReferencia($_POST["numgReferencia"]);
        $oReferencia->setNumgTipo($_POST["numgTipo"]);
        $oReferencia->setDescUrl($_POST["descUrl"]);
        $oReferencia->setDescObs($_POST["descObs"]);
        $oReferencia->editarReferencia();
        header("Location:../viewer/cadReferencia.php?msg=2&numgReferencia={$_POST["numgReferencia"]}");
    break;
    case "excluir":
        $oReferencia = new Referencia();
        $oReferencia->setNumgReferencia($_POST["numgReferencia"]);
        $oReferencia->excluirReferencia();
        header("Location:../viewer/cadReferencia.php?msg=3");
    break;

    default:header("Location:../viewer/cadReferencia.php");break;
}
<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
require_once("../../public/Funcoes.php");
require_once("../dataBase/Resultset.php");
require_once("../dataBase/Oad.php");
require_once("../model/Tipo.model.php");
require_once("../model/Referencia.model.php");

$oReferencia   = new Referencia();
$resReferencia = new Resultset();
$oTipos        = new Tipo();
$resTipos      = new Resultset();
$resTipos      = $oTipos->consultaTodosTipo();

if($numgReferencia!=""){
    $resReferencia = $oReferencia->consultarReferencia($numgReferencia);
}

?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
        <title>Fabricio Nogueira  - Cadastro das referências</title>
        <link rel="stylesheet" type="text/css" media="screen" href="../../public/css/estilo.css" />
        <script type="text/javascript" src="../../public/js/jquery-1.5.2.min.js"></script>
        <script type="text/javascript">
            $(document).ready(function(){
                $("#btCadastrar").click(function(){
                    $("#sFuncao").val("cadastrar");
                    form.submit();
                });
            });
        </script>
    </head>
    <body>
        <?include("../../public/includes/inc.menu.php");?>
        <h1>Cadastro de referências</h1>
        <form name="form" id="form" method="post" action="../controller/Referencia.controller.php">
            <input type="hidden" name="sFuncao" id="sFuncao" value="" />
            <div id="divMain">
                <table border="0" cellpadding="0" cellspacing="0" width="100%" align="center">
                    <tr>
                        <td >
                            Tipo<br />
                            <select name="numgTipo" id="numgTipo" style="width:840px;">
                                <?Funcoes::montaCombo($resTipos, "numg_tipo", "desc_tipo", $resReferencia->getValores(0, "numg_tipo"),true)?>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Url<br />
                            <input type="text" name="descUrl" id="descUrl" value="" size="102" />
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Observa&ccedil;&atilde;o<br />
                            <textarea name="descObs" id="descObs" cols="100" rows="20"></textarea>
                        </td>
                    </tr>
                    <tr>
                        <td valign="middle" align="left">
                            <input type="button" id="btCadastrar" value="Cadastrar" />
                        </td>
                    </tr>
                </table>
            </div>
        </form>
    </body>
</html>
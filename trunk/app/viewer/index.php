<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

?>
<html>
    <head>
        <title>Fabricio Nogueira</title>
    </head>
    <script type="text/javascript" src="../../public/js/jquery-1.5.2.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function(){
            $("#btCadastrar").click(function(){
                $("#sFuncao").val("cadastrar");
                form.submit();
            });
        });
    </script>
    <style type="text/css">
        *{
            margin: 10px 10px 10px 10px;
            font-family: Verdana;
            font-size: 12px;
            color: #2E7C06;
        }
        h1{
            font-family: Arial;
            font-size: 50px;
            font-weight: bold;
            text-decoration: underline;
            color: #666;
        }
        #divMain{
            border: 1px solid #696;
            text-align: center; 
            width: 100%;
            -webkit-border-radius: 8px;
            -moz-border-radius: 8px;
            border-radius: 8px;
            -webkit-box-shadow: #666 0px 2px 3px;
            -moz-box-shadow: #666 0px 2px 3px;
            box-shadow: #666 0px 2px 3px;
            background: #EEFF99;
            background: -webkit-gradient(linear, 0 0, 0 bottom, from(#EEFF99), to(#66EE33));
            background: -moz-linear-gradient(#EEFF99, #66EE33);
            background: linear-gradient(#EEFF99, #66EE33);
            -pie-background: linear-gradient(#EEFF99, #66EE33);
            behavior: url(/PIE.htc);
        }
    </style>
    <body>
        <h1>Fabricio Nogueira</h1>
        <form name="form" id="form" method="post" action="../controller/Referencia.controller.php">
            <input type="hidden" name="sFuncao" id="sFuncao" value="" />
            <div id="divMain">
                <table border="0" cellpadding="0" cellspacing="0" width="100%" align="center">
                    <tr>
                        <td >
                            Tipo de C&oacute;digo<br />
                            <select name="numgTipo" id="numgTipo" style="width:840px;">
                                <option value="1">C&oacute;digo php</option>
                                <option value="2">C&oacute;digo javaScript</option>
                                <option value="3">C&oacute;digo css</option>
                                <option value="4">C&oacute;digo html</option>
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
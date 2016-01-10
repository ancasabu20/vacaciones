<!DOCTYPE  html>
<html lang="es" ng-app="app">
    <head>
        <meta charset="UTF-8" />
        <title>Información de la actividad</title>
        <script src="http://code.jquery.com/jquery-1.9.0.js"></script>
        <script src="http://code.jquery.com/jquery-migrate-1.0.0.js"></script>
        <link rel="stylesheet type=""text/css" href="../css/bootstrap.css">
        <script type="text/javascript" src="../js/angular.js"></script>
        <script type="text/javascript" src="../js/angular_resource.js"></script>
        <script type="text/javascript" src="../js/info.js"></script>
        <script type="text/javascript" src="../js/bootstrap.js"></script>
    </head>
<body>
<table id="background-table" cellpadding="0" cellspacing="0" border="0" width="100%">
    <tbody><tr>
        <td align="center" bgcolor="#ececec">
            <table class="w640" style="margin:0 10px;" cellpadding="0" cellspacing="0" border="0" width="640">
                <tbody><tr><td class="w640" height="20" width="640"></td></tr>
                
                <tr>
                    <td class="w640" width="640">
                        <table id="top-bar" class="w640" cellpadding="0" cellspacing="0" bgcolor="#425470" border="0" width="640">
    <tbody><tr>
        <td class="w15" width="15"></td>
        <td class="w325" align="left" valign="middle" width="350">
            <table class="w325" cellpadding="0" cellspacing="0" border="0" width="350">
                <tbody><tr><td class="w325" height="8" width="350"></td></tr>
            </tbody></table>
            
            <table class="w325" cellpadding="0" cellspacing="0" border="0" width="350">
                <tbody><tr><td class="w325" height="8" width="350"></td></tr>
            </tbody></table>
        </td>
        <td class="w30" width="30"></td>
        <td class="w255" align="right" valign="middle" width="255">
            <table class="w255" cellpadding="0" cellspacing="0" border="0" width="255">
                <tbody><tr><td class="w255" height="8" width="255">Sistema de Gestión de Vacaciones</td></tr>
            </tbody></table>
            <table class="w255" cellpadding="0" cellspacing="0" border="0" width="255">
                <tbody><tr><td class="w255" height="8" width="255"></td></tr>
            </tbody></table>
        </td>
        <td class="w15" width="15"></td>
    </tr>
</tbody></table>
                        
                    </td>
                </tr>
                <tr>
                <td id="header" class="w640" align="center" bgcolor="#425470" width="640">
    
    <table class="w640" cellpadding="0" cellspacing="0" border="0" width="640">
        <tbody><tr><td class="w30" width="30"></td><td class="w580" height="30" width="580"></td><td class="w30" width="30"></td></tr>
        <tr>
            <td class="w30" width="30"></td>
            <td class="w580" width="580">
                <div id="headline" align="center">
                    <p>
                        <strong><singleline label="Title">Información de la actividad <?php echo $_GET['id'];?>
                        <input type="hidden" id="id_activity" value="<?php echo $_GET['id'];?>">
                        </singleline></strong>
                    </p>
                </div>
            </td>
            <td class="w30" width="30"></td>
        </tr>
    </tbody></table>
    
    
</td>
                </tr>
                
                <tr><td class="w640" bgcolor="#ffffff" height="30" width="640"></td></tr>
                <tr id="simple-content-row"><td class="w640" bgcolor="#ffffff" width="640">
    <table class="w640" cellpadding="0" cellspacing="0" align="left" border="0" width="640">
        <tbody><tr>
            <td class="w30" width="30"></td>
            <td class="w580" width="580">
                <repeater>
                    
                    <layout label="Text only">
                        <div class="row" >
                        <form ng-controller="appController" >
                        <table class="w580" cellpadding="0" cellspacing="0" border="0" width="580" >
                             
                            <tbody  ><tr>
                                <td class="w580" width="580" > <singleline label="Title" class="article-title" align="left">Id Proceso</singleline></td>
                                <td class="w580" height="10" width="580"  >
                                {{datosResource.processId}}     
                                </td>
                            </tr>
                            <tr>
                                <td class="w580" width="580"><singleline label="Title" class="article-title" align="left">Proceso</singleline></td>
                                 <td class="w580" height="10" width="580"  >
                                 {{datosResource.process}}         
                            </td>
                             </tr>
                             <tr>   
                                <td class="w580" width="580"><singleline label="Title" class="article-title" align="left">Id Actividad </singleline></td>
                                 <td class="w580" height="10" width="580">
                                {{datosResource.activityId }}  
                            </td> 
                            </tr>
                            <tr>    
                                <td class="w580" width="580"><singleline label="Title" class="article-title" align="left">Actividad</singleline></td>
                                 <td class="w580" height="10" width="580"  >
                                 {{datosResource.activity}}  
                            </td> 
                            </tr>
                            <tr>    
                                <td class="w580" width="580"><singleline label="Title" class="article-title" align="left">Fecha Requerimiento</singleline></td>
                                 <td class="w580" height="10" width="580"  >
                                 {{datosResource.requestDate}}   
                            </td> 
                            </tr>
                            <tr>    
                                <td class="w580" width="580"><singleline label="Title" class="article-title" align="left">Empleado</singleline></td>
                                 <td class="w580" height="10" width="580"  >
                                 {{datosResource.employee}}        
                            </td>
                            </tr>
                            <tr>    
                                <td class="w580" width="580"><singleline label="Title" class="article-title" align="left">Fecha Inicio</singleline></td>
                                 <td class="w580" height="10" width="580"  >
                                 {{datosResource.beginDate}}        
                            </td>
                            </tr>
                            <tr>    
                                <td class="w580" width="580"><singleline label="Title" class="article-title" align="left">Fecha Final</singleline></td>
                                <td class="w580" height="10" width="580"  >
                                  {{datosResource.endDate}}       
                            </td>
                            </tr>
                            <tr>    
                                <td class="w580" width="580"><singleline label="Title" class="article-title" align="left">Dias</singleline></td>
                                  <td class="w580" height="10" width="580"  >
                                 
                                  <input type="text" name="numberOfDays" ng-model="numberOfDays" readonly/>      
                            </td>
                            </tr>
                            <tr>    
                                <td class="w580" width="580"><singleline label="Title" class="article-title" align="left">Ultimas Vacaciones</singleline></td>
                                <td class="w580" height="10" width="580"  >
                                  {{datosResource.lastVacationOn}}       
                            </td>
                            </tr>
                            <tr>     
                                 <td class="w580" width="580"><singleline label="Title" class="article-title" align="left">Estado</singleline></td>
                                 <td class="w580" height="10" width="580"  >
                                 <input type="checkbox" ng-model="value1" > 
                                      
                            </td>
                            </tr>
                            <tr><td class="w580" width="580">
                                 <button ng-click='update();' style='margin-left: 63px;margin-top:10px'>Actualizar Estado</button>   
                            </td>
                                <td class="w580" height="10" width="580" align="center"><a  href="../index.html" ><img border=0 src="../img/bullet_back.png"></a>Inbox
                                </td>
                            </tr>
                            <tr>
                        </tbody></table>
                    </form>
                    </div>
                    </layout>
                </repeater>
            </td>
            <td class="w30" width="30">  </td>
        </tr>
    </tbody></table>
</td></tr>
                <tr><td class="w640" bgcolor="#ffffff" height="15" width="640"></td></tr>
                
                <tr>
                <td class="w640" width="640">
    <table id="footer" class="w640" cellpadding="0" cellspacing="0" bgcolor="#425470" border="0" width="640">
        <tbody><tr><td class="w30" width="30"></td><td class="w580 h0" height="30" width="360"></td><td class="w0" width="60"></td><td class="w0" width="160"></td><td class="w30" width="30"></td></tr>
        <tr>
            <td class="w30" width="30"></td>
            <td class="w580" valign="top" width="360">
            <span class="hide"><p id="permission-reminder" class="footer-content-left" align="left"></p></span>
            <p class="footer-content-left" align="left"><preferences lang="es-ES">Elaborado por: Andrea Sánchez</preferences> </p>
            </td>
            <td class="hide w0" width="60"></td>
            <td class="hide w0" valign="top" width="160">
            <p id="street-address" class="footer-content-right" align="right"></p>
            </td>
            <td class="w30" width="30"></td>
        </tr>
        <tr><td class="w30" width="30"></td><td class="w580 h0" height="15" width="360"></td><td class="w0" width="60"></td><td class="w0" width="160"></td><td class="w30" width="30"></td></tr>
    </tbody></table>
</td>
                </tr>
                <tr><td class="w640" height="60" width="640"></td></tr>
            </tbody></table>
        </td>
    </tr>
</tbody></table></body></html>
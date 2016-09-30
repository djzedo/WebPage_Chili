<?php


if ($_POST){
    
        $emailTo = "pedro.salzedo@chili-system.com";
        
        $emailHeader = "from: ".$_POST["email"];
        
        $emailSubject = "Nuevo Interesado desde Pagina Web";
        
        $emailContent = $_POST["firstname"];
    
        mail($emailTo,$emailSubject,$emailContent,$emailHeader);
}

?>
<!DOCTYPE html>


<html lang="es" id="fondo">

<meta charset="UTF-8">

<link rel="stylesheet" type="text/css" href="css/index.css">

  <head>
    <title>Chili System Consultants</title>
    

    <div class="imagen-move">
        <div id="borde-arriba" ></div>
        <a href="index.html"><img src="img/logomenutransparente.png"/></a>

        <!--Boton de login-->
        <a href="https://chilisystemconsultants.od1.vtiger.com/portal/index.php?module=Portal&view=Login"><button type="button" class="btn btn-info btn-lg" onclick="redireccionar()" id="btnin">Ingresar</button></a>
        <!--/Boton de login-->


    </div>
    <!--/Ventana Emergente Login-->

    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
     


    <!--Menu Principal-->
    <!--Menu Software-->
    <div id="TopMenu" class="container">
      <div class="row">
        <div class="col-sm-3">
          <input type="button" id="btn" data-toggle="collapse" data-target="#Software" value="Software" >

            <div id="Software" class="collapse out">
          <br>
          <br>
          <br>

          <a href="pixelpoint.html" class="pixelp"><p>PAR<sup>®</sup>PixelPoint<sup>®</sup>POS</p></a>

          <video autobuffer autoloop loop nocontrols autoplay width="120" height="100">
          <source src="PixelLogo.mp4" type="video/mp4">
	         </video>

          <p align="justify" class="para">No importa si está operando un restaurante de servicio rápido, casual o restaurante de cena formal, PAR<sup>®</sup>PixelPoint<sup>®</sup> POS le ofrece características robustas en una solución fácil de implementar y fácil de usar.</p>

          <hr class="hr">

          <a href="backoffice.html" class="pixelp"><p>PAR<sup>®</sup>PixelPoint<sup>®</sup>BackOffice<sup>®</sup></p></a>
          <img src="img/POSBO.jpg" width="120" height="90">
          <br>
          <br>

          <p align="justify" class="para">Diseñado para directores de empresas, de campo y de sitio, Operaciones de Información proporciona visibilidad en todas las tiendas y es una herramienta de toma de decisiones indispensables. Acceso a un panel ejecutivo, se obtiene una visibilidad clara de finanzas, análisis de ventas, marketing, inventario, y la fuerza laboral.</p>

          <!--/Menu Software-->
          </div>
    </div>

          <!--Menu Hardware-->
          <div class="col-sm-3">
            <input type="button" id="btn" data-toggle="collapse" data-target="#Hardware" value="Hardware">
                <div id="Hardware" class="collapse out">
          <br>
          <br>
          <br>

          <a href="everserv77.html" class="pixelp"><p>EverServ<sup>®</sup>7700</p></a>
          <img src="img/7700.png" width="120" height="90">
          <br>
          <br>

          <p align="justify" class="para">El diseño renovado del EverServ<sup>®</sup>7700 familia del hardware de punto de venta, se construye con la misma durabilidad con la que PAR<sup>®</sup> es conocida; para su negocio es una decisión importante que afecta el nivel de servicio y rendimiento que ofrecen a sus clientes pero en un diseño innovador y elegante.</p>

          <hr class="hr">

          <a href="everserv72.html" class="pixelp"><p>EverServ<sup>®</sup>7200</p></a>
          <img src="img/7200.png" width="120" height="90">
          <br>
          <br>

          <p align="justify" class="para">La EverServ<sup>®</sup>7200 está hecha para funcionar en ambientes ásperos que involucran trato rudo y derrame de líquidos. El contemporáneo y elegante diseño de la 7200 la convierte en la mejor opción para operadores conscientes de la importancia de la imagen. La arquitectura de siguiente generación de alto rendimiento de la 7200, soporta aplicaciones demandantes y ofrece la velocidad que usted necesita para mejorar la atención a sus clientes.</p>

          <hr class="hr">

          <a href="everserv500.html" class="pixelp"><p>EverServ<sup>®</sup>500</p></a>
          <img src="img/500.png" width="120" height="90">
          <br>
          <br>

          <p align="justify" class="para">El diseño ofrece una resistente carcasa de alto impacto que se construye para soportar duras condiciones en restaurantes y locales comerciales con un funcionamiento continuo. El diseño de la EverServ<sup>®</sup>500 sin ventilador es silencioso, ofrece un bajo consumo de energía y minimiza el mantenimiento.</p>

          <hr class="hr">

          <a href="tablet10.html" class="pixelp"><p> PAR<sup>®</sup>Tablet 8"</p></a>
          <img src="img/Tablet10.jpg" width="120" height="90">
          <br>
          <br>

          <p align="justify" class="para">Ya sea que usted esté buscando ampliar su solución de punto de venta, mejorar la experiencia del cliente o mejorar la eficiencia de sus operaciones, la tablet 10 de PAR<sup>®</sup> es el ajuste ideal. La tablet es el equilibrio perfecto entre tamaño, fiabilidad y facilidad que se celebra en una mano.</p>

          </div>
        </div>
        <!--/Menu Hardware-->

        <!--Menu Servicios-->
        <div class="col-sm-2">
          <input type="button" id="btn" data-toggle="collapse" data-target="#Servicios" value="Servicios">
          <div id="Servicios" class="collapse out">
          <br>
          <br>
          <br>

          <img src="img/Services4.png" >
          <br>
          <br>
              <p class="pixelp">Entrenamiento:</p>

          <p align="justify" class="para">Confíe en el personal de Chili System, el cual está certificado para brindar capacitación e implementar los módulos del software POS para que usted pueda aprovechar al máximo las ventajas y beneficios de PAR<sup>®</sup>PixelPoint<sup>®</sup>POS.</p>

        <hr class="hr">

          <p class="pixelp">Modelo de Administración:</p>

          <p align="justify" class="para">Usted puede dejar la administración del Software PAR<sup>®</sup>PixelPoint<sup>®</sup>POS en manos expertas con el objetivo de no incurrir en gastos adicionales de personal e infraestructura, ya que Chili System provee integralmente este servicio.</p>

          <hr class="hr">

          <p class="pixelp">Contratos:</p>

          <p align="justify" class="para">Tenga la tranquilidad de tener la operación de su negocio cubierto a través de los beneficios que contienen nuestros diferentes contratos para que el funcionamiento de su negocio no pare de crecer.</p></div>

        </div>
        <!--/Menu Servicios-->
        <!--/Menu Compañía-->
        <div class="col-sm-2">
          <a href="compania.html"><input type="button" id="btn" value="Compañía"></a>
        </div>
         <!--/Menu Compañia-->
         <!--Menu Contacto-->
        <div class="col-sm-2">
          <a href="contacto.php"><input type="button" id="btn" value="Contacto"></a>
        </div>
        <!--Menu Contacto-->

      </div>

    </div>
    <!--/Menu Principal-->

  </head>

  <body>
      <div id="fondointermedio"></div>
      <div class="row" style="min-width: 100%;">
      <div class="col-sm-6">
      <img src="img/contactenos3.png">
      
      </div>
      <div class="col-sm-6 center-block">
          <br>
          <br>
          <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
          <form id="__vtigerWebForm" name="Interesados" action="https://chilisystemconsultants.od1.vtiger.com/modules/Webforms/capture.php" method="post" accept-charset="utf-8" enctype="multipart/form-data"><input type="hidden" name="__vtrftk" value="sid:d35b86368c1a74b849e903fe8bb77e32a876eb8d,1475254379">
          <input type="hidden" name="publicid" value="cbb0cb1879336884844cec28138ea9a4">
          <input type="hidden" name="urlencodeenable" value="1">
          <input type="hidden" name="name" value="Interesados">
          <table>
          <tbody>
          <div class="form-group center-block" style="font-family: verdana; text-align: center; align-content: center; display: inline-block; padding-left: 110px;" id="label-form">
          <label>Nombre:</label>
         
          <input type="text" name="firstname" data-label="" value="" required="" style="width: 442px;" placeholder="Escribe tu nombre" id="NombreForm">                                    
          </div>
          <div class="form-group center-block" style="font-family: verdana; text-align: center; align-content: center; display: inline-block; padding-left: 110px;">
          <label>Apellido:</label>
       
          <input type="text" name="lastname" data-label="" value="" required="" style="width: 442px;" placeholder="Escribe tu apellido">
          </div>
          <div class="form-group center-block" style="font-family: verdana; text-align: center; align-content: center; display: inline-block; padding-left: 110px;">
          <label>Correo electrónico:</label>
          <br>
          <input type="email" name="email" data-label="" value="" required="" style="width: 442px;" placeholder="Escribe tu correo electrónico">
          </div>
          <div class="form-group center-block" style="font-family: verdana; text-align: center; align-content: center; display: inline-block; padding-left: 110px;">
          <label>Telefono:</label>
          <br>
          <input type="text" name="phone" data-label="" value="" required="" style="width: 442px;" placeholder="Escribe tu telefono">
          </div>
          <select name="leadsource" data-label="leadsource" required="" hidden="">
          <option value="">Select Value</option>
          <option value="Acercamiento en Frío">Acercamiento en Frío</option>
          <option value="Cliente Existente">Cliente Existente</option>
          <option value="Empleado">Empleado</option>
          <option value="Feria">Feria</option>
          <option value="Sitio Web" selected="">Sitio Web</option>
          <option value="Referido">Referido</option>
          <option value="Otro">Otro</option>
          <option value="Facebook">Facebook</option>
          <option value="Twitter">Twitter</option>
          </select>
          <div class="form-group center-block" style="font-family: verdana; text-align: center; align-content: center; display: inline-block; padding-left: 110px;">
          <label>Mensaje</label>
          <br>
          <textarea name="description" required="" style="width: 442px; height: 80px;" placeholder="Escribe tu mensaje"></textarea>
          </div>
          </tbody></table>
          <div class="form-group center-block" style="font-family: verdana; text-align: center; align-content: center; display: inline-block; padding-left: 110px;">
          <script src="https://www.google.com/recaptcha/api.js"></script><div class="g-recaptcha" data-sitekey="6LcmdSATAAAAAGWw734vGo0AXQwuxJS7RmDZA_Fe"></div>
          <input type="hidden" id="captchaUrl" value="https://chilisystemconsultants.od1.vtiger.com/modules/Settings/Webforms/actions/ValidateCaptcha.php">
          <input type="hidden" id="recaptcha_validation_value" name="recaptcha_validation_value">
          </div>
          <input type="submit" value="Enviar" id="vtigerFormSubmitBtn" class="btncon center-block">
          </form>
          
          
          <script  type="text/javascript">window.onload = function() { var N=navigator.appName, ua=navigator.userAgent, tem;var M=ua.match(/(opera|chrome|safari|firefox|msie)\/?\s*(\.?\d+(\.\d+)*)/i);if(M && (tem= ua.match(/version\/([\.\d]+)/i))!= null) M[2]= tem[1];M=M? [M[1], M[2]]: [N, navigator.appVersion, "-?"];var browserName = M[0];var form = document.getElementById("__vtigerWebForm"), inputs = form.elements; form.onsubmit = function() { var required = [], att, val; for (var i = 0; i < inputs.length; i++) { att = inputs[i].getAttribute("required"); val = inputs[i].value; type = inputs[i].type; if(type == "email") {if(val != "") {var elemLabel = inputs[i].getAttribute("label");var emailFilter = /^[_/a-zA-Z0-9]+([!"#$%&()*+,./:;<=>?\^_`{|}~-]?[a-zA-Z0-9/_/-])*@[a-zA-Z0-9]+([\_\-\.]?[a-zA-Z0-9]+)*\.([\-\_]?[a-zA-Z0-9])+(\.?[a-zA-Z0-9]+)?$/;var illegalChars= /[\(\)\<\>\,\;\:\"\[\]]/ ;if (!emailFilter.test(val)) {alert("For "+ elemLabel +" field please enter valid email address"); return false;} else if (val.match(illegalChars)) {alert(elemLabel +" field contains illegal characters");return false;}}}if (att != null) { if (val.replace(/^\s+|\s+$/g, "") == "") { required.push(inputs[i].getAttribute("label")); } } } if (required.length > 0) { alert("The following fields are required: " + required.join()); return false; } var numberTypeInputs = document.querySelectorAll("input[type=number]");for (var i = 0; i < numberTypeInputs.length; i++) { val = numberTypeInputs[i].value;var elemLabel = numberTypeInputs[i].getAttribute("label");var elemDataType = numberTypeInputs[i].getAttribute("datatype");if(val != "") {if(elemDataType == "double") {var numRegex = /^[+-]?\d+(\.\d+)?$/;}else{var numRegex = /^[+-]?\d+$/;}if (!numRegex.test(val)) {alert("For "+ elemLabel +" field please enter valid number"); return false;}}}var dateTypeInputs = document.querySelectorAll("input[type=date]");for (var i = 0; i < dateTypeInputs.length; i++) {dateVal = dateTypeInputs[i].value;var elemLabel = dateTypeInputs[i].getAttribute("label");if(dateVal != "") {var dateRegex = /^[1-9][0-9]{3}-(0[1-9]|1[0-2]|[1-9]{1})-(0[1-9]|[1-2][0-9]|3[0-1]|[1-9]{1})$/;if(!dateRegex.test(dateVal)) {alert("For "+ elemLabel +" field please enter valid date in required format"); return false;}}}var inputElems = document.getElementsByTagName("input");var totalFileSize = 0;for(var i = 0; i < inputElems.length; i++) {if(inputElems[i].type.toLowerCase() === "file") {var file = inputElems[i].files[0];if(typeof file !== "undefined") {var totalFileSize = totalFileSize + file.size;}}}if(totalFileSize > 52428800) {alert("Maximum allowed file size including all files is 50MB.");return false;}var inputElem = document.querySelectorAll("input[type=file]");var fileSize = 0;for(var i = 0; i < inputElem.length; i++) {if(inputElem[i].type.toLowerCase() ===  "file") {if(inputElem[i].hasAttribute("selectedTypeImage")) {var imageFile = inputElem[i].files[0];var fileSize = imageFile.size;}}if(fileSize > 5242880) {alert("Maximum allowed image size is 5MB.");return false;}}document.getElementById("vtigerFormSubmitBtn").disabled = true;var recaptchaValidationValue = document.getElementById("recaptcha_validation_value").value;if(recaptchaValidationValue != true) {var recaptchaResponse = document.getElementsByName("g-recaptcha-response")[0].value;var validationUrl = document.getElementById("captchaUrl").value+"?recaptcha_response="+recaptchaResponse+"&current_url="+window.location.href+"&callback=captchaCallback";jsonp.fetch(validationUrl);return false;}};};var jsonp = {callbackCounter : 0,fetch : function(url) {url = url+"&callId="+this.callbackCounter;var scriptTag = document.createElement("SCRIPT");scriptTag.src = url;scriptTag.async = true;scriptTag.id = "captchaCallback_"+this.callbackCounter;scriptTag.type = "text/javascript";document.getElementsByTagName("HEAD")[0].appendChild(scriptTag);this.callbackCounter++;}};function captchaCallback(data) {if(data.result.success == true) {document.getElementById("recaptcha_validation_value").value = true;var form = document.getElementById("__vtigerWebForm");form.submit();} else {document.getElementById("vtigerFormSubmitBtn").disabled = false;grecaptcha.reset();alert("Captcha not verified. Please verify captcha.");}var element = document.getElementById("captchaCallback_"+data.result.callId);element.parentNode.removeChild(element);}
          
          document.getElementById("#NombreForm").hover(function(){
              document.getElementById("#label-form").css("background-color", "yellow");
          });
          
          </script>
          
      <br>
      </div>  
      </div>
      <p align="justify" id="textocont">CONTÁCTENOS</p>
      <p align="justify" id="textocon">01.8000.423.606</p>
      <p align="justify" id="textocon">+57.4.4442510</p>
            
      
  </body>
    <footer class="footer">
      <p id="f1">Chili System Consultants S.A.S</p>
     <p>Con su EMPRESA desde el inicio, en el<br> éxito y siempre</p>

    </footer>
</html>

var form1Data = "";
var form2Data = "";
var form3Data = "";


var maillead = "";

var nomLead2 = "";
var apeLead2 = "";
var telLead2 = "";
var mailLead2= "";

var nombrePotential = "";
var apPotential = "";
var correoPotential = "";
var phonePotential = "";
var rolPotential = "";
var workersPotential = "";
var actualPotential = "";
var schedulePotential = "";
var punt4Deal = 0;
var puntuacionDeal = 0;
function writeLeadsXML(){
	var form = document.querySelector(".Form-Demo");
  	var datos = new FormData();
	var sol = new XMLHttpRequest();
	maillead = form.email.value;
	datos.append("firstName", form.nombre.value);
	datos.append("lastName", form.apellido.value);
	datos.append("email", form.email.value);
	datos.append("phone", form.phone.value);
	datos.append("form", "demo");
	sol.addEventListener("load", responseLead1, false);
	sol.open("POST", "php/modelo.php", true);
	sol.send(datos);
}
function responseLead1(e){
	/*alert(e.target.responseText);
	if (e.target.responseText == "true")
		window.location.href = "graciasdemo.html";
	else
		alert("Error en la inserción "+e.target.responseText);*/
	setCookie("entro", "entro",.1);
	setCookie("email", maillead,.1);
	window.location.href = "GraciasDemo.html";
	//alert(e.target.responseText);
}

function leadsValidation(){
	var nom = document.getElementById('nombre').value;
    var res = nom.split("");
    var bandera=false;
    var salida="";
    for (var i = 0; i < res.length; i++) {
		if(!isNaN(res[i]) && res[i]!=' '){
			bandera=true;
		}
    }

    if(bandera){
		salida+="Verifique el nombre, no debe contener numeros";
		nombre.setAttribute("style", "background-color: #F2F5A9;");
    }

    var ap = document.getElementById('apellido').value;
    var ap2 = ap.replace(" ","");
    var res2 = ap2.split("");
    var bandera1=false;
    var salida1="";
    for (var i = 0; i < res2.length; i++) {
		if(!isNaN(res2[i])){
			bandera1=true;
		}
    }

	if(bandera1){
		salida+="<br>Verifique el apellido, no debe contener numeros";
		apellido.setAttribute("style", "background-color: #F2F5A9;");
	}

    var tel=document.getElementById("phone").value;
    var res=tel.split("");
    var bandera=false;
    for (var i = 0; i < res.length; i++) {
		if(isNaN(res[i])){
			if(res[i]!="-"){
				bandera=true;
			}
		}
    }
    if(bandera){
  		salida+="<br>Formato de telefono solo puede contener numeros y guines medios(-)";
  		phone.setAttribute("style", "background-color: #F2F5A9;");
    }

    if(salida.length==0){
    	var button = document.getElementById("submit1");
    	button.setAttribute("disabled", "true");
    	button.setAttribute("style", "cursor:not-allowed");

    	var formulario = document.getElementById("formulario");
    	formulario.setAttribute("style", "cursor:not-allowed");
    	var formulario = document.getElementById("nombre");
    	formulario.setAttribute("style", "cursor:not-allowed");
    	var formulario = document.getElementById("apellido");
    	formulario.setAttribute("style", "cursor:not-allowed");
    	var formulario = document.getElementById("phone");
    	formulario.setAttribute("style", "cursor:not-allowed");
    	var formulario = document.getElementById("email");
    	formulario.setAttribute("style", "cursor:not-allowed");
    	
    	
    	var email=document.getElementById("email").value;
	    var datos = new FormData();
		var sol = new XMLHttpRequest();
		datos.append("email", email);
		datos.append("form", "checkEmail");
		sol.addEventListener("load", responseCheck, false);
		sol.open("POST", "php/modelo.php", true);
		sol.send(datos);
    }else{
  		document.getElementById("txtMensaje").innerHTML=salida;
 		$(document).ready(function(){
		  	$("mensaje").fadeIn(1000);
			setTimeout("hide()",13000);
		});
    }
}
function responseCheck(e){
	var res = e.target.responseText;
	var email=document.getElementById("email");

	var salida = "<br>Este email ya tiene un registro en ANOVA";
	if(parseInt(res) > 0){
		var button = document.getElementById("submit1");
    	button.removeAttribute("disabled", "true");
    	button.setAttribute("style", "cursor:pointer");

    	var formulario = document.getElementById("formulario");
    	formulario.setAttribute("style", "cursor:default");
    	
    	email.setAttribute("style", "background-color: #F2F5A9;");
		document.getElementById("txtMensaje").innerHTML=salida;
 		$(document).ready(function(){
		  	$("mensaje").fadeIn(1000);
			setTimeout("hide()",13000);
		});
	}else{
      	writeLeadsXML();
	}
}
function responseCheck2(e){
	var res = e.target.responseText;
	var email=document.getElementById("email");

	var salida = "<br>Este email ya tiene un registro en ANOVA";
	var button = document.getElementById("submit1");
	button.removeAttribute("disabled", "true");
	button.setAttribute("style", "cursor:pointer");

	var formulario = document.getElementById("formulario");
	formulario.setAttribute("style", "cursor:default");
	if(parseInt(res) > 0){
		nombrePotential = "";
		email.setAttribute("style", "background-color: #F2F5A9;");
		document.getElementById("txtMensaje").innerHTML=salida;
 		$(document).ready(function(){
		  	$("mensaje").fadeIn(1000);
			setTimeout("hide()",13000);
		});
	}else{
    	var div1 = document.getElementById("form1");
    	div1.setAttribute("style", "visibility: hidden; display: none");
    	
    	var div2 = document.getElementById("form2");
    	div2.setAttribute("style", "visibility: visible; display: inline");

    	var page1 = document.getElementById("page1");
    	var page2 = document.getElementById("page2");
    	var page3 = document.getElementById("page3");

    	page1.setAttribute("style", "");
    	page2.setAttribute("style", "background-color: #77B7E6; color: white;");
    	page3.setAttribute("style", "");
	}
}
function responseCheck3(e){

	var res = e.target.responseText;
	var email=document.getElementById("email");

	var salida = "<br>Este email ya tiene un registro en ANOVA";
	var button = document.getElementById("submit1");
	button.removeAttribute("disabled", "true");
	button.setAttribute("style", "cursor:pointer");

	var formulario = document.getElementById("formulario");
	formulario.setAttribute("style", "cursor:default");
	if(parseInt(res) > 0){
		nomLead2 = "";
		email.setAttribute("style", "background-color: #F2F5A9;");
		document.getElementById("txtMensaje").innerHTML=salida;
 		$(document).ready(function(){
		  	$("mensaje").fadeIn(1000);
			setTimeout("hide()",13000);
		});
	}else{
    	var div1 = document.getElementById("form1");
    	div1.setAttribute("style", "visibility: hidden; display: none");
    	
    	var div2 = document.getElementById("form2");
    	div2.setAttribute("style", "visibility: visible; display: inline");

    	var page1 = document.getElementById("page1");
    	var page2 = document.getElementById("page2");

    	page1.setAttribute("style", "");
    	page2.setAttribute("style", "background-color: #77B7E6; color: white;");
	}
}

function potentialsValidation1(){
    var nom = document.getElementById('nombre').value;
    var res = nom.split("");
    var bandera=false;
    var salida="";
    for (var i = 0; i < res.length; i++) {
		if(!isNaN(res[i]) && res[i]!=' '){
			bandera=true;
		}
    }

    if(bandera){
		salida+="Verifique el nombre, no debe contener numeros";
		nombre.setAttribute("style", "background-color: #F2F5A9;");
    }

    var ap = document.getElementById('apellido').value;
    var res2 = ap.split("");
    var bandera1=false;
    var salida1="";
    for (var i = 0; i < res2.length; i++) {
		if(!isNaN(res2[i]) && res[i]!=' '){
			bandera1=true;
		}
    }

	if(bandera1){
		salida+="<br>Verifique el apellido, no debe contener numeros";
		apellido.setAttribute("style", "background-color: #F2F5A9;");
	}

    var tel=document.getElementById("phone").value;
    var res=tel.split("");
    var bandera=false;
    for (var i = 0; i < res.length; i++) {
		if(isNaN(res[i])){
			if(res[i]!="-"){
				bandera=true;
			}
		}
    }
    if(bandera){
  		salida+="<br>Formato de telefono solo puede contener numeros y guines medios(-)";
  		phone.setAttribute("style", "background-color: #F2F5A9;");
    }


    if(salida.length==0){
    	var email = document.getElementById("email").value;

		nombrePotential = nom;
		apPotential = ap;
		phonePotential = tel;
		correoPotential = email;

    	var button = document.getElementById("submit1");
    	button.setAttribute("disabled", "true");
    	button.setAttribute("style", "cursor:not-allowed");

    	var formulario = document.getElementById("formulario");
    	formulario.setAttribute("style", "cursor:wait");
    	
	    var datos = new FormData();
		var sol = new XMLHttpRequest();
		datos.append("email", email);
		datos.append("form", "checkEmail");
		sol.addEventListener("load", responseCheck2, false);
		sol.open("POST", "php/modelo.php", true);
		sol.send(datos);

    }else{
  		document.getElementById("txtMensaje").innerHTML=salida;
 		$(document).ready(function(){
		  	$("mensaje").fadeIn(1000);
			setTimeout("hide()",13000);
		});
    }
}

function potentialsValidation2(){
	var form = document.querySelector("#segundoF");
	rolPotential = form.rol.value;
	workersPotential = form.workers.value;
	actualPotential = form.actualSystem.value;
	schedulePotential = form.schedule.value;

	var p1 = form.rol.selectedIndex;
  	var p2 = form.rol.options;
	var p3 = form.workers.selectedIndex;
  	var p4 = form.workers.options;
	var p5 = form.actualSystem.selectedIndex;
  	var p6 = form.actualSystem.options;
	var p7 = form.schedule.selectedIndex;
  	var p8 = form.schedule.options;

  	var punt1 = p2[p1].index;
  	var punt2 = p4[p3].index;
  	var punt3 = p6[p5].index;
  	punt4Deal = p8[p7].index;

	puntuacionDeal = punt1+punt2+punt3+punt4Deal;

	var div2 = document.getElementById("form2");
	div2.setAttribute("style", "visibility: hidden; display: none");
	
	var div3 = document.getElementById("form3");
	div3.setAttribute("style", "visibility: visible; display: inline");

	var page1 = document.getElementById("page1");
	var page2 = document.getElementById("page2");
	var page3 = document.getElementById("page3");

	page1.setAttribute("style", "");
	page2.setAttribute("style", "");
	page3.setAttribute("style", "background-color: #77B7E6; color: white;");
}

function potentialsValidation3(){
	var company = document.getElementById('company');
    var res = company.value.split("");
    var bandera=false;
    var salida="";
    for (var i = 0; i < res.length; i++) {
		if(!isNaN(res[i]) && res[i]!=' '){
			bandera=true;
		}
    }
    if(bandera){
		//salida+="Verifique el nombre, no debe contener numeros";
		//company.setAttribute("style", "background-color: #F2F5A9;");
    }

    var hoy = new Date();
	var dd = hoy.getDate();
	var mm = hoy.getMonth()+1;
	var yyyy = hoy.getFullYear();
	if(dd<10) {
	    dd='0'+dd
	} 
	if(mm<10) {
	    mm='0'+mm
	} 
	hoy = mm+'/'+dd+'/'+yyyy;

	if(salida.length==0){
		var form = document.querySelector("#tercerF");
		//alert(form3Data);

    	var button = document.getElementById("submit2");
    	button.setAttribute("disabled", "true");
    	button.setAttribute("style", "cursor:not-allowed");

    	var formulario = document.getElementById("tercerF");
    	formulario.setAttribute("style", "cursor:wait");

		var datos = new FormData();
		var sol = new XMLHttpRequest();
		datos.append("firstName", nombrePotential);
		datos.append("lastName", apPotential);
		datos.append("email", correoPotential);
		datos.append("phone", phonePotential);
		datos.append("rol", rolPotential);
		datos.append("workers", workersPotential);
		datos.append("actualSystem", actualPotential);
		datos.append("schedule", schedulePotential);
		datos.append("company", form.company.value);
		datos.append("tables", form.mesas.value);
		datos.append("meseros", form.meseros.value);
		datos.append("printers", form.impresoras.value);
		datos.append("closingDate", punt4Deal);
		datos.append("puntuacion", puntuacionDeal);
		datos.append("form", "deal");
		sol.addEventListener("load", responseDeal, false);
		sol.open("POST", "php/modelo.php", true);
		sol.send(datos);
	}else{
		document.getElementById("txtMensaje2").innerHTML=salida;
 		$(document).ready(function(){
		  	$("mensaje2").fadeIn(1000);
			setTimeout("hide()",13000);
		});
	}	
}
function responseDeal(e){
	//alert(e.target.responseText);
	setCookie("entro", "entro",0.1);
	setCookie("firstName",nombrePotential,.1);
	setCookie("lastName",apPotential,.1);
	
	window.location.href = "GraciasCotizacion.html";
}

function leads2Validation1(){
	var nom = document.getElementById('nombre').value;
    var res = nom.split("");
    var bandera=false;
    var salida="";
    for (var i = 0; i < res.length; i++) {
		if(!isNaN(res[i]) && res[i]!=' '){
			bandera=true;
		}
    }

    if(bandera){
		salida+="Verifique el nombre, no debe contener numeros";
		nombre.setAttribute("style", "background-color: #F2F5A9;");
    }

    var ap = document.getElementById('apellido').value;
    var res2 = ap.split("");
    var bandera1=false;
    for (var i = 0; i < res2.length; i++) {
		if(!isNaN(res2[i]) && res2[i]!=' '){
			bandera1=true;
		}
    }

	if(bandera1){
		salida+="<br>Verifique el apellido, no debe contener numeros";
		apellido.setAttribute("style", "background-color: #F2F5A9;");
	}

    var tel=document.getElementById("phone").value;
    var res=tel.split("");
    var bandera=false;
    for (var i = 0; i < res.length; i++) {
		if(isNaN(res[i])){
			if(res[i]!="-"){
				bandera=true;
			}
		}
    }
    if(bandera){
  		salida+="<br>Formato de telefono solo puede contener numeros y guines medios(-)";
  		phone.setAttribute("style", "background-color: #F2F5A9;");
    }
    if(salida.length==0){
      	var email = document.getElementById("email").value;
    	nomLead2 = nom;
    	apeLead2 = ap;
    	telLead2 = tel;
    	mailLead2 = email;

    	var button = document.getElementById("submit1");
    	button.setAttribute("disabled", "true");
    	button.setAttribute("style", "cursor:not-allowed");

    	var formulario = document.getElementById("formulario");
    	formulario.setAttribute("style", "cursor:wait");
    	
	    var datos = new FormData();
		var sol = new XMLHttpRequest();
		datos.append("email", email);
		datos.append("form", "checkEmail");
		sol.addEventListener("load", responseCheck3, false);
		sol.open("POST", "php/modelo.php", true);
		sol.send(datos);

    }else{
  		document.getElementById("txtMensaje").innerHTML=salida;
 		$(document).ready(function(){
		  	$("mensaje").fadeIn(1000);
			setTimeout("hide()",13000);
		});
    }
}
function mensaje(){
	alert("mensaje");
}

function leads2Validation2(){
	var form = document.querySelector("#segundoF");
  	var datos = new FormData();
	var sol = new XMLHttpRequest();

	var button = document.getElementById("submit1");
	button.setAttribute("disabled", "true");
	button.setAttribute("style", "cursor:not-allowed");

	var formulario = document.getElementById("formulario");
	formulario.setAttribute("style", "cursor:wait");

	var p1 = form.rol.selectedIndex;
  	var p2 = form.rol.options;
	var p3 = form.workers.selectedIndex;
  	var p4 = form.workers.options;
	var p5 = form.actualSystem.selectedIndex;
  	var p6 = form.actualSystem.options;
	var p7 = form.schedule.selectedIndex;
  	var p8 = form.schedule.options;

  	var punt1 = p2[p1].index;
  	var punt2 = p4[p3].index;
  	var punt3 = p6[p5].index;
  	var punt4 = p8[p7].index;

  	//alert(punt1+ " "+punt2+" "+punt3+" "+punt4);
  	var puntuacion = punt1+punt2+punt3+punt4;

	datos.append("firstName", nomLead2);
	datos.append("lastName", apeLead2);
	datos.append("email", mailLead2);
	datos.append("phone", telLead2);
	datos.append("rol", form.rol.value);
	datos.append("workers", form.workers.value);
	datos.append("actualSystem", form.actualSystem.value);
	datos.append("schedule", form.schedule.value);
	datos.append("puntuacion", 90);
	datos.append("closingDate", punt4);
	datos.append("form", "asesoria");
	sol.addEventListener("load", responseLead2, false);
	sol.open("POST", "php/modelo.php", true);
	sol.send(datos);
}
function responseLead2(e){
	//alert(e.target.responseText);
	setCookie("entro", "entro",.1);
	setCookie("firstName",nomLead2,.1);
	setCookie("lastName",apeLead2,.1);
	
	window.location.href = "GraciasAsesoria.html";
}

function cotizacionBack(pos){
	if(pos==1){
		var div1 = document.getElementById("form1");
    	div1.setAttribute("style", "visibility: visible; display: inline");

		var div2 = document.getElementById("form2");
		div2.setAttribute("style", "visibility: hidden; display: none");
		
		var div3 = document.getElementById("form3");
		div3.setAttribute("style", "visibility: hidden; display: none");

		var page1 = document.getElementById("page1");
		var page2 = document.getElementById("page2");
		var page3 = document.getElementById("page3");

		page1.setAttribute("style", "background-color: #77B7E6; color: white;");
		page2.setAttribute("style", "");
		page3.setAttribute("style", "");
	}
	if(pos==2){
		if(nombrePotential != ""){
			//alert(nombrePotential);
			var div1 = document.getElementById("form1");
	    	div1.setAttribute("style", "visibility: hidden; display: none");

			var div2 = document.getElementById("form2");
			div2.setAttribute("style", "visibility: visible; display: inline");
			
			var div3 = document.getElementById("form3");
			div3.setAttribute("style", "visibility: hidden; display: none");

			var page1 = document.getElementById("page1");
			var page2 = document.getElementById("page2");
			var page3 = document.getElementById("page3");

			page1.setAttribute("style", "");
			page2.setAttribute("style", "background-color: #77B7E6; color: white;");
			page3.setAttribute("style", "");
		}
	}
	if(pos == 3){
		if(schedulePotential != ""){
			var div1 = document.getElementById("form1");
	    	div1.setAttribute("style", "visibility: hidden; display: none");

			var div2 = document.getElementById("form2");
			div2.setAttribute("style", "visibility: hidden; display: none");
			
			var div3 = document.getElementById("form3");
			div3.setAttribute("style", "visibility: visible; display: inline");

			var page1 = document.getElementById("page1");
			var page2 = document.getElementById("page2");
			var page3 = document.getElementById("page3");

			page1.setAttribute("style", "");
			page2.setAttribute("style", "");
			page3.setAttribute("style", "background-color: #77B7E6; color: white;");
		}
	}
}

function asesoriaBack(pos){
	if(pos==1){
		var div1 = document.getElementById("form1");
    	div1.setAttribute("style", "visibility: visible; display: inline");

		var div2 = document.getElementById("form2");
		div2.setAttribute("style", "visibility: hidden; display: none");

		var page1 = document.getElementById("page1");
		var page2 = document.getElementById("page2");

		page1.setAttribute("style", "background-color: #77B7E6; color: white;");
		page2.setAttribute("style", "");
	}
	if(pos==2){
		if(nomLead2 != ""){
			var div1 = document.getElementById("form1");
	    	div1.setAttribute("style", "visibility: hidden; display: none");
			var div2 = document.getElementById("form2");
			div2.setAttribute("style", "visibility: visible; display: inline");

			var page1 = document.getElementById("page1");
			var page2 = document.getElementById("page2");

			page1.setAttribute("style", "");
			page2.setAttribute("style", "background-color: #77B7E6; color: white;");
		}
	}
}

function load(opc) {
	switch(opc){
		case 1:
			document.getElementById('nameCot').innerHTML="Agradecemos tu interés "+getCookie("firstName")+" "+getCookie("lastName");
			setCookie("entro", "",0);
			break;
		case 2:
			document.getElementById('nameAce').innerHTML= "Gracias por agendar una cita <b>"+getCookie("firstName")+" "+getCookie("lastName")+"</b>";
			setCookie("entro", "",0);
			break;
		case 3:
			
			document.getElementById('nameDemo').innerHTML= "Hemos enviado un correo a <b>"+getCookie("email")+"</b>.";
			setCookie("entro", "",0);
				
			break;
	}



}

function setCookie(cname, cvalue, exdays) {
    var d = new Date();
    d.setTime(d.getTime() + (exdays*24*60*60*1000));
    var expires = "expires="+ d.toUTCString();
    document.cookie = cname + "=" + cvalue + ";" + expires;
}

function getCookie(cname) {
    var name = cname + "=";
    var decodedCookie = decodeURIComponent(document.cookie);
    var ca = decodedCookie.split(';');
    for(var i = 0; i <ca.length; i++) {
        var c = ca[i];
        while (c.charAt(0) == ' ') {
            c = c.substring(1);
        }
        if (c.indexOf(name) == 0) {
            return c.substring(name.length, c.length);
        }
    }
    return "";
}
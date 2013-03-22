function revisarObli(elemento){
	if(elemento.value==""){
		elemento.className='error';
		} else {
			elemento.className='';
			}
	}

function revisarNumerico(elemento){
	if(elemento.value!=""){
		var dato=elemento.value;
		if(isNaN(dato)){
			elemento.className='error';
			} else {
				elemento.className='';	
				}
		}
	}

function revisarLongitud(elemento, minimo, maximo){
	if(elemento.value!=''){
		var dato=elemento.value;
		if(dato.length<minimo || dato.length>maximo){
			elemento.className='error';	
		} else {
			elemento.className='';	
		}
	}
}

function revisarEmail(elemento){
	if(elemento.value!=""){
		var dato=elemento.value;
		var expresion=/^([a-zA-Z0-9_.-])+@(([a-zA-Z0-9-])+.)+([a-zA-Z0-9]{2,4})+$/;
		if(!expresion.test(dato)){
			elemento.className='error';	
		} else {
			elemento.className='';	
		}	
	}
}

function validar(){
	var estaTodoOK=true;
	if(document.getElementById("hmatricula_usuario").value!=""){
		if(isNaN(document.getElementById("hmatricula_usuario").value)){
			estaTodoOK=false;
			document.getElementById("hmatricula_usuario").className='error';	
		}
		document.getElementById("hmatricula_usuario").className='error';
	}
	if(document.getElementById("hdocumento_usuario").value!=""){		
		if(isNaN(document.getElementById("hdocumento_usuario").value)){
			estaTodoOK=false;
			document.getElementById("hdocumento_usuario").className='error';	
		}
		document.getElementById("hdocumento_usuario").className='error';
	}
	if(document.getElementById("hnombre_usuario").value.length<2){
		estaTodoOK=false;
		document.getElementById("hnombre_usuario").className='error';	
	}
	if(document.getElementById("hapellido_usuario").value.length<2){
		estaTodoOK=false;	
	}
	
	if(document.getElementById("hmail_usuario").value.length<8){
		estaTodoOK=false;
	}
	
	if(document.getElementById("hcelular_usuario").value!=""){
		if(isNaN(document.getElementById("hcelular_usuario").value))
		{
			estaTodoOK=false;
		}
	}
	
	if(!estaTodoOK){
		alert("Algunos datos tienen errores, por favor verifique el formulario");	
	}
	return estaTodoOK;
}


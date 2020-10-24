function auditoria(){
 	var suma_Pares = 0;
 	var suma_Impares = 0;
 	var x = 0;
 for(x = 1; x < 11; x++){
 	if(x == 1){
 		var resultado = sumaPuntos("resultados");
 		if(resultado % 2 ){
 			suma_Impares = parseFloat(suma_Impares) + parseFloat(resultado);
 		}else{
 			suma_Pares = parseFloat(suma_Pares) + parseFloat(resultado);
 		}
 	}
 	else{
 		var resultado = sumaPuntos("resultados" + x);
 		if(resultado % 2 ){
 			suma_Impares = parseFloat(suma_Impares) + parseFloat(resultado);
 		}else{
 			suma_Pares = parseFloat(suma_Pares) + parseFloat(resultado);
 		}
 	}
 }
 alert("suma de pares " + suma_Pares);
 alert("suma de impares " + suma_Impares);
}

function sumaPuntos(nombreRadioButton){
	if($('input:radio[name='+nombreRadioButton+']:checked')){
		return $('input:radio[name='+nombreRadioButton+']:checked').val();
	}
}
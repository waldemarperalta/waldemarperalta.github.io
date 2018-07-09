
var	result =(localStorage.resultado);	
var	val  =(localStorage.valu);	
var	porcent=(localStorage.porcentagem);	




function valor()
{
		 a = document.pegar.Editbox1.value;
         b = document.pegar.Editbox2.value;
	     c = document.pegar.Editbox3.value=(a*b)/100; 

	     localStorage.resultado=c;
	     localStorage.valu=a;
	     localStorage.porcentagem=b;
}

function buscarStore() 
{
	document.pegar.Editbox3.value=result; 
	document.pegar.Editbox1.value=val; 
	document.pegar.Editbox2.value=porcent; 
}

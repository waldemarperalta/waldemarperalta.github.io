var s=0;
function sobe(){s=s+0.5;}

function valor(){
		 a = document.pegar.Editbox1.value;
 		 b = document.pegar.Editbox2.value=s+"%";
	     c = document.pegar.Editbox3.value=(a*s)/100; 
}

function sobre(){
		 alert("Developed by: waldemarperalta916@gmail.com");
document.write('<div data-role="page" data-theme="a" id="page1" style="color: #FFD700;font-family:arial;" ><h1>Sobre:</h1><p><h2>Percent é uma simples app web, Criada por:Valdemar Lemos</h2> <p><h1>Objectivo:</h1><p><h2> Fazer a conversão do valor percentual de um determinado valor numerico.</h2> </p><p><h1>Origem de ideia:</h1><p><h2>Tudo começou quando eu fazia um negocio de venda, no momento em que o meu cliente disse pra mim que estava fazendo pra ele um desconto de 10% do valor inicial em que eu vendia o artigo. Foi ai que dei conta que nem sabia quanto era 10% do valor em que eu vendia o meu artigo.<p> E ai eu pensei !<p> Porquê não ter uma app que faça isso por mim?</h2> <a onclick="window.location.reload();" style="text-decoration:none;"><h1 style="background-color:#FFD700;color:white;"><center>Voltar</center></h1></a>');		
}

       
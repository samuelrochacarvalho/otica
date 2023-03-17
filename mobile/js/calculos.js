function margem(i) {

   var v = i.value;
   var valorVenda=document.getElementById("valorVenda").value;
   var valorCusto=document.getElementById("valorCusto").value;
   
   var margemP=document.getElementById("margemLucroP");
  

   var margemReal=valorVenda-valorCusto;
   document.getElementById("margemLucroR").value=margemReal+".00 R$";
   
   var porcentagem=((valorVenda*100)/valorCusto)-100;
   margemP=document.getElementById("margemLucroP").value=porcentagem+"%";

}
//    function ajax() {
//        var xhttp = new XMLHttpRequest();
//       xhttp.onreadystatechange = function () {
//            if (this.readyState == 4 && this.status == 200) {
 //               document.getElementById("div_retorno").innerHTML = this.responseText;
 //           }
   //     };
     //   xhttp.open("GET", "texto.html", true);
       // xhttp.send();
//    }
//
$(document).ready(function(){
   $('#botao1').click(function(){
       $.ajax({
           type:'GET',
           url: '/texto.html',
           data:"",
           
           success: function(dados){
               $("#div_retorno").html(dados);
           },
           beforeSend: function (){
               $('#processando').css({display:"block"});
           },
           complete: function (){
               setTimeout(function(){
                   $('#processando').css({display:"none"});
               }, 5000);
           },
           error: function (){
               $('#div_retorno').html("Erro em chamar a função");
               setTimeout(function(){
                   $('#div_retorno').css({display:"none"});
               }, 5000);
         }  
       });
           
   }); 
    
     
});

    function ajax() {
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("div_retorno").innerHTML = this.responseText;
            }
        };
        xhttp.open("GET", "texto.html", true);
        xhttp.send();
    }

$(document).ready(function(){
   $("#botao1").click(function(){
       alert('Heelloo Hoooorrlld')
       
       
   }); 
    
    
    
    
    
    
    
    
});

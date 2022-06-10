
/*ajax*/
function loadFunction(){
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function(){
        if(this.readyState == 4 && this.status == 200){
           document.getElementById("demo1").innerHTML = this.responseText;
        }
    };
        xhttp.open("GET","blog1.php");
        xhttp.send();
    
}
function loadFunction2(){
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function(){
        if(this.readyState == 4 && this.status == 200){
           document.getElementById("demo2").innerHTML = this.responseText;
        }
    };
        xhttp.open("GET","blog2.php");
        xhttp.send();
    
}




function loadFunction3(){
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function(){
        if(this.readyState == 4 && this.status == 200){
           document.getElementById("demo3").innerHTML = this.responseText;
        }
    };
        xhttp.open("GET","blog3.php");
        xhttp.send();
    
}
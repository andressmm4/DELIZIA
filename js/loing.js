function go() {
        
    var user = document.getElementById("inputEmail").value;   
    var password = document.getElementById("inputPassword").value;
    
    if( user == "andres"  &&  password == "abc123"){
        window.location = "index.html";
    }
    else{
        alert ("Usario o contrasena incorrectos");
    }
}
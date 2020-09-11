function border() {
    var username = document.getElementById("fuser").value;
    var email = document.getElementById("femail").value;
    var password = document.getElementById("fpassword").value;
     var person = {name : name};
     if(username==""){
        document.getElementById("fuser").style.border = "2px solid red";
        //var element = document.getElementById("name");
        //element.classList.add("names");
    }else{
        document.getElementById("fuser").style.border = "";
    }

    if(email==""){
        document.getElementById("femail").style.border = "2px solid red";
        //var element = document.getElementById("name");
        //element.classList.add("names");
    }else{
        document.getElementById("femail").style.border = "";
    }

    if(password==""){
        document.getElementById("fpassword").style.border = "2px solid red";
        //var element = document.getElementById("name");
        //element.classList.add("names");
    }else{
        document.getElementById("fpassword").style.border = "";
    }
}
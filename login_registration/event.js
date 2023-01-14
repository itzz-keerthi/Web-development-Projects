//form 1 of login page

function message(){
    var user_name= document.forms["myform"]["Username"].value;
    var pass_word=document.forms["myform"]["user_pwd"].value;

    if(user_name==null || user_name==""){
        document.getElementById("errorbox").innerHTML="Enter the username";
        return false;
    }
    if(pass_word==null || pass_word==""){
        document.getElementById("errorbox").innerHTML="Enter the password";
        return false;
    }
    if(user_name!=''&& pass_word!=''){
        alert("Login successfully!");
    }
}

//form 2 of register page

function message1(){
    var user_name1=document.forms["myform1"]["Username1"].value;
    var e_mail=document.forms["myform1"]["mailid"].value;
    var userpwd1=document.forms["myform1"]["user_pwd1"].value;
    var userpwd2=document.forms["myform1"]["user_pwd2"].value;
    
    if(user_name1==null || user_name1==""){
        document.getElementById("errorbox").innerHTML="Enter the username";
        return false;
    }
    if(e_mail==null || e_mail==""){
        document.getElementById("errorbox").innerHTML="Enter the mail ID";
        return false;
    }
    if(userpwd1==null || userpwd1==""){
        document.getElementById("errorbox").innerHTML="Enter the password";
        return false;
    }
    if(userpwd2==null || userpwd2==""){
        document.getElementById("errorbox").innerHTML="Retype the password";
        return false;
    }
    if(userpwd1!=userpwd2){
        document.getElementById("errorbox").innerHTML="Non-matching password";
        return false;
    }
    if(user_name1!=''&& e_mail !='' && userpwd1 !=''&& userpwd2 !=''){
        alert("Registered successfully!");
    }
}

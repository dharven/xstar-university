function validate(){
    var input=document.getElementById("input"),
        check=document.getElementById("checked"),
        valid=document.getElementById("output");
	button=document.getElementById("hi");
    if(check.checked==true&&input.value===doc.textContent){
        doc.innerHTML=(rand());
        valid.style.display="block";
        valid.style.color="#090";
        valid.style.border="solid 1px #090";
        valid.style.backgroundColor="rgba(0,170,0,0.15)";
        valid.innerHTML=("Valid Captcha!");
button=document.getElementById("hi").disabled = false;
    }else{
        doc.innerHTML=(rand());
        valid.style.display="block";
        valid.style.color="#900";
        valid.style.border="solid 1px #900";
        valid.style.backgroundColor="rgba(170,0,0,0.15)";
        valid.innerHTML=("Invalid Captcha! Try agian!");
	button=document.getElementById("hi").disabled = true;
    }
}
function mkaddnew(){
    document.getElementById("mkbaru").style.display="none"
    
    let code = document.getElementById("txcode").value;
    let mk = document.getElementById("txmk").value;
    let sks = document.getElementById("txsks").value;
    let smstr = document.getElementById("txsmstr").value;
    let dta = "txCODE="+code+"&txMK="+mk+"&txSKS="+sks+"&txSMSTR="+smstr
    console.log(dta)

    xmlhttp = new XMLHttpRequest();
    xmlhttp.open("POST","http://localhost/webprog/server/dtamk-insertdata.php");
    xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
    xmlhttp.send(dta);

    xmlhttp.onload = function(){
        const mydta = JSON.parse(this.responseText);
        console.log(mydta);
        if(mydta["error"]==0){
            document.getElementById("sukses").style.display="block";
        }else{
            document.getElementById("gagal").style.display="none";
        }
        setTimeout(()=>{
            window.location.href="index.php?pg=mk";
        },5000)
    }
}
function dsnupdate(){
    document.getElementById("dsnbaru").style.display="none"
    
    let nidn = document.getElementById("txnidn").value;
    let nama = document.getElementById("txnama").value;
    let jkel = document.getElementById("txjkel").value;
    let sts = document.getElementById("txsts").value;
    let dta = "txNIDN="+nidn+"&txNAMA="+nama+"&txJKEL="+jkel+"&txSTS="+sts
    console.log(dta)

    xmlhttp = new XMLHttpRequest();
    xmlhttp.open("POST","http://localhost/webprog/server/dtadsn-insertdata.php");
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
            window.location.href="index.php?pg=dsn";
        },5000)
    }
}
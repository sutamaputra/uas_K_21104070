let qs = window.location.search;
let urlp = new URLSearchParams(qs);
let carinidn = urlp.get("nidn");

let urltarget = new URL("http://localhost/webprog/server/dtdsnnidn.php");
urltarget.searchParams.set("nidn",carinidn);

const gh = new XMLHttpRequest();
gh.open("GET",urltarget);
gh.send();

gh.onload = function(){
    const dta = JSON.parse(this.responseText);
    for(i=0;i<dta["isi"].length;i++){
        document.getElementById("txnidn").value = dta["isi"][i][0];
        document.getElementById("txnama").value = dta["isi"][i][1];
        document.getElementById("txsts").value = dta["isi"][i][3];
        document.getElementById("txjkel").value = dta["isi"][i][2];
    }
    console.log(dta);
}
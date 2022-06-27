let qs = window.location.search;
let urlp = new URLSearchParams(qs);
let caricode = urlp.get("code");

let urltarget = new URL("http://localhost/webprog/server/dtmkcode.php");
urltarget.searchParams.set("code",caricode);

const gh = new XMLHttpRequest();
gh.open("GET",urltarget);
gh.send();

gh.onload = function(){
    const dta = JSON.parse(this.responseText);
    for(i=0;i<dta["isi"].length;i++){
        document.getElementById("txcode").value = dta["isi"][i][0];
        document.getElementById("txmk").value = dta["isi"][i][1];
        document.getElementById("txsks").value = dta["isi"][i][3];
        document.getElementById("txsmstr").value = dta["isi"][i][2];
    }
    console.log(dta);
}
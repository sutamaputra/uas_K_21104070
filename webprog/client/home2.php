<div id="konten"></div>
<script>
  const xmlhttp = new XMLHttpRequest()
  xmlhttp.open("GET","http://localhost/webprog/server/homepage2.php")
  xmlhttp.send()

  xmlhttp.onload = function(){
    const mydta = JSON.parse(this.responseText)
    let tx = '<table class="table table-hover">'
        tx += '<thead><tr><th scope="col">#</th><th scope="col">NIDN</th><th scope="col">Nama DOSEN</th><th scope="col">STATUS</th><th scope="col">Jenis Kelamin</th><th scope="col"></th></tr></thead><tbody>'
    let no = 1
        for(i=0;i<mydta.length;i++){
    tx +='<tr>'
    tx +='<th scope="row">'+no+'</th>'
    tx +='  <td>'+mydta[i][0]+'</td>'
    tx +='  <td>'+mydta[i][1]+'</td>'
    tx +='  <td>'+mydta[i][2]+'</td>'
    tx +='  <td>'+mydta[i][3]+'</td>'
    tx +='  <td>'
    tx +='      <a href="index.php?pg=edit&nidn=[nidn]" class="badge bg-primary"> Edit </a>'
    tx +='      <a href="index.php?pg=dele&nidn=[nidn]" class="badge bg-danger"> Hapus </a>'
    tx +='  </td>'
    tx +='</tr>'
    no++
        }
  tx +='</tbody></table>'

    document.getElementById("konten").innerHTML = tx
  }
</script>  
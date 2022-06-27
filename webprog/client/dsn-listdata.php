<div id="konten2"></div>
<script>
  const xmlhttp = new XMLHttpRequest()
  xmlhttp.open("GET","http://localhost/webprog/server/homepage2.php")
  xmlhttp.send()

  xmlhttp.onload = function(){
    const mydta = JSON.parse(this.responseText)
    let tx = '<h3>List Data Dosen</h3><table class="table table-hover">'
        tx += '<thead><tr><th scope="col">#</th><th scope="col">NIDN</th><th scope="col">Nama Dosen</th><th scope="col">Status</th><th scope="col">Jenis Kelamin</th><th scope="col"><a href="index.php?pg=dsn&sp=baru" class="btn btn-primary">Baru</a></th></tr></thead><tbody>'
    let no = 1
        for(i=0;i<mydta.length;i++){
    tx +='<tr>'
    tx +='<th scope="row">'+no+'</th>'
    tx +='  <td>'+mydta[i][0]+'</td>'
    tx +='  <td>'+mydta[i][1]+'</td>'
    tx +='  <td>'+mydta[i][2]+'</td>'
    tx +='  <td>'+mydta[i][3]+'</td>'
    tx +='  <td>'
    tx +='      <a href="index.php?pg=dsn&sp=edit&nidn='+mydta[i][0]+'" class="badge bg-primary"> Edit </a>'
    tx +='      <a href="index.php?pg=dsn&sp=dele&nidn='+mydta[i][0]+'" class="badge bg-danger"> Hapus </a>'
    tx +='  </td>'
    tx +='</tr>'
    no++
        }
  tx +='</tbody></table>'

    document.getElementById("konten2").innerHTML = tx
  }
</script>  
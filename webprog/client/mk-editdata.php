<h3>Edit data Matakuliah</h3>

<div class="alert alert-primary" role="alert" id="sukses">
  Data Telah diubah
</div>
<div class="alert alert-danger" role="alert" id="gagal">
  Data Gagal diubah
</div>

<form id="mkUpdate">
    <div class="mb-3">
    <label for="code" class="form-label">kode Matakuliah</label>
    <input type="text" class="form-control" id="txcode" disable>
    <div id="codeHelp" class="form-text">isikan kode Matakuliah.</div>
  </div>

  <div class="mb-3">
    <label for="matakuliah" class="form-label">Matakuliah</label>
    <input type="text" class="form-control" id="txmk">
    <div id="mkHelp" class="form-text">isikan Nama mahasiswa.</div>
  </div>

  <div class="mb-3">
    <label for="sks" class="form-label">SKS</label>
    <input type="number" class="form-control" id="txsks">
    <div id="sksHelp" class="form-text">isikan SKS.</div>
  </div>
  
  <div class="mb-3">
    <label for="semester" class="form-label">Semester</label>
    <select class="form-control" id="txsmstr">
        <option value="1"> Semester 1 </option>
        <option value="2"> Semester 2 </option>
        <option value="3"> Semester 3 </option>
        <option value="4"> Semester 4 </option>
        <option value="5"> Semester 5 </option>
        <option value="6"> Semester 6 </option>
        <option value="7"> Semester 7 </option>
        <option value="8"> Semester 8 </option>
    </select>    
    <div id="smstrHelp" class="form-text">Pilih Semester.</div>
  </div>
  
  <button type="button" class="btn btn-primary" onclick="mkupdatedata()">Update Data</button>
  <button type="button" class="btn btn-secondary" onclick="batal()"> Batal </button>
</form>

<script src="mk-caridata.js"></script>
<script src="mk-updatedata.js"></script>
<script>
  document.getElementById("sukses").style.display="none";
  document.getElementById("gagal").style.display="none";

  function batal(){
      location.replace("http://localhost/webprog/client/index.php?pg=mk");
  }
</script>
<h3>Edit data Dosen</h3>

<div class="alert alert-primary" role="alert" id="sukses">
  Data Telah diubah
</div>
<div class="alert alert-danger" role="alert" id="gagal">
  Data Gagal diubah
</div>

<form id="dsnUpdate">
  <div class="mb-3">
    <label for="nidn" class="form-label">NIDN</label>
    <input type="text" class="form-control" id="txnidn" disabled>
    <div id="nidnHelp" class="form-text"></div>
  </div>

  <div class="mb-3">
    <label for="nama" class="form-label">Nama Dosen</label>
    <input type="text" class="form-control" id="txnama">
    <div id="namaHelp" class="form-text">Ubah Nama dosen.</div>
  </div>
  
  <div class="mb-3">
    <label for="jkel" class="form-label">Jenis Kelamin</label>
    <select class="form-control" id="txjkel">
        <option value="-"> Pilih Jenis Kelamin </option>
        <option value="L"> Laki-Laki </option>
        <option value="P"> Perempuan </option>
    </select>    
    <div id="jkelHelp" class="form-text">Pilih Jenis Kelamin dosen.</div>
  </div>
  
  <div class="mb-3">
    <label for="status" class="form-label">Status</label>
    <select class="form-control" id="txsts">
        <option value="-"> Pilih Jurusan </option>
        <option value="M"> Sudah Menikah </option>
        <option value="A"> Sudah Punya Anak </option>
        <option value="C"> Sudah Punya Cucu </option>
        <option value="J"> JOMBLO (kasihan) </option>
    </select>    
    <div id="stsHelp" class="form-text">Pilih Status.</div>
  </div>
  
  <button type="button" class="btn btn-primary" onclick="dsnupdatedata()">Update Data</button>
  <button type="button" class="btn btn-secondary" onclick="batal()"> Batal </button>
</form>

<script src="dsn-caridata.js"></script>
<script src="dsn-updatedata.js"></script>
<script>
  document.getElementById("sukses").style.display="none";
  document.getElementById("gagal").style.display="none";

  function batal(){
      location.replace("http://localhost/webprog/client/index.php?pg=dsn");
  }
</script>
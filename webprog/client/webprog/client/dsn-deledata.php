<h3>Hapus data Dosen</h3>

<div class="alert alert-primary" role="alert" id="sukses">
  Data Telah di hapus
</div>
<div class="alert alert-danger" role="alert" id="gagal">
  Data Gagal di hapus
</div>

<form id="dsnDelete">
  <div class="mb-3">
    <label for="nidn" class="form-label">NIDN</label>
    <input type="text" class="form-control" id="txnidn" disabled>
    <div id="nidnHelp" class="form-text"></div>
  </div>

  <span id="sembunyi">
  <div class="mb-3">
    <label for="nama" class="form-label">Nama Dosen</label>
    <input type="text" class="form-control" id="txnama">
    <div id="namaHelp" class="form-text"></div>
  </div>
    
    <div class="mb-3">
        <label for="nama" class="form-label">Jenis Kelamin</label>
        <select class="form-control" id="txjkel">
            <option value="-"> Pilih Jenis Kelamin </option>
            <option value="L"> Laki-Laki </option>
            <option value="P"> Perempuan </option>
        </select>    
        <div id="jkelHelp" class="form-text">Pilih Jenis Kelamin Dosen.</div>
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
  </span>
  <button type="button" class="btn btn-danger" onclick="dsndeletedata()">Hapus Data</button>
  <button type="button" class="btn btn-secondary" onclick="batal()"> Batal </button>
</form>

<script src="dsn-caridata.js"></script>
<script src="dsn-deletedata.js"></script>
<script>
  document.getElementById("sukses").style.display="none";
  document.getElementById("gagal").style.display="none";
  document.getElementById("sembunyi").style.display="none";

  function batal(){
      location.replace("http://localhost/webprog/client/index.php?pg=dsn");
  }
</script>
<h3>Tambah data Dosen</h3>

<div class="alert alert-primary" role="alert" id="sukses">
  Data Telah ditambahkan
</div>
<div class="alert alert-danger" role="alert" id="gagal">
  Data Gagal ditambahkan
</div>

<form id="dsnbaru">
  <div class="mb-3">
    <label for="nidn" class="form-label">NIDN</label>
    <input type="text" class="form-control" id="txnidn">
    <div id="nidnHelp" class="form-text">isikan NIDN Dosen.</div>
  </div>

  <div class="mb-3">
    <label for="nama" class="form-label">Nama Dosen</label>
    <input type="text" class="form-control" id="txnama">
    <div id="namaHelp" class="form-text">isikan Nama Dosen.</div>
  </div>

  <div class="mb-3">
    <label for="jkel" class="form-label">Jenis Kelamin</label>
    <select class="form-control" id="txjkel">
        <option value="-"> Pilih Jenis Kelamin </option>
        <option value="L"> Laki-Laki </option>
        <option value="P"> Perempuan </option>
    </select>    
    <div id="jkelHelp" class="form-text">Pilih Jenis Kelamin mahasiswa.</div>
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
  
  <button type="button" class="btn btn-primary" onclick="dsnupdate()">Simpan Data</button>
</form>

<script src="dsn-addnew.js"></script>
<script>
  document.getElementById("sukses").style.display="none";
  document.getElementById("gagal").style.display="none";
</script>
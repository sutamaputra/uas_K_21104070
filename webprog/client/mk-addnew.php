<h3>Tambah data Matakuliah</h3>

<div class="alert alert-primary" role="alert" id="sukses">
  Data Telah ditambahkan
</div>
<div class="alert alert-danger" role="alert" id="gagal">
  Data Gagal ditambahkan
</div>

<form id="mhsbaru">
  <div class="mb-3">
    <label for="code" class="form-label">Code Matakuliah</label>
    <input type="text" class="form-control" id="txcode">
    <div id="codeHelp" class="form-text">isikan Code Matakuliah.</div>
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

<script src="mk-update.js"></script>
<script>
  document.getElementById("sukses").style.display="none";
  document.getElementById("gagal").style.display="none";
</script>
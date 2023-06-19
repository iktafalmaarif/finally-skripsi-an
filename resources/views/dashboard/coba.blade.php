<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>
  <div class="container">
    <form>
      <div class="form-group">
        <label for="id_penduduk">ID Penduduk:</label>
        <input type="text" class="form-control" id="id_penduduk" placeholder="Masukkan ID Penduduk">
      </div>
      <div class="form-group">
        <label for="nama">Nama:</label>
        <input type="text" class="form-control" id="nama" placeholder="Masukkan Nama">
      </div>
      <div class="form-group">
        <label for="jenis_surat">Jenis Surat:</label>
        <select class="form-control" id="jenis_surat" onchange="showFormSection()">
          <option value="">Pilih Jenis Surat</option>
          <option value="Surat Keterangan Domisili">Surat Keterangan Domisili</option>
          <option value="Surat Keterangan Nikah">Surat Keterangan Nikah</option>
          <option value="Surat Keterangan Lahir">Surat Keterangan Lahir</option>
        </select>
      </div>
      
      <div id="form_section" style="display: none;">
        <div id="domisili_section" style="display: none;">
          <div class="form-group">
            <label for="nik">NIK:</label>
            <input type="text" class="form-control" id="nik" placeholder="Masukkan NIK">
          </div>
          <div class="form-group">
            <label for="alamat">Alamat:</label>
            <input type="text" class="form-control" id="alamat" placeholder="Masukkan Alamat">
          </div>
          <div class="form-group">
            <label for="tanggal_lahir">Tanggal Lahir:</label>
            <input type="text" class="form-control" id="tanggal_lahir" placeholder="Masukkan Tanggal Lahir">
          </div>
        </div>
        
        <!-- Tambahkan bagian formulir lainnya sesuai kebutuhan -->
      </div>
      
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
  </div>

  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  
  <script>
    function showFormSection() {
      var jenisSurat = document.getElementById("jenis_surat").value;
      var formSection = document.getElementById("form_section");
      var domisiliSection = document.getElementById("domisili_section");
      
      if (jenisSurat === "Surat Keterangan Domisili") {
        domisiliSection.style.display = "block";
      } else {
        domisiliSection.style.display = "none";
      }
      
      if (jenisSurat !== "") {
        formSection.style.display = "block";
      } else {
        formSection.style.display = "none";
      }
    }
  </script>
</body>
</html>

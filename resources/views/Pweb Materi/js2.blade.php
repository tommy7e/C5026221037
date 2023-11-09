<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
<script>
function validateForm() {
  //let x = document.forms["myForm"]["fname"].value;
  var x = document.getElementById("fname");
  var nrp = document.getElementById("nrp");
  var nrpStr = "" + nrp.value;
  if (x.value == "") { //isian kosong itu artinya textboxnya ga diisi apa2
    alert("Nama tidak boleh kosong.");
    x.focus();
    return false; //function bukan void, ada return value
    //stop, ga dikirim ke server
  }
  if (nrp.value == "") { //isian kosong itu artinya textboxnya ga diisi apa2
    alert("NRP tidak boleh kosong.");
    nrp.focus();
    return false; //function bukan void, ada return value
    //stop, ga dikirim ke server
  }
  if (isNaN(nrp.value)) { //isian kosong itu artinya textboxnya ga diisi apa2
    alert("NRP harus berupa angka.");
    nrp.focus();
    nrp.value="";
    return false; //function bukan void, ada return value
    //stop, ga dikirim ke server
  }
  if (nrp.value.length != 10) { //isian kosong itu artinya textboxnya ga diisi apa2
    alert("Jumlah NRP harus 10. Anda memasukkan: " + nrp.value.length + " digit.");
    nrp.focus();
    return false; //function bukan void, ada return value
    //stop, ga dikirim ke server
  }
  //console.log(nrpStr.substring(0, 4));
  if (nrpStr.substring(0, 4) != "5026") { //isian kosong itu artinya textboxnya ga diisi apa2
    alert("Pendaftar harus mahasiswa Sistem Informasi.");
    nrp.focus();
    return false; //function bukan void, ada return value
    //stop, ga dikirim ke server
  }
  //console.log(nrpStr.substring(4, 6));
  if (nrpStr.substring(4, 6) != "22" && nrpStr.substring(4, 6) != "21") { //isian kosong itu artinya textboxnya ga diisi apa2
    alert("Pendaftar harus mahasiswa angkatan 2021 atau 2022.");
    nrp.focus();
    return false; //function bukan void, ada return value
    //stop, ga dikirim ke server
  }
  return true; //boleh diberi boleh tidak, karena default function adalah true. Pencegahan ilai false berfungsi supaya tidak jadi dikirimkan
}
</script>
</head>

<body style="margin: auto;">
<div class="container">
  <h2 style="text-align: center;">Pendaftaran Asisten Lab Departemen Sistem Informasi</h2>

  <form name="myForm" action="https://www.google.com/" onsubmit="return validateForm()" method="post" target="_blank">
    <label for="fname">Name:</label>
    <input type="text" id="fname" name="fname" class="form-control">
    <label for="nrp">NRP:</label>
    <input type="text" id="nrp" name="nrp" class="form-control">
    <br>
    <input type="submit" value="Submit" class="btn btn-primary">
    <input type="reset" value="Kosong" class="btn btn-warning">
  </form>
</div>
<!--
<form>
  <br>
  <label><b>Ayo Daftar Simetri!</b></label>
  <br><br>
  <label for="nama">Nama:</label>
  <input id="nama" type="text" value="isi nama kalian yaa">
  <br><br>
  <label>Jenis Kelamin:</label>
  <input id="laki" type="radio">
  <label for="laki">Laki-Laki</label>
  <input id="pere" type="radio">
  <label for="pere">Perempuan</label>
  <br><br>
  <label>Kalian minat di bidang apa aja nihh?</label>
  <br>
  <input id="html" type="checkbox">
  <label for="html">HTML</label>
  <input id="css" type="checkbox">
  <label for="css">CSS</label>
  <input id="js" type="checkbox">
  <label for="js">JavaScript</label>
  <br><br>
  <input type="submit" value="Simpan">
  <br><br>
</form>

<form name="myForm" action="https://www.google.com/" onsubmit="return validateForm()" method="post" target="_blank">
    <label for="fname">Name:</label>
    <input type="text" id="fname" name="fname" class="form-control">
    <label for="nrp">NRP:</label>
    <input type="text" id="nrp" name="nrp" class="form-control">
    <br>
    <input type="submit" value="Submit" class="btn btn-primary">
    <input type="reset" value="Kosong" class="btn btn-warning">
  </form>

<script>
function validateForm() {
  //let x = document.forms["myForm"]["fname"].value;
  var x = document.getElementById("fname");
  var nrp = document.getElementById("nrp");
  var nrpStr = "" + nrp.value;
  if (x.value == "") { //isian kosong itu artinya textboxnya ga diisi apa2
    alert("Nama tidak boleh kosong.");
    x.focus();
    return false; //function bukan void, ada return value
    //stop, ga dikirim ke server
  }
  if (nrp.value == "") { //isian kosong itu artinya textboxnya ga diisi apa2
    alert("NRP tidak boleh kosong.");
    nrp.focus();
    return false; //function bukan void, ada return value
    //stop, ga dikirim ke server
  }
  if (isNaN(nrp.value)) { //isian kosong itu artinya textboxnya ga diisi apa2
    alert("NRP harus berupa angka.");
    nrp.focus();
    nrp.value="";
    return false; //function bukan void, ada return value
    //stop, ga dikirim ke server
  }
  if (nrp.value.length != 10) { //isian kosong itu artinya textboxnya ga diisi apa2
    alert("Jumlah NRP harus 10. Anda memasukkan: " + nrp.value.length + " digit.");
    nrp.focus();
    return false; //function bukan void, ada return value
    //stop, ga dikirim ke server
  }
  //console.log(nrpStr.substring(0, 4));
  if (nrpStr.substring(0, 4) != "5026") { //isian kosong itu artinya textboxnya ga diisi apa2
    alert("Pendaftar harus mahasiswa Sistem Informasi.");
    nrp.focus();
    return false; //function bukan void, ada return value
    //stop, ga dikirim ke server
  }
  //console.log(nrpStr.substring(4, 6));
  if (nrpStr.substring(4, 6) != "22" && nrpStr.substring(4, 6) != "21") { //isian kosong itu artinya textboxnya ga diisi apa2
    alert("Pendaftar harus mahasiswa angkatan 2021 atau 2022.");
    nrp.focus();
    return false; //function bukan void, ada return value
    //stop, ga dikirim ke server
  }
  return true; //boleh diberi boleh tidak, karena default function adalah true. Pencegahan ilai false berfungsi supaya tidak jadi dikirimkan
}
</script>
-->

</body>
</html>

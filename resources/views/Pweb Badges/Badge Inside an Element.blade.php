<!DOCTYPE html>
<html lang="en">
<head>
  <title>Contoh 4 - Badge inside an Element</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<style>
    div{
        text-align: center;
    }
    button{
        border-radius: 25px;
        background-color: rgb(11, 238, 11);
        color: whitesmoke;
    }
</style>
<body>
<p>Tommy Gunawan - 5026221037</p>
<div class="container" style="text-align: justify;">
    <h1>Badge inside an Element</h1>
    <p> Bagian ini tidak membahas syntax baru untuk class badge melainkan memberikan gambaran pada salah satu implementasi badge untuk bergabung dalam elemen tertentu.
    </p>
</div>
<div class="container" style="border: 1px black solid;">
  <h3>contoh dari w3schools</h3>
  <button type="button" class="btn btn-primary">
    Messages <span class="badge badge-light">4</span>
  </button>
  <button type="button" class="btn btn-danger">
    Notifications <span class="badge badge-light">7</span>
  </button>
</div>
<br>
<div class="container" style="border: 1px black solid;">
    <h3>Implementasi: membuat tombol checkout dengan jumlah pesanan</h3>
    <span class="tombol">
        <button type="button">
        Checkout <span class="badge badge-pill badge-light">2</span>
        </button>
    </span>
</div>

</body>
</html>

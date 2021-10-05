<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Student</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="assets/jquery/dist/js/jquery-3.2.1.js"></script>
    <script src="assets/bootstrap/dist-v3.3.7/js/bootstrap.min.js"></script>
    <script src="assets/datatables/dist/js/jquery.dataTables.min.js"></script>
    <script src="assets/datatables/dist/js/dataTables.bootstrap.min.js"></script>
</head>
<body>
    <nav class="navbar navbar-default">
		<div class="container-fluid">
			<div class="navbar-header">
				<h4 style="color:grey"> Add Berita </h4>
			</div>
			<div>
			<ul class="nav navbar-nav navbar-right">
			<li style="list-style: none" class="nav-item active list-inline-item"><a href="#" class="btn btn-success"> Admin </a></li>
			</ul>
		</div>
		</div>
    </nav>
    <div class="container">
    <div class="card">
        <div class="card-body">
        <form method="POST" action="./act/adddataberita.php">
            <div class="mb-3">
                <label class="form-label">ID Berita</label>
                <input type="text" class="form-control" placeholder="idBerita" name="id" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Judul</label>
                <input type="text" class="form-control" placeholder="Judul" name="Judul" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Kategori</label>
                <input type="text" class="form-control" placeholder="kategori" name="Kategori" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Penulis</label>
                <input type="text" class="form-control" placeholder="Penulis" name="Penulis" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Konten Berita</label>
                <input type="text" class="form-control" placeholder="Konten Berita" name="Konten" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Tanggal Publikasi</label>
                <input type="date" class="form-control" placeholder="Tanggal Publikasi" name="Tanggal" required>
            </div>
            <div class="mb-3">
                <label for="Gambar Berita">Choose a picture:</label>

                <input type="file" id="gambarBerita" name="gambarBerita" accept="image/png, image/jpeg">
            </div>
            <p></p>
            <button type="submit" class="btn btn-primary">Submit</button>
            <a href="CRUD.php" class="btn btn-primary" >Cancel</a>
        </form>
        </div>
    </div>
    </div>
    
</body>
</html>
<html lang="en">

<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-8">
                <h2 class="my-3">Form tambah data</h2>
                <form action="/mahasiswa/update/<?= $mahasiswa['nim']; ?>" method="post">
                    <div class="form-group row">
                        <label for="nim" class="col-sm-2 col-form-label">NIM</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="nim" name="nim" value="<?= $mahasiswa['nim']; ?>">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="nama" name="nama" value="<?= $mahasiswa['nama']; ?>">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="kota" class="col-sm-2 col-form-label">Kota Asal</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="kota" name="kota" value="<?= $mahasiswa['kota']; ?>">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="ttl" class="col-sm-2 col-form-label">Tanggal Lahir</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="ttl" name="ttl" value="<?= $mahasiswa['ttl']; ?>">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="ortu" class="col-sm-2 col-form-label">Nama Orang Tua</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="ortu" name="ortu" value="<?= $mahasiswa['ortu']; ?>">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="aortu" class="col-sm-2 col-form-label">Alamat Orang Tua</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="aortu" name="aortu" value="<?= $mahasiswa['aortu']; ?>">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="kodePos" class="col-sm-2 col-form-label">Kode Pos</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="kodePos" name="kodePos" value="<?= $mahasiswa['kodePos']; ?>">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="nomor" class="col-sm-2 col-form-label">Nomor</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="nomor" name="nomor" value="<?= $mahasiswa['nomor']; ?>">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="status" class="col-sm-2 col-form-label">Status</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="status" name="status" value="<?= $mahasiswa['status']; ?>">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-10">
                            <button type="submit" class="btn btn-primary">edit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>


</body>

</html>
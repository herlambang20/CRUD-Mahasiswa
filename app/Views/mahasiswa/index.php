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
        <h2>Basic Table</h2>
        <p>The .table class adds basic styling (light padding and horizontal dividers) to a table:</p>
        <table class="table">
            <thead>
                <tr>

                    <th>nim</th>
                    <th>nama</th>
                    <th>Kota</th>
                    <th>ttl</th>
                    <th>nama ortu</th>
                    <th>alamat ortu</th>
                    <th>kode pos</th>
                    <th>nomor</th>
                    <th>status</th>
                    <th>aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($mahasiswa as $m) : ?>
                    <tr>

                        <td><?= $m['nim']; ?></td>
                        <td><?= $m['nama']; ?></td>
                        <td><?= $m['kota']; ?></td>
                        <td><?= $m['ttl']; ?></td>
                        <td><?= $m['ortu']; ?></td>
                        <td><?= $m['aortu']; ?></td>
                        <td><?= $m['kodePos']; ?></td>
                        <td><?= $m['nomor']; ?></td>
                        <td><?= $m['status']; ?></td>
                        <td>

                            <a href="/mahasiswa/edit/<?= $m['nim']; ?>" class="btn btn-success">edit</a>
                            <a href="/mahasiswa/delete/<?= $m['nim']; ?>" class="btn btn-success">delete</a>
                        </td>
                    </tr>
                <?php endforeach;  ?>
            </tbody>
        </table>
    </div>

</body>

</html>
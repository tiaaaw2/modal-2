<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data Siswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous">
    </script>
</head>

<body>

    <h3 class="text-center text-primary my-4">Data Siswa</h3>

    <div class="container my-5">
        <!-- Button trigger modal -->
        <button type="button" class="mb-2 btn btn-primary" data-bs-toggle="modal" data-bs-target="#Tambahdata">
            Tambah Data
        </button>

        <table class="table text-center  table-striped">
            @include('siswa.create')
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama Siswa</th>
                    <th scope="col">Umur</th>
                    <th scope="col">Alamat</th>
                    <th scope="col">No Telepon</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <td>1</td>
                <td>Jokowi</td>
                <td>17</td>
                <td>Sudiang</td>
                <td>123</td>
                <td>
                    <button type="button" class="btn btn-warning">Edit</button>
                    <button type="button" class="btn btn-danger">Delete</button>

                </td>
            </tbody>
        </table>
    </div>

</body>

</html>
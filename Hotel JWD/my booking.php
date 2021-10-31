<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Booking</title>
    <!-- Ini untuk koneksi ke database -->
    <?php include("include/bootstrap.php"); ?> 
    <?php
    include("proses/conn.php");
    $booking_number = mt_rand(100000, 999999);
    $tipe_kamar = isset($_POST['tipe_kamar']) ? $_POST['tipe_kamar'] : '';
    $nama_pemesan = isset($_POST['nama_pemesan']) ? $_POST['nama_pemesan'] : '';
    $jenis_kelamin = isset($_POST['jenis_kelamin']) ? $_POST['jenis_kelamin'] : '';
    $nomor_id = isset($_POST['nomor_id']) ? $_POST['nomor_id'] : '';
    $harga = isset($_POST['harga']) ? $_POST['harga'] : '';
    $tanggal_pesan = isset($_POST['tanggal_pesan']) ? $_POST['tanggal_pesan'] : '';
    $durasi = isset($_POST['durasi']) ? $_POST['durasi'] : '';
    $breakfast = isset($_POST['breakfast']) ? $_POST['breakfast'] : 'Tidak';
    $total = isset($_POST['total']) ? $_POST['total'] : '';
    $discount = isset($_POST['discount']) ? $_POST['discount'] : '';






    ?>
</head>

<body>
    <?php include('include/navbar.php'); ?>

    <div class="container" style="margin: 30px;">
        <table class="table text-center">
            <thead>
                <tr>
                    <th>Booking Number</th>
                    <th>Nama Pemesan</th>
                    <th>Jenis Kelamin</th>
                    <th>Nomor Identitas</th>
                    <th>Tipe Kamar</th>
                    <th>Tanggal Pesan</th>
                    <th>Durasi Penginapan</th>
                    <th>Termasuk Breakfast</th>
                    <th>Diskon</th>
                    <th>Total Bayar</th>

                </tr>
            </thead>
            <tbody>
                <?php
                $sql = "SELECT * FROM pesanan ORDER BY id_pesanan DESC";
                $items = mysqli_query($db, $sql);
                while ($show = mysqli_fetch_array($items)) {

                    if ($show['durasi'] >= 3) {
                        $discount = "10%";
                    } else {
                        $discount = "-";
                    }
                ?>
                    <tr>
                        <td><a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal<?=$show['id_pesanan'] ?>"><?= $show['id_pesanan']; ?></a></td>
                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal<?=$show['id_pesanan'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="mx-auto">
                                            <div class="form-group row">
                                                <label for="bookingnumber" class="col-sm-5 col-form-label">Booking Number</label>
                                                <div class="col-sm-7">
                                                    <input type="text" readonly class="form-control-plaintext" id="bookingnumber" value="<?= $show['id_pesanan']; ?>">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="nama_pemesan" class="col-sm-5 col-form-label">Nama Pemesan</label>
                                                <div class="col-sm-7">
                                                    <input type="text" readonly class="form-control-plaintext" id="nama_pemesan" value="<?= $show['nama_pemesan']; ?>">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="nomor_id" class="col-sm-5 col-form-label">Nomor Identitas</label>
                                                <div class="col-sm-7">
                                                    <input type="text" readonly class="form-control-plaintext" id="nomor_id" value="<?= $show['nomor_id'] ?>">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="jenis_kelamin" class="col-sm-5 col-form-label">Jenis Kelamin</label>
                                                <div class="col-sm-7">
                                                    <input type="text" readonly class="form-control-plaintext" id="jenis_kelamin" value="<?= $show['jenis_kelamin'] ?>">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="tipe_kamar" class="col-sm-5 col-form-label">Tipe Kamar</label>
                                                <div class="col-sm-7">
                                                    <input type="text" readonly class="form-control-plaintext" id="tipe_kamar" value="<?= $show['tipe_kamar'] ?>">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="durasi" class="col-sm-5 col-form-label">Durasi Penginapan</label>
                                                <div class="col-sm-7">
                                                    <input type="text" readonly class="form-control-plaintext" id="durasi" value="<?= $show['durasi'] ?>">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="discount" class="col-sm-5 col-form-label">Discount</label>
                                                <div class="col-sm-7">
                                                    <input type="text" readonly class="form-control-plaintext" id="discount" value="<?= $discount ?>">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="total" class="col-sm-5 col-form-label">Total Bayar</label>
                                                <div class="col-sm-7">
                                                    <input type="text" readonly class="form-control-plaintext" id="total" value="<?= $shows['total'] ?>">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <td><?= $show['nama_pemesan']; ?></td>
                        <td><?= $show['jenis_kelamin']; ?></td>
                        <td><?= $show['nomor_id'] ?></td>
                        <td><?= $show['tipe_kamar'] ?></td>
                        <td><?= $show['tanggal_pesan'] ?></td>
                        <td><?= $show['durasi'] ?></td>
                        <td><?= $show['breakfast'] ?></td>
                        <td><?= $discount ?></td>
                        <td><?= $show['total'] ?></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>

        <!-- Button trigger modal
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
            Launch demo modal
        </button> -->

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="mx-auto">
                            <div class="form-group row">
                                <label for="bookingnumber" class="col-sm-5 col-form-label">Booking Number</label>
                                <div class="col-sm-7">
                                    <input type="text" readonly class="form-control-plaintext" id="bookingnumber" value="<?= $show['id_pesanan']; ?>">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="nama_pemesan" class="col-sm-5 col-form-label">Nama Pemesan</label>
                                <div class="col-sm-7">
                                    <input type="text" readonly class="form-control-plaintext" id="nama_pemesan" value="<?= $show['nama_pemesan']; ?>">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="nomor_id" class="col-sm-5 col-form-label">Nomor Identitas</label>
                                <div class="col-sm-7">
                                    <input type="text" readonly class="form-control-plaintext" id="nomor_id" value="<?= $nomor_id ?>">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="jenis_kelamin" class="col-sm-5 col-form-label">Jenis Kelamin</label>
                                <div class="col-sm-7">
                                    <input type="text" readonly class="form-control-plaintext" id="jenis_kelamin" value="<?= $jenis_kelamin ?>">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="tipe_kamar" class="col-sm-5 col-form-label">Tipe Kamar</label>
                                <div class="col-sm-7">
                                    <input type="text" readonly class="form-control-plaintext" id="tipe_kamar" value="<?= $tipe_kamar ?>">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="durasi" class="col-sm-5 col-form-label">Durasi Penginapan</label>
                                <div class="col-sm-7">
                                    <input type="text" readonly class="form-control-plaintext" id="durasi" value="<?= $durasi ?>">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="discount" class="col-sm-5 col-form-label">Discount</label>
                                <div class="col-sm-7">
                                    <input type="text" readonly class="form-control-plaintext" id="discount" value="<?= $discount ?>">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="total" class="col-sm-5 col-form-label">Total Bayar</label>
                                <div class="col-sm-7">
                                    <input type="text" readonly class="form-control-plaintext" id="total" value="<?= $total ?>">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>

    </div>
</body>

</html>
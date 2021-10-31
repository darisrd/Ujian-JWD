<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Produk</title>
    <?php include("include/bootstrap.php"); ?>
</head>

<body>
    <?php include('include/navbar.php'); ?>
    <div class="container mt-4">
        <div class="table-responsive">
            <table class="table table-striped table-bordered">
                <thead class="text-center">
                    <tr>
                        <th>Tipe Kamar</th>
                        <th>Luas Kamar</th>
                        <th>Kapasitas</th>
                        <th>Wi-Fi</th>
                        <th>Televisi</th>
                        <th>Kamar Mandi</th>
                        <th>Layanan Premium*</th>
                        <th>Harga</th>
                    </tr>
                </thead>
                <tbody class="text-center">
                    <tr>
                        <td>Standard</td>
                        <td>2m<sup>2</sup></td>
                        <td>12</td>
                        <td>-</td>
                        <td>-</td>
                        <td>MCK</td>
                        <td>-</td>
                        <td>Rp 0 / Selamanya</td>
                    </tr>
                    <tr>
                        <td>Deluxe</td>
                        <td>5m<sup>2</sup></td>
                        <td>2</td>
                        <td>Tersedia</td>
                        <td>Tersedia</td>
                        <td>Tersedia + air panas</td>
                        <td>-</td>
                        <td>Rp 700.000,- / Hari</td>
                    </tr>
                    <tr>
                        <td>Family</td>
                        <td>7m<sup>2</sup></td>
                        <td>5</td>
                        <td>Tersedia</td>
                        <td>Tersedia</td>
                        <td>Tersedia + air panas + spa</td>
                        <td>Tersedia</td>
                        <td>Rp 1.300.000,- / Hari</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</body>

</html>
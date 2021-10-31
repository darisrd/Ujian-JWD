<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pesan Kamar</title>
    <?php include("include/bootstrap.php");
    ?>


</head>

<body>
    <?php include('include/navbar.php'); ?>

    <div class="row mx-5 mt-4">
        <div class="col-sm-6 mt-4">
            <form action="proses/pesan.php" method="post" onsubmit="return check();">
                <!-- <form action="my%20booking.php" method="post" onsubmit="return check();"> -->
                <div class="mb-3">
                    <label for="nama_pemesan" class="form-label">
                        Nama Pemesan:
                    </label>
                    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
                    <input required type="text" class="form-control" id="nama_pemesan" name="nama_pemesan">
                </div>
                <div class="mb-3">
                    <label for="nomor_id" class="form-label">
                        Nomor Identitas:
                    </label>
                    <input required minlength="16" maxlength="16" type="number" class="form-control" id="nomor_id" name="nomor_id">
                </div>
                <div class="mb-3">
                    <label class="form-label" for="jenis_kelamin">
                        Jenis Kelamin:
                    </label>
                    <div class="form-check">
                        <input required checked value="Laki-laki" class="form-check-input" type="radio" name="jenis_kelamin" id="jenis_kelamin1">
                        <label class="form-check-label" for="jenis_kelamin1">
                            Laki-laki
                        </label>
                    </div>
                    <div class="form-check">
                        <input required value="Perempuan" class="form-check-input" type="radio" name="jenis_kelamin" id="jenis_kelamin2">
                        <label class="form-check-label" for="jenis_kelamin2">
                            Perempuan
                        </label>
                    </div>
                </div>
                <div class="mb-3">
                    <label class="form-label" for="tipe_kamar">
                        Tipe Kamar:
                    </label>

                    <select class="form-control" id="tipe_kamar" name="tipe_kamar">
                        <option selected disabled hidden>Choose here</option>
                        <option value="Standard">Standard</option>
                        <option value="Deluxe">Deluxe</option>
                        <option value="Family">Family</option>

                    </select>
                </div>
                <div class="mb-3">
                    <label class="form-label" for="harga">
                        Harga:
                    </label>
                    <input readonly required value="" type="text" class="form-control" id="harga" name="harga">
                </div>
                <div class="mb-3">
                    <label class="form-label" for="tanggal_pesan">
                        Tanggal Pesan:
                    </label>
                    <input min="<?= date("Y-m-d") ?>" required type="date" class="form-control" id="tanggal_pesan" name="tanggal_pesan">
                </div>
                <div class="mb-3">
                    <label class="form-label" for="durasi">
                        Durasi Menginap:
                    </label>
                    <input required onchange="submitDur();" value="1" type="number" min="1" class="form-control" id="durasi" name="durasi">
                </div>
                <div class="mb-3">
                    <label class="form-label" for="breakfast">
                        Termasuk Breakfast:
                    </label>
                    <div class="form-check">
                        <input onclick="myCheck();" class="form-check-input" type="checkbox" value="Ya" id="breakfast" name="breakfast">
                        <label class="form-check-label" for="breakfast">
                            Ya
                        </label>
                    </div>
                </div>
                <div class="mb-3">
                    <label class="form-label" for="total">
                        Total Bayar:
                    </label>
                    <input readonly required value="" type="text" class="form-control" id="total" name="total">
                </div>
                <div class="mb-3">
                    <button value="submit" onclick="check();" disabled id="submit" type="submit" class="btn btn-primary" name="submit">Submit</button>
                    <a onclick="hitung();" class="btn btn-success">Cek Harga Total</a>

                </div>
                <input hidden type="text" id="discount" name="discount" value="-"></a>
            </form>
        </div>
        <div class="col-sm-6 justify-content-center">
            <div class="row">
                <img name="gantigambar" src="img/untitled.jpg" alt="Card image" class="img-fluid">
            </div>
            <div class="row">
                <br>
            </div>
            <div class="row ratio ratio-16x9 container-fluid">
                <iframe name="gantivid" id="gantivid" src=""></iframe>
            </div>
        </div>
    </div>


    <script>
        var harga = 0;
        var tot = 0;
        var total = 0;
        const cb = document.getElementById('breakfast');
        var breakM = document.getElementById("durasi").value;
        var mm = breakM - 1;
        var tambahan = 0;
        var discount = "False";

        function myCheck() {
            if (cb.checked == true) {
                tambahan = 80000;
            } else {
                tambahan = 0;
            }
            console.log(cb.checked);
        }


        document.getElementById("tipe_kamar").onchange = changeListener;

        function changeListener() {
            var value = this.value
            console.log(value);

            if (value == "Standard") {
                document.gantigambar.src = "img/jail.jpg";
                document.getElementById("gantivid").src = "https://www.youtube.com/embed/KnBZFemNrxk";
                harga = 0;
                harga = numberWithCommas(harga);
            } else if (value == "Deluxe") {
                document.gantigambar.src = "img/nice.jpg";
                document.getElementById("gantivid").src = "https://www.youtube.com/embed/lMmmgVfbVD0";
                harga = 700000;
                harga = numberWithCommas(harga);
            } else if (value == "Family") {
                document.gantigambar.src = "img/luxury.jpg";
                document.getElementById("gantivid").src = "https://www.youtube.com/embed/TdIygnB5XI0";
                harga = 1300000;
                harga = numberWithCommas(harga);
            }
            document.getElementById("harga").value = harga;
            harga = parseFloat(harga.replace(/,/g, ''));

        }


        function hitung() {
            console.log("durasi  : " + breakM);
            console.log("diskon  : " + discount);
            console.log("bill bf :" + tambahan * mm);
            tot = harga * document.getElementById("durasi").value;
            total = tot + tambahan * mm;
            console.log("total tanpa tambahan dan diskon: " + tot);
            console.log("total tanpa tambahan dgn diskon: " + tot * 90 / 100);
            console.log("total tanpa diskon dgn tambahan: " + total);
            if (discount == "True") {
                total = tot * 90 / 100 + tambahan * mm;
            }
            console.log("total dgn diskon dgn tambahan  : " + total);
            total = numberWithCommas(total);
            document.getElementById("total").value = total;
            total = parseFloat(total.replace(/,/g, ''));
            document.getElementById("submit").disabled = false;
        }

        function submitDur() {
            breakM = document.getElementById("durasi").value;
            mm = breakM - 1;
            console.log(breakM);
            if (breakM >= 3) {
                discount = "True";
                document.getElementById("discount").value = "10%";
                console.log(document.getElementById("discount").value);
            } else {
                discount = "False";
            }
        }


        function check() {
            var str = document.getElementById("nomor_id").value;
            var UserDate = document.getElementById("tanggal_pesan").value;
            var ToDate = new Date();
            if (str.length != 16) {
                alert("Nomor Identitas harus 16 digit");
                console.log(str.length);
                return false;
            }
            const nama_pemesan = document.getElementById('nama_pemesan')
            if (/^\s*$/.test(nama_pemesan.value)) {
                alert('Nama pemesan tidak boleh diisi spasi kosong');
                return false;
            }
        }


        function numberWithCommas(x) {
            return x.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
        }
    </script>
</body>

</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <?php include("include/bootstrap.php"); ?>
    
    <?php
    $room = isset($_POST['room']) ? $_POST['room'] : '';
    ?>
</head>

<body>

    <?php include('include/navbar.php'); ?>
    <div class="text-center" style="margin-top:30px">
        <h1 class="display-1">JWD HOTEL</h1>
        <h4 class="display-4 text-danger">Selamat datang di hotel epic berkelas kami!</h2>
    </div>

    <div class="row justify-content-center" style="margin: 30px;">
        <div class="card" style="width:300px; margin: 30px">
            <img class="img-responsive" src="img/jail.jpg" alt="Card image" style="width:100%">
            <div class="card-body">
                <h4 class="card-title text-center">Standard</h4>
                <h5 class="text-primary text-center">Rp0/Lifetime</h5></br>
                <table class="table">
                    <tr>
                        <td class="text-center bg-light">Facilities</td>
                    </tr>
                    <tr>
                        <td class="text-center">No Bed</td>
                    </tr>
                    <tr>
                        <td class="text-center">Become Free Labor</td>
                    </tr>
                    
                </table>

            </div>
        </div>
        <div class="card" style="width:300px; margin: 30px">
            <img class="img-responsive" src="img/nice.jpg" alt="Card image" style="width:100%">
            <div class="card-body">
                <h4 class="card-title text-center">Deluxe</h4>
                <h5 class="text-primary text-center">Rp700.000/Day</h5></br>
                <table class="table">
                    <tr>
                        <td class="text-center bg-light">Facilities</td>
                    </tr>
                    <tr>
                        <td class="text-center">Double Bed</td>
                    </tr>
                    <tr>
                        <td class="text-center">Television and WiFi</td>
                    </tr>
                    <tr>
                        <td class="text-center">Bathroom with Hot Water</td>
                    </tr>
                    
                </table>
            </div>
        </div>
        <div class="card" style="width:300px; margin: 30px">
            <img class="img-responsive" src="img/luxury.jpg" alt="Card image" style="width:100%">
            <div class="card-body">
                <h4 class="card-title text-center">Family</h4>
                <h5 class="text-primary text-center">Rp1.300.000/Day</h5></br>
                <table class="table">
                    <tr>
                        <td class="text-center bg-light">Facilities</td>
                    </tr>
                    <tr>
                        <td class="text-center">Deluxe Double Bed</td>
                    </tr>
                    <tr>
                        <td class="text-center">Television, Netflix Subscription, and WiFi</td>
                    </tr>
                    <tr>
                        <td class="text-center">Bathroom with Warm Spa Water</td>
                    </tr>
                    <tr>
                        <td class="text-center">Comfy Blankets</td>
                    </tr>
                    
                </table>

            </div>
        </div>
        <br>
    </div>
</body>

</html>
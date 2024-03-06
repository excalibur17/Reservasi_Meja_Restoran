<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reservation Form</title>
    <link rel="stylesheet" href="style.css">
    <link href="assets/css/Reservasi.css" rel="stylesheet">
</head>
<body>
    <div class="col-lg-9 mt-2">
        <div class="form-container">
            <form action="./prosses/prosses_reservasi.php" method="POST">
            <div class="form-group">
                    <label for="nama">nama:</label>
                    <input type="tel" id="phone" name="nama" required>
                </div>
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="username" required>
                </div>

                <div class="form-group">
                    <label for="phone">Phone:</label>
                    <input type="tel" id="phone" name="nohp" required>
                </div>

                <div class="form-group">
                    <label for="check_in_date">Check-in Date:</label>
                    <input type="date" id="check_in_date" name="check_in_date" required>
                </div>

                <div class="form-group">
                    <label for="check_out_date">Check-out Date:</label>
                    <input type="date" id="check_out_date" name="check_out_date" required>
                </div>

                <div class="form-group">
                    <label for="no_of_guests">Number of Guests:</label>
                    <input type="number" id="no_of_guests" name="jumlah_orang" required>
                </div>


                <input type="submit" value="Reserve">
            </form>
        </div>
    </div>
</body>
</html>

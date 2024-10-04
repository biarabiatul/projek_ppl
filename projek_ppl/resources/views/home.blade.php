<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Dashboard</title>

    <!-- Load Gasoek One from Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Gasoek+One&display=swap" rel="stylesheet">

    <!-- Link to external CSS -->
    <link href="{{ asset('static/css/app.css') }}" rel="stylesheet">
</head>

<body>

    <div class="container-fluid">
        <!-- Header section with title -->
        <header class="header">
            <h1><?php echo "BUMI DAN TATA SURYA"; ?></h1>
        </header>

        <!-- Boxes section -->
        <div class="box-container">
            <div class="box">Kotak 1</div>
            <div class="box">Kotak 2</div>
            <div class="box">Kotak 3</div>
        </div>
    </div>

</body>

</html>

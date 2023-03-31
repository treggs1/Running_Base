<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/b2ef2e6fc4.js" crossorigin="anonymous"></script>

    <!-- Internal CSS -->
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Running Base</title>
</head>

<body>
    <header>
        <nav class="navbar fixed-top navbar-expand-md navbar-light bg-light" aria-label="Navigation Menu">
            <div class="container">
                <a href="index.html" class="navbar-brand mb-0 h1">Running Base</a>

                <button type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" class="navbar-toggler"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle Navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item"><a href="index.html" class="nav-link" aria-label="Home">Home</a></li>
                        <li class="nav-item dropdown"><a href="#" class="nav-link dropdown-toggle active"
                                id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false"
                                aria-label="Drop-down Menu">Running</a>
                            <ul class="dropdown-menu" id="dropdown" aria-labelledby="navbarDropdown">
                                <li><a href="building-your-base.html" class="dropdown-item"
                                        aria-label="Building Your Base">Building Your Base</a></li>
                                <li><a href="heart-rate-zones.html" class="dropdown-item"
                                        aria-label="Heart Rate Zones">Heart Rate Zones</a></li>
                                <li><a href="hrzonecalculator.php" class="dropdown-item"
                                        aria-label="Heart Rate Zone Calculator">HR Zone Calculator</a></li>
                            </ul>
                        </li>
                        <li class="nav-item"><a href="contact-us.html" class="nav-link" aria-label="Contact Us">Contact
                                Us</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <!-- Hero Image -->
    <section id="hero_section">
        <span role="img" aria-label="Background image of people running in the countryside"> </span>
        <div id="hero_style">
            <h1>Heart Rate Zone Calculator</h1>
        </div>
    </section>

    <!-- Main Page Content Section -->
    <main class="main_content_section" aria-label="Main Content">
        <div class="main_content">
            <form class="form-Wrapper">
                <fieldset class="contact-form_Wrapper">
                    <legend>HR Zone Calculator</legend>
                    <b>Note: an asterisk (*) indicates a required field</b>
                    <div class="form-Input_Wrapper">
                        <input type="number" id="age" name="age">
                        <label for="maxHeartRate">Age:</label>
                    </div>
                    <div class="form-Input_Wrapper">
                        <input type="number" id="maxHeartRate" name="maxHeartRate" required>
                        <label for="maxHeartRate">Enter your maximum heart rate:</label>
                    </div>
                    <button type="submit">Calculate</button>
                </fieldset>
            </form>
            <hr>
            <h2 class="h2Style">Heart Rate Zone</h2>
            <table class="table table-striped hrTable">
                <thead>
                    <tr>
                        <th scope="col">Zone</th>
                        <th scope="col">Target Heart Rate</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    if (isset($_GET['maxHeartRate'])) {
                        $maxHeartRate = $_GET['maxHeartRate'];
                        $zones = array(
                            array("Zone 1: Very Light", $maxHeartRate * 0.5, $maxHeartRate * 0.6),
                            array("Zone 2: Light", $maxHeartRate * 0.6, $maxHeartRate * 0.7),
                            array("Zone 3: Moderate", $maxHeartRate * 0.7, $maxHeartRate * 0.8),
                            array("Zone 4: Hard", $maxHeartRate * 0.8, $maxHeartRate * 0.9),
                            array("Zone 5: Max", $maxHeartRate * 0.9, $maxHeartRate),
                        );
                        foreach ($zones as list($zone, $min, $max)) {
                            $targetRange = "$min - $max";
                            echo "<tr><td>$zone</td><td>$targetRange bpm</td></tr>";
                        }
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </main>

    <!-- Footer  -->
    <footer>
        <div>
            Copyright Running Base 2023
        </div>
        <div id="footer_social">
            <ul>
                <li><a href="http://www.youtube.com" target="_blank" aria-label="Link to our Youtube channel"><i
                            class="fa-brands fa-youtube"></i></a></li>
                <li><a href="http://www.twitter.com" target="_blank" aria-label="Link to our Twitter"><i
                            class="fa-brands fa-twitter"></i></a></li>
                <li><a href="http://www.facebook.com" target="_blank" aria-label="Link to our Facebook page"><i
                            class="fa-brands fa-facebook"></i></a></li>
                <li><a href="http://www.instagram.com" target="_blank" aria-label="Link to our Instagram page"><i
                            class="fa-brands fa-instagram"></i></a></li>
            </ul>
        </div>
    </footer>

    <!-- Bootstrap Javascript  -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>

    <!-- script to set maxHeartRate form field to 220 - age modified from https://stackoverflow.com/questions/2004315/populate-1-form-field-based-on-another -->
    <script>
       var first = document.getElementById('age'),
       second = document.getElementById('maxHeartRate');

       second.value = first.value;

       first.onchange = function () {
       second.value = 220 - first.value;
       };
    </script>
</body>

</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <title> EKIN </title>
    <link rel="icon" href="logo_web.png" type="image/x-icon">
    <link rel="stylesheet" href="style.css">
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="HandheldFriendly" content="true">
</head>


<body>
    <header><a href="#" class="top"><img src="logo_web.png" alt="logo website" width="10%" class="tengah"></a></header>

    <nav class="nav">
        <a href="index.php">Home</a>
        <a href="About_EKIN.php">About Us</a>
        <a href="Contact_EKIN.php">Contact</a>
    </nav>

    <div class="theme-switch-wrapper">
        <label class="theme-switch" for="checkbox">
            <input type="checkbox" id="checkbox" />
            <div class="slider round"></div>
        </label>
    </div>

    <script>alert("- Your response have been recorded -")</script>

    <div class="kotak21">
        <h3>- Thank you for visiting - </h3>
    </div>

    <div class="kotak22">

        <form name="finput" method="POST" action="index.php">
            <div class="form-group">
                <div class="col-sm-12">
                    <div class="form-control">
                        <?php
                            $nama = isset($_POST['nama']) ? $_POST['nama'] : "";
                            echo $nama;
                        ?>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <div class="col-sm-12">
                    <div class="form-control">
                        <?php
                            $warna = isset($_POST['warna']) ? $_POST['warna'] : "";
                            echo $warna;
                        ?>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <div class="col-sm-12">
                    <div class="form-control">
                        <?php
                            $brand = isset($_POST['brand']) ? $_POST['brand'] : "";
                            echo $brand;
                        ?>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <div class="col-sm-12">
                    <div class="form-control">
                        <?php
                            $jenis = isset($_POST['jenis']) ? $_POST['jenis'] : "";
                            echo $jenis;
                        ?>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <div class="col-sm-12">
                    <div class="form-control">
                        <?php
                            $ukuran = isset($_POST['ukuran']) ? $_POST['ukuran'] : "";
                            echo $ukuran;
                        ?>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <div class="col-sm-12">
                    <div class="form-control">
                        <?php
                            $email = isset($_POST['email']) ? $_POST['email'] : "";
                            echo $email;
                        ?>
                    </div>
                </div>
            </div>

            <div class="btn-cont">
                <button class="button3 glow-button3" id="submit" type="submit" value="SEND">
                    <div class="alt-send-button">
                        <span class="send-text"><b>RETURN</b></span>
                    </div>
                </button>
            </div>

        </form>

    </div>

    <div class="footer-basic empat-footer-basic">
        <footer>
            <ul class="list-inline">
                <li class="list-inline-item"><a href="index.php">Home</a></li>
                <li class="list-inline-item"><a href="About_EKIN.php">About</a></li>
                <li class="list-inline-item"><a href="Contact_EKIN.php">Contact</a></li>
            </ul>
            <p class="copyright">EKIN © 2022</p>
        </footer>
    </div>

    <script src="javascript.js"></script>

</body>

</html>
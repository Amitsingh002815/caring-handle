<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Admin Dashboard </title>
    <link rel="stylesheet" href="style2.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"
        integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <form action="">

    <div class="warning">
        <h2> Sorry, this page doesn't support your device, Please use large screen device to see this page </h2>
    </div>

    <section>
        <!-- User Sidebar Starts from Here -->
        <div class="navbar" id="navigation">
          <div class="img_hand">
            <img src="https://www.pinclipart.com/picdir/big/321-3212147_caring-hands-clip-art-care-vector-black-and.png" style="height: 50px; width: 50px;">
            <span>Caring Hand</span>
          </div>

            <ul class="center-nav">
                <li><i class="fa-solid fa-house"></i><a href="#"> Dashboard </a></li>
                <li><i class="fa-solid fa-copy"></i><a href="ngo.html"> NGO Details</a></li>
                <li><i class="fa-solid fa-copy"></i><a href="donation.html"> Donation Details</a></li>
                <li><i class="fa-sharp fa-solid fa-chart-simple"></i><a href="analitics.html"> Analytics </a></li>
                <li><i class="fa-solid fa-thumbs-up"></i><a href="#"> Likes </a></li>
                <li><i class="fa-solid fa-comment"></i><a href="#"> Comments </a></li>
                <li><i class="fa-sharp fa-solid fa-floppy-disk"></i><a href="#"> Saves </a></li>
                <li><i class="fa-solid fa-share"></i><a href="#"> Share </a></li>
                <li><i class="fa-solid fa-rectangle-ad"></i><a href="#"> Ads </a></li>
            </ul>
            <ul class="bottom-nav">
                <hr>
                <li><i class="fa-solid fa-gear"></i><a href="#"> Settings </a></li>
                <li><i class="fa-solid fa-power-off"></i><a href="index.php"> Logout </a></li>
            </ul>
        </div>

        <!-- User Top Naviagation Starts from Here -->
        <div class="main-content">
            <div class="main-top">
                <div class="bars" id="menu">
                    <div class="bar"></div>
                    <div class="bar"></div>
                    <div class="bar"></div>
                </div>
                <div class="input">
                    <input type="text" placeholder="Search here...">
                </div>
                <div class="user">
                    <img src="https://icon-library.com/images/human-icon-png/human-icon-png-2.jpg" alt="">
                </div>
            </div>

            <!-- User Dashboard Starts from Here -->
            <div class="dashboard">
                <h2 class="heading"> Dashboard </h2>
                <div class="color-box">
                    <div class="box skyblue">
                        <p> <i class="fa-solid fa-thumbs-up"></i> </p>
                        <p> Total Likes </p>
                        <h3> 50,120 </h3>
                    </div>
                    <div class="box yellow">
                        <p><i class="fa-solid fa-comment"></i></p>
                        <p> Total Comments </p>
                        <h3> 25,120 </h3>
                    </div>
                    <div class="box purple">
                        <p> <i class="fa-solid fa-share"></i> </p>
                        <p> Total Share </p>
                        <h3> 10,320 </h3>
                    </div>
                    <div class="box red">
                        <p> <i class="fa-sharp fa-solid fa-floppy-disk"></i> </p>
                        <p> Total Saves </p>
                        <h3> 20,129 </h3>
                    </div>
                </div>
            </div>

                <div class="box">
                    <canvas id="donationChart" style="display: block; height: 400px; width: 400px;"></canvas>
                </div>
            </div>
        </div>
    </section>

</body>
</form>

<script>
    const hamburger = document.getElementById('menu');
    const navigation = document.getElementById('navigation');
    hamburger.addEventListener('click', function () {
        navigation.classList.toggle('active')
        console.log('clicked');
    })

</script>

</html>
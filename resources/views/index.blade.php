<!DOCTYPE html>
<html>
<head>
    <title>Park-Tag</title>
    <link rel="stylesheet" type="text/css" href="css/index.css">
</head>
<body>
    <header>
        <script src="https://code.jquery.com/jquery-3.2.1.js"></script>
        <script type="text/javascript">
                $(window).on('scroll', function(){
            if($(window).scrollTop()){
                $('nav').addClass('black');
                } else {
                $('nav').removeClass('black')}
            })
        </script>

        <div class="container">
                <nav onscroll="myFunction">
                    <div class="logo">
                            <p><img src="Logo.png" width="75px" height="75px"></p>
                    </div>
                    <ul>
                            <li><a href="">How it works</a></li>
                            <li><a href="/contact">Contact</a></li>
                            <li><a href="/login">Log In</a></li>
                    </ul>
                </nav>

                <section class="sec2">
                    <div class="content">
                        <div class="title">
                            <img style="padding-bottom: 20px" src="Web Banner v3.png">
                        </div>
                        <div class="selection-template">
                            <div class="selection-header">
                                <a href="">
                                    Hour/Day Ticket
                                </a>
                            </div>
<!--                        <div class="selection-header">
                                <a href="">
                                    Monthly Ticket
                                </a>
                            </div> -->
                        </div>
                        <div class="selection-template">
                            <div class="selection-body">
                                <input size="30" type="text" name="parking-place" placeholder="Where would you want to park?" class="inp-format">
                            </div class="selection-body">
                            <div class="submit-form">
                                <form id="bookingForm">
                                    <div class="form-template">
                                        Name <br><input type="text" name="name" placeholder="xXxPu$$yD3sTroYer69xXx" class="input-format">
                                    </div>

                                    <div class="date">
                                    <form action="/action_page.php">
                                    Date <br>
                                 <input type="date" name="date">
                                 <br><br>
                                 <form action="/action_page.php">
                                    Select arrival time<br>
                                        <input type="time" name="usr_time">
                                </form>

                                 <form action="/action_page.php">
                                    <br>Select leave time<br>
                                        <input type="time" name="usr_time">
                                </form>
                                </form>

                                <br>
                                    <div class="submit-button" id="btEstimate">
                                        <a class="btn" class="button-format">Estimate Price</a>
                                    </div>



                                </div>


                                    <div class="form-template">
                                        License Plate <br><input type="text" name="plateNumber" placeholder="B 3 GO" class="input-format">
                                    </div>
                                    <div class="form-template">
                                        Email <br><input type="text" name="email" placeholder="RANDZCORE@gmail.com" class="input-format">
                                    </div>
                                    <div class="form-template">
                                        Phone Number <br><input type="text" name="email" placeholder="(+62)" class="input-format">
                                    </div>
                                    <div class="form-template">
                                        Vehicle Registration Number <br><input type="password" name="registrationNumber" placeholder="********" class="input-format">
                                    </div>
                                    <div>
                                        Estimated Time <br><input type="text" name="EstimatedTime" disabled="true" class="input-format">
                                    </div>
                                    <div>
                                        Estimated Price <br><input type="text" name="EstimatedPrice" disabled="true" class="input-format">
                                    </div>
                                    <div class="submit-button">
                                        <a href="#" class="btn" data-type="submit" class="button-format">Submit</a>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="sec1">
                </section>
        </div>
    </header>

    <footer>
        <div class="footer">
            <div class="text">
            <a href="">Who are we?</a>
            <a href="">Contact</a>
            <a href="">Our car parks</a>
            <a href="">Legal conditions</a>
            <a href="">Cancellation condition</a>
            </div>
            <a href="https://www.facebook.com/">
                <img class="fblogo" src="facebook.png" width="50px">
            </a>
            <a href="https://twitter.com/">
                <img src="twitter.png" width="50px">
            </a>
        </div>
    </footer>
</body>
</html>

<script src="js/index.js"></script>
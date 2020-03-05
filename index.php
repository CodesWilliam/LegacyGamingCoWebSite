<?php include 'includes/header.php'?>
    <div class="largeImage">
        <img src="../images/HomeImage.jpg" alt="Home Image">
    </div>
    <section class="legacyGaming">
        <div class="whatIs">
            <h1>What Is Legacy Gaming</h1>
                <div class="legacyLogoImage">
                    <img src="../images/smallLogo.png" alt="Legacy Logo">
                </div>
                <p class="legacyOverview">
                    Legacy Gaming is a new age Arcade or what we like to call a Gaming
                    Lounge built for all ages of Gamers. We specialize in VR, PC, and all
                    Console Gaming with games of all Genres and no limits. <a href="whatIs.php">(Read More...)</a>

                </p>
        </div>
    </section>
    <section class="storeInfo">
        <div class="legacyHistory">
            <h2>What Legacy Gaming Offers</h2>
            <p class="history">
                We host the best gaming experience a person can have with the fastest
                speeds and best graphics one can experience. With our environment being
                hardwired and using Fiber, we host Gigabit speeds that are faster than
                residential gamers. <a href="offering.php">(Read More...)</a>
            </p>
        </div>
        <div class="gamingAtFinest">
            <h2>Gaming at its finest</h2>
            <p class="kidsZoneText">
                At Legacy we have a wide variety of Gaming Systems such as HTC Vive, PS4
                Pro VR, PS4 Pro (soon to be PS 5), X Box One X, and Nintendo Switch. We
                also host the fastest in PC Gaming with the Alienware Aurora's R8 for PC
                Gaming and R9 for our VR experience Overclocked. <a href="finest.php">(Read More...)</a>
            </p>
        </div>
        <div class="retro">
            <h2>Turn Back Time</h2>
            <p class="turnBackTime">
                At Legacy Gaming we not only host what is new and hot but we pay tribute
                to the gaming consoles that got us here. You can play most of the old
                consoles as we rotate them in and out. Everything from Pong to Atari and
                space Invaders to Coleco Vision. Come Game with us and learn a bit of
                history! <a href="turnBackTime.php">(Read More...)</a>
            </p>
        </div>
    </section>
    <section class="contact">
        <!--place contact form here-->
        <h2>Find Us</h2>
        <p class="findUs">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
            dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
            ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
            fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt
            mollit anim id est laborum.
        </p>
        <?php

            //Point this to the clients email when done
            $to = 'will@wfdesings.com';

            if (isset($_POST["FirstName"])) {
                //if data show

                $FirstName = clean_post('FirstName');
                $LastName = clean_post('LastName');
                $Email = clean_post('Email');
                $Comments = clean_post('Comments');

                $myText = "The user has entered their information as follows:" . PHP_EOL . PHP_EOL; //double newlines
                $myText .= $FirstName . " " . $LastName . PHP_EOL;
                $myText .= $Comments . PHP_EOL;


                $subject = "ITC240 Contact From " . $FirstName . " " . $LastName . " " . date("m/d/y, G:i:s");
                $headers = 'From: noreply@wfdesings.com' . PHP_EOL .
                    'Reply-To: ' . $Email . PHP_EOL .
                    'X-Mailer: PHP/' . phpversion();

                mail($to, $subject, $myText, $headers);

                echo '
                    <h4>Your message was sent!</h4>
                    <p>We apperciate your feedback.</p>
                    <p><a href="">Exit</a></p>
                ';

                } else {
                    //show form
                    echo '
                <form action="" method="post">
                    <div class="clearfix"></div>
                    <div class="form-group col-lg-12">
                      <label class="text-heading">Comments</label>
                      <textarea class="form-control" name="Comments" rows="6"></textarea>
                    </div>
                    <div class="form-group col-lg-12">
                      <button type="submit" class="btn btn-secondary">Submit</button>
                    </div>
                  </div>
                </form>
            ';
                }

        ?>
        <div class="googleMap">
            <!--Google Map Content-->
        </div>
    </section>

        

<?php include 'includes/footer.php'?>
<?php include 'includes/header.php'?>
    <div class="largeImage">
        <img src="../images/siteImages/attentionGrabber.jpg" alt="Home Image">
    </div>
    <section id="legacyGaming">
        <h1>What Is Legacy Gaming</h1>
        <div class="whatIs">
                <div class="legacyLogoImage">
                    <img src="../images/siteImages/smallLogo.png" alt="Legacy Logo">
                </div>
                <p class="legacyOverview">
                    Legacy Gaming is a new age Arcade or what we like to call a Gaming
                    Lounge built for all ages of Gamers. We specialize in Virtual Reality, PC, and all
                    Console Gaming with games of all Genres and no limits. <a href="readMore.php">(Read More...)</a>

                </p>
        </div>
    </section>
    <div class="whatIsImage">
        <img src="../images/siteImages/whatIs.jpg" alt="What Is Legacy">
    </div>
    <section id="storeInfo">
        <div class="storeInfoDiv">
            <h2>What Legacy Gaming Offers</h2>
            <p class="history">
                We host the best gaming experience a person can have with the fastest
                speeds and best graphics one can experience. With our environment being
                hardwired and using Fiber, we host Gigabit speeds that are faster than
                residential gamers. <a href="readMore.php">(Read More...)</a>
            </p>
        </div>
    </section>
    <div class="legacyOffers">
        <img src="../images/siteImages/offersImage.jpg" alt="Legacy Offers">
    </div>
    <section id="price">
        <div class="priceInfo">
            <h2>Our Pricing</h2>
            <div class="priceChart">
            <h3>All VR Headsets&#42;</h3>
            <ul>
                <li>&#36;40.00&#47;hr &#40;1 hour limit at a time&#41;</li>
                <li>&#36;20.00&#47half hour</li>
            </ul>
            <h3>Alienware R8 PC&#39s</h3>
            <ul>
                <li>&#36;30.00&#47;hr &#40;2 hour limit at a time&#41;</li>
                <li>&#36;15.00&#47;half hour</li>
            </ul>
            <h3>Newer Consoles</h3>
            <ul>
                <li>&#36;25.00&#47;hr &#40;2 hour limit at a time&#41;</li>
                <li>&#36;12.50&#47;half hour</li>
            </ul>
            <h3>Turn Back Time Consoles</h3>
            <ul>
                <li>&#36;10.00&#47;hr &#40;2 hour limit at a time&#41;</li>
                <li>&#36;5.00&#47;half hour</li>
            </ul>
            </div>
        </div>
    </section>
    <section id="gamingFinestInfo">
        <div class="gamingAtFinest">
            <h2>Gaming at its finest</h2>
            <p class="gamingFinestText">
                At Legacy we have a wide variety of Gaming Systems such as HTC Vive, PS4 Pro VR, Oculus VR , PS4 Pro
                (soon to be PS 5), X Box One X (soon to be Series X), and Nintendo Switch (soon to be Switch Pr.
                We also host the fastest in PC Gaming with the Alienware Aurora's R8 for PC Gaming and our VR experience
                Overclocked. Combined with our fiber ran high-speed business internet connections and High definition
                Gaming Monitors you will play at speeds and clarity you cannot get in a residential setting!
                <a href="readMore.php">(Read More...)</a>
            </p>
        </div>
    </section>
    <div class="finestGaming">
        <img src="../images/siteImages/finestImage.jpg" alt="Gaming At Its Finest">
    </div>
    <section id="retroInfo">
        <div class="retro">
            <h2>Turn Back Time</h2>
            <p class="turnBackTime">
                At Legacy Gaming we not only host what is new and hot but we pay tribute
                to the gaming consoles that got us here. You can play most of the old
                consoles as we rotate them in and out. Everything from Pong to Atari and
                space Invaders to Coleco Vision. Come join our New Age Arcade and game with us and even learn a bit of
                history! <a href="readMore.php">(Read More...)</a>
            </p>
        </div>
    </section>
    <div class="turnBackTimeImage">
        <img src="../images/siteImages/turnBackTime.jpg" alt="Gaming At Its Finest">
    </div>
    <section id="contact">
        <!--place contact form here-->
        <h2>Find Us</h2>
        <p class="findUs">
            Address&#58; 654 Strander Blvd <br/> Tukwila&#44; WA 98188 <br/>
            Phone&#58; <a href="425-572-0775">425&#45;572&#45;0775</a><br/>
            Email &#58; <a href="mailto:info@legacygcc.com">info@legacygcc.com</a>
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
    </section>
    <div class="googleMap">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2697.6728030575914!2d-122.2472268843746!
            3d47.45731717917506!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x54905d28186e07d7%3A0x808f7690e464f86
            !2s654%20Strander%20Blvd%2C%20Seattle%2C%20WA%2098188!5e0!3m2!1sen!2sus!4v1588126459039!5m2!1sen!2sus"
                width="400" height="250" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false"
                tabindex="0">
        </iframe>
    </div>

        

<?php include 'includes/footer.php'?>
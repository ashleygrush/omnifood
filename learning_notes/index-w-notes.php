<!DOCTYPE html>
<html lang="en">
<!------------------------------------------------>
<!-- HEAD -->
<!------------------------------------------------>
    <head>
        <!-- Declares character encoding. -->
        <meta charset="utf-8">
        <!-- Tells mobile phones/tablets to not zoom out to try and view the whole page. -->
        <meta name="viewport" content="width-device-width,initial-scale=1.0"> 
         <!-- Meta tag "description. Used by google and other SEO's to find the site based on particular keywords used. -->
        <meta name="description" content="Omni food is a premium food delivery service with the mission to bring afforable and healthy meals to as many people as possible.">
        
        <!-- Normalizes CSS -->
        <!-- Vendor: http://codingheroes.io/resources/ ?? -->
        <link rel="stylesheet" type="text/css" href="vendors/css/normalize.css">
        <!-- Links to Response Grid CSS File (modifies website design responsiveness for web, tablet and mobile viewing) -->
        <!-- Vendor: http://www.responsivegridsystem.com/ -->
        <link rel="stylesheet" type="text/css" href="vendors/css/grid.css">
        <!-- References Style sheet to be built -->
        <link rel="stylesheet" type="text/css" href="resources/css/style.css">
        <!-- References Icon Style sheet downloaded from https://ionicons.com/v2/. Vendor: https://ionicons.com/v2/ -->
        <link rel="stylesheet" type="text/css" href="vendors/css/ionicons.min.css">
        <!-- References CSS Anmiations. Package from https://animate.style/ (animate.css file from course files)-->
        <link rel="stylesheet" type="text/css" href="vendors/css/animate.css">
        <!-- Adds Lato Font Style from Google to website. -->
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <!-- Font style sheet. -->
        <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;1,300&display=swap" rel="stylesheet">
        <!-- Media Queries CSS sheet to making the webpage responsive to screen px size. -->
        <link rel="stylesheet" type="text/css" href="resources/css/queries.css">
        
        <!-- Links to all FavIcons. Images/links generated at https://realfavicongenerator.net/. -->
        <link rel="apple-touch-icon" sizes="180x180" href="/resources/favicons/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="/resources/favicons/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="/resources/favicons/favicon-16x16.png">
        <link rel="manifest" href="/resources/favicons/site.webmanifest">
        <link rel="mask-icon" href="/resources/favicons/safari-pinned-tab.svg" color="#ff0000">
        <link rel="shortcut icon" href="/resources/favicons/favicon.ico">
        <meta name="msapplication-TileColor" content="#ffffff">
        <meta name="msapplication-config" content="/resources/favicons/browserconfig.xml">
        <meta name="theme-color" content="#ffffff">

        <!-- Website Title -->
        <title>Omnifood</title>
    </head>
    
<!------------------------------------------------>
<!-- BODY (Unoffical Section 0) -->
<!------------------------------------------------>
    <body>
        <!-- Header "Section" different from DIV element. Tells Google, hey, there's info here you need to see. -->
        <header>  
            <!-- SECTION 0 = Navigation Bar/Row at top of page  -->
            <nav>
                <div class="row">
                    <!-- Omnifood Logo -->
                    <img src="resources/img/logo-white.png" alt="Omnifood logo" class="logo">
                    <!-- Omnifood Logo - Black for sticky Navigation. -->
                    <img src="resources/img/logo.png" alt="Omnifood logo" class="logo-black">
                    <!-- Website Navigation. Class js-- used for mobile applications. -->
                    <ul class="main-nav js--main-nav">
                        <!-- Anchors to Section 1 - Features -->
                        <li><a href="#features">Food delivery</a></li>  
                        <!-- Anchors to Section 3 - Works -->
                        <li><a href="#works">How it works</a></li> 
                        <!-- Anchors to Section 4 - Cities -->
                        <li><a href="#cities">Our cities</a></li>
                        <!-- Anchors to Section 6 - Plans -->
                        <li><a href="#plans">Sign up</a></li> 
                    </ul>
                    <!-- Icon for Mobile Navigation. Class js-- to add animation/menu. -->
                    <a class="mobile-nav-icon js--nav-icon"><i class="ion-navicon-round"></i></a>
                </div>
            </nav>
            <!-- Text as found over the main background image (main page)-->
            <div class="hero-text-box">
                <!-- Info as found in Section 0 of the contents provided. -->
                <h1>Goodbye junk food. <br> Hello super healthy meals.</h1>   
                    <!-- Link to scroll to the "I'm Hungry" section. js-- class for jQuery scroll. -->
                    <a class="btn btn-full js--scroll-to-plans" href="#">I'm hungry</a>
                    <!-- Link to scroll to the "Show me More" section.  js-- class for jQuery scroll. -->
                    <a class="btn btn-ghost js--scroll-to-start" href="#">Show me more</a>
            </div>
        </header>
        
<!------------------------------------------------>
<!-- SECTION 1 = FEATURES -->
<!------------------------------------------------>
        <!-- Section contains class js-- for jQuery as to add second, similar class name (cleaner transitions between CSS and JS. -->
        <!-- Section "id" links to anchor tag above in navigation. -->
        <section class="seaction-features js--section-features" id="features">
            <div class="row">
                <!-- Header for Section. &mdash; is html code for large dash/bar character -->
                <h2>Get food fast &mdash; not fast food.</h2>
                <p class="long-copy"> 
                Hello, we’re Omnifood, your new premium food delivery service. We know you’re always busy. No time for cooking. So let us take care of that, we’re really good at it, we promise!
                </p>
            </div>
            <!-- New row to format grid and utilize columns. Total of 4 cloumns. (See additional html note below). -->
            <!-- Contains second, js-- class to add in CSS/jQuery animations. -->
            <div class="row js--wp-1">
                <!-- Column 1 of 4. "Box" added for CSS formatting. -->
                <div class="col span-1-of-4 box">
                    <!-- iOS infinity icon referenced from https://ionicons.com/v2/ -->
                    <i class="ion-ios-infinite-outline icon-big"></i>
                    <h3>Up to 365 days/year</h3>
                    <p>
                    Never cook again! We really mean that. Our subscription plans include up to 365 days/year coverage. You can also choose to order more flexibly if that's your style.
                    </p>
                </div>
                 <!-- Column 2 of 4. "Box" added for CSS formatting. -->
                <div class="col span-1-of-4 box">
                    <!-- iOS Stopwatch icon referenced from https://ionicons.com/v2/ -->
                    <i class="ion-ios-stopwatch-outline icon-big"></i>
                    <h3>Ready in 20 minutes</h3>
                    <p>
                    You're only twenty minutes away from your delicious and super healthy meals delivered right to your home. We work with the best chefs in each town to ensure that you're 100% happy.
                    </p>
                </div>
                <!-- Column 3 of 4. "Box" added for CSS formatting. -->
                <div class="col span-1-of-4 box">
                    <!-- iOS Carrot icon referenced from https://ionicons.com/v2/ -->
                    <i class="ion-ios-nutrition-outline icon-big"></i>
                    <h3>100% organic</h3>
                    <p>
                    All our vegetables are fresh, organic and local. Animals are raised without added hormones or antibiotics. Good for your health, the environment, and it also tastes better!
                    </p>
                </div>
                <!-- Column 4 of 4. "Box" added for CSS formatting. -->
                <div class="col span-1-of-4 box">
                    <!-- iOS Cart icon referenced from https://ionicons.com/v2/ -->
                    <i class="ion-ios-cart-outline icon-big"></i>
                    <h3>Order anything</h3>
                    <p>
                    We don't limit your creativity, which means you can order whatever you feel like. You can also choose from our menu containing over 100 delicious meals. It's up to you!
                    </p>
                </div>
            </div>
        </section>
        
<!------------------------------------------------>
<!-- SECTION 2 - MEALS -->
<!------------------------------------------------>
        <section class="section-meals">
            <!-- Top Row of images-->
            <!-- Includes clearfix to clear CSS Float element -->
            <ul class="meals-showcase clearfix">
                <!-- Image #1 - Korean style-->
                <li>
                    <figure class="meal-photo">
                        <img src="resources/img/1.jpg" alt="Korean bibimbap with egg and vegetables">
                    </figure>
                </li>
                <!-- Image #2 - Pizza -->
                <li>
                    <figure class="meal-photo">
                        <img src="resources/img/2.jpg" alt="Simple italian pizza with cherry tomatoes">
                    </figure>
                </li>
                <!-- Image #3 - Chicken -->
                <li>
                    <figure class="meal-photo">
                        <img src="resources/img/3.jpg" alt="Chicken breast steak with vegetables">
                    </figure>
                </li>
                <!-- Image #4 - Soup -->
                <li>
                    <figure class="meal-photo">
                        <img src="resources/img/4.jpg" alt="Autumn pumpkin soup">
                    </figure>
                </li>
            </ul>
            <!-- Bottom Row of images-->
            <!-- Includes clearfix to clear CSS Float element -->
            <ul class="meals-showcase clearfix">
                <!-- Image #5 - Beef-->
                <li>
                    <figure class="meal-photo">
                        <img src="resources/img/5.jpg" alt="Paleo beef steak with vegetables">
                    </figure>
                </li>
                <!-- Image 6 - Egg -->
                <li>
                    <figure class="meal-photo">
                        <img src="resources/img/6.jpg" alt="Healthy baguette with egg and vegetables">
                    </figure>
                </li>
                <!-- Image #7 - Burger -->
                <li>
                    <figure class="meal-photo">
                        <img src="resources/img/7.jpg" alt="Burger with cheddar and baco">
                    </figure>
                </li>
                <!-- Image #8 - Granola -->
                <li>
                    <figure class="meal-photo">
                        <img src="resources/img/8.jpg" alt="Granola with cherries and strawberries">
                    </figure>
                </li>
            </ul>
        </section>
        
<!------------------------------------------------>
<!-- SECTION 3 - HOW IT WORKS (STEPS) -->
<!------------------------------------------------>
        <!-- Section "id" links to anchor tag above in navigation. -->
        <section class="section-steps" id="works">
            <div class="row">
                <!-- Header for Section. &mdash; is html code for large dash/bar character -->
                <h2>How it works &mdash; Simple as 1, 2, 3</h2>
            </div>
            <!-- New row to format grid and utilize columns. Total of 2 cloumns. (See additional html note below). -->
            <div class="row">
                <!-- Left Column. steps=-box added for CSS column formatting. -->    
                <div class="col span-1-of-2 steps-box">
                    <!-- js-- class animates phone image. -->   
                    <img src="resources/img/app-iPhone.png" alt="Omnifood app on iphone" class="app-screen js--wp-2">
                </div>
                <!-- Right Column. steps=-box added for CSS column formatting. -->  
                <div class="col span-1-of-2 steps-box">
                    <!-- App Step #1 -->
                    <div class="works-step">
                        <div>1</div>
                        <p>Choose the subscription plan that best fits your needs and sign up today.</p> 
                    </div>
                    <!-- App Step #2 -->
                    <div class="works-step">
                        <div>2</div>
                        <p>Order your delicious meal using our mobile app or website. Or you can even call us!</p> 
                    </div>
                    <!-- App Step #3 -->
                    <div class="works-step">
                        <div>3</div>
                        <p>Enjoy your meal after less than 20 minutes. See you the next time!</p> 
                    </div>
                    <!-- Links to App in Apple/Google App Stores -->
                    <a href="#" class="btn-app"><img src="resources/img/download-app.svg" alt="App Store Button"></a>
                    <a href="#" class="btn-app"><img src="resources/img/download-app-android.png" alt="Play Store Button"></a>
                </div>    
            </div>
        </section>
        
<!------------------------------------------------>
<!-- SECTION 4 - CITIES -->
<!------------------------------------------------>
        <!-- Section "id" links to anchor tag above in navigation. -->
        <section class="section-cities" id="cities">
            <div class="row">
                <!-- Header for Section. -->
                <h2>We're currently in these cities</h2>
            </div>
            <!-- New row to format grid and utilize columns. Total of 4 cloumns. (See additional html note below). -->
            <!-- Class js-- adds fadeIn animation when reached. -->
            <div class="row js--wp-3">
                <!-- Column 1 of 4. LISBON. "Box" added for CSS formatting. -->
                <div class="col span-1-of-4 box">
                    <!-- Lisbon -->
                    <img src="resources/img/lisbon-3.jpg" alt="Libon">
                    <h3>Lisbon</h3>
                    <!-- Users -->
                    <div class="city-features">
                        <!-- Icon referenced from https://ionicons.com/v2/. Icon-small to format within CSS -->
                        <i class="ion-ios-person icon-small"></i>
                        1600+ happy eaters
                    </div>
                     <!-- Chefs -->
                    <div class="city-features">
                        <!-- Icon referenced from https://ionicons.com/v2/. Icon-small to format within CSS -->
                        <i class="ion-ios-star icon-small"></i>
                        60+ top chefs
                     </div>
                    <!-- Twitter -->
                    <div class="city-features">
                        <!-- Icon referenced from https://ionicons.com/v2/. Icon-small to format within CSS -->
                        <i class="ion-social-twitter icon-small"></i>
                        <a href="#">@omnifood_lx</a>
                     </div>
                </div>
                <!-- Column 2 of 4. SAN FRANSISCO. "Box" added for CSS formatting. -->
                <div class="col span-1-of-4 box">
                    <!-- San Francisco -->
                    <img src="resources/img/san-francisco.jpg" alt="San Francisco">
                    <h3>San Francisco</h3>
                    <!-- Users -->
                    <div class="city-features">
                        <!-- Icon referenced from https://ionicons.com/v2/. Icon-small to format within CSS -->
                        <i class="ion-ios-person icon-small"></i>
                        3700+ happy eaters
                    </div>
                     <!-- Chefs -->
                    <div class="city-features">
                        <!-- Icon referenced from https://ionicons.com/v2/. Icon-small to format within CSS -->
                        <i class="ion-ios-star icon-small"></i>
                        160+ top chefs
                     </div>
                    <!-- Twitter -->
                    <div class="city-features">
                        <!-- Icon referenced from https://ionicons.com/v2/. Icon-small to format within CSS -->
                        <i class="ion-social-twitter icon-small"></i>
                        <a href="#">@omnifood_sf</a>
                     </div>
                </div>
        <!-- Column 3 of 4. BERLIN. "Box" added for CSS formatting. -->
                <div class="col span-1-of-4 box">
                    <!-- Lisbon -->
                    <img src="resources/img/berlin.jpg" alt="Berlin">
                    <h3>Berlin</h3>
                    <!-- Users -->
                    <div class="city-features">
                        <!-- Icon referenced from https://ionicons.com/v2/. Icon-small to format within CSS -->
                        <i class="ion-ios-person icon-small"></i>
                        2300+ happy eaters
                    </div>
                     <!-- Chefs -->
                    <div class="city-features">
                        <!-- Icon referenced from https://ionicons.com/v2/. Icon-small to format within CSS -->
                        <i class="ion-ios-star icon-small"></i>
                        110+ top chefs
                     </div>
                    <!-- Twitter -->
                    <div class="city-features">
                        <!-- Icon referenced from https://ionicons.com/v2/. Icon-small to format within CSS -->
                        <i class="ion-social-twitter icon-small"></i>
                        <a href="#">@omnifood_berlin</a>
                     </div>
                </div>
        <!-- Column 4 of 4. LONDON. "Box" added for CSS formatting. -->
                <div class="col span-1-of-4 box">
                    <!-- Lisbon -->
                    <img src="resources/img/london.jpg" alt="London">
                    <h3>London</h3>
                    <!-- Users -->
                    <div class="city-features">
                        <!-- Icon referenced from https://ionicons.com/v2/. Icon-small to format within CSS -->
                        <i class="ion-ios-person icon-small"></i>
                        1200+ happy eaters
                    </div>
                     <!-- Chefs -->
                    <div class="city-features">
                        <!-- Icon referenced from https://ionicons.com/v2/. Icon-small to format within CSS -->
                        <i class="ion-ios-star icon-small"></i>
                        50+ top chefs
                     </div>
                    <!-- Twitter -->
                    <div class="city-features">
                        <!-- Icon referenced from https://ionicons.com/v2/. Icon-small to format within CSS -->
                        <i class="ion-social-twitter icon-small"></i>
                        <a href="#">@omnifood_london</a>
                     </div>
                </div>
            </div>
        </section>
                           
<!------------------------------------------------>
<!-- SECTION 5 - TESTIMONIALS -->
<!------------------------------------------------>
        <section class="section-testimonials">
            <div class="row">
                <!-- Header for Section. -->
                <h2>Our customers can't live without us</h2>
            </div>
            <!-- New row to format grid and utilize columns. Total of 3 cloumns. (See additional html note below). -->
            <div class="row">
                <!-- Review #1 of 3. -->
                <div class="col span-1-of-3">
                    <!-- Blockquote, used for quoting other references. Cite to add author. -->
                    <blockquote>
                    Omnifood is just awesome! I just launched a startup which leaves me with no time for cooking, so Omnifood is a life-saver. Now that I got used to it, I couldn't live without my daily meals!
                        <cite><img src="resources/img/customer-1.jpg" alt="Customer 1 photo">Alberto Duncan</cite>
                    </blockquote>
                </div>
                <!-- Review #2 of 3. -->
                <div class="col span-1-of-3">
                    <!-- Blockquote, used for quoting other references. Cite to add author. -->
                    <blockquote> 
                    Inexpensive, healthy and great-tasting meals, delivered right to my home. We have lots of food delivery here in Lisbon, but no one comes even close to Omifood. Me and my family are so in love!
                        <cite><img src="resources/img/customer-2.jpg" alt="Customer 2 photo">Joana Silva</cite>
                    </blockquote>
                </div>
                <!-- Review #3 of 3. -->
                <div class="col span-1-of-3">
                    <!-- Blockquote, used for quoting other references. Cite to add author. -->
                    <blockquote>
                    I was looking for a quick and easy food delivery service in San Franciso. I tried a lot of them and ended up with Omnifood. Best food delivery service in the Bay Area. Keep up the great work!
                        <cite><img src="resources/img/customer-3.jpg" alt="Customer 3 photo">Milton Chapman</cite>
                    </blockquote>
                </div>
            </div>
        </section>  

<!------------------------------------------------>
<!-- SECTION 6 - PLANS -->
<!------------------------------------------------>
        <!-- Section plans. Contains second js class name to "link" button in Section 0. -->
        <!-- Section "id" links to anchor tag above in navigation. -->
        <section class="section-plans js--section-plans" id="plans">
            <div class="row">
                <h2>Start eating healthy today</h2>
            </div>
            <!-- New row to format grid and utilize columns. Total of 3 cloumns. (See additional html note below). -->
            <div class="row">
                <!-- Plan #1 of 3. -->
                <div class="col span-1-of-3">
                    <!-- Box containing "Header" of box. Class js-- adds pulse animation. -->
                    <div class="plan-box js--wp-4">
                        <!-- Separated into 3 containers <div> to help with formating the box wider (90% of page). -->
                        <div>
                            <h3>Premium</h3>
                            <!-- <span> used to call out particular section within CSS and format differently. -->
                            <p class="plan-price">$399 <span>/ per month</span></p>
                            <p class="plan-price-meal">That’s only 14.90$ per meal</p>
                        </div>
                        <!-- Box containing icons/checklist. -->
                        <div>
                            <ul>
                                <li><i class="ion-ios-checkmark-empty icon-small"></i>1 meal every day</li>
                                <li><i class="ion-ios-checkmark-empty icon-small"></i>Order 24/7</li>
                                <li><i class="ion-ios-checkmark-empty icon-small"></i>Access to newest creations</li>
                                <li><i class="ion-ios-checkmark-empty icon-small"></i>Free delivery</li>
                            </ul>
                        </div>
                        <!-- Box containing button to link/signup -->
                        <div>
                            <a href="#" class="btn btn-full">Sign up now</a>
                        </div>
                    </div>
                </div>
                <!-- Plan #2 of 3. -->
                <div class="col span-1-of-3">
                    <!-- Box containing "Header" of box. -->
                    <div class="plan-box">
                        <div>
                            <h3>Pro</h3>
                            <!-- <span> used to call out particular section within CSS and format differently. -->
                            <p class="plan-price">$149 <span>/ per month</span></p>
                            <p class="plan-price-meal">That’s only 13.30$ per meal</p>
                        </div>
                        <!-- Box containing icons/checklist. -->
                        <div>
                            <ul>
                                <li><i class="ion-ios-checkmark-empty icon-small"></i>1 meal 10 days/month</li>
                                <li><i class="ion-ios-checkmark-empty icon-small"></i>Order 24/7</li>
                                <li><i class="ion-ios-checkmark-empty icon-small"></i>Access to newest creations</li>
                                <li><i class="ion-ios-checkmark-empty icon-small"></i>Free delivery</li>
                            </ul>
                        </div>
                        <!-- Box containing button to link/signup -->
                        <div>
                            <a href="#" class="btn btn-ghost">Sign up now</a>
                        </div>
                    </div>
                </div>
                <!-- Plan #3 of 3. -->
                <div class="col span-1-of-3">
                    <!-- Box containing "Header" of box. -->
                    <div class="plan-box">
                        <div>
                            <h3>Starter</h3>
                            <!-- <span> used to call out particular section within CSS and format differently. -->
                            <p class="plan-price">$19 <span>/ per meal</span></p>
                            <!-- &nbsp; is the CSS tag for space. Without it, no line/data was present so it didn't match. -->
                            <p class="plan-price-meal">&nbsp;</p>
                        </div>
                        <!-- Box containing icons/checklist. -->
                        <div>
                            <ul>
                                <li><i class="ion-ios-checkmark-empty icon-small"></i>1 meal</li>
                                <li><i class="ion-ios-checkmark-empty icon-small"></i>Order from 8 am to 12 pm</li>
                                <li><i class="ion-ios-close-empty icon-small"></i> </li>
                                <li><i class="ion-ios-checkmark-empty icon-small"></i>Free delivery</li>
                            </ul>
                        </div>
                        <!-- Box containing button to link/signup -->
                        <div>
                            <a href="#" class="btn btn-ghost">Sign up now</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
 
<!------------------------------------------------>
<!-- SECTION 7 - CONTACT US -->
<!------------------------------------------------>
        <!-- Form ID used to redirect users when submitting form information. -->
        <section class="section-form" id="form">
            <div class="row">
                <h2>We're happy to hear from you</h2>
            </div>
            <div class="row">
                <!-- HTML form tag is used to collect info to then export. -->
                <!-- Mailer.php executes a script to be run when form submit button is selected below. -->
                <form method="post" action="mailer.php" class="contact-form">
                    <!-- Form Success/Error Messages -->
                    <div class="row">
                            <!-- Added PHP format to send form warning responses. -->
                            <!-- Need to save index.html as .index.php to save as expected. -->
                            <!-- success = 1 (Correct) | success = -1 (error). -->
                            <?php
                            if($_GET["success"] == 1) {
                                echo "<div class=\"form-messages success\">Thank you! Your message has been sent.</div>";
                            }
                            if($_GET["success"] == -1) {
                                echo "<div class=\"form-messages error\"> Opps! Something went wrong. Please try again.</div>";
                            }
                            ?>
                        </div>
                        <!-- Text Field - Name -->
                        <div class="row">
                        <div class="col span-1-of-3">
                            <!--Label tag. With for="", used to link to action below. See Forms for more info. -->
                            <label for="name">Name</label>
                        </div>
                        <!-- Using Column 2/3 to make it bigger. 66% in size.-->
                        <div class="col span-2-of-3">
                            <!-- Input type text used to collect text from user. See Forms for more info. -->
                            <input type="text" name="name" id="name" placeholder="Your name" required>
                        </div>
                    </div>
                    <!-- Text Field - Email -->
                    <div class="row">
                        <div class="col span-1-of-3">
                            <!--Label tag. With for="", used to link to action below. See Forms for more info. -->
                            <label for="email">Email</label>
                        </div>
                        <!-- Using Column 2/3 to make it bigger. 66% in size.-->
                        <div class="col span-2-of-3">
                            <!-- Input type text used to collect text from user. See Forms for more info. -->
                            <input type="email" name="email" id="email" placeholder="Your email" required>
                        </div>
                    </div>
                    <!-- Drop Down Field - Find-us -->
                    <div class="row">
                        <div class="col span-1-of-3">
                            <!--Label tag. With for="", used to link to action below. See Forms for more info. -->
                            <label for="find-us">How did you find us?</label>
                        </div>
                        <!-- Using Column 2/3 to make it bigger. 66% in size.-->
                        <div class="col span-2-of-3">
                            <!-- Select is used to provide options to the user to select.-->
                            <select name="find-us" id="find-us">
                                 <!-- Options available within the drop down field -->
                                <option value="online">Online</option>
                                 <!-- Selected added makes it the default/primary to appear -->
                                <option value="social-media" selected>Social media</option>
                                <option value="other">Other</option>
                            </select>    
                        </div>
                    </div>
                    <!-- Checkbox Field - Newsletter -->
                    <div class="row">
                        <div class="col span-1-of-3">
                            <label>Newsletter?</label>
                        </div>
                        <!-- Using Column 2/3 to make it bigger. 66% in size.-->
                        <div class="col span-2-of-3">
                            <!-- Input type checkbox used to collect bollean response from user. Checked sets defaulted to checked.-->
                            <input type="checkbox" name="newsletter" id="newsletter" checked> Yes! Please sign me up!
                        </div>
                    </div>
                     <!-- Text Area Field - Message -->
                    <div class="row">
                        <div class="col span-1-of-3">
                            <label>Drop us a line</label>
                        </div>
                        <!-- Using Column 2/3 to make it bigger. 66% in size.-->
                        <div class="col span-2-of-3">
                            <!-- Text area, used to collect a larger text amount from user. -->
                            <textarea name="message" placeholder="Tell us what you think!"></textarea>
                        </div>
                    </div>
                    <!-- Submit Form - Button -->
                    <div class="row">
                        <div class="col span-1-of-3">
                            <!-- &nbsp; is the CSS tag for space. Without it, if no line/data is present, it won't line up. -->
                            <label>&nbsp;</label>
                        </div>
                        <!-- Using Column 2/3 to make it bigger. 66% in size.-->
                        <div class="col span-2-of-3">
                            <!-- Input type submit used to submit from data from the user. -->
                            <input type="submit" value="Submit!">
                        </div>
                    </div>
                    
                </form> 
            </div>
        </section>

<!------------------------------------------------>
<!-- SECTION 8 - FOOTER -->
<!------------------------------------------------>
        <footer>
            <div class="row">
                <!-- Column for left navigation - Additional Menu Links -->
                <div class="col span-1-of-2">
                    <ul class="footer-nav">
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">Blog</a></li>
                        <li><a href="#">Press</a></li>
                        <li><a href="#">iOS App</a></li>
                        <li><a href="#">Android App</a></li>
                    </ul>
                </div>
                <!-- Column for right navigation - Social media Links -->
                <div class="col span-1-of-2">
                    <ul class="social-links">
                        <li><a href="#"><i class="ion-social-facebook"></i></a></li>
                        <li><a href="#"><i class="ion-social-twitter"></i></a></li>
                        <li><a href="#"><i class="ion-social-googleplus"></i></a></li>
                        <li><a href="#"><i class="ion-social-instagram"></i></a></li>
                    </ul>
                </div>
            </div>
            <!-- Paragraph to contain copyright and/or other info. -->
            <div class="row">
                <p> 
                Website created by Ashley Almeida Grush | Copyright &copy; 2021 <br> 
                All rights reserved.
                </p>
            </div>
        </footer>
    
<!------------------------------------------------>
<!-- SCRIPTS -->
<!------------------------------------------------>
    <!-- Enables JQuery Animations. Package from https://developers.google.com/speed/libraries -->   
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Respond.js enables older browswers to read and understand Media Queries. Package from https://www.jsdelivr.com/ -->  -->  
    <script src="https://cdn.jsdelivr.net/npm/respond.js@1.4.2/dest/respond.min.js"></script>
    <!-- HTML5shive enables HTML Styles older browswers (before HTML5 existed). Package from https://www.jsdelivr.com/ -->  --> 
    <script src="https://cdn.jsdelivr.net/npm/html5shiv.min.js@3.7.2/html5shiv.min.js"></script>
    <!-- SelectIVizr allows CSS3 Pseudo classes such as first-child and last-child on older web browsers.Package from https://www.jsdelivr.com/ -->  --> 
    <script src="https://cdn.jsdelivr.net/npm/selectivizr@1.0.3/selectivizr.min.js"></script>
    <!-- Enables Sticky Navigation - Waypoint Links. Package from http://imakewebthings.com/waypoints/ --> 
    <script src="vendors/js/jquery.waypoints.min.js"></script>
    <!-- Imports "Local" JQuery Animations. Must always be last script called. -->  
    <script src="resources/js/script.js"></script>
        
    <!-- When launched, add Google Analytics tracker code here. -->  
    <!--  <script src="https://analytics.google.com"></script> -->
    <!--  <script src="https://analytics.google.com"></script> -->
    
        
<!------------------------------------------------>
<!-- END OF PAGE -->
<!------------------------------------------------>
    <!-- Closing Body -->    
    </body>
    
</html>


<!------------------------------------------------>
<!-- ADDITIONAL HTML NOTES -->
<!------------------------------------------------>

<!----- ROWS ----->
<!-- 
    Div Class "row" (when placed in the body tags) is used to test the center/formatting of the .row css method. 
    Example: Remove div > /div from comment and place it body tags to demonstrait. 
        <div class="row">
            <h1>Omnifood</h1>
                <p1>Some words here.</p1>
        </div>
-->

<!----- COLUMNS ----->
<!--
    Columns CSS structor provided within grid.css file. Grid downloaded from http://www.responsivegridsystem.com/ 
    Icon "i" class also contains second class "icon-big" to format icon size/color within CSS.
    Column class also contains second class "box" to format columns within CSS.
    Two Columns: "col span-1-of-2"
    FourColumns: "col span-1-of-4"
-->

<!----- FORMS ----->
<!--
    Input tag. Used to collect information from the user. Type is the type of data it will collecct. Name and ID assigns info used to export data. Placeholder contains info within the field before user enters data (think hint). Required makes it a necessary field
    
    Label tag. When for="" is added to label, it ties the label to an input/action with name="" below. If label is then clicked on site, will select the input/action containing the same value. 
-->

<!----- STICKY NAVIGATION BUILDING ----->
<!--
    Not needed when jQuery call is completed, but add class="sticky" to Nav section for buildout. 
    <nav class="sticky">
-->


<!----- SEO - VALIDATION ----->
<!--
    Paste all code above (minus the comments) to validate site for google. 
    https://validator.w3.org/nu/#textarea
-->
<!------------------------------------------------>
<!-- END -->
<!------------------------------------------------>
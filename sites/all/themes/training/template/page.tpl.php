<div class="site-main" id="sTop">
    <div class="site-header">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <ul class="social-icons">
                        <?php print render($page['header']); ?> 
                    </ul>
                </div> <!-- /.col-md-12 -->
            </div> <!-- /.row -->
        </div> <!-- /.container -->
        <div class="main-header">
            <div class="container">
                <div id="menu-wrapper">
                    <div class="row">
                        <div class="logo-wrapper col-md-2 col-sm-2">
                            <h1>
                                <a href="#">Flex</a>
                            </h1>
                        </div> <!-- /.logo-wrapper -->
                        <div class="col-md-10 col-sm-10 main-menu text-right">
                            <div class="toggle-menu visible-sm visible-xs"><i class="fa fa-bars"></i></div>
                                <?php print theme('links__system_main_menu', array('links' => $main_menu)); ?>                              
                        </div> <!-- /.main-menu -->
                    </div> <!-- /.row -->
                </div> <!-- /#menu-wrapper -->                        
            </div> <!-- /.container -->
        </div> <!-- /.main-header -->
    </div> <!-- /.site-header -->
    <?php print render($page['slide']); ?>                
</div> <!-- /.site-main -->
<div class="content-section" id="services">
    <div class="container">
        <div class="row">
            <div class="heading-section col-md-12 text-center">
                <h2>Our Services</h2>
                <p>We make mobile ready websites for you</p>
            </div> <!-- /.heading-section -->
        </div> <!-- /.row -->
        <div class="row">
            <?php print render($page['service']); ?>
        </div> <!-- /.row -->
    </div> <!-- /.container -->
</div> <!-- /#services -->
<div class="content-section" id="portfolio">
    <div class="container">
        <div class="row">
            <div class="heading-section col-md-12 text-center">
                <h2>Our Portfolio</h2>
                <p>What we have done so far</p>
            </div> <!-- /.heading-section -->
        </div> <!-- /.row -->
        <div class="row">
            <?php print render($page['portfolio']); ?>
        </div> <!-- /.row -->
    </div> <!-- /.container -->
</div> <!-- /#portfolio -->
<div class="content-section" id="our-team">
    <div class="container">
        <div class="row">
            <div class="heading-section col-md-12 text-center">
                <h2>Our Team</h2>
                <p>Get to know our people and company</p>
            </div> <!-- /.heading-section -->
        </div> <!-- /.row -->
        <div class="row">
            <?php print render($page['our_team']); ?>
        </div> <!-- /.row -->
        <div class="row">
            <div class="col-md-12 text-center">
                <div class="skills-heading">
                    <h3 class="skills-title">Our web design skills</h3>
                    <p class="small-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </div>
            </div> <!-- /.col-md-12 -->
        </div> <!-- /.row -->
        <div class="row">
            <div class="col-md-8 col-sm-6">
                <p>Aliquam faucibus in dolor sed vestibulum. Sed adipiscing malesuada luctus. Morbi tincidunt, tellus scelerisque scelerisque scelerisque, sapien dui pretium augue, at consectetur sapien tellus vitae nunc. Ut vitae metus quis nulla cursus adipiscing pretium vel dolor. Fusce lacinia accumsan arcu, quis porttitor nisi tincidunt ut. Nunc malesuada nunc eget nunc sollicitudin posuere. Maecenas vitae tortor quis odio hendrerit sagittis.<br><br>
                    Etiam tincidunt, magna eu elementum tristique, sapien nisl venenatis lacus, nec sagittis lectus dui eget lorem. Donec in tempus mi. Aenean egestas interdum dolor, et mollis lectus consequat. Mauris ullamcorper, felis sit amet gravida malesuada, nisi sem rhoncus massa, non tempor est erat sit amet diam.<!-- spacing for mobile viewing --><br><br>
                </p>
            </div> <!-- /.col-md-8 -->
            <div class="col-md-4 col-sm-6">
                <ul class="progess-bars">
                    <li>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" aria-valuenow="72" aria-valuemin="0" aria-valuemax="100" style="width: 72%;">Photoshop 72%</div>
                        </div>
                    </li>
                    <li>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%;">HTML 80%</div>
                        </div>
                    </li>
                    <li>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100" style="width: 65%;">WordPress 65%</div>
                        </div>
                    </li>
                    <li>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 100%;">Marketing 80%</div>
                        </div>
                    </li>
                </ul>
            </div> <!-- /.col-md-4 -->
        </div> <!-- /.row -->
    </div> <!-- /.container -->
</div> <!-- /#our-team -->

<div class="content-section" id="contact">
            <div class="container">
                <div class="row">
                    <div class="heading-section col-md-12 text-center">
                        <h2>Contact</h2>
                        <p>Send a message to us</p>
                    </div> <!-- /.heading-section -->
                </div> <!-- /.row -->
                <div class="row">
                    <div class="col-md-12">
                       <div class="googlemap-wrapper">
                            <div id="map_canvas" class="map-canvas"></div>
                        </div> <!-- /.googlemap-wrapper -->
                    </div> <!-- /.col-md-12 -->
                </div> <!-- /.row -->
                <div class="row">
                    <div class="col-md-7 col-sm-6">
                        <p>Flex is a Bootstrap v3.1.1 website design by <span class="blue">template</span><span class="green">mo</span> that can be applied to your website. Slider images and portfolio images are from <a rel="nofollow" href="http://unsplash.com" target="_parent">Unsplash</a> website. Thank you for visiting.<br><br>
                        Hic, suscipit, praesentium earum quod ea distinctio impedit ullam deserunt minus dolore quibusdam quis saepe aliquam doloribus voluptatibus eum excepturi. Aenean semper erat neque. Nunc et scelerisque nunc, in adipiscing magna.<br><br>
				    Duis ullamcorper tortor tellus. Ut diam libero, ultricies non augue a, mollis congue risus. Fusce a quam eget nisi luctus imperdiet. Consectetur quod at aperiam corporis totam. Nesciunt minima laborum sapiente totam facere unde est cum quia. 
                    	</p>
                        <ul class="contact-info">
                            <li>Phone: 020-020-0220</li>
                            <li>Email: <a href="mailto:info@company.com">info@company.com</a></li>
                            <li>Address: 990 De Best Studio    $blocks['our_team2'] = array(
        'info' => t('Our team2'),
        'status' =>TRUE,
        'region' =>'our_team',
    );, Fork Street, San Francisco</li>
                        </ul>
                        <!-- spacing for mobile viewing --><br><br>
                    </div> <!-- /.col-md-7 -->
                    <div class="col-md-5 col-sm-6">
                        <div class="contact-form">
                            <form method="post" name="contactform" id="contactform">
                                <p>
                                    <input name="name" type="text" id="name" placeholder="Your Name">
                                </p>
                                <p>
                                    <input name="email" type="text" id="email" placeholder="Your Email"> 
                                </p>
                                <p>
                                    <input name="subject" type="text" id="subject" placeholder="Subject"> 
                                </p>
                                <p>
                                    <textarea name="comments" id="comments" placeholder="Message"></textarea>    
                                </p>
                                <input type="submit" class="mainBtn" id="submit" value="Send Message">
                            </form>
                        </div> <!-- /.contact-form -->
                    </div> <!-- /.col-md-5 -->
                </div> <!-- /.row -->
            </div> <!-- /.container -->
        </div> <!-- /#contact -->
            
        <div id="footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-xs-12 text-left">
                        <span>Copyright &copy; 2014 Company Name</span>
                  </div> <!-- /.text-center -->
                    <div class="col-md-4 hidden-xs text-right">
                        <a href="#top" id="go-top">Back to top</a>
                    </div> <!-- /.text-center -->
                </div> <!-- /.row -->
            </div> <!-- /.container -->
        </div> <!-- /#footer -->
        
        <script src="http://localhost/drupal10/sites/all/themes/training/js/vendor/jquery-1.11.0.min.js"></script>
        <script>window.jQuery || document.write('<script src="http://localhost/drupal10/sites/all/themes/training/js/vendor/jquery-1.11.0.min.js"><\/script>')</script>
        <script src="http://localhost/drupal10/sites/all/themes/training/js/bootstrap.js"></script>
        <script src="http://localhost/drupal10/sites/all/themes/training/js/plugins.js"></script>
        <script src="http://localhost/drupal10/sites/all/themes/training/js/main.js"></script>

        <!-- Google Map -->
        <script src="http://maps.google.com/maps/api/js?sensor=true"></script>
        <script src="http://localhost/drupal10/sites/all/themes/training/js/vendor/jquery.gmap3.min.js"></script>
        
        <!-- Google Map Init-->
        <script type="text/javascript">
            jQuery(function($){
                $('#map_canvas').gmap3({
                    marker:{
                        address: '37.769725, -122.462154' 
                    },
                        map:{
                        options:{
                        zoom: 15,
                        scrollwheel: false,
                        streetViewControl : true
                        }
                    }
                });

                /* Simulate hover on iPad
                 * http://stackoverflow.com/questions/2851663/how-do-i-simulate-a-hover-with-a-touch-in-touch-enabled-browsers
                 --------------------------------------------------------------------------------------------------------------*/ 
                $('body').bind('touchstart', function() {});
            });
        </script>
        <!-- templatemo 406 flex -->
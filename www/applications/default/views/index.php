    <!-- Full Page Image Header Area -->
    <div id="top" class="header">
        <div class="col-md-6 col-md-offset-3 text-center">
        <p>&nbsp;</p>
        <p>&nbsp;</p>
        <p>&nbsp;</p>
            <img src="<?php echo $this->themePath; ?>/img/logoSmall.png" title="Eneract"/>
            
            <h3 style="color:#FFFFFF">Be more eco-conscious. Earn rewards.</h3>
            <p style="font-size:18px; color:#FFFFFF">Enteract sends you automated reports that track your energy usage and carbon footprint. You earn rewards, including gift cards, credits toward your energy bill donations to your favorite environmental cause.</p>
            <p>&nbsp;</p>
            <?php
                if (!isConnected()) {
                    echo '<a class="btn btn-Facebook btn-lg fa fa-facebook fa-1x" href="'. path("users/facebook") . '"> Facebook</a>&nbsp;&nbsp;';
		            echo '<a class="btn btn-Twitter btn-lg fa fa-twitter fa-1x" href="#twitter"> Twitter</a>&nbsp;&nbsp;';
                }
            ?>
            <a class="btn btn-Download btn-lg fa-1x" href="#app"> Download App</a>
        </div>
    </div>
    <!-- /Full Page Image Header Area -->
    
     <!-- Services -->
    <div id="services" class="services">
        <div class="container">
            <div class="row">
                
            </div>
            <div class="row">
                <div class="col-md-2 col-md-offset-2 text-center">
                    <div class="service-item">
                        <i class="service-icon fa fa-bar-chart-o"></i>
                        <h4>Track Your Carbon Footprint Effortlessly</h4>
                        <p>Easy to scan reports about how you are saving the environment are sent directly to your mobile phone or email.</p>
                    </div>
                </div>
                <div class="col-md-2 text-center">
                    <div class="service-item">
                        <i class="service-icon fa fa-money"></i>
                        <h4>Earn Rewards To Redeem or Donate</h4>
                        <p>Reducing your carbon footprint through carpooling or saving energy earns points to for gift points, airline miles or donating to your favorite charity.</p>
                    </div>
                </div>
                <div class="col-md-2 text-center">
                    <div class="service-item">
                        <i class="service-icon fa fa-tachometer"></i>
                        <h4>Reduce Your Energy Bill</h4>
                        <p>Use the rewards to reduce your energy bill. The rewards increase if energy consumption is decreased during peak periods.</p>
                    </div>
                </div>
               
            </div>
        </div>
    </div>
    <!-- /Services -->


    <!-- Intro -->
    <div id="about" class="intro">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-3 text-center">
                    <h2>Sponsors</h2>
                	<img src="<?php echo $this->themePath; ?>/img/sponsors.png" title="Sponsor"/>
                </div>
            </div>
        </div>
    </div>
    <!-- /Intro -->
	<!-- Call to Action -->
    <div class="call-to-action">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-3 text-center">
                	<h3>Sign up with Facebook or Twitter, or download our app!</h3>
                	<?php
                    if (!isConnected()) {
                        echo '<a class="btn btn-Facebook btn-lg fa fa-facebook fa-1x" href="' . echo path("users/facebook") . '"> Facebook</a>';
		    		    echo '<a class="btn btn-Twitter btn-lg fa fa-twitter fa-1x" href="#twitter"> Twitter</a>';
            		}
                    ?>
                    <a class="btn btn-Download btn-lg fa-1x" href="#app"> Download App</a>
                </div>
            </div>
        </div>
    </div>
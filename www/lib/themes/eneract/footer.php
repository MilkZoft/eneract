    <script src="<?php echo $this->themePath; ?>/js/bootstrap.min.js"></script>
    <script src="<?php echo $this->themePath; ?>/js/jquery.metisMenu.js"></script>

    <!-- Page-Level Plugin Scripts - Dashboard -->
    <script src="<?php echo $this->themePath; ?>/js/raphael-2.1.0.min.js"></script>
    <script src="<?php echo $this->themePath; ?>/js/morris.js"></script>

    <!-- SB Admin Scripts - Include with every page -->
    <script src="<?php echo $this->themePath; ?>/js/sb-admin.js"></script>

    <!-- Page-Level Demo Scripts - Dashboard - Use for reference -->
    <script src="<?php echo $this->themePath; ?>/js/dashboard-demo.js"></script>
    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-3 text-center">
                    <ul class="list-inline">
                        <li><i class="fa fa-facebook fa-3x"></i>
                        </li>
                        <li><i class="fa fa-twitter fa-3x"></i>
                        </li>
                        <li><i class="fa fa-dribbble fa-3x"></i>
                        </li>
                    </ul>
                    <div class="top-scroll">
                        <a href="#top"><i class="fa fa-circle-arrow-up scroll fa-4x"></i></a>
                    </div>
                    <hr>
                    <p>Copyright &copy; Company 2013</p>
                </div>
            </div>
        </div>
    </footer>
    <!-- /Footer -->
    <!-- JavaScript -->
    <script src="<?php echo $this->themePath; ?>/js/bootstrap.min.js"></script>

    <!-- Custom JavaScript for the Side Menu and Smooth Scrolling -->
    <script>
    $("#menu-close").click(function(e) {
        e.preventDefault();
        $("#sidebar-wrapper").toggleClass("active");
    });
    </script>
    <script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#sidebar-wrapper").toggleClass("active");
    });
    </script>
    <script>
    $(function() {
        $('a[href*=#]:not([href=#])').click(function() {
            if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') || location.hostname == this.hostname) {

                var target = $(this.hash);
                target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
                if (target.length) {
                    $('html,body').animate({
                        scrollTop: target.offset().top
                    }, 1000);
                    return false;
                }
            }
        });
    });
    </script>

</body>

</html>

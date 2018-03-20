<footer>
        <div class="copyright">
            <p>&copy; 2013 - 2018 Harrow Town Centre Business Improvement District. All rights reserved</p>
            <p>Harrow Town Centre BID, c/o Debenhams Management Offices, 275 Station Road, Harrow, HA1 1NA.</p>
        </div>
        <div class="social">
            <a href="https://www.facebook.com/HarrowTown/" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/img/svg/facebook.svg" alt="Facebook" /></a>
            <a href="https://twitter.com/HarrowTown/" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/img/svg/twitter.svg" alt="Twitter" /></a>
            <a href="https://www.instagram.com/harrowtown/" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/img/svg/instagram.svg" alt="Instagram" /></a>
        </div>
    </footer>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script>
        $(document).ready(function(){
            
            $('.mobile-menu-icon').click( function () {
                $("#mobile-primary-menu").addClass("is-open");
            } );
            $(".close-btn").click(function(){
                $("#mobile-primary-menu").removeClass("is-open");
            });
                
        });
    </script>
		
<?php wp_footer(); ?>

</body>
</html>
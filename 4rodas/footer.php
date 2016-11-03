            <footer>
                <div id="info-bar">
                    <div class="container clearfix">
                        
                    </div>
                </div>
            </footer><!-- /footer -->
        </div><!-- /#wrapper -->

        <script src="http://code.jquery.com/jquery-2.1.3.min.js"></script> 
        <script>
        
            $(document).ready(function(){ 
                var touch   = $('#resp-menu');
                var menu    = $('#menu-principal');
                var submenu = $('#menu-principal ul li');
                var banner_img = $('#banner img');

                $(touch).on('click', function(e) {
                    e.preventDefault();
                    touch.toggleClass('active');
                    menu.slideToggle();
                });

                $(submenu).on('click', function(e) {
                    e.preventDefault();
                    var submenu_div = $(this).find('div.div-subs');
                    submenu_div.slideToggle();
                });
                
                $(window).resize(function(){
                    var w = $(window).width();
                    var att =  w < 660
                                    ? '<?php bloginfo('template_url'); ?>/img/banner-2.png'
                                    : '<?php bloginfo('template_url'); ?>/img/banner-1.png';

                    if(w > 660 && menu.is(':hidden')) {
                        menu.removeAttr('style');
                    } 

                    banner_img.attr('src' , att);
                });
                
            });
        </script>
    </body>
</html>
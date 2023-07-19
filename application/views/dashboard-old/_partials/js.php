<!-- jQuery  -->
        <script src="<?=base_url('assets/dashboard/js/jquery.min.js')?>"></script>
        <script src="<?=base_url('assets/dashboard/js/popper.min.js')?>"></script>
        <script src="<?=base_url('assets/dashboard/js/bootstrap.min.js')?>"></script>
        <script src="<?=base_url('assets/dashboard/js/modernizr.min.js')?>"></script>
        <script src="<?=base_url('assets/dashboard/js/waves.js')?>"></script>
        <script src="<?=base_url('assets/dashboard/js/jquery.slimscroll.js')?>"></script>
        <script src="<?=base_url('assets/dashboard/js/jquery.nicescroll.js')?>"></script>
        <script src="<?=base_url('assets/dashboard/js/jquery.scrollTo.min.js')?>"></script>

        <script src="<?=base_url('assets/dashboard/plugins/skycons/skycons.min.js')?>"></script>
        <script src="<?=base_url('assets/dashboard/plugins/raphael/raphael-min.js')?>"></script>
        <script src="<?=base_url('assets/dashboard/plugins/morris/morris.min.js')?>"></script>
        
        <script src="<?=base_url('assets/dashboard/pages/dashborad.js')?>"></script>

        <!-- App js -->
        <script src="<?=base_url('assets/dashboard/js/app.js')?>"></script>
        <script>
            /* BEGIN SVG WEATHER ICON */
            if (typeof Skycons !== 'undefined'){
           var icons = new Skycons(
               {"color": "#fff"},
               {"resizeClear": true}
               ),
                   list  = [
                       "clear-day", "clear-night", "partly-cloudy-day",
                       "partly-cloudy-night", "cloudy", "rain", "sleet", "snow", "wind",
                       "fog"
                   ],
                   i;

               for(i = list.length; i--; )
               icons.set(list[i], list[i]);
               icons.play();
           };

       // scroll

       $(document).ready(function() {
       
       $("#boxscroll").niceScroll({cursorborder:"",cursorcolor:"#cecece",boxzoom:true});
       $("#boxscroll2").niceScroll({cursorborder:"",cursorcolor:"#cecece",boxzoom:true}); 
       
       });
       </script>
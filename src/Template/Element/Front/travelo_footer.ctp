<footer class="footer"><!-- Start:  Footer Area -->
    <div class="container">
        <div class="row" data-wow-duration="1.5s">
            <!-- Start: Your logo area -->
            <div class="logo col-xs-4 col-sm-4 col-md-4">
                <?php echo $this->Html->image('logo/judefly_trans_bg_logo.png',['class'=>'img-responsive','width'=>'110','alt'=>'']);?>
            </div>
            <!-- End: Your logo area -->

            <div class="part col-xs-8 col-sm-8 col-md-8">
                <div class="social_icon">
                    <ul class="navbar-right">
                        <!-- Social Icon Goes Here  -->
                        <li><a href="https://www.facebook.com/JudeflyTravel/?skip_nax_wizard=true" target="_blank"> <i class="fa facebook fa-facebook bg-transparent"></i> </a></li>
                        <li><a href="https://twitter.com/JudeFlyTRVL" target="_blank"> <i class="fa twitter fa-twitter bg-transparent"></i> </a></li>
                        <li><a href="https://www.instagram.com/judefly/" target="_blank"> <i class="fa instagram fa-instagram bg-transparent"></i> </a></li>
                    </ul>
                </div><!-- End:  "social_icon" -->
            </div><!-- End:  "part" -->
        </div><!-- End:  "row" -->
    </div><!-- End:  "container" -->
</footer><!-- End:  Footer Area -->

<?= $this->Html->script(['travelo/modernizr.2.7.1.min.js','travelo/jquery-migrate-1.2.1.min.js','travelo/jquery.placeholder.js','travelo/jquery-ui.1.10.4.min.js','travelo/bootstrap.min.js']);?>
<?= $this->Html->script(['components/jquery.themepunch.plugins.min.js','components/jquery.themepunch.revolution.min.js','components/jquery.bxslider.min.js','components/jquery.flexslider.js']);?>
<?= $this->Html->script(['travelo/bootstrap.js','travelo/jquery.stellar.min.js','travelo/waypoints.min.js','travelo/theme-scripts.js','travelo/scripts.js']);?>

<script type="text/javascript">
    tjq(document).ready(function() {
               tjq('.detailed-view').click(function(){
            tjq(this).next().toggle();
        });
    });

    tjq("#price-range").slider({
        range: true,
        min: 0,
        max: 4000,
        values: [ 0, 4000 ],
        slide: function( event, ui ) {
            tjq(".min-price-label").html( "$" + ui.values[ 0 ]);
            tjq(".max-price-label").html( "$" + ui.values[ 1 ]);
        }
    });
    tjq(".min-price-label").html( "$" + tjq("#price-range").slider( "values", 0 ));
    tjq(".max-price-label").html( "$" + tjq("#price-range").slider( "values", 1 ));
    tjq("#rating").slider({
        range: "min",
        value: 40,
        min: 0,
        max: 50,
        slide: function( event, ui ) {

        }
    });
    function convertTimeToHHMM(t) {
        var minutes = t % 60;
        var hour = (t - minutes) / 60;
        var timeStr = (hour + "").lpad("0", 2) + ":" + (minutes + "").lpad("0", 2);
        var date = new Date("2014/01/01 " + timeStr + ":00");
        var hhmm = date.toLocaleTimeString(navigator.language, {hour: '2-digit', minute:'2-digit'});
        return hhmm;
    }
    tjq("#flight-times").slider({
        range: true,
        min: 0,
        max: 1440,
        step: 5,
        values: [ 360, 1200 ],
        slide: function( event, ui ) {

            tjq(".start-time-label").html( convertTimeToHHMM(ui.values[0]) );
            tjq(".end-time-label").html( convertTimeToHHMM(ui.values[1]) );
        }
    });
    tjq(".start-time-label").html( convertTimeToHHMM(tjq("#flight-times").slider( "values", 0 )) );
    tjq(".end-time-label").html( convertTimeToHHMM(tjq("#flight-times").slider( "values", 1 )) );

    tjq("#cruise-length-range").slider({
        range: "min",
        min: 0,
        max: 12,
        value: 10,
        slide: function( event, ui ) {
            tjq(".max-cruise-length").html( ui.value + " NIGHTS" );
        }
    });
    tjq(".max-cruise-length").html( tjq("#cruise-length-range").slider( "value" ) + " NIGHTS" );

    tjq("#rating").slider({
        range: "min",
        value: 50,
        min: 0,
        max: 50,
        slide: function( event, ui ) {
        }
    });
</script>

<script type="text/javascript">
    tjq('.leaving_from').autocomplete({
        source: "<?php echo $this->Url->build(['controller'=>'Searches','action'=>'autocomplete']);?>",

        create: function () {
            tjq(this).data("ui-autocomplete" )._renderItem = function( ul, item ) {
                return tjq( "<li></li>" )
                .data("item.autocomplete-item", item )
                .append( "<a>" + item.key + " - " + item.label + "</a>" )
                .appendTo( ul );
            };
        },
        focus:function(e,ui){
            tjq('#departureAirport').val(ui.item.label);
        }
    });

    tjq('.destination').autocomplete({
        source: "<?php echo $this->Url->build(['controller'=>'Searches','action'=>'autocomplete']);?>",
        create: function () {
            tjq(this).data("ui-autocomplete" )._renderItem = function( ul, item ) {
                return tjq( "<li></li>" )
                .data("item.autocomplete-item", item )
                .append( "<a>" + item.key + " - " + item.label + "</a>" )
                .appendTo( ul );
            };
        },
        focus:function(e,ui){
            tjq('#arrivalAirport').val(ui.item.label);
        }
    });

    tjq('#flights_search').submit(function(){
        tjq('#flight_leaving_from').append(tjq('#flight_from').val());
        tjq('#flight_going_to').append(tjq('#flight_to').val());
        tjq('.redirect-wrap').show();
        tjq('#page-wrapper').hide();
    })

</script>

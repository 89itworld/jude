tjq('.revolution-slider').revolution(
            {
                dottedOverlay:"none",
                delay:8000,
                startwidth:1170,
                startheight:646,
                onHoverStop:"on",
                hideThumbs:10,
                fullWidth:"on",
                forceFullWidth:"on",
                navigationType:"none",
                shadow:0,
                spinner:"spinner4",
                hideTimerBar:"on",
            });

        tjq('.detailed-view').click(function(){
            tjq(this).next().toggle();
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

tjq('#registrationForm').submit(function(e){
        e.preventDefault();
        tjq.ajax({
            type:"POST",
            url:"<?php echo $this->Url->build(['controller'=>'Users','action'=>'register']);?>",
            data:  tjq(this).serialize(),
            success: function(response){
                if(response=='success'){
                    console.log("this is done");
                    window.location.href = "<?php echo $this->Url->build(['controller'=>'Hotels','action'=>'index']);?>";
                }else{
                    console.log(response);
                    var error= JSON.parse(response);
                    var emailUnique= error['email']['emailUnique'];
                    var passwrod= error['password']['minLength'];
                    var conf_passwrod= error['conf_pass']['no-misspelling'];

                    tjq('.error').text('');
                    tjq('#signup_email_error').append(emailUnique);
                    tjq('#signup_pass_error').append(passwrod);
                    tjq('#signup_conf_pass_error').append(conf_passwrod);
                }
            }
        });
    });

tjq('#signup_email').keyup(function(){
    tjq('#signup_email_error').text('');
});
tjq('#signup_password').keyup(function(){
    tjq('#signup_pass_error').text('');
});
tjq('#signup_conf_pass').keyup(function(){
    tjq('#signup_conf_pass_error').text('');
});


tjq('#login').submit(function(e){
    e.preventDefault();
    tjq.ajax({
        type:"POST",
        url:"<?php echo $this->Url->build(['controller'=>'Users','action'=>'login']);?>",
        data:  tjq(this).serialize(),
        success: function(response){
            if(response=='success'){
                console.log("this is done");
                window.location.href = "<?php echo $this->Url->build(['controller'=>'Hotels','action'=>'index']);?>";
            }else{
                console.log(response);
                tjq('#login_error').text('');
                tjq('#login_error').append(response);
            }
        }
    });
});
tjq('#login_email').keyup(function(){
    tjq('#login_error').text('');
});

tjq('#login_password').keyup(function(){
    tjq('#login_error').text('');
});

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

//   tjq('.leaving_from').keyup(function(){
//       tjq.ajax({
//           type:"POST",
//           url:"<?php //echo $this->Url->build(['controller'=>'Searches','action'=>'autocomplete']);?>//",
//           data: { q : tjq('.leaving_from').val() },
//           success: function(response){
//               console.log(response);
//           }
//       });
//   });

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
});

<!--        Start Flights Search Form  -->
<div aria-hidden="true" aria-expanded="false"  role="tabpanel" aria-labelledby="ui-id-1" id="awe-search-tabs-1" class="search-flight ui-tabs-panel ui-widget-content ui-corner-bottom">

    <form class="form-inline" method="post" action="flights" id="flights_search">
        <div class="form-group">
            <div class="form-elements">
                <label>From</label>
                <div class="form-item">
                    <i class="awe-icon awe-icon-marker-1"></i>
                    <?php echo $this->Form->input('source',['placeholder'=>"From, Airport or  City",'type'=>'text','required'=>'required','class'=>'source','label'=>false]);?>
                    <?php echo $this->Form->input('departureAirport',['type'=>'hidden','id'=>'departureAirport']); ?>
                </div>
            </div>
            <div class="form-elements">
                <label>To</label>
                <div class="form-item">
                    <i class="awe-icon awe-icon-marker-1"></i>
                    <?php echo $this->Form->input('destination',['placeholder'=>"To, Airport or  City",'type'=>'text','required'=>'required','id'=>'destnateAirport','class'=>'destination','label'=>false]);?>
                    <?php echo $this->Form->input('arrivalAirport',['type'=>'hidden','id'=>'arrivalAirport']); ?>
                </div>
            </div>
        </div>
        <div class="form-group">
            <div class="form-elements">
                <label>Depart on</label>
                <div class="form-item">
                    <i class="awe-icon awe-icon-calendar"></i>
                    <?php echo $this->Form->input('depart_on',['type'=>'text','id'=>'depart_on','required'=>'required','class'=>'awe-calendar','placeholder'=>'Depart on','label'=>false,'data-validation'=>'required','data-validation-error-msg'=>'This field is required.','data-validation-error-msg-container'=>'#depart_on']); ?>
                </div>
            </div>
            <div class="form-elements">
                           <label>Adult</label>
                           <div class="form-item">
                               <div class="awe-select-wrapper">
                                   <?php echo $this->Form->input('adults', array(
                                       'options' => array(
                                           '1'=>'1',
                                           '2'=>'2',
                                           '3'=>'3'),
                                       'class'=>'awe-select',
                                       'label'=>false,
                                   )); ?>
                                   <i class="fa fa-caret-down"></i></div>
                           </div>
                           <span>12 years and above</span>
                       </div>
                       <div class="form-elements">
                           <label>Kids</label>
                           <div class="form-item">
                               <div class="awe-select-wrapper">
                                   <?php echo $this->Form->input('kids', array(
                                       'options' => array(
                                           '0'=>'0',
                                           '1'=>'1',
                                           '2'=>'2',
                                           '3'=>'3'),
                                       'class'=>'awe-select',
                                       'label'=>false,
                                   )); ?>
                                   <i class="fa fa-caret-down"></i></div>
                           </div>
                           <span>2-11 years</span>
                       </div>
            <div class="form-elements">
                <label>Infants</label>
                <div class="form-item">
                    <div class="awe-select-wrapper">
                        <?php echo $this->Form->input('infants', array(
                            'options' => array(
                                '0'=>'0',
                                '1'=>'1',
                                '2'=>'2',
                                '3'=>'3'),
                            'class'=>'awe-select',
                            'label'=>false,
                        )); ?>
                        <i class="fa fa-caret-down"></i></div>
                    <span>0-2 years</span>
                    </div>
            </div>

        </div>
        <div class="form-group">
            <div class="form-elements">
                <label>Budget</label>
                <div class="form-item">
                    <div class="awe-select-wrapper">
                        <?php
                        $booking_class_options=array('ECO'=>'Economy','BUS'=>'Business');
                        echo $this->Form->input('type',array('type'=>'select','required'=>false,'class'=>'awe-select','id'=>'booking_class','label'=>false,'options'=>$booking_class_options,'selected'=>'ECO'));?>
                      <i class="fa fa-caret-down"></i></div>
                </div>
            </div>
        </div>
            <div class="form-actions">
              <?php echo $this->Form->input('travel_way',['type'=>'hidden','value'=>'O']); ?>
               <?php echo $this->Form->input('Search Now',['type'=>'submit']); ?>
           </div>
    </form>
</div>
<script type="application/javascript">
    //     flight autocomplete for Source Airport..
       $(document).ready(function () {

           $('.source').autocomplete({
               source: '<?php echo $this->Url->build(['controller' => 'Homes', 'action' => 'autocomplete']); ?>',
               create: function () {
                   $(this).data('ui-autocomplete')._renderItem = function (ul, item) {
                       //                return $('<li>').append(item.key + '<span> - '+ item.label + '</span>').appendTo(ul);
                       return $("<li></li>")
                           .data("item.autocomplete-item", item)
                           .append("<a>" + item.label + "</a>")
                           .appendTo(ul);
                   };
               },
               focus: function (e, ui) {
                   $('#departureAirport').val(ui.item.key);
               }
           });

           $('.destination').autocomplete({
               source: '<?php echo $this->Url->build(['controller' => 'Homes', 'action' => 'autocomplete']); ?>',
               create: function () {
                   $(this).data('ui-autocomplete')._renderItem = function (ul, item) {
                       //                return $('<li>').append(item.key + '<span> - '+ item.label + '</span>').appendTo(ul);
                       return $("<li></li>")
                           .data("item.autocomplete-item", item)
                           .append("<a>" + item.label + "</a>")
                           .appendTo(ul);
                   };
               },
               focus: function (e, ui) {
                   $('#arrivalAirport').val(ui.item.key);
               }
           });

           $('#flights_search').submit(function () {
               var departureAirport = $('.source').val().split("(", 1);
               var arrivalAirport = $('#destnateAirport').val().split("(", 1);
               $('#flight_leaving_from').append(departureAirport);
               $('#flight_going_to').append(arrivalAirport);
               $('.redirect-wrap').show();
           });
       })
    $(function() {
              $( "#depart_on" ).datepicker({
                    dateFormat:"yy-mm-dd",
                    minDate: new Date(),
                    numberOfMonths: [ 1, 2 ],
                    showButtonPanel: true
              });

          });

</script>
<!-- End Flights search Form -->
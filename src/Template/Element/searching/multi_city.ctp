<!--        Start Flights Search Form  -->
<div aria-hidden="true" aria-expanded="false"  role="tabpanel" aria-labelledby="ui-id-9" id="awe-search-tabs-9" class="search-flight ui-tabs-panel ui-widget-content ui-corner-bottom">

    <form class="form-inline" method="post" action="flights/multi_city" id="flights_search">
        <div class="form-group form-multi-group">
            <div class="form-elements">
                <label>From</label>
                <div class="form-item">
                    <i class="awe-icon awe-icon-marker-1"></i>
                    <?php echo $this->Form->input('source',['placeholder'=>"From, Airport or  City",'type'=>'text','required'=>'required','class'=>'source','label'=>false]);?>
                    <?php echo $this->Form->input('departureAirport',['type'=>'hidden','id'=>'departureAirport']); ?>
                </div>
                <div class="form-elements form-elem" style="width:50%; float:left;">
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

                <div class="form-elements form-elem" style="width:50%; float:left; padding-left: 14px;">
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

            </div>

        </div>
        <div class="form-group form-multi-group">
            <div class="form-elements form-elem">
                           <label>To</label>
                           <div class="form-item">
                               <i class="awe-icon awe-icon-marker-1"></i>
                               <?php echo $this->Form->input('destination',['placeholder'=>"To, Airport or  City",'type'=>'text','required'=>'required','id'=>'destnateAirport','class'=>'destination','label'=>false]);?>
                               <?php echo $this->Form->input('arrivalAirport',['type'=>'hidden','id'=>'arrivalAirport']); ?>
                           </div>
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
        <div class="form-group form-multi-group">
            <div class="form-elements">
                                         <label>Depart on</label>
                                         <div class="form-item">
                                             <i class="awe-icon awe-icon-calendar"></i>
                                             <?php echo $this->Form->input('depart_on',['type'=>'text','id'=>'depart_on','required'=>'required','class'=>'awe-calendar','placeholder'=>'Depart on','label'=>false,'data-validation'=>'required','data-validation-error-msg'=>'This field is required.','data-validation-error-msg-container'=>'#depart_on']); ?>
                                         </div>
                                     </div>
            </div>
        <div class="form-group form-group-multi">
                  <div class="form-elements">
                      <label>Return on</label>
                      <div class="form-item">
                          <i class="awe-icon awe-icon-calendar"></i>
                          <?php echo $this->Form->input('returnDate',['type'=>'text','required'=>'required','id'=>'returnDate','class'=>'awe-calendar','placeholder'=>'Return on','label'=>false,'data-validation'=>'required','data-validation-error-msg'=>'This field is required.','data-validation-error-msg-container'=>'#returnDate']); ?>
                      </div>
                  </div>
           </div>


  <!--      <div class="form-group">
            <div class="form-elements">
                <label>Budget</label>
                <div class="form-item">
                    <div class="awe-select-wrapper">
                        <?php
/*                        $booking_class_options=array('ECO'=>'Economy','BUS'=>'Business');
                        echo $this->Form->input('type',array('type'=>'select','required'=>false,'class'=>'awe-select','id'=>'booking_class','label'=>false,'options'=>$booking_class_options,'selected'=>'ECO'));*/?>
                      <i class="fa fa-caret-down"></i></div>
                </div>
            </div>
        </div>-->
            <div class="form-actions">
               <?php echo $this->Form->input('Search Now',['type'=>'submit']); ?>
           </div>
    </form>
</div>
<!-- End Flights search Form -->
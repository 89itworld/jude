<!-- HEADING PAGE -->
<?php if (@$flights_data == 'error' || @$flights_data == "") {
                           echo '<p class="flight_result_msg">No Result Found</p>';
                       } else {    ?>
 <section class="awe-parallax category-heading-section-demo">
        <div class="awe-overlay"></div>
        <div class="container">
            <div class="category-heading-content category-heading-content__2 text-uppercase">
                <div class="find">
                   <!-- <h2 class="text-center">Find Your Flight</h2>-->
                    <?php echo $this->Form->create('flights',['method'=>'post','url'=>['contorller'=>'Flights','action'=>'index']]);  ?>
                        <div class="form-group">
                            <div class="col-md-2">
                                <div class="form-elements width-100 no-padding">
                                    <label>From</label>
                                    <div class="form-item">
                                        <i class="awe-icon awe-icon-marker-1"></i>
                                        <?php echo $this->Form->input('source',['placeholder'=>"From, Airport or  City",'type'=>'text','required'=>'required','class'=>'source','label'=>false]); ?>
                                        <?php echo $this->Form->input('departureAirport',['type'=>'hidden','id'=>'departureAirport']);  ?>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-elements width-100 no-padding">
                                    <label>To</label>
                                    <div class="form-item">
                                        <i class="awe-icon awe-icon-marker-1"></i>
                                        <?php echo $this->Form->input('destination',['placeholder'=>"To, Airport or  City",'type'=>'text','required'=>'required','class'=>'destination','label'=>false]); ?>
                                        <?php echo $this->Form->input('arrivalAirport',['type'=>'hidden','id'=>'arrivalAirport']);  ?>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-elements width-100 no-padding">
                                    <label>Depart on</label>
                                    <div class="form-item">
                                        <i class="awe-icon awe-icon-calendar"></i>
                                        <?php echo $this->Form->input('depart_on',['type'=>'text','id'=>'depart_on','class'=>'awe-calendar','placeholder'=>'YY-MM-DD','label'=>false,'required'=>'required']);  ?>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-elements width-100 no-padding">
                                    <label>Adults</label>
                                    <div class="form-item">
                                        <i class="awe-icon awe-icon-calendar"></i>
                                        <?php echo $this->Form->input('adults', array(
                                            'options' => array(
                                                '0'=>'0',
                                                '1'=>'1',
                                                '2'=>'2',
                                                '3'=>'3'),
                                            'class'=>'awe-select',
                                            'label'=>false,
                                        ));  ?>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-elements width-100 no-padding">
                                    <label>Kids</label>
                                    <div class="form-item">
                                        <i class="awe-icon awe-icon-calendar"></i>
                                        <?php echo $this->Form->input('kids', array(
                                            'options' => array(
                                                '0'=>'0',
                                                '1'=>'1',
                                                '2'=>'2',
                                                '3'=>'3'),
                                            'class'=>'awe-select',
                                            'label'=>false,
                                        ));  ?>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-actions">
                                    <input type="submit" value="Find My Flight" class="btn-block">
                                </div>
                            </div>

                        </div>
                    <?php echo $this->Form->end();  ?>
                </div>
            </div>
        </div>
    </section>
<!-- END / HEADING PAGE -->


<section class="filter-page">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="page-top">
                    <h5 class="flight_search_trv">Result Shown for flights <?php   //echo $flights_data['0']->departure_location." To ".$flights_data[0]->arrival_location; ?><em></em></h5>
                    <select class="awe-select">
                        <option>Best Match</option>
                        <option>Best Rate</option>
                    </select>
                </div>
            </div>
            <div class="col-md-9 col-md-push-3 flights_item">
                <div class="filter-page__content">
                    <div class="filter-item-wrapper">
                    <?php
                            // pr($flights_data);die;
                            foreach ($flights_data as $flights) {
//                                pr($flights);
                                $flight['departure']=$flights->departure_location;
                                $flight['arrival']=$flights->arrival_location;
                                ?>
                                <!-- ITEM -->
                                <div class="flight-item">
                                    <div class="item-media">
                                        <div class="image-cover">
                                            <?php echo $this->Html->image('https://images.kiwi.com/airlines/64/'.@$flights->flight_stops['0']->airline_code.".png", ['alt' => @$flights->flight_stops['0']->airline_name]); ?>
                                        </div>
                                    </div>
                                    <div class="item-body">
                                        <div class="item-title">
                                            <h2>
                                                <?php echo $this->Html->link($flights->departure_location . ' : ' . $flights->arrival_location, '#'); ?>
                                            </h2>
                                        </div>
                                        <table class="item-table">
                                            <thead>
                                            <tr>
                                                <th class="route">Route</th>
                                                <th class="depart">Depart</th>
                                                <th class="arrive">Arrive</th>
                                                <th class="duration">Duration</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <?php foreach ($flights->flight_stops as $key => $flight_stop_details) {
                                                if ($key == 0) {
                                                    $flight_stops[] = $flight_stop_details->airline_name;
                                                } ?>
                                                    <tr>
                                                        <td class="route">
                                                            <ul>

                                                                <li><?php echo $flight_stop_details->departure_code; ?>
                                                                    <i class="awe-icon awe-icon-arrow-right"></i></li>
                                                                <li><?php echo $flight_stop_details->arrival_code; ?>
                                                            </ul>
                                                        </td>
                                                        <td class="depart">
                                                            <span><?php echo $flight_stop_details->departure_time->format('h:i A'); ?></span>
                                                            <span
                                                                class="date"><?php echo $flight_stop_details->departure_time->format('M d,'); ?></span>
                                                        </td>
                                                        <td class="arrive">
                                                            <span><?php echo $flight_stop_details->arrival_time->format('h:i A'); ?></span>
                                                            <span
                                                                class="date"><?php echo $flight_stop_details->arrival_time->format('M d,'); ?></span>
                                                        </td>
                                                        <td class="duration">
                                                            <span><?php echo $flight_stop_details->duration; ?></span>
                                                        </td>
                                                    </tr>
                                                <?php
                                            }
                                            ?>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="item-price-more">
                                        <div class="price">
                                            <span
                                                class="amount"> $<?php echo $flights->flight_price->total_price; ?></span>

                                        </div>
                                        <?php echo $this->Html->link('Select Now', ['controller'=>'Flights','action'=>'flight-details',$flights['id']], ['target' => '_blank', 'class' => 'awe-btn']); ?>
                                       <!-- --><?php /* echo $this->Html->link('Book now', $flights->deep_link, ['target' => '_blank', 'class' => 'awe-btn']); */ ?>
                                    </div>
                                </div>
                                <!-- END / ITEM -->
                            <?php
                        }
                        ?>
                    </div>

                    <!-- PAGINATION -->
                     <div class="page__pagination">
                     <?php
                           $this->Paginator->templates([
                                'number' => '<a href="{{url}}">{{text}}</a>',
                                'nextActive'=>'<a href="{{url}}"><i class="fa fa-caret-right"></i></a>',
                                'prevActive'=>'<a href="{{url}}"><i class="fa fa-caret-left"></i></a>',
                                'current'=>'<span class="current">{{text}}</span>',
                                'nextDisabled'=>'<i class="fa fa-caret-right"></i>',
                                'prevDisabled'=>'<i class="fa fa-caret-left"></i>'
                            ]);
                            echo $this->Paginator->prev();
                            echo $this->Paginator->numbers();
                            echo $this->Paginator->next();
                      ?>
                      </div>
                    <!-- END / PAGINATION -->
                </div>
            </div>
            <div class="col-md-3 col-md-pull-9">
                <div class="page-sidebar">
                    <div class="sidebar-title">
                        <h2>Flight</h2>
                        <div class="clear-filter">
                            <a href="#">Clear all</a>
                        </div>
                    </div>
                    <!-- WIDGET -->
                   <!-- <div class="widget widget_has_radio_checkbox_text">
                            <h3 class="panel-title">Modify Search</h3>
                        <?php /*echo $this->Form->create('flights',['method'=>'post','url'=>['contorller'=>'Flights','action'=>'index']]);  */?>
                        <div class="widget_content">
                            <label class="from">
                                From
                                  <span class="form-item db">
                                     <i class="awe-icon awe-icon-marker-1"></i>
                                      <?php /*echo $this->Form->input('source',['placeholder'=>"From, Airport or  City",'type'=>'text','required'=>'required','class'=>'source','label'=>false]); */?>
                                          <?php /*echo $this->Form->input('departureAirport',['type'=>'hidden','id'=>'departureAirport']);  */?>
                                 </span>
                            </label>
                            <label class="to">
                                To
                                <span class="form-item db">
                                    <i class="awe-icon awe-icon-marker-1"></i>
                                    <?php /*echo $this->Form->input('destination',['placeholder'=>"To, Airport or  City",'type'=>'text','required'=>'required','class'=>'destination','label'=>false]); */?>
                                      <?php /*echo $this->Form->input('arrivalAirport',['type'=>'hidden','id'=>'arrivalAirport']); */?>

                                </span>
                            </label>
                           <h3>Flight Type</h3>
                            <label>
                                <input type="checkbox">
                                <i class="awe-icon awe-icon-check"></i>
                                Oneway
                            </label>
                            <label>
                                <input type="checkbox">
                                <i class="awe-icon awe-icon-check"></i>
                                Rround Way
                            </label>
                            <label class="from">
                                <input type="submit" value="Search" class="btn-block">
                            </label>
                        </div>
                        <?php /*echo $this->Form->end();  */?>
                    </div>-->
                    <!-- END / WIDGET -->

                    <!-- WIDGET -->
                    <div class="widget widget_price_filter">
                        <h3 class="panel-title">Price Level</h3>
                        <div>
                            <div class="price-slider-wrapper">
                                <div class="price-slider"></div>
                                <div class="price_slider_amount">
                                    <div class="price_label">
                                        <span class="from" id="price-from"></span> - <span id="price-to" class="to"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END / WIDGET -->


                    <!-- WIDGET -->
                    <div class="widget widget_price_filter">
                            <h3 class="panel-title">Flight Times</h3>
                            <div class="price-slider-wrapper">
                                <div class="price-slider"></div>
                                <div class="price_slider_amount">
                                    <div class="price_label">
                                        <span class="from"></span> - <span class="to"></span>
                                    </div>
                                </div>
                            </div>
                    </div>
                    <!-- END / WIDGET -->

                    <div class="widget widget_has_radio_checkbox">
                        <h3 class="panel-title">Flight Stops</h3>
                        <div>
                            <ul>
                                <li>
                                    <label>
                                        <input type="checkbox"  value="1"  class="flight_stops" name="flight_stops[]">
                                        <i class="awe-icon awe-icon-check"></i>
                                        1 Stops
                                    </label>
                                </li>
                                <li>
                                    <label>
                                        <input type="checkbox"  value="2"  class="flight_stops" name="flight_stops[]">
                                        <i class="awe-icon awe-icon-check"></i>
                                        2 Stops
                                    </label>
                                </li>
                                <li>
                                    <label>
                                        <input type="checkbox"  value="3"  class="flight_stops" name="flight_stops[]">
                                        <i class="awe-icon awe-icon-check"></i>
                                        3 Stops
                                    </label>
                                </li>
                                <li>
                                    <label>
                                        <input type="checkbox"  value="4"  class="flight_stops" name="flight_stops[]">
                                        <i class="awe-icon awe-icon-check"></i>
                                        MultiStops
                                    </label>
                                </li>
                            </ul>

                        </div>
                    </div>

                    <!-- WIDGET -->
                    <div class="widget widget_has_radio_checkbox">
                            <h3 class="panel-title">Airlines</h3>
                            <ul>
                                <?php
                                $airline= array_unique($flight_stops);
                                foreach ($airline as $flights){
                                    ?>
                                    <li>
                                        <label>
                                            <input type="checkbox"  value="<?php echo $flights;?>"  class="airlines" name="airlines[]">
                                            <i class="awe-icon awe-icon-check"></i>
                                            <?php echo $flights;?>
                                        </label>
                                    </li>
                                <?php } ?>
                            </ul>

                    </div>
                    <!-- END / WIDGET -->



                </div>
            </div>
        </div>
    </div>
</section>
<?php } ?>
<script>
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


    function flightFilter(){
        var matches = [];
        $(".airlines:checked").each(function() {
            matches.push(this.value);
        });
        var stops = [];
        $(".flight_stops:checked").each(function() {
            stops.push(this.value);
        });
        var minPrice = $('#price-from').text();
        var maxPrice = $('#price-to').text();

        $.ajax({
            type:"POST",
            url:"<?php echo $this->Url->build(['controller'=>'Flights','action'=>'filter']);?>",
            data: {minPrice:minPrice,maxPrice:maxPrice,airlines:matches,flight_stops:stops},
            beforeSend: function(){
                $('#loading').css('display','block');
            },
            success: function(response){
                $('.flights_item').html('');
                $(".flights_item").append(response);
                $('#loading').css('display','none');
            }
        });
    }

    $('.airlines').change(function(e){
        flightFilter();
    });

    $('.price-slider').mouseup(function(e){
        flightFilter();
    });
    /*Added by mahipal 1-may-2016*/
    $('.flight_stops').change(function(e){
        flightFilter();
    });

</script>

<div class="page-title-container">
        <div class="container">
            <div class="page-title pull-left">
                <h2 class="entry-title">Flight Search Results</h2>
            </div>
            <ul class="breadcrumbs pull-right">
                <li><a href="#">HOME</a></li>
                <li class="active">Flight Search Results</li>
            </ul>
        </div>
    </div>
    <section id="content">
        <div class="container">
            <div id="main">
                <div class="row">
                    <div class="col-sm-4 col-md-3">
                        <h4 class="search-results-title"><i class="soap-icon-search"></i><b>1,984</b> results found.</h4>
                        <div class="toggle-container filters-container">
                            <div class="panel style1 arrow-right">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" href="#price-filter" class="collapsed">Price</a>
                                </h4>
                                <div id="price-filter" class="panel-collapse collapse">
                                    <div class="panel-content">
                                        <div id="price-range"></div>
                                        <br />
                                        <span class="min-price-label pull-left"></span>
                                        <span class="max-price-label pull-right"></span>
                                        <div class="clearer"></div>
                                    </div><!-- end content -->
                                </div>
                            </div>

                            <div class="panel style1 arrow-right">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" href="#flight-times-filter" class="collapsed">Flight Times</a>
                                </h4>
                                <div id="flight-times-filter" class="panel-collapse collapse">
                                    <div class="panel-content">
                                        <div id="flight-times" class="slider-color-yellow"></div>
                                        <br />
                                        <span class="start-time-label pull-left"></span>
                                        <span class="end-time-label pull-right"></span>
                                        <div class="clearer"></div>
                                    </div><!-- end content -->
                                </div>
                            </div>

                            <div class="panel style1 arrow-right">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" href="#flight-stops-filter" class="collapsed">Flight Stops</a>
                                </h4>
                                <div id="flight-stops-filter" class="panel-collapse collapse">
                                    <div class="panel-content">
                                        <ul class="check-square filters-option">
                                            <li><a href="#">1 Stop</a></li>
                                            <li><a href="#">2 Stops</a></li>
                                            <li class="active"><a href="#">3 Stops</a></li>
                                            <li><a href="#">MultiStops</a></li>
                                        </ul>
                                        <a class="button btn-mini">MORE</a>
                                    </div>
                                </div>
                            </div>

                            <div class="panel style1 arrow-right">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" href="#airlines-filter" class="collapsed">Airlines</a>
                                </h4>
                                <div id="airlines-filter" class="panel-collapse collapse">
                                    <div class="panel-content">
                                        <ul class="check-square filters-option">
                                           <?php foreach (@$flights_data as $flight_stop_details) {
                                                $flight_stops[] = $flight_stop_details->flight_stops[0]->airline_name;
                                            }
                                            $airline= array_unique($flight_stops);
                                            foreach ($airline as $flights){
                                                ?>
                                                <li><a href="#"><?php echo $flights;?></a></li>
                                            <?php } ?>
                                        </ul>
<!--                                        <a class="button btn-mini">MORE</a>-->
                                    </div>
                                </div>
                            </div>

                            <!--<div class="panel style1 arrow-right">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" href="#flight-type-filter" class="collapsed">Flight Type</a>
                                </h4>
                                <div id="flight-type-filter" class="panel-collapse collapse">
                                    <div class="panel-content">
                                        <ul class="check-square filters-option">
                                            <li><a href="#">Business</a></li>
                                            <li><a href="#">First class</a></li>
                                            <li class="active"><a href="#">Economy</a></li>
                                            <li><a href="#">Premium Economy</a></li>
                                        </ul>
                                        <a class="button btn-mini">MORE</a>
                                    </div>
                                </div>
                            </div>

                            <div class="panel style1 arrow-right">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" href="#inflight-experience-filter" class="collapsed">Inflight Experience</a>
                                </h4>
                                <div id="inflight-experience-filter" class="panel-collapse collapse">
                                    <div class="panel-content">
                                        <ul class="check-square filters-option">
                                            <li><a href="#">Inflight Dining</a></li>
                                            <li><a href="#">Music</a></li>
                                            <li class="active"><a href="#">Sky Shopping</a></li>
                                            <li><a href="#">Wi-fi</a></li>
                                            <li><a href="#">Seats &amp; Cabin</a></li>
                                        </ul>
                                        <a class="button btn-mini">MORE</a>
                                    </div>
                                </div>
                            </div>-->

                            <div class="panel style1 arrow-right">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" href="#modify-search-panel" class="collapsed">Modify Search</a>
                                </h4>
                                <div id="modify-search-panel" class="panel-collapse collapse">
                                    <div class="panel-content">
                                        <form method="post">
                                            <div class="form-group">
                                                <label>Leaving from</label>
                                                <input type="text" class="input-text full-width" placeholder="" value="city, district, or specific airpot" />
                                            </div>
                                            <div class="form-group">
                                                <label>Departure on</label>
                                                <div class="datepicker-wrap">
                                                    <input type="text" name="date_from" class="input-text full-width" placeholder="mm/dd/yy" />
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label>Arriving On</label>
                                                <div class="datepicker-wrap">
                                                    <input type="text" name="date_to" class="input-text full-width" placeholder="mm/dd/yy" />
                                                </div>
                                            </div>
                                            <br />
                                            <button class="btn-medium icon-check uppercase full-width">search again</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-8 col-md-9">
                        <div class="sort-by-section clearfix box">
                            <h4 class="sort-by-title block-sm">Sort results by:</h4>
                            <ul class="sort-bar clearfix block-sm">
                                <li class="sort-by-name"><a class="sort-by-container" href="#"><span>name</span></a></li>
                                <li class="sort-by-price"><a class="sort-by-container" href="#"><span>price</span></a></li>
                                <li class="sort-by-rating active"><a class="sort-by-container" href="#"><span>duration</span></a></li>
                            </ul>

                            <ul class="swap-tiles clearfix block-sm">
                                <li class="swap-list active">
                                    <a href="#"><i class="soap-icon-list"></i></a>
                                </li>
                                <li class="swap-grid">
                                    <a href="#"><i class="soap-icon-grid"></i></a>
                                </li>
                                <li class="swap-block">
                                    <a href="#"><i class="soap-icon-block"></i></a>
                                </li>
                            </ul>
                        </div>

                        <div class="flight-list listing-style3 flight">
                            <?php if (@$flights_data == 'error' || @$flights_data == "") {
                                echo '<p class="flight_result_msg">No Result Found</p>';
                            } else {
                            foreach ($flights_data as $flights) {
//                                pr($flights);
                                $flight['departure']=$flights->departure_location;
                                $flight['arrival']=$flights->arrival_location;
                                ?>
                            <article class="box">
                                <figure class="col-xs-3 col-sm-2">
                                    <span><?php echo $this->Html->image('http://www.journeycook.com/img/airlines_small_logos/'.@$flights->flight_stops['0']->airline_code.".gif", ['alt' => @$flights->flight_stops['0']->airline_name]); ?></span>
                                </figure>
                                <div class="details col-xs-9 col-sm-10">
                                    <div class="details-wrapper">
                                        <div class="first-row">
                                            <div>
                                                <h4 class="box-title"> <?php echo $this->Html->link($flights->departure_location . ' to ' . $flights->arrival_location, '#'); ?>
                                                    <small>Oneway flight</small></h4>
                                                <a class="button btn-mini stop"><?php echo $flights->stops; ?> STOP</a>
                                               <!-- <div class="amenities">
                                                    <i class="soap-icon-wifi circle"></i>
                                                    <i class="soap-icon-entertainment circle"></i>
                                                    <i class="soap-icon-fork circle"></i>
                                                    <i class="soap-icon-suitcase circle"></i>
                                                </div>-->
                                            </div>
                                            <div>
                                                <span class="price"><small>AVG/PERSON</small><?php echo $flights->flight_price->formatted_total_price; ?></span>
                                            </div>
                                        </div>
                                        <?php foreach ($flights->flight_stops as $key => $flight_stop_details) {
                                            if($key==0){
                                                $flight_stops[] = $flight_stop_details->airline_name;
                                            }
                                            ?>
                                        <div class="second-row">
                                            <div class="time">
                                                <div class="take-off col-sm-4">
                                                    <div class="icon"><i class="soap-icon-plane-right yellow-color"></i></div>
                                                    <div>
                                                        <span class="skin-color">Take off</span><br />
                                                        <?php echo $flight_stop_details->departure_location; ?>
                                                    </div>
                                                </div>
                                                <div class="landing col-sm-4">
                                                    <div class="icon"><i class="soap-icon-plane-right yellow-color"></i></div>
                                                    <div>
                                                        <span class="skin-color">landing</span><br />
                                                        <?php echo $flight_stop_details->arrival_location; ?>
                                                    </div>
                                                </div>
                                                <div class="total-time col-sm-4">
                                                    <div class="icon"><i class="soap-icon-clock yellow-color"></i></div>
                                                    <div>
                                                        <span class="skin-color">total time</span><br />13 Hour, 40 minutes
                                                    </div>
                                                </div>
                                                <div class="clearfix"></div>
                                            </div>

                                            <div class="action" <?= ($key==0)?'':'style="display:none"'; ?> >
                                                <a href="#" class="button btn-small full-width">SELECT NOW</a>
                                            </div>
                                        </div>
                                        <?php }?>
                                </div>
                            </article>
                           <?php } }
                            ?>
                        </div>
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
<!--                        <a class="button uppercase full-width btn-large">load more listings</a>-->
                    </div>
                </div>
            </div>
        </div>
    </section>
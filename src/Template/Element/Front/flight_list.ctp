<div class="filter-page__content">
    <div class="filter-item-wrapper">
        <?php if (@empty($flights_data)) {
            echo '<p class="flight_result_msg">No Result Found</p>';
        } else {

            foreach ($flights_data as $flights) {
//                                pr($flights);
                $flight['departure']= @$flights->departure_location;
                $flight['arrival']= @$flights->arrival_location;
                ?>
                <!-- ITEM -->
                <div class="flight-item">
                    <div class="item-media">
                        <div class="image-cover">
                            <?php echo $this->Html->image('https://images.kiwi.com/airlines/64/'.@$flights->flight_stops['0']->airline_code.".gif", ['alt' => @$flights->flight_stops['0']->airline_name]); ?>
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
                                $flight_stops[] = $flight_stop_details->airline_name;
                                ?>
                                <tr>
                                    <td class="route">
                                        <ul>
                                            <li><?php echo $flight_stop_details->arrival_code; ?>
                                                <i class="awe-icon awe-icon-arrow-right"></i></li>
                                            <li><?php echo $flight_stop_details->departure_code; ?>

                                        </ul>
                                    </td>
                                    <td class="depart">
                                        <span><?php echo $flight_stop_details->departure_time->format('H:i A'); ?></span>
                                        <span class="date"><?php echo $flight_stop_details->departure_time->format('M d,'); ?></span>
                                    </td>
                                    <td class="arrive">
                                        <span><?php echo $flight_stop_details->arrival_time->format('H:i A'); ?></span>
                                        <span class="date"><?php echo $flight_stop_details->arrival_time->format('M d,'); ?></span>
                                    </td>
                                    <td class="duration">
                                        <span><?php echo $flight_stop_details->duration; ?></span>
                                    </td>
                                </tr>
                            <?php }
                            ?>
                            </tbody>
                        </table>
                    </div>
                    <div class="item-price-more">
                        <div class="price">
                                            <span
                                                class="amount"><?php echo $flights->flight_price->formatted_total_price; ?></span>
                            exclude Fare
                        </div>
                        <?php echo $this->Html->link('Book now', '#', ['target' => '_blank', 'class' => 'awe-btn']); ?>
                    </div>
                </div>
                <!-- END / ITEM -->
            <?php }
        }
        ?>
    </div>

    <!-- PAGINATION -->
<!--    <div class="page__pagination">-->
<!--        --><?php
//        $this->Paginator->templates([
//            'number' => '<a href="{{url}}">{{text}}</a>',
//            'nextActive'=>'<a href="{{url}}"><i class="fa fa-caret-right"></i></a>',
//            'prevActive'=>'<a href="{{url}}"><i class="fa fa-caret-left"></i></a>',
//            'current'=>'<span class="current">{{text}}</span>',
//            'nextDisabled'=>'<i class="fa fa-caret-right"></i>',
//            'prevDisabled'=>'<i class="fa fa-caret-left"></i>'
//        ]);
//        echo $this->Paginator->prev();
//        echo $this->Paginator->numbers();
//        echo $this->Paginator->next();
//        ?>
<!--    </div>-->
    <!-- END / PAGINATION -->
</div>
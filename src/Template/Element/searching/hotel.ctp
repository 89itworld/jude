<!--     Hotels search form     -->
<div aria-hidden="true" aria-expanded="false"  role="tabpanel" aria-labelledby="ui-id-2" id="awe-search-tabs-2" class="search-hotel ui-tabs-panel ui-widget-content ui-corner-bottom">
    <h2>Search Now</h2>
    <?php //echo $this->Form->create('Hotels',[]); ?>

    <form method="post" action="hotels">
        <div class="form-group">
            <div class="form-elements">
                <label>Destinations</label>
                <div class="form-item">
                    <i class="awe-icon awe-icon-marker-1"></i>
                    <?php echo $this->Form->input('destination',['type'=>'text','id'=>'location','placeholder'=>'Country, city, airport...','label'=>false,
                        'data-validation'=>"length required alphanumeric",
                        'data-validation-length'=>'min3',
                        'data-validation-allowing'=>"-_,'\" ",
                        'data-validation-error-msg'=>'Please Provide valid address.',
                        'data-validation-error-msg-container'=>'.address-error']); ?>
                </div>
                <span class="address-error" style="color: red !important;"></span>
            </div>
        </div>
        <div class="form-group">
            <div class="form-elements">
                <label>Check in</label>
                <div class="form-item">
                    <i class="awe-icon awe-icon-calendar"></i>
                    <?php echo $this->Form->input('date_from',['type'=>'text','id'=>'date_from','class'=>'awe-calendar date-from','placeholder'=>'yyyy-mm-dd','label'=>false,'data-validation'=>'required','data-validation-error-msg'=>'This field is required.','data-validation-error-msg-container'=>'.date-from']); ?>
                </div>
                <span class="date-from help-block form-error"></span>
            </div>
            <div class="form-elements">
                <label>Check out</label>
                <div class="form-item">
                    <i class="awe-icon awe-icon-calendar"></i>
                    <?php echo $this->Form->input('date_to',['type'=>'text','id'=>'date_to','class'=>'awe-calendar date-to','placeholder'=>'yyyy-mm-dd','label'=>false,'data-validation'=>'required','data-validation-error-msg'=>'This is required field.',									'data-validation-error-msg-container'=>'.date-to'
                    ]); ?>
                </div>
                <span class="date-to" style="color: red !important;"></span>
            </div>
        </div>

        <div class="form-group">
            <div class="form-elements">
                <label>Adult</label>
                <div class="form-item">
                    <?php echo $this->Form->input('adults', array(
                        'options' => array(
                            '1'=>'1',
                            '2'=>'2',
                            '3'=>'3'),
                        'class'=>'awe-select',
                        'label'=>false,
                    )); ?>
                </div>
            </div>
            <div class="form-elements">
                <label>Kids</label>
                <div class="form-item">
                    <?php echo $this->Form->input('kids', array(
                        'options' => array(
                            ''=>'--select--',
                            '1'=>'1',
                            '2'=>'2',
                            '3'=>'3'),
                        'class'=>'awe-select',
                        'label'=>false,
                    )); ?>
                </div>
            </div>
        </div>
        <div class="form-actions">
            <?php echo $this->Form->input('Search Now',['type'=>'submit']);?>
        </div>

    </form>
</div>

<!--        End Hotels Search -->
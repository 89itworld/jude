<div aria-hidden="true" aria-expanded="false"  role="tabpanel" aria-labelledby="ui-id-4" id="awe-search-tabs-4" class="search-flight ui-tabs-panel ui-widget-content ui-corner-bottom">
    <h2>Search Now</h2>
    <form method="post" action="tours" id="">
        <div class="form-group">
            <div class="form-elements">
                <label>Title</label>
                <div class="form-item">
                    <?php echo $this->Form->input('title',['type'=>'text','label'=>false,'placeholder'=>'Search for Tours']); ?>
                </div>
            </div>
        </div>

        <div class="form-group">
            <div class="">
                <br>
                <label>Where</label>
                <div class="form-item">
<!--                    <i class="awe-icon awe-icon-marker-1"></i>-->
                    <?php echo $this->Form->input('destination',['type'=>'text','label'=>false,'placeholder'=>'Search your tourism destination']);?>
                </div>
            </div>
        </div>
        <div class="form-actions">
            <?php echo $this->Form->input('Search Now',['type'=>'submit']); ?>
        </div>
        <?php echo $this->Form->end(); ?>
</div>


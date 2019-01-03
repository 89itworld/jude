<link rel="icon" href="../../img/favicon.png">
<div class="page-title-container">
    <div class="container">
        <div class="page-title pull-left">
            <h2 class="entry-title"><?php echo $tour->title; ?></h2>
        </div>
        <?php if(strlen($tour->title)<100){ ?>
        <ul class="breadcrumbs pull-right">
            <li><a href="#">HOME</a></li>
            <li><a href="#">Tours</a></li>
            <li class="active">Tour Details</li>
        </ul>
        <?php } ?>
    </div>
</div>

<section id="content">
    <div class="container tour-detail-page">
        <div class="row">
            <div id="main" class="col-md-9">
                <div class="featured-gallery image-box">
                    <span class="discount"><span class="discount-text">10% Discount</span></span>
                    <div class="flexslider photo-gallery style1" id="post-slideshow1" data-sync="#post-carousel1" data-func-on-start="showTourDetailedDiscount">
                        <ul class="slides">
                           <?php foreach($tour->tour_images as $images){ ?>
                            <li><a href="">
                                    <?php echo $this->Html->image($images->largeLogo,['style'=>'width: 100% ! important;']); ?>
                                </a>
                            </li>
                            <?php } ?>
                        </ul>
                    </div>

                    <div class="flexslider image-carousel style1" id="post-carousel1"  data-animation="slide" data-item-width="70" data-item-margin="10" data-sync="#post-slideshow1">
                        <?php
                        $img = sizeof($tour->tour_images);
                        if($img > 1){?>
                        <ul class="slides">
                            <?php foreach($tour->tour_images as $images){?>
                                <li>
                                    <?php echo $this->Html->image($images->logo,['alt'=>'']); ?>
                                </li>
                            <?php } ?>
                        </ul>
                        <?php } ?>
                    </div>
                </div>


                <div id="tour-details" class="travelo-box">
                    <div class="intro2 small-box border-box table-wrapper hidden-table-sms">
                        <div class="image-container table-cell">
                            <img src="<?php echo $tour->tour_images[0]->logo; ?>" style="height: 80px;" alt=""></div>
                        <div class="table-cell">
                            <dl class="term-description">
                                <?php $duration = $tour['tour_duration']/60;
                                if($duration >= 24){
                                    $duration = $duration / 24 ." Days";
                                }else{
                                    $duration = $duration ." Hours";
                                }
                                ?>
                                <dt>Location:</dt><dd><?php echo $tour->city .", ". $tour->country; ?></dd>
                                <dt>Duration:</dt><dd><?php echo $duration; ?></dd>
                                <dt>Price:</dt><dd>$<?php echo $tour->price; ?></dd>
                            </dl>
                        </div>
                        <div class="price-section table-cell">
                            <div class="price"><small><?php echo $duration; ?> tour</small><div class="price-per-unit">$<?php echo $tour->price; ?></div></div>
                            <a href="#" class="button green btn-small uppercase">Book Tour</a>
                        </div>
                    </div>

                    <div class="tour-google-map block"></div>

                    <h2>General Information About Tour</h2>
                    <p><?php echo str_replace("<br>","", $tour->description); ?></p>
                </div>
            </div>
            <div class="sidebar col-md-3">
                <div class="travelo-box book-with-us-box">
                    <h4>Price</h4>
                    <ul>
                        <?php foreach(json_decode($tour->priceOptions) as $priceOption){?>
                        <li>
                            <i class="soap-icon-price circle"></i>
                            <h5 class="title"><?php echo $priceOption->label; ?></h5>
                            <p>$<?php echo $priceOption->price; ?></p>
                        </li>
                        <?php } ?>
                    </ul>
                </div>

                <div class="travelo-box">
                    <h4 class="box-title">Last Minute Deals</h4>
                    <div class="image-box style14">
                        <?php foreach($tourlist as $list){?>
                        <article class="box">
                            <figure><a href="#" title="">
                                    <img style="height: 65px;" src="<?php echo $list->tour_images[0]->logo; ?>" alt=""></a>
                            </figure>
                            <div class="details">
                                <h5 class="box-title"><?php echo $this->Html->link(substr(strip_tags($list->title), 0 ,30),['controller'=>'Tours','action'=>'tour_details',$tour->productCode]); ?></h5>
                                <label class="price-wrapper"><span class="price-per-unit">$<?php echo $list->price; ?></span></label>
                            </div>
                        </article>
                        <?php } ?>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>
<script type='text/javascript' src="http://maps.google.com/maps/api/js?sensor=false&amp;language=en"></script>
<?php echo $this->Html->script('travelo/gmap3.min');?>

<script type="text/javascript">
    $(".tour-google-map").gmap3({
        map: {
            options: {
                center: ["<?php echo $tour->lat; ?>", "<?php echo $tour->lang; ?>"],
                zoom: 12
            }
        },
        marker:{
            values: [
                {latLng:["<?php echo $tour->lat; ?>", "<?php echo $tour->lang; ?>"], data:"<?php echo $tour->city; ?>"}

            ],
            options: {
                draggable: false
            },
        }
    });

    function showTourDetailedDiscount() {
//        tjq(".featured-gallery .discount").css("visibility", "visible");
    }
</script>

<link rel="icon" href="img/favicon.png">
<div class="page-title-container">
    <div class="container">
        <div class="page-title pull-left">
            <h2 class="entry-title"><?php echo $search; ?></h2>
        </div>
        <ul class="breadcrumbs pull-right">
            <li><a href="#">HOME</a></li>
            <li><a href="#">Tours</a></li>
        </ul>
    </div>
</div>

<section id="content">
    <div class="container">
        <div id="main">
            <div class="row add-clearfix image-box style1 tour-locations">
                <?php foreach($tour as $tours){
//                    pr($tours); die;
                    ?>
                    <div class="col-sm-6 col-md-4 col-lg-3">
                        <article class="box">
                            <figure>
                                <?php echo $this->Html->image($tours->tour_images[0]->logo,['style'=>'height: 165px;']); ?>
                            </figure>
                            <div class="details">
                                <span class="price">$<?php echo $tours['price']; ?></span>
                                <h4 class="box-title"><?php echo substr(strip_tags($tours->title), 0 ,35); ?></h4>
                                <hr>
                                <?php $duration = $tours['tour_duration']/60;
                                if($duration >= 24){
                                    $duration = $duration / 24 ." Days";
                                }else{
                                    $duration = $duration ." Hours";
                                }
                                ?>

                                <ul class="features check">
                                    <li>Tour In <?php echo $duration; ?></li>
                                    <li><?php echo $tours->supplierName; ?></li>
                                </ul>
                                <hr>

<!--                                <div class="text-center">-->
<!--                                    <div class="time">-->
<!--                                        <i class="soap-icon-clock yellow-color"></i>-->
<!--                                        <span>01 Nov 2014 - 08 Nov 2014</span>-->
<!--                                    </div>-->
<!--                                </div>-->

                                <?php echo $this->Html->link('Select',['controller'=>'Tours','action'=>'tour_details',$tours->productCode],['class'=>'button btn-small full-width']); ?>
                            </div>
                        </article>
                    </div>
                <?php }?>

            </div>
        </div>
    </div>
</section>




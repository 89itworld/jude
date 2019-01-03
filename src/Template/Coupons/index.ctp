<div id="main-wrapper">
    <header>
        <div id="headnav-top">
            <div class="container">
                <div class="row">
                    <div class="col-md-2 col-sm-12">
                        <?php echo $this->Html->image('logo/logo.png',['style'=>'padding: 6px 0 0 0']); ?>
                    </div>
                    <div class="col-md-6 col-sm-12">
                        <ul class="nav nav-pills trv-topnav">
                            <li><a href="">Home</a></li>
                            <li><a href="" class="active">Flights</a></li>
                            <li><a href="">Hotels</a></li>
                            <li><a href="">Shopping</a></li>
                            <li><a href="">Blog</a></li>
                        </ul>
                    </div> <!-- col-md-6 -->
                    <div class="col-md-4 col-sm-12">
                        <ul class="login-register">
                            <li class="shopping-cart">
                                <?php echo $this->Html->link('<i class="fa fa-shopping-cart"></i>My Cart','#',['escape'=>false]); ?>
                                <div class="shopping-cart-box">
                                    <ul class="shopping-cart-items">
                                        <li>
                                            <a href="#">
                                                <?php echo $this->Html->image('amaze_70x70.jpg',['alt'=>'Image Alternative text','title'=>'AMaze']);?>
                                                <h5>New Glass Collection</h5><span class="shopping-cart-item-price">$150</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <?php echo $this->Html->image('amaze_70x70.jpg',['alt'=>'Image Alternative text','title'=>'AMaze']);?>
                                                <h5>Playstation Accessories</h5><span class="shopping-cart-item-price">$170</span>
                                            </a>
                                        </li>
                                    </ul>
                                    <ul class="list-inline text-center whttxt">
                                        <li><a href="#"><i class="fa fa-shopping-cart"></i> View Cart</a></li>
                                        <li><a href="#"><i class="fa fa-check-square"></i> Checkout</a></li>
                                    </ul>
                                </div>
                            </li>
                            <li><a class="popup-text" href="#login-dialog" data-effect="mfp-move-from-top"><i class="fa fa-sign-in"></i>Sign in</a>
                            </li>
                            <li><a class="popup-text" href="#register-dialog" data-effect="mfp-move-from-top"><i class="fa fa-edit"></i>Sign up</a>
                            </li>
                        </ul>
                    </div> <!-- col-md-6 -->
                </div> <!-- row -->
            </div> <!-- container -->
        </div> <!-- headnav-top -->
        <div id="headnav-top2">
            <form class="search-area form-group">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 clearfix">
                            <label><i class="fa fa-search"></i><span>I am searching for</span>
                            </label>
                            <div class="search-area-division search-area-division-input">
                                <input class="form-control" type="text" placeholder="Travel Vacation">
                            </div>
                        </div>
                        <div class="col-md-3 clearfix">
                            <label><i class="fa fa-map-marker"></i><span>In</span>
                            </label>
                            <div class="search-area-division search-area-division-location">
                                <input class="form-control" type="text" placeholder="Boston">
                            </div>
                        </div>
                        <div class="col-md-1">
                            <button class="btn btn-block btn-white search-btn" type="submit">Search</button>
                        </div>
                    </div> <!-- row -->
                </div> <!-- container -->
            </form>
        </div> <!-- header-top2 -->
    </header>

    <section id="banner-cats">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="sidebar-left">
                        <ul class="nav nav-tabs nav-stacked nav-coupon-items">
                            <li class="active"><a href="#"><i class="fa fa-ticket"></i>All<b class="bgbh">36</b></a>
                            </li>
                            <li><a href="#"><i class="fa fa-truck"></i>Things to Do<b class="badges">34</b></a>
                            </li>
                            <li><a href="#"><i class="fa fa-sun-o"></i>Beach vacations<b class="badges">34</b></a>
                            </li>
                            <li><a href="#"><i class="fa fa-plane"></i>International & Tours<b class="badges">34</b></a>
                            </li>
                            <li><a href="#"><i class="fa fa-newspaper-o"></i>Travel Deals<b class="badges">34</b></a>
                            </li>
                            <li><a href="#"><i class="fa fa-magic"></i>Events & Festivals<b class="badges">34</b></a>
                            </li>
                            <li><a href="#"><i class="fa fa-flag"></i>History & Culture<b class="badges">34</b></a>
                            </li>
                            <li><a href="#"><i class="fa fa-soccer-ball-o"></i>Sports <b class="badges">34</b></a>
                            </li>
                            <li><a href="#"><i class="fa fa-meh-o"></i>Romantic Getaways<b class="badges">34</b></a>
                            </li>
                            <li><a href="#"><i class="fa fa-cloud"></i>Outdoor & Adventure<b class="badges">34</b></a>
                            </li>
                            <li><a href="#"><i class="fa fa-institution"></i>University</a>
                            </li>
                        </ul>
                        <div class="sideblock-block">
                            <h5 style="font-size: 15px;font-weight: normal;">Filter By Price</h5>
                            <span id="price-slider"></span>
                        </div> <!-- sideblock-block -->
                        <div class="sideblock-block">
                            <h5 style="font-size: 15px;font-weight: normal;">Recent Viewed</h5>
                            <ul class="thumb-list">
                                <li>
                                    <a href="#">
                                        <?php echo $this->Html->image('a1.jpg',['alt'=>'Image Alternative text','title'=>'Urbex Esch/Lux with Laney and Laaaaag']);?>
                                    </a>
                                    <div class="thumb-list-item-caption">
                                        <h5 class="thumb-list-item-title"><a href="#">Best Camera Lenthes</a></h5>
                                        <p class="thumb-list-item-price">$409</p>
                                    </div>
                                </li>
                                <li>
                                    <a href="#">
                                        <?php echo $this->Html->image('a1.jpg',['alt'=>'Image Alternative text','title'=>'AMaze']);?>
                                    </a>
                                    <div class="thumb-list-item-caption">
                                        <h5 class="thumb-list-item-title"><a href="#">New Glass Collection</a></h5>
                                        <p class="thumb-list-item-price">$296</p>
                                    </div>
                                </li>
                                <li>
                                    <a href="#">
                                        <?php echo $this->Html->image('a1.jpg',['alt'=>'Image Alternative text','title'=>'waipio valley']);?>
                                    </a>
                                    <div class="thumb-list-item-caption">
                                        <h5 class="thumb-list-item-title"><a href="#">Awesome Vacation</a></h5>
                                        <p class="thumb-list-item-price">$214</p>
                                    </div>
                                </li>
                            </ul>
                        </div>	<!-- Sidebox -->
                    </div> <!-- sidebar-left -->
                </div> <!--col-md-3-->

                <div class="col-md-9">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="product-sort">
                                <span class="product-sort-selected">sort by <b>Price</b></span>
                                <a href="#" class="product-sort-order fa fa-angle-down"></a>
                                <ul>
                                    <li><a href="#">Sort by Name</a>
                                    </li>
                                    <li><a href="#">Sort by Date</a>
                                    </li>
                                    <li><a href="#">Sort by Popularity</a>
                                    </li>
                                    <li><a href="#">Sort by Rating</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-2 col-md-offset-7">
                            <div class="product-view pull-right">
                                <a class="fa fa-th-large prgrid-view active" href="javascript:void(0)"></a>
                                <a class="fa fa-list prlist-view" href="javascript:void(0)"></a>
                            </div>
                        </div>
                    </div> <!-- row -->
                    <div class="row row-wrap trv_propad prlist-view1">
                        <div class="col-md-4">
                            <div class="product-block">
                                <header class="product-header">
                                    <?php echo $this->Html->image('p1.jpg',['alt'=>'Image Alternative text','title'=>'The Hidden Power of the Heart']);?>
                                </header>
                                <div class="product-inner">
                                    <ul class="icon-group icon-list-rating icon-list-non-rated" title="not rated yet">
                                        <li><i class="fa fa-star"></i>
                                        </li>
                                        <li><i class="fa fa-star"></i>
                                        </li>
                                        <li><i class="fa fa-star"></i>
                                        </li>
                                        <li><i class="fa fa-star"></i>
                                        </li>
                                        <li><i class="fa fa-star"></i>
                                        </li>
                                    </ul>
                                    <h5 class="product-title">Beach Holidays</h5>
                                    <p class="product-desciption">Volutpat torquent orci luctus pharetra volutpat nisl dis</p>
                                    <div class="product-trvBlock">
                                        <ul class="product-price-list">
                                            <li><span class="product-price">$161</span>
                                            </li>
                                        </ul>
                                        <ul class="product-actions-list">
                                            <li><a class="btn btn-sm" href="#"><i class="fa fa-shopping-cart"></i> To Cart</a>
                                            </li>
                                            <li><a class="btn btn-sm"><i class="fa fa-bars"></i> Details</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div> <!--- col-md-4 -->

                        <div class="col-md-4">
                            <div class="product-block">
                                <header class="product-header">
                                    <?php echo $this->Html->image('p2.jpg',['alt'=>'Image Alternative text','title'=>'The Hidden Power of the Heart']);?>
                                </header>
                                <div class="product-inner">
                                    <ul class="icon-group icon-list-rating icon-list-non-rated" title="not rated yet">
                                        <li><i class="fa fa-star"></i>
                                        </li>
                                        <li><i class="fa fa-star"></i>
                                        </li>
                                        <li><i class="fa fa-star"></i>
                                        </li>
                                        <li><i class="fa fa-star"></i>
                                        </li>
                                        <li><i class="fa fa-star"></i>
                                        </li>
                                    </ul>
                                    <h5 class="product-title">Coffe Shop Discount</h5>
                                    <p class="product-desciption">Volutpat torquent orci luctus pharetra volutpat nisl dis</p>
                                    <div class="product-trvBlock">
                                        <ul class="product-price-list">
                                            <li><span class="product-price">$143</span>
                                            </li>
                                        </ul>
                                        <ul class="product-actions-list">
                                            <li><a class="btn btn-sm" href="#"><i class="fa fa-shopping-cart"></i> To Cart</a>
                                            </li>
                                            <li><a class="btn btn-sm"><i class="fa fa-bars"></i> Details</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div> <!--- col-md-4 -->

                        <div class="col-md-4">
                            <div class="product-block">
                                <header class="product-header">
                                    <?php echo $this->Html->image('p3.jpg',['alt'=>'Image Alternative text','title'=>'The Hidden Power of the Heart']);?>
                                </header>
                                <div class="product-inner">
                                    <ul class="icon-group icon-list-rating icon-list-non-rated" title="not rated yet">
                                        <li><i class="fa fa-star"></i>
                                        </li>
                                        <li><i class="fa fa-star"></i>
                                        </li>
                                        <li><i class="fa fa-star"></i>
                                        </li>
                                        <li><i class="fa fa-star"></i>
                                        </li>
                                        <li><i class="fa fa-star"></i>
                                        </li>
                                    </ul>
                                    <h5 class="product-title">Best Camera Lenthes</h5>
                                    <p class="product-desciption">Volutpat torquent orci luctus pharetra volutpat nisl dis</p>
                                    <div class="product-trvBlock">
                                        <ul class="product-price-list">
                                            <li><span class="product-price">$161</span>
                                            </li>
                                        </ul>
                                        <ul class="product-actions-list">
                                            <li><a class="btn btn-sm" href="#"><i class="fa fa-shopping-cart"></i> To Cart</a>
                                            </li>
                                            <li><a class="btn btn-sm"><i class="fa fa-bars"></i> Details</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div> <!--- col-md-4 -->

                        <div class="col-md-4">
                            <div class="product-block">
                                <header class="product-header">
                                    <?php echo $this->Html->image('p4.jpg',['alt'=>'Image Alternative text','title'=>'The Hidden Power of the Heart']);?>
                                </header>
                                <div class="product-inner">
                                    <ul class="icon-group icon-list-rating icon-list-non-rated" title="not rated yet">
                                        <li><i class="fa fa-star"></i>
                                        </li>
                                        <li><i class="fa fa-star"></i>
                                        </li>
                                        <li><i class="fa fa-star"></i>
                                        </li>
                                        <li><i class="fa fa-star"></i>
                                        </li>
                                        <li><i class="fa fa-star"></i>
                                        </li>
                                    </ul>
                                    <h5 class="product-title">Beach Holidays</h5>
                                    <p class="product-desciption">Volutpat torquent orci luctus pharetra volutpat nisl dis</p>
                                    <div class="product-trvBlock">
                                        <ul class="product-price-list">
                                            <li><span class="product-price">$161</span>
                                            </li>
                                        </ul>
                                        <ul class="product-actions-list">
                                            <li><a class="btn btn-sm" href="#"><i class="fa fa-shopping-cart"></i> To Cart</a>
                                            </li>
                                            <li><a class="btn btn-sm"><i class="fa fa-bars"></i> Details</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div> <!--- col-md-4 -->

                        <div class="col-md-4">
                            <div class="product-block">
                                <header class="product-header">
                                    <?php echo $this->Html->image('p5.jpg',['alt'=>'Image Alternative text','title'=>'The Hidden Power of the Heart']);?>
                                </header>
                                <div class="product-inner">
                                    <ul class="icon-group icon-list-rating icon-list-non-rated" title="not rated yet">
                                        <li><i class="fa fa-star"></i>
                                        </li>
                                        <li><i class="fa fa-star"></i>
                                        </li>
                                        <li><i class="fa fa-star"></i>
                                        </li>
                                        <li><i class="fa fa-star"></i>
                                        </li>
                                        <li><i class="fa fa-star"></i>
                                        </li>
                                    </ul>
                                    <h5 class="product-title">Beach Holidays</h5>
                                    <p class="product-desciption">Volutpat torquent orci luctus pharetra volutpat nisl dis</p>
                                    <div class="product-trvBlock">
                                        <ul class="product-price-list">
                                            <li><span class="product-price">$161</span>
                                            </li>
                                        </ul>
                                        <ul class="product-actions-list">
                                            <li><a class="btn btn-sm" href="#"><i class="fa fa-shopping-cart"></i> To Cart</a>
                                            </li>
                                            <li><a class="btn btn-sm"><i class="fa fa-bars"></i> Details</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div> <!--- col-md-4 -->

                        <div class="col-md-4">
                            <div class="product-block">
                                <header class="product-header">
                                    <?php echo $this->Html->image('p6.jpg',['alt'=>'Image Alternative text','title'=>'The Hidden Power of the Heart']);?>
                                </header>
                                <div class="product-inner">
                                    <ul class="icon-group icon-list-rating icon-list-non-rated" title="not rated yet">
                                        <li><i class="fa fa-star"></i>
                                        </li>
                                        <li><i class="fa fa-star"></i>
                                        </li>
                                        <li><i class="fa fa-star"></i>
                                        </li>
                                        <li><i class="fa fa-star"></i>
                                        </li>
                                        <li><i class="fa fa-star"></i>
                                        </li>
                                    </ul>
                                    <h5 class="product-title">Beach Holidays</h5>
                                    <p class="product-desciption">Volutpat torquent orci luctus pharetra volutpat nisl dis</p>
                                    <div class="product-trvBlock">
                                        <ul class="product-price-list">
                                            <li><span class="product-price">$161</span>
                                            </li>
                                        </ul>
                                        <ul class="product-actions-list">
                                            <li><a class="btn btn-sm" href="#"><i class="fa fa-shopping-cart"></i> To Cart</a>
                                            </li>
                                            <li><a class="btn btn-sm"><i class="fa fa-bars"></i> Details</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div> <!--- col-md-4 -->

                        <!-- PAGENATION START -->
                        <ul class="pagination">
                            <li class="prev disabled">
                                <a href="#"></a>
                            </li>
                            <li class="active"><a href="#">1</a>
                            </li>
                            <li><a href="#">2</a>
                            </li>
                            <li><a href="#">3</a>
                            </li>
                            <li><a href="#">4</a>
                            </li>
                            <li><a href="#">5</a>
                            </li>
                            <li class="next">
                                <a href="#"></a>
                            </li>
                        </ul>
                        <!-- PAGENATION END -->
                    </div> <!-- row row-wrap -->

                    <div class="prgrid-view2" style="display:none">
                        <div class="product-block product-block-horizontal">
                            <header class="product-header">
                                <?php echo $this->Html->image('p1.jpg',['alt'=>'Image Alternative text','title'=>'My Ice Cream and Your Ice Cream Spoons']);?>
                            </header>
                            <div class="product-inner">
                                <ul class="icon-group icon-list-rating" title="3.2/5 rating">
                                    <li><i class="fa fa-star"></i>
                                    </li>
                                    <li><i class="fa fa-star"></i>
                                    </li>
                                    <li><i class="fa fa-star"></i>
                                    </li>
                                    <li><i class="fa fa-star-half-empty"></i>
                                    </li>
                                    <li><i class="fa fa-star-o"></i>
                                    </li>
                                </ul>
                                <h5 class="product-title">Lovely Ice Cream Spoons</h5>
                                <div class="product-desciption">Sociosqu id in semper ultrices pharetra luctus habitasse egestas libero curabitur montes sollicitudin</div>
                                <div class="product-trvBlock">
                                    <ul class="product-price-list">
                                        <li><span class="product-price">$131</span>
                                        </li>
                                        <li><span class="product-old-price">$218</span>
                                        </li>
                                        <li><span class="product-save">Save 60%</span>
                                        </li>
                                    </ul>
                                    <ul class="product-actions-list">
                                        <li><a class="btn btn-sm" href="#"><i class="fa fa-shopping-cart"></i> To Cart</a>
                                        </li>
                                        <li><a class="btn btn-sm"><i class="fa fa-bars"></i> Details</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div> <!-- product-block product-block-horizontal -->

                        <div class="product-block product-block-horizontal">
                            <header class="product-header">
                                <?php echo $this->Html->image('p2.jpg',['alt'=>'Image Alternative text','title'=>'My Ice Cream and Your Ice Cream Spoons']);?>
                            </header>
                            <div class="product-inner">
                                <ul class="icon-group icon-list-rating" title="3.2/5 rating">
                                    <li><i class="fa fa-star"></i>
                                    </li>
                                    <li><i class="fa fa-star"></i>
                                    </li>
                                    <li><i class="fa fa-star"></i>
                                    </li>
                                    <li><i class="fa fa-star-half-empty"></i>
                                    </li>
                                    <li><i class="fa fa-star-o"></i>
                                    </li>
                                </ul>
                                <h5 class="product-title">Lovely Ice Cream Spoons</h5>
                                <div class="product-desciption">Sociosqu id in semper ultrices pharetra luctus habitasse egestas libero curabitur montes sollicitudin</div>
                                <div class="product-trvBlock">
                                    <ul class="product-price-list">
                                        <li><span class="product-price">$131</span>
                                        </li>
                                        <li><span class="product-old-price">$218</span>
                                        </li>
                                        <li><span class="product-save">Save 60%</span>
                                        </li>
                                    </ul>
                                    <ul class="product-actions-list">
                                        <li><a class="btn btn-sm" href="#"><i class="fa fa-shopping-cart"></i> To Cart</a>
                                        </li>
                                        <li><a class="btn btn-sm"><i class="fa fa-bars"></i> Details</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div> <!-- product-block product-block-horizontal -->

                        <div class="product-block product-block-horizontal">
                            <header class="product-header">
                                <?php echo $this->Html->image('p3.jpg',['alt'=>'Image Alternative text','title'=>'My Ice Cream and Your Ice Cream Spoons']);?>
                            </header>
                            <div class="product-inner">
                                <ul class="icon-group icon-list-rating" title="3.2/5 rating">
                                    <li><i class="fa fa-star"></i>
                                    </li>
                                    <li><i class="fa fa-star"></i>
                                    </li>
                                    <li><i class="fa fa-star"></i>
                                    </li>
                                    <li><i class="fa fa-star-half-empty"></i>
                                    </li>
                                    <li><i class="fa fa-star-o"></i>
                                    </li>
                                </ul>
                                <h5 class="product-title">Lovely Ice Cream Spoons</h5>
                                <div class="product-desciption">Sociosqu id in semper ultrices pharetra luctus habitasse egestas libero curabitur montes sollicitudin</div>
                                <div class="product-trvBlock">
                                    <ul class="product-price-list">
                                        <li><span class="product-price">$131</span>
                                        </li>
                                        <li><span class="product-old-price">$218</span>
                                        </li>
                                        <li><span class="product-save">Save 60%</span>
                                        </li>
                                    </ul>
                                    <ul class="product-actions-list">
                                        <li><a class="btn btn-sm" href="#"><i class="fa fa-shopping-cart"></i> To Cart</a>
                                        </li>
                                        <li><a class="btn btn-sm"><i class="fa fa-bars"></i> Details</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div> <!-- product-block product-block-horizontal -->

                        <div class="product-block product-block-horizontal">
                            <header class="product-header">
                                <?php echo $this->Html->image('p4.jpg',['alt'=>'Image Alternative text','title'=>'My Ice Cream and Your Ice Cream Spoons']);?>
                            </header>
                            <div class="product-inner">
                                <ul class="icon-group icon-list-rating" title="3.2/5 rating">
                                    <li><i class="fa fa-star"></i>
                                    </li>
                                    <li><i class="fa fa-star"></i>
                                    </li>
                                    <li><i class="fa fa-star"></i>
                                    </li>
                                    <li><i class="fa fa-star-half-empty"></i>
                                    </li>
                                    <li><i class="fa fa-star-o"></i>
                                    </li>
                                </ul>
                                <h5 class="product-title">Lovely Ice Cream Spoons</h5>
                                <div class="product-desciption">Sociosqu id in semper ultrices pharetra luctus habitasse egestas libero curabitur montes sollicitudin</div>
                                <div class="product-trvBlock">
                                    <ul class="product-price-list">
                                        <li><span class="product-price">$131</span>
                                        </li>
                                        <li><span class="product-old-price">$218</span>
                                        </li>
                                        <li><span class="product-save">Save 60%</span>
                                        </li>
                                    </ul>
                                    <ul class="product-actions-list">
                                        <li><a class="btn btn-sm" href="#"><i class="fa fa-shopping-cart"></i> To Cart</a>
                                        </li>
                                        <li><a class="btn btn-sm"><i class="fa fa-bars"></i> Details</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div> <!-- product-block product-block-horizontal -->

                        <div class="product-block product-block-horizontal">
                            <header class="product-header">
                                <?php echo $this->Html->image('p5.jpg',['alt'=>'Image Alternative text','title'=>'My Ice Cream and Your Ice Cream Spoons']);?>
                            </header>
                            <div class="product-inner">
                                <!-- star rating -->
                                <ul class="icon-group icon-list-rating" title="3.2/5 rating">
                                    <li><i class="fa fa-star"></i>
                                    </li>
                                    <li><i class="fa fa-star"></i>
                                    </li>
                                    <li><i class="fa fa-star"></i>
                                    </li>
                                    <li><i class="fa fa-star-half-empty"></i>
                                    </li>
                                    <li><i class="fa fa-star-o"></i>
                                    </li>
                                </ul>
                                <h5 class="product-title">Lovely Ice Cream Spoons</h5>
                                <div class="product-desciption">Sociosqu id in semper ultrices pharetra luctus habitasse egestas libero curabitur montes sollicitudin</div>
                                <div class="product-trvBlock">
                                    <ul class="product-price-list">
                                        <li><span class="product-price">$131</span>
                                        </li>
                                        <li><span class="product-old-price">$218</span>
                                        </li>
                                        <li><span class="product-save">Save 60%</span>
                                        </li>
                                    </ul>
                                    <ul class="product-actions-list">
                                        <li><a class="btn btn-sm" href="#"><i class="fa fa-shopping-cart"></i> To Cart</a>
                                        </li>
                                        <li><a class="btn btn-sm"><i class="fa fa-bars"></i> Details</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div> <!-- product-block product-block-horizontal -->

                        <div class="product-block product-block-horizontal">
                            <header class="product-header">
                                <?php echo $this->Html->image('p6.jpg',['alt'=>'Image Alternative text','title'=>'My Ice Cream and Your Ice Cream Spoons']);?>
                            </header>
                            <div class="product-inner">
                                <ul class="icon-group icon-list-rating" title="3.2/5 rating">
                                    <li><i class="fa fa-star"></i>
                                    </li>
                                    <li><i class="fa fa-star"></i>
                                    </li>
                                    <li><i class="fa fa-star"></i>
                                    </li>
                                    <li><i class="fa fa-star-half-empty"></i>
                                    </li>
                                    <li><i class="fa fa-star-o"></i>
                                    </li>
                                </ul>
                                <h5 class="product-title">Lovely Ice Cream Spoons</h5>
                                <div class="product-desciption">Sociosqu id in semper ultrices pharetra luctus habitasse egestas libero curabitur montes sollicitudin</div>
                                <div class="product-trvBlock">
                                    <ul class="product-price-list">
                                        <li><span class="product-price">$131</span>
                                        </li>
                                        <li><span class="product-old-price">$218</span>
                                        </li>
                                        <li><span class="product-save">Save 60%</span>
                                        </li>
                                    </ul>
                                    <ul class="product-actions-list">
                                        <li><a class="btn btn-sm" href="#"><i class="fa fa-shopping-cart"></i> To Cart</a>
                                        </li>
                                        <li><a class="btn btn-sm"><i class="fa fa-bars"></i> Details</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div> <!-- product-block product-block-horizontal -->

                        <!-- PAGENATION START -->
                        <ul class="pagination">
                            <li class="prev disabled"><a href="#"></a></li>
                            <li class="active"><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">4</a></li>
                            <li><a href="#">5</a></li>
                            <li class="next"><a href="#"></a></li>
                        </ul>
                        <!-- PAGENATION END -->


                    </div> <!-- trv_propad prlist-view -->
                </div> <!-- col-md-8 -->
            </div> <!-- row -->
        </div> <!-- container -->
    </section>

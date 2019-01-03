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
                            <li class="shopping-cart"><a href="#"><i class="fa fa-shopping-cart"></i>My Cart</a>
                                <div class="shopping-cart-box">
                                    <ul class="shopping-cart-items">
                                        <li>
                                            <a href="#">
                                                <?php echo $this->Html->image('amaze_70x70.jpg',['alt'=>'Image Alternative text','title'=>'AMaze']);?>
                                                <h5>New Glass Collection</h5><span class="shopping-cart-item-price">$150</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="product-shop-sidebar.html">
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

    <section id="product-page">
        <div class="container">
            <div class="col-md-10 col-md-offset-1">
                <div class="row">
                    <div class="col-md-7">
                        <div class="fotorama" data-nav="thumbs" data-allowfullscreen="1" data-thumbheight="150" data-thumbwidth="150">
                            <?php echo $this->Html->image('s1.jpg',['alt'=>'Image Alternative text','title'=>'/']);?>
                            <?php echo $this->Html->image('s2.jpg',['alt'=>'Image Alternative text','title'=>'/']);?>
                            <?php echo $this->Html->image('s3.jpg',['alt'=>'Image Alternative text','title'=>'/']);?>
                            <?php echo $this->Html->image('s2.jpg',['alt'=>'Image Alternative text','title'=>'/']);?>
                        </div> <!-- fotorama -->
                    </div> <!-- col-md-7 -->
                    <div class="col-md-5">
                        <div class="trvpro-detail">
                            <ul class="icon-group icon-list-rating text-color" title="4.5/5 rating">
                                <li><i class="fa fa-star"></i>
                                </li>
                                <li><i class="fa fa-star"></i>
                                </li>
                                <li><i class="fa fa-star"></i>
                                </li>
                                <li><i class="fa fa-star"></i>
                                </li>
                                <li><i class="fa fa-star-half-empty"></i>
                                </li>
                            </ul>
                            <label>based on 8 reviews</label>
                            <h4>New Glass Collection</h4>
                            <h5>$150</h5>
                            <p>Nostra luctus vulputate cum litora accumsan est turpis enim iaculis nisi justo nec etiam fermentum cum molestie vehicula eu arcu praesent commodo sociis nunc duis vel sem senectus nunc egestas</p>
                            <ul class="pro-detail-list">
                                <li><i class="fa fa-check"></i>Id cubilia</li>
                                <li><i class="fa fa-check"></i>Euismod primis</li>
                                <li><i class="fa fa-check"></i>Amet porta</li>
                                <li><i class="fa fa-check"></i>Facilisis cum</li>
                                <li><i class="fa fa-check"></i>Morbi curae</li>
                            </ul>
                            <ul class="list-inline pro-btns">
                                <li><a href="#" class="btn btn-primary"><i class="fa fa-shopping-cart"></i> Add to cart</a>
                                </li>
                                <li><a href="#" class="btn prowhish"><i class="fa fa-star"></i> To Wishlist</a>
                                </li>
                            </ul>
                        </div> <!-- trvpro-detail -->
                    </div> <!-- col-md-5 -->
                </div> <!-- row -->
                <div class="row trvpro-tabs">
                    <div class="col-md-12">
                        <ul class="nav nav-tabs" id="prodetailTab">
                            <li class="active"><a href="#tab-1" data-toggle="tab"><i class="fa fa-pencil"></i>Desciption</a>
                            </li>
                            <li class=""><a href="#tab-2" data-toggle="tab"><i class="fa fa-info"></i>Additional Information</a>
                            </li>
                            <li class=""><a href="#tab-3" data-toggle="tab"><i class="fa fa-truck"></i>Shipping &amp; Payment</a>
                            </li>
                            <li class=""><a href="#tab-4" data-toggle="tab"><i class="fa fa-comments"></i>Reviews</a>
                            </li>
                        </ul>

                        <div class="tab-content">
                            <div class="tab-pane fade active in trv_protxt" id="tab-1">
                                <p>Nullam viverra odio dui ornare suspendisse nam est conubia quisque phasellus in tristique penatibus neque faucibus fringilla aliquam himenaeos elit enim sociosqu nunc ullamcorper a montes ligula molestie lacus conubia leo senectus tempus ante porta vulputate dis euismod sagittis risus pretium facilisis sociis in facilisis arcu interdum montes et aliquet</p>
                                <p>Nostra litora magna dolor amet taciti eu adipiscing sapien vestibulum mattis litora ligula magna massa vulputate conubia parturient consequat netus inceptos dapibus platea potenti habitasse eros at fringilla nisl parturient</p>
                                <p>Netus ultrices eleifend mus commodo leo sociosqu platea vehicula himenaeos mattis etiam vestibulum pharetra sodales aliquam mattis semper ut dictum justo rhoncus iaculis laoreet aliquet a erat accumsan dui luctus</p>
                            </div>
                            <div class="tab-pane fade" id="tab-2">
                                <table class="table table-striped trvpro-tab">
                                    <tbody>
                                    <tr>
                                        <td>Weight</td>
                                        <td>1.5kg</td>
                                    </tr>
                                    <tr>
                                        <td>Dimentions</td>
                                        <td>10 x 20 x 30 cm</td>
                                    </tr>
                                    <tr>
                                        <td>Composition</td>
                                        <td>100% Cotton</td>
                                    </tr>
                                    <tr>
                                        <td>Size &amp; Fit</td>
                                        <td>This style comes in a regular fit which fits true to size</td>
                                    </tr>
                                    <tr>
                                        <td>Other Info</td>
                                        <td>Machine wash according to instructions on care label</td>
                                    </tr>
                                    <tr>
                                        <td>Size</td>
                                        <td>Small, Medium, Large</td>
                                    </tr>
                                    <tr>
                                        <td>Color</td>
                                        <td>Brown</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="tab-pane fade trv_protxt" id="tab-3">
                                <p>Dictum odio etiam phasellus eget metus blandit nam ac in vivamus nisi nisi lobortis scelerisque quis nisl ligula torquent mattis consectetur netus commodo senectus primis natoque quisque cursus molestie odio</p>
                                <p>Primis massa conubia magnis gravida faucibus nisi hendrerit libero mus montes vitae imperdiet porta arcu mi ac praesent pulvinar quam orci augue pharetra taciti cum quam ligula netus suspendisse dolor</p>
                            </div>
                            <div class="tab-pane fade" id="tab-4">
                                <ul class="trvpro-comments">


                                    <li>
                                        <!-- REVIEW -->
                                        <article class="trv-comment">
                                            <div class="trvpro-comment-img">
                                                <?php echo $this->Html->image('rev1.jpg',['alt'=>'Image Alternative text','title'=>'Bubbles']);?>
                                            </div>
                                            <div class="trvpro-comment-detail">
                                                <ul class="icon-group icon-list-rating text-color" title="4.5/5 rating">
                                                    <li><i class="fa fa-star"></i>
                                                    </li>
                                                    <li><i class="fa fa-star"></i>
                                                    </li>
                                                    <li><i class="fa fa-star"></i>
                                                    </li>
                                                    <li><i class="fa fa-star"></i>
                                                    </li>
                                                    <li><i class="fa fa-star-o"></i>
                                                    </li>
                                                </ul>
                                                <span>Olivia Slater</span>
                                                <div class="trv_protxt rev_bod">
                                                    <p>Amet hac aliquam ante blandit in adipiscing metus primis sagittis vestibulum mauris at quis praesent accumsan platea adipiscing non</p>
                                                </div>
                                            </div>
                                        </article>
                                    </li>
                                    <li>
                                        <!-- REVIEW -->
                                        <article class="trv-comment">
                                            <div class="trvpro-comment-img">
                                                <?php echo $this->Html->image('rev2.jpg',['alt'=>'Image Alternative text','title'=>'Bubbles']);?>
                                            </div>
                                            <div class="trvpro-comment-detail">
                                                <ul class="icon-group icon-list-rating text-color" title="4.5/5 rating">
                                                    <li><i class="fa fa-star"></i>
                                                    </li>
                                                    <li><i class="fa fa-star"></i>
                                                    </li>
                                                    <li><i class="fa fa-star"></i>
                                                    </li>
                                                    <li><i class="fa fa-star"></i>
                                                    </li>
                                                    <li><i class="fa fa-star-o"></i>
                                                    </li>
                                                </ul>
                                                <span>Olivia Slater</span>
                                                <div class="trv_protxt rev_bod">
                                                    <p>Amet hac aliquam ante blandit in adipiscing metus primis sagittis vestibulum mauris at quis praesent accumsan platea adipiscing non</p>
                                                </div>
                                            </div>
                                        </article>
                                    </li>
                                    <li>
                                        <!-- REVIEW -->
                                        <article class="trv-comment">
                                            <div class="trvpro-comment-img">
                                                <?php echo $this->Html->image('rev3.jpg',['alt'=>'Image Alternative text','title'=>'Bubbles']);?>
                                            </div>
                                            <div class="trvpro-comment-detail">
                                                <ul class="icon-group icon-list-rating text-color" title="4.5/5 rating">
                                                    <li><i class="fa fa-star"></i>
                                                    </li>
                                                    <li><i class="fa fa-star"></i>
                                                    </li>
                                                    <li><i class="fa fa-star"></i>
                                                    </li>
                                                    <li><i class="fa fa-star"></i>
                                                    </li>
                                                    <li><i class="fa fa-star-o"></i>
                                                    </li>
                                                </ul>
                                                <span>Olivia Slater</span>
                                                <div class="trv_protxt rev_bod">
                                                    <p>Amet hac aliquam ante blandit in adipiscing metus primis sagittis vestibulum mauris at quis praesent accumsan platea adipiscing non</p>
                                                </div>
                                            </div>
                                        </article>
                                    </li>

                                </ul><a class="popup-text btn btn-primary bluebtn" href="#review-dialog" data-effect="mfp-zoom-out" data-toggle="modal" data-target="#trv-review-modal"><i class="fa fa-pencil"></i> Add a review</a>

                            </div>
                        </div>
                    </div> <!-- col-md-12 -->
                </div> <!-- row trvpro-tabs -->

                <div class="row trv-related">
                    <h3 class="col-md-12 rel-heading">Related Products</h3>
                    <div class="col-md-4">
                        <div class="product-block">
                            <header class="product-header">
                                <?php echo $this->Html->image('r1.jpg',['alt'=>'Image Alternative text','title'=>'The Hidden Power of the Heart']);?>
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
                                <h5 class="product-title">Diving with Sharks</h5>
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
                    </div> <!-- col-md-4 -->

                    <div class="col-md-4">
                        <div class="product-block">
                            <header class="product-header">
                                <?php echo $this->Html->image('r2.jpg',['alt'=>'Image Alternative text','title'=>'The Hidden Power of the Heart']);?>
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
                                <h5 class="product-title">Hot Summer Collection</h5>
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
                    </div> <!-- col-md-4 -->

                    <div class="col-md-4">
                        <div class="product-block">
                            <header class="product-header">
                                <?php echo $this->Html->image('r3.jpg',['alt'=>'Image Alternative text','title'=>'The Hidden Power of the Heart']);?>
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
                                <h5 class="product-title">Best Pasta</h5>
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
                    </div> <!-- col-md-4 -->
                </div> <!-- row trv-related -->
            </div> <!-- col-md-10 col-md-offset-1 -->
        </div> <!-- container -->
    </section> <!--  product page -->




    <div class="modal fade" id="trv-review-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <h1 class="modal-title">Add a review</h1>
                </div> <!-- modal-header -->
                <div class="modal-body">
                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" placeholder="e.g. John Doe" class="form-control">
                    </div> <!-- form-group -->
                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" placeholder="e.g. John Doe" class="form-control">
                    </div> <!-- form-group -->
                    <div class="form-group">
                        <label>Review</label>
                        <textarea class="form-control"></textarea>
                    </div> <!-- form-group -->
                    <div class="form-group">
                        <label>Rating</label>
                        <ul class="icon-group icon-list-rating text-color" title="4.5/5 rating">
                            <li class=""><i class="fa fa-star"></i>
                            </li>
                            <li class=""><i class="fa fa-star"></i>
                            </li>
                            <li class=""><i class="fa fa-star"></i>
                            </li>
                            <li class=""><i class="fa fa-star"></i>
                            </li>
                            <li class=""><i class="fa fa-star"></i>
                            </li>
                        </ul>
                    </div> <!-- form-group -->
                    <div class="form-group">
                        <input type="submit" class="btn btn-primary bluebtn" value="Submit">
                    </div> <!-- form-group -->
                </div> <!-- modal-body -->
            </div> <!-- modal-content -->
        </div> <!-- modal-dialog -->
    </div> <!-- MODAL FADE -->


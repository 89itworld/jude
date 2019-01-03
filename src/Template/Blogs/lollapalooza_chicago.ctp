<!-- HEADING PAGE -->
<section class="awe-parallax page-heading-demo">
    <div class="awe-overlay"></div>
    <div class="container">
        <div class="blog-heading-content text-uppercase">
            <h2>Judefly travel</h2>
        </div>
    </div>
</section>
<!-- END / HEADING PAGE -->


<section class="blog-page">
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <div class="blog-page__content blog-single">
                    <!-- POST -->
                    <div class="post">
                        <div class="post-meta">
                            <div class="date">February 26th, 2015</div>
                            <div class="author">by <a href="#">Nomadic Matt</a></div>
                            <div class="cat">
                                <ul>
                                    <li><a href="#">Travel Gear</a></li>
                                </ul>
                            </div>
                            <div class="comment"><a href="#">8 Comments &raquo;</a></div>
                        </div>
                        <div class="post-title">
                            <h1>Lollapalooza-2016 - Mar 18 - Mar 19, 2016, Grand Park Chicago </h1>
                        </div>
                        <div class="bottom-margin-20">
                            <?= $this->Html->image('blog-img/lollapalooza2.png') ?>
                        </div>
                        <div class="post-body">
                            <div class="post-content">
                                <div class="col-md-6">
                                    <?= $this->Html->image('blog-img/lollapalooza3.png') ?>
                                </div>
                                <div class="col-md-6">
                                    <?= $this->Html->image('blog-img/lollapalooza1.png') ?>
                                </div>
                            </div>
                        </div>
                        <div class="post-footer">
                            <div class="share-box">
                                <h4>Share</h4>
                                <div class="share">
                                    <a href="#">
                                        <i class="fa fa-twitter"></i>
                                        <span class="count">2</span>
                                    </a>
                                    <a href="#">
                                        <i class="fa fa-pinterest"></i>
                                        <span class="count">43</span>
                                    </a>
                                    <a href="#">
                                        <i class="fa fa-facebook"></i>
                                        <span class="count">124</span>
                                    </a>
                                    <a href="#">
                                        <i class="fa fa-google-plus"></i>
                                        <span class="count">1.8k</span>
                                    </a>
                                </div>
                            </div>
                            <div class="tag-box">
                                <h4>Tag</h4>
                                <div class="tag">
                                    <a href="#">Events</a>
                                    <a href="#">Festivals</a>
                                </div>
                            </div>
                            <div class="cat-box">
                                <h4>Category</h4>
                                <div class="cat">
                                    <a href="#">Events</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END / POST -->

                    <!-- ABOUT AUTHOR -->
                    <div class="about-author">
                        <div class="image-thumb fl">
                            <div class="image-cover">
                                <img src="http://placehold.it/350x350">
                            </div>
                        </div>
                        <div class="author-info">
                            <div class="author-title">
                                <h4>About author</h4>
                            </div>
                            <div class="author-name">
                                <h3>Name of author</h3>
                            </div>
                            <div class="author-content">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut laoreet nulla sed
                                    venenatis vulputate. Nulla venenatis mi sed fermentum laoreet.</p>
                            </div>
                            <div class="author-social">
                                <a href="#">
                                    <i class="fa fa-twitter"></i>
                                </a>
                                <a href="#">
                                    <i class="fa fa-pinterest"></i>
                                </a>
                                <a href="#">
                                    <i class="fa fa-facebook"></i>
                                </a>
                                <a href="#">
                                    <i class="fa fa-google-plus"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- END / ABOUT AUTHOR -->

                    <!-- RELATED POSTS -->
                    <div class="related-post">
                        <h4>Related posts</h4>
                        <div class="related-slider">
                            <div class="post">
                                <div class="post-media">
                                    <div class="image-wrap image-style">
                                        <a href="cochella-2016-april-15-24-2016-indio-california.html">
                                            <?= $this->Html->image('events/cochella-800x600.jpg') ?>
                                        </a>
                                    </div>
                                </div>
                                <div class="post-body">

                                    <div class="post-title">
                                        <h2>
                                            <?= $this->Html->link("Cochella-2016 - April 15-24, 2016. Indio California", ['controller' => 'blogs', 'action' => 'cochellaCalifornia']); ?>
                                        </h2>
                                    </div>
                                    <div class="post-content">
                                        <p>Music aficionados around the world know precisely where to be come April, and
                                            with […]</p>
                                    </div>
                                    <div class="post-link">
                                        <?= $this->Html->link("Read more", ['controller' => 'blogs', 'action' => 'cochellaCalifornia'], ['class' => 'awe-btn awe-btn-style2']); ?>
                                    </div>
                                </div>
                            </div>
                            <div class="post">
                                <div class="post-media">
                                    <div class="image-wrap">
                                        <a href="lollapalooza-2016-mar-18-mar-19-2016-grand-park-chicago.html"
                                           target="_blank">
                                            <?= $this->Html->image('events/lollapalooza-800x600.jpg') ?>
                                        </a>
                                    </div>
                                </div>
                                <div class="post-body">
                                    <div class="post-title">
                                        <h2>
                                            <?= $this->Html->link("Lollapalooza-2016 - Mar 18 - Mar 19, 2016, Grand Park
                                                                                            Chicago", ['controller' => 'blogs', 'action' => 'lollapaloozaChicago']); ?>
                                        </h2>
                                    </div>
                                    <div class="post-content">
                                        <p>Thousands of fans trek to Chicago's Grant Park each year for one of the
                                            hottest events of the summer […]</p>
                                    </div>
                                    <div class="post-link">
                                        <?= $this->Html->link("Read more", ['controller' => 'blogs', 'action' => 'lollapaloozaChicago'], ['class' => "awe-btn awe-btn-style2"]); ?>
                                    </div>
                                </div>
                            </div>
                            <div class="post">
                                <div class="post-media">
                                    <div class="image-wrap">
                                        <a href="afrikaburn-2016-april-25-may-1-tankwa-south-africa.html"
                                           target="_blank">
                                            <?= $this->Html->image('events/afrikaburn-800x600.jpg') ?>
                                        </a>
                                    </div>
                                </div>
                                <div class="post-body">
                                    <div class="post-title">
                                        <h2>
                                            <?= $this->Html->link("Afrikaburn-2016 - April 25- May 1, Tankwa South Africa", ['controller' => 'blogs', 'action' => 'afrikaburnSouthAfrica']); ?>
                                        </h2>
                                    </div>
                                    <div class="post-content">
                                        <p>AfrikaBurn is the spectacular result of the creative expression of
                                            participants who gather once […]</p>
                                    </div>
                                    <div class="post-link">
                                        <?= $this->Html->link("Read more", ['controller' => 'blogs', 'action' => 'afrikaburnSouthAfrica'], ['class' => 'awe-btn awe-btn-style2']); ?>
                                    </div>
                                </div>
                            </div>
                            <div class="post">
                                <div class="post-media">
                                    <div class="image-wrap image-style">
                                        <a href="palio-di-siena-2016.html" target="_blank">
                                            <?= $this->Html->image('events/palio-de-siena-800x600.jpg') ?>
                                        </a>
                                    </div>
                                </div>
                                <div class="post-body">
                                    <div class="post-title">
                                        <h2>
                                            <?= $this->Html->link("Palio de Siena 2016", ['controller' => 'blogs', 'action' => 'palioSiena']); ?>
                                        </h2>
                                    </div>
                                    <div class="post-content">
                                        <p>The Palio di Siena (known locally simply as Il Palio) is a horse race that is
                                            held twice each year […]</p>
                                    </div>
                                    <div class="post-link">
                                        <?= $this->Html->link("Palio de Siena-2016", ['controller' => 'blogs', 'action' => 'palioSiena'], ['class' => 'awe-btn awe-btn-style2']); ?>
                                    </div>
                                </div>
                            </div>
                            <div class="post">
                                <div class="post-media">
                                    <div class="image-wrap image-style">
                                        <a href="snowbombing-2016-apr-4-apr-9-2016-mayrhofen-austria.html">
                                            <?= $this->Html->image('events/snowbombing-800x600.jpg') ?>
                                        </a>
                                    </div>
                                </div>
                                <div class="post-body">
                                    <div class="post-title">
                                        <h2>
                                            <?= $this->Html->link("Snowbombing-2016 - Apr 4 - Apr 9, 2016, Mayrhofen, Austria", ['controller' => 'blogs', 'action' => 'snowbombingAustria']); ?>
                                        </h2>
                                    </div>
                                    <div class="post-content">
                                        <p>A festival filled with fresh air, blue skies, black runs and white-hot
                                            parties... A week-long whirlwind of world class DJs […]</p>
                                    </div>
                                    <div class="post-link">
                                        <?= $this->Html->link("Read more", ['controller' => 'blogs', 'action' => 'snowbombingAustria'],['class' => 'awe-btn awe-btn-style2']); ?>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <!-- END / RELATED POSTS -->

                    <!-- COMMENTS -->
                    <div id="comments">
                        <!-- LEAVER YOUR COMMENT -->
                        <div id="respond">
                            <div class="reply-title">
                                <h4>3 Comments</h4>
                            </div>
                            <form>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-item form-textarea-wrapper">
                                            <textarea>Comment here</textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-item form-name">
                                            <input type="text" value="Your name">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-item form-email">
                                            <input type="text" value="Your email">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-actions">
                                            <input type="submit" value="Post Comment">
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <!-- END / LEAVER YOUR COMMENT -->

                        <div class="commentlist-wrapper">
                            <ul class="commentlist">
                                <li class="comment">
                                    <div class="comment-box">
                                        <div class="comment-author">
                                            <a href="#"> <img src="http://placehold.it/1200x800">demo-thumb.jpg" alt=""></a>
                                        </div>
                                        <div class="comment-body">
                                            <cite class="fn"><a href="#">Gofar</a></cite>
                                            <p>Mauris tincidunt, quam at feugiat efficitur, justo nunc efficitur justo,
                                                a hendrerit lectus neque eu nibh. Praesent eu sem erat. Fusce non
                                                sagittis lorem.</p>
                                            <div class="comment-meta">
                                                <span>5 days ago</span>
                                            </div>
                                            <div class="comment-abs">
                                                <a href="#" class="comment-edit-link">Edit</a> //
                                                <a href="#" class="comment-reply-link">Reply</a>
                                            </div>
                                        </div>
                                    </div>
                                    <ul class="children">
                                        <li class="comment bypostauthor">
                                            <div class="comment-box">
                                                <div class="comment-author">
                                                    <a href="#"> <img src="http://placehold.it/1200x800">demo-thumb.jpg"
                                                        alt=""></a>
                                                </div>
                                                <div class="comment-body">
                                                    <cite class="fn">
                                                        <a href="#">Gofar</a>
                                                        <span class="byauthor">Author</span>
                                                    </cite>
                                                    <p>Aliquam volutpat elit non urna faucibus condimentum. Pellentesque
                                                        nibh libero, consequat at nibh a, tincidunt rutrum magna.
                                                        Curabitur in posuere risus, dictum euismod dolor. Vestibulum
                                                        auctor orci sed elit ultricies tempus. Praesent facilisis tellus
                                                        turpis, ac congue lorem consectetur ac.</p>
                                                    <div class="comment-meta">
                                                        <span>5 days ago</span>
                                                    </div>
                                                    <div class="comment-abs">
                                                        <a href="#" class="comment-edit-link">Edit</a> //
                                                        <a href="#" class="comment-reply-link">Reply</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </li>

                                <li class="comment">
                                    <div class="comment-box">
                                        <div class="comment-author">
                                            <a href="#"> <img src="http://placehold.it/1200x800">demo-thumb.jpg" alt=""></a>
                                        </div>
                                        <div class="comment-body">
                                            <cite class="fn"><a href="#">Gofar</a></cite>
                                            <p>Pellentesque nibh libero, consequat at nibh a, tincidunt rutrum magna.
                                                Curabitur in posuere risus, dictum euismod dolor. Vestibulum auctor orci
                                                sed elit ultricies tempus. Praesent facilisis tellus turpis, ac congue
                                                lorem consectetur ac.</p>
                                            <div class="comment-meta">
                                                <span>5 days ago</span>
                                            </div>
                                            <div class="comment-abs">
                                                <a href="#" class="comment-edit-link">Edit</a> //
                                                <a href="#" class="comment-reply-link">Reply</a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- END / COMMENTS -->
                </div>
            </div>
            <div class="col-md-3">
                <div class="page-sidebar">
                    <!-- WIDGET -->
                    <div class="widget widget_search">
                        <h3>Search in Blog</h3>
                        <form>
                            <input value="Search and hit enter" type="search">
                        </form>
                    </div>
                    <!-- END / WIDGET -->

                    <!-- WIDGET -->
                    <div class="widget widget_follow_us">
                        <h3>Follow us</h3>
                        <div class="awe-social">
                            <a href="https://twitter.com/JudeFlyTRVL" target="_blank"> <i
                                    class="fa twitter fa-twitter"></i> </a>
                            <a href="https://www.instagram.com/judefly/" target="_blank"> <i
                                    style="background-color: rgb(63, 114, 155);" class="fa instagram fa-instagram "></i>
                            </a>
                            <a href="https://www.facebook.com/JudeflyTravel/?skip_nax_wizard=true" target="_blank"> <i
                                    class="fa facebook fa-facebook "></i> </a>

                        </div>
                    </div>
                    <!-- END / WIDGET -->

                    <!-- WIDGET -->
                    <div class="widget widget_categories">
                        <h3>Categories</h3>
                        <ul>
                            <li><a href="#">Events</a></li>
                        </ul>
                    </div>
                    <!-- END / WIDGET -->

                    <!-- WIDGET -->
                    <div class="widget widget_has_thumbnail">
                        <h3>Recent Posts</h3>
                        <ul>
                            <li>
                                <div class="image-wrap image-cover">
                                    <a href="#">
                                        <?= $this->Html->image('events/cochella-800x600.jpg') ?>
                                    </a>
                                </div>
                                <div class="content">
                                    <a href="cochella-2016-april-15-24-2016-indio-california.html">Cochella-2016 - April
                                        15-24, 2016. Indio California </a>
                                </div>
                            </li>
                            <li>
                                <div class="image-wrap image-cover">
                                    <a href="#">
                                        <?= $this->Html->image('festival-pics/20150418_214340-0800_Andrew-Jorgensen_DSC_2550.NEF-.jpg') ?>
                                    </a>
                                </div>
                                <div class="content">
                                    <a href="afrikaburn-2016-april-25-may-1-tankwa-south-africa.html">Afrikaburn-2016 -
                                        April 25- May 1, Tankwa South Africa</a>
                                </div>
                            </li>
                            <li>
                                <div class="image-wrap image-cover">
                                    <a href="#">
                                        <?= $this->Html->image('events/palio-de-siena-800x600.jpg') ?>
                                    </a>
                                </div>
                                <div class="content">
                                    <a href="palio-di-siena-2016.html">Palio di Siena 2016</a>
                                </div>
                            </li>
                            <li>
                                <div class="image-wrap image-cover">
                                    <a href="#">
                                        <?= $this->Html->image('events/snowbombing-800x600.jpg') ?>
                                    </a>
                                </div>
                                <div class="content">
                                    <a href="snowbombing-2016-apr-4-apr-9-2016-mayrhofen-austria.html">Snowbombing-2016
                                        - Apr 4 - Apr 9, 2016, Mayrhofen, Austria</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <!-- END / WIDGET -->

                    <!-- WIDGET -->
                    <div class="widget widget_tag_cloud">
                        <h3>Tags</h3>
                        <div class="tagcloud">
                            <a href="#">Events</a>
                            <a href="#">Festivals</a>
                        </div>
                    </div>
                    <!-- END / WIDGET -->

                </div>
            </div>
        </div>
    </div>
</section>

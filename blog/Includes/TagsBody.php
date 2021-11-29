<?php 

if(isset($_GET['Tag'])){
    $TagID = $_GET['Tag'];    
} else {
    header("Location: index.php");
}

?>

<div class="container">
    <div class="row">
        <div class="themesflat-spacer clearfix" data-desktop="22" data-mobile="10" data-smobile="10"></div>
        <div class="themesflat-spacer clearfix" data-desktop="22" data-mobile="10" data-smobile="10"></div>
        <div class="news-one__title">
                                    <h3>Tag: <?php TagByID($TagID); ?></h3>
                                </div>
                        <div class="themesflat-spacer clearfix" data-desktop="80" data-mobile="70" data-smobile="70"></div>
                    </div>
<div class="row">
<div class="col-xl-8 col-lg-7">
<section class="news-page">
            <div class="container">
                
                
                <div class="row">
                    <?php DisplayPostsIndex(); ?>
                 
            </div>
</section>
</div>

<!-- Grid -->
            <div class="col-lg-4 col-md-12">
                    <div id="sidebar">
                        <div id="inner-sidebar" class="inner-content-wrap">
                            <div class="widget widget_search">
                                <form action="#" method="get" role="search" class="search-form style-1">
                                    <input type="search" class="search-field" placeholder="Search here" value="" name="s" title="Search for">
                                    <button class="search-submit" type="submit" title="Search">Search</button>
                                </form>
                            </div>
                            <div class="themesflat-spacer clearfix" data-desktop="10" data-mobile="0" data-smobile="0"></div>
                            <div class="widget widget_popular wow fadeInUp">
                                <div class="bd-top"></div>
                                <h4 class="text-color-title-sidebar light-height-57">Tags</h4>
                                <ul class="category-wrap">
                                    <?php Tags(); ?>
                                </ul>
                            </div>
                            <div class="themesflat-spacer clearfix" data-desktop="40" data-mobile="30" data-smobile="30"></div>
                            <div class="widget widget_lastest wow fadeInUp">
                                <div class="bd-top"></div>
                                <h4 class="text-color-title-sidebar">Popular Posts</h4>
                                <ul class="lastest-posts data-effect clearfix">
                                    <?php PopularPosts(); ?>
                                </ul>
                            </div>
                            <div class="themesflat-spacer clearfix" data-desktop="40" data-mobile="30" data-smobile="30"></div>
                            <div class="themesflat-spacer clearfix" data-desktop="0" data-mobile="200" data-smobile="120"></div>
                        </div>
                    </div>
                </div>
    </div>
    </div>
<br>

<!-- END w3-content -->
</div>
<?php 
if(isset($_GET['PostID'])){
    $PostID = $_GET['PostID'];    
} else {
    header("Location: index.php");
}

    //Update Post Stats
    $Query = "SELECT * FROM post_visits WHERE Post_ID = '$PostID'";
    $Result = $Connection->query($Query);
    if($Result->num_rows > 0){
        $Query = "UPDATE post_visits SET Post_Visits=Post_Visits+1 WHERE Post_ID='$PostID'";
        $Result = $Connection->query($Query);
    } else {
        $Query = "INSERT INTO post_visits(Post_ID, Post_Visits) VALUES($PostID, 1)";
        $Result = $Connection->query($Query);
    }
?>

<!-- Grid -->
<main id="main">
    <div id="main-content" class="main-content">
        <div class="container">
            <div class="row">
                <div class="themesflat-spacer clearfix" data-desktop="80" data-mobile="70" data-smobile="70"></div>
            </div>
            <div class="row">
                <div class="col-lg-8 col-md-12 col-sm-12">
                    <?php DisplayPost($PostID); ?>
                </div>
                            
            
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
                </div>
</main>
<br>

<!-- END w3-content -->
</div>

<script>
//Feedback Notification
$(document).ready(function() {
    
    setTimeout(function() {
     $('.alert').addClass("bounceOutUp");
    }, 3000)
    
    setTimeout(function() {
     $('.alert').remove();
    }, 4000)
    
});   
</script>
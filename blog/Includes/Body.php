<section class="news-page">
            <div class="container">
                <div class="row">
                        <div class="themesflat-spacer clearfix" data-desktop="80" data-mobile="70" data-smobile="70"></div>
                </div>
                <div class="row">
                    <?php DisplayPostsIndex(); ?>
                 
            </div>
        </section>


<br>
<div class="w3-center" style="text-align: center; margin-bottom: 20px;">
    <div class="w3-bar w3-border w3-round">
      <b><a href="index.php" class="w3-bar-item w3-button">First</a></b>
      <b><a href="<?php if($PageNo <= 1){echo "#"; } else { echo "?Page=".($PageNo - 1);} ?>" class="<?php if($PageNo <= 1){echo "w3-disabled"; } ?> w3-bar-item w3-button">&laquo;</a></b>
      <b><a href="<?php if($PageNo >= $TotalPages){ echo "#"; } else { echo "?Page=".($PageNo + 1); } ?>" class="<?php if($PageNo >= $TotalPages){ echo "w3-disabled"; } ?> w3-button">&raquo;</a></b>
      <b><a href="?Page=<?php echo $TotalPages; ?>" class="w3-button">Last</a></b>
    </div>
</div>
<!-- END w3-content -->
</div>
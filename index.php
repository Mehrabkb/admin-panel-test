<?php 
require('header.php');

?>
<?php if (islogin()) { ?>

        <div class="container mt-4">
            <div class="row">
                <div class="col-sm-4">
                    <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                    <?php if (isAdmin()) {?>
                           <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">shaba code</a>
                    <?php } ?>
                        <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">ajax</a>
                    </div>
                </div>
                <div class="col-sm-8">
                    <div class="tab-content" id="v-pills-tabContent">
                    <?php if (isAdmin()) {?>
                        <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">...</div>
                        <?php } ?>
                        <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">...</div>
                    </div>
                </div>
            </div>
        </div>
                    <?php }else{?>

        <p>for show option for you please login</p>
                    <?php  } ?>
<?php 
    require('footer.php');

?>

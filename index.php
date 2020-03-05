<?php
require('includes/dbconnect.inc.php');
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
                        <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                        <form action="includes/getshabacode.inc.php" method="post">
                            <div class="form-group">
                                <label for="shabacode">shabacode</label>
                                <input type="text" class="form-control" id="shabacode" name="shabacode" placeholder="shabacode">
                            </div>
                            <button type="submit" class="btn btn-primary" name="shaba-submit">get info</button>
                        </form>
                        <table class="table">
                            <thead>
                                <tr>
                                <th scope="col">#</th>
                                <th scope="col">name</th>
                                <th scope="col">account comment</th>
                                <th scope="col">account number</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                <th scope="row">1</th>
                                <td><?php echo $_GET['Data']['AccountOwners'][0] ?></td>
                                <td><?php echo $_GET['Data']['AccountComment']?></td>
                                <td><?php echo $_GET['Data']['AccountNumber']?></td>
                                </tr>
                            </tbody>
                        </table>
                        </div>
                        <?php } ?>
                        <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                                 <table class="table">
                            <thead>
                                <tr>
                                <th scope="col">id</th>
                                <th scope="col">name</th>
                                </tr>
                            </thead>
                            <tbody id="test">

                             </tbody>
                        </table>

                        </div>
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

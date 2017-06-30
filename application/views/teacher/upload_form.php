<div class="content-wrapper">
    <section class="content-header">
        <h1>
            Add Resources
        </h1>
    </section>
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">New Resources</h3>
                    </div><!-- /.box-header -->

                    <div class="box-body">
                        <div class="row ">
                            <form id="editForm" class="form-horizontal style-form" method="post" action="/Resources/upload_file" enctype="multipart/form-data">
                                <?php if (isset($error)){ ?>
                                    <div class="alert alert-warning alert-dismissible fade in col-sm-3 col-md-3" role="alert">
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                                        <?php echo $error; ?>
                                    </div>
                                <?php }?>
                                <?php if(isset($upload_data)){?>
                                <div class="alert alert-success alert-dismissible fade in col-sm-3 col-md-3" role="alert">
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                                    <ul>
                                        <?php foreach ($upload_data as $item => $value){ ?>
                                            <li><?php echo ($item.':'.$value);?></li>
                                        <?php } ?>
                                    </ul>
                                </div>
                                <?php } ?>
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="topic">Resource File Name: <span class="required"></span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" id="name" placeholder="File Name" name="name" class="form-control col-md-7 col-xs-12">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="topic">Resources: <span class="required"></span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="file" size="20" id="resources" placeholder="Resources" name="resources" class="form-control col-md-7 col-xs-12">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                                        <button type="submit" class="btn btn-success" value="upload">Add Resources!</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div><!-- /.box-body -->
                </div><!-- /.box -->
            </div>
          </div>
    </section>
</div>
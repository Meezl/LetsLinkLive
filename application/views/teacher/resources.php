<div class="content-wrapper">
    <section class="content-header">
        <h2>
            View Resources
        </h2>
    </section>
    <section class="content">
       <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Resources</h3>
                </div><!-- /.box-header -->

                <div class="box-body table-responsive no-padding">
                    <div class="row">
                        <table class="table table-hover">
                            <tr>
                                <th>Name</th>
                                <th>Delete</th>
                                <th>Download</th>
                            </tr>
                             <?php foreach ($resources->result() as $resource){?>
                              <tr>
                                  <td><?php echo $resource->name;?></td>
                                  <td><a href="<?php echo site_url('resources/delete/'.$resource->id); ?>"><button class="btn btn-danger">Delete</button></a></td>
                                  <td><a href="<?php echo site_url('/assets/resources/'.$resource->name); ?>" download ="<?php echo $resource->name;?>"><button class="btn btn-success">Download</button></a></td>
                              </tr>
                            <?php } ?>
                        </table>
                    </div>
              </div>
            </div>
        </div>
      </div>
    </section>
</div>



<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            My Profile
        </h1>
    </section>
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Profile</h3>
                        <div class="box-tools">
                            <div class="input-group" style="width: 150px;">
                            </div>
                        </div>

                    </div><!-- /.box-header -->
                    <div class="box-body">
                        <div class="row" style="line-height:200%">


                        </div>
                    </div><!-- /.box-body -->
                </div><!-- /.box -->
            </div>
        </div>
    </section>
</div>
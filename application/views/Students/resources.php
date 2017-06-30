<div class="content-wrapper">
    <section class="content-header">
        <h1>
            View Resources
        </h1>
    </section>
    <section class="content">
        <div class="row">
            <table class="table table-responsive table-bordered table-hover">
                <thead>
                <th>Name</th>
                <th>Download</th>
                </thead>
                <tbody>
                <?php foreach ($resources->result() as $resource){?>
                    <tr>
                        <td><?=$resource->name;?></td>
                        <td><a href="<?php echo site_url('/assets/resources/'.$resource->name); ?>" download ="<?php echo $resource->name;?>"><button class="btn btn-success">Download</button></a></td>
                    </tr>
                <?php } ?>
                </tbody>
            </table>
        </div>
    </section>
</div>
<script src="<?php echo base_url(); ?>assets/dist/js/pages/dashboard2.js"></script>
<!-- Main content -->
        <section class="content">
          <!-- Info boxes -->
          <div class="row">
           
            <div class="col-md-3 col-sm-6 col-xs-12 col-md-offset-2">
              <div class="info-box">
                <span class="info-box-icon bg-red"><i class="fa fa-line-chart"></i></span>
                <div class="info-box-content">
                  <span class="info-box-text">Routes</span>
                  <span class="info-box-number"><?php echo 0; ?></span>
                </div><!-- /.info-box-content -->
              </div><!-- /.info-box -->
            </div><!-- /.col -->

            <!-- fix for small devices only -->
            <div class="clearfix visible-sm-block"></div>

            <div class="col-md-3 col-sm-6 col-xs-12">
              <div class="info-box">
                <span class="info-box-icon bg-green"><i class="ion ion-ios-cart-outline"></i></span>
                <div class="info-box-content">
                  <span class="info-box-text">Transactions</span>
                  <span class="info-box-number"><?php echo 0; ?></span>
                </div><!-- /.info-box-content -->
              </div><!-- /.info-box -->
            </div><!-- /.col -->
            <div class="col-md-3 col-sm-6 col-xs-12">
              <div class="info-box">
                <span class="info-box-icon bg-yellow"><i class="ion ion-ios-people-outline"></i></span>
                <div class="info-box-content">
                  <span class="info-box-text">Card Holders</span>
                  <span class="info-box-number"><?php echo 0; ?></span>
                </div><!-- /.info-box-content -->
              </div><!-- /.info-box -->
            </div><!-- /.col -->
          </div><!-- /.row -->

          <div class="row">
            <div class="col-md-12">
              <div class="box">
                <div class="box-header with-border col-md-5 col-md-offset-2">
                  <h3 class="box-title">Metrics Recap Report</h3>
                  <div class="box-tools pull-right">
                    <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                    <div class="btn-group">
                      <button class="btn btn-box-tool dropdown-toggle" data-toggle="dropdown"><i class="fa fa-wrench"></i></button>
                      <ul class="dropdown-menu" role="menu">
                        <li><a href="<?php echo base_url(); ?>Purchases">Purchases</a></li>
                        <li><a href="<?php echo base_url(); ?>Purchases/points">Point Redemptions</a></li>
                        <li><a href="<?php echo base_url(); ?>Card_holders">Active Card Holders</a></li>
                        <li><a href="<?php echo base_url(); ?>Card_holders/inactive">Inactive Card Holders</a></li>
                        <li class="divider"></li>
                        <li><a href="<?php echo base_url(); ?>Routes">Routes</a></li>
                      </ul>
                    </div>
                    <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                  </div>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <div class="row">
                                      
                    <div class="col-md-5 col-md-offset-2">
                      <p class="text-center">
                        <strong>Goal Completion</strong>
                      </p>
                      <div class="progress-group">
                        <span class="progress-text">Service PurchaseTransactions</span>
                        <span class="progress-number"><b><?php echo 0; ?></b>/<?php echo 0; ?></span>
                        <div class="progress sm">
                          <div class="progress-bar progress-bar-aqua" style="width: <?php echo 0; ?>%"></div>
                        </div>
                      </div><!-- /.progress-group -->
                      <div class="progress-group">
                        <span class="progress-text">Point Redemption Transactions</span>
                        <span class="progress-number"><b><?php echo 0; ?></b>/<?php echo 1; ?></span>
                        <div class="progress sm">
                          <div class="progress-bar progress-bar-red" style="width: <?php echo 0; ?>%"></div>
                        </div>
                      </div><!-- /.progress-group -->
                      <div class="progress-group">
                        <span class="progress-text">Active Card Holders</span>
                        <span class="progress-number"><b><?php echo 0; ?></b>/<?php echo 1; ?></span>
                        <div class="progress sm">
                          <div class="progress-bar progress-bar-green" style="width: <?php echo (0)*100; ?>%"></div>
                        </div>
                      </div><!-- /.progress-group -->
                      <div class="progress-group">
                        <span class="progress-text">Inactive Card Holders</span>
                        <span class="progress-number"><b><?php echo 0; ?></b>/<?php echo 1; ?></span>
                        <div class="progress sm">
                          <div class="progress-bar progress-bar-yellow" style="width: <?php echo (0)*100; ?>%"></div>
                        </div>
                      </div><!-- /.progress-group -->
                    </div><!-- /.col -->
                  </div><!-- /.row -->
                </div><!-- ./box-body -->
                <div class="box-footer">
                  <div class="row">
                    <div class="col-sm-3 col-xs-6 col-sm-offset-2">
                      <div class="description-block border-right">
                        <span class="description-percentage text-green"><i class="fa fa-caret-up"></i></span>
                        <h5 class="description-header">Ksh.<?php echo 0 ?></h5>
                        <span class="description-text">TOTAL PURCHASES</span>
                      </div><!-- /.description-block -->
                    </div><!-- /.col -->
                    <div class="col-sm-3 col-xs-6">
                      <div class="description-block border-right">
                        <span class="description-percentage text-green"><i class="fa fa-caret-up"></i></span>
                        <h5 class="description-header"><?php echo number_format(0); ?> Points</h5>
                        <span class="description-text">TOTAL POINT REDEMPTIONS</span>
                      </div><!-- /.description-block -->
                    </div><!-- /.col -->
                    <div class="col-sm-3 col-xs-6">
                      <div class="description-block border-right">
                        <span class="description-percentage text-green"><i class="fa fa-caret-up"></i></span>
                        <h5 class="description-header">Ksh.<?php echo number_format((0), 2, '.',','); ?></h5>
                        <span class="description-text">TOTAL PROFIT</span>
                      </div><!-- /.description-block -->
                    </div><!-- /.col -->
                    
                  </div><!-- /.row -->
                </div><!-- /.box-footer -->
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->











































        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
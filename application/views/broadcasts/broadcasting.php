
<div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
           Waiting Broadcast
            
          </h1>
          
        </section>



<section class="content">
<div class="row">
            <div class="col-xs-12 col-md-12">
              <div class="box">
                
                <div class="box-header">
                  <h3 class="box-title">Broadcasts</h3>
                  <div class="box-tools">
                    <div class="input-group" style="width: 200px;">
                      
                        
                        
                      
                     
                    </div>
                  </div>
                </div><!-- /.box-header -->

                <table class="table table-hover">

                <?php  
                
                    /*foreach ($broadcasts->result() as $broadcast)
                    {*/
                ?>
                    
                    <tr>
                        <td>
                             <div class="box-body">
                    
                    <div class="row" style="line-height:200%" >
                        <div class=" col-md-2 col-sm-2">
                            Topic:
                        </div>
                        <div class=" col-md-2 col-sm-2">
                            <?php echo $message; ?>
                        </div>
                        <br>
                        
                        <div class=" col-md-2 col-sm-2">
                            Teacher Name:
                        </div>
                        <div class=" col-md-2 col-sm-2">
                            <?php echo $rand; ?>
                        </div>
                        
                        
                        <div class=" col-md-2 col-sm-2">
                            Teacher E-Mail:
                        </div>
                        <div class=" col-md-2 col-sm-2">
                            <?php //echo $broadcast->teacheremail; ?>
                        </div><br>
                       
                        
                        <div class=" col-md-2 col-sm-2">
                            Start:
                        </div>
                        <div class=" col-md-2 col-sm-2">
                            <?php //echo $broadcast->startDatetime; ?>
                        </div>
                        
                       
                        <div class=" col-md-2 col-sm-2">
                            Stop:
                        </div>
                        <div class=" col-md-2 col-sm-2">
                            <?php //echo $broadcast->stopDatetime; ?>
                        </div><br>
                        
                        <div class=" col-md-2 col-sm-2">
                            Broadcast Description:
                        </div><br>
                        <div class=" col-md-8 col-sm-8">
                            <?php //echo $broadcast->description; ?>
                        </div>

                       
                    </div>                      
                </div><!-- /.box-body -->
                        </td>
                    </tr>

                    <?php //} ?>
                </table>
                
               


              </div><!-- /.box -->
            </div>
          </div>
        </section>

        </div>
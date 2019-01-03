<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <?= $this->element('Admin/breadcrumbs');?>

    <!-- Main content -->
    <section class="content">
        <!-- Default box -->
        <div class="box">
            <div class="box-header with-border">
                <h3 class="box-title">Bookings Listing</h3>
            </div>
            <div class="box-body">
                <?php
                if(!empty($bookings)) {
                    ?>
                    <table class="table table-bordered table-striped table-hover">
                        <tr>
                            <th>Restaurant Name</th>
                            <th><?php echo $this->Paginator->sort('date','Booking Date')?></th>
                            <th style="width: 12%;">Booking Time</th>
                            <th style="width: 8%;">Estimated Attendance</th>
                            <th>Hotel Address</th>
                            <th>Fndraising Return</th>
                            <th><?php echo $this->Paginator->sort('created','Booking Created')?></th>
                            <th>Status</th>
                            <th>Actions</th>
                        </tr>
                        <?php
                        foreach ($bookings as $booking) {
//                            pr($booking); die;
                            ?>
                            <tr>
                                <td><?php echo $booking->address->restaurant->title; ?></td>
                                <td><?php echo $booking->date->format('M-d-Y'); ?></td>
                                <td><?php echo $booking->min_time->format('H:i A').' - '.$booking->max_time->format('H:i A'); ?></td>
                                <td><?php echo $booking->attendance; ?></td>
                                <td><?php echo $booking->address->street.", ".$booking->address->city.", ".$booking->address->state->name; ?></td>
                                <td><?php echo $booking->fundraising_return; ?></td>
                                <td><?php echo $booking->created->format('M-d-Y'); ?></td>
                                <td><?php echo $this->Html->link(($booking->status==1)?'<i class="fa fa-check text-green" data-toggle="tooltip" title="Click to Deactivate"></i>':'<i class="fa fa-ban text-red" data-toggle="tooltip" title="Click to Activate"></i>' ,['controller'=>'Bookings','action'=>'StatusUpdate',$booking->id,($booking->status==1)?2:1],['escape'=>false]);?></td>
                                <td>
                                    <?php echo $this->Form->postLink('<i class="fa fa-close"></i>',['controller'=>'Bookings','action'=>'delete',$booking->id],['escape'=>false,'confirm'=>'Are you sure you want to delete?']);?>
                                </td>
                            </tr>
                            <?php
                        }
                        ?>
                    </table>
                    <?php
                }
                ?>


            </div><!-- /.box-body -->
            <!--<div class="box-footer">
                Footer
            </div>--><!-- /.box-footer-->
        </div><!-- /.box -->

    </section><!-- /.content -->
</div><!-- /.content-wrapper -->
<?php $this->load->view('template/header'); ?>

<section class="content">
    <div class="container-fluid">
        <div class="row">
            <!-- left column -->
            <div class="col-md-12">
                <!-- general form elements -->
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Php Quiz Start</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form method="post" action="<?php echo base_url();?>index.php/Dashboard/resultdisplay">
                        <div class="card-body">

                            <?php foreach($rows as $row) { ?>
                            <?php $ans_array = array($row->choice1, $row->choice2, $row->choice3, $row->answer);
                    shuffle($ans_array); ?>

                            <h4 class="questions">
                                <?php echo $row->qid ?>.
                                <?php echo $row->question ?>
                            </h4>
                            <div class="row">
                                <div class="col-md-3">
                                    <input type="radio" name="qid<?php echo $row->qid;?>"
                                        value="<?php echo $ans_array[0]; ?>" required>
                                    <?php echo $ans_array[0]; ?>
                                </div>
                                <div class="col-md-3">
                                    <input type="radio" name="qid<?php echo $row->qid;?>"
                                        value="<?php echo $ans_array[1]; ?>">
                                    <?php echo $ans_array[1]; ?>
                                </div>
                                <div class="col-md-3">
                                    <input type="radio" name="qid<?php echo $row->qid;?>"
                                        value="<?php echo $ans_array[2]; ?>">
                                    <?php echo $ans_array[2]; ?>
                                </div>
                                <div class="col-md-3">
                                    <input type="radio" name="qid<?php echo $row->qid;?>"
                                        value="<?php echo $ans_array[3]; ?>">
                                    <?php echo $ans_array[3]; ?>
                                </div>
                            </div>
                            <hr>


                            <?php } ?>
                        </div>
                        <!-- /.card-body -->

                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary float-right">Submit Answer</button>
                        </div>
                    </form>
                </div>
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
</section>


<?php $this->load->view('template/footer'); ?>
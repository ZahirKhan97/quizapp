<?php $this->load->view('template/header');?>
<br>

<?php $score = 0; ?>
<?php $array1= array(); ?>
<?php $array2= array(); ?>
<?php $array3= array(); ?>
<?php $array4= array(); ?>
<?php $array5= array(); ?>
<?php $array6= array(); ?>
<?php $array7= array(); ?>
<?php $array8= array(); ?>


<?php foreach($checks as $checkans) { 
    array_push($array1, $checkans); 
} ?>

<?php foreach($result as $res) { 
    array_push($array2, $res->answer); 
    array_push($array3, $res->qid); 
    array_push($array4, $res->question); 
    array_push($array5, $res->choice1); 
    array_push($array6, $res->choice2); 
    array_push($array7, $res->choice3); 
} ?>

<?php for($i=0; $i < 5; $i++) { ?>
    
        <p><?php echo $array3[$i]; ?>. <?php echo $array4[$i]; ?></p>
   <?php if($array2[$i] != $array1[$i]) { ?>

    <p><span style="background-color: rgb(252, 58, 58);"><?php echo $array1[$i]; ?></span></p>
    

<?php } else { ?>

    <?php $score = $score + 1; ?>
    <p><span style="background-color: rgb(36, 230, 100);"> <?php echo $array1[$i]; ?></span></p>

<?php }  }?>


<!-- Large modal -->
<div class="container">
    <div class="row">
        <a class="btn btn-primary" data-toggle="modal" href="#ignismyModal">Show Result</a>
        <div class="modal fade" id="ignismyModal" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label=""><span>×</span></button>
                    </div>

                    <div class="modal-body">

                        <div class="thank-you-pop">
                            <img src="http://goactionstations.co.uk/wp-content/uploads/2017/03/Green-Round-Tick.png"
                                alt="">
                            <h1>Thank You!</h1>
                            <p></p>
                            <h3 class="cupon-pop">Your Total Score is : <span>
                                    <?php echo $score; ?>/5
                                </span></h3>

                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

<?php $this->load->view('template/footer');?>
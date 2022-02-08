<?php
if ($_POST) {
    $a=$_POST['Num1'];
    $b=$_POST['Num2'];
    $c=$_POST['Num3'];
 // if request is post
    $color = "success";
    if($a>=$b && $a>=$c ){
        $message=$a;
    }
    elseif($b>=$a && $b>=$c){
        $message=$b;
    }
    else{
        $message=$c; 
    }
    if($a<=$b && $a<=$c ){
        $message1=$a;
    }
    elseif($b<=$a && $b<=$c){
        $message1=$b;
    }
    else{
        $message1=$c; 
    }
    }
?>
<!doctype html>
<html lang="en">
<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    <div class="contianer">
        <div class="row mt-5">
            <div class="col-12">
                <h1 class="text-center text-danger">
                    Max And min
                </h1>
            </div>
            <div class="col-4 offset-4">
                <form method="post">
                    <div class="form-group">
                        <input type="number" name="Num1" id="id" class="form-control" placeholder="Please Enter Your Frist Number" aria-describedby="helpId">
                    </div>
                    <div class="form-group">
                        <input type="number" name="Num2" id="id" class="form-control" placeholder="Please Enter Your Second Number" aria-describedby="helpId">
                    </div>
                    <div class="form-group">
                        <input type="number" name="Num3" id="id" class="form-control" placeholder="Please Enter Third Number" aria-describedby="helpId">
                    </div>
                    <div class="form-group">
                        <button class="btn btn-dark rounded"> Submit </button>
                    </div>
                </form>
                <?php 
                if(isset($message)){
                    echo "<div class='alert alert-$color'> The Max Number:$message </div>";
                }
                if(isset($message1)){
                    echo "<div class='alert alert-$color'> The Min Number:$message1 </div>";
                }
                ?>
            </div>
        </div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
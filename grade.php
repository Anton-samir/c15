<?php
if ($_POST) {
    $a=$_POST['Num1'];
    $b=$_POST['Num2'];
    $c=$_POST['Num3'];
    $d=$_POST['Num4'];
    $e=$_POST['Num5'];
    $per= ($a + $b + $c + $d + $e)/0.5;
    $per1=($per / 500.0) * 100;
    $message1=$per1;
 // if request is post
    $color = "success";
    if($per >= 90)
    {
        $message="Grade A";
    }
    else if($per >= 80)
    {
        $message="Grade B";
    }
    else if($per >= 70)
    {
        $message="Grade C";
    }
    else if($per >= 60)
    {
        $message="Grade D";
    }
    else if($per >= 40)
    {
        $message="Grade E";
    }
    else
    {
        $message="Grade F";
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
                    Grade
                </h1>
            </div>
            <div class="col-4 offset-4">
                <form method="post">
                    <div class="form-group">
                        <input type="number" name="Num1" id="id" class="form-control" placeholder="Please Enter Your Frist Subject" aria-describedby="helpId">
                    </div>
                    <div class="form-group">
                        <input type="number" name="Num2" id="id" class="form-control" placeholder="Please Enter Your Second Subject" aria-describedby="helpId">
                    </div>
                    <div class="form-group">
                        <input type="number" name="Num3" id="id" class="form-control" placeholder="Please Enter Your Third Subject" aria-describedby="helpId">
                    </div>
                    <div class="form-group">
                        <input type="number" name="Num4" id="id" class="form-control" placeholder="Please Enter Your Fourth Subject" aria-describedby="helpId">
                    </div>
                    <div class="form-group">
                        <input type="number" name="Num5" id="id" class="form-control" placeholder="Please Enter Your Fifth Subject" aria-describedby="helpId">
                    </div>
                    <div class="form-group">
                        <button class="btn btn-dark rounded"> Submit </button>
                    </div>
                </form>
                <?php 
                if(isset($message1)){
                echo "<div class='alert alert-$color'> and Grade Is:$message1 </div>";
                }
                if(isset($message)){
                    echo "<div class='alert alert-$color'> and Grade Is:$message </div>";
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
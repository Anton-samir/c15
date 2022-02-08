<?php
if ($_POST) {
    $a=$_POST['Num1'];
    $b=$_POST['Num2'];
    $c=$_POST['operator'];
 // if request is post
    $color = "success";
    if (is_numeric($a) && is_numeric($b)) {
        switch ($c) {
            case "Add":
                $message = $a + $b;
                break;
            case "Subtract":
                $message = $a - $b;
                break;
            case "Multiply":
                $message = $a * $b;
                break;
            case "Divide":
                $message = $a / $b;
        }
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
                    Calc
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
                    <input type="submit" name="operator" value="Add" />
                    <input type="submit" name="operator" value="Subtract" />
                    <input type="submit" name="operator" value="Multiply" />
                    <input type="submit" name="operator" value="Divide" />
                    </div>
                </form>
                <?php 
                if(isset($message)){
                    echo "<div class='alert alert-$color'> The Max Number:$message </div>";
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

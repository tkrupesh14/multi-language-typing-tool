<?php
require './inc/db.php';
?>

<!doctype html>
<html lang="en">
  <head>
    <title>TechTyping</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <style>
        .tt{    
            animation: bg 1s infinite forwards;
        }
        .btn{
    font-size: 1.5rem;
    cursor: pointer;
    animation: border 1s infinite forwards;
    transition: all 0.5s ease;
    padding: 15px 15px;
}
.btn:hover{
    animation: bg 1s infinite forwards;
    border-radius: 50px;
    width: 120px;
}
@keyframes border{
    0%{
    border: 2px solid #40e0d0;
        border-radius: 50px;
    }
    20%{
        border: 2px solid #4169e1;
        border-radius: 50px;
    }
    40%{
        border: 2px solid #000080;
        border-radius: 50px;
    }
    60%{
        border: 2px solid #0047ab;
        border-radius: 50px;
    }
    80%{
        border: 2px solid #4063ff;
        border-radius: 50px;
    }
    100%{
        
        border: 2px solid #40e0d0;
        border-radius: 50px;
    }
}
@keyframes bg{
    0%{
        background: #40e0d0;
    }
    20%{
        background: #4169e1;
    }
    40%{
        background: #000080;
    }
    60%{
        background: #0047ab;
    }
    80%{
        background:  #4063ff;
    }
    100%{
        
        background: #40e0d0;
    }
}
    </style>
  </head>
  <body>
      <!-- navbar -->
      <?php include './inc/header.php';?>
<!-- cards -->
<div class="container">
<div class="card mt-4 ">
  <h5 class="card-header tt  text-light">Typing Tools</h5>
  <div class="card-body d-flex  justify-content-around col-12 row">
<?php
$sel1 = "SELECT * FROM typingtools";
$run1 = mysqli_query($con, $sel1);

while($tool = mysqli_fetch_assoc($run1)){
    ?>
<a href="./typingtool.php?lang=<?= $tool ['lang_value'] ?>" class="btn col-3 m-2"><?= $tool ['lang_name'] ?>  Typing</a>

    <?php
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
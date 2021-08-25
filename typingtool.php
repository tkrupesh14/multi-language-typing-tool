<?php
require './inc/db.php';
$id = $_GET['lang'];
$sel1 = "SELECT * FROM typingtools WHERE id=$id";
$run1 = mysqli_query($con, $sel1);
$lang = mysqli_fetch_assoc($run1);
?>


<!doctype html>
<html lang="en">
  <head>
    <title><?= $lang ['lang_name'] ?> Typing Tool - TechTyping</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <script src="./jsapi.js"></script>
      <script>
        google.load("elements", "1", {
            packages:"tranliteration"
        });
        function onLoad(){
            var options = {
                sourceLanguage: google.elements.transliteration.LanguageCode.ENGLISH,
                destinationLanguage:[google.elements.transliteration.LanguageCode.<?=$lang ['google_value'] ?>],
                shortcutKey: 'ctrl+e',
                transliterationEnabled:true
            };

            var control = new google.elements.transliteration.TransliterationControl(options);
            control.makeTransliteratable(['typingtool']);

        }
      google.setOnLoadCallback(onLoad);
    </script>
    <style>

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
  
  <h5 class="card-header bg-primary  text-light"><?=$lang ['lang_name']?> Typing Tool</h5>
  <div class="card-body d-flex  justify-content-around col-12 row">
  <div class="input-group">
  <textarea class="form-control" rows="10" id="typingtool" aria-label="With textarea"></textarea>
</div>
<p>Start typing here and it will automatic convert in <?= $lang ['lang_name'] ?> Press <kbd>CTRL</kbd> + <kbd>E</kbd> for toggle between English and <?= $lang ['lang_name'] ?></p>
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
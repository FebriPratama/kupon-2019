<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Anton&display=swap" rel="stylesheet">
    <title>Hello, world!</title>
    <style type="text/css">
      .kupon{
        font-family: 'Anton', sans-serif;
        position: absolute;
        font-size: 35px;
      }
      .stamp{
        position: absolute;
        z-index: 200;
        width: 160px;
        height: 90px;
        bottom: 20px;
        right: 60px;
      }
      .a{
        bottom: 30px;
        right: 50px;
      }
      .b{
        right: 150px;
        bottom: 30px;
      }
    </style>
  </head>
  <body>

    <div class="container">
      <div class="row">
        <?php for($i = 1; $i <= 2000; $i++){ ?>
        <div class="col-sm-6 mb-2 border pl-0 pr-0">
          <label class="kupon a"><b><?php echo $i; ?></b></label>
          <label class="kupon b"><b><?php echo $i; ?></b></label>
          <img src="kupon_41862821.png" class="img-fluid">
          <img src="stamp.png" class="stamp img-fluid">
        </div>
        <?php } ?>
      </div>      
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
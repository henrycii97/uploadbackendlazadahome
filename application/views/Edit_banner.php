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
      <div class="container">
        <div class="row">
          <div class="col-12">
        <form action="<?= base_url() ?>slidebanner/update" method="post" enctype="multipart/form-data">
          <?php foreach ($edit as $key => $value): ?>
            
         
       <div class="form-group">
      <label for="">hình ảnh banner</label>
      <img src="<?= $value['images'] ?>" alt="">
       <input type="text" name="id" id="id" value="<?= $value['id'] ?> " class="form-control" placeholder="" aria-describedby="helpId">
      <input type="text" name="images2" value="<?= $value['images'] ?> " id="" class="form-control" placeholder="" aria-describedby="helpId">
      <input type="file" name="images" id="images" class="form-control" placeholder="" aria-describedby="helpId">
      <small id="helpId" class="text-muted">Help text</small>
      </div>

      <div class="form-group">
      <label for="">backgroundcolor</label>
      <input type="text" name="backgroundcolor" id="backgroundcolor" value="<?= $value['backgroundcolor'] ?> " class="form-control" placeholder="" aria-describedby="helpId">
      <small id="helpId" class="text-muted">Help text</small>
      </div> 

      <div class="form-group">
      <label for=""></label>
      <input type="submit" value="Lưu" class="form-control btn btn-danger" placeholder="" aria-describedby="helpId">
      <small id="helpId" class="text-muted">Help text</small>
      </div>
       <?php endforeach ?>
    </form>
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
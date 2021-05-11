<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" type="text/css" href="../css/contactUs.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <title>İletişim</title>
</head>
<body>
<div class="container">
  <div class="row justify-content-center pt-5 mt-5 pb-5">
    <div class="col-md-7">
      <h1 class="display-4">İletişim</h1>
      <hr class="bg-success">
      <p class="text-danger small pt-0 mt-0">* Hepsi alanlar gerekli</p>
      
      <form method="post" action="./postContactUs.php">
        <div class="row form-group">
            <label for="name" class="col-form-label col-md-4">Name</label>
            <div class="col-md-8">
              <input type="text" name="name" id="name" class="form-control" required>
            </div>
          </div>
       <div class="row form-group">
          <label for="email" class="col-form-label col-md-4">Mail</label>
          <div class="col-md-8">
            <input type="email" name="email" id="email" class="form-control" required>
          </div>
        </div>
        <div class="row form-group">
          <label for="options" class="col-form-label col-md-4">Konu:</label>
          <div class="col-md-8">
            <select class="form-select form-control" required>
              <option selected>Size nasıl yardım edebilirim?</option>
              <option value="products">Kişisel Geliştirme</option>
              <option value="events">Gezme Plan</option>
              <option value="press">Press</option>
            </select>
          </div>
        </div>
        <div class="row form-group">
          <label for="message" class="col-form-label col-md-4">Mesaj</label>
          <div class="col-md-8">
            <textarea name="message" id="message" class="form-control" rows="3" required></textarea>
          </div>
        </div>
        <div class="row form-group form-check">
          <label class="col-form-label form-check-label col-md-8">
             <input class="form-check-input" type="checkbox" name="remember" required> Hizmet Koşullarını kabul ediyorum
          </label>
        </div>
        <div class="d-flex justify-content-center pt-3 mt-3">
          <button type="submit" class="btn btn-info btn-block btn-send">Gönder</button>
        </div>
      </form>
    </div>
  </div>
</div>
</body>
</html>
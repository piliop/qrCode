<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Qr barcodes</title>
</head>
<body>
 
  
</body>
</html>

<!doctype html>
    <html lang="en">

      <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">

        <title>!</title>
      </head>

      <body>
        <div class="container">
          <div class="row mt-4">
              <div class="col-12 text-center">
                  <h2>Qr Barcode Print</h2>
              </div>
          </div>
          <div class="row h-100 ">
            <div class="col-12 d-flex align-content-center align-items-center justify-content-center h-100">
   
            
                <form action="generate.php" method="post" enctype="multipart/form-data" class="w-100">

                <div class="row mt-5">
                  <div class="col-12 col-md-10">
                    <div class="form-group">
                      <input type="text" class="form-control" id="url" name="url" tab-index="0" autofocus autocomplete="off">
                    </div>                
                  </div>
                  <div class="col-12 col-md-2">
                      <input type="submit" class="btn btn-success" value="Δημιουργία" name="formurl" id="formurl" tab-index="1">
                      <input type="hidden" name="qr" value="qr">
                    </div>
                </div>                      

                   
           
                  
                 
                </form>
              
            </div>
          </div>
        </div>


        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
      </body>

    </html>

    
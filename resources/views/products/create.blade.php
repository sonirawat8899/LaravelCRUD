<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel CRUD</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

</head> 
<body>
    <nav class="navbar navbar-expand-sm bg-dark ">

<ul class="navbar-nav">
  <li class="nav-item">
    <a class="nav-link text-light"  href="/">Products</a>
  </li>
  
</ul>
</nav>
    <div class="container">
     <div class="row justify-content-center">
        <div class="col-sm-8">
            <div class="card mt-3 p-3">
            <form action="/product/store" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label>Name</label>
                    <input type="text" name="name" class="form-control">

                </div>
                <div class="form-group">
                    <label>Description</label>
                    <textarea name="description" class="form-control" rows="4"></textarea>

                </div>
                <div class="form-group">
                    <label>Image</label>
                    <input type="file" name="image" class="form-control" name="image">

                </div>
                <button type="submit" class="btn btn-dark">Submit</button>
                
</div>


            </form>

        </div>
      
     </div>
       

        </div>
    </div>
</body>
</html>
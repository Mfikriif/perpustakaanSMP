<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Perpustakaan Login</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

</head>

<style>
  .main {
    height: 100vh;
    box-sizing: border-box;
  }

  .login-box{
    width: 500px;
    border: solid 1px;
    padding: 30px;
    
  }

  .container {
    width: 150px;
    height: 150px;
    display: flex; /* Gunakan flexbox untuk memposisikan */
    justify-content: center; /* Pusatkan secara horizontal */
    align-items: center; /* Pusatkan secara vertikal */
    
}

  form div {
    margin-bottom: 15px;
  }




</style>
<body>
  <div class='main d-flex flex-column justify-content-center align-items-center'>
        @if (session('status'))
            <div class="alert alert-danger">
                {{ session('message')}}
            </div>
        @endif
        <div class= 'login-box'>
          <form action="" method="post">
              @csrf
              <div class="container"> 
              <img src="assets/img/logosmp.png" alt="">
              </div>
              <div>
                <label for="username" class="form-label">Username</label>
                <input type="text" name="username" id="username" class="form-control" required>
              </div>
              <div>
                <label for="password" class="form-label">Password</label>
                <input type="password" name="password" id="password" class="form-control" required>
              </div>
              <div>
                <button type="submit" class="btn btn-primary form-control">Login</button>
              </div>
              <div>
                <a href="/register">Sign Up</a>
              </div>
          </form>
        </div>
            
        
  </div>





  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>
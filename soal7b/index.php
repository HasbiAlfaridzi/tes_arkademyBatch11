<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" >
    <link rel="stylesheet" type="text/css" href="src/sweetalert.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" >

    <title>Arkademi Batch 11 - Soal 7b</title>
    
  </head>
  <body>
  <nav class="navbar navbar-light bg-light shadow p-3 mb-5 bg-white rounded">
  <a class="navbar-brand" href="#">
    <img src="bootstrap/img/arkademy.png" width="250" height="120"  class="d-inline-block align-top ml-5 " alt="">
    <span style="font-size:40px;margin-left:100px">ARKADEMY BOOTCAMP</span>
  </a>
  </nav>

  <div class="container">
  <button type="button" class="btn btn-primary btn-warning" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">ADD</button>
    
    <table class="table table-bordered mx-auto ">
      <thead >
        <tr class="table-secondary " >  
          <th scope="col">Name</th>
          <th scope="col">Hobby</th>
          <th scope="col">Category</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Soni</td>
          <td>Mobile Legend</td>
          <td>Game</td>
          <td>
            
            <button type="button" class="btn btn-primary btn-warning" data-toggle="modal" data-target="#exampleModal2" >Edit</button>
          <button type="button" class="btn btn-primary btn-warning" onclick="sweet()" >Hapus</button></td>
        </tr>
        <tr>
          <td>Isgi</td>
          <td>Futsal</td>
          <td>Olahraga</td>
          <td><button type="button" class="btn btn-primary btn-warning" data-toggle="modal" data-target="#exampleModal2" >Edit</button>
          <button type="button" class="btn btn-primary btn-warning" onclick="hapus()" >Hapus</button></td></td>
        </tr>
        <tr>
          <td>Iqbal</td>
          <td>PUBG</td>
          <td>Game</td>
          <td><button type="button" class="btn btn-primary btn-warning" data-toggle="modal" data-target="#exampleModal2" >Edit</button>
          <button type="button" class="btn btn-primary btn-warning" onclick="hapus()" >Hapus</button></td></td>
        </tr>
        <tr>
          <td>Kiky</td>
          <td>PUBG</td>
          <td>Game</td>
          <td><button type="button" class="btn btn-primary btn-warning" data-toggle="modal" data-target="#exampleModal2" >Edit</button>
          <button type="button" class="btn btn-primary btn-warning" onclick="hapus()" >Hapus</button></td></td>
        </tr>
      </tbody>
    </table>

    <!--Modal-->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">ADD DATA</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span> 
            </button>
          </div>
          <div class="modal-body">
            <form>
              <div class="form-group">
                <input type="text" class="form-control" id="nama" name="nama" placeholder="Name ..">
              </div>
              <div class="form-group">
                  <select class="form-control" id="hobi" name="hobi" >
                    <option>Hobby ...</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                  </select>
              </div>
              <div class="form-group">
                  <select class="form-control" id="kategori" name="kategori" >
                    <option>Category ...</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                  </select>
              </div>
              
            </form>
          </div>
          <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <button type="button" class="btn btn-warning">ADD</button>
          </div>
    </div>
  </div>
</div>

<!--Modal-->
<div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">EDIT DATA</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span> 
            </button>
          </div>
          <div class="modal-body">
            <form>
              <div class="form-group">
                <input type="text" class="form-control" id="nama" name="nama" placeholder="Isgi">
              </div>
              <div class="form-group">
              <input type="text" class="form-control" id="hobi" name="hobi" placeholder="Futsal">
              </div>
              <div class="form-group">
              <input type="text" class="form-control" id="category" name="category" placeholder="Olahraga">
              </div>
              
            </form>
          </div>
          <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <button type="button" class="btn btn-warning">EDIT</button>
          </div>
    </div>
  </div>
</div>

    <!-- Optional JavaScript -->
    <script>

function sweet(){
swal("Good job!", "You clicked the button!", "success");
}
</script>
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
   
    <script src="bootstrap/js/jquery-3.3.1.slim.min.js" ></script>
    <script src="bootstrap/js/popper.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="src/sweetalert.js"></script>
  </body>
</html>
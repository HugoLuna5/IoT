<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" ∫>



    <title>Internet of Things</title>
</head>
<body>

<header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
                <a class="navbar-brand" href="#"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
              
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                      <a class="nav-link" href="#">Inicio <span class="sr-only">(current)</span></a>
                    </li>
                    
                  </ul>
                 
                </div>
              </nav>

</header>

<div class="container" style="margin-top: 45px;">
    <div class="row">

        <div class="col-md-4">

                <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                        <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">Datos</a>
                        <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">Acerca</a>
                        
                      </div>


        </div>

        <div class="col-md-8">

              
                <div class="tab-content" id="v-pills-tabContent">
                        <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">

                                <table class="table">
                                        <thead class="thead-dark">
                                          <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Temperatura (ºC)</th>
                                            <th scope="col">Humedad(%)</th>
                                            <th scope="col">Registro</th>
                                          </tr>
                                        </thead>
                                        <tbody>

                                            <?php include './getData.php'; ?>

                                         
                                          
                                        </tbody>
                                      </table>
                                      
                                    


                        </div>
                        <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">

                                <div class="card">
                                        <div class="card-header">
                                                <h5 class="card-title">Curso de internet de las cosas</h5>
                                              </div>
                                        

                                        <div class="card-body">
                                          <h5>Alumno: Hugo Dario Luna Cruz</h5>
                                          <h5>Carrera: ISC</h5>
                                          <h5>Fecha: 25 Sep 2019</h5>
                                        </div>
                                      </div>

                        </div>
                       
                      </div>
        </div>

    </div>


</div>



    
</body>

<script src="https://code.jquery.com/jquery-3.3.1.js" ></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" ></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" ></script>




</html>
<!DOCTYPE html>
<html lang="en">
<head>
    
    <meta charset="UTF-8">
    
    <meta name="_token" content="{{ csrf_token() }}" id="token">


    <title>Document</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <script src="{{asset('jquery.min.js')}}}"></script>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <script src="{{asset('js/app.js')}}"></script>
    <style>
        li{
            width: 100%;
            margin: 5px;
        }
        li:hover{
            background-color: hsla(0, 0%, 58%, 0.2);
        }
        li.active{
            background-color: hsla(0, 0%, 58%, 0.2);hahahaha
        }
        @media (max-width: 992px) { 

           .pesonalizar{
            width: 100% !important;
           } 
        }

    </style>
    
</head>
<body class="card-header p-0" style="border-bottom">
    
    <div class="container-fluid p-0 my-0 shadow-sm">
        <div class="bg-white">
            <div class="row m-0">
                <div class="col-12 m-auto">
                    <nav class="navbar navbar-expand-lg navbar-light bg-white">
                        
                        <button class="navbar-toggler ml-5" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                          <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="  text-right order-lg-1 text-right">
                            <span class="badge text-bg-secondary bg-danger rounded-circle my-3" style="font-size:130%;"   id="totalCompra">
                            </span>
                            
                            <button class="fad fa-cart-plus fa-2x my-auto " style=" color:black;text-decoration:none;border:none;background:transparent;"  id="enviando" disabled>
                                <span  style="content: ''" ></span>    
                            </button>
                            
                    
                    
                        </div>
                        <div class="collapse navbar-collapse order-lg-0" id="navbarNav">
                          <ul class="navbar-nav w-100 d-flex justify-content-around pesonalizar">
                            <li class="nav-item {{request()->routeIs('carrito')?'active':''}}">
                                <a class="nav-link text-dark text-lg-center" href="#">Home </a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link text-dark dropdown-toggle text-lg-center " href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" >
                                Mujer
                                </a>
                                
                                    <div class="dropdown-menu pesonalizar" aria-labelledby="navbarDropdown" style="width: 99vw;border:none;left:-1em;">
                                    <a class="dropdown-item text-right text-sm-right text-md-right  text-lg-left"  href="#">Action</a>
                                    <a class="dropdown-item" href="#">Another action</a>
                                    
                                    </div>
                                
                            </li>
                            <li class="nav-item">
                              <a class="nav-link text-dark text-lg-center " href="#">Hombre</a>
                            </li>
                            <li class="nav-item text-dark">
                              <a class="nav-link  text-lg-center " href="#">Niña</a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link text-dark text-lg-center" href="#">Niño</a>
                            </li>
                          </ul>
                        </div>
                      </nav>
                      
                    
                
            
                     
                      






                    
                </div>
                
        </div>
    </div>
    <div class="container">
        
        <div class="row"  id="contenedorTienda">
            
        </div>

    </div>
    




    <template id="templateCarrito">
        <div class="col-12 order-0" id="cesta">
            <div class="card" id="contenilgino">
                
                <table class="table table-border " style="margin-bottom: 0px">
                    <thead class="bg-white">
                        <th>Nombre de Producto</th>
                        <th>Cantidad</th>
                        <th>Precio</th>
                        <th>Accion</th>
                    </thead>
                    <tbody id="contenidoProductos" class="table table-striped">

                    </tbody>
                    <tbody class="bg-white" style="background-color: white !important">
                        <tr>
                            <th>Total</th>
                            <td id="cantidad">0</td>
                            <td id="totalPrecio" colspan="2">------</td>
                        </tr>
                    </tbody>
                
                </table>
            </div>
        </div>
    </div>
    </template>

    <template id="template">
        
            <div class="col-4 mt-3 order-1">
                <div class="card">
                    <img src="..." class="card-img-top" alt="...">
                    <div class="card-body">
                
                        <h5>title</h5>
                        <p>precio</p>
                        <div class="text-center">
                            <button class="btn btn-primary comprar" >Comprar!</button>
                        </div>
                        
                    </div>
                </div>
            </div>    

        </div>
    </template>


    
<script src="{{asset('js/carrito.js')}}"></script>
    
</body>
</html>
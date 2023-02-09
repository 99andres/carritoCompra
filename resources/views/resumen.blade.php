@include("encabezado.index")
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <script src="{{asset('jquery.min.js')}}}"></script>
    <script src="{{asset('js/app.js')}}"></script>
</head>
<body class="card-header " style="border-bottom:none">
    

    
    <div class="container">

        <div class="row"  >
            <div class="col-6">
                <div class="card bg-white" style="height:50vh !important;" >
                    <h4><strong>Nombre:</strong> {{auth()->check()?auth()->user()->name:'Invitado'}}</h4>
                    <h4><strong>Correo:</strong> {{auth()->check()?auth()->user()->email:'Invitado'}}</h4>
                    <h4><strong>Direccion:</strong> Calle 55 sur 66-23</h4>
                    <h4><strong>Total:</strong> 6590000</h4>
                </div>
            </div>
            <div  class="d-flex align-items-center flex-column col-6">
                <div id='contenidoResumen' class="order-0 w-100"></div>
                <div class="text-center mt-3 order-1">
        
                    <a class="btn btn-primary " href="comprar">Comprar</a>
                </div>
                
            </div>
        </div>
    </div>
    


    <template id='contenido'>
        <div class="card my-2"  style="width:inherit;">
            <img src="..." class="card-img-top"  alt="... " height="100" style="width:inherit;object-fit: cover;">
            <div class="card-body">
        
                <h5 class="text-center">title</h5>
                <p class="text-center">precio</p>
                <p class="text-center">cantidad</p>
                
            </div>
        </div>
    </template>
    
    <script>
        let template=document.querySelector("#contenido").content
        let data=localStorage.getItem('carritoLocalSto')
        let fragmen=document.createDocumentFragment()
         let contenidoResumen=document.querySelector("#contenidoResumen")
        data=JSON.parse(data)
        console.log(data)    
        Object.values(data).forEach(element => {
            template.querySelector("img").src=element.url
            template.querySelector("h5").textContent=element.nombre
            template.querySelectorAll("p")[0].textContent=element.precio
            template.querySelectorAll("p")[1].textContent="Cantidad "+element.cantidad
            let clone=template.cloneNode(true)
            fragmen.appendChild(clone)

        })  ;
        contenidoResumen.appendChild(fragmen)


        
    </script>
    
</body>
</html>
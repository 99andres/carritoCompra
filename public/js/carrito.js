let template=document.querySelector("#template").content
let templateCarrito=document.querySelector("#templateCarrito").content
let fragment=document.createDocumentFragment()
let contenedorTienda=document.querySelector("#contenedorTienda")
let contenilgino=document.querySelector("#contenilgino")
let cesta=document.querySelector("#cesta");
let contenidoProductos=document.querySelector("#contenidoProductos");
let cantidad=document.querySelector("#cantidad")
let totalPrecio=document.querySelector("#totalPrecio")
let totalProductoElemento=document.querySelector("#totalCompra")
let enviando=document.querySelector("#enviando")
let valorInput=document.createElement("input")
let formulario=document.createElement("form")


let carrito={}


document.addEventListener("DOMContentLoaded",(e)=>{
    totalProductoElemento.textContent=localStorage['cantidadTotal']
    carrito=localStorage['carritoLocalSto']?JSON.parse(localStorage['carritoLocalSto']):{}
    fetchData()
    e.stopPropagation()
    
})
contenedorTienda.addEventListener('click',veri)
function veri(e){
    if(e.target.classList.contains('comprar')){
        e.stopPropagation()
        enviando.removeAttribute('disabled')
        addCarro(e.target.parentElement.parentElement.parentElement)
    }
        
    
}
enviando.addEventListener('click',function(){
    
    let input=document.createElement("input")
    input.type="hidden"
    input.name="_token"
    input.value=document.querySelector("meta[name='_token']").getAttribute('content')  
    //input.value=localStorage.getItem("cantidadTotal")
    formulario.name="valorNuevo";
    formulario.method="post"
    formulario.action="resumen"

    valorInput.name="valorOculto"
    valorInput.type="hidden"
    valorInput.value=localStorage.getItem('cantidadTotal')

    formulario.appendChild(input)
    formulario.appendChild(valorInput)
    document.body.appendChild(formulario)
    formulario.submit()
    

    
    

    
})

let fetchData=async()=>{
let data=await fetch("js/app.json")

let informacionData=await data.json()
    pintarProductos(informacionData)
}

pintarProductos=(objeto)=>{
    objeto.forEach(element => {
        template.querySelector("img").setAttribute('src',element.url)
        template.querySelector("h5").textContent=element.nombre
        template.querySelector("p").textContent=element.precio
        template.querySelector('button').dataset.id=element.id
        
        let clone=template.cloneNode(true)    
        fragment.appendChild(clone)

    });
    contenedorTienda.appendChild(fragment)
}


addCarro=(e)=>{
    console.log(e)
    
    let producto={
        "id":e.querySelector('button').dataset.id,
        "nombre":e.querySelector('h5').textContent,
        "precio":e.querySelector('p').textContent,
        "url":e.querySelector('img').src,
        "cantidad":1,

    }
    if(carrito.hasOwnProperty(e.querySelector('button').dataset.id)){
        producto.cantidad=carrito[e.querySelector("button").dataset.id].cantidad
        producto.cantidad++

    }
    
    carrito[e.querySelector("button").dataset.id]={...producto}
    var totalProducto=0
    totalProducto=Object.values(carrito).reduce((acc,{cantidad})=>acc+cantidad,0)
    var totalPro=0
    
    if(localStorage.getItem('cantidadTotal')){
        localStorage.cantidadTotal++    
        totalProductoElemento.textContent=localStorage.getItem('cantidadTotal')
        }
    else{
        localStorage.setItem('cantidadTotal',totalProducto)
        totalProductoElemento.textContent=localStorage.getItem('cantidadTotal')
    }
    localStorage.setItem('carritoLocalSto',JSON.stringify(carrito))
    
    
    

}



@php
if(request()->input('valorOculto') || auth()->check()){
        
    session(['cantidad'=>request()->input('valorOculto')!=""?request()->input('valorOculto'):session()->get('cantidad')]);
    
    auth()->check()?session(["url"=>""]):"";
    echo session()->get('url');
    
    
    //echo request()->input('valorOculto');
    
}else{
    header("Location:carrito");

}
@endphp
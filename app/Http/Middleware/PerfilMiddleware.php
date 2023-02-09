<?php

namespace App\Http\Middleware;


use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Closure;

class PerfilMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        
        Log::debug(session()->get('cantidad'));


        
        
        // $valor= '<script>document.write("valor")</script>';
        // Log::info($valor);
        // echo "aa";
        
        $informcion=user::with('perfil')->find(auth()->user()->id);

        
        if( $informcion->perfil->nombre=='administrador'){ 
            return redirect('administrador');
            
        }
        else if($informcion->perfil->nombre=='root'){
            if(session()->get('url')=='resumen'){
                //$_POST['valorOculto']=session()->get('cantidad');
                //return redirect('resumen');
                //$request->input('valorOculto',session()->get('cantidad'));
                return redirect('resumen');
            }
            
        }
        return $next($request);
        
        
        
        
    }
}

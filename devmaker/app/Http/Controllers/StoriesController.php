<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Stories;
use Auth;
use App\Http\Requests\StorieRequest;
class StoriesController extends Controller
{
  public function home(){
      return view('home');
  }
  public function novo()
  {

        if (view()->exists('stories.formulario')) {
            return view('stories.formulario');
        }
  }

  public function adiciona(StorieRequest $request)
  {
      $params=$request->all();
      $storie=new Stories($params);
      $storie->save();

      return redirect()
->action('HomeController@index');
  }

  public function logout(){
    Auth::logout();
    return redirect('/'); //redireciona o usuario para a pagina inicial
  }

}

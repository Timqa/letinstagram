<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;

class LoginController extends Controller
{
  public function login(): View
  {
    return view('login');
  }

  public function someMethod(): View
  {
    $someArray = [
      'title' => 'Приветствуем вас на курсе по Laravel!',
      'laravel' => 'Ссылка на документацию',
      'path' => 'laravel.com'
    ];

    return view('sometemplate', compact('someArray'));
  }
}

<?php

namespace App\Controllers;

use App\Models\Contact;

class HomeController extends Controller
{
   public function index()
   {
      $contactModel = new Contact();

      return $contactModel->delete(12);

      return $this->view('home', [
         'title' => 'Home Page',
         'description' => 'Página de inicio'
      ]);
   }   
}
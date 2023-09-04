<?php

namespace App\Controllers;

use App\Models\Contact;

class HomeController extends Controller
{
   public function index()
   {
      $contactModel = new Contact();

      $data = $contactModel->all();

      return $this->view('home', $data);
   }   
}
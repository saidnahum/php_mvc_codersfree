<?php

namespace App\Controllers;

use App\Models\Contact;

class ContactController extends Controller
{
   public function index()
   {
      $model = new Contact();
      $contacts = $model->all();

      return $this->view('contacts.index', compact('contacts'));
   }

   public function create()
   {
      return $this->view('contacts.create');
   }

   public function store()
   {
      $data = $_POST;

      $model = new Contact();
      
      $model->create($data);

      $uri = $_SERVER['REQUEST_URI'];

      $this->redirect($uri);
   }

   public function show($id){
      $model = new Contact();
      $contact = $model->find($id);

      return $this->view('contacts.show', compact('contact'));
   }

   public function edit($id){
      $model = new Contact();
      $contact = $model->find($id);

      return $this->view('contacts.edit', compact('contact'));
   }

   public function update($id)
   {
      $data = $_POST;
      $model = new Contact();
      $model->update($id, $data);

      $uri = $_SERVER['REQUEST_URI'];

      $this->redirect($uri);
   }

   public function destroy($id)
   {
      $model = new Contact();
      $model->delete($id);

      $uri = $_SERVER['REQUEST_URI'];

      $this->redirect('../');
   }
}
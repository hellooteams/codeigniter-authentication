<?php 
namespace App\Controllers;
  
class ProfileController extends BaseController
{
    public function index()
    {
        $session = session();
        echo "Hello : ".$session->get('name');
    }
}
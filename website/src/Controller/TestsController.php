<?php
declare(strict_types=1);
namespace App\Controller;
const URL = 'https://maturitnicetba-2924e-default-rtdb.firebaseio.com';
const TOKEN = 'FD27Jn3Ww0FAwuzJQsisooDK0l2CpNu2KM4A7Tk4';
const PATH = '/firebase/example';

use Firebase\FirebaseLib;

class TestsController extends AppController {
   public function show($id)
   {
      $firebase = new FirebaseLib(URL, TOKEN);
      $book_id = $id;

      $value = $firebase->get('/oauh_knihy/'.$book_id);
      $this->set('book_id', $book_id); // variables we can get in view
      $this->set('book', $value);
   }
}

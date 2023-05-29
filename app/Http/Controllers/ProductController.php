<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
   public function productQuery()
   {

    $busca =  request('search');

    return view('products',['busca'=>$busca]);

 }


 public function product($id=null)
 {
    return view('product',['id'=>$id]);
 }


}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\product;

class ProductController extends Controller
{
    function APIlist(){
        return product::all();
    }

    function createProduct(Request $req){

        $product=new product();
        $product->productName=$req->pname;
        $product->productId=$req->pid;
        $product->manufDate=$req->pmanfDate;
        $product->expDate=$req->pexpDate;
        $product->productPrice=$req->productPrice;
        $product->save();

    }

}

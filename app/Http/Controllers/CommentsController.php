<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Hr\Product;
use App\Comment;
use Sentinel;

class CommentsController extends Controller
{
    public function store(Product $product, Request $request)
    {
    	$comment = new Comment;
    	$comment->body = $request->body;
    	$comment->user()->associate(Sentinel::getUser());
    	$product->comments()->save($comment);
    	return back();

    }
}

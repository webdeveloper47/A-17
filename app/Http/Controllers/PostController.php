<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;




// Answer to the question no-01

// Laravel's query builder is a feature of the Laravel framework that provides a convenient and expressive way to interact with databases. It allows you to build database queries using a fluent, chainable interface, which makes it easy to construct complex SQL statements without writing raw SQL code. The query builder abstracts the underlying database system and provides a consistent API for working with various database engines.

class PostController extends Controller
{
    function postFunction(){
        $posts = DB::table('posts')
        ->select('excerpt', 'description')
        ->get();

       


        $distinctCategories = DB::table('posts')
                       ->select('category')
                       ->distinct()
                       ->get();


        $posts = DB::table('posts')
                       ->where('id', 2)
                       ->first();
           
           echo $posts->description;



        $posts = DB::table('posts')
           ->where('id', 2)
           ->value('description');

        $record = DB::table('posts')
           ->where('category', 'news')
           ->orderBy('created_at')
           ->first();

        $record = DB::table('posts')->find(2);



        $posts = DB::table('posts')
            ->pluck('title');

        $result = DB::table('posts')->insert([
                'title' => 'X',
                'slug' => 'X',
                'excerpt' => 'excerpt',
                'description' => 'description',
                'is_published' => true,
                'min_to_read' => 2
            ]);
            
        $affectedRows = DB::table('posts')
            ->where('id', 2)
            ->update([
                'excerpt' => 'Laravel 10',
                'description' => 'Laravel 10'
            ]);

        $affectedRows = DB::table('posts')
                ->where('id', 3)
                ->delete();

        $totalCount = DB::table('posts')->count();

        $totalAmount = DB::table('orders')->sum('amount');
        $averagePrice = DB::table('products')->avg('price');
        $maxValue = DB::table('products')->max('price');
        $minValue = DB::table('products')->min('price');


        $records = DB::table('users')
            ->whereNot('status', 'active')
            ->get();


        $exists = DB::table('users')
            ->where('email', 'john@example.com')
            ->exists();


        $doesntExist = DB::table('users')
            ->where('email', 'john@example.com')
            ->doesntExist();


        $posts = DB::table('posts')
            ->whereBetween('min_to_read', [1, 5])
            ->get();


        $affectedRows = DB::table('posts')
            ->where('id', 3)
            ->increment('min_to_read');












            

  

    }

}

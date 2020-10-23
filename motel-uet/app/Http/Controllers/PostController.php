<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostController extends Controller
{
    public function searchPosts () {
        // post in_duration (true),
        $request = '';
        $searchOption = '';
        if (isset($searchOption['category_id'])) {
         // search by categoryId
        } else {
        // get all post
        }
        if (isset($searchOption['province_id'])) {
            // search by provinceId
        } else {
            // all post provin
        }

        if (isset($searchOption['district_id'])) {

        } else {

        }

        if (isset($searchOption['ward_id'])) {

        } else {

        }

        if (isset($searchOption['street_id'])) {

        } else {

        }

        if (isset($searchOption['price_form'])) {

        } else {

        }
        if (isset($searchOption['price_to'])) {

        } else {

        }

//        if (isset())

        //search by area
    }

    public function index () {
//        $post = Post::where('is_public', 1);


    }

    function create () {
        $request = '';
        $post = new Post([
            'title' => $request['title'],
            'description' => $request['description'],
            'province_id' => $request['province_id'],
            'district_id' => $request['district_id'],
            'street_id' => $request['street_id'],
            'ward_id' => $request['ward_id'],
            'address' => $request['address'],
            'price' => $request['price'],
            // ....
        //
        ]);
    }

    function store () {
        $request = '';
        if (isset($request['id'])) {
            // save all data change
        } else {
            // return Thao tac gap van de
        }
        // return Thao tac thanh cong
    }

    public function show () {

    }

    function  update () {
        // update status,
        // update content
    }
    function destroy () {

    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;


class PostController extends Controller
{
    public function index ()
    {
        $data = Post::where('is_delete', 0)->where('in_duration', 1)->where('is_booked', 0)->limit(10)->orderBy('service_id', 'desc')->get();
        return view('pages.test', ['data' => $data]);
    }
    public function searchPost () {
        // post in_duration (true),
        $request = '';
        $categoryId = '';
        $provinceId = '';
        $districtId = '';
        $streetId = '';
        $wardId = '';
        $priceMin = '';
        $priceMax = '';
        $arrSearch = [
            [
                'column' => 'category_id',
                'value' => $categoryId
            ],
            [
                'column' => 'province_id',
                'value' => $provinceId
            ],
            [
                'column' => 'district_id',
                'value' => $districtId
            ],
            [
                'column' => 'street_id',
                'value' => $streetId
            ],
            [
                'column' => 'ward_id',
                'value' => $wardId
            ],


        ];
        $data = Post::where('is_delete', 0)->where('in_duration', 1)->SearchPost($arrSearch)->where('is_booked', 0)->limit(10)->orderBy('service_id', 'desc')->get();
//         $data = Post::where('is_delete', 0)->where('in_duration', 1)->SearchByCategory($categoryId)->where('is_booked', 0)->limit(10)->orderBy('service_id', 'desc')->get();

        return view('pages.test', ['data' => $data]);
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


}

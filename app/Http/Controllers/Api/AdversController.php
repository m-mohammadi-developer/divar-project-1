<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Api\Controller;

class AdversController extends Controller
{
    //


    public function index(){
        $post = (object) [
            'titile' => 'post title',
            'desc' => 'its okkkkkkk',
        ];

        return request()->json($post);
    }

    public function self(){
        

        // $user = $this->authUser();

        try {
            $user = auth('api')->userOrFail();
        } catch (\Tymon\JWTAuth\Exceptions\UserNotDefinedException $e) {
            return response()->json(['error' => $e->getMessage()], 401);
        }


        // posts = $user->posts
        $post = (object) [
            'titile' => 'post title self',
            'desc' => 'its okkkkkkk',
        ];

        return response()->json(['posts' => $post]);
    }



    public function store(Request $request)
    {
        $details = $request->only(['title', 'content']);

        // $user = $this->authUser();

        try {
            $user = auth('api')->userOrFail();
        } catch (\Tymon\JWTAuth\Exceptions\UserNotDefinedException $e) {
            return response()->json(['error' => $e->getMessage()], 401);
        }

        // $user->posts->Create

        $post = [
            'title' => $request->title,
            'contnet' => $request->content,
        ];

        return response()->json([$post]);
    }


}

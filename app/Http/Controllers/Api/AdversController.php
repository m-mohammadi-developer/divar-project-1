<?php

namespace App\Http\Controllers\Api;

use App\Advers;
use Illuminate\Http\Request;
use App\Http\Controllers\Api\Controller;

class AdversController extends Controller
{
    public function index(){
        $post = (object) [
            'titile' => 'post title',
            'desc' => 'its okkkkkkk',
        ];

        return request()->json($post);
    }

    public function userAdverses(){

        // $user = $this->authUser();
        try {
            $user = auth('api')->userOrFail();
        } catch (\Tymon\JWTAuth\Exceptions\UserNotDefinedException $e) {
            return response()->json(['error' => $e->getMessage() . " :: (User Unknown)"], 401);
        }

        $post = $this->authUser()->getAdverses();

        return response()->json(['adverses' => $post]);
    }



    public function store(Request $request)
    {
        $details = (object)$request->only(['name', 'description', 'price', 'category_id', 'meta_keys', 'meta_description']);

        // $user = $this->authUser();

        try {
            $user = auth('api')->userOrFail();
        } catch (\Tymon\JWTAuth\Exceptions\UserNotDefinedException $e) {
            return response()->json(['error' => $e->getMessage() . " :: (User Unknown)"], 401);
        }

        try {
            $advers = Advers::create([
                'name' => $details->name,
                'description' => $details->description,
                'price' => $details->price,
                'user_id'   => $user->id,
                'category_id' => $details->category_id,
                'meta_keys' => $details->meta_keys,
                'meta_description' => $details->meta_description,
                'is_confirmed' => '0',
            ]);

        } catch (\PDOException $e) {
            return response()->json(['error' => $e->getMessage()]);
        }

        return response()->json(['advers' => $advers]);
    }


}

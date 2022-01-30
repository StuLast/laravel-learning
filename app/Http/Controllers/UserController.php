<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{
//    /**
//     * Display a listing of the resource.
//     *
//     * @return \Illuminate\Http\Response
//     */
////    public function index()
////    {
////        //
////    }

//    /**
//     * Show the form for creating a new resource.
//     *
//     * @return \Illuminate\Http\Response
//     */
////    public function create()
////    {
////        //
////    }

//    /**
//     * Store a newly created resource in storage.
//     *
//     * @param  \Illuminate\Http\Request  $request
//     * @return \Illuminate\Http\Response
//     */
////    public function store(Request $request)
////    {
////        //
////    }

    /**
     * Display the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        return view( 'user.show')->with([
            'user' => $user,
            'message_success' => Session::get('message_success'),
            'message_warning' => Session::get('message_warning')
        ]);
    }

//    /**
//     * Show the form for editing the specified resource.
//     *
//     * @param  \App\User  $user
//     * @return \Illuminate\Http\Response
//     */
////    public function edit(User $user)
////    {
////        //
////    }

//    /**
//     * Update the specified resource in storage.
//     *
//     * @param  \Illuminate\Http\Request  $request
//     * @param  \App\User  $user
//     * @return \Illuminate\Http\Response
//     */
////    public function update(Request $request, User $user)
////    {
////        //
////    }

//    /**
//     * Remove the specified resource from storage.
//     *
//     * @param  \App\User  $user
//     * @return \Illuminate\Http\Response
//     */
////    public function destroy(User $user)
////    {
////        //
////    }
}

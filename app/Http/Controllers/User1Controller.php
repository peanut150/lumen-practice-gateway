<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Traits\ApiResponser;
use App\Services\User1Service;

Class User1Controller extends Controller {

    use ApiResponser;

    /**
     *  The service to consume the User1 Microservice
     * @var User1Service
     */
    public $user1Service;

    /**
     * Create a new controller instance
     * @return void
     */
    public function __construct(User1Service $user1Service){
       $this->user1Service = $user1Service;
    }

    public function getUsers(){
       
    }

    /**
    * Return the list of users
    * @return Illuminate\Http\Response
    */
    public function index(){
       
    }

    public function add(Request $request ){
       
    }

    /**
    * Obtains and show one user
    * @return Illuminate\Http\Response
    */
    public function show($id){
       
    }

    /**
    * Update an existing author
    * @return Illuminate\Http\Response
    */
    public function update(Request $request,$id){
        
    }

    /**
    * Remove an existing user
    * @return Illuminate\Http\Response
    */
    public function delete($id){
        
    }
}
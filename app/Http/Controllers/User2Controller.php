<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Traits\ApiResponser;
use App\Services\User2Service;

Class User2Controller extends Controller {

    use ApiResponser;

    /**
     *  The service to consume the User2 Microservice
     * @var User2Service
     */
    public $user2Service;

    /**
     * Create a new controller instance
     * @return void
     */
    public function __construct(User2Service $user2Service){
      $this->user2Service = $user2Service;
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
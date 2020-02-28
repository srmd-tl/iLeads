<?php

namespace App\Http\Controllers;

use App\DataTables\UsersDataTable;
use App\Repositories\UserRepository;
use Illuminate\Http\Request;
use App\User;
use Hash;
class UserController extends Controller
{
    private $userRepository;
    public function __construct(UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;

    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(UsersDataTable $dataTable)
    {
        // Mail::to("sarmad-sohail@hotmail.com")->send(new Ileads());
        // return view('users.index');
        return $dataTable->render('users.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->merge(["password"=>bcrypt("123123123"),"role"=>config('constants.options.user')]);
        return $user=$this->userRepository->store($request->only(["email","business_name","business_site","phone","name","password","role"]));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        //
        return view('users.view',["user"=>$user]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        if(Hash::check($request->old_password,$user->password))
        {
            
            $this->userRepository->update($user,$request->all());
        }
        else
        {
            return back()->with('error','User Updation Failed!');
        }
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $this->userRepository->delete($id);
        return back()->with('success','User Deleted');
    }
}

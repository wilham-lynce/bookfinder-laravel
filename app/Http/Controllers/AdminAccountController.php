<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash; 
use App\Models\AdminAccount;
use Illuminate\Http\Request;

class AdminAccountController extends Controller
{
    function login(Request $req)
    {
        $admin = AdminAccount::where(['username'=>$req->username])->first();
        if (!$admin || !Hash::check($req->password, $admin->password)) {
            return "Username or password does not match";
        }
        else{
            $req->session()->put('username',$admin);
            return redirect('admin');
        }
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\AdminAccount  $adminAccount
     * @return \Illuminate\Http\Response
     */
    public function show(AdminAccount $adminAccount)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\AdminAccount  $adminAccount
     * @return \Illuminate\Http\Response
     */
    public function edit(AdminAccount $adminAccount)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\AdminAccount  $adminAccount
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, AdminAccount $adminAccount)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\AdminAccount  $adminAccount
     * @return \Illuminate\Http\Response
     */
    public function destroy(AdminAccount $adminAccount)
    {
        //
    }
}

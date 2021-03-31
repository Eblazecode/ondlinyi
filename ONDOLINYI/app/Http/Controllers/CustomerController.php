<?php

namespace App\Http\Controllers;

use App\Models\customers;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function ethanol(){
        return view('ethanol');
    }

    public function trucks(){
        return view('trucks');
    }
    public function textile(){
        return view('textile');
    }
    public function hdf(){
        return view('hdf');
    }
    public function mdf(){
        return view('mdf');
    }

    public function admin(){
        return view('admin.index1');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */


    // ADMIN SECTION PROCESSING
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    //LOGIN FORM DISPLAY

    public function login_form()
    {
        return view('login');
    }

    //SIGNUP FORM

    public function process_login(Request $request)
    {
        $request->validate([
            'email'=>'required|max:255',
            'password'=>'required|max:255'
        ]);

        $credentials = $request->except(['_token']);

        $customer = customers::where('email',$request->email)->first();

        if (auth()->attempt($credentials)) {

            return redirect()->route('AUTH.signup');

        }else{
            session()->flash('message', 'Invalid credentials');
            return redirect()->back();
        }
    }

    //signup form
    public function signup_form()
    {
        return view('backend.register');
    }


    public function process_signup(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required'
        ]);

        $customers = customers::create([
            'name' => trim($request->input('name')),
            'email' => strtolower($request->input('email')),
            'password' => bcrypt($request->input('password')),
            'phone'=>'required|numeric',
            'address'=>'required|max:255',
            'product'=>'required|max:255',
            'company'=>'required|max:255'
        ]);

        session()->flash('message', 'Your account is created');

        return redirect()->route('login');
    }
    public function logout()
    {
        \Auth::logout();

        return redirect()->route('login');
    }


    public function index()
    {
        //
        $customers = customers::all();
        return view('admin.index',compact('customers'));

    }


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
        $storedata = $request->validate([
            'name'=>'required|max:255',
            'surname'=>'required|max:255',
            'phone'=>'required|numeric',
            'email'=>'required|max:255',
            'address'=>'required|max:255',
            'product'=>'required|max:255',
            'company'=>'required|max:255'
        ]);
        $customers = customers::create($storedata);
        return redirect('/index')->with('complete','Accounted created');
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
    public function edit($id)
    {
        //
        $customers = customers::findorFail($id);
        return view('update',compact('customers'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        //
        $data = $request->validate([
            'name'=>'required|max:255',
            'surname'=>'required|max:255',
            'phone'=>'required|numeric',
            'email'=>'required|max:255',
            'address'=>'required|max:255',
            'product'=>'required|max:255',
            'company'=>'required|max:255'

    ]);
        customers::whereId($id)->update($data);
        return redirect('/index')->with('completed','Updates');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $customer =customers::findorFail($id);
        $customer->delete();

        return redirect('/index')->with('completed','DELETED');
    }
}

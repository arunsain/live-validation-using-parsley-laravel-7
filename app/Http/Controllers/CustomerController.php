<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customer;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('customer');
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

    public function chechEmailAlreadyExitOrNot(Request $request)
    {
        //
       // echo json_encode($request->all());
       $count =  Customer::where('email_id',$request->email)->get()->count();
       if($count == 0)
        {
            $output = array(
                        'success' => true
                    );
             echo json_encode($output);
        }
       
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
       
       
        
        $customer = new Customer;
        

            $customer->first_name = $request->first_name;
            $customer->last_name = $request->last_name;
            $customer->email_id = $request->email;
            $customer->password = $request->password;
            $customer->mobile_no = $request->mobile;
            $customer->website_url = $request->website;
            $customer->save();
            if($customer){
                $output = array(
                        'success' => true
                    );
             
            }else{
                $output = array(
                        'success' => false
                    );

            }
         echo json_encode($output);

        
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
    }
}

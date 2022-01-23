<?php

namespace App\Http\Controllers;

use App\Http\Requests\EmployeRequest;
use App\Models\Employe;
use Illuminate\Http\Request;

class EmployeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $employee= Employe::all();
        return view("employe.index")->with(["employee"=>$employee]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("employe.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(EmployeRequest $request)
    {
       
        Employe::create($request->validated());
        return redirect( )->route("employee.index")->with([
            "success"=>"Employee Added succesfully"
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $employe=Employe::where("registration_number",$id)->first();
        return view("employe.show")->with(["employe"=>$employe]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $employe=Employe::where("registration_number",$id)->first();
        return view("employe.edit")->with(["employe"=>$employe]);
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
        
        
        $employe=Employe::where("registration_number",$id)->first();
        $request->validate([
            "fullname"=>"required|unique:employes,fullname,".$employe->fullname,
            "registration_number"=>'numeric|required|unique:employes,id,'.$employe->regisration_number,
            "depart"=>"required",
            "Hire_date"=>"required",
            "phone"=>"required",
            "adress"=>"required",
            "city"=>"required"
        ]);
        $employe->update($request->except("_token","_method"));
        return redirect( )->route("employee.index")->with([
            "success"=>"Employee Updated succesfully"
        ]);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function destroy($id)
    {
        $employe=Employe::where("registration_number",$id)->first();
        $employe->delete();
       return  redirect( )->route("employee.index")->with([
            "success"=>"Employee Deleted succesfully"
        ]);
    }
    public function vacationRequest($id){
        $employe=Employe::where("registration_number",$id)->first();
        return view("employe.vacation-request")->with(["employe"=>$employe]);;
    }
    public function certificateRequest($id){
        $employe=Employe::where("registration_number",$id)->first();
        return view("employe.certificate")->with(["employe"=>$employe]);;
    }
}

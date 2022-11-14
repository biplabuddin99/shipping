<?php

namespace App\Http\Controllers;

use App\Models\Company;
use Illuminate\Http\Request;
use App\Http\Traits\ResponseTrait;
use Illuminate\Support\Str;
use Exception;
use Session;
use Image;

class CompanyController extends Controller
{
    use ResponseTrait;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Company::orderBy('id','DESC')->first();
        return view('backend.company.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.company.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try{
            $hs = new Company;
            $hs->name = $request->name;
            $hs->short_description = $request->short_description;
            $hs->long_description = $request->long_description;
            
            if($request->file('fimage')){
                $image = $request->file('fimage');
                $feature_image = '/source/public/images/company/'.time().'.'.$image->extension();
                $image->move(public_path('images/company'),$feature_image);
                $hs->feature_image=$feature_image;
            }

            if($hs->save()){
                
                return redirect(route(Session::get('identity').'.company.index'))->with($this->responseMessage(true, null, "You have successfully added a category."));
            }
         }catch(Exception $e){
            //dd($e);
            return redirect(route(Session::get('identity').'.company.create'))->with($this->responseMessage(false, "error", "Please try again!"));
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function show(Company $company)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
        $data = Company::orderBy('id','DESC')->first();
        return view('backend.company.edit',compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  $id)
    {
        try{
            $hs =  Company::findOrFail($id);
            $hs->name = $request->name;
            $hs->short_description = $request->short_description;
            $hs->long_description = $request->long_description;
            
            if($request->file('fimage')){
                $image = $request->file('fimage');
                $feature_image = '/source/public/images/company/'.time().'.'.$image->extension();
                $image->move(public_path('images/company'),$feature_image);
                $hs->feature_image=$feature_image;
            }

            if($hs->save()){
                
                return redirect(route(Session::get('identity').'.company.index'))->with($this->responseMessage(true, null, "You have successfully added a category."));
            }
         }catch(Exception $e){
            //dd($e);
            return redirect(route(Session::get('identity').'.company.edit',$id))->with($this->responseMessage(false, "error", "Please try again!"));
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function destroy(Company $company)
    {
        //
    }
}

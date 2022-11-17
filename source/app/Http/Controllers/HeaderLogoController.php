<?php

namespace App\Http\Controllers;

use App\Models\HeaderLogo;
use Illuminate\Http\Request;
use App\Http\Traits\ResponseTrait;
use Illuminate\Support\Str;
use Exception;
use Session;
use Image;

class HeaderLogoController extends Controller
{
    use ResponseTrait;

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = HeaderLogo::all();
        return view('backend.logo.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.logo.create');
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
            $lo = new HeaderLogo;
            if($request->file('Logo')){
                $image = $request->file('Logo');
                $feature_image = '/source/public/images/logo/'.time().'.'.$image->extension();
                $image->move(public_path('images/logo'),$feature_image);
                $lo->logo=$feature_image;
            }

            if($lo->save()){

                return redirect(route(Session::get('identity').'.headerLogo.index'))->with($this->responseMessage(true, null, "You have successfully added a category."));
            }
         }catch(Exception $e){
            //dd($e);
            return redirect(route(Session::get('identity').'.headerLogo.create'))->with($this->responseMessage(false, "error", "Please try again!"));
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\HeaderLogo  $headerLogo
     * @return \Illuminate\Http\Response
     */
    public function show(HeaderLogo $headerLogo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\HeaderLogo  $headerLogo
     * @return \Illuminate\Http\Response
     */
    public function edit(HeaderLogo $headerLogo)
    {
        return view('backend.logo.edit',compact('headerLogo'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\HeaderLogo  $headerLogo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, HeaderLogo $headerLogo)
    {
        try{
            $logoheaders =$headerLogo;
            if($request->file('Logo')){
                $image = $request->file('Logo');
                $feature_image = '/source/public/images/logo/'.time().'.'.$image->extension();
                $image->move(public_path('images/logo'),$feature_image);
                $logoheaders->logo=$feature_image;
            }

            if($logoheaders->save()){

                return redirect(route(Session::get('identity').'.headerLogo.index'))->with($this->responseMessage(true, null, "You have successfully added a category."));
            }
         }catch(Exception $e){
            //dd($e);
            return redirect(route(Session::get('identity').'.headerLogo.create'))->with($this->responseMessage(false, "error", "Please try again!"));
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\HeaderLogo  $headerLogo
     * @return \Illuminate\Http\Response
     */
    public function destroy(HeaderLogo $headerLogo)
    {
        //
    }
}

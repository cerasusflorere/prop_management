<?php

namespace App\Http\Controllers;

use App\Models\Prop;
use App\Models\Owner;
use Illuminate\Http\Request;

class PropController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $props = Prop::all();

        return $props;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return Prop::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $prop = Prop::where('id', $id)
              ->with(['owner', 'prop_comment'])->first();


        return $prop;
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

    /**
     * 小道具投稿
     * @param Owner $owner
     * @param StoreComment $request
     * @return \Illuminate\Http\Response
     */
    public function addProp(Owner $owner, StoreComment $request)
    {
        $prop = new Prop();
        $prop->content = $request->get('content');

        return response($prop, 201);
    }
}

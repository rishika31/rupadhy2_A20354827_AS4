<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use \Validator;
use \Session;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Item;
use Auth;



class ItemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        /*$items = Item::orderBy('created_at', 'asc')->get();
        return view('items.index', [
            'items' => $items
        ]);*/

        if(Auth::check()) {
            if (Auth::user()) {
                $items = Item::where('user_id', Auth::id())
                    ->get();
        } else {
                // get all the items
                $items = Item::all();
            }


            // load the view and pass the items
            return view('items.index')->with('items', $items);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('items.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if(Auth::check()) {
            // validate
            $rules = array(
                'description' => 'required',
                'quantity' => 'required',
                'price' => 'required'
            );
            $validator = Validator::make($request->all(), $rules);

            // process the login
            if ($validator->fails()) {
                return redirect('items/create')
                    ->withErrors($validator)
                    ->withInput(Input::except('password'));
            } else {
                // store
                $item = new Item;
                $item->description = $request->description;
                $item->quantity = $request->quantity;
                $item->price = $request->price;
                $item->user_id = Auth::id();
                $item->save();

                // redirect
                Session::flash('message', 'Successfully added new item!');
                return redirect('/items');
            }
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // get the item
        $item = Item::find($id);

        // show the view and pass the item to it
        return view('items.show')->with('item', $item);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // get the item
        $item = Item::find($id);

        // show the edit form and pass the item
        return view('items.edit')->with('item', $item);
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
        if(Auth::check()) {
            // validate
            $rules = array(
                'description' => 'required'
            );
            $validator = Validator::make($request->all(), $rules);

            // process the login
            if ($validator->fails()) {
                return Redirect::to('items/' . $id . '/edit')
                    ->withErrors($validator)
                    ->withInput(Input::except('password'));
            } else {
                // store
                $item = Item::find($id);
                $item->description = $request->description;
                $item->quantity = $request->quantity;
                $item->price = $request->price;
                $item->save();

                // redirect
                Session::flash('message', 'Successfully updated item!');
                return redirect('/items');
            }
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if(Auth::check()) {
            // delete
            $item = Item::find($id);
            $item->delete();

            // redirect
            Session::flash('message', 'Successfully deleted the item!');
            return redirect('/items');
        }
    }
}

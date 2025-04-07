<?php

namespace App\Http\Controllers;

use App\Models\Mcoa;
use Illuminate\Http\Request;

class CoaController extends Controller
{
   /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */
   public function index()
   {
      $items = Mcoa::query()
         ->with('tree')
         ->whereNull('parent_id')
         ->orderBy('kode')
         ->get();

      return view('coa.index', compact(
         'items',
      ));

      // return response()->json([
      //    'items' => $items,
      // ]);
   }

   /**
    * Show the form for creating a new resource.
    *
    * @return \Illuminate\Http\Response
    */
   public function create()
   {
      $formfield = new Mcoa();

      return view('coa.form', compact(
         'formfield',
      ));
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
      $formfield = Mcoa::query()
         ->find($id);

      return view('coa.form', compact(
         'formfield',
      ));
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

@extends('layouts.app')
@section('title', 'Chart of Accounts')

@section('content')
<div class="box box-default">
   <div class="box-header with-border">
      <h3 class="box-title">Chart of Accounts</h3>
      <div class="box-toolbar">
         <a class="btn btn-primary" href="{{route('coa.create')}}">Create</a>
      </div>
   </div>
   <div class="box-body">
      <x-coa-tree :nodes="$items" />

      <table class="table hidden">
         <thead>
            <tr>
               <th style="width: 150px;">Kode</th>
               <th>Nama Akun</th>
               <th style="width: 90px;"></th>
            </tr>
         </thead>
         <tbody>
            @foreach($items as $row)
               <tr>
                  <td>{{$row->kode}}</td>
                  <td>
                     <div>{{$row->nama}}</div>
                     <!-- <div>{{$row->tree}}</div> -->
                  </td>
                  <td>
                     <a href="{{route('coa.edit', $row)}}">View</a>
                  </td>
               </tr>
            @endforeach
         </tbody>
      </table>
   </div>
</div>
@endsection

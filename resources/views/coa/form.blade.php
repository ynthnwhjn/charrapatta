@extends('layouts.app')
@section('title', 'Chart of Accounts')

@section('content')
<div class="box box-default">
   <div class="box-header with-border">
      <h3 class="box-title">Chart of Accounts</h3>
      <div class="box-toolbar">
         <a class="btn btn-default" href="{{route('coa.index')}}">Back</a>
      </div>
   </div>
   <x-form route="coa" :params="$formfield->id">
      <div class="box-body">
         <div class="form-group">
            <label>Kode</label>
            <input type="text" class="form-control" name="kode" value="{{$formfield->kode}}">
         </div>

         <div class="form-group">
            <label>Nama</label>
            <input type="text" class="form-control" name="nama" value="{{$formfield->nama}}">
         </div>
      </div>
      <x-slot:box-footer>
         <a class="btn btn-default" href="{{route('coa.index')}}">Back</a>
      </x-slot>
   </x-form>
</div>
@endsection

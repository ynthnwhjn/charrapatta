@props([
   'box-footer',
])
<form action="{{$route}}" autocomplete="off" method="POST">
   @csrf
   @method($form_method)
   {{$slot}}
   <div class="box-footer">
      {{$box-footer}}
   </div>
</form>

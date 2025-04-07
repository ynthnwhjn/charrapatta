<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Form extends Component
{
   public $route;
   public $params;
   public $form_method;

   /**
    * Create a new component instance.
    *
    * @return void
    */
   public function __construct($route, $params = null)
   {
      $this->route = route($route . '.store');
      $this->params = $params;
      $this->form_method = 'POST';

      if($params) {
         $this->route = route($route . '.update', $params);
         $this->form_method = 'PUT';
      }
   }

   /**
    * Get the view / contents that represent the component.
    *
    * @return \Illuminate\Contracts\View\View|\Closure|string
    */
   public function render()
   {
      return view('components.form');
   }
}

<div>
   <ul>
      @foreach($nodes as $node)
      <li>
         <a href="{{route('coa.edit', $node)}}">
            {{$node->kode}} - {{$node->nama}}
         </a>

         @if($node->tree->isNotEmpty())
            <x-coa-tree :nodes="$node->tree" />
         @endif
      </li>
      @endforeach
   </ul>
</div>

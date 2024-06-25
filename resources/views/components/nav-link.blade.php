@props(['active'=> false , "type"=> "a"])

@if ($type==="a")
<a class="{{$active ?'text-2xl' : 'text-sm'}}" 
aria-current="{{$active ? 'page' : 'false'}}" 
{{$attributes}}>
{{$slot}}
</a>
 @else   
<button xclass="{{$active ?'text-2xl' : 'text-sm'}}" 
aria-current="{{$active ? 'page' : 'false'}}" 
{{$attributes}}>
{{$slot}}
</button>
@endif
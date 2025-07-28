 
 @if($href)
 

 <a href="{{$href}}" type="button" class="btn btn-{{$color}} btn-{{$size}}">
    {{$slot}}
 </a>

 @else

 <button type="button" class="btn btn-{{$color}} btn-{{$size}}">{{$slot}}</button>

 @endif
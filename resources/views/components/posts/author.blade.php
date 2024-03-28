@props(['user'])
<img class="w-8 h-8 rounded-full mr-3"
     src="{{$user->profile_photo_path}}">
<span class="mr-1 text-xs">{{$user->name}}</span>

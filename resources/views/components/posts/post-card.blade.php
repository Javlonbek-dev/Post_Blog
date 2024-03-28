@props(['post'])
<div class="">
    <a wire:navigate href="{{route('blogPost.show', $post->slug)}}">
        <div>
            <img class="w-full rounded-xl"
                src="{{$post->image}}">
        </div>
    </a>
    <div class="mt-3">
        <div class="flex items-center mb-2">
            <p class="text-gray-500 text-sm">{{$post->published_at}}</p>
        </div>
        <a style="display: block;margin-bottom: 5px" href="{{route('blogPost.show', $post->slug)}}" class="text-xl font-bold text-gray-900 ">{{$post->title}}</a>
       &nbsp;
        <div style="display: flex">
            <img class="w-8 h-8 rounded-full" style="margin-right: 10px; border-radius: 50%;"
                 src="{{$post->user->profile_photo_path}}">
            <a href="" class="text-ms font-bold text-red-600">{{$post->user->name}}</a>
        </div>
    </div>


</div>

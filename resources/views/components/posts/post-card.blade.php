@props(['post'])
<div class="">
    <a href="http://127.0.0.1:8000/blog/laravel-34">
        <div>
            <img class="w-full rounded-xl"
                src="{{$post->image}}">
        </div>
    </a>
    <div class="mt-3">
        <div class="flex items-center mb-2">
            <a href="http://127.0.0.1:8000/categories/laravel" class="bg-red-600
                                        text-white
                                        rounded-xl px-3 py-1 text-sm mr-3">
                Laravel
            </a>
            <p class="text-gray-500 text-sm">{{$post->published_at}}</p>
        </div>
        <a style="display: block;margin-bottom: 5px" href="#" class="text-xl font-bold text-gray-900 ">{{$post->title}}</a>
       &nbsp;
        <div style="display: flex">
            <img class="w-8 rounded-full" style="margin-right: 10px; border-radius: 50%;"
                 src="{{$post->user->profile_photo_path}}">
            <a href="#" class="text-ms font-bold text-red-600">{{$post->user->name}}</a>
        </div>
    </div>


</div>

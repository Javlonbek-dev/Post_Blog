<x-app-layout xmlns:livewire="http://www.w3.org/1999/html">

        <article class="col-span-4 md:col-span-3 mt-10 mx-auto py-5 w-full" style="max-width:700px">
            <img class="w-full my-2 rounded-lg mb-2" src="{{$post->image}}" alt="">
            <h1 class="text-lg font-bold text-left text-gray-800">
                {{$post->title}}
            </h1>
            <div class="mt-2 flex justify-between items-center">
                <div class="flex py-5 text-base items-center">
                    <img class="w-10 h-10 rounded-full mr-3" src="{{$post->user->profile_photo_path}}"
                         alt="avatar">
                    <span class="mr-1">{{$post->user->name}}</span>
                    <span class="text-gray-500 text-sm">{{$post->getReadingTime()}} min read</span>
                </div>
                <div class="flex items-center">
                    <span style="margin-right: 10px" class="text-gray-500 mr-2">{{ \Carbon\Carbon::parse($post->published_at)->diffForHumans() }}</span>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.3"
                         stroke="currentColor" class="w-5 h-5 text-gray-500">
                        <path stroke-linecap="round" stroke-linejoin="round"
                              d="M12 6v6h4.5m4.5 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                </div>
            </div>

            <div
                class="article-actions-bar my-6 flex text-sm items-center justify-between border-t border-b border-gray-100 py-4 px-2">
                <div class="flex items-center">
                </div>
                <div>
                    <div class="flex items-center">
                    </div>
                </div>
            </div>

            <div class="article-content py-3 text-gray-800 text-lg text-justify">
                {{$post->contents}}
            </div>

            <livewire:post-comments :key="'comments' . $post->id" :$post/>

        </article>

</x-app-layout>

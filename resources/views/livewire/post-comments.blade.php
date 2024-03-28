<div class="mt-10 comments-box border-t border-gray-100 pt-10">
    <h2 class="text-2xl font-semibold text-gray-900 mb-5">Discussions</h2>
    @auth
        <textarea
            wire:model="comment"
            class="w-full rounded-lg p-4 bg-gray-50 focus:outline-none text-sm text-gray-700 border-gray-200 placeholder:text-gray-400"
            cols="30" rows="7"></textarea>
        <button style="background-color: gray"
            wire:click="postComment"
            class="mt-3 inline-flex items-center justify-center h-10 px-4 font-medium tracking-wide text-white transition duration-200 bg-black rounded-lg hover:bg-gray-800 ">
            Post Comment
        </button>
    @else
        <a wire:navigate class="text-yellow-500 underline py-1" href="{{route('login')}}"> Login to Post Comments</a>
    @endauth

    <div class="user-comments px-3 py-2 mt-5">
        @forelse($this->comments as $comment)
            <div class="comment [&:not(:last-child)]:border-b border-gray-100 py-5">
                <div class="user-meta flex mb-4 text-sm items-center">
                    <img class="w-8 h-8 rounded-full mr-3" src="{{$comment->user->profile_photo_path}}">
                    <span class="mr-2">{{$comment->user->name}}</span>
                    <span
                        class="text-gray-500">. {{ \Carbon\Carbon::parse($comment->created_at)->diffForHumans() }} ago</span>
                </div>
                <div class="text-justify text-gray-700  text-sm">
                    {{$comment->comment}}
                </div>
            </div>
        @empty
            <div class="text-gray-500 text-center">
                <span> No Comments Posted</span>
            </div>
        @endforelse
    </div>
    <div class="my-2">
        {{$this->comments->links()}}
    </div>
</div>


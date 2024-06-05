<x-layout>
    <x-header>Post Index Page</x-header>
   @auth
   <section>
    <div class="flex justify-end">
        <a href="{{route('posts.create')}}" class="bg-blue-700 hover:bg-blue-800 text-white font-medium rounded-lg text-sm px-5 py-2.5 focus:ring-blue-300 focus:ring-4 focus:outline-none dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Create</a>
    </div>
</section> 
   @endauth
    <div class="max-w-6xl mx-auto mt-8 space-y-6 rounded-lg sm:px-6 lg:px-8">

    <div class="grid grid-cols-1 gap-6 md:grid-cols-2 lg:grid-cols-3">
        @foreach ($posts as $post)
            <div class="max-w-xs p-6 bg-white border border-gray-200 rounded-lg shadow md:max-w-xs lg:max-w-sm dark:bg-gray-800 dark:border-gray-700">
                <a href="/posts/{{$post->id}}">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{$post->title}}</h5>
                </a>
                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">{{$post->content}}</p>
                <a href="/posts/{{$post->id}}" class="inline-flex items-center px-3 py-2 text-sm font-medium text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                    Read more
                    <svg class="rtl:rotate-180 w-3.5 h-3.5 ml-2" fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"></path>
                    </svg>
                </a>
            </div>
        @endforeach
    </div>
</x-layout>

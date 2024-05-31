<x-layout>
    <section class="mt-4">
        <div class="flex justify-end">
            <a href="{{ route('posts.edit',$post->id)}}" class="bg-blue-700 hover:bg-blue-800 text-white font-medium rounded-lg text-sm px-5 py-2.5 focus:ring-blue-300 focus:ring-4 focus:outline-none dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Edit</a>
        </div>
    </section>
    <div class="max-w-6xl mx-auto mt-8 space-y-6 rounded-lg sm:px-6 lg:px-8 bg-slate-50">
        <h1 class="text-3xl font-semibold text-indigo-800">{{ $post->title }}</h1>
        <main class="max-w-6xl mx-auto mt-6 space-y-6 lg:mt-20nspace-y-6 ">
            <p class="p-4 mb-4 text-gray-700">{{$post->content}}</p>
        </main>
    </div>
</x-layout>


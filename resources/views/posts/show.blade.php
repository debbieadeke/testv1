<x-layout>
    <section class="mt-4">
        <div class="flex justify-end">
            <div class="flex justify-between">
                <a href="{{ route('posts.edit',$post->id)}}" class="bg-blue-700 hover:bg-blue-800
                     text-white font-medium rounded-lg text-sm px-5 py-2.5 
                     focus:ring-blue-300 focus:ring-4 focus:outline-none dark:bg-blue-600
                      dark:hover:bg-blue-700 dark:focus:ring-blue-800">Edit</a>
                  <form action="{{route('posts.destroy',$post->id)}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit"
                    class="bg-red-700 hover:bg-red-800
                        text-white font-medium rounded-lg text-sm px-5 py-2.5
                         focus:ring-red-300 focus:ring-4 focus:outline-none dark:bg-red-600
                          dark:hover:bg-red-700 dark:focus:ring-red-800">Delete</a>
                         </button>
                  </form>
            </div>
        </div>
    </section>
    <div class="max-w-6xl mx-auto mt-8 space-y-6 rounded-lg sm:px-6 lg:px-8 bg-slate-50 dark:bg-slate-600">
        <h1 class="text-3xl font-semibold text-indigo-800 dark:text-indigo-500">{{ $post->title }}</h1>
        <main class="max-w-6xl mx-auto mt-6 space-y-6 lg:mt-20nspace-y-6 ">
            <p class="p-4 mb-4 text-gray-700 dark:text-gray-900">{{$post->content}}</p>
        </main>
    </div>
</x-layout>


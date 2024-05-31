<x-layout>
  <x-header>Post Create Page</x-header>
    <div class="max-w-2xl p-4 mx-auto rounded-lg bg-slate-200 dark:bg-slate-900">
        <form method="POST" action="{{route('posts.store')}}">
            @csrf
            <div class="mb-6" >
                <label for="default-input" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tittle</label>
                <input type="text" id="default-input" name="title" class="bg-gray-50 border border-gray-300 
                text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 
                block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400
                 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
            </div>
            <div class="mb-6">
                <label for="message" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                    Content here</label>
                <textarea id="message" rows="4" name="content" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 
                rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700
                dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500
                dark:focus:border-blue-500" placeholder="Write your thoughts here..."></textarea>
            </div>
            <div class="mb-6">
                <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 
                focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600
                 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Store</button>
            </div>
        </form>
</x-layout>

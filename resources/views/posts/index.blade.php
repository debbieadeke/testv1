<x-layout>
        <h1>Post Index Page</h1>
        {{date('Y-m-d')}}
        {{$username}}
        <div>My name is {{$username}}.I am {{$age}} years old.</div>
        {{-- <ul>
            <li> {{$post[0]}}</li>
            <li> {{$post[1]}}</li>
            <li> {{$post[2]}}</li>
        </ul> --}}
    
        <ul>
            @foreach ($post as $post)
                <li> {{$post}} </li>
            @endforeach
        </ul>
</x-layout>
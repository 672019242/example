<x-app-layout>
    <h1>Tasks</h1>
    <form action="/tasks" method="post">
    
        @csrf

    <input type="text" name="nama" placeholder="The name of task">

     <button type="submit">Add</button>   

    </form>

    <ul style="list-style-type: none">

        
        @foreach ($tasks as $index => $tasks)
            <li>
                
              {{ $index + 1 }} -  {{$tasks->nama}}
            </li>
        @endforeach

        </ul>
    
</x-app-layout>
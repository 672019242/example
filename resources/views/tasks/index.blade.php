<x-app-layout title="Task">
    <h1>Tasks</h1>
    <form action="/tasks" method="post">
    
        @csrf

    <input type="text" name="nama" placeholder="The name of task">

     <button type="submit">Add</button>   

    </form>

    <ul style="list-style-type: none">

        
        @foreach ($tasks as $index => $tasks)
            <li>
                
              {{ $index + 1 }} -  {{$tasks->nama}} - <a style="color: red" href="/tasks/{{ $tasks -> id}}/edit"> edit </a>
            </li>
        @endforeach

        </ul>
    
</x-app-layout>
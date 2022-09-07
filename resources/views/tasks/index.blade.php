<x-app-layout title="Task">
    <h1>Tasks</h1>
    <form action="/tasks" method="post">
    
        @csrf

    <input type="text" name="nama" placeholder="The name of task">

     <button type="submit">Add</button>   

    </form>

    <ul style="list-style-type: none">

        
        @foreach ($tasks as $index => $tasks)
            <li style="margin-bottom: 15px">
                
              {{ $index + 1 }} -  {{$tasks->nama}} 

              <div>

              <a style="color: skyblue" href="/tasks/{{ $tasks -> id}}/edit"> edit </a>

              <form action="/tasks/{{$tasks->id}}" method="post" style="display: inline"> 

                @csrf
                @method("delete")

                <button type="submit"> delete</button>
            
              </form>

              </div>
            </li>
        @endforeach

        </ul>
    
</x-app-layout>
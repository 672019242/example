<x-app-layout title="Task">

  <div class="container">
    <div class="row">
      <div class="col-md-6">
          @include('tasks._create')
      </div>
    </div>

    <ul class="list-group mt-4">
        
      @foreach ($tasks as $index => $tasks)
        <li class="list-group-item d-flex align-items-center justify-content-between">
                
          {{ $index + 1 }} - {{$tasks->nama}} 

            <div class="d-flex">

              
              <a class="btn btn-primary me-2 " href="{{ route('tasks.edit', $tasks->id) }}">edit</a>
              <form action="{{ route('tasks.destroy', $tasks->id) }}" method="post"> 

              @csrf

              @method("delete")

              <button class="btn btn-danger" type="submit">delete</button>
            
              </form>

              </div>
        </li>

      @endforeach

    </ul>

  </div>
    
</x-app-layout>
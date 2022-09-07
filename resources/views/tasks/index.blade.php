<x-app-layout title="Task">

  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <div class="card">
          <div class="card-header">Create New Task</div>
    
          <div class="card-body">

            <form action="/tasks" method="post" class="d-flex">
        
              @csrf
      
          <input type="text" name="nama" class="form-control me-2" placeholder="The name of task">
      
          <button type="submit" class="btn btn-primary">Add</button>   
      
            </form>
    
          </div>
        </div>
      </div>
    </div>

    <ul class="list-group mt-4">
        
      @foreach ($tasks as $index => $tasks)
        <li class="list-group-item d-flex align-items-center justify-content-between">
                
          {{ $index + 1 }} - {{$tasks->nama}} 

            <div class="d-flex">

              <a class="btn btn-primary me-2" href="/tasks/{{ $tasks->id }}/edit">edit</a>

              <form action="/tasks/{{$tasks->id}}" method="post"> 

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
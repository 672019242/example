<x-app-layout title="Task">
    
    <div class="card">
        <div class="card-header">
            <h1>Edit Nama</h1>
        </div>

        <div class="card-body">
            <form action="/tasks/{{$tasks->id}}" method="post">
        
                @method ('put')
        
                @csrf
        
            <input type="text" name="nama" value="{{$tasks -> nama}}" placeholder="The name of task">
        
            <button type="submit">Update</button>   
        
            </form>
        </div>

    </div>

</x-app-layout>
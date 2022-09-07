<x-app-layout title="Task">
    <h1>Tasks</h1>
    <form action="/tasks/{{$tasks -> id}}" method="post">
        
        @method ('put')

        @csrf

    <input type="text" name="nama" value="{{$tasks -> nama}}" placeholder="The name of task">

     <button type="submit">Update</button>   

    </form>

    
</x-app-layout>
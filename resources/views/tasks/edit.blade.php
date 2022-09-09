<x-app-layout title="Task">
    
    <div class="container">
        <div class="row">

            <div class="col-md-6">
                <form action="{{ route('tasks.update', $tasks->id) }}" method="post">
            
                    @method ('put')
            
                    @csrf
            
                   @include('tasks._form')
            
                </form>
            </div>

        </div>
    </div>

</x-app-layout>
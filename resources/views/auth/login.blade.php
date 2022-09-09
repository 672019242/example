<x-app-layout title="Login">
    
    <div class="container">
        <div class="row">
            <div class="cl-md-5">
                <div class="card">
                    <div class="card-header">Login</div>

                    <div class="card-body">
                        <form action="{{ route('login') }}" method="post">
                        
                            @csrf
                        <div class="mb-4">
                            <label for="email" class="form-label">Email</label>

                            <input type="email" name="email" value="{{ old('email') }}" id="email" class="text form-control">

                            @error('email')
                                
                            <div class="text-danger mt-2">
                                {{ $message }}

                            </div>
                                
                            @enderror
                        </div>

                        <div class="mb-4">
                            <label for="password" class="form-label">Password</label>

                            <input type="password" name="password" value="{{ old('password') }}" id="password" class="text form-control">
                            @error('password')
                                
                            <div class="text-danger mt-2">
                                {{ $message }}

                            </div>
                                
                            @enderror
                        </div>

                        <button type="submit" class="btn btn-primary">Login</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</x-app-layout>
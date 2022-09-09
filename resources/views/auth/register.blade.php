<x-app-layout title="Regritasi">
    
    <div class="container">
        <div class="row">
            <div class="cl-md-5">
                <div class="card">
                    <div class="card-header">Create New Account</div>

                    <div class="card-body">
                        <form action="{{ route('register') }}" method="post">
                        
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
                            <label for="username" class="form-label">Username</label>

                            <input type="username" name="username" value="{{ old('username') }}" id="username" class="text form-control">
                            @error('username')
                                
                            <div class="text-danger mt-2">
                                {{ $message }}

                            </div>
                                
                            @enderror
                        </div>

                        <div class="mb-4">
                            <label for="name" class="form-label">Nama</label>

                            <input type="text" name="name" value="{{ old('name') }}" id="name" class="text form-control">
                            @error('name')
                                
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

                        <button type="submit" class="btn btn-primary">Register</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</x-app-layout>
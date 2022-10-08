<div>
    <div class="container  mb-4 " style="margin-top:200px">

    
    <div class="row">
        <div class="col-md-12">
            @if (session()->has('message'))
                <div class="alert alert-success">
                    {{ session('message') }}
                </div>
            @endif
            @if (session()->has('error'))
                <div class="alert alert-danger">
                    {{ session('error') }}
                </div>
            @endif
        </div>
    </div>
    @if($registerForm)
    <form class="bg-light text-dark">
        <div class="row  ">
            <div class="col-12">
                <h2 class="text-center  bg-secondary text-white p-4">Employee Management
                    Registration</h2>
            </div>
        </div>
        <div class="row p-4">
            <div class="col-md-12">
                <div class="form-group">
                    <label>Name :</label>
                    <input type="text" wire:model="name" class="form-control">
                    @error('name') <span class="text-danger error">{{ $message }}</span>@enderror
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group">
                    <label>Email :</label>
                    <input type="text" wire:model="email" class="form-control">
                    @error('email') <span class="text-danger error">{{ $message }}</span>@enderror
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group">
                    <label>Password :</label>
                    <input type="password" wire:model="password" class="form-control">
                    @error('password') <span class="text-danger error">{{ $message }}</span>@enderror
                </div>
            </div>
            <div class="col-md-12 text-center">
                <button class="btn text-white btn-success" wire:click.prevent="registerStore">Register</button>
            </div>
            <div class="col-md-12">
                <a class="btn text-white btn-primary" wire:click.prevent="register"><strong>Login</strong></a>
            </div>
        </div>
    </form>
    @else
{{-- ///////////////////////////////////////////////////// --}}
        <form class="bg-light text-dark">
            <div class="row  ">
                <div class="col-12">
                    <h2 class="text-center  bg-secondary text-white p-4">Employee Management
                        Login</h2>
                </div>
            </div>
            <div class="row p-4">
                <div class="col-md-12">
                    <div class="form-group">
                        <label>Email :</label>
                        <input type="text" wire:model="email" class="form-control">
                        @error('email') <span class="text-danger error">{{ $message }}</span>@enderror
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label>Password :</label>
                        <input type="password" wire:model="password" class="form-control">
                        @error('password') <span class="text-danger error">{{ $message }}</span>@enderror
                    </div>
                </div>
                <div class="col-md-12 text-center">
                    <button class="btn text-white btn-success" wire:click.prevent="login">Login</button>
                </div>
                <div class="col-md-12">
                    Don't have account? <a class="btn btn-primary text-white" wire:click.prevent="register"><strong>Register Here</strong></a>
                </div>
            </div>
        </form>
{{-- /////////////////////////////////////////////////////////////////// --}}
</div>

@endif

</div>
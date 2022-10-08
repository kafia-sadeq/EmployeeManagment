<div>
    <div class="container" style="margin-top:50px">
        <div class="row">
            <div class="col-2">

            </div>
            <div class="col-8">
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
                                <input type="text" wire:model="name" class="form-control"  >
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
                            <button class="btn text-white btn-success" wire:click.prevent="registerStore">Update</button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-2">

            </div>
        </div>
    </div>


<div>
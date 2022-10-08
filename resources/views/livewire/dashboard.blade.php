
 @if (Auth::check())
    <div class="">
        <div class="jumbotron text-right">
            <div class="dropdown">
                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton"
                 data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                   {{Auth::user()->name}}
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <a class="dropdown-item" href="{{ route('profile')}}" >
                        Profile
                    </a>
                    <a class="dropdown-item" wire:click="logout">Logout</a>
                  </div>
              </div>
        </div>
        <div class="row">
             <div class="col-4 text-white">
              {{-- /////////////////////////// --}}
              <div class="w-50 bg-secondary m-4">
                <nav>
                    <ul>
                        <li class="mb-3"><a class="text-white " wire:click="usertabe">User</a></li>
                        <li class="mb-3">Employee</li>
                    </ul>
                  </nav>
              </div>
              {{-- ///////////////// --}}
             </div>
             <div class="col-8">
            {{-- /////////////////////////// --}}
              <div class=" bg-light m-4 pt-4">
              <div class="container">
                @if ($NewTabe)
                <div class="row">
                    <div class="col-8">
                        <div class="w-50">
                            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search"wire:model="search">
                        </div>
                    </div>
                    <div class="col-4">
                      @include('livewire.create')
                    </div>
                </div>
                <div class="row">
                    {{-- /////////////////////////// --}}
                   
                        @include('livewire.update')
                        @if (session()->has('message'))
                            <div class="alert alert-success" style="margin-top:30px;">
                              {{ session('message') }}
                            </div>
                        @endif
                        <table class="table table-bordered mt-5">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                             
                                @foreach($users as $value)
                                <tr>
                                    <td>{{ $value->id }}</td>
                                    <td>{{ $value->name }}</td>
                                    <td>{{ $value->email }}</td>
                                    <td>
                                    <button data-toggle="modal" data-target="#updateModal" wire:click="edit({{ $value->id }})" class="btn btn-primary btn-sm">Edit</button>
                                    <button wire:click="delete({{ $value->id }})" class="btn btn-danger btn-sm">Delete</button>
                                    </td>
                                </tr>
                                @endforeach
                                {{ $users->links() }}
                            </tbody>
                        </table>
                    {{-- ////////////////////// --}}
                </div>
                <livewire:departman />
                @endif
              </div>
                </div>
              {{-- ///////////////// --}}
             </div>
        </div>
    </div>

    @endif
    @if ($profile)
    <livewire:profile />
    @endif
   
<div class="w-full h-screen overflow-x-hidden border-t flex flex-col">
    <div class="flex items-center  justify-center">
        @if (session()->has('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
        @endif
        <div class="w-full lg:w-1/2 my-6 pr-0 lg:pr-2">
            <p class="text-xl pb-6  mb-6">
               <div class="fas fa-user mr-3"></div>
               create New Employer
            </p>
            <div class="leading-loose">

                <form class="p-10 bg-white rounded shadow-xl" wire:submit.prevent="store">
                    
                    <div class="">
                        <label class="block text-sm text-gray-600" for="name">Name</label>
                        <input class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded" id="name" name="name" wire:model='name' type="text" placeholder="Your Name" aria-label="Name">
                        @error('name') <span class="error text-red-300 p-3 my-5 rounded">{{ $message }}</span> @enderror
                    </div>

                    <div class="mt-2">
                        <label class="block text-sm text-gray-600" for="email">Email</label>
                        <input class="w-full px-5  py-4 text-gray-700 bg-gray-200 rounded" id="email" name="email" wire:model='email' type="text"  placeholder="Your Email" aria-label="Email">
                        @error('email') <span class="error text-red-300 p-3 my-5 rounded">{{ $message }}</span> @enderror
                    </div>
                    
                    

                    <div class="mt-2">
                        <label class="block text-sm text-gray-600" for="email">Content</label>
                        <input class="w-full px-5  py-4 text-gray-700 bg-gray-200 rounded" id="content" name="contact" wire:model='contact' type="text"
                          placeholder="Your Content" aria-label="Email">
                          @error('contact') <span class="error text-red-300 p-3 my-5 rounded">{{ $message }}</span> @enderror
                    </div>
                    <div class="mt-2">
                        <label class="block text-sm text-gray-600" for="email">Department</label>
                        <select class="w-full px-5  py-4 text-gray-700 bg-gray-200 rounded"  name="department" wire:model="department" >
                            <option>selected</option>
                            @foreach ($Fonctions as $Fonction)
                            <option value="{{ $Fonction->id}}">{{ $Fonction->libelle }}</option>
                            @endforeach
                        </select>
                    </div> 

                    <div class="mt-6">
                        <button class="px-4 py-1 text-white font-light tracking-wider bg-gray-900 rounded" type="submit">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    
    </div>
</div>

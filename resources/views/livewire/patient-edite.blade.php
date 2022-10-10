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
                Ajouter patient
            </p>
            <div class="leading-loose">

                <form class="p-10 bg-white rounded shadow-xl" wire:submit.prevent="store">
                    <div class="">
                        <label class="block text-sm text-gray-600" for="name">Code patient</label>
                        <input class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded " id="name" name="code" value="{{$patient->code}}"
                         type="text"  placeholder="Your Name" aria-label="Name" >
                        @error('code') <span class="error text-red-300 p-3 my-5 rounded">{{ $message }}</span> @enderror
                    </div>
                    <div class="">
                        <label class="block text-sm text-gray-600" for="name">Name</label>
                        <input class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded" id="name" name="name" value="{{$patient->name}}" 
                        type="text" placeholder="Your Name" aria-label="Name">
                        @error('name') <span class="error text-red-300 p-3 my-5 rounded">{{ $message }}</span> @enderror
                    </div>

                    <div class="mt-2">
                        <label class="block text-sm text-gray-600" for="email">Email</label>
                        <input class="w-full px-5  py-4 text-gray-700 bg-gray-200 rounded" id="email" name="email"  value="{{$patient->email}}"
                        type="text"  placeholder="Your Email" aria-label="Email">
                        @error('email') <span class="error text-red-300 p-3 my-5 rounded">{{ $message }}</span> @enderror
                    </div>
                    <div class="mt-2">
                        <label class="block text-sm text-gray-600" for="email">Content</label>
                        <input class="w-full px-5  py-4 text-gray-700 bg-gray-200 rounded" id="content" name="contact"value="{{$patient->contact}}" type="text"
                          placeholder="Your Content" aria-label="Email">
                          @error('contact') <span class="error text-red-300 p-3 my-5 rounded">{{ $message }}</span> @enderror
                    </div>
                    <div class="mt-2">
                        <label class=" block text-sm text-gray-600" for="message">Note</label>
                        <textarea class="w-full px-5 py-2 text-gray-700 bg-gray-200 rounded" id="message" name="message" rows="6" 
                          placeholder="Your inquiry.." aria-label="Email">{{$patient->notes}}</textarea>
                          @error('notes') <span class="error text-red-300 p-3 my-5 rounded">{{ $message }}</span> @enderror
                    </div>
                    <div class="mt-6">
                        <button class="px-4 py-1 text-white font-light tracking-wider bg-gray-900 rounded" type="submit">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    
    </div>
</div>

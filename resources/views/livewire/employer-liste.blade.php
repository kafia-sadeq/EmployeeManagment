
<div class="w-full mt-6">
    <div class="bg-white overflow-auto">
        <a href="{{ route('Employer_create') }}" class="px-4 py-4 text-right text-white font-light tracking-wider bg-gray-900 rounded">Create New Employer</a>
        <table class="min-w-full bg-white">
            <thead class="bg-gray-800 text-white">
                <tr>
                   
                    <th class="text-left py-3 px-4 uppercase font-semibold">Name</th>
                    <th class="text-left py-3 px-4 uppercase font-semibold ">Contact</td>
                    <th class="w-1/3 text-left py-3 px-4 uppercase font-semibold ">Email</th>
                    <th class="text-left py-3 px-4 uppercase font-semibold">Department</td>
                    <th class="text-left py-3 px-4 uppercase font-semibold">Action</td>
                </tr>
            </thead>
            <tbody class="text-gray-700">
                @forelse ($employers as $employer)
                <tr class="bg-gray-200">
                    <td class="w-1/3 text-left py-3 px-4">{{$employer->name}}</td>
                    <td class="w-1/3 text-left py-3 px-4">{{$employer->contact}}</td>
                    <td class="w-1/3 text-left py-3 px-4">{{$employer->email}}</td>
                    <td class="w-1/3 text-left py-3 px-4">{{$employer->fonction->libelle}}</td>
                    <td class="w-1/3 text-left py-3 px-4">
                        <a href="{{route('patient.edit',$employer)}}" class="text-blue-300  my-5 rounded hover:bg-blue-400 hover:text-white" >Edite</a>
                        <span wire:click="$emit('delet_Employer',{{$employer->id}})" class="text-red-300  my-5 rounded cursor-pointer hover:bg-red-400 hover:text-white hover:p-4">Delete</span>
                    </td>
                    {{-- <td class="text-left py-3 px-4"><a class="hover:text-blue-500" href="tel:622322662">622322662</a></td>
                    <td class="text-left py-3 px-4"><a class="hover:text-blue-500" href="mailto:jonsmith@mail.com">jonsmith@mail.com</a></td> --}}
                    
                </tr>
                @empty
                <tr>
                    <td>No Patients</td>
                </tr>
                
               @endforelse
            </tbody>
        </table>
    </div>
</div>


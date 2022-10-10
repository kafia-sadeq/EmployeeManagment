
<div class="w-full mt-6">
    <div class="bg-white overflow-auto">
        <table class="min-w-full bg-white">
            <thead class="bg-gray-800 text-white">
                <tr>
                    <th class="w-1/3 text-left py-3 px-4 uppercase font-semibold ">Code</th>
                    <th class="text-left py-3 px-4 uppercase font-semibold">Name</th>
                    <th class="text-left py-3 px-4 uppercase font-semibold ">Contact</td>
                    <th class="w-1/3 text-left py-3 px-4 uppercase font-semibold ">Email</th>
                    <th class="text-left py-3 px-4 uppercase font-semibold">blood_type</td>
                    <th class="text-left py-3 px-4 uppercase font-semibold">Action</td>
                </tr>
            </thead>
            <tbody class="text-gray-700">
                @forelse ($patients as $patient)
                <tr>
                    <td class="w-1/3 text-left py-3 px-4">{{$patient->code}}</td>
                    <td class="w-1/3 text-left py-3 px-4">{{$patient->name}}</td>
                    <td class="w-1/3 text-left py-3 px-4">{{$patient->contact}}</td>
                    <td class="w-1/3 text-left py-3 px-4">{{$patient->email}}</td>
                    <td class="w-1/3 text-left py-3 px-4">{{$patient->blood_type}}</td>
                    <td>
                        <a href="{{route('patient.edit',$patient)}}">Edite</a>
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


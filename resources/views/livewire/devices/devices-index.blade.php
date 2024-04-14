<div class="mt-8 flow-root">
    @if (session()->has('message'))
        <div class="rounded-md bg-green-50 p-4">
            <div class="flex">
                <div class="flex-shrink-0">
                    <svg class="h-5 w-5 text-green-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.857-9.809a.75.75 0 00-1.214-.882l-3.483 4.79-1.88-1.88a.75.75 0 10-1.06 1.061l2.5 2.5a.75.75 0 001.137-.089l4-5.5z" clip-rule="evenodd" />
                    </svg>
                </div>
                <div class="ml-3">
                    <div class="mt-2 text-sm text-green-700">
                        {{ session('message') }}
                    </div>
                </div>
            </div>
        </div>
    @endif
    <div class="-mx-4 -my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
        <div class="inline-block min-w-full py-2 align-middle">
            <table class="min-w-full divide-y divide-gray-300">
                <thead>
                <tr>
                    <th scope="col" class="py-3.5 pl-4 pr-3 text-left text-sm font-semibold text-gray-900 sm:pl-6 lg:pl-8">ID</th>
                    <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">User</th>
                    <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">Device Type</th>
                    <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">Device Identifier</th>
                    <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">
                        Action
                    </th>
                </tr>
                </thead>
                <tbody class="divide-y divide-gray-200 bg-white">
                @foreach($devices as $device)
                <tr>
                    <td class="whitespace-nowrap py-4 pl-4 pr-3 text-sm font-medium text-gray-900 sm:pl-6 lg:pl-8">{{$device->id}}</td>
                    <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">{{$device->user->name}}</td>
                    <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">{{$device->device_type}}</td>
                    <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">{{$device->device_identifier}}</td>
                    <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">
                        <a href="{{ route('device.show', $device->id) }}" class="text-blue-600 hover:text-blue-900 inline-block mr-5">View</a>
                        <a href="{{ route('device.edit', $device->id) }}" class="text-indigo-600 hover:text-indigo-900 inline-block">Edit</a>
                    </td>
                </tr>

                @endforeach
                </tbody>
            </table>
            <div class="my-3">
                {{$devices->links()}}
            </div>
        </div>
    </div>
</div>

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Permissios') }}
        </h2>
    </x-slot>

    <div class="my-4">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="max-w-7xl mx-auto">

                <div class="flex justify-end m-2 p-2">
                    <a href="{{ route('admin.permissions.create') }}"
                        class="px-4 py-2 bg-blue-400 hover:bg-blue-600 rounded text-white">New Permission</a>
                </div>

                <div class="inline-block min-w-full py-2 align-middle">
                    <div class="overflow-hidden shadow ring-1 ring-black ring-opacity-5 md:rounded-lg">
                        <table class="min-w-full divide-y divide-gray-300">
                            <thead class="bg-gray-50">
                                <tr>
                                    <th scope="col"
                                        class="py-3.5 pl-4 pr-3 text-left text-sm font-semibold text-gray-900 sm:pl-6">
                                        #</th>
                                    <th scope="col"
                                        class="py-3.5 pl-4 pr-3 text-left text-sm font-semibold text-gray-900">
                                        Name</th>

                                    <th scope="col"
                                        class="px-3 py-3.5 text-center text-sm font-semibold text-gray-900">
                                    </th>

                                </tr>
                            </thead>
                            <tbody class="divide-y divide-gray-200 bg-white">
                                @foreach ($permissions as $permission)
                                <tr>
                                    <td
                                        class="whitespace-nowrap py-4 pl-4 pr-3 text-sm font-semibold text-gray-900 sm:pl-6">
                                        {{ $loop->index + 1 }}</td>
                                    <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">
                                        {{ $permission->name }}
                                    </td>
                                    <td class="whitespace-nowrap px-3 py-4 text-sm">
                                        <div class="flex">
                                            <a href="{{ route('admin.permissions.edit', $permission->id) }}"
                                                class="text-indigo-700 underline mr-5">Edit</a>

                                            <form
                                                method="POST"
                                                action="{{ route('admin.permissions.destroy', $permission->id) }}"
                                                onsubmit="return confirm('Are you sure ?')">
                                                @csrf
                                                @method('DELETE')

                                                <button class="text-red-700 underline">Delete</button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

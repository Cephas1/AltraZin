<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Magazins') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">

                <div class="p-6 lg:p-8 bg-white border-b border-gray-200 flex items-center">
                    <x-application-logo class="block h-12 w-auto" />

                    <h1 class="ml-4 text-2xl font-medium text-gray-900">
                        Liste des magazins <span class="font-semibold">ALTRAD Congo</span>
                    </h1>
                </div>

                <div class="bg-gray-200 bg-opacity-25 grid grid-cols-1 md:grid-cols-2 gap-6 lg:gap-8 p-6 lg:p-8">
                    <div>
                        <div>
                            <div class="py-12">
                                <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">

                                    <x-button-success class="" onclick="Livewire.emit('openModal', 'new-magazin')"> <i class="fa fa-plus-circle"></i> Nouveau Magazin</x-button-success>

                                    <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                                        <div class="p-6 overflow-hidden overflow-x-auto bg-white border-b border-gray-200">

                                            <div class="min-w-full align-middle">

                                                <table class="min-w-full border divide-y divide-gray-200">
                                                    <thead>
                                                    <tr>
                                                        <th class="px-6 py-3 text-left bg-gray-50">
                                                            <span class="text-xs font-medium leading-4 tracking-wider text-gray-500 uppercase">#</span>
                                                        </th>

                                                        <th class="px-6 py-3 text-left bg-gray-50">
                                                            <span class="text-xs font-medium leading-4 tracking-wider text-gray-500 uppercase">Nom</span>
                                                        </th>
                                                        <th class="px-6 py-3 text-left bg-gray-50">
                                                            <span class="text-xs font-medium leading-4 tracking-wider text-gray-500 uppercase">Description</span>
                                                        </th>
                                                        <th class="px-6 py-3 text-left bg-gray-50">
                                                            <span class="text-xs font-medium leading-4 tracking-wider text-gray-500 uppercase">Actions</span>
                                                        </th>
                                                    </tr>
                                                    </thead>

                                                    <tbody class="bg-white divide-y divide-gray-200 divide-solid">
                                                        @forelse($magazins as $magazin)
                                                            <tr class="bg-white">
                                                                <td class="px-6 py-4 text-sm leading-5 text-gray-900 whitespace-no-wrap">
                                                                    {{ $magazin->id }}
                                                                </td>
                                                                <td class="px-6 py-4 text-sm leading-5 text-gray-900 whitespace-no-wrap">
                                                                    {{ $magazin->name }}
                                                                </td>
                                                                <td class="px-6 py-4 text-sm leading-5 text-gray-900 whitespace-no-wrap">
                                                                    {{ $magazin->description }}
                                                                </td>
                                                                <td class="px-6 py-4 text-sm leading-5 text-gray-900 whitespace-no-wrap">
                                                                    {{-- Edit Button --}}
                                                                    <a title="Voir les détails du magasin" href="#" data-bs-toggle="modal" data-bs-target="#view-magazin"><i class="fa fa-eye"></i></a>
                                                                    <a title="Editer les détails du magasin" href="#" data-bs-toggle="modal" data-bs-target="#edit-magazin"><i class="fa fa-edit"></i></a>
                                                                    <a title="Supprimer le magasin" href="#" data-bs-toggle="modal" data-bs-target="#delete-magazin"><i class="fa fa-trash"></i></a>
                                                                </td>
                                                            </tr>
                                                        @empty
                                                            <tr class="bg-white">
                                                                <td colspan="3" class="px-6 py-4 text-sm leading-5 text-gray-900 whitespace-no-wrap">
                                                                    Aucun magasin trouvé.
                                                                </td>
                                                            </tr>
                                                        @endforelse
                                                    </tbody>
                                                </table>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Modals -->

                <!-- Modals -->

            </div>
        </div>
    </div>
</x-app-layout>

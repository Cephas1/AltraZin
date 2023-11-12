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
                        Détails de magazin <span class="font-semibold">ALTRAD Congo</span>
                    </h1>
                </div>

                <div class="bg-gray-200 bg-opacity-25 grid grid-cols-1 md:grid-cols-2 gap-6 lg:gap-8 p-6 lg:p-8">
                    <div>
                        <div>
                            <div class="py-12">
                                <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
                                    <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                                        <div class="p-6 overflow-hidden overflow-x-auto bg-white border-b border-gray-200">

                                            <div class="min-w-full align-middle">

                                                <x-label>Nom : </x-label>
                                                <x-input :type='text'/>

                                                <x-label>Nom : </x-label>
                                                <x-input :type='text'/>
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

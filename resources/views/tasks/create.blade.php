<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Create Task') }}
        </h2>
    </x-slot>

    <div class="py-12">

        <div class="max-w-3xl mx-auto sm:px-6 lg:px-8">

            <div class="bg-white dark:bg-gray-800
                        overflow-hidden shadow-sm sm:rounded-lg">

                <div class="p-6">

                    <form method="POST"
                          action="{{ route('tasks.store') }}">

                        @csrf

                        {{-- Title --}}
                        <div>
                            <x-input-label for="title" :value="__('Title')" />

                            <x-text-input
                                id="title"
                                class="block mt-1 w-full"
                                type="text"
                                name="title"
                                :value="old('title')"
                                required
                                autofocus
                            />

                            <x-input-error
                                :messages="$errors->get('title')"
                                class="mt-2"
                            />
                        </div>

                        {{-- Description --}}
                        <div class="mt-4">

                            <x-input-label
                                for="description"
                                :value="__('Description')"
                            />

                            <textarea
                                id="description"
                                name="description"
                                rows="6"
                                required
                                class="block mt-1 w-full border-gray-300
                                       dark:border-gray-700 dark:bg-gray-900
                                       dark:text-gray-300 focus:border-indigo-500
                                       dark:focus:border-indigo-600
                                       focus:ring-indigo-500
                                       dark:focus:ring-indigo-600
                                       rounded-md shadow-sm"
                            >{{ old('description') }}</textarea>

                            <x-input-error
                                :messages="$errors->get('description')"
                                class="mt-2"
                            />

                        </div>

                        {{-- Status --}}
                        <div class="mt-4">

                            <x-input-label :value="__('Status')" />

                            <div class="mt-1 text-gray-700 dark:text-gray-300">
                                Pending
                            </div>

                            <p class="mt-1 text-sm text-gray-500">
                                New tasks use the default Pending status.
                            </p>

                        </div>

                        {{-- Buttons --}}
                        <div class="flex items-center justify-end mt-6 gap-3">

                            <a href="{{ route('tasks.index') }}"
                               class="text-sm text-gray-600 dark:text-gray-400
                                      hover:text-gray-900 dark:hover:text-gray-100">
                                Cancel
                            </a>

                            <x-primary-button>
                                {{ __('Create Task') }}
                            </x-primary-button>

                        </div>

                    </form>

                </div>
            </div>
        </div>
    </div>

</x-app-layout>
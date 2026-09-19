<x-app-layout>

    <x-slot name="header">

        <div class="flex justify-between items-center">

            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                {{ __('Task Details') }}
            </h2>

            <a href="{{ route('tasks.edit', $task) }}"
               class="inline-flex items-center px-4 py-2
                      bg-gray-800 dark:bg-gray-200
                      border border-transparent rounded-md
                      font-semibold text-xs text-white
                      dark:text-gray-800 uppercase tracking-widest
                      hover:bg-gray-700 dark:hover:bg-white">
                Edit Task
            </a>

        </div>

    </x-slot>

    <div class="py-12">

        <div class="max-w-3xl mx-auto sm:px-6 lg:px-8">

            <div class="bg-white dark:bg-gray-800
                        overflow-hidden shadow-sm sm:rounded-lg">

                <div class="p-6 text-gray-900 dark:text-gray-100">

                    {{-- Title --}}
                    <div>
                        <h3 class="text-sm font-medium text-gray-500 dark:text-gray-400">
                            Title
                        </h3>

                        <p class="mt-1 text-lg font-semibold">
                            {{ $task->title }}
                        </p>
                    </div>

                    {{-- Description --}}
                    <div class="mt-6">

                        <h3 class="text-sm font-medium text-gray-500 dark:text-gray-400">
                            Description
                        </h3>

                        <p class="mt-1 whitespace-pre-line">
                            {{ $task->description }}
                        </p>

                    </div>

                    {{-- Status --}}
                    <div class="mt-6">

                        <h3 class="text-sm font-medium text-gray-500 dark:text-gray-400">
                            Status
                        </h3>

                        <p class="mt-1">
                            {{ $task->status }}
                        </p>

                    </div>

                    {{-- Created --}}
                    <div class="mt-6">

                        <h3 class="text-sm font-medium text-gray-500 dark:text-gray-400">
                            Created
                        </h3>

                        <p class="mt-1">
                            {{ $task->created_at?->format('M d, Y h:i A') }}
                        </p>

                    </div>

                    <div class="mt-8">

                        <a href="{{ route('tasks.index') }}"
                           class="text-blue-600 dark:text-blue-400 hover:underline">
                            ← Back to Tasks
                        </a>

                    </div>

                </div>
            </div>
        </div>
    </div>

</x-app-layout>
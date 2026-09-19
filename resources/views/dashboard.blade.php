<x-app-layout>
    <x-slot name="header">
        <div>
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                {{ __('Dashboard') }}
            </h2>
            <p class="mt-1 text-sm text-gray-500 dark:text-gray-400">
                Student Task Manager For All students
            </p>
        </div>
    </x-slot>

    <div class="py-8">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

            {{-- Welcome Section --}}
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 sm:p-8">
                    <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-6">

                        <div>
                            <p class="text-sm font-medium text-indigo-600 dark:text-indigo-400">
                                Welcome back
                            </p>

                            <h1 class="mt-1 text-2xl sm:text-3xl font-bold text-gray-900 dark:text-white">
                                {{ Auth::user()->name }}
                            </h1>

                            <p class="mt-2 text-gray-600 dark:text-gray-400">
                                Manage your student tasks and keep track of your work in one place.
                            </p>
                        </div>

                        <div class="shrink-0">
                            <a href="{{ route('tasks.create') }}"
                               class="inline-flex items-center justify-center px-5 py-3
                                      bg-indigo-600 border border-transparent rounded-lg
                                      font-semibold text-sm text-white
                                      hover:bg-indigo-700
                                      focus:outline-none focus:ring-2
                                      focus:ring-indigo-500 focus:ring-offset-2
                                      transition ease-in-out duration-150">

                                <svg class="w-5 h-5 me-2"
                                     fill="none"
                                     stroke="currentColor"
                                     viewBox="0 0 24 24"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round"
                                          stroke-linejoin="round"
                                          stroke-width="2"
                                          d="M12 4v16m8-8H4" />
                                </svg>

                                Create New Task
                            </a>
                        </div>

                    </div>
                </div>
            </div>

            {{-- Main Dashboard Options --}}
            <div class="mt-6 grid grid-cols-1 md:grid-cols-2 gap-6">

                {{-- My Tasks --}}
                <a href="{{ route('tasks.index') }}"
                   class="group block bg-white dark:bg-gray-800
                          overflow-hidden shadow-sm sm:rounded-lg
                          hover:shadow-md transition duration-200">

                    <div class="p-6">

                        <div class="flex items-start">

                            <div class="flex items-center justify-center
                                        w-12 h-12 rounded-lg
                                        bg-indigo-100 dark:bg-indigo-900/40
                                        text-indigo-600 dark:text-indigo-400">

                                <svg class="w-6 h-6"
                                     fill="none"
                                     stroke="currentColor"
                                     viewBox="0 0 24 24"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round"
                                          stroke-linejoin="round"
                                          stroke-width="2"
                                          d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a3 3 0 006 0M9 5a3 3 0 016 0M9 12l2 2 4-4" />
                                </svg>

                            </div>

                            <div class="ms-4 flex-1">

                                <div class="flex items-center justify-between">

                                    <h3 class="text-lg font-semibold
                                               text-gray-900 dark:text-white">
                                        My Tasks
                                    </h3>

                                    <svg class="w-5 h-5 text-gray-400
                                                group-hover:text-indigo-600
                                                group-hover:translate-x-1
                                                transition"
                                         fill="none"
                                         stroke="currentColor"
                                         viewBox="0 0 24 24">
                                        <path stroke-linecap="round"
                                              stroke-linejoin="round"
                                              stroke-width="2"
                                              d="M9 5l7 7-7 7" />
                                    </svg>

                                </div>

                                <p class="mt-2 text-sm
                                          text-gray-600 dark:text-gray-400">
                                    View and manage all of your existing tasks.
                                </p>

                            </div>

                        </div>

                    </div>
                </a>

                {{-- Create Task --}}
                <a href="{{ route('tasks.create') }}"
                   class="group block bg-white dark:bg-gray-800
                          overflow-hidden shadow-sm sm:rounded-lg
                          hover:shadow-md transition duration-200">

                    <div class="p-6">

                        <div class="flex items-start">

                            <div class="flex items-center justify-center
                                        w-12 h-12 rounded-lg
                                        bg-green-100 dark:bg-green-900/40
                                        text-green-600 dark:text-green-400">

                                <svg class="w-6 h-6"
                                     fill="none"
                                     stroke="currentColor"
                                     viewBox="0 0 24 24"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round"
                                          stroke-linejoin="round"
                                          stroke-width="2"
                                          d="M12 4v16m8-8H4" />
                                </svg>

                            </div>

                            <div class="ms-4 flex-1">

                                <div class="flex items-center justify-between">

                                    <h3 class="text-lg font-semibold
                                               text-gray-900 dark:text-white">
                                        Create Task
                                    </h3>

                                    <svg class="w-5 h-5 text-gray-400
                                                group-hover:text-green-600
                                                group-hover:translate-x-1
                                                transition"
                                         fill="none"
                                         stroke="currentColor"
                                         viewBox="0 0 24 24">
                                        <path stroke-linecap="round"
                                              stroke-linejoin="round"
                                              stroke-width="2"
                                              d="M9 5l7 7-7 7" />
                                    </svg>

                                </div>

                                <p class="mt-2 text-sm
                                          text-gray-600 dark:text-gray-400">
                                    Add a new task with a title and description.
                                </p>

                            </div>

                        </div>

                    </div>
                </a>

            </div>

            {{-- Getting Started --}}
            <div class="mt-6 bg-white dark:bg-gray-800
                        overflow-hidden shadow-sm sm:rounded-lg">

                <div class="p-6">

                    <h3 class="text-lg font-semibold
                               text-gray-900 dark:text-white">
                        Getting Started
                    </h3>

                    <p class="mt-1 text-sm
                              text-gray-600 dark:text-gray-400">
                        Using your Student Task Manager is simple.
                    </p>

                    <div class="mt-6 grid grid-cols-1 sm:grid-cols-3 gap-6">

                        {{-- Step 1 --}}
                        <div class="flex items-start">

                            <div class="flex-shrink-0 flex items-center
                                        justify-center w-9 h-9
                                        rounded-full bg-indigo-100
                                        dark:bg-indigo-900/40
                                        text-indigo-600 dark:text-indigo-400
                                        font-bold">
                                1
                            </div>

                            <div class="ms-3">
                                <h4 class="font-medium
                                           text-gray-900 dark:text-white">
                                    Create
                                </h4>

                                <p class="mt-1 text-sm
                                          text-gray-500 dark:text-gray-400">
                                    Add a new task that you need to accomplish.
                                </p>
                            </div>

                        </div>

                        {{-- Step 2 --}}
                        <div class="flex items-start">

                            <div class="flex-shrink-0 flex items-center
                                        justify-center w-9 h-9
                                        rounded-full bg-indigo-100
                                        dark:bg-indigo-900/40
                                        text-indigo-600 dark:text-indigo-400
                                        font-bold">
                                2
                            </div>

                            <div class="ms-3">
                                <h4 class="font-medium
                                           text-gray-900 dark:text-white">
                                    Manage
                                </h4>

                                <p class="mt-1 text-sm
                                          text-gray-500 dark:text-gray-400">
                                    View or edit your task information when needed.
                                </p>
                            </div>

                        </div>

                        {{-- Step 3 --}}
                        <div class="flex items-start">

                            <div class="flex-shrink-0 flex items-center
                                        justify-center w-9 h-9
                                        rounded-full bg-indigo-100
                                        dark:bg-indigo-900/40
                                        text-indigo-600 dark:text-indigo-400
                                        font-bold">
                                3
                            </div>

                            <div class="ms-3">
                                <h4 class="font-medium
                                           text-gray-900 dark:text-white">
                                    Organize
                                </h4>

                                <p class="mt-1 text-sm
                                          text-gray-500 dark:text-gray-400">
                                    Keep your student tasks organized in one place.--
                                </p>
                            </div>

                        </div>

                    </div>

                </div>
            </div>

        </div>
    </div>
</x-app-layout>
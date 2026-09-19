<x-app-layout>

    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                {{ __('My Tasks') }}
            </h2>

            <a href="{{ route('tasks.create') }}"
               class="inline-flex items-center px-4 py-2 bg-gray-800 dark:bg-gray-200
                      border border-transparent rounded-md font-semibold text-xs
                      text-white dark:text-gray-800 uppercase tracking-widest
                      hover:bg-gray-700 dark:hover:bg-white
                      focus:outline-none transition ease-in-out duration-150">
                Add Task
            </a>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            {{-- Success Message --}}
            @if (session('success'))
                <div class="mb-4 p-4 bg-green-100 border border-green-400
                            text-green-700 rounded">
                    {{ session('success') }}
                </div>
            @endif

            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">

                <div class="p-6 text-gray-900 dark:text-gray-100">

                    @if ($tasks->isEmpty())

                        <div class="text-center py-8">
                            <p class="text-gray-500 dark:text-gray-400">
                                No tasks found.
                            </p>

                            <a href="{{ route('tasks.create') }}"
                               class="inline-block mt-4 text-blue-600
                                      dark:text-blue-400 hover:underline">
                                Create your first task
                            </a>
                        </div>

                    @else

                        <div class="overflow-x-auto">

                            <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-700">

                                <thead class="bg-gray-50 dark:bg-gray-700">
                                    <tr>
                                        <th class="px-6 py-3 text-left text-xs font-medium
                                                   text-gray-500 dark:text-gray-300 uppercase">
                                            Title
                                        </th>

                                        <th class="px-6 py-3 text-left text-xs font-medium
                                                   text-gray-500 dark:text-gray-300 uppercase">
                                            Description
                                        </th>

                                        <th class="px-6 py-3 text-left text-xs font-medium
                                                   text-gray-500 dark:text-gray-300 uppercase">
                                            Status
                                        </th>

                                        <th class="px-6 py-3 text-left text-xs font-medium
                                                   text-gray-500 dark:text-gray-300 uppercase">
                                            Created
                                        </th>

                                        <th class="px-6 py-3 text-left text-xs font-medium
                                                   text-gray-500 dark:text-gray-300 uppercase">
                                            Actions
                                        </th>
                                    </tr>
                                </thead>

                                <tbody class="bg-white dark:bg-gray-800
                                             divide-y divide-gray-200 dark:divide-gray-700">

                                    @foreach ($tasks as $task)

                                        <tr>

                                            <td class="px-6 py-4">
                                                {{ $task->title }}
                                            </td>

                                            <td class="px-6 py-4">
                                                {{ $task->description }}
                                            </td>

                                            <td class="px-6 py-4">
                                                <span class="px-2 py-1 text-xs font-semibold
                                                             rounded bg-yellow-100 text-yellow-800">
                                                    {{ $task->status }}
                                                </span>
                                            </td>

                                            <td class="px-6 py-4">
                                                {{ $task->created_at?->format('M d, Y') }}
                                            </td>

                                            <td class="px-6 py-4">

                                                <div class="flex items-center gap-3">

                                                    {{-- View --}}
                                                    <a href="{{ route('tasks.show', $task) }}"
                                                       class="text-blue-600 dark:text-blue-400
                                                              hover:underline">
                                                        View
                                                    </a>

                                                    {{-- Edit --}}
                                                    <a href="{{ route('tasks.edit', $task) }}"
                                                       class="text-indigo-600 dark:text-indigo-400
                                                              hover:underline">
                                                        Edit
                                                    </a>

                                                    {{-- Delete --}}
                                                    <form method="POST"
                                                          action="{{ route('tasks.destroy', $task) }}"
                                                          onsubmit="return confirm('Are you sure you want to delete this task?');">

                                                        @csrf
                                                        @method('DELETE')

                                                        <button type="submit"
                                                                class="text-red-600 dark:text-red-400
                                                                       hover:underline">
                                                            Delete
                                                        </button>

                                                    </form>

                                                </div>

                                            </td>

                                        </tr>

                                    @endforeach

                                </tbody>
                            </table>

                        </div>

                    @endif

                </div>
            </div>
        </div>
    </div>

</x-app-layout>
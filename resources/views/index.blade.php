@extends('layouts.app')
@section('title', 'The list of tasks')

@section('content')
  <nav class="mb-4">
    <a href="{{ route('tasks.create') }}"
      class="btn text-gray-700 underline decoration-pink-500 hover:text-pink-600 transition-all duration-300 ease-in-out">
      Add Task!
    </a>
  </nav>

  <div class="space-y-4">
    @forelse ($tasks as $task)
      <div class="task-item flex items-center justify-between p-4 bg-white shadow-sm rounded-md hover:shadow-lg transition-shadow duration-300 ease-in-out transform hover:scale-105">
        <a href="{{ route('tasks.show', ['task' => $task->id]) }}"
          class="text-lg font-medium {{ $task->completed ? 'line-through text-gray-500' : 'text-gray-900' }} hover:text-pink-600 transition-colors duration-300 ease-in-out">
          {{ $task->title }}
        </a>

        <span class="text-sm text-gray-500">
          <span class="text-xs">{{ $task->created_at->diffForHumans() }}</span>
        </span>
      </div>
    @empty
      <div class="text-center text-gray-500">There are no tasks!</div>
    @endforelse
  </div>

  <!-- Pagination -->
  @if ($tasks->count())
    <nav class="mt-4">
      <div class="flex justify-center">
        {{ $tasks->links() }}
      </div>
    </nav>
  @endif
@endsection

@push('styles')
<style>
  .task-item {
    transition: transform 0.3s ease-in-out, box-shadow 0.3s ease-in-out;
  }

  .task-item:hover {
    transform: scale(1.05);
    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
  }
</style>
@endpush

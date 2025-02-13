@extends('layouts.app')

@section('content')
<div id="content" class="container-fluid px-3 py-3">
    <!-- Wrapper untuk daftar tugas -->
    <div class="row flex-nowrap overflow-auto " style="height: 100vh;">
        @foreach ($lists as $list)
            <div class="col-12 col-md-6 col-lg-3 ">
                {{-- card list & task --}}
                <div class="card shadow-sm mb-3">
                    <div class="card-header  d-flex justify-content-between align-items-center">
                        <h5 class="card-title">{{ $list->name }}</h5>  {{-- nama list --}}
                        <div class="w-25 d-flex gap-2">
                            {{-- tombol tambah task --}}
                            <button type="button" class="btn btn-sm btn-outline-primary d-flex align-items-center justify-content-conter gap-1"
                                data-bs-toggle="modal" data-bs-target="#addTaskModal" data-list="{{ $list->id }}">
                              <i class="bi bi-plus fs-6"></i> 
                            </button>
                            {{-- tombol hapus task --}}
                            <form action="{{ route('lists.destroy', $list->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm p-0">
                                    <i class="bi bi-trash fs-5 text-danger"></i>
                                </button>
                            </form>
                        </div>
                    </div>
                      {{-- isi di dalam list (task) --}}
                      <div class="card-body  d-flex flex-column gap-2 overflow-auto" style="max-height: 60vh;">
                        @foreach ($tasks as $task)
                            @if ($task->list_id == $list->id)
                                {{-- task --}}
                                <div class="card">
                                    <div class="card-header d-flex justify-content-between align-items-center">
                                        <div>
                                            {{-- nama task --}}
                                            <a href=" {{ route('tasks.show',$task->id)}}" class="fw-bold m-0 {{ $task->is_completed ? 'text-decoration-line-through text-muted' : '' }}">
                                                {{ $task->name }}
                                            </a>    
                                            {{-- priorty --}}
                                            <span class="badge text-bg-{{ $task->priorityClass }}">
                                                {{ $task->priority }}
                                            </span>                     
                                        </div>
                                        {{-- fitur edit --}}
                                        <button type="button" class="btn btn-sm btn-warning" onclick="editTask({{ $task->id }})">
                                            <i class="bi bi-pencil-square"></i>
                                        </button>
                                         {{-- fitur hapus task --}}
                                         <form action="{{ route('tasks.destroy', $task->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm p-0">
                                                <i class="bi bi-x-circle text-danger fs-5"></i>
                                            </button>
                                        </form>
                                    </div>
                                </div>
                                 {{-- task berakhir --}}
                            @endif
                        @endforeach
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection
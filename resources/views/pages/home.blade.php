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
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection
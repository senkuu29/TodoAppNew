@extends('layouts.app-details')

@section('content')
{{-- background gambar beserta tulisan berjalan --}}
<div class="hero text-center py-5">
    <h1 class="typing-animation">Create Your Daily List Here</h1>
</div>

<div id="content" class="p-4 bg-light shadow-sm rounded my-5">
    <div class="d-flex justify-content-between align-items-center border-bottom pb-2 mb-4">
        <h1 class="text-primary mb-0 align-items-center">Detail Tugas</h1>
        {{-- tombol kembali ke home/halaman depan --}}
        <a href="{{ route('home') }}" class="btn btn-outline-primary">
            <i class="bi bi-arrow-left"></i> Kembali
        </a>
    </div>

    <div class="row align-items-center">
        <div class="col-md-8">
            <!-- Menampilkan nama tugas dengan teks tebal -->
            <h3 class="mb-2 text-dark font-weight-bold">{{ $task->name }}</h3> 
            {{-- ini bagian name task --}}   

            <!-- Menampilkan deskripsi tugas dengan warna teks abu-abu -->
            <p class="text-muted">{{ $task->description }}</p>                   
        </div>
        
        <div class="col-md-4 text-end">
            <!-- Badge untuk menampilkan tingkat prioritas tugas dengan warna yang sesuai -->
            <span class="badge bg-{{$task->priorityClass}} text-white fs-6 py-2 px-3">
                <i class="bi bi-exclamation-circle me-1"></i> {{$task->priority}}
            </span>

        </div>
    </div>
</div>
@endsection


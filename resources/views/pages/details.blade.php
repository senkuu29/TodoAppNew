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
</div>
@endsection


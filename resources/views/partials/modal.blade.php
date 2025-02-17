{{-- modal tasklist --}}
<div class="modal fade" id="addListModal" tabindex="-1" aria-labelledby="addListModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <form action="{{ route('lists.store') }}" method="POST" class="modal-content">
            @method('POST')
            @csrf
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="addListModalLabel">Tambah List</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="mb-3">
                    <label for="name" class="form-label">Nama</label>
                    <input type="text" class="form-control" id="name" name="name"
                        placeholder="Masukkan nama list">
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                <button type="submit" class="btn btn-primary">Tambah</button>
            </div>
        </form>
    </div>
</div>

{{-- modal task --}}
<div class="modal fade" id="addTaskModal" tabindex="-1" aria-labelledby="addTaskModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <form action="{{ route('tasks.store') }}" method="POST" class="modal-content">
            @method('POST')
            @csrf
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="addTaskModalLabel">Tambah Task</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <input type="text" id="taskListId" name="list_id" hidden>
                <div class="mb-3">
                    <label for="name" class="form-label">Nama</label>
                    <input type="text" class="form-control" id="name" name="name"
                        placeholder="Masukkan nama list">
                </div>
                <div class="mb-3">
                    <label for="name" class="form-label">Deskripsi</label>
                    <input type="text" class="form-control" id="description" name="description"
                        placeholder="Masukkan deskripsi">
                </div>
                <div class="mb-3">
                    <label for="priority" class="form-label">Priority</label>
                    <select class="form-select form  -select" aria-label="Small select example" id="priority" name="priority">
                        <option value="low">low</option>
                        <option value="medium" selected>medium</option>
                        <option value="high">high</option>
                    </select>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                <button type="submit" class="btn btn-primary">Tambah</button>
            </div>
        </form>
    </div>
</div>

{{-- fitur edit --}}
<div class="modal fade" id="editTaskModal" tabindex="-1" aria-labelledby="editTaskModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <form id="editTaskForm" method="POST">
            @method('PUT')
            @csrf
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="editTaskModalLabel">Edit Task</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <input type="hidden" id="editTaskId" name="task_id">
                    <div class="mb-3">
                        <label for="editTaskName" class="form-label">Nama</label>
                        <input type="text" class="form-control" id="editTaskName" name="name">
                    </div>
                    <div class="mb-3">
                        <label for="editTaskDescription" class="form-label">Deskripsi</label>
                        <input type="text" class="form-control" id="editTaskDescription" name="description">
                    </div>
                    <div class="mb-3">
                        <label for="editTaskPriority" class="form-label">Prioritas</label>
                        <select class="form-select" id="editTaskPriority" name="priority">
                            <option value="low">Low</option>
                            <option value="medium">Medium</option>
                            <option value="high">High</option>
                        </select>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                </div>
            </div>
        </form>
    </div>
</div>


{{-- Profil Modal --}}
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header bg-primary text-white">
                <h5 class="modal-title" id="staticBackdropLabel">My Profile</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body text-center">
                <img src="{{asset('bg/my.jpg')}}" alt="User Avatar" class="rounded-circle mb-3 border border-3 border-primary" style="width: 8rem">
                <h5 class="fw-bold">Deden Ahmad Jamil</h5>
                <p class="text-muted">2223590.deden@smkn-2sbg.sch.id</p>
                <hr>
                <p>
                    Saya ingin menjadi mahasiswa di <a href="https://www.upi.edu/">Universitas Pendidikan Indonesia</a> Ilmu Komputer dengan minat dalam pengembangan web, terutama menggunakan <a href="https://laravel.com/">laravel</a> dan <a href="https://getbootstrap.com/">bootstrap</a>. Saya suka mengeksplorasi teknologi baru dan terus belajar untuk meningkatkan keterampilan pemrograman saya. Saat ini, saya sedang mengembangkan aplikasi To-Do List berbasis web dan ingin menciptakan solusi yang efisien serta user-friendly. 🚀
                </p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary"data-bs-dismiss="modal">understand</button>
            </div>
        </div>
    </div>
</div>

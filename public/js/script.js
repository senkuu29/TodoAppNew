// Menunggu hingga seluruh halaman (DOM) selesai dimuat sebelum menjalankan kode
document.addEventListener("DOMContentLoaded", () => {
    
    // Mengatur padding atas pada elemen dengan ID "content" agar tidak tertutup oleh navbar
    const content = document.getElementById("content");
    const navbarHeight = document.querySelector(".navbar").offsetHeight;
    content.style.paddingTop = `${navbarHeight + 16}px`;

    // Menambahkan event listener untuk modal "addTaskModal"
    const addTaskModal = document.getElementById("addTaskModal");

    // Ketika modal ditampilkan, ambil atribut "data-list" dari tombol pemicunya
    addTaskModal.addEventListener("show.bs.modal", (e) => {
        const btn = e.relatedTarget; // Mendapatkan tombol yang membuka modal
        const taskId = btn.getAttribute("data-list"); // Mengambil ID daftar tugas yang dikaitkan
        console.log(taskId); // Menampilkan ID di konsol untuk debugging
        
        // Menetapkan ID daftar tugas ke input tersembunyi dalam modal
        document.getElementById("taskListId").value = taskId;
    });
});

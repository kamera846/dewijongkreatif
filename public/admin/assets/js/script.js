// Logout
document.getElementById("logout").addEventListener("click", function () {
    Swal.fire({
        title: "Are you sure?",
        text: "Your session will end!",
        icon: "warning",
        showCancelButton: true,
        confirmButtonColor: "#3085d6",
        cancelButtonColor: "#d33",
        confirmButtonText: "Yes, Logout",
    }).then((result) => {
        if (result.isConfirmed) {
            window.location.href = "/logout";
        }
    });
});

// Konfirmasi Hapus Pengguna
function hapusPengguna() {
    Swal.fire({
        title: "Are you sure?",
        text: "Ingin menghapus data ini!?",
        icon: "warning",
        showCancelButton: true,
        confirmButtonColor: "#3085d6",
        cancelButtonColor: "#d33",
        confirmButtonText: "Yes, delete it!",
    }).then((result) => {
        if (result.isConfirmed) {
            window.location.href = "/admin/delete-user";
        }
    });
}

// Konfirmasi Hapus Postingan
function hapusPostingan() {
    Swal.fire({
        title: "Are you sure?",
        text: "Ingin menghapus data ini!?",
        icon: "warning",
        showCancelButton: true,
        confirmButtonColor: "#3085d6",
        cancelButtonColor: "#d33",
        confirmButtonText: "Yes, delete it!",
    }).then((result) => {
        if (result.isConfirmed) {
            window.location.href = "/admin/delete-post";
        }
    });
}

// Konfirmasi Hapus Galeri
function hapusGaleri() {
    Swal.fire({
        title: "Are you sure?",
        text: "Ingin menghapus data ini!?",
        icon: "warning",
        showCancelButton: true,
        confirmButtonColor: "#3085d6",
        cancelButtonColor: "#d33",
        confirmButtonText: "Yes, delete it!",
    }).then((result) => {
        if (result.isConfirmed) {
            window.location.href = "/admin/delete-gallery";
        }
    });
}

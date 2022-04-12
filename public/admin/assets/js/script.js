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

// Edit Profil
const edit = document.querySelector(".edit-profil");
const tutup = document.querySelector(".tutup");
const foto = document.getElementById("modal-foto");
const nama = document.getElementById("modal-nama");
const email = document.getElementById("modal-email");
const pekerjaan = document.getElementById("modal-pekerjaan");
const noHp = document.getElementById("modal-no-hp");
const alamat = document.getElementById("modal-alamat");

const modalFooter = document.querySelector(".modal-footer");

const simpan = document.createElement("button");
simpan.innerHTML = "Simpan";
simpan.setAttribute("type", "submit");
simpan.setAttribute("class", "btn btn-primary");

edit.addEventListener("click", function () {
    tutup.innerHTML = "Batal";
    tutup.classList.replace("tutup", "batal");
    tutup.removeAttribute("data-dismiss");
    foto.setAttribute("type", "file");
    nama.removeAttribute("readonly");
    email.removeAttribute("readonly");
    pekerjaan.removeAttribute("readonly");
    noHp.removeAttribute("readonly");
    alamat.removeAttribute("readonly");
    edit.style.display = "none";
    modalFooter.appendChild(simpan);

    // foto.addEventListener("change", function () {
    //     const oFReader = new FileReader();
    //     oFReader.readAsDataURL(foto.files[0]);

    //     oFReader.onload = function (oFREvent) {
    //         document.getElementById("image-preview-update").src =
    //             oFREvent.target.result;
    //     };
    // });

    const batal = document.querySelector(".batal");
    batal.addEventListener("click", function () {
        batal.innerHTML = "Tutup";
        batal.classList.replace("batal", "tutup");
        foto.setAttribute("type", "hidden");
        nama.setAttribute("readonly", "");
        email.setAttribute("readonly", "");
        pekerjaan.setAttribute("readonly", "");
        noHp.setAttribute("readonly", "");
        alamat.setAttribute("readonly", "");
        tutup.setAttribute("data-dismiss", "modal");

        // document.getElementById("image-preview-update").src = "admin/assets/img/theme/team-4.jpg";

        edit.style.display = "inline";
        simpan.remove();
    });
});

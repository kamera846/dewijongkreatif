// Logout
const keluar = document.getElementById("logout");
if (keluar != undefined) {
    keluar.addEventListener("click", function (e) {
        e.preventDefault();
        const formLogout = this.parentElement;

        Swal.fire({
            title: "Are you sure?",
            text: "Yakin ingin keluar?",
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: "#3085d6",
            cancelButtonColor: "#d33",
            confirmButtonText: "Yes, logout",
        }).then((result) => {
            if (result.isConfirmed) {
                formLogout.submit();
            }
        });
    });
}

// hapus data
const hapus = document.getElementById("hapus");
if (hapus != undefined) {
    hapus.addEventListener("click", function (e) {
        e.preventDefault();
        const formHapus = this.parentElement;

        Swal.fire({
            title: "Are you sure?",
            text: "Ingin menghapus data ini?",
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: "#3085d6",
            cancelButtonColor: "#d33",
            confirmButtonText: "Yes, delete it!",
        }).then((result) => {
            if (result.isConfirmed) {
                formHapus.submit();
            }
        });
    });
}

// flashdata
const flashData = document.querySelector(".flash-data").dataset["flashdata"];

if (flashData && flashData !== "gagal") {
    Swal.fire("Sukses", "Berhasil " + flashData + " data!", "success");
} else if (flashData === "gagal") {
    Swal.fire("Gagal", "Ada kesalahan!", "error");
}

// edit kontak
if (document.location.pathname == "/dashboard/contact") {
    const email = document.getElementById("email");
    const noTelp = document.getElementById("no_telp");
    const noWa = document.getElementById("no_wa");
    const alamat = document.getElementById("alamat");

    const edit = document.getElementById("edit");
    const pembungkus = document.getElementById("pembungkus");

    const simpan = document.createElement("button");
    simpan.innerHTML = "Simpan";
    simpan.classList.add("btn");
    simpan.classList.add("btn-primary");
    simpan.setAttribute("type", "submit");

    const batal = document.createElement("button");
    batal.innerHTML = "Batal";
    batal.classList.add("btn");
    batal.classList.add("btn-secondary");
    batal.setAttribute("type", "button");

    edit.addEventListener("click", function () {
        edit.style.display = "none";
        pembungkus.appendChild(simpan);
        pembungkus.appendChild(batal);

        email.removeAttribute("readonly");
        noTelp.removeAttribute("readonly");
        noWa.removeAttribute("readonly");
        alamat.removeAttribute("readonly");

        batal.addEventListener("click", function () {
            location.reload();
        });
    });
}

// edit akun sosmed
if (document.location.pathname == "/dashboard/social") {
    const twitter = document.getElementById("twitter");
    const facebook = document.getElementById("facebook");
    const instagram = document.getElementById("instagram");
    const youtube = document.getElementById("youtube");
    const pinterest = document.getElementById("pinterest");

    const edit = document.getElementById("edit");
    const pembungkus = document.getElementById("pembungkus");

    const simpan = document.createElement("button");
    simpan.innerHTML = "Simpan";
    simpan.classList.add("btn");
    simpan.classList.add("btn-primary");
    simpan.setAttribute("type", "submit");

    const batal = document.createElement("button");
    batal.innerHTML = "Batal";
    batal.classList.add("btn");
    batal.classList.add("btn-secondary");
    batal.setAttribute("type", "button");

    edit.addEventListener("click", function () {
        edit.style.display = "none";
        pembungkus.appendChild(simpan);
        pembungkus.appendChild(batal);

        twitter.removeAttribute("readonly");
        facebook.removeAttribute("readonly");
        instagram.removeAttribute("readonly");
        youtube.removeAttribute("readonly");
        pinterest.removeAttribute("readonly");

        batal.addEventListener("click", function () {
            location.reload();
        });
    });
}

// Logout
const keluar = document.getElementById("logout");
if (!keluar) {
    keluar.addEventListener("click", function (e) {
        e.preventDefault();
        const formLogout = this.parentElement;

        Swal.fire({
            title: "Are you sure?",
            text: "Your auth session will end!",
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
if (!hapus) {
    hapus.addEventListener("click", function (e) {
        e.preventDefault();
        const formHapus = this.parentElement;

        Swal.fire({
            title: "Are you sure?",
            text: "This data will deleted!",
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
let flashdata = document.querySelector(".flash-data");
if (!flashdata) {
    flashData = flashdata.dataset["flashdata"];

    if (flashData !== "success") {
        Swal.fire("Sukses", "Berhasil " + flashData + " data!", "success");
    } else if (flashData === "gagal") {
        Swal.fire("Gagal", "Ada kesalahan!", "error");
    }
}

// edit kontak
if (document.location.pathname === "/dashboard/contact") {
    let email = document.getElementById("email");
    let noTelp = document.getElementById("no_telp");
    let noWa = document.getElementById("no_wa");
    let alamat = document.getElementById("alamat");

    let edit = document.getElementById("edit");
    let pembungkus = document.getElementById("pembungkus");

    let simpan = document.createElement("button");
    simpan.innerHTML = "Simpan";
    simpan.classList.add("btn");
    simpan.classList.add("btn-primary");
    simpan.setAttribute("type", "submit");

    let batal = document.createElement("button");
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
        lokasi.removeAttribute("readonly");
        logo.removeAttribute("readonly");
        favicon.removeAttribute("readonly");
        webTitle.removeAttribute("readonly");

        batal.addEventListener("click", function () {
            location.reload();
        });
    });
}

// edit akun sosmed
if (document.location.pathname === "/dashboard/social") {
    let twitter = document.getElementById("twitter");
    let facebook = document.getElementById("facebook");
    let instagram = document.getElementById("instagram");
    let youtube = document.getElementById("youtube");
    let pinterest = document.getElementById("pinterest");

    let edit = document.getElementById("edit");
    let pembungkus = document.getElementById("pembungkus");

    let simpan = document.createElement("button");
    simpan.innerHTML = "Simpan";
    simpan.classList.add("btn");
    simpan.classList.add("btn-primary");
    simpan.setAttribute("type", "submit");

    let batal = document.createElement("button");
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

// memberitahu batas 200 karakter input deskripsi galelery
function limit(element) {
    const max_chars = 200;
    if (element.value.length > max_chars) {
        element.value = element.value.substr(0, max_chars);
        element.nextElementSibling.classList.remove("d-none");
    } else if (element.value.length < max_chars) {
        element.nextElementSibling.classList.add("d-none");
    }
}

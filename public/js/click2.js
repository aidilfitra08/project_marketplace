function tampilUkuran() {
    let warna = document.getElementById("warna");
    let ukuran = document.getElementById("ukuran");
    if (ukuran.style.display == "none") {
        warna.style.display = "none";
        ukuran.style.display = "block";
    } else {
        warna.style.display = "none";
        ukuran.style.display = "block";
    }
}
function tampilWarna() {
    let warna = document.getElementById("warna");
    let ukuran = document.getElementById("ukuran");
    if (warna.style.display == "none") {
        warna.style.display = "block";
        ukuran.style.display = "none";
    } else {
        warna.style.display = "block";
        ukuran.style.display = "none";
    }
}
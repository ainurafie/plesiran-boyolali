var detailModal = document.getElementById("detailModal");
var setImg = document.createElement("img");

detailModal.addEventListener("show.bs.modal", function (event) {
    var button = event.relatedTarget;
    var wisataImg = button.getAttribute("data-bs-gambar");
    var modalBody = detailModal.querySelector(".modal-body");

    modalBody.prepend(setImg);

    setImg.setAttribute("src", wisataImg);
    setImg.classList.add("rounded", "mx-auto", "d-block", "image-modal");


    var title = button.getAttribute("data-bs-title")
    var deskripsi = button.getAttribute("data-bs-deskripsi");
    var hargaTiket = button.getAttribute("data-bs-hargaTiket");
    var hotel1 = button.getAttribute("data-bs-hotel1");
    var alamatHotel1 = button.getAttribute("data-bs-alamatHotel1");
    var hotel2 = button.getAttribute("data-bs-hotel2");
    var alamatHotel2 = button.getAttribute("data-bs-alamatHotel2");
    var hotel3 = button.getAttribute("data-bs-hotel3");
    var alamatHotel3 = button.getAttribute("data-bs-alamatHotel3");

    var modalTitle = detailModal.querySelector('.title-wisata')
    var modalDeskripsi = detailModal.querySelector(".deskripsi");
    var modalHargaTiket = detailModal.querySelector(".hargaTiket");
    var modalHotel1 = detailModal.querySelector(".hotel1");
    var modalAlamatHotel1 = detailModal.querySelector(".alamatHotel1");
    var modalHotel2 = detailModal.querySelector(".hotel2");
    var modalAlamatHotel2 = detailModal.querySelector(".alamatHotel2");
    var modalHotel3 = detailModal.querySelector(".hotel3");
    var modalAlamatHotel3 = detailModal.querySelector(".alamatHotel3");

    modalTitle.textContent = title;
    modalDeskripsi.textContent = deskripsi;
    modalHargaTiket.textContent = hargaTiket + "/orang";
    modalHotel1.textContent = hotel1;
    modalAlamatHotel1.textContent = alamatHotel1;

    modalHotel2.textContent = hotel2;
    modalAlamatHotel2.textContent = alamatHotel2;

    modalHotel3.textContent = hotel3;
    modalAlamatHotel3.textContent = alamatHotel3;
});

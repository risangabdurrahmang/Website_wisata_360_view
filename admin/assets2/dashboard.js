// Preview Image untuk Tambah dan Ubah
function previewImage() {
  const gambar_tour = document.querySelector(".gambar_tour");
  const imgPreview = document.querySelector(".img-preview");

  const oFReader = new FileReader();
  oFReader.readAsDataURL(gambar_tour.files[0]);

  oFReader.onload = function (oFREvent) {
    imgPreview.src = oFREvent.target.result;
  };
}
function previewImage2() {
  const gambar_detail = document.querySelector(".gambar_detail");
  const imgPreview2 = document.querySelector(".img-preview2");

  const oFReader = new FileReader();
  oFReader.readAsDataURL(gambar_detail.files[0]);

  oFReader.onload = function (oFREvent) {
    imgPreview2.src = oFREvent.target.result;
  };
}
function previewImage3() {
  const gambar_360 = document.querySelector(".gambar_360");
  const imgPreview3 = document.querySelector(".img-preview3");

  const oFReader = new FileReader();
  oFReader.readAsDataURL(gambar_360.files[0]);

  oFReader.onload = function (oFREvent) {
    imgPreview3.src = oFREvent.target.result;
  };
}
function previewImage4() {
  const qrcode = document.querySelector(".qrcode");
  const imgPreview4 = document.querySelector(".img-preview4");

  const oFReader = new FileReader();
  oFReader.readAsDataURL(qrcode.files[0]);

  oFReader.onload = function (oFREvent) {
    imgPreview4.src = oFREvent.target.result;
  };
}

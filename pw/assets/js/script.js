// Preview Image
function previewImage() {
    const picture = document.querySelector('.picture');
    const imgPreview = document.querySelector('.img-preview');
  
    const oFReader = new FileReader();
    oFReader.readAsDataURL(picture.files[0]);
  
    oFReader.onload = function (oFREvent) {
      imgPreview.src = oFREvent.target.result;
    };
  }
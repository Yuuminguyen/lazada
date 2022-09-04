const img = document.querySelector('.upload');
const photo = document.querySelector('#image');
const file = document.querySelector('#file');
const change = document.querySelector('#changebtn');

img.addEventListener('mouseenter', function(){
    changebtn.style.display = "block";
});

img.addEventListener('mouseleave', function(){
    changebtn.style.display = "none";
});

file.addEventListener('change', function(){
    const choosedFile = this.files[0];

    if (choosedFile) {

        const reader = new FileReader(); //FileReader is a predefined function of JS

        reader.addEventListener('load', function(){
            photo.setAttribute('src', reader.result);
        });

        reader.readAsDataURL(choosedFile);
    }
});


$(document).ready(function() {

    $('.image-input').on('change', function() {
        const file = this.files[0];
        const previewImage = $(this).siblings('.preview-image');

        if (file) {
            const reader = new FileReader();
            reader.onload = function() {
            previewImage.attr('src', reader.result);
        };
            reader.readAsDataURL(file);
        } else {
            previewImage.attr('src', '#');
        }
    });

    

});
const previewPhoto = (id = '') => {
    const preview = document.getElementById(`noimage${id}`);
    const imageInput = document.getElementById(`img_file${id}`);
    const label = document.getElementById('label')
    const container = document.getElementById('container')
    
    const file = imageInput.files;
    if (file) {
        const fileReader = new FileReader();
        fileReader.onload = event => {
            preview.src = event.target.result
        }
        fileReader.readAsDataURL(file[0]);
        label.classList.add('hidden')
        container.classList.remove('hidden')
    }
}
function getImage() {
    let i = 0;
    let images = []
    let image_files = ['0713-2', '0752', '2675', '2983', '3584', '3629', '9186', '9399', '9984']
    for (i = 0; i < image_files.length; i++){
      images.push(`<img src='images/IMG_${image_files[i]}.jpg' alt='image'`)
    }
    i = Math.floor(Math.random() * images.length);
    document.getElementById('x').innerHTML = images[i];
  }
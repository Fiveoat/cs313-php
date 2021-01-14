function getImage() {
    let i = 0;
    let images = ["<img src='images/' alt='image'>", "<img src='images/' alt=image>", "<img src='images/' alt='image'>"],
    i = Math.floor(Math.random() * images.length);
    document.getElementById('x').innerHTML = images[i];
}
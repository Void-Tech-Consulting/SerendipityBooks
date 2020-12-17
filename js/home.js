let init_carousel = (section) => {
    let carousel = document.querySelector(`${section} .carousel`);

    let books = carousel.querySelectorAll(".book-card");

    let splits = [0, 3, 6, 7];

    let i = 0;

    let left = document.querySelector(`${section} .header-part .left`);
    let right = document.querySelector(`${section} .header-part .right`);

    let options = {
        inline: "start",
        block: "nearest",
        behavior: "smooth"
    };

    left.addEventListener('click', () => {
        i = (i - 1) % splits.length;
        if (i < 0) i = 0;
        books[splits[i]].scrollIntoView(options);
    });

    right.addEventListener('click', () => {
        i = (i + 1) % splits.length;
        books[splits[i]].scrollIntoView(options);
    });

}
window.onload = () => {
    init_carousel("#bestsellers");
    init_carousel("#favorites");
}
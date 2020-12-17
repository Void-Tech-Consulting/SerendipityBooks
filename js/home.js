let init_carousel = (section) => {
    // works on Safari, but has no smooth scrolling
    // works on Chrome, with smooth scrolling
    // not tested on Firefox, Edge, Brave, etc.
    // probably will not work on Internet Explorer
    // can switch to using Element.scroll() instead of
    // Element.scrollIntoView() if there are browser compatibility issues
    let carousel = document.querySelector(`${section} .carousel`);

    let books = carousel.querySelectorAll(".book");

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
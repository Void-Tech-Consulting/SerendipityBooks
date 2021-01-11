// search bar in desktop
window.addEventListener('DOMContentLoaded', (event) => {
    document.getElementById("search-icon").addEventListener("click", showSearchBar);
    document.getElementById("cancel").addEventListener("click", hideSearchBar);

    function showSearchBar() {
        document.getElementById('top-header').style.display = 'none';
        document.getElementById('search-bar-container').style.display = 'flex';
    }
    function hideSearchBar() {
        document.getElementById('search-bar-container').style.display = 'none';
        document.getElementById('top-header').style.display = 'flex';
    }
});
// search bar mobile
window.addEventListener('DOMContentLoaded', (event) => {
    document.getElementById("mobile-search-icon").addEventListener("click", showMobileSearchBar);
    document.getElementById("mobile-cancel").addEventListener("click", hideMobileSearchBar);

    function showMobileSearchBar() {
        document.getElementById('images').style.display = 'none';
        document.getElementById('mobile-search-bar-container').style.display = 'flex';
    }
    function hideMobileSearchBar() {
        document.getElementById('mobile-search-bar-container').style.display = 'none';
        document.getElementById('images').style.display = 'flex';
    }
});
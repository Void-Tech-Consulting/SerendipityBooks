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
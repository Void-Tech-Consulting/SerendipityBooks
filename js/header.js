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
    // document.getElementById('mobile-icon').addEventListener("click", showMenuPopover)

    function showMobileSearchBar() {
        document.getElementById('top-images').style.display = 'none';
        document.getElementById('mobile-search-bar-container').style.display = 'flex';
        document.getElementById('mobile-header').style.paddingRight = '0px';
    }
    function hideMobileSearchBar() {
        document.getElementById('mobile-search-bar-container').style.display = 'none';
        document.getElementById('top-images').style.display = 'flex';
        document.getElementById('mobile-header').style.paddingRight = '10px';
    }

    function showMenuPopover() {
        document.getElementById('mobile-icon').style.display = 'none';
        document.getElementById('mobile-menu-cancel').style.display = 'block';
        document.getElementById('menu-popover').style.display = 'flex';
    }
});

// Menu popover mobile
window.addEventListener('DOMContentLoaded', (event) => {
    document.getElementById('mobile-icon').addEventListener("click", showMenuPopover);
    document.getElementById('mobile-menu-cancel').addEventListener("click", hideMenuPopover);

    function showMenuPopover() {
        document.getElementById('mobile-icon').style.display = 'none';
        document.getElementById('mobile-menu-cancel').style.display = 'block';
        document.getElementById('menu-popover').style.display = 'flex';
    }
    function hideMenuPopover() {
        document.getElementById('mobile-icon').style.display = 'flex';
        document.getElementById('mobile-menu-cancel').style.display = 'none';
        document.getElementById('menu-popover').style.display = 'none';
    }
});
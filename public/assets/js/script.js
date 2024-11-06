document.addEventListener('DOMContentLoaded', function () {
    const moreInfoLink = document.querySelector('.more-info');
    const toggleText = document.querySelector('.toggle-text');

    moreInfoLink.addEventListener('click', function (event) {
        event.preventDefault(); // Mencegah tautan default
        toggleText.style.display = toggleText.style.display === 'block' ? 'none' : 'block'; // Toggel tampilkan teks
    });
});

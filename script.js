function toggleDarkMode() {
    document.body.classList.toggle('dark-mode');
    const icon = document.getElementById('darkModeToggleIcon');
    icon.classList.toggle('fa-sun');
    icon.classList.toggle('fa-moon');
}

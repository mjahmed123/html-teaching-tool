window.addEventListener('DOMContentLoaded', function () {

  const themeButton = document.getElementById('theme-button');
  
  // Toggles dark mode 
  themeButton.addEventListener("click", function () {
    const isDarkModeEnabled = localStorage.getItem("darkModeEnabled")
    if (isDarkModeEnabled == "true") {
      disableDarkTheme();
      return;
    }
    enableDarkTheme();
  })
});


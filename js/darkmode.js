window.addEventListener('DOMContentLoaded', function () {
  const isDarkModeEnabled = localStorage.getItem("darkModeEnabled");

  if (isDarkModeEnabled == "true" ) {
    enableDarkTheme()
    return;
  } 
  disableDarkTheme();
})


// adds the darkmode styleshee4t
function enableDarkTheme() {
  const link = document.createElement('link');
  link.rel  = 'stylesheet';
  link.href = '/css/darkMode.css'
  link.type = "text/css"
  link.id = "darkModeStyle"
  document.head.appendChild(link);
  localStorage.setItem("darkModeEnabled", "true") 
}
// Removes the darkmode script
function disableDarkTheme() {
  const darkModeStyle = document.getElementById('darkModeStyle');
  if (darkModeStyle != null) {
    document.head.removeChild(darkModeStyle)
  }
  localStorage.setItem("darkModeEnabled", "false")
}
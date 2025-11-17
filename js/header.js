function showResponsiveMenu() {
  var menu = document.getElementById("topnav_responsive_menu");
  var icon = document.getElementById("topnav_hamburger_icon");
  if (menu.className === "") {
    menu.className = "open";
    icon.className = "open";
    document.body.style.overflowY = "hidden";
  } else {
    menu.className = "";                    
    icon.className = "";
    document.body.style.overflowY = "";
  }
}
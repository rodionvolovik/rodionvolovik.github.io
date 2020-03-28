
  // Close the dropdown menu if the user clicks outside of it
  window.onclick = function(event) {
    if (!event.target.matches('.menu_button')) {
        document.getElementById("toggle-menu").classList.remove("active");
        document.getElementById("menu_button").classList.add("fa-bars");
        document.getElementById("menu_button").classList.remove("fa-times");
    }
    else
    {
        document.getElementById("toggle-menu").classList.toggle("active");
        document.getElementById("toggle-menu").classList.toggle("fa-bars");
        document.getElementById("menu_button").classList.toggle("fa-times");
    }
    console.log(event.target);
  }
window.addEventListener('DOMContentLoaded', (event) => {

  /* Change active category on click */
  var categories = document.getElementById("select-categories").children;
  for (let i = 0; i < categories.length; ++i) {
    categories[i].addEventListener("click", function() {
      change_active(0, this);
      
    });
  }

  /* Change active condition on click */
  var conditions = document.getElementById("select-conditions").children;
  for (var i = 0; i < conditions.length; ++i) {
    conditions[i].addEventListener("click", function() {
      change_active(1, this);
    });
  }

  function change_active(num, name) {
    var active = document.getElementsByClassName("selection-active");
    active[num].classList.remove("selection-active");
    name.classList.add("selection-active");
  }
  
  /* DISPLAY */
  // var display = document.getElementsByClassName("display-default");
  // for (var i = 0; i < display.length; ++i) {
  //   display[i].addEventListener("click", function() {
  //     var content = this.nextElementSibling;
      
  //     if (content.style.display === "block") {
  //       content.style.display = "none";
  //     }
  //     else {
  //       content.style.display = "block";
  //     }
  //   });
  // }
});
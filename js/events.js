window.addEventListener('DOMContentLoaded', (event) => {

    var quesbuttons = document.getElementsByClassName("dropButton");
    for (var i = 0; i < quesbuttons.length; ++i) {
      quesbuttons[i].addEventListener("click", function() {
        var dropdownContent = this.nextElementSibling;
        var children = this.children;
        console.log(this);
        this.classList.toggle("typeactive");
        // this.style.border = "none";
        children[0].classList.toggle("titleactive");
    
        if (dropdownContent.style.display === "block") {
          dropdownContent.style.display = "none";
          children[1].className = "fas fa-angle-down";
          this.parentElement.style.display = "contents";
          this.style.marginBottom = "42px"
        }
        else {
          dropdownContent.style.display = "block";
          children[1].className = "fas fa-angle-up";
          this.parentElement.style.display = "block";
          this.style.marginBottom = "0"
        }
      });
    }
    
    });
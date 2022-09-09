$(function () {
    $('.grid-item').waypoint(function () {
        let animation = anime({targets: this.element, translateY: 0, opacity: 1});
    }, {offset: '75%'});
    document.querySelectorAll(".article-grid .grid-item").forEach(element=> {
       element.addEventListener("mouseenter", ()=> {
          let container = element.closest(".article-grid");
          if (container != null) {
              container.querySelectorAll(".grid-item").forEach(gridItem=> {
                 if (gridItem !== element) {
                     gridItem.classList.add("nicht-hover");
                 }
              });
          }
       });
        element.addEventListener("mouseleave", ()=> {
            let container = element.closest(".article-grid");
            if (container != null) {
                container.querySelectorAll(".grid-item").forEach(gridItem=> {
                    if (gridItem !== element) {
                        gridItem.classList.remove("nicht-hover");
                    }
                });
            }
        });
    });
});
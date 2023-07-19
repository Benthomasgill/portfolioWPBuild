// Show/Hide Search bar in the nav

let revealFunction = () => {
    const search = document.querySelector(".search-header");
    if (search.classList.contains('active')) {
        search.classList.remove("active");
    } else {
        search.classList.add("active");
    };
};

//Show/Hide Mobile nav

let revealMenuFunction = () => {
    const menu = document.querySelector(".mobile-nav");
    const navbutton = document.querySelector(".toggle-nav");
    if (menu.classList.contains('active')) {
        menu.classList.remove("active");
        navbutton.classList.remove("active-menu");
        console.log("Click")
    } else {
        menu.classList.add("active");
        navbutton.classList.add("active-menu");
    };
};


// var element = document.getElementById("star");
// var rotation = 0;

// window.addEventListener("scroll", function() {
//     rotation += 2;
//     element.style.transform = "rotate(" + rotation + "deg)";
// });

// Text Banner - Homepage animation

const text = document.getElementById("text");
text.style.marginLeft = "100%";

setInterval(function() {
text.style.marginLeft = (parseInt(text.style.marginLeft) - 1) + "%";
if (parseInt(text.style.marginLeft) <= -1000) {
    text.style.marginLeft = "100%";
}
}, 80);

function resetHoverOpacityWithDelay(item) {
    setTimeout(function() {
      // Remove the inline styles set by :hover
      item.style.opacity = '1';
      item.style.background = '#fff';
    }, 500); // 1000ms (1 second) delay
  }
  
  // Get all elements with class "grid__item"
  const gridItems = document.querySelectorAll('.grid__item');
  
  // Loop through each element and add an event listener for "mouseover"
  gridItems.forEach((item) => {
    item.addEventListener('mouseover', function() {
      // Reset the opacity back to 0 after the delay
      resetHoverOpacityWithDelay(item);
    });
  });

  
  
  
  
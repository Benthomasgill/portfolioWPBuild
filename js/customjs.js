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

// Text Banner - Homepage animation

const text = document.getElementById("text");
text.style.marginLeft = "100%";

setInterval(function() {
text.style.marginLeft = (parseInt(text.style.marginLeft) - 1) + "%";
    if (parseInt(text.style.marginLeft) <= -1000) {
        text.style.marginLeft = "100%";
    }
}, 80);


// JavaScript function to add grid items to the .grid div
function addGridItemsToScreen() {
    const gridParent = document.querySelector('.grid');
    const gridItemWidth = 45; // width of each grid__item in pixels
  
    // Calculate the number of items that will fit horizontally on the screen
    const screenWidth = window.innerWidth;
    const numItemsPerRow = Math.floor(screenWidth / gridItemWidth);
  
    // Calculate the total number of items that will fit on the screen
    const screenHeight = window.innerHeight;
    const numItemsPerColumn = Math.floor(screenHeight / gridItemWidth);
    const totalItems = numItemsPerRow * numItemsPerColumn;
  
    // Add the grid__item elements to the .grid div
    for (let i = 0; i < totalItems; i++) {
      const gridItem = document.createElement('div');
      gridItem.classList.add('grid__item');
      gridParent.appendChild(gridItem);
    }

}
  
// Call the function when the window loads
window.onload = addGridItemsToScreen;

function resetHoverOpacityWithDelay(item) {
    setTimeout(function() {
      // Remove the inline styles set by :hover
      item.style.opacity = '0.7';
      item.style.background = '#fff';
    }, 500); 
    setTimeout(function() {
        // Remove the inline styles set by :hover
        item.style.opacity = '0';
        item.style.background = '#fff';
    }, 5000); 
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


  
// Nav appear at scroll height 

const nav = document.getElementsByClassName('nav-container')[0];
nav.style.backgroundColor = 'none';

window.onscroll = function (event) {
    var scroll = window.pageYOffset;
    if (scroll > 700) {
        // green
        nav.style.backgroundColor = '#180648';
    } else if (scroll < 700) {
        nav.style.backgroundColor = '#ffffff00';
    } 
};

//Lazy loading scripts

const observer = lozad(); // lazy loads elements with default selector as ".lozad"
observer.observe();

lozad('.lozad', {
    load: function(el) {
        el.src = el.dataset.src;
        el.onload = function() {
            el.classList.add('fade')
        }
    }
}).observe();

//Projects alt text overlay function

jQuery(".img").wrap('<div class="alt-wrap"/>');

jQuery(".img").each(function() {
    jQuery(this).after('<p class="alt">' + jQuery(this).attr('alt') + '</p>');
})





/**
 * @description		
 * Vanilla Javascript parallax scrolling of items.
 * Adapted from a jQuery example by Rich Barder
 *
 * @see 	https://codepen.io/RichBarber/pen/gdjPzv
 * @author 	Michael Gary Dean <contact@michaeldean.ca>
 */

window.addEventListener('scroll', function() {

	//elements from the DOM
	//@ TODO this div should be dynamic, or be a class selector or something
	let gridDiv = document.getElementById('featured-content-grid-wrapper-1');	//the div that is styled as display: grid
    var gridChildren = gridDiv.children;				//the divs that contain each grid item

	//Calculate offset of grid item while scrolling
    let scrollTop =  window.pageYOffset || document.documentElement.scrollTop || document.body.scrollTop || 0;
    let oddPos = scrollTop / 3 + 'px';
    let evenPos = scrollTop / 2.5 + 'px';

    //by default, we assume it's an odd column to set the speed.
    var currentOffset = oddPos;

    //Transform CSS for element
    for (var childIndex = 1; childIndex <= gridChildren.length; childIndex++) {
    	currentChild = gridChildren[childIndex];

    	//Set a different speed depending on if the child is in an even or odd column
    	if(childIndex % 2 == 0) {
    		currentOffset = evenPos;
    	}

    	//Offset the grid item
    	currentChild.style.transform='translateY(' + currentOffset + ')';
    }
});
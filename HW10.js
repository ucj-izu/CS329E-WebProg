var images1 = [{id : '1', pic : "puzzle1/img1-1.jpg"}, {id : '2', pic : "puzzle1/img1-2.jpg"}, {id :'3', pic: "puzzle1/img1-3.jpg"}, {id: '4', pic: "puzzle1/img1-4.jpg"}, {id: '5', pic: "puzzle1/img1-5.jpg"},
{id: '6', pic: "puzzle1/img1-6.jpg"}, {id: '7', pic: "puzzle1/img1-7.jpg"},{id: '8', pic: "puzzle1/img1-8.jpg"},{id: '9', pic: "puzzle1/img1-9.jpg"},{id: '10', pic: "puzzle1/img1-10.jpg"},{id: '11', pic: "puzzle1/img1-11.jpg"}, 
{id: '12', pic: "puzzle1/img1-12.jpg"}];

var images2 = [{id: '1', pic: "puzzle2/img2-1.jpg"}, {id: '2', pic: "puzzle2/img2-2.jpg"}, {id: '3', pic: "puzzle2/img2-3.jpg"}, {id: '4', pic: "puzzle2/img2-4.jpg"}, {id: '5', pic: "puzzle2/img2-5.jpg"},
{id: '6', pic: "puzzle2/img2-6.jpg"}, {id: '7', pic: "puzzle2/img2-7.jpg"},{id: '8', pic: "puzzle2/img2-8.jpg"},{id: '9', pic: "puzzle2/img2-9.jpg"},{id: '10', pic: "puzzle2/img2-10.jpg"},{id: '11', pic: "puzzle2/img2-11.jpg"}, 
{id: '12', pic: "puzzle2/img2-12.jpg"}];

var images3 = [{id: '1', pic: "puzzle3/img3-1.jpg"}, {id: '2', pic: "puzzle3/img3-2.jpg"}, {id: '3', pic: "puzzle3/img3-3.jpg"}, {id: '4', pic: "puzzle3/img3-4.jpg"}, {id: '5', pic: "puzzle3/img3-5.jpg"},
{id: '6', pic: "puzzle3/img3-6.jpg"}, {id: '7', pic: "puzzle3/img3-7.jpg"},{id: '8', pic: "puzzle3/img3-8.jpg"},{id: '9', pic: "puzzle3/img3-9.jpg"},{id: '10', pic: "puzzle3/img3-10.jpg"},{id: '11', pic: "puzzle3/img3-11.jpg"}, 
{id: '12', pic: "puzzle3/img3-12.jpg"}];

var timerElement = document.getElementById('timer');
var seconds = 0;
var timerInterval;

function shuffleArray(array) {
    for (let i = array.length - 1; i > 0; i--) {
        const j = Math.floor(Math.random() * (i + 1));
        [array[i], array[j]] = [array[j], array[i]];
    }
    return array;
}


function randomPuzzle() {
    var choice = Math.floor(Math.random() * 3) + 1;


    if (choice == 1) {
        shuffledImages = shuffleArray(images1.slice());
    } else if (choice == 2) {
        shuffledImages = shuffleArray(images2.slice());
    } else {
        shuffledImages = shuffleArray(images3.slice());
    }
    

    for (var i = 0; i < 11; i++) {
        var imgElement = document.getElementById((i));
        imgElement.src = shuffledImages[i]['pic']
    }

    startTimer();
}


function grabber(event) {

    // Set the global variable for the element to be moved
    theElement = event.currentTarget;
 
    // Determine the position of the word to be grabbed, first removing the units from left and top
    posX = parseInt(theElement.style.left);
    posY = parseInt(theElement.style.top);
 
    // Compute the difference between where it is and where the mouse click occurred
    diffX = event.clientX - posX;
    diffY = event.clientY - posY;
 
    // Now register the event handlers for moving and dropping the word
    document.addEventListener("mousemove", mover, true);
    document.addEventListener("mouseup", dropper, true);
 
 }
 
 // The event handler function for moving the word
 function mover(event) {
    // Compute the new position, add the units, and move the word
    theElement.style.left = (event.clientX - diffX) + "px";
    theElement.style.top = (event.clientY - diffY) + "px";
 }
 
 // The event handler function for dropping the word
 function dropper(event) {
    // Unregister the event handlers for mouseup and mousemove
    document.removeEventListener("mouseup", dropper, true);
    document.removeEventListener("mousemove", mover, true);
 }


 
 function startTimer() {
     timerInterval = setInterval(function() {
         seconds++;
         timerElement.textContent = 'Time: ' + seconds + ' second(s)';
     }, 1000);
     console.log('startTimer called');
 }

 function stopTimer() {
    clearInterval(timerInterval);
}

window.onload =function(){
    randomPuzzle();
    
} 
var i = 0;
var images = ["victoria_memorial.jpg", "taj_mahal.jpeg", 
"sun_temple.jpg","qutub_minar.jpg",
"mysore_palace.jpeg", "mehrangarh_fort.jpg",
"hawa_mahal.jpeg", "gateway_of_india.jpg",
"akshardham_temple.jpg", "ajanta_ellora.jpeg", 
"agra_fort.jpg"] ;
var time = 3000;
var startButton = document.getElementById('startButton');
var stopButton = document.getElementById('stopButton');
var playing = false;
var slideInterval





function slideshowImg(){

    document.getElementById('slide').src = images[i]
    
    
    if (i < images.length - 1){
        i++
    }

    else {
        i = 0;
    }

    
}

function pauseSlideshow(){

    playing = false;
    clearInterval(slideInterval);
}

function playSlideshow(){

    playing = true;
    slideInterval = setInterval(slideshowImg, time);
}

function slideshowToggle(){
    if(playing){
        pauseSlideshow();
    }
    else{
        playSlideshow();
    }
};

slideshowImg();


startButton.addEventListener('click', slideshowToggle);
stopButton.addEventListener('click', slideshowToggle);
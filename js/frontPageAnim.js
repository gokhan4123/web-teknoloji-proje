var text = document.querySelector(".words");

var textArray = ["Gökhan Uğraş","a computer engineer","a footballer"];
var typingDelay = 200;
var erasingDelay = 100;
var newTextDelay = 2000;

var textArrayIndex = 0;
var charIndex = 0; 

function type(){
    if(charIndex < textArray[textArrayIndex].length){
        text.textContent += textArray[textArrayIndex].charAt(charIndex);
        charIndex++;
        setTimeout(type,typingDelay);
    }
    else {
        setTimeout(erase,erasingDelay);
    }
}

function erase(){
       if(charIndex > 0){
            text.textContent = textArray[textArrayIndex].substr(0,charIndex-1);
            charIndex--;
            setTimeout(erase,erasingDelay);
        } else{
            textArrayIndex++;
                if(textArrayIndex >= textArray.length){
                    textArrayIndex = 0;
                }
            setTimeout(type,typingDelay);
        }
}

document.addEventListener("DOMContentLoaded",function(){
    setTimeout(type,newTextDelay);   
});
window.onload=function(){
    const modalBg = document.querySelector(".modal-bg");
    const modalClose1 = document.querySelector(".modal-close");
    var elements = document.getElementsByClassName("pic");

    var myFunction = function() {
        if(this.classList.contains("pic")){
            console.log(this);
            this.classList.add('activeScreen');
            this.classList.remove('pic');            
        } else {
            console.log(this);
            this.classList.add('pic');
            this.classList.remove('activeScreen');            
        }
    };
    
    for (var i = 0; i < elements.length; i++) {
        elements[i].addEventListener('click', myFunction, false);
    }
}

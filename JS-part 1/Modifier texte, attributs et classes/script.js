let title = document.getElementById("titre");
let image = document.querySelector("img");
let button = document.querySelector(".btn");

button.addEventListener("click",function(){
    title.innerHTML="new title ";
    title.classList.toggle("highlight");
    image.setAttribute("src","https://tse3.mm.bing.net/th/id/OIP.uHaqRdiMzWSMCR2LzsmhtQHaEZ?cb=12&rs=1&pid=ImgDetMain&o=7&rm=3")
    image.setAttribute("alt","new image")
    
})
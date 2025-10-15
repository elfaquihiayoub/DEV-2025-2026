let title=document.getElementById("message");
let button=document.getElementById("btn-start");

button.addEventListener("click",function(){
    let nom = prompt("what is your name ??")
    if(nom){
        alert("bonjour "+ nom)

    }
    else{
        alert("u didnt entred any name!!!")
    }
})
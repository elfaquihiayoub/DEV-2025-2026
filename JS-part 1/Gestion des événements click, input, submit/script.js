let button= document.getElementById("btn-test");
let saisName=document.querySelector("input");
let form=document.getElementById("form-test");

button.addEventListener("click",function(){
    alert("button clicker")
})
saisName.addEventListener("input",function(){
    console.log("le champe saisi est          "+saisName.value)
})
form.addEventListener("submit",function(a){
    a.preventDefault();
    alert("Formulaire soumis avec le nom :   "+ saisName.value)
})
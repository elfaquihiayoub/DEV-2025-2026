let Num1=Number(prompt('enter the first number'))
let Num2=Number(prompt('enter the secound number'))
let somme=Num1+Num2
let subs=Num1-Num2
let multi=Num1*Num2
let div=Num1/Num2
let choix=prompt('1 pour somme , 2 pour substraction , 3 pour multiplication , 4 pour division')
if (choix==1) {
    alert(somme)
    
}
if(choix==2){
    alert(subs)

}
if(choix==3){
    alert(multi)

}
if(choix==4){
    alert(div)

}
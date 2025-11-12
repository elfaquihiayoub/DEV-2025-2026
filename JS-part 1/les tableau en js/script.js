//object table
let users=[

    {name:"ayoub",age:"19"},
    {name:"youssef",age:"22"},
    {name:"amaghoch",age:"18"},
    {name:"mostafa",age:"22"},
    {name:"jihane",age:"17"},
    {name:"israe",age:"13"},
];

// creat an array
let names=["ayoub","ayoub2","zakariya","monir","brahim","yassir"];
console.log("the names are:",names);

//push an element
names.push("alae");
console.log(names);
// pop an element -remove the last element(without a value)
names.pop();
console.log(names);
// shift an element (remove the first item)
names.shift();
console.log(names);
// unshft an element (add new item in the beginning )
names.unshift("hanae");
console.log(names);
//splice (start,deleted itms,  item1,2,...)
names.splice(1,0,"hafsa","johaina")
console.log(names)
//slice 
let class1=names.slice(0,3);
console.log(class1);
// boucle for to write all the indexes
for (let i = 0; i < names.length; i++) {
    console.log("-", names[i]);
  }
// for (let name of names)
for(let name of names){
    console.log(name)
}
// to write each single slot in the object
users.forEach(function(user)
{
    console.log(user.name+"is"+user.age+"year oldd")
})


/////////////------------------exercise-----------------------////////
let books=[
    {titre:"the beginning after the end",auteur:"turtleme",prix:500},
    {titre:"solo leveling",auteur:"takabu kotu" ,prix:99},
    {titre:"shadow slave", auteur:"yan chowabi" ,prix:300},
    {titre:"lord of mysteries", auteur:"kobu" ,prix:150},
   
];
let AfficherListComplete=function(){
    console.log(books)
}
let AfficherLesTitre=function(){
   for (let i=0; i< books.length; i++) {
    console.log(books[i].titre)
    
   }
}
let TotalDesPrix=function(){
    let total=0
    for (let i=0; i< books.length; i++) {
        
         total=total+books[i].prix
       }
       console.log(total)
}

let plusDeCent=function(){
    for (let i=0; i< books.length; i++) {
        
        if(books[i].prix>100){
            console.log(books[i].titre)


        }
       }
}



AfficherListComplete();
AfficherLesTitre();
TotalDesPrix();
plusDeCent();




let image=document.querySelector("img")
    image.addEventListener("click",function(){

        
    })




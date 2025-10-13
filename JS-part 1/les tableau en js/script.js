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
names.splice(0,1,"hafsa","johaina")
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
users.forEach(function(users)
{
    console.log(users.name+"is"+users.age+"year oldd")
})






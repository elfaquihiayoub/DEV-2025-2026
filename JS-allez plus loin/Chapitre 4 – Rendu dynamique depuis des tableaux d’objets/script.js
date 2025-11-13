let produits = [
    { nom: "lord of mysteries", prix: 900, image: "assets/Lord of Mysteries.webp" },
    { nom: "sword art online", prix: 450, image: "assets/Sword Art Online.webp" },
    { nom: "TBATE", prix: 650, image: "assets/The Beginning After The End.webp" }
  ];
  let container= document.getElementById("catalogue")

  produits.forEach(p=>{
    let cart=document.createElement("div")
    cart.className='carte'
    cart.innerHTML=`
    <img src="${p.image}" alt="${p.nom}">
    <h3>${p.nom}</h3>
    <p>Prix : ${p.prix} €</p>`;
    container.appendChild(cart)
  });
 
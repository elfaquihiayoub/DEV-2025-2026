let produits = [
    { nom: "PC portable", prix: 900 },
    { nom: "Souris", prix: 25 },
    { nom: "Clavier", prix: 40 },
    { nom: "Écran", prix: 150 }
  ];

  let list= document.getElementById('produits')

  let produitesMois100=produits.filter(p=>p.prix < 100)

  if(produitesMois100.length===0){
    list.innerHTML="<li>there is no product under 100</li>"
  }
  else{
    produitesMois100.forEach(p => {
    let li= document.createElement('li')
    li.textContent = `${p.nom} – ${p.prix} €`;
    list.appendChild(li)
        
    });
  }
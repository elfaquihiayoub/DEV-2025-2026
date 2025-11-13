let container=document.getElementById("articles");

fetch('https://jsonplaceholder.typicode.com/posts')
.then(response => response.json())
.then(data =>{
    let ul=document.createElement("ul")
    data.forEach(dataList => {
        let li = document.createElement('li')
        li.textContent=dataList.title
        ul.appendChild(li);
    });
    container.appendChild(ul)
})
.catch(error=>{
    container.innerText='Erreur lors de la récupération des données'
    .console.log(error);
})

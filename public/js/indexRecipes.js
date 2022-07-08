window.addEventListener("load", getRecipeData);

function getRecipeData() {
    const tableBody = document.getElementById("recipeList");
    for(let id=0; id<15; id++) {
        fetch("https://api.spoonacular.com/recipes/" + id + "/information?apiKey=759a512353284f79b501969c5f81f922")
            .then((response) => response.json())
            .then((data) => {
                console.log(data.title);
                if(data.title !== undefined) {
                    const tr = document.createElement("tr");
                    const img_td = document.createElement("td");
                    const title_td = document.createElement("td");
                    const time_td = document.createElement("td");
                    const veg_td = document.createElement("td");
                    const show_td = document.createElement("td");
                    img_td.innerHTML = `<img
                    src=${data.image}
                >`
                    title_td.innerHTML = `<h4>${data.title}</h4>`;
                    time_td.innerText = `${data.readyInMinutes} minutes to make`;
                    if(data.vegetarian === true) {
                        veg_td.innerHTML = `<span class="badge badge-info">vegetarian</span>`;
                    } else {
                        veg_td.innerHTML = `<span class="badge badge-info">non-vegetarian</span>`;
                    }
                    show_td.innerHTML = `<a class="panel-block" href="
                    /recipes/${data.id}">Show</a>`
                    tr.append(img_td, title_td, time_td, veg_td, show_td);
                    tableBody.append(tr);
                }
            })
            .catch((err) => {
                console.log("something went wrong", err);
            });
    }
}


console.log("indexRecipes");

const tableBody = document.getElementById("recipeList");
console.log(tableBody);

/**
 * Example 2
 * Get data from https://swapi.dev/api/people/1/ using Fetch API
 */

// function call
getRecipeData();
/**
 * Function to get the data from the Swapi API and deliver it to the DOM
 */
function getRecipeData() {
    for(let id=0; id<20; id++) {
        fetch("https://api.spoonacular.com/recipes/" + id + "/information?apiKey=1c7af600c31849ffb7c53b4be2921913")
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
                    show_td.innerHTML = `<a class="panel-block" href="{{ route('recipes.show', ${data.id}) }}">Show</a>`
                    tr.append(img_td, title_td, time_td, veg_td, show_td);
                    tableBody.append(tr);
                }
            })
            .catch((err) => {
                console.log("something went wrong", err);
            });
    }
}


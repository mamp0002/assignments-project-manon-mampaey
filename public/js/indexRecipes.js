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
    for(let id=5; id<6; id++) {
        fetch("https://api.spoonacular.com/recipes/" + id + "/information?apiKey=1c7af600c31849ffb7c53b4be2921913")
            .then((response) => response.json())
            .then((data) => {
                console.log(data.title);
                if(data.title !== undefined) {
                    const tr = document.createElement("tr");
                    const td = document.createElement("td");
                    const td1 = document.createElement("td");
                    const td2 = document.createElement("td");
                    const td3 = document.createElement("td");
                    td.innerHTML = `<img
                    src=${data.image}
                    style="width: 50%; height: 50%"
                >`
                    td1.innerHTML = `<h2>${data.title}</h2>`;
                    td2.innerText = `${data.readyInMinutes} minutes to make`;
                    if(data.vegetarian === true) {
                        td3.innerHTML = `<span class="badge badge-info">vegetarian</span>`;
                    } else {
                        td3.innerHTML = `<span class="badge badge-info">non-vegetarian</span>`;
                    }
                    tr.append(td, td1, td2, td3);
                    tableBody.append(tr);
                }
            })
            .catch((err) => {
                console.log("something went wrong", err);
            });
    }
}


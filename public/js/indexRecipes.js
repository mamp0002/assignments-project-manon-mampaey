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
    // for(let id=0; id<20; id++) {
        fetch("https://api.spoonacular.com/recipes/20/information?apiKey=1c7af600c31849ffb7c53b4be2921913")
            .then((response) => response.json())
            .then((data) => {
                console.log(data.title);
                // if(data.title !== undefined) {
                    const td1 = document.createElement("td");
                    const td2 = document.createElement("td");
                    const td3 = document.createElement("td");
                    td1.innerText = data.title;
                    td2.innerText = data.readyInMinutes;
                    if(data.vegetarian === true) {
                        td3.innerHTML = `<span class="badge badge-info">vegetarian</span>`;
                    } else {
                        td3.innerHTML = `<span class="badge badge-info">non-vegetarian</span>`;
                    }

                    tableBody.append(td1);
                    tableBody.append(td2);
                    tableBody.append(td3);
                // }
            })
            .catch((err) => {
                console.log("something went wrong", err);
            });
    // }
}


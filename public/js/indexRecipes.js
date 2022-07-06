console.log("indexRecipes");

const domElement = document.getElementById("starwars");

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
    fetch("https://api.spoonacular.com/recipes/716429")
        .then((response) => response.json())
        .then((data) => {
            const ul = document.createElement("ul");
            ul.innerHTML = `<li>${data.title}</li>`;
            domElement.append(ul);
        })
        .catch((err) => {
            console.log("something went wrong", err);
        });
}


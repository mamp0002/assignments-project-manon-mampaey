console.log("indexRecipes");

const divElement = document.getElementById("recipeList");
console.log(divElement);

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
    fetch("https://api.spoonacular.com/recipes/716429/information?apiKey=471b0a6c06584aa2ba167881136cfad6")
        .then((response) => response.json())
        .then((data) => {
            const ul = document.createElement("ul");
            ul.innerHTML = `<li>${data.title}</li><li>${data.image}</li><li>${data.summary}</li>`;
            divElement.append(ul);
        })
        .catch((err) => {
            console.log("something went wrong", err);
        });
}

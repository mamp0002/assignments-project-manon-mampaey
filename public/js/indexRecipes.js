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
    for(let id=0; id<20; id++) {
        fetch("https://api.spoonacular.com/recipes/" + id + "/information?apiKey=1c7af600c31849ffb7c53b4be2921913")
            .then((response) => response.json())
            .then((data) => {
                console.log(data.title);
                if(data.title !== undefined) {
                    const ul = document.createElement("ul");
                    ul.innerHTML = `<li>${data.title}</li><li>${data.image}</li><li>${data.summary}</li>`;
                    divElement.append(ul);
                }
            })
            .catch((err) => {
                console.log("something went wrong", err);
            });
    }
}


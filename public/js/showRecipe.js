console.log("indexRecipes");

const showElement = document.getElementById("recipe");
console.log(showElement);

/**
 * Example 2
 * Get data from https://swapi.dev/api/people/1/ using Fetch API
 */

// function call
getRecipeData();
/**
 * Function to get the data from the Swapi API and deliver it to the DOM
 */
function getSpecificRecipe() {
    fetch("https://api.spoonacular.com/recipes/716429/information?apiKey=471b0a6c06584aa2ba167881136cfad6")
        .then((response) => response.json())
        .then((data) => {
            const h2 = document.createElement("h2");
            const divImg = document.createElement("div");
            const descr = document.createElement("p");

            h2.innerText = data.title;
            divImg.innerHTML = `<img src=${data.image}>`;
            descr.innerText = data.summary;
            showElement.append(h2, divImg, descr);
        })
        .catch((err) => {
            console.log("something went wrong", err);
        });
}


window.addEventListener("load", init);

function init() {
    const url = (window.location).href;
    const id = url.substring(url.lastIndexOf('/') + 1);
    console.log(id);
    getSpecificRecipe(id);
}

/**
 * Function to get the data from the Swapi API and deliver it to the DOM
 */
function getSpecificRecipe(id) {
    const showElement = document.getElementById("recipe");
    console.log(showElement);
    fetch("https://api.spoonacular.com/recipes/" + id + "/information?apiKey=759a512353284f79b501969c5f81f922")
        .then((response) => response.json())
        .then((data) => {
            const h2 = document.createElement("h2");
            const divImg = document.createElement("div");
            const descr = document.createElement("p");

            h2.innerText = data.title;
            divImg.innerHTML = `<img src=${data.image}>`;
            descr.innerHTML = data.summary;
            showElement.append(h2, divImg, descr);
        })
        .catch((err) => {
            console.log("something went wrong", err);
        });
}


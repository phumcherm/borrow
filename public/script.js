const houses = [
    {
        code: "SM",
        name: "Smith"
    },
    {
        code: "JD",
        name: "Jordan"
    },
    {
        code: "BL",
        name: "Billy"
    }
]

const getFamily = houseCode => {
    switch (houseCode) {
        case "SM":
            return ["Mario", "Karen", "Tayler"];
        case "JD":
            return ["Deen", "Jasmin", "Atlanta", "Lilly"];
        case "BL":
            return ["Robert", "Lulu", "Sia"];
        default:
            return [];
    }
}

const createOptionElement = (text, value) => {
    const element = document.createElement("option");
    element.textContent = text;
    element.value = value;
    return element;
}

const createLiElement = text => {
    const element = document.createElement("li");
    element.textContent = text;
    return element;
}

const houseElment = document.querySelector("select");

houses.forEach(house => {
    houseElment.appendChild(createOptionElement(house.name, house.code));
})

houseElment.addEventListener("change", e => {
    const fams = getFamily(e.target.value);
    const famsElement = document.getElementById("family");

    famsElement.innerHTML = "";
    fams.forEach(fam => {
        famsElement.appendChild(createLiElement(fam));
    })
})

//Get the button
// let mybutton = document.getElementById("btn-back-to-top");

// // When the user scrolls down 20px from the top of the document, show the button
// window.onscroll = function () {
//     scrollFunction();
// };

// function scrollFunction() {
//     if (
//         document.body.scrollTop > 20 ||
//         document.documentElement.scrollTop > 20
//     ) {
//         mybutton.style.display = "block";
//     } else {
//         mybutton.style.display = "none";
//     }
// }
// // When the user clicks on the button, scroll to the top of the document
// mybutton.addEventListener("click", backToTop);

// function backToTop() {
//     document.body.scrollTop = 0;
//     document.documentElement.scrollTop = 0;
// }


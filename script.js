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
    switch(houseCode) {
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
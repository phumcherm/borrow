<!DOCTYPE html>
<html>

<head>
    <title>Shopping Cart</title>
    <style>
        table {
            border-collapse: collapse;
            margin-bottom: 20px;
        }

        table th,
        table td {
            border: 1px solid black;
            padding: 5px;
        }

        button {
            margin-right: 10px;
        }
    </style>
</head>

<body>
    <button onclick="fetchDataAndPopulateTable()">Fetch Data</button>

    <table id="my-table">
        <thead>
            <tr>
                <th>Column 1</th>
                <th>Column 2</th>
                <th>Column 3</th>
            </tr>
        </thead>
        <tbody>
            <!-- Data rows will be added here dynamically -->
        </tbody>
    </table>
    <!-- <div>
        <h3>Shopping Cart:</h3>
        <div id="shoppingCart"></div>
        <p>Total: <span id="totalPrice">0</span></p>
    </div> -->
    <script>
        // const shoppingCart = {};

        // function addToCart(button, isSelected) {
        //     const row = button.parentNode.parentNode;
        //     const itemName = row.cells[0].textContent;
        //     const itemPrice = Number(row.cells[1].textContent);

        //     if (isSelected) {
        //         if (shoppingCart[itemName]) {
        //             shoppingCart[itemName].quantity += 1;
        //         } else {
        //             shoppingCart[itemName] = {
        //                 price: itemPrice,
        //                 quantity: 1
        //             };
        //         }
        //     } else {
        //         if (shoppingCart[itemName]) {
        //             shoppingCart[itemName].quantity -= 1;
        //             if (shoppingCart[itemName].quantity === 0) {
        //                 delete shoppingCart[itemName];
        //             }
        //         }
        //     }

        //     updateShoppingCart();
        // }

        // function updateShoppingCart() {
        //     const cart = document.getElementById("shoppingCart");
        //     cart.innerHTML = "";

        //     let totalPrice = 0;
        //     for (const [itemName, itemData] of Object.entries(shoppingCart)) {
        //         const itemPrice = itemData.price;
        //         const itemQuantity = itemData.quantity;
        //         const itemTotalPrice = itemPrice * itemQuantity;
        //         totalPrice += itemTotalPrice;

        //         const p = document.createElement("p");
        //         p.textContent = `${itemName} x ${itemQuantity} = ${itemTotalPrice}`;
        //         cart.appendChild(p);
        //     }

        //     const total = document.getElementById("totalPrice");
        //     total.textContent = totalPrice;
        // }


        function fetchDataAndPopulateTable() {
            // Make a request to fetch data from the server
            fetch('/path/to/data')
                .then(response => response.json()) // parse the response as JSON
                .then(data => {
                    // Get a reference to the HTML table element
                    const table = document.querySelector('#my-table');

                    // Create a table row for each data item
                    const rows = data.map(item => {
                        // Create a table cell for each property of the data item
                        const cells = Object.keys(item).map(key => {
                            const cell = document.createElement('td');
                            cell.textContent = item[key];
                            return cell;
                        });

                        // Create a table row and add the cells to it
                        const row = document.createElement('tr');
                        cells.forEach(cell => row.appendChild(cell));
                        return row;
                    });

                    // Add the rows to the table
                    table.innerHTML = '';
                    rows.forEach(row => table.appendChild(row));
                })
                .catch(error => console.error(error));
        }
    </script>
</body>

</html>
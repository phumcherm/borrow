<!DOCTYPE html>
<html>

<head>
    <title>Shopping Cart</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }

        th,
        td {
            padding: 8px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        @media (max-width: 768px) {

            /* Change table to card at max-width 768px */
            table {
                display: flex;
                flex-wrap: wrap;
                justify-content: center;
            }

            tr {
                display: flex;
                flex-direction: column;
                margin: 16px;
                box-shadow: 0 0 8px rgba(0, 0, 0, 0.1);
                border-radius: 4px;
                background-color: #fff;
            }

            th,
            td {
                padding: 16px;
                border: none;
            }

            th:first-child,
            td:first-child {
                border-top-left-radius: 4px;
                border-top-right-radius: 4px;
            }

            th:last-child,
            td:last-child {
                border-bottom-left-radius: 4px;
                border-bottom-right-radius: 4px;
            }
        }
    </style>
</head>

<body>
    <table>
        <tr>
            <th>Header 1</th>
            <th>Header 2</th>
            <th>Header 3</th>
        </tr>
        <tr>
            <td>Row 1, Column 1</td>
            <td>Row 1, Column 2</td>
            <td>Row 1, Column 3</td>
        </tr>
        <tr>
            <td>Row 2, Column 1</td>
            <td>Row 2, Column 2</td>
            <td>Row 2, Column 3</td>
        </tr>
    </table>



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


        // function fetchDataAndPopulateTable() {
        //     // Make a request to fetch data from the server
        //     fetch('/path/to/data')
        //         .then(response => response.json()) // parse the response as JSON
        //         .then(data => {
        //             // Get a reference to the HTML table element
        //             const table = document.querySelector('#my-table');

        //             // Create a table row for each data item
        //             const rows = data.map(item => {
        //                 // Create a table cell for each property of the data item
        //                 const cells = Object.keys(item).map(key => {
        //                     const cell = document.createElement('td');
        //                     cell.textContent = item[key];
        //                     return cell;
        //                 });

        //                 // Create a table row and add the cells to it
        //                 const row = document.createElement('tr');
        //                 cells.forEach(cell => row.appendChild(cell));
        //                 return row;
        //             });

        //             // Add the rows to the table
        //             table.innerHTML = '';
        //             rows.forEach(row => table.appendChild(row));
        //         })
        //         .catch(error => console.error(error));
        // }
    </script>
</body>

</html>
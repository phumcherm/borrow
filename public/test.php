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
    <table id="itemsTable">
      <thead>
        <tr>
          <th>Name</th>
          <th>Price</th>
          <th>Category</th>
          <th>Select</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Item 1</td>
          <td>10</td>
          <td>Category A</td>
          <td><button onclick="addToCart(this, true)">+</button><button onclick="addToCart(this, false)">-</button></td>
        </tr>
        <tr>
          <td>Item 2</td>
          <td>20</td>
          <td>Category A</td>
          <td><button onclick="addToCart(this, true)">+</button><button onclick="addToCart(this, false)">-</button></td>
        </tr>
        <tr>
          <td>Item 3</td>
          <td>30</td>
          <td>Category B</td>
          <td><button onclick="addToCart(this, true)">+</button><button onclick="addToCart(this, false)">-</button></td>
        </tr>
      </tbody>
    </table>
    <div>
      <h3>Shopping Cart:</h3>
      <div id="shoppingCart"></div>
      <p>Total: <span id="totalPrice">0</span></p>
    </div>
    <script>
      const shoppingCart = {};

      function addToCart(button, isSelected) {
        const row = button.parentNode.parentNode;
        const itemName = row.cells[0].textContent;
        const itemPrice = Number(row.cells[1].textContent);

        if (isSelected) {
          if (shoppingCart[itemName]) {
            shoppingCart[itemName].quantity += 1;
          } else {
            shoppingCart[itemName] = { price: itemPrice, quantity: 1 };
          }
        } else {
          if (shoppingCart[itemName]) {
            shoppingCart[itemName].quantity -= 1;
            if (shoppingCart[itemName].quantity === 0) {
              delete shoppingCart[itemName];
            }
          }
        }

        updateShoppingCart();
      }

      function updateShoppingCart() {
        const cart = document.getElementById("shoppingCart");
        cart.innerHTML = "";

        let totalPrice = 0;
        for (const [itemName, itemData] of Object.entries(shoppingCart)) {
          const itemPrice = itemData.price;
          const itemQuantity = itemData.quantity;
          const itemTotalPrice = itemPrice * itemQuantity;
          totalPrice += itemTotalPrice;

          const p = document.createElement("p");
          p.textContent = `${itemName} x ${itemQuantity} = ${itemTotalPrice}`;
          cart.appendChild(p);
        }

        const total = document.getElementById("totalPrice");
        total.textContent = totalPrice;
      }
    </script>
  </body>
</html>

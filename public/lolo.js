function tableFunc() {
    var ajax = new XMLHttpRequest();
    var method = "GET";
    var url = "data.php";
    var asynchronous = true;

    ajax.open(method, url, asynchronous);
    ajax.send();
    ajax.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            var data = JSON.parse(this.responseText);
            console.log(data);
 
            var html = "";

            for (var a = 0; a < data.length; a++) {
                var id = data[a].id;
                var updateTime = data[a].updateTime;
                var itemCode = data[a].itemCode;
                var detail = data[a].detail;
                var checkInDate = data[a].checkInDate;
                var brand = data[a].brand;
                var serialNumber = data[a].serialNumber;
                var price = data[a].price;
                var refDoc = data[a].refDoc;
                var room = data[a].room;

                html += "<tr>";
                html += "<td>" + id + "</td>";
                html += "<td>" + updateTime + "</td>";
                html += "<td>" + itemCode + "</td>";
                html += "<td>" + detail + "</td>";
                html += "<td>" + checkInDate + "</td>";
                html += "<td>" + brand + "</td>";
                html += "<td>" + serialNumber + "</td>";
                html += "<td>" + price + "</td>";
                html += "<td>" + refDoc + "</td>";
                html += "<td>" + room + "</td>";
                html += "</tr>";

            }

            document.getElementById("data").innerHTML = html;
        }
    }
}

function rowFunction(textshow) {
    // textshow = "ไปปปปปปปปปป!!!!"
    document.getElementById("show").innerHTML = textshow;
    tableFunc()
    return textshow;
}

function textFunc() {
    // textshow = "ไปปปปปปปปปป!!!!"
    // document.getElementById("show").innerHTML = textshow;
    // var inputtext = prompt("Input test :");
    

    // rowFunction(inputtext);
}

// tableFunc()
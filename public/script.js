
var ajax = new XMLHttpRequest();
var method = "GET";
var url = "stock_data.php";
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



// Script to open and close sidebar
function w3_open() {
    document.getElementById("mySidebar").style.display = "block";
    document.getElementById("myOverlay").style.display = "block";
}

function w3_close() {
    document.getElementById("mySidebar").style.display = "none";
    document.getElementById("myOverlay").style.display = "none";
}

// Modal Image Gallery
function onClick(element) {
    document.getElementById("img01").src = element.src;
    document.getElementById("modal01").style.display = "block";
    var captionText = document.getElementById("caption");
    captionText.innerHTML = element.alt;
}

function myFunction() {
    var input, filter, table, tr, td, i, txtValue;
    input = document.getElementById("myInput");
    filter = input.value.toUpperCase();
    table = document.getElementById("datatable");

    tr = table.getElementsByTagName("tr");
    for (i = 0; i < tr.length; i++) {
        td0 = tr[i].getElementsByTagName("td")[0];
        td3 = tr[i].getElementsByTagName("td")[3];
        if (td3 || td0) {
            var td3Value = td3.textContent || td3.innerText;
            var td0Value = td0.textContent || td0.innerText;
            if (td3Value.toUpperCase().indexOf(filter) > -1 || td0Value.toUpperCase().indexOf(filter) > -1) {
                tr[i].style.display = "";
            } else {
                tr[i].style.display = "none";
            }

        }
    }
}

getPagination('#datatable');

function getPagination(table) {
    var lastPage = 1;

    $('#maxRows')
        .on('change', function (evt) {
            //$('.paginationprev').html('');						// reset pagination

            lastPage = 1;
            $('.pagination')
                .find('li')
                .slice(1, -1)
                .remove();
            var trnum = 0; // reset tr counter
            var maxRows = parseInt($(this).val()); // get Max Rows from select option

            if (maxRows == 5000) {
                $('.pagination').hide();
            } else {
                $('.pagination').show();
            }

            var totalRows = $(table + ' tbody tr').length; // numbers of rows
            $(table + ' tr:gt(0)').each(function () {
                // each TR in  table and not the header
                trnum++; // Start Counter
                if (trnum > maxRows) {
                    // if tr number gt maxRows

                    $(this).hide(); // fade it out
                }
                if (trnum <= maxRows) {
                    $(this).show();
                } // else fade in Important in case if it ..
            }); //  was fade out to fade it in
            if (totalRows > maxRows) {
                // if tr total rows gt max rows option
                var pagenum = Math.ceil(totalRows / maxRows); // ceil total(rows/maxrows) to get ..
                //	numbers of pages
                for (var i = 1; i <= pagenum;) {
                    // for each page append pagination li
                    $('.pagination #prev')
                        .before(
                            '<li data-page="' +
                            i +
                            '">\
								  <span>' +
                            i++ +
                            '<span class="sr-only">(current)</span></span>\
								</li>'
                        )
                        .show();
                } // end for i
            } // end if row count > max rows
            $('.pagination [data-page="1"]').addClass('active'); // add active class to the first li
            $('.pagination li').on('click', function (evt) {
                // on click each page
                evt.stopImmediatePropagation();
                evt.preventDefault();
                var pageNum = $(this).attr('data-page'); // get it's number

                var maxRows = parseInt($('#maxRows').val()); // get Max Rows from select option

                if (pageNum == 'prev') {
                    if (lastPage == 1) {
                        return;
                    }
                    pageNum = --lastPage;
                }
                if (pageNum == 'next') {
                    if (lastPage == $('.pagination li').length - 2) {
                        return;
                    }
                    pageNum = ++lastPage;
                }

                lastPage = pageNum;
                var trIndex = 0; // reset tr counter
                $('.pagination li').removeClass('active'); // remove active class from all li
                $('.pagination [data-page="' + lastPage + '"]').addClass('active'); // add active class to the clicked
                // $(this).addClass('active');					// add active class to the clicked
                limitPagging();
                $(table + ' tr:gt(0)').each(function () {
                    // each tr in table not the header
                    trIndex++; // tr index counter
                    // if tr index gt maxRows*pageNum or lt maxRows*pageNum-maxRows fade if out
                    if (
                        trIndex > maxRows * pageNum ||
                        trIndex <= maxRows * pageNum - maxRows
                    ) {
                        $(this).hide();
                    } else {
                        $(this).show();
                    } //else fade in
                }); // end of for each tr in table
            }); // end of on click pagination list
            limitPagging();
        })
        .val(5)
        .change();

    // end of on select change

    // END OF PAGINATION
}

function limitPagging() {
    // alert($('.pagination li').length)

    if ($('.pagination li').length > 7) {
        if ($('.pagination li.active').attr('data-page') <= 3) {
            $('.pagination li:gt(5)').hide();
            $('.pagination li:lt(5)').show();
            $('.pagination [data-page="next"]').show();
        }
        if ($('.pagination li.active').attr('data-page') > 3) {
            $('.pagination li:gt(0)').hide();
            $('.pagination [data-page="next"]').show();
            for (let i = (parseInt($('.pagination li.active').attr('data-page')) - 2); i <= (parseInt($('.pagination li.active').attr('data-page')) + 2); i++) {
                $('.pagination [data-page="' + i + '"]').show();

            }

        }
    }
}
///////////////////////// ดึงข้อมูลใส่ลงใน select option หน้า repair.php /////////////////////////////////
function selectActive() {

    var selectedValues = document.getElementById("selectedItem").value;

    var dropdown = document.getElementById("active");

    console.log(selectedValues)

    var ajax = new XMLHttpRequest();
    // console.log(ajax)
    var method = "GET";
    var url = "data_repair.php";
    var data = "?selectedActive=" + selectedValues;
    var asynchronous = true;

    ajax.open(method, url + data, asynchronous);
    ajax.send();
    ajax.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            var data = JSON.parse(this.responseText);

            const selectElement = document.getElementById("active");
            selectElement.innerHTML = "";

            // document.createElement("option").text = เลือกงานที่ใช้จากประวัติการยืม;
            // document.createElement("option").value = data[i].activity;
            // dropdown.add(document.createElement("option"))
            
            // const select = document.getElementById("active");
            // const option = new Option("Option Text", "option-value");
            // select.add(option);
            for (var i = 0; i < data.length; i++) {
                var option = document.createElement("option");
                console.log("action : " + data[i].activity);

                option.text = data[i].activity;
                option.value = data[i].activity;
                dropdown.add(option);

            }


        }

        // document.getElementById("data4").innerHTML = data;
    }
}

<!-- 
Responsive HTML Table With Pure CSS - Web Design/UI Design

Code written by:
👨🏻‍⚕️ Coding Design (Jeet Saru)

> You can do whatever you want with the code. However if you love my content, you can **SUBSCRIBED** my YouTube Channel.

🌎link: www.youtube.com/codingdesign 
 -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Convert | Export html Table to CSV & EXCEL File</title>
    <link rel="stylesheet" type="text/css" href="./Public/CSS/styleDT.css">
</head>

<body>
    <main class="table" id="customers_table">
        <section class="table__header">
            <h1>Customer's Orders</h1>
            <div class="input-group">
                <input type="search" placeholder="Search Data...">
                <img src="./Public/Picture/imagesDT/search.png" alt="">
            </div>
            <div class="export__file">
                <label for="export-file" class="export__file-btn" title="Export File"></label>
                <input type="checkbox" id="export-file">
                <div class="export__file-options">
                    <label>Export As &nbsp; &#10140;</label>
                    <label for="export-file" id="toPDF">PDF <img src="./Public/Picture/imagesDT/pdf.png" alt=""></label>
                    <label for="export-file" id="toJSON">JSON <img src="./Public/Picture/imagesDT/json.png" alt=""></label>
                    <label for="export-file" id="toCSV">CSV <img src="./Public/Picture/imagesDT/csv.png" alt=""></label>
                    <label for="export-file" id="toEXCEL">EXCEL <img src="./Public/Picture/imagesDT/excel.png" alt=""></label>
                </div>
            </div>
        </section>
        <section class="table__body">
            <table>
                <thead>
                    <tr>
                        <th> Id <span class="icon-arrow">&UpArrow;</span></th>
                        <th> Customer <span class="icon-arrow">&UpArrow;</span></th>
                        <th> Location <span class="icon-arrow">&UpArrow;</span></th>
                        <th> Order Date <span class="icon-arrow">&UpArrow;</span></th>
                        <th> Status <span class="icon-arrow">&UpArrow;</span></th>
                        <th> Amount <span class="icon-arrow">&UpArrow;</span></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td> 1 </td>
                        <td> <img src="./Public/Picture/imagesDT/Zinzu Chan Lee.jpg" alt="">Zinzu Chan Lee</td>
                        <td> Seoul </td>
                        <td> 17 Dec, 2022 </td>
                        <td>
                            <p class="status delivered">Delivered</p>
                        </td>
                        <td> <strong> $128.90 </strong></td>
                    </tr>
                    <tr>
                        <td> 2 </td>
                        <td><img src="./Public/Picture/imagesDT/Jeet Saru.png" alt=""> Jeet Saru </td>
                        <td> Kathmandu </td>
                        <td> 27 Aug, 2023 </td>
                        <td>
                            <p class="status cancelled">Cancelled</p>
                        </td>
                        <td> <strong>$5350.50</strong> </td>
                    </tr>
                    <tr>
                        <td> 3</td>
                        <td><img src="./Public/Picture/imagesDT/Sonal Gharti.jpg" alt=""> Sonal Gharti </td>
                        <td> Tokyo </td>
                        <td> 14 Mar, 2023 </td>
                        <td>
                            <p class="status shipped">Shipped</p>
                        </td>
                        <td> <strong>$210.40</strong> </td>
                    </tr>
                    <tr>
                        <td> 4</td>
                        <td><img src="./Public/Picture/imagesDT/Alson GC.jpg" alt=""> Alson GC </td>
                        <td> New Delhi </td>
                        <td> 25 May, 2023 </td>
                        <td>
                            <p class="status delivered">Delivered</p>
                        </td>
                        <td> <strong>$149.70</strong> </td>
                    </tr>
                    <tr>
                        <td> 5</td>
                        <td><img src="./Public/Picture/imagesDT/Sarita Limbu.jpg" alt=""> Sarita Limbu </td>
                        <td> Paris </td>
                        <td> 23 Apr, 2023 </td>
                        <td>
                            <p class="status pending">Pending</p>
                        </td>
                        <td> <strong>$399.99</strong> </td>
                    </tr>
                    <tr>
                        <td> 6</td>
                        <td><img src="./Public/Picture/imagesDT/Alex Gonley.jpg" alt=""> Alex Gonley </td>
                        <td> London </td>
                        <td> 23 Apr, 2023 </td>
                        <td>
                            <p class="status cancelled">Cancelled</p>
                        </td>
                        <td> <strong>$399.99</strong> </td>
                    </tr>
                    <tr>
                        <td> 7</td>
                        <td><img src="./Public/Picture/imagesDT/Alson GC.jpg" alt=""> Jeet Saru </td>
                        <td> New York </td>
                        <td> 20 May, 2023 </td>
                        <td>
                            <p class="status delivered">Delivered</p>
                        </td>
                        <td> <strong>$399.99</strong> </td>
                    </tr>
                    <tr>
                        <td> 8</td>
                        <td><img src="./Public/Picture/imagesDT/Sarita Limbu.jpg" alt=""> Aayat Ali Khan </td>
                        <td> Islamabad </td>
                        <td> 30 Feb, 2023 </td>
                        <td>
                            <p class="status pending">Pending</p>
                        </td>
                        <td> <strong>$149.70</strong> </td>
                    </tr>
                    <tr>
                        <td> 9</td>
                        <td><img src="./Public/Picture/imagesDT/Alex Gonley.jpg" alt=""> Alson GC </td>
                        <td> Dhaka </td>
                        <td> 22 Dec, 2023 </td>
                        <td>
                            <p class="status cancelled">Cancelled</p>
                        </td>
                        <td> <strong>$249.99</strong> </td>
                    </tr>
                    <tr>
                        <td> 9</td>
                        <td><img src="./Public/Picture/imagesDT/Alex Gonley.jpg" alt=""> Alson GC </td>
                        <td> Dhaka </td>
                        <td> 22 Dec, 2023 </td>
                        <td>
                            <p class="status cancelled">Cancelled</p>
                        </td>
                        <td> <strong>$249.99</strong> </td>
                    </tr>
                    <tr>
                        <td> 9</td>
                        <td><img src="./Public/Picture/imagesDT/Alex Gonley.jpg" alt=""> Alson GC </td>
                        <td> Dhaka </td>
                        <td> 22 Dec, 2023 </td>
                        <td>
                            <p class="status cancelled">Cancelled</p>
                        </td>
                        <td> <strong>$249.99</strong> </td>
                    </tr>
                    <tr>
                        <td> 9</td>
                        <td><img src="./Public/Picture/imagesDT/Alex Gonley.jpg" alt=""> Alson GC </td>
                        <td> Dhaka </td>
                        <td> 22 Dec, 2023 </td>
                        <td>
                            <p class="status cancelled">Cancelled</p>
                        </td>
                        <td> <strong>$249.99</strong> </td>
                    </tr>
                    <tr>
                        <td> 9</td>
                        <td><img src="./Public/Picture/imagesDT/Alex Gonley.jpg" alt=""> Alson GC </td>
                        <td> Dhaka </td>
                        <td> 22 Dec, 2023 </td>
                        <td>
                            <p class="status cancelled">Cancelled</p>
                        </td>
                        <td> <strong>$249.99</strong> </td>
                    </tr>
                </tbody>
            </table>
        </section>
    </main>
    <script src="./Public/JS/datatable.js"></script>

</body>

</html>

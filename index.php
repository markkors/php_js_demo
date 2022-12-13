<?php
include('sql.php');



?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

</head>
<body>

<div id="table_container"></div>

<script>


fetch('sql.php')
    .then(response => response.json())
    .then(data =>
        make_product_table(data))
    .catch(error => console.log(error));

function make_product_table(d) {
    console.log(d);
    let c = document.getElementById('table_container');
    for(let i =0;i<d.length;i++) {
        let de = document.createElement("div");
        de.innerHTML= `<a href="#">${d[i].naam}</a>`;
        de.addEventListener('click', function (event) {
            console.log(event.target.innerText);
        });
        c.appendChild(de);
    }
}

</script>


</body>
</html>

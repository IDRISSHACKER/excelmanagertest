<?php

require __DIR__ . '/vendor/autoload.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <section class="input">
        <input type="file" class="img">
    </section>
    <section class="">
        <textarea name="" id="" cols="30" rows="10" class="output"></textarea>
        <img src="" class="alt" alt="">
        <a href="" download="" class="dwn">Download file</a>
        <div>

        </div>
    </section>
</body>

<script>
    let file = document.querySelector(".img");
    file.addEventListener("change", (e) => {
        let output = document.querySelector(".output");
        let img = document.querySelector(".img").files[0];
        let url = URL.createObjectURL(img)
        let download = document.querySelector(".dwn")

        let reader = new FileReader()

        reader.onload = () => {
            const name = img.name
            var blob = reader.result;
            output.textContent = blob;

            document.querySelector(".alt").src = url
            download.download = name
            download.href = url

        }

        reader.readAsDataURL(img);



    })
</script>

</html>
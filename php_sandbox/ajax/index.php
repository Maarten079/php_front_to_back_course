<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>AJAX</title>
    <link rel="stylesheet" href="bootstrap.css">
    <script>
        function showSuggestion(str) {

            if (str.length == 0) {
                document.getElementById('output').innerHTML = '';
            } else {
                // AJAX REQUEST
                // const xhr = new XMLHttpRequest();
                //
                // xhr.open('GET', 'suggest.php?q=' + str, true);
                //
                // xhr.onload = function () {
                //     if (this.status == 200) {
                //         document.getElementById('output').innerHTML = this.responseText;
                //
                //     }
                // }
                // xhr.send();
                let response = new Promise((resolve, reject) => {
                    fetch('suggest.php?q=' + str)
                        .then(res => res.text())
                        .then(data => resolve(data))
                        .catch(err => reject(err));
                });
                response.then(data => document.getElementById('output').innerHTML = data);
            }
        }

    </script>
</head>
<body>
<div class="container">
    <h1>Search user</h1>
    <form>
        Search User: <input type="text" class="form-control" onkeyup="showSuggestion(this.value)">
    </form>
    <p>Suggestions: <span id="output" style="font-weight:bold"></span></p>
</div>
</body>
</html>
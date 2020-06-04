<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>URL SHARER</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
<div class="col-md-4 m-auto text-center">
    <div class="card">
        <div class="card-body">
            <div class="row">
                <?php
                const DEFAULT_URL = 'http://www.google.com';
                require_once 'sharer.php';

                $sharer = new sharer();
                echo $sharer->facebook(DEFAULT_URL).'<br/>';
                echo $sharer->twitter(DEFAULT_URL).'<br/>';
                echo $sharer->whatsapp(DEFAULT_URL).'<br/>';
                echo $sharer->linkedin(DEFAULT_URL).'<br/>';
                echo $sharer->messenger(DEFAULT_URL).'<br/>';
                echo $sharer->flipboard(DEFAULT_URL).'<br/>';
                echo $sharer->mail(DEFAULT_URL).'<br/>';
                echo $sharer->copy(DEFAULT_URL).'<br/>';
                ?>
            </div>
        </div>
    </div>
</div>


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script type="text/javascript">
    $('.copyboard').on('click', function (e) {
        e.preventDefault();

        let copyText = $(this).attr('data-text');
        let textarea = document.createElement("textarea");

        textarea.textContent = copyText;
        textarea.style.position = "fixed"; // Prevent scrolling to bottom of page in MS Edge.

        document.body.appendChild(textarea);
        textarea.select();
        document.execCommand("copy");

        document.body.removeChild(textarea);
        document.getElementById('button').innerHTML = "copied";
    })
</script>
</body>
</html>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>mi sitio web</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-ligth md-4">
        <div class="container">
            <a href="/" class="navbar-brand h1">FW</a>
            <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a href="/" class="nav-link">Home</a>
            </li>
            </ul>
        </div>
    </nav>
    
    <div class="container">
         <div class="row">
               <?php  echo $content; ?>
          </div>
    </div>
</body>
</html>
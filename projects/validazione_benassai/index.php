<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Validazione</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
<body>
    <?php
    ?>

    <div class="container text-center mx-auto my-3">
        <form method="POST" action="./pages/contact.php" onsubmit="return validate_form()">
            <div class="mb-3">
                <label for="nameInput" class="form-label">Name</label>
                <input type="text" class="form-control" pattern="^[a-zA-Z ]*[a-zA-Z]+[a-zA-Z ]*$" name="name" id="nameInput">
            </div>
            <div class="mb-3">
                <label for="emailInput" class="form-label">Email address</label>
                <input type="email" class="form-control" name="email" id="emailInput">
            </div>
            <div class="mb-3">
                <label for="messageInput" class="form-label">Message</label>
                <input type="text" maxlength="300" class="form-control" name="message" id="messageInput">
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
    
    <script src="./js/script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>
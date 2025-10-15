<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prenotazione</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
<body>
    
    <form class="text-center w-50 mx-auto" action="./pages/bookinghandler.php" method="POST">
        <div class="mb-3">
            <label for="name" class="form-label">Nome</label>
            <input type="text" id="name" name="name" class="form-control" placeholder="name">
        </div>
        <div class="mb-3">
            <label for="surname" class="form-label">Cognome</label>
            <input type="text" id="surname" name="surname" class="form-control" placeholder="surname">
        </div>
        <div class="mb-3">
            <label for="table" class="form-label">Numero tavolo</label>
            <select class="form-select" id="table" name="table" aria-label="Default select example">
                <option selected value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="time" class="form-label">Orario</label>
            <input type="time" id="time" name="time" class="form-control">
        </div>
        <div class="mb-3">
            <label for="notes" class="form-label">Note</label>
            <input type="textarea" id="notes" name="notes" class="form-control" placeholder="notes">
        </div>
        <div class="w-25 mx-auto">
            <div class="form-check">
                <label class="form-check-label" for="wantStarter">
                    Antipasto
                </label>
                <input class="form-check-input" type="checkbox" value="" id="wantStarter" name="wantStarter">
            </div>
            <div class="form-check">
                <label class="form-check-label" for="wantFirstDish">
                    Primo
                </label>
                <input class="form-check-input" type="checkbox" value="" id="wantFirstDish" name="wantFirstDish">
            </div>
            <div class="form-check">
                <label class="form-check-label" for="wantSecondDish">
                    Secondo
                </label>
                <input class="form-check-input" type="checkbox" value="" id="wantSecondDish" name="wantSecondDish">
            </div>
        </div>
        <div class="w-25 mx-auto">
            <div class="form-check">
                <label class="form-check-label" for="parkingModeMonitored">
                    Parcheggio custodito
                </label>
                <input checked class="form-check-input" type="radio" value="1" id="parkingModeMonitored" name="parkingMode">
            </div>
            <div class="form-check">
                <label class="form-check-label" for="parkingModeUnmonitored">
                    Parcheggio non custodito
                </label>
                <input class="form-check-input" type="radio" value="2" id="parkingModeUnmonitored" name="parkingMode">
            </div>
            <div class="form-check">
                <label class="form-check-label" for="parkingModeNo">
                    No parcheggio
                </label>
                <input class="form-check-input" type="radio" value="0" id="parkingModeNo" name="parkingMode">
            </div>
        </div>

        <button type="submit" class="btn btn-primary">Invia</button>
    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>
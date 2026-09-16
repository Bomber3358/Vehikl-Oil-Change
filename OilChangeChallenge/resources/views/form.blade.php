<html>
    <head>
        <title>Oil Change Form</title>
    </head>
    <body>
        @if ($errors->any())
            <div>
                @foreach ($errors->all() as $error)
                    <p>{{ $error }}</p>
                @endforeach
            </div>
        @endif

        <form action="/check" method="POST">
            <label for="currOdometer">Current odometer value</form><br>
            <input type = "text" id = "currOdometer", name = "currOdometer" required><br>
            <label for="lastDate">Date of prior change</form><br>
            <input type = "date" id = "lastDate", name = "lastDate" required><br>
            <label for="prevOdometer">Odometer at last change</form><br>
            <input type = "text" id = "prevOdometer", name = "prevOdometer" required><br><br>
            <input type="submit" value="Submit">
        </form>
    </body>
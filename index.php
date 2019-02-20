<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Horoscope</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="style.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="script.js"></script>
    <script>;</script>
</head>
<body>
    <h1>Horoskop</h1>
    <div id="wrapper">
        
        <div id="content">
        </div>

        Fyll i ditt personnummer (ååmmdd) för att se ditt stjärntecken! <br/> <br/>
        <input type="number" placeholder="ååmmdd" name="personalNumber" id="personalNumber"/>
        <div id="buttonsDiv">
            <div id="saveMyHoroscopeDiv">
                <button id="test" onclick="saveHoroscope()">Spara mitt horoscop</button>
            </div>
            
            <div id="updateMyHoroscopeDiv">
                <button onclick="updateHoroscope()">Uppdatera mitt horoscop</button>
            </div>
            <div id="eraseDiv">
                <button onclick="eraseHoroscope()">Radera mitt horoscop</button>
            </div>
        </div>
    </div>
<script>
    runView();
</script>

</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Emergency Call</title>
    <style>
        .emergency-button {
            background-color: red;
            color: white;
            padding: 15px 25px;
            font-size: 20px;
            border: none;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <button class="emergency-button" onclick="makeEmergencyCall()">Emergency Call</button>

    <script>
        function makeEmergencyCall() {
            window.location.href = "tel:9872176127"; // Replace 911 with the desired emergency number
        }
    </script>
</body>
</html>
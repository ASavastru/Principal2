<!doctype html>
<html lang="en">
<head>
    <link rel="stylesheet" href="Styles/Calendar.css">
    <script src="Tutorials/dateTimeMoment.js" defer></script>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Calendar</title>
</head>

<body>
<div id="container">

    <div id="header">
        <div id="monthDisplay"></div>
        <div>
            <button id="backButton">Back</button>
            <button id="nextButton">Next</button>
        </div>
    </div>

    <hr/>

    <div id="weekdays">
        <div>Monday</div>
        <div>Tuesday</div>
        <div>Wednesday</div>
        <div>Thursday</div>
        <div>Friday</div>
        <div>Saturday</div>
        <div>Sunday</div>
    </div>

    <hr/>

    <div id="calendar"></div>

    <hr/>

    <div id="employees"></div>
</div>

<div id="newAppointmentModal">
    <h2>New Appointment</h2>

    <input id="appointmentTitleInput" placeholder="Appointment Title"/>

    <button id="saveButton">Save</button>
    <button id="cancelButton">Cancel</button>
</div>

<div id="deleteAppointmentModal">
    <h2>Appointment</h2>

    <p id="appointmentText"></p>

    <button id="deleteButton">Delete</button>
    <button id="closeButton">Close</button>
</div>

<div id="modalBackDrop"></div>

<script src="Scripts/script.js"></script>

</body>
</html>

<!--

on refresh
show current month and colour current day differently
like ubuntu calendar

look up "moment.js"

do calendar in php
learn php + javascript + sql + css + html

-->
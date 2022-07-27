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
        <table class="monthName">
            <tr>
                <td style="align-content: start" class="buttonPrev">&#10094</td>
                <td style="align-content: space-between">JULY</td>
                <td style="align-content: end" class="buttonNext">&#10095</td>
            </tr>
        </table>
    </div>
    <div id="weekdays">
        <table class="daysTable">
            <tr>
                <td class="weekdaysHeader">Mo</td>
                <td class="weekdaysHeader">Tu</td>
                <td class="weekdaysHeader">We</td>
                <td class="weekdaysHeader">Th</td>
                <td class="weekdaysHeader">Fr</td>
                <td class="weekdaysHeader">Sa</td>
                <td class="weekdaysHeader">Su</td>
            </tr>
            <tr>
                <td class="outOfMonth">27</td>
                <td class="outOfMonth">28</td>
                <td class="outOfMonth">29</td>
                <td class="outOfMonth">30</td>
                <td class="inMonth" data-date="2022-07-01">01</td>
                <td class="inMonth" data-date="2022-07-02">02</td>
                <td class="inMonth" data-date="2022-07-03">03</td>
            </tr>
            <tr>
                <td class="inMonth" data-date="2022-07-04">04</td>
                <td class="inMonth" data-date="2022-07-05">05</td>
                <td class="inMonth" data-date="2022-07-06">06</td>
                <td class="inMonth" data-date="2022-07-07">07</td>
                <td class="inMonth" data-date="2022-07-08">08</td>
                <td class="inMonth" data-date="2022-07-09">09</td>
                <td class="inMonth" data-date="2022-07-10">10</td>
            </tr>
            <tr class="rowTables">
                <td class="inMonth" data-date="2022-07-11">11</td>
                <td class="inMonth" data-date="2022-07-12">12</td>
                <td class="inMonth" data-date="2022-07-13">13</td>
                <td class="inMonth" data-date="2022-07-14">14</td>
                <td class="inMonth" data-date="2022-07-15">15</td>
                <td class="inMonth" data-date="2022-07-16">16</td>
                <td class="inMonth" data-date="2022-07-17">17</td>
            </tr>
            <tr>
                <td class="inMonth" data-date="2022-07-18">18</td>
                <td class="inMonth" data-date="2022-07-19">19</td>
                <td class="inMonth" data-date="2022-07-20">20</td>
                <td class="inMonth" data-date="2022-07-21">21</td>
                <td class="inMonth" data-date="2022-07-22">22</td>
                <td class="inMonth" data-date="2022-07-23">23</td>
                <td class="inMonth" data-date="2022-07-24">24</td>
            </tr>
            <tr>
                <td class="inMonth" data-date="2022-07-25">25</td>
                <td class="inMonth" data-date="2022-07-26">26</td>
                <td class="inMonth" data-date="2022-07-27">27</td>
                <td class="inMonth" data-date="2022-07-28">28</td>
                <td class="inMonth" data-date="2022-07-29">29</td>
                <td class="inMonth" data-date="2022-07-30">30</td>
                <td class="inMonth" data-date="2022-07-31">31</td>
            </tr>
            <tr>
                <td class="outOfMonth">01</td>
                <td class="outOfMonth">02</td>
                <td class="outOfMonth">03</td>
                <td class="outOfMonth">04</td>
                <td class="outOfMonth">05</td>
                <td class="outOfMonth">06</td>
                <td class="outOfMonth">07</td>
            </tr>
        </table>
    </div>
    <div>
        <table class="employeeTable">
            <tr>
                <td class="employeeTd"><img class="employeeImage" src="Resources/Images/emp_1.jpg" alt="employee_1"></td>
                <td class="employeeName">Employee #1</td>
                <td>appointment_placeholder</td>
            </tr>
            <tr>
                <td><img class="employeeImage" src="Resources/Images/emp_2.jpg" alt="employee_2"></td>
                <td class="employeeName">Employee #2</td>
                <td>appointment_placeholder</td>
            </tr>
        </table>
    </div>
</div>

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
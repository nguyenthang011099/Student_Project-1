<!DOCTYPE html>
<html>
<head>
    <style>
        table {
            width:100%;
        }
        table, th, td {
            border: 1px solid #1000b1;
            border-collapse: collapse;
        }
        th, td {
            padding: 15px;
            text-align: left;
        }
        table#t01 tr:nth-child(even) {
            background-color: #eee;
        }
        table#t01 tr:nth-child(odd) {
            background-color: #fdffbb;
        }
        table#t01 th {
            background-color: #bdac83;
            color: #f4fff0;
        }
    </style>
</head>
<body>

<h2>Students_HUST </h2>


<br>

<table id="t01">
    <tr>
        <th>Student ID</th>
        <th>Firstname</th>
        <th>Lastname</th>
        <th>Telephone</th>
        <th>Address</th>
        <th>Email</th>
        <th>PassWord</th>
    </tr>


    @foreach($students as $s)
        <tr>
            <td>{{$s['Student ID']}}</td>
            <td>{{$s['FirstName']}}</td>
            <td>{{$s['LastName']}}</td>
            <td>{{$s['Telephone']}}</td>
            <td>{{$s['Address']}}</td>
            <td>{{$s['Email']}}</td>
            <td>{{$s['PassWord']}}</td>
        </tr>
    @endforeach
</table>

</body>
</html>

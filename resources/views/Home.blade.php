<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Students</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .centered-div {
            text-align: center;
        }

        table {
            border-collapse: collapse;
            width: 100%;
            margin-bottom: 20px;
        }

        table, th, td {
            border: 1px solid black;
        }

        th, td {
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }

        /* Add styles for the button */
        .admin-button {
            position: absolute;
            top: 10px;
            right: 10px;
            padding: 10px;
            background-color: #3490dc;
            color: #ffffff;
            text-decoration: none;
            border-radius: 5px;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <a href="/admin" class="admin-button">Go to Admin</a>/
    
    <div class="centered-div">
        <table>
            <tr>
                <th>Name</th>
                <th>RollNo.</th>
            </tr>
            @foreach($data as $student)
            <tr>
                <td>{{$student->name}}</td>
                <td>{{$student->rollNo}}</td>
            </tr>
            @endforeach
        </table>
    </div>
</body>
</html>

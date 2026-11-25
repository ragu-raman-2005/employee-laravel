
<!DOCTYPE html>
<html>
<head>
    <title>Employee Details</title>
    <style>
        body {
            font-family: Arial;
            background: #f4f6f9;
            padding: 30px;
        }

        .container {
            width: 500px;
            margin: auto;
            background: white;
            padding: 25px;
            border-radius: 10px;
        }

        p {
            padding: 10px;
            border-bottom: 1px solid #ddd;
        }
    </style>
</head>
<body>

<div class="container">

    <h2>Employee Details</h2>

    <p><strong>ID:</strong> {{ $employee->id }}</p>
    <p><strong>Name:</strong> {{ $employee->name }}</p>
    <p><strong>Email:</strong> {{ $employee->email }}</p>
    <p><strong>Phone:</strong> {{ $employee->phone }}</p>
    <p><strong>Designation:</strong> {{ $employee->designation }}</p>
    <p><strong>Department:</strong> {{ $employee->department }}</p>
    <p><strong>Salary:</strong> {{ $employee->salary }}</p>
    <p><strong>Date of Joining:</strong> {{ $employee->date_of_joining }}</p>

    <a href="{{ route('employees.index') }}">Back to Employee List</a>

</div>

</body>
</html>

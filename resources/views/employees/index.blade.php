
<!DOCTYPE html>
<html>
<head>
    <title>Employee Management</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f4f6f9;
            padding: 30px;
        }

        h1 {
            color: #333;
        }

        table {
            width: 100%;
            background: white;
            border-collapse: collapse;
        }

        th, td {
            padding: 12px;
            border: 1px solid #ddd;
            text-align: left;
        }

        th {
            background: #263b80;
            color: white;
        }

        a, button {
            padding: 7px 12px;
            text-decoration: none;
            cursor: pointer;
        }

        .add {
            display: inline-block;
            background: green;
            color: white;
            margin-bottom: 15px;
        }
    </style>
</head>
<body>

    <h1>Employee Management System</h1>

    <a class="add" href="{{ route('employees.create') }}">
        Add Employee
    </a>

    @if(session('success'))
        <p style="color:green">{{ session('success') }}</p>
    @endif

    <table>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Department</th>
            <th>Salary</th>
            <th>Actions</th>
        </tr>

        @foreach($employees as $employee)
        <tr>
            <td>{{ $employee->id }}</td>
            <td>{{ $employee->name }}</td>
            <td>{{ $employee->email }}</td>
            <td>{{ $employee->department }}</td>
            <td>{{ $employee->salary }}</td>
            <td>
                <a href="{{ route('employees.show', $employee->id) }}">View</a>

                <a href="{{ route('employees.edit', $employee->id) }}">Edit</a>

                <form action="{{ route('employees.destroy', $employee->id) }}"
                      method="POST" style="display:inline">
                    @csrf
                    @method('DELETE')

                    <button type="submit">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach

    </table>

</body>
</html>

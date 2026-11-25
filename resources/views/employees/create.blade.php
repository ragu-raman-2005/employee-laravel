
<!DOCTYPE html>
<html>
<head>
    <title>Add Employee</title>

    <style>
        body {
            font-family: Arial, sans-serif;
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

        input {
            width: 95%;
            padding: 10px;
            margin: 8px 0 15px;
        }

        button {
            background: green;
            color: white;
            padding: 12px 20px;
            border: none;
            cursor: pointer;
        }

        a {
            text-decoration: none;
            color: blue;
        }

        .error {
            color: red;
        }
    </style>
</head>

<body>

<div class="container">

    <h2>Add New Employee</h2>

    <a href="{{ route('employees.index') }}">← Back to Employee List</a>

    @if($errors->any())
        <div class="error">
            @foreach($errors->all() as $error)
                <p>{{ $error }}</p>
            @endforeach
        </div>
    @endif

    <form action="{{ route('employees.store') }}" method="POST">

        @csrf

        <label>Employee Name</label>
        <input type="text" name="name" value="{{ old('name') }}" required>

        <label>Email</label>
        <input type="email" name="email" value="{{ old('email') }}" required>

        <label>Phone</label>
        <input type="text" name="phone" value="{{ old('phone') }}">

        <label>Designation</label>
        <input type="text" name="designation" value="{{ old('designation') }}" required>

        <label>Department</label>
        <input type="text" name="department" value="{{ old('department') }}" required>

        <label>Salary</label>
        <input type="number" name="salary" step="0.01" value="{{ old('salary') }}" required>

        <label>Date of Joining</label>
        <input type="date" name="date_of_joining" value="{{ old('date_of_joining') }}" required>

        <button type="submit">Save Employee</button>

    </form>

</div>

</body>
</html>

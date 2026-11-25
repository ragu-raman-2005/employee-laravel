
<!DOCTYPE html>
<html>
<head>
    <title>Edit Employee</title>
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

        input {
            width: 95%;
            padding: 10px;
            margin: 8px 0 15px;
        }

        button {
            background: #263b80;
            color: white;
            padding: 12px 20px;
            border: none;
            cursor: pointer;
        }
    </style>
</head>
<body>

<div class="container">

    <h2>Edit Employee</h2>

    <a href="{{ route('employees.index') }}">← Back</a>

    @if($errors->any())
        @foreach($errors->all() as $error)
            <p style="color:red">{{ $error }}</p>
        @endforeach
    @endif

    <form action="{{ route('employees.update', $employee->id) }}" method="POST">

        @csrf
        @method('PUT')

        <label>Name</label>
        <input type="text" name="name"
               value="{{ old('name', $employee->name) }}" required>

        <label>Email</label>
        <input type="email" name="email"
               value="{{ old('email', $employee->email) }}" required>

        <label>Phone</label>
        <input type="text" name="phone"
               value="{{ old('phone', $employee->phone) }}">

        <label>Designation</label>
        <input type="text" name="designation"
               value="{{ old('designation', $employee->designation) }}" required>

        <label>Department</label>
        <input type="text" name="department"
               value="{{ old('department', $employee->department) }}" required>

        <label>Salary</label>
        <input type="number" name="salary" step="0.01"
               value="{{ old('salary', $employee->salary) }}" required>

        <label>Date of Joining</label>
        <input type="date" name="date_of_joining"
               value="{{ old('date_of_joining', $employee->date_of_joining) }}" required>

        <button type="submit">Update Employee</button>

    </form>

</div>

</body>
</html>

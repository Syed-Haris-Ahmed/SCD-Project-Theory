<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/auth/register.css') }}">
    <title>Register</title>
</head>
<body>
<form method="POST" action="{{ route('reguser') }}">
    @csrf

    
    <div>
        <label for="username">Username</label>
        <input type="text" name="username" id="username" required>
    </div>

    
    <div>
        <label for="email">Email</label>
        <input type="email" name="email" id="email" required>
    </div>

    
    <div>
        <label for="password">Password</label>
        <input type="password" name="password" id="password" required>
    </div>

    <div>
        <label for="cnic">CNIC Number</label>
        <input type="text" id="cnic" name="cnic" pattern="[0-9]{13}" maxlength="13" placeholder="Enter 13-digit CNIC" required>
    </div>

    
    <div>
        <label>
            <input type="checkbox" name="border_resident" id="border_resident">
            Are you a Border Resident?
        </label>
    </div>

    <!-- Dropdown for locations (will be hidden initially) -->
    <div id="locationDropdown" style="display: none;">
        <label for="locations">Select Location</label>
        <select name="locations" id="locations">
            <!-- Your options here -->
            <option value="location1">Location 1</option>
            <option value="location2">Location 2</option>
            <!-- Add more options as needed -->
        </select>
    </div>

    <!-- JavaScript to show/hide location dropdown based on checkbox -->
    <script>
        document.getElementById('border_resident').addEventListener('change', function () {
            var dropdown = document.getElementById('locationDropdown');
            dropdown.style.display = this.checked ? 'block' : 'none';
        });
    </script>

    <!-- Submit Button -->
    <div>
        <button type="submit">Register</button>
    </div>
</form>
</body>
</html>
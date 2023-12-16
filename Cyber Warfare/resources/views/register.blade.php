<!-- registration.blade.php -->
<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f4f4f4;
        margin: 0;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
    }

    form {
        background-color: #fff;
        padding: 20px;
        border-radius: 8px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        width: 300px;
    }

    input[type="text"],
    input[type="email"],
    input[type="password"],
    select {
        width: calc(100% - 12px);
        padding: 8px;
        margin-bottom: 15px;
        border: 1px solid #ccc;
        border-radius: 3px;
        box-sizing: border-box;
    }

    label {
        font-weight: bold;
        display: block;
        margin-bottom: 5px;
    }

    input[type="checkbox"] {
        margin-right: 5px;
        vertical-align: middle;
    }

    button[type="submit"] {
        background-color: #4caf50;
        color: white;
        cursor: pointer;
        padding: 10px;
        border: none;
        border-radius: 3px;
        width: 100%;
    }

    button[type="submit"]:hover {
        background-color: #45a049;
    }
</style>


<form method="POST" action="{{ route('register') }}">
    @csrf

    <!-- Username -->
    <div>
        <label for="username">Username</label>
        <input type="text" name="username" id="username" required>
    </div>

    <!-- Email -->
    <div>
        <label for="email">Email</label>
        <input type="email" name="email" id="email" required>
    </div>

    <!-- Password -->
    <div>
        <label for="password">Password</label>
        <input type="password" name="password" id="password" required>
    </div>

    <!-- Border Resident Checkbox -->
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

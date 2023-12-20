<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/auth/register.css') }}">
    <title>Register</title>
</head>
<body>
    <div class="background">
        <form method="POST" action="{{ route('reguser') }}" onsubmit="return validateForm()">
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
                    <option value="Wagah">Wagah, Punjab</option>
                    <option value="Chachro">Chachro, Sindh</option>
                    <option value="Mithi">Mithi, Sindh</option>
                    <option value="Islamkot">Islamkot, Sindh</option>
                    <option value="Taftan">Taftan, Balochistan</option>
                    <option value="Chaman">Chaman, Balochistan</option>
                    <option value="Kasur">Kasur, Punjab</option>
                    <!-- Add more options as needed -->
                </select>
            </div>
            <script>
                function validateForm() {
                    const username = document.getElementById('username').value.trim();
                    const email = document.getElementById('email').value.trim();
                    const password = document.getElementById('password').value.trim();
                    const cnic = document.getElementById('cnic').value.trim();
            
                    // Validate Username
                    if (username === '') {
                        alert('Please enter a username');
                        return false;
                    }
            
            
                    // Validate Password
                    if (password === '') {
                        alert('Please enter a password');
                        return false;
                    }
            
                    // Validate CNIC
                    if (cnic.length !== 13 || isNaN(cnic)) {
                        alert('Please enter a valid 13-digit CNIC number');
                        return false;
                    }
            
                    return true; // Form will submit if all validations pass
                }
                </script>

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
    </div>
</body>
</html>
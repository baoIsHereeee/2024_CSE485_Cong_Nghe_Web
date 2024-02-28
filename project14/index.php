<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="assets/style.css">
    <script src="https://cdn.ckeditor.com/4.17.2/standard/ckeditor.js"></script>

</head>

<body>

<!--Basic Info-->
<div class="form-container">
    <h2 class="form-title">Basic Info</h2>
    <form action="/submit_form" method="post">
        <div class="form-group">
            <label for="employee_id" class="form-label">Employee ID:</label>
            <input type="text" id="employee_id" name="employee_id" class="form-input">
        </div>

        <div class="form-group">
            <label for="last_name" class="form-label">Last Name:</label>
            <input type="text" id="last_name" name="last_name" class="form-input" >
        </div>

        <div class="form-group">
            <label for="first_name" class="form-label">First Name:</label>
            <input type="text" id="first_name" name="first_name" class="form-input" >
        </div>

        <div class="form-group">
            <label for="gender" class="form-label">Gender:</label>
            <select id="gender" name="gender" class="form-select">
                <option value="Male">Male</option>
                <option value="Female">Female</option>
                <option value="Female">Other</option>
            </select>
        </div>

        <div class="form-group">
            <label for="title" class="form-label">Title:</label>
            <input type="text" id="title" name="title" class="form-input">
        </div>

        <div class="form-group">
            <label for="suffix" class="form-label">Suffix</label>
            <input type="text" id="suffix" name="suffix" class="form-input">
        </div>

        <div class="form-group">
            <label for="birth_date" class="form-label">Birth Date:</label>
            <input type="date" id="birth_date" name="birth_date" class="form-input">
        </div>

        <div class="form-group">
            <label for="hire_date" class="form-label">Hire Date:</label>
            <input type="date" id="hire_date" name="hire_date" class="form-input">
        </div>

        <div class="form-group">
            <label for="ssn" class="form-label">SSN # (if applicable):</label>
            <input type="text" id="ssn" name="ssn" class="form-input">
        </div>

        <div class="form-group">
            <label for="report" class="form-label">Report To:</label>
            <select id="report" name="report" class="form-select">
                <?php
                $reporters = ["Bao Do", "Cao Hoang", "Quoc Huy"];
                foreach ($reporters as $reporter){
                    echo "<option value='$reporter'>$reporter</option>";
                }
                ?>
            </select>
        </div>

    </form>
</div>

<!--Contact Info-->
<div class="form-container">
    <h2 class="form-title">Contact Info</h2>
    <form action="/submit_form" method="post">
        <div class="form-group">
            <label for="email" class="form-label">Email:</label>
            <input type="text" id="email" name="email" class="form-input">
        </div>

        <div class="form-group">
            <label for="address" class="form-label">Address:</label>
            <input type="text" id="address" name="address" class="form-input" >
        </div>

        <div class="form-group">
            <label for="city" class="form-label">City:</label>
            <input type="text" id="city" name="city" class="form-input" >
        </div>

        <div class="form-group">
            <label for="region" class="form-label">Region:</label>
            <input type="text" id="region" name="region" class="form-input" >
        </div>

        <div class="form-group">
            <label for="postal" class="form-label">Postal:</label>
            <input type="text" id="postal" name="postal" class="form-input" >
        </div>

        <div class="form-group">
            <label for="country" class="form-label">Country:</label>
            <select id="country" name="country" class="form-select">
                <?php
                $countries = ["VN", "USA", "CAN", "FRA"];
                foreach ($countries as $country){
                    echo "<option value = '$country'>$country</option>";
                }
                ?>
            </select>
        </div>

        <div class="form-group">
            <label for="phone" class="form-label">US Home Phone:</label>
            <input type="text" id="phone" name="phone" class="form-input">
        </div>

        <div class="form-group">
            <label for="photo" class="form-label">Photo:</label>
            <input type="file" id="photo" name="photo" class="form-input">
        </div>

    </form>
</div>

<!--Optional Info-->
<div class="form-container">
    <h2 class="form-title">Optional Info</h2>
    <label for="note" class="form-label">Ghi chú:</label>
    <textarea id="note" name="note" class="form-input"></textarea>
</div>

<div class="form-container">
    <label for="preferred_shift">Preferred Shift</label>
    <label style="margin-left: 20px" for="preferred_shift">Regular</label>
    <input type="checkbox" id="preferred_shift" name="shiftCheckbox">
    <label style="margin-left: 20px" for="preferred_shift">Gravy Yard</label>
    <input type="checkbox" id="preferred_shift" name="shiftCheckbox">
</div>

<div class="form-container">
    <label for="active">Active?</label>
    <input type="checkbox" id="active" name="activeCheckBox">
</div>

<div class="form-container">
    <button type="button" class="btn btn-secondary">Submit</button>
    <button type="button" class="btn btn-secondary">Cancel</button>
</div>


<script>
    // Thêm CKEditor vào phần ghi chú
    CKEDITOR.replace('note', {
        // Cấu hình CKEditor
    });
</script>

</body>
</html>



<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thông tin nhân viên</title>
    <link rel="stylesheet" href="./assets/styles.css">
    <script src="https://cdn.ckeditor.com/ckeditor5/38.1.0/classic/ckeditor.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

</head>
<body>

<?php
$countries = array (
    "Afghanistan", "Albania", "Algeria", "Andorra", "Angola", "Anguilla",
    "Antigua & Barbuda",
    "Argentina", "Armenia", "Aruba", "Australia", "Austria", "Azerbaijan",
    "Bahamas", "Bahrain",
    "Bangladesh", "Barbados", "Belarus", "Belgium", "Belize", "Benin",
    "Bermuda", "Bhutan",
    "Bolivia", "Bosnia & Herzegovina", "Botswana", "Brazil", "British Virgin 
    Islands", "Brunei",
    "Bulgaria", "Burkina Faso", "Burundi", "Vietnam"
);
?>

<form action="process" method="post">
    <table class="table1">
        <caption style="font-weight: bold">Basic Info <hr></caption>
        <tr>
            <td>Employee ID</td>
            <td><input style="margin-right: 45px" type="text" name="ID" value="9"></td>
        </tr>
        <tr>
            <td>Last Name</td>
            <td><input type="text" name="Name" value="Dodsworth"></td>
        </tr>
        <tr>
            <td>First Name</td>
            <td><input type="text" name="Name" value="Anne"></td>
        </tr>
        <tr>
            <td>Gender</td>
            <td class="gender-row">
                <input type="radio" name="gender" value="Maie" checked>
                <label for="male">Maie</label><br>
                <input type="radio" name="gender" value="Female">
                <label for="female">Female</label><br>
                <input type="radio" name="gender" value="XXX">
                <label for="xxx">XXX</label><br>
                <input type="radio" name="gender" value="ZZZ">
                <label for="zzz">ZZZ</label><br>
            </td>
        </tr>
        <tr>
            <td>Title</td>
            <td><input type="text" name="title" value="Sales Representative" ></td>
        </tr>
        <tr>
            <td>Suffix</td>
            <td><input type="text" name="suffix" value="Ms." ></td>
        </tr>
        <tr>
            <td>BirthDate</td>
            <td>
                <input type="datetime-local" name="birthdate">
            </td>
        </tr>
        <tr>
            <td>HireDate:</td>
            <td>
                <input type="datetime-local" name="birthdate">
            </td>
        </tr>
        <tr>
            <td>SSN # (if applicable)</td>
            <td><input type="text" name="SSN"></td>
        </tr>
        <tr>
            <td>Reports To</td>
            <td><input type="text"></td>
        </tr>
    </table>

    <table class="table2">
        <caption style="font-weight: bold">Contact Info<hr></caption>

        <tr>
            <td>Email</td>
            <td><input type="email" name="Email" placeholder="name@example.com"></td>
        </tr>
        <tr>
            <td>Address</td>
            <td><input type="text" name="address" value="7 Houndstooth Rd."></td>
        </tr>
        <tr>
            <td>City</td>
            <td><input type="text" name="city" value="London"></td>
        </tr>
        <tr>
            <td>Region</td>
            <td><input type="text" name="region"></td>
        </tr>
        <tr>
            <td>Postal Code</td>
            <td><input type="text" name="code" value="WG2 7LT"></td>
        </tr>
        <tr>
            <td>Country</td>
            <td>
                <select name="country">
                    <?php foreach ($countries as $country):?>
                        <option value="<?php echo $country;?>"><?php echo $country;?></option>
                    <?php endforeach;?>
                </select>
            </td>
            </td>
        </tr>
        <tr>
            <td>US Home Phone</td>
            <td><input type="text" name="phone" value="(234)234-2342"></td>
        </tr>
        <tr>
            <td>Photo</td>
            <td><input type="text" name="photo" value="EmpID9.bmp"></td>
        </tr>
    </table>

    <table class="table3">
        <caption style="font-weight: bold">Contact Info<hr></caption>
        <tr>
            <td>Notes</td>
            <td class="edit_notes">
                <div id="editor"></div>
                <textarea name="notes" style="display: none;"></textarea>
            </td>
        </tr>
        <tr>
            <td>Preferred Shift</td>
            <td>
                <label>
                    <input style="width: 3%" type="checkbox" checked> Regular
                </label>
                <br>
                <label>
                    <input style="width: 3%" type="checkbox" checked> Gravy Yard
                </label>
            </td>
        </tr>
        <tr>
            <td>Active?</td>
            <td>
                <label>
                    <input style="width: 3%" type="checkbox" checked>
                </label>
                <br>
            </td>
        </tr>
        <tr>
            <td>Are you human?</td>
            <td>
                <p style="font-family: cursive; font-size: 30px">TIDAWO</p>
                <p style="text-align: center; font-size: 18px">Click to change</p>
                <input type="text">
            </td>
        </tr>
    </table>

    <hr>
    <div class="btn-footer-1">
        <button ><i class="fas fa-caret-left"></i></button>
        <button ><i class="fas fa-caret-right"></i></button>

    </div>

    <div class="btn-footer-2">
        <button style="color: aliceblue" class="btn_submit" type="submit"><i style="margin-right: 5px" class="fas fa-save"></i>Submit</button>
        <button style="color: aliceblue" class="btn_canel" type="button"><i style="margin-right: 5px" class="fas fa-times"></i>Cancel</button>
    </div>
    <br>
    <div class="text-footer">
        <p>* required</p>
    </div>
</form>

<script>
    ClassicEditor
        .create(document.querySelector('#editor'))
        .catch(error => {
            console.error(error);
        });
</script>
</body>
</html>

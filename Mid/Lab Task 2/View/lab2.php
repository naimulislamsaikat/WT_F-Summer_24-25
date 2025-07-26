<!DOCTYPE html>
<html>
    <title>Bank Managment System </title>

    <style>
        .div1{
            width: 150px;
            height: 80px;
            border: 2px solid red;
            overflow: scroll;
        }
    </style>

    <body style="background-color:skyblue">
        <h1 align="center">Bank Managment System</h1>
        <h2 align="center">Your Trusted Financial Partner</h2>
        <h3 align="left">Customer Registration Form</h3>

        <div>
        <table style="background-color:white">
            <tr><td>Full Name:</td><td><input type="text"></td></tr>
            <tr><td>Date Of Birth:</td><td><input type="date"></tr>
            <tr><td>Gender:</td>
                <td><input type="radio" name="des">Male
                    <input type="radio" name="des">Female
                    <input type="radio" name="des">Other</td></tr>
            <tr>
                <td>Maritial Status:</td>
                <td><select>
                    <option value="Select">-Select</option>
                    <option value="Single">Single</option>
                    <option value="Married">Married</option>
                    <option value="Divorced">Divorced</option>
                </td>
            </tr>
            <tr>
                <td>Account Type:</td>
                <td><select>
                    <option value="Select">-Select</option>
                    <option value="Savings">Savings</option>
                    <option value="Personal">Personal</option>
                </td>
            </tr>
            <tr><td>Initial Deposit Amount:</td><td><input type="number"></td></tr>
            <tr><td>Mobile Number:</td><td><input type="number"></td></tr>
            <tr><td>Email Address:</td><td><input type="text"></td></tr>
            <tr><td>Address:</td><td><textarea name="" id="" cols="20" rows="2"></textarea></tr>
            <tr><td>Occupation:</td><td><input type="text"></td></tr>
            <tr><td>National ID (NID):</td><td><input type="number"></td></tr>
            <tr><td>Set Password:</td><td><input type="password"></td></tr>
            <tr><td>Upload ID Proof:</td><td><input type="file"></td></tr>
        
        </table>
        <input type="checkbox">I agree to the terms and conditions <br>
        
            <input type="submit" value="Register">
            <input type="reset" value="Clear">
        
        </div>
        <div class="div1">This is a demo text to show how overflow works in a small container with a div methode</div>
    </body>
</html>        

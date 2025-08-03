<!DOCTYPE html>
<html>
    <title>Donation Form</title>
    <head>
        <link rel="stylesheet" href="..\CSS\task_3_style.css">
        <script src="..\JS\task_3_valid.js"></script>
    </head>
    <body>
        <div class="div">
            <form onsubmit="submitForm()">
                <h2>Donar Information</h2>
                
                <h4>First Name</h4><input type="text" id="firstname">
                <h4>Last Name</h4><input type="text" id="lastname">
                <h4>Address</h4><input type="text" id="address">
                <h4>City</h4><input type="text" id="city">
                <h4>State</h4>
                <select id="state" display="block">
                    <option value="Select">Select a State</option>
                    <option value="US">US</option>
                    <option value="UK">UK</option>
                    <option value="BD">BD</option>
                </select>
                <h4>Phone</h4> <input type="number" id="number">
                <h4>Email</h4> <input type="email" id="email">
                <h4>Create Password (min 8 characters)</h4><input type="password" id="pass">
                <h4>Confirm Password</h4><input type="password" id="cpass">
                
                <h4>Donation Amount</h4>
                <input type="radio" name="des" id="amount"> None
                <input type="radio" name="des" id="amount"> 500 BDT
                <input type="radio" name="des" id="amount"> 1000 BDT
                <input type="radio" name="des" id="amount"> 2000 BDT
                <input type="radio" name="des" id="amount"> 3000 BDT
                <input type="radio" name="des" id="amount"> Other
                <h4>Other Amount</h4> <input type="number" name="des" id="amount"> <br>
                <input type="checkbox">I am interested in giving on a regular basis.
                
                <h2>Additional Information</h2>

                <input type="checkbox">I would like my gift to remain anonymous. <br>
                <input type="checkbox">My employer offers a matching gift program. <br>
                <input type="checkbox">Please don't send a tank you later. <br>

                <h4>Comments</h4>
                <textarea id="comments" rows="4" cols="100"></textarea> <br>
                <input type="reset">
                <input type="submit">

            </form>
        </div>
    </body>
</html>
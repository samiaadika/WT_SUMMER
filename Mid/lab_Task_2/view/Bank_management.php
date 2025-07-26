<!DOCTYPE html>
<html lang ="en">
    <head>
        <meta charset "UTF-8">
        <title>Bank Management System </title>

        <style>
            body{ 
                font-family : Arial, sans-serif;
                background-color : #eaf3fb;
                margin: 0;
                padding: 20px;



            }
            .container{
                text-align: center;
            }
            h1{
                color:#154c79;

            }
            .form-container{

                backgraound-color : white;
                width: 480px;
                margin: 20px auto;
                padding : 1px solid #ccc;
                text-align : left;
            }
            .form-container h3{
                 margin-top :0;
            }
         form label {
  display: block;
  margin-bottom: 10px;
}

input[type="text"],
input[type="email"],
input[type="password"],
input[type="date"],
textarea,
select {
  width: 100%;
  padding: 5px;
  margin-top: 5px;
  box-sizing: border-box;
}
textarea{
    resize: vertical;
}
.buttons{
    text-align:center;
    margin-top: 15px;
}

button {
  background-color: #007bff;
  border: none;
  padding: 8px 16px;
  margin: 5px;
  color: white;
  cursor: pointer;
  font-weight: bold;
}
button[type="reset"]{
    background-color: #5a5a5a;


}
.scroll-box{
width:300px;
height:50px;
overflow:auto;
margin: 10px auto;
border: 1px solid #800000;
  padding: 5px;
  text-align: left;


}
           





        </style>
</head>
<body>
    <div class ="container">
        <h1>Bank Management System</h1>
        <h2>Your Trusted Financial Partner</h2>
        <div class ="form-container">
            <h3>Customer Registration Form</h3>
            <form>
                <label>Full Name :<input type="text"></label>
                <label>Date of Birth :<input type= "date"></label>
                <label>Gender:
                    <input type="radio"name="gender">Male
                 <input type="radio"name="gender">Female
                  <input type="radio"name="gender">other
</label>
<label>Marital Status:
    <select>
        <option>Single</option>
        <option>Married</option>
        <option>Divorced</option>
</select>
</label>
<label>Account Type:
    <select>
        <option>Savings</option>
        <option>Checking</option>
</select>
</label>
<label>Initial Deposit Amount:<intput type="text"></label>
<label>Mobile Number:<intput type="text"></label>
<label>Email Address:<intput type="email"></label>
<label>Address: <textarea rows="2" </textarea> </label>
<label>National ID(NID): <input type="text"></label>
<label>Set Password: <input type="password"></label>
<label>Upload ID proof:<input type ="file"></label>
<label><input type ="cheackbox">I agree to the terms and conditions</label>
<div class ="buttons">
    <button type="submit">Register</button>
     <button type="reset">Clear</button>
</div>
</form>
<div class ="scroll-box">
    This is a demo text to show how overflow works in small container with a scroll bar.It will scroll vertically and horizontally when conten exceeds the box dimensions.
</div>
</div>
</body>
</html>
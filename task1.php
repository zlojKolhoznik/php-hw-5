<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: Verdana, Geneva, sans-serif;
    }
    form {
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: stretch;
        margin: 10% auto;
        padding: 15px;
        border-radius: 15px;
        width: 30%;
        box-shadow: 5px 5px 15px #222;
    }
    form > label {
        font-size: 14px;
    }
    form * {
        margin: 5px;
    }
    input {
        border: none;
    }
    input[type=text] {
        box-shadow: 0 0 5px #222;
        font-size: 18px;
        padding: 5px;
        border-radius: 10px;
        transition: all .3s ease-in-out;
    }
    input[type=text]:focus, input[type=text]:focus-visible {
        outline: none;
        background-color: #eee;
    }
    input[type=checkbox] {
        box-shadow: 4px 4px 10px #222;
    }
    div:has(>input[type=checkbox]) {
        display: flex;
        align-items: center;
    }
    input[type=submit] {
        padding: 10px;
        background-color: #1a53b3;
        color: white;
        font-size: 18px;
        border-radius: 15px;
        transition: all .3s ease-in-out;
    }
    input[type=submit]:hover {
        background-color: #16489b;
        color: #f2fffc;
    }
    input[type=submit]:active {
        background-color: #0e3372;
        color: #dce7e4;
        transition-duration: .1s;
    }
    @keyframes popup {
        from {
            transform: scale(0);
        }
        to {
            transform: scale(1);
        }
    }
    .message-box {
        position: absolute;
        top: 0;
        left: 0;
        width: 99.6vw;
        height: 99.6vh;
        display: flex;
        align-items: center;
        justify-content: center;
        background-color: #dddddd44;
    }
    .message-box form {
        animation: .3s linear popup;
    }
</style>
<form method="post">
    <label for="email">Email: </label>
    <input type="text" name="email" id="email" placeholder="Enter your email">
    <div>
        <input type="checkbox" name="subscribe" id="subscribe">
        <label for="subscribe">Subscribe!</label>
    </div>
    <input type="submit" value="Send!">
</form>

<?php
if(isset($_POST["subscribe"]) && $_POST["email"] != "" && $_POST["email"] != " ") {
    ?>
        <div class="message-box">
            <form>
                <div>Thank you for subscribing!</div>
                <input type="submit" value="OK">
            </form>
        </div>
    <?php
}

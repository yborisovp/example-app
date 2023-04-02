<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="{{asset('assets/css/login.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/button.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/modal.css')}}">

    <title>Login</title>
</head>

<body>
    <div class="login-form">
        <form>
            <h1>Registration</h1>
            <div class="content">
                <div class="input-field">
                    <input type="email" placeholder="Email" autocomplete="nope">
                </div>
                <div class="input-field">
                    <input type="password" placeholder="Password" autocomplete="new-password">
                </div>
            </div>

            <!---https://moderncss.dev/custom-select-styles-with-pure-css/-->
            <div class="select">
                <select id="standard-select">
                    <option value="Option 1">Option 1</option>
                    <option value="Option 2">Option 2</option>
                    <option value="Option 3">Option 3</option>
                    <option value="Option 4">Option 4</option>
                    <option value="Option 5">Option 5</option>
                    <option value="Option length">
                        Option that has too long of a value to fit
                    </option>
                </select>
            </div>

            <!---https://codepen.io/alvarotrigo/pen/oNoJePo-->
            <div class="toggle-button-cover">
                <div class="button-cover">
                    <div class="button r" id="button-1">
                        <input type="checkbox" class="checkbox" />
                        <div class="knobs"></div>
                        <div class="layer"></div>
                    </div>
                </div>
            </div>

            <div class="action">
                <button><a href="login.blade.php">Login</a></button>
                <button>Sign up</button>
            </div>


            <button id="signUpButton" type="button">Open Modal</button>
        </form>

        <!--w3schools.com/howto/howto_css_modals.asp-->
        <div id="confirmModal" class="modal">

            <!-- Modal content -->
            <div class="modal-content">
                <span class="close">&times;</span>
                <p>Some text in the Modal..</p>
            </div>

        </div>
    </div>


    <script src="{{asset('assets/js/modalController.js')}}"></script>
</body>

</html>

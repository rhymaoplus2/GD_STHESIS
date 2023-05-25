<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $conn = mysqli_connect('localhost', 'root', '', 'login');

    $query = "SELECT * FROM user WHERE username='$username' AND password='$password'";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) == 1) {
        $_SESSION['username'] = $username;
        header('Location: dashboard.php');
    } else {
        $error = 'Invalid username or password';
    }

    mysqli_close($conn);
}

$isDarkMode = isset($_COOKIE['isDarkMode']) && $_COOKIE['isDarkMode'] == 'true';
?>

<!DOCTYPE html>
<html lang="en" <?php if ($isDarkMode) {echo 'data-theme="dark"';} ?>>
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
      body[data-theme="dark"] {
    background-color: #1F1F1F;
    color: #EFEFEF;
}


        .card[data-theme="dark"] {
            background-color: #2D2D2D;
        }

        .card-header[data-theme="dark"] {
            background-color: #1F1F1F;
            color: #EFEFEF;
        }

        .form-control[data-theme="dark"] {
            background-color: #2D2D2D;
            color: #EFEFEF;
        }

        .btn[data-theme="dark"] {
            background-color: #1F1F1F;
            border-color: #1F1F1F;
            color: #EFEFEF;
        }
    </style>
</head><body class="bg-light">
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card border-0 shadow-lg">
                    <div class="card-header bg-white text-center">
                        <img src="" alt="Imong Logo" class="img-fluid" style="max-width: 200px;">
                    </div>
                    <div class="card-body bg-light">
                        <?php if (isset($error)): ?>
                            <div class="alert alert-danger"><?php echo $error; ?></div>
                        <?php endif; ?>
                        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
                            <div class="mb-3">
                                <input type="text" class="form-control border-0 rounded-pill py-3 px-4 mb-3" id="username" name="username" placeholder="Username" required>
                            </div>
                            <div class="mb-3">
                                <input type="password" class="form-control border-0 rounded-pill py-3 px-4 mb-3" id="password" name="password" placeholder="Password" required>
                            </div>
                            <div class="d-grid gap-2 mb-3">
                                <button type="submit" class="btn btn-primary rounded-pill py-2 px-4">Log In</button>
                            </div>
                            <div class="text-center">
                                <p class="mb-0">Don't have an account? <a href="#">Sign up</a></p>
                                <p class="mb-0"><a href="#">Forgot password?</a></p>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="form-check form-switch position-fixed bottom-0 end-0 m-3">
  <input class="form-check-input" type="checkbox" id="dark-mode-switch">
  <label class="form-check-label" for="dark-mode-switch"><i class="bi bi-moon"></i> DARK MODE</label>
</div>

    <script>
     const darkModeBtn = document.getElementById('dark-mode-switch');

        const body = document.body;

        // check if user has set a preference for dark mode
        const userPref = window.matchMedia('(prefers-color-scheme: dark)').matches ? 'dark' : 'light';
        setTheme(userPref);

        // listen for click on the dark mode button
        darkModeBtn.addEventListener('click', () => {
            // toggle the dark mode class on the body
            body.classList.toggle('bg-dark');
            // change the icon of the button
            if (darkModeBtn.innerHTML === '<i class="bi bi-moon"></i>') {
                darkModeBtn.innerHTML = '<i class="bi bi-sun"></i>';
            } else {
                darkModeBtn.innerHTML = '<i class="bi bi-moon"></i>';
            }
            // save the user preference
          // save the user preference
localStorage.setItem('theme', body.classList.contains('bg-dark') ? 'dark' : 'light');
document.cookie = "isDarkMode=" + (body.classList.contains('bg-dark') ? 'true' : 'false') + "; path=/";

        });

        function setTheme(theme) {
            // set the body class to the specified theme
            body.classList.add(`bg-${theme}`);
            // change the icon of the button
            if (theme === 'dark') {
                darkModeBtn.innerHTML = '<i class="bi bi-sun"></i>';
            }
            // save the user preference
            localStorage.setItem('theme', theme);
        }
    </script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">


</body>
</html>
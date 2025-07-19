<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Admin Login</title>

  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

  <!-- Style -->
  <style>
    * {
      box-sizing: border-box;
      font-family: "Segoe UI", sans-serif;
    }

    body {
      margin: 0;
      padding: 0;
      background: linear-gradient(135deg, #667eea, #764ba2);
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      overflow: hidden;
    }

    .login-container {
      background: rgba(255, 255, 255, 0.15);
      backdrop-filter: blur(15px);
      -webkit-backdrop-filter: blur(15px);
      padding: 40px;
      border-radius: 20px;
      box-shadow: 0 20px 40px rgba(0, 0, 0, 0.2);
      width: 360px;
      animation: fadeIn 1s ease-in-out;
      color: #fff;
    }

    @keyframes fadeIn {
      0% {
        transform: translateY(30px);
        opacity: 0;
      }
      100% {
        transform: translateY(0);
        opacity: 1;
      }
    }

    .login-container h2 {
      text-align: center;
      margin-bottom: 30px;
      color: #fff;
    }

    .form-group {
      position: relative;
      margin-bottom: 25px;
    }

    .form-group label {
      display: block;
      margin-bottom: 8px;
      font-weight: bold;
    }

    .form-group input {
      width: 100%;
      padding: 10px 42px 10px 12px;
      border: none;
      border-radius: 10px;
      font-size: 16px;
      background: rgba(255, 255, 255, 0.2);
      color: #fff;
    }

    .form-group input::placeholder {
      color: #ddd;
    }

    .toggle-password {
      position: absolute;
      top: 36px;
      right: 12px;
      background: none;
      border: none;
      cursor: pointer;
      color: #eee;
    }

    .toggle-password i {
      font-size: 1rem;
    }

    .submit-btn {
      width: 100%;
      padding: 12px;
      background: #fff;
      border: none;
      border-radius: 10px;
      color: #764ba2;
      font-size: 16px;
      font-weight: bold;
      cursor: pointer;
      transition: background 0.3s ease, transform 0.2s ease;
    }

    .submit-btn:hover {
      background: #eee;
      transform: translateY(-2px);
    }

    .error {
      color: #ffdddd;
      background: rgba(255, 0, 0, 0.2);
      padding: 10px;
      border-radius: 10px;
      font-size: 14px;
      text-align: center;
      margin-bottom: 15px;
    }
  </style>
</head>
<body>

  <div class="login-container">
    <h2>Admin Login</h2>

    <?php if (isset($_GET['error']) && $_GET['error'] == 'invalid') : ?>
      <div class="error">Please enter valid name and password</div>
    <?php endif; ?>

    <form action="../../controller/adminController/login.php" method="POST">
      <div class="form-group">
        <label for="name">Username</label>
        <input type="text" id="name" name="name" placeholder="Enter username" required />
      </div>

      <div class="form-group">
        <label for="password">Password</label>
        <input type="password" id="password" name="password" placeholder="Enter password" required />
        <button type="button" class="toggle-password" onclick="togglePassword()">
          <i class="fas fa-eye" id="eyeIcon"></i>
        </button>
      </div>

      <button type="submit" class="submit-btn" name="submit">Login</button>
    </form>
  </div>

  <script>
    function togglePassword() {
      const passwordInput = document.getElementById("password");
      const eyeIcon = document.getElementById("eyeIcon");

      if (passwordInput.type === "password") {
        passwordInput.type = "text";
        eyeIcon.classList.remove("fa-eye");
        eyeIcon.classList.add("fa-eye-slash");
      } else {
        passwordInput.type = "password";
        eyeIcon.classList.remove("fa-eye-slash");
        eyeIcon.classList.add("fa-eye");
      }
    }
  </script>

</body>
</html>

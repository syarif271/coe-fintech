<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin COE - Polibatam</title>
    <link rel="stylesheet" href="<?php echo e(asset('style/css/style-login.css')); ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<body>
    <div class="bg-blob" style="top: -300px; left: -200px;"></div>
    <div class="bg-blob" style="bottom: -300px; right: -200px; animation-delay: -10s;"></div>
    
    <div class="login-container">
        <div class="logo">
            <img src="<?php echo e(asset('images/polibatam-logo.png')); ?>" alt="COE Logo">
            <h1>COE Admin Portal</h1>
        </div>

        <form class="login-form">
            <div class="input-group">
                <i class="fas fa-user"></i>
                <input type="text" placeholder="Username" required>
            </div>

            <div class="input-group">
                <i class="fas fa-lock"></i>
                <input type="password" id="password" placeholder="Password" required>
                <i class="fas fa-eye toggle-pw" id="togglePassword"></i>
            </div>

            <button type="submit" class="login-btn">Sign In</button>
        </form>
    </div>

    <script>
        // Fixed Positioning dan Optimasi Animasi
        document.addEventListener('DOMContentLoaded', () => {
            const togglePassword = document.querySelector('#togglePassword');
            const password = document.querySelector('#password');

            togglePassword.addEventListener('click', function (e) {
                // Toggle type attribute
                const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
                password.setAttribute('type', type);
                
                // Toggle icon
                this.classList.toggle('fa-eye-slash');
                
                // Prevent form submission
                e.preventDefault();
            });
        });
    </script>
</body>
</html><?php /**PATH C:\laragon\www\coe-fintech\resources\views/frontend/login.blade.php ENDPATH**/ ?>
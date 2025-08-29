<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <title>Vision Green - Login</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <style>
        .mobile-view {
            display: block;
        }

        .desktop-view {
            display: none;
        }

        @media (min-width: 768px) {
            .mobile-view {
                display: none;
            }

            .desktop-view {
                display: block;
            }
        }

        .shake-error {
            animation: shake 0.5s;
        }

        @keyframes shake {
            0%, 100% { transform: translateX(0); }
            10%, 30%, 50%, 70%, 90% { transform: translateX(-5px); }
            20%, 40%, 60%, 80% { transform: translateX(5px); }
        }

        .green-gradient-bg {
            background: linear-gradient(135deg, #2E7D32 0%, #69ad0ad8 100%);
        }

        .form-group {
            transition: all 0.3s ease;
        }

        .form-group:focus-within {
            transform: translateY(-2px);
        }
        
        /* Vision Green brand colors */
        .brand-green {
            color: #69ad0ad8;
        }
        
        .brand-green-bg {
            background-color: #69ad0ad8;
        }
        
        .brand-green-border {
            border-color: #69ad0ad8;
        }
        
        .brand-green-ring {
            --tw-ring-color: #69ad0ad8;
        }
        
        .brand-dark-green {
            color: #2E7D32;
        }
        
        .brand-light-green {
            color: #8BC34A;
        }
    </style>
</head>

<body class="bg-gray-50 min-h-screen flex items-center justify-center p-0 md:p-4">
    <!-- Mobile App-like Login View -->
    <div class="block md:hidden mobile-view w-full h-screen flex flex-col">
        <!-- App Header with Green Gradient Background -->
        <div class="green-gradient-bg p-6 text-white flex flex-col items-center justify-center" style="height: 35vh;">
            <!-- Vision Green Logo - Original Rectangular Shape -->
            <div class="mb-4">
                <img src="../assests/logo.png" alt="Vision Green Logo" class="h-16 object-contain">
            </div>
            <h1 class="text-2xl font-bold mb-1">Welcome Back</h1>
            <p class="text-white text-opacity-90">Sign in to continue</p>
        </div>

        <!-- Login Form Container with Curved Top -->
        <div class="bg-white rounded-t-3xl -mt-8 flex-grow p-6 pt-8 shadow-lg">
            <div id="mobileErrorMessage" class="hidden mb-4 p-3 bg-red-50 border-l-4 border-red-500 text-red-700 rounded-lg animate__animated animate__shakeX">
                <i class="fas fa-exclamation-circle mr-2"></i>
                <span id="mobileErrorText"></span>
            </div>

            <form id="mobileLoginForm" method="POST" action="{{route('login')}}" class="space-y-5">
                @csrf
                <!-- Email Field -->
                <div class="form-group">
                    <label class="block text-gray-700 text-sm font-medium mb-2">Email Address</label>
                    <div class="relative">
                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                            <i class="fas fa-envelope text-gray-400"></i>
                        </div>
                        <input type="email" id="mobileEmail" name="email"
                            class="w-full pl-10 pr-3 py-3 border border-gray-200 rounded-lg focus:ring-2 focus:ring-[#69ad0ad8] focus:border-[#69ad0ad8]"
                            placeholder="your@email.com"
                            style="background-color: #f8f9fa;">
                    </div>
                </div>

                <!-- Password Field -->
                <div class="form-group">
                    <label class="block text-gray-700 text-sm font-medium mb-2">Password</label>
                    <div class="relative">
                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                            <i class="fas fa-lock text-gray-400"></i>
                        </div>
                        <input type="password" id="mobilePassword" name="password"
                            class="w-full pl-10 pr-10 py-3 border border-gray-200 rounded-lg focus:ring-2 focus:ring-[#69ad0ad8] focus:border-[#69ad0ad8]"
                            placeholder="••••••••" style="background-color: #f8f9fa;">
                        <button type="button" id="mobileTogglePassword"
                            class="absolute right-3 top-3 text-gray-500 hover:text-[#69ad0ad8]">
                            <i class="fas fa-eye"></i>
                        </button>
                    </div>
                </div>


                <!-- Submit Button -->
                <button type="submit" id="mobileLoginBtn"
                    class="w-full green-gradient-bg hover:opacity-90 text-white font-bold py-4 px-4 rounded-xl shadow-lg transition duration-200 mt-6">
                    <span id="mobileBtnText">Sign In</span>
                    <i class="fas fa-arrow-right ml-2"></i>
                </button>
            </form>

            <!-- Footer Links -->
            <div class="mt-8 text-center">
                <p class="text-sm text-gray-500">Need help? <a href="#" class="text-[#69ad0ad8] font-medium">Contact support</a></p>
            </div>
            <br><br>
            <footer class="text-center text-xs text-gray-400 mt-8">
                © 2025 Developed by AT Solution Nepal Pvt. Ltd.
            </footer>
        </div>
    </div>

    <!-- Desktop View -->
    <div class="desktop-view w-full max-w-4xl">
        <div class="bg-white rounded-2xl shadow-xl overflow-hidden flex animate__animated animate__fadeIn scale-90">
            <!-- Left Side - Graphic -->
            <div class="hidden md:block md:w-1/2 green-gradient-bg p-8 text-white">
                <div class="h-full flex flex-col justify-center items-center">
                    <!-- Vision Green Logo - Original Rectangular Shape -->
                    <div class="mb-6">
                        <img src="../assests/logo.png" alt="Vision Green Logo"
                            class="h-20 object-contain animate__animated animate__zoomIn">
                    </div>

                    <h2 class="text-2xl font-bold mb-2 animate__animated animate__fadeIn">Welcome Back</h2>
                    <p class="text-white text-opacity-80 mb-8 text-center animate__animated animate__fadeIn">Log in securely to access your Vision Green Dashboard.</p>

                    <div class="space-y-4 w-full max-w-xs animate__animated animate__fadeInUp">
                        <div class="flex items-center bg-white bg-opacity-10 p-3 rounded-lg">
                            <i class="fas fa-leaf mr-3 text-[#8BC34A]"></i>
                            <span>Environmental Conservation</span>
                        </div>
                        <div class="flex items-center bg-white bg-opacity-10 p-3 rounded-lg">
                            <i class="fas fa-users mr-3 text-[#8BC34A]"></i>
                            <span>Community Engagement</span>
                        </div>
                        <div class="flex items-center bg-white bg-opacity-10 p-3 rounded-lg">
                            <i class="fas fa-chart-line mr-3 text-[#8BC34A]"></i>
                            <span>Sustainability Analytics</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Right Side - Login Form -->
            <div class="w-full md:w-1/2 p-8">
                <div class="flex justify-center mb-6 animate__animated animate__bounceIn">
                    <div class="bg-green-100 p-4 rounded-full">
                        <i class="fas fa-leaf text-[#69ad0ad8] text-3xl"></i>
                    </div>
                </div>

                <h2 class="text-2xl font-bold text-gray-800 mb-2 text-center animate__animated animate__fadeIn">Vision Green Login</h2>
                <p class="text-gray-500 text-center mb-6 animate__animated animate__fadeIn">Enter your credentials to continue</p>

                <div id="desktopErrorMessage"
                    class="hidden mb-4 p-3 bg-red-100 border-l-4 border-red-500 text-red-700 rounded-lg animate__animated animate__shakeX">
                    <i class="fas fa-exclamation-triangle mr-2"></i>
                    <span id="desktopErrorText"></span>
                </div>

                @if($errors->any())
                    <div id="desktopErrorMessage"
                        class="mb-4 p-3 bg-red-100 border-l-4 border-red-500 text-red-700 rounded-lg animate_animated animate_shakeX">
                        <i class="fas fa-exclamation-triangle mr-2"></i>
                        <span id="desktopErrorText">{{ $errors->first() }}</span>
                    </div>
                @else
                    <div id="desktopErrorMessage"
                        class="hidden mb-4 p-3 bg-red-100 border-l-4 border-red-500 text-red-700 rounded-lg animate_animated animate_shakeX">
                        <i class="fas fa-exclamation-triangle mr-2"></i>
                        <span id="desktopErrorText"></span>
                    </div>
                @endif

                <form id="desktopLoginForm" method="POST" action="{{route('login')}}">
                     @csrf
                    <div class="mb-4 animate__animated animate__fadeInLeft">
                        <label class="block text-gray-700 text-sm font-medium mb-2">Email Address</label>
                        <div class="relative">
                            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                <i class="fas fa-envelope text-gray-400"></i>
                            </div>
                            <input type="email" id="desktopEmail" name="email"
                                class="w-full pl-10 pr-3 py-3 border border-gray-200 rounded-xl focus:ring-2 focus:ring-[#69ad0ad8] focus:border-[#69ad0ad8]"
                                placeholder="your@email.com">
                        </div>
                    </div>

                    <div class="mb-6 animate__animated animate__fadeInRight">
                        <label class="block text-gray-700 text-sm font-medium mb-2">Password</label>
                        <div class="relative">
                            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                <i class="fas fa-lock text-gray-400"></i>
                            </div>
                            <input type="password" id="desktopPassword" name="password"
                                class="w-full pl-10 pr-3 py-3 border border-gray-200 rounded-xl focus:ring-2 focus:ring-[#69ad0ad8] focus:border-[#69ad0ad8]"
                                placeholder="••••••••">
                            <button type="button" id="desktopTogglePassword"
                                class="absolute right-3 top-3 text-gray-400 hover:text-[#69ad0ad8]">
                                <i class="fas fa-eye"></i>
                            </button>
                        </div>
                    </div>

                  

                    <button type="submit" id="desktopLoginBtn"
                        class="w-full green-gradient-bg hover:opacity-90 text-white font-medium py-3 px-4 rounded-xl shadow-lg transform hover:scale-[1.02] transition duration-200 animate__animated animate__zoomIn">
                        <span id="desktopBtnText">Login to Dashboard</span>
                        <i class="fas fa-arrow-right ml-2"></i>
                    </button>
                </form>

                <div class="mt-6 text-center text-sm text-gray-500 animate__animated animate__fadeIn animate__delay-1s">
                    <p>Need an account? <a href="#" class="text-[#69ad0ad8] font-medium">Contact administrator</a></p>
                </div>
            </div>
        </div>

        <footer class="text-center text-xs text-gray-400 mt-8">
            © 2025 Developed by AT Solution Nepal Pvt. Ltd.
        </footer>
    </div>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        // Password toggle for mobile
        const mobileToggle = document.getElementById('mobileTogglePassword');
        const mobilePassword = document.getElementById('mobilePassword');
        mobileToggle.addEventListener('click', function () {
            const type = mobilePassword.getAttribute('type') === 'password' ? 'text' : 'password';
            mobilePassword.setAttribute('type', type);
            mobileToggle.innerHTML = type === 'password' ? '<i class="fas fa-eye"></i>' : '<i class="fas fa-eye-slash"></i>';
        });

        // Password toggle for desktop
        const desktopToggle = document.getElementById('desktopTogglePassword');
        const desktopPassword = document.getElementById('desktopPassword');
        desktopToggle.addEventListener('click', function () {
            const type = desktopPassword.getAttribute('type') === 'password' ? 'text' : 'password';
            desktopPassword.setAttribute('type', type);
            desktopToggle.innerHTML = type === 'password' ? '<i class="fas fa-eye"></i>' : '<i class="fas fa-eye-slash"></i>';
        });

        // Mobile Login Form
        document.getElementById('mobileLoginForm').addEventListener('submit', function (e) {
      
            const button = document.getElementById('mobileLoginBtn');
            const buttonText = document.getElementById('mobileBtnText');

            button.disabled = true;
            buttonText.textContent = 'Authenticating...';
            button.innerHTML = '<i class="fas fa-spinner fa-spin mr-2"></i> Authenticating';

        
        });

        // Desktop Login Form
        document.getElementById('desktopLoginForm').addEventListener('submit', function (e) {
          
            const button = document.getElementById('desktopLoginBtn');
            const buttonText = document.getElementById('desktopBtnText');

            button.disabled = true;
            buttonText.textContent = 'Authenticating...';
            button.innerHTML = '<i class="fas fa-spinner fa-spin mr-2"></i> Authenticating';

        });
    });
</script>

</body>
</html>
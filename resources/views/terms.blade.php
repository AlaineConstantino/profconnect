<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Terms of Use - ProfConnect</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <style>
        body.login-page {
            background: linear-gradient(135deg, #141E30, #243B55);
            color: #fff;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            min-height: 100vh;
        }

        .terms-box {
            background: #1c1f24;
            border-radius: 15px;
            box-shadow: 0 0 15px rgba(233, 30, 99, 0.3);
            padding: 40px 30px;
            transition: all 0.3s ease-in-out;
        }

        /* Glow + Hover effect */
        .terms-box:hover {
            box-shadow: 0 0 30px rgba(233, 30, 99, 0.6),
                        0 0 60px rgba(233, 30, 99, 0.4);
            transform: translateY(-5px);
        }

        .terms-content {
            max-height: 60vh;
            overflow-y: auto;
            padding-right: 10px;
        }

        .terms-content h4 {
            color: #e91e63; /* match ProfConnect branding pink */
            margin-top: 20px;
            font-size: 1.2rem;
        }

        .terms-content p,
        .terms-content li {
            line-height: 1.6;
            font-size: 0.95rem;
        }

        /* Custom scrollbar */
        .terms-content::-webkit-scrollbar {
            width: 8px;
        }

        .terms-content::-webkit-scrollbar-thumb {
            background: #e91e63;
            border-radius: 10px;
        }

        .terms-content::-webkit-scrollbar-track {
            background: #2a2d33;
        }

        a.text-info {
            text-decoration: none;
            transition: 0.2s;
        }

        a.text-info:hover {
            text-decoration: underline;
            color: #e91e63; /* glow accent on hover */
        }

        .btn-primary {
            border-radius: 8px;
            padding: 10px 25px;
            font-weight: 500;
            background-color: #e91e63;
            border: none;
            transition: 0.3s;
        }

        .btn-primary:hover {
            background-color: #d81b60;
            box-shadow: 0 0 12px rgba(233, 30, 99, 0.7);
            transform: translateY(-2px);
        }

        @media (max-width: 768px) {
            .terms-box {
                padding: 25px 20px;
            }

            .terms-content {
                max-height: 50vh;
            }
        }
    </style>
</head>

<body class="login-page">
    <div class="container position-absolute top-50 start-50 translate-middle">
        <div class="row justify-content-center">
            <div class="col-lg-10 col-xl-8">
                <div class="terms-box text-white">
                    <div class="text-center mb-4">
                        <img src="{{ asset('images/cics_seal.png')}}" alt="ProfConnect Seal"
                            class="img-fluid mb-3" style="max-width: 90px;" />
                        <h1 class="mb-2">ProfConnect - Terms of Use</h1>
                        <p class="text-secondary">Effective Date: January 2025</p>
                    </div>

                    <div class="terms-content">
                        <h4>1. Acceptance of Terms</h4>
                        <p>By using <strong>ProfConnect</strong>, you acknowledge that you have read, understood, and agreed to these Terms of Use. If you do not agree, you must discontinue use of the platform.</p>

                        <h4>2. User Accounts</h4>
                        <p>You are responsible for safeguarding your login credentials and all activities under your account.</p>

                        <h4>3. Use of Services</h4>
                        <ul>
                            <li>ProfConnect is designed for academic and professional purposes.</li>
                            <li>You agree not to misuse the platform for unlawful or harmful activities.</li>
                            <li>All shared content must comply with community guidelines and laws.</li>
                        </ul>

                        <h4>4. Intellectual Property</h4>
                        <p>Logos, branding, and content belong to ProfConnect. Unauthorized reproduction is prohibited.</p>

                        <h4>5. Privacy</h4>
                        <p>Your data will be processed in line with our Privacy Policy.</p>

                        <h4>6. Changes to Terms</h4>
                        <p>ProfConnect reserves the right to modify these terms. Continued use constitutes acceptance of updated terms.</p>

                        <h4>7. Limitation of Liability</h4>
                        <p>The platform is provided “as is” without warranties. ProfConnect is not liable for any damages caused by use of the services.</p>

                        <h4>8. Contact Information</h4>
                        <p>For questions or support, contact us:</p>
                        <ul>
                            <li>Email: <a href="mailto:support@profconnect.com" class="text-info">support@profconnect.com</a></li>
                            <li>Phone: +63 912 345 6789</li>
                        </ul>
                    </div>

                    <div class="mt-4 text-center">
                        <a href="{{ route('login') }}" class="btn btn-primary">Back to Login</a>
                    </div>

                    <p class="mt-4 text-center text-secondary small">© 2025 ProfConnect. All rights reserved.</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Page not found</title>
    <link rel="stylesheet" href="https://unpkg.com/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet"
        href="https://unpkg.com/bs-brain@2.0.4/components/error-404s/error-404-1/assets/css/error-404-1.css">
</head>

<body>
    <!-- Error 404 Template 1 - Bootstrap Brain Component -->
    <section class="py-3 py-md-5 min-vh-100 d-flex justify-content-center align-items-center">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="text-center">
                        <h2 class="gap-2 mb-4 d-flex justify-content-center align-items-center">
                            <span class="display-1 fw-bold">4</span>
                            <i class="bi bi-exclamation-circle-fill text-danger display-4"></i>
                            <span class="display-1 fw-bold bsb-flip-h">4</span>
                        </h2>
                        <h3 class="mb-2 h2">Oops! You're lost.</h3>
                        <p class="mb-5">The page you are looking for was not found.</p>
                        <a class="px-5 m-0 btn bsb-btn-5xl btn-dark rounded-pill fs-6" href="{{ route('home') }}"
                            role="button">Back to Home</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>

</html>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Page</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Custom CSS */
        .product-card {
            border: 1px solid #ccc;
            padding: 20px;
            margin-bottom: 20px;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1 class="mt-5 mb-4">Product Page</h1>
        <div class="row">
            <!-- Product Cards -->
            <div class="col-md-3">
                <div class="product-card">
                    <h3>Product 1</h3>
                    <p>Description of product 1</p>
                    <button class="btn btn-primary">Buy Now</button>
                </div>
            </div>
            <div class="col-md-3">
                <div class="product-card">
                    <h3>Product 2</h3>
                    <p>Description of product 2</p>
                    <button class="btn btn-primary">Buy Now</button>
                </div>
            </div>
            <div class="col-md-3">
                <div class="product-card">
                    <h3>Product 3</h3>
                    <p>Description of product 3</p>
                    <button class="btn btn-primary">Buy Now</button>
                </div>
            </div>
            <div class="col-md-3">
                <div class="product-card">
                    <h3>Product 4</h3>
                    <p>Description of product 4</p>
                    <button class="btn btn-primary">Buy Now</button>
                </div>
            </div>
            <div class="col-md-3">
                <div class="product-card">
                    <h3>Product 5</h3>
                    <p>Description of product 5</p>
                    <button class="btn btn-primary">Buy Now</button>
                </div>
            </div>
            <div class="col-md-3">
                <div class="product-card">
                    <h3>Product 6</h3>
                    <p>Description of product 6</p>
                    <button class="btn btn-primary">Buy Now</button>
                </div>
            </div>
            <div class="col-md-3">
                <div class="product-card">
                    <h3>Product 7</h3>
                    <p>Description of product 7</p>
                    <button class="btn btn-primary">Buy Now</button>
                </div>
            </div>
            <div class="col-md-3">
                <div class="product-card">
                    <h3>Product 8</h3>
                    <p>Description of product 8</p>
                    <button class="btn btn-primary">Buy Now</button>
                </div>
            </div>
            <!-- Add more product cards here -->
        </div>
        <!-- Pagination -->
        <nav aria-label="Page navigation">
            <ul class="pagination justify-content-center">
                <li class="page-item disabled">
                    <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
                </li>
                <li class="page-item active" aria-current="page">
                    <a class="page-link" href="#">1 <span class="sr-only">(current)</span></a>
                </li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item">
                    <a class="page-link" href="#">Next</a>
                </li>
            </ul>
        </nav>
    </div>
</body>

</html>
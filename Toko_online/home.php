<?php 
    include "header.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <title>Home - Keshipedia</title>
    <style>
    body {
        font-family: 'Poppins', sans-serif;
        background-color: #d4edda;
        /* Hijau Muda */
        color: #333;
    }

    /* Hero Section */
    .hero-section {
        background-image: url('https://source.unsplash.com/1600x600/?shopping,store');
        background-size: cover;
        background-position: center;
        height: 500px;
        color: white;
        display: flex;
        justify-content: center;
        align-items: center;
        text-align: center;
        margin-bottom: 40px;
        position: relative;
    }

    .hero-section:before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(167, 201, 87, 0.7);
        /* Hijau Muda Transparan */
        z-index: 1;
    }

    .hero-section div {
        z-index: 2;
    }

    .hero-section h1 {
        font-size: 56px;
        font-weight: 700;
        margin-bottom: 20px;
        color: #ff6f61;
        /* Oranye */
    }

    .hero-section p {
        font-size: 28px;
        margin-bottom: 30px;
        color: #f1f1f1;
    }

    .btn-light {
        background-color: #ff6f61;
        /* Oranye */
        border: none;
        color: #fff;
        padding: 12px 25px;
        font-size: 20px;
        font-weight: 600;
    }

    .btn-light:hover {
        background-color: #e65b55;
        color: #fff;
    }

    /* Categories Section */
    .category {
        margin: 40px 0;
        padding: 20px;
    }

    .category-title {
        text-align: center;
        margin-bottom: 40px;
        font-weight: 600;
        font-size: 32px;
        color: #a7c957;
        /* Hijau Muda */
    }

    .category-card {
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        border: none;
        background-color: #fff;
        border-radius: 10px;
        overflow: hidden;
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
        margin-bottom: 30px;
        display: flex;
        /* Tambahkan flexbox untuk mempermudah penataan */
        flex-direction: column;
        /* Atur untuk menumpuk vertikal */
        justify-content: space-between;
        /* Jarak antar elemen */
    }

    .category-card:hover {
        transform: translateY(-10px);
        box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2);
    }

    .category-card img {
        border-bottom-left-radius: 10px;
        border-bottom-right-radius: 10px;
    }

    .card-title {
        font-size: 22px;
        font-weight: 600;
        color: #ff6f61;
        /* Oranye */
    }

    .row {
        display: flex;
        justify-content: center;
        /* Pusatkan kolom secara horizontal */
        align-items: center;
        /* Pusatkan kolom secara vertikal jika diperlukan */
    }

    /* Testimonial Section */
    .testimonial-section {
        background-color: #a7c957;
        /* Hijau Muda */
        color: white;
        padding: 60px 0;
    }

    .testimonial-section h3 {
        text-align: center;
        margin-bottom: 50px;
        font-weight: 600;
        font-size: 32px;
        color: #ff6f61;
        /* Oranye */
    }

    .testimonial {
        background-color: #2c2c2c;
        padding: 30px;
        border-radius: 10px;
        color: white;
        margin: 15px 0;
        transition: transform 0.3s ease;
    }

    .testimonial:hover {
        transform: translateY(-5px);
        box-shadow: 0 8px 15px rgba(0, 0, 0, 0.3);
    }

    .testimonial p {
        font-size: 18px;
        font-style: italic;
        margin-bottom: 10px;
    }

    .testimonial small {
        font-weight: 600;
        color: #ff6f61;
        /* Oranye */
    }
    </style>
</head>

<body>
    <!-- Hero Section -->
    <section class="hero-section">
        <div>
            <h1>Welcome to Keshipedia!</h1>
            <p>Your One-Stop Online Shop for Everything You Need</p>
            <a href="daftar_produk_pelanggan.php" class="btn btn-light btn-lg">Shop Now</a>
        </div>
    </section>



    <!-- Testimonial Section -->
    <section class="testimonial-section">
        <h3>What Our Customers Say</h3>
        <div class="container">
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="testimonial">
                        <p>"Keshipedia has the best customer service and fast shipping. I always find what I need here!"
                        </p>
                        <small>- Jaka Sambung.</small>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="testimonial">
                        <p>"A fantastic selection of products with great prices. Highly recommend shopping here!"</p>
                        <small>- Linggayoya.</small>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="testimonial">
                        <p>"Shopping on Keshipedia has been a great experience. The products are high-quality and
                            affordable."</p>
                        <small>- Rasya Rafael.</small>
                    </div>
                </div>
            </div>
        </div>
    </section>

</body>

</html>
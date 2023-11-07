<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- boxicon cdn link -->
    <!-- <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'> -->
    <!-- custom css link -->
    <link rel="stylesheet" href="style.css">
    <title>Tea shop</title>
    <link rel="icon" href="image/logo.webp">
</head>

<body>
    <!-- header section start -->
    <header>
        <a href="#home"><img src="image/logo.webp" alt="" width="100"></a>
        <nav class="navbar">
            <ul>
                <li><a href="#home">home</a></li>
                <li><a href="#about">about</a></li>
                <li><a href="#shop">shop</a></li>
                <li><a href="#testimonial">testimonial</a></li>
                <li><a href="#blog">blog</a></li>
            </ul>
        </nav>
        <div class="icons">
            <i class="bx bx-search-alt-2"></i>
            <i class="bx bxs-user"></i>
            <i class="bx bxs-heart"></i>
            <i class="bx bxs-cart-alt"></i>
            <div class="bx bx-menu"></div>
        </div>
    </header>
    <!-- header section end -->
    <!-- home section start -->
    <div class="slider-container" id="home">
        <div class="slider">
            <!-- slide box -->
            <div class="slideBox active">
                <div class="textBox">
                    <h1>herbal medicin tea</h1>
                    <a href="" class="btn">shop now</a>
                </div>
                <div class="imgBox">
                    <img src="image/slider.webp" alt="">
                </div>
            </div>
            <!-- slide box -->
            <div class="slideBox">
                <div class="textBox">
                    <h1>herbal medicin tea</h1>
                    <a href="" class="btn">shop now</a>
                </div>
                <div class="imgBox">
                    <img src="image/slider0.webp" alt="">
                </div>
            </div>
            <!-- slide box -->
            <div class="slideBox">
                <div class="textBox">
                    <h1>herbal medicin tea</h1>
                    <a href="" class="btn">shop now</a>
                </div>
                <div class="imgBox">
                    <img src="image/slider1.avif" alt="">
                </div>
            </div>
            <!-- slide box -->
            <div class="slideBox">
                <div class="textBox">
                    <h1>herbal medicin tea</h1>
                    <a href="" class="btn">shop now</a>
                </div>
                <div class="imgBox">
                    <img src="image/slider2.avif" alt="">
                </div>
            </div>
        </div>
        <div class="controls">
            <li onclick="nextSlide()"><i class="bx bx-right-arrow-alt"></i></li>
            <li onclick="prevSlide()"><i class="bx bx-left-arrow-alt"></i></li>
        </div>
    </div>
    <!-- home section end -->
    <!-- categories section -->
    <div class="categories">
        <div class="box">
            <div class="img-box">
                <img src="image/category (1).jpg" alt="">
            </div>
            <h2>matcha</h2>
        </div>
        <div class="box">
            <div class="img-box">
                <img src="image/category (2).jpg" alt="">
            </div>
            <h2>sinnamon tea</h2>
        </div>
        <div class="box">
            <div class="img-box">
                <img src="image/category (3).jpg" alt="">
            </div>
            <h2>lemon tea</h2>
        </div>
        <div class="box">
            <div class="img-box">
                <img src="image/category (4).jpg" alt="">
            </div>
            <h2>black tea</h2>
        </div>
        <div class="box">
            <div class="img-box">
                <img src="image/category (5).jpg" alt="">
            </div>
            <h2>herbal tea</h2>
        </div>
        <div class="box">
            <div class="img-box">
                <img src="image/category (6).jpg" alt="">
            </div>
            <h2>green tea</h2>
        </div>
    </div>
    <!-- about section -->
    <div class="about" id="about">
        <div class="row">
            <div class="image">
                <img src="image/about.jpg" alt="">
            </div>
            <div class="content">
                <h3>Honey Lemon Tea</h3>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quod corporis explicabo recusandae quis, facilis non minus aliquam possimus soluta harum quidem aspernatur pariatur temporibus velit. Tenetur aperiam illo ipsam reprehenderit.</p>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Recusandae quas consectetur vel ad perspiciatis, totam qui reiciendis distinctio quos eum cum, sed aliquid officiis laborum. Pariatur tempora suscipit excepturi tempore.</p>
                <a href="about.php" class="btn">learn more</a>
            </div>
        </div>
    </div>
    <!-- shop section -->
    <div class="shop" id="shop">
        <div class="heading">
            <h1>BEST SELLER</h1>
            <span>Best Seller Product This Week</span>
        </div>
        <div class="box-container">
            <!-- product -->
            <div class="box">
                <img src="image/product (1).jpg" alt="">
                <div class="detail">
                    <div class="title">
                        <p>green tea</p>
                        <div class="icons">
                            <i class="bx bxs-heart"></i>
                            <i class="bx bxs-cart-alt"></i>
                            <i class="bx bxs-show"></i>
                        </div>
                    </div>
                    <p class="price">$30/-</p>
                    <a href="" class="btn">buy now</a>
                </div>
            </div>
            <!-- product -->
            <!-- product -->
            <div class="box">
                <img src="image/product (2).jpg" alt="">
                <div class="detail">
                    <div class="title">
                        <p>green tea</p>
                        <div class="icons">
                            <i class="bx bxs-heart"></i>
                            <i class="bx bxs-cart-alt"></i>
                            <i class="bx bxs-show"></i>
                        </div>
                    </div>
                    <p class="price">$30/-</p>
                    <a href="" class="btn">buy now</a>
                </div>
            </div>
            <!-- product -->
            <!-- product -->
            <div class="box">
                <img src="image/product (3).jpg" alt="">
                <div class="detail">
                    <div class="title">
                        <p>green tea</p>
                        <div class="icons">
                            <i class="bx bxs-heart"></i>
                            <i class="bx bxs-cart-alt"></i>
                            <i class="bx bxs-show"></i>
                        </div>
                    </div>
                    <p class="price">$30/-</p>
                    <a href="" class="btn">buy now</a>
                </div>
            </div>
            <!-- product -->
            <!-- product -->
            <div class="box">
                <img src="image/product (4).jpg" alt="">
                <div class="detail">
                    <div class="title">
                        <p>green tea</p>
                        <div class="icons">
                            <i class="bx bxs-heart"></i>
                            <i class="bx bxs-cart-alt"></i>
                            <i class="bx bxs-show"></i>
                        </div>
                    </div>
                    <p class="price">$30/-</p>
                    <a href="" class="btn">buy now</a>
                </div>
            </div>
            <!-- product -->
            <!-- product -->
            <div class="box">
                <img src="image/product (5).jpg" alt="">
                <div class="detail">
                    <div class="title">
                        <p>green tea</p>
                        <div class="icons">
                            <i class="bx bxs-heart"></i>
                            <i class="bx bxs-cart-alt"></i>
                            <i class="bx bxs-show"></i>
                        </div>
                    </div>
                    <p class="price">$30/-</p>
                    <a href="" class="btn">buy now</a>
                </div>
            </div>
            <!-- product -->
            <!-- product -->
            <div class="box">
                <img src="image/product (6).jpg" alt="">
                <div class="detail">
                    <div class="title">
                        <p>green tea</p>
                        <div class="icons">
                            <i class="bx bxs-heart"></i>
                            <i class="bx bxs-cart-alt"></i>
                            <i class="bx bxs-show"></i>
                        </div>
                    </div>
                    <p class="price">$30/-</p>
                    <a href="" class="btn">buy now</a>
                </div>
            </div>
            <!-- product -->
        </div>
    </div>
    <!-- shop section end -->
    <!-- testimonial section start -->
    <section class="testimonial" id="testimonial">
        <div class="heading">
            <h1>testimonial</h1>
        </div>
        <div class="box-container">
            <div class="box">
                <img src="image/people2.jpg" alt="">
                <h3>Nimesha Thilakarathne</h3>
                <span>full stack developer</span>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati officia, et illo enim animi, quibusdam tenetur assumenda, id accusamus aliquid ratione eius nemo consectetur atque facilis quo soluta quos cupiditate.</p>
            </div>
            <div class="box">
                <img src="image/people3.jpg" alt="">
                <h3>Himesh Hansana</h3>
                <span>data scientist</span>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati officia, et illo enim animi, quibusdam tenetur assumenda, id accusamus aliquid ratione eius nemo consectetur atque facilis quo soluta quos cupiditate.</p>
            </div>
            <div class="box">
                <img src="image/team-01.jpg" alt="">
                <h3>Isuri Devindi</h3>
                <span>web developer</span>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati officia, et illo enim animi, quibusdam tenetur assumenda, id accusamus aliquid ratione eius nemo consectetur atque facilis quo soluta quos cupiditate.</p>
            </div>
        </div>
    </section>
    <!-- blog section start -->
    <div class="blog" id="blog">
        <div class="heading">
            <h1>our blog</h1>
        </div>
        <div class="box-container">
            <div class="box">
                <img src="image/blog (1).jpg" alt="">
                <div class="content">
                    <div class="date">
                        <span>11</span>
                        <p>jun</p>
                    </div>
                    <h3>natural lemon tea</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.Lorem ipsum dolor sit amet consectetur</p>
                    <a href="" class="btn">read more</a>
                </div>
            </div>
            <!-- blog item -->
            <div class="box">
                <img src="image/blog (2).jpg" alt="">
                <div class="content">
                    <div class="date">
                        <span>11</span>
                        <p>jun</p>
                    </div>
                    <h3>natural lemon tea</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.Lorem ipsum dolor sit amet consectetur</p>
                    <a href="" class="btn">read more</a>
                </div>
            </div>
            <!-- blog item -->
            <div class="box">
                <img src="image/blog (3).jpg" alt="">
                <div class="content">
                    <div class="date">
                        <span>11</span>
                        <p>jun</p>
                    </div>
                    <h3>natural lemon tea</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.Lorem ipsum dolor sit amet consectetur</p>
                    <a href="" class="btn">read more</a>
                </div>
            </div>
            <!-- blog item -->
            <div class="box">
                <img src="image/blog (4).jpg" alt="">
                <div class="content">
                    <div class="date">
                        <span>11</span>
                        <p>jun</p>
                    </div>
                    <h3>natural lemon tea</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.Lorem ipsum dolor sit amet consectetur</p>
                    <a href="" class="btn">read more</a>
                </div>
            </div>
            <!-- blog item -->
            <div class="box">
                <img src="image/blog (5).jpg" alt="">
                <div class="content">
                    <div class="date">
                        <span>11</span>
                        <p>jun</p>
                    </div>
                    <h3>natural lemon tea</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.Lorem ipsum dolor sit amet consectetur</p>
                    <a href="" class="btn">read more</a>
                </div>
            </div>
            <!-- blog item -->
            <div class="box">
                <img src="image/blog (1).jpg" alt="">
                <div class="content">
                    <div class="date">
                        <span>11</span>
                        <p>jun</p>
                    </div>
                    <h3>natural lemon tea</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.Lorem ipsum dolor sit amet consectetur</p>
                    <a href="" class="btn">read more</a>
                </div>
            </div>
            <!-- blog item -->
        </div>
    </div>
    <!-- blog section end -->

   

    <!-- footer section start -->
    <div class="newsletter">
        <div class="img-box">
            <img src="image/email.svg" alt="">
            <p>signup for newsletter</p>
        </div>
        <div class="input">
            <input type="email">
            <button>submit</button>
        </div>
    </div>

    <?php include "footer.php"; ?>
    <script src="script.js"></script>
</body>

</html>
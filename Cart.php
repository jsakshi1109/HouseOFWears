<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>House of Wears</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="style1.css">
    <style>
      button {
        background-color: #280680;
  color: #fff;
  border: none;
  border-radius: 5px;
  padding: 0.5em;
  margin-top: 1em;
  cursor: pointer;
      }

      button:hover {
        background-color: #65499c;
  color: #fff;
      }
    </style>
</head>

<body>
    <header>
        <nav>
            <div class="logo">
                <img src="Logo1.png" alt="Logo">
                <title1>
                    <h5 style="color: #280680;"> House of Wears </h5>
                </title1>
                <tagline>
                    <H6 style="color: #65499c;"> Rent/Buy.Wear.Repeat </H6>
                </tagline>
            </div>
            <div class="search-container">
                <form>
                    <input type="text" placeholder="What are you looking for?">
                    <button type="submit">Search</button>
                </form>
            </div>
            <ul class="nav-links">
                <li><a href="index.php">Home</a></li>
                <li><a href="AboutUs.php">About Us</a></li>
                <li><a href="Rental.php">Rent</a></li>
                <li><a href="Shop.php">Shop</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <div class="containe">
            <h1 style="text-align: center;">CART</h1>
            <!-- Cart Start -->
    <div class="container-fluid pt-5">
        <div class="row px-xl-5">
            <div class="col-lg-8 table-responsive mb-5">
                <table class="table table-bordered text-center mb-0">
                    <thead class="bg-secondary text-dark">
                        <tr>
                            <th>Products</th>
                            <th>Price</th>
                            <th>Quantity</th>
                            <th>Total</th>
                            <th>Remove</th>
                        </tr>
                    </thead>
                    <tbody class="align-middle">
                        <tr>
                            <td class="align-middle"><img src="photo.jpeg" alt="" style="width: 50px;">Product 1</td>
                            <td class="align-middle">₹150</td>
                            <td class="align-middle">
                                <div class="input-group quantity mx-auto" style="width: 100px;">
                                    <div class="input-group-btn">
                                        <button class="btn btn-sm btn-primary btn-minus" >-
                                        <i class="fa fa-minus"></i>
                                        </button>
                                    </div>
                                    <input type="text" class="form-control form-control-sm bg-secondary text-center" value="1">
                                    <div class="input-group-btn">
                                        <button class="btn btn-sm btn-primary btn-plus">+
                                            <i class="fa fa-plus"></i>
                                        </button>
                                    </div>
                                </div>
                            </td>
                            <td class="align-middle">₹150</td>
                            <td class="align-middle"><button class="btn btn-sm btn-primary"><i class="fa fa-times">X</i></button></td>
                        </tr>
                        <tr>
                            <td class="align-middle"><img src="jeansTop.jpg" alt="" style="width: 50px;"> Product 2</td>
                            <td class="align-middle">₹150</td>
                            <td class="align-middle">
                                <div class="input-group quantity mx-auto" style="width: 100px;">
                                    <div class="input-group-btn">
                                        <button class="btn btn-sm btn-primary btn-minus" >
                                        <i class="fa fa-minus">-</i>
                                        </button>
                                    </div>
                                    <input type="text" class="form-control form-control-sm bg-secondary text-center" value="1">
                                    <div class="input-group-btn">
                                        <button class="btn btn-sm btn-primary btn-plus">+</button>
                                    </div>
                                </div>
                            </td>
                            <td class="align-middle">₹150</td>
                            <td class="align-middle"><button class="btn btn-sm btn-primary"><i class="fa fa-times">X</i></button></td>
                        </tr>
                        <tr>
                            <td class="align-middle"><img src="DenimOnepeice.jpg" alt="" style="width: 50px;"> Product 2</td>
                            <td class="align-middle">₹150</td>
                            <td class="align-middle">
                                <div class="input-group quantity mx-auto" style="width: 100px;">
                                    <div class="input-group-btn">
                                        <button class="btn btn-sm btn-primary btn-minus" >
                                        <i class="fa fa-minus">-</i>
                                        </button>
                                    </div>
                                    <input type="text" class="form-control form-control-sm bg-secondary text-center" value="1">
                                    <div class="input-group-btn">
                                        <button class="btn btn-sm btn-primary btn-plus">
                                            <i class="fa fa-plus">+</i>
                                        </button>
                                    </div>
                                </div>
                            </td>
                            <td class="align-middle">₹150</td>
                            <td class="align-middle"><button class="btn btn-sm btn-primary"><i class="fa fa-times">X</i></button></td>
                        </tr>
                        <tr>
                            <td class="align-middle"><img src="SkirtTop.jpg" alt="" style="width: 50px;"> Product 3</td>
                            <td class="align-middle">₹150</td>
                            <td class="align-middle">
                                <div class="input-group quantity mx-auto" style="width: 100px;">
                                    <div class="input-group-btn">
                                        <button class="btn btn-sm btn-primary btn-minus" >
                                        <i class="fa fa-minus">-</i>
                                        </button>
                                    </div>
                                    <input type="text" class="form-control form-control-sm bg-secondary text-center" value="1">
                                    <div class="input-group-btn">
                                        <button class="btn btn-sm btn-primary btn-plus">
                                            <i class="fa fa-plus">+</i>
                                        </button>
                                    </div>
                                </div>
                            </td>
                            <td class="align-middle">₹150</td>
                            <td class="align-middle"><button class="btn btn-sm btn-primary"><i class="fa fa-times">X</i></button></td>
                        </tr>
                        <tr>
                            <td class="align-middle"><img src="SkirtTop.jpg" alt="" style="width: 50px;"> Product 4</td>
                            <td class="align-middle">₹150</td>
                            <td class="align-middle">
                                <div class="input-group quantity mx-auto" style="width: 100px;">
                                    <div class="input-group-btn">
                                        <button class="btn btn-sm btn-primary btn-minus" ><i>-</i></button>
                                    </div>
                                    <input type="text" class="form-control form-control-sm bg-secondary text-center" value="1">
                                    <div class="input-group-btn">
                                        <button class="btn btn-sm btn-primary btn-plus">
                                            <i class="fa fa-plus">+</i>
                                        </button>
                                    </div>
                                </div>
                            </td>
                            <td class="align-middle">₹150</td>
                            <td class="align-middle"><button class="btn btn-sm btn-primary"><i class="fa fa-times">X</i></button></td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="col-lg-4">
                <form class="mb-5" action="">
                    <div class="input-group">
                        <input type="text" class="form-control p-4" placeholder="Coupon Code">
                        <div class="input-group-append">
                            <button class="btn btn-primary">Apply Coupon</button>
                        </div>
                    </div>
                </form>
                <div class="card border-secondary mb-5">
                    <div class="card-header bg-secondary border-0">
                        <h4 class="font-weight-semi-bold m-0">Cart Summary</h4>
                    </div>
                    <div class="card-body">
                        <div class="d-flex justify-content-between mb-3 pt-1">
                            <h6 class="font-weight-medium">Subtotal</h6>
                            <h6 class="font-weight-medium">₹150</h6>
                        </div>
                        <div class="d-flex justify-content-between">
                            <h6 class="font-weight-medium">Shipping</h6>
                            <h6 class="font-weight-medium">₹10</h6>
                        </div>
                    </div>
                    <div class="card-footer border-secondary bg-transparent">
                        <div class="d-flex justify-content-between mt-2">
                            <h5 class="font-weight-bold">Total</h5>
                            <h5 class="font-weight-bold">₹160</h5>
                        </div>
                        <button id="checkout">Proceed to Checkout</button>

<script>
  const addToCartButton = document.getElementById('checkout');

  addToCartButton.addEventListener('click', () => {
    window.location.href = 'Paywall.php';
  });
</script>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Cart End -->
        </div>

        </form>
    </main>

    <footer>
        <p>&copy; HOUSE OF WEARS. All rights reserved.</p>
    </footer>

    <script src="script.js"></script>
</body>

</html>
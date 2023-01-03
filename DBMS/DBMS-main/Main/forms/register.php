<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
        integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="../style.css">
    <link rel="stylesheet" href="foundForm.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Tangerine">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Lemon&family=Monoton&family=Montserrat:ital,wght@0,200;0,400;0,500;1,300&display=swap"
        rel="stylesheet">
    <title>Register</title>
</head>

<body>
    <nav class="navbar sticky-top navbar-expand-lg navbar-dark">
        <a class="navbar-brand grow" href="../index.html">gotLost</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mx-auto">
                <li class="nav-item">
                    <a class="nav-link grow" href="../index.html">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link grow" href="lostForm.html">Lost</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link grow" href="foundForm.html">Found</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link grow" href="../about_us.html">About Us</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link grow" href="contactus.html">Contact Us</a>
                </li>
            </ul>
            <a href="#"><i class="fas fa-user signin grow"> SignIn</i></a>
        </div>
    </nav>

    <main>
        <section>
            <div class="container" id="main-container">
                <div class="image">
                    <img src="../images/register.jpg" alt="">
                </div>

                <div class="container p-5 mt-5" id="form-container">

                    <h1 class="text-center">Resgister Here <i class="far fa-smile-beam"></i></h1>
                    <form class="mt-4">
                        <div class="input-group mb-4">
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-primary" id="inputGroup-sizing-default">Full
                                    Name*</span>
                            </div>
                            <input type="text" class="form-control" placeholder="John Cena" aria-label="Default"
                                aria-describedby="inputGroup-sizing-default">
                        </div>
                        <div class="input-group mb-4">
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-primary" id="inputGroup-sizing-default">Email*</span>
                            </div>
                            <input type="email" class="form-control" placeholder="cenajohn@gmail.com"
                                aria-label="Default" aria-describedby="inputGroup-sizing-default">
                        </div>
                        <div class="input-group mb-4">
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-primary" id="inputGroup-sizing-default">Phone
                                    No.</span>
                            </div>
                            <input type="text" name="phone[1][number]" class="form-control"
                                placeholder="+91 8888 8888" />
                        </div>
                        <div class="input-group mb-4">
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-primary" id="inputGroup-sizing-default">Sex*</span>
                            </div>
                            <select id="inputState" class="form-control">
                                <option>Choose...</option>
                                <option>Male</option>
                                <option>Female</option>
                                <option>Other</option>
                            </select>
                        </div>
                        <div class="input-group mb-4">
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-primary" id="inputGroup-sizing-default">Year*</span>
                            </div>
                            <select id="inputState" class="form-control">
                                <option selected>Choose...</option>
                                <option value="first">&#8544;</option>
                                <option value="second">&#8545;</option>
                                <option value="third">&#8546;</option>
                                <option value="fourth">&#8547;</option>
                            </select>
                        </div>
                        <div class="input-group mb-4">
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-primary" id="inputGroup-sizing-default">Branch*</span>
                            </div>
                            <select id="inputState" class="form-control">
                                <option selected>Choose...</option>
                                <option value="cse">Computer Science Engineering</option>
                                <option value="it">Information Technology</option>
                                <option value="ec">Electronics And Communication Engineering</option>
                                <option value="ee">Electrical Engineering</option>
                                <option value="au">Automobile Engineering</option>
                                <option value="me">Mechanical Engineering</option>
                            </select>
                        </div>
                        <div class="input-group mb-4">
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-primary" id="inputGroup-sizing-default">Password*</span>
                            </div>
                            
                            <input type="password" class="form-control" id="inputPassword4" placeholder="Password">

                        </div>
                        <div class="input-group mb-4">
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-primary" id="inputGroup-sizing-default">Confirm Password*</span>
                            </div>
                            
                            <input type="password" class="form-control" id="inputPassword4" placeholder="Confirm Password">
                            
                        </div>
                        <div class="form-check mb-3">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1"><a href="#">Agree terms and
                                conditions</a></label>
                            </div>
                        <div class="submit-button text-center">
                            <button type="submit" class="btn btn-outline-primary ">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </section>
    </main>
    <footer id="sticky-footer" class=" py-2 bg-dark">
        <div class="brand">
            <a class="navbar-brand" href="#">gotLost</a>
        </div>
        <div class="copyright">
            <small> <span>Copyright &copy;</span> <span>All Rights Reserved</span> <span>Terms of Use</span> and
                <span>Privacy Policy</span></small>
        </div>
    </footer>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
</body>

</html>
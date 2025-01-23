<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Landing Page - Web Profile</title>
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic" rel="stylesheet" type="text/css" />
        <link href="https://cdnjs.cloudflare.com/ajax/libs/SimpleLightbox/2.1.0/simpleLightbox.min.css" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
        <link href="<?= base_url(); ?>/css/styles.css" rel="stylesheet" />
    </head>
    <body id="page-top">
        <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3" id="mainNav">
            <div class="container px-4 px-lg-5">
                <a class="navbar-brand" href="#page-top">Web Profile</a>
                <button class="navbar-toggler navbar-toggler-right" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto my-2 my-lg-0">
                        <li class="nav-item"><a class="nav-link" href="#about">About</a></li>
                        <li class="nav-item"><a class="nav-link" href="#education">Education</a></li>
                        <li class="nav-item"><a class="nav-link" href="#job">Job</a></li>
                        <li class="nav-item"><a class="nav-link" href="#contact">Contact Me</a></li>
                    </ul>
                </div>
            </div>
            <a class="btn btn-primary btn-lg" href="/web/education">Login</a>
        </nav>
        
        <header class="masthead">
            <div class="container px-4 px-lg-5 h-100">
                <div class="row gx-4 gx-lg-5 h-100 align-items-center justify-content-center text-center">
                    <div class="col-lg-8 align-self-end">
                        <h1 class="text-white font-weight-bold">Hello, I'm Reza!</h1>
                        <hr class="divider" />
                    </div>
                    <div class="col-lg-8 align-self-baseline">
                        <p class="text-white-75 mb-5">
                            "Innovation is not just about new ideas, but the ability to see opportunities in every challenge."
                        </p>
                        <a class="btn btn-primary btn-xl" href="#about">About Me</a>
                    </div>
                </div>
            </div>
        </header>
        
        <section class="page-section bg-primary" id="about">
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-lg-8 text-center">
                        <h2 class="text-white mt-0">About</h2>
                        <hr class="divider divider-light" />
                        <div class="d-flex align-items-center">
                            <div class="flex-shrink-0 mr-4">
                                <img src="<?= base_url(); ?>/img/profile.jpg"
                                    alt="Generic placeholder image" class="img-fluid" style="width: 180px; border-radius: 10px;">
                            </div>
                            <div class="text-white-75 text-start flex-grow-1 ms-3">
                                A passionate "Web Developer" with a knack for Web-based application development.
                                With 3 years of experience, I thrive on turning ideas into reality and delivering results that matter. 
                                My work is driven by the belief that creativity and technology go hand in hand to shape the future.
                                When I’m not working, you’ll find me exploring new tech trends.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        <section class="page-section" id="education">
            <div class="container px-4 px-lg-5">
                <h2 class="text-center mt-0">Education</h2>
                <hr class="divider" />
                <div class="row gx-4 gx-lg-5">
                    <?php foreach ($education as $s): ?>
                        <div class="col-lg-4 col-md-8 text-center">
                            <div class="mt-5">
                                <div class="flex-shrink-0 mb-4 h-10">
                                    <img src="<?= base_url(); ?>img/<?= $s['level'] ?>.jpg"
                                        alt="Generic placeholder image" class="img-fluid" style="height: 180px; border-radius: 10px;">
                                </div>
                                <h3 class="h4 mb-2"><?= $s['name'] ?></h3>
                                <p class="text-muted mb-0"><?= $s['description'] ?></p>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>
       
        <section class="page-section" id="keahlian">
            <div class="container px-4 px-lg-5">
                <h2 class="mb-4">Keahlian</h2>
                <div class="row">
                    <div class="col-md-6">
                        <div class="p-3 border rounded mb-3">
                            Programming
                            <p>Mahir dalam berbagai bahasa pemrograman seperti Python, JavaScript, dan PHP.</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="p-3 border rounded mb-3">
                            Desain
                            <p>Berpengalaman dalam desain grafis dan UI/UX menggunakan tools seperti Figma dan Adobe XD.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Pekerjaan Section -->
        <section class="page-section" id="pekerjaan" class="mt-5">
            <div class="container px-4 px-lg-5">
                <h2 class="mb-4">Pekerjaan</h2>
                <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-4">
                    <div class="col">
                        <div class="card h-100">
                            <div class="card-body">
                                <h5 class="card-title">Software Engineer</h5>
                                <p class="card-text">Mengembangkan aplikasi berbasis web untuk perusahaan teknologi.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card h-100">
                            <div class="card-body">
                                <h5 class="card-title">UI/UX Designer</h5>
                                <p class="card-text">Merancang antarmuka pengguna yang intuitif dan menarik.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card h-100">
                            <div class="card-body">
                                <h5 class="card-title">Data Analyst</h5>
                                <p class="card-text">Menganalisis data untuk membantu pengambilan keputusan strategis.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card h-100">
                            <div class="card-body">
                                <h5 class="card-title">Digital Marketer</h5>
                                <p class="card-text">Meningkatkan visibilitas dan pemasaran produk melalui platform digital.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="page-section" id="contact">
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-lg-8 col-xl-6 text-center">
                        <h2 class="mt-0">Contact Me</h2>
                        <hr class="divider" />
                        <p class="text-muted mb-5">Ready to start your next project with me? Send a messages and i will get back to you as soon as possible!</p>
                    </div>
                </div>
                <div class="row gx-4 gx-lg-5 justify-content-center mb-5">
                    <div class="col-lg-6">
                        <form id="contactForm" data-sb-form-api-token="API_TOKEN">
                            <div class="form-floating mb-3">
                                <input class="form-control" id="name" type="text" placeholder="Enter your name..." data-sb-validations="required" />
                                <label for="name">Full name</label>
                                <div class="invalid-feedback" data-sb-feedback="name:required">A name is required.</div>
                            </div>
                            <div class="form-floating mb-3">
                                <input class="form-control" id="email" type="email" placeholder="name@example.com" data-sb-validations="required,email" />
                                <label for="email">Email address</label>
                                <div class="invalid-feedback" data-sb-feedback="email:required">An email is required.</div>
                                <div class="invalid-feedback" data-sb-feedback="email:email">Email is not valid.</div>
                            </div>
                            <div class="form-floating mb-3">
                                <input class="form-control" id="phone" type="tel" placeholder="(123) 456-7890" data-sb-validations="required" />
                                <label for="phone">Phone number</label>
                                <div class="invalid-feedback" data-sb-feedback="phone:required">A phone number is required.</div>
                            </div>
                            <div class="form-floating mb-3">
                                <textarea class="form-control" id="message" type="text" placeholder="Enter your message here..." style="height: 10rem" data-sb-validations="required"></textarea>
                                <label for="message">Message</label>
                                <div class="invalid-feedback" data-sb-feedback="message:required">A message is required.</div>
                            </div>
                            <div class="d-none" id="submitSuccessMessage">
                                <div class="text-center mb-3">
                                    <div class="fw-bolder">Form submission successful!</div>
                                    To activate this form, sign up at
                                    <br />
                                </div>
                            </div>
                            <div class="d-none" id="submitErrorMessage"><div class="text-center text-danger mb-3">Error sending message!</div></div>
                            <div class="d-grid"><button class="btn btn-primary btn-xl" id="submitButton" type="submit">Submit</button></div>
                        </form>
                    </div>
                </div>
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-lg-4 text-center mb-5 mb-lg-0">
                        <i class="bi-phone fs-2 mb-3 text-muted"></i>
                        <div>+6282 34089 0772</div>
                    </div>
                </div>
            </div>
        </section>
        
        <footer class="sticky-footer bg-white">
            <div class="container my-auto">
                <div class="copyright text-center my-auto">
                    <span>Copyright &copy; Rifqi Reza Mahesa 2025</span>
                </div>
            </div>
        </footer>
        <script src="<?= base_url(); ?>vendor/jquery/jquery.min.js"></script>
        <script src="<?= base_url(); ?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

        <script src="<?= base_url(); ?>vendor/jquery-easing/jquery.easing.min.js"></script>

        <script src="<?= base_url(); ?>js/sb-admin-2.min.js"></script>
    </body>
</html>

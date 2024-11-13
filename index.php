<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog</title>
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- ------CSS LINK------>
    <link rel="stylesheet" href="style.css">
    
</head>
<body>
         <!-- navigation -->
       <nav class="navigation " right="20px">
        <a href="index.php">Home</a>
        <a href="index.php#about">About Us</a>
        <a href="register_form.php">Blogs</a>
        <a href="index.php#contact" id="btn">Contact Us</a>
       </nav>
    <!-- ********************* -->
         <!-- Banner -->
         <section class="banner">
             <div class="bannerThought">
                 <h1><span>Discover</span> Monitor & Share Engaging Content</h1>
                 <p class="p1">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Debitis provident temporibus deleniti porro, magni cum itaque dolorem quia harum pariatur!</p>
                 <a href="#"class="btn">Explore Blogs</a>
                </div>
                <div class="bannerImg">
                    <img src="istockphoto-1164102275-1024x1024.jpg" alt="Not Found" height="400px" width="650px" style="border-radius:10px">
                </div>
            </section>
            <!-- ********************* -->
                 <!-- About us -->
        <h1 class="heading">About Us</h1>          
        <div class="aboutUs" id="about">
            <div class="aboutImg">
                <img src="profile-pic (23).png" alt="Not Found" height="300px" width="300px">
            </div>
            <div class="aboutContent">
                <p><span>My name is Reetesh Prajapati </span> currently pursuring <b>B.tech  3year computer science</b>  From <b> Adina Institute Science And Technology Sagar.</b>   Sit voluptas, optio, itaque quibusdam in, ipsum sed obcaecati architecto repellat aut rerum voluptatem quam possimus! Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis eos nisi similique obcaecati molestiae consequatur reprehenderit, corporis sint dolorum quidem impedit eum, veritatis nobis dolor nesciunt dolore excepturi maiores non! Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem iste assumenda quia, quas sint cum enim animi suscipit, aperiam asperiores ipsam blanditiis culpa necessitatibus cupiditate ullam consectetur architecto quasi explicabo, eius vitae temporibus? Accusantium natus esse perspiciatis necessitatibus in dolor. Lorem ipsum dolor sit amet consectetur, adipisicing elit. Exercitationem, obcaecati ut nihil enim, temporibus ipsam esse, eum consequuntur harum iure saepe error quod ab. Dolores eos iste, quia ad vero, repellat alias laudantium id fugiat quae, fugit ipsum. Adipisci, fugit. </p>
            </div>
        </div>
            <!-- ********************* -->
                <!-- Recent blog -->
        <div class="recentblogs" id="recentBlog">
            <h1 class="heading" style="color: #fff;">Recent Blogs</h1>
            <div class="blogsDiv">
                <div class="individualRecentBlogs">
                    <img src="o.jpg" alt="Not Found">
                    <div class="recentBlogContent">
                        <h4>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Facilis, nam.</h4>
                        <b>By TechySawan , 01-09-2023</b>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorem labore aut tempora placeat at voluptatibus!</p>
                        <a href="admin/index.php" class="btn">Read More</a>
                    </div>
                </div>
                <div class="individualRecentBlogs">
                    <img src="e.jpg" alt="Not Found">
                    <div class="recentBlogContent">
                        <h4>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Facilis, nam.</h4>
                        <b>By TechySawan , 01-09-2023</b>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorem labore aut tempora placeat at voluptatibus!</p>
                        <a href="admin/index.php" class="btn">Read More</a>
                    </div>
                </div>
                <div class="individualRecentBlogs">
                    <img src="b.jpg" alt="Not Found">
                    <div class="recentBlogContent">
                        <h4>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Facilis, nam.</h4>
                        <b>By TechySawan , 01-09-2023</b>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorem labore aut tempora placeat at voluptatibus!</p>
                        <a href="admin/index.php" class="btn">Read More</a>
                    </div>
                </div>
            </div>
           
        </div>         

<!-- ****************************************************** -->
           <!-- Contact us  -->
            <h1 class="heading">Contact Us</h1>
            <div class="contactUs" id="contact">
                <div class="contactImg">
                    <img src="w.jpg" alt="">
                </div>
                <form action="connect_contact.php" method="post">
                    <h2>Get In Touch</h2>
                    <div class="formAddress">
                        <div>
                            <i class="fa fa-map-marker " aria-hidden="true"></i>
                            <p>Address : <span>Greater Noida</span></p>
                        </div>
                        <div>
                            <i class="fa fa-envelope-open" aria-hidden="true"></i>
                            <p>Email Id : <span>abc@gmail.com</span></p>
                        </div>
                        <div>
                            <i class="fa fa-phone" aria-hidden="true"></i>
                            <p>Phone No : <span>+91-7240954668</span></p>
                        </div>
                    </div>
                    <input type="text" class="formField" placeholder="Name" name="name">
                    <input type="text" class="formField" placeholder="Phone no" name="phone">
                    <input type="email" class="formField" placeholder="Email Id" name="email">
                    <input type="text" class="formField" placeholder="Subject" name="subject">
                    <textarea name="message" class="formField" placeholder="Message"></textarea>
                    <div class="formBtn">
                    
                        <input  type="Submit" class="btn" value="Submit" name="contactSubmit" >
                        <input  type="Reset" class="btn" value="Reset" name="reset">
                    </div>
                </form>
            </div>
            <!-- map -->
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d228.07330725628339!2d78.73012815597664!3d23.847992792160504!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3978d6c0ae851997%3A0xc6e3bfbfeeaa4240!2sShiva%20Stationery%20%26%20Photocopy!5e0!3m2!1sen!2sin!4v1726996568568!5m2!1sen!2sin" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
<!-- <footer></footer> -->
 <footer>
    <p><i class="fa fa-copyright" aria-hidden="true"></i><?php echo date('Y');?> Copyright All Right Reserved</p>
    <ul class="icon">
        <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
        <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
        <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
        <a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
    </ul>

 </footer>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js"
    integrity="sha512-7eHRwcbYkK4d9g/6tD/mhkf++eoTHwpNM9woBxtPUBWm67zeAfFC+HrdoE2GanKeocly/VxeLvIqwvCdk7qScg=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<!-- ------JS LINK------>
<script src="script.js"></script>
</body> 
</html>
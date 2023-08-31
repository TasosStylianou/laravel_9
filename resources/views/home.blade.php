@section('content')
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.16/dist/tailwind.min.css" rel="stylesheet">
    <link href="resources/css/style.css" rel="stylesheet">
    <title>Your Website</title>
</head>
<body class="bg-white text-black">
<header class="bg-white menu header">
    <div class="container mx-auto flex justify-between items-center">
        <div class="flex items-center">
            <img src="resources/images/logo.png" alt="Logo" class="h-12 w-12 mr-2">
        </div>
        <nav class="flex space-x-4">
            <a href="#about_us" class="hover:text-gray-300 text-black">About Us</a>
            <a href="#products" class="hover:text-gray-300 text-black">Products</a>
            <a href="#services" class="hover:text-gray-300 text-black">Services</a>
            <a href="#contact_us" class="hover:text-gray-300 text-black">Contact Us</a>
        </nav>
        <div class="flex items-center">
            <input type="text" placeholder="Search"
                   class="rounded-l-lg py-1 px-2 bg-gray-800 text-white focus:outline-none">
            <button class="bg-blue-500 hover:bg-blue-600 text-white py-1 px-4 rounded-r-lg">Search</button>
        </div>
    </div>
</header>
<img src="resources/images/image1.png" alt="Image 1" class="w-full"/>
<div class="flex about_us" id="about_us">
    <div class="w-1/2 p-8">
        <h1 class=" font-bold " style="font-size: 30px">About Us</h1>
        <p style="color: orange;padding-bottom: 25px">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam in justo ac risus tincidunt eleifend at et
            mi.
        </p>
        <p style="padding: 25px 0px 25px 0px ">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent scelerisque hendrerit porttitor.
            Nunc placerat lectus quam, a pellentesque nibh facilisis non.
            Donec egestas massa a orci rhoncus condimentum.
            Maecenas in lacus nec felis mollis porttitor.
            Nam velit sapien, vulputate nec ex a, elementum facilisis eros.
            Etiam eros arcu, posuere eget porta id, lacinia laoreet quam.

        </p>
        <p style="padding: 25px 0px 25px 0px ">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent scelerisque hendrerit porttitor.
            Nunc placerat lectus quam, a pellentesque nibh facilisis non.
            Donec egestas massa a orci rhoncus condimentum.
            Maecenas in lacus nec felis mollis porttitor.
            Nam velit sapien, vulputate nec ex a, elementum facilisis eros.
            Etiam eros arcu, posuere eget porta id, lacinia laoreet quam.

        </p>
        <p style="padding: 25px 0px 25px 0px ">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent scelerisque hendrerit porttitor.
            Nunc placerat lectus quam, a pellentesque nibh facilisis non.
            Donec egestas massa a orci rhoncus condimentum.
            Maecenas in lacus nec felis mollis porttitor.
            Nam velit sapien, vulputate nec ex a, elementum facilisis eros.
            Etiam eros arcu, posuere eget porta id, lacinia laoreet quam.

        </p>
    </div>

    <!-- Right side (image) -->
    <div class="w-1/2">
        <img src="resources/images/image2.png" alt="About Us Image" class="w-full h-full object-cover"/>
    </div>
</div>


<div class="services" id="services" style="background-color: #e6fafa">
    <h1 class=" font-bold " style="font-size: 30px">Services</h1>
    <img src="resources/images/icon2.svg" class=" object-cover" style="height: 75px; width: 75px" align="right"/>
    <img src="resources/images/icon1.svg" class=" object-cover" style="height: 75px; width: 75px" align="left"/>
    <div class="flex" style="margin-top: 100px">
        <!-- Left section -->
        <div class="w-1/3 p-8">
            <ul class="list-disc pl-4">
                <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent scelerisque hendrerit porttitor.
                    Nunc placerat lectus quam, a pellentesque nibh facilisis non.
                    Donec egestas massa a orci rhoncus condimentum.
                </li>
                <br>
                <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent scelerisque hendrerit porttitor.
                    Nunc placerat lectus quam, a pellentesque nibh facilisis non.
                    Donec egestas massa a orci rhoncus condimentum.
                </li>
                <br>
                <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent scelerisque hendrerit porttitor.
                    Nunc placerat lectus quam, a pellentesque nibh facilisis non.
                    Donec egestas massa a orci rhoncus condimentum.
                </li>
            </ul>
        </div>

        <!-- Middle section -->
        <div class="w-1/3 p-8">
            <ul class="list-disc pl-4">
                <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent scelerisque hendrerit porttitor.
                    Nunc placerat lectus quam, a pellentesque nibh facilisis non.
                    Donec egestas massa a orci rhoncus condimentum.
                </li>
                <br>
                <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent scelerisque hendrerit porttitor.
                    Nunc placerat lectus quam, a pellentesque nibh facilisis non.
                    Donec egestas massa a orci rhoncus condimentum.
                </li>
                <br>
                <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent scelerisque hendrerit porttitor.
                    Nunc placerat lectus quam, a pellentesque nibh facilisis non.
                    Donec egestas massa a orci rhoncus condimentum.
                </li>
            </ul>
        </div>

        <!-- Right section -->
        <div class="w-1/3 p-8">
            <ul class="list-disc pl-4">
                <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent scelerisque hendrerit porttitor.
                    Nunc placerat lectus quam, a pellentesque nibh facilisis non.
                    Donec egestas massa a orci rhoncus condimentum.
                </li>
                <br>
                <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent scelerisque hendrerit porttitor.
                    Nunc placerat lectus quam, a pellentesque nibh facilisis non.
                    Donec egestas massa a orci rhoncus condimentum.
                </li>
                <br>
                <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent scelerisque hendrerit porttitor.
                    Nunc placerat lectus quam, a pellentesque nibh facilisis non.
                    Donec egestas massa a orci rhoncus condimentum.
                </li>
            </ul>
        </div>
    </div>
</div>
<div class="flex products" id="products">
    <h1 class=" font-bold " style="font-size: 30px">Products</h1>
    <div class="w-1/3 p-8" style="margin-top: 100px">
        <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent scelerisque hendrerit porttitor.
            Nunc placerat lectus quam, a pellentesque nibh facilisis non.
            Donec egestas massa a orci rhoncus condimentum.
            Maecenas in lacus nec felis mollis porttitor.
            Nam velit sapien, vulputate nec ex a, elementum facilisis eros.
            Etiam eros arcu, posuere eget porta id, lacinia laoreet quam.
        </p>
    </div>

    <div class="w-1/3 p-8 relative" style="margin-top: 100px">
        <div class=" flex items-start justify-center mt-auto">
            <h3 class="text-xl font-semibold mb-2">Wheat</h3>
        </div>
        <div class=""> <!-- Wrap the <p> element in a new container -->
            <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent scelerisque hendrerit porttitor.
                Nunc placerat lectus quam, a pellentesque nibh facilisis non.
                Donec egestas massa a orci rhoncus condimentum.
                Maecenas in lacus nec felis mollis porttitor.
                Nam velit sapien, vulputate nec ex a, elementum facilisis eros.
            </p>
        </div>
        <div class="bg-cover bg-center h-40 mt-4 absolute inset-0 opacity-25"
             style="background-image: url('resources/images/image2.png');"></div>
    </div>

    <div class="w-1/3 p-8" style="margin-top: 100px">
        <div class="relative">
            <img src="resources/images/image1.png" alt="Image" class="w-full h-full object-cover" style="height: 260px"/>
            <p class="absolute bottom-0 left-0 right-0 p-4 bg-white text-black opacity-75 text-center">Barley</p>
        </div>
    </div>

</div>
<div class="flex products" style="margin-left: 130px">
    <div class="w-1/3 p-8" style="margin-top: 100px">
        <div class="relative">
            <img src="resources/images/rye.jpg" alt="Image" class="w-full h-full object-cover " style="height: 260px"/>
            <p class="absolute bottom-0 left-0 right-0 p-4 bg-white text-black opacity-75 text-center">Rye</p>
        </div>
    </div>

    <div class="w-1/3 p-8 relative" style="margin-top: 100px">
        <div class="relative">
            <img src="resources/images/beans.jpg" alt="Image" class="w-full h-full object-cover" style="height: 260px"/>
            <p class="absolute bottom-0 left-0 right-0 p-4 bg-white text-black opacity-75 text-center">Beans</p>
        </div>
    </div>

    <div class="w-1/3 p-8" style="margin-top: 100px">
        <div class="relative">
            <img src="resources/images/peas.jpg" alt="Image" class="w-full h-full object-cover" style="height: 260px"/>
            <p class="absolute bottom-0 left-0 right-0 p-4 bg-white text-black opacity-75 text-center">Peas</p>
        </div>
    </div>
</div>
<div class="flex justify-center items-center opacity-50" style="padding-top: 50px">
    <img src="resources/images/logo.png" alt="Logo" class="h-15 w-15 mr-2">
</div>

<div class="flex products" id="contact_us">
    <div class="w-1/2 p-8" style="margin-top: 100px ; background-color: #e6fafa">
        <h1 class="font-bold text-2xl mb-4">Contact Us</h1>
        <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent scelerisque hendrerit porttitor.
            Nunc placerat lectus quam, a pellentesque nibh facilisis non.
        </p>
        <div class="flex mt-4">
            <div class="w-1/4">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                     stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z"/>
                    <path stroke-linecap="round" stroke-linejoin="round"
                          d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z"/>
                </svg>

            </div>
            <div class="w-3/4">
                <p>123 Street, City</p>
            </div>
        </div>
        <div class="flex mt-2">
            <div class="w-1/4">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                     stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round"
                          d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 002.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 01-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 00-1.091-.852H4.5A2.25 2.25 0 002.25 4.5v2.25z"/>
                </svg>

            </div>
            <div class="w-3/4">
                <p>123-456-7890</p>
            </div>
        </div>
        <div class="flex mt-2">
            <div class="w-1/4">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                     stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round"
                          d="M14.857 17.082a23.848 23.848 0 005.454-1.31A8.967 8.967 0 0118 9.75v-.7V9A6 6 0 006 9v.75a8.967 8.967 0 01-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 01-5.714 0m5.714 0a3 3 0 11-5.714 0M3.124 7.5A8.969 8.969 0 015.292 3m13.416 0a8.969 8.969 0 012.168 4.5"/>
                </svg>
            </div>
            <div class="w-3/4">
                <p>987-654-3210</p>
            </div>
        </div>
        <div class="flex mt-2">
            <div class="w-1/4">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                     stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round"
                          d="M2.25 13.5h3.86a2.25 2.25 0 012.012 1.244l.256.512a2.25 2.25 0 002.013 1.244h3.218a2.25 2.25 0 002.013-1.244l.256-.512a2.25 2.25 0 012.013-1.244h3.859m-19.5.338V18a2.25 2.25 0 002.25 2.25h15A2.25 2.25 0 0021.75 18v-4.162c0-.224-.034-.447-.1-.661L19.24 5.338a2.25 2.25 0 00-2.15-1.588H6.911a2.25 2.25 0 00-2.15 1.588L2.35 13.177a2.25 2.25 0 00-.1.661z"/>
                </svg>

            </div>
            <div class="w-3/4">
                <p>info@example.com</p>
            </div>
        </div>
    </div>
    <div class="w-1/2 p-8 relative" style="margin-top: 100px">
        <h1 class="font-bold text-2xl mb-4">Get in touch</h1>
        <div class="mb-4">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                 stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round"
                      d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z"/>
            </svg>
            <input type="text" placeholder="Name" class="border border-gray-300 p-2 pr-10 w-full">
        </div>
        <div class="mb-4">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                 stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round"
                      d="M2.25 13.5h3.86a2.25 2.25 0 012.012 1.244l.256.512a2.25 2.25 0 002.013 1.244h3.218a2.25 2.25 0 002.013-1.244l.256-.512a2.25 2.25 0 012.013-1.244h3.859m-19.5.338V18a2.25 2.25 0 002.25 2.25h15A2.25 2.25 0 0021.75 18v-4.162c0-.224-.034-.447-.1-.661L19.24 5.338a2.25 2.25 0 00-2.15-1.588H6.911a2.25 2.25 0 00-2.15 1.588L2.35 13.177a2.25 2.25 0 00-.1.661z"/>
            </svg>
            <input type="email" placeholder="Email" class="border border-gray-300 p-2 pr-10 w-full">
        </div>
        <div class="mb-4">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                 stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round"
                      d="M2.25 12.76c0 1.6 1.123 2.994 2.707 3.227 1.087.16 2.185.283 3.293.369V21l4.076-4.076a1.526 1.526 0 011.037-.443 48.282 48.282 0 005.68-.494c1.584-.233 2.707-1.626 2.707-3.228V6.741c0-1.602-1.123-2.995-2.707-3.228A48.394 48.394 0 0012 3c-2.392 0-4.744.175-7.043.513C3.373 3.746 2.25 5.14 2.25 6.741v6.018z"/>
            </svg>
            <textarea placeholder="Message" class="border border-gray-300 p-2 pr-10 w-full h-24"></textarea>
        </div>
        <div class="flex justify-center">
            <button class="text-black py-2 px-4 rounded" style="background-color: orange">Send Message</button>
        </div>
    </div>
</div>
<img src="resources/images/location.png" alt="Location" class="w-full">

<img src="resources/images/logo.png" alt="Location" class="h-30 w-25">
<div class="flex justify-center">
    <div class="text-center">
        <h1 class="font-bold text-2xl mb-4">Receive Our Newsletter</h1>
    </div>
</div>
<div class="flex justify-center">
    <div class="text-center">
        <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam in justo ac risus tincidunt eleifend at et
            mi.
        </p>
    </div>
</div>
<div class="flex justify-center p-8">
    <div class="text-center">
        <input type="email" placeholder="Email" class="border border-gray-300 p-2 pr-10 w-full">
        <button class=" text-black py-1 px-4 " style="background-color: orange">Subscribe</button>
    </div>
</div>
<p class="opacity-50 text-black flex justify-center"> © 2023, Company. All rights reserved | Developed by Tasos
    Stylianou</p>
<script src="resources/js/script.js"></script>
</body>
</html>
@endsection

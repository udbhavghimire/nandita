<?php
    session_start();
    $page = "Home"
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>Nancy Amin - Real Estate Agent based in Toronto Canada</title>
    <link rel="apple-touch-icon" sizes="180x180" href="images/seo/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="images/">
    <link rel="icon" type="image/png" sizes="16x16" href="images">
    <link rel="manifest" href="images/seo/site.webmanifest">
    <meta name="description"
        content="The #1 real estate agent in New York City now offering the only real estate sales course you will ever need." />
    <meta property="og:locale" content="en_CA" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="Nancy Amin- Real Estate Agent based in Toronto Canada" />
    <meta property="og:description"
        content="The #1 customer focused real estate agent in Toronto, Canada helping you find your dream home." />
    <meta property="og:url" content="https://nanditaamin.ca/" />
    <meta property="og:site_name" content="Nancy Amin" />
    <meta property="og:image" content="https://nanditaamin.ca/images/profile.png" />
    <meta property="og:image:width" content="1080" />
    <meta property="og:image:height" content="1080" />
    <meta name="twitter:card" content="summary_large_image" />
</head>
<body>
   <header class="top-header">
      <nav class="navbar navbar-expand-lg navbar-light py-md-4 stt">
         <div class="container">
            <a class="navbar-logo d-flex align-items-center justify-content-start px-2 px-md-0" href="/">
               <img src="images/c21_logo.png" alt="century 21 logo" class="img-fluid navbar-lo">
            </a>
            <a href="tel:647-886-4032" class="btn call-btn d-md-none">
               <svg width="30" height="30" viewBox="0 0 44 44" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <g clip-path="url(#clip0)">
                     <path
                        d="M24.4444 7.33336C25.0927 7.33336 25.7145 7.5909 26.1729 8.04932C26.6313 8.50774 26.8889 9.1295 26.8889 9.7778V29.3334C26.8889 29.9817 26.6313 30.6034 26.1729 31.0618C25.7145 31.5203 25.0927 31.7778 24.4444 31.7778H14.6667C14.0184 31.7778 13.3966 31.5203 12.9382 31.0618C12.4798 30.6034 12.2222 29.9817 12.2222 29.3334V9.7778C12.2222 9.1295 12.4798 8.50774 12.9382 8.04932C13.3966 7.5909 14.0184 7.33336 14.6667 7.33336H24.4444ZM14.6667 4.88892C13.37 4.88892 12.1265 5.40399 11.2097 6.32084C10.2928 7.23768 9.77777 8.48119 9.77777 9.7778V29.3334C9.77777 30.63 10.2928 31.8735 11.2097 32.7903C12.1265 33.7072 13.37 34.2222 14.6667 34.2222H24.4444C25.7411 34.2222 26.9846 33.7072 27.9014 32.7903C28.8182 31.8735 29.3333 30.63 29.3333 29.3334V9.7778C29.3333 8.48119 28.8182 7.23768 27.9014 6.32084C26.9846 5.40399 25.7411 4.88892 24.4444 4.88892H14.6667Z"
                        fill="white" />
                     <path
                        d="M19.5556 29.3334C20.2039 29.3334 20.8256 29.0758 21.2841 28.6174C21.7425 28.159 22 27.5372 22 26.8889C22 26.2406 21.7425 25.6189 21.2841 25.1604C20.8256 24.702 20.2039 24.4445 19.5556 24.4445C18.9073 24.4445 18.2855 24.702 17.8271 25.1604C17.3687 25.6189 17.1111 26.2406 17.1111 26.8889C17.1111 27.5372 17.3687 28.159 17.8271 28.6174C18.2855 29.0758 18.9073 29.3334 19.5556 29.3334ZM3.90869 9.91958C4.0506 9.99467 4.17633 10.097 4.27869 10.2207C4.38105 10.3444 4.45804 10.487 4.50526 10.6405C4.55247 10.7939 4.56899 10.9552 4.55387 11.115C4.53875 11.2749 4.49229 11.4301 4.41713 11.572C3.11729 14.0321 2.43998 16.7732 2.44446 19.5556C2.44446 22.44 3.15824 25.1582 4.41713 27.5391C4.56884 27.8257 4.60049 28.1608 4.50514 28.4707C4.40979 28.7806 4.19524 29.0399 3.90869 29.1916C3.62213 29.3433 3.28706 29.3749 2.97716 29.2796C2.66727 29.1842 2.40795 28.9697 2.25624 28.6831C0.770078 25.8705 -0.00456512 22.7367 2.02386e-05 19.5556C2.02386e-05 16.2629 0.816465 13.1536 2.25624 10.428C2.33133 10.2861 2.43364 10.1604 2.55733 10.058C2.68103 9.95566 2.82367 9.87867 2.97713 9.83145C3.13058 9.78424 3.29183 9.76772 3.45167 9.78284C3.61151 9.79796 3.76681 9.84442 3.90869 9.91958ZM35.2025 9.91958C35.3443 9.84442 35.4996 9.79796 35.6595 9.78284C35.8193 9.76772 35.9806 9.78424 36.134 9.83145C36.2875 9.87867 36.4301 9.95566 36.5538 10.058C36.6775 10.1604 36.7798 10.2861 36.8549 10.428C38.3412 13.2406 39.1158 16.3745 39.1111 19.5556C39.1158 22.7367 38.3412 25.8706 36.8549 28.6831C36.7032 28.9697 36.4439 29.1842 36.134 29.2796C35.8241 29.3749 35.489 29.3433 35.2025 29.1916C34.9159 29.0399 34.7014 28.7806 34.606 28.4707C34.5107 28.1608 34.5423 27.8257 34.694 27.5391C35.9939 25.079 36.6712 22.338 36.6667 19.5556C36.6667 16.6711 35.9529 13.9529 34.694 11.572C34.6189 11.4301 34.5724 11.2749 34.5573 11.115C34.5422 10.9552 34.5587 10.7939 34.6059 10.6405C34.6531 10.487 34.7301 10.3444 34.8325 10.2207C34.9348 10.097 35.0606 9.99467 35.2025 9.91958ZM7.47269 13.5276C7.62233 13.5859 7.75901 13.6732 7.87491 13.7844C7.9908 13.8956 8.08364 14.0286 8.14812 14.1757C8.21259 14.3228 8.24744 14.4812 8.25066 14.6418C8.25389 14.8023 8.22543 14.962 8.16691 15.1116C7.61431 16.528 7.3316 18.0352 7.33335 19.5556C7.33335 21.1249 7.62669 22.6234 8.16446 23.9996C8.23268 24.1506 8.26945 24.314 8.27254 24.4797C8.27563 24.6455 8.24498 24.8101 8.18245 24.9636C8.11993 25.1171 8.02683 25.2563 7.90882 25.3727C7.79081 25.4891 7.65035 25.5803 7.496 25.6407C7.34164 25.7011 7.17661 25.7295 7.01095 25.7241C6.84528 25.7188 6.68243 25.6797 6.53231 25.6095C6.38219 25.5392 6.24794 25.4391 6.13771 25.3153C6.02748 25.1915 5.94359 25.0466 5.89113 24.8894C5.22738 23.1895 4.88746 21.3804 4.88891 19.5556C4.88891 17.6758 5.24335 15.8767 5.89113 14.2218C6.00899 13.9202 6.24175 13.6776 6.53828 13.5475C6.83481 13.4173 7.17088 13.4102 7.47269 13.5276ZM31.6385 13.5276C31.788 13.4691 31.9477 13.4406 32.1083 13.4438C32.2689 13.4471 32.4272 13.4819 32.5744 13.5464C32.7215 13.6108 32.8544 13.7037 32.9656 13.8196C33.0768 13.9355 33.1641 14.0722 33.2225 14.2218C33.8678 15.8767 34.2222 17.6758 34.2222 19.5556C34.2222 21.4354 33.8678 23.2345 33.22 24.8894C33.0911 25.1749 32.8573 25.4001 32.5671 25.5183C32.2769 25.6365 31.9524 25.6387 31.6606 25.5245C31.3688 25.4103 31.132 25.1884 30.9992 24.9046C30.8663 24.6208 30.8475 24.2968 30.9467 23.9996C31.4845 22.6234 31.7778 21.1249 31.7778 19.5556C31.7778 17.9862 31.4845 16.4878 30.9467 15.1116C30.8284 14.8098 30.8348 14.4734 30.9645 14.1763C31.0943 13.8793 31.3367 13.6459 31.6385 13.5276Z"
                        fill="white" />
                  </g>
                  <defs>
                     <clipPath id="clip0">
                        <rect width="44" height="44" fill="white" />
                     </clipPath>
                  </defs>
               </svg>

               647-886-4032
            </a>
            <button class="btn navbar-toggler px-2 px-md-0 no-border" type="button" data-bs-toggle="collapse"
               data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
               aria-label="Toggle navigation">
               <img loading="lazy" src="https://img.icons8.com/material-two-tone/24/000000/menu.png" width="24px"
                  height="24px">
            </button>
            <div class="row row-cols-2 collapse navbar-collapse mt-3 pt-md-0" id="navbarSupportedContent">
               <div class="col-12 d-flex justify-content-start justify-content-md-end">
                  <ul class="navbar-nav mb-2 mb-lg-0 align-items-start align-items-md-center">
                     <li class="nav-item p-1 px-2">
                        <a class="nav-link" aria-current="page" href="first-time-buyer.php">
                           First time Buyer
                        </a>
                     </li>
                     <li class="nav-item p-1 px-2"><a class="nav-link" href="mortgages.php">Mortgages</a></li>
                     <li class="nav-item p-1 px-2"><a class="nav-link" href="closing-cost.php">Closing cost</a>
                     </li>
                     <li class="nav-item p-1 px-2"><a class="nav-link" href="#">About me</a></li>
                     <li class="nav-item p-1 ps-2 ps-md-3">
                        <div class="position-relative">
                           <div class="hahabef">
                              <a href="tel:647-886-4032" class="btn call-btn d-none d-md-block">
                                 <svg width="30" height="30" viewBox="0 0 44 44" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <g clip-path="url(#clip0)">
                                       <path
                                          d="M24.4444 7.33336C25.0927 7.33336 25.7145 7.5909 26.1729 8.04932C26.6313 8.50774 26.8889 9.1295 26.8889 9.7778V29.3334C26.8889 29.9817 26.6313 30.6034 26.1729 31.0618C25.7145 31.5203 25.0927 31.7778 24.4444 31.7778H14.6667C14.0184 31.7778 13.3966 31.5203 12.9382 31.0618C12.4798 30.6034 12.2222 29.9817 12.2222 29.3334V9.7778C12.2222 9.1295 12.4798 8.50774 12.9382 8.04932C13.3966 7.5909 14.0184 7.33336 14.6667 7.33336H24.4444ZM14.6667 4.88892C13.37 4.88892 12.1265 5.40399 11.2097 6.32084C10.2928 7.23768 9.77777 8.48119 9.77777 9.7778V29.3334C9.77777 30.63 10.2928 31.8735 11.2097 32.7903C12.1265 33.7072 13.37 34.2222 14.6667 34.2222H24.4444C25.7411 34.2222 26.9846 33.7072 27.9014 32.7903C28.8182 31.8735 29.3333 30.63 29.3333 29.3334V9.7778C29.3333 8.48119 28.8182 7.23768 27.9014 6.32084C26.9846 5.40399 25.7411 4.88892 24.4444 4.88892H14.6667Z"
                                          fill="white" />
                                       <path
                                          d="M19.5556 29.3334C20.2039 29.3334 20.8256 29.0758 21.2841 28.6174C21.7425 28.159 22 27.5372 22 26.8889C22 26.2406 21.7425 25.6189 21.2841 25.1604C20.8256 24.702 20.2039 24.4445 19.5556 24.4445C18.9073 24.4445 18.2855 24.702 17.8271 25.1604C17.3687 25.6189 17.1111 26.2406 17.1111 26.8889C17.1111 27.5372 17.3687 28.159 17.8271 28.6174C18.2855 29.0758 18.9073 29.3334 19.5556 29.3334ZM3.90869 9.91958C4.0506 9.99467 4.17633 10.097 4.27869 10.2207C4.38105 10.3444 4.45804 10.487 4.50526 10.6405C4.55247 10.7939 4.56899 10.9552 4.55387 11.115C4.53875 11.2749 4.49229 11.4301 4.41713 11.572C3.11729 14.0321 2.43998 16.7732 2.44446 19.5556C2.44446 22.44 3.15824 25.1582 4.41713 27.5391C4.56884 27.8257 4.60049 28.1608 4.50514 28.4707C4.40979 28.7806 4.19524 29.0399 3.90869 29.1916C3.62213 29.3433 3.28706 29.3749 2.97716 29.2796C2.66727 29.1842 2.40795 28.9697 2.25624 28.6831C0.770078 25.8705 -0.00456512 22.7367 2.02386e-05 19.5556C2.02386e-05 16.2629 0.816465 13.1536 2.25624 10.428C2.33133 10.2861 2.43364 10.1604 2.55733 10.058C2.68103 9.95566 2.82367 9.87867 2.97713 9.83145C3.13058 9.78424 3.29183 9.76772 3.45167 9.78284C3.61151 9.79796 3.76681 9.84442 3.90869 9.91958ZM35.2025 9.91958C35.3443 9.84442 35.4996 9.79796 35.6595 9.78284C35.8193 9.76772 35.9806 9.78424 36.134 9.83145C36.2875 9.87867 36.4301 9.95566 36.5538 10.058C36.6775 10.1604 36.7798 10.2861 36.8549 10.428C38.3412 13.2406 39.1158 16.3745 39.1111 19.5556C39.1158 22.7367 38.3412 25.8706 36.8549 28.6831C36.7032 28.9697 36.4439 29.1842 36.134 29.2796C35.8241 29.3749 35.489 29.3433 35.2025 29.1916C34.9159 29.0399 34.7014 28.7806 34.606 28.4707C34.5107 28.1608 34.5423 27.8257 34.694 27.5391C35.9939 25.079 36.6712 22.338 36.6667 19.5556C36.6667 16.6711 35.9529 13.9529 34.694 11.572C34.6189 11.4301 34.5724 11.2749 34.5573 11.115C34.5422 10.9552 34.5587 10.7939 34.6059 10.6405C34.6531 10.487 34.7301 10.3444 34.8325 10.2207C34.9348 10.097 35.0606 9.99467 35.2025 9.91958ZM7.47269 13.5276C7.62233 13.5859 7.75901 13.6732 7.87491 13.7844C7.9908 13.8956 8.08364 14.0286 8.14812 14.1757C8.21259 14.3228 8.24744 14.4812 8.25066 14.6418C8.25389 14.8023 8.22543 14.962 8.16691 15.1116C7.61431 16.528 7.3316 18.0352 7.33335 19.5556C7.33335 21.1249 7.62669 22.6234 8.16446 23.9996C8.23268 24.1506 8.26945 24.314 8.27254 24.4797C8.27563 24.6455 8.24498 24.8101 8.18245 24.9636C8.11993 25.1171 8.02683 25.2563 7.90882 25.3727C7.79081 25.4891 7.65035 25.5803 7.496 25.6407C7.34164 25.7011 7.17661 25.7295 7.01095 25.7241C6.84528 25.7188 6.68243 25.6797 6.53231 25.6095C6.38219 25.5392 6.24794 25.4391 6.13771 25.3153C6.02748 25.1915 5.94359 25.0466 5.89113 24.8894C5.22738 23.1895 4.88746 21.3804 4.88891 19.5556C4.88891 17.6758 5.24335 15.8767 5.89113 14.2218C6.00899 13.9202 6.24175 13.6776 6.53828 13.5475C6.83481 13.4173 7.17088 13.4102 7.47269 13.5276ZM31.6385 13.5276C31.788 13.4691 31.9477 13.4406 32.1083 13.4438C32.2689 13.4471 32.4272 13.4819 32.5744 13.5464C32.7215 13.6108 32.8544 13.7037 32.9656 13.8196C33.0768 13.9355 33.1641 14.0722 33.2225 14.2218C33.8678 15.8767 34.2222 17.6758 34.2222 19.5556C34.2222 21.4354 33.8678 23.2345 33.22 24.8894C33.0911 25.1749 32.8573 25.4001 32.5671 25.5183C32.2769 25.6365 31.9524 25.6387 31.6606 25.5245C31.3688 25.4103 31.132 25.1884 30.9992 24.9046C30.8663 24.6208 30.8475 24.2968 30.9467 23.9996C31.4845 22.6234 31.7778 21.1249 31.7778 19.5556C31.7778 17.9862 31.4845 16.4878 30.9467 15.1116C30.8284 14.8098 30.8348 14.4734 30.9645 14.1763C31.0943 13.8793 31.3367 13.6459 31.6385 13.5276Z"
                                          fill="white" />
                                    </g>
                                    <defs>
                                       <clipPath id="clip0">
                                          <rect width="44" height="44" fill="white" />
                                       </clipPath>
                                    </defs>
                                 </svg>

                                 647-886-4032
                              </a>
                           </div>
                        </div>
                     </li>
                  </ul>
               </div>
            </div>
         </div>
      </nav>
      <div class="container  mttt">
         <div class="row row-cols-1 row-cols-md-2 g-0">
         <div class="col order-1 order-md-2 mt-3 mt-sm-0">
               <div class="text-start position-relative">
               <img src="images/profile.png" alt="Nancy Amin" class="img-fluid">
                  <div class="myg bg-white shadow-lg p-3 justify-content-between">
                     <img src="images/social-icons/facebook.svg" alt="facebook icon" class="img-fluid social-icons">
                     <a href="https://www.instagram.com/homesbymilan/" aria-label="Instagram">
                        <img src="images/social-icons/instagram.svg" alt="instagram icon"
                           class="img-fluid social-icons">
                     </a>
                     <a href="https://www.linkedin.com/in/milan-pandey-9a0a2a42/" aria-label="Linkedin">
                        <img src="images/social-icons/linkedin.svg" alt="linkedin icon" class="img-fluid social-icons">
                     </a>
                     <img src="images/social-icons/twitter.svg" alt="twitter icon" class="img-fluid social-icons">
                  </div>
               </div>
            </div>
         <div class="col order-2 order-md-2 pt-5">
                    <h1 class="pt-5">
                        <p class="text2 mb-0">Nancy Amin</p>
                    </h1>
                    <h3 class="fs-5 mb-4">helping clients ,
                        <span class="bold-ital"> any day</span> ,
                        <span class="bold-ital"> any time</span> ,
                        <span class="bold-ital"> any moment</span>
                    </h3>
                    <p class="bordleft">
                        I will help you to find your beautiful dream house.
                    </p>

                    <div class="mt-3">
                        <span class="badge bg-light text-dark me-2 my-1">Toronto</span>
                        <span class="badge bg-light text-dark me-2 my-1">North York</span>
                        <span class="badge bg-light text-dark me-2 my-1">Mississauga</span>
                        <span class="badge bg-light text-dark me-2 my-1">Okaville</span>
                        <span class="badge bg-light text-dark me-2 my-1">Brampton</span>
                        <span class="badge bg-light text-dark my-1">Hamilton</span>
                    </div>
                    <div class="d-flex justify-content-start my-3 my-sm-5 flex-column flex-sm-row">
                        <button class="btn btn-outline-secondary btn-lg">
                            I've never owned a Home
                        </button>
                        <span class="mx-3"></span>
                        <button class="btn btn-mine btn-lg mt-3 mt-sm-0">
                            Contact Nandita
                        </button>
                    </div>
                </div>
         </div>
      </div>
   </header>
   <div class="py-5 my-5"></div>
   <!-- <section class="py-sm-5 py-xll-3 haha">
      <div class="container pt-sm-5 pt-xll-5">
         <h2 class="fs-2 fw-bold bordlef">I love working with my clients</h2>
         <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-4 justify-content-center g-4 mt-2">
            <div class="col">
               <div>
                  <img src="images/gallery/1.webp" alt="house-1" class="img-fluid rounded-mine galleryimage bb"
                     loading="lazy">
                  <p class="text-start mb-0 mt-2 fs-smm">Closing commercial deal for Law Firm</p>
               </div>
            </div>
            <div class="col">
               <div>
                  <img src="images/gallery/2.webp" alt="house-1" class="img-fluid rounded-mine galleryimage bt"
                     loading="lazy">
                  <p class="text-start mb-0 mt-2 fs-smm">Attending a community event, talking to amazing people</p>
               </div>
            </div>
            <div class="col">
               <div>
                  <img src="images/gallery/3.webp" alt="house-1" class="img-fluid rounded-mine galleryimage bb"
                     loading="lazy">
                  <p class="text-start mb-0 mt-2 fs-smm">Congratulating my amazing clients on moving to their new home
                  </p>
               </div>
            </div>
            <div class="col">
               <div>
                  <img src="images/gallery/4.webp" alt="house-1" class="img-fluid rounded-mine galleryimage bt"
                     loading="lazy">
                  <p class="text-start mb-0 mt-2 fs-smm">Helping my buyer clients buy their first home in Canada</p>
               </div>
            </div>
         </div>
      </div>
   </section> -->
   <section class="py-sm-5 haha">
        <div class="container pt-sm-5">
            <h2 class="fs-2 fw-bold bordlef">Areas I grew up in and where I serve</h2>
            <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-4 justify-content-center g-4 mt-2">
                <div class="col">
                    <div class="afte">
                        <img src="images/detached.jpeg" alt="house-1" class="img-fluid rounded-mine imghei">
                        <div class="img-text">
                            <p class="mb-0">Brampton</p>
                            <p class="mb-0 tet-s">Detached, Semi-Detached & Townhomes</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="afte">
                        <img src="images/townhomes.jpeg" alt="house-1" class="img-fluid rounded-mine imghei">
                        <div class="img-text">
                            <p class="mb-0">North York</p>
                            <p class="mb-0 tet-s">Beautiful condos near Yonge & Sheppard</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div href="#" class="afte">
                        <img src="images/semi-detached.jpeg" alt="house-1" class="img-fluid rounded-mine imghei">
                        <div class="img-text">
                            <p class="mb-0">Mississauga</p>
                            <p class="mb-0 tet-s">Affordable condos near Square one</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div href="#" class="afte">
                        <img src="images/condos.jpeg" alt="house-1" class="img-fluid rounded-mine imghei">
                        <div class="img-text">
                            <p class="mb-0">Halton</p>
                            <p class="mb-0 tet-s">Homes in Oakville, Milton & Burlington</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
   <div class="my-5 py-sm-4"></div>
   <div class="my-5 py-sm-4"></div>
   <div class=" py-sm-4"></div>
   <section class="bg-light py-5 position-relative">
      <div class="container">
         <div class="row row-cols-1 row-cols-md-2">
            <div class="col-md-4">
               <div class=" card card-body border-0 shadow-sm text-start px-4">
                  <form id="loan-form">
                     <label for="amount">Loan Amount</label>
                     <div class="form-group mb-3 input-group mt-2">
                        <div class="input-group-prepend">
                           <span class="input-group-text">$</span>
                        </div>
                        <input type="number" class="form-control no-border" id="amount" placeholder="Loan amount"
                           value="800000">
                     </div>
                     <div class="row row-cols-2">
                        <div class="col">
                           <label for="amount">Intrest Rate</label>
                           <div class="form-group mb-3 mt-2 input-group">
                              <div class="input-group-prepend">
                                 <span class="input-group-text">%</span>
                              </div>
                              <input type="text" class="form-control no-border" id="interest" placeholder="Interest"
                                 value="1.85">
                           </div>
                        </div>
                        <div class="col">
                           <label for="amount">Period</label>
                           <div class="form-group mb-3 mt-2 input-group">
                              <input type="number" class="form-control no-border" id="years"
                                 placeholder="Years To Repay" value="25">
                              <div class="input-group-prepend">
                                 <span class="input-group-text h">Yrs</span>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="form-group ">
                        <input type="submit" class="btn w-100 btn-mine btn-lg" value="Calculate">
                     </div>
                  </form>
               </div>
            </div>
            <div class="col-md-5">
               <h3 class="fw-bold">Calculate how much would be your <span class="text-mine2">Monthly Mortgage
                     Payment</span></h3>
               <div id="loading">
                  <img src="images/loading.gif" alt="">
               </div>
               <div id="results" class="py-4">
                  <p class="fs-2 fw-bold">$<span id="monthly-payment"></span> / Mo</p>
               </div>
            </div>
            <div class="col-md-3"></div>
         </div>
      </div>
      <img src="images/profile.png" alt="" class="img-fluid imgstand">
   </section>
   <div class="my-5 py-sm-4"></div>
   <section class="py-sm-5 haha">
        <div class="container pt-sm-5">
            <h2 class="fs-2 fw-bold bordlef ">Some of the top preconstruction projects</h2>
            <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-4 justify-content-center g-4 mt-2">
                <div class="col">
                    <a  href="https://homebaba.ca/barrie" target="_blank" class="afte">
                        <img src="images/precon/Barrie.png" alt="house-1" class="img-fluid rounded-mine imghei">
                        <div class="img-text">
                            <p class="mb-0">Barrie</p>
                            <!-- <p class="mb-0 tet-s">Detached, Semi-Detached & Townhomes</p> -->
                        </div>
                    </a>
                </div>
                <div class="col">
                    <a href="https://homebaba.ca/brampton" target="_blank" class="afte">
                        <img src="images/precon/brampton.png" alt="house-1" class="img-fluid rounded-mine imghei">
                        <div class="img-text">
                            <p class="mb-0">Brampton</p>
                            <!-- <p class="mb-0 tet-s">Beautiful condos near Yonge & Sheppard</p> -->
                        </div>
                    </a>
                </div>
                <div class="col">
                    <a href="https://homebaba.ca/cambridge" target="_blank" class="afte">
                        <img src="images/precon/cambridge.png" alt="house-1" class="img-fluid rounded-mine imghei">
                        <div class="img-text">
                            <p class="mb-0">Cambridge</p>
                            <!-- <p class="mb-0 tet-s">Affordable condos near Square one</p> -->
                        </div>
                    </a>
                </div>
                <div class="col">
                    <a href="https://homebaba.ca/kitchener" target="_blank" class="afte">
                        <img src="images/precon/kitchener.png" alt="house-1" class="img-fluid rounded-mine imghei">
                        <div class="img-text">
                            <p class="mb-0">Kitchener</p>
                            <!-- <p class="mb-0 tet-s">Homes in Oakville, Milton & Burlington</p> -->
                        </div>
                    </a>
                </div>
                <div class="col">
                    <a href="https://homebaba.ca/milton" target="_blank" class="afte">
                        <img src="images/precon/milton.png" alt="house-1" class="img-fluid rounded-mine imghei">
                        <div class="img-text">
                            <p class="mb-0">Milton</p>
                            <!-- <p class="mb-0 tet-s">Homes in Oakville, Milton & Burlington</p> -->
                        </div>
                    </a>
                </div>
                <div class="col">
                    <a href="https://homebaba.ca/mississauga" target="_blank" class="afte">
                        <img src="images/precon/mississauga.png" alt="house-1" class="img-fluid rounded-mine imghei">
                        <div class="img-text">
                            <p class="mb-0">Mississauga</p>
                            <!-- <p class="mb-0 tet-s">Homes in Oakville, Milton & Burlington</p> -->
                        </div>
                    </a>
                </div>
                <div class="col">
                    <a href="https://homebaba.ca/niagara" target="_blank" class="afte">
                        <img src="images/precon/niagara.png" alt="house-1" class="img-fluid rounded-mine imghei">
                        <div class="img-text">
                            <p class="mb-0">Niagara</p>
                            <!-- <p class="mb-0 tet-s">Homes in Oakville, Milton & Burlington</p> -->
                        </div>
                    </a>
                </div>
                
            </div>

            <!-- <div class="row row-cols-1 row-cols-md-3 g-4 pt-5">
                    <div class="col">
                        <div class="card rounded-mine">
                            <img src="images/precon projects/city pointe brampton.png" class="card-img-top" alt=" ... ">
                            <div class="card-body">
                                <h5 class="card-title fw-bolder">CityPointe Heights</h5>
                                <h6 class="card-subtitle text-primary pt-2 fw-bold">Low $ 497.99k - High $ 852.99k</h6>
                                <p class="card-text pt-2 ">The Gore Road & Queen Street East, Brampton, ON </p>
                                <a href="https://homebaba.ca/brampton/city-pointe-heights" target="_blank" class="stretched-link"></a>
                            </div>
                        </div>
                    </div>
                    <div class="col ">
                        <div class="card rounded-mine">
                            <img src="images/precon projects/bristol palace brampton.png" class="card-img-top " alt="... ">
                            <div class="card-body ">
                                <h5 class="card-title fw-bolder">Bristol Place</h5>
                                <h6 class="card-subtitle text-primary pt-2 fw-bold">Starting from low $500k</h6>
                                <p class="card-text pt-2 ">199 Main Street North, Brampton, Ontario, Canada</p>
                                <a href="https://homebaba.ca/brampton/bristol-place" target="_blank" class="stretched-link"></a>
                            </div>
                        </div>
                    </div>
                    <div class="col ">
                        <div class="card rounded-mine">
                            <img src="images/precon projects/jasper village milton.png " class="card-img-top " alt="... ">
                            <div class="card-body ">
                                <h5 class="card-title fw-bolder">Jasper Village</h5>
                                <h6 class="card-subtitle text-primary pt-2 fw-bold">Low $1.76M - High $1.81M</h6>
                                <p class="card-text pt-2 ">Louis Saint Laurent Avenue & Savoline Boulevard, Milton, ON</p>
                                <a href="https://homebaba.ca/milton/jasper-village" target="_blank" class="stretched-link"></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row row-cols-1 row-cols-md-3 g-4 pt-5">
                    <div class="col">
                        <div class="card rounded-mine">
                            <img src="images/precon projects/connectt condos milton.png" class="card-img-top" alt=" ... ">
                            <div class="card-body ">
                                <h5 class="card-title fw-bolder">Connectt Condos</h5>
                                <h6 class="card-subtitle text-primary pt-2 fw-bold">Low $486.99k - High $800.99k</h6>
                                <p class="card-text pt-2 ">Regional Road 25, Milton, Ontario, Canada</p>
                                <a href="https://homebaba.ca/milton/connectt-condos" target="_blank" class="stretched-link"></a>
                            </div>
                        </div>
                    </div>
                    <div class="col ">
                        <div class="card rounded-mine">
                            <img src="images/precon projects/Westwood Village PRESERVE cambridge.png" class="card-img-top " alt="... ">
                            <div class="card-body ">
                                <h5 class="card-title fw-bolder">Westwood Village PRESERVE</h5>
                                <h6 class="card-subtitle text-primary pt-2 fw-bold">Starting from Low $1.2M</h6>
                                <p class="card-text pt-2 ">93 Newman Drive, Cambridge, ON</p>
                                <a href="https://homebaba.ca/cambridge/westwood-village-preserve" target="_blank" class="stretched-link"></a>
                            </div>
                        </div>
                    </div>
                    <div class="col ">
                        <div class="card rounded-mine">
                            <img src="images/precon projects/The Vineyards cambridge.png " class="card-img-top " alt="... ">
                            <div class="card-body ">
                                <h5 class="card-title fw-bolder">The Vineyards</h5>
                                <h6 class="card-subtitle text-primary pt-2 fw-bold">Starting from Low $749.9k</h6>
                                <p class="card-text pt-2 ">129 Elgin St N Cambridge, Ontario</p>
                                <a href="https://homebaba.ca/cambridge/%20the-vineyards" target="_blank" class="stretched-link"></a>
                            </div>
                        </div>
                    </div>
                </div> -->
        </div>
    </section>
   <div class=" py-sm-4"></div>
   <div class="my-5 py-3"></div>
   <section class="news-grid grid">
        <div class="container">
            <h2 class="fs-2 fw-bold bordlef">Blogs & Insights</h2>
            <div class="row gy-4 mt-3 mx-0">
                <div class="col-md-4">
                    <a href="#" class="card-box-b card-shadow news-box">
                        <div class="img-box-b">
                            <img src="images/condos.jpg" alt="" class="img-b img-fluid">
                        </div>
                        <div class="card-overlay">
                            <div class="card-header-b">
                                <div class="card-title-b">
                                    <h2 class="title-2">
                                        This is some real estate news in 2021
                                    </h2>
                                </div>
                                <div class="card-date">
                                    <span class="date-b">18 Sep. 2017</span>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="#" class="card-box-b card-shadow news-box">
                        <div class="img-box-b">
                            <img src="images/detached.jpg" alt="" class="img-b img-fluid">
                        </div>
                        <div class="card-overlay">
                            <div class="card-header-b">
                                <div class="card-title-b">
                                    <h2 class="title-2">
                                        This is some real estate news in 2021
                                    </h2>
                                </div>
                                <div class="card-date">
                                    <span class="date-b">18 Sep. 2017</span>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="#" class="card-box-b card-shadow news-box">
                        <div class="img-box-b">
                            <img src="images/semi-detached.jpg" alt="" class="img-b img-fluid">
                        </div>
                        <div class="card-overlay">
                            <div class="card-header-b">
                                <div class="card-title-b">
                                    <h2 class="title-2">
                                        This is some real estate news in 2021
                                    </h2>
                                </div>
                                <div class="card-date">
                                    <span class="date-b">18 Sep. 2017</span>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>



    
   <div class="my-5 py-3"></div>
   <div class="contact_part py-5 my-5">
      <div class="row mx-0">
         <h6 class="text-center fs-3 fw-bold">Looking forward to serve you</h6>
         <div class="d-flex flex-column flex-sm-row justify-content-center align-items-center">
            <a class="text-center mylink" href="mailto:aminnandita@gmail.com">aminnandita@gmail.com</a>
            <span class="mx-3 d-none d-md-inline">|</span>
            <a href="tel:647-886-4032" class="mylink">
            647-886-4032
            </a>
         </div>
      </div>
      <div class="row row-cols-1 row-cols-md-3 mt-sm-3 mx-0 g-5">
         <div class="col-md-3"></div>
         <div class="col-md-6 px-md-5">
            <form action="contactForm.php" method="POST">
               <input type="hidden" name="page" value="Home">
               <div class="row">
                  <div class="mb-3"><input type="text" placeholder="Full Name" name="name" class="fields"></div>
               </div>
               <div class="row row-cols-1 row-cols-sm-2">
                  <div class="col">
                     <div class="mb-3"><input type="email" aria-describedby="emailHelp" placeholder="Your email"
                           name="email" class="fields"></div>
                  </div>
                  <div class="col">
                     <div class="mb-3"><input type="text" name="phone" placeholder="Phone" class="fields"></div>
                  </div>
               </div>
               <div class="row">
                  <div class="mb-3"><textarea name="message" id="message" placeholder="Enter your message"
                        class="fields mess"></textarea></div>
               </div>
               <div class="row">
                  <div class="col text-center"><input type="submit" value="Send Message" class="btn btn-mine bgn-lg">
                  </div>
               </div>
            </form>
         </div>
         <div class="col-md-3"></div>
      </div>
   </div>
   <footer class="bg-light py-5">
      <div class="container">
         <div class="row row-cols-1 row-cols-md-3 gy-5">
            <div class="col d-flex align-items-center justify-content-center justify-content-md-start">
               <a class="navbar-logo d-flex align-items-center justify-content-start" href="/">
                  <img src="images/c21_logo.png" alt="" class="img-fluid navbar-lo">
               </a>
               <span class="mx-2"></span>
               <span class="text-mine">?? 2022 Nancy Amin </span>
            </div>
            <div class="">
               <h5 class="fs-5">
               <span class="mx-5"></span>
                  <b>Nancy Amin</b>
               </h5>
               <h6>
               <span class="mx-5"></span>
               11 &12-1995 SALEM RD N., AJAX
               </h6>
               <span class="mx-5"></span>
               <a href="tel:647-886-4032 d-inline" class="mylink2">647-886-4032</a>
            </div>
            <div class="col d-flex align-items-center justify-content-center justify-content-md-end">
               <img src="images/social-icons/facebook.svg" alt="facebook icon" class="img-fluid social-icons">
               <a href="https://www.instagram.com/homesbymilan/" aria-label="Instagram">
                  <img src="images/social-icons/instagram.svg" alt="instagram icon" class="img-fluid social-icons">
               </a>
               <a href="https://www.linkedin.com/in/milan-pandey-9a0a2a42/" aria-label="Linkedin">
                  <img src="images/social-icons/linkedin.svg" alt="linkedin icon" class="img-fluid social-icons">
               </a>
               <img src="images/social-icons/twitter.svg" alt="twitter icon" class="img-fluid social-icons">
            </div>
         </div>
      </div>
   </footer>
   <script src="js/app.js"></script>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous">
   </script>
   <script>
   var contactBtn = document.querySelector('.contbtn');
   contactBtn.addEventListener('click', funcc);

   function funcc(e) {
      window.scrollTo(0, document.body.scrollHeight);
      e.preventDefault();
   }
   
   </script>
   <script src="js/sweetalert.min.js"></script>
   <?php
        if(
        isset($_SESSION['success'])
        ){
            ?>
   <script type="text/javascript" async>
   swal({
      title: "Message received!",
      text: "Message received Sucessfully !",
      button: false,
      timer: 2000
   });
   </script>
   <?php
            unset($_SESSION["success"]);
        }
        if (isset($_SESSION['error'])){
            ?>
   <script type="text/javascript" async>
   swal({
      title: "Message failed !",
      text: "Message not received !",
      button: false,
      timer: 2000
   });
   </script>
   <?php
             unset($_SESSION["error"]);
        }
    ?>
</body>

</html>
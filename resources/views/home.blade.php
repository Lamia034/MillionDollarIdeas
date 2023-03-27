<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <!-- tailwind  -->
        <script src="https://cdn.tailwindcss.com"></script>
        <link href="{{ asset('css/app.css') }} " rel="stylesheet" type="text/css">
        <!-- font awsome library -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <title>MillionDollarIdeas</title>
</head>
<body>
    @include('layouts.navigation')


    <!-- component -->
<link rel="stylesheet" type="text/css" href="https://cdn.rawgit.com/shuvroroy/facebook-clone/7d8b2e1f/public/css/main.css">
<div class="font-sans  leading-none bg-grey-lighter mb-8 ">
<!--profil info -->
    <div class=" mx-auto w-full  sm:w-1/2">
        <div class="">
            <div class="flex mt-3">
                <!---->
                <div class="w-2/5  hidden sm:block">
                    <div class="bg-white mr-4 p-4 shadow">
                        <div>
                            Intro
                        </div>
                        <div class="text-center border-b py-4 text-xs">
                            Life is simple
                        </div>
                        <ul class="list-reset text-xs pt-4">
                            <li class="flex items-center py-1">
                                
                                <svg class="w-3 h-3 mr-3" viewbox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M640 256h512v-128h-512v128zm1152 640v480q0 66-47 113t-113 47h-1472q-66 0-113-47t-47-113v-480h672v160q0 26 19 45t45 19h320q26 0 45-19t19-45v-160h672zm-768 0v128h-256v-128h256zm768-480v384h-1792v-384q0-66 47-113t113-47h352v-160q0-40 28-68t68-28h576q40 0 68 28t28 68v160h352q66 0 113 47t47 113z">
                                    </path>
                                </svg>
                                <span>

                    
                                <a class="no-underline hover:underline text-blue" href="#">
                                {{ auth()->user()->name }} has published {{ $postsCount }} posts.
                                </a>
                                </span>
                            </li>
                            <li class="flex items-center py-1">
                               
                                <svg class="w-3 h-3 mr-3" viewbox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M640 256h512v-128h-512v128zm1152 640v480q0 66-47 113t-113 47h-1472q-66 0-113-47t-47-113v-480h672v160q0 26 19 45t45 19h320q26 0 45-19t19-45v-160h672zm-768 0v128h-256v-128h256zm768-480v384h-1792v-384q0-66 47-113t113-47h352v-160q0-40 28-68t68-28h576q40 0 68 28t28 68v160h352q66 0 113 47t47 113z">
                                    </path>
                                </svg>
                                <span>
                                Creative director at
                                <a class="no-underline hover:underline text-blue" href="#">
                                Shopno'11
                                </a>
                                </span>
                            </li>
                            <li class="flex items-center py-1">
                             
                                <svg class="w-4 h-4 mr-2" viewbox="0 0 2304 1792" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M1774 836l18 316q4 69-82 128t-235 93.5-323 34.5-323-34.5-235-93.5-82-128l18-316 574 181q22 7 48 7t48-7zm530-324q0 23-22 31l-1120 352q-4 1-10 1t-10-1l-652-206q-43 34-71 111.5t-34 178.5q63 36 63 109 0 69-58 107l58 433q2 14-8 25-9 11-24 11h-192q-15 0-24-11-10-11-8-25l58-433q-58-38-58-107 0-73 65-111 11-207 98-330l-333-104q-22-8-22-31t22-31l1120-352q4-1 10-1t10 1l1120 352q22 8 22 31z">
                                    </path>
                                </svg>
                                <span class="leading-tight">
                                Studies BSc. Computer Science and <br> Engineering at
                                <a class="no-underline hover:underline text-blue" href="#">
                                North South University
                                </a>
                                </span>
                            </li>
                            <li class="flex items-center py-1">
                              
                                <svg class="w-4 h-4 mr-2" viewbox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M1472 992v480q0 26-19 45t-45 19h-384v-384h-256v384h-384q-26 0-45-19t-19-45v-480q0-1 .5-3t.5-3l575-474 575 474q1 2 1 6zm223-69l-62 74q-8 9-21 11h-3q-13 0-21-7l-692-577-692 577q-12 8-24 7-13-2-21-11l-62-74q-8-10-7-23.5t11-21.5l719-599q32-26 76-26t76 26l244 204v-195q0-14 9-23t23-9h192q14 0 23 9t9 23v408l219 182q10 8 11 21.5t-7 23.5z">
                                    </path>
                                </svg>
                                <span>
                                Lives in
                                <a class="no-underline hover:underline text-blue" href="#">
                                Dhaka, Bangladesh
                                </a>
                                </span>
                            </li>
                            <li class="flex items-center py-1">

                                <svg class="w-3 h-3 mr-3" viewbox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M896 1664q-26 0-44-18l-624-602q-10-8-27.5-26t-55.5-65.5-68-97.5-53.5-121-23.5-138q0-220 127-344t351-124q62 0 126.5 21.5t120 58 95.5 68.5 76 68q36-36 76-68t95.5-68.5 120-58 126.5-21.5q224 0 351 124t127 344q0 221-229 450l-623 600q-18 18-44 18z">
                                    </path>
                                </svg>
                                <span>
                                Single
                                </span>
                            </li>
                            <li class="flex items-center py-1">
                             
                                <svg class="w-4 h-4 mr-2" viewbox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M1152 640q0-106-75-181t-181-75-181 75-75 181 75 181 181 75 181-75 75-181zm256 0q0 109-33 179l-364 774q-16 33-47.5 52t-67.5 19-67.5-19-46.5-52l-365-774q-33-70-33-179 0-212 150-362t362-150 362 150 150 362z">
                                    </path>
                                </svg>
                                <span>
                                From
                                <a class="no-underline hover:underline text-blue" href="#">
                                Kishorganj, Dhaka, Bangladesh
                                </a>
                                </span>
                            </li>
                            <li class="flex items-center py-1">
                             
                                <svg class="w-3 h-3 mr-3" viewbox="0 0 2048 1792" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M1024 1131q0 64-37 106.5t-91 42.5h-512q-54 0-91-42.5t-37-106.5 9-117.5 29.5-103 60.5-78 97-28.5q6 4 30 18t37.5 21.5 35.5 17.5 43 14.5 42 4.5 42-4.5 43-14.5 35.5-17.5 37.5-21.5 30-18q57 0 97 28.5t60.5 78 29.5 103 9 117.5zm-157-520q0 94-66.5 160.5t-160.5 66.5-160.5-66.5-66.5-160.5 66.5-160.5 160.5-66.5 160.5 66.5 66.5 160.5zm925 445v64q0 14-9 23t-23 9h-576q-14 0-23-9t-9-23v-64q0-14 9-23t23-9h576q14 0 23 9t9 23zm0-252v56q0 15-10.5 25.5t-25.5 10.5h-568q-15 0-25.5-10.5t-10.5-25.5v-56q0-15 10.5-25.5t25.5-10.5h568q15 0 25.5 10.5t10.5 25.5zm0-260v64q0 14-9 23t-23 9h-576q-14 0-23-9t-9-23v-64q0-14 9-23t23-9h576q14 0 23 9t9 23zm128 960v-1216q0-13-9.5-22.5t-22.5-9.5h-1728q-13 0-22.5 9.5t-9.5 22.5v1216q0 13 9.5 22.5t22.5 9.5h352v-96q0-14 9-23t23-9h64q14 0 23 9t9 23v96h768v-96q0-14 9-23t23-9h64q14 0 23 9t9 23v96h352q13 0 22.5-9.5t9.5-22.5zm128-1216v1216q0 66-47 113t-113 47h-1728q-66 0-113-47t-47-113v-1216q0-66 47-113t113-47h1728q66 0 113 47t47 113z">
                                    </path>
                                </svg>
                                <span>
                                Followed by
                                <a class="no-underline hover:underline text-blue" href="#">
                                33 people
                                </a>
                                </span>
                            </li>
                            <li class="flex items-center py-3">
                             
                                <svg class="w-4 h-4 mr-2" viewbox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M320 256q0 72-64 110v1266q0 13-9.5 22.5t-22.5 9.5h-64q-13 0-22.5-9.5t-9.5-22.5v-1266q-64-38-64-110 0-53 37.5-90.5t90.5-37.5 90.5 37.5 37.5 90.5zm1472 64v763q0 25-12.5 38.5t-39.5 27.5q-215 116-369 116-61 0-123.5-22t-108.5-48-115.5-48-142.5-22q-192 0-464 146-17 9-33 9-26 0-45-19t-19-45v-742q0-32 31-55 21-14 79-43 236-120 421-120 107 0 200 29t219 88q38 19 88 19 54 0 117.5-21t110-47 88-47 54.5-21q26 0 45 19t19 45z">
                                    </path>
                                </svg>
                                <a class="no-underline hover:underline text-blue-dark" href="#">
                                Add Pages You Manage
                                </a>
                            </li>
                        </ul>
                        <div class="flex flex-col items-center justify-center border-t py-3">
                            <button class="appearance-none p-2 border text-xs text-grey-darker rounded hover:border-black mb-2">
                            github.com/shuvroroy
                            </button>
                            <button class="appearance-none p-2 border text-xs text-grey-darker rounded hover:border-black">
                            instagram.com/r_shuvro
                            </button>
                        </div>
                    </div>
                    <div class="bg-white mt-4 shadow mr-4">
                        <div class="p-4">
                            <h5 class="font-normal hover:underline text-base">Featured Albums</h5>
                        </div>
                    </div>
                    <div class="bg-white mt-4 shadow mr-4">
                        <div class="relative p-4">
                            <h5 class="font-normal hover:underline text-base">Did You Know</h5>
                            <span class="absolute pin-r pin-t mr-4 mt-4">
                               
                                <svg class="h-4 w-4" viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M1395 736q0 13-10 23l-466 466q-10 10-23 10t-23-10l-466-466q-10-10-10-23t10-23l50-50q10-10 23-10t23 10l393 393 393-393q10-10 23-10t23 10l50 50q10 10 10 23z"/>
                                </svg>
                            </span>
                        </div>
                    </div>
                    <div class="bg-white mt-4 shadow mr-4">
                        <div class="relative p-4 text-xs">
                            <p class="leading-normal">English (US) &middot; <span class="text-blue cursor-pointer hover:underline">বাংলা</span> &middot; <span class="text-blue cursor-pointer hover:underline">অসমীয়া</span> &middot; <span class="text-blue cursor-pointer hover:underline">Español</span> &middot; <br> <span class="text-blue cursor-pointer hover:underline">Português (Brasil)</span></p>
                            <div class="absolute pin-r pin-t mr-4 mt-4">
                                <button class="appearance-none px-3 py-2 border rounded hover:bg-grey-lighter">&plus;</button>
                            </div>
                        </div>
                    </div>
                    <div class="px-2 mt-3">
                        <p class="text-grey text-xs font-hairline leading-normal">
                            <span class="hover:underline cursor-pointer">Privacy</span> &middot;
                            <span class="hover:underline cursor-pointer">Terms</span> &middot;
                            <span class="hover:underline cursor-pointer">Advertising</span> &middot;
                            <span class="hover:underline cursor-pointer">Ad Choices</span> &middot;
                            <br>
                            <span class="hover:underline cursor-pointer">Cookies</span> &middot;
                            <span class="hover:underline cursor-pointer">More</span>
                            <br>
                            Facebook © 2018
                        </p>
                    </div>
                </div>

                <!---->
                <div class="w-auto container  mx-auto  sm:w-full">
                    <!---->
                    <form  action="/posts" enctype="multipart/form-data" method="POST">
                        @csrf
                    <div class="bg-white shadow">
                        <div class="bg-grey-lightest p-3">
                            <ul class="flex items-center list-reset font-bold text-xs">
                                <li class="flex items-center px-2 border-r border-grey-darkest cursor-pointer">
                                   
                                    <svg class="w-4 h-4" viewbox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M491 1536l91-91-235-235-91 91v107h128v128h107zm523-928q0-22-22-22-10 0-17 7l-542 542q-7 7-7 17 0 22 22 22 10 0 17-7l542-542q7-7 7-17zm-54-192l416 416-832 832h-416v-416zm683 96q0 53-37 90l-166 166-416-416 166-165q36-38 90-38 53 0 91 38l235 234q37 39 37 91z">
                                        </path>
                                    </svg>
                                    <span class="px-1 text-grey-darkest">
                                    Make Post
                                    </span>
                                </li>
                                <li class="flex items-center px-2 text-blue border-r border-grey-darkest cursor-pointer">
                                  
                                    <svg class="w-4 h-4" viewbox="0 0 2048 1792" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M1024 672q119 0 203.5 84.5t84.5 203.5-84.5 203.5-203.5 84.5-203.5-84.5-84.5-203.5 84.5-203.5 203.5-84.5zm704-416q106 0 181 75t75 181v896q0 106-75 181t-181 75h-1408q-106 0-181-75t-75-181v-896q0-106 75-181t181-75h224l51-136q19-49 69.5-84.5t103.5-35.5h512q53 0 103.5 35.5t69.5 84.5l51 136h224zm-704 1152q185 0 316.5-131.5t131.5-316.5-131.5-316.5-316.5-131.5-316.5 131.5-131.5 316.5 131.5 316.5 316.5 131.5z">
                                        </path>
                                    </svg>
                                    <!-- <span type="file" name="image" class="px-1">
                                    Photo
                                    
                                    </span> -->
                                    <input type="file" name="image" id="image" class="">
                                </li>
                            
                            </ul>
                        </div>
                        <div class="px-3 pt-0 pb-2">
                            <div class="flex items-center border-b pb-3">
                                <img alt="" class="block w-10 h-10 rounded-full" src="https://scontent-sit4-1.xx.fbcdn.net/v/t1.0-1/c0.0.40.40/p40x40/15965627_1248767438493482_2912203675748580358_n.jpg?oh=275a309dca6487d05f09b91d7c77c6d6&oe=5B222E71">
                                <textarea class="appearance-none flex-1 ml-2 mt-4" id="body" name="content" placeholder="What's on your mind?"></textarea>
                                </img>
                            </div>
                        </div>
   
                        <div class="flex justify-end p-3 text-xs">
                    

                            <select   name="category" class="border p-2 rounded mr-4 flex items-center">
                            @foreach($sidebarCategories as $category)
                                <option>{{ $category->category }}</option>
                            @endforeach
                            <option >
                            <input type="text" name="category" placeholder="Enter new category name" class="border p-2 rounded mr-4 flex items-center">
                            </option>
                                  
                                <svg class="h-4 w-4" viewbox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M1408 704q0 26-19 45l-448 448q-19 19-45 19t-45-19l-448-448q-19-19-19-45t19-45 45-19h896q26 0 45 19t19 45z">
                                    </path>
                                </svg>
                                </select>
         
    
                            <button type="submit" class="bg-blue py-2 px-6 text-white rounded hover:bg-blue-light">
                            Post
                            </button>
                        </div>
                    </div>
                    </form>
                    <!---->

                




    @foreach ($posts as $post)

                    <div class="bg-white shadow mt-4 p-3 pb-0 relative">
                        <div class="flex items-center">
                            <div>
                                <img alt="" class="w-10 h-10 rounded-full" src="https://scontent-sit4-1.xx.fbcdn.net/v/t1.0-1/c0.0.50.50/p50x50/13619895_1063211163769813_237117473223923700_n.jpg?oh=baf4fc3f59ddde8868f0f968b41cab21&oe=5AE422EE">
                                </img>
                            </div>
                            <div class="ml-2">
                                <h5>
                                    <a class="text-blue no-underline hover:underline" href="#">
                                    {{ $post->user->name }}
                                    </a>
                                  
                                </h5>
                                <p class="text-xs font-normal text-grey mt-1">
                                    <span class="cursor-pointer hover:underline">
                                    {{ $post->created_at }}
                                    </span>
                                    ·

                                </p>
                            </div>
                        </div>
                        <div class="absolute pin-r pin-t mt-3 mr-3">
<!-- component -->
<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
<div class="flex justify-center h-screen">
<div x-data="{ dropdownOpen: false }" class="relative ">
  <button @click="dropdownOpen = !dropdownOpen" class="relative z-10 block rounded-md bg-white p-2 focus:outline-none">
    <svg class="h-5 w-5 text-gray-800" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
      <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
    </svg>
  </button>

  <div x-show="dropdownOpen" @click="dropdownOpen = false" class="fixed inset-0 h-full w-full z-10"></div>

  <div x-show="dropdownOpen" class="absolute right-0 mt-2 py-2 w-48 bg-white rounded-md shadow-xl z-20">
    <a href="#" class="block px-4 py-2 text-sm capitalize text-gray-700 hover:bg-blue-500 hover:text-white">
      Edit Post
    </a>
    <a href="#" class="block px-4 py-2 text-sm capitalize text-gray-700 hover:bg-blue-500 hover:text-white">
    <form action="{{ route('posts.destroy', $post->id) }}" method="POST">
      @csrf
      @method('DELETE')
      <button type="submit">Delete Post</button>
    </form>
    </a>

  </div>
</div>
</div>
                            
                        </div>
    


                        <div class="card mb-4">
                        <div class="card-body">
                        <p class="card-text">{{ $post->content }}</p>
                        <p>Category: #{{ $post->category }}</p>
                        <img src="{{ asset('storage/images/'.$post->image) }}" alt="">

                            
                           
                        </div>
                    </div>
                 
                    <span class="text-xs text-blue cursor-pointer hover:underline">
                            @if(isset($post->likes))

                             
                     
                                    <p>  @if($post->likes_count > 0)
                                    {{ $post->likes[0]->user->name }} liked this
                                    @if($post->likes_count > 1) 
                                        and {{ $post->likes_count - 1 }} others 
                                    @endif
                                @else
                                   
                                @endif  </p>
                              
                       
                            @endif
                            </span>
                        <div class="border">
                            <img alt="" src="https://scontent-sit4-1.xx.fbcdn.net/v/t1.0-0/p526x296/24796353_1561364460621145_3004549137840390947_n.jpg?oh=e9c249e251879520538cc3a924ee7711&oe=5B1DD598">
                            </img>
                        </div>
                        <div class="flex py-1">
                        <form method="post" action="{{ route('posts.storeLike', ['postId' => $post->id] ) }}">
                              @csrf
                              <!-- <input type="hidden" name="postId" value="{{ $post->id }}"> -->
                            <button name="like" type="submit" class="appearance-none flex-1 flex items-center justify-center py-2 text-center text-red hover:bg-grey-lighter">
                             
                                <svg class="w-4 h-4 mr-1" id="Layer_1" style="enable-background:new 0 0 496.158 496.158;" version="1.1" viewbox="0 0 496.158 496.158" x="0px" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" y="0px">
                                    <path d="M0,248.085C0,111.063,111.069,0.003,248.075,0.003c137.013,0,248.083,111.061,248.083,248.082
                                        c0,137.002-111.07,248.07-248.083,248.07C111.069,496.155,0,385.087,0,248.085z" style="fill:#E04F5F;">
                                    </path>
                                    <path d="M374.116,155.145c-34.799-34.8-91.223-34.8-126.022,0h-0.029c-34.801-34.8-91.224-34.8-126.023,0
                                        c-34.801,34.8-29.783,86.842,0,126.022c31.541,41.491,89.129,109.944,126.023,109.944h0.029c36.895,0,94.481-68.453,126.022-109.944
                                        C403.9,241.988,408.916,189.946,374.116,155.145z" style="fill:#FFFFFF;">
                                    </path>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                </svg>

                                Love
                               
                            </button> 
                         </form>

                            <button class="appearance-none flex-1 flex items-center justify-center py-2 text-center text-grey-darker hover:bg-grey-lighter">
                               
                                <svg class="w-4 h-4 mr-1" viewbox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M1792 896q0 174-120 321.5t-326 233-450 85.5q-70 0-145-8-198 175-460 242-49 14-114 22-17 2-30.5-9t-17.5-29v-1q-3-4-.5-12t2-10 4.5-9.5l6-9 7-8.5 8-9q7-8 31-34.5t34.5-38 31-39.5 32.5-51 27-59 26-76q-157-89-247.5-220t-90.5-281q0-130 71-248.5t191-204.5 286-136.5 348-50.5q244 0 450 85.5t326 233 120 321.5z">
                                    </path>
                                </svg>
                                {{$post->comments_count}}
                                Comment
                            </button>
                            <button class="appearance-none flex-1 flex items-center justify-center py-2 text-center text-grey-darker hover:bg-grey-lighter">
                               
                                <svg class="w-4 h-4 mr-1" viewbox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M1792 640q0 26-19 45l-512 512q-19 19-45 19t-45-19-19-45v-256h-224q-98 0-175.5 6t-154 21.5-133 42.5-105.5 69.5-80 101-48.5 138.5-17.5 181q0 55 5 123 0 6 2.5 23.5t2.5 26.5q0 15-8.5 25t-23.5 10q-16 0-28-17-7-9-13-22t-13.5-30-10.5-24q-127-285-127-451 0-199 53-333 162-403 875-403h224v-256q0-26 19-45t45-19 45 19l512 512q19 19 19 45z">
                                    </path>
                                </svg>
                                Share
                            </button>
                        </div>
                        
                        <div class="bg-grey-lighter p-2 -mx-3 border">
                           
             
                            <div>
                        @if(isset($post->comments))
                        @foreach ($post->comments as $comment)
    

                            <article class="p-6 mb-6 text-base bg-white rounded-lg dark:bg-gray-900">
        <footer class="flex justify-between items-center mb-2">
            <div class="flex items-center">
                <p class="inline-flex items-center mr-3 text-sm text-gray-900 dark:text-white"><img
                        class="mr-2 w-6 h-6 rounded-full"
                        src="https://flowbite.com/docs/images/people/profile-picture-2.jpg"
                        alt="Michael Gough"> {{ $comment->user->name }}</p>
                <p class="text-sm text-gray-600 dark:text-gray-400"><time pubdate datetime="2022-02-08"
                        title="February 8th, 2022"> {{ $comment->created_at }}</time></p>
            </div>
            <button id="dropdownComment1Button" data-dropdown-toggle="dropdownComment1"
                class="inline-flex items-center p-2 text-sm font-medium text-center text-gray-400 bg-white rounded-lg hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-50 dark:bg-gray-900 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                type="button">
                <svg class="w-5 h-5" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
                    xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M6 10a2 2 0 11-4 0 2 2 0 014 0zM12 10a2 2 0 11-4 0 2 2 0 014 0zM16 12a2 2 0 100-4 2 2 0 000 4z">
                    </path>
                </svg>
                <span class="sr-only">Comment settings</span>
            </button>
            <!-- Dropdown menu -->
            <div id="dropdownComment1"
                class="hidden z-10 w-36 bg-white rounded divide-y divide-gray-100 shadow dark:bg-gray-700 dark:divide-gray-600">
                <ul class="py-1 text-sm text-gray-700 dark:text-gray-200"
                    aria-labelledby="dropdownMenuIconHorizontalButton">
                    <li>
                        <a href="#"
                            class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Edit</a>
                    </li>
                    <li>
                        <a href="#"
                            class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Remove</a>
                    </li>
                    <li>
                        <a href="#"
                            class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Report</a>
                    </li>
                </ul>
            </div>
        </footer>
        <p class="text-gray-500 dark:text-gray-400">{{ $comment->content }}</p>
        <div class="flex items-center mt-4 space-x-4">
            <button type="button"
                class="flex items-center text-sm text-gray-500 hover:underline dark:text-gray-400">
                <svg aria-hidden="true" class="mr-1 w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"></path></svg>
                Reply
            </button>
            <button>
            <svg class="w-4 h-4 mr-1" id="Layer_1" style="enable-background:new 0 0 496.158 496.158;" version="1.1" viewbox="0 0 496.158 496.158" x="0px" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" y="0px">
                                    <path d="M0,248.085C0,111.063,111.069,0.003,248.075,0.003c137.013,0,248.083,111.061,248.083,248.082
                                        c0,137.002-111.07,248.07-248.083,248.07C111.069,496.155,0,385.087,0,248.085z" style="fill:#E04F5F;">
                                    </path>
                                    <path d="M374.116,155.145c-34.799-34.8-91.223-34.8-126.022,0h-0.029c-34.801-34.8-91.224-34.8-126.023,0
                                        c-34.801,34.8-29.783,86.842,0,126.022c31.541,41.491,89.129,109.944,126.023,109.944h0.029c36.895,0,94.481-68.453,126.022-109.944
                                        C403.9,241.988,408.916,189.946,374.116,155.145z" style="fill:#FFFFFF;">
                                    </path>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                </svg>
                                
            </button>
        </div>
    </article>
                      @endforeach
                      @endif
                   
                      </div>
                        </div>
                        <div class="bg-grey-lighter flex flex-between py-3 -mx-3 p-2">
                        <form method="post" action="{{ route('posts.storeComment', ['postId' => $post->id]) }}" class="flex">
                            @csrf
                            <!-- <input type="hidden" name="postId" value="{{ $post->id }}"> -->
                            <img class="w-8 h-8 rounded-full" src="https://scontent-sit4-1.xx.fbcdn.net/v/t1.0-1/c0.0.32.32/p32x32/15965627_1248767438493482_2912203675748580358_n.jpg?oh=dfb36f9ad642eae902881c19b2c68116&oe=5ADF3A11" alt="">
                            <textarea name="content" placeholder="Write a comment..." class="appearance-none w-full mx-2 bg-grey-lighter rounded-full border bg-white h-8 px-2 pt-2 text-xs"></textarea>
                            <button type="submit" name="comment" class="bg-blue py-2 px-6 text-white rounded hover:bg-blue-light">Go</button>
                            
                            </form>
                        </div>
  
                    </div> 
                    @endforeach
                </div>



<div class="w-2/5 hidden sm:block">
<div class="bg-white shadow  ml-4">
<div class="bg-grey-lightest p-3">
    <h2 class="mb-4">Categories:</h2>
    <ul>
        @foreach($sidebarCategories as $category)
            <li>
                <a href="{{ route('posts.search', ['category' => $category->category]) }}" class="text-blue-500 cursor-pointer">#{{ $category->category }}</a>
            </li>
        @endforeach
    </ul>
</div>

</div>
</div>



            </div>
        </div>
    </div>
</div>
<!-- Example of displaying categories in the sidebar -->

</body>
</html>
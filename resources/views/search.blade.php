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
<body class="bg-gray-200">
    @include('layouts.navigation')
    <h4>Search results for "{{ $query }}"</h4>

    <link rel="stylesheet" type="text/css" href="https://cdn.rawgit.com/shuvroroy/facebook-clone/7d8b2e1f/public/css/main.css">
    <div class="font-sans leading-none  mb-8 ">
    @foreach ($posts as $post)
                    <div class="container mx-auto w-full sm:w-1/2 ">
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
                        <div class="absolute pin-r pin-t mt-3">
                           
                            <svg class="w-4 h-4 text-right" viewbox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg">
                                <path d="M576 736v192q0 40-28 68t-68 28h-192q-40 0-68-28t-28-68v-192q0-40 28-68t68-28h192q40 0 68 28t28 68zm512 0v192q0 40-28 68t-68 28h-192q-40 0-68-28t-28-68v-192q0-40 28-68t68-28h192q40 0 68 28t28 68zm512 0v192q0 40-28 68t-68 28h-192q-40 0-68-28t-28-68v-192q0-40 28-68t68-28h192q40 0 68 28t28 68z">
                                </path>
                            </svg>
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
                        
                        <div class="bg-gray-100 p-2 -mx-3 border">
                           
             
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
                            <button type="submit" name="comment" class="bg-blue-800 py-2 px-6 text-white rounded hover:bg-blue-light">Go</button>
                            
                            </form>
                        </div>
  
                    </div> 
</div>
                    @endforeach
</div>
</body>
</html>
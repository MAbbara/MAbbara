<?php
  include "./actions/captchaCreate.php";

?>

<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="./assets/css/output.css" rel="stylesheet">
  <link rel="icon" type="image/x-icon" href="./assets/img/profile-circle.png">
  <title>Mohammad Abbara</title>

  <meta name="keywords" content="portfolio, software engineer, freelancer, developer, programmer, php, sql, js, html, css"/>
  <meta name="description" content="I love building web apps. I'm a full stack web developer with a passion for back end development and problem solving. I'm currently working on a few projects including this portfolio. I'm a huge fan of PHP and MySQL."/>
  <meta name="subject" content="Portfolio">
  <meta name="language" content="EN">
  <meta name="author" content="Mohammad Abbara, me@abbara.dev">
  <meta name="reply-to" content="me@abbara.dev">
  <meta name="url" content="https://abbara.dev">
  <meta name="identifier-URL" content="http://abbara.dev">
  <meta name="distribution" content="Global">

  <meta name="og:title" content="Mohammad Abbara"/>
  <meta name="og:url" content="https://abbara.dev"/>
  <meta name="og:type" content="website"/>
  <meta name="og:image" content="https://abbara.dev/assets/img/profile-circle.png"/>
  <meta name="og:site_name" content="Mohammad Abbara"/>
  <meta name="og:description" content="I love building web apps. I'm a full stack web developer with a passion for back end development and problem solving. I'm currently working on a few projects including this portfolio. I'm a huge fan of PHP and MySQL."/>

  <meta name="og:email" content="me@abbara.dev"/>

  <meta name="og:country-name" content="KSA"/>
  
</head>
<body class="duration-500 dark:bg-gray-800">
  
  <div class="font-mono dark:bg-gray-900">

    <header>
      <nav class="transition-colors duration-300 sm:fixed sm:top-0 sm:w-full sm:z-[100] bg-white dark:bg-gray-900 shadow uppercase">
        <div class="max-w-7xl mx-auto px-2 sm:px-6 lg:px-8">
          <div class="relative flex justify-between h-24">
            <div class="absolute inset-y-0 left-0 flex items-center sm:hidden">

              <button type="button" class="toggleNav inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 dark:text-gray-50 dark:hover:text-gray-100 dark:hover:bg-gray-900" aria-controls="mobile-menu" aria-expanded="false">
                <span class="sr-only">Open main menu</span>
                <svg class="block h-6 w-6" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
                </svg>

                <svg class="hidden h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                </svg>
              </button>
            </div>
            
            <div class="hidden sm:ml-6 sm:flex sm:space-x-8 font-sen text-gray-800 text-lg dark:text-gray-50">
              <a href="./" class="nav-item inline-flex items-center px-1 pt-1"> Home </a>
              <a href="#about" class="nav-item inline-flex items-center px-1 pt-1"> About </a>
              <a href="#resume" class="nav-item inline-flex items-center px-1 pt-1"> Resume </a>
              <a href="#work" class="nav-item inline-flex items-center px-1 pt-1"> Work </a>
              <!-- <a href="#certifications" class="nav-item inline-flex items-center px-1 pt-1"> Certifications </a> -->
              <a href="#contact" class="nav-item inline-flex items-center px-1 pt-1"> contact </a>
            </div>
            <div class="absolute inset-y-0 right-0 flex items-center pr-2 sm:static sm:inset-auto sm:ml-6 sm:pr-0">

              <div class="flex">
                <button type="button" class="themeToggle items-center rounded-full border border-transparent bg-gray-100 p-2 lg:p-2.5 shadow-lg focus:outline-none dark:bg-gray-800 dark:text-slate-900">
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" class="fill-gray-100 h-5 w-5 lg:h-6 lg:w-6"><path d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z"></path></svg>
                  <!-- <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" class="fill-white h-6 w-6 lg:h-10 lg:w-10"><path fill-rule="evenodd" d="M10 2a1 1 0 011 1v1a1 1 0 11-2 0V3a1 1 0 011-1zm4 8a4 4 0 11-8 0 4 4 0 018 0zm-.464 4.95l.707.707a1 1 0 001.414-1.414l-.707-.707a1 1 0 00-1.414 1.414zm2.12-10.607a1 1 0 010 1.414l-.706.707a1 1 0 11-1.414-1.414l.707-.707a1 1 0 011.414 0zM17 11a1 1 0 100-2h-1a1 1 0 100 2h1zm-7 4a1 1 0 011 1v1a1 1 0 11-2 0v-1a1 1 0 011-1zM5.05 6.464A1 1 0 106.465 5.05l-.708-.707a1 1 0 00-1.414 1.414l.707.707zm1.414 8.486l-.707.707a1 1 0 01-1.414-1.414l.707-.707a1 1 0 011.414 1.414zM4 11a1 1 0 100-2H3a1 1 0 000 2h1z" clip-rule="evenodd"></path></svg> -->
                </button>
              </div>
              
            </div>
          </div>
        </div>

        <div class="hidden" id="mobile-menu">
          <div class="pt-2 px-4 pb-4 space-y-1 font-sen text-gray-800 text-lg dark:text-gray-50">
            <a href="./" class="nav-item pl-3 pr-4 py-2 block">Home</a>
            <a href="#about" class="nav-item pl-3 pr-4 py-2 block">About</a>
            <a href="#resume" class="nav-item pl-3 pr-4 py-2 block">Resume</a>
            <a href="#work" class="nav-item pl-3 pr-4 py-2 block">Work</a>
            <!-- <a href="#certifications" class="nav-item pl-3 pr-4 py-2 block">Certifications</a> -->
            <a href="#contact" class="nav-item pl-3 pr-4 py-2 block">Contact</a>
          </div>
        </div>
      </nav>

    </header>

    <main class="transition-colors duration-300 dark:bg-gray-900 bg-white relative overflow-hidden">
      <section id="head">
        <div class="flex relative z-20 items-center h-[75vh]">
            <div class="container mx-auto px-6 flex flex-col justify-between items-center relative py-4">
                <div class="flex flex-col">
                    <img src="./assets/img/profile.png" class="rounded-full w-28 mx-auto"/>
                    <p class="text-3xl my-6 text-center dark:text-white">
                        Hi, I&#x27;m Abbara 🤘
                    </p>
                    <h2 class="max-w-4xl text-4xl md:text-5xl font-bold mx-auto dark:text-gray-50 text-gray-800 text-center py-2">
                      I&#x27;m a
                      <span class="typer text-gray-800 dark:text-gray-50" id="main" data-words="Web Developer,Software Engineer" data-delay="90" data-deleteDelay="900"></span>
                      <span class="cursor" data-owner="main"></span>
                    </h2>
                    <!-- <div class="flex items-center justify-center mt-4">
                        <a href="#" class="uppercase py-2 my-2 px-4 md:mt-16 bg-transparent dark:bg-white hover:dark:bg-gray-100 border-2 border-gray-800 text-gray-800 dark:text-white hover:bg-gray-800 hover:text-white text-md">
                            CONNECT WITH ME
                        </a>
                    </div> -->
                </div>
            </div>
        </div>
      </section>

      <section id="about">
        <div class="block z-20 mx-0 items-center py-6 sm:py-24">
          <div class="container px-10 sm:px-32 mx-auto p-24 items-center dark:text-gray-50 w-11/12 md:w-9/12 bg-emerald-50 dark:bg-gray-800 rounded-6xl ">
            <div class="sm:w-8/12 mx-auto">
              <div class="flex justify-center">
                  <h3 class="text-2xl font-bold border-emerald-400 border-b-4">About Me</h3>
              </div>
              
              <div class="block mt-6">
                <h3 class="text-2xl text-slate-800 dark:text-gray-50">Software Engineer & Web Developer</h3>
                <p class="text-sm mt-2">I love building web apps. I'm a full stack web developer with a passion for backend development and problem solving. I'm currently working on a few projects including this portfolio. I'm a huge fan of PHP and MySQL.</p>
      
                <div class="block mt-6 lg:grid lg:grid-cols-2 lg:gap-4 lg:justify-between max-w-3xl">
                  <div class="flex mt-3 sm:mt-0">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 fill-emerald-400" viewBox="0 0 20 20" fill="currentColor">
                      <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                    </svg>
                    &nbsp;
                    <p class="text-sm font-bold">Email: <span class="font-normal">me@abbara.dev</span></p>
                  </div>
      
                  <div class="flex mt-3 sm:mt-0">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 fill-emerald-400" viewBox="0 0 20 20" fill="currentColor">
                      <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                    </svg>
                    &nbsp;
                    <p class="text-sm font-bold">Degree: <span class="font-normal">Software Engineering (Sr)</span></p>
                  </div>
      
                  <div class="flex mt-3 sm:mt-0">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 fill-emerald-400" viewBox="0 0 20 20" fill="currentColor">
                      <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                    </svg>
                    &nbsp;
                    <p class="text-sm font-bold">Age: <span class="font-normal age">20</span></p>
                  </div>
      
                </div>
              </div>
            </div>

          </div>
        </div>
      </section>

      <section class="py-20" id="resume">
        <div class="block mx-auto z-20 items-center py-6 sm:py-24 ">
          <div class="container px-10 p-24 sm:px-32 items-center dark:text-gray-50 w-11/12 md:w-9/12 bg-emerald-50 dark:bg-gray-800 mx-auto rounded-6xl "> <!-- sm:w-7/12 -->
            <div class="mx-auto">
              <div class="flex justify-center">
                <h3 class="text-2xl font-bold border-emerald-400 border-b-4">Resume</h3>
              </div>

              <div class="block mt-6 mx-auto lg:flex sm:gap-6">
  
                <div class="mt-4" id="education">
                  <h3 class="text-2xl font-semibold">Education</h3>
                  <div class="max-w-xl mt-4">
                    <ol class="relative border-l border-gray-300 dark:border-gray-700">
                      <li class="mb-10 ml-4">
                        <div
                          class="absolute w-3 h-3 bg-gray-200 rounded-full -left-1.5 border border-white dark:border-gray-900 dark:bg-gray-700">
                        </div>
                        <time class="mb-1 text-sm font-normal leading-none text-gray-400 dark:text-gray-500">2020 - Present</time>
                        <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Bachelor Of Software Engineering</h3>
                        <p class="mb-4 mt-2 text-sm font-normal text-gray-500 dark:text-gray-400">
                          Alfaisal University, Riyadh, Saudi Arabia
                        </p>
                      </li>
                    </ol>
                  </div>
                </div>
  
                <div class="mt-4" id="experience">
                  <h3 class="text-2xl font-semibold">Professional Experience</h3>
                  <div class="max-w-2xl mt-4">
                    <ol class="relative border-l border-gray-200 dark:border-gray-700">
                      <li class="ml-4">
                        <div
                          class="absolute w-3 h-3 bg-gray-200 rounded-full -left-1.5 border border-white dark:border-gray-900 dark:bg-gray-700">
                        </div>
                        <time class="mb-1 text-sm font-normal leading-none text-gray-400 dark:text-gray-500">2018 - Present</time>
                        <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Freelancing In Web Development & Automation</h3>

                        <ul class="list-disc ml-4 mt-3">
                          <li class="mb-2">Developed numerous Web Apps and Automation programs </li>
                          <li>Managed up to 2 projects or tasks at a given time while under pressure</li>
                        </ul>
                      </li>

                      <li class="ml-4 mt-3">
                        <div
                          class="absolute w-3 h-3 bg-gray-200 rounded-full -left-1.5 border border-white dark:border-gray-900 dark:bg-gray-700">
                        </div>
                        <time class="mb-1 text-sm font-normal leading-none text-gray-400 dark:text-gray-500">Jan 2023 - June 2023</time>
                        <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Alfaisal University TA</h3>

                        <ul class="list-disc ml-4 mt-3">
                          <li class="mb-2">Responsible for grading assignments & exams, sharing personal knowledge & providing valuable feedback to students.</li>
                          <li class="mb-2">Balanced TA responsibilities with personal academic commitments throughout the semester, showcasing effective time management.</li>
                          <li>Developed key skills in organization, communication, and leadership, gaining a deep appreciation for the challenges and rewards of a teaching role.</li>
                        </ul>
                      </li>
                    </ol>
                  </div>

                </div>
  
              </div>
            </div>
            


          </div>
        </div>
      </section>

      <section id="work">
        <div class="block mx-auto z-20 items-center py-6 sm:py-24 ">
          <div class="container px-10 p-24 sm:px-32 items-center dark:text-gray-50 w-11/12 md:w-9/12 bg-emerald-50 dark:bg-gray-800 mx-auto rounded-6xl ">
            <div class="mx-auto">

              <div class="flex justify-center">
                <h3 class="text-2xl font-bold border-emerald-400 border-b-4">Work</h3>
              </div>

              <div class="block 2xl:grid 2xl:grid-cols-2 2xl:gap-5 mt-8">

                <div class="bg-emerald-100 rounded-2xl px-10 py-5 dark:bg-gray-900  border-emerald-200 dark:border-emerald-400 border">
                  <div class="p-2 pl-0">
                    <h1 class="text-black dark:text-gray-50 font-medium text-xl">Todo List</h1>
                    <p class="text-gray-500 dark:text-gray-400 text-sm">A lightweight to-do list web-app that stands out for its encrypted lists and performance with a
                      strong emphasis on user privacy and anonymity. The app is designed to function without user
                      accounts, which ensures confidentiality by not collecting personal data.</p>
                  </div>
                  <div class="flex flex-wrap">
                    <span class="mt-1 items-center mx-0.5 px-2.5 py-0.5 rounded-full text-xs font-medium bg-gray-300 text-gray-900 dark:bg-gray-700 dark:text-gray-50"> PHP </span>
                    <span class="mt-1 items-center mx-0.5 px-2.5 py-0.5 rounded-full text-xs font-medium bg-gray-300 text-gray-900 dark:bg-gray-700 dark:text-gray-50"> MySQL </span>
                    <span class="mt-1 items-center mx-0.5 px-2.5 py-0.5 rounded-full text-xs font-medium bg-gray-300 text-gray-900 dark:bg-gray-700 dark:text-gray-50"> JS </span>
                    <span class="mt-1 items-center mx-0.5 px-2.5 py-0.5 rounded-full text-xs font-medium bg-gray-300 text-gray-900 dark:bg-gray-700 dark:text-gray-50"> Tailwindcss </span>
                    <span class="mt-1 items-center mx-0.5 px-2.5 py-0.5 rounded-full text-xs font-medium bg-gray-300 text-gray-900 dark:bg-gray-700 dark:text-gray-50"> Twig </span>
                  </div>
                  <div class="block sm:flex mt-3">
                    <a href="https://todo.rocks" target="_blank" class="items-center inline-flex text-center px-3 py-2 mr-4 text-sm font-medium rounded-md shadow-sm text-gray-900 bg-emerald-200 dark:bg-emerald-500 dark:text-gray-50">Check Project</a>
                    
                    <a href="https://github.com/MAbbara/todo.rocks" target="_blank" class="mt-5 lg:mt-0 items-center inline-flex px-3 py-2 border border-transparent shadow-sm text-sm font-medium rounded-md text-gray-900 bg-emerald-200 dark:bg-emerald-500 dark:text-gray-50">
                      <svg class="h-4 w-4 mr-1 -ml-0.5" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 16 16">
                        <path d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27.68 0 1.36.09 2 .27 1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.012 8.012 0 0 0 16 8c0-4.42-3.58-8-8-8z"/>
                      </svg>
                      &nbsp; View On Github
                    </a>
                  </div>
                </div>

                <div class="bg-emerald-100 rounded-2xl mt-4 2xl:mt-0 px-10 py-5 dark:bg-gray-900  border-emerald-200 dark:border-emerald-400 border">
                  <div class="p-2 pl-0">
                    <h1 class="text-black dark:text-gray-50 font-medium text-xl">KSA Fuel Price API</h1>
                    <p class="text-gray-500 dark:text-gray-400 text-sm">Developed an api that fetches real-time national fuel prices for saudi arabia. This simple api is
                      unique, as no other publicly available api serves this purpose. Its is designed to deliver json
                      responses, optimized for speed and efficiency. This makes it lightweight and ideal for applications
                      where prompt and accurate fuel price information is essential.</p>
                  </div>
                  <div class="flex flex-wrap">
                    <span class="mt-1 inline-flex items-center mx-0.5 px-2.5 py-0.5 rounded-full text-xs font-medium bg-gray-300 text-gray-900 dark:bg-gray-700 dark:text-gray-50"> PHP </span>
                    <span class="mt-1 inline-flex items-center mx-0.5 px-2.5 py-0.5 rounded-full text-xs font-medium bg-gray-300 text-gray-900 dark:bg-gray-700 dark:text-gray-50"> API </span>
                  </div>
                  <div class="block sm:flex mt-3">
                    <a href="https://fuel.abbara.dev/" target="_blank" class="items-center inline-flex text-center px-3 py-2 mr-4 text-sm font-medium rounded-md shadow-sm text-gray-900 bg-emerald-200 dark:bg-emerald-500 dark:text-gray-50">Check Project</a>
                    
                    <a href="https://github.com/MAbbara/ksa-fuel-price-api" target="_blank" class="mt-5 lg:mt-0 items-center inline-flex px-3 py-2 border border-transparent shadow-sm text-sm font-medium rounded-md text-gray-900 bg-emerald-200 dark:bg-emerald-500 dark:text-gray-50">
                      <svg class="h-4 w-4 mr-1 -ml-0.5" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 16 16">
                        <path d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27.68 0 1.36.09 2 .27 1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.012 8.012 0 0 0 16 8c0-4.42-3.58-8-8-8z"/>
                      </svg>
                      &nbsp; View On Github
                    </a>
                  </div>
                </div>

                <div class="bg-emerald-100 rounded-2xl mt-4 2xl:mt-0 px-10 py-5 dark:bg-gray-900  border-emerald-200 dark:border-emerald-400 border">
                  <div class="p-2 pl-0">
                    <h1 class="text-black dark:text-gray-50 font-medium text-xl">Alfaisal GIC Website</h1>
                    <p class="text-gray-500 dark:text-gray-400 text-sm">As part of alfaisal university’s game development center’s website competition, collaborated with
                      the team to create a seamlessly designed website. The website enables participants to view
                      information regarding the center. A dashboard was developed, enabling the center’s director to
                      manage applications, memberships, and events.</p>
                  </div>
                  <div class="flex flex-wrap">
                    <span class="mt-1 inline-flex items-center mx-0.5 px-2.5 py-0.5 rounded-full text-xs font-medium bg-gray-300 text-gray-900 dark:bg-gray-700 dark:text-gray-50"> PHP </span>
                    <span class="mt-1 inline-flex items-center mx-0.5 px-2.5 py-0.5 rounded-full text-xs font-medium bg-gray-300 text-gray-900 dark:bg-gray-700 dark:text-gray-50"> MySQL </span>
                    <span class="mt-1 inline-flex items-center mx-0.5 px-2.5 py-0.5 rounded-full text-xs font-medium bg-gray-300 text-gray-900 dark:bg-gray-700 dark:text-gray-50"> JS </span>
                    <span class="mt-1 inline-flex items-center mx-0.5 px-2.5 py-0.5 rounded-full text-xs font-medium bg-gray-300 text-gray-900 dark:bg-gray-700 dark:text-gray-50"> Tailwindcss </span>
                    <span class="mt-1 inline-flex items-center mx-0.5 px-2.5 py-0.5 rounded-full text-xs font-medium bg-gray-300 text-gray-900 dark:bg-gray-700 dark:text-gray-50"> Bootstrap5 </span>
                  </div>
                  <div class="block lg:flex mt-3">
                    <a href="https://webproject.abbara.dev/" target="_blank" class="items-center inline-flex text-center px-3 py-2 mr-4 text-sm font-medium rounded-md shadow-sm text-gray-900 bg-emerald-200 dark:bg-emerald-500 dark:text-gray-50">Check Project</a>
                    
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section id="contact">
        <div class="block mx-auto z-20 items-center py-6 sm:py-24 ">
          <div class="container px-10 p-24 sm:px-32 items-center dark:text-gray-50 w-11/12 md:w-9/12 bg-emerald-50 dark:bg-gray-800 mx-auto rounded-6xl ">
            <div class="mx-auto">
              <div class="flex justify-center">
                <h3 class="text-2xl font-bold border-emerald-400 border-b-4">Contact Me</h3>
              </div>

              <div class="mx-auto">
                <div class="w-52 mx-auto">
                  <div class="flex mt-6">
                    <svg class="flex-shrink-0 h-6 w-6 text-gray-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true">
                      <path stroke-linecap="round" stroke-linejoin="round" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                    </svg>
                    <a href="mailto:me@abbara.dev" class="ml-3 text-gray-500 dark:text-gray-300"> me@abbara.dev </a>
                  </div>

                </div>

                <div class="flex relative py-5 items-center lg:w-3/6 mx-auto">
                  <div class="flex-grow border-t border-gray-400 dark:border-gray-500"></div>
                  <span class="flex-shrink mx-4 text-gray-400 dark:text-gray-500">Or</span>
                  <div class="flex-grow border-t border-gray-400 dark:border-gray-500"></div>
                </div>
                  
                <div class="mt-6 lg:w-3/6 mx-auto">
                  <form action="#" method="POST" class="contactForm">
                    <div class="">
                      <label for="first-name" class="block text-sm font-medium text-gray-800 dark:text-gray-50"><span class="text-red-600 font-bold">*</span> Name</label>
                      <div class="mt-1">
                        <input required type="text" placeholder="Name" name="first-name" id="name" autocomplete="given-name" class="py-2 px-4 block w-full shadow-sm focus:ring-emerald-500 focus:border-emerald-500 border-gray-300 dark:border-gray-700 rounded-md dark:text-gray-300 dark:bg-gray-700">
                      </div>
                    </div>

                    <div class="mt-3">
                      <label for="email" class="block text-sm font-medium text-gray-800 dark:text-gray-50"><span class="text-red-600 font-bold">*</span> Email</label>
                      <div class="mt-1">
                        <input required id="email" placeholder="Email" name="email" type="email" autocomplete="email" class="py-2 px-4 block w-full shadow-sm focus:ring-emerald-500 focus:border-emerald-500 border-gray-300 dark:border-gray-700 rounded-md dark:text-gray-300 dark:bg-gray-700">
                      </div>
                    </div>
                    <div class="mt-3">
                      <label for="email" class="block text-sm font-medium text-gray-800 dark:text-gray-50"><span class="text-red-600 font-bold">*</span> Subject</label>
                      <div class="mt-1">
                        <input required id="subject" placeholder="Subject" name="subject" type="text" autocomplete="off" class="py-2 px-4 block w-full shadow-sm focus:ring-emerald-500 focus:border-emerald-500 border-gray-300 dark:border-gray-700 rounded-md dark:text-gray-300 dark:bg-gray-700">
                      </div>
                    </div>
                    
                    <div class="mt-3">
                      <label for="message" class="block text-sm font-medium text-gray-800 dark:text-gray-50"><span class="text-red-600 font-bold">*</span> Message</label>
                      <div class="mt-1">
                        <textarea required id="message" placeholder="Message" name="message" rows="4" class="py-2 px-4 block w-full shadow-sm focus:ring-emerald-500 focus:border-emerald-500 border-gray-300 dark:border-gray-700 rounded-md dark:text-gray-300 dark:bg-gray-700"></textarea>
                      </div>
                    </div>
     

                    <div class="mt-3">
                    
                      <label for="captcha" class="block text-sm font-medium text-gray-800 dark:text-gray-50">Captcha</label>
                      <div class="mt-1">
                        <input id="captcha" required placeholder="Captcha" type="text" autocomplete="off" class="py-2 px-4 block w-full shadow-sm focus:ring-emerald-500 focus:border-emerald-500 border-gray-300 dark:border-gray-700 rounded-md dark:text-gray-300 dark:bg-gray-700">
                      </div>
                      <?php
                        $data = genCaptcha();

                        $img = $data['image'];
                        $key = $data['key'];
                        

                        echo "<img id='captchaImage' class='mt-1 rounded' src='data:image/png;base64,$img'>
                            <input id='key' type='hidden' value='$key'>
                        ";
                      ?>
                    </div>

                    <div class="mt-3">
                      <p id="response" class="mb-1 text-center text-sm hidden"></p>
                      <button type="submit" id="submitForm" class="w-full inline-flex items-center justify-center px-6 py-2 border border-transparent rounded-md shadow-sm text-base font-medium text-gray-800 dark:text-gray-50 bg-emerald-400 hover:bg-emerald-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-emerald-500 disabled:opacity-50 ">Let's talk</button>
                    </div>
                  </form>
                </div>
              </div>

            </div>
          </div>
        </div>
      </section>
    </main>

    <footer class="bg-white dark:bg-gray-900 mt-8">
      <div class="max-w-7xl mx-auto sm:py-6 py-12 px-4 sm:px-6 md:flex md:items-center md:justify-between lg:px-8">
        <div class="flex justify-center space-x-6 md:order-2">
          <a href="mailto:me@abbara.dev" target="_blank" class="text-gray-400 hover:text-gray-500">
            <span class="sr-only">Email</span>
            <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true">
              <path stroke-linecap="round" stroke-linejoin="round" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
            </svg>
          </a>
          <a href="https://github.com/Mabbara" target="_blank" class="text-gray-400 hover:text-gray-500">
            <span class="sr-only">GitHub</span>
            <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
              <path fill-rule="evenodd" d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z" clip-rule="evenodd" />
            </svg>
          </a>
        </div>
        <div class="mt-8 md:mt-0 md:order-1">
          <p class="text-center text-base text-gray-400">&copy; <script>document.write(new Date().getFullYear())</script> Mohammad Abbara. All rights reserved.</p>
        </div>
      </div>
    </footer>
  </div>

  <div class="fixed bottom-4 right-4 z-[100] sm:hidden">
    <button type="button" class="goTop items-center rounded-full border border-transparent bg-emerald-400 p-3 shadow-lg focus:outline-none dark:text-slate-900">
      <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="" class="stroke-gray-900 dark:stroke-white w-6 h-6">
        <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 15.75l7.5-7.5 7.5 7.5" />
      </svg>      
    </button>
  </div>

  <script src="./assets/js/jquery-3.6.0.min.js"></script>
  <script src="./assets/js/jquery.easing.min.js"></script>
  <script src="./assets/js/typer.js"></script>
  <script src="./assets/js/script.js"></script>


</body>
</html>
<?php
include_once('hms/include/config.php');
if(isset($_POST['submit']))
{
$name=$_POST['fullname'];
$email=$_POST['emailid'];
$mobileno=$_POST['mobileno'];
$dscrption=$_POST['description'];
$query=mysqli_query($con,"insert into tblcontactus(fullname,email,contactno,message) value('$name','$email','$mobileno','$dscrption')");
echo "<script>alert('Your information succesfully submitted');</script>";
echo "<script>window.location.href ='index.php'</script>";

} ?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title> Hospital management System </title>

    <link rel="shortcut icon" href="assets/images/fav.jpg">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/fontawsom-all.min.css">
     <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css" />
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@3.0.0/dist/tailwind.min.css" rel="stylesheet">
</head>
<body>
  <div class="bg-gray-900">
    <header class="absolute inset-x-0 top-0 z-50">
      <nav class="flex items-center justify-between p-6 lg:px-8" aria-label="Global">
        <div class="flex lg:flex-1">
          <a href="#" class="-m-1.5 p-1.5">
            <span class="sr-only">Your Company</span>
            <img class="h-8 w-auto" src="https://tailwindui.com/plus/img/logos/mark.svg?color=indigo&shade=500" alt="">
          </a>
        </div>
        <div class="flex lg:hidden">
          <button type="button" class="-m-2.5 inline-flex items-center justify-center rounded-md p-2.5 text-gray-400">
            <span class="sr-only">Open main menu</span>
            <svg class="size-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon">
              <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
            </svg>
          </button>
        </div>
        <div class="hidden lg:flex lg:gap-x-12">
          <a href="#" class="text-sm/6 font-semibold text-white">Product</a>
          <a href="#" class="text-sm/6 font-semibold text-white">Features</a>
          <a href="#" class="text-sm/6 font-semibold text-white">Marketplace</a>
          <a href="#" class="text-sm/6 font-semibold text-white">Company</a>
        </div>
        <div class="hidden lg:flex lg:flex-1 lg:justify-end">
          <a href="#" class="text-sm/6 font-semibold text-white">Log in <span aria-hidden="true">&rarr;</span></a>
        </div>
      </nav>
      <!-- <div class="lg:hidden" role="dialog" aria-modal="true">
        <div class="fixed inset-0 z-50"></div>
        <div class="fixed inset-y-0 right-0 z-50 w-full overflow-y-auto bg-gray-900 px-6 py-6 sm:max-w-sm sm:ring-1 sm:ring-white/10">
          <div class="flex items-center justify-between">
            <a href="#" class="-m-1.5 p-1.5">
              <span class="sr-only">Your Company</span>
              <img class="h-8 w-auto" src="https://tailwindui.com/plus/img/logos/mark.svg?color=indigo&shade=500" alt="">
            </a>
            <button type="button" class="-m-2.5 rounded-md p-2.5 text-gray-400">
              <span class="sr-only">Close menu</span>
              <svg class="size-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon">
                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
              </svg>
            </button>
          </div>
          <div class="mt-6 flow-root">
            <div class="-my-6 divide-y divide-gray-500/25">
              <div class="space-y-2 py-6">
                <a href="#" class="-mx-3 block rounded-lg px-3 py-2 text-base/7 font-semibold text-white hover:bg-gray-800">Product</a>
                <a href="#" class="-mx-3 block rounded-lg px-3 py-2 text-base/7 font-semibold text-white hover:bg-gray-800">Features</a>
                <a href="#" class="-mx-3 block rounded-lg px-3 py-2 text-base/7 font-semibold text-white hover:bg-gray-800">Marketplace</a>
                <a href="#" class="-mx-3 block rounded-lg px-3 py-2 text-base/7 font-semibold text-white hover:bg-gray-800">Company</a>
              </div>
              <div class="py-6">
                <a href="#" class="-mx-3 block rounded-lg px-3 py-2.5 text-base/7 font-semibold text-white hover:bg-gray-800">Log in</a>
              </div>
            </div>
          </div>
        </div>
      </div> -->
    </header>
  
    <div class="relative isolate overflow-hidden pt-14">
      <img src="./src/hospital.webp" alt="" class="absolute inset-0 -z-10 size-full object-cover">
      <div class="absolute inset-x-0 -top-40 -z-10 transform-gpu overflow-hidden blur-3xl sm:-top-80" aria-hidden="true">
        <div class="relative left-[calc(50%-11rem)] aspect-[1155/678] w-[36.125rem] -translate-x-1/2 rotate-[30deg] bg-gradient-to-tr from-[#ff80b5] to-[#9089fc] opacity-20 sm:left-[calc(50%-30rem)] sm:w-[72.1875rem]" style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"></div>
      </div>
      <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <div class="mx-auto max-w-2xl py-32 sm:py-48 lg:py-56">
          <div class="hidden sm:mb-8 sm:flex sm:justify-center">
            <div class="relative rounded-full px-3 py-1 text-sm/6 text-gray-400 ring-1 ring-white/10 hover:ring-white/20">
              Announcing our next round of funding. <a href="#" class="font-semibold text-white"><span class="absolute inset-0" aria-hidden="true"></span>Read more <span aria-hidden="true">&rarr;</span></a>
            </div>
          </div>
          <div class="text-center">
            <h1 class="text-balance text-5xl font-semibold tracking-tight text-white sm:text-7xl">Data to enrich your online business</h1>
            <p class="mt-8 text-pretty text-lg font-medium text-gray-400 sm:text-xl/8">Anim aute id magna aliqua ad ad non deserunt sunt. Qui irure qui lorem cupidatat commodo. Elit sunt amet fugiat veniam occaecat.</p>
            <div class="mt-10 flex items-center justify-center gap-x-6">
              <a href="#" class="rounded-md bg-indigo-500 px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-indigo-400 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-400">Get started</a>
              <a href="#" class="text-sm/6 font-semibold text-white">Learn more <span aria-hidden="true">→</span></a>
            </div>
          </div>
        </div>
      </div>
      <div class="absolute inset-x-0 top-[calc(100%-13rem)] -z-10 transform-gpu overflow-hidden blur-3xl sm:top-[calc(100%-30rem)]" aria-hidden="true">
        <div class="relative left-[calc(50%+3rem)] aspect-[1155/678] w-[36.125rem] -translate-x-1/2 bg-gradient-to-tr from-[#ff80b5] to-[#9089fc] opacity-20 sm:left-[calc(50%+36rem)] sm:w-[72.1875rem]" style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"></div>
      </div>
    </div>
  </div>

  <div class="bg-white py-24 sm:py-32">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
      <div class="mx-auto max-w-2xl lg:text-center">
        <h2 class="text-base/7 font-semibold text-indigo-600">Deploy faster</h2>
        <p class="mt-2 text-pretty text-4xl font-semibold tracking-tight text-gray-900 sm:text-5xl lg:text-balance">Everything you need to deploy your app</p>
        <p class="mt-6 text-lg/8 text-gray-600">Quis tellus eget adipiscing convallis sit sit eget aliquet quis. Suspendisse eget egestas a elementum pulvinar et feugiat blandit at. In mi viverra elit nunc.</p>
      </div>
      <div class="mx-auto mt-16 max-w-2xl sm:mt-20 lg:mt-24 lg:max-w-none">
        <dl class="grid max-w-xl grid-cols-1 gap-x-8 gap-y-16 lg:max-w-none lg:grid-cols-3">
          <div class="flex flex-col">
            <dt class="flex items-center gap-x-3 text-base/7 font-semibold text-gray-900">
              <svg class="size-5 flex-none text-indigo-600" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" data-slot="icon">
                <path fill-rule="evenodd" d="M5.5 17a4.5 4.5 0 0 1-1.44-8.765 4.5 4.5 0 0 1 8.302-3.046 3.5 3.5 0 0 1 4.504 4.272A4 4 0 0 1 15 17H5.5Zm3.75-2.75a.75.75 0 0 0 1.5 0V9.66l1.95 2.1a.75.75 0 1 0 1.1-1.02l-3.25-3.5a.75.75 0 0 0-1.1 0l-3.25 3.5a.75.75 0 1 0 1.1 1.02l1.95-2.1v4.59Z" clip-rule="evenodd" />
              </svg>
              Push to deploy
            </dt>
            <dd class="mt-4 flex flex-auto flex-col text-base/7 text-gray-600">
              <p class="flex-auto">Commodo nec sagittis tortor mauris sed. Turpis tortor quis scelerisque diam id accumsan nullam tempus. Pulvinar etiam lacus volutpat eu. Phasellus praesent ligula sit faucibus.</p>
              <p class="mt-6">
                <a href="#" class="text-sm/6 font-semibold text-indigo-600">Learn more <span aria-hidden="true">→</span></a>
              </p>
            </dd>
          </div>
          <div class="flex flex-col">
            <dt class="flex items-center gap-x-3 text-base/7 font-semibold text-gray-900">
              <svg class="size-5 flex-none text-indigo-600" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" data-slot="icon">
                <path fill-rule="evenodd" d="M10 1a4.5 4.5 0 0 0-4.5 4.5V9H5a2 2 0 0 0-2 2v6a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2v-6a2 2 0 0 0-2-2h-.5V5.5A4.5 4.5 0 0 0 10 1Zm3 8V5.5a3 3 0 1 0-6 0V9h6Z" clip-rule="evenodd" />
              </svg>
              SSL certificates
            </dt>
            <dd class="mt-4 flex flex-auto flex-col text-base/7 text-gray-600">
              <p class="flex-auto">Pellentesque enim a commodo malesuada turpis eleifend risus. Facilisis donec placerat sapien consequat tempor fermentum nibh.</p>
              <p class="mt-6">
                <a href="#" class="text-sm/6 font-semibold text-indigo-600">Learn more <span aria-hidden="true">→</span></a>
              </p>
            </dd>
          </div>
          <div class="flex flex-col">
            <dt class="flex items-center gap-x-3 text-base/7 font-semibold text-gray-900">
              <svg class="size-5 flex-none text-indigo-600" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" data-slot="icon">
                <path fill-rule="evenodd" d="M15.312 11.424a5.5 5.5 0 0 1-9.201 2.466l-.312-.311h2.433a.75.75 0 0 0 0-1.5H3.989a.75.75 0 0 0-.75.75v4.242a.75.75 0 0 0 1.5 0v-2.43l.31.31a7 7 0 0 0 11.712-3.138.75.75 0 0 0-1.449-.39Zm1.23-3.723a.75.75 0 0 0 .219-.53V2.929a.75.75 0 0 0-1.5 0V5.36l-.31-.31A7 7 0 0 0 3.239 8.188a.75.75 0 1 0 1.448.389A5.5 5.5 0 0 1 13.89 6.11l.311.31h-2.432a.75.75 0 0 0 0 1.5h4.243a.75.75 0 0 0 .53-.219Z" clip-rule="evenodd" />
              </svg>
              Simple queues
            </dt>
            <dd class="mt-4 flex flex-auto flex-col text-base/7 text-gray-600">
              <p class="flex-auto">Pellentesque sit elit congue ante nec amet. Dolor aenean curabitur viverra suspendisse iaculis eget. Nec mollis placerat ultricies euismod ut condimentum.</p>
              <p class="mt-6">
                <a href="#" class="text-sm/6 font-semibold text-indigo-600">Learn more <span aria-hidden="true">→</span></a>
              </p>
            </dd>
          </div>
        </dl>
      </div>
    </div>
  </div>

  
  <div class="bg-white">
    <div class="mx-auto max-w-7xl py-24 sm:px-6 sm:py-32 lg:px-8">
      <div class="relative isolate overflow-hidden bg-gray-900 px-6 py-24 text-center shadow-2xl sm:rounded-3xl sm:px-16">
        <h2 class="text-balance text-4xl font-semibold tracking-tight text-white sm:text-5xl">Boost your productivity today</h2>
        <p class="mx-auto mt-6 max-w-xl text-pretty text-lg/8 text-gray-300">Incididunt sint fugiat pariatur cupidatat consectetur sit cillum anim id veniam aliqua proident excepteur commodo do ea.</p>
        <div class="mt-10 flex items-center justify-center gap-x-6">
          <a href="#" class="rounded-md bg-white px-3.5 py-2.5 text-sm font-semibold text-gray-900 shadow-sm hover:bg-gray-100 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-white">Get started</a>
          <a href="#" class="text-sm/6 font-semibold text-white">Learn more <span aria-hidden="true">→</span></a>
        </div>
        <svg viewBox="0 0 1024 1024" class="absolute left-1/2 top-1/2 -z-10 size-[64rem] -translate-x-1/2 [mask-image:radial-gradient(closest-side,white,transparent)]" aria-hidden="true">
          <circle cx="512" cy="512" r="512" fill="url(#827591b1-ce8c-4110-b064-7cb85a0b1217)" fill-opacity="0.7" />
          <defs>
            <radialGradient id="827591b1-ce8c-4110-b064-7cb85a0b1217">
              <stop stop-color="#7775D6" />
              <stop offset="1" stop-color="#E935C1" />
            </radialGradient>
          </defs>
        </svg>
      </div>
    </div>
  </div>

  
  <div class="relative isolate bg-white px-6 py-24 sm:py-32 lg:px-8">
    <div class="absolute inset-x-0 -top-3 -z-10 transform-gpu overflow-hidden px-36 blur-3xl" aria-hidden="true">
      <div class="mx-auto aspect-[1155/678] w-[72.1875rem] bg-gradient-to-tr from-[#ff80b5] to-[#9089fc] opacity-30" style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"></div>
    </div>
    <div class="mx-auto max-w-4xl text-center">
      <h2 class="text-base/7 font-semibold text-indigo-600">Pricing</h2>
      <p class="mt-2 text-balance text-5xl font-semibold tracking-tight text-gray-900 sm:text-6xl">Choose the right plan for you</p>
    </div>
    <p class="mx-auto mt-6 max-w-2xl text-pretty text-center text-lg font-medium text-gray-600 sm:text-xl/8">Choose an affordable plan that’s packed with the best features for engaging your audience, creating customer loyalty, and driving sales.</p>
    <div class="mx-auto mt-16 grid max-w-lg grid-cols-1 items-center gap-y-6 sm:mt-20 sm:gap-y-0 lg:max-w-4xl lg:grid-cols-2">
      <div class="rounded-3xl rounded-t-3xl bg-white/60 p-8 ring-1 ring-gray-900/10 sm:mx-8 sm:rounded-b-none sm:p-10 lg:mx-0 lg:rounded-bl-3xl lg:rounded-tr-none">
        <h3 id="tier-hobby" class="text-base/7 font-semibold text-indigo-600">Hobby</h3>
        <p class="mt-4 flex items-baseline gap-x-2">
          <span class="text-5xl font-semibold tracking-tight text-gray-900">$29</span>
          <span class="text-base text-gray-500">/month</span>
        </p>
        <p class="mt-6 text-base/7 text-gray-600">The perfect plan if you&#039;re just getting started with our product.</p>
        <ul role="list" class="mt-8 space-y-3 text-sm/6 text-gray-600 sm:mt-10">
          <li class="flex gap-x-3">
            <svg class="h-6 w-5 flex-none text-indigo-600" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" data-slot="icon">
              <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 0 1 .143 1.052l-8 10.5a.75.75 0 0 1-1.127.075l-4.5-4.5a.75.75 0 0 1 1.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 0 1 1.05-.143Z" clip-rule="evenodd" />
            </svg>
            25 products
          </li>
          <li class="flex gap-x-3">
            <svg class="h-6 w-5 flex-none text-indigo-600" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" data-slot="icon">
              <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 0 1 .143 1.052l-8 10.5a.75.75 0 0 1-1.127.075l-4.5-4.5a.75.75 0 0 1 1.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 0 1 1.05-.143Z" clip-rule="evenodd" />
            </svg>
            Up to 10,000 subscribers
          </li>
          <li class="flex gap-x-3">
            <svg class="h-6 w-5 flex-none text-indigo-600" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" data-slot="icon">
              <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 0 1 .143 1.052l-8 10.5a.75.75 0 0 1-1.127.075l-4.5-4.5a.75.75 0 0 1 1.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 0 1 1.05-.143Z" clip-rule="evenodd" />
            </svg>
            Advanced analytics
          </li>
          <li class="flex gap-x-3">
            <svg class="h-6 w-5 flex-none text-indigo-600" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" data-slot="icon">
              <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 0 1 .143 1.052l-8 10.5a.75.75 0 0 1-1.127.075l-4.5-4.5a.75.75 0 0 1 1.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 0 1 1.05-.143Z" clip-rule="evenodd" />
            </svg>
            24-hour support response time
          </li>
        </ul>
        <a href="#" aria-describedby="tier-hobby" class="mt-8 block rounded-md px-3.5 py-2.5 text-center text-sm font-semibold text-indigo-600 ring-1 ring-inset ring-indigo-200 hover:ring-indigo-300 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600 sm:mt-10">Get started today</a>
      </div>
      <div class="relative rounded-3xl bg-gray-900 p-8 shadow-2xl ring-1 ring-gray-900/10 sm:p-10">
        <h3 id="tier-enterprise" class="text-base/7 font-semibold text-indigo-400">Enterprise</h3>
        <p class="mt-4 flex items-baseline gap-x-2">
          <span class="text-5xl font-semibold tracking-tight text-white">$99</span>
          <span class="text-base text-gray-400">/month</span>
        </p>
        <p class="mt-6 text-base/7 text-gray-300">Dedicated support and infrastructure for your company.</p>
        <ul role="list" class="mt-8 space-y-3 text-sm/6 text-gray-300 sm:mt-10">
          <li class="flex gap-x-3">
            <svg class="h-6 w-5 flex-none text-indigo-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" data-slot="icon">
              <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 0 1 .143 1.052l-8 10.5a.75.75 0 0 1-1.127.075l-4.5-4.5a.75.75 0 0 1 1.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 0 1 1.05-.143Z" clip-rule="evenodd" />
            </svg>
            Unlimited products
          </li>
          <li class="flex gap-x-3">
            <svg class="h-6 w-5 flex-none text-indigo-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" data-slot="icon">
              <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 0 1 .143 1.052l-8 10.5a.75.75 0 0 1-1.127.075l-4.5-4.5a.75.75 0 0 1 1.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 0 1 1.05-.143Z" clip-rule="evenodd" />
            </svg>
            Unlimited subscribers
          </li>
          <li class="flex gap-x-3">
            <svg class="h-6 w-5 flex-none text-indigo-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" data-slot="icon">
              <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 0 1 .143 1.052l-8 10.5a.75.75 0 0 1-1.127.075l-4.5-4.5a.75.75 0 0 1 1.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 0 1 1.05-.143Z" clip-rule="evenodd" />
            </svg>
            Advanced analytics
          </li>
          <li class="flex gap-x-3">
            <svg class="h-6 w-5 flex-none text-indigo-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" data-slot="icon">
              <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 0 1 .143 1.052l-8 10.5a.75.75 0 0 1-1.127.075l-4.5-4.5a.75.75 0 0 1 1.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 0 1 1.05-.143Z" clip-rule="evenodd" />
            </svg>
            Dedicated support representative
          </li>
          <li class="flex gap-x-3">
            <svg class="h-6 w-5 flex-none text-indigo-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" data-slot="icon">
              <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 0 1 .143 1.052l-8 10.5a.75.75 0 0 1-1.127.075l-4.5-4.5a.75.75 0 0 1 1.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 0 1 1.05-.143Z" clip-rule="evenodd" />
            </svg>
            Marketing automations
          </li>
          <li class="flex gap-x-3">
            <svg class="h-6 w-5 flex-none text-indigo-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" data-slot="icon">
              <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 0 1 .143 1.052l-8 10.5a.75.75 0 0 1-1.127.075l-4.5-4.5a.75.75 0 0 1 1.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 0 1 1.05-.143Z" clip-rule="evenodd" />
            </svg>
            Custom integrations
          </li>
        </ul>
        <a href="#" aria-describedby="tier-enterprise" class="mt-8 block rounded-md bg-indigo-500 px-3.5 py-2.5 text-center text-sm font-semibold text-white shadow-sm hover:bg-indigo-400 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-500 sm:mt-10">Get started today</a>
      </div>
    </div>
  </div>
  
  
  <div class="relative isolate overflow-hidden bg-gray-900 py-24 sm:py-32">
    <img src="https://images.unsplash.com/photo-1522071820081-009f0129c71c?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2850&q=80&blend=111827&blend-mode=multiply&sat=-100&exp=15" alt="" class="absolute inset-0 -z-10 size-full object-cover">
    <div class="relative mx-auto max-w-7xl px-6 lg:px-8">
      <div class="absolute -bottom-8 -left-96 -z-10 transform-gpu blur-3xl sm:-bottom-64 sm:-left-40 lg:-bottom-32 lg:left-8 xl:-left-10" aria-hidden="true">
        <div class="aspect-[1266/975] w-[79.125rem] bg-gradient-to-tr from-[#ff4694] to-[#776fff] opacity-20" style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"></div>
      </div>
      <div class="mx-auto max-w-2xl lg:mx-0 lg:max-w-xl">
        <h2 class="text-base/8 font-semibold text-indigo-400">Our track record</h2>
        <p class="mt-2 text-pretty text-4xl font-semibold tracking-tight text-white sm:text-5xl">Trusted by thousands of creators&nbsp;worldwide</p>
        <p class="mt-6 text-lg/8 text-gray-300">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Maiores impedit perferendis suscipit eaque, iste dolor cupiditate blanditiis.</p>
      </div>
      <dl class="mx-auto mt-16 grid max-w-2xl grid-cols-1 gap-x-8 gap-y-10 text-white sm:mt-20 sm:grid-cols-2 sm:gap-y-16 lg:mx-0 lg:max-w-none lg:grid-cols-4">
        <div class="flex flex-col gap-y-3 border-l border-white/10 pl-6">
          <dt class="text-sm/6">Creators on the platform</dt>
          <dd class="order-first text-3xl font-semibold tracking-tight">8,000+</dd>
        </div>
        <div class="flex flex-col gap-y-3 border-l border-white/10 pl-6">
          <dt class="text-sm/6">Flat platform fee</dt>
          <dd class="order-first text-3xl font-semibold tracking-tight">3%</dd>
        </div>
        <div class="flex flex-col gap-y-3 border-l border-white/10 pl-6">
          <dt class="text-sm/6">Uptime guarantee</dt>
          <dd class="order-first text-3xl font-semibold tracking-tight">99.9%</dd>
        </div>
        <div class="flex flex-col gap-y-3 border-l border-white/10 pl-6">
          <dt class="text-sm/6">Paid out to creators</dt>
          <dd class="order-first text-3xl font-semibold tracking-tight">$70M</dd>
        </div>
      </dl>
    </div>
  </div>

  
  <div class="relative isolate bg-white pb-32 pt-24 sm:pt-32">
    <div class="absolute inset-x-0 top-1/2 -z-10 -translate-y-1/2 transform-gpu overflow-hidden opacity-30 blur-3xl" aria-hidden="true">
      <div class="ml-[max(50%,38rem)] aspect-[1313/771] w-[82.0625rem] bg-gradient-to-tr from-[#ff80b5] to-[#9089fc]" style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"></div>
    </div>
    <div class="absolute inset-x-0 top-0 -z-10 flex transform-gpu overflow-hidden pt-32 opacity-25 blur-3xl sm:pt-40 xl:justify-end" aria-hidden="true">
      <div class="ml-[-22rem] aspect-[1313/771] w-[82.0625rem] flex-none origin-top-right rotate-[30deg] bg-gradient-to-tr from-[#ff80b5] to-[#9089fc] xl:ml-0 xl:mr-[calc(50%-12rem)]" style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"></div>
    </div>
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
      <div class="mx-auto max-w-2xl text-center">
        <h2 class="text-base/7 font-semibold text-indigo-600">Testimonials</h2>
        <p class="mt-2 text-balance text-4xl font-semibold tracking-tight text-gray-900 sm:text-5xl">We have worked with thousands of amazing people</p>
      </div>
      <div class="mx-auto mt-16 grid max-w-2xl grid-cols-1 grid-rows-1 gap-8 text-sm/6 text-gray-900 sm:mt-20 sm:grid-cols-2 xl:mx-0 xl:max-w-none xl:grid-flow-col xl:grid-cols-4">
        <figure class="rounded-2xl bg-white shadow-lg ring-1 ring-gray-900/5 sm:col-span-2 xl:col-start-2 xl:row-end-1">
          <blockquote class="p-6 text-lg font-semibold tracking-tight text-gray-900 sm:p-12 sm:text-xl/8">
            <p>“Integer id nunc sit semper purus. Bibendum at lacus ut arcu blandit montes vitae auctor libero. Hac condimentum dignissim nibh vulputate ut nunc. Amet nibh orci mi venenatis blandit vel et proin. Non hendrerit in vel ac diam.”</p>
          </blockquote>
          <figcaption class="flex flex-wrap items-center gap-x-4 gap-y-4 border-t border-gray-900/10 px-6 py-4 sm:flex-nowrap">
            <img class="size-10 flex-none rounded-full bg-gray-50" src="https://images.unsplash.com/photo-1550525811-e5869dd03032?ixlib=rb-=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=1024&h=1024&q=80" alt="">
            <div class="flex-auto">
              <div class="font-semibold">Brenna Goyette</div>
              <div class="text-gray-600">@brennagoyette</div>
            </div>
            <img class="h-10 w-auto flex-none" src="https://tailwindui.com/plus/img/logos/savvycal-logo-gray-900.svg" alt="">
          </figcaption>
        </figure>
        <div class="space-y-8 xl:contents xl:space-y-0">
          <div class="space-y-8 xl:row-span-2">
            <figure class="rounded-2xl bg-white p-6 shadow-lg ring-1 ring-gray-900/5">
              <blockquote class="text-gray-900">
                <p>“Laborum quis quam. Dolorum et ut quod quia. Voluptas numquam delectus nihil. Aut enim doloremque et ipsam.”</p>
              </blockquote>
              <figcaption class="mt-6 flex items-center gap-x-4">
                <img class="size-10 rounded-full bg-gray-50" src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
                <div>
                  <div class="font-semibold">Leslie Alexander</div>
                  <div class="text-gray-600">@lesliealexander</div>
                </div>
              </figcaption>
            </figure>
  
            <!-- More testimonials... -->
          </div>
          <div class="space-y-8 xl:row-start-1">
            <figure class="rounded-2xl bg-white p-6 shadow-lg ring-1 ring-gray-900/5">
              <blockquote class="text-gray-900">
                <p>“Aut reprehenderit voluptatem eum asperiores beatae id. Iure molestiae ipsam ut officia rem nulla blanditiis.”</p>
              </blockquote>
              <figcaption class="mt-6 flex items-center gap-x-4">
                <img class="size-10 rounded-full bg-gray-50" src="https://images.unsplash.com/photo-1517841905240-472988babdf9?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
                <div>
                  <div class="font-semibold">Lindsay Walton</div>
                  <div class="text-gray-600">@lindsaywalton</div>
                </div>
              </figcaption>
            </figure>
  
            <!-- More testimonials... -->
          </div>
        </div>
        <div class="space-y-8 xl:contents xl:space-y-0">
          <div class="space-y-8 xl:row-start-1">
            <figure class="rounded-2xl bg-white p-6 shadow-lg ring-1 ring-gray-900/5">
              <blockquote class="text-gray-900">
                <p>“Voluptas quos itaque ipsam in voluptatem est. Iste eos blanditiis repudiandae. Earum deserunt enim molestiae ipsum perferendis recusandae saepe corrupti.”</p>
              </blockquote>
              <figcaption class="mt-6 flex items-center gap-x-4">
                <img class="size-10 rounded-full bg-gray-50" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
                <div>
                  <div class="font-semibold">Tom Cook</div>
                  <div class="text-gray-600">@tomcook</div>
                </div>
              </figcaption>
            </figure>
  
            <!-- More testimonials... -->
          </div>
          <div class="space-y-8 xl:row-span-2">
            <figure class="rounded-2xl bg-white p-6 shadow-lg ring-1 ring-gray-900/5">
              <blockquote class="text-gray-900">
                <p>“Molestias ea earum quos nostrum doloremque sed. Quaerat quasi aut velit incidunt excepturi rerum voluptatem minus harum.”</p>
              </blockquote>
              <figcaption class="mt-6 flex items-center gap-x-4">
                <img class="size-10 rounded-full bg-gray-50" src="https://images.unsplash.com/photo-1519345182560-3f2917c472ef?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
                <div>
                  <div class="font-semibold">Leonard Krasner</div>
                  <div class="text-gray-600">@leonardkrasner</div>
                </div>
              </figcaption>
            </figure>
  
            <!-- More testimonials... -->
          </div>
        </div>
      </div>
    </div>
  </div>

  
  <div class="bg-white py-24 sm:py-32">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
      <h2 class="text-center text-lg/8 font-semibold text-gray-900">Trusted by the world’s most innovative teams</h2>
      <div class="mx-auto mt-10 grid max-w-lg grid-cols-4 items-center gap-x-8 gap-y-10 sm:max-w-xl sm:grid-cols-6 sm:gap-x-10 lg:mx-0 lg:max-w-none lg:grid-cols-5">
        <img class="col-span-2 max-h-12 w-full object-contain lg:col-span-1" src="https://tailwindui.com/plus/img/logos/158x48/transistor-logo-gray-900.svg" alt="Transistor" width="158" height="48">
        <img class="col-span-2 max-h-12 w-full object-contain lg:col-span-1" src="https://tailwindui.com/plus/img/logos/158x48/reform-logo-gray-900.svg" alt="Reform" width="158" height="48">
        <img class="col-span-2 max-h-12 w-full object-contain lg:col-span-1" src="https://tailwindui.com/plus/img/logos/158x48/tuple-logo-gray-900.svg" alt="Tuple" width="158" height="48">
        <img class="col-span-2 max-h-12 w-full object-contain sm:col-start-2 lg:col-span-1" src="https://tailwindui.com/plus/img/logos/158x48/savvycal-logo-gray-900.svg" alt="SavvyCal" width="158" height="48">
        <img class="col-span-2 col-start-2 max-h-12 w-full object-contain sm:col-start-auto lg:col-span-1" src="https://tailwindui.com/plus/img/logos/158x48/statamic-logo-gray-900.svg" alt="Statamic" width="158" height="48">
      </div>
    </div>
  </div>

  
  <div class="bg-white py-24 sm:py-32">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
      <div class="mx-auto max-w-2xl lg:mx-0">
        <h2 class="text-pretty text-4xl font-semibold tracking-tight text-gray-900 sm:text-5xl">Our offices</h2>
        <p class="mt-6 text-lg/8 text-gray-600">Varius facilisi mauris sed sit. Non sed et duis dui leo, vulputate id malesuada non. Cras aliquet purus dui laoreet diam sed lacus, fames.</p>
      </div>
      <div class="mx-auto mt-16 grid max-w-2xl grid-cols-1 gap-8 text-base/7 sm:grid-cols-2 sm:gap-y-16 lg:mx-0 lg:max-w-none lg:grid-cols-4">
        <div>
          <h3 class="border-l border-indigo-600 pl-6 font-semibold text-gray-900">Los Angeles</h3>
          <address class="border-l border-gray-200 pl-6 pt-2 not-italic text-gray-600">
            <p>4556 Brendan Ferry</p>
            <p>Los Angeles, CA 90210</p>
          </address>
        </div>
        <div>
          <h3 class="border-l border-indigo-600 pl-6 font-semibold text-gray-900">New York</h3>
          <address class="border-l border-gray-200 pl-6 pt-2 not-italic text-gray-600">
            <p>886 Walter Street</p>
            <p>New York, NY 12345</p>
          </address>
        </div>
        <div>
          <h3 class="border-l border-indigo-600 pl-6 font-semibold text-gray-900">Toronto</h3>
          <address class="border-l border-gray-200 pl-6 pt-2 not-italic text-gray-600">
            <p>7363 Cynthia Pass</p>
            <p>Toronto, ON N3Y 4H8</p>
          </address>
        </div>
        <div>
          <h3 class="border-l border-indigo-600 pl-6 font-semibold text-gray-900">London</h3>
          <address class="border-l border-gray-200 pl-6 pt-2 not-italic text-gray-600">
            <p>114 Cobble Lane</p>
            <p>London N1 2EF</p>
          </address>
        </div>
      </div>
    </div>
  </div>

  
  <footer class="bg-white">
    <div class="mx-auto max-w-7xl px-6 pb-8 pt-16 sm:pt-24 lg:px-8 lg:pt-32">
      <div class="xl:grid xl:grid-cols-3 xl:gap-8">
        <div class="space-y-8">
          <img class="h-9" src="https://tailwindui.com/plus/img/logos/mark.svg?color=indigo&shade=600" alt="Company name">
          <p class="text-balance text-sm/6 text-gray-600">Making the world a better place through constructing elegant hierarchies.</p>
          <div class="flex gap-x-6">
            <a href="#" class="text-gray-600 hover:text-gray-800">
              <span class="sr-only">Facebook</span>
              <svg class="size-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                <path fill-rule="evenodd" d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z" clip-rule="evenodd" />
              </svg>
            </a>
            <a href="#" class="text-gray-600 hover:text-gray-800">
              <span class="sr-only">Instagram</span>
              <svg class="size-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                <path fill-rule="evenodd" d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z" clip-rule="evenodd" />
              </svg>
            </a>
            <a href="#" class="text-gray-600 hover:text-gray-800">
              <span class="sr-only">X</span>
              <svg class="size-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                <path d="M13.6823 10.6218L20.2391 3H18.6854L12.9921 9.61788L8.44486 3H3.2002L10.0765 13.0074L3.2002 21H4.75404L10.7663 14.0113L15.5685 21H20.8131L13.6819 10.6218H13.6823ZM11.5541 13.0956L10.8574 12.0991L5.31391 4.16971H7.70053L12.1742 10.5689L12.8709 11.5655L18.6861 19.8835H16.2995L11.5541 13.096V13.0956Z" />
              </svg>
            </a>
            <a href="#" class="text-gray-600 hover:text-gray-800">
              <span class="sr-only">GitHub</span>
              <svg class="size-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                <path fill-rule="evenodd" d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z" clip-rule="evenodd" />
              </svg>
            </a>
            <a href="#" class="text-gray-600 hover:text-gray-800">
              <span class="sr-only">YouTube</span>
              <svg class="size-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                <path fill-rule="evenodd" d="M19.812 5.418c.861.23 1.538.907 1.768 1.768C21.998 8.746 22 12 22 12s0 3.255-.418 4.814a2.504 2.504 0 0 1-1.768 1.768c-1.56.419-7.814.419-7.814.419s-6.255 0-7.814-.419a2.505 2.505 0 0 1-1.768-1.768C2 15.255 2 12 2 12s0-3.255.417-4.814a2.507 2.507 0 0 1 1.768-1.768C5.744 5 11.998 5 11.998 5s6.255 0 7.814.418ZM15.194 12 10 15V9l5.194 3Z" clip-rule="evenodd" />
              </svg>
            </a>
          </div>
        </div>
        <div class="mt-16 grid grid-cols-2 gap-8 xl:col-span-2 xl:mt-0">
          <div class="md:grid md:grid-cols-2 md:gap-8">
            <div>
              <h3 class="text-sm/6 font-semibold text-gray-900">Solutions</h3>
              <ul role="list" class="mt-6 space-y-4">
                <li>
                  <a href="#" class="text-sm/6 text-gray-600 hover:text-gray-900">Marketing</a>
                </li>
                <li>
                  <a href="#" class="text-sm/6 text-gray-600 hover:text-gray-900">Analytics</a>
                </li>
                <li>
                  <a href="#" class="text-sm/6 text-gray-600 hover:text-gray-900">Automation</a>
                </li>
                <li>
                  <a href="#" class="text-sm/6 text-gray-600 hover:text-gray-900">Commerce</a>
                </li>
                <li>
                  <a href="#" class="text-sm/6 text-gray-600 hover:text-gray-900">Insights</a>
                </li>
              </ul>
            </div>
            <div class="mt-10 md:mt-0">
              <h3 class="text-sm/6 font-semibold text-gray-900">Support</h3>
              <ul role="list" class="mt-6 space-y-4">
                <li>
                  <a href="#" class="text-sm/6 text-gray-600 hover:text-gray-900">Submit ticket</a>
                </li>
                <li>
                  <a href="#" class="text-sm/6 text-gray-600 hover:text-gray-900">Documentation</a>
                </li>
                <li>
                  <a href="#" class="text-sm/6 text-gray-600 hover:text-gray-900">Guides</a>
                </li>
              </ul>
            </div>
          </div>
          <div class="md:grid md:grid-cols-2 md:gap-8">
            <div>
              <h3 class="text-sm/6 font-semibold text-gray-900">Company</h3>
              <ul role="list" class="mt-6 space-y-4">
                <li>
                  <a href="#" class="text-sm/6 text-gray-600 hover:text-gray-900">About</a>
                </li>
                <li>
                  <a href="#" class="text-sm/6 text-gray-600 hover:text-gray-900">Blog</a>
                </li>
                <li>
                  <a href="#" class="text-sm/6 text-gray-600 hover:text-gray-900">Jobs</a>
                </li>
                <li>
                  <a href="#" class="text-sm/6 text-gray-600 hover:text-gray-900">Press</a>
                </li>
              </ul>
            </div>
            <div class="mt-10 md:mt-0">
              <h3 class="text-sm/6 font-semibold text-gray-900">Legal</h3>
              <ul role="list" class="mt-6 space-y-4">
                <li>
                  <a href="#" class="text-sm/6 text-gray-600 hover:text-gray-900">Terms of service</a>
                </li>
                <li>
                  <a href="#" class="text-sm/6 text-gray-600 hover:text-gray-900">Privacy policy</a>
                </li>
                <li>
                  <a href="#" class="text-sm/6 text-gray-600 hover:text-gray-900">License</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="mt-16 border-t border-gray-900/10 pt-8 sm:mt-20 lg:mt-24">
        <p class="text-sm/6 text-gray-600">&copy; 2024 HMS, Inc. All rights reserved.</p>
      </div>
    </div>
  </footer>
  
      
</body>

<script src="assets/js/jquery-3.2.1.min.js"></script>
<script src="assets/js/popper.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/plugins/scroll-nav/js/jquery.easing.min.js"></script>
<script src="assets/plugins/scroll-nav/js/scrolling-nav.js"></script>
<script src="assets/plugins/scroll-fixed/jquery-scrolltofixed-min.js"></script>

<script src="assets/js/script.js"></script>



</html>
@extends('admission::layouts.master')

@section('content')
    
<section id="head">
<div class="w-full h-[calc(100vh-120px)] bg-[url(/public/stock/admission.jpg)] flex items-end">
        <div class="w-full h-[60%] bg-gradient-to-t from-black to-transparent text-white">
            <div class="container mx-auto flex h-full">
                <div class="w-[100%] flex flex-col justify-start text-center items-center -mt-16">
                    <div class="text-8xl font-bold logo-font">Acceptance is flexible</div>
                    <div class="text-4xl mt-4">Consider the our options,</div>
                    <div class="text-4xl">Come here to start your career.</div>
                </div>
                <div class="w-[100%] flex justify-end items-end text-black">
                    <div class="w-[75%] bg-white shadow-lg rounded-tl-xl rounded-tr-xl">
                        <div class="border-b p-6 text-center font-bold">REQUEST MORE INFO</div>
                        <div class="p-6">
                            <div class="flex flex-col gap-6 w-full">
                                <div>
                                    <label for="">Your Fullname:</label>
                                    <input type="text" name="" id="" class="mt-3 bg-white p-4 border block w-full"/>
                                </div>
                                <div>
                                    <label for="">Your E-mail:</label>
                                    <input type="email" name="" id="" class="mt-3 bg-white p-4 border block w-full"/>
                                </div>
                                <div>
                                    <label for="">Your Message:</label>
                                    <textarea name="" id="" rows="5" class="mt-3 bg-white pt-4 border block w-full"></textarea>
                                </div>
                            </div>                            
                        </div>
                        <div class="border-t p-6 text-center">
                            <button type="submit" class="submit-apply-btn">
                                <div class="svg-wrapper-1">
                                    <div class="svg-wrapper">
                                    <svg height="24" width="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M0 0h24v24H0z" fill="none"></path>
                                        <path d="M1.946 9.315c-.522-.174-.527-.455.01-.634l19.087-6.362c.529-.176.832.12.684.638l-5.454 19.086c-.15.529-.455.547-.679.045L12 14l6-8-8 6-8.054-2.685z" fill="currentColor"></path>
                                    </svg>
                                    </div>
                                </div>
                                <span>SEND REQUEST</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="introduction-sport-activites" class="h-[calc(100vh-120px)] bg-blue-100 text-blue-700 flex flex-col gap-4 items-center">
    <div class="bg-blue-700 text-white w-full py-12 text-center">
        <div class="logo-font text-8xl drop-shadow-[12px_12px_0_rgba(0,0,0,.1)]">SPORT CLUB MEMBERSHIP</div>
        <div class="logo-font text-3xl drop-shadow-[6px_6px_0_rgba(0,0,0,.1)]">Our University has Sport Club Membership</div>
    </div>
    <div class="h-full flex items-start">
        <div class="flex gap-8 mx-auto w-[75%] mt-12">
            <div class="w-[30%]">
                <img src="/stock/championship.png" alt="Our Basketball NSA Championship" class="rounded-full w-[256px] h-[256px]"/>
            </div>
            <div class="w-[100%] text-blue-900">
                <div class="text-6xl font-bold logo-font drop-shadow-[6px_6px_0_#FAAB2A]"><span class="bg-blue-900 text-white">The Universite 2017 Basketball</span> League Final Event Championship</div>
                <div class="text-3xl italic mt-6">We won the final challenge that is incredible at 2017 Sport Club Basketball League.</div>
            </div>
        </div>
    </div>
</section>

<section id="introduction-library-facilities" class="h-[calc(100vh-120px)] bg-[url(/public/stock/library.jpg)] bg-cover bg-center">
    <div class="bg-gradient-to-b from-black to-transparent h-[100%]">
        <div class="py-12 flex gap-12 container mx-auto">
            <div class="text-white">
                <div class="text-6xl font-bold italic py-8 mb-4">OUR LIBRARY FACILITIES</div>
                <div class="text-xl mb-16">With our rich library and online library system, you can always access to all resources about your research topic.</div>
                <div class="grid grid-cols-2 w-[70%] gap-6 mb-20">
                    <div class="flex items-center gap-4 font-light">
                        <svg enable-background="new 0 0 24 24" height="24px" id="Layer_1" version="1.1" viewBox="0 0 512 512" width="24px" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><path d="M256,6.998c-137.533,0-249,111.467-249,249c0,137.534,111.467,249,249,249s249-111.467,249-249  C505,118.464,393.533,6.998,256,6.998z M256,485.078c-126.309,0-229.08-102.771-229.08-229.081  c0-126.31,102.771-229.08,229.08-229.08c126.31,0,229.08,102.771,229.08,229.08C485.08,382.307,382.31,485.078,256,485.078z" fill="#fff"/><polygon fill="#fff" points="384.235,158.192 216.919,325.518 127.862,236.481 113.72,250.624 216.919,353.803 398.28,172.334   "/></svg>
                        Library is 7/24 open
                    </div>
                    <div class="flex items-center gap-4 font-light">
                        <svg enable-background="new 0 0 24 24" height="24px" id="Layer_1" version="1.1" viewBox="0 0 512 512" width="24px" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><path d="M256,6.998c-137.533,0-249,111.467-249,249c0,137.534,111.467,249,249,249s249-111.467,249-249  C505,118.464,393.533,6.998,256,6.998z M256,485.078c-126.309,0-229.08-102.771-229.08-229.081  c0-126.31,102.771-229.08,229.08-229.08c126.31,0,229.08,102.771,229.08,229.08C485.08,382.307,382.31,485.078,256,485.078z" fill="#fff"/><polygon fill="#fff" points="384.235,158.192 216.919,325.518 127.862,236.481 113.72,250.624 216.919,353.803 398.28,172.334   "/></svg>
                        Always access with Online Library
                    </div>
                    <div class="flex items-center gap-4 font-light">
                        <svg enable-background="new 0 0 24 24" height="24px" id="Layer_1" version="1.1" viewBox="0 0 512 512" width="24px" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><path d="M256,6.998c-137.533,0-249,111.467-249,249c0,137.534,111.467,249,249,249s249-111.467,249-249  C505,118.464,393.533,6.998,256,6.998z M256,485.078c-126.309,0-229.08-102.771-229.08-229.081  c0-126.31,102.771-229.08,229.08-229.08c126.31,0,229.08,102.771,229.08,229.08C485.08,382.307,382.31,485.078,256,485.078z" fill="#fff"/><polygon fill="#fff" points="384.235,158.192 216.919,325.518 127.862,236.481 113.72,250.624 216.919,353.803 398.28,172.334   "/></svg>
                        Rent a book for free
                    </div>
                    <div class="flex items-center gap-4 font-light">
                        <svg enable-background="new 0 0 24 24" height="24px" id="Layer_1" version="1.1" viewBox="0 0 512 512" width="24px" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><path d="M256,6.998c-137.533,0-249,111.467-249,249c0,137.534,111.467,249,249,249s249-111.467,249-249  C505,118.464,393.533,6.998,256,6.998z M256,485.078c-126.309,0-229.08-102.771-229.08-229.081  c0-126.31,102.771-229.08,229.08-229.08c126.31,0,229.08,102.771,229.08,229.08C485.08,382.307,382.31,485.078,256,485.078z" fill="#fff"/><polygon fill="#fff" points="384.235,158.192 216.919,325.518 127.862,236.481 113.72,250.624 216.919,353.803 398.28,172.334   "/></svg>
                        Regularly reading hours
                    </div>
                    <div class="flex items-center gap-4 font-light">
                        <svg enable-background="new 0 0 24 24" height="24px" id="Layer_1" version="1.1" viewBox="0 0 512 512" width="24px" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><path d="M256,6.998c-137.533,0-249,111.467-249,249c0,137.534,111.467,249,249,249s249-111.467,249-249  C505,118.464,393.533,6.998,256,6.998z M256,485.078c-126.309,0-229.08-102.771-229.08-229.081  c0-126.31,102.771-229.08,229.08-229.08c126.31,0,229.08,102.771,229.08,229.08C485.08,382.307,382.31,485.078,256,485.078z" fill="#fff"/><polygon fill="#fff" points="384.235,158.192 216.919,325.518 127.862,236.481 113.72,250.624 216.919,353.803 398.28,172.334   "/></svg>
                        Research assistant supports
                    </div>
                    <div class="flex items-center gap-4 font-light">
                        <svg enable-background="new 0 0 24 24" height="24px" id="Layer_1" version="1.1" viewBox="0 0 512 512" width="24px" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><path d="M256,6.998c-137.533,0-249,111.467-249,249c0,137.534,111.467,249,249,249s249-111.467,249-249  C505,118.464,393.533,6.998,256,6.998z M256,485.078c-126.309,0-229.08-102.771-229.08-229.081  c0-126.31,102.771-229.08,229.08-229.08c126.31,0,229.08,102.771,229.08,229.08C485.08,382.307,382.31,485.078,256,485.078z" fill="#fff"/><polygon fill="#fff" points="384.235,158.192 216.919,325.518 127.862,236.481 113.72,250.624 216.919,353.803 398.28,172.334   "/></svg>
                        Easy access with ordered library 
                    </div>
                    <div class="flex items-center gap-4 font-light">
                        <svg enable-background="new 0 0 24 24" height="24px" id="Layer_1" version="1.1" viewBox="0 0 512 512" width="24px" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><path d="M256,6.998c-137.533,0-249,111.467-249,249c0,137.534,111.467,249,249,249s249-111.467,249-249  C505,118.464,393.533,6.998,256,6.998z M256,485.078c-126.309,0-229.08-102.771-229.08-229.081  c0-126.31,102.771-229.08,229.08-229.08c126.31,0,229.08,102.771,229.08,229.08C485.08,382.307,382.31,485.078,256,485.078z" fill="#fff"/><polygon fill="#fff" points="384.235,158.192 216.919,325.518 127.862,236.481 113.72,250.624 216.919,353.803 398.28,172.334   "/></svg>
                        Rich contents of books
                    </div>
                    <div class="flex items-center gap-4 font-light">
                        <svg enable-background="new 0 0 24 24" height="24px" id="Layer_1" version="1.1" viewBox="0 0 512 512" width="24px" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><path d="M256,6.998c-137.533,0-249,111.467-249,249c0,137.534,111.467,249,249,249s249-111.467,249-249  C505,118.464,393.533,6.998,256,6.998z M256,485.078c-126.309,0-229.08-102.771-229.08-229.081  c0-126.31,102.771-229.08,229.08-229.08c126.31,0,229.08,102.771,229.08,229.08C485.08,382.307,382.31,485.078,256,485.078z" fill="#fff"/><polygon fill="#fff" points="384.235,158.192 216.919,325.518 127.862,236.481 113.72,250.624 216.919,353.803 398.28,172.334   "/></svg>
                        Book Reader system
                    </div>
                </div>
                <div class="flex gap-6">
                    <button type="button" class="bg-transparent border-2 border-white px-6 py-4 rounded-xl hover:bg-white hover:text-blue-700 transition-colors">Visit Online Tour to Library</button>
                    <button type="button" class="border-2 border-white px-6 py-4 rounded-xl bg-white text-blue-700 hover:text-black transition-colors">Go to Online Library</button>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="introduction-research-areas" class="h-[calc(100vh-120px)] bg-[url(/public/stock/laboratory.jpg)] bg-cover bg-center">
    <div class="bg-gradient-to-b from-sky-300 to-transparent h-[100%]">
        <div class="py-12 flex gap-12 container mx-auto text-right h-full">
            <div class="text-white w-full flex flex-col h-full">
                <div class="font-bold italic text-6xl">WIDE RESEARCH FACILITIES</div>
                <div class="font-semibold italic text-2xl">BEST #17. RESEARCH UNIVERSITY AROUND THE WORLD</div>
                <div class="mt-auto order-1">
                    <div class="text-2xl mb-2">With our wide research network and facilities, you can always access all resources that you want.</div>
                    <div class="text-2xl mb-12">It also our experienced scholars will help you about your doctorate, masters or bachelors degree.</div>
                </div>
                <div class="flex gap-12 w-full justify-center mt-auto order-2">
                    <a href="#" class="light-btn">
                        EXPLORE BACHELOR'S PROGRAMS
                    </a>
                    <a href="#" class="light-btn">
                        EXPLORE MASTER'S PROGRAMS
                    </a>
                    <a href="#" class="light-btn">
                        EXPLORE DOCTORATE PROGRAMS
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection

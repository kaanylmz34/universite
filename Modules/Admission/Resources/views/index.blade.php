@extends('admission::layouts.master')

@section('content')
    
<section id="head">
<div class="w-full h-[calc(100vh-120px)] bg-[url(/public/stock/admission.jpg)] flex items-end">
        <div class="w-full h-[60%] bg-gradient-to-t from-black to-transparent text-white">
            <div class="container mx-auto flex h-full">
                <div class="w-[100%] flex flex-col justify-center text-center items-center">
                    <div class="text-8xl font-bold logo-font">Acceptance is flexible</div>
                    <div class="text-4xl mt-4">Consider the our options,</div>
                    <div class="text-4xl">Come here to start your career.</div>
                </div>
                <div class="w-[100%] flex justify-end items-end text-black">
                    <div class="w-[75%] bg-white shadow-lg">
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
                            <button type="submit" class="bg-blue-700 text-white py-4 block w-full">SEND REQUEST</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="introduction-sport-activites" class="h-[calc(100vh-120px)] bg-blue-100 text-blue-700 flex flex-col gap-4 items-center">
    <div class="bg-blue-700 text-white w-full py-12 text-center">
        <div class="logo-font text-8xl">NSA SPORT MEMBERSHIP</div>
        <div class="logo-font text-3xl">Our University has Official NSA Membership</div>
    </div>
    <div class="h-full flex items-center">
        <div class="flex gap-8 mx-auto w-[75%] mt-12">
            <div class="w-[30%]">
                <img src="/stock/championship.png" alt="Our Basketball NSA Championship" class="rounded-full w-[256px] h-[256px]"/>
            </div>
            <div class="w-[100%] text-red-700">
                <div class="text-6xl font-bold logo-font drop-shadow-[6px_6px_0_#FAAB2A]">The Universite 2017 NSA Basketball League Final Event Championship</div>
                <div class="text-3xl italic mt-6">We won the final challenge that is incredible at 2017 NSA Basketball League.</div>
            </div>
        </div>
    </div>
</section>

@endsection

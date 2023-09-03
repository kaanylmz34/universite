@extends('admission::layouts.master')

@section('content')
    <div class="w-full h-[calc(100vh-72px)] bg-[url(/public/stock/admission.jpg)] flex items-end">
        <div class="w-full h-[60%] bg-gradient-to-t from-black to-transparent text-white">
            <div class="container mx-auto flex h-full">
                <div class="w-[100%] flex flex-col justify-center text-center items-center">
                    <div class="text-8xl font-bold logo-font">Acceptance is flexible</div>
                    <div class="text-4xl mt-4">Consider the our options,</div>
                    <div class="text-4xl">Come here to start your career.</div>
                </div>
                <div class="w-[100%] flex justify-end items-end text-black">
                    <div class="w-[75%] bg-white">
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
@endsection

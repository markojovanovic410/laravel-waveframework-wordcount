@extends('theme::layouts.app')

@section('content')

    <div class="mt-sec relative z-20 px-8 mx-auto xl:px-5 w-full">
        <div class=" flex flex-col items-center w-full">
            <h2 class="h2-title invisible  tracking-wide  transition-none duration-700 ease-out transform translate-y-12 opacity-0 sm:text-base lg:text-sm xl:text-base" data-replace='{ "transition-none": "transition-all", "invisible": "visible", "translate-y-12": "translate-y-0", "scale-110": "scale-100", "opacity-0": "opacity-100" }'>
                Word Counter with Artificial Intelligence (AI)
            </h2>
            <div style="margin-top: 68px" class="flex flex-row mt-1.5 px-14 items-center w-full">
                <div style="width: calc( 100% - 900px )"class="flex flex-col pt-32 pb-20 bg-current">
                    <div>
                        <div id="editor_panel"></div>
                        <textarea id="editor_area"></textarea>
                    </div>
                    <div class="flex flex-row justify-start">
                        <div style="justify-content: space-around" class="count-text characters flex flex-col items-center">
                            <span class="text-center text-white text-xl font-bold">
                                Characters
                            </span>
                            <span id="count-characters" class="text-center text-white text-xl font-normal">
                                0
                            </span>
                        </div>
                        <div style="justify-content: space-around" class="count-text words flex flex-col items-center">
                            <span class="text-center text-white text-xl font-bold">
                                Words
                            </span>
                            <span id="count-words" class="text-center text-white text-xl font-normal">
                                0
                            </span>
                        </div>
                        <div style="justify-content: space-around" class="count-text lines flex flex-col items-center">
                            <span class="text-center text-white text-xl font-bold">
                                Lines
                            </span>
                            <span id="count-lines" class="text-center text-white text-xl font-normal">
                                0
                            </span>
                        </div>
                    </div>
                </div>
                <div style="width: 820px" class="relative flex flex-row w-half items-center justify-end">

                    <img src="{{ asset('assets/img/rbots.png') }}" class="robot-img" alt="description of myimage">
                    <img src="{{ asset('assets/img/arrow.png') }}" class="arrow-img" alt="description of myimage">

                    <div class="flex flex-col gap-2">
                        <span class="text-3xl">
                            Let AI Write & Count
                        </span>
                        <span class="text-content font-bold capitalize">
                            YOUR CONTENT
                        </span>
                        <span class="trial-btn text-lg  text-white py-3 px-5">
                            Start 7 Days $1 Trial
                        <span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="mt-sec relative z-20 px-8 mx-auto xl:px-5 w-full">
        <div class="flex flex-col items-center justify-center">
            <span class="mt-16 font-semibold text-3xl text-gray-500">
                Artficial Intelligence Makes it Faster by
            </span>
            <span class="font-semibold text-3xl text-gray-500">
                Saving Time and Money. And Help you Create High-Quality Content
            </span>
        </div>
        <div  class="flex flex-row items-center justify-center mt-16 p-6">
            <div style="height: 520px" class="flex flex-col w-half justify-between items-start p-6">
                <div style="gap: 2rem;" class="w-full">
                    <span class="text-xl font-semibold ">
                        Choose Use Case
                    </span>
                    <div class="relative m-6" style="margin-bottom: 16px;">
                        <div class="aoyue-select animated zoomIn text-black">
                            <!-- You can toggle select (disabled) -->
                            <input type="radio" name="option">
                            <i class="toggle icon icon-arrow-down"></i>
                            <i class="toggle icon icon-arrow-up"></i>
                            <span class="placeholder">Choose...</span>
                            <label class="option">
                            <input type="radio" name="option">
                            <span class="title animated fadeIn"><i class="icon icon-speedometer"></i>Blog Idea</span>
                            </label>
                            <label class="option">
                            <input type="radio" name="option">
                            <span class="title animated fadeIn"><i class="icon icon-fire"></i>Blog Idea</span>
                            </label>
                            <label class="option">
                            <input type="radio" name="option" disabled>
                            <span class="title animated fadeIn"><i class="icon icon-handbag"></i>Blog Idea</span>
                            </label>
                            <label class="option">
                            <input type="radio" name="option">
                            <span class="title animated fadeIn"><i class="icon icon-badge"></i>Blog Idea</span>
                            </label>
                        </div>
                    </div>
                    <span class="text-xl font-semibold m-6 ">
                        Primary Keyword
                    </span>
                    <input type="text" class="w-full m-6"/>
                </div>
                <div class="flex flex-row justify-between items-end w-full">
                    <span class="text-xl">
                        Word Count: 123
                    </span>
                    <div class="flex flex-row justify-between" style="gap:1rem;">
                        <span class="trial-btn text-lg  text-white py-3 px-5">
                            Start 7 Days $1 Trial
                        </span>
                        <span class="text-white text-xl write-btn py-3 px-5">
                            Write
                        </span>
                    </div>
                </div>
            </div>
            <div style="height: 520px; background: #E6E6E6"
                class="flex flex-col w-half items-center justify-center items-start bg-slate-300">
                <img src="{{ asset('assets/img/Polygon.png') }}" class="polygon-img" alt="description of myimage">
            </div>
        </div>
    </div>
    <div class="mt-sec relative  z-20 mx-auto w-full">
        <div style="background: #163F58; height: 660px" class="relative flex flex-row justify-between items-center">
            <div style="margin-left: 58px;z-index: 10;" class="flex flex-col w-half text-white">
                <span class="text-2xl font-medium">
                    Why Wordcount.is AI?
                </span>
                <span class="text-lg">
                    Word Count is an important part of writing whether you're a novelist, journalist, or blogger.
                </span>
                <span class="text-lg">
                    Artificial Intelligence(AI) Makes it Faster by keeping track of the number of words you've written and how much work remains to be done.
                </span>
                <span class="text-xl font-bold mt-7">
                    With AI Stop
                </span>
                <span class="text-lg flex flex-row" >
                    <img src="{{ asset('assets/img/botlists.png') }}" class="bot-img" alt="description of myimage">
                    &nbsp;&nbsp; &nbsp;&nbsp;Word or Character Counting
                </span>
                <span class="text-lg flex flex-row" >
                    <img src="{{ asset('assets/img/botlists.png') }}" class="bot-img" alt="description of myimage">
                    &nbsp;&nbsp; &nbsp;&nbsp;Stop spending so much time thinking about what you will be writing.
                </span>
                <span class="text-xl font-bold mt-7">
                    Let AI write for you
                </span>
                <span class="text-lg">
                    Save Time & Money and Write Smarter.
                </span>
                <span class="text-lg  mt-7">
                    All You have to do is input a few keywords, and AI will automatically generate Create High-Quality Content for you in seconds.
                </span>
                <span  class="start-btn mt-7 text-white text-lg">
                    Get Started Now
                </span>
            </div>
            <img src="{{ asset('assets/img/ai.png') }}" class="ai-img" alt="description of myimage">
        </div>
    </div>
@endsection

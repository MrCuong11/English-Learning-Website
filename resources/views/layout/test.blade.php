<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
        rel="apple-touch-icon"
        sizes="180x180"
        href="assets/images/favicons/apple-touch-icon.png" />
    <link
        rel="icon"
        type="image/png"
        sizes="32x32"
        href="assets/images/favicons/favicon-32x32.png" />
    <link
        rel="icon"
        type="image/png"
        sizes="16x16"
        href="assets/images/favicons/favicon-16x16.png" />
    <link rel="manifest" href="assets/images/favicons/site.webmanifest" />
    <meta name="description" content="Crsine HTML Template For Car Services" />

    <link
        rel="stylesheet"
        href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" />
    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />

    <!-- Link CSS files -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style-responsive.css') }}">
    @vite('resources/css/app.css')
    
</head>

<body>
    <div class="page-wrapper">
        @include('partial.header')
        <div class=" flex w-full flex-col max-w-screen-2xl mx-auto bg-white px-24 py-8">
            <div>
                <p class=" text-4xl font-bold text-blue-900">
                    {{ $lesson->title }}
                    <!-- Adjectives and prepositions -->
                </p>
            </div>
            <div class=" flex flex-row">
                <div class="  w-75 pr-8">
                    <div>
                        <img class=" w-full h-[510px] rounded-br-4xl" src=" {{ $lesson->content['imageUrl'] }}">
                    </div>
                    <div class=" text-black">
                        <p>
                            Do you know how to use comparative adjectives like <i>older, better</i> and <i>more interesting</i>?
                            Test what you know with interactive exercises and read the explanation to help you.
                        </p>
                        <p>
                            Look at these examples to see how we use comparative adjectives.
                        </p>
                        <div class=" border-l-4 border-gray-300  pl-4">
                            <p><i>
                                    The city is more interesting than the countryside.<br>
                                    This house is older than my house.<br>
                                    She's better at cooking now than before.
                                </i></p>
                        </div>
                        <p>
                            Try this exercise to test your grammar.
                        </p>
                        <div id="grammar-1-block">
                            <div class=" flex flex-row w-full bg-[rgba(35,8,90,0.15)] px-3 py-3 select-none hover:cursor-pointer" onclick="grammarTest1()">
                                <div class="flex items-center h-32px font-bold">
                                    Grammar test 1
                                </div>
                                <div class=" flex items-center justify-center ml-auto" id="drop-down-button-1">
                                    ▼
                                </div>

                            </div>
                            <div class="transition-all duration-500 hidden overflow-hidden bg-[#EBEFF0] h-[600px] py-4 px-3" id="tableQuiz">
                                <div class=" relative bg-[#dadada] h-full py-4 px-3">
                                    <div class=" bg-white h-fit p-4">
                                        <div class="">
                                            <p class=" text-xl font-bold text-[#658600] mb-1">
                                                {{ $lesson->tasks[0]->title}}
                                            </p>
                                            <p class=" text-md text-gray-500">
                                                {{ $lesson->tasks[0]->instructions }}
                                            </p>
                                        </div>
                                        <div class="flex flex-row justify-end ">
                                            <div class=" bg-[#d8ecf2] px-2 py-1 text-sm rounded-md" id="remainingQuizs">
                                                8 items remaining
                                            </div>
                                        </div>
                                        <form id="formQuiz">
                                            <!-- <div class=" flex flex-col text-md" id="quiz1">
                                                <p>
                                                    I'm really proud ___ you!
                                                </p>
                                                <label>
                                                    <input type="radio" name="q1" value="of"> of
                                                </label>
                                                <label>
                                                    <input type="radio" name="q1" value="to"> to
                                                </label>
                                                <label>
                                                    <input type="radio" name="q1" value="with"> with
                                                </label>
                                            </div> -->

                                        </form>
                                        <div id="progressLine" class=" flex flex-row items-center justify-end">

                                            <div id="prevQuizButton" class=" px-3 py-1 text-sm bg-gray-200 rounded-4xl ml-4 hover: cursor-pointer select-none" onclick="prevQuiz()">
                                                ◀
                                            </div>

                                            <div id="nextQuizButton" class=" px-3 py-1 text-sm bg-gray-200 rounded-4xl ml-2 hover: cursor-pointer select-none" onclick="nextQuiz()">
                                                ▶
                                            </div>

                                        </div>
                                        <div class=" flex flex-row space-x-2">
                                            <div id="finishBtn" class=" text-[14px] font-bold text-[#658600] bg-[#c2cbce] px-3 hover: cursor-pointer rounded-md border-b-4 border-[#a4acae] hover:border-b-2 hover:scale-95" onclick="checkAnswers()">
                                                Finish
                                            </div>
                                            <div id="showAnswersBtn" class="hidden text-[14px] font-bold text-[#658600] bg-[#c2cbce] px-3 hover: cursor-pointer rounded-md border-b-4 border-[#a4acae] hover:border-b-2 hover:scale-95" onclick="showAnswers()">
                                                Show Answers
                                            </div>
                                            <div id="tryAgainBtn" class=" text-[14px] font-bold text-[#658600] bg-[#c2cbce] px-3 hover: cursor-pointer rounded-md border-b-4 border-[#a4acae] hover:scale-95 pointer-events-none opacity-50" onClick="tryAgain()">
                                                Try again
                                            </div>
                                        </div>


                                    </div>
                                    <div id="popupQuiz" class=" hidden absolute inset-0 bg-black/40 flex justify-center items-center z-50">
                                        <div class=" w-2/3 bg-white px-4 py-2 shadow-2xl shadow-black/50">
                                            <div class=" text-center">
                                                <p class="text-lg mb-8 pb-8">Information</p>
                                            </div>
                                            <p class=" text-md mb-8 pb-8" id="popUpContent"></p>
                                            <div class="flex flex-row justify-end">
                                                <div onclick="closePopup()" class=" text-md px-3 mr-2 bg-[#eeeeee] border-[#e2e2e2] border-b-4 rounded-md hover:cursor-pointer hover:scale-95">
                                                    Close
                                                </div>
                                                <div onclick="renderAnswers()" class=" text-md px-3 bg-[#158cba] border-[#127ba3] border-b-4 text-white rounded-md hover:cursor-pointer hover:scale-95">
                                                    OK
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <div id="feedBack" class="hidden absolute inset-0 bg-black/40 flex justify-center items-center z-50">
                                        <div class=" w-2/3 bg-white px-4 py-2 shadow-2xl shadow-black/50">
                                            <div class=" text-center">
                                                <p class="text-lg mb-8 pb-8">Feedback</p>
                                            </div>
                                            <p class=" text-md mb-8 pb-8" id="feedBackContent"></p>
                                            <div class="flex flex-row justify-end">
                                                <div onclick="closeFeedBack()" class=" text-md px-3 bg-[#eeeeee] border-[#e2e2e2] border-b-4 rounded-md hover:cursor-pointer hover:scale-95">
                                                    Close
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <p class=" mt-4">
                            Read the explanation to learn more.
                        </p>
                        <p class=" text-4xl font-bold text-blue-900">
                            Grammar explanation
                        </p>
                        <div class=" mb-20">
                            <p>
                                We use comparative adjectives to compare two things or show change.
                                The comparative form depends on the number of syllables in the adjective.
                            </p>
                        </div>
                        <div class=" mb-24">
                            <p class=" text-3xl font-bold text-blue-900">
                                Adjectives with one syllable
                            </p>
                            <p>
                                To make comparative forms with one-syllable adjectives, we usually add -<i>er</i>:
                            </p>
                            <div class=" border-l-4 border-gray-300  pl-4">
                                <p><i>
                                        old → older<br>
                                        clean → cleaner<br>
                                        slow → slower
                                    </i></p>
                            </div>
                            <p>
                                If an adjective ends in -<i>e</i>, we add -<i>r</i>:
                            </p>
                            <div class=" border-l-4 border-gray-300  pl-4">
                                <p><i>
                                        safe → safer<br>
                                        nice → nicer
                                    </i></p>
                            </div>
                            <p>
                                If an adjective ends in a vowel and a consonant, we usually double the consonant:
                            </p>
                            <div class=" border-l-4 border-gray-300  pl-4">
                                <p><i>
                                        big → bigger<br>
                                        hot → hotter
                                    </i></p>
                            </div>
                        </div>
                        <div class=" mb-24">
                            <p class=" text-3xl font-bold text-blue-900">
                                Adjectives with two or more syllables
                            </p>
                            <p>
                                If a two-syllable adjective ends in a consonant and -<i>y</i>, we change -<i>y</i> to -<i>i</i> and add -<i>er</i>:
                            </p>
                            <div class=" border-l-4 border-gray-300  pl-4">
                                <p><i>
                                        noisy → noisier<br>
                                        happy → happier<br>
                                        easy → easier
                                    </i></p>
                            </div>
                            <p>
                                We use more to make comparative forms for most other two-syllable adjectives
                                and for all adjectives with three or more syllables:
                            </p>
                            <div class=" border-l-4 border-gray-300  pl-4">
                                <p><i>
                                        crowded → more crowded<br>
                                        stressful → more stressful<br>
                                        dangerous → more dangerous
                                    </i></p>
                            </div>
                            <p>
                                Exception: You can either add -er/-r or use more with some two-syllable adjectives,
                                such as common, cruel, gentle, handsome, likely, narrow, pleasant, polite, simple and stupid.
                            </p>
                            <div class=" border-l-4 border-gray-300  pl-4">
                                <p><i>
                                        I think life in the countryside is <strong>simpler</strong> than in the city.<br>
                                        It's <strong>more simple</strong> to live in the city because everything you need is there.
                                    </i></p>
                            </div>
                        </div>
                        <div class=" mb-24">
                            <p class=" text-3xl font-bold text-blue-900">
                                Irregular adjectives
                            </p>
                            <p>
                                The adjectives good, bad and far have irregular comparative forms:
                            </p>
                            <div class=" border-l-4 border-gray-300  pl-4">
                                <p><i>
                                        good → better<br>
                                        bad → worse<br>
                                        far → further/farther
                                    </i></p>
                            </div>

                        </div>
                        <div class=" mb-4">
                            <p class=" text-3xl font-bold text-blue-900">
                                Than
                            </p>
                            <p>
                                When we want to say which person or thing we are comparing with, we can use than:
                            </p>
                            <div class=" border-l-4 border-gray-300  pl-4">
                                <p><i>
                                        Their house is <strong>cleaner than</strong> ours.<br>
                                        Traffic is <strong>slower</strong> in the city <strong>than</strong> in the countryside.<br>
                                        After the race I was <strong>more tired than</strong> Anne.
                                    </i></p>
                            </div>

                        </div>

                        <p>
                            Do this exercise to test your grammar again.
                        </p>
                        <div id="grammar-2-block">
                            <div class=" flex flex-row w-full bg-[rgba(35,8,90,0.15)] px-3 py-3 select-none hover:cursor-pointer" onclick="grammarTest2()">
                                <div class="flex items-center h-32px font-bold">
                                    Grammar test 2
                                </div>
                                <div class=" flex items-center justify-center ml-auto" id="drop-down-button-2">
                                    ▼
                                </div>

                            </div>
                            <div class="transition-all duration-500 hidden overflow-hidden bg-[#EBEFF0] h-[600px] py-4 px-3" id="tableQuiz2">
                                <div class=" relative bg-[#dadada] h-full py-4 px-3">
                                    <div class=" bg-white h-fit p-4">
                                        <div class="">
                                            <p class=" text-xl font-bold text-[#658600] mb-1">
                                                {{ $lesson->tasks[1]->title}}
                                            </p>
                                            <p class=" text-md text-gray-500">
                                                {{ $lesson->tasks[1]->instructions }}
                                            </p>
                                        </div>
                                        <div class="flex flex-row justify-end ">
                                            <div class=" bg-[#d8ecf2] px-2 py-1 text-sm rounded-md" id="remainingQuizs2">
                                                8 items remaining
                                            </div>
                                        </div>
                                        <form id="formQuiz2">

                                        </form>
                                        <div id="progressLine2" class=" flex flex-row items-center justify-end">

                                            <div id="prevQuizButton2" class=" px-3 py-1 text-sm bg-gray-200 rounded-4xl ml-4 hover: cursor-pointer select-none" onclick="prevQuiz2()">
                                                ◀
                                            </div>

                                            <div id="nextQuizButton2" class=" px-3 py-1 text-sm bg-gray-200 rounded-4xl ml-2 hover: cursor-pointer select-none" onclick="nextQuiz2()">
                                                ▶
                                            </div>

                                        </div>
                                        <div class=" flex flex-row space-x-2">
                                            <div id="finishBtn2" class=" text-[14px] font-bold text-[#658600] bg-[#c2cbce] px-3 hover: cursor-pointer rounded-md border-b-4 border-[#a4acae] hover:border-b-2 hover:scale-95" onclick="checkAnswers2()">
                                                Finish
                                            </div>
                                            <div id="showAnswersBtn2" class="hidden text-[14px] font-bold text-[#658600] bg-[#c2cbce] px-3 hover: cursor-pointer rounded-md border-b-4 border-[#a4acae] hover:border-b-2 hover:scale-95" onclick="showAnswers2()">
                                                Show Answers
                                            </div>
                                            <div id="tryAgainBtn2" class=" text-[14px] font-bold text-[#658600] bg-[#c2cbce] px-3 hover: cursor-pointer rounded-md border-b-4 border-[#a4acae] hover:scale-95 pointer-events-none opacity-50" onClick="tryAgain2()">
                                                Try again
                                            </div>
                                        </div>


                                    </div>
                                    <div id="popupQuiz2" class=" hidden absolute inset-0 bg-black/40 flex justify-center items-center z-50">
                                        <div class=" w-2/3 bg-white px-4 py-2 shadow-2xl shadow-black/50">
                                            <div class=" text-center">
                                                <p class="text-lg mb-8 pb-8">Information</p>
                                            </div>
                                            <p class=" text-md mb-8 pb-8" id="popUpContent2"></p>
                                            <div class="flex flex-row justify-end">
                                                <div onclick="closePopup2()" class=" text-md px-3 mr-2 bg-[#eeeeee] border-[#e2e2e2] border-b-4 rounded-md hover:cursor-pointer hover:scale-95">
                                                    Close
                                                </div>
                                                <div onclick="renderAnswers2()" class=" text-md px-3 bg-[#158cba] border-[#127ba3] border-b-4 text-white rounded-md hover:cursor-pointer hover:scale-95">
                                                    OK
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <div id="feedBack2" class="hidden absolute inset-0 bg-black/40 flex justify-center items-center z-50">
                                        <div class=" w-2/3 bg-white px-4 py-2 shadow-2xl shadow-black/50">
                                            <div class=" text-center">
                                                <p class="text-lg mb-8 pb-8">Feedback</p>
                                            </div>
                                            <p class=" text-md mb-8 pb-8" id="feedBackContent2"></p>
                                            <div class="flex flex-row justify-end">
                                                <div onclick="closeFeedBack2()" class=" text-md px-3 bg-[#eeeeee] border-[#e2e2e2] border-b-4 rounded-md hover:cursor-pointer hover:scale-95">
                                                    Close
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class=" bg-blue-950 text-white text-md hover:bg-green-700 w-fit px-3 py-2 my-18 rounded-4xl">
                            <button class=" hover:underline">Try another grammar lesson</button>
                        </div>
                        <p class=" text-3xl text-blue-950 font-bold">
                            Language level
                        </p>
                        <div class="flex flex-row">
                            <div class=" bg-green-600 text-white w-fit mr-1 px-2 py-1">
                                <button>
                                    {{ $lesson->content['language_level_1']}}
                                </button>
                            </div>
                            <div class=" bg-green-600 text-white w-fit mr-1 px-2 py-1">
                                <button>
                                    {{ $lesson->content['language_level_2']}}
                                </button>
                            </div>
                        </div>
                    </div>

                </div>
                <div class=" w-25">
                    <div class="px-4 py-2 text-purple-950 rounded-bl-4xl rounded-tr-4xl border-8 border-gray-200 h-fit mb-4">
                        <p class="hover:text-green-600 hover:underline hover:cursor-pointer">✔ A1-A2 grammar</p>
                        <p class="hover:text-green-600 hover:underline hover:cursor-pointer">✔ B1-B2 grammar</p>
                        <p class="hover:text-green-600 hover:underline hover:cursor-pointer">✔ C1 grammar</p>
                        <p class="hover:text-green-600 hover:underline hover:cursor-pointer">✔ English grammar reference</p>
                    </div>
                    <div class="px-4 py-2 text-purple-950 rounded-bl-4xl rounded-tr-4xl border-8 border-gray-200 h-fit mb-4">
                        <p class=" text-2xl font-bold">Our websites</p>
                        <p class="hover:text-green-600 hover:underline hover:cursor-pointer">✔ LearnEnglish Kids for children aged 5 to 12</p>
                        <p class="hover:text-green-600 hover:underline hover:cursor-pointer">✔ LearnEnglish Teens for children aged 13 to 17</p>
                        <p class="hover:text-green-600 hover:underline hover:cursor-pointer">✔ TeachingEnglish for teachers and teacher educators</p>
                    </div>
                    <div class="px-4 py-2 text-purple-950 rounded-bl-4xl rounded-tr-4xl border-8 border-gray-200 h-fit">
                        <p class=" text-2xl font-bold">Help</p>
                        <p class="hover:text-green-600 hover:underline hover:cursor-pointer">✔ Free online English test</p>
                        <p class="hover:text-green-600 hover:underline hover:cursor-pointer">✔ Sign up for our newsletter</p>
                        <p class="hover:text-green-600 hover:underline hover:cursor-pointer">✔ Frequently asked questions</p>
                        <p class="hover:text-green-600 hover:underline hover:cursor-pointer"> Getting started</p>
                        <p class="hover:text-green-600 hover:underline hover:cursor-pointer"> House rules</p>
                    </div>

                </div>
            </div>

        </div>
        @include('partial.footer')
    </div>
</body>

</html>
<script>
    
    let tasks = <?php echo $lesson->tasks ?>;
    let questions1 = <?php echo $lesson->tasks[0]->questions ?>;
    let questions2 = <?php echo $lesson->tasks[1]->questions ?>;
    const remainingQuizs = document.getElementById('remainingQuizs');
    const form = document.getElementById('formQuiz');
    const progressDiv = document.getElementById('progressLine');
    const numberOfQuestions = 8;
    let selectedAnswers = [];
    let rightAnswers = [];
    let done = false;
    let reveal = false;
    let i = 1;
    let totalScore = 0;
    const tryAgainBtn = document.getElementById('tryAgainBtn');
    const finishBtn = document.getElementById('finishBtn');
    let showAnswersBtn = document.getElementById('showAnswersBtn');

    const remainingQuizs2 = document.getElementById('remainingQuizs2');
    const form2 = document.getElementById('formQuiz2');
    const progressDiv2 = document.getElementById('progressLine2');
    let selectedAnswers2 = [];
    let rightAnswers2 = [];
    let done2 = false;
    let reveal2 = false;
    let u = 1;
    let totalScore2 = 0;
    const tryAgainBtn2 = document.getElementById('tryAgainBtn2');
    const finishBtn2 = document.getElementById('finishBtn2');
    let showAnswersBtn2 = document.getElementById('showAnswersBtn2');

    function renderQuiz(x) {
        const newProgressDivs = [];
        for (a = 1; a <= numberOfQuestions; a++) {
            const currentDivChild1 = document.getElementById('divPL' + a);
            const currentDivChild2 = document.getElementById('linePL' + a);
            if (currentDivChild1) {
                currentDivChild1.remove();
            }
            if (currentDivChild2) {
                currentDivChild2.remove();
            }
            const divChild1 = document.createElement('div');
            const divChild2 = document.createElement('div');
            if (a == i) {
                divChild1.classList.add('w-4', 'h-4', 'bg-[#9bbd34]', 'rounded-full');
                divChild1.id = 'divPL' + a;
                divChild2.classList.add('top-1/2', 'left-1/4', 'w-6', 'h-0.5', 'bg-[#9bbd34]');
                divChild2.id = 'linePL' + a;

            } else {
                divChild1.classList.add('w-4', 'h-4', 'bg-[#658600]', 'rounded-full');
                divChild1.id = 'divPL' + a;
                divChild2.classList.add('top-1/2', 'left-1/4', 'w-6', 'h-0.5', 'bg-[#658600]');
                divChild2.id = 'linePL' + a;
            }
            if (a == 8) {
                newProgressDivs.push(divChild1);
            } else {
                newProgressDivs.push(divChild1);
                newProgressDivs.push(divChild2);
            }

        }
        const fragment = document.createDocumentFragment();
        newProgressDivs.forEach(div => fragment.appendChild(div));
        const prevQuizButton = document.getElementById('prevQuizButton');
        progressDiv.insertBefore(fragment, prevQuizButton);

        console.log(progressDiv);
        const currentQuizDiv = document.getElementById('task1-quiz' + x);
        if (currentQuizDiv) {
            currentQuizDiv.remove();
        }
        const div = document.createElement('div');
        div.classList.add('flex', 'flex-col', 'text-md');
        div.id = 'task1-quiz' + i;
        const p = document.createElement('p');
        p.textContent = questions1[i - 1].question;
        div.appendChild(p);

        questions1[i - 1].options.forEach(option => {
            const label = document.createElement('label');
            const input = document.createElement('input');
            input.type = 'radio';
            input.name = `q${i}`;
            input.value = option.text;
            if (selectedAnswers[`q${i}`] && option.text == selectedAnswers[`q${i}`].value) {
                input.checked = true;
                if (selectedAnswers[`q${i}`].isTrue == true) {
                    label.classList.add('bg-[#b7e9bf]');
                    input.disabled = true;

                } else if (selectedAnswers[`q${i}`].isTrue == false) {
                    label.classList.add('bg-[#fac8c1]');
                    input.disabled = true;
                }

            } else if (done == true) {
                if (reveal == true && rightAnswers[i - 1].text == option.text) {
                    label.classList.add('bg-[#b7e9bf]');
                    input.disabled = true;
                } else {
                    input.disabled = true;
                    label.classList.add('opacity-25');
                }

            }

            label.appendChild(input);
            label.appendChild(document.createTextNode(option.text));
            div.appendChild(label);
        });
        const radios = div.querySelectorAll('input[type="radio"]');
        radios.forEach(radio => {
            radio.addEventListener('click', (e) => {
                const value = e.target.value;
                selectedAnswers[`q${i}`] = {
                    value: value,
                    isTrue: null,
                };
                console.log(selectedAnswers);
                const quizsLeft = 8 - Object.keys(selectedAnswers).length;
                console.log("quizsLeft: " + quizsLeft);
                remainingQuizs.textContent = `${quizsLeft} items remaining`
            })
        })
        form.appendChild(div);
    }

    function renderQuiz2(x) {
        const newProgressDivs = [];
        for (a = 1; a <= numberOfQuestions; a++) {
            const currentDivChild1 = document.getElementById('divPL2' + a);
            const currentDivChild2 = document.getElementById('linePL2' + a);
            if (currentDivChild1) {
                currentDivChild1.remove();
            }
            if (currentDivChild2) {
                currentDivChild2.remove();
            }
            const divChild1 = document.createElement('div');
            const divChild2 = document.createElement('div');
            if (a == u) {
                divChild1.classList.add('w-4', 'h-4', 'bg-[#9bbd34]', 'rounded-full');
                divChild1.id = 'divPL2' + a;
                divChild2.classList.add('top-1/2', 'left-1/4', 'w-6', 'h-0.5', 'bg-[#9bbd34]');
                divChild2.id = 'linePL2' + a;

            } else {
                divChild1.classList.add('w-4', 'h-4', 'bg-[#658600]', 'rounded-full');
                divChild1.id = 'divPL2' + a;
                divChild2.classList.add('top-1/2', 'left-1/4', 'w-6', 'h-0.5', 'bg-[#658600]');
                divChild2.id = 'linePL2' + a;
            }
            if (a == 8) {
                newProgressDivs.push(divChild1);
            } else {
                newProgressDivs.push(divChild1);
                newProgressDivs.push(divChild2);
            }

        }
        const fragment = document.createDocumentFragment();
        newProgressDivs.forEach(div => fragment.appendChild(div));
        const prevQuizButton = document.getElementById('prevQuizButton2');
        progressDiv2.insertBefore(fragment, prevQuizButton);

        console.log(progressDiv2);
        const currentQuizDiv = document.getElementById('task2-quiz' + x);
        if (currentQuizDiv) {
            currentQuizDiv.remove();
        }
        const div = document.createElement('div');
        div.classList.add('flex', 'flex-col', 'text-md');
        div.id = 'task2-quiz' + u;
        const p = document.createElement('p');
        p.textContent = questions2[u - 1].question;
        div.appendChild(p);
        questions2[u - 1].options.forEach(option => {
            const label = document.createElement('label');
            const input = document.createElement('input');
            input.type = 'radio';
            input.name = `q${u}`;
            input.value = option.text;
            if (selectedAnswers2[`q${u}`] && option.text == selectedAnswers2[`q${u}`].value) {
                input.checked = true;
                if (selectedAnswers2[`q${u}`].isTrue == true) {
                    label.classList.add('bg-[#b7e9bf]');
                    input.disabled = true;

                } else if (selectedAnswers2[`q${u}`].isTrue == false) {
                    label.classList.add('bg-[#fac8c1]');
                    input.disabled = true;
                }

            } else if (done2 == true) {
                if (reveal2 == true && rightAnswers2[u - 1].text == option.text) {
                    label.classList.add('bg-[#b7e9bf]');
                    input.disabled = true;
                } else {
                    input.disabled = true;
                    label.classList.add('opacity-25');
                }

            }

            label.appendChild(input);
            label.appendChild(document.createTextNode(option.text));
            div.appendChild(label);
        });
        const radios = div.querySelectorAll('input[type="radio"]');
        radios.forEach(radio => {
            radio.addEventListener('click', (e) => {
                const value = e.target.value;
                selectedAnswers2[`q${u}`] = {
                    value: value,
                    isTrue: null,
                };
                console.log(selectedAnswers2);
                const quizsLeft = 8 - Object.keys(selectedAnswers2).length;
                console.log("quizsLeft: " + quizsLeft);
                remainingQuizs2.textContent = `${quizsLeft} items remaining`
            })
        })
        form2.appendChild(div);
    }

    function prevQuiz() {
        if (i == 1) {
            return;
        } else {
            i--;
            console.log(i);
            renderQuiz(i + 1);
        }
    }

    function nextQuiz() {
        if (i == 8) {
            return;
        } else {
            i++;
            console.log(i);
            renderQuiz(i - 1);
        }
    }

    renderQuiz(i);

    function closePopup() {
        const popUp = document.getElementById('popupQuiz');
        popUp.classList.add('hidden');
    }

    function closeFeedBack() {
        const feedBack = document.getElementById('feedBack');
        feedBack.classList.add('hidden');
    }

    function checkAnswers() {
        const popUp = document.getElementById('popupQuiz');
        popUp.classList.remove('hidden');
        const popUpContent = document.getElementById('popUpContent');
        const quizsAnswered = Object.keys(selectedAnswers).length;
        popUpContent.textContent = `Answerd questions: ${quizsAnswered} out of 8. Do you want to finish?`;
    }

    function renderAnswers() {
        for (j = 1; j <= numberOfQuestions; j++) {
            questions1[j - 1].options.forEach(option => {
                if (option.is_correct == true) {
                    rightAnswers.push(option);
                    console.log("option: " + option.text);
                    console.log(option);

                    if (selectedAnswers[`q${j}`]) {
                        if (selectedAnswers[`q${j}`].value == option.text) {
                            selectedAnswers[`q${j}`].isTrue = true;
                            totalScore++;
                        } else {
                            selectedAnswers[`q${j}`].isTrue = false;
                        }
                    }
                }
            })
        }
        console.log(selectedAnswers);
        const popUp = document.getElementById('popupQuiz');
        popUp.classList.add('hidden');
        done = true;
        renderQuiz(i);
        tryAgainBtn.classList.remove('pointer-events-none');
        tryAgainBtn.classList.remove('opacity-50');
        finishBtn.classList.add('hidden');
        showAnswersBtn.classList.remove('hidden');
        const feedBack = document.getElementById('feedBack');
        feedBack.classList.remove('hidden');
        const feedBackContent = document.getElementById('feedBackContent');
        feedBackContent.textContent = `Total score is ${totalScore} out of 8 (${Math.ceil(totalScore*100/8)}%) !`;
    }

    function tryAgain() {
        form.innerHTML = "";
        remainingQuizs.textContent = "8 items remaining";
        selectedAnswers = [];
        done = false;
        i = 1;
        totalScore = 0;
        tryAgainBtn.classList.add('pointer-events-none');
        tryAgainBtn.classList.add('opacity-50');
        finishBtn.classList.remove('hidden');
        showAnswersBtn.classList.add('hidden');
        showAnswersBtn.textContent = "Show Answers";
        reveal = false;
        renderQuiz(i);
    }

    function showAnswers() {
        console.log("rightAnswers: " + rightAnswers);
        showAnswersBtn.textContent = showAnswersBtn.textContent.trim() == "Show Answers" ? "Hide Answers" : "Show Answers";
        reveal = showAnswersBtn.textContent == "Hide Answers" ? true : false;
        console.log("reveal: " + reveal);
        renderQuiz(i);
    }

    function grammarTest1() {
        const tableQuiz = document.getElementById('tableQuiz');
        const dropDownBtn1 = document.getElementById('drop-down-button-1');
        if (tableQuiz.classList.contains('hidden')) {
            tableQuiz.style.height = '0px';
            tableQuiz.classList.remove('hidden');
            requestAnimationFrame(() => {
                tableQuiz.style.height = '600px';
            });
            dropDownBtn1.textContent = "▲";
        } else {
            tableQuiz.classList.add('hidden');
            dropDownBtn1.textContent = "▼";
        }
    }

    function prevQuiz2() {
        if (u == 1) {
            return;
        } else {
            u--;
            console.log(u);
            renderQuiz2(u + 1);
        }
    }

    function nextQuiz2() {
        if (u == 8) {
            return;
        } else {
            u++;
            console.log(u);
            renderQuiz2(u - 1);
        }
    }

    renderQuiz2(u);

    function closePopup2() {
        const popUp = document.getElementById('popupQuiz2');
        popUp.classList.add('hidden');
    }

    function closeFeedBack2() {
        const feedBack = document.getElementById('feedBack2');
        feedBack.classList.add('hidden');
    }

    function checkAnswers2() {
        const popUp = document.getElementById('popupQuiz2');
        popUp.classList.remove('hidden');
        const popUpContent = document.getElementById('popUpContent2');
        const quizsAnswered = Object.keys(selectedAnswers2).length;
        popUpContent.textContent = `Answerd questions: ${quizsAnswered} out of 8. Do you want to finish?`;
    }

    function renderAnswers2() {
        for (j = 1; j <= numberOfQuestions; j++) {
            questions2[j - 1].options.forEach(option => {
                if (option.is_correct == true) {
                    rightAnswers2.push(option);
                    console.log("option: " + option.text);
                    console.log(option);

                    if (selectedAnswers2[`q${j}`]) {
                        if (selectedAnswers2[`q${j}`].value == option.text) {
                            selectedAnswers2[`q${j}`].isTrue = true;
                            totalScore2++;
                        } else {
                            selectedAnswers2[`q${j}`].isTrue = false;
                        }
                    }
                }
            })

        }
        console.log(selectedAnswers2);
        const popUp = document.getElementById('popupQuiz2');
        popUp.classList.add('hidden');
        done2 = true;
        renderQuiz2(u);
        tryAgainBtn2.classList.remove('pointer-events-none');
        tryAgainBtn2.classList.remove('opacity-50');
        finishBtn2.classList.add('hidden');
        showAnswersBtn2.classList.remove('hidden');
        const feedBack = document.getElementById('feedBack2');
        feedBack.classList.remove('hidden');
        const feedBackContent = document.getElementById('feedBackContent2');
        feedBackContent.textContent = `Total score is ${totalScore2} out of 8 (${Math.ceil(totalScore2*100/8)}%) !`;
    }

    function tryAgain2() {
        form2.innerHTML = "";
        remainingQuizs2.textContent = "8 items remaining";
        selectedAnswers2 = [];
        done2 = false;
        u = 1;
        totalScore2 = 0;
        tryAgainBtn2.classList.add('pointer-events-none');
        tryAgainBtn2.classList.add('opacity-50');
        finishBtn2.classList.remove('hidden');
        showAnswersBtn2.classList.add('hidden');
        showAnswersBtn2.textContent = "Show Answers";
        reveal2 = false;
        renderQuiz2(u);
    }

    function showAnswers2() {
        console.log("rightAnswers2: " + rightAnswers2);
        showAnswersBtn2.textContent = showAnswersBtn2.textContent.trim() == "Show Answers" ? "Hide Answers" : "Show Answers";
        reveal2 = showAnswersBtn2.textContent == "Hide Answers" ? true : false;
        console.log("reveal2: " + reveal2);
        renderQuiz2(u);
    }

    function grammarTest2() {
        const tableQuiz = document.getElementById('tableQuiz2');
        const dropDownBtn2 = document.getElementById('drop-down-button-2');
        if (tableQuiz.classList.contains('hidden')) {
            tableQuiz.style.height = '0px';
            tableQuiz.classList.remove('hidden');
            requestAnimationFrame(() => {
                tableQuiz.style.height = '600px';
            });
            dropDownBtn2.textContent = "▲";
        } else {
            tableQuiz.classList.add('hidden');
            dropDownBtn2.textContent = "▼";
        }
    }
</script>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio</title>
    <script src="https://cdn.tailwindcss.com"></script>

    <style>
        body{
            scroll-behavior: smooth;
        }
    </style>
</head>

<body class="bg-gray-100 overflow-x-hidden">

    <!-- Navbar -->
    <nav class="bg-gradient-to-r from-blue-500 to-blue-900 text-white font-sans p-4 overflow-x-hidden sm:h-[50px] md:h-[300px] lg:h-[450px] ">
        <div class="container mx-auto flex justify-between items-center">
            <div class="font-bold text-xl sm:text-3xl md:text-xl lg:text-2xl xl:text-2xl">Portfolio</div>

            <!-- Mobile Menu Button -->
            <button id="menu-btn" class="text-white text-2xl md:hidden">
                ☰
            </button>

            <!-- Navbar Links (Desktop) -->
            <div class="hidden md:flex space-x-7 text-white">
                <div class="hover:font-bold text-xl sm:text-5xl md:text-xl lg:text-xl xl:text-xl"><a href="#about">About</a></div>
                <div class="hover:font-bold text-xl sm:text-5xl md:text-xl lg:text-xl xl:text-xl"><a href="#skills">Skills</a></div>
                <div class="hover:font-bold text-xl sm:text-5xl md:text-xl lg:text-xl xl:text-xl"><a href="#projects">Project</a></div>
                <div class="hover:font-bold text-xl sm:text-5xl md:text-xl lg:text-xl xl:text-xl"><a href="#contact">Contact</a></div>
            </div>
        </div>

        <!-- Mobile Menu (Hidden by Default) -->
        <div id="mobile-menu" class="hidden flex flex-col items-center space-y-4 mt-4 text-white md:hidden transition-all duration-300 text-xl sm:text-5xl md:text-3xl lg:text-5xl xl:text-8xl">
            <div class="hover:font-bold "><a href="#about ">About</a></div>
            <div class="hover:font-bold"><a href="#skills">Skills</a></div>
            <div class="hover:font-bold"><a href="#projects">Project</a></div>
            <div class="hover:font-bold"><a href="#contact">Contact</a></div>
        </div>

    <!-- Hero Section -->
    <section class="flex flex-col items-center text-center sm:mt-[80px] md:mt-[50px] lg:mt-[120px]">
        <div class="font-bold text-3xl sm:text-4xl md:text-3xl lg:text-5xl xl:text-6xl">
            Abhayraj Singh Mandloi
        </div>
                <div class="mt-3  text-xl sm:text-4xl md:text-2xl lg:text-2xl xl:text-3xl">Full Stack Developer</div>

        <!-- Social Icons -->
        <div class="flex gap-10 mt-3">
            <a href="https://github.com/Abhayraj11tech" target="_blank">
                <img src="https://cdn.jsdelivr.net/npm/lucide-static@0.344.0/icons/github.svg" alt="GitHub">
            </a>
            <a href="https://codolio.com/profile/Abhayraj" target="_blank">
                <img src="https://codolio.com/codolio_assets/codolio.svg" alt="Codolio" class="w-8">
            </a>
            <a href="https://www.linkedin.com/in/abhayraj-singh-mandloi-7960a8278/" target="_blank">
                <img src="https://cdn.jsdelivr.net/npm/lucide-static@0.344.0/icons/linkedin.svg" alt="LinkedIn">
            </a>
        </div>
    </nav>

    <section id="about" class="w-full flex items-center justify-center min-h-screen px-6">
        <div class="flex flex-col md:flex-row items-center justify-center w-full max-w-6xl space-y-10 md:space-y-0 md:space-x-10">
            
            <!-- Left Content (About Me) -->
            <div class="w-full md:w-1/2 flex flex-col items-center text-center md:text-left">
                <!-- User Icon (Added Extra Margin on md+ screens) -->
                <div class="mb-2 mt-2 md:mt-10 sm:mt-10">
                    <img src="https://cdn.jsdelivr.net/npm/lucide-static@0.344.0/icons/user.svg" alt="User Icon" class="w-12 h-12">
                </div>
                
                <!-- About Me Heading -->
                <div class="font-bold text-3xl sm:text-4xl">About Me</div>
    
                <!-- Description -->
                <div class="mt-6 text-base sm:text-lg px-4 sm:px-10 text-gray-700">
                    A motivated and dedicated individual with a strong foundation in coding, problem-solving, and web development. Passionate about becoming a full-stack software engineer, eager to apply hands-on experience in building dynamic and scalable web solutions. Adaptable, collaborative, and driven to deliver high-quality results. Committed to continuous learning and staying ahead of emerging technologies to grow as a skilled developer.
                </div>
            </div>
    
            <!-- Right Content (Image) -->
            <div class="w-full md:w-1/2 flex justify-center">
                <img src="CV profile.jpg" alt="Profile Picture" class="rounded-2xl w-4/5 max-w-[400px] md:max-w-[500px]">
            </div>
    
        </div>
    </section>
    
    
    <section id="skills" class="bg-gray-100 py-16">
        <div class="flex flex-col items-center px-6">
            
            <!-- Title with Icons -->
            <div class="flex items-center gap-5 mt-10">
                <img src="https://www.svgrepo.com/show/352221/less-than.svg" alt="" class="w-8 h-8">
                <h2 class="text-black text-3xl font-bold">Technical Skills</h2>
                <img src="https://www.svgrepo.com/show/352088/greater-than.svg" alt="" class="w-8 h-8">
            </div>
    
            <!-- Skills Cards (Responsive) -->
            <div class="mt-12 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-10 w-full max-w-6xl">
                
                <!-- Frontend Card -->
                <div class="bg-white shadow-2xl p-6 rounded-xl text-black font-bold bg-[url('https://cdn.prod.website-files.com/63d926b37ec0d886c2d5d538/66bb671541da6ce541253924_669648a00ba8f79d0c129b71_best-frontend-framework-.png')] bg-cover">
                    <div class="text-[20px] text-center">Frontend</div>
                    <ul class="mt-4 space-y-2">
                        <li class="flex items-center gap-3"><span class="w-2 h-2 bg-black rounded-full"></span> HTML</li>
                        <li class="flex items-center gap-3"><span class="w-2 h-2 bg-black rounded-full"></span> CSS</li>
                        <li class="flex items-center gap-3"><span class="w-2 h-2 bg-black rounded-full"></span> Tailwind CSS</li>
                        <li class="flex items-center gap-3"><span class="w-2 h-2 bg-black rounded-full"></span> Bootstrap</li>
                        <li class="flex items-center gap-3"><span class="w-2 h-2 bg-black rounded-full"></span> JavaScript</li>
                    </ul>
                </div>
    
                <!-- Backend Card -->
                <div class="bg-white shadow-2xl p-6 rounded-xl text-black font-bold bg-[url('https://thumbs.dreamstime.com/b/software-development-coding-backend-engineering-programming-illustration-people-scene-flat-design-345579265.jpg')] bg-cover">
                    <div class="text-[20px] text-center">Backend</div>
                    <ul class="mt-4 space-y-2">
                        <li class="flex items-center gap-3"><span class="w-2 h-2 bg-black rounded-full"></span> PHP</li>
                        <li class="flex items-center gap-3"><span class="w-2 h-2 bg-black rounded-full"></span> SQL</li>
                        <li class="flex items-center gap-3"><span class="w-2 h-2 bg-black rounded-full"></span> Java</li>
                        <li class="flex items-center gap-3"><span class="w-2 h-2 bg-black rounded-full"></span> C</li>
                    </ul>
                </div>
    
                <!-- Additional Skills Card -->
                <div class="bg-white shadow-2xl p-6 rounded-xl text-black font-bold bg-[url('im-Photoroom.png')] bg-cover">
                    <div class="text-[20px] text-center">Additional</div>
                    <ul class="mt-4 space-y-2">
                        <li class="flex items-center gap-3"><span class="w-2 h-2 bg-black rounded-full"></span> DBMS</li>
                        <li class="flex items-center gap-3"><span class="w-2 h-2 bg-black rounded-full"></span> Git and Github</li>
                    </ul>
                </div>
    
            </div>
    
        </div>
    </section>
    


    <section id="projects">
        <div class="flex flex-col items-center">
            <div class="flex items-center gap-5 mt-10">
                <img src="https://cdn.jsdelivr.net/npm/lucide-static@0.344.0/icons/briefcase.svg" alt="" class="w-10 h-10">
                <h2 class="text-black text-4xl font-bold">Projects</h2>
            </div>
        </div>


        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-2 gap-10 p-5 mt-10 text-black">
            <div class="bg-white p-5 text-center h-auto rounded-3xl shadow-lg">
                <img src="bot.png" alt="" class="h-[200px] w-full object-cover rounded-2xl">
                <div class="text-3xl text-black mt-3 font-bold">Judiciary System AI chatBot</div>
                <p class="text-black mt-3"><b>Sanrakshan</b> is 
                     an advanced AI-driven legal assistant designed to democratize access to justice by simplifying legal processes, offering multilingual support, and ensuring judicial transparency. By leveraging state-of-the-art AI technologies, Sanrakshan empowers individuals and legal professionals with accurate legal insights, reducing dependency on expensive legal services. <br> <b> [TEAM PROJECT ~ <a href="https://judicialchatbot.onrender.com/" class="text-blue-500" target="_blank">link</a>]</b>          </p>
                <div class="mt-3 text-center font-bold text-xl">Tech Stack: HTML, CSS, Tailwind, PHP, Transformer-Based AI (Gemini-based Model), Support Vector Machine (SVM), Hidden Markov Model (HMM) </div>
                <a href="https://github.com/Abhayraj11tech/judicialchatbot.git" target="_blank">
                    <img src="GitHub.webp" alt="GitHub" class="w-[70px] mx-auto mt-2 hover:w-[80px]">
                </a>
            </div>
    
            <div class="bg-white p-5 text-center h-auto rounded-3xl shadow-lg">
                <img src="os.png" alt="" class="h-[200px] w-full object-cover rounded-2xl">
                <div class="text-3xl text-black mt-3 font-bold">OS file management system</div>
                <p class="text-black mt-3"><b>Electron AI Directory App</b>
                     is a desktop application built using the powerful Electron framework. This application is designed to efficiently organize and manage messy directories on a user's computer through an advanced AI agent.
                    The AI agent is powered by Gemini-1.5-Flash, Google's Deep Mind’s most advanced language model. The application provides functionalities such as rearranging, deleting, moving, creating, or renaming files and folders based on user prompts, offering a seamless AI-powered file management experience. <br> <b> [TEAM PROJECT]</b>
                                        </p>
                <div class="mt-2 text-center font-bold text-xl">Tech Stack: HTML, CSS, Tailwind, Python, Gemini-1.5-Flash, OS, shutil, watchdog </div>
                <a href="https://github.com/Abhayraj11tech/Ai_Dir_org.git" target="_blank">
                    <img src="GitHub.webp" alt="GitHub" class="w-[70px] mx-auto mt-2 hover:w-[80px]">
                </a>
            </div>
        </div>
        

        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-2 gap-10 p-5 mt-10 text-black">
            <div class="bg-white p-5 text-center h-auto rounded-3xl shadow-lg">
                <img src="revenue.jpg" alt="" class="h-[200px] w-full object-cover rounded-2xl">
                <div class="text-3xl text-black mt-3 font-bold">Revenue Generation Model</div>
                <p class="text-black mt-3"><b>Progressive Envirocare</b> is a wastewater management plant installation service provider. I built a responsive website to present their services and projects.</p>
                <div class="mt-3 text-center font-bold text-xl">Tech Stack: HTML, CSS, Tailwind, PHP</div>
                <a href="https://github.com/Abhayraj11tech/Revenue-Generation-Project.git" target="_blank">
                    <img src="GitHub.webp" alt="GitHub" class="w-[70px] mx-auto mt-2 hover:w-[80px]">
                </a>
            </div>
    
            <div class="bg-white p-5 text-center h-auto rounded-3xl shadow-lg">
                <img src="marksheet.jpg" alt="" class="h-[200px] w-full object-cover rounded-2xl">
                <div class="text-3xl text-black mt-3 font-bold">Student Marksheet Generator</div>
                <p class="text-black mt-3"><b>Student Performance Evaluator</b> generates student result sheets with grades, total marks, and percentage calculations.</p>
                <div class="mt-2 text-center font-bold text-xl">Tech Stack: HTML, CSS, Tailwind</div>
                <a href="https://github.com/Abhayraj11tech/Marksheet-Generator-.git" target="_blank">
                    <img src="GitHub.webp" alt="GitHub" class="w-[70px] mx-auto mt-2 hover:w-[80px]">
                </a>
            </div>
        </div>
        



        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-2 gap-10 p-5 mt-10 text-black">
            <div class="bg-white p-5 text-center h-auto rounded-3xl shadow-lg">
                <img src="note.png" alt="" class="h-[200px] w-full object-cover rounded-2xl">
                <div class="text-3xl text-black mt-3 font-bold">Note Taking webApplication</div>
                <p class="text-black mt-3"><b>Smart Notes </b> 
                    is a simple webApplication where you can quickly add notes or tasks along with the date and time. Each note shows when it was added, and you can delete it anytime you want.</p>
                <div class="mt-3 text-center font-bold text-xl">Tech Stack: HTML, CSS, Tailwind, JavaScript</div>
                <a href="https://github.com/Abhayraj11tech/Smart-Notes.git" target="_blank">
                    <img src="GitHub.webp" alt="GitHub" class="w-[70px] mx-auto mt-2 hover:w-[80px]">

                </a>
            </div>
            
            <div class="bg-white p-5 text-center h-auto rounded-3xl shadow-lg">
                <img src="cart.png" alt="" class="h-[200px] w-full object-cover rounded-2xl">
                <div class="text-3xl text-black mt-3 font-bold">Shopping Filters and Cart</div>
                <p class="text-black mt-3"><b>ShopHub</b> ~ Product Filter Page
                    is a simple and clean web page that displays a list of products with filtering options. Users can filter items based on search keywords, price range (min-max), and product categories.
                     </p>
                <div class="mt-2 text-center font-bold text-xl">Tech Stack: HTML, CSS, Tailwind, JavaScript
                </div>
                <a href="https://github.com/Abhayraj11tech/ShopHub.git" target="_blank">
                    <img src="GitHub.webp" alt="GitHub" class="w-[70px] mx-auto mt-2 hover:w-[80px]">
                </a>
            </div>
        </div>







        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-2 gap-10 p-5 mt-10 text-black">
            <div class="bg-white p-5 text-center h-auto rounded-3xl shadow-lg">
                <img src="bmi.jpg" alt="" class="h-[200px] w-full object-cover rounded-2xl">
                <div class="text-3xl text-black mt-3 font-bold">Smart BMI Calculator</div>
                <p class="text-black mt-3"><b>HealthGrade</b> is a BMI calculator providing accurate measurements along with health report certification.</p>
                <div class="mt-3 text-center font-bold text-xl">Tech Stack: HTML, CSS, Tailwind, PHP</div>
                <a href="https://github.com/Abhayraj11tech/BMI-Certification-.git" target="_blank">
                    <img src="GitHub.webp" alt="GitHub" class="w-[70px] mx-auto mt-2 hover:w-[80px]">
                </a>
            </div>
            
            <div class="bg-white p-5 text-center h-auto rounded-3xl shadow-lg">
                <img src="quizJS.png" alt="" class="h-[200px] w-full object-cover rounded-2xl">
                <div class="text-3xl text-black mt-3 font-bold">Quiz</div>
                <p class="text-black mt-3"><b>Quizo</b> 
                  generates a visually appealing quiz certification page using HTML and Tailwind CSS. It includes a stylized header, certification title, and a decorative SVG badge to represent achievement. The layout is clean, responsive, and ideal for displaying quiz completion awards in a user-friendly format.                </p>
                <div class="mt-2 text-center font-bold text-xl">Tech Stack: HTML, CSS, Tailwind, Javascript</div>
                <a href="https://github.com/Abhayraj11tech/Quiz.git" target="_blank">
                    <img src="GitHub.webp" alt="GitHub" class="w-[70px] mx-auto mt-2 hover:w-[80px]">
                </a>
            </div>
        </div>


        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-2 gap-10 p-5 mt-10 text-black">
            <div class="bg-white p-5 text-center h-auto rounded-3xl shadow-lg">
                <img src="dice.jpg" alt="" class="h-[200px] w-full object-cover rounded-2xl">
                <div class="text-3xl text-black mt-3 font-bold">Two-Player Dice Game</div>
                <p class="text-black mt-3"><b>Epic Dice Battle</b> is a web game where each player rolls a six-sided die five times with animations.</p>
                <div class="mt-2 text-center font-bold text-xl">Tech Stack: HTML, CSS, Tailwind, PHP</div>
                <a href="https://github.com/Abhayraj11tech/Dice-game.git" target="_blank">
                    <img src="GitHub.webp" alt="GitHub" class="w-[70px] mx-auto mt-2 hover:w-[80px]">
                </a>
            </div>

            <div class="bg-white p-5 text-center h-auto rounded-3xl shadow-lg">
                <img src="todo.png" alt="" class="h-[200px] w-full object-cover rounded-2xl">
                <div class="text-3xl text-black mt-3 font-bold">Task Manager</div>
                <p class="text-black mt-3"><b>Tasko</b> allows users to add task in pending section and delete them, making their entry in Completed side in a clean and responsive interface. 
                    Designed to boost productivity, and helps users stay organized by managing daily tasks efficiently.
                </p>
                <div class="mt-3 text-center font-bold text-xl">Tech Stack: HTML, CSS, JavaScript</div>
                <a href="https://github.com/Abhayraj11tech/Task-Manager-.git" target="_blank">
                    <img src="GitHub.webp" alt="GitHub" class="w-[70px] mx-auto mt-2 hover:w-[80px]">
                </a>
            </div>
        </div>






        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-2 gap-10 p-5 mt-10 text-black">
            <div class="bg-white p-5 text-center h-auto rounded-3xl shadow-lg">
                <img src="tic.png" alt="" class="h-[200px] w-full object-cover rounded-2xl">
                <div class="text-3xl text-black mt-3 font-bold">Tic Tac Toe Game</div>
                <p class="text-black mt-3"><b>TicTacTactix</b> 
                    a classic two-player game where participants take turns marking "X" or "O" on a 3x3 grid. The objective is to form a horizontal, vertical, or diagonal line with three of the same symbols. The project can be implemented as a console-based game or a web-based interactive version with buttons and visuals.                    </p>
                <div class="mt-3 text-center font-bold text-xl">Tech Stack: HTML, CSS, Tailwind, JavaScript</div>
                <a href="https://github.com/Abhayraj11tech/Tic-Tac-Toe.git" target="_blank">
                    <img src="GitHub.webp" alt="GitHub" class="w-[70px] mx-auto mt-2 hover:w-[80px]">
                </a>
            </div>
            
            <div class="bg-white p-5 text-center h-auto rounded-3xl shadow-lg">
                <img src="RPS.png" alt="" class="h-[200px] w-full object-cover rounded-2xl">
                <div class="text-3xl text-black mt-3 font-bold"> Rock Paper Scissors Game</div>
                <p class="text-black mt-3"><b>Battle Hands</b> 
                    a simple interactive game where the player chooses Rock, Paper, or Scissors, and the computer randomly selects an option. The winner is determined based on standard game rules, and the result is displayed. The project can be implemented as a console-based game or a web-based interactive version with buttons and visuals.                </p>
                <div class="mt-2 text-center font-bold text-xl">Tech Stack: HTML, CSS, Tailwind, PHP</div>
                <a href="https://github.com/Abhayraj11tech/Rock-Paper-Scissor.git" target="_blank">
                    <img src="GitHub.webp" alt="GitHub" class="w-[70px] mx-auto mt-2 hover:w-[80px]">
                </a>
            </div>
        </div>







        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-2 gap-10 p-5 mt-10 text-black">
            <div class="bg-white p-5 text-center h-auto rounded-3xl shadow-lg">
                <img src="quiz.png" alt="" class="h-[200px] w-full object-cover rounded-2xl">
                <div class="text-3xl text-black mt-3 font-bold">QuizMaster </div>
                <p class="text-black mt-3">
                    is an interactive and engaging web-based quiz application that allows users to test their knowledge on various topics. Users enter their details, answer multiple-choice questions, and submit their responses for evaluation.
                </p>
                <div class="mt-3 text-center font-bold text-xl">Tech Stack: HTML, CSS, Tailwind, PHP</div>
                <a href="https://github.com/Abhayraj11tech/Quiz-.git" target="_blank">
                    <img src="GitHub.webp" alt="GitHub" class="w-[70px] mx-auto mt-2 hover:w-[80px]">
                </a>
            </div>
    
            <div class="bg-white p-5 text-center h-auto rounded-3xl shadow-lg">
                <img src="pizza.png" alt="" class="h-[200px] w-full object-cover rounded-2xl">
                <div class="text-3xl text-black mt-3 font-bold">Pizza web HomePage Demo</div>
                <p class="text-black mt-3"><b> Spizza Hub</b>
                    is a simple homepage UI for a pizza ordering website. The page has a clean and structured layout with a navigation bar at the top, including a logo and a search bar.
                </p>
                <div class="mt-2 text-center font-bold text-xl">Tech Stack: HTML, CSS, Tailwind</div>
                <a href="https://github.com/Abhayraj11tech/PizzaHut-.git" target="_blank">
                    <img src="GitHub.webp" alt="GitHub" class="w-[70px] mx-auto mt-2 hover:w-[80px]">
                </a>
            </div>
        </div>



        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-2 gap-10 p-5 mt-10 text-black">
            <div class="bg-white p-5 text-center h-auto rounded-3xl shadow-lg">
                <img src="pearl.png" alt="" class="h-[200px] w-full object-cover rounded-2xl">
                <div class="text-3xl text-black mt-3 font-bold">E-Commerce </div>
                <p class="text-black mt-3">
                    <b> Pearl ~ Styles in Trend </b>is a modern e-commerce website designed to offer a seamless shopping experience. 
                    Featuring a stylish and user-friendly interface, it showcases a curated collection of trendy fashion items.                </p>
                <div class="mt-3 text-center font-bold text-xl">Tech Stack: HTML, CSS, JavaScript</div>
                <a href="https://github.com/Abhayraj11tech/E-Commerce-website.git" target="_blank">
                    <img src="GitHub.webp" alt="GitHub" class="w-[70px] mx-auto mt-2 hover:w-[80px]">
                </a>
            </div>
    
            <div class="bg-white p-5 text-center h-auto rounded-3xl shadow-lg">
                <img src="stock.png" alt="" class="h-[200px] w-full object-cover rounded-2xl">
                <div class="text-3xl text-black mt-3 font-bold">Stock Market</div>
                <p class="text-black mt-3">
                    <b>     Stock Profit Maximizer  </b>is a web-based tool designed to help investors determine the best days to buy and sell stocks for maximum profit. Given historical stock prices, the system analyzes price trends.
                </p>
                <div class="mt-2 text-center font-bold text-xl">Tech Stack: HTML, CSS, JavaScript</div>
                <a href="https://github.com/Abhayraj11tech/Stock-Market-.git" target="_blank">
                    <img src="GitHub.webp" alt="GitHub" class="w-[70px] mx-auto mt-2 hover:w-[80px]">
                </a>
            </div>
        </div>


        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-2 gap-10 p-5 mt-10 text-black">
            <div class="bg-white p-5 text-center h-auto rounded-3xl shadow-lg">
                <img src="https://cdn.sanity.io/images/9sed75bn/production/7a6cddc4a6cc60c40be31ebc1f9424bf21be0384-896x504.png?auto=format" alt="" class="h-[200px] w-full object-cover rounded-2xl">
                <div class="text-3xl text-black mt-3 font-bold">E-Wallet</div>
                <p class="text-black mt-3">
                    <b>Smart E-Wallet</b> System is a simple web-based banking application that allows users to manage their transactions efficiently. Users can add funds, make debits, and track their account balance in real-time.
                </p>
                <div class="mt-3 text-center font-bold text-xl">Tech Stack: HTML, CSS, JavaScript</div>
                <a href="https://github.com/Abhayraj11tech/E-Wallet.git" target="_blank">
                    <img src="GitHub.webp" alt="GitHub" class="w-[70px] mx-auto mt-2 hover:w-[80px]">
                </a>
            </div>
        
            <div class="bg-white p-5 text-center h-auto rounded-3xl shadow-lg">
                <img src="https://5.imimg.com/data5/GQ/FP/MY-26802338/online-shopping-system.jpg" alt="" class="h-[200px] w-full object-cover rounded-2xl">
                <div class="text-3xl text-black mt-3 font-bold">E-Cart</div>
                <p class="text-black mt-3">
                    <b>Smart Shopping List</b> is a simple and user-friendly web application designed for managing a shopping list efficiently. Users can add items, remove unwanted ones, and view their organized cart in real-time.
                </p>
                <div class="mt-3 text-center font-bold text-xl">Tech Stack: HTML, CSS, JavaScript</div>
                <a href="https://github.com/Abhayraj11tech/E-Cart.git" target="_blank">
                    <img src="GitHub.webp" alt="GitHub" class="w-[70px] mx-auto mt-2 hover:w-[80px]">
                </a>
            </div>
        </div>



        

      




    </section>
      

    <section id="contact" class="mt-10 bg-gray-100 p-5">
        <div class="flex flex-col items-center">
            <div class="flex items-center gap-5 mt-5">
                <img src="https://cdn.jsdelivr.net/npm/lucide-static@0.344.0/icons/phone.svg" alt="" class="w-10 h-10">
                <h2 class="text-black text-4xl font-bold">Get in touch</h2>
            </div>
        
            <div class="mt-10 w-full max-w-lg">
                <form action="form.php" method="post" class="space-y-5">
                    <div>
                        <label class="block text-lg">Name:</label>
                        <input type="text" required placeholder="Your Name" name="name" class="mt-2 p-2 rounded-xl w-full border">
                    </div>
                    <div>
                        <label class="block text-lg">Email:</label>
                        <input type="email" required placeholder="Your email" name="email" class="mt-2 p-2 rounded-xl w-full border">
                    </div>
                    <div>
                        <label class="block text-lg">Message:</label>
                        <textarea name="message" required placeholder="Your message ..." class="mt-2 p-2 rounded-xl w-full h-[150px] border"></textarea>
                    </div>
                    <input type="submit" value="Submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold text-xl rounded-xl p-2 w-full cursor-pointer">
                </form>
            </div>
        </div>
    </section>

    <footer class="bg-gray-900 text-center text-white p-5 text-sm">
        <div class="font-bold">© 2024 Advitiya. All rights reserved.</div>
    </footer>

</body>
</html>
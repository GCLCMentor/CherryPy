<?php include '../auth_check.php';

$userName = isset($_SESSION['name']) ? $_SESSION['name'] : 'Guest';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CherryPy Code Editor - GCLC</title>
    <link rel="icon" type="image/x-icon" href="images/favicon.ico">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/simplescrollbars.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.65.5/codemirror.min.css">
    <link rel="stylesheet" href="theme/3024-day.css">
    <link rel="stylesheet" href="theme/3024-night.css">
    <link rel="stylesheet" href="theme/abbott.css">
    <link rel="stylesheet" href="theme/abcdef.css">
    <link rel="stylesheet" href="theme/ambiance.css">
    <link rel="stylesheet" href="theme/ayu-dark.css">
    <link rel="stylesheet" href="theme/ayu-mirage.css">
    <link rel="stylesheet" href="theme/base16-dark.css">
    <link rel="stylesheet" href="theme/bespin.css">
    <link rel="stylesheet" href="theme/base16-light.css">
    <link rel="stylesheet" href="theme/blackboard.css">
    <link rel="stylesheet" href="theme/cobalt.css">
    <link rel="stylesheet" href="theme/colorforth.css">
    <link rel="stylesheet" href="theme/dracula.css">
    <link rel="stylesheet" href="theme/duotone-dark.css">
    <link rel="stylesheet" href="theme/duotone-light.css">
    <link rel="stylesheet" href="theme/eclipse.css">
    <link rel="stylesheet" href="theme/elegant.css">
    <link rel="stylesheet" href="theme/erlang-dark.css">
    <link rel="stylesheet" href="theme/gruvbox-dark.css">
    <link rel="stylesheet" href="theme/hopscotch.css">
    <link rel="stylesheet" href="theme/icecoder.css">
    <link rel="stylesheet" href="theme/isotope.css">
    <link rel="stylesheet" href="theme/juejin.css">
    <link rel="stylesheet" href="theme/lesser-dark.css">
    <link rel="stylesheet" href="theme/liquibyte.css">
    <link rel="stylesheet" href="theme/lucario.css">
    <link rel="stylesheet" href="theme/material.css">
    <link rel="stylesheet" href="theme/material-darker.css">
    <link rel="stylesheet" href="theme/material-palenight.css">
    <link rel="stylesheet" href="theme/material-ocean.css">
    <link rel="stylesheet" href="theme/mbo.css">
    <link rel="stylesheet" href="theme/mdn-like.css">
    <link rel="stylesheet" href="theme/midnight.css">
    <link rel="stylesheet" href="theme/monokai.css">
    <link rel="stylesheet" href="theme/moxer.css">
    <link rel="stylesheet" href="theme/neat.css">
    <link rel="stylesheet" href="theme/neo.css">
    <link rel="stylesheet" href="theme/night.css">
    <link rel="stylesheet" href="theme/nord.css">
    <link rel="stylesheet" href="theme/oceanic-next.css">
    <link rel="stylesheet" href="theme/panda-syntax.css">
    <link rel="stylesheet" href="theme/paraiso-dark.css">
    <link rel="stylesheet" href="theme/paraiso-light.css">
    <link rel="stylesheet" href="theme/pastel-on-dark.css">
    <link rel="stylesheet" href="theme/railscasts.css">
    <link rel="stylesheet" href="theme/rubyblue.css">
    <link rel="stylesheet" href="theme/seti.css">
    <link rel="stylesheet" href="theme/shadowfox.css">
    <link rel="stylesheet" href="theme/solarized.css">
    <link rel="stylesheet" href="theme/the-matrix.css">
    <link rel="stylesheet" href="theme/tomorrow-night-bright.css">
    <link rel="stylesheet" href="theme/tomorrow-night-eighties.css">
    <link rel="stylesheet" href="theme/ttcn.css">
    <link rel="stylesheet" href="theme/twilight.css">
    <link rel="stylesheet" href="theme/vibrant-ink.css">
    <link rel="stylesheet" href="theme/xq-dark.css">
    <link rel="stylesheet" href="theme/xq-light.css">
    <link rel="stylesheet" href="theme/yeti.css">
    <link rel="stylesheet" href="theme/idea.css">
    <link rel="stylesheet" href="theme/darcula.css">
    <link rel="stylesheet" href="theme/yonce.css">
    <link rel="stylesheet" href="theme/zenburn.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.65.5/codemirror.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.65.5/mode/python/python.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/split.js/1.6.0/split.min.js"></script>
    <script src="js/skulpt.min.js"></script>
    <script src="js/skulpt-stdlib.js"></script>
    <script src="js/simplescrollbars.js"></script>
    <script src="https://apis.google.com/js/api.js" async defer></script>
</head>

<body>
    <div class="container-fluid">
        <div class="row gx-1 justify-content-center">
            <div class="col-md-6" style="flex:1; flex-direction:column; display:flex; justify-content:flex-end; padding-right:20px">
                <div><h2 style="font-family:Lato, Helvetica Neue, Helvetica, Arial, sans-serif; font-weight: bolder; flex:1; flex-direction:row; display:flex; justify-content:flex-start; padding:0 0 0 20px; margin:5px 0 0 0"><span style="color: #FFFFFF; font-weight: lighter;"><span style="color: #f00">Cherry</span>py</span></h2></div>
                <div><h5 style="font-family:Lato, Helvetica Neue, Helvetica, Arial, sans-serif; font-weight:lighter; flex:1; flex-direction:row; display:flex; justify-content:flex-start; padding:0 0 0 20px; margin:5px 0 10px 0; color: white ">Python that runs in your browser!</h5></div>
            </div>
            <div class="col-md-6" style="flex:1; flex-direction:row; display:flex; justify-content:flex-end; padding-right:40px">

            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row gx-1 justify-content-center">
            <div class="col-md-6" style="flex:1; flex-direction:row; display:flex; justify-content:flex-end; padding-right:20px">
            </div>
            <div class="col-md-6" style="flex:1; flex-direction:row; display:flex; justify-content:flex-end; padding-right:20px">
            </div>
            <div class="col-md-6" style="flex:1; flex-direction:row; display:flex; justify-content:flex-end; padding-right:20px">
                <button style="margin-left:10px; font-size: small; height:35px" type="button" class="run" onclick="runCode()"> <span style='font-size:15px;'>&#11208;</span> Run Code</button>
                <button style="margin-left:10px; font-size: small; height:35px" type="button" class="clear" onclick="clearOutput()"> <span style='font-size:15px;'>&#8635;</span> Clear</button>
                <button style="margin-left:10px; font-size: small; height:35px" type="button" class="new" onclick="newSession()"> <span style='font-size:15px;'>&#11199;</span> New Code</button>
                <button id="my-files-button" style="font-size: small; margin-left:10px; height:35px; align-self:end; margin-bottom: 2px" type="button" class="my-files"> <span style='font-size:15px;'>&#128193;</span> My Files</button>
            </div>
        </div>
        <div class="row gx-1 justify-content-center">
            <div class="col-md-6">
                <div id="code-editor">
                    <p style="font-family: Lato, Helvetica Neue, Helvetica, Arial, sans-serif; font-size:18px; font-weight: lighter; justify-content: flex-start; padding: 0 0 0 5px; margin: -15px 0 7px 0">
                        Code Editor
                    </p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="output-container">
                    <p style="font-family: Lato, Helvetica Neue, Helvetica, Arial, sans-serif; font-size:18px; font-weight: lighter; justify-content: flex-start; padding: 0 0 0 5px; margin: -11px 0 7px 0">
                        Output
                    </p>
                    <div id="output"></div>
                    <div class="divider" id="drag"></div>
                    <div id="turtle-canvas"></div>
                </div>
            </div>
        </div>
        <div class="row gx-1 justify-content-center">
            <div class="col-md-1" style="flex:1; flex-direction:row; display:flex; justify-content:flex-start; padding:20px 15px 0 20px">
                <!-- <label for="theme-selector" style="margin:10px 0 0 20px; font-family:Lato, Helvetica Neue, Helvetica, Arial, sans-serif; font-weight:lighter; font-size:small; align-self:end">Theme:</label>
                <select style="height:20px; font-size:x-small; margin:20px 0 0 10px; background:#ededed; border:0; border-color:#ededed " id="theme-selector">
                    <option selected value="blackboard">default</option>
                    &lt;!&ndash; <option value="3024-day">3024-day</option> &ndash;&gt;
                    <option value="3024-night">3024-night</option>
                    <option value="abbott">abbott</option>
                    <option value="abcdef">abcdef</option>
                    <option value="ambiance">ambiance</option>
                    <option value="ayu-dark">ayu-dark</option>
                    <option value="ayu-mirage">ayu-mirage</option>
                    <option value="base16-dark">base16-dark</option>
                    &lt;!&ndash; <option value="base16-light">base16-light</option> &ndash;&gt;
                    <option value="bespin">bespin</option>
                    <option value="blackboard">blackboard</option>
                    <option value="cobalt">cobalt</option>
                    <option value="colorforth">colorforth</option>
                    <option value="darcula">darcula</option>
                    <option value="dracula">dracula</option>
                    <option value="duotone-dark">duotone-dark</option>
                    &lt;!&ndash; <option value="duotone-light">duotone-light</option> &ndash;&gt;
                    &lt;!&ndash; <option value="eclipse">eclipse</option> &ndash;&gt;
                    &lt;!&ndash; <option value="elegant">elegant</option> &ndash;&gt;
                    <option value="erlang-dark">erlang-dark</option>
                    <option value="gruvbox-dark">gruvbox-dark</option>
                    <option value="hopscotch">hopscotch</option>
                    <option value="icecoder">icecoder</option>
                    &lt;!&ndash; <option value="idea">idea</option> &ndash;&gt;
                    <option value="isotope">isotope</option>
                    &lt;!&ndash; <option value="juejin">juejin</option> &ndash;&gt;
                    <option value="lesser-dark">lesser-dark</option>
                    <option value="liquibyte">liquibyte</option>
                    <option value="lucario">lucario</option>
                    <option value="material">material</option>
                    <option value="material-darker">material-darker</option>
                    <option value="material-palenight">material-palenight</option>
                    <option value="material-ocean">material-ocean</option>
                    <option value="mbo">mbo</option>
                    <option value="mdn-like">mdn-like</option>
                    <option value="midnight">midnight</option>
                    <option value="monokai">monokai</option>
                    <option value="moxer">moxer</option>
                    &lt;!&ndash; <option value="neat">neat</option> &ndash;&gt;
                    &lt;!&ndash; <option value="neo">neo</option> &ndash;&gt;
                    <option value="night">night</option>
                    <option value="nord">nord</option>
                    <option value="oceanic-next">oceanic-next</option>
                    <option value="panda-syntax">panda-syntax</option>
                    <option value="paraiso-dark">paraiso-dark</option>
                    &lt;!&ndash; <option value="paraiso-light">paraiso-light</option> &ndash;&gt;
                    <option value="pastel-on-dark">pastel-on-dark</option>
                    <option value="railscasts">railscasts</option>
                    <option value="rubyblue">rubyblue</option>
                    <option value="seti">seti</option>
                    <option value="shadowfox">shadowfox</option>
                    <option value="solarized dark">solarized dark</option>
                    <option value="solarized light">solarized light</option>
                    &lt;!&ndash; <option value="the-matrix">the-matrix</option> &ndash;&gt;
                    <option value="tomorrow-night-bright">tomorrow-night-bright</option>
                    <option value="tomorrow-night-eighties">tomorrow-night-eighties</option>
                    &lt;!&ndash; <option value="ttcn">ttcn</option> &ndash;&gt;
                    <option value="twilight">twilight</option>
                    <option value="vibrant-ink">vibrant-ink</option>
                    &lt;!&ndash; <option value="xq-dark">xq-dark</option> &ndash;&gt;
                    &lt;!&ndash; <option value="xq-light">xq-light</option> &ndash;&gt;
                    <option value="yeti">yeti</option>
                    <option value="yonce">yonce</option>
                    <option value="zenburn">zenburn</option>
                </select>-->
                <img class=image src="images/logo_cerezos_white.png" alt="Gimnasio Campestre Los Cerezos" width="55px" height="67px"><p style="font-family:Lato, Helvetica Neue, Helvetica, Arial, sans-serif; font-size: small; font-weight:lighter; flex:1; flex-direction:row; display:flex; justify-content:flex-start; padding:20px 0 0 20px; margin:10px 0 0 0; color: white ">Gimnasio Campestre Los Cerezos - 2024<br>Powered by Mr. Santos M. - Coding Area</p>
                <div class="col-md-2" style="flex:1; flex-direction:row; display:flex; justify-content:flex-end; padding: 20px 0 0 20px">
                    <button style="margin-left:10px; height:35px; font-size: small" type="button" class="colab" onclick="redirectColab()"> <svg width="24" height="24" viewBox="0 0 1000 1000" xmlns="http://www.w3.org/2000/svg"><path d=" M 665 375C 633 375 602 388 579 411C 556 434 543 465 543 498C 543 530 556 561 579 584C 602 607 633 620 665 620C 698 620 729 607 752 584C 775 561 788 530 788 498C 788 430 733 375 665 375C 665 375 665 375 665 375M 338 261C 390 261 440 278 481 310C 481 310 424 411 424 411C 401 388 370 375 338 375C 305 375 274 388 251 411C 228 434 215 465 215 498C 215 530 228 561 251 584C 274 607 305 620 338 620C 369 620 399 608 422 587C 422 587 480 686 480 686C 439 717 389 734 338 734C 275 734 215 709 171 665C 126 620 101 560 101 498C 101 367 207 261 338 261C 338 261 338 261 338 261M 665 261C 796 261 902 367 902 498C 902 628 796 734 665 734C 603 734 543 709 498 665C 454 620 429 560 429 498C 429 367 535 261 665 261C 665 261 665 261 665 261"/></svg> Google Colab</button>
                </div>
            </div>

            <div class="col-md-6" style="flex:1; flex-direction:row; display:flex; justify-content:flex-end; padding:40px 15px 0 0; align-items: flex-start;">
                <div id="input-form" style="flex:1; flex-direction:row; display:flex; justify-content:flex-end; padding-right:0; flex-wrap: wrap">
                    <!-- <label for="course-name" style = "margin: 10px 0 0 20px; font-family: Lato, Helvetica Neue, Helvetica, Arial, sans-serif; font-weight: lighter; align-self:end">Course:</label>
                        <input style="height:25px; margin:15px 0 0 10px; width: 120px" type="text" id="course-name" placeholder="Enter your course"><br> -->
                    <label for="course-selector" style="margin:10px 0 0 20px; font-family:Lato, Helvetica Neue, Helvetica, Arial, sans-serif; font-weight:lighter; font-size:small; align-self:end">Course:</label>
                    <select style="height:25px; margin:15px 0 0 10px; background:#ededed; font-size:small; border:0; border-color:#ededed" id="course-selector">
                        <option value=""></option>
                        <option value="free">free</option>
                        <option value="6A">6th A</option>
                        <option value="6B">6th B</option>
                        <option value="7A">7th A</option>
                        <option value="7B">7th B</option>
                    </select>

                    <label for="student-name" style = "margin: 10px 0 0 20px; font-family: Lato, Helvetica Neue, Helvetica, Arial, sans-serif; font-weight: lighter; font-size:small; align-self:end">Student:</label>
                    <input style="height:25px; margin:15px 0 0 10px; width: 150px; background:#ededed; font-size:small; border:0; border-color:#ededed" type="text" id="student-name" value="<?php echo htmlspecialchars($userName); ?>" readonly><br>

                    <label for="exercise-name" style = "margin: 10px 0 0 20px; font-family: Lato, Helvetica Neue, Helvetica, Arial, sans-serif; font-weight: lighter; font-size:small; align-self:end">Exercise:</label>
                    <input style="height:25px; margin:15px 0 0 10px; width: 150px; background:#ededed; font-size:small; border:0; border-color:#ededed" type="text" id="exercise-name" placeholder="Enter exercise name"><br>

                    
                    <button style="font-size: x-small; margin-left:30px !important; height:35px; align-self:end; margin-bottom: 2px" type="button" class="save" onclick="saveCode()"> <span style='font-size:15px;'>&#9112;</span> Save</button>
                    <button id="download-button" style="font-size: x-small; margin-left:10px; height:35px; align-self:end; margin-bottom: 2px" type="button" class="download" onclick="downloadFile()"> <span style='font-size:15px;'>&#8628;</span> Download .py</button>
                    <button id="share-button" style="font-size: x-small; margin-left:10px; height:35px; align-self:end; margin-bottom: 2px" type="button" class="share" onclick="shareURL()"> <span style='font-size:15px;'>&#8644;</span> Share URL</button>
                </div>
            </div>
            </div>

        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 text-center"></div>
                </div>
            </div>
        </footer>
    </div>

    <script>
        const drag = document.getElementById('drag');
        const output = document.getElementById('output');
        const turtleCanvas = document.getElementById('turtle-canvas');
        // --- ¡NUEVO! Variable global para el nombre de archivo válido ---
        let currentFilename = null;
        let isCodeSaved = false; // <-- Rastrea si el código actual está guardado o no.

        let isDragging = false;

        drag.addEventListener('mousedown', function (e) {
            isDragging = true;
        });

        document.addEventListener('mousemove', function (e) {
            if (!isDragging) return;
            const containerHeight = document.querySelector('.output-container').offsetHeight;
            const offsetY = e.clientY - document.querySelector('.output-container').offsetTop;
            const percentage = (offsetY / containerHeight) * 100;
            output.style.height = percentage + '%';
            turtleCanvas.style.height = (100 - percentage) + '%';
        });

        document.addEventListener('mouseup', function () {
            isDragging = false;
        });

        let isRunning = false; // Flag to track execution state
        let shouldStop = false; // Flag to indicate if execution should stop

        const editor = CodeMirror(document.getElementById('code-editor'), {
            /*value: `# This is just an initial code snippet that can be helpful for you.\n# You can delete it to start your own project.\n\nimport turtle\n\n# Print a welcome message\nprint("Welcome to CherryPy Web Code Editor!")\n\n# Set up the screen\ns = turtle.Screen()\ns.setup(400,400) #Max dimensions 893,570\ns.bgcolor("#f8f8f8")\n\n# Set up the turtle\nt = turtle.Turtle()\nt.speed(3)  # 1:slowest, 3:slow, 5:normal, 10:fast, 0:fastest\n\n# Draw a square\nfor i in range(4):\n\tt.forward(100)\n\tt.left(90)\n\n# Finish turtle graphics\nturtle.done()`,*/
            mode: "python",
            lineNumbers: true,
            theme: "blackboard",
            lineWrapping: true,  // Enable line wrapping
            indentUnit: 4,
            tabSize: 4,
            scrollbarStyle: "simple",
            inputStyle: "textarea",
            cursorBlinkRate: 300,
            autocorrect: true,
            matchBrackets: true,
            closeBrackets: true
        });

        // Se activa cada vez que el código en el editor es modificado.
        editor.on('change', function() {
            // Si el estado era "guardado", lo cambia a "no guardado"
            // y deshabilita los botones.
            isCodeSaved = false;
        });

        // Check if it's a new session
        const urlParams = new URLSearchParams(window.location.search);
        const isNewSession = urlParams.get('new_session');

        if (isNewSession === 'true') {
            // Set empty content for new session
            editor.setValue('');
        } else {
            // Set default content for normal load
            editor.setValue(`# This is just an initial code snippet that can be helpful for you.\n# You can delete it to start your own project.\n\nimport turtle\n\n# Print a welcome message\nprint("Welcome to CherryPy Web Code Editor!")\n\n# Set up the screen\ns = turtle.Screen()\ns.setup(400,400) #Max dimensions 893,570\ns.bgcolor("#f8f8f8")\n\n# Set up the turtle\nt = turtle.Turtle()\nt.speed(3)  # 1:slowest, 3:slow, 5:normal, 10:fast, 0:fastest\n\n# Draw a square\nfor i in range(4):\n\tt.forward(100)\n\tt.left(90)\n\n# Finish turtle graphics\nturtle.done()`);
        }

        /*document.getElementById('theme-selector').addEventListener('change', function () {
            const theme = this.value;
            editor.setOption('theme', theme);
        });*/

        function outf(text) {
            const outputArea = document.getElementById("output");
            // Replace escape sequences with HTML equivalents
            const formattedText = text
                .replace(/\\/g, '\\')  // Backslash
                .replace(/\'/g, '&#39;') // Single Quote
                .replace(/\"/g, '&quot;') // Double Quote
                .replace(/\n/g, '<br>')  // New Line
                .replace(/\r/g, '')      // Carriage Return (optional, often not needed)
                .replace(/\t/g, '&nbsp;&nbsp;&nbsp;&nbsp;') // Tab
                .replace(/\b/g, '')     // Backspace (optional, often not needed)
                .replace(/ /g, '&nbsp;'); // Space
            outputArea.innerHTML += formattedText;
        }

        function builtinRead(x) {
            if (Sk.builtinFiles === undefined || Sk.builtinFiles["files"][x] === undefined)
                throw "Error reading file: '" + x + "'";
            return Sk.builtinFiles["files"][x];
        }

        function runCode() {
            const prog = editor.getValue();
            const outputArea = document.getElementById("output");
            const turtleCanvas = document.getElementById("turtle-canvas");
            outputArea.innerHTML = '';

            Sk.pre = "output";

            Sk.configure({
                output: outf,
                read: builtinRead,
                inputfun: function (prompt) {
                    return new Promise((resolve) => {
                        outputArea.innerHTML += prompt;
                        setTimeout(() => {
                            const inputCallback = resolve;
                            const userInput = window.prompt(prompt);
                            outputArea.innerHTML += userInput + '<br>';
                            resolve(userInput);
                        }, 0);
                    });
                },
                inputfunTakesPrompt: true  // Ensure this is set to true
            });

            (Sk.TurtleGraphics || (Sk.TurtleGraphics = {})).target = "turtle-canvas";

            isRunning = true; // Set the flag to true
            shouldStop = false; // Reset the stop flag

            const myPromise = Sk.misceval.asyncToPromise(() =>
                Sk.importMainWithBody("<stdin>", false, prog, true)
            );

            myPromise.then(
                (mod) => {
                    console.log("Execution successful.");
                    isRunning = false; // Reset the flag,
                },
                (err) => {
                    // Enhanced error handling
                    const errorMessage = `Error: ${err.toString()}`;
                    outputArea.innerHTML += `<span style="color: red;">${errorMessage}</span><br>`;
                    isRunning = false; // Reset the flag
                }
            );

            // Check for the stop condition during execution
            const checkStopCondition = setInterval(() => {
                if (shouldStop) {
                    console.log("Execution stopped.");
                    isRunning = false; // Reset the flag
                    clearInterval(checkStopCondition); // Stop checking
                }
            }, 100); // Check every 100ms
        }

        function clearOutput() {
            const outputArea = document.getElementById("output");
            const turtleCanvas = document.getElementById("turtle-canvas");

            // Clear the content of the output and turtle canvas
            outputArea.innerHTML = '';
            turtleCanvas.innerHTML = '';
        }

        function stopExecution() {
            if (isRunning) {
                shouldStop = true; // Set the flag to stop execution
                alert("Execution will stop after the current operation.");
            }
        }

        // Declaración de la variable global
        let filename;
        let urlTemp;

        function saveCode() {
            const code = editor.getValue(); // Obtener el código del editor
            const studentName = document.getElementById("student-name").value;
            const courseName = document.getElementById("course-selector").value;
            const exerciseName = document.getElementById("exercise-name").value;

            // Validar que los campos course-selector y exercise-name no estén vacíos o sean solo espacios
            if (!courseName || courseName.trim() === "") {
                alert("The 'Course' field is required and cannot be empty.");
                return; // Detener la ejecución si el campo está vacío
            }

            if (!exerciseName || exerciseName.trim() === "") {
                alert("The 'Exercise' field is required and cannot be empty or just spaces.");
                return; // Detener la ejecución si el campo está vacío o solo tiene espacios
            }

            // Función para limpiar caracteres especiales
            function cleanString(str) {
                return str
                    .replace(/[ñáéíóúÁÉÍÓÚ]/g, char => {
                        const replacements = {
                            'ñ': 'n', 'á': 'a', 'é': 'e', 'í': 'i', 'ó': 'o', 'ú': 'u',
                            'Á': 'A', 'É': 'E', 'Í': 'I', 'Ó': 'O', 'Ú': 'U'
                        };
                        return replacements[char] || char;
                    }) // Reemplazar caracteres especiales
                    .replace(/\s+/g, '-') // Reemplazar espacios por guiones
                    .replace(/[^a-zA-Z0-9-_]/g, ''); // Eliminar caracteres no válidos
            }

            // Limpiar los nombres
            const cleanStudentName = cleanString(studentName);
            const cleanCourseName = cleanString(courseName);
            const cleanExerciseName = cleanString(exerciseName);

            // --- ¡CAMBIO PRINCIPAL AQUÍ! ---
            // Generamos el nombre de archivo ESTABLE, sin el timestamp.
            // Este será el nombre del archivo "maestro".
            const filename = `${cleanCourseName}_${cleanStudentName}_${cleanExerciseName}.py`;

            // Guardar en el servidor
            fetch('save_code.php', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json'
                },
                body: JSON.stringify({ code: code, filename: filename })
            })
                .then(response => {
                    console.log('Response status:', response.status);
                    return response.json();
                })
                .then(data => {
                    if (data.authUrl) {
                        // Redirigir al usuario a la URL de autorización
                        window.location.href = data.authUrl;
                    } else if (data.error) {
                        alert('Error saving file on server: ' + data.error);
                    } else {
                        alert(`File saved on server successfully!\nNamed as: ${filename}.`);

                        // --- LÓGICA AÑADIDA ---
                        currentFilename = filename; // Guardamos el nombre válido
                        document.getElementById('download-button').disabled = false; // Habilitamos el botón
                        document.getElementById('share-button').disabled = false; // Habilitamos el botón
                        isCodeSaved = true; // <-- Valida que el código ha sido guardado.

                        // --- MEJORA DE USABILIDAD ---
                        // Actualizamos la URL del navegador para que refleje el archivo guardado,
                        // sin necesidad de recargar la página.
                        const newUrl = `${window.location.protocol}//${window.location.host}${window.location.pathname}?file=${encodeURIComponent(filename)}`;
                        window.history.pushState({ path: newUrl }, '', newUrl);
                    }

                /*.then(data => {
                    if (data.error) {
                        alert('Error saving code on server: \n' + data.error);
                    } else {
                        alert(`Code saved on server successfully!\nNamed as: ${filename}.`);
                        console.log('File URL:', data.url);
                        if (data.driveFileId) {
                            console.log('Google Drive File ID:', data.driveFileId);
                        }
                    }*/

                /*.then(data => {
                    console.log('Response data:', data);
                    if (data.url) {
                        alert(`Code saved! Named as: ${filename}`);
                    } else {
                        alert('Error saving code: ' + data.error);
                    }*/
                })
                .catch(error => {
                    console.error('Error:', error);
                    alert('Error saving file at the server.');
                });
        }

        function downloadFile() {
            if (!currentFilename) {
                alert("You must SAVE the file first before downloading.");
                return;
            }

            // Verificamos si el código ha sido guaradado primero.
            if (!isCodeSaved) {
                alert("Changes have been made to your code. You must SAVE these changes on the server before downloading the file.");
                return; // Detenemos la función aquí
            }

            const code = editor.getValue(); // Get the code from the editor
            const blob = new Blob([code], {type: 'text/python' }); // Create a Blob from the code
            const url = URL.createObjectURL(blob); // Create a URL for the Blob
            const a = document.createElement('a'); // Create a temporary anchor element
            a.href = url; // Set the URL as the href
            a.download = currentFilename; // Set the file name
            document.body.appendChild(a); // Append the anchor to the body
            a.click(); // Programmatically click the anchor to trigger the download
            document.body.removeChild(a); // Remove the anchor from the document
            URL.revokeObjectURL(url); // Release the Blob URL
        }

        /*function shareURL() {
            const code = editor.getValue(); // Get the code from the editor
            const blob = new Blob([code], { type: 'text/python' }); // Create a Blob from the code
            const url = URL.createObjectURL(blob); // Create a URL for the Blob
            const a = document.createElement('a'); // Create a temporary anchor element
            a.href = url; // Set the URL as the href
            a.download = 'shared_code.py'; // Set the file name
            document.body.appendChild(a); // Append the anchor to the body
            a.click(); // Programmatically click the anchor to trigger the download
            document.body.removeChild(a); // Remove the anchor from the document
            URL.revokeObjectURL(url); // Release the Blob URL
        }*/

        function shareURL() {
            if (!currentFilename) {
                alert("You must SAVE the file first before sharing.");
                return;
            }

            // Verificamos si el código ha sido guaradado primero.
            if (!isCodeSaved) {
                alert("Changes have been made to your code. You must SAVE these changes on the server before share the file.");
                return; // Detenemos la función aquí
            }

            // Assuming the filename is already saved on the server
            /*fetch(`/get_code.php?file=${encodeURIComponent(filename)}`, {
                method: 'GET'
            })
                .then(response => {
                    if (response.ok) {
                        return response.json();
                    } else {
                        throw new Error('File not found');
                    }
                })
                .then(data => {
                    alert(`Code shared! Access it at: ${data.url}`);
                    navigator.clipboard.writeText(data.url); // Copy the URL to clipboard
                })
                .catch(error => {
                    console.error('Error:', error);
                    alert('Error sharing code.');
                });*/

                /*const currentURL = window.location.origin.toString(); // Get the full URL of the current page
                console.log(currentURL); // Log the URL to the console

                // Crear URL segura con encodeURIComponent
                urlTemp = `${currentURL}/cherrytools/cherrypy/index.php?file=${encodeURIComponent(filename)}`;*/

            // Construye la URL usando la variable global, que es la fuente confiable del nombre del archivo.
            const urlToShare = `${window.location.origin}/cherrytools/cherrypy/index.php?file=${encodeURIComponent(currentFilename)}`;


            navigator.clipboard.writeText(urlToShare)
                    .then(() => {
                        alert(`URL copied to clipboard.\nYou can share it now: ${urlToShare}`);
                    })
                    .catch(err => {
                        console.error('Error copying to clipboard:', err);
                        alert('Failed to copy URL.');
                    });
            }

        window.onload = function () {
            const urlParams = new URLSearchParams(window.location.search);
            const filenameFromUrl = urlParams.get('file');

            if (filenameFromUrl) {
                // Usamos get_code.php para cargar el archivo de forma segura
                fetch(`get_code.php?file=${encodeURIComponent(filenameFromUrl)}`)
                    .then(response => {
                        if (response.ok) {
                            return response.text(); // Get the code as text
                        } else {
                            throw new Error('File not found.');
                        }
                    })
                    .then(code => {
                        editor.setValue(code); // Load the code into the editor

                        // --- LÓGICA AÑADIDA PARA RELLENAR LOS CAMPOS ---
                        // 1. Limpiamos la extensión .py del nombre del archivo
                        const cleanFilename = filenameFromUrl.replace('.py', '');
                        // 2. Dividimos el nombre del archivo en sus 3 partes
                        const parts = cleanFilename.split('_');

                        // 3. Verificamos que el nombre del archivo tenga el formato esperado
                        if (parts.length >= 3) {
                            const course = parts[0];
                            const exerciseName = parts[2];

                            // 4. Asignamos los valores a los campos del formulario
                            document.getElementById('course-selector').value = course;
                            document.getElementById('exercise-name').value = exerciseName;
                        }
                        // --- FIN DE LA LÓGICA AÑADIDA ---


                        // --- LÓGICA AÑADIDA ---
                        currentFilename = filenameFromUrl; // Guardamos el nombre válido
                        document.getElementById('download-button').disabled = false; // Habilitamos el botón
                        document.getElementById('share-button').disabled = false; // Habilitamos el botón
                        isCodeSaved = true; // <-- Valida que el código ha sido guardado.
                    })
                    .catch(error => {
                        console.error('Error:', error);
                        alert('Error loading code. There is no code with this file name. Please check the file name.');
                    });
            }
        };

        function newSession() {
            // Show a confirmation dialog
            const userConfirmed = confirm("Make sure to save your work before continuing... Do you want to proceed?");

            if (userConfirmed) {
                // Clear the code editor
                editor.setValue(''); // Clear the CodeMirror editor

                // Clear the output and turtle canvas
                clearOutput();

                // Redirigir a la página principal sin parámetros
                const baseUrl = `${window.location.origin}/cherrytools/cherrypy/index.php?new_session=true`;
                window.location.href = baseUrl; // Asegúrate de que no haya parámetros en la URL
            }
        }

        /*function shareURL() {
            const code = editor.getValue(); // Get the code from the editor
            const studentName = document.getElementById("student-name").value || "UnnamedStudent";
            const courseName = document.getElementById("course-selector").value || "UnnamedCourse";
            const exerciseName = document.getElementById("exercise-name").value || "UnnamedExercise";
            const uniqueCode = Date.now().toString(); // Generate a unique code based on the current timestamp

            const filename = `${courseName}_${studentName}_${exerciseName}_${uniqueCode}.py`;

            fetch('/save_code', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json'
                },
                body: JSON.stringify({ code: code })
            })
                .then(response => response.json())
                .then(data => {
                    if (data.url) {
                        alert(`Code shared! Access it at: ${data.url}`);
                    } else {
                        alert('Error sharing code: ' + data.error);
                    }
                })
                .catch(error => {
                    console.error('Error:', error);
                    alert('Error sharing code.');
                });
        }*/

        // You may need to implement additional logic to actually stop the turtle graphics

        /*const toggleButton = document.getElementById('theme-toggle');
        const body = document.body;

        toggleButton.addEventListener('click', () => {
            body.classList.toggle('dark-mode');
            body.classList.toggle('light-mode');
        });

        // Set initial theme
        body.classList.add('dark-mode');*/

        // Función que redirige a una URL específica
        function redirectColab() {
            const url2 = "https://drive.google.com/drive/folders/17C2Ru_YMrasVnQOpogNbKwZGkP4bPckK?usp=drive_link";
            window.open(url2, '_blank');
        }

        /*function redirectColab() {
            const code = editor.getValue();
            const colabUrl = 'https://colab.research.google.com/notebook#create=true&source=github';
            const notebookContent = {
                cells: [
                    {
                        cell_type: 'code',
                        source: code.split('\n'),
                        metadata: {},
                        outputs: [],
                        execution_count: null
                    }
                ],
                metadata: {},
                nbformat: 4,
                nbformat_minor: 2
            };

            const blob = new Blob([JSON.stringify(notebookContent)], { type: 'application/json' });
            const url = URL.createObjectURL(blob);
            window.open(`${colabUrl}&url=${url}`, '_blank');
        }*/

        // --- INICIA EL CÓDIGO CORREGIDO PARA LA VENTANA MODAL "MIS ARCHIVOS" ---

        // Espera a que todo el HTML de la página esté cargado antes de ejecutar el código.
        document.addEventListener('DOMContentLoaded', (event) => {

            // Obtener los elementos de la modal (ahora se hace de forma segura)
            const modal = document.getElementById('filesModal');
            const myFilesBtn = document.getElementById('my-files-button');
            const closeBtn = document.querySelector('.close-button');
            const fileListContainer = document.getElementById('fileListContainer');

            // Si algún elemento no se encuentra, detenemos para evitar errores.
            if (!modal || !myFilesBtn || !closeBtn || !fileListContainer) {
                console.error('No se pudieron encontrar los elementos de la modal. Revisa los IDs en el HTML.');
                return;
            }

            // Función para abrir la modal y buscar los archivos
            myFilesBtn.onclick = function() {
                // Mostrar un mensaje de "Cargando..."
                fileListContainer.innerHTML = '<p>Buscando archivos...</p>';
                modal.style.display = 'block';

                // Llamada al script PHP (sin parámetros, usa la sesión)
                fetch(`list_files.php`)
                    .then(response => response.json())
                    .then(files => {
                        fileListContainer.innerHTML = ''; // Limpiar el contenedor
                        if (files.error) {
                            fileListContainer.innerHTML = `<p>Error: ${files.error}</p>`;
                        } else if (files.length === 0) {
                            fileListContainer.innerHTML = '<p>No se encontraron archivos para este estudiante.</p>';
                        } else {
                            const ul = document.createElement('ul');
                            files.forEach(file => {
                                const parts = file.split('_');
                                const exerciseName = parts.length > 2 ? parts[2].replace('.py', '') : file;

                                const li = document.createElement('li');
                                const a = document.createElement('a');
                                a.href = `index.php?file=${encodeURIComponent(file)}`;
                                a.textContent = exerciseName;
                                li.appendChild(a);
                                ul.appendChild(li);
                            });
                            fileListContainer.appendChild(ul);
                        }
                    })
                    .catch(error => {
                        console.error('Error fetching files:', error);
                        fileListContainer.innerHTML = '<p>Ocurrió un error al buscar los archivos.</p>';
                    });
            }

            // Función para cerrar la modal al hacer clic en la 'X'
            closeBtn.onclick = function() {
                modal.style.display = 'none';
            }

            // Función para cerrar la modal al hacer clic fuera de ella
            window.onclick = function(event) {
                if (event.target == modal) {
                    modal.style.display = 'none';
                }
            }
        });

        // --- TERMINA EL CÓDIGO PARA LA VENTANA MODAL ---


    </script>

    <div id="filesModal" class="modal">
        <div class="modal-content">
            <span class="close-button">&times;</span>
            <h2>My files</h2>
            <div id="fileListContainer">
            </div>
        </div>
    </div>

</body>
</html>
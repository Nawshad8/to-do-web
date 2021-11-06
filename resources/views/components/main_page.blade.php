<div>

    <head>

        <!-- Styles -->
        <style>
            
            .round {
                position: relative;
            }

            .round label {
                background-color: #050A2E;
                border: 2px solid #ccc;
                border-radius: 70%;
                cursor: pointer;
                height: 28px;
                left: 0;
                position: absolute;
                top: 0;
                width: 28px;
            }

            .round label:after {
                border: 2px solid #fff;
                border-top: none;
                border-right: none;
                content: "";
                height: 6px;
                left: 7px;
                opacity: 0;
                position: absolute;
                top: 8px;
                transform: rotate(-45deg);
                width: 12px;
            }

            .round input[type="checkbox"] {
                visibility: hidden;
            }

            .round input[type="checkbox"]:checked + label {
                background-color: #66bb6a;
                border-color: #66bb6a;
            }

            .round input[type="checkbox"]:checked + label:after {
                opacity: 1;
            }

            /* general styling */
            html, body {
                height: 100%;
                margin: 0;
            }

            body {
                background-color: #050A2E;
                color: #BBBFCB;
                -webkit-box-align: center;
                -ms-flex-align: center;
                align-items: center;
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
            }

            .container {
                margin: 0 auto;
            }

        </style>

        <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>

    </head>

    <body>

        <main>

            {{-- Title div --}}
            <div class="title">
                {{-- <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="suitcase" class="svg-inline--fa fa-suitcase" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path fill="currentColor" d="M0 144v288C0 457.6 22.41 480 48 480H96V96H48C22.41 96 0 118.4 0 144zM336 0h-160C150.4 0 128 22.41 128 48V480h256V48C384 22.41 361.6 0 336 0zM336 96h-160V48h160V96zM464 96H416v384h48c25.59 0 48-22.41 48-48v-288C512 118.4 489.6 96 464 96z"></path></svg> --}}
                <i class="fa-solid fa-suitcase"></i>
                <img src="" alt="Suitcase">
                <h2>Work</h2>
                <img src="" alt="Vertical triple dots">



            </div>

            {{-- Today div --}}
            <div>
                
                <h2>Today</h2>

                {{-- Triple #Checkbox --}}

                <div class="container">
                    <div class="round">
                      <input type="checkbox" checked id="checkbox" />
                      <label for="checkbox">Pay internet</label>
                    </div>
                </div>

                {{-- NOTE : If using multiple checkboxes it checks in and out only the first one of the list --}}

                <p> Get the documents from home</p>
                <p>Charge my watch</p>

            </div>

            {{-- Tomorrow div --}}
            <div>
                
                <h2>Tomorrow</h2>

                {{-- #Checkbox --}}

                <p>Reelase cr.fetbiko.ru</p>

            </div>

            {{-- Next week div --}}
            <div>
                
                <h2>Next Week</h2>

                {{-- #Checkbox --}}

                <p>Release todo app</p>

            </div>

        </main>

    </body>

</div>
<div>

    <head>
        <!-- Styles -->
        <style>

            h1{
                margin-right: 20px;
            }

            .round {
                position: relative;
                margin-bottom: 80px;
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

            .circle{
                background-color: white;
                height: 30px;
                width: 30px;
                border-radius: 50%;

            }
            .circle img{
                display: block;
                margin-left: auto;
                margin-right: auto;
                padding-top: 2px;
            }

        </style>

    </head>

    <body>

        <main>

            {{-- Title div --}}

                <img class="circle" src="https://img.icons8.com/material-outlined/24/000000/suitcase.png"/>
                <h1>Work</h1>


            {{-- Today div --}}
            <div>
                <h2>Today</h2>
                {{-- Triple #Checkbox --}}
                    <div class="round">
                      <input type="checkbox"  id="checkbox1" />
                      <label for="checkbox1">Pay internet</label>
                    </div>

                <div class="round">
                    <input type="checkbox"  id="checkbox2" />
                    <label for="checkbox2">Get the documents from home</label>
                </div>

                <div class="round">
                    <input type="checkbox"  id="checkbox3" />
                    <label for="checkbox3">Charge my watch</label>
                </div>
            </div>

            {{-- Tomorrow div --}}
            <div>
                <h2>Tomorrow</h2>
                {{-- #Checkbox --}}
                <div class="round">
                    <input type="checkbox"  id="checkbox4" />
                    <label for="checkbox4">Reelase cr.fetbiko.ru</label>
                </div>
            </div>

            {{-- Next week div --}}
            <div>

                <h2>Next Week</h2>

                {{-- #Checkbox --}}

                <div class="round">
                    <input type="checkbox"  id="checkbox5" />
                    <label for="checkbox5">Release todo app</label>
                </div>

            </div>

        </main>

    </body>

</div>

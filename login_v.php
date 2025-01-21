<style type="text/css">
    @media screen{
        @import url("https://fonts.googleapis.com/css?family=Raleway:900&display=swap");

            body {
                margin: 0px;
                background-color: #a47864;
            }

            #container{
                margin-top: 15rem;
                filter: url(#threshold) blur(0.6px);
            }

            #text1 {
                position: absolute;
                width: 100%;
                display: inline-block;

                font-family: "Raleway", sans-serif;
                font-size: 80pt;

                text-align: center;

                user-select: none;
                color: #f7637e;
            }

            #text2 {
                position: absolute;
                width: 100%;
                display: inline-block;

                font-family: "Raleway", sans-serif;
                font-size: 80pt;

                text-align: center;

                user-select: none;
                color: #f7637e;
            }

            .card{
                margin-top: 5rem;
            }

            .form-control:{
                color: #a47864;
            }   
    }

    @media print{
        body{
            background-color: white;
        }
    }
</style>
<div class="row">
    <div class="col-md-6">
        <!-- <div id="container">
            <span id="text1"></span>
            <span id="text2"></span>
        </div>

        <svg id="filters">
            <defs>
                <filter id="threshold">
                    <feColorMatrix in="SourceGraphic" type="matrix" values="1 0 0 0 0
                          0 1 0 0 0
                          0 0 1 0 0
                          0 0 0 255 -140" />
                </filter>
            </defs>
        </svg>  -->
        <div class="text-center">
            <div class="card" style="background-color: transparent; border-color: transparent;">
                <div class="card-body">
                    <img src="../img/Diamante.png" style="height: 200pt;" id="idimglogo">
                    <h2 style="margin-top: .5em;">Check & Deposit Compiler</h2>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-5">
        <div class="card" style="background-color: #5c5856; 
                padding: 15px; box-shadow:
            0 2.8px 2.2px rgba(0, 0, 0, 0.034),
            0 6.7px 5.3px rgba(0, 0, 0, 0.048),
            0 12.5px 10px rgba(0, 0, 0, 0.06),
            0 22.3px 17.9px rgba(0, 0, 0, 0.072),
            0 41.8px 33.4px rgba(0, 0, 0, 0.086),
            0 100px 80px rgba(0, 0, 0, 0.12); border-color: #5c5856; border-radius: 0px;">
            <div class="card-body">
                <h1 style="text-align:center;">Log-in</h1>
                <hr>
                <form id="frmInputs">
                    <div class="form-floating">
                        <input type="text" name="txtIdnumber" class="form-control" id="inputnmIdnumber" placeholder="ID Number" autocomplete="off" required>
                        <label for="inputnmIdnumber"># ID No.</label>
                    </div>
                    <div class="form-floating">
                        <input type="password" name="txtPassword" class="form-control" id="inputnmPassword" placeholder="Password" autocomplete="off" required>
                        <label for="inputnmPassword">* Password</label>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-6"><label style="color: black;">Register? </label> <a href="Signupaccount" style="color: maroon;"> 
                        Sign up</a></div>
                        <div class="col-md-6 d-grid gap-2">
                              <button class="btn btn-dark" id="btnLogin" style="font-weight: bolder; color: black;"><img src="../icons/gps.png"> Login</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="col-md-1"></div>
</div>
<script type="text/javascript">
    $("#inputnmIdnumber").focus();
    $(document).ready(function(){
    //         const elts = {
    //         text1: document.getElementById("text1"),
    //         text2: document.getElementById("text2"),
    //     };

    //     const texts = [
    //         "Hi!",
    //         "How",
    //         "are",
    //         "you",
    //         "today?"
    //     ];

    //     const morphTime = 1;
    //     const cooldownTime = 0.25;

    //     let textIndex = texts.length - 1;
    //     let time = new Date();
    //     let morph = 0;
    //     let cooldown = cooldownTime;

    //     elts.text1.textContent = texts[textIndex % texts.length];
    //     elts.text2.textContent = texts[(textIndex + 1) % texts.length];

    //     function doMorph() {
    //         morph -= cooldown;
    //         cooldown = 0;

    //         let fraction = morph / morphTime;

    //         if (fraction > 1) {
    //             cooldown = cooldownTime;
    //             fraction = 1;
    //         }

    //         setMorph(fraction);
    //     }

    //     function setMorph(fraction) {
    //         elts.text2.style.filter = `blur(${Math.min(8 / fraction - 8, 100)}px)`;
    //         elts.text2.style.opacity = `${Math.pow(fraction, 0.4) * 100}%`;

    //         fraction = 1 - fraction;
    //         elts.text1.style.filter = `blur(${Math.min(8 / fraction - 8, 100)}px)`;
    //         elts.text1.style.opacity = `${Math.pow(fraction, 0.4) * 100}%`;

    //         elts.text1.textContent = texts[textIndex % texts.length];
    //         elts.text2.textContent = texts[(textIndex + 1) % texts.length];
    //     }

    //     function doCooldown() {
    //         morph = 0;

    //         elts.text2.style.filter = "";
    //         elts.text2.style.opacity = "100%";

    //         elts.text1.style.filter = "";
    //         elts.text1.style.opacity = "0%";
    //     }

    //     function animate() {
    //         requestAnimationFrame(animate);

    //         let newTime = new Date();
    //         let shouldIncrementIndex = cooldown > 0;
    //         let dt = (newTime - time) / 1000;
    //         time = newTime;

    //         cooldown -= dt;

    //         if (cooldown <= 0) {
    //             if (shouldIncrementIndex) {
    //                 textIndex++;
    //             }

    //             doMorph();
    //         } else {
    //             doCooldown();
    //         }
    //     }

        // animate();

        $(document).on("click","#btnLogin",function(e){
            e.preventDefault();
            empty();
        })

        function empty(){
            var inputnmIdnumber = $("#inputnmIdnumber").val();
            var inputnmPassword = $("#inputnmPassword").val();

            if(inputnmIdnumber==("")>0){
                $("#inputnmIdnumber").focus();
            }else if(inputnmPassword==("")>0){
                $("#inputnmPassword").focus();
            }else{
               userlogin_v();
            }
        }

        function userlogin_v(){
            $.ajax({
                type:'ajax',
                method:'POST',
                url:'<?php echo base_url("Login/userlogin_c"); ?>',
                data:$("#frmInputs").serialize(),
                dataType:'json',
                success:function(response){
                    if(response.success){
                        location.replace("BankMenu");
                    }else{

                    }
                },error:function(response){
                    if(response.success){
                        alert("Erorr to log-in");
                    }
                }
            })
        }

        $('#inputnmIdnumber').keypress(function(e){    
    
            var charCode = (e.which) ? e.which : event.keyCode    
            if (String.fromCharCode(charCode).match(/[^0-9]/g))
            return false;                        

        });
    })
</script>
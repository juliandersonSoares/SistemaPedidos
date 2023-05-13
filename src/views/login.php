<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="../styles/Lvalidation.css">
    <link rel="stylesheet" href="../styles/login.css">
    <link rel="stylesheet" href="../styles/GoogleFonts/GoogleFonts.css">
    <!-- <link rel="stylesheet" href="../styles/bootstrap/Bootstrap@5.2.3.css"> -->
    <title>Login</title>
</head>

<body>
    <div class="container">
        
        <h1 id="TLogin">Faça seu Login</h1>
        <h3 id="SLogin">Informe um login válido</h3>
<form class="form" id="form">
            <div class="form-control">
                <label>Email</label>
                <input type="email" id="email">
                <i class="img-success" ><img src="../images/success-icon.svg" alt=""></i>
                <i class="img-error" ><img src="../images/error-icon.svg" alt=""></i>
                <small id="msg-error">Error Message</small>
                <i class="img-alert"><img src="../images/alert-icon.svg" alt=""></i>
                <small id="msg-alert">Login não Encontrado</small>


            </div>

            <div class="form-control">

                <label>Senha</label>
                <input type="password" id="password">
                <i class="img-success" ><img src="../images/success-icon.svg" alt=""></i>
                <i class="img-error" ><img src="../images/error-icon.svg" alt=""></i>
                <small id="msg-error">Error Message</small>
                <i class="img-alert"><img src="../images/alert-icon.svg" alt=""></i>
                <small id="msg-alert">Login não Encontrado</small>
            </div>

            <button type="submit" >ENTRAR</button>
        </form>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
    </div>
    <script src="../js/Lvalidation.js"></script>
</body>

</html>
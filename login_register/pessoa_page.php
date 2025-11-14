<?php 

session_start();
if (!isset($_SESSION['email'])){
    header("Location: index.php");
    exit();
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pessoa Page</title>
    <link rel="stylesheet" href="style.css">

    <style>
    h1{
        font-size: 50px;
        text-align: center;
    }

    span{
        color: #7494ec;
    }

    .box p{
        font-size: 22px;
    }

    .box button{
    display: block;
    width: 300px;
    margin: 0 auto;
    }

    .box img{
        display: block;
        width: 600px;
        margin: 0 auto;
        border: 5px 5px 5px 5px;
        border-radius: 30%;
        
    }

    form{
        max-width: 500px;
        margin: 0 auto;
        display: flex;
        justify-content: center;
        flex-direction: column;
        gap: 10px;
        margin-top: 40px;
    }

    form input, form textarea{
        width: 100%;
        background-color: #e9dcdc8d;
        border: 0;
        outline: 0;
        padding: 20px 15px;
        border-radius: 15px;
        color: #9e9494ff;
        font-size: 18px;
    }

    form textarea{
        resize: none;
        max-height: 200px;
    }

    form .btn-enviar{
        margin-top: 20px;
        text-align: center;
    }

    form .btn-enviar input{
        width: 100%;
        padding: 12px;
        background: #7494ec;
        border-radius: 6px;
        border: none;
        font-size: 16px;
        color: #ffffffff;
        margin-bottom: 20px;
        cursor: pointer;
        transition: 0.5s;
        font-weight: 500;
    }

    form .btn-enviar input:hover{
    background: #5a7bd8;
    }
    
    </style>

</head>

<body style="background: linear-gradient(to right, #e2e2e2, #c9d6ff);">
    <div class="box">
        <h1>Bem-vindo à <span>Unitec</span></h1>
        <img src="IMG_4973.PNG" alt="Unitec">

        <p>Esta é uma área exclusiva para <span>pessoas</span> cadastradas.</p>

        <h2><?= $_SESSION['name'] ?></h2>

        <p>Nossa empresa é dedicada à abertura e ao atendimento de chamados técnicos.</p>

        <p>Explore nossas funcionalidades e aproveite os benefícios de ser uma pessoa parceira da Unitec.</p>

        <p>Registramos as solicitações dos clientes, encaminhamos para a equipe responsável e acompanhamos até a resolução, garantindo agilidade e suporte sempre que necessário.</p>

    
         <div class="interface">

                <h2 class="titulo"> ABRA SEU <span> CHAMADO</span></h2>

                <form action="https://formsubmit.co/ gabriscosta19@gmail.com" method="post">
                    <input type="text" name="" id="" placeholder="Seu nome completo:" required>
                    <input type="text" name="" id="" placeholder="Seu e-mail:" required>
                    <select name="role" required>
                    <option value="" >---Selecione seu Problema---</option>
                    <option value="empresa">Redes</option>
                    <option value="pessoa">Sistema</option>
                    </select>
                    <input type="text" name="" id="" placeholder="Seu Problema">
                    <textarea name="" id="" placeholder="Detalhe seu Problema" required></textarea>
                    <div class="btn-enviar"><input type="submit" value="ENVIAR">
                
                    <input type="hidden" name="_next" value="http://localhost/login_register/pessoa_page.php">
                    <input type="hidden" name="_captcha" value="false">
                </div>
                </form>
            </div>

       <button onclick="window.location.href='logout.php'">logout</button>
    </div>

</body>
</html>